<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="/css/app.css">

    <title>My Profile</title>
  </head>
  <body>
    <div class="container">
      <div class="row">

        {{-- info --}}
        <div class="col-md-6">
          <p>Name: {{ $name }} {{ $surname }}</p>
          <p>Birthday: {{ $birthday }} ({{ $age }} years)</p>
          <p>
            Sports:
            <ul>
              @foreach ($sports as $sport)
                <li>{{ $sport }}</li>
              @endforeach
            </ul>
          </p>
          <p>
            Skills:
            <ul>
              @foreach ($skills as $key => $skill)
                <li>
                  {{ $key}}
                  <ul>
                    @foreach ($skill as $value)
                      <li>{{ $value }}</li>
                    @endforeach
                  </ul>
                </li>
              @endforeach
            </ul>
          </p>
        </div>

        {{-- profile picture --}}
        <div class="col-md-6">
          <p>
            <img class="img-responsive" src="/images/profile.jpg" style="max-height: 200px; width: auto;">
          </p>
        </div>
      </div>

    </div>
  </body>
</html>
