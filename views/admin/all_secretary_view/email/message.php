<style>    /*********** upload malti img ****/    .block {        background-color: rgba(255, 255, 255, 0.5);        margin: 0 auto;        margin-bottom: 30px;        text-align: center;        -webkit-border-radius: 4px;        -moz-border-radius: 4px;        border-radius: 4px;    }    label.button {        -webkit-border-radius: 4px;        -moz-border-radius: 4px;        border-radius: 4px;        background-color: #c72530;        border: 1px solid #eee;        color: #fff;        padding: 7px 15px;        margin: 5px 0;        display: inline-block;        -webkit-transition: all 200ms linear;        -moz-transition: all 200ms linear;        -ms-transition: all 200ms linear;        -o-transition: all 200ms linear;        transition: all 200ms linear;    }    label.button:hover {        color: #c72530;        background-color: #fff;        border: 1px solid #ccc;        cursor: pointer;        -webkit-transition: all 200ms linear;        -moz-transition: all 200ms linear;        -ms-transition: all 200ms linear;        -o-transition: all 200ms linear;        transition: all 200ms linear;    }    input#images {        display: none;    }    #multiple-file-preview {        border: 1px solid #eee;        margin-top: 10px;        padding: 10px;    }    #files1 {        border: 1px solid #eee;        margin-top: 10px;        padding: 10px;    }    #sortable {        list-style-type: none;        margin: 0;        padding: 0;        min-height: 110px;    }    #sortable li {        margin: 3px 3px 3px 0;        float: left;        width: 100px;        height: 104px;        text-align: center;        position: relative;        background-color: #FFFFFF;    }    #sortable li,    #sortable li img {        -webkit-border-radius: 4px;        -moz-border-radius: 4px;        border-radius: 4px;    }    #sortable img {        height: 104px;    }    .closebtn {        color: #c72530;        font-weight: bold;        position: absolute;        right: -1px;        border-radius: 4px;        padding: 0px 5px 0px 5px;        background-color: #fff;    }    .closebtn h6 {        font-size: 20px;        margin: 0;    }    .r-img-message h2 {        padding-top: 4px;    }    .r-img-message img {        width: 100%;        height: 75px;        border-radius: 5px;        margin-top: 20px;        margin-bottom: 20px;    }    .unread {        background: #c7c7c7;    }</style><div class="panel panel-bd lobidisable lobipanel lobipanel-sortable ">    <div class="panel-heading">        <h3 class="panel-title"><i class="fa fa-plus-square"></i> رسائل وارده </h3>    </div>    <div class="panel-body " style="background-color: #fff;">        <div id="details">            <div class="col-xs-12 col-sm-12 col-md-12 no-padding inbox-mail">                <div class="mailbox-content">                    <?php                    if (isset($my_email) && !empty($my_email)) {                    foreach ($my_email as $row) {                    if ($row->readed == 0) {                        $unread = 'unread';                    } else {                        $unread = '';                    }                    /*if ($_SESSION['role_id_fk'] == 1) {                        $x = $_SESSION['user_id'];                    } else {                        $x = $_SESSION['emp_code'];                    }                    if ($row->email_to_id == $x || $row->email_etlaa_id == $x || $row->email_motbaa_id == $x) {                    */?>                      <div class="panel panel-default">      <div class="panel-heading">                          <span  style="background-color: #006873 !important;"class="bg-green badge avatar-text">عنوان الرسالة</span>                            <span><span><?php echo $row->title ?></span></span>                              <div class="btn-group" role="group" aria-label="..."     style="float: left;margin-top: -63px;margin-left: 29px;">    <?php if ($row->readed == 0) {        ?>        <button type="button" class="btn btn-danger" style="margin-top: 61px;"                onclick='delete_message(<?= $row->id ?>)'>                <i class="fa fa-trash"></i> </button>    <?php } ?>    <?php if (isset($row->need_replay) && !empty($row->need_replay) && $row->need_replay == 1 && isset($row->type_sender) && !empty($row->type_sender) && $row->type_sender == 1) {        ?>        <a href="<?= base_url() . "all_secretary/email/Emails/reply_message/" . $row->id ?>"           class="btn btn-primary" style="margin-top: 61px;"                  ><i style="color: white;" class="fa fa-retweet" aria-hidden="true"></i> </a>    <?php } ?>    <?php if (isset($row->type_sender) && !empty($row->type_sender) && $row->type_sender == 1) {        ?>        <a href="<?= base_url() . "all_secretary/email/Emails/forward_message/" . $row->id ?>"           class="btn btn-info" style="margin-top: 61px;"                  ><i style="color: white;" class="fa fa-reply" aria-hidden="true"></i> </a>    <?php } ?></div>         </div>      <div class="panel-body">           <a onclick="get_my_emails('page_content','message_details',<?= $row->id ?>)"                       class="inbox_item <?= $unread ?>">                        <div class="inbox-avatar">                            <?php if (isset($row->employee_photo) && !empty($row->employee_photo)) { ?>                                <img src="<?php echo base_url() . 'uploads/human_resources/emp_photo/thumbs/' . $row->employee_photo ?>"                                     class="border-green hidden-xs hidden-sm" alt="">                            <?php } else { ?>                                <img src="<?php echo base_url() ?>/asisst/admin_asset/img/profile/avatar.png"                                     class="border-green hidden-xs hidden-sm" alt="">                            <?php } ?>                            <div class="inbox-avatar-text">                                <div class="avatar-name"><?= $row->email_from_n; ?></div>                                <div>                                    <span class="bg-green badge avatar-text"></span>                                     <span><span style="color: black !important;"><?= $row->content; ?></span></span>                                                                   </div>                            </div>                            <!--                            <div class="inbox-date hidden-sm hidden-xs hidden-md"                                 style="color: #44433e;">                                <div class="date"><?= $row->date_ar; ?></div>                            </div>-->                        </div>                    </a>                                                     <?php //}                                }                            }else{ ?>                    <div class="alert alert-danger" id="text111" style="display:none; color: #BD000A; display:block;">                        لا يوجد رسائل بريد ......                    </div>                    <?php                    } ?>                  </div>    </div>                                                                                                           </div>            </div>        </div>    </div></div><script>    function get_my_emails(div_id,method,id) {        $.ajax({            type: 'post',            url: "<?php echo base_url();?>all_secretary/email/Emails/"+method+'/'+id,            beforeSend: function () {                $('#'+div_id).html('<div class=\'loader-img\'><div class=\'bar1\'></div><div class=\'bar2\'></div><div class=\'bar3\'></div><div class=\'bar4\'></div><div class=\'bar5\'></div><div class=\'bar6\'></div></div>');            },            success: function (d) {                $('#'+div_id).html(d);                // $('.selectpicker').selectpicker("refresh");                // reset_file_input('file');            }        });    }    function get_details(id) {        $.ajax({            type: 'post',            url: '<?php echo base_url()?>all_secretary/email/Emails/get_details',            data: {id: id},            dataType: 'html',            cache: false,            success: function (html) {                $('#details').html(html);            }        });    }</script><script>    function delete_message(id) {        var r = confirm('هل انت متاكد من حذف الرساله؟');        if (r == true) {            $.ajax({                type: 'post',                url: '<?php echo base_url()?>all_secretary/email/Emails/delete_message',                data: {id: id},                dataType: 'html',                cache: false,                success: function (html) {                    get_details(id);                    swal({                        title: " تمت الحذف بنجاح ",                        type: "success",                        confirmButtonClass: "btn-warning",                        closeOnConfirm: false                    });                }            });        }    }</script>