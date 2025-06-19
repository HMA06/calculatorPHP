<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> CALCULATOR - INPUT </title>
</head>

<body>

    <h1><i> Calc.IO — Powered by PHP </i></h1>

    <form method="post" action="calculate.php">
        <label><i> Enter the first number : </i></label>
        <input type="number" required name="number1">

        <br><br>

        <label><i> Chose an operation : </i></label>

        <select name="operation">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="%">%</option>
            <option value="**">**</option>

        </select>


        <br><br>


        <label><i> Enter the second number : </i></label>
        <input type="number" required name="number2">

        <br><br>

        <button type="submit"> Calculate </button>
    </form>

</body>

</html>