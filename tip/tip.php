<!DOCTYPE html>

<html>
<head>
    <title>Tip Calculator</title>
    <html lang="en"></html>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="tips.css" />
</head>
<br>
    <h1>Tip Calculator</h1>
    <form method="post" action="">
        <label for="bill">Bill Amount: $</label>
        <input type="text" id="bill" name="bill" required>
        <br><br>
        <label for="tip">Tip Percentage:</label>
        <select id="tip" name="tip"> 
            <option value="0.01">I'd rather eat broken glass (1%) </option>
            <option value="0.05">I did actually vomit a little bit (5%)</option>
            <option value="0.10">I want to strangle you less now (10%)</option>
            <option value="0.15">Did we just become best friends? (15%)</option>
            <option value="0.20">Do you want to read this poem I wrote for you? (20%)</option>
            <option value="0.25">P.S. We should be together (25%)</option>
        </select>
        <br><br>
        <input type="submit" value="Calculate">
        
    </form>
    <br></br>
    <form action= "https://github.com/williamtitus295661/Just-the-Tip/tree/main/tip" method="_POST">
        <button type="submit">Home</button>
        </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bill = $_POST['bill'];
        $tipPercentage = $_POST['tip'];

        if (is_numeric($bill) && $bill > 0) {
            $tip = $bill * $tipPercentage;
            $total = $bill + $tip;

            echo "<h2>Results:</h2>";
            echo "<p>Bill Amount: $" . number_format($bill, 2) . "<br>";
            echo "Tip: $" . number_format($tip, 2) . "<br>";
            echo "Total: $" . number_format($total, 2) .  "</p>";
        } else {
            echo "<p>Please enter a valid bill amount.</p>";
        }
    }

 
    ?>
</body>
</html>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<!-- footer.php -->
<footer>
    <p>© 2024 M0rbiu5h3ll. All rights reserved.</p>
</footer>
