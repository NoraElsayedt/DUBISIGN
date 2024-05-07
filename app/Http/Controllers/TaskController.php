<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use App\Models\Admin;
use App\Models\Statistic;
use Illuminate\Http\Request;
use App\Jobs\UpdateStatistics;
use App\Http\Requests\TaskRequest;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\Type\Exception;

class TaskController extends Controller
{

    public function index()
    {
       $tasks = Task::all();
       $Assigned_To = Admin::all();
       $Assigned_BY =  User::all();
       return  view('Tasks.indextask' , compact('tasks','Assigned_To','Assigned_BY'));
    }

  

   
    public function store(TaskRequest $request)
    {
     
       


        DB::beginTransaction();

        try {

            
         $task =   Task::create([
                'title'=> $request->Title,
                'description' => $request->Description,
                'assigned_to_id' => $request->Assigned_To,
                'assigned_by_id' => $request->Assigned_BY,
    
            ]);
       

        // Dispatch the UpdateStatistics job
        UpdateStatistics::dispatch($task->assigned_to_id, $task->assigned_by_id);

            DB::commit();
            toastr()->success('saved successfully!');
            return redirect()->route('Task.index');
        } catch (Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }

  
 
    
    public function update(TaskRequest $request , $id)
    {
   
        
      
        DB::beginTransaction();

        try {


            $task = Task::findOrFail($id);
            
            $task->update([
                'title'=> $request->Title,
                'description' => $request->Description,
                'assigned_to_id' => $request->Assigned_To,
                'assigned_by_id' => $request->Assigned_BY,
    
            ]);
       
        // Dispatch the UpdateStatistics job
        UpdateStatistics::dispatch($task->assigned_to_id, $task->assigned_by_id);


            DB::commit();
            toastr()->info('Update successfully!');
            return redirect()->route('Task.index');

        } catch (Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

   
    public function destroy(Request $request)
    {
        try {
            $task = Task::destroy($request->id);

            

            toastr()->error('Delete successfully!');
            return redirect()->route('Task.index');

        } catch (Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }
}
