<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style_admin.css">
    <script src="https://use.fontawesome.com/86bcc3a3bc.js"></script>
    <script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>


    <title>Document</title>
</head>
<body>
<div class="wrapper">
<?php $this->insert('admin/partials/navigation') ?>

<?=$this->section('content')?>

<?php $this->insert('admin/partials/footer') ?>
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



    let select_id = document.querySelector('#select');
    let input_id = document.querySelector('#input_id')
    select_id.oninput = function(){
        let select = document.querySelector('#select').getElementsByTagName('option');


        for (let i = 0; i < select.length; i++){
            if(select[i].selected){
                input_id.value = select[i].value;


            }
        }
    }

</script>
</body>
</html>
