<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Junior PHP</title>
      <link rel="stylesheet" href="style.css">

     <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

<script type="text/javascript">
    
  $(document).ready(function(){ /* PREPARE THE SCRIPT */
      
    
    $("#select").change(function(){ /* WHEN YOU CHANGE AND SELECT FROM THE SELECT FIELD */
      var option = $(this).val(); /* GET THE VALUE OF THE SELECTED DATA */
     
      $.ajax({ /* THEN THE AJAX CALL */
        type: "POST", /* TYPE OF METHOD TO USE TO PASS THE DATA */
        url: "ajax.php", /* PAGE WHERE WE WILL PASS THE DATA */
        data: {'option': option}, /* THE DATA WE WILL BE PASSING */
        success: function(result){ /* GET THE TO BE RETURNED DATA */
          $(".show").html(result); /* THE RETURNED DATA WILL BE SHOWN IN THIS DIV */
        }
      });
    });
      
});  


</script>

</head>

<body>
<select id="select" name="select">
    <option>Options</option>
    <option value="create">Create new record</option>
    <option value="show">Show</option>
</select>
 <br><br>
       <div class="show">
           
       </div>

</body>
</html>