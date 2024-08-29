<?php

namespace App\Controllers;

use App\Database;
use App\Models\KaryawanModel;

class KaryawanController{

    public function __construct()
    {
        $this->model = new KaryawanModel();
    }
    
    function index(): void
    {
        $datas["karyawan"] = $this->model->GetAllKaryawan();
        if($_REQUEST != null){
            $datas['request'] = $_REQUEST;
        }
        $this->render("index", $datas);
    }

    function detail(): void
    {
        $datas["karyawan"]      = $this->model->GetKaryawanById($_POST["id"]);
        $datas["total_nilai"]   = $datas["karyawan"]["tanggung_jawab_peran"] + $datas["karyawan"]["ketepatan_waktu"] + $datas["karyawan"]["kualitas_pekerjaan"] + $datas["karyawan"]["kuantitas_hasil"] + $datas["karyawan"]["presensi"] + $datas["karyawan"]["kerjasama_tim"] + $datas["karyawan"]["inisiatif"] + $datas["karyawan"]["kepemimpinan"] + $datas["karyawan"]["perilaku"] + $datas["karyawan"]["karakter"];
        if($datas["total_nilai"] < 30){
            $penilaian = "-";
        }
        if($datas["total_nilai"] >= 30 && $datas["total_nilai"] <= 39){
            $penilaian = "Gagal";
        }
        if($datas["total_nilai"] >= 40 && $datas["total_nilai"] <= 55){
            $penilaian = "Kurang";
        }
        if($datas["total_nilai"] >= 56 && $datas["total_nilai"] <= 65){
            $penilaian = "Cukup";
        }
        if($datas["total_nilai"] >= 66 && $datas["total_nilai"] <= 79){
            $penilaian = "Baik";
        }
        if($datas["total_nilai"] >= 80 && $datas["total_nilai"] <= 100){
            $penilaian = "Baik Sekali";
        }
        $datas["penilaian"]     = $penilaian;
        $datas["page"]          = "detail";
        $this->render("detail", $datas);
    }

    function add($datas = null): void
    {
        $datas["page"]  = "add";
        $this->render("form", $datas);
    }

    function save()
    {
        if($_POST["nama"]  == null || $_POST["jabatan"]  == null || $_POST["nik"]  == null || $_POST["tanggung_jawab_peran"]  == null || $_POST["ketepatan_waktu"]  == null || $_POST["kualitas_pekerjaan"]  == null || $_POST["kuantitas_hasil"]  == null || $_POST["presensi"]  == null || $_POST["kerjasama_tim"]  == null || $_POST["inisiatif"]  == null || $_POST["kepemimpinan"]  == null || $_POST["perilaku"]  == null || $_POST["karakter"] == null){
            header("Location: /add?status=error&message=Data gagal disimpan, terdapat kolom yang kosong!");
            exit();
        }
        
        if($_POST["tanggung_jawab_peran"] < 1 || $_POST["ketepatan_waktu"] < 1 || $_POST["kualitas_pekerjaan"] < 1 || $_POST["kuantitas_hasil"] < 1 || $_POST["presensi"] < 1 || $_POST["kerjasama_tim"] < 1 || $_POST["inisiatif"] < 1 || $_POST["kepemimpinan"] < 1 || $_POST["perilaku"] < 1 || $_POST["karakter"] < 1 || $_POST["tanggung_jawab_peran"] > 10 || $_POST["ketepatan_waktu"] > 10 || $_POST["kualitas_pekerjaan"] > 10 || $_POST["kuantitas_hasil"] > 10 || $_POST["presensi"] > 10 || $_POST["kerjasama_tim"] > 10 || $_POST["inisiatif"] > 10 || $_POST["kepemimpinan"] > 10 || $_POST["perilaku"] > 10 || $_POST["karakter"] > 10){
            header("Location: /add?status=error&message=Data gagal disimpan, rentang nilai 1-10!");
            exit();
        }

        if(strlen($_POST["nik"]) < 16 || strlen($_POST["nik"]) > 16){
            header("Location: /add?status=error&message=Data gagal disimpan, NIK tidak boleh kurang dari atau lebih dari 16 karakter!");
            exit();
        }
        
        $insert = $this->model->SaveKaryawan($_POST);
        if($insert){
            header("Location: /?status=success&message=Data berhasil disimpan!");
            exit();
        }else{
            header("Location: /?status=error&message=Data gagal disimpan!");
            exit();
        }
    }

    function edit(): void
    {
        $datas["page"]  = "edit";
        $datas["karyawan"]  = $this->model->GetKaryawanById($_POST["id"]);
        $this->render("form", $datas);
    }

    public function update()
    {
        if($_POST["nama"]  == null || $_POST["jabatan"]  == null || $_POST["nik"]  == null || $_POST["tanggung_jawab_peran"]  == null || $_POST["ketepatan_waktu"]  == null || $_POST["kualitas_pekerjaan"]  == null || $_POST["kuantitas_hasil"]  == null || $_POST["presensi"]  == null || $_POST["kerjasama_tim"]  == null || $_POST["inisiatif"]  == null || $_POST["kepemimpinan"]  == null || $_POST["perilaku"]  == null || $_POST["karakter"] == null){
            header("Location: /?status=error&message=Data gagal disimpan, terdapat kolom yang kosong!");
            exit();
        }
        
        if($_POST["tanggung_jawab_peran"] < 1 || $_POST["ketepatan_waktu"] < 1 || $_POST["kualitas_pekerjaan"] < 1 || $_POST["kuantitas_hasil"] < 1 || $_POST["presensi"] < 1 || $_POST["kerjasama_tim"] < 1 || $_POST["inisiatif"] < 1 || $_POST["kepemimpinan"] < 1 || $_POST["perilaku"] < 1 || $_POST["karakter"] < 1 || $_POST["tanggung_jawab_peran"] > 10 || $_POST["ketepatan_waktu"] > 10 || $_POST["kualitas_pekerjaan"] > 10 || $_POST["kuantitas_hasil"] > 10 || $_POST["presensi"] > 10 || $_POST["kerjasama_tim"] > 10 || $_POST["inisiatif"] > 10 || $_POST["kepemimpinan"] > 10 || $_POST["perilaku"] > 10 || $_POST["karakter"] > 10){
            header("Location: /?status=error&message=Data gagal disimpan, rentang nilai 1-10!");
            exit();
        }

        if(strlen($_POST["nik"]) < 16 || strlen($_POST["nik"]) > 16){
            header("Location: /?status=error&message=Data gagal disimpan, NIK tidak boleh kurang dari atau lebih dari 16 karakter!");
            exit();
        }

        $update  = $this->model->UpdateKaryawan($_POST["id"], $_POST);
        if($update){
            header("Location: /?status=success&message=Data berhasil diupdate!");
            exit();
        }else{
            header("Location: /?status=error&message=Data gagal diupdate!");
            exit();
        }
    }

    function delete()
    {
        $delete = $this->model->DeleteKaryawan($_POST["id"]);
        if($delete){
            header("Location: /?status=success&message=Data berhasil dihapus");
        }else{
            header("Location: /?status=error&message=Data gagal dihapus");
        }
    }

    private function render(string $view, array $datas = null)
    {
        if(isset($datas)){
            extract($datas);
        }
        include __DIR__ . "/../views/". $view .".php";
    }
}