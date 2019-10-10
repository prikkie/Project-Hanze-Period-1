<?php
if (check_login() == true) {
    include '../includes/db_connect.php';

    if (isset($_POST['change'])) {
        include 'includes/db_connect.php';
        $id = $_GET['cid'];
        $query = "UPDATE leden SET 
	 naam = '" . $_POST['naam'] . "', 
	  jaar = '" . $_POST['jaar'] . "', 
	 dies = '" . $_POST['dies'] . "', 
	 date = '" . $_POST['date'] . "', 
	 spreuk = '" . $_POST['spreuk'] . "', 
	 tafel = '" . $_POST['tafel'] . "', 
	 eten = '" . $_POST['eten'] . "', 
	 allergie = '" . $_POST['allergie'] . "',
	 opmerkingen = '" . $_POST['opmerkingen'] . "',
	 email = '" . $_POST['email'] . "' 
	 WHERE id = '" . $id . "'";
        $result = mysqli_query($conn, $query) or die ("FOUT: " . mysqli_error());

        print ('<div id="melding">The changes have been saved!</div><br><br>');

    }

    if (isset($_GET['did'])) {
        $id = $_GET['did'];
        $query = "DELETE FROM leden WHERE id = '" . $id . "'";
        $result = mysqli_query($conn, $query) or die ("FOUT: " . mysqli_error());

        print ('<div id="melding">User has been deleted!</div><br><br>');

    }

    if (isset($_GET['sid'])) {

        $id = $_GET['sid'];
        $query = "SELECT * FROM leden WHERE id = '" . $id . "'";
        $result = mysqli_query($conn, $query) or die ("FOUT: " . mysqli_error());


        echo('<p class="title"><a class="linkje_titel" href="/admin/users">User Management</a> &#187; Seeing</p><br>');

        print ('<form action="" method="post">');
        print ('<table>');
        foreach ($result as $row) {
            print ('<tr>');
            print ('<th width="2%"><p class="title_center">User account</p></th><th width="10%"></th>');
            print ('</tr><tr>');
            print ('<td>Naam:</td><td>' . $row['naam'] . '</td>');
            print ('</tr><tr>');
            print ('<td>Jaarverband / extern:</td><td>' . $row['jaar'] . '</td>');
            print ('</tr><tr>');
            print ('<td>Dies of feest:</td><td>' . $row['dies'] . '</td>');
            print ('</tr><tr>');
            print ('<td>Date:</td><td>' . $row['date'] . '</td>');
            print ('</tr><tr>');
            print ('<td>Spreuk:</td> <td>' . $row['spreuk'] . '</td>');
            print ('</tr><tr>');
            print ('<td>Tafel:</td> <td>' . $row['tafel'] . '</td>');
            print ('</tr><tr>');
            print ('<td>Voorkeur eten:</td> <td>' . $row['eten'] . '</td>');
            print ('</tr><tr>');
            print ('<td>Allergie:</td> <td>' . $row['allergie'] . '</td>');
            print ('</tr><tr>');
            print ('<td>Opmerkingen:</td> <td>' . $row['opmerkingen'] . '</td>');
            print ('</tr>');

        }
        print ('</table><br><br>');
        print ('</form>');
    } else {

        if (isset($_GET['cid'])) {

            $id = $_GET['cid'];
            $query = "SELECT * FROM leden WHERE id = '" . $id . "'";
            $result = mysqli_query($conn, $query) or die ("FOUT: " . mysqli_error());
            echo('<p class="title"><a class="linkje_titel" href="/admin/users">User Management</a> &#187; Changing</p><br>');

            print ('<form action="" method="post">');
            print ('<table id="tabel_managagement">');
            foreach ($result as $row) {
                print ('<tr>');
                print ('<th><p class="title_center">Personal info</p></th><th></th>');
                print ('</tr><tr>');
                print ('<td>Naam:</td><td><input type="text" name="naam" value="' . $row['naam'] . '"></td>');
                print ('</tr><tr>');
                print ('<td>Jaarverband / extern:</td><td><input type="text" name="jaar" value="' . $row['jaar'] . '"></td>');
                print ('</tr><tr>');
                print ('<td>Dies of feest:</td><td><input type="text" name="dies" value="' . $row['dies'] . '"></td>');
                print ('</tr><tr>');
                print ('<td>Date:</td><td><input type="text" name="date" value="' . $row['date'] . '"></td>');
                print ('</tr><tr>');
                print ('<td>Spreuk:</td> <td><input type="text" name="spreuk" value="' . $row['spreuk'] . '"></td>');
                print ('</tr><tr>');
                print ('<td>Tafel:</td> <td><input type="text" name="tafel" value="' . $row['tafel'] . '"></td>');
                print ('</tr><tr>');
                print ('<td>Voorkeur eten:</td> <td><input type="text" name="eten" value="' . $row['eten'] . '"></td>');
                print ('</tr><tr>');
                print ('<td>Allergie:</td> <td><input type="text" name="allergie" value="' . $row['allergie'] . '"></td>');
                print ('</tr><tr>');
                print ('<td>Opmerkingen:</td> <td><input type="text" name="opmerkingen" value="' . $row['opmerkingen'] . '"></td>');
                print ('</tr><tr>');
                print ('<th><br><p class="title_center">Account info</p></th><th></th>');
                print ('</tr><tr>');
                print ('<td>User ID:</td> <td>' . $row['id'] . '</td>');
                print ('</tr><tr>');
                print ('<td>Email:</td> <td><input type="text" name="email" value="' . $row['email'] . '"></td>');
                print ('</tr>');
                print ('</tr><tr>');
                print ('<td></td> <td><input type="submit" name="change" value="Change!"></td>');
                print ('</tr>');
            }
            print ('</table><br><br>');
            print ('</form>');
        } else {
            $query = "SELECT * FROM leden";
            $result = mysqli_query($conn, $query) or die ("FOUT: " . mysqli_error($conn));


            echo('<p class="title" align="center">User Management</p><br>');

            echo '<table id="admin_table" align="center">';
            echo '<tr>';
            echo '<th width="5%">User ID</th>';
            echo '<th width="10%">Email</th>';
            echo '<th width="10%">Naam</th>';
            echo '<th width="10%">Jaarverband</th>';
            echo '<th width="10%">Dies</th>';
            echo '<th width="10%">Date</th>';
            echo '<th width="10%">Spreuk</th>';
            echo '<th width="10%">Tafel</th>';
            echo '<th width="10%">Eten</th>';
            echo '<th width="10%">Allergie</th>';
            echo '<th width="10%">Opmerkingen</th>';
            echo '<th width="33%">Options</th>';
            echo '</tr>';

            foreach ($result as $row) {
                echo "<tr><td align='center'>" . $row['id'] . "</td>";
                echo "<td align='center'>" . $row['email'] . "</td>";
                echo "<td align='center'>" . $row['naam'] . "</td>";
                echo "<td align='center'>" . $row['jaar'] . "</td>";
                echo "<td align='center'>" . $row['dies'] . "</td>";
                echo "<td align='center'>" . $row['date'] . "</td>";
                echo "<td align='center'>" . $row['spreuk'] . "</td>";
                echo "<td align='center'>" . $row['tafel'] . "</td>";
                echo "<td align='center'>" . $row['eten'] . "</td>";
                echo "<td align='center'>" . $row['allergie'] . "</td>";
                echo "<td align='center'>" . $row['opmerkingen'] . "</td>";

                echo "<td align='center'><a target='_self' href='users/s/" . $row['id'] . "'><img src='images/seeing.png'  height='48' width='48'></a>";
                echo "<a target='_self' href='users/c/" . $row['id'] . "'><img src='images/change.png'  height='48' width='48'></a>";
                echo '<a href="users/d/' . $row["id"] . '"'; ?>onclick="return confirm('Are you sure you want to delete this user?')"><?php
                echo '<img src="images/delete.png"  height="48" width="48"></a>';
                echo "</tr>";

            }

            echo '</table>';
        }
    }
    ?>


    <?php
} else {
    header("Location: http://projecthanze.com/admin/home");
}
?>
