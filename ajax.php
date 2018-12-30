<?php
include_once 'mysql_connection.php';
        
 if(!empty($_POST["option"])){

     $option = $_POST["option"];
     
     if($option == 'create'){
         echo '<form action="store.php" method="POST">
        <label>Name</label>
        <input id="name" name="name" type="text">

        <label>Surname</label>
        <input id="surname" name="surname" type="text">

        <label>Email</label>
        <input id="email" name="email" type="text">

        <button name="submit" type="submit" value="submit">Submit</button>
    </form>';
     } else if ($option == 'show'){
         
           $sql = "SELECT * FROM users";

        $result = mysqli_query($conn, $sql);
    
        $data = array();
   
  
        if (mysqli_num_rows($result) > 0) {
           
            while($row = mysqli_fetch_assoc($result)) {
        
               $data[] = $row;

            }
        } else {
            echo "0 results";
        }

        
         echo '
         <table class="table">
            <tr>

                <th>Name</th>
                <th>Surname</th>
                <th>Email</th>
                <th>Edit</th>
            </tr>';
         

         foreach($data as $array){
            echo '<tr>
            <td>'.$array["name"].'</td>
            <td>'.$array['surname'].'</td>
            <td>'.$array['email'].'</td>
            <td><a href="edit.php?id='.$array['ID'].'">Edit</a></td>
            </tr>';
            
         }
         echo '</table>';
   
     } 

    
}