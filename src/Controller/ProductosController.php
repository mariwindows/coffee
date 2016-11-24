<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Productos Controller
 *
 * @property \App\Model\Table\ProductosTable $Productos
 */
class ProductosController extends AppController
{

  public function isAuthorized($user)
  {
    if(isset($user['role']) and $user['role'] == 'user')
    {
      if(in_array($this->request->action, ['index', 'view']))
      {
        return true;
      }
    }
    return parent::isAuthorized($user);
  }

  
  public function index()
  {
    $productos = $this->paginate($this->Productos);
    $this->set('productos', $productos);
  }








  public function add()
  {
    $producto = $this->Productos->newEntity();

    if($this->request->is('post'))
    {
      $producto = $this->Productos->patchEntity($producto, $this->request->data);

      if($this->Productos->save($producto))

      {
        $this->Flash->success('El producto ha sido creado');
        return $this->redirect(['controller' => 'Productos', 'action' => 'index']);
      }
      else
      {
        $this->Flash->error('el producto no pudo ser cargado');
      }
  }
  $this->set(compact('producto'));
}



public function edit($id = null)
  {
    $producto = $this->Productos->get($id);
    //metodo patch es como un update no insert into - metodo get con los links 
    if($this->request->is(['patch', 'post', 'put']))
    {
      $producto = $this->Productos->patchEntity($producto, $this->request->data);
        if ($this->Productos->save($producto))
        {
         $this->Flash->success('El producto ha sido modificado');
         return $this->redirect(['action' => 'index']); 
        }
        else
        {
          $this->Flash->error('El producto no ha sido modificado, inténtelo nuevamente');
        }
    }
    //metodo set le pasa datos a la vista
    $this->set(compact('producto'));
  }




   public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $producto = $this->Productos->get($id);
        
        if ($this->Productos->delete($producto)) 
        {
            $this->Flash->success('El producto ha sido eliminado');
        } 
        else 
        {
            $this->Flash->error('El producto no pudo ser eliminado, por favor intente nuevamente');
        }
        return $this->redirect(['action' => 'index']);
    }



     public function view($id)
  {
    $producto = $this->Productos->get($id);
    $this->set('producto', $producto);
  }
}