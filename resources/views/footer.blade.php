<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="https://kit.fontawesome.com/29e6b87f45.js" crossorigin="anonymous"></script>
<style>
.footer {
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #0e0e0e;
   color: white;
}

.center {
    text-align: center;    
}
.indent { 
    text-indent: 10px; 
}

.parent {
display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: repeat(5, 1fr);
grid-column-gap: 0px;
grid-row-gap: 0px;
}

.div1 { grid-area: 2 / 1 / 3 / 2; }
.div2 { grid-area: 2 / 2 / 3 / 3; }
.div3 { grid-area: 2 / 3 / 3 / 4; }
.div4 { grid-area: 2 / 4 / 3 / 5; }
.div5 { grid-area: 2 / 5 / 3 / 6; }

</style>
</head>
<body>

<div class="footer">
  <p class="center indent"><a href=""><i class="fab fa-facebook fa-lg"></i></a><a href=""><i class="fab fa-twitter fa-lg"></i></a></p>
  <hr>
  <h3 class="center">Les partenaires</h3>

  <div class="parent center">
    <div class="div1"><img src="https://via.placeholder.com/150" alt=""></div>
    <div class="div2"><img src="https://via.placeholder.com/150" alt=""></div>
    <div class="div3"><img src="https://via.placeholder.com/150" alt=""></div>
    <div class="div4"><img src="https://via.placeholder.com/150" alt=""></div>
    <div class="div5"><img src="https://via.placeholder.com/150" alt=""></div>
  </div>
</div>

</body>
</html> 
