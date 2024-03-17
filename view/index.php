<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
    <?php include("../controller/ScriptController.php")?>
</head>
<body>
    <h3>Conversor de queries laravel para SQL</h3>
    <form action='' method='post'>
        <textarea name='script' id = 'scriptContent'></textarea>
        <input type="submit" value='Converter'>
    </form>
    <h3>Resultado: </h3>
    <?php if (!empty($mainTable)) p($mainTable);?>
</body>
</html>