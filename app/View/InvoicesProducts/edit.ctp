<div class="invoicesProducts form">
<?php echo $this->Form->create('InvoicesProduct'); ?>
	<fieldset>
		<legend><?php echo __('Edit Invoices Product'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('invoice_id');
		echo $this->Form->input('product_id');
		echo $this->Form->input('quantity');
		echo $this->Form->input('price');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('InvoicesProduct.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('InvoicesProduct.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Invoices Products'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('controller' => 'invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
