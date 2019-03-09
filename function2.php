<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Functions</h1>
    <h2>Basic</h2>
    <?php
    function basic(){
      print("Lorem ipsum dolor sit amet, consectetur adipisicing elit<br>");
    }
    basic();
    ?>
    <h2>Parameter &amp; Argument</h2>
    <?php
    function sum($list, $right){
      print($list+$right);
      print("<br>");
    }
    sum(2,4);
    ?>
    <h2>Return</h2>
    <?php
    function sum2($left, $right){
      return $left + $right;
    }
    print(sum2(2,3));
    file_put_contents("result.txt", sum2(2,3));
    ?>
  </body>
</html>
