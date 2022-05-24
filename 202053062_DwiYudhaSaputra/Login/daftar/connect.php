<?php
 $nama =$_POST['nama']
 $email =$_POST['email']
 $password =$_POST['password']

 //database connection//

$coon = new mysqli('localhost','root','','login');
if($coon->connect_error){
    die('Connection Failed : '.$coon->connect_error);
}else{
    $stmt = $coon->prepare("insert into login(name,email,password)
    values(?,?,?)");
    $stmt->bind_param("sss",$nama, $email, $password);
    $stmt->execute();
    echo "Pendaftaran Berhasil . . . ";
    $stmt->close();
    $coon->close();
}
?>