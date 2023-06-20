<?php

require_once "koneksi.php";
include "donatur.php";

$conn = new Koneksi;
$donatur = new Donatur($conn->pr_masjid());

if(isset($_POST['kirim'])) {
    $nama = $_POST['nama'];
    $id = $_POST ['donaturid'];
    $paket = $_POST['paket'];
    $kategori = $_POST['kategori'];
    $nominal = $_POST['nominal'];
    $bukti = $_POST['bukti'];

$donatur->tambahData($nama,$id,$paket,$kategori,$nominal,$bukti);
echo'<script>alert("Berhasil menambahkan data!");</script>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Selamat Datang!</title>
</head>
<body>
<div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Donatur Masjid SMK Wikrama Bogor</h5>
      </div>

    <form>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Username :</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Masukkan Username">
    </div>
    <div class="mb-3">
      <label for="disabledSelect" class="form-label">Paket :</label>
      <select id="disabledSelect" class="form-select">
        <option>Paket A</option>
        <option>Paket B</option>
      </select>


    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
      
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->

</body>
</html>