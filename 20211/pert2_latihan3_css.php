<html>

<head>
    <title>Pembagian Dengan PHP</title>
</head>
<style>
    .nilai1 {
        color: red;
        padding-left: 60;
        font-weight: bold;
    }

    .nilai2 {
        color: red;
        padding-left: 175;
        font-weight: bold;
    }
</style>

<body>
    <div>
        <table>
            <tr>
                <td class='nilai1'>NILAI I</td>
                <td class='nilai2'>NILAI II</td>
            </tr>
        </table>
    </div>

    <form action="" method="post">
        <input type="number" name="num1">
        <select name="aritmatika1">
            <option>+</option>
            <option>-</option>
            <option>*</option>
            <option>/</option>
        </select>
        <input type="number" name="num2">
        <input type="submit" name="submit">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        if ($_POST['aritmatika1'] == '+') {
            $hasil = $_POST['num1'] + $_POST['num2'];
        }
        if ($_POST['aritmatika1'] == '-') {
            $hasil = $_POST['num1'] - $_POST['num2'];
        }
        if ($_POST['aritmatika1'] == '*') {
            $hasil = $_POST['num1'] * $_POST['num2'];
        }
        if ($_POST['aritmatika1'] == '/') {
            $hasil = $_POST['num1'] / $_POST['num2'];
        }
        echo $_POST['num1'] . $_POST['aritmatika1'] . $_POST['num2'] . '=' . $hasil;
    }
    ?>

    <body>

</html>