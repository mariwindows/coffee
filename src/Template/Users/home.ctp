<div class="text-center">

<h3 class="home">Bienvenido a The Little Coffee</h3>


</div>



<div class="contenedor">

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="../webroot/img/1.jpg" alt="New York" width="1200" height="700">
        <div class="carousel-caption">
          <p><strong> El café ayuda a quien duerme poco y sueña mucho...</strong></p>
        </div>
      </div>

      <div class="item">
        <img src="../webroot/img/2.jpg" alt="Chicago" width="1200" height="700">
        <div class="carousel-caption">
          <p><strong>Una taza de café esta llena de ideas...</strong></p>
        </div>
      </div>
    
      <div class="item">
        <img src="../webroot/img/3.jpg" alt="Los Angeles" width="1200" height="700">
        <div class="carousel-caption">
          <p><strong>No es que el café me "insomnio" es que me hace soñar despierto...</strong></p>
        </div>
      </div>
    </div>
       <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
   </div>




<div class="text-center">
<h2 class="sub">Realiza tu pedido y en breve te lo estaremos enviando</h2>
<?= $this->Html->link('Comenzar pedido', ['controller' => 'Productos', 'action' => 'index'], ['class' => 'bot btn btn-sm btn-info']) ?><br><br>

</div>