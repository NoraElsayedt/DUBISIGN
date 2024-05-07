<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    use HasFactory;
    protected $fillable = [
        'number_of_task',
        'assigned_to_id',
        'assigned_by_id',
        
        // 'task_id'
    ];

    public function Assigned_To(){
        return $this->belongsTo(Admin::class ,'assigned_to_id');
    }

    public function Assigned_BY(){
        return $this->belongsTo(User::class ,'assigned_by_id');
    }

    // public function Task(){
    //     return $this->belongsTo(Task::class ,'task_id');
    // }
}
