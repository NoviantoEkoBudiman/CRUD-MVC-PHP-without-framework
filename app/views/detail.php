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
    <h1>Detail Penilaian</h1>
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
                    <?= $karyawan["nama"] ?>
                </td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>
                    <?= $karyawan["jabatan"] ?>
                </td>
            </tr>
            <tr>
                <td>NIK</td>
                <td>
                    <?= $karyawan["nik"] ?>
                </td>
            </tr>
            <tr>
                <td>Tanggung Jawab</td>
                <td>
                    <?= $karyawan["tanggung_jawab_peran"] ?>
                </td>
            </tr>
            <tr>
                <td>Ketepatan Waktu</td>
                <td>
                    <?= $karyawan["ketepatan_waktu"] ?>
                </td>
            </tr>
            <tr>
                <td>Kualitas Pekerjaan</td>
                <td>
                    <?= $karyawan["kualitas_pekerjaan"] ?>
                </td>
            </tr>
            <tr>
                <td>Kuantitas Hasil</td>
                <td>
                    <?= $karyawan["kuantitas_hasil"] ?>
                </td>
            </tr>
            <tr>
                <td>Presensi/Kehadiran</td>
                <td>
                <?= $karyawan["presensi"] ?>
                </td>
            </tr>
            <tr>
                <td>Kerja Sama Tim</td>
                <td>
                    <?= $karyawan["kerjasama_tim"] ?>
                </td>
            </tr>
            <tr>
                <td>Inisiatif</td>
                <td>
                    <?= $karyawan["inisiatif"] ?>
                </td>
            </tr>
            <tr>
                <td>Kepemimpinan</td>
                <td>
                    <?= $karyawan["kepemimpinan"] ?>
                </td>
            </tr>
            <tr>
                <td>Perilaku</td>
                <td>
                    <?= $karyawan["perilaku"] ?>
                </td>
            </tr>
            <tr>
                <td>Karakter</td>
                <td>
                    <?= $karyawan["karakter"] ?>
                </td>
            </tr>
        </tbody>
    </table>

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
</body>
</html>