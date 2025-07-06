<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LeadComment extends Model
{
    protected $table = 'lead_comments'; // Specify the table name if different from the default
    protected $fillable = ['lead_id', 'comment',  'message', 'status', 'next_update', 'author_id'];

    // Define the relationship with the Lead model
    public function lead()
    {
        return $this->belongsTo(Lead::class, 'lead_id');
    }

    // Define the relationship with the User model
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
    // You can add other methods or relationships as needed
}
