<?php

namespace Modules\Dashboard\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Modules\Client\Entities\Car;
use Modules\Client\Entities\Client;

class AddClient extends Component
{
    public $name, $email, $phone, $address, $car_id;
    public $cars;

    protected $rules = [
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'address' => 'required',
        'car_id' => 'required',
    ];
    function mount()
    {
        $this->cars = Car::all();
    }

    function updated($field)
    {
        $this->validateOnly($field);
    }
    public function render()
    {
        return view('dashboard::livewire.add-client');
    }
    function save()
    {
        $user = User::create($this->validate());
        $client = $user->client()->create($this->validate());
        $this->emit('closeModal');
        return to_route('dashboard.clients.index');
    }
}
