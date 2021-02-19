
<?= $this->Html->script('tinymce/tinymce.min.js') ?>
<script>
    tinymce.init({
        selector: 'textarea',
        height: 600,
        theme: 'modern',
        menubar: true,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table contextmenu paste code textcolor'
        ],
        toolbar: 'undo redo | insert | styleselect | forecolor backcolor | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        content_css: [
            '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
            '//www.tinymce.com/css/codepen.min.css'
        ]
    });
</script>
<div class="row">
    <div class="col-md-12">
        <div class="hpanel">
            <div class="panel-body">
                <h2 class="font-light m-b-xs">
                    Add ArticleTypes
                </h2>


            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-md-12 btn-group" >
                <?=$this->Html->link(BT_BACK,['action'=>'lists'],['escape'=>false])?>
            </div>
        </div>
        <div class="hpanel">
            
            <div class="panel-body">
               
                <?= $this->Form->create($articleType,['id'=>'frm','novalidate' => true,'enctype' => 'multipart/form-data']) ?>
                <div class="form-group">
                    <label for="example-nf-email">Name <?= REQ_FIELD ?></label>
                    <?= $this->Form->input('name', ['class' => 'form-control', 'label' => false]); ?>
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