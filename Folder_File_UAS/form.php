<?php
    require 'function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/445f94dbc0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Website UAS</title>
</head>
<body>
    <div class="container">
        <header>
            <h3>Ferry Munandar</h3>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php">Profil</a></li>
                    <li>
                        <div class="dropdown">
                            <button class="dropbtn">Contact <i class="fas fa-caret-down"></i></button>
                            <div class="dropdown-content">
                                <a href="https://www.instagram.com/munandar.ferry/"><i class="fab fa-instagram"></i> Instagram</a>
                                <a href="https://t.me/mndrferry"><i class="fab fa-telegram"></i> Telegram</a>
                                <a href="mailto:muhammadferrymunandar@gmail.com"><i class="far fa-envelope"></i> Email</a>
                            </div>
                        </div>                    
                    </li>
                    <li>
                        <div class="dropdown">
                            <button class="dropbtn">Form <i class="fas fa-caret-down"></i></button>
                            <div class="dropdown-content">
                                <a href="isi_form.php">Isi guestbook</a>
                                <a href="form.php">Liat Data</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </header>
        <div class="data">
            <center><h1>Data Guest Book</h1><br></center>
            <a href="cetak.php" class="button"><button> Export Data  <i class="fas fa-file-export"></i></button></a>
            <center>
            <table class="tbl" border="1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Profesi</th>
                        <th>Email</th>
                        <th>Comment</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i = 1;
                        $ambilsemuadata = mysqli_query($conn,"select * from guest_book");
                                            while($data=mysqli_fetch_array($ambilsemuadata)){
                                                $nama = $data['nama'];
                                                $profesi = $data['profesi'];
                                                $email = $data['email'];
                                                $comment = $data['comment'];
                    ?>
                    <tr>
                        <td>&nbsp;<?=$i++;?>&nbsp;</td>
                        <td>&nbsp;<?=$nama;?>&nbsp;</td>
                        <td>&nbsp;<?=$profesi;?>&nbsp;</td>
                        <td>&nbsp;<?=$email;?>&nbsp;</td>
                        <td>&nbsp;<?=$comment;?>&nbsp;</td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
                
            </table></center>
            
        </div>
    </div>
    </body>
</html>