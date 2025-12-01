<?php
$checkResult = "<span style='color:red'> Try the magic word 'caleb'</span>";
$myInputText01 = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $myInputText01 = $_POST['myText01'] ?? '';

    $myCheck = false;
    if ($myInputText01 === 'caleb') {
        $myCheck = true;
    }
    if ($myCheck) {
        $checkResult = "<b style='color:green'> Cool! </b>";
    } else {
        $checkResult = "<span style='color:red'> Try the magic word 'caleb'</span>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Browser Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h3>Render-PHP-submit</h3>

    <form action="" method="post" >
        <label for="myText01">Enter Text:</label>
   <!-- <input type="text" id="myText01" name="myText01" value="<?= htmlspecialchars($myInputText01); ?>"> -->
        <input type="text" id="myText01" name="myText01" value="caleb">
        <input type="submit" value="Submit">
    </form>
    
    <div style="text-align: center;">
        <?php echo $checkResult; ?>
    </div>

</body>
</html>
