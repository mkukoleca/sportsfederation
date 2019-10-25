@extends("../layouts.master")

@section("content")

@section("title")
Rukometni savez Republike Srpske-New Club
@endsection
    <div class="container">
        <div class="row">

            <div clas="col-3">
            </div>

            <div class="col-6">
                <div class="container">
                    <br><br>
                    <a href="/clubs"><button type="button" class="btn btn-secondary btn-lg btn-block">Back</button></a>


                    <form id="contact" action="{{route('createclub')}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <h3>Add new Club</h3>
                        <fieldset>
                            <input placeholder="Name" type="text" name="name" tabindex="1" required autofocus>
                        </fieldset>
                        <fieldset>
                            <input placeholder="Address" type="text" name="address" tabindex="2" required>
                        </fieldset>
                        <fieldset>
                            <input placeholder="Email" type="email" name="email" tabindex="3">
                        </fieldset>
                        <fieldset>
                            <input placeholder="Website (optional)" type="url" name="website" tabindex="4">
                        </fieldset>
                        <fieldset>
                            <input placeholder="Date of foundation" type="date" name="dateOfFoundation" tabindex="5"
                                required>
                        </fieldset>
                        <fieldset>
                            <input placeholder="Director" type="text" name="director" tabindex="6" required>
                        </fieldset>
                        <fieldset>
                            <textarea placeholder="History" type="text" name="history" tabindex="7" required></textarea>
                        </fieldset>

                        <fieldset> Club image:
                            <input type="file" name="thumbnail" tabindex="8" required>
                        </fieldset>

                        <fieldset>
                            <button name="submit" type="submit" id="contact-submit"
                                data-submit="...Sending">Submit</button>
                        </fieldset>
                        <p class="copyright">Designed by Sharks</a></p>
                    </form>
                </div>

            </div>
            <div clas="col-3">
            </div>
        </div>

    </div>
</body>

@endsection
