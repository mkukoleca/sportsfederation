@extends("../layouts.master")
@section("content")


@section("title")
Clubs-filter
@endsection

<?php

?>
<div class="container p-2 ml-0">
    <h3>Filters:</h3>

        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-4">
                    <?php $names = ['<option value="">Names</option>'];?>
                </div>
                <div class="col-12 col-sm-4">
                    <?php $addresses = ['<option value="">City</option>'];?>
                </div>
                <div class="col-12 col-sm-4">
                    <?php $directors = ['<option value="">Director</option>'];?>
                </div>
            </div>
        </div>

    <?php
        $iterateClubs = $clubs;
        if(isset($allClubs))
        	$iterateClubs = $allClubs;

        foreach($iterateClubs as $club){
            array_push($names, '<option value="'.$club->name.'">'.$club->name.'</option>');
            array_push($addresses, '<option value="'.$club->address.'">'.$club->address.'</option>');
            array_push($directors, '<option value="'.$club->director.'">'.$club->director.'</option>');
        }

   
        $names = implode('',array_unique($names));
	    $addresses = implode('',array_unique($addresses));
        $directors = implode('',array_unique($directors));
      
    ?>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-4 p-0">
                <select class="dropdown-item" style="margin-left:0px; padding:10px; border-radius:5px; color:#fff; font-size:14px; background-color:#00aab4" name="name" class="col-md-2 mr-1 ml-2 pl-1">{!! $names !!}</select>
            </div>
            <div class="col-12 col-sm-4">
                <select class="dropdown-item" style="padding:10px; border-radius:5px; color:#fff; font-size:14px; background-color:#00aab4" name="address" class="col-md-2 mr-1 pl-1">{!! $addresses !!}</select>
            </div>
            <div class="col-12 col-sm-4">
                <select class="dropdown-item" style="padding:10px; margin-left:-6%; border-radius:5px; color:#fff; font-size:14px; background-color:#00aab4" name="director" class="col-md-2 mr-1 pl-1">{!! $directors !!}</select>
            </div>

            <button type="submit" style="padding: 5px 10px; margin: 10px 5px 10px 0;" class="btn btn-primary btn-sm" id="submit_filters" >Submit</button> 
            <button type="reset" style="padding: 5px 10px; margin: 10px 5px 10px 0;" class="btn btn-secondary btn-sm" id="reset_filters" >Reset</button>
        </div>
    </div>
</div>

<script>
    let filterSubmitButton = document.getElementById("submit_filters");
    let filterResetButton = document.getElementById("reset_filters");

    filterSubmitButton.addEventListener("click", function(){
 
        let selectFields = Array.from(this.parentNode.children);
 
        selectFields.pop();
        selectFields.pop();

        selectFields.forEach(function (item, index, arr) {
            arr[index] = item.name + '=' + item.value;
        });

        window.location.href = location.pathname + "?"+ selectFields.join("&");
    });

    filterResetButton.addEventListener("click", function () {
        window.location.href = location.pathname;
    });

</script>
@endsection