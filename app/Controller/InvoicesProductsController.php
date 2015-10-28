<?php
App::uses('AppController', 'Controller');
/**
 * InvoicesProducts Controller
 *
 * @property InvoicesProduct $InvoicesProduct
 * @property PaginatorComponent $Paginator
 */
class InvoicesProductsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->InvoicesProduct->recursive = 0;
		$this->set('invoicesProducts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->InvoicesProduct->exists($id)) {
			throw new NotFoundException(__('Invalid invoices product'));
		}
		$options = array('conditions' => array('InvoicesProduct.' . $this->InvoicesProduct->primaryKey => $id));
		$this->set('invoicesProduct', $this->InvoicesProduct->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->InvoicesProduct->create();
			if ($this->InvoicesProduct->save($this->request->data)) {
				$this->Flash->success(__('The invoices product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The invoices product could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->InvoicesProduct->exists($id)) {
			throw new NotFoundException(__('Invalid invoices product'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->InvoicesProduct->save($this->request->data)) {
				$this->Flash->success(__('The invoices product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The invoices product could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('InvoicesProduct.' . $this->InvoicesProduct->primaryKey => $id));
			$this->request->data = $this->InvoicesProduct->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->InvoicesProduct->id = $id;
		if (!$this->InvoicesProduct->exists()) {
			throw new NotFoundException(__('Invalid invoices product'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->InvoicesProduct->delete()) {
			$this->Flash->success(__('The invoices product has been deleted.'));
		} else {
			$this->Flash->error(__('The invoices product could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
