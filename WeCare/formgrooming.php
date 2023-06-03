<?php
 
include 'config.php';
 
if (isset($_POST['submit'])) {
	$nama_anda = $_POST['nama_anda'];
	$nama_hewanpeliharaan = $_POST['nama_hewanpeliharaan'];
	$email = $_POST['email'];
	$jenis_hewanpeliharaan = $_POST['jenis_hewanpeliharaan'];
	$ras_hewanpeliharaan = $_POST['ras_hewanpeliharaan'];
	$keterangan = $_POST['keterangan'];
 
 
	$sql = "INSERT INTO `grooming` (`id_owner`, `nama_anda`, `nama_hewanpeliharaan`, `email`, `jenis_hewanpeliharaan`, `ras_hewanpeliharaan`, `keterangan`) VALUES ('', '$nama_anda', '$nama_hewanpeliharaan', '$email', '$jenis_hewanpeliharaan', '$ras_hewanpeliharaan', '$keterangan')";
	// $result = mysqli_query($conn, $sql);
	if ($conn->query($sql) === TRUE) {
        echo "<script>alert('berhaasil')</script>";
        header("Location: " . $_SERVER['PHP_SELF']);
 
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
 
        $conn->close();
}

?>

<html>
  <head>
    <title>Form Identitas</title> 
    <link rel="stylesheet" type="text/css" href="styleWeCare_form.css">
  </head>
  <body> 
    <form action="index.php" method="POST">
      <input type="Buat Janji"/>
    </form>
    <body>
    <div class="container">
        <form id="contact" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            <?php if(!empty($notify)){ ?>
                <p class="notify <?php echo !empty($notifyClass)?$notifyClass:''; ?>"><?php echo $notify; ?></p>
            <?php } ?>
            <h3>Formulir Buat Janji</h3>
            <h4>Dimohon mengisi dengan Baik dan benar.</h4>
            <fieldset>
                <input placeholder="Nama Anda" type="text" name="name" tabindex="1" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Nama Hewan Peliharaan Anda" type="text" name="name" tabindex="1" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Email Anda" type="text" name="email" tabindex="2" required>
            </fieldset>
            <fieldset>
                <input placeholder="Jenis Hewan Peliharaan" type="text" name="subject" tabindex="4" required>
            </fieldset>
            <fieldset>
                <input placeholder="Ras Hewan Peliharaan" type="text" name="subject" tabindex="4" required>
            </fieldset>
            <fieldset>
                <textarea placeholder="Keterangan layanan yang dipilih" name="message" tabindex="5" required></textarea>
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Mengirim pesan">Kirim</button>
            </fieldset>
        </form>
    </div>
  </body>
</html>


