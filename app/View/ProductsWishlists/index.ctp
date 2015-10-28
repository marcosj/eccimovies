<div class="productsWishlists index">
	<h2><?php echo __('Products Wishlists'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('wishlist_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('product_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($productsWishlists as $productsWishlist): ?>
	<tr>
		<td><?php echo h($productsWishlist['ProductsWishlist']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($productsWishlist['Wishlist']['user_id'], array('controller' => 'wishlists', 'action' => 'view', $productsWishlist['Wishlist']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($productsWishlist['User']['username'], array('controller' => 'users', 'action' => 'view', $productsWishlist['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($productsWishlist['Product']['name'], array('controller' => 'products', 'action' => 'view', $productsWishlist['Product']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $productsWishlist['ProductsWishlist']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $productsWishlist['ProductsWishlist']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $productsWishlist['ProductsWishlist']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $productsWishlist['ProductsWishlist']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Products Wishlist'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Wishlists'), array('controller' => 'wishlists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wishlist'), array('controller' => 'wishlists', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
