<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Yuaini.css">
    <title>CV YUAINI</title>
</head>
<body>
    
    <table cellspacing="0" cellpadding="0">
        <tr class="top">
            <td class="td1">
                <img src="Acara_Yuaini Pranajelita.png">
                <?php 
                $email = "<p>yuainipranajelita@gmail.com</p>";
                echo $email;
                $no_telepon = "<p>08155905518</p>"; 
                echo $no_telepon;                  
                $alamat = "<p>Ds. Bandung Wetan RT 03/ RW 02, Kec. Gedeg, Kab. Mojokerto</p>";
                echo $alamat; 
                ?>
            </td>
            <td class="td2">
                <?php 
                $nama = "<h2>Yuaini Pranajelita<hr></h2>";
                echo $nama;?>
                <h2 class="haha">MAHASISWA UPN "Veteran" Jawa Timur</h2>
            </td>
        </tr>
        <tr class="middle">
            <td class="td3">
            <?php
                $Judul1 = "<b><h3>BIO</h3></b>";
                echo $Judul1;
                $deskripsi = "<p>Saya adalah mahasiswa yang aktif dalam organisasi dan aktif dalam kepanitiaan di kampus. 
                    selain itu saya juga mempunyai bakat di bidang olahraga yakni taekwondo. 
                    Prestasi yang saya kumpulkan juga cukup banyak mulai dari tingkat provinsi hingga nasional. 
                    Saya lahir di Kota Mojokerto pada tanggal 06 Maret 2003.";
                $tgllahir = ("2003-03-06");
                $hari_ini=date ("y-m-d");
                $umur =date_diff(date_create($tgllahir), date_create($hari_ini))->y;
                echo $deskripsi;
                echo " Umur saya saat ini adalah $umur tahun.";?>
                </p>
            </td>
            <td class="td4">
                <?php
                $Judul2 = "<b><h3>PENDIDIKAN</h3></b>";
                echo $Judul2;?>
                <p>
                    <ul>
                        <li>SD Negeri Bandung 2 (2009-2015)</li>
                        <li>SMP Negeri 1 Gedeg (2015-2018)</li>
                        <li>SMA Negeri 1 Gedeg (2018-2021)</li>
                        <li>Universitas Pembangunan Nasional "Veteran" Jawa Timur Prodi Informatika</li>
                    </ul>
                </p>
            </td>
        </tr>
        <tr class="middle2">
            <td class="td5">
                <?php
                $Judul3 = "<b><h3>ORGANISASI</h3></b>";
                echo $Judul3;?>
                <ul>
                    <li>OSIS SMP Negeri 1 Gedeg</li>
                    <li>Remaja Masjid Baiturrahman</li>
                    <li>Staff PSDA UKM Taekwondo Giri Eka Wira</li>
                    <li>Ketua komisi 1 Badan Legislatif Mahasiswa Fakultas Ilmu Komputer UPN "Veteran" Jawa Timur</li>
                </ul>
            </td>
            <td class="td6">
                <?php
                $Judul4 = "<b><h3>KEPANITIAAN</h3></b>";
                echo $Judul4;?>
                <ul>
                    <li>Komdis BCD 2022</li>
                    <li>Humas Kuliah Tamu 2022</li>
                    <li>Acara Open Talk 2022</li>
                    <li>Acara Fasilkom Fest 2022</li>
                </ul>
            </td>
        </tr>
        <tr class="bottom">
            <td class="td7">
                <?php
                $Judul5 = "<b><h3>PRESTASI</h3></b>";
                echo $Judul5;?>
                <ul align ="Left">
                    <li>Juara 2 Kejurda Taekwondo 2018 di UPN “Veteran” Jawa Timur</li>
                    <li>Juara 2 Kejurprov Taekwondo 2018 di Probolinggo</li>
                    <li>Juara 1 Kejurnas Taekwondo 2018 di UPN “Veteran” Jawa Timur</li>
                    <li>Juara 1 Kejurprov Taekwondo 2019 di Pasuruan</li>
                    <li>Juara 1 Kejurprov Taekwondo 2019 di Ponorogo</li>
                    <li>Juara 2 Kejurprov Taekwondo 2019 di Kota Batu</li>
                    <li>Juara 1 Kejurprov Taekwondo di Gor Bima UNESA</li>
                    <li>Juara 3 Taekwondo virtual contest nasional 2020 kategori foto</li>
                </ul>
            </td>
            <td class="td8">
            </td>
        </tr>
    </table>
</body>
</html>