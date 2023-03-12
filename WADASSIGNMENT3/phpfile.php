<?php
$name =$_GET['name'];
$email =$_GET['email'];
$age=$_GET['age'];



    $connect = mysqli_connect('localhost','root','','insert');
    $result= mysqli_query($connect,"INSERT INTO user(name,email,age) VALUES('$name','$email','$age')");
    $result = mysqli_query($connect, "SELECT * FROM user");
?>

<html>
<body>
	<br>
	<br>
	<br>
	<table width='30%' border=2 >

	<tr>

		<th>Name</th>
		<th>Email</th>
		<th>Age</th>
	</tr>
	<?php 

	while($show = mysqli_fetch_array($result)) {  		
		echo "<tr align='center'>";
		echo "<td>".$show['name']."</td>";
		echo "<td>".$show['email']."</td>";	
		echo "<td>".$show['age']."</td>";
	}

    // function Json($result) {
    //     $res = mysqli_fetch_assoc($result);
    //     if (!$res) {
    //         return json_encode([]);
    //     }
    //     $data = [
    //         "name" => $res['name'],
    //         "email" => $res['email'],
    //         "age" => $res['age'],
    //     ];
    //     $output = json_encode($data) . Json($result);
    //     return $output;
    // }
    // echo Json($result);

	

	?>
	</table>
</body>
</html>
