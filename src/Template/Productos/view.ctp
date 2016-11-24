<h2 id="prod"><?= $producto->nombre . ' ' ?></h2>
<br><br>
<div class="row">


  <div class="col col-sm-3">
   <img class="img-rounded" src="<?php echo '../../'.$producto->dir . $producto->prod_img; ?>" height="180" width="220"/>
  </div>
  <div class="col col-sm-5">
    
    Descripción:  <?= $producto->descripcion ?>
    <br />
    Precio: $<?= $producto->precio ?>
 
    <br />
    <br />
    <?= $this->Form->create(null, [ 'url' => ['controller' => 'Compras', 'action' => 'agregar', $producto->id] ]) ?>

    <?= $this->Form->input('cantidad', ['label' => 'Cantidad']); ?>
    <?= $this->Form->button ('Comprar', ['class' => 'bot btn btn-sm btn-info']) ?>
    <?= $this->Form->end () ?>
   
    <br />
  </div>
  </div>



             
               
             





