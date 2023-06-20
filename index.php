<?php
    require 'function.php';
    $students = query("SELECT * FROM masjid");

    if (isset($_POST["submit"])) {
       
      if (tambahData($_POST) > 0 ) {
          echo "
          <script>
              alert('Data Berhasil Disimpan');
              document.location.href='index.php'; 
          </script>
          ";
      } else {
          echo "
          <script>
              alert('Data Gagal Disimpan');
              document.location.href='index.php'; 
          </script>
          ";
      }
  }

  $donatur = new Prosses();
  $tnom = new Prosses();
  $tdon = new Prosses();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Masjid Wikrama</title>
</head>
<body>

<style>
    .card{
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      padding: 30.979px;
      gap: 24.36px;
      isolation: isolate;
      width: 374.66px;
      height: 461.9px;
      box-shadow: 0.974474px 7.7958px 58.4685px rgba(0, 0, 0, 0.1);
      border-radius: 19.4895px;
      }

      .card-text {
        font-style: normal;
        font-weight: 500;
        font-size: 23.3874px;
        line-height: 160%;
        color: #999999;
      }

      .card-title {
        
        font-style: normal;
        font-weight: 700;
        font-size: 37.03px;
        line-height: 47px;
        color: #181F1C;
      }

      .cad {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        padding: 38.979px;
        margin-top: 30px;
        width: 550px;
        height: 300px;
        box-shadow: 0.974474px 7.7958px 58.4685px rgba(0, 0, 0, 0.1);
        border-radius: 19.49px;
      }

      .cad h1{
        color: #1F3984;
      }

      .card-group {
        position: absolute;
        width: 404.78px;
        height: 558.19px;
        flex-direction: column;
      }

      .card-img-top {
        border-radius : 19.79px;
      }

      .gambar3 {
        height: 945.45px;
        flex: none;
        order: 1;
        align-self: stretch;
        flex-grow: 1;
        position: absolute;
        right: 40px;
        top: 315%;
        filter: drop-shadow(0.771459px 6.17167px 46.2875px rgba(0, 0, 0, 0.1));
      }

      .ccard {
        display: flex;
        flex-direction: row;
        align-items: center;
        padding: 16px 15px;
        gap: 12px;
        width: 209px;
        height: 77px;
        background: #FFFFFF;
        box-shadow: 0.974474px 7.7958px 58.4685px rgba(0, 0, 0, 0.1);
        border-radius: 15px;
      }

      .content5{
        position: absolute;
        width: 1440px;
        height: 519px;
        background: #001E42;
        top : 970%;
      }

      .prog-donatur{
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        padding: 15px;
      }
      .prog-donatur span {
        color:#FFF500;
      }
      .data-donatur{
        padding : 20px;
        justify-content :center;
        text-align: left;
      }
      .data-donatur p{
        color: #919191;
      }
      .progress{
        width: 875px;
        height: 42px;
        background: rgba(31, 57, 132, 0.15);
        border-radius: 5px;
      }

      .progress-container {
        display: flex;
        align-items: center;
      }
      .svg-icon path {
        background: #1F3984;
      }
      
      .custom-color {
        color:#1F3984;
      }

      .color-img {
        filter: brightness(0) saturate(100%) invert(24%) sepia(60%) saturate(3044%) hue-rotate(228deg) brightness(60%) contrast(101%);
      }

      .last {
      position: relative;
    }

    .logo {
      position: absolute;
      margin-top: 75px;
    }

    .tentang {
      position: absolute;
      left: 30%; 
      top: 15px; 
    }
    .contact {
      position: absolute;
      left: 60%; 
      top: 15px;
      flex:1; 
    }
    .container-fluid {
      display: flex;
      align-items: center;
    }
    
    .tentang ul li {
      margin-bottom: 12px;
    }
    input::placeholder,
    textarea::placeholder {
      color: #BDBDBD;
    }
    .input-field {
      margin-bottom: 10px;
    }

    .input {
      width: 300px;
      height: 40px;
      border-radius :10px;
      padding:5%;
    }

    textarea {
      width: 300px;
      height: 120px;
      border-radius :5px;
      padding:5%;
    }

    .submit1 {
      width: 100px;
      height: 40px;
      border-radius :10px;
      background-color :#FFF500;
      float: right;
    }
    .contact h3{
      margin-bottom: 35px;
    }

    table {
      margin-left: 5%;
      border-collapse: collapse;
      width: 80%;
    }

    table th,
    table td {
      border: none;
      padding: 8px;
      text-align: left;
    }

    table th {
      background-color: #f2f2f2;
    }

    table tr:nth-child(even) {
      background-color: #EAECF0;
    }

    table tr:hover {
      background-color: #ddd;
    }

    table a {
      text-decoration: none;
      margin-right: 8px;
    }

    table a:hover {
      text-decoration: underline;
    }


</style>

    <div class="d-flex" style="margin-top: 20px; margin-right : 3%;">
<nav class="navbar navbar-fixed-top" style="background-color: #ee7614;">
  <div class="container-fluid " style="position: absolute; margin-left: 60px;">
    <ul class="nav navbar-nav">
    <li><img class="image" border="0" src="img/wk.jpeg"  width="55px" style="border-radius:100px;" ></li>
    </ul></b>
  </div>
</nav>

  <div class="p-2 flex-grow-1" style="margin-left: 130px; font-size: 20px;">
            SMK WIKRAMA <br>BOGOR
  </div>
  <!-- <div class="nav"> -->
    <div class="p-2"><a href="#content1" style="color : #919191">Beranda</a></div>
    <div class="p-2"><a href="#content2" style="color : #919191">Cara Wakaf</a></div>
    <div class="p-2"><a href="#content3" style="color : #919191">Data Wakaf</a></div>
    <div class="p-2"><a href="#content4" style="color : #919191">Gallery</a></div>
    <div class="p-2"><a href="https://smkwikrama.sch.id" style="color : #919191">Web Wikrama</a></div>
</div>

  <!-- content 1 -->
  <div class="content1" id="content1" style="margin-left:20px;">
    <div class="text1">
        <p>Masjid Besar SMK Wikrama Bogor</p>
    <div class= "text2">
        <p>Mari <span>Tingkatkan Keimanan</span> Masyarakat SMK Wikrama Bogor</p>
    

<button type="button" name="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="height : 65px; width:250px; background: #1F3984; margin-left: 0%; margin-top: -8%; border-radius:10px;">
  Beri Bantuan Shodaqoh
</button>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Form Donatur</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <!-- form -->
        <form action="#" method="post">
            <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="string" class="form-control" id="nama" name="nama">
          </div>

          <div class="mb-3">
            <label for="id_donatur" class="form-label">ID</label>
            <input type="number" class="form-control" id="id_donatur" name="id_donatur">
          </div>

          <div class="option">
            <div class="mb-3 form-check">
              <select name="paket" id="paket">
                <option selected disabled>Pilih paket</option>
                <option value="paket 1">Paket 1</option>
                <option value="paket 2">Paket 2</option>
              </select>
            </div>
          </div>

          <div class="option">
            <div class="mb-3 form-check">
              <select name="kategori" id="kategori">
                <option selected disabled>Pilih kategori</option>
                <option value="emas">Emas</option>
                <option value="uang">Uang</option>
              </select>
            </div>
          </div>

          <div class="mb-3">
            <label for="nominal" class="form-label">Jumlah Nominal</label>
            <input type="number" class="form-control" id="nominal" name="nominal">
          </div>

          <div class="mb-3">
            <label for="nominal" class="form-label">Bukti Transaksi</label>
            <input type="file" class="form-control" id="bukti" name="bukti">
          </div>

          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
    

<img class="gambar1" src="img/ha.jpeg" style="margin-top:5px; ">
  </div>


  <img class="gambar2" src="img/wk.jpeg" style="margin-left: 87.5%;">
  <div class="card-card">
    <div class="ccard"  style="padding:15px;">
    <img src="img/daun-transformed.png">
    <div class="textt" style="font-size: 18px;">
      <b>Lingkungan Terjaga.</b>
      </div>
    </div>
    <div class="ccard"  style="padding:15px; margin-top:10px;">
    <img src="img/panah.jpeg" style="width:35px;">
    <div class="textt"style="font-size: 18px;">
      <b>Kapasitas Besar.</b>
      </div>
    </div>
    <div class="ccard"  style="padding:15px; margin-top:10px;">
    <img src="img/quran.jpeg" style="width:35px;">
    <div class="textt" style="font-size: 18px;">
      <b>Al-Qur’an Gratis.</b>
      </div>
    </div>
  </div>


  <!-- modal -->
  <div class="card text-center"style="width: 90%; height:50%; margin-top: 80px; margin-left: 5%; border-radius: 10px 10px 0 0;">
  <div class="card-body" >
  <div class="d-flex justify-content-between">
    <div class="data-donatur">
      <p>Total Target Dana</p>
      <h3 class="display-5 fw-bold"><?php
          $target = $donatur->target();
          echo "Rp." .  number_format($target); ?></h3></div>   
    <div class="data-donatur" style="padding-left: 100px;">
      <p>Total Dana Terkumpul</p>
      <h3 class="display-5 fw-bold"> <?php
          $tnom = $donatur->totalNominal();
          echo "Rp." . number_format($tnom['jumlah']); ?> </h3></div> 
    <div class="data-donatur" style="padding-left: 100px;">
      <p>Total Donatur</p>
      <h3 class="display-5 fw-bold"><?php
      $tdon=$donatur->totalDonatur();
      echo number_format($tdon);?> Orang</h3></div>   
  </div>
  <hr>
  <div class="row">
    <div class="col-8">
        <div class="progress" role="progressbar" aria-label="Terpenuhi" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="height: 35px">
            <div class="progress-bar" style="width: <?php echo $donatur->persentase(); ?>%; background-color: #1F3984;"></div>
        </div>
    </div>
    <div class="col-4">
        <b><span style="font-size: x-large; color:darkblue; margin-left: 35%;">
                <?php echo number_format($donatur->persentase()); ?>% </span> <span style="font-size: larger; color:darkblue;">Terpenuhi</span></b>
    </div>
</div>
</div>
</div>
  <div class="prog-donatur" style="background-color: #1F3984; height: 90px; width : 90%;
  margin-left:5%; display: justify; border-radius: 0 0 10px 10px;">
   <marquee behavior="scroll" direction="left"><b>
    <?php foreach ($students as $student) {
      echo '<span style="font-size: x-large; color: white;">' . $student['nama'] . " - </span>";
      echo '<span style="font-size: x-large; color: #FFF500;">' . $student['kategori'] . " : ";
      echo "RP." . $student['nominal'] . "</span>" . '<span style="display: inline-block; font-size: 30px; color: #bbb9b9; margin-left: 5px; margin-right: 5px;">  • </span>';
      }
    ?></b></marquee>
  </div>
    </div>

  <!-- banner -->

  <div id="carouselExampleIndicators" class="carousel slide" style="margin-top:50px; margin-left:65px; margin-right:65px; ">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/img-masjid/banner.png" class="d-block w-100" style="height:500px;border-radius:20px;">
    </div>
    <div class="carousel-item">
      <img src="img/img-masjid/f2.jpg" class="d-block w-100" style="height:500px;border-radius:20px;">
    </div>
    <div class="carousel-item">
      <img src="img/img-masjid/f3.jpg" class="d-block w-100" style="height:500px; border-radius:20px;">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

  <!-- content2 -->
  <div class="content2">
    <div class="text2" style="margin-left:65px; margin-top:50px;" >
        <p><span>Manfaat </span>Wakaf, infaq shodaqoh.</p>
    </div>
    <div class= "text1" style="margin-left:65px; margin-top : -80px;">
        <p>Berikut adalah beberapa keutamaan wakaf, infaq shodaqoh yang akan anda dapatkan.</p>
    </div>
  </div>

  <div class="content2">
  <img class="gambar3" src="img/tangan.png" >

    <!-- card -->
    <div class="row" style="margin-top : 70px; margin-right:30%; margin-left : 20px;">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card" style=" margin-right: 30px; margin-left:30px;" >
      <div class="card-body" style="background-image: url(img/lov.jpeg); background-size: 50%; background-repeat: no-repeat; background-position: right 0px bottom">
      <div class="svg d-flex align-items-center justify-content-center" style="background:rgba(31, 57, 132, 0.15); height:50px; width:50px; border-radius:100px;">
      <img class="color-img" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAOdJREFUSEvFldENwjAMRK+bwCTAJMAkwCTAJLAJbAK6yolCalw3clX/tErSe/
      Y5aTrMHN3M+lgMsAWwB8DnW6q8A7jJ+wHAxpjPxmgVPORDzb2nDBKsBRO4FEkNLLLEve0i4JwWlxUwKwIi4pjsLAFXAPQ2ImgVIT8WfSKURYO92tWAF4BVEIQ7b10DIi1SK2DnT0EV0J5+S9fnIKKKnL0GYA
      +4VVt7kb3XzkEaa4UMxLUKWiGquAXgnLeSv+JjAA/EFPcALMiouBegQVziUwAlhO/9b8ATU69MNj7dcB795e5kV3aeRV8SpyoZ627WkAAAAABJRU5ErkJggg==" />
        </div>
        <h5 class="card-title">Menjadikan hati lebih tenang</h5>
        <p class="card-text">Kami memberikan harga yang terbaik dibandingkan dengan Kompetitor kami</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card" style="margin-left:-5px;" >
      <div class="card-body" style="background-image: url(img/check.jpeg); background-size: 50%; background-repeat: no-repeat; background-position: right 0px bottom">
      <div class="svg d-flex align-items-center justify-content-center" style="background:rgba(31, 57, 132, 0.15); height:50px; width:50px; border-radius:100px;">
      <i class='bx bxs-badge-check custom-color' style='font-size: 2em;'></i>
      </div>
        <h5 class="card-title">Terbukanya pintu rezeki</h5>
        <p class="card-text">Allah SWT akan membuka pintu rezeki dari arah yang tidak dikira sebelumnya.</p>
      </div>
    </div>
  </div>
</div>
<div class="row" style="margin-right:30%; margin-left : 20px;">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card" style="margin-top :20px; margin-right: 30px; margin-left:30px;">
      <div class="card-body" style="background-image: url(img/check2.jpeg); background-size: 50%; background-repeat: no-repeat; background-position: right 0px bottom">
      <div class="svg d-flex align-items-center justify-content-center" style="background:rgba(31, 57, 132, 0.15); height:50px; width:50px; border-radius:100px;">
      <i class='bx bxs-check-shield custom-color' style='font-size: 2em;'></i>
      </div>

        <h5 class="card-title">Menjauhkan dari bahaya</h5>
        <p class="card-text">Rasulullah SAW pernah bersabda: “Bersegeralah untuk bersedekah, karena musibah dan bencana tidak bisa mendahului sedekah."</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card" style="margin-left:-5px; margin-top:20px;" >
      <div class="card-body" style="background-image: url(img/bin.jpeg); background-size: 50%; background-repeat: no-repeat; background-position: right 0px bottom">
      <div class="svg d-flex align-items-center justify-content-center" style="background:rgba(31, 57, 132, 0.15); height:50px; width:50px; border-radius:100px;">
        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" class="bi bi-stars" viewBox="0 0 16 16">
          <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z" style="fill: #1F3984;"/>
        </svg>
      </div>
        <h5 class="card-title">Pahala yang tak terputus</h5>
        <p class="card-text">Ini akan menolong kita di akhirat nantinya, juga dapat menyelamatkannya dari api neraka.</p>
      </div>
    </div>
  </div>
</div>
    <div>

    <div class="content2" id="content2">
    <div class="text2" style="margin-left:65px; margin-top:50px;" >
        <p><span>Cara Melakukan </span>Wakaf, infaq shodaqoh.</p>
    </div>
    <div class= "text1" style="margin-left:65px; margin-top : -80px;">
        <p>Berikut Adalah Cara Melakukan Wakaf, Infaq Shodaqoh Untuk Membantu Pembangunan Masjid Besar SMK Bogor</p>
    </div>

    <!-- card -->
    <div class="row" style="margin-top : 70px; margin-right:10%; margin-left : 20px;">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="cad" style=" margin-left:30px;" >
      <div class="card-body">
      <h1>01</h1>
        <h5 class="card-title">Isi Form Data Diri</h5>
        <p class="card-text" style="font-size: 23.39px;">Isikan form pengisian yang disediakan di form data diri, isikan dengan data diri anda dengan teliti.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="cad" style="margin-right:30%; margin-left : 30px;">
      <div class="card-body">
      <h1>02</h1>
        <h5 class="card-title">Isikan Nominal Shodaqoh</h5>
        <p class="card-text" style="font-size: 23.39px;">Isikan nominal yang akan anda shodaqohkan, pastikan isi nominal dengan seiklasnya tanpa ada paksaan apapun.</p>
      </div>
    </div>
  </div>
</div>
<div class="row" style="margin-top : 10px; margin-right:10%; margin-left : 20px;">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="cad" style=" margin-left:30px;">
      <div class="card-body">
        <h1>03</h1>
        <h5 class="card-title">Upload Bukti Pembayaran</h5>
        <p class="card-text" style="font-size: 23.39px;">Pilih motode pembayaran dan upload bukti pembayaranya.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="cad" style="margin-right:30%; margin-left : 30px;">
      <div class="card-body">
        <h1>04</h1>
        <h5 class="card-title">Verifikasi Pembayaran</h5>
        <p class="card-text" style="font-size: 23.39px;">Pembayaran anda akan di verifikasi oleh admin dan jika terverifikasi nama anda akan tampil.</p>
      </div>
    </div>
  </div>
</div>
  </div>

  <div class="content3" id="content3">
  <div class="text2" style="margin-left:65px; margin-top:50px; width: 964px; height: 162px;" >
        <p><span>Data donatur</span> Wakaf, infaq shodaqoh.</p>
    </div>
    <div class= "text1" style="margin-left:65px; margin-top : 15px; width: 928px; height: 96px;">
        <p>Berikut Adalah Data Donatur Wakaf, Infaq Shodaqoh Untuk Masjid Besar SMK Wikrama Bogor</p>
    </div>
  </div>

  <!-- table -->

   <div style="overflow: auto; width : 1275px; height: 350px;"> 
  <table border= "1" style="margin-left:5%;">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Donatur</th>
            <th>Donatur ID</th>
            <th>Paket</th>
            <th>Kategori</th>
            <th>Nominal</th>
        </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach($students as $student) {?>
                <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $student["nama"]?></td>
                <td><?php echo $student["id_donatur"]?></td>
                <td><?php echo $student["paket"]?></td>
                <td><?php echo $student["kategori"]?></td>
                <td><?php echo $student["nominal"]?></td>
                </tr>
                <?php $i++ ?>
            <?php } ?>
        </tbody>
        </table>
        </div>

   <!-- content 4 -->
  <div class="content4" id="content4">
  <div class="text2" style="margin-left:65px; margin-top:50px; width: 964px; height: 162px;" >
        <p><span>Gallery </span>Masjid Besar SMK Wikrama Bogor.</p>
    </div>
    <div class= "text1" style="margin-left:65px; margin-top : 15px; width: 928px; height: 96px;">
        <p>Berikut Adalah Gallery Masjid Besar SMK Wikrama Bogor.</p>
    </div>

    <div class="card-group" style="margin-left:45px;">
  <div class="cardd" style="margin-left:20px; ">
    <img src="img/img-masjid/ms1.png" class="card-img-top" >
  </div>
  <div class="cardd" style="margin-left:20px;">
    <img src="img/img-masjid/ms2.png" class="card-img-top" >
  </div>
  <div class="cardd" style="margin-left:20px;">
    <img src="img/img-masjid/ms6.png" class="card-img-top" >
  </div>
  </div>
  <div class="card-group" style=" margin-top:550px; margin-left:45px;">
  <div class="cardd" style="margin-left:20px;">
    <img src="img/img-masjid/ms7.png" class="card-img-top">
  </div>
  <div class="cardd" style="margin-left:20px;">
    <img src="img/img-masjid/ms10.png" class="card-img-top">
  </div>
  <div class="cardd" style="margin-left:-30px; margin-right:30px; margin-top:-50px; width:500px;">
    <a href="galeri.php"><img src="img/bukaGaleri.png" class="card-img-top"></a>
  </div>
</div>


  <div class="content5" id="content5" >
    
  <div class="last" >
  <div class="container-fluid " style="position: absolute; margin-left: 40px; ">
  <div class="logo">
    <ul class="nav navbar-nav">
    <li><img class="image" border="0" src="wikrama.svg"  width="55px" ></li>
    </ul></b>
  </div>
  </div>

  <div class="p-2 flex-grow-1" style=" margin-top:20px; margin-left: 120px; font-size: 20px; color : #fff;">
            SMK WIKRAMA <br>BOGOR
  </div>
  <div class="teks" style="color:#fff; margin-left:50px; margin-top : 50px; width:200px;">
  <p>Alamat <br>
    Jl. Raya Wangun <br>
    Kelurahan Sindangsari <br>
    Bogor Timur 16720</p>
    <hr>
    Telepon <br>
    0251-8242411 / <br>
    082221718035 (Whatsapp)
    <hr>
    <img src="img/faceb.png">
    <img src="img/twit.png">
    <img src="img/ig.png">
    <img src="img/you.png">
    </div>
    <div class="tentang" style ="color:#fff; ">
      <h3>Tentang Wikrama</h3>
      <br>
      <ul>
        <li>Sejarah</li>
        <li>Peraturan Sekolah</li>
        <li>Rencana Strategi & Prestasi</li>
        <li>Yayasan</li>
        <li>Struktur Organisasi</li>
        <li>Cabang</li>
        <li>Penghargaan</li>
        <li>Kerjasama</li>
    </div>
    <div class="contact" style="color:#fff;">
      <h3>Kirim Pesan</h3>
    <form action="mailto:elsasalsabilla@smkwikrama.sch.id" method="POST" enctype="text/plain">
    <div class="input-field">
                <input type="text" class="input" name="username" placeholder="Nama" required>
            </div>
            <div class="input-field">
                <input type="email" class="input" name="password"  placeholder="Email" required>
            </div>
            <textarea type="message" name="message" placeholder="Pesan Anda"  required></textarea>
            <div class="input-field">
                <input type="submit" class="submit1" name="submit">
            </div>
    </div>
  </div>
  </div>

</body>
</html>