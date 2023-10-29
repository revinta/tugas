<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row>
      <div class="col-6>
      <h1>Form Registrasi</h1>
      <form action="" method="post">
        <div class="mb-3">
            <label for="nama" class="form-label">Isikan Nama</label>
            <input type="text" class="form-control" name="nama" id="nama"
            placeholder="Nama anda" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Isikan Alamat</label>
            <textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="tempat lahir" class="form-label">Isikan Tempat Lahir</label>
            <input type="text" class="form-control" name="tempat lahir" id="nama"
            placeholder="Tempat Lahir" required>
        </div>
        <div class="mb-3">
            <label for="tanggal lahir" class="form-label">Isikan Tanggal Lahir</label>
            <input type="text" class="form-control" name="tanggal lahir" id="nama"
            placeholder="Tanggal Lahir" required>
        </div>
        <div clas="from-group">
            <label for="jenis">Jenis Kelamin</label>
        <div class="mb3">
            <label class="radio-inline">
            <input type="radio" name="jenis" id="jenis" value="Laki-Laki"required data-fv-notempy-message="Tidak boleh kosong"> Laki-laki
            </label>
            <label class="radio-inline">
            <input type="radio" name="jenis" id="jenis" value="Perempuan"required data-fv-notempy-message="Tidak boleh kosong"> Perempuan
            </label>
        </div>
        <div clas mb="3">
            <label for="pendidikan" name="pendidikan" id="pendidikan">Pendidikan</label>
            <select class="form-select" name="pendidikan" aria-label="Default select example">
            <option value="S1">S1</option>
            <option value="S2">S2</option>
            <option value="S3">S3</option>
        </select>
        </div>
        <div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-primary">Cancel</button>
        </div>
    </form>
    </div>
</div>

<?php
error_reporting(0);
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$tempat_lahir=$_POST['tempat lahir'];
$tanggal_lahir=$_POST['tanggal lahir'];
$jenis_kelamin=$POST['jenis kelamin'];
$pendidikan=$POST=['pendidikan'];
if(!empty($nama) && !empty($alamat) && !empty($tempat_lahir) && !empty($tanggal_lahir) && !empty($jenis_kelamin) && !empty($pendidikan)){ ?>
<div class="row">
    <div class="col-6">
        <table class="table table-striped table-hover">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?= $nama;?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><?= $alamat;?></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><?= $tempat_lahir;?></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><?= $tanggal_lahir;?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><?= $jenis_kelamin;?></td>
            </tr>
            <tr>
                <select>
                <td><Pendidikan></td>
                <td>:</td>
                <td><?= $pendidikan;?></td>
</select>
            </tr>   
        </table>
</div>
</div>
<?php } ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
