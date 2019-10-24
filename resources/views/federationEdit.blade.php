<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/formaClub.css">
    <title>Update Federation</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div clas="col-3">
            </div>

            <div class="col-6">
                <br><br>

                <a href="/"><button type="button" class="btn btn-secondary btn-lg btn-block">Back</button></a>


                <form id="contact" method="POST" action="/federationEdit/{{ $federation->id }}">
                    @csrf
                    <h3>Update Federation</h3>


                    <fieldset>
                        Name:<br>
                        <input name="name" type="text" value="{{ $federation->name }}" tabindex="1" autofocus required>
                    </fieldset>
                    <fieldset>
                        History:<br>
                        <textarea name="history" type="text" value="{{ $federation->history }}" tabindex="2"
                            required>{{ $federation->history }}</textarea>
                    </fieldset>
                    <fieldset>
                        President:<br>
                        <input name="president" type="text" value="{{ $federation->president }}" tabindex="3" required>
                    </fieldset>
                    <fieldset>
                        Description:<br>
                        <textarea name="description" type="text" value="{{ $federation->description }}" tabindex="4"
                            required>{{ $federation->description }}</textarea>
                    </fieldset>

                    <fieldset>
                        <button name="submit" type="submit" id="contact-submit">Update</button>
                    </fieldset>


                    <p class="copyright">Designed by Sharks</p>
                </form>


            </div>
            <div clas="col-3">
            </div>
        </div>
    </div>
</body>

</html>