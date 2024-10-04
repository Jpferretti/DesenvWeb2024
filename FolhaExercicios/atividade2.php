<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="valor">Valor</label>
        <input type="number" name="valor" id="valor">
    </form>
    
    <?php
        if($_POST) {
            $iValor = $_POST['valor'];
            if($iValor%==2) {
                echo "<p>Valor divisível por 2</p>";
            } else if() {
                echo "<p>O valor não é divisível por 2</p>";
            }
        }
    ?>
</body>
</html>