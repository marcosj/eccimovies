<div class="invoicesProducts view">
<h2><?php echo __('Invoices Product'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($invoicesProduct['InvoicesProduct']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Invoice'); ?></dt>
		<dd>
			<?php echo $this->Html->link($invoicesProduct['Invoice']['payment_method_id'], array('controller' => 'invoices', 'action' => 'view', $invoicesProduct['Invoice']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($invoicesProduct['Product']['name'], array('controller' => 'products', 'action' => 'view', $invoicesProduct['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantity'); ?></dt>
		<dd>
			<?php echo h($invoicesProduct['InvoicesProduct']['quantity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($invoicesProduct['InvoicesProduct']['price']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Invoices Product'), array('action' => 'edit', $invoicesProduct['InvoicesProduct']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Invoices Product'), array('action' => 'delete', $invoicesProduct['InvoicesProduct']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $invoicesProduct['InvoicesProduct']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoices Products'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoices Product'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('controller' => 'invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
