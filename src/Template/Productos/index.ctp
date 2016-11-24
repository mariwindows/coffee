<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h2>Productos</h2>
        </div>
        <div class="table-responsive">
           
                            
     
                <?php foreach ($productos as $producto): ?>

                <div class="prodMuestra col-sm-4">

                    <img class="img-circle person" src="<?php echo '../'.$producto->dir . $producto->prod_img; ?>" height="255" width="255"/>
                     <br><br>
                    <p>Producto: <?= $this->Number->format($producto->id) ?></p>
                    <p class="des"><strong><?= h($producto->nombre) ?></strong></p>
                    <p>Valor: <?= h($producto->precio) ?></p>
                    
                    <div class="boton">
                    <?php if($current_user['role'] == 'user'): ?>
                    <?= $this->Html->link('Ver', ['controller' => 'Productos' ,'action' => 'view', $producto->id], ['class' => 'btn btn-sm btn-info']) ?>
        
                    <?php else: ?>
                    <?= $this->Html->link('Ver', ['action' => 'view', $producto->id], ['class' => 'btn btn-sm btn-info']) ?>
                    <?= $this->Html->link('Editar', ['action' => 'edit', $producto->id], ['class' => 'btn btn-sm btn-primary']) ?>
                    <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $producto->id], ['confirm' =>'Desea eliminar el producto?', 'class' => 'btn btn-sm btn-danger']) ?>
        <?php endif; ?>
        </div>

                </div>
               
                <?php endforeach; ?>
             

        </div>
        
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->prev('< Anterior') ?>
                <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
                <?= $this->Paginator->next('Siguiente >') ?>
            </ul>
            <p><?= $this->Paginator->counter() ?></p>
        </div>
    </div>


  </div>