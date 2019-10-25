@extends("../layouts.master")

@section("content")

@section("title")
Rukometni savez Republike Srpske-Event
@endsection
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="container">
                    <br><br>
                    <a href="/event"><button type="button" class="btn btn-secondary btn-lg btn-block">Back</button></a>

                    <form id="contact" action="{{route('updateevent', $event->id)}}" method="POST">
                        {{csrf_field()}}
                        <h3>Update Event</h3>
                        <fieldset>
                            Type:<br>
                            <input type="radio" value="League" name="type" tabindex="1"
                                {{$event->type == 'League' ? 'checked' : '' }}> League <br>
                            <input type="radio" value="Cup" name="type" tabindex="1"
                                {{$event->type == 'Cup' ? 'checked' : '' }}> Cup <br>
                            <input type="radio" value="Tournament" name="type" tabindex="1"
                                {{$event->type == 'Tournament' ? 'checked' : '' }}> Tournament <br>
                        </fieldset>

                        <fieldset>
                            Name:<br><input placeholder="Name" type="text" name="name" value="{{$event->name}}"
                                tabindex="2">
                        </fieldset>

                        <fieldset>
                            Season:<br> <input placeholder="Season" type="text" name="season" value="{{$event->season}}"
                                tabindex="3">
                        </fieldset>

                        <fieldset>
                            Description:<br><textarea placeholder="Description" type="text" name="description"
                                value="{{$event->description}}" tabindex="4">{{$event->description}}</textarea>
                        </fieldset>

                        <fieldset>
                            <button name="submit" type="submit" id="contact-submit"
                                data-submit="...Sending">Update</button>
                        </fieldset>
                        <p class="copyright">Designed by <a href="https://bit.ly/312kfAQ" target="_blank"
                                title="thumbnail">Pekmez_GANG</a></p>
                    </form>
                </div>
            </div>
            <div clas="col-3"></div>
        </div>
    </div>
 @endsection
