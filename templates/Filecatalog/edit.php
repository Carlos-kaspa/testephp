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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $filecatalog->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $filecatalog->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Filecatalog'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="filecatalog form content">
            <?= $this->Form->create($filecatalog) ?>
            <fieldset>
                <legend><?= __('Edit Filecatalog') ?></legend>
                <?php
                    echo $this->Form->control('file_name');
                    echo $this->Form->control('file_desc');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
