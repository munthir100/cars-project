<div>
    <form wire:submit.prevent="forgetPassword">
        <div class="mb-1">
            <label for="forgot-password-email" class="form-label">Email</label>
            <input type="email" class="form-control" id="forgot-password-email" wire:model="email" placeholder="john@example.com" aria-describedby="forgot-password-email" tabindex="1" autofocus />
            @error('email') <span class="error"> {{$message}} </span>@enderror
        </div>
        <button type="submit" class="btn btn-primary w-100">Send reset link</button>
    </form>
</div>