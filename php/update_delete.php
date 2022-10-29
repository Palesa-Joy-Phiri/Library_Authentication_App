<?php
 

 require_once 'book_choices.php'

 //Edit database
 require_once('config.php'); 
 $sql ="UPDATE FROM Books SET Author= '' WHERE id= ";


if(mysqli_query($connection, $sql)){
 echo "Record updated sucessfully";
} 
else {
 echo "Error updating record:" . mysqli_error($connection)
}

mysqli_close($connection);



//Delete from database
 require_once('config.php'); 
    $sql ="DELETE FROM Books where id=  ' ".$id." '";


if(mysqli_query($connection, $sql)){
    echo "Record deleted sucessfully";
} 
else {
    echo "Error deleting record:" . mysqli_error($connection)
}

mysqli_close($connection);


?>