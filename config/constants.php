<?php 

/*Client db*/
define('DB_NAME', 'mbet_main');
define('DB_USER', 'mbet_main');
define('DB_PASS', 'x7Tazi2zS');


define('DEFAULT_USER', '0');
/*Html code*/
define('REQ_FIELD','<i class="text-danger">*</i>');

/***********
Document code
**************/
define('ORDER_SALES', 'ODS');
define('ORDER_PURCHASE', 'ODP');
define('INVOICE_SALES', 'IVS');
define('INVOICE_PURCHASE', 'IVP');
define('PAYMENT_IN', 'AR');
define('PAYMENT_OUT', 'AP');
define('SAVING_DEPOSIT', 'SVD');
define('SAVING_WITHDRAW', 'SVW');



/***********BUTTON*********/
define('BT_ADD', '<button type="button" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-plus-circle-multiple-outline"></i> เพิ่ม</button>');
define('BT_BACK', '<button type="button" class="btn btn-md u-btn-outline-black g-mr-10 g-mb-15"><i class="ti-arrow-left"></i> กลับ</button>');
define('BT_EDIT', '<button class="btn btn-sm"><span class="hs-admin-pencil"></span></button>');
define('BT_VIEW', '<button class="btn btn-sm btn-sm"><span class="fa fa-eye"></span></button>');
define('BT_DELETE', '<button type="button" class="btn btn-sm"><i class="hs-admin-trash"></i></button>');
define('BT_ADDUSER', '<button type="button" class="btn btn-info btn-block"><i class="ti-plus"></i> เพิ่มผู้ใช้</button>');
define('BT_SAVE', '<button type="submit" id="subm" class="btn btn-primary waves-effect">บันทึก</button>');
define('BT_RESET', '<button type="reset" class="btn btn-secondary waves-effect">ล้างข้อมูล</button>');
define('PAGE_LIMIT', 20);
define('REQUIRE_FIELD', '<i class="text-danger"> * </i>');

define('ACTIVE', '<span class="badge badge-success">เปิดใช้งานอยู่</span>');
define('INACTIVE', '<span class="badge badge-warning">ปิดการใช้งาน</span>');
define('YES', '<span class="badge badge-success">ใช่</span>');
define('NO', '<span class="badge badge-warning">ไม่</span>');


define('SITE_URL','https://www.99mbet.com/');


define('DATE_TIME_FORMATE', 'dd/MM/yyyy HH:mm');
define('DATE_FORMATE', 'dd/MM/yyyy');
define('TH_DATE', 'en-IR@calendar=buddhist');