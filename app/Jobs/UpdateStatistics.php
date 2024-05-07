<?php

namespace App\Jobs;

use App\Models\Task;
use App\Models\Statistic;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class UpdateStatistics implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $assignedToId;
    protected $assignedById;

    public function __construct($assignedToId, $assignedById)
    {
        $this->assignedToId = $assignedToId;
        $this->assignedById = $assignedById;
    }

    public function handle()
    {
        $assignedToId = $this->assignedToId;
        $assignedById = $this->assignedById;
    
        $taskCount = Task::where('assigned_to_id', $assignedToId)
                         ->where('assigned_by_id', $assignedById)
                         ->count();
    
        $statistic = Statistic::firstOrNew([
            'assigned_to_id' => $assignedToId,
            'assigned_by_id' => $assignedById,
        ]);
    
        $statistic->number_of_task = $taskCount;
        $statistic->save();
    }
}
