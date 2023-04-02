<?php

namespace Modules\Client\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Modules\Client\Entities\Car;

class EditClient extends Component
{
    public $name, $email, $phone, $address, $car_id,$latitude,$longitude;
    public $cars;
    public $client;
    protected $listeners = ['markerEdited' => 'markerEdited'];

    public function mount()
    {
        $this->name = $this->client->user->name;
        $this->email = $this->client->user->email;
        $this->phone = $this->client->user->phone;
        $this->address = $this->client->location->address;
        $this->latitude = $this->client->location->latitude;
        $this->longitude = $this->client->location->longitude;
        $this->car_id = $this->client->car_id;
        $this->cars = Car::all();
    }

    protected $rules = [
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'address' => 'required',
        'car_id' => 'required',
        'latitude' => 'required',
        'longitude' => 'required',
    ];

    public function updated($field)
    {
        $this->validateOnly($field);
    }

    public function render()
    {
        return view('client::livewire.edit-client');
    }

    public function save()
    {
        $this->validate();

        $this->client->user->update([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
        ]);

        $this->client->update([
            'car_id' => $this->car_id,
        ]);

        $this->client->location()->update([
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'address' => $this->address,
        ]);

        return redirect()->route('dashboard.clients.index');
    }

    public function markerEdited($data)
    {
        $this->latitude = $data['latitude'];
        $this->longitude = $data['longitude'];
    }
}
