<!DOCTYPE html>
<!Das ist der HTML-Code für die Unterseite "Forum". Wie bei den anderen Unterseiten und der Homepage werden hier die Verlinkungen mit der zugehörigen CSS-Datei gemacht, sodass die CSS-Datei die HTML-Datei formatieren kann. Des Weiteren ist auch hier wie bei den anderen Unterseiten die Navigation des obigen Menus eingebaut. Mithilfe der Verlinkung "href" kann man bei der Navigation auf die anderen Unterseiten zugreifen, wenn man auf die Navigation klickt. Spezifisch beim Forum ist der Code für die Kommentarliste des Forums, die ab der class="Liste" aufzufinden ist.>
<html>
<head>
    <title>Anmeldung oder Registrierung</title>
    <link rel="stylesheet" href="Forum.css">
    <link rel="stylesheet" href="Navbar.css">
</head> 
<body>
    <nav>
		<label class="logo">Forum</label>
		<ul>
			<li><a href="Homepage.html">Home</a></li>
            <li><a href="Informationen.html">Informationen</a></li>         
            <li><a href="Termine.html">Termine</a></li>
			<li><a href="Tipps.html">Tipps</a></li>
			<li><a href="http://Localhost/Project/2/Forum.php">Forum</a></li>
		</ul>
    </nav>
    <div class="Forum">
        <form action="Forum.php" method="post">
            <h1>Name: </h1><input type="text" name="username" placeholder="Name" />
            <br/>
            <br/>
            <h1> Kommentar: </h1><input type="text" name="kommentar" placeholder="Kommentar" />
            <br/>
            <br/>
            <br/>
            <br/>
            <button><input type="submit" name="posten" value="Posten" /></button>
        </form>

    </div>
    <div class="Liste">
<!Hier werden die Inhalte aus den Namens- und Kommentarsfelder in die Tabelle eingefügt, danach mit Hilfe von connect.php eine Verbindung zur Datenbank erstellt und eine Query mit allen Namen und Kommentaren aus der Tabelle erstellt. Danach wird der Inhalt der Query auf einer in einer Tabelle auf der Website dargestellt.>
        <?php 
            include('connect.php');

            $username = $_POST['username'];
            $kommentar = $_POST['kommentar'];

            $sql = "INSERT INTO forum.users(username, Kommentar) VALUES ('$username', '$kommentar');";

            mysqli_query($mysqli, $sql);

            $query = "SELECT * FROM users  ORDER BY id DESC";


            echo '<table border="0" cellspacing="2" cellpadding="2"> 
                    <tr> 
                        <th> <font face="Helvetica">Name</font> </th> 
                        <th> <font face="Helvetica">Kommentar</font> </th> 
                    </tr>';

            if ($result = $mysqli->query($query)) {
                while ($row = $result->fetch_assoc()) {
                    $username = $row["username"];
                    $kommentar = $row["Kommentar"];
                     echo ' <tr> 
                               <td>'.$username.'</td>
                              <td>'.$kommentar.'</td>
                            </tr>';
                }
            }
            echo '</table>'
        ?>
    </div>
</body>
</html>    
