<?php

namespace App\Models;
use App\Database;
use PDO;

class KaryawanModel{
    private $pdo;

    public function __construct()
    {
        $this->pdo = Database::getConnection();
    }

    public function GetAllKaryawan()
    {
        $query = $this->pdo->query("SELECT * FROM karyawan");
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function SaveKaryawan($data)
    {
        $query = $this->pdo->prepare("INSERT INTO `karyawan` (`nama`, `jabatan`, `nik`, `tanggung_jawab_peran`, `ketepatan_waktu`, `kualitas_pekerjaan`, `kuantitas_hasil`, `presensi`, `kerjasama_tim`, `inisiatif`, `kepemimpinan`, `perilaku`, `karakter`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?); ");
        $execute = $query->execute([$data["nama"],$data["jabatan"],$data["nik"],$data["tanggung_jawab_peran"],$data["ketepatan_waktu"],$data["kualitas_pekerjaan"],$data["kuantitas_hasil"],$data["presensi"],$data["kerjasama_tim"],$data["inisiatif"],$data["kepemimpinan"],$data["perilaku"],$data["karakter"]]);
        if($execute){
            return true;
        }else{
            return false;
        }
    }

    public function DeleteKaryawan($id): bool
    {
        $query = $this->pdo->prepare("DELETE FROM `karyawan` WHERE `id` = :id");
        $query->bindParam(':id', $id, \PDO::PARAM_INT);
        return $query->execute();
    }

    public function GetKaryawanById($id)
    {
        $query = $this->pdo->prepare("SELECT * FROM `karyawan` WHERE `id` = ?");
        $query->execute([$id]);
        $data = $query->fetch(PDO::FETCH_ASSOC);
        return $data;
    }
    
    public function UpdateKaryawan(int $id, array $data): bool
    {
        $query = $this->pdo->prepare("UPDATE karyawan SET 
            nama = :nama,
            jabatan = :jabatan,
            nik = :nik,
            tanggung_jawab_peran = :tanggung_jawab_peran,
            ketepatan_waktu = :ketepatan_waktu,
            kualitas_pekerjaan = :kualitas_pekerjaan,
            kuantitas_hasil = :kuantitas_hasil,
            presensi = :presensi,
            kerjasama_tim = :kerjasama_tim,
            inisiatif = :inisiatif,
            kepemimpinan = :kepemimpinan,
            perilaku = :perilaku,
            karakter = :karakter
            WHERE id = :id
        ");
        $query->bindParam(":id", $id, \PDO::PARAM_INT);
        $query->bindParam(":nama", $data["nama"], \PDO::PARAM_STR);
        $query->bindParam(":jabatan", $data["jabatan"], \PDO::PARAM_STR);
        $query->bindParam(":nik", $data["nik"], \PDO::PARAM_STR);
        $query->bindParam(":tanggung_jawab_peran", $data["tanggung_jawab_peran"], \PDO::PARAM_STR);
        $query->bindParam(":ketepatan_waktu", $data["ketepatan_waktu"], \PDO::PARAM_STR);
        $query->bindParam(":kualitas_pekerjaan", $data["kualitas_pekerjaan"], \PDO::PARAM_STR);
        $query->bindParam(":kuantitas_hasil", $data["kuantitas_hasil"], \PDO::PARAM_STR);
        $query->bindParam(":presensi", $data["presensi"], \PDO::PARAM_STR);
        $query->bindParam(":kerjasama_tim", $data["kerjasama_tim"], \PDO::PARAM_STR);
        $query->bindParam(":inisiatif", $data["inisiatif"], \PDO::PARAM_STR);
        $query->bindParam(":kepemimpinan", $data["kepemimpinan"], \PDO::PARAM_STR);
        $query->bindParam(":perilaku", $data["perilaku"], \PDO::PARAM_STR);
        $query->bindParam(":karakter", $data["karakter"], \PDO::PARAM_STR);

        return $query->execute();
    }
}