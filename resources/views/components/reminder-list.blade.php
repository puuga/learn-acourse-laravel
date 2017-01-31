@foreach ($reminders as $reminder)
  <div class="row">
    <div class="well">
      {{ $reminder }}
      <a href="#" class="btn btn-success btn-sm pull-right">Finish</a>
    </div>
  </div>
@endforeach
