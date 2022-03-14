<!DOCTYPE html>
<html>
    <head> 
        <title>Forum</title>
        <meta charset="utf-8">        
    </head>
    <body>
        <form action="register_parse.php" method="post">
            Benutzername: <input type="text" name="username" placeholder="Benutzername" />
            <br/>
            Kommentar : <input type="text" name="kommentar" placeholder="Kommentar" />
            <br/>
            <input type="submit" name="posten" value="Posten" />
        </form>
        <?php 
        include('connect.php');
        $query = "SELECT * FROM users  ORDER BY id DESC";


         echo '<table border="0" cellspacing="2" cellpadding="2"> 
              <tr> 
                    <td> <font face="Arial">username</font> </td> 
                    <td> <font face="Arial">kommentar</font> </td> 
                 </tr>';

        if ($result = $mysqli->query($query)) {
            while ($row = $result->fetch_assoc()) {
                $username = $row["username"];
                $kommentar = $row["Kommentar"];
                 echo '<tr> 
                           <td>'.$username.'</td> 
                          <td>'.$kommentar.'</td> 
                      </tr>';
              }
        }
        echo '</table>'
            ?>
        
    </body>
</html>