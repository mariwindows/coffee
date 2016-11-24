<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Compras Controller
 *
 * @property \App\Model\Table\ComprasTable $Compras
 */
class ComprasController extends AppController
{

  public function isAuthorized($user)
  {
    if(isset($user['role']) and $user['role'] == 'user')
    {
      if(in_array($this->request->action, ['agregar', 'index']))
      {
        return true;
      }
    }
    return parent::isAuthorized($user);
  }




  public function index()
  {
        $this->paginate = [
            'conditions' => ['id_user' => $this->Auth->user('id')],
            'order' => ['id' => 'desc']
        ];


        $compras = $this->paginate($this->Compras->find()
      ->contain('Productos')
      ->contain('Users'));
      $this->set(compact('compras'));


        }



  public function indexAll()
  {
   

$compras = $this->paginate($this->Compras->find()
      ->contain('Productos')
      ->contain('Users'));
      $this->set(compact('compras'));
  }

  
   


	public function edit($id = null)
  {
    $compra = $this->Compras->get($id);
    //metodo patch es como un update no insert into - metodo get con los links 
    if($this->request->is(['patch', 'post', 'put']))
    {
      $compra = $this->Compras->patchEntity($compra, $this->request->data);
        if ($this->Compras->save($compra))
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
        $compra = $this->Compras->get($id);
        
        if ($this->Compras->delete($compra)) 
       {
            $this->Flash->success('El producto ha sido eliminado');
       } 
        else 
        {
            $this->Flash->error('El producto no pudo ser eliminado, por favor intente nuevamente');
        }
        return $this->redirect(['action' => 'index_all']);

    }



     public function view($id)
  {
    $compra = $this->Compras->get($id);
    $this->set('compra', $compra);
  }


  public function agregar($id = null)
  {
    
  $this->loadModel('Productos');
  $this->loadModel('Users');
  $compras = $this->Compras->newEntity();
  $user = $this->Auth->user('id');
  $producto = $this->Productos->get($id);
  
  $compras = $this->Compras->patchEntity($compras ,$this->request->data);
  $compras->id_user = $user;
  $compras->id_producto = $producto['id'];
//rodri
  //$compras->cantidad = 1;
  $this->request->data['cantidad'];
  $compras->precioCobrado = $producto['precio'];
  if ($this->Compras->save($compras)) 
  {
  $this->Flash->success('La compra se ha realizado con exito');
  return $this->redirect(['controller' => 'productos', 'action' => 'index']); 
  }
  else
  {
  $this->Flash->error('La compra no se ha podido realizar, por favor intente nuevamente');
  return $this->redirect(['controller' => 'productos', 'action' => 'index']); 
  }
}
}
