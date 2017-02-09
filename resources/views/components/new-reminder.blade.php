<form action="/reminders" method="post">
  {{ csrf_field() }}

  <div class="form-group">
    <label for="reminder">New Reminder</label>
    <textarea class="form-control" name="body" id="reminder" rows="8" cols="80"></textarea>
  </div>

  <div class="form-group">
    <label for="reminderType">Type</label>
    <select class="form-control" name="reminderType" id="reminderType">
      @foreach ($reminderTypes as $reminderType)
        <option value="{{ $reminderType->id }}">{{ $reminderType->type_name }}</option>
      @endforeach
    </select>
  </div>

  <div class="form-group">
    <button class="btn btn-primary" type="submit" name="button">Create Reminder</button>
  </div>
</form>
