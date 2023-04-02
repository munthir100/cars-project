<div>
    <form class="auth-reset-password-form mt-2" wire:submit.prevent="resetPassword">
        <div class="mb-1">
            <div class="d-flex justify-content-between">
                <label class="form-label" for="reset-password-new">Email</label>
            </div>
            <div class="input-group input-group-merge form-password-toggle">
                <input type="email" class="form-control form-control-merge" id="reset-password-new" wire:model="email" placeholder="email" aria-describedby="reset-password-new" tabindex="1" autofocus />
                @error('email') <span class="error"> {{$message}} </span> @enderror
            </div>
        </div>
        <div class="mb-1">
            <div class="d-flex justify-content-between">
                <label class="form-label" for="reset-password-new">New Password</label>
            </div>
            <div class="input-group input-group-merge form-password-toggle">
                <input type="password" class="form-control form-control-merge" id="reset-password-new" wire:model="new_password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="reset-password-new" tabindex="1" autofocus />
                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                @error('new_password') <span class="error"> {{$message}} </span> @enderror
            </div>
        </div>
        <div class="mb-1">
            <div class="d-flex justify-content-between">
                <label class="form-label" for="reset-password-confirm">Confirm Password</label>
            </div>
            <div class="input-group input-group-merge form-password-toggle">
                <input type="password" class="form-control form-control-merge" id="reset-password-confirm" wire:model="new_password_confirmation" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="reset-password-confirm" tabindex="2" />
                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                @error('new_password_confirmation') <span class="error"> {{$message}} </span> @enderror
            </div>
        </div>
        <button class="btn btn-primary w-100" tabindex="3">Set New Password</button>
    </form>
</div>