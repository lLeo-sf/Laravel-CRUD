<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .actions {
            flex: 1;
            height: 80vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: stretch;
        }

        .echo {
            flex: 1;
            height: 80vh;
            background-color: grey;
        }
    </style>
</head>

<?php
$products = [];

function onAction()
{
    var_dump('asdasd');
}

?>

<body>
    <div class="actions">
        <h1>PRODUCT C.R.U.D</h1>
        <form action="http://www.google.com"></form>
        <div class="add">
            <h2>Create</h2>
            <label for="productName">Product Name: </label><input type="text" name="productName">
        </div>
        <div class="read">
            <h2>Read</h2>
            <label for="productName">Product Name: </label><input type="text" name="productName">
        </div>
        <div class="read">
            <h2>Update</h2>
            <label for="productName">Product Name: </label><input type="text" name="productName">
            <label for="productName">New Name: </label><input type="text" name="productName">
        </div>
        <div class="read">
            <h2>Delete</h2>
            <label for="productName">Product Name: </label><input type="text" name="productName">
        </div>
        <Button type="submit">Submit</Button>
    </div>
    <div class="echo">
        <h1>PRODUCT LIST</h1>
    </div>
</body>

</html>
