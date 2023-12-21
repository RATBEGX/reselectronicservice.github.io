<?php
session_start();

if (!isset($_SESSION['username'])) {
  header('Location: login.php');
  die();
}
?>
<html>

<head>
    <title>R Service Electronic</title>
    <link rel="icon" href="gambar/logo.png" />
</head>
<style>
html {
    scroll-behavior: smooth;
    overflow: hidden;
}

body {
    background-image: url("gambar/wp8018066-8k-dark-wallpapers.png");
    background-size: cover;
    background-attachment: fixed;
    padding: 0;
    margin: 0 auto;
}

.menu {
    background-color: darkgrey;
    width: 100%;
}

.menu a {
    background-color: darkgrey;
    color: black;
    text-decoration: none;
    font-size: medium;
    font-family: consolas;
    text-align: center;
    width: 100px;
    line-height: 30px;
    float: right;
    border-radius: 10%;
    border: 1px solid black;
}

.menu a:hover {
    background-color: black;
    color: white;
    border-radius: 10%;
    transition: 0.3s;
    border: 1px solid;
    cursor: crosshair;
}

.runningtext {
    background-color: darkgray;
    color: balck;
    font-size: xx-large;
    margin-bottom: 5px;
}

.logoprof {
    border-radius: 100%;
    border: 5px solid darkgray;
    width: 180px;
    height: 180px;
    margin: 0;
    padding: 0;
    float: left;
}

#judul {
    color: white;
    margin-left: 17%;
    margin-bottom: 0%;
}

#desk {
    color: white;
    margin-left: 20px;
}

.homee {
    background-image: url("gambar/wp8018066-8k-dark-wallpapers.png");
    background-size: cover;
    height: 100vh;
}

.profilee {
    background-image: url("./gambar/wp5788252-asus-rog-dark-4k-wallpapers.jpg");
    background-size: cover;
    height: 100vh;
}

.adssee {
    background-image: url("gambar/wp5788252-asus-rog-dark-4k-wallpapers.jpg");
    background-size: cover;
    height: 100vh;
}

#wa {
    width: 20%;
    height: 40%;
    background-color: darkgray;
    float: left;
    margin-left: 7%;
    border-radius: 7%;
    transition: 0.3s;
}

#fb {
    width: 20%;
    height: 40%;
    background-color: darkgray;
    float: left;
    margin-left: 13%;
    border-radius: 7%;
    background-attachment: scroll;
    transition: 0.3s;
}

#yt {
    width: 20%;
    height: 40%;
    background-color: darkgray;
    float: right;
    margin-right: 7%;
    border-radius: 7%;
    transition: 0.3s;
}

#wa:hover {
    background-color: rgb(0, 255, 0);
    color: white;
    transition: 0.3s;
}

#fb:hover {
    background-color: rgb(0, 0, 255);
    color: white;
    transition: 0.3s;
}

#yt:hover {
    background-color: rgb(255, 0, 0);
    color: white;
    transition: 0.3s;
}

#applogo {
    width: 150px;
    height: 150px;
    margin: 10%;
    transition: 0.3s;
}


#applogo:hover {
    width: 180px;
    height: 180px;
    transition: 0.3s;
    cursor: crosshair;
}

#isi {
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 255, 0.3);
}

#form {
    background-color: black;
    width: 300px;
    height: 270px;
    border: 1px solid white;
}

#board {
    width: 100%;
    height: 100%;
    color: white;
}

button {
    border-radius: 50px;
    margin-left: 20px;
    margin-top: 10px;
    float: left;
}
</style>

<body>
    <header id="atas"></header>
    <marquee class="runningtext">Selamat datang di web sederhana saya dan silahkan berjelajah dengan
        santuy :)</marquee>
    <div class="menu">
        <a href="#about">About</a>
        <a href="#address">Address</a>
        <a href="#profile">Profile</a>
        <a href="#home">Home</a>
        <a href="#upload">Upload</a>
        <a href="logout.php">Logout</a>
    </div>
    <div style="margin: 2%">
        <img class="logoprof" src="./gambar/profil.jpg" alt="" />
    </div>
    <br /><br />
    <h1 id="judul">WEB BIODATA SEDERHANA</h1>
    <font id="desk"> Silahkan klik salah satu link untuk melihat lihat</font>
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <div id="wa">
        <div style="text-align: center">
            <div style="margin-top: 20px; font-weight: bold; font-size: x-large">
                Whatsapp
            </div>
            <div>
                <a href="https://wa.me/088216915475"><img id="applogo" src="gambar/wa.png" /></a>
            </div>
        </div>
    </div>
    <div id="fb">
        <div style="text-align: center">
            <div style="margin-top: 20px; font-weight: bold; font-size: x-large">
                Facebook
            </div>
            <div>
                <a href="fb.html"><img id="applogo" src="gambar/fb.png" /></a>
            </div>
        </div>
    </div>
    <div id="yt">
        <div style="text-align: center">
            <div style="margin-top: 20px; font-weight: bold; font-size: x-large">
                YouTube
            </div>
            <div>
                <a href="yt.html"><img id="applogo" src="gambar/yt.png" /></a>
            </div>
        </div>
    </div>
    <div style="height: 100%"></div>
    <div id="board" class="homee">
        <header id="home"></header>
        <div class="menu">
            <a href="#profile">Profile</a>
            <a href="#address">Address</a>
            <a href="#about">About</a>
            <a href="#atas">kembali</a>
        </div>
        <div style="display: inline-block; margin: 5%">
            <h1>
                <font style="font-size: 50; font-family: cut it out">WELCOME</font>
            </h1>
        </div>
        <div id="isi">
            <div>
                Selamat datang di web sederhana saya yang hanya menggunakan html dan
                css saja <br />
                untuk tampilan kedepannya masih saya usahakan untuk lebih baik lagi
                terimakasih :)

            </div>
        </div>
    </div>

    <div id="board" class="profilee">

        <header id="profile"></header>
        <div class="menu">
            <a href="#home">Home</a>
            <a href="#address">Address</a>
            <a href="#about">About</a>
            <a href="#atas">kembali</a>
        </div>
        <div>
            <div style="display: inline-block; margin: 5%">
                <h1>
                    <font style="font-size: 50; font-family: cut it out">PROFIL SAYA</font>
                </h1>
            </div>
            <font style="color: white">\
                <br />
                berikut profil saya <br />
                <li>Nama : Muhammad Ragil Syahnam Maulidi</li>
                <li>NIM : 2112110001</li>
                <li>Prodi: Teknik Informatika</li>
                <li>Hobi : memperbaiki semua jenis barang elektronik yang rusak</li>
                <br />
                <br />
                sudah itu saja
            </font>
        </div>
    </div>

    <div id="board" class="adssee">

        <header id="address"></header>
        <div class="menu">
            <a href="#home">Home</a>
            <a href="#profile">Profile</a>
            <a href="#about">About</a>
            <a href="#atas">kembali</a>
        </div>
        <div>
            <div style="display: inline-block; margin: 5%">
                <h1>
                    <font style="font-size: 50; font-family: cut it out">ALAMAT SAYA</font>
                </h1>
            </div>
            <div style="filter: blur(3px)">
                Sedagaran sidayu gresik <br />
                pasti pingin lihat pakai mode inspect :v <br />
                dan block copy paste :v
            </div>
        </div>
    </div>

    <div id="board" class="aboutt">

        <header id="about"></header>
        <div class="menu">
            <a href="#home">Home</a>
            <a href="#profile">Profile</a>
            <a href="#address">Address</a>
            <a href="#atas">kembali</a>
        </div>
        <div>
            <div style="display: inline-block; margin: 5%">
                <h1>
                    <font style="font-size: 50; font-family: cut it out">TENTANG SAYA</font>
                </h1>
            </div>
            <div>belum sempat keburu turu</div>
        </div>
    </div>

    <div id="board" class="aboutt">

        <header id="upload"></header>
        <div class="menu">
            <a href="#home">Home</a>
            <a href="#profile">Profile</a>
            <a href="#address">Address</a>
            <a href="#atas">kembali</a>
        </div>
        <div>
            <div style="display: inline-block; margin: 5%">
                <h1>
                    <font style="font-size: 50; font-family: cut it out">upload file</font>
                </h1>
                <div align="center" id="form">
                    <h1>upload file yang kamu suka</h1>
                    <div class="form-container">
                        <form method="POST" action="upload.php" enctype="multipart/form-data">
                            <label for="nama">Nama:</label>
                            <input type="text" id="nama" name="nama" required /><br />

                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" required /><br />

                            <label for="pesan">Pesan:</label>
                            <textarea id="pesan" name="pesan" required></textarea>
                            <br />
                            <label for="lampiran">Lampiran:</label>
                            <input type="file" id="lampiran" name="lampiran" />

                            <input type="submit" value="Kirim" />
                            <input type="submit" value="lihat" onclick="">
                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>