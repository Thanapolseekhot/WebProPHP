<?php include('server.php')?>
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" 
     crossorigin="anonymous">

    <title>GAME</title>
  </head>
  <body>
  <?php include('header.php');?>
    <style>
        .carousel-item{
            margin-top: 5px;
            height: 30rem;
            background: #8C8D92;
            color: black;
            position: relative;
            padding-left: 20px;
        }
        .container{
            position: absolute;
            bottom: 40%;
            left: 55%;
            
        }
        .container-fluid{
            margin-top: 30px;
        }
        
    </style>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="img/godwal.jpg" style="width:50%;">
                        <div class="container">
                            <h1>God of War: Ascension</h1>
                            <div class="box" style="width: 300px;">
                                <center><p>หนึ่งในตำนานบทหนึ่งของวงการเกมเทพสงครามหลังจากไล่ฆ่าเทพจนแทบไม่เหลือในภาค 3 
                                มาวันนี้โล้นซ่ากลับมาอีกครั้งในการเล่าเรื่องย้อนอดีตของเครโทสก่อนจะมาเป็นเทพแห่งสงครามในเกม God of War: Ascension</p></center>
                                <a href="" class="btn btn-lg btn-primary">ดูรายละเอียดเพิ่มเติม</a>
                            </div>
                            
                        </div>
            </div>
            <div class="carousel-item">
            <img src="img/assasin.jpg" style="width:50%;" >
            <div class="container">
                            <h1>Assassin’s Creed III</h1>
                            <div class="box" style="width: 300px;">
                                <center><p>หนึ่งในตำนานบทหนึ่งของวงการเกมเทพสงครามหลังจากไล่ฆ่าเทพจนแทบไม่เหลือในภาค 3 
                                มาวันนี้โล้นซ่ากลับมาอีกครั้งในการเล่าเรื่องย้อนอดีตของเครโทสก่อนจะมาเป็นเทพแห่งสงครามในเกม God of War: Ascension</p></center>
                                <a href="" class="btn btn-lg btn-primary" >ดูรายละเอียดเพิ่มเติม</a>
                            </div>
                            
                        </div>
            </div>
            <div class="carousel-item">
            <img src="img/unchart.jpg" style="width:50%;">
            <div class="container">
                            <h1>God of War: Ascension</h1>
                            <div class="box" style="width: 300px;">
                                <center><p>หนึ่งในตำนานบทหนึ่งของวงการเกมเทพสงครามหลังจากไล่ฆ่าเทพจนแทบไม่เหลือในภาค 3 
                                มาวันนี้โล้นซ่ากลับมาอีกครั้งในการเล่าเรื่องย้อนอดีตของเครโทสก่อนจะมาเป็นเทพแห่งสงครามในเกม God of War: Ascension</p></center>
                                <a href="" class="btn btn-lg btn-primary">ดูรายละเอียดเพิ่มเติม</a>
                            </div>
                            
                        </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container-fluid">
    <div class="row">
            <?php
                $query ="SELECT*FROM game";
                $result = mysqli_query($conn,$query);


                while($row = mysqli_fetch_array($result)){?>
                    <div class="col-4">
                        <form method="get" action="game.php?id=<?=$row['id']?>" >
                            <center><a href=""><img src="img/god.jpg" style="width: 50%; padding:20px"></a>
                            <h5 class="text-center"><?=$row['nameg'];?></h5>
                            <h5 class="text-center"><?=number_format($row['price'],2);?></h5>
                            <input type="hidden" name="name" value="<?=$row['name'] ?>">
                            <input type="hidden" name="price" value="<?=$row['price'] ?>">
                            <input type="number" name="quantity" value="1"  >
                            <input type="submit" name="add" class="btn btn-warning btn-block my-2">
                            </center>
                    
                        </form>
                    </div>
                <?php }

            ?>
        </div>
    </div>
    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
     crossorigin="anonymous"></script>

    
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" 
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" 
    integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" 
    crossorigin="anonymous"></script>
    <div class="cradit">
        
    </div>
  </body>
</html>