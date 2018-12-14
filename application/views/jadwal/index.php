<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Jadwal Mata Kuliah</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>css2.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});
</script>
</head>

<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
						<h2><b>Jadwal Mata Kuliah</b></h2>
					</div>
					<div class="col-sm-7">
						<a href='<?php echo base_url("jadwal/tambah"); ?>' class="btn btn-primary"><i class="material-icons">&#xE147;</i> <span>Tambah Data</span></a>					
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Hari</th>						
						<th>Mata Kuliah</th>
						<th>Nama Dosen</th>
                        <th>Kode Ruangan</th>
						<th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        if( ! empty($jadwal)){
                            foreach($jadwal as $data){
                                echo "<tr>
                                <td>".$data->no."</td>
                                <td>".$data->hari."</td>
                                <td>".$data->mk."</td>
                                <td>".$data->dosen."</td>
                                <td>".$data->kode."</td>
                                <td><a href='".base_url("jadwal/ubah/".$data->no)."'class='settings' title='Settings' data-toggle='tooltip'><i class='material-icons'>&#xE8B8;</i></a>
                                    <a href='".base_url("jadwal/hapus/".$data->no)."' class='delete' title='Delete' data-toggle='tooltip'><i class='material-icons'>&#xE5C9;</i></a></td>
                                </tr>";
                            }
                        }else{ // Jika data siswa kosong
                                echo "<tr><td align='center' colspan='6'>Data Tidak Ada</td></tr>";
                        }
                        ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>     
</body>
</html>                                		                            