<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> National Library - Book Choices</title>
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/login.css">

</head>
<body>
    
<div id="container">


<div id="content">

<?php

require_once('config.php');

if(isset($_POST['submit'])) {

    $null_fields = array();

    // Title

    if(empty($_POST['title'])){
        $null_fields[] ='Title';

    }else{
        $title = trim($_POST['title']);
    }

    // Author

    if(empty($_POST['author'])){
        $null_fields[] ='Author';

    }else{
        $author = trim($_POST['author']);
    }

    // Publisher
    if(empty($_POST['publisher'])){
        $null_fields[] ='Publisher';

    }else{
        $publisher = trim($_POST['publisher']);
    }

    //Year
    if(empty($_POST['year'])){
        $null_fields[] ='Year';

    }else{
        $year = trim($_POST['year']);
    }

    // Genre
    if(empty($_POST['genre'])){
        $null_fields[] ='Genre';

    }else{
        $genre = trim($_POST['genre']);
    }

    // Edition
    if(empty($_POST['edition'])){
        $null_fields[] ='Edition';

    }else{
        $edition = trim($_POST['edition']);
    }

    // ISBN
    if(empty($_POST['isbn'])){
        $null_fields[] ='ISBN';

    }else{
        $isbn = trim($_POST['isbn']);
    }

    // Language
    if(empty($_POST['language'])){
        $null_fields[] ='Language';

    }else{
        $language = trim($_POST['language']);
    }

    // Quantity
    if(empty($_POST['quantity'])){
        $null_fields[] ='Quantity';

    }else{
        $quantity = trim($_POST['quantity']);
    }

    // Book Price
    if(empty($_POST['book_price'])){
        $null_fields[] ='Book Price';

    }else{
        $book_price = trim($_POST['book_price']);
    }



    if(empty($null_fields)){

        $sql = "INSERT INTO Books VALUES(NULL,'$title', '$author', '$publisher', '$year', '$genre','$edition', '$isbn', '$language', '$quantity', '$book_price')";

        if(!mysqli_query($connection, $sql)){
            die('Error:'.mysqli_error($connection));
        }

        echo "New book has been added";
        mysqli_close($connection);

    }
    else{
        echo "Error - You need to enter the following missing data to add a new book:<br>";

        foreach($null_fields as $null_field){
            echo $null_field."<br/>";
        }

    }

    }



?>
<div>

    <nav class = "nav">
            <div>
                <img src="../images/library_sidebar.png">
            </div>
        
            <div class = "sidebar">

                <div>
                    <a href="/login.html">
                         + ADD BOOKS
                    </a>
                </div>

                <div>
                    <a href="/login.html">
                         + ADD STUDENTS
                    </a>
                </div>

                <div>
                    <a href="/login.html">
                        + BOOK CHOICES
                    </a>
                </div>

            </div>

    </nav>

    <div class = "body-text">
        <h1> Administration Portal</h1>

    </div>

    <div id="content">

    <?php

        require_once('config.php'); 
            $sql ="SELECT BookID, Title, Author, Publisher, Year, Genre, Edition, ISBN, Language, Quantity, BookPrice  FROM Books";
            $response = @mysqli_query($connection, $sql);

        if($response){

        echo'<table>

            <tr>
                <th> Book ID </th>
                <th> Title </th>
                <th> Author </th>
                <th> Publisher </th>
                <th> Year </th>
                <th> Genre </th>
                <th> Edition </th>
                <th> ISBN </th>
                <th> Language </th>
                <th> Quantity </th>
                <th> Book Price</th>

            </tr>';

        while($row = mysqli_fetch_array($response)){
            
            echo '
                <tr>
                    <td>'.$row['BookID'].'</td>
                    <td>'.$row['Title'].'</td>
                    <td>'.$row['Author'].'</td>
                    <td>'.$row['Publisher'].'</td>
                    <td>'.$row['Year'].'</td>
                    <td>'.$row['Genre'].'</td>
                    <td>'.$row['Edition'].'</td>
                    <td>'.$row['ISBN'].'</td>
                    <td>'.$row['Language'].'</td>
                    <td>'.$row['Quantity'].'</td>
                    <td>'.$row['BookPrice'].'</td>
                </tr>';
        }
            echo '</table>';
        }

        else {

            echo "Could not get a response from database".mysqli_error($connection);
        }

            mysqli_close($connection);

    ?>

    </div>


</div>

</div>

</div>

</body>
</html>