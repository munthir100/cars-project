<div>
    <form class="auth-register-form mt-2" action="index.html" method="POST">
        <div class="mb-1">
            <label for="register-username" class="form-label">Username</label>
            <input type="text" class="form-control" id="register-username" name="register-username" placeholder="johndoe" aria-describedby="register-username" tabindex="1" autofocus />
        </div>
        <div class="mb-1">
            <label for="register-email" class="form-label">Email</label>
            <input type="text" class="form-control" id="register-email" name="register-email" placeholder="john@example.com" aria-describedby="register-email" tabindex="2" />
        </div>

        <div class="mb-1">
            <label for="register-password" class="form-label">Password</label>

            <div class="input-group input-group-merge form-password-toggle">
                <input type="password" class="form-control form-control-merge" id="register-password" name="register-password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="register-password" tabindex="3" />
                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
            </div>
        </div>
        <div class="mb-1">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="register-privacy-policy" tabindex="4" />
                <label class="form-check-label" for="register-privacy-policy">
                    I agree to <a href="#">privacy policy & terms</a>
                </label>
            </div>
        </div>
        <button class="btn btn-primary w-100" tabindex="5">Sign up</button>
    </form>
</div>