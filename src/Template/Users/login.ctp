<?= $this->Html->css('login') ?>
<body>
  <div class="container-fluid bg-1 text-center">
    
  

<div class="container">

<div class="row" style="margin-top:50px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<?= $this->Flash->render('auth') ?>
        <?= $this->Form->create() ?>
			<fieldset>
				<h2 class="home">Bienvenido a The Little Coffee</h2>
				
				<div class="formu form-group">
                    
                    <?= $this->Form->input('email', ['class'=> 'form-control input-lg', 'placeholder' => 'Correo electronico: mesa1@cafeteria.com', 'label' => false, 'required']) ?>
				</div>
				<div class="form-group">
                   <?= $this->Form->input('password', ['class'=> 'form-control input-lg', 'placeholder' => 'Password: secret', 'label' => false, 'required']) ?> 
				</div>
                

				
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
                          <?= $this->Form->button('ingresar', ['class'=> 'bot btn btn-lg btn-success btn-block']) ?>
					</div>
					
			</fieldset>
		<?= $this->form->end() ?>
	</div>
</div>

</div>

</div>
</body>