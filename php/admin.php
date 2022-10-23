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


            <form action="member_added.php" method="post">
    
                <div id="header">
                    ADD A NEW BOOK
                </div>
    
                <div id="btn_add">
                    <a href="index.php">View Members</a>
                </div>
    
                <label for="fname">First Name</label>
                <input type="text" id="first_name" name="first_name" maxlength="80">
    
                <label for="fname">Last Name</label>
                <input type="text" id="last_name" name="last_name" maxlength="80">
    
                <label for="fname">Age</label>
                <input type="number" id="age" name="age" min="1" max="100">
    
                <label for="fname">Gender</label>
                <select name="gender" id="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
    
                <label for="fname">Relationship</label>
                <input type="text" id="relationship" name="relationship" maxlength="80">
    
                <input type="submit" value="ADD" name="submit">
    
            </form>


            </div>
    
        </div>


    </body>
</html>