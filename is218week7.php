<?php
	$hostname = "sql2.njit.edu" ; 
	$username = "mb535" ;
	$password = "RzYw6ASGz";
	$dsn = "mysql:host=$hostname;dbname=$username";
	//$db = newPDO();
	try{
		$db= new PDO($dsn,$username,$password);
	} catch(PDOException $error){
		echo '<h3> DB error</h3> ';
		echo $error->getMessage();
		exit();
	} catch(Exception $error){
		echo '<h3> Generic error</h3> ';
		echo $error->getMessage();
		exit();
	}
  echo "Connected successfully";
	$query= 'SELECT * FROM accounts WHERE id<:userid';
	$statement= $db->prepare($query);
	$statement->bindValue(':userid', 6);
	$statement->execute();

	$accounts = $statement->fetchAll();
  $count = $statement->rowCount();
	$statement->closeCursor();
  
	//print_r($todos);
?>

<ul>
  <?php echo "Results: ".$count; ?>
  <table>
  <tr> <td>Id</td> <td>Email</td> </tr>
  <?php foreach($accounts as $acc): ?>
  <tr>
    <td><?php echo $acc['id']; ?></td>
    <td><?php echo $acc['email']; ?></td>
  </tr>	
  <?php endforeach; ?>
  </table> 
  
</ul>


<style>
table, td, caption { border: 2px solid blue ; padding: 10px; } 
td { border: 1px solid green ; }
</style>