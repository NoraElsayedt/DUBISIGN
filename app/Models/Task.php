<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'assigned_to_id',
        'assigned_by_id',
     
       
    ];

    public function Assigned_To(){
        return $this->belongsTo(Admin::class ,'assigned_to_id');
    }

    public function Assigned_BY(){
        return $this->belongsTo(User::class ,'assigned_by_id');
    }
}
