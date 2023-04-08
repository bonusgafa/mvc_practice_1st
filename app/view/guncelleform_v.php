<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8">
    <title>MVC UYGULAMA</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container">
    <?php
        foreach($veri as $value): 
            $id=$value["id"];
            $baslik=$value["baslik"];
            $icerik=$value["icerik"];
        endforeach;
  
    ?>
      <div class="row text-center">
        <div class="col-lg-12 mt-5">
        <form action="http://localhost/mvc/boots/kayitguncelleson" method="POST">
        <input type="text" name="baslik" value="<?php  echo $baslik  ?>"><br><br>
        <input type="text" name="icerik" value="<?php  echo $icerik  ?>"><br><br>
        <input type="hidden" name="kayitid" value="<?php  echo $id  ?>">
        <input type="submit" name="button" value="Güncelle" class="btn btn-success">
        <a href="http://localhost/mvc" class="btn btn-danger">Geri Dön</a>
    </form>
        </div>
        
      </div> 
    </div>

</body>
</html>