
<div class="row">
    <div class="col-md-12">
        <div class="hpanel">
            <div class="panel-body">
                <h2 class="font-light m-b-xs">
                    <?=h('Article-Types')?>
                </h2>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12 btn-group" >
                <?=$this->Html->link(BT_ADD,['action'=>'add'],['escape'=>false])?>
            </div>
        </div>
        <div class="hpanel">
            <div class="panel-body">
                
                <table id="datatable1" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th style="" class="">Name</th>
                           
                            <th class="">Created Date</th>
                            <th style="width: 100px;" class="text-center"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($articleTypes as $a): ?>
                        <tr>
                            <td class=""><?=h($a->name)?></td>
                        
                            <td class="hidden-xs"><?=h(date("d-m-Y H:m", strtotime($a->created)))?></td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <?= $this->Html->link(BT_EDIT, ['action' => 'edit', $a->id],['escape'=>false]) ?>
                                    <?= $this->Form->postLink(BT_DELETE, ['action' => 'delete', $a->id], ['confirm' => __('คุณต้องการลบ {0}?', $a->name),'escape'=>false]) ?>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>