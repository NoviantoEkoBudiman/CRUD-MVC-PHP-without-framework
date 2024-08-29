<?php

namespace App\Helpers;

class Helper{
    public function view(string $view, array $datas = null)
    {
        if(isset($datas)){
            extract($datas);
        }
        include __DIR__ . "/../views/". $view .".php";
    }

    public function redirect($url, $status = null, $message = null)
    {
        header("Location: ".$url."?status=".$status."&message=".$message);
        exit();
    }

    public function validation($datas, $requireds)
    {
        $results = array();
        $keys = array_keys($datas);
        foreach($datas as $data){
            if($data){
                $results[] = true;
            }else{
                $results[] = false;
            }
        }
        foreach($requireds as $required){
            if(in_array($required, $keys)){
                $results[] = true;
            }else{
                $results[] = false;
            }
        }
        if(in_array(false, $results)){
            $final_result = false;
        }else{
            $final_result = true;
        }
        return $final_result;
    }
}