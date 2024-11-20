<form method="post" action="">
    Enter a number: <input type="text" name="number">
    <input type="submit" value="Calculate Square Root">
    <?php
    if (isset($_POST['number'])) {
        $number = $_POST['number'];
        echo "Square Root: " . sqrt($number);
    }
    ?>