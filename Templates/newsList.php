<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body> 
    <div class="container">
        <h1>Latest News </h1> 
        <?php if(sizeof($headlines) > 0) { ?>
        <ul class="list-group">
            <?php foreach($headlines as $item){?> 
            <li class="list-group-item"> 
                <a href="<?php echo $item['link'] ?>"><?php echo $item['text'] ?></a>
            </li>
            <?php } ?>
          </ul>
          <?php } ?>
    </div>
</body>
</html>