<?php

 $con = mysql_connect("localhost","odb","odb_0db");
        if (!$con) {
                die('Could not connect: ' . mysql_error());
        }
        else {
                echo "Connection established!"."<br/>";
        }
        echo "Now checking for table!!"."<br/>";
        if($_GET['submit']=='submit'){
        echo "You Entered ".$_GET['number']."  and below is your data for it"."<br/>";
        $query="select Number, Genus, Species, Blooming  from odb.Plants where Number= ".$_GET['number'];
        $result= mysql_query($query, $con);
        while ($fetchdata=mysql_fetch_array($result)){
                echo $fetchdata["Number"]." ".$fetchdata["Genus"]." ".$fetchdata["Species"]." ".$fetchdata["Blooming"];
        } 
}      
mysql_close($con);
        exit();
?>
