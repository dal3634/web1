<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1><a href="index.php"> WEB</a></h1>
    <ol>
      <?php
      $list=scandir('./data');
      $i=2;
      while($i<count($list)){
        echo "<li><a href=index2.php?id=$list[$i]>$list[$i]</a></li>";
        $i=$i+1;
      }
      ?>
    </ol>
    <h2>
      <?php
      if(isset($_GET['id'])){
       echo $_GET['id'];
     } else{
       echo "Welcome!!";
     }
      ?>
    </h2>
      <?php
      if(isset($_GET['id'])){
        echo file_get_contents("data/".$_GET['id']);
      } else {
        echo "Welcome";
      }
      ?>
  </body>
</html>
