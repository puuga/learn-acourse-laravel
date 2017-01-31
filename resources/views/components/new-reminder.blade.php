<form action="/reminder/new" method="post">
  {{ csrf_field() }}

  <div class="form-group">
    <label for="reminder">New Reminder</label>
    <textarea class="form-control" name="reminder" id="reminder" rows="8" cols="80"></textarea>
  </div>

  <div class="form-group">
    <button class="btn btn-primary" type="submit" name="button">Create Reminder</button>
  </div>
</form>
