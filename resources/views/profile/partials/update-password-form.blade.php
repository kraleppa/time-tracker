<section>
    <header>
        <h4>Update Password</h4>
        <p class="mt-1">Ensure your account is using a long, random password to stay secure.</p>
    </header>

    <form method="post" action="/password" class="mt-1 w-50">
        @csrf
        @method('put')

        <div class="form-outline mb-2">
            <label class="form-label" for="current_password">Current Password</label>
            <input id="current_password" class="form-control" type="password" name="current_password" required />
        </div>

        <div class="form-outline mb-2">
            <label class="form-label" for="password">New Password</label>
            <input id="password" class="form-control" type="password" name="password" required />
        </div>

        <div class="form-outline mb-2">
            <label class="form-label" for="password_confirmation">Password Confirmation</label>
            <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required />
        </div>

        <div class="flex items-center gap-4">
            <button type="submit" class="btn btn-primary btn-block mb-4 w-100">Save</button>
        </div>
    </form>
</section>
