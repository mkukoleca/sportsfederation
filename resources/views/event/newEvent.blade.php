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

                    <form id="contact" action="{{route('createEvent')}}" method="POST">
                        {{csrf_field()}}
                        <h3>Add new Event</h3>
                        <fieldset>Type: <br>
                            <input type="radio" value="League" name="type" tabindex="1" required> League <br>
                            <input type="radio" value="Cup" name="type" tabindex="1" required> Cup <br>
                            <input type="radio" value="Tournament" name="type" tabindex="1" required> Tournament <br>
                        </fieldset>

                        <fieldset>
                            <input placeholder="Name" type="text" name="name" tabindex="2" required>
                        </fieldset>

                        <fieldset>
                            <input placeholder="Season" type="text" name="season" tabindex="3" required>
                        </fieldset>

                        <fieldset>
                            <textarea placeholder="Description" type="text" name="description" tabindex="4"
                                required></textarea>
                        </fieldset>

                        <fieldset>
                            <button name="submit" type="submit" id="contact-submit"
                                data-submit="...Sending">Submit</button>
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
