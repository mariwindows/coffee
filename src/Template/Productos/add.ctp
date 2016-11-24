

<div class="row">
    <div class="col-md-6 col-md-offset-3">
    <div class="page-header">
    <h2>Cargar nuevo producto</h2>
    </div>
    <?= $this->Form->create($producto, ['novalidate', 'type' => 'file']) ?>
    <fieldset>
        <?php
    echo $this->Form->input('nombre', ['label' => 'Nombre']);
    echo $this->Form->input('precio', ['label' => 'Precio de lista']);
    echo $this->Html->script('ckeditor/ckeditor');
    echo $this->Form->input('descripcion', array(
            'class' => 'ckeditor'
));

    echo $this->Form->create($producto, ['type' => 'file']); 
    
    echo $this->Form->input('prod_img', ['type' => 'file', 'id' => 'foto', 'class' => 'file', 'data-show-upload' =>'false', 'data-show-caption' => 'true']); 
 

    ?>
    </fieldset>
    <?= $this->Form->button('Cargar') ?>
    <?= $this->Form->end() ?>
    </div>
</div>