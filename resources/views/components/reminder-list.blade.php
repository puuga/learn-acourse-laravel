@foreach ($reminders as $reminder)
  <div class="row">
    <div class="well">
      {{ $reminder->body }} - {{ $reminder->reminderType->type_name }}
      <form action="{{ route('reminders_delete', ['id'=>$reminder->id]) }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="delete">
        <input type="submit" value="Finish" class="btn btn-success">
      </form>
    </div>
  </div>
@endforeach
