<!DOCTYPE HTML>
<html>
<head>>
    <title>Calculator</title>


<a href="Juan Portfolio.html">Home page</a>
<a href="pictues for final project.html">Pictures</a>
<a href="project calculator.php">calculator</a>
<a href="project contact info.html">Contact Info</a>

<h1>My Calculator!</h1>

<img src="calculator 2.jpg" alt="calculator" height="350" width="500" class="center">

<link rel="stylesheet" type="text/css" href="sample for project.css">
</head>

<form>
       <input type="text" name="num1" placeholder="Number 1">
       <input type="text" name="num2" placeholder="Number 2">
       <select name="operator">
        <option>None</option>
        <option>Add</option>
        <option>Subtract</option>
        <option>Multiply</option>
        <option>Divide</option>
    </select>
<br>
<button name="submit" type="submit" value="submit">Calculate</button>       </button>
   </form>
<p>Answer:</p>


</body>
</html>




<?php
    if (isset($_GET['submit'])) {
      $result1 = $_GET['num1'];
      $result2 = $_GET['num2'];
      $operator = $_GET['operator'];
      switch($operator)   {
       case "None":
          echo"ERROR";
        break;
       case "Add":
          echo $result1 + $result2;
        break;
        case "Subtract":
          echo  $result1 - $result2;
        break;
        case "Multiply":
          echo  $result1 * $result2;
        break;
        case "Divide":
          echo  $result1 / $result2;
        break;

      }

    }
?>
