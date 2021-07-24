<?php
    //connect ke database
    $conn = mysqli_connect("localhost", "root","","guestbook");
    
    if(isset($_POST['kirim_data'])){
        $nama = $_POST['name'];
        $profesi = $_POST['profesi'];
        $email = $_POST['email'];
        $comment = $_POST['comment'];

        $addtotable = mysqli_query($conn,"insert into guest_book (nama, profesi, email, comment) values('$nama','$profesi','$email','$comment')"); 
        if($addtotable){
            header('location:index.php');
        } else{
            echo 'gagal';
            header('location:isi_form.php');
        }
    }
?>