@extends("../layouts.master")

@section("content")

@section("title")
Rukometni savez Republike Srpske-Staff
@endsection
<div class="container">  
  <form id="contact" action="{{route('create')}}" method="POST" enctype="multipart/form-data">
  {{csrf_field()}}
    <h3>Add new Staff</h3>
    <fieldset>
      <input placeholder="Name" type="text" name ="name" tabindex="1" required autofocus>
    </fieldset>

    <fieldset>
      <textarea placeholder="Description" type="text" name ="description" tabindex="3"></textarea>
    </fieldset>

    <fieldset> Staff image:
          <input type="file" name="thumbnail" tabindex="3">
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
