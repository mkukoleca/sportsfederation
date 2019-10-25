@extends("../layouts.master")

@section("content")

@section("title")
Rukometni savez Republike Srpske-Selection
@endsection
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <br><br>
                <div class="container">
                    <a href="/selection"><button type="button"
                            class="btn btn-secondary btn-lg btn-block">Back</button></a>

                    <form id="contact" action="{{route('createSelection')}}" method="POST">
                        {{csrf_field()}}
                        <h3>Add new Selection</h3>
                        <fieldset>Gender: <br>
                            <input type="radio" value="Female" name="gender" tabindex="1" required> Female <br>
                            <input type="radio" value="Male" name="gender" tabindex="1" required> Male
                        </fieldset>

                        <fieldset>Category: <br>
                            <input type="radio" value="Senior" name="category" tabindex="2" required> Senior <br>
                            <input type="radio" value="U21" name="category" tabindex="2" required> U21 <br>
                            <input type="radio" value="U19" name="category" tabindex="2" required> U19 <br>
                            <input type="radio" value="U17" name="category" tabindex="2" required> U17 <br>
                        </fieldset>

                        <fieldset>
                            <textarea placeholder="History" type="text" name="history" tabindex="3" required></textarea>
                        </fieldset>

                        <fieldset>
                            Coach:
                            <select name="coachId">
                                @foreach ($coaches as $coach)
                                <option value="{{$coach->id}}">{{$coach->name}}</option>
                                @endforeach
                            </select>
                        </fieldset>

                        <fieldset>
                            Club:
                            <select name="clubId">
                                @foreach ($clubs as $club)
                                <option value="{{$club->id}}">{{$club->name}}</option>
                                @endforeach
                            </select>
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
