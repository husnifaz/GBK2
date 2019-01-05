<!DOCTYPE html>
<html lang="en">
<head>
  <title>App GBK M Husni Farid</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

 <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href=".">GBK</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href=".">Home <span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>

    <div style="margin-top: 3rem;" class="jumbotron text-center">
        <div class="container">
           <h1>-M HUSNI F- APP</h1>
           <p>Aplikasi Sederhana Untuk Menampilkan Hasil Query MySQL</p> 
        </div>
    </div>
    

<?php 
$koneksi = mysqli_connect("localhost","root","","testarkademy");
 
if (mysqli_connect_errno()){
  echo "Koneksi database gagal : " . mysqli_connect_error();
}


?>
<div class="container">
   <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#home">Categories</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu1">Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu2">Query</a>
      </li>
    </ul>

    <div class="tab-content">
      <div class="tab-pane container active" id="home">
      <table class="table table-condensed">
        <thead>
          <tr>
            <th>ID</th>
            <th>Category_name</th>
          </tr>
        </thead>
        <tbody>
        <?php
          $data = mysqli_query($koneksi,"SELECT * FROM categories");
          while($d = mysqli_fetch_array($data)){
            ?>
              <tr>
                <td><?php echo $d['id'] ?></td>
                <td><?php echo $d['category_name']; ?></td>
              </tr>
              <?php 
          }
          ?>
        </tbody>
      </table>
      </div>

      <div class="tab-pane container fade" id="menu1">
       <table class="table table-condensed">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Category ID</th>
          </tr>
        </thead>
        <tbody>
        <?php
          $data = mysqli_query($koneksi,"SELECT * FROM products");
          while($d = mysqli_fetch_array($data)){
            ?>
              <tr>
                <td><?php echo $d['id'] ?></td>
                <td><?php echo $d['name']; ?></td>
                <td><?php echo $d['category_id']; ?></td>
              </tr>
              <?php 
          }
          ?>
        </tbody>
      </table>
      </div>
      <div class="tab-pane container fade" id="menu2">
        <table class="table table-condensed">
        <thead>
          <tr>
            <th>ID</th>
            <th>Category_name</th>
            <th>Product</th>
          </tr>
        </thead>
        <tbody>
        <?php
          $data = mysqli_query($koneksi,"SELECT categories.id, categories.category_name, products.name as products 
          from categories left join products on (categories.id = products.category_id)");
          while($d = mysqli_fetch_row($data)){
            ?>
              <tr>
                <td><?php echo $d[0] ?></td>
                <td><?php echo $d[1]; ?></td>
                <td><?php echo $d[2]; ?></td>
              </tr>
              <?php 
          }
          ?>
        </tbody>
      </table>
      </div>
    </div>
</div>
</body>
</html>