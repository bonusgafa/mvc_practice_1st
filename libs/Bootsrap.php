<?php

class Bootsrap{
    public function __construct(){
        @$url=$_GET['url'];
        $url=rtrim($url,'/');
        $url=explode('/',$url);
        if($url[0]):
            $dosyaadim='app/controllers/'.$url[0].'.php';
            if(file_exists($dosyaadim)):
                include $dosyaadim;
                $anakontrolcum= new $url[0];
                //$anakontrolcum->anasayfa();
                if(isset($url[2])):
                    $methodismi=$url[1];
                    $anakontrolcum->$methodismi($url[2]);
                else:
                    if(isset($url[1])):
                    $methodismi=$url[1];
                    $anakontrolcum->$methodismi();
                    endif;
                endif;
            else:
                include 'app/controllers/boots.php';
                $anakontrolcum= new boots();
                $anakontrolcum->anasayfa();
            endif;
        else:
            include 'app/controllers/boots.php';
            $anakontrolcum= new boots();
            $anakontrolcum->anasayfa();
        endif;
    }
}

?>