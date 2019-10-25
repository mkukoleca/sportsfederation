@extends("../layouts.master")

@section("content")

@section("title")
Rukometni savez Republike Srpske-Staff
@endsection
    <div class="container">
        <div class="row">

            <div class="col-3">
            </div>
            <div class="col-6">
            <div class="container"><br><br>
                <a href="/staff"><button type="button" class="btn btn-secondary btn-lg btn-block">Back</button></a>
                <form id="contact" method="POST" action="/editStaff/{{ $staff->id }}" enctype="multipart/form-data">

                    @csrf
                    <h3>Edit Staff Member</h3>
                    <fieldset>
                        Name:<p><input type="text" name="name" tabindex="1" required autofocus
                                value="{{ $staff->name }}">
                    </fieldset>
                    <fieldset>
                        Description:<p><textarea type="text" name="description" tabindex="3" required
                                value="{{ $staff->description }}">{{ $staff->description }}</textarea>
                    </fieldset>

                    <fieldset>
                        @if (file_exists( "$staff->thumbnail" ))
                        <p>Current image: {{ $staff->thumbnail }}</p>
                        @endif
                        Choose an image:
                        <input type="file" name="thumbnail" value="{{ $staff->thumbnail }}" tabindex="4">
                    </fieldset>

                    <fieldset>
                        <span>Staff Type </span>
                        <select name="staffType">
                            @foreach ($staffs as $stf)
                            <option value="{{ $stf->id  }}"
                                {{ $staff->type_id == $stf->id ? 'selected="selected"' : ''}}> {{ $stf->name }}</option>
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
            </div>
            <div clas="col-3">
            </div>
        </div>
    </div>
@endsection
