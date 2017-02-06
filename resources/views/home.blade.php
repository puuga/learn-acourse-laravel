@extends('template')

@section('content')
  <div class="container">
    @if (Session::has('status'))
      <div class="alert alert-success">
        {{ Session::get('status') }}
      </div>
    @endif
    <h1>Your Reminders</h1>

    @include('components.reminder-list')

    @include('components.new-reminder')
  </div>
@endsection
