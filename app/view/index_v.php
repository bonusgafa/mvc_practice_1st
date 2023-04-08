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
      <div class="row text-center">
        <div class="col-lg-12">
          <table class="table table-bordered mt-5">
            <thead>
            <td><a href="http://localhost/mvc/boots/kayitekle" class="btn btn-success btn-sm">YENİ KAYIT</a></td>
              <tr class="font-weight-bold">
                <td>#İD</td>
                <td>BAŞLIK</td>
                <td>iÇERİK</td>
                <td>İŞLEM</td>
              </tr>
            </thead>	
            <tbody>
              <?php
              foreach($veri as $value):
                echo '<tr>
                <td>'.$value["id"].'</td>
                <td>'.$value["baslik"].'</td>
                <td>'.$value["icerik"].'</td>
                <td><a href="http://localhost/mvc/boots/kayitguncelle/'.$value["id"].'" class="btn btn-primary btn-sm">Güncelle</a> 
                <a href="http://localhost/mvc/boots/kayitsil/'.$value["id"].'" class="btn btn-danger btn-sm">Sil</a></td>
              </tr>';
              endforeach;
              ?>
              
            </tbody>
          </table>
        </div>
        
      </div> 
    </div>

</body>
</html>