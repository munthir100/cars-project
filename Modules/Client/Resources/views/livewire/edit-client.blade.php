<div>
    <form method="post" wire:submit.prevent="save">
        @csrf
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="mb-1">
                    <label class="form-label" for="first-name-column">Name</label>
                    <input type="text" class="form-control" placeholder="Name" wire:model="name" />
                    @error('name') <span class="text-danger">{{$message}}</span>@enderror
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="mb-1">
                    <label class="form-label" for="last-name-column">Email</label>
                    <input type="email" class="form-control" placeholder="Last Name" wire:model="email" />
                    @error('email') <span class="text-danger">{{$message}}</span>@enderror
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="mb-1">
                    <label class="form-label" for="city-column">Phone</label>
                    <input type="text" id="city-column" class="form-control" placeholder="Phone" wire:model="phone" />
                    @error('phone') <span class="text-danger">{{$message}}</span>@enderror
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="mb-1">
                    <label class="form-label" for="country-floating">Address</label>
                    <input type="text" class="form-control" placeholder="Address" wire:model="address" />
                    @error('address') <span class="text-danger">{{$message}}</span>@enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="mb-1">
                    <label class="form-label" for="car">Car</label>
                    <select class="form-select" id="car" wire:model="car_id">
                        <option selected="">Select Car</option>
                        @forelse($cars as $car)
                        <option value="{{$car->id}}">{{$car->name}}</option>
                        @empty
                        <a href="#" class="btn btn-primary">Add Car</a>
                        @endforelse
                    </select>
                    @error('car_id') <span class="text-danger">{{$message}}</span>@enderror
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>