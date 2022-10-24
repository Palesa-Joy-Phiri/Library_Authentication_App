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