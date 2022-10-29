<?php

include 'book_choices.php'
include 'config.php'

if (isset($_GET['deleteBookID'])) {

    $BookID = $_GET['deleteBookID'];

    $sql = " DELETE FROM Books WHERE BookID = $BookID";
    $result = mysqli_query ($connection , $sql);

    if ($result) {
       // echo "Deleted successfully";
        header ('location:book_choices.php');
    }
    else {
        die (mysqli_error($connection));
    }

    mysqli_close($connection);

}

?>