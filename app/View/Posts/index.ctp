<h1>Blog Post</h1>
<?php echo $this->Html->link(
    'Add Post', array('controller'=>'posts','action'=>'add')
);?>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Action</th>
        <th>Created</th>
    </tr>
    <?php foreach ($posts as $post) :?>
    <tr>
        <td><?= $post['Post']['id']; ?></td>
        <td><?= $this->Html->link($post['Post']['title'], array('controller' => 'posts','action'=>'view', $post['Post']['id'])); ?></td>
        <td><?= $this->Form->postLink('Delete', array('action'=>'delete', $post['Post']['id']),array('confirm' => 'Are you sure?')); ?> <?= $this->Html->link('Edit', array('action'=>'edit', $post['Post']['id'])); ?></td>
        <td><?= $post['Post']['created']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($post); ?>
</table>