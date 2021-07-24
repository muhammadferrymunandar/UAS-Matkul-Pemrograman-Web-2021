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
        <div class="guestbook" id="guest">
                <center><h1> Isi Guest Book </h1><br>
                <form name="form1" method="post">
                    <table width="58%" border="0" align="center">
                        <tr>
                            <td>Full name</td>
                            <td><input name="name" type="text" id="name"></td>
                        </tr>
                        <tr><td>&nbsp;</td></tr>
                        <tr>
                            <td>Profession</td>
                            <td><input name="profesi" type="text" id="profesi" ></td>
                        </tr>
                        <tr><td>&nbsp;</td></tr>
                        <tr>
                            <td>E-Mail</td>
                            <td><input name="email" type="text" id="email" ></td>
                        </tr>
                        <tr><td>&nbsp;</td></tr>
                        <tr>
                            <td>Comment</td>
                            <td><textarea name="comment" id="comment" cols="40" rows="10"></textarea></td>
                        </tr>
                        
                        <tr>
                            <td>&nbsp;</td>
                            <td><button class="submit" name="kirim_data">Kirim</button> &nbsp; <button class="riset" type="reset">Batal</button></td>
                        </tr>
                    </table>
                </form>
                <br><br>
                <div class="liat_guestbook"><strong><a href="form.php"> <i class="fas fa-address-book"></i> See Guest book data</a></strong></div>     
                </center>
        </div>
</body>
</html>