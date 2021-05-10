<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-4">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident doloremque repellendus adipisci voluptas inventore eligendi quis totam voluptates natus similique exercitationem, repellat vel porro, dolorem asperiores excepturi. Necessitatibus tempora in dolorum perspiciatis molestias, maxime aliquid eum et distinctio iste. Maxime, aliquam commodi. Quam illum quos praesentium recusandae molestiae dolores? Numquam.
        </div>
        <div class="col-sm">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident doloremque repellendus adipisci voluptas inventore eligendi quis totam voluptates natus similique exercitationem, repellat vel porro, dolorem asperiores excepturi. Necessitatibus tempora in dolorum perspiciatis molestias, maxime aliquid eum et distinctio iste. Maxime, aliquam commodi. Quam illum quos praesentium recusandae molestiae dolores? Numquam.
        </div>
        <div class="col-sm">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident doloremque repellendus adipisci voluptas inventore eligendi quis totam voluptates natus similique exercitationem, repellat vel porro, dolorem asperiores excepturi. Necessitatibus tempora in dolorum perspiciatis molestias, maxime aliquid eum et distinctio iste. Maxime, aliquam commodi. Quam illum quos praesentium recusandae molestiae dolores? Numquam.
        </div>
    </div>
</div>

    <script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php include('header.php');
            $query ="SELECT*FROM game";
            $result = mysqli_query($conn,$query);


            while($row = mysqli_fetch_array($result)){?>
            <div class="col-4"></div>
            <form method="get" action="game.php?id=<?=$row['id']?>" >
            <img src="img/god.jpg" style="height:150px">
            <h2><?=$row['nameg'];?></h2>
            <h2><?=$row['price'];?></h2>
            
            
            </form>
            </div>
            <?php }

        ?>