<?php

    require 'function.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Export Data</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>

<body>
<div class="container">
			<h2>Stock Barang</h2>
			<br>
				<div class="data-tables datatable-dark">
					
                <table class="table table-bordered" id="exportstock" width=100% cellspacing="0">
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
                
            </table>
					
		    </div>
</div>
	
<script>
$(document).ready(function() {
    $('#exportstock').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy','excel', 'pdf', 'print'
        ]
    } );
} );

</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

	

</body>

</html>