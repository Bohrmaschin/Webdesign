<?php
    include('connect.php');

    $username = $_POST['username'];
    $kommentar = $_POST['kommentar'];

    $sql = "INSERT INTO forum.users(username, Kommentar) VALUES ('$username', '$kommentar');";
        
    mysqli_query($mysqli, $sql);
        
        $query = "SELECT * FROM users ORDER BY id DESC";


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