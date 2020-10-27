<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Filecatalog $filecatalog
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Filecatalog'), ['action' => 'edit', $filecatalog->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Filecatalog'), ['action' => 'delete', $filecatalog->id], ['confirm' => __('Are you sure you want to delete # {0}?', $filecatalog->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Filecatalog'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Filecatalog'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="filecatalog view content">
            <h3><?= h($filecatalog->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('File Name') ?></th>
                    <td><?= h($filecatalog->file_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($filecatalog->id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('File Desc') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($filecatalog->file_desc)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
