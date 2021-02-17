

<?php
$connection=mysqli_connect('172.18.0.2','root','toor','trucorp');
$query='SELECT * FROM Users';
$result=mysqli_query($connection,$query);
$count = 0;
while($db = mysqli_fetch_array($result)){


echo "<br>";
echo "ID 	=  ".$db['ID']."<br>";	
echo "Nama  	= ".$db['Nama']."<br>";
echo "Kantor 	= ".$db['Kantor']."<br>";
$count++;
}
echo "Jumlah Pengguna: ".$count;
mysqli_close($connection);
?>
