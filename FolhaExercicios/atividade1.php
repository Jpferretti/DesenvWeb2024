<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="primeira">Primeira</label>
        <input type="number" name="primeira" id="primeira">
        <label for="segunda">Segunda</label>
        <input type="number" name="segunda"  id="segunda">
        <label for="terceira">Terceira</label>
        <input type="number" name="terceira" id="terceira">
        <input type="submit" value="Enviar">
    </form>
    
    <?php
        if($_POST) {
            $iPrimeira  = $_POST['primeira'];
            $iSegunda   = $_POST['segunda'];
            $iTerceira  = $_POST['terceira'];
            $iResultado = $iPrimeira + $iSegunda + $iTerceira;
            $sColor = 'black';
            if($iPrimeira > 10) {
                $sColor = 'blue';
            } 
            if($iSegunda < $iTerceira) {
                $sColor = 'green';
            } 
            if(($iTerceira < $iPrimeira) && ($iTerceira < $iSegunda)) {
                $sColor = 'red';
            }
            echo "<h3 style='color:$sColor;'>$iResultado</h3>";
        }
    ?>
</body>
</html>