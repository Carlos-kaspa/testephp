<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Filecatalog $filecatalog
 */

use function PHPSTORM_META\type;

?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Filecatalog'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="filecatalog form content">
            <?= $this->Form->create($filecatalog , ['type' => 'file']) ?>
            <fieldset>
                <legend><?= __('Adicione uma Foto ou Video') ?></legend>
                <?php
                    echo $this->Form->control('file_name', ['type' => 'file']);
                    echo $this->Form->control('file_desc');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
