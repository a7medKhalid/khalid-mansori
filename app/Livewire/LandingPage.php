<?php

namespace App\Livewire;

use App\Models\Expert;
use App\Models\Goal;
use App\Models\Hero;
use App\Models\ServiceCategory;
use Livewire\Component;

class LandingPage extends Component
{
    public Hero $hero;
    public array $goals;
    public Expert $leader;
    public array $experts;
    public array $servicesCategories;

    public function mount(){
        $this->hero = Hero::inRandomOrder()->first();
        $this->goals = Goal::orderBy('order')->get()->toArray();
        $this->leader = Expert::where('isLeader', true)->first();
        $this->experts = Expert::where('isLeader', false)->orderBy('order')->get()->toArray();
        $this->servicesCategories = ServiceCategory::with('services')->orderBy('order')->get()->toArray();
    }

    public function render()
    {
        return view('livewire.landing-page')->layout('layouts.guest');
    }
}
