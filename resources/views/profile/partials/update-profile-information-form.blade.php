<section>
    <header>
        <h4>Profile Information</h4>
        <p class="mt-1">Update your account's profile information and email address.</p>
    </header>

    <form method="post" action="/profile" class="mt-1 w-50">
        @csrf
        @method('patch')

        <div class="form-outline mb-2">
            <label class="form-label" for="name">Name</label>
            <input id="name" class="form-control" type="name" name="name" value={{ old('name', $user->name) }} required/>
        </div>

        <div class="form-outline mb-2">
            <label class="form-label" for="email">Email</label>
            <input id="email" class="form-control" type="email" name="email" value={{ old('email', $user->email) }} required/>
        </div>

        <div class="flex items-center gap-4">
            <button type="submit" class="btn btn-primary btn-block mb-4 w-100">Save</button>
        </div>
    </form>
</section>
