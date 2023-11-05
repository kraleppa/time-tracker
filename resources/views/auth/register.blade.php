@extends('layouts.master')

@section('content')
    <div class="d-flex flex-column align-items-center mt-5">
        <form method="POST" action="/register" class="w-50">
            @csrf
            <div class="form-outline mb-4">
                <label class="form-label" for="name">Name <span class="text-danger">*</span></label>
                <input id="name" class="form-control" type="name" name="name" required/>
                @if ($errors->get('name'))
                    @foreach ((array) $errors->get('name') as $message)
                        <div class="text-danger">{{ $message }}</div>
                    @endforeach
                @endif
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="email">Email address <span class="text-danger">*</span></label>
                <input id="email" class="form-control" type="email" name="email" required/>
                @if ($errors->get('email'))
                    @foreach ((array) $errors->get('email') as $message)
                        <div class="text-danger">{{ $message }}</div>
                    @endforeach
                @endif
            </div>
        
            <div class="form-outline mb-4">
                <label class="form-label" for="password">Password <span class="text-danger">*</span></label>
                <input id="password" class="form-control" type="password" name="password" required />
                @if ($errors->get('password'))
                    @foreach ((array) $errors->get('password') as $message)
                        <div class="text-danger">{{ $message }}</div>
                    @endforeach
                @endif
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="password_confirmation">Confirm Password <span class="text-danger">*</span></label>
                <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required />
                @if ($errors->get('password_confirmation'))
                    @foreach ((array) $errors->get('password_confirmation') as $message)
                        <div class="text-danger">{{ $message }}</div>
                    @endforeach
                @endif
            </div>
        
            <button type="submit" class="btn btn-primary btn-block mb-4 w-100">Sign in</button>
        
            <div class="text-center">
                <p>Already registered? <a href="/login">Login</a></p>
            </div>
        </form>
    </div>
@endsection
