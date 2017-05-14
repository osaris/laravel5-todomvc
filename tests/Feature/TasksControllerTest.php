<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TasksControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testIndex()
    {
        $response = $this->get(route('tasks.index'));
        
        $response->assertStatus(200);
        $response->assertViewHas('tasks');
    }
    
    public function testStoreWithBadData()
    {
        $response = $this->post(route('tasks.store'), ['name' => ''], ['HTTP_REFERER' => route('tasks.create')]);
        
        $response->assertRedirect(route('tasks.create'));
        $response->assertSessionHasErrors(['name']);
    }
    
    public function testStoreWithGoodData()
    {
        $response = $this->post(route('tasks.store'), ['name' => 'test with enough chars']);
        
        $response->assertRedirect(route('tasks.index'));
    }
    
    public function testShow()
    {
        $task = factory(\App\Task::class)->make();
        
        $response = $this->get(route('tasks.show', $task->id));
        
        $response->assertStatus(200);
    }
    
    public function testShowMissingTask()
    {
        $response = $this->get(route('tasks.show', -1));
        
        $response->assertStatus(404);
    }
}
