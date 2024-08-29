<?php

namespace App\Controllers;

use App\Database;
use App\Models\KaryawanModel;
use App\Helpers\Helper;

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
        Helper::view("index", $datas);
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
        Helper::view("detail", $datas);
    }

    function add($datas = null): void
    {
        $datas["page"]  = "add";
        Helper::view("add", $datas);
    }

    function save()
    {
        $datas = $_POST;
        $required = ["nama","jabatan","nik","tanggung_jawab_peran","ketepatan_waktu","kualitas_pekerjaan","kuantitas_hasil","presensi","kerjasama_tim","inisiatif","kepemimpinan","perilaku","karakter"];

        $validation = Helper::validation($datas, $required);
        if($validation == false){
            Helper::redirect("/", "error", "Data gagal disimpan, terdapat kolom yang kosong!");
        }

        if(strlen($_POST["nik"]) < 16 || strlen($_POST["nik"]) > 16){
            Helper::redirect("/", "error", "Data gagal disimpan, NIK tidak boleh kurang dari atau lebih dari 16 karakter!");
        }
        
        $insert = $this->model->SaveKaryawan($_POST);
        if($insert){
            Helper::redirect("/", "success", "Data berhasil disimpan!");
        }else{
            Helper::redirect("/", "error", "Data gagal disimpan!");
        }
    }

    function edit(): void
    {
        $datas["page"]  = "edit";
        $datas["karyawan"]  = $this->model->GetKaryawanById($_POST["id"]);
        Helper::view("edit", $datas);
    }

    public function update()
    {        
        $datas = $_POST;
        $required = ["nama","jabatan","nik","tanggung_jawab_peran","ketepatan_waktu","kualitas_pekerjaan","kuantitas_hasil","presensi","kerjasama_tim","inisiatif","kepemimpinan","perilaku","karakter"];

        $validation = Helper::validation($datas, $required);
        if($validation == false){
            Helper::redirect("/", "error", "Data gagal diupdate, terdapat kolom yang kosong!");
        }

        if(strlen($_POST["nik"]) < 16 || strlen($_POST["nik"]) > 16){
            Helper::redirect("/", "error", "Data gagal disimpan, NIK tidak boleh kurang dari atau lebih dari 16 karakter!");
        }

        $update  = $this->model->UpdateKaryawan($_POST["id"], $_POST);
        if($update){
            Helper::redirect("/", "success", "Data berhasil diupdate!");
        }else{
            Helper::redirect("/", "error", "Data gagal diupdate!");
        }
    }

    function delete()
    {
        $delete = $this->model->DeleteKaryawan($_POST["id"]);
        if($delete){
            Helper::redirect("/", "success", "Data berhasil dihapus!");
        }else{
            Helper::redirect("/", "error", "Data gagal dihapus!");
        }
    }
}