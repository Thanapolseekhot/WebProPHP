<!DOCTYPE html>
<!--Code by Divinector (www.divinectorweb.com)-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PSVITA STORE</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
    <style>
        * {
	margin: 0;
	padding: 0;
}
body {
	font-family: 'Poppins', sans-serif;
}
.wrapper {
	width: 1170px;
	margin: auto;
}
header {
	background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8));
	height: 80px;
	-webkit-background-size: cover;
	background-size: cover;
	background-position: center center;
	position: relative;
}
.nav-area {
	float: right;
	list-style: none;
	margin-top: 30px;
}
.nav-area li {
	display: inline-block;
}
.nav-area li a {
	color: #fff;
	text-decoration: none;
	padding: 5px 20px;
	font-family: poppins;
	font-size: 16px;
	text-transform: uppercase;
}
.nav-area li a:hover {
	background: #fff;
	color: #333;
}
.logo {
    color: #fff;
    margin-top: 20px;
	float: left;
}
.logo img {
	width: 100%;
	padding: 15px 0;
}
.welcome-text {
	position: absolute;
	width: 600px;
	height: 300px;
	margin: 20% 30%;
	text-align: center;
}
.welcome-text h1 {
	text-align: center;
	color: #fff;
	text-transform: uppercase;
	font-size: 60px;
}
.welcome-text h1 span {
	color: #00fecb;
}
.welcome-text a {
	border: 1px solid #fff;
	padding: 10px 25px;
	text-decoration: none;
	text-transform: uppercase;
	font-size: 14px;
	margin-top: 20px;
	display: inline-block;
	color: #fff;
}
.welcome-text a:hover {
	background: #fff;
	color: #333;
}
/*resposive*/

@media (max-width:600px) {
	.wrapper {
		width: 100%;
	}
	.logo {
		float: none;
		width: 50%;
		text-align: center;
		margin: auto;
	}
	
	.nav-area {
		float: none;
		margin-top: 0;
	}
	.nav-area li a {
		padding: 5px;
		font-size: 11px;
	}
	.nav-area {
		text-align: center;
	}
	.welcome-text {
		width: 100%;
		height: auto;
		margin: 30% 0;
	}
	.welcome-text h1 {
		font-size: 30px;
	}
}
.show{
    margin-top: 2px;
    margin-bottom: 40px;
    background-image: url(img/ps2.png);
    background-repeat: no-repeat;
	background-size: cover;
    height:400px;
    width: 1920px auto;
}
.about{
    padding: 0;
    margin-top: 30px;
    margin-left: 25%;
    width: 370px;
    height: 203; 
    text-align: left;   
}
.text{
    margin: 0;
    padding: 0;
    text-align: center;
}
.img{
    float: right;
    width: 1000px;
    height: 203; 
}
.cradit{
    background-color: #333;
    height: 300px;
    margin-top: 100px;
}
.con-game{
	margin: 0;
	padding: 0;
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 50vh;
	display: flex;
	flex-wrap: wrap;
	justify-content: space-between;
}
.con-game .box{
	padding: 40px;
	position: relative;
	width: 200px;
}
.gameimg{
    margin-top: 20px;
    padding: 2px;
}
    </style>
</head>
<body>
    <header>
    <div class="wrapper">
        <div class="logo">
            <h1>CJ STORE</h1>
        </div>
        <ul class="nav-area">
            <li><a href="#">Home</a></li>
            <li><a href="#">GAME</a></li>
            <li><a href="#">CONSOLE</a></li>
            <li><a href="#">ASSARARY</a></li>
            <li><a href="#">ABOUT PSVITA</a></li>
        </ul>
    </div>
    
</header>
<div class="show">
        
    </div>
    <div class="text">
            <h1>โลกที่อยู่ในเกม</h1>
</div>
<div class="box">
    <div class="img">
        <img src="img/cons.jpg" alt="">
        </div>
    <div class="about">

            <p>พกพาความโดดเด่นของ PlayStation® ไปกับคุณด้วยทุกที่กับสุดยอดเพื่อนคู่ใจของนักเล่นเกม อุปกรณ์รูปทรงบางเฉียบนี้ยังโดดเด่นด้วยปุ่มกดอนาล็อกคู่สุดแม่นยำ ให้คุณดื่มด่ำไปกับประสบการณ์เล่นเกมได้มากกว่าที่เคยแบบไม่ต้องง้อคอนโซลและทีวี

            ตัวเครื่องมาพร้อมกับหน่วยความจำภายในความจุประมาณ 1GB ดังนั้นคุณจึงสามารถเพลิดเพลินไปกับการเล่นเกมได้ทันทีแม้ว่าคุณจะไม่ได้ซื้อการ์ดหน่วยความจำชนิดพิเศษของ PS Vita (แยกจำหน่ายต่างหาก)!</p>
    </div>
	<div class="con-game">
		<div class="box">
			<div class="gameimg">
				<img src="img/ray.jfif" style="width: 100%;">
			<p>thanapol</p>
			</div>
		</div>
		<div class="box">
			<div class="gameimg" >
			<img src="img/ray.jfif" style="width: 100%;">
			<p>thanapol</p>
			</div>
		</div>
		<div class="box">
			<div class="gameimg">
			<img src="img/ray.jfif" style="width: 100%;">
			<p>thanapol</p>
			</div>
		</div>
	</div>
    <div class="cradit">
        
    </div>
</div>
</body>
</html>
