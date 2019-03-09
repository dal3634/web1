<!DOCTYPE html>
<html>
  <head>
    <?php
    function print_title(){
          if(isset($_GET['id'])){
         echo $_GET['id'];
       } else{
         echo "Welcome!!";
       }
     }
     function print_contents(){
       if(isset($_GET['id'])){
         echo file_get_contents("data/".$_GET['id']);
       } else {
         echo "Welcome";
       }
     }
    ?>
    <meta charset="utf-8">
    <title>
      <?php
      print_title();
      ?>
    </title>
  </head>
  <body>
    <h1><a href="index.php"> WEB</a></h1>
    <ol>
      <?php
      $list=scandir('./data');
      $i=2;
      while($i<count($list)){
        echo "<li><a href=index.php?id=$list[$i]>$list[$i]</a></li>";
        $i=$i+1;
      }
      ?>
    </ol>
    <h2>
      <?php
      if(isset($_GET['id'])){
      ?>
      <a href="update.php?id=<?=$_GET['id']?>">update</a>
      <?php
      }
      ?>
    </h2>
    <h2>
      <?php
      print_title();
      ?>
    </h2>
      <?php
      print_contents();
      ?>
  </body>
</html>
