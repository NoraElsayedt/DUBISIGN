<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Task;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskControllerTest extends TestCase
{


    public function test_index_method()
    {
        $response = $this->get('/Task');

        $response->assertStatus(200);
        $response->assertViewIs('Tasks.indextask');
    }

    public function test_store_method()
    {
        $requestData = [
         
            'Title' => 'Test Task',
            'Description' => 'This is a test task',
            'Assigned_To' => 1,
            'Assigned_BY' => 1, 
        ];

        $response = $this->post('/Task', $requestData);

        $response->assertRedirect(route('Task.index')); 
        $this->assertDatabaseHas('tasks', ['title' => 'Test Task']);
    }



    public function test_update_method()
    {
       
        $id = 2;

        $requestData = [
            'Title' => 'Updated Task Title',
            'Description' => 'This is an updated task description',
            'Assigned_To' => 1, 
            'Assigned_BY' => 1, 
        ];

        $response = $this->patch("/Task/$id", $requestData);

        $response->assertRedirect(route('Task.index')); 
        $this->assertDatabaseHas('tasks', ['id' => $id, 'title' => 'Updated Task Title']); 
    }



  
 



}
