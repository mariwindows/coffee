<nav class='navbar navbar-inverse nav-users'>
    <div class="container">
        <div class="navbar navbar-header">
            <button type="buttton" class="navbar-toggle collapsed" data-target="#bs-example-navbar-collapse-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?= $this->Html->link('THE LITTLE COFFEE', ['controller' => 'Productos', 'action' => 'index'], ['class' => 'navbar-brand']) ?>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
            <?php if(isset($current_user)): ?>
            
            <ul class="nav navbar-nav">
            <?php if($current_user['role'] == 'admin'): ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Productos <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <?= $this->Html->link('Lista de productos', ['controller' => 'Productos', 'action' => 'index'] )?>
                        </li>
                        <li>
                             <?= $this->Html->link('Crear producto', ['controller' => 'Productos', 'action' => 'add'] )?>
                        </li>
                         <li>
                    <?= $this->Html->link('Pedidos realizados', ['controller' => 'Compras', 'action' => 'indexAll']) ?>
                </li>
                    </ul>
                </li>
         
                   <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Mesas <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <?= $this->Html->link('Lista de mesas', ['controller' => 'Users', 'action' => 'index'] )?>
                        </li>
                        <li>
                             <?= $this->Html->link('Crear nueva mesa', ['controller' => 'Users', 'action' => 'add'] )?>
                        </li>
                    </ul>
                </li>
            <?php endif; ?>
             <?php if($current_user['role'] == 'user'): ?>


                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Productos <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <?= $this->Html->link('Realizar pedido', ['controller' => 'Productos', 'action' => 'index'] )?>
                        </li>
                        <li>
                    <?= $this->Html->link('Lista de pedido', ['controller' => 'Compras', 'action' => 'index']) ?>
                </li>
                    </ul>
                </li>
            <?php endif; ?>
              
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li> 
                    <?= $this->Html->link('Salir', ['controller' => 'Users', 'action' => 'logout'])?>
                </li>
       
       
        
        <?php endif; ?>
            
        </div>
    </div>
</nav>