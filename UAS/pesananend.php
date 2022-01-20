<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Travigo</title>
    <link rel="stylesheet" href="pesananend.css">
</head>
    <nav>
        <div class="wrapper">
            <section id="home">
                <div class="logo"><a href=''>Travigo</a></div>
                <div class="menu">
                    <ul>
                        <li><a href="Tugas Akhir Pbw.html">Home</a></li>
                        <li><a href="contactgo.html">Contact</a></li>
                        <li><a href="aboutgo.html">About</a></li>
                        <li><a href="logingo.php">Login</a></li>
                    </ul>
                </div>
            </section>
        </div>
    </nav>

    <main>
        <section>
            <fieldset>
                
                <div class="php">
                    <?php
                        if(isset($_GET['fname'])){
                            $name = $_GET['fname'];
                            $nomertlp = $_GET['fnomertlp'];
                            $alamat = $_GET['falamat'];
                            $email = $_GET['femail'];
                            $message = $_GET['fmessage'];
                        }
                        
                    ?>

                <?php 
                    echo "<br>"; 
                    echo "Selamat pesanan atas nama ".$name; echo "<br>"; echo " Status : Berhasil Dibuat"; echo "<br>";
                    echo "No Telepon: ".$nomertlp; echo "<br>";
                    echo "Alamat Pengiriman : ".$alamat; echo "<br>";
                    echo "Email Anda : ".$email; echo "<br>";
                    echo "Catatan : " .$message; echo "<br>";
                    
  				?>
                    
                </div>
        
                <div class="tblbiru"><br><a href="logingo.php">Logout</a></div>
                
                
            </fieldset>
        </section>
    </main>

</html>