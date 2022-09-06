<?php
declare(strict_types =1);
include 'includes/class-autoload.inc.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
    <p> This is a paragraph!</p>
    <?php
    // echo "<p> This is also a paragraph!</p>"; 

    // echo 'I\'m learning PHP!';

    // if ("10" !== 10) {
    //     echo "Not the same data type!";
    // }

    // $person1 = new Person("Cody", "Brown", 29);
    // echo $person1->getName();
    // echo $person1->getDA();



    // const TACOSAREGOOD = true;

    // $object = new NewClass;
    // unset($object);
    // echo $object->getProperty();
    ?>
    <p> This is a paragraph!</p>
    <form action="includes/calc.inc.php" method="post">
<p>My Calculator</p>
<input type="number" name="num1" placeholder="First number">
<select name="oper">
    <option value ="add">Addition</option>
    <option value ="sub">Subtraction</option>
    <option value="div">Division</option>
    <option value="mul">Multiplication</option>
</select>
<input type="number" name="num2" placeholder="Second number">
<button type="submit" name="submit">Calculate</button>

    </form>

</body>

</html>