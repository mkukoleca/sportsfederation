<?php

?>
<div class="container p-2 ml-0">
    <h3>Filters:</h3>

    <?php
       
        $names = ['<option value="">Names</option>'];
	    $addresses = ['<option value="">City</option>'];
        $directors = ['<option value="">Director</option>'];

      
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
    <div class="row">
        <select class="dropdown-item" name="name" class="col-md-2 col-12 mr-1 ml-2 pl-1">{!! $names !!}</select>
        <select class="dropdown-item" name="address" class="col-md-2 col-12 mr-1 pl-1">{!! $addresses !!}</select>
        <select class="dropdown-item" name="director" class="col-md-2 col-12 mr-1 pl-1">{!! $directors !!}</select>

        <button type="submit" class="btn btn-primary btn-sm" id="submit_filters" >Submit</button> 
        <button type="reset"class="btn btn-secondary btn-sm" id="reset_filters" >Reset</button>
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