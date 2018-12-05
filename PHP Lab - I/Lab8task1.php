<?php
  $con = mysql_connect("localhost","odb","odb_0db");
        if (!$con) {
                die('Could not connect: ' . mysql_error());
        }
        else {
                echo "Connection established!<br>";
        }

        $query="select Number, Genus, Species, Blooming  from odb.Plants";
        $result= mysql_query($query, $con);
        while ($fetchdata=mysql_fetch_array($result))
        {
                echo $fetchdata[0];
        }
        
        mysql_close($con);
        exit();

?>
