<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="css\style.css">
</head>
<body>
   <span class="span">PHP Truth Table</span>

<?php $a1 = !0 ?>
<?php $a2 = 0 || 0 ?>
<?php $a4 = 0 && 0 ?> 
<?php $a5 = 0 xor 0 ?>
<?php $a6 = 0 || 1 ?>
<?php $a7 = 0 && 1 ?>
<?php $a8 = 0 xor 1 ?>
<?php $a9 = !1 ?>
<?php $a10 = 1 || 0 ?>
<?php $a11 = 1 && 0 ?>
<?php $a12 = 1 xor 0 ?>
<?php $a13 = 1 || 1 ?>
<?php $a14 = 1 && 1 ?>
<?php $a15 = 1 xor 1 ?>

   <table class="table">
      <thead>
         <tr>
            <th>A</th>
            <th>B</th>
            <th>!A</th>
            <th>A || B</th>
            <th>A & B</th>
            <th>A xor B</th>
         </tr>
      </thead>
      <tbody>
         <tr>
            <td>0</td>
            <td>0</td>
            <td><?php echo $a1 ?></td>
            <td><?php echo $a2 ?>0</td>
            <td><?php echo $a4 ?>0</td>
            <td><?php echo $a5 ?></td>
         </tr>
         <tr>
            <td>0</td>
            <td>1</td>
            <td><?php echo $a1 ?></td>
            <td><?php echo $a6 ?></td>
            <td><?php echo $a7 ?>0</td>
            <td><?php echo $a8 ?></td>
         </tr>
         <tr>
            <td>1</td>
            <td>0</td>
            <td><?php echo $a9 ?>0</td>
            <td><?php echo $a10 ?></td>
            <td><?php echo $a11 ?>0</td>
            <td><?php echo $a12 ?></td>
         </tr>
         <tr>
            <td>1</td>
            <td>1</td>
            <td><?php echo $a9 ?>0</td>
            <td><?php echo $a13 ?></td>
            <td><?php echo $a14 ?></td>
            <td><?php echo $a15 ?></td>
         </tr>
      </tbody>
   </table>
   <span class="span2">Flexible comparison in PHP ==</span>
   <table class="table">
      <thead>
         <tr>
            <th></th>
            <th>true</th>
            <th>false</th>
            <th>1</th>
            <th>0</th>
            <th>-1</th>
            <th>"1"</th>
            <th>null</th>
            <th>"php"</th>
         </tr>
      </thead>
      <tbody>
         <tr>
            <td>true</td>
            <td><?php echo(true == true) ?></td>
            <td><?php echo(true == false) ?>0</td>
            <td><?php echo(true == 1) ?></td>
            <td><?php echo(true == 0) ?>0</td>
            <td><?php echo(true == -1) ?></td>
            <td><?php echo(true == "1") ?></td>
            <td><?php echo(true == null) ?>0</td>
            <td><?php echo(true == "php") ?></td>
         </tr>
         <tr>
            <td>false</td>
            <td><?php echo(false == true) ?>0</td>
            <td><?php echo(false == false) ?></td>
            <td><?php echo(false == 1) ?>0</td>
            <td><?php echo(false == 0) ?></td>
            <td><?php echo(false == -1) ?>0</td>
            <td><?php echo(false == "1") ?>0</td>
            <td><?php echo(false == null) ?></td>
            <td><?php echo(false == "php") ?>0</td>
         </tr>
         <tr>
            <td>1</td>
            <td><?php echo(1 == true) ?></td>
            <td><?php echo(1 == false) ?>0</td>
            <td><?php echo(1 == 1) ?></td>
            <td><?php echo(1 == 0) ?>0</td>
            <td><?php echo(1 == -1) ?>0</td>
            <td><?php echo(1 == "1") ?></td>
            <td><?php echo(1 == null) ?>0</td>
            <td><?php echo(1 == "php") ?>0</td>
         </tr>
         <tr>
            <td>0</td>
            <td><?php echo(0 == true) ?>0</td>
            <td><?php echo(0 == false) ?></td>
            <td><?php echo(0 == 1) ?>0</td>
            <td><?php echo(0 == 0) ?></td>
            <td><?php echo(0 == -1) ?>0</td>
            <td><?php echo(0 == "1") ?>0</td>
            <td><?php echo(0 == null) ?></td>
            <td><?php echo(0 == "php") ?></td>
         </tr>
         <tr>
            <td>-1</td>
            <td><?php echo(-1 == true) ?></td>
            <td><?php echo(-1 == false) ?>0</td>
            <td><?php echo(-1 == 1) ?>0</td>
            <td><?php echo(-1 == 0) ?>0</td>
            <td><?php echo(-1 == -1) ?></td>
            <td><?php echo(-1 == "1") ?>0</td>
            <td><?php echo(-1 == null) ?>0</td>
            <td><?php echo(-1 == "php") ?>0</td>
         </tr>
         <tr>
            <td>"1"</td>
            <td><?php echo("1" == true) ?></td>
            <td><?php echo("1" == false) ?>0</td>
            <td><?php echo("1" == 1) ?></td>
            <td><?php echo("1" == 0) ?>0</td>
            <td><?php echo("1" == -1) ?>0</td>
            <td><?php echo("1" == "1") ?></td>
            <td><?php echo("1" == null) ?>0</td>
            <td><?php echo("1" == "php") ?>0</td>
         </tr>
         <tr>
            <td>"null</td>
            <td><?php echo("null" == true) ?></td>
            <td><?php echo("null" == false) ?>0</td>
            <td><?php echo("null" == 1) ?>0</td>
            <td><?php echo("null" == 0) ?></td>
            <td><?php echo("null" == -1) ?>0</td>
            <td><?php echo("null" == "1") ?>0</td>
            <td><?php echo("null" == null) ?>0</td>
            <td><?php echo("null" == "php") ?>0</td>
         </tr>
         <tr>
            <td>"php"</td>
            <td><?php echo("php" == true) ?></td>
            <td><?php echo("php" == false) ?>0</td>
            <td><?php echo("php" == 1) ?>0</td>
            <td><?php echo("php" == 0) ?></td>
            <td><?php echo("php" == -1) ?>0</td>
            <td><?php echo("php" == "1") ?>0</td>
            <td><?php echo("php" == null) ?>0</td>
            <td><?php echo("php" == "php") ?></td>
         </tr>
      </tbody>
   </table>
   <span class="span3">Hard comparison in PHP ===</span>
   <table class="table">
      <thead>
         <tr>
            <th></th>
            <th>true</th>
            <th>false</th>
            <th>1</th>
            <th>0</th>
            <th>-1</th>
            <th>"1"</th>
            <th>null</th>
            <th>"php"</th>
         </tr>
      </thead>
      <tbody>
         <tr>
            <td>true</td>
            <td><?php echo(true === true) ?></td>
            <td><?php echo(true === false) ?>0</td>
            <td><?php echo(true === 1) ?>0</td>
            <td><?php echo(true === 0) ?>0</td>
            <td><?php echo(true === -1) ?>0</td>
            <td><?php echo(true === "1") ?>0</td>
            <td><?php echo(true === null) ?>0</td>
            <td><?php echo(true === "php") ?>0</td>
         </tr>
         <tr>
            <td>false</td>
            <td><?php echo(false === true) ?>0</td>
            <td><?php echo(false === false) ?></td>
            <td><?php echo(false === 1) ?>0</td>
            <td><?php echo(false === 0) ?>0</td>
            <td><?php echo(false === -1) ?>0</td>
            <td><?php echo(false === "1") ?>0</td>
            <td><?php echo(false === null) ?>0</td>
            <td><?php echo(false === "php") ?>0</td>
         </tr>
         <tr>
            <td>1</td>
            <td><?php echo(1 === true) ?>0</td>
            <td><?php echo(1 === false) ?>0</td>
            <td><?php echo(1 === 1) ?></td>
            <td><?php echo(1 === 0) ?>0</td>
            <td><?php echo(1 === -1) ?>0</td>
            <td><?php echo(1 === "1") ?>0</td>
            <td><?php echo(1 === null) ?>0</td>
            <td><?php echo(1 === "php") ?>0</td>
         </tr>
         <tr>
            <td>0</td>
            <td><?php echo(0 === true) ?>0</td>
            <td><?php echo(0 === false) ?>0</td>
            <td><?php echo(0 === 1) ?>0</td>
            <td><?php echo(0 === 0) ?></td>
            <td><?php echo(0 === -1) ?>0</td>
            <td><?php echo(0 === "1") ?>0</td>
            <td><?php echo(0 === null) ?>0</td>
            <td><?php echo(0 === "php") ?>0</td>
         </tr>
         <tr>
            <td>-1</td>
            <td><?php echo(-1 === true) ?>0</td>
            <td><?php echo(-1 === false) ?>0</td>
            <td><?php echo(-1 === 1) ?>0</td>
            <td><?php echo(-1 === 0) ?>0</td>
            <td><?php echo(-1 === -1) ?></td>
            <td><?php echo(-1 === "1") ?>0</td>
            <td><?php echo(-1 === null) ?>0</td>
            <td><?php echo(-1 === "php") ?>0</td>
         </tr>
         <tr>
            <td>"1"</td>
            <td><?php echo("1" === true) ?>0</td>
            <td><?php echo("1" === false) ?>0</td>
            <td><?php echo("1" === 1) ?>0</td>
            <td><?php echo("1" === 0) ?>0</td>
            <td><?php echo("1" === -1) ?>0</td>
            <td><?php echo("1" === "1") ?></td>
            <td><?php echo("1" === null) ?>0</td>
            <td><?php echo("1" === "php") ?>0</td>
         </tr>
         <tr>
            <td>"null</td>
            <td><?php echo("null" === true) ?>0</td>
            <td><?php echo("null" === false) ?>0</td>
            <td><?php echo("null" === 1) ?>0</td>
            <td><?php echo("null" === 0) ?>0</td>
            <td><?php echo("null" === -1) ?>0</td>
            <td><?php echo("null" === "1") ?>0</td>
            <td><?php echo("null" === null) ?>0</td>
            <td><?php echo("null" === "php") ?>0</td>
         </tr>
         <tr>
            <td>"php"</td>
            <td><?php echo("php" === true) ?>0</td>
            <td><?php echo("php" === false) ?>0</td>
            <td><?php echo("php" === 1) ?>0</td>
            <td><?php echo("php" === 0) ?>0</td>
            <td><?php echo("php" === -1) ?>0</td>
            <td><?php echo("php" === "1") ?>0</td>
            <td><?php echo("php" === null) ?>0</td>
            <td><?php echo("php" === "php") ?></td>
         </tr>
      </tbody>
   </table>
   <span class="conc"> Conclusion: With a non-strict comparison, the operator performs a cast between two different types, if they differ. That is, it compares the value after type conversion.</span><br>
   <span class="conc"> In a strict comparison, the operator will return true only if both operands have the same type and the same value.</span>
</body>
</html>