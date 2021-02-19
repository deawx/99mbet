
<!-- include summernote css/js -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>

<div class="media">
    <div class="d-flex align-self-center">
        <h1 class="g-font-weight-300 g-font-size-28 g-color-black mb-0"><?= h($titleType) ?></h1>
    </div>

</div>
<hr class="d-flex g-brd-gray-light-v7 g-my-30">

<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-md-12 btn-group" >
                <?= $this->Html->link(BT_BACK, ['action' => 'index', $type], ['escape' => false]) ?>
            </div>
        </div>
        <div class="hpanel">

            <div class="panel-body">
                <?= $this->Form->create($article, ['enctype' => 'multipart/form-data']) ?>
                <?= $this->Form->hidden('article_type_id', ['id' => 'type']) ?>
                <div class="form-group">
                    <h4 class="h6 g-font-weight-600 g-color-black g-mb-20">รูปหน้าปก</h4>

                    <div class="input-group u-file-attach-v1 g-brd-gray-light-v2">
                        <input class="form-control form-control-md rounded-0" placeholder="เลือกรูปภาพ" readonly="" type="text" >

                        <div class="input-group-btn">
                            <button class="btn btn-md h-100 u-btn-primary rounded-0" type="submit">Browse</button>
                            <input type="file" name="upload_file" accept="image/x-png,image/gif,image/jpeg">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name">ชื่อหัวข้อ :</label>
                    <?= $this->Form->control('title', ['id' => 'title', 'class' => 'form-control', 'label' => false]) ?>
                </div>
                <div class="form-group">
                    <label for="name">รายละเอียดหัวข้อแบบสั้น :</label>
                    <?= $this->Form->control('subtitle', ['class' => 'form-control', 'label' => false]) ?>
                </div>


                <div class="form-group">

                    <?= $this->Form->input('content', ['class' => 'form-control', 'label' => false, 'id' => 'summernote']) ?>
                </div>
                <div class="form-group">

                    <?= $this->Form->button('บันทึก', ['class' => 'btn btn-primary', 'id' => 'ck']) ?>
                </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>



<script>

    $(document).ready(function () {
        $('#summernote').summernote({
            height: 400,
            focus: true
        });
    });

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

    $(document).on('ready', function () {


        // initialization of forms
        $.HSCore.helpers.HSFileAttachments.init();
        $.HSCore.components.HSFileAttachment.init('.js-file-attachment');
        //$.HSCore.helpers.HSFocusState.init();


    });

</script>