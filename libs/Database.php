<?php

class Database extends PDO{
    protected $veriler=array();
    protected $bilgi;
    public function __construct(){
        parent::__construct("mysql:dbname=phpmvc;host=localhost;charset=utf8","root","");
        $this->bilgi=new Bilgi();
    }
    public function listele($tabloisim,$kosul=false){
        if($kosul==false):
            $sorgum = "SELECT * FROM ".$tabloisim;
        else:
            $sorgum = "SELECT * FROM ".$tabloisim." ".$kosul;
        endif;
        $son=$this->prepare($sorgum);
        $son->execute();
        return $son->fetchAll();
    }
    public function ekle($tabloisim,$sutunadlari,$veriler){
        $sorgum=$this->prepare("INSERT INTO ".$tabloisim." (".$sutunadlari.") VALUES (?,?)");
        if($sorgum->execute($veriler)):
            return $this->bilgi->success("Ekleme Başarılı",SITE_URL."index");
        else:
            return $this->bilgi->danger("Ekleme Başarısız",SITE_URL."index");
        endif;
    }
    public function silme($tabloisim,$kosul){
        $sorgum=$this->prepare("DELETE FROM ".$tabloisim." WHERE ".$kosul);
        if($sorgum->execute()):
            return $this->bilgi->success("Silme Başarılı",SITE_URL."index");
        else:
            return $this->bilgi->danger("Silme Başarısız",SITE_URL."index");
        endif;

    }
    public function guncelle($tabloisim,$veriler,$kosul){
        $sorgum=$this->prepare("UPDATE ".$tabloisim." SET baslik=?,icerik=? WHERE ".$kosul);
        if($sorgum->execute($veriler)):
            return $this->bilgi->success("Güncelleme Başarılı",SITE_URL."index");
        else:
            return $this->bilgi->danger("Güncelleme Başarısız",SITE_URL."index");
        endif;
    }
}


?>