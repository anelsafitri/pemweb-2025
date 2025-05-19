<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Pasien;

class ShowPasien extends Component
{
    public $pasiens;

    public function mount()
    {
        $this->pasiens = Pasien::all();
    }

    public function render()
    {
        return view('livewire.show-pasien');
    }
}