<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;

use Illuminate\Http\Request;

class TeamMemberController extends Controller
{
    public function createTeam()
    {
        return view('Dashboard.Team.new-team');
    }

    public function teamList()
    {
        $teamMembers = TeamMember::all();
        return view('Dashboard.Team.team-list', compact('teamMembers'));
    }

    public function editTeam($id)
    {
        $teamMember = TeamMember::findOrFail($id);
        return view('Dashboard.Team.edit-team', compact('teamMember'));
    }


    public function storeTeam(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'short_bio' => 'nullable|string',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $filename = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move('uploads/TeamMembers', $filename);
            $validated['profile_image'] = 'uploads/TeamMembers/' . $filename;
        } else {
            $validated['profile_image'] = null; // Set to null if no file is uploaded
        }

        $teamMember = new TeamMember([
            'full_name' => $validated['full_name'],
            'position' => $validated['designation'],
            'short_bio' => $validated['short_bio'],
            'photo' => $validated['profile_image'],
        ]);

        if (!$teamMember->save()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to create team member'
            ], 500);
        } else {
            return response()->json([
                'status' => 'success',
                'message' => 'Team member created successfully',
                'team_member' => $teamMember
            ], 201);
        }
    }

    public function updateTeam(Request $request, $id)
    {
        $teamMember = TeamMember::findOrFail($id);

        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'short_bio' => 'nullable|string',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

       if ($request->hasFile('profile_image')) {
            // Delete the old profile image if it exists
            if ($teamMember->photo && file_exists($teamMember->photo)) {
                unlink($teamMember->photo);
            }

            $image = $request->file('profile_image');
            $filename = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move('uploads/TeamMembers', $filename);
            $validated['profile_image'] = 'uploads/TeamMembers/' . $filename;
        } else {
            // Keep the old profile image if no new file is uploaded
            $validated['profile_image'] = $teamMember->photo;
        }


       $teamMember = $teamMember->update([
            'full_name' => $validated['full_name'],
            'position' => $validated['position'],
            'short_bio' => $validated['short_bio'],
            'photo' => $validated['profile_image'],
        ]);

        if ($teamMember) {
            return response()->json([
                'status' => 'success',
                'message' => 'Team member updated successfully',
                'team_member' => $teamMember
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to update team member'
            ], 500);
        }
    }

    public function destroyTeam($id)
    {
        $teamMember = TeamMember::findOrFail($id);
        if ($teamMember->delete()) {
            return response()->json([
                'status' => 'success',
                'message' => 'Team member deleted successfully'
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to delete team member'
            ], 500);
        }
    }

    public function toggleTeamStatus($id)
    {
        $teamMember = TeamMember::findOrFail($id);
        $teamMember->is_active = !$teamMember->is_active; // Toggle the status
        $teamMember->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Team member status updated successfully',
            'is_active' => $teamMember->is_active
        ]);
    }
}
