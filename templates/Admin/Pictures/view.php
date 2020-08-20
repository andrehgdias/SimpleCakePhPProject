<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Picture $picture
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Picture'), ['action' => 'edit', $picture->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Picture'), ['action' => 'delete', $picture->id], ['confirm' => __('Are you sure you want to delete # {0}?', $picture->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Pictures'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Picture'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pictures view content">
            <h3><?= h($picture->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Image') ?></th>
                    <td><?= h($picture->image) ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $picture->has('user') ? $this->Html->link($picture->user->name, ['controller' => 'Users', 'action' => 'view', $picture->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($picture->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($picture->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($picture->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
