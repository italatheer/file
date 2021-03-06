<div class="col-xs-12  ">
    <div class="panel panel-bd lobidisable lobipanel lobipanel-sortable ">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo $title; ?></h3>
        </div>
        <div class="panel-body">
            <?php
            if ((isset($desc)) && (!empty($desc))) {
                echo form_open_multipart(base_url() . 'public_relations/website/setting_service/Setting_service/desc_cat_service_setting_uptate/' . base64_encode($desc->id));
                $cat_name = $desc->cat_name;
                $cat_id_fk = $desc->cat_id_fk;
                $ser_id_fk = $desc->ser_id_fk;
                $name_ser = $desc->name_ser;
                $description = $desc->description;
                $option='<option selected value="'.$cat_id_fk .'"> '.$cat_name .'</option>';

            } else {
                $cat_name = '';
                $cat_id_fk = 0;
                $ser_id_fk = 0;
                $name_ser = '';
                $description = '';
                echo form_open_multipart(base_url() . 'public_relations/website/setting_service/Setting_service/desc_service_setting');
            } ?>
            <!--            --><?php //echo form_open_multipart(base_url() . 'family_controllers/Setting/desc_service_setting') ?>
            <div class="col-md-12 col-xs-12">
                <div class="form-group col-sm-4 col-xs-12 padding-4">
                    <label>نوع الخدمة </label>
                    <select type="text" class="form-control " name="service" onchange="getf2at(this);"
                            data-validation="required">
                        <option>- إختر -</option>
                        <?php foreach ($service as $cat) { ?>
                            <option value="<?= $cat->id ?>"
                                <?php if ($ser_id_fk == $cat->id) echo 'selected'; ?>
                            ><?= $cat->name_ser ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group col-sm-4 col-xs-12 padding-4">
                    <label> الفئات </label>
                    <select type="text" class="form-control " name="cat_ser" id="cat_ser" data-validation="required">
                        <?php if((isset($option))){echo $option ;}else {?>
                        <option>- إختر -</option>
<?php }?>
                    </select>
                </div>
                <div class="form-group col-sm-4 col-xs-12 padding-4">

                    <label>وصف الخدمة </label>
                    <input type="text" class="form-control " name="description_ser"
                           value=" <?=$description?>" data-validation="required">

                </div>
            </div>

            <div class="col-md-12">
                <button type="submit" class="btn btn-success" value="1" name="save">حفظ</button>
            </div>
            <?php echo form_close() ?>


        </div>
    </div>
</div>
<?php if ((isset($desc_service)) && (!empty($desc_service))) { ?>
    <div class="col-xs-12  ">
        <div class="panel panel-bd lobidisable lobipanel lobipanel-sortable ">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo $title; ?></h3>
            </div>
            <div class="panel-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>م</th>
                        <th>نوع الخدمة</th>
                        <th>فئة الخدمة</th>
                        <th>وصف الفئة</th>
                        <th>الإجراء</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($desc_service as $key => $item) { ?>
                        <tr>
                            <td><?= ++$key ?></td>
                            <td><?= $item->name_ser ?></td>
                            <td><?= $item->cat_name ?></td>
                            <td><?= $item->description ?></td>
                            <td>
                                <a href="<?= base_url() . 'public_relations/website/setting_service/Setting_service/desc_cat_service_setting_uptate/' . base64_encode($item->id) ?>"><i
                                            class="fa fa-pencil"></i></a>
                                <a href="#" onclick="confirm_delete('<?=base64_encode($item->id)?>');"><i
                                            class="fa fa-trash"></i></a>

                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php } ?>
<script>
    function confirm_delete(id){

        if(confirm('هل متأكد من خذف ؟!!')){
            window.location='<?= base_url() . 'public_relations/website/setting_service/Setting_service/desc_cat_service_setting_delete/'  ?>'+id;
        }

    }

    function getf2at(obj) {
        console.log('value select ' + obj.value);
        var select_to_append = document.getElementById('cat_ser');
        var request = $.ajax({
            url: "<?php echo base_url() . 'public_relations/website/setting_service/Setting_service/getf2at_service'?>",
            type: "POST",
            data: {service_id: obj.value},
        });
        request.done(function (msg) {
            remove_options(select_to_append);
            if (msg === 'false') {
                console.log(" if json " + msg);
                select_to_append.options[select_to_append.options.length] = new Option('لا يوجد فئات لهذه الخدمة', '');

            } else {
                // console.log(" else json " + msg);
                var obj = JSON.parse(msg);
                for (var i = 0; i < obj.length; i++) {
                    var row = obj[i];
                    console.log('row[' + i + ']' + row.id);
                    select_to_append.options[select_to_append.options.length] = new Option(row.cat_name, row.id);
                }
            }
        });
        request.fail(function (jqXHR, textStatus) {
            console.log("Request failed: " + textStatus);
        });
    }

    function remove_options(select_obj) {
        select_obj.options.length = 0;

    }
</script>