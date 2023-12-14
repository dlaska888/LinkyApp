<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error <?= $code->value ?? 500; ?></title>
</head>
<body>
<p><?= 'Error ' . ($code->value ?? 500) ?></p>
<p><?= $description ?? 'Something went wrong' ?></p>
</body>
</html>