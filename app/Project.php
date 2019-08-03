<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function manager()
    {
    	return $this->belongsTo(User::class);
	}

	public function tasks()
	{
		return $this->hasMany(Task::class);
	}

	public function storeTask($user, $attributes)
	{
		
		$task = new Task;
		$task->description = $attributes['description'];
		$task->manager_id = $user->id;
		$task->project_id = $this->id;
		$saved = $task->save();

		return [
			'task' => $task,
			'saved' => $saved
		];
	} 
}
