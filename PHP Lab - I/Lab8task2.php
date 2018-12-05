 <?php
 $con = mysql_connect("localhost","odb","odb_0db");
        if (!$con) {
                die('Could not connect: ' . mysql_error());
        }
        else {
                echo "Connection established!<br>";
        }

        $query="select Number, Genus, Species, Blooming  from odb.Plants where Number > 650";
        $result= mysql_query($query, $con);
        while ($fetchdata=mysql_fetch_array($result))
        {
                echo $fetchdata["Number"]." ".$row["Genus"]." ".$row["Species"]." ".$row["Blooming"];
        }
        mysql_close($con);
        exit();


?>
