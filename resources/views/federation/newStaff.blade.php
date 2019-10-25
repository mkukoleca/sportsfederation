@extends("../layouts.master")

@section("content")

<<<<<<< HEAD
@section("title")
Rukometni savez Republike Srpske-Staff
@endsection
<div class="container">  
=======
<div class="container">
<br><br>
    <a href="/staff"><button type="button" class="btn btn-secondary btn-lg btn-block">Back</button></a>  
>>>>>>> 5bd0e9dfd6471f6aa4ba8c0d2c9cb288ab804915
  <form id="contact" action="{{route('create')}}" method="POST" enctype="multipart/form-data">
  {{csrf_field()}}
    <h3>Add new Staff</h3>
    <fieldset>
      <input placeholder="Name" type="text" name ="name" tabindex="1" required autofocus>
    </fieldset>

   

        <fieldset>
        <textarea placeholder="Description" type="text" name ="description" tabindex="3"></textarea>
        </fieldset>

        <fieldset>
            <span>Staff Type </span>
            <select name="staffType">
                @foreach ($staff as $s)
                <option value="{{ $s->id  }}">{{ $s->name }}</option>
                @endforeach
            </select>
        </fieldset>
        <fieldset>
            <span>Federation </span>
            <select name="fedType">
                @foreach ($feds as $fed)
                <option value="{{ $fed->id }}">{{ $fed->name }}</option>
                @endforeach
            </select>
        </fieldset>

        <fieldset>
            <button name="submit" type="submit" id="contact-submit"
                data-submit="...Sending">Submit</button>
        </fieldset>
        <p class="copyright">Designed by Sharks</a></p>
    </form>

                </div>
                <div clas="col-3">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}</div>
                    @endif
                </div>
            </div>
        </div>
@endsection
