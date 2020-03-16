<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://use.fontawesome.com/86bcc3a3bc.js"></script>

    <title>Document</title>
</head>
<body>
<div class="wrapper">
<?php $this->insert('partials/navigation') ?>

<?=$this->section('content')?>

<?php $this->insert('partials/footer') ?>
</div>

<script>
    let select_catalog = document.querySelector('.nav_catalog');
    let catalog = document.querySelector('.nav_background_cat');
    let category = document.querySelector('.nav_categories');

    select_catalog.onmouseover = function () {
        catalog.style.display = "block";
    }
    category.onmouseover = function(){
        catalog.style.display = "block";
    }
    category.onmouseout = function () {
        catalog.style.display = "none";
     }

</script>

</body>
</html>
