<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html, body{
            padding: 20px;
        }
        a, button{
            color: white;
            text-decoration: none;
            background-color: blue;
            padding: 10px 20px;
            border-radius: 20px;
            border: none;
        }
        .right{
            text-align: center;
        }
        span{
            padding: 20px;
        }
        .table > thead > tr > th {
            border: 1px solid black;
        }
        .table > tbody > tr > td {
            border: 1px solid black;
            padding: 10px 0px;
        }
        .table tr:nth-child(even) {
            background-color: Lightgreen;
        }

        .flex{
            display: flex;
        }
    </style>
</head>
<body>
    <a href="/">Kembali</a>
    <?php if($page == "add"){ ?>
        <form action="/save" method="post">
            <h1>Tambah Penilaian</h1>
    <?php } ?>
    <?php if($page == "edit"){ ?>
        <form action="/update" method="post">
        <h1>Edit Penilaian</h1>
    <?php } ?>
    <?php if($page == "detail"){ ?>
        <form action="">
        <h1>Detail Penilaian</h1>
    <?php } ?>
        <table width="50%" class="table" style="margin-top:20px;">
            <thead>
                <tr style="background-color: Lightgreen">
                    <th>Data</th>
                    <th>Isian</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="hidden" name="id" value="<?= @$karyawan['id'] ?>">
                        <input type="text" name="nama" value="<?= @$karyawan['nama'] ?>" <?= $page == "detail" ? "readonly" : null ?>>
                    </td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td><input type="text" name="jabatan" value="<?= @$karyawan['jabatan'] ?>" <?= $page == "detail" ? "readonly" : null ?>></td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td><input type="number" name="nik" value="<?= @$karyawan['nik'] ?>" <?= $page == "detail" ? "readonly" : null ?>></td>
                </tr>
                <tr>
                    <td>Tanggung Jawab</td>
                    <td>
                        <input type="radio" name="tanggung_jawab_peran" value="1" <?= isset($karyawan["tanggung_jawab_peran"]) && $karyawan["tanggung_jawab_peran"] == 1 ? "checked" : null ?>  <?= $page == "detail" ? "disabled" : null ?>> 1
                        <input type="radio" name="tanggung_jawab_peran" value="2" <?= isset($karyawan["tanggung_jawab_peran"]) && $karyawan["tanggung_jawab_peran"] == 2 ? "checked" : null ?>  <?= $page == "detail" ? "disabled" : null ?>> 2
                        <input type="radio" name="tanggung_jawab_peran" value="3" <?= isset($karyawan["tanggung_jawab_peran"]) && $karyawan["tanggung_jawab_peran"] == 3 ? "checked" : null ?>  <?= $page == "detail" ? "disabled" : null ?>> 3
                        <input type="radio" name="tanggung_jawab_peran" value="4" <?= isset($karyawan["tanggung_jawab_peran"]) && $karyawan["tanggung_jawab_peran"] == 4 ? "checked" : null ?>  <?= $page == "detail" ? "disabled" : null ?>> 4
                        <input type="radio" name="tanggung_jawab_peran" value="5" <?= isset($karyawan["tanggung_jawab_peran"]) && $karyawan["tanggung_jawab_peran"] == 5 ? "checked" : null ?>  <?= $page == "detail" ? "disabled" : null ?>> 5
                        <input type="radio" name="tanggung_jawab_peran" value="6" <?= isset($karyawan["tanggung_jawab_peran"]) && $karyawan["tanggung_jawab_peran"] == 6 ? "checked" : null ?>  <?= $page == "detail" ? "disabled" : null ?>> 6
                        <input type="radio" name="tanggung_jawab_peran" value="7" <?= isset($karyawan["tanggung_jawab_peran"]) && $karyawan["tanggung_jawab_peran"] == 7 ? "checked" : null ?>  <?= $page == "detail" ? "disabled" : null ?>> 7
                        <input type="radio" name="tanggung_jawab_peran" value="8" <?= isset($karyawan["tanggung_jawab_peran"]) && $karyawan["tanggung_jawab_peran"] == 8 ? "checked" : null ?>  <?= $page == "detail" ? "disabled" : null ?>> 8
                        <input type="radio" name="tanggung_jawab_peran" value="9" <?= isset($karyawan["tanggung_jawab_peran"]) && $karyawan["tanggung_jawab_peran"] == 9 ? "checked" : null ?>  <?= $page == "detail" ? "disabled" : null ?>> 9
                        <input type="radio" name="tanggung_jawab_peran" value="10" <?= isset($karyawan["tanggung_jawab_peran"]) && $karyawan["tanggung_jawab_peran"] == 10 ? "checked" : null ?>  <?= $page == "detail" ? "disabled" : null ?>> 10
                    </td>
                </tr>
                <tr>
                    <td>Ketepatan Waktu</td>
                    <td>
                        <input type="radio" name="ketepatan_waktu" value="1" <?= isset($karyawan["ketepatan_waktu"]) && $karyawan["ketepatan_waktu"] == 1 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 1
                        <input type="radio" name="ketepatan_waktu" value="2" <?= isset($karyawan["ketepatan_waktu"]) && $karyawan["ketepatan_waktu"] == 2 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 2
                        <input type="radio" name="ketepatan_waktu" value="3" <?= isset($karyawan["ketepatan_waktu"]) && $karyawan["ketepatan_waktu"] == 3 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 3
                        <input type="radio" name="ketepatan_waktu" value="4" <?= isset($karyawan["ketepatan_waktu"]) && $karyawan["ketepatan_waktu"] == 4 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 4
                        <input type="radio" name="ketepatan_waktu" value="5" <?= isset($karyawan["ketepatan_waktu"]) && $karyawan["ketepatan_waktu"] == 5 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 5
                        <input type="radio" name="ketepatan_waktu" value="6" <?= isset($karyawan["ketepatan_waktu"]) && $karyawan["ketepatan_waktu"] == 6 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 6
                        <input type="radio" name="ketepatan_waktu" value="7" <?= isset($karyawan["ketepatan_waktu"]) && $karyawan["ketepatan_waktu"] == 7 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 7
                        <input type="radio" name="ketepatan_waktu" value="8" <?= isset($karyawan["ketepatan_waktu"]) && $karyawan["ketepatan_waktu"] == 8 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 8
                        <input type="radio" name="ketepatan_waktu" value="9" <?= isset($karyawan["ketepatan_waktu"]) && $karyawan["ketepatan_waktu"] == 9 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 9
                        <input type="radio" name="ketepatan_waktu" value="10" <?= isset($karyawan["ketepatan_waktu"]) && $karyawan["ketepatan_waktu"] == 10 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 10
                    </td>
                </tr>
                <tr>
                    <td>Kualitas Pekerjaan</td>
                    <td>
                        <input type="radio" name="kualitas_pekerjaan" value="1" <?= isset($karyawan["kualitas_pekerjaan"]) && $karyawan["kualitas_pekerjaan"] == 1 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 1
                        <input type="radio" name="kualitas_pekerjaan" value="2" <?= isset($karyawan["kualitas_pekerjaan"]) && $karyawan["kualitas_pekerjaan"] == 2 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 2
                        <input type="radio" name="kualitas_pekerjaan" value="3" <?= isset($karyawan["kualitas_pekerjaan"]) && $karyawan["kualitas_pekerjaan"] == 3 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 3
                        <input type="radio" name="kualitas_pekerjaan" value="4" <?= isset($karyawan["kualitas_pekerjaan"]) && $karyawan["kualitas_pekerjaan"] == 4 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 4
                        <input type="radio" name="kualitas_pekerjaan" value="5" <?= isset($karyawan["kualitas_pekerjaan"]) && $karyawan["kualitas_pekerjaan"] == 5 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 5
                        <input type="radio" name="kualitas_pekerjaan" value="6" <?= isset($karyawan["kualitas_pekerjaan"]) && $karyawan["kualitas_pekerjaan"] == 6 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 6
                        <input type="radio" name="kualitas_pekerjaan" value="7" <?= isset($karyawan["kualitas_pekerjaan"]) && $karyawan["kualitas_pekerjaan"] == 7 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 7
                        <input type="radio" name="kualitas_pekerjaan" value="8" <?= isset($karyawan["kualitas_pekerjaan"]) && $karyawan["kualitas_pekerjaan"] == 8 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 8
                        <input type="radio" name="kualitas_pekerjaan" value="9" <?= isset($karyawan["kualitas_pekerjaan"]) && $karyawan["kualitas_pekerjaan"] == 9 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 9
                        <input type="radio" name="kualitas_pekerjaan" value="10" <?= isset($karyawan["kualitas_pekerjaan"]) && $karyawan["kualitas_pekerjaan"] == 10 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 10
                    </td>
                </tr>
                <tr>
                    <td>Kuantitas Hasil</td>
                    <td>
                        <input type="radio" name="kuantitas_hasil" value="1" <?= isset($karyawan["kuantitas_hasil"]) && $karyawan["kuantitas_hasil"] == 1 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 1
                        <input type="radio" name="kuantitas_hasil" value="2" <?= isset($karyawan["kuantitas_hasil"]) && $karyawan["kuantitas_hasil"] == 2 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 2
                        <input type="radio" name="kuantitas_hasil" value="3" <?= isset($karyawan["kuantitas_hasil"]) && $karyawan["kuantitas_hasil"] == 3 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 3
                        <input type="radio" name="kuantitas_hasil" value="4" <?= isset($karyawan["kuantitas_hasil"]) && $karyawan["kuantitas_hasil"] == 4 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 4
                        <input type="radio" name="kuantitas_hasil" value="5" <?= isset($karyawan["kuantitas_hasil"]) && $karyawan["kuantitas_hasil"] == 5 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 5
                        <input type="radio" name="kuantitas_hasil" value="6" <?= isset($karyawan["kuantitas_hasil"]) && $karyawan["kuantitas_hasil"] == 6 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 6
                        <input type="radio" name="kuantitas_hasil" value="7" <?= isset($karyawan["kuantitas_hasil"]) && $karyawan["kuantitas_hasil"] == 7 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 7
                        <input type="radio" name="kuantitas_hasil" value="8" <?= isset($karyawan["kuantitas_hasil"]) && $karyawan["kuantitas_hasil"] == 8 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 8
                        <input type="radio" name="kuantitas_hasil" value="9" <?= isset($karyawan["kuantitas_hasil"]) && $karyawan["kuantitas_hasil"] == 9 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 9
                        <input type="radio" name="kuantitas_hasil" value="10" <?= isset($karyawan["kuantitas_hasil"]) && $karyawan["kuantitas_hasil"] == 10 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 10
                    </td>
                </tr>
                <tr>
                    <td>Presensi/Kehadiran</td>
                    <td>
                        <input type="radio" name="presensi" value="1" <?= isset($karyawan["presensi"]) && $karyawan["presensi"] == 1 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 1
                        <input type="radio" name="presensi" value="2" <?= isset($karyawan["presensi"]) && $karyawan["presensi"] == 2 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 2
                        <input type="radio" name="presensi" value="3" <?= isset($karyawan["presensi"]) && $karyawan["presensi"] == 3 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 3
                        <input type="radio" name="presensi" value="4" <?= isset($karyawan["presensi"]) && $karyawan["presensi"] == 4 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 4
                        <input type="radio" name="presensi" value="5" <?= isset($karyawan["presensi"]) && $karyawan["presensi"] == 5 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 5
                        <input type="radio" name="presensi" value="6" <?= isset($karyawan["presensi"]) && $karyawan["presensi"] == 6 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 6
                        <input type="radio" name="presensi" value="7" <?= isset($karyawan["presensi"]) && $karyawan["presensi"] == 7 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 7
                        <input type="radio" name="presensi" value="8" <?= isset($karyawan["presensi"]) && $karyawan["presensi"] == 8 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 8
                        <input type="radio" name="presensi" value="9" <?= isset($karyawan["presensi"]) && $karyawan["presensi"] == 9 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 9
                        <input type="radio" name="presensi" value="10" <?= isset($karyawan["presensi"]) && $karyawan["presensi"] == 10 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 10
                    </td>
                </tr>
                <tr>
                    <td>Kerja Sama Tim</td>
                    <td>
                        <input type="radio" name="kerjasama_tim" value="1" <?= isset($karyawan["kerjasama_tim"]) && $karyawan["kerjasama_tim"] == 1 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 1
                        <input type="radio" name="kerjasama_tim" value="2" <?= isset($karyawan["kerjasama_tim"]) && $karyawan["kerjasama_tim"] == 2 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 2
                        <input type="radio" name="kerjasama_tim" value="3" <?= isset($karyawan["kerjasama_tim"]) && $karyawan["kerjasama_tim"] == 3 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 3
                        <input type="radio" name="kerjasama_tim" value="4" <?= isset($karyawan["kerjasama_tim"]) && $karyawan["kerjasama_tim"] == 4 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 4
                        <input type="radio" name="kerjasama_tim" value="5" <?= isset($karyawan["kerjasama_tim"]) && $karyawan["kerjasama_tim"] == 5 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 5
                        <input type="radio" name="kerjasama_tim" value="6" <?= isset($karyawan["kerjasama_tim"]) && $karyawan["kerjasama_tim"] == 6 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 6
                        <input type="radio" name="kerjasama_tim" value="7" <?= isset($karyawan["kerjasama_tim"]) && $karyawan["kerjasama_tim"] == 7 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 7
                        <input type="radio" name="kerjasama_tim" value="8" <?= isset($karyawan["kerjasama_tim"]) && $karyawan["kerjasama_tim"] == 8 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 8
                        <input type="radio" name="kerjasama_tim" value="9" <?= isset($karyawan["kerjasama_tim"]) && $karyawan["kerjasama_tim"] == 9 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 9
                        <input type="radio" name="kerjasama_tim" value="10" <?= isset($karyawan["kerjasama_tim"]) && $karyawan["kerjasama_tim"] == 10 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 10
                    </td>
                </tr>
                <tr>
                    <td>Inisiatif</td>
                    <td>
                        <input type="radio" name="inisiatif" value="1" <?= isset($karyawan["inisiatif"]) && $karyawan["inisiatif"] == 1 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 1
                        <input type="radio" name="inisiatif" value="2" <?= isset($karyawan["inisiatif"]) && $karyawan["inisiatif"] == 2 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 2
                        <input type="radio" name="inisiatif" value="3" <?= isset($karyawan["inisiatif"]) && $karyawan["inisiatif"] == 3 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 3
                        <input type="radio" name="inisiatif" value="4" <?= isset($karyawan["inisiatif"]) && $karyawan["inisiatif"] == 4 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 4
                        <input type="radio" name="inisiatif" value="5" <?= isset($karyawan["inisiatif"]) && $karyawan["inisiatif"] == 5 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 5
                        <input type="radio" name="inisiatif" value="6" <?= isset($karyawan["inisiatif"]) && $karyawan["inisiatif"] == 6 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 6
                        <input type="radio" name="inisiatif" value="7" <?= isset($karyawan["inisiatif"]) && $karyawan["inisiatif"] == 7 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 7
                        <input type="radio" name="inisiatif" value="8" <?= isset($karyawan["inisiatif"]) && $karyawan["inisiatif"] == 8 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 8
                        <input type="radio" name="inisiatif" value="9" <?= isset($karyawan["inisiatif"]) && $karyawan["inisiatif"] == 9 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 9
                        <input type="radio" name="inisiatif" value="10" <?= isset($karyawan["inisiatif"]) && $karyawan["inisiatif"] == 10 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 10
                    </td>
                </tr>
                <tr>
                    <td>Kepemimpinan</td>
                    <td>
                        <input type="radio" name="kepemimpinan" value="1" <?= isset($karyawan["kepemimpinan"]) && $karyawan["kepemimpinan"] == 1 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 1
                        <input type="radio" name="kepemimpinan" value="2" <?= isset($karyawan["kepemimpinan"]) && $karyawan["kepemimpinan"] == 2 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 2
                        <input type="radio" name="kepemimpinan" value="3" <?= isset($karyawan["kepemimpinan"]) && $karyawan["kepemimpinan"] == 3 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 3
                        <input type="radio" name="kepemimpinan" value="4" <?= isset($karyawan["kepemimpinan"]) && $karyawan["kepemimpinan"] == 4 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 4
                        <input type="radio" name="kepemimpinan" value="5" <?= isset($karyawan["kepemimpinan"]) && $karyawan["kepemimpinan"] == 5 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 5
                        <input type="radio" name="kepemimpinan" value="6" <?= isset($karyawan["kepemimpinan"]) && $karyawan["kepemimpinan"] == 6 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 6
                        <input type="radio" name="kepemimpinan" value="7" <?= isset($karyawan["kepemimpinan"]) && $karyawan["kepemimpinan"] == 7 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 7
                        <input type="radio" name="kepemimpinan" value="8" <?= isset($karyawan["kepemimpinan"]) && $karyawan["kepemimpinan"] == 8 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 8
                        <input type="radio" name="kepemimpinan" value="9" <?= isset($karyawan["kepemimpinan"]) && $karyawan["kepemimpinan"] == 9 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 9
                        <input type="radio" name="kepemimpinan" value="10" <?= isset($karyawan["kepemimpinan"]) && $karyawan["kepemimpinan"] == 10 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 10
                    </td>
                </tr>
                <tr>
                    <td>Perilaku</td>
                    <td>
                        <input type="radio" name="perilaku" value="1" <?= isset($karyawan["perilaku"]) && $karyawan["perilaku"] == 1 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 1
                        <input type="radio" name="perilaku" value="2" <?= isset($karyawan["perilaku"]) && $karyawan["perilaku"] == 2 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 2
                        <input type="radio" name="perilaku" value="3" <?= isset($karyawan["perilaku"]) && $karyawan["perilaku"] == 3 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 3
                        <input type="radio" name="perilaku" value="4" <?= isset($karyawan["perilaku"]) && $karyawan["perilaku"] == 4 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 4
                        <input type="radio" name="perilaku" value="5" <?= isset($karyawan["perilaku"]) && $karyawan["perilaku"] == 5 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 5
                        <input type="radio" name="perilaku" value="6" <?= isset($karyawan["perilaku"]) && $karyawan["perilaku"] == 6 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 6
                        <input type="radio" name="perilaku" value="7" <?= isset($karyawan["perilaku"]) && $karyawan["perilaku"] == 7 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 7
                        <input type="radio" name="perilaku" value="8" <?= isset($karyawan["perilaku"]) && $karyawan["perilaku"] == 8 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 8
                        <input type="radio" name="perilaku" value="9" <?= isset($karyawan["perilaku"]) && $karyawan["perilaku"] == 9 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 9
                        <input type="radio" name="perilaku" value="10" <?= isset($karyawan["perilaku"]) && $karyawan["perilaku"] == 10 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 10
                    </td>
                </tr>
                <tr>
                    <td>Karakter</td>
                    <td>
                        <input type="radio" name="karakter" value="1" <?= isset($karyawan["karakter"]) && $karyawan["karakter"] == 1 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 1
                        <input type="radio" name="karakter" value="2" <?= isset($karyawan["karakter"]) && $karyawan["karakter"] == 2 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 2
                        <input type="radio" name="karakter" value="3" <?= isset($karyawan["karakter"]) && $karyawan["karakter"] == 3 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 3
                        <input type="radio" name="karakter" value="4" <?= isset($karyawan["karakter"]) && $karyawan["karakter"] == 4 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 4
                        <input type="radio" name="karakter" value="5" <?= isset($karyawan["karakter"]) && $karyawan["karakter"] == 5 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 5
                        <input type="radio" name="karakter" value="6" <?= isset($karyawan["karakter"]) && $karyawan["karakter"] == 6 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 6
                        <input type="radio" name="karakter" value="7" <?= isset($karyawan["karakter"]) && $karyawan["karakter"] == 7 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 7
                        <input type="radio" name="karakter" value="8" <?= isset($karyawan["karakter"]) && $karyawan["karakter"] == 8 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 8
                        <input type="radio" name="karakter" value="9" <?= isset($karyawan["karakter"]) && $karyawan["karakter"] == 9 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 9
                        <input type="radio" name="karakter" value="10" <?= isset($karyawan["karakter"]) && $karyawan["karakter"] == 10 ? "checked" : null ?> <?= $page == "detail" ? "disabled" : null ?>> 10
                    </td>
                </tr>
                <?php if($page == "add" || $page == "edit"){ ?>
                <tr>
                    <td colspan="2"><button method="submit">Simpan</button></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

        <?php if($page == "detail"){ ?>
            <div class="flex">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nilai</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>80-100</td>
                            <td>Baik Sekali</td>
                        </tr>
                        <tr>
                            <td>66-70</td>
                            <td>Baik</td>
                        </tr>
                        <tr>
                            <td>56-65</td>
                            <td>Cukup</td>
                        </tr>
                        <tr>
                            <td>40-55</td>
                            <td>Kurang</td>
                        </tr>
                        <tr>
                            <td>30-39</td>
                            <td>Gagal</td>
                        </tr>
                    </tbody>
                </table>

                <table>
                    <tr>
                        <td valign="top">Total nilai:</td>
                        <td valign="top">
                            <?= $total_nilai ?>
                            <br>
                            <?= $penilaian; ?>
                        </td>
                    </tr>
                </table>
            </div>
        <?php } ?>
    </form>
</body>
</html>