<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica Galeria</title>
    <link rel="stylesheet" href="PracWe.css">
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}


.container{
    max-width: 1200px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-template-rows: 250px;
    grid-gap: 20px;
    padding: 100px 0;
}


.box img{
    width: 100%;
    height: 100%;
    object-fit: cover;
}


.box :nth-child(1){
    grid-column-start: span 2;
}
.box :nth-child(4){
    grid-column-start: span 2;
}


@media(max-width:991px){
    .container{
        padding: 30px;
        grid-template-columns: repeat(1, 1fr);}
    .box :nth-child(1){
        grid-column-start: span 1;
    }
    .box :nth-child(4){
        grid-column-start: span 1;
        }
    }
    </style>
</head>
<body bgcolor="#FCEA95">
    <font color="#4D3F00"><center><h1>GALERIA DE IMAGENES</h1></center></font>
    <div class="container">

        <div class="box">
            <img src="1.png" alt="">
        </div>
        <div class="box">
            <img src="2.png" alt="">
        </div>
        <div class="box">
            <img src="3.png" alt="">
        </div>
        <div class="box">
            <img src="4.jpg" alt="">
        </div>
        <div class="box">
            <img src="5.jpg" alt="">
        </div><div class="box">
            <img src="6.jpg" alt="">
        </div>
       
    </div>
   
</body>
</html>