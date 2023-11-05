<section>
    <header>
        <h4>Delete Account</h4>
    </header>

    <form method="post" action="/profile" class="mt-1 w-50">
        @csrf
        @method('delete')

        <div class="form-outline mb-2">
            <label class="form-label" for="password">Password</label>
            <input id="password" class="form-control" type="password" name="password" required />
        </div>

        <div class="flex items-center gap-4">
            <button type="submit" class="btn btn-danger btn-block mb-4 w-100">Delete Account</button>
        </div>
    </form>
</section>
