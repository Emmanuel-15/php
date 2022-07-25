<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP Primer - Index</title>
</head>

<body>

   <h2>Follow each link to the page example</h2>
   <ul>
      <li><a href="ifstatement.php">Simple if statements</a></li>
      <li><a href="switchStatement.php">Simple switch statements</a></li>
      <li><a href="forLoop.php">Simple for loop</a></li>
   </ul>

   <!-- Basic HTML -->
   <h1>Hello world</h1>
   <br>

   <?php
   //Printing to HTML using echo
   echo 'Hello PHP!';
   echo '<br>';
   echo 'Second line';
   echo '<br>';
   echo 'Hello :';
   ?>

   <?php
   $name = 'Sarvesh Padwalkar';
   $age = 19;
   echo $name;
   echo '<h1>Hello' . $name . '</h1>';
   echo '<p>Your age is: ' . $age . '</p>';
   //Echo using double quotes and interpolation
   echo "<h1>My Name is: $name</h1>"
   ?>

</body>

</html>