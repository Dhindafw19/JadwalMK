<!DOCTYPE html>
<html>
<html lang="en">

<head>
  <title>Tambah Data</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="<?php echo base_url(); ?>css3.css"> 
</head>

<body>

<div class="container">  
<div id="contact">
    <h3>Ubah Data</h3>
    <div style="color: red;"><?php echo validation_errors(); ?></div>
    <?php echo form_open("jadwal/ubah/".$jadwal->no); ?>
    <fieldset>
      <input placeholder="No" name="input_no" type="text" value="<?php echo set_value('input_no', $jadwal->no); ?>" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Hari" name="input_hari" type="text" value="<?php echo set_value('input_hari', $jadwal->hari); ?>" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Mata Kuliah (maks. 20)" name="input_mk" type="text" value="<?php echo set_value('input_mk', $jadwal->mk); ?>" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Nama Dosen" name="input_dosen" type="text" value="<?php echo set_value('input_dosen', $jadwal->dosen); ?>" tabindex="4" required>
    </fieldset>
    <fieldset>
      <input placeholder="Kode Ruangan" name="input_kode" type="text" value="<?php echo set_value('input_kode', $jadwal->kode); ?>" tabindex="5" required>
    </fieldset>
    <fieldset>
      <input type="submit" name="submit" value="Ubah">
      <a href="<?php echo base_url(); ?>"><input type="button" value="Batal"></a>
    </fieldset>
<?php echo form_close(); ?>
</div>
</div>

</body>
</html>

