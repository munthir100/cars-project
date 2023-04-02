<div>
    <livewire:alerts />
    @error('credantials') <span class="text-danger">{{$message}}</span> @enderror
    <form wire:submit.prevent="login">
        @csrf
        <div class="mb-1">
            <label for="login-email" class="form-label">Email</label>
            <input type="text" class="form-control" wire:model.lazy="username" placeholder="email or phone" />
            @error('username') <span class="error">{{$message}}</span>@enderror
        </div>
        <div class="mb-1">
            <div class="d-flex justify-content-between">
                <label class="form-label" for="login-password">Password</label>
                <a href="{{route('password.forget')}}">
                    <small>Forgot Password?</small>
                </a>
            </div>
            <div class="input-group input-group-merge form-password-toggle">
                <input type="password" class="form-control form-control-merge" wire:model.lazy="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="login-password" />
                <span class="input-group-text cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                        <circle cx="12" cy="12" r="3"></circle>
                    </svg>
                </span>
            </div>
            @error('password') <span class="error">{{$message}}</span>@enderror
        </div>
        <button class="btn btn-primary w-100" type="submit" tabindex="4">Sign in</button>
    </form>
</div>