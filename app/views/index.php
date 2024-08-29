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
        .button-container{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .add-button{
            color: white;
            text-decoration: none;
            background-color: blue;
            padding: 10px 20px;
            border-radius: 20px;
        }
        button{
            padding: 10px 20px;
            border-radius: 20px;
            border: none;
        }
        .edit-button{
            color: white;
            text-decoration: none;
            background-color: #FFD700;
            border-radius: 20px;
        }
        .hapus-button{
            color: white;
            text-decoration: none;
            background-color: #EF0107;
            margin-left: 10px;
        }
        .detail-button{
            color: white;
            text-decoration: none;
            background-color: #4B0082;
            margin-left: 10px;
        }
        table > thead > tr > th {
            border: 1px solid black;
        }
        table > tbody > tr > td {
            border: 1px solid black;
            text-align:center;
        }
        tr:nth-child(even) {
            background-color: Lightgreen;
        }
        td{
            padding: 10px 0px;
        }
        span{
            padding: 20px;
        }
    </style>
</head>
<body>
    <a href="/add" class="add-button">Tambah Penilaian Karyawan</a>
    <?php if(isset($request) && $request['status'] == "success"){ ?>
        <span style="background-color:#4FFFB0"><?= $request["message"] ?></span>
    <?php } ?>
    <?php if(isset($request) && $request['status'] == "error"){ ?>
        <span style="background-color:#EF0107"><?= $request["message"] ?></span>
    <?php } ?>
    <h1>List Karyawan</h1>
    <table width="100%" style="margin-top:20px;">
        <thead>
            <tr style="background-color: Lightgreen">
                <th width="20%">No.</th>
                <th width="20%">Nama</th>
                <th width="20%">Jabatan</th>
                <th width="20%">NIK</th>
                <th width="20%">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if(count($karyawan) > 0){ ?>
                <?php foreach($karyawan as $key=>$kar){ ?>
                    <tr>
                        <td><?php echo $key+1; ?></td>
                        <td><?php echo $kar["nama"]; ?></td>
                        <td><?php echo $kar["jabatan"]; ?></td>
                        <td><?php echo $kar["nik"]; ?></td>
                        <td class="button-container">
                            <form action="/edit" method="post">
                                <input type="hidden" name="id" value="<?php echo $kar["id"]; ?>">
                                <button type="submit" class="edit-button">Edit</button>
                            </form>

                            <form action="/delete" method="post">
                                <input type="hidden" name="id" value="<?php echo $kar["id"]; ?>">
                                <button type="submit" class="hapus-button" onclick="return confirmDelete()">Hapus</button>
                                <script>
                                    function confirmDelete(){
                                        if (confirm('Anda yakin mau menghapus data ini?')) {
                                            console.log('Data berhasil dihapus');
                                            return true;
                                        } else {
                                            console.log('Data batal dihapus');
                                            return false;
                                        }
                                    }
                                </script>
                            </form>
                            
                            <form action="/detail" method="post">
                                <input type="hidden" name="id" value="<?php echo $kar["id"]; ?>">
                                <button type="submit" class="detail-button">Detail</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            <?php }else{ ?>
                <tr>
                    <td colspan="5">Data kosong</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>