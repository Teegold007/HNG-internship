
//step 8 write a simple php script
<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php echo '<p>Hello World</p>'; ?> 
 </body>
</html>

// Step 9 - Connect to a mysql database and read something from it and display

<?php

/connect to server.
$server = mysqli_connect('localhost', 'root', '');
//connect to database.
$db = mysqli_select_db($server, 'hng_internship');
mysqli_query($server, $db);
// table contains states and their respective countries
$row = mysqli_query($server,"SELECT * FROM states");
echo '<br />[<br />';
while($state = mysqli_fetch_assoc($row))
{
    echo '{<br />';
    echo '"name" : "'. $state['name'] .'",<br />';
    echo '"country" :  "' .$state['country']. '",<br />';
    echo "},<br />";
}
echo "]<br />";
?>