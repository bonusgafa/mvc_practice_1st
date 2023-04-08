<?php

class boots extends Controller{
    public function __construct(){
        parent::__construct();
    }
    public function anasayfa(){
        $kayitlarabak=$this->yukle->model('Ana_model');
        $veri=$kayitlarabak->kayitlarigetir();
        $this->yukle->view("index",$veri);
    }
    public function kayitekle(){
        $this->yukle->view("kayitform");
    }
    public function kayitson(){
        $form=$this->yukle->form('Form');
        $baslik=$form->get("baslik")->is_empty();
        $icerik=$form->get("icerik")->is_empty();
        if(!empty($form->error)):
            $hata=$form->error;
            $this->yukle->view('kayitekle',$hata);
        else:
            $kayitlarabak=$this->yukle->model('Ana_model');
            $veri=$kayitlarabak->kayitekle(array($baslik,$icerik));
            $this->yukle->view('kayitekle',$veri);
        endif;
        
    }
    public function kayitsil($id){
        $kayitlarabak=$this->yukle->model('Ana_model');
        $veri=$kayitlarabak->kayitsil($id);
        $this->yukle->view('kayitekle',$veri);
    }
    public function kayitguncelle($id){
        $kayitlarabak=$this->yukle->model('Ana_model');
        $veri=$kayitlarabak->idyegoregetir($id);
        $this->yukle->view('guncelleform',$veri);
    }
    
    public function kayitguncelleson(){

        $form=$this->yukle->form('Form');
        $baslik=$form->get("baslik")->is_empty();
        $icerik=$form->get("icerik")->is_empty();
        $id=$_POST["kayitid"];
        if(!empty($form->error)):
            $hata=$form->error;
            $this->yukle->view('kayitekle',$hata);
        else:
            $kayitlarabak=$this->yukle->model('Ana_model');
            $veri=$kayitlarabak->kayitguncelle(array($baslik,$icerik),$id);
            $this->yukle->view('kayitekle',$veri);

        endif;


        
    }
}

?>