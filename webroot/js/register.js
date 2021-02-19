$.fn.Register = function () {
    $regisUrl = 'https://cors-anywhere.herokuapp.com/http://bd.sboclub99.com/api/account/register';
    console.log('calling register.');

    makeForm();

    $('#bt_save_register_form').on('click', function () {
        if ($("#register_form").valid()) {
            $('#page-load').show();
            $('#page-load-label').text('กำลังบันทึก');
            var strXml = makeXml();
            console.log(strXml);
            $.ajax({
                type: "POST",
                url: $regisUrl,
                contentType: 'text/plain',
                data: strXml,
                success: function (response) {
                    console.log('done');
                    console.log(response);
                    var xmlDoc = $.parseXML(response);
                    var $xml = $(xmlDoc);
                    var errdesc = $xml.find('properties[name="errdesc"]').text();
                    
                    $('#page-load-label').text('');
                    $('#page-load').hide();
                    if(errdesc ===''){
                        var str = '<div class="alert alert-success text-center alert-dismissible fade show" role="alert">';
                        str = str+'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>';
                        str = str+'<h4 class="h5"><i class="fa fa-check-circle-o"></i>เราได้รับข้อมูลแล้ว!</h4>';
                        str = str+'ยืนยันเราอีกครั้งผ่าน <a href="http://line.me/ti/p/%40mld5011i" target="_blank">Line</a> ได้เลยค่ะ<br/>';
                        str = str+'<image src="http://sboclub99.com/img/line_qrcode.png" width="150px"/>';
                        str = str+'</div>';
                        $('#register_form').hide();
                        $('#msg_state').empty();
                        $('#msg_state').append(str);
                    }else{
                        
                        $('#msg_state').empty();
                        $('#msg_state').append('<div class="alert alert-danger" role="alert">'+errdesc+'</div>');
                    }
                },
                error: function (response) {
                    console.log(response);
                    $('#page-load-label').text('');
                    $('#page-load').hide();
                }
            });
        }

    });

    function makeXml() {
        var datas = $('#register_form').serializeArray();
        console.log(datas);
        var text = '';
        text = text + '<?xml version="1.0" encoding="utf-8"?>';
        text = text + '<request action="register">';
        text = text + '<element uuid="L200509210001">';
        $.each(datas, function (index, value) {
            text = text + '<properties name="' + value['name'] + '">' + value['value'] + '</properties>';
        });

        text = text + '</element>';
        text = text + '</request>';

        return text;

    }

    function makeForm() {
        $box = $('#box_register_form');
        $box.append('<div id="msg_state"></div>');
        //Form
        $box.append('<form id="register_form" name="register_form" class="g-pa-10 g-bg-white"><div class="form-row" id="box_form"></div></form>');
        $regisFrm = $('#box_form');

        $regisFrm.append(getInput('name', 'ชื่อ<b class="text-danger">*</b>', 'true'));
        $regisFrm.append(getInput('tel', 'โทร<b class="text-danger">*</b>', 'true'));
        $regisFrm.append(getInput('line', 'Line ID', 'false'));
        $regisFrm.append(getInput('email', 'อีเมล์', 'false'));
        $regisFrm.append(getDropdown('bankid', 'ธนาคาร<b class="text-danger">*</b>', 'true'));
        $regisFrm.append(getInput('bankname', 'ชื่อบัญชี<b class="text-danger">*</b>', 'true'));
        $regisFrm.append(getInput('bankaccount', 'หมายเลขบัญชี<b class="text-danger">*</b>', 'true'));
        $regisFrm.append(getDropdown('apiplay', 'เกมส์<b class="text-danger">*</b>', 'false'));
        $regisFrm.append(getDropdown('knowway', 'ท่านรู้จักเราจากทางใด?<b class="text-danger">*</b>', 'true'));
        $regisFrm.append(getInput('knowwayremark', 'ระบุ', 'false'));
        

        $regisFrm.append('<button type="button" id="bt_save_register_form" class="btn btn-block btn-lg u-btn-primary g-mr-10 g-mb-15">สมัคร</button>');

        //Make bank
        var banks = [
            {"value": "1", "th_name": "ธนาคารกรุงเทพ"},
            {"value": "2", "th_name": "ธนาคารกรุงไทย"},
            {"value": "3", "th_name": "ธนาคารกรุงศรีอยุธยา"},
            {"value": "4", "th_name": "ธนาคารกสิกรไทย"},
            {"value": "5", "th_name": "ธนาคารออมสิน"},
            {"value": "6", "th_name": "ธนาคารซีไอเอ็มบีไทย"},
            {"value": "7", "th_name": "ธนาคารทหารไทย"},
            {"value": "8", "th_name": "ธนาคารทิสโก้"},
            {"value": "9", "th_name": "ธนาคารไทยพาณิชย์"},
            {"value": "10", "th_name": "ธนาคารธนชาต"},
            {"value": "11", "th_name": "ธนาคารยูโอบี"},
            {"value": "12", "th_name": "ธนาคารแลนด์ แอนด์ เฮ้าส์"},
            {"value": "13", "th_name": "ธนาคารสแตนดาร์ดชาร์เตอร์ด"},
            {"value": "14", "th_name": "ธนาคารไอซีบีซี (ไทย)"},
            {"value": "15", "th_name": "ธนาคารอิสลามแห่งประเทศไทย"},
            {"value": "16", "th_name": "ธนาคารเกียรตินาคิน"}
        ];
        $bankEle = $('#bankid');
        $.each(banks, function (index, value) {
            $bankEle.append('<option value="' + value.value + '">' + value.th_name + '</option>');
        });

        //Make AKA
        var knows = [
            {"value": "เพื่อนแนะนำ", "th_name": "เพื่อนแนะนำ(ระบุ User ที่แนะนำ)"},
            {"value": "Facebook", "th_name": "Facebook(ระบุเพจ)"},
            {"value": "แบนเนอร์โฆษณา", "th_name": "แบนเนอร์โฆษณา(ระบุเว็บ)"},
            {"value": "Google", "th_name": "Google(ระบุคำที่ใช้ค้นหา)"},
            {"value": "ผ่านหน้าเว็บ", "th_name": "ผ่านหน้าเว็บ(ระบุลิ้งค์)"},
            {"value": "อื่นๆ", "th_name": "อื่นๆ(โปรดระบุ)"}
        ];
        $knowEle = $('#knowway');
        $.each(knows, function (index, value) {
            $knowEle.append('<option value="' + value.value + '">' + value.th_name + '</option>');
        });

        //Make games
        var apiplays = [
            {"value": "2", "th_name": "SBOBET"},
            {"value": "10", "th_name": "123BET"},
            {"value": "8", "th_name": "LTC164"},
            {"value": "9", "th_name": "SUPERLOT999"}
        ];
        $apiplayEle = $('#apiplay');
        $.each(apiplays, function (index, value) {
            $apiplayEle.append('<option value="' + value.value + '">' + value.th_name + '</option>');
        });
    }

    function getInput(name, label, require) {
        var strRequire = '';
        if (require === 'true') {
            strRequire = 'required="true"';
        }
        var text = '<div class="form-group col-md-6">';
        text = text+'<label for="'+name+'">'+label+'</label>';
        text = text+'<input type="text" class="form-control form-control-md" id="' + name + '" name="' + name + '" ' + strRequire + '>';
        text = text+'</div>';
        return text;
    }

    function getDropdown(name, label, require) {
        var strRequire = '';
        if (require === 'true') {
            strRequire = 'required="true"';
        }
        var text = '<div class="form-group col-md-6">';
        text = text+'<label for="'+name+'">'+label+'</label>';
        text = text + '<select class="form-control form-control-lg" id="' + name + '" name="' + name + '" ' + strRequire + '></select>';
        text = text+'</div>';

        return text;
    }


};


var Validation = function () {
    return {
        initValidation: function () {
            $("#register_form").validate({
                rules:
                        {
                            name:
                                    {
                                        required: true
                                    },
                            tel: {
                                required: true
                            },
                            lineid: {
                                required: true
                            },
                            bankid: {
                                required: true
                            },
                            bankname: {
                                required: true
                            },
                            bankaccount: {
                                required: true
                            },
                            knowway: {
                                required: true
                            }

                        },
                messages:
                        {
                            seller:
                                    {
                                        required: ''
                                    },
                            warehouse_id:
                                    {
                                        required: ''
                                    }

                        },

                // Do not change code below
                errorPlacement: function (error, element)
                {
                    error.insertAfter(element);
                }
            });
        }

    };
}();