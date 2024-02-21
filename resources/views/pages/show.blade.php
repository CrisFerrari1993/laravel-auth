<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Show page</h1>

    {{ $projects -> name }}
    <br>
    {{ $projects -> descrizione }}
    <br>
    {{ $projects -> data_inizio }}
    <br>
    {{ $projects -> data_fine }}
    <br>
    {{ $projects -> stato }}
    <br>
    {{ $projects -> priorità }}
    <br>
    {{ $projects -> responsabile }}
    <br>

</body>

</html>