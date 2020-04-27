<h1>User Page</h1>
<?php echo $this->Html->link(
    'Posts', array('controller'=>'posts','action'=>'index')
);?> || 
<?php echo $this->Html->link(
    'Add User', array('controller'=>'users','action'=>'add')
);?> || 
<?php echo $this->Html->link(
    'Logout', array('controller'=>'users','action'=>'logout')
);?>
<table>
    <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Role</th>
        <th>Action</th>

    </tr>
    <?php foreach ($users as $user) :?>
    <tr>
        <td><?= $user['User']['id']; ?></td>
        <td><?= $user['User']['username'] ?></td>
        <td><?= $user['User']['role'] ?></td>
        <td><?= $this->Form->postLink('Delete', array('action'=>'delete', $user['User']['id']),array('confirm' => 'Are you sure?')); ?> <?= $this->Html->link('Edit', array('action'=>'edit', $user['User']['id'])); ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($user); ?>
</table>