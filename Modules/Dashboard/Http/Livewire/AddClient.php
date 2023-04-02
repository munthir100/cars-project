<?php

namespace Modules\Dashboard\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Modules\Client\Entities\Car;
use Modules\Client\Entities\Client;

class AddClient extends Component
{
    public $name, $email, $phone, $address, $car_id, $latitude = 51.5, $longitude = -0.09;
    public $cars;
    protected $listeners = ['markerDragged' => 'markerDragged'];

    protected function getRules()
    {
        return [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'car_id' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
        ];
    }

    public function mount()
    {
        $this->cars = Car::all();
    }

    public function updated($field)
    {
        $this->validateOnly($field);
    }

    public function render()
    {
        return view('dashboard::livewire.add-client');
    }

    public function save()
    {
        $this->validate();

        if ($this->latitude == 51.5 && $this->longitude == -0.09) {
            $this->addError('location', 'Please drag the location');
            return;
        }

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
        ]);

        $client = $user->client()->create([
            'car_id' => $this->car_id,
        ]);

        $client->location()->create([
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'address' => $this->address,
        ]);

        $this->emit('closeModal');
        return redirect()->route('dashboard.clients.index');
    }

    public function markerDragged($data)
    {
        $this->latitude = $data['latitude'];
        $this->longitude = $data['longitude'];
    }
}
