<?php

    echo $this->Form->input('nombre', ['label' => 'Nombre']);
    echo $this->Html->script('ckeditor/ckeditor');
    echo $this->Form->input('descripcion', array(
            'class' => 'ckeditor'
));
   
 
    echo $this->Form->input('precio', ['decimal' => 'Precio']);
    echo $this->Form->input('prod_img', ['type' => 'file', 'id' => 'foto', 'class' => 'file', 'data-show-upload' =>'false', 'data-show-caption' => 'true', 'label' => 'Foto del producto']); 
 

?>