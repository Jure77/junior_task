<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Junior PHP</title>
    
        <script
			  src="https://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>
<script>
$(document).ready(function(){
    let searchParams = new URLSearchParams(window.location.search);
    
    let id = searchParams.get('id');

$.ajax({
    
  method: "GET",
  url: "ajax-edit.php",
  dataType: "json",
    data: {'id': id},
    success: function(data){

      $("#id").val(data[0]);
      $("#name").val(data[1]);
      $("#surname").val(data[2]);
      $("#email").val(data[3]);
    }
    
});
    $( "#form" ).click(function(event) {
        /* stop form from submitting normally */
      event.preventDefault();
    var name = $("#name").val();
    var surname = $("#surname").val();
    var email = $("#email").val();
    var id = $("#id").val();
       $.ajax({

        method: "POST",
        url: "ajax-update.php",
        data: {'id': id, 'name': name, 'surname': surname, 'email': email},
        success: function(data){
            $(".response").html(data);
        }

      });
    });  
    });  
 

    


</script>
</head>
<body>
<form id="form" method="POST">  
 <input id="id" name="id" type="hidden" value="">
  <label>Name</label>

 <input id="name" name="name" type="text">

  <label>Surname</label>
  <input id="surname" name="surname" type="text" value="">

  <label>Email</label>
  <input id="email" name="email" type="text" value="">

<button id="submit" name="submit" type="submit" value="'submit'">Update</button>

</form>

<div class="response"></div>
</body>
</html>