```
<?php 
$dbms='mysql';
$dbName='sf_crm';
$user='root';
$pwd='';
$host='localhost';
$dsn="$dbms:host=$host;dbname=$dbName";
	try {
		$pdo=new PDO($dsn,$user,$pwd);
		echo "PDO connect successfull";
	} catch (Exception $e) {
		echo $e->getMessage()."<br";
	}
?>
```
