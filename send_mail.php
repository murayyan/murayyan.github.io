<?php
$name=$_POST['nama'];
$email=$_POST['email'];
$subject="Message From Website";
$message=$_POST['message'];

$to="murayyan97@gmail.com";

$message="From:$name <br />".$message;

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

// More headers
$headers .= 'From: murayyan.com <'.$email.'>'."\r\n" . 'Reply-To: '.$name.' <'.$email.'>'."\r\n";
$headers .= 'Cc: '. $email . "\r\n"; //untuk cc lebih dari satu tinggal kasih koma
@mail($to,$subject,$message,$headers);
if(@mail)
{
echo "<script>alert('Pesan Terkirim!');history.go(-1);</script>";
}
?>