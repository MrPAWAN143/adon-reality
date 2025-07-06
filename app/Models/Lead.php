<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $table = 'leads'; 
    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',
        'is_new',
        'is_read',
    ];

   
   public function user()
   {
       return $this->belongsTo(User::class);
   }
    public function comments()
    {
         return $this->hasMany(LeadComment::class);
    }
}
