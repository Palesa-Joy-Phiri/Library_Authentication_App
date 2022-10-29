<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> National Library - Update </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/admin.css">
    </head>

    <body>

        <div id="content">


            <form action="book_choices.php" method="post">
    
                <div id="header">
                    ADMINISTRATION: UPDATE BOOK
                </div>
    
                <label for="name"> Title </label>
                <input type="text" id="title" name="title" maxlength="80" value=<?php echo $title;?>>
    
                <label for="name"> Author </label>
                <input type="text" id="author" name="author" maxlength="80" value=<?php echo $author;?>>

                    
                <label for="name"> Publisher </label>
                <input type="text" id="publisher" name="publisher" maxlength="80" value=<?php echo $publisher;?>>
    
                    
                <label for="name"> Year </label>
                <input type="number" id="year" name="year" min="1901" max="2155" value=<?php echo $year;?>>

                <label for="name">Genre</label>
                <input name="genre" id="genre" value=<?php echo $genre;?>>
    
                <label for="name"> Edition</label>
                <input type="number" id="edition" name="edition" min="1" max="20" value=<?php echo $edition;?>>
    
                <label for="name"> ISBN </label>
                <input type="number" id="isbn" name="isbn" min="1" max="9999999999999" value=<?php echo $isbn;?>>

                <label for="name"> Language </label>
                <input type="text" id="language" name="language" maxlength="80" value=<?php echo $language;?>>

                <label for="name"> Quantity </label>
                <input type="number" id="quantity" name="quantity" min="1" max="999" value=<?php echo $quantity;?>>

                <label for="name"> Book Price </label>
                <input type="number" id="book_price" name="book_price" min="1" max="9999" value=<?php echo $book_price;?>>

                <label for="name"> Age Group </label>
                <input name="age_group" id="age_group" value=<?php echo $age_group;?>>

                <input type="submit" value="Update" name="submit">
    
            </form>


            </div>
    
        </div>


    </body>
</html>

