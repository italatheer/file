
    <div class="col-xs-12 no-padding">
        <div class="panel panel-bd lobidisable lobipanel lobipanel-sortable ">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo $title ?> </h3> 
            </div>
            <div class="panel-body">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#details"  data-toggle="tab"><i class="fa fa-plus  fa-2x" style="display: block;text-align: center"></i> اضافه مراكز التكلفه</a></li>
                    <li><a href="#morfqat" data-toggle="tab"><i class="fa  fa-reply-all  fa-2x" style="display:block;text-align: center"></i> ربط الحساب بمراكز التكلفه  </a></li>
                </ul>
                <!-- Tab panels -->
                <div class="tab-content">
                <div class="tab-pane fade in active" id="details">
                <div class="col-xs-12 no-padding"> 
                
                <div class="col-md-3 col-sm-3 col-xs-6">
                <label class="label">مركز التكلفه</label>
                <input type="text" class="form-control"    name="name" id="name" />
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                <label class="label"> اللون</label>
                <input type="color" class="form-control"   name="color" id="color" />
                </div>


            <div class="col-md-3 col-sm-3 col-xs-6" style="    margin-top: 26px;">
            <div  id="div_add_markz" style="display: block;">

                <button type="button"  onclick="add_markz()" class="btn btn-labeled btn-success " name="save" value="save">
                    <span class="btn-label"><i class="glyphicon glyphicon-floppy-disk"></i></span>حفظ
                </button>


                </div>
                <div  id="div_update_markz" style="display: none;">

                <button type="button" class="btn btn-labeled btn-yellow " name="save" value="save" id="update_markz">
                    <span class="btn-label"><i class="fa fa-search-plus"></i></span> تعديل 
                </button>

        
    </div>    

    </div>
    </div>
    <div class="col-xs-12 text-center" style="margin-top: 15px;">






    </div>






    <div id="my_markz">
    <br>
    <br>
    <?php
    //  echo '<pre>'; print_r($reasons_settings);
        
        if (!empty($marakez)) { ?>
            <table id="example8" class=" example table table-bordered table-striped" role="table">
                <thead>
                <tr class="greentd">
                <th class="text-center"> م</th>
                    <th class="text-center"> مركز التكلفه</th>
                
                
                    <th class="text-center">الإجراء</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $x = 1;
                foreach ($marakez as $value) {
                    ?>
                    <tr>
                    
                        <td><?= $x ?></td>
                        <td style="background-color:<?= $value->color ?>"><?= $value->name ?></td>
                    
                    

                    
                        <td>
                    
                        <a href="#" onclick="delete_markz(<?= $value->id ?>);"> <i class="fa fa-trash"> </i></a>

                        <a href="#" onclick="update_markz(<?= $value->id ?>);"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

            
                        


                        </td>
                    </tr>
                    <?php
            $x++; }
                ?>
                </tbody>
            </table>


        <?php } ?>

    </div>



                    </div>
                    <div class="tab-pane fade " id="morfqat">
                    <div class="col-xs-12 no-padding">
                    <div class="col-md-3 col-sm-3 col-xs-6">
                            <label class="label ">  مركز التكلفه</label>
                            <select  id="markez"  data-validation="required" 
                                    class="form-control">
                                <option value="">إختر</option>
                                <?php
                            
                                foreach ($marakez as $key) {
                                    $select = '';
                                    ?>
                                    <option
                                            value="<?php echo $key->id; ?>" <?= $select ?>> <?php echo $key->name; ?></option>
                                    <?php
                                }
                                ?>
                            
                            </select>
                    </div>

                    <div class="col-sm-3  col-md-2 padding-4  form-group">
                                            <label class="label ">رقم الحساب </label>
                                            <input type="text" class="form-control  " name="rkm_hesab"
                                                id="account_num" data-validation="required" aria-required="true"
                                                readonly="readonly"
                                                ondblclick="$('#myModal').modal('show');" style="width: 78%;float: right;"
                                                style="cursor:pointer;" autocomplete="off"
                                                
                                                
                                                    value="">

                                                <button type="button"
                                        onclick="$('#myModal').modal('show');"
                                        class="btn btn-success btn-next" >
                                    <i class="fa fa-plus"></i></button>
                                        </div>
                                        <div class="col-sm-4  col-md-4 padding-4  form-group">
                                            <label class="label ">إسم الحساب </label>
                                            <input type="text" class="form-control " name="hesab_name" 
                                                id="account" data-validation="required"
                                                aria-required="true" readonly="" value=""
                                                style="width: 100% !important;">
                    </div>


                        

                            <div class="col-md-3 col-sm-3 col-xs-6" style="    margin-top: 26px;">
                            <div  id="div_add_hesab" style="display: block;">
                        
                            <button type="button" 
                                onclick="add_hesab()"
                            class="btn btn-labeled btn-success " name="save" value="save">
                                <span class="btn-label"><i class="glyphicon glyphicon-floppy-disk"></i></span>حفظ
                            </button>
                        
                            </div>
                            <div  id="div_update_hesab" style="display: none;">
                        
                            <button type="button" class="btn btn-labeled btn-yellow " name="save" value="save" id="update_hesab">
                                <span class="btn-label"><i class="fa fa-search-plus"></i></span> تعديل 
                            </button>
                        
                            
                            </div>    

                            </div>
                            </div>
                            <div class="col-xs-12 text-center" style="margin-top: 15px;">






                            </div>






                            <div id="my_hesab">
                            <br>
                            <br>
    <?php

        
        if (!empty($hesabs)) { ?>
            <table id="example8" class=" example table table-bordered table-striped" role="table">
                <thead>
                <tr class="greentd">
                <th class="text-center"> م</th>
                    <th class="text-center"> مركز التكلفه</th>
                    <th class="text-center"> رقم الحساب</th>
                    <th class="text-center"> اسم الحساب</th>
                    <th class="text-center">الإجراء</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $x = 1;
                foreach ($hesabs as $value) {
                    ?>
                    <tr>
                    
                        <td><?= $x ?></td>
                        <td  style="background-color:<?php if(isset($value->markez)&&!empty($value->markez)){ echo $value->markez->color;} ?>"><?php if(isset($value->markez)&&!empty($value->markez)){ echo $value->markez->name;}	 ?></td>
                        <td><?= $value->rkm_hesab	 ?></td>
                        <td><?= $value->hesab_name	 ?></td>

                    
                        <td>
                    
                        <a href="#" onclick="delete_hesab(<?= $value->id ?>);"> <i class="fa fa-trash"> </i></a>

                        <a href="#" onclick="update_hesab(<?= $value->id ?>);"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

            
                        


                        </td>
                    </tr>
                    <?php
            $x++; }
                ?>
                </tbody>
            </table>


        <?php } ?>

    </div>


    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document" style="width: 70%">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">الدليل المحاسبي </h4>
                </div>
                <div class="modal-body">
                    <?php //if(!empty($tree)) {

                    ?>
                    <table id="" class="table table-bordered example" role="table">
                        <thead>
                        <tr class="info">
                            <th style="font-size: 15px; width:88px !important; ">م</th>
                            <th style="font-size: 15px;" class="text-left">رقم الحساب</th>
                            <th style="font-size: 15px;" class="text-left">إسم الحساب</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if (isset($tree) && $tree != null) {
                            buildTreeTable($tree);
                        }
                        function buildTreeTable($tree, $count = 1)
                        {
                            $types = array(1 => 'رئيسي', 2 => 'فرعي');
                            $nature = array('', 'مدين', 'دائن');
                            $follow = array(1 => 'ميزانية', 2 => 'قائمة الأنشطة');
                            //   $colorArray = array(1=>'#FFB61E', 2=>'#3c990b', 3=>'#5b69bc', 4=>'#E5343D', 5=>'#d9edf7');
                            $colorArray = array(1 => '#ec9732', 2 => '#c07852', 3 => '#75bf67', 4 => '#b6ab2d', 5 => '#09b6bb', 6 => '#3088d8', 7 => '#4d92a7', 8 => '#ef6c02', 9 => '#a69fb9', 10 => '#67351b', 11 => '#b6ea47', 12 => '#e18091', 13 => '#f5f44d', 14 => '#a63daa', 15 => '#fb1f73', 16 => '#9b9a92', 17 => '#8f0e0b', 18 => '#397631', 19 => '#074183', 20 => '#cab11e');


                            foreach ($tree as $record) {
                                $onclick = "alert('ليس حساب فرعي');";
                                if ($record->hesab_no3 == 2) {
                                    $onclick = "$('#account_num').val(" . $record->code . "); $('#account').val('" . $record->name . "'); $('#myModal').modal('hide');";
                                }
                                ?>
                                <tr style="background-color: <?= $colorArray[$record->level] ?>; cursor: pointer;"
                                    onclick="<?= $onclick ?>">
                                    <td class="forTd"><?= $count++ ?></td>
                                    <td class="forTd"><?= $record->code ?></td>
                                    <td class="forTd"><?= $record->name ?></td>
                                </tr>
                                <?php
                                if (isset($record->subs)) {
                                    $count = buildTreeTable($record->subs, $count++);
                                }
                            }
                            return $count;
                        }

                        ?>
                        </tbody>
                    </table>
                    <?php // } ?>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">إغلاق</button>
                </div>
            </div>
        </div>
    </div>








                    </div>
                </div>

            </div>
        </div>
    </div>







    <script>
        function add_markz()
        {
        var name=$('#name').val()
        var color=$('#color').val();
        
    
    

        if(name !='')
    {
            $.ajax({
                type:'post',
                url:"<?php echo base_url();?>finance_accounting/markz_tklfa/Markz_tklfaa/add_markz",
                type: "POST",
                data:{name:name,color:color},
                success:function(d){
                
                    $('#name').val(' ');
            

                
                    swal({
        title: " تمت الاضافه بنجاح ",
        type: "success",
        confirmButtonClass: "btn-warning",
        closeOnConfirm: false
    });
    get_details_markz();
                }

            });
        } else{

        //   $('#result').html('برجاء اختيار الموظف');
            swal({
        title: " برجاء ادخال  مركز التكلفه! ",
        type: "warning",
        confirmButtonClass: "btn-warning",
        closeOnConfirm: false
    });



            }
        }
    </script>
    <script>
        function get_details_markz() {
        // $('#pop_rkm').text(rkm);
            $.ajax({
                type: 'post',
                
            
                url: "<?php echo base_url();?>finance_accounting/markz_tklfa/Markz_tklfaa/load_markz",
                
                beforeSend: function () {
                    $('#my_markz').html('<div class=\'loader-img\'><div class=\'bar1\'></div><div class=\'bar2\'></div><div class=\'bar3\'></div><div class=\'bar4\'></div><div class=\'bar5\'></div><div class=\'bar6\'></div></div>');
                },
                success: function (d) {
                    $('#my_markz').html(d);

                }

            });
        }
    </script>


    <script>
        function update_markz(id) {
            var id = id;
            $('#my_markz').show();
            $('#div_add_markz').hide();
            $('#div_update_markz').show();


            $.ajax({
                url: "<?php echo base_url() ?>finance_accounting/markz_tklfa/Markz_tklfaa/getById_markz",
                type: "Post",
                dataType: "html",
                data: {id: id},
                success: function (data) {

                    var obj = JSON.parse(data);
                    console.log(obj);
            

                    //$('#travel_type').val(obj.title_setting);


                    
                    $('#name').val(obj.name);

    $('#color').val(obj.color);
    








                }

            });

            $('#update_markz').on('click', function () {
                var name=$('#name').val();
        var color=$('#color').val();
            

        $.ajax({
                type:'post',
                url:"<?php echo base_url();?>finance_accounting/markz_tklfa/Markz_tklfaa/update_markz",
                type: "POST",
                data:{id:id,name:name,color:color},
                success:function(d){
                $('#name').val('');
                $('#color').val('');
                
                    swal({
        title: " تمت التعديل بنجاح ",
        type: "success",
        confirmButtonClass: "btn-warning",
        closeOnConfirm: false
    });
    get_details_markz();

    $('#div_add_markz').show();
            $('#div_update_markz').hide();
                }

            });

            });

        }

    
    </script>
    <script>
    
        
    function delete_markz(id) {
    
        var r = confirm('هل تريد حذف المعامله؟');
    if (r == true) {
        $.ajax({
            type: 'post',
            url: '<?php echo base_url() ?>finance_accounting/markz_tklfa/Markz_tklfaa/delete_markz',
            data: {id: id},
            dataType: 'html',
            cache: false,
            success: function (html) {
            
                
                swal({
                    title: "تم الحذف بنجاح!",


    }
    );
    get_details_markz();

            }
        });
    }

    }
    </script>

    <!-- hesab -->
    <script>
        function add_hesab()
        {

        var markez=$('#markez').val();
        var account_num=$('#account_num').val();
        var account=$('#account').val();
    
    
        if(markez !='' && account_num !=''  && account !='' )
    {
            $.ajax({
                type:'post',
                url:"<?php echo base_url();?>finance_accounting/markz_tklfa/Markz_tklfaa/add_hesab",
                type: "POST",
                data:{markez:markez,account_num:account_num,account:account},
                success:function(d){
                
                    $('#markez').val(' ');
                    $('#account_num').val(' ');
                    $('#account').val(' ');
            

                
                    swal({
        title: " تمت الاضافه بنجاح ",
        type: "success",
        confirmButtonClass: "btn-warning",
        closeOnConfirm: false
    });
    get_details_hesab();
                }

            });
        } else{

        //   $('#result').html('برجاء اختيار الموظف');
            swal({
        title: " برجاء ادخال  البيانات! ",
        type: "warning",
        confirmButtonClass: "btn-warning",
        closeOnConfirm: false
    });



            }
        }
    </script>
    <script>
        function get_details_hesab() {
        // $('#pop_rkm').text(rkm);
            $.ajax({
                type: 'post',
            
                url: "<?php echo base_url();?>finance_accounting/markz_tklfa/Markz_tklfaa/load_hesab",
                
                beforeSend: function () {
                    $('#my_hesab').html('<div class=\'loader-img\'><div class=\'bar1\'></div><div class=\'bar2\'></div><div class=\'bar3\'></div><div class=\'bar4\'></div><div class=\'bar5\'></div><div class=\'bar6\'></div></div>');
                },
                success: function (d) {
                    $('#my_hesab').html(d);

                }

            });
        }
    </script>


    <script>
        function update_hesab(id) {
            var id = id;
            $('#my_hesab').show();
            $('#div_add_hesab').hide();
            $('#div_update_hesab').show();


            $.ajax({
                url: "<?php echo base_url() ?>finance_accounting/markz_tklfa/Markz_tklfaa/getById_hesab",
                type: "Post",
                dataType: "html",
                data: {id: id},
                success: function (data) {

                    var obj = JSON.parse(data);
                    console.log(obj);
            

                    //$('#travel_type').val(obj.title_setting);

                
                    
                    $('#markez').val(obj.markz_id_fk);
                    $('#account_num').val(obj.rkm_hesab);
                    $('#account').val(obj.hesab_name);

    
    








                }

            });

            $('#update_hesab').on('click', function () {
                var markez=$('#markez').val();
        var account_num=$('#account_num').val();
        var account=$('#account').val();  


        $.ajax({
                type:'post',
                url:"<?php echo base_url();?>finance_accounting/markz_tklfa/Markz_tklfaa/update_hesab",
                type: "POST",
                data:{id:id,markez:markez,account_num:account_num,account:account},
                success:function(d){
                    $('#markez').val(' ');
                    $('#account_num').val(' ');
                    $('#account').val(' ');
                
                    swal({
        title: " تمت التعديل بنجاح ",
        type: "success",
        confirmButtonClass: "btn-warning",
        closeOnConfirm: false
    });
    get_details_hesab();

    $('#div_add_hesab').show();
            $('#div_update_hesab').hide();
                }

            });

            });

        }

    
    </script>
    <script>
    
        
    function delete_hesab(id) {

        var r = confirm('هل تريد حذف المعامله؟');
    if (r == true) {
        $.ajax({
            type: 'post',
            url: '<?php echo base_url() ?>finance_accounting/markz_tklfa/Markz_tklfaa/delete_hesab',
            data: {id: id},
            dataType: 'html',
            cache: false,
            success: function (html) {
            
                
                swal({
                    title: "تم الحذف بنجاح!",


    }
    );
    get_details_hesab();

            }
        });
    }

    }
    </script>