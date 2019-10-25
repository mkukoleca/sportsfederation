@extends("../layouts.master")

@section("content")

@section("title")
Rukometni savez Republike Srpske-New Club
@endsection

    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="container">
                    <br><br>
                    <a href="/clubs"><button type="button" class="btn btn-secondary btn-lg btn-block">Back</button></a>

                    <form id="contact" action="{{route('updateclub', $club->id)}}" method="POST"
                        enctype="multipart/form-data">
                        {{csrf_field()}}
                        <h3>Update Club</h3>
                        <fieldset>
                            Name:<br><input placeholder="Name" type="text" name="name" value="{{$club->name}}"
                                tabindex="1" autofocus>
                        </fieldset>
                        <fieldset>
                            Address:<br><input placeholder="Address" type="text" name="address"
                                value="{{$club->address}}" tabindex="2">
                        </fieldset>
                        <fieldset>
                            Email:<br><input placeholder="Email" type="email" name="email" value="{{$club->email}}"
                                tabindex="2">
                        </fieldset>
                        <fieldset>
                            Website:<br><input placeholder="Website (optional)" type="url" name="website"
                                value="{{$club->website}}" tabindex="3">
                        </fieldset>
                        <fieldset>
                            Date of foundation:<br><input placeholder="Date of foundation" type="date"
                                name="dateOfFoundation" value="{{$club->dateOfFoundation}}" tabindex="4">
                        </fieldset>
                        <fieldset>
                            Director:<br><input placeholder="Director" type="text" name="director"
                                value="{{$club->director}}" tabindex="5">
                        </fieldset>
                        <fieldset>
                            History:<br><textarea placeholder="History" type="text" name="history"
                                value="{{$club->history}}" tabindex="6">{{$club->history}}</textarea>
                        </fieldset>

                        <fieldset>
                            @if (file_exists( "$club->thumbnail" ))
                            <p>Current image: {{ $club->thumbnail }}</p>
                            @endif
                            Choose an image:
                            <input type="file" name="thumbnail" value="{{ $club->thumbnail }}" tabindex="7"
                                required>{{ $club->thumbnail }}
                        </fieldset>

                        <fieldset>
                            <button name="submit" type="submit" id="contact-submit"
                                data-submit="...Sending">Update</button>
                        </fieldset>
                        <p class="copyright">Designed by Sharks</p>
                    </form>
                </div>
            </div>
            <div clas="col-3">
            </div>
        </div>

    </div>
@endsection
