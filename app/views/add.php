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
    <form action="/save" method="post">
        <h1>Tambah Penilaian</h1>
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
                        <input type="text" name="nama">
                    </td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td><input type="text" name="jabatan"></td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td><input type="number" name="nik"></td>
                </tr>
                <tr>
                    <td>Tanggung Jawab</td>
                    <td>
                        <input type="radio" name="tanggung_jawab_peran" value="1"> 1
                        <input type="radio" name="tanggung_jawab_peran" value="2"> 2
                        <input type="radio" name="tanggung_jawab_peran" value="3"> 3
                        <input type="radio" name="tanggung_jawab_peran" value="4"> 4
                        <input type="radio" name="tanggung_jawab_peran" value="5"> 5
                        <input type="radio" name="tanggung_jawab_peran" value="6"> 6
                        <input type="radio" name="tanggung_jawab_peran" value="7"> 7
                        <input type="radio" name="tanggung_jawab_peran" value="8"> 8
                        <input type="radio" name="tanggung_jawab_peran" value="9"> 9
                        <input type="radio" name="tanggung_jawab_peran" value="10"> 10
                    </td>
                </tr>
                <tr>
                    <td>Ketepatan Waktu</td>
                    <td>
                        <input type="radio" name="ketepatan_waktu" value="1"> 1
                        <input type="radio" name="ketepatan_waktu" value="2"> 2
                        <input type="radio" name="ketepatan_waktu" value="3"> 3
                        <input type="radio" name="ketepatan_waktu" value="4"> 4
                        <input type="radio" name="ketepatan_waktu" value="5"> 5
                        <input type="radio" name="ketepatan_waktu" value="6"> 6
                        <input type="radio" name="ketepatan_waktu" value="7"> 7
                        <input type="radio" name="ketepatan_waktu" value="8"> 8
                        <input type="radio" name="ketepatan_waktu" value="9"> 9
                        <input type="radio" name="ketepatan_waktu" value="10"> 10
                    </td>
                </tr>
                <tr>
                    <td>Kualitas Pekerjaan</td>
                    <td>
                        <input type="radio" name="kualitas_pekerjaan" value="1"> 1
                        <input type="radio" name="kualitas_pekerjaan" value="2"> 2
                        <input type="radio" name="kualitas_pekerjaan" value="3"> 3
                        <input type="radio" name="kualitas_pekerjaan" value="4"> 4
                        <input type="radio" name="kualitas_pekerjaan" value="5"> 5
                        <input type="radio" name="kualitas_pekerjaan" value="6"> 6
                        <input type="radio" name="kualitas_pekerjaan" value="7"> 7
                        <input type="radio" name="kualitas_pekerjaan" value="8"> 8
                        <input type="radio" name="kualitas_pekerjaan" value="9"> 9
                        <input type="radio" name="kualitas_pekerjaan" value="10"> 10
                    </td>
                </tr>
                <tr>
                    <td>Kuantitas Hasil</td>
                    <td>
                        <input type="radio" name="kuantitas_hasil" value="1"> 1
                        <input type="radio" name="kuantitas_hasil" value="2"> 2
                        <input type="radio" name="kuantitas_hasil" value="3"> 3
                        <input type="radio" name="kuantitas_hasil" value="4"> 4
                        <input type="radio" name="kuantitas_hasil" value="5"> 5
                        <input type="radio" name="kuantitas_hasil" value="6"> 6
                        <input type="radio" name="kuantitas_hasil" value="7"> 7
                        <input type="radio" name="kuantitas_hasil" value="8"> 8
                        <input type="radio" name="kuantitas_hasil" value="9"> 9
                        <input type="radio" name="kuantitas_hasil" value="10"> 10
                    </td>
                </tr>
                <tr>
                    <td>Presensi/Kehadiran</td>
                    <td>
                        <input type="radio" name="presensi" value="1"> 1
                        <input type="radio" name="presensi" value="2"> 2
                        <input type="radio" name="presensi" value="3"> 3
                        <input type="radio" name="presensi" value="4"> 4
                        <input type="radio" name="presensi" value="5"> 5
                        <input type="radio" name="presensi" value="6"> 6
                        <input type="radio" name="presensi" value="7"> 7
                        <input type="radio" name="presensi" value="8"> 8
                        <input type="radio" name="presensi" value="9"> 9
                        <input type="radio" name="presensi" value="10"> 10
                    </td>
                </tr>
                <tr>
                    <td>Kerja Sama Tim</td>
                    <td>
                        <input type="radio" name="kerjasama_tim" value="1"> 1
                        <input type="radio" name="kerjasama_tim" value="2"> 2
                        <input type="radio" name="kerjasama_tim" value="3"> 3
                        <input type="radio" name="kerjasama_tim" value="4"> 4
                        <input type="radio" name="kerjasama_tim" value="5"> 5
                        <input type="radio" name="kerjasama_tim" value="6"> 6
                        <input type="radio" name="kerjasama_tim" value="7"> 7
                        <input type="radio" name="kerjasama_tim" value="8"> 8
                        <input type="radio" name="kerjasama_tim" value="9"> 9
                        <input type="radio" name="kerjasama_tim" value="10"> 10
                    </td>
                </tr>
                <tr>
                    <td>Inisiatif</td>
                    <td>
                        <input type="radio" name="inisiatif" value="1"> 1
                        <input type="radio" name="inisiatif" value="2"> 2
                        <input type="radio" name="inisiatif" value="3"> 3
                        <input type="radio" name="inisiatif" value="4"> 4
                        <input type="radio" name="inisiatif" value="5"> 5
                        <input type="radio" name="inisiatif" value="6"> 6
                        <input type="radio" name="inisiatif" value="7"> 7
                        <input type="radio" name="inisiatif" value="8"> 8
                        <input type="radio" name="inisiatif" value="9"> 9
                        <input type="radio" name="inisiatif" value="10"> 10
                    </td>
                </tr>
                <tr>
                    <td>Kepemimpinan</td>
                    <td>
                        <input type="radio" name="kepemimpinan" value="1"> 1
                        <input type="radio" name="kepemimpinan" value="2"> 2
                        <input type="radio" name="kepemimpinan" value="3"> 3
                        <input type="radio" name="kepemimpinan" value="4"> 4
                        <input type="radio" name="kepemimpinan" value="5"> 5
                        <input type="radio" name="kepemimpinan" value="6"> 6
                        <input type="radio" name="kepemimpinan" value="7"> 7
                        <input type="radio" name="kepemimpinan" value="8"> 8
                        <input type="radio" name="kepemimpinan" value="9"> 9
                        <input type="radio" name="kepemimpinan" value="10"> 10
                    </td>
                </tr>
                <tr>
                    <td>Perilaku</td>
                    <td>
                        <input type="radio" name="perilaku" value="1"> 1
                        <input type="radio" name="perilaku" value="2"> 2
                        <input type="radio" name="perilaku" value="3"> 3
                        <input type="radio" name="perilaku" value="4"> 4
                        <input type="radio" name="perilaku" value="5"> 5
                        <input type="radio" name="perilaku" value="6"> 6
                        <input type="radio" name="perilaku" value="7"> 7
                        <input type="radio" name="perilaku" value="8"> 8
                        <input type="radio" name="perilaku" value="9"> 9
                        <input type="radio" name="perilaku" value="10"> 10
                    </td>
                </tr>
                <tr>
                    <td>Karakter</td>
                    <td>
                        <input type="radio" name="karakter" value="1"> 1
                        <input type="radio" name="karakter" value="2"> 2
                        <input type="radio" name="karakter" value="3"> 3
                        <input type="radio" name="karakter" value="4"> 4
                        <input type="radio" name="karakter" value="5"> 5
                        <input type="radio" name="karakter" value="6"> 6
                        <input type="radio" name="karakter" value="7"> 7
                        <input type="radio" name="karakter" value="8"> 8
                        <input type="radio" name="karakter" value="9"> 9
                        <input type="radio" name="karakter" value="10"> 10
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