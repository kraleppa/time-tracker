@extends('layouts.master')

@section('content')
    <div class="d-flex flex-column align-items-center mt-5">
        <form method="POST" action="/login" class="w-50">
            @csrf
            <div class="form-outline mb-4">
                <label class="form-label" for="email">Email address</label>
                <input id="email" class="form-control" type="email" name="email" required/>
            </div>
        
            <div class="form-outline mb-4">
                <label class="form-label" for="password">Password</label>
                <input id="password" class="form-control" type="password" name="password" required />
            </div>
        
            <div class="row mb-4">
                <div class="col">
                    <div class="form-check">
                        <label class="form-check-label" for="remember_me"> Remember&nbsp;me </label>
                        <input id="remember_me" type="checkbox" name="remember" class="form-check-input" />
                    </div>
                </div>
            </div>
        
            <button type="submit" class="btn btn-primary btn-block mb-4 w-100">Sign in</button>
        
            <div class="text-center">
                <p>Not a member? <a href="/register">Register</a></p>
            </div>
        </form>
    </div>
@endsection
