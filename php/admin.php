<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> National Library - Admin </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/admin.css">
    </head>

    <body>
    
        <nav class = "nav">
            <div>
                <img src="../images/library_sidebar.png">
            </div>
        
            <div class = "sidebar">

                <div>
                    <a href="php/login.php">
                         + ADD BOOKS
                    </a>
                </div>

                <div>
                    <a href="#">
                         + ADD STUDENTS
                    </a>
                </div>

                <div>
                    <a href="php/book_choices.php">
                        + BOOK CHOICES
                    </a>
                </div>

            </div>

        </nav>

        <div class = "body-text">
            <h1> Administration Portal</h1>

        </div>

        <div id="content">


            <form action="book_choices.php" method="post">
    
                <div id="header">
                    ADD A NEW BOOK
                </div>
    
                <div id="btn_add">
                    <a href="#">View Books</a>
                </div>
    
                <label for="name"> Title </label>
                <input type="text" id="title" name="title" maxlength="80">
    
                <label for="name"> Author </label>
                <input type="text" id="author" name="author" maxlength="80">

                    
                <label for="name"> Publisher </label>
                <input type="text" id="publisher" name="publisher" maxlength="80">
    
                    
                <label for="name"> Year </label>
                <input type="number" id="year" name="year" min="1901" max="2155">

                <label for="name">Genre</label>
                <select name="genre" id="genre">

                    <option value="Horror"> Horror </option>
                    <option value="Thriller"> Thriller </option>
                    <option value="Historical"> Historical </option>
                    <option value="Romance"> Romance </option>
                    <option value="Friction"> Friction </option>
                    <option value="Fantasy"> Fantasy </option>
                    <option value="Literature"> Literature </option>
                    <option value="Religion"> Religion </option>
                    <option value="Self-Help"> Self-Help </option>
                    <option value="Educational"> Educational </option>

                </select>
    
                <label for="name"> Edition</label>
                <input type="number" id="edition" name="edition" min="1" max="20">
    
                <label for="name"> ISBN </label>
                <input type="number" id="isbn" name="isbn" min="1" max="9999999999999">

                <label for="name"> Language </label>
                <input type="text" id="language" name="language" maxlength="80">

                <label for="name"> Quantity </label>
                <input type="number" id="quantity" name="quantity" min="1" max="999">

                <label for="name"> Book Price </label>
                <input type="number" id="book_price" name="book_price" min="1" max="9999">

                <label for="name"> Age Group </label>
                <select name="age_group" id="age_group">

                    <option value="Children"> Children </option>
                    <option value="Teen"> Teen </option>
                    <option value="Young Adult"> Young Adult </option>
                    <option value="Adult"> Adult </option>
                    <option value="All"> All </option>

                </select>

                <input type="submit" value="ADD" name="submit">
    
            </form>


            </div>
    
        </div>


    </body>
</html>