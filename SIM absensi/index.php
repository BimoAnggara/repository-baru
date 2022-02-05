<!-- <!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="Conetent-Type" content="text/html; charset=utf-8" />
  <title>SIM Absensi</title>
</head>
<body>
  <?php
    if (isset($_POST['admin'])){
        echo "<script>document.location.href='admin'</script>";
    }
    
    if (isset($_POST['pd'])){
        echo "<script>document.location.href='pesertadidik'</script>";
    }
  ?>

  <form action="" method="post">
    <table align="center">
      <tr>
        <td colspan="2" align="center">Login Sebagai: </td>
      </tr>
      <tr>
        <td><input type="submit" name="admin" value="Administator"></td>
        <td><input type="submit" name="pd" value="Peserta Didik"></td>
      </tr>
    </table>
  </form>
</body>
</html> -->


<!DOCTYPE html>
<html>
<head>
	<title>SIM ABSENSI</title>
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="stylesheet" href="css/awal.css">
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
</head>
<body>

    <section>
        <!--- navigation --->
        <nav>
            <!--- logo --->
            <a href="#" class="logo"><span>A</span>bsensi</a>
            <!--- menu --->
        </nav>

        <!--- text --->
		<div class="text-container">

    <?php
    if (isset($_POST['admin'])){
        echo "<script>document.location.href='admin'</script>";
    }
    
    if (isset($_POST['pd'])){
        echo "<script>document.location.href='pesertadidik'</script>";
    }
    ?>

			<p>Hello, User</p>
		    <p>Welcome to</p>
			<p>Website SIM ABSENSI Siswa</p>
            <p>Website Untuk Absen Siswa/i SMK WIKRAMA</p>

      <form action="" method="post">
        <input type="submit" name="admin" value="Administrator" class="hire-btn">
        <input type="submit" name="pd" value="Peserta Didik" class="down-cv">
      </form>
		</div>
        <!-- model -->
        <img alt="model" class="model" src="./bg/bg1.png"> 
    </section>


    <div class="social">
        <a href="#"><i class="fab fa-whatsapp"></i></a>
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
    </div>

    <img class="big-circle" src="./bg/big-eclipse.svg" alt="" />
    <img class="medium-circle" src="./bg/mid-eclipse.svg" alt="" />
    <img class="small-circle" src="./bg/small-eclipse.svg" alt="" />
</body>
</html>