@extends('template')

@section('content')
  <div class="container">
    <h1>Your Reminders</h1>

    @include('components.reminder-list')

    @include('components.new-reminder')
  </div>
@endsection
