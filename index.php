<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>patie 9 exercice 7</title>
</head>
<body>
    <?php 
        $futurDate = date('d-m-Y', strtotime('+15 days'));
    ?>
    <p><?= 'Dans 15 jours nous seront le  ' . $futurDate ?></p>
</body>
</html>