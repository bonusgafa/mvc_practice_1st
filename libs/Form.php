<?php

class Form extends Bilgi{
    public $deger,$veri;
    public $error=array();
    public function get($key){
        $this->deger=$key;
        $this->veri=htmlspecialchars(strip_tags($_POST[$key]));
        return $this;
    }
    public function is_empty(){
        if(empty($this->veri)):
            $this->error[]=$this->deger." alanı boş bırakılamaz";
            parent::danger(false,"kayitekle");
            return $this;
        else:
            return $this->veri;
        endif;
    }
}

?>