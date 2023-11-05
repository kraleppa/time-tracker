@extends('layouts.master')

@section('content')
    <div class="d-flex flex-column align-items-center mt-5">
        <form method="POST" action="/register" class="w-50">
            @csrf
            <div class="form-outline mb-4">
                <label class="form-label" for="name">Name</label>
                <input id="name" class="form-control" type="name" name="name" required/>
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="email">Email address</label>
                <input id="email" class="form-control" type="email" name="email" required/>
            </div>
        
            <div class="form-outline mb-4">
                <label class="form-label" for="password">Password</label>
                <input id="password" class="form-control" type="password" name="password" required />
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="password_confirmation">Confirm Password</label>
                <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required />
            </div>
        
            <button type="submit" class="btn btn-primary btn-block mb-4 w-100">Sign in</button>
        
            <div class="text-center">
                <p>Already registered? <a href="/login">Login</a></p>
            </div>
        </form>
    </div>
@endsection
