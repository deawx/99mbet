<div class="row">
    <div class="col-md-12">
        <div class="hpanel">
            <div class="panel-body">
                <h2 class="font-light m-b-xs">
                    <?='Edit '.h($title)?>
                </h2>


            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="row">
            <div class="col-md-12 btn-group" >
                <?=$this->Html->link(BT_BACK,['action'=>'index','type'=>$type],['escape'=>false])?>
            </div>
        </div>
        <div class="hpanel">
            
            <div class="panel-body">
               
                <?= $this->Form->create($content,['id'=>'frm','novalidate' => true,'enctype' => 'multipart/form-data']) ?>
                <div class="form-group">
                    <label for="">Name <?= REQ_FIELD ?></label>
                    <?= $this->Form->input('name', ['class' => 'form-control', 'label' => false]); ?>
                </div>
                <div class="form-group">
                    <label for="">Seq <?= REQ_FIELD ?></label>
                    <?= $this->Form->input('seq', ['class' => 'form-control', 'label' => false]); ?>
                </div>
                <div class="form-group">
                    <label for="">Url <?= REQ_FIELD ?></label>
                    <?= $this->Form->input('url', ['class' => 'form-control', 'label' => false]); ?>
                </div>
                <div class="form-group">
                    <?php if (isset($assetType->pic)) { ?>
                        <?= $this->Html->image('upload/' . $assetType->pic, ['class' => '', 'width' => '250px']) ?>
                    <?php } else { ?>
                        <?= $this->Html->image('block/default.jpg', ['class' => '', 'width' => '230px']) ?>
                    <?php } ?>
                    <input type="file" name="upload_file" id="">
                </div>
                <div class="form-group m-b-0">
                    <?= $this->Form->button('SAVE', ['class' => 'btn w-xs btn-success']) ?>
                </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>


<script>

    $(function () {


        $("#frm").validate({
            rules: {
                name: {
                    required: true
                },
                url: {
                    required: true
                }
            },
            messages: {
                seq: {
                    required: ""
                }

            },
            submitHandler: function (form) {
                form.submit();
            }
        });
    });
</script>