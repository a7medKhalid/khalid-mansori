<?php

namespace App\Livewire;

use App\Models\Hero;
use App\Models\User;
use Livewire\Component;

class LandingPage extends Component
{
    public Hero $hero;
    public array $goals;
    public User $leader;
    public array $experts;
    public array $servicesCategories;

    public function mount(){
        $this->hero = Hero::inRandomOrder()->first();
    }

    public function render()
    {
        return view('livewire.landing-page')->layout('layouts.guest');
    }
}
