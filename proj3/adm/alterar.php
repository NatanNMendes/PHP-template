<?php include("../services/functions.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>alterar</title>
</head>
<body>
    <form action="../services/alterar.php" method="post">
        <input type="hidden" value="<?php echo $_GET['campo']?>" name="tipo">
        <textarea name="texto" cols="30" rows="4"><?php echo returnText($_GET['campo']); ?></textarea>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>