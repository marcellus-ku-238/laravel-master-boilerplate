<?php

namespace App\Http\Livewire\Admin\Project;

use App\Jobs\CreateProjectJob;
use Livewire\Component;

class Create extends Component
{
    public $projectName;

    public $rules = [
        'projectName' => 'required'
    ];

    public function render()
    {
        return view('livewire.admin.project.create');
    }

    public function save()
    {
        //sleep(5);
        $validated = $this->validate();
        //CreateProjectJob::dispatchSync($validated['projectName']);
        $this->dispatchBrowserEvent('flash', [
            'type' => fake()->randomElement(['success', 'info', 'warn', 'danger']),
            'message' => 'Project Created successfully.'
        ]);
    }
}
