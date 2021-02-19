<div class="media">
    <div class="d-flex align-self-center">
        <h1 class="g-font-weight-300 g-font-size-28 g-color-black mb-0"><?= h($titleType) ?></h1>
    </div>

    <div class="media-body align-self-center text-right">
        <?= $this->Html->link('เพิ่มใหม่', ['action' => 'add',$type], ['escape' => false, 'class' => 'btn btn-xl u-btn-lightblue-v3 g-width-160--md g-font-size-default g-ml-10']) ?>
    </div>
</div>
<hr class="d-flex g-brd-gray-light-v7 g-my-30">


<div class="row">
    <div class="col-md-12">

        <div class="media d-md-flex align-items-center ml-auto g-pa-20">
            <div class="d-flex align-items-center">
                <span class="g-hidden-sm-down g-color-gray-dark-v6 g-mr-12">Show:</span>

                <div class="u-select--v1 g-pr-20">
                    <select id="datatableEntries1" class="js-select u-select--v1-select w-100">
                        <option data-content='<span class="d-flex align-items-center g-line-height-1_2 g-color-black">5 Entries</span>' value="5">5 Entries</option>
                        <option data-content='<span class="d-flex align-items-center g-line-height-1_2 g-color-black">10 Entries</span>' value="10">10 Entries</option>
                        <option data-content='<span class="d-flex align-items-center g-line-height-1_2 g-color-black">15 Entries</span>' value="15">15 Entries</option>
                        <option data-content='<span class="d-flex align-items-center g-line-height-1_2 g-color-black">20 Entries</span>' value="20">20 Entries</option>
                        <option data-content='<span class="d-flex align-items-center g-line-height-1_2 g-color-black">25 Entries</span>' value="25">25 Entries</option>
                    </select>
                    <i class="hs-admin-angle-down g-absolute-centered--y g-right-0 g-color-gray-light-v6"></i>
                </div>
            </div>

            <div class="d-flex g-ml-15 g-ml-55--md">
                <div class="input-group g-pos-rel g-width-320--md">
                    <input id="datatableSearch1" class="form-control g-font-size-default g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-rounded-20 g-pl-20 g-pr-50 g-py-10" type="text" placeholder="Search for name, position">
                    <button class="btn g-pos-abs g-top-0 g-right-0 g-z-index-2 g-width-60 h-100 g-bg-transparent g-font-size-16 g-color-lightred-v2 g-color-lightblue-v3--hover rounded-0" type="submit">
                        <i class="hs-admin-search g-absolute-centered"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="js-datatable table u-table--v3 u-editable-table--v1 g-color-black" data-dt-info="#datatableInfo1" data-dt-search="#datatableSearch1" data-dt-entries="#datatableEntries1" data-dt-pagination="datatablePagination1" data-dt-page-length="5" data-dt-is-responsive="false"
                   data-dt-pagination-classes="list-inline text-right mb-0" data-dt-pagination-items-classes="list-inline-item g-hidden-sm-down" data-dt-pagination-links-classes="u-pagination-v1__item u-pagination-v1-2 g-bg-lightblue-v3--active g-color-white--active g-brd-gray-light-v7 g-brd-lightblue-v3--hover g-brd-lightblue-v3--active g-rounded-4 g-py-8 g-px-15"
                   data-dt-pagination-next-classes="list-inline-item" data-dt-pagination-next-link-classes="u-pagination-v1__item u-pagination-v1-2 g-brd-gray-light-v7 g-brd-lightblue-v3--hover g-rounded-4 g-py-8 g-px-12" data-dt-pagination-next-link-markup='<span class="g-line-height-1 g-valign-middle" aria-hidden="true"><i class="hs-admin-angle-right"></i></span><span class="sr-only">Next</span>'
                   data-dt-pagination-prev-classes="list-inline-item" data-dt-pagination-prev-link-classes="u-pagination-v1__item u-pagination-v1-2 g-brd-gray-light-v7 g-brd-lightblue-v3--hover g-rounded-4 g-py-8 g-px-12" data-dt-pagination-prev-link-markup='<span class="g-line-height-1 g-valign-middle" aria-hidden="true"><i class="hs-admin-angle-left"></i></span><span class="sr-only">Prev</span>'>
                <thead>
                    <tr>
                        <th>
                            <div class="media">
                                <div class="d-flex">#</div>


                            </div>
                        </th>
                        <th>
                            <div class="media">
                                <div class="d-flex align-self-center">หัวข้อ</div>

                            </div>
                        </th>
                        <th>
                            <div class="media">
                                <div class="d-flex align-self-center">วันที่เพิ่ม</div>


                            </div>
                        </th>
                        <th>
                            <div class="media">
                                <div class="d-flex align-self-center">วันที่แก้ไข</div>


                            </div>
                        </th>

                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <?php if(sizeof($articles)==0){?>
                    <tr>
                        <td colspan="5">
                            ไม่มีข้อมูล
                        </td>
                    </tr>
                    <?php } ?>
                    <?php $count = 1;?>
                    <?php foreach ($articles as $article): ?>
                        <tr>
                            <td class="" width="70"><?=h($count)?></td>
                            <td class=""><?= h($article->title) ?></td>
                            <td class="hidden-xs" width="200"><?= h(date("d-m-Y H:m", strtotime($article->created))) ?></td>
                             <td class="hidden-xs" width="200"><?= h(date("d-m-Y H:m", strtotime($article->created))) ?></td>
                            <td class="text-center" width="100">
                                <div class="btn-group">
                                    <?= $this->Html->link(BT_EDIT, ['action' => 'edit', $article->id], ['escape' => false]) ?>
                                    <?= $this->Form->postLink(BT_DELETE, ['action' => 'delete', $article->id], ['confirm' => __('คุณต้องการลบ {0}?', $article->name), 'escape' => false]) ?>
                                </div>
                            </td>
                        </tr>
                        <?php $count++;?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>