<div class="actorsProducts view">
<h2><?php echo __('Actors Product'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($actorsProduct['ActorsProduct']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Actor'); ?></dt>
		<dd>
			<?php echo $this->Html->link($actorsProduct['Actor']['full_name'], array('controller' => 'actors', 'action' => 'view', $actorsProduct['Actor']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($actorsProduct['Product']['name'], array('controller' => 'products', 'action' => 'view', $actorsProduct['Product']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Actors Product'), array('action' => 'edit', $actorsProduct['ActorsProduct']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Actors Product'), array('action' => 'delete', $actorsProduct['ActorsProduct']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $actorsProduct['ActorsProduct']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Actors Products'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actors Product'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actors'), array('controller' => 'actors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actor'), array('controller' => 'actors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
