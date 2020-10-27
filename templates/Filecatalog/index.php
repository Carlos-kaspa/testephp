<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Filecatalog[]|\Cake\Collection\CollectionInterface $filecatalog
 */
    $this->Html->css('posts',['block' => true]);
?>



<div class="postMural">
    <?php
        $this->fetch('css');

        $db = mysqli_connect("localhost", "root", "", "testephpdb");
        $sql = "SELECT * FROM filecatalog";
        $result = mysqli_query( $db , $sql );
        while ($row = mysqli_fetch_array($result)) {

            $file_name = $row['file_name'];

            $file_ext = explode(".", $file_name);
            $file_ext = end($file_ext);

            

                if($file_ext == "mp4"){

                    echo "<div id='media_div'>";
                    echo "<video controls><source src='/testephp/webroot/MEDIA/".$row['file_name']."' type='video/mp4'></video> ";
                    echo "<p> ".$row['file_desc']. "</p>";
                    echo "</div>";

                }else{

                echo "<div id='media_div'>";
                echo "<img src='/testephp/webroot/MEDIA/".$row['file_name']."' >";
                echo "<p> ".$row['file_desc']. "</p>";
                echo "</div>";
                }

                
        }


    ?>
</div>

<div class="filecatalog index content">
    <?= $this->Html->link(__('New Filecatalog'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Filecatalog') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('file_name') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($filecatalog as $filecatalog): ?>
                <tr>
                    <td><?= $this->Number->format($filecatalog->id) ?></td>
                    <td><?= h($filecatalog->file_name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $filecatalog->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $filecatalog->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $filecatalog->id], ['confirm' => __('Are you sure you want to delete # {0}?', $filecatalog->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
