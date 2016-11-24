<div class="container text-center">
  
 
<div class="row">
    <div class="listaC col-md-6">
        <div class="page-header">
            <h2>Compras</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Producto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Mesa') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Precio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Cantidad') ?></th>
                <th>Acciones</th>
                </tr>
            </thead>
                
            <tbody>
                <?php foreach ($compras as $compra): ?>
              

                <tr>
                <td><?= $this->Number->format($compra->id) ?></td>
                <td><?= $compra->producto->nombre ?></td>
                <td><?= $compra->user->first_name . ' ' . $compra->user->last_name?></td>
                <td><?= $this->Number->format($compra->precioCobrado) ?></td>
                <td><?= $this->Number->format($compra->cantidad) ?></td>
                <td>
                    
                    <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $compra->id], ['confirm' =>'Desea eliminar el producto?', 'class' => 'btn btn-sm btn-danger']) ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
            </table>
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
</div>