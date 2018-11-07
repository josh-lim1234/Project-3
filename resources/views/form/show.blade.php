<!doctype html>
<html lang='en'>
<head>
    <title>Drink Price Comparison</title>
    <meta charset='utf-8'>
    <link href='css/form.css' type='text/css' rel='stylesheet'>
</head>
<body>
    <h1>Drink Price Comparison</h1>
    <p>Calculate the per unit prices of your favourite drinks!</p>
    <p>Price of a drink($)</p>
    <form method='GET' action='/loading...'>
        <input type="number" name="price" step="0.01" required><p>Volume of drink</p>
        <input type="radio" name="dosage" value="320" required> 320mL<br>
        <input type="radio" name="dosage" value="500" required> 500mL<br>
        <input type="radio" name="dosage" value="1500" required> 1500mL<br>
        <p>Measure price per litre?</p>
            <label><input type='checkbox' name='litre' value='Y'> Yes</label><br>
        <br>
        <input type="submit" class="btn btn-primary">
    </form>
</body>
</html>