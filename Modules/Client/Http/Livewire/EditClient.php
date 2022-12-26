<?php

namespace Modules\Client\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Modules\Client\Entities\Car;

class EditClient extends Component
{
    public $name, $email, $phone, $address, $car_id;
    public $cars;
    public $client;

    function mount()
    {
        $this->name = $this->client->user->name;
        $this->email = $this->client->user->email;
        $this->phone = $this->client->user->phone;
        $this->address = $this->client->address;
        $this->car_id = $this->client->car_id;
        $this->cars = Car::all();
    }
    protected $rules = [
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'address' => 'required',
        'car_id' => 'required',
    ];


    function updated($field)
    {
        $this->validateOnly($field);
    }
    public function render()
    {
        return view('client::livewire.edit-client');
    }
    function save()
    {
        $this->client->user->update($this->validate());
        $this->client->update($this->validate());
        
        
        return to_route('dashboard.clients.index');
    }
}
