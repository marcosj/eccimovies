<div class="productsWishlists view">
<h2><?php echo __('Products Wishlist'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($productsWishlist['ProductsWishlist']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Wishlist'); ?></dt>
		<dd>
			<?php echo $this->Html->link($productsWishlist['Wishlist']['user_id'], array('controller' => 'wishlists', 'action' => 'view', $productsWishlist['Wishlist']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($productsWishlist['User']['username'], array('controller' => 'users', 'action' => 'view', $productsWishlist['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($productsWishlist['Product']['name'], array('controller' => 'products', 'action' => 'view', $productsWishlist['Product']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Products Wishlist'), array('action' => 'edit', $productsWishlist['ProductsWishlist']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Products Wishlist'), array('action' => 'delete', $productsWishlist['ProductsWishlist']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $productsWishlist['ProductsWishlist']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Products Wishlists'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Products Wishlist'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Wishlists'), array('controller' => 'wishlists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wishlist'), array('controller' => 'wishlists', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
