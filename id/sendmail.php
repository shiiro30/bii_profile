<?php
$name = $_POST['name'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];
$subject = "Here";
$to = "abiansyah30@gmail.com";
$headers = "MIME-Version: 1.0" . "rn";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "rn";
$headers .= 'From: Bii <noreply@biiasa.ga>'."rn" . 'Reply-To: '.$name.' <'.$email.'>'."rn";
@mail($to, $subject, $message, $headers);
if(@mail) {
 echo '<script>alert("Sukses! ")</script>';
 echo '<meta http-equiv="refresh" content="0;url=index.php">';
}
else {
 echo '<script>alert("Gagal! ")</script>';
 echo '<meta http-equiv="refresh" content="0;url=index.php">';
}
?>
