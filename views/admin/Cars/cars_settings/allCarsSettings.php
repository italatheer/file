

<style>
    .panel-body {
        padding: 15px;
    }
    .tab-content .panel-body {
        background: #fff;
        border: 1px solid gray;
        border-radius: 2px;
        padding: 20px;
        position: relative;
    }
    .tabs-left>li.active>a, .tabs-left>li.active>a:hover, .tabs-left>li.active>a:focus {
        border-bottom-color: #009688;
        border-right-color: #009688;
        background-color: #009688;
        color: #fff;
    }
    .nav>li>a:hover, .nav>li>a:focus {
        text-decoration: none;
        background-color: #eee;
        color: #0f0f0f;
    }
    .tabs-left>li.active>a, .tabs-left>li.active>a:hover, .tabs-left>li.active>a:focus {
        border-bottom-color: #009688;
        border-right-color: #009688;
        background-color: #009688;
        color: #fff;
    }
    ul.nav-tabs.holiday-month {
        border: 1px solid gray;
        height: 400px;
        overflow: scroll;
    }
    .nav-tabs>li>a:hover {
        border-color: #eee #eee #ddd;
    }
    ul.nav-tabs.holiday-month>li>a {
        color: #222;
        font-weight: 600;
        padding: 5px 5px;
        font-size: 13px;
    }
</style>

<!--<link rel="stylesheet" href="--><?php //echo base_url()?><!--asisst/admin_asset/css/stylecrm.css" />-->

<!-- Main content -->


        <div class="col-sm-12 no-padding">
           
                    <div class="col-sm-4 padding-4">
                        <ul class="nav nav-tabs tabs-left holiday-month" style="    border: 1px solid gray;">
                            <?php if (isset($this->myarray) && !empty($this->myarray) && $this->myarray !=null){
                                $x = 0;
                                foreach ($this->myarray as $key=>$value){

                                    ?>

                                    <?php if(isset($typee) && !empty($typee) && $typee) {
                                        $active ="";
                                        if($typee == $key ){
                                            $active = 'active';
                                            $value = $value;
                                        }
                                    }?>
                                    <li class="<?php  if(isset($typee) && !empty($typee) && $typee)
                                    {echo $active; }else {echo ($x == 0)? 'active':''; } ?>"
                                        style="float: right; width: 50%;">
                                        <a  <?php if(isset($disabled)){}else{echo 'href="#tab'.$key.'"';} ?>
                                            data-toggle="tab"  > <i class="fa fa-cog" aria-hidden="true"></i>  <?=$value['title']?>
                                        </a></li>



                                    <?php $x++; } } ?>

                          

                            <!-------------Osama 8-9---------------->
                        </ul>
                    </div>
                    <!-- Tab panels -->
                    <div class="tab-content col-sm-8 padding-4">
                        <!----------- بداية الاعدادات الاساسية ------------------------->
                        <?php if (isset($this->myarray) && !empty($this->myarray) && $this->myarray !=null){
                            $x = 0;
                            foreach ($this->myarray as $key=>$value){?>
                                <?php if(isset($typee) && !empty($typee) && $typee) {
                                    $active ="";
                                    if($typee == $key ){
                                        $active = 'active';
                                        $value = $value;
                                    }
                                }?>
                                <div class="tab-pane fade in <?php if(isset($typee) && !empty($typee))
                                {echo $active; }else {echo ($x == 0)? 'active':''; }  ?>" id="tab<?= $key ?>">
                                    <div class="panel-body">



                                        <a href="#" class="btn btn-add btndate" data-toggle="modal" data-target="#addholiday"
                                           style="margin-bottom: 6px;"> <strong><i class="fa fa-cog"
                                                                                   aria-hidden="true"></i> <?=$value['title']?></strong></a>

                                        <div class="table-responsive">



                                            <?php
                                            if(isset($record) && !empty($record) && $record!=null){
                                                echo form_open_multipart('Cars/cars_settings/Cars_settings/UpdateSitting/'.$id.'/'. $key);
                                            }
                                            else{
                                                echo form_open_multipart('Cars/cars_settings/Cars_settings/AddSitting/'. $key);
                                            }

                                            ?>
                                            <div class="col-sm-12 col-xs-12 no-padding">
                                                <?php if($key == 4){ ?>
                                                    <div class="form-group col-sm-6 col-xs-12 padding-4">
                                                        <label class="label ">الماركة</label>
                                                        <select  name="marka_id" id="marka_id"   class="form-control  selectpicker "  data-show-subtext="true" data-live-search="true"   data-validation="required" aria-required="true" >
                                                            <option value="">إختر الماركة </option>
                                                            <?php  if(!empty($marka) && isset($marka)){ ?>
                                                                <?php foreach ($marka as $mark){
                                                                    $select=''; if(!empty($record)){ if($record['marka_id'] == $mark->id_setting){$select='selected';} }
                                                                    ?>
                                                                    <option value="<?php echo $mark->id_setting; ?>"<?= $select?> <?php ?>><?php echo $mark->title_setting; ?> </option>
                                                                <?php }?>
                                                            <?php }else{ ?>
                                                                <option value="">لايوجد ماركات مضافه </option>
                                                            <?php }?>
                                                        </select>

                                                    </div>
                                                <?php } ?>
                                                <div class="form-group col-sm-4 col-xs-12 padding-4">
                                                    <label class="label "> الإسم</label>
                                                    <input type="text" name="title_setting"
                                                           value="<?php if(isset($record)) echo $record['title_setting'] ?>"
                                                           class="form-control " autofocus data-validation="required">


                                                    <input type="hidden" name="type_name" value=""/>
                                                </div>
                                                
                                                <!------------------------------------------------------------->
                                                
                                                <?php if($key == 1){ ?>
                                                    <div class="form-group col-sm-4 col-xs-12 padding-4">
                                                        <label class="label "> رقم الهاتف</label>
                                                        <input type="text" name="tele" onkeypress="validate_number(event)"
                                                               value="<?php if(isset($record)) echo $record['tele'] ?>"
                                                               class="form-control " autofocus data-validation="required">
                                                    </div>
                                                    <div class="form-group col-sm-4 col-xs-12 padding-4">
                                                        <label class="label "> العنوان</label>
                                                        <input type="text" name="address"
                                                               value="<?php if(isset($record)) echo $record['address'] ?>"
                                                               class="form-control " autofocus data-validation="required">
                                                    </div>
                                                <?php } ?>
                                                                                              
                                                
                                                
                                                
                                                
                                                <!--------------------------------------->
                                            </div>
                                            <div class="form-group col-sm-12 col-xs-12 text-center">
                                                <button type="submit" name="add" value="حفظ" class="btn btn-success btn-labeled"><span class="btn-label">
                                                    <i class="fa fa-floppy-o" aria-hidden="true"></i></span> حفظ </button>
                                            </div>
                                            </form>
                                            <?php if (isset($all) && !empty($all) && $all !=null){ ?>
                                                <table class="table table-bordered table-striped table-hover">
                                                    <thead>
                                                    <tr class="info">
                                                        <th>م</th>
                                                        <th>الإسم</th>
                                                        <?php if($key == 4){ ?>
                                                            <th>الماركة</th>
                                                        <?php } ?>
                                                        <th>الإجراء</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    $x = 1;
                                                    if (isset($all[$key]) && !empty($all[$key]) && $all[$key] !=null){
                                                        foreach ($all[$key] as $value) {

                                                            ?>
                                                            <tr>
                                                                <td><?=($x++)?></td>

                                                                <td><?=$value->title_setting?></td>
                                                                <?php if($key == 4){ ?>
                                                                    <td><?=$value->marka_name['title_setting']?></td>
                                                                <?php } ?>
                                                                <td>
                                                                    <a href="<?php echo base_url().'Cars/cars_settings/Cars_settings/UpdateSitting/'.$value->id_setting."/".$key  ?>" title="تعديل">
                                                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a>
                                                                    <span> </span>
                                                                    <a href="<?=base_url()."Cars/cars_settings/Cars_settings/DeleteSitting/".$value->id_setting."/".$key?>" onclick="return confirm('هل انت متأكد من عملية الحذف ؟');">
                                                                        <i class="fa fa-trash" aria-hidden="true"></i></a>
                                                                </td>
                                                            </tr>
                                                        <?php } }else{
                                                        echo '<tr>
                                                    <td colspan="3"> لايوجد بيانات </td>
                                                    </tr>';
                                                    } ?>
                                                    </tbody>
                                                </table>
                                            <?php } ?>

                                        </div>
                                    </div>
                                </div>

                                <?php  $x++; } } ?>

                        <!----------- نهاية الاعدادات الاساسية ------------------------->








                    </div>
              
         
        </div>




<script>
    function validate_number(evt) {
        var theEvent = evt || window.event;
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode( key );
        var regex = /[0-9]|\./;
        if( !regex.test(key) ) {
            theEvent.returnValue = false;
            if(theEvent.preventDefault) theEvent.preventDefault();
        }
    }
</script>



