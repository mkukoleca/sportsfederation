<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../formaClub.css">
  <title>Edit Staff</title>
</head>

<body>
  <div class="container">
    <div class="row">

      <div clas="col-3">
      </div>
      <a href="/staff"><button type="button" class="btn btn-secondary btn-lg btn-block">Back</button></a>

      <div class="container">
        <form id="contact" method="POST" action="/editStaff/{{ $staff->id }}" enctype="multipart/form-data">

          @csrf
          <h3>Edit Staff Member</h3>
          <fieldset>
            Name:<p><input type="text" name="name" tabindex="1" required autofocus value="{{ $staff->name }}">
          </fieldset>
          <fieldset>
            Description:<p><textarea type="text" name="description" tabindex="3" required value="{{ $staff->description }}">{{ $staff->description }}</textarea>
          </fieldset>

          <fieldset> Choose an image:
            @if (file_exists( "$staff->thumbnail" ))
            <p>Old image: {{ $staff->thumbnail }}</p>
            @endif

            <input type="file" name="thumbnail" value="{{ $staff->thumbnail }}" tabindex="4">
          </fieldset>

          <fieldset>
            <span>Staff Type </span>
            <select name="staffType">
              @foreach ($staffs as $stf)
              <option value="{{ $stf->id  }}" {{ $staff->type_id == $stf->id ? 'selected="selected"' : ''}}> {{ $stf->name }}</option>
              @endforeach
            </select>
          </fieldset>

          <fieldset>
            <span>Federation </span>
            <select name="fedType">
              @foreach ($staff->federation as $fed)
              <option value="{{ $fed->id }}">{{ $fed->name }}</option>
              @endforeach
            </select>
          </fieldset>

          <fieldset>
            <button name="submit" type="submit" id="contact-submit">Update</button>
          </fieldset>
          <p class="copyright">Designed by Sharks</a></p>
        </form>
      </div>

      <div class="col-6">

      </div>
      <div clas="col-3">
      </div>
    </div>
  </div>
</body>

</html>