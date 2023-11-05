@extends('layouts.master')

@section('content')
    <div class="mt-1">
        @include('profile.partials.update-profile-information-form')

        @include('profile.partials.update-password-form')

        @include('profile.partials.delete-account-form')
    </div>
@endsection
