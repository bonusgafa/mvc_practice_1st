<?php

class Bilgi{
    public function success($deger,$yol){
        return '<div class="alert alert-success mt-5">'.$deger.'</div>'.header("Refresh:2; url=".$yol);
    }
    public function danger($deger=false,$yol){
        return '<div class="alert alert-danger mt-5">'.$deger.'</div>'.header("Refresh:2; url=".$yol);
    }
}

?>