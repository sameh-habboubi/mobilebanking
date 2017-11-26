<?php
    //open connection to mysql db
	    $connection = mysqli_connect("localhost","adminH7EqKdE","6dUaa3yC8dxL","mobilebanking") or die("Error " . mysqli_error($connection));

	
    //fetch table rows from mysql db
    $sql = "select * from transaction  ";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $quesarray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $quesarray[] = $row;
    }
    echo("{ \"Transactions\" :".json_encode($quesarray,512)." }");

    //close the db connection
    mysqli_close($connection);
?>