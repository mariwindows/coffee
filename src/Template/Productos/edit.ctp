<div class="row">
    <div class="col-md-6 col-md-offset-3">
    <div class="page-header">
    <h2>Editar producto</h2>
    </div>
    <?= $this->Form->create($producto, ['novalidate']) ?>
    <fieldset>
    <?= $this->element('productos/fields') ?>
    </fieldset>
    <?= $this->Form->button('Editar') ?>
    <?= $this->Form->end() ?>
    </div>
</div>