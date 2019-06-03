<?php
include("./02_calculate.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>

<body>
    <form action="<?php echo ($_SERVER['PHP_SELF']); ?>" method="POST">
        <table>
            <tr>
                <td>First Number: </td>
                <td><input type="number" name="num1"></td>
            </tr>
            <tr>
                <td>Second Number: </td>
                <td><input type="number" name="num2"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="calculation" value="Calculate"></td>
            </tr>
        </table>
    </form>
</body>

</html>

<?php
if (isset($_POST['calculation'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    if (empty($num1) or empty($num2)) {
        echo ("<p style='color:red;'>Field mustn't be empty.</p>");
    } else {
        $cal = new Calculate($num1, $num2);
        $cal->add();
        $cal->sub();
        $cal->mul();
        $cal->div();
    }
}
?>