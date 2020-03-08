<input type="hidden" id="current_from_id" value="<?php
echo $row->current_to_id;
?>">
<input type="hidden" id="current_from_user_name" value="<?php echo $row->current_to_user_name;?>">
<input type="hidden" id="last_from_id" value="0">
<input type="hidden" id="last_to_id" value=0">
<input type="hidden" id="last_from_user_name" value="0">
<input type="hidden" id="last_to_user_name" value="0">
<input type="hidden" id="last_procedure" value="0">
<input type="hidden" id="last_procedure_title" value="0">
<input type="hidden" id="level" value="<?php echo $row->level;?>">
<input type="hidden" id="ezn_id" value="<?php echo $row->id;?>">
<input type="hidden" id="ezn_rkm" value="<?php echo $row->ezn_rkm;?>">
<input type="hidden" id="message_accept" value="<?php echo $mess->msg_accept;?>">
<input type="hidden" id="message_refuse" value="<?php echo $mess->msg_refuse;?>">
<?php $manager=$row->direct_manager ;?>

<?php

if($level==1){?>
    <div class="col-md-12">
        <?php
        if($row->no3_ezn==1)
        {
            $ezn="استئذان شخصي";
        }else if($row->no3_ezn==2){
            $ezn="استئذان للعمل";
        }else{
            $ezn="غير محدد";
        } ?>
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th colspan="3" class="info">نوع الاستئذان:<?=$ezn ?></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>الموظف:-<?php echo $row->emp  ;?></td>
                    <td>الاداره :<?php echo $row->adminstration  ;?></td>
                    <td>القسم:<?php echo $row->departs  ;?></td>

                </tr>
                <tr>
                    <td>تاريخ الاذن:- <?php echo $row->ezn_date_ar  ;?></td>
                    <td> الفتره:-<?php echo $row->from_hour  ;?> </td>
                    <td>وقت البدايه:- <?php echo $row->from_hour  ;?> </td>


                </tr>
                <td> وقت النهايه:- <?php echo $row->from_hour  ;?> </td>
                <td>  المده: <?php echo $row->total_hours .'ساعات'  ;?> </td>
                </tr>
                <tr>
                    <td colspan="3">السبب:-<?php echo $row->reason;?></td>
                </tr>

                </tbody>

            </table>
        </div>
        <div class="col-md-12">
            <div class="col-md-2">  <input type="radio" value="1" checked onchange="" name="radi" class="form-control decision"> موافق </div>

            <div class="col-md-2">  <input type="radio" value="2" onchange=""  name="radi"  class="form-control decision"> غير موافق </div>
        </div>
        <div class="col-md-12 accept">

            <div class="col-md-8">

                <div class="col-md-12">
                    <label class="label top-label">الاداره </label>
                    <select name="gender" onchange="get_emps($(this).val())" id="edara"
                            data-validation="required"   class="form-control bottom-input"
                            aria-required="true">
                        <option value="">إختر</option>
                        <?php
                        if(isset($admin)&&!empty($admin)) {
                            foreach($admin as $row){
                                ?>
                                <option value="<?php echo $row->id;?>"> <?php echo $row->name;?></option >
                                <?php
                            }
                        }
                        ?>
                    </select>
                </div>
                </br></br>

                <div class="col-md-12">
                    <label class="label top-label">الموظف </label>
                    <select name="gender" onchange="get_emp_data($(this).val());" id="employee_id"
                            data-validation="required"   class="form-control bottom-input"
                            aria-required="true">
                        <option value=""> اختر </option>
                        <?php
                        if(isset($employee)&&!empty($employee)) {
                            foreach($employee as $row){
                                ?>
                                <option value="<?php echo $row->id;?>"> <?php echo $row->employee;?></option >
                                <?php
                            }
                        }
                        ?>
                    </select>
                </div>





            </div>

            <div class="col-md-4 profile">
                <div class="col-md-12">
                    <?php if(isset($manager->personal_photo)&& !empty($manager->personal_photo)){?>
                    <img src="<?php echo base_url();?>uploads/images/<?php echo $manager->personal_photo ;?>" width="100" height="150" alt="">
                    <?php } else{  ?>
                        <img src="<?php echo base_url();?>asisst/fav/apple-icon-120x120.png" width="100" height="150" alt="">
                    <?php } ?>
                </div>
                <div class="col-md-12">

                    <h4>الاسم</h4>
                    <h4>
                       <?php if(isset($manager->employee)&& !empty($manager->employee)) echo $manager->employee ;?>
                    </h4>

                </div>
                <div class="col-md-12">
                    <h4>الوظيفه</h4>
                    <?php if(isset($manager->job_name)&& !empty($manager->job_name)) echo $manager->job_name ;?>

                </div>
            </div>

        </div>
    </div>

<?php }if($level==2){ ?>
    <div class="col-md-12">
        <div class="col-md-12">
            <div class="col-md-12 alert alert-success">المدير المباشر</div>
            <div class="col-md-12">
                <p><input type="radio"   checked="" disabled class="form-control" value="1"> اوافق علي اذن الموظف المذكور اعلاه </p>
            </div>
            <div class="col-md-12">
                <p><input type="radio"  disabled class="form-control" value="2"> لا اوافق علي اذن الموظف المذكور اعلاه </p>
            </div>
            <div class="col-md-3">
                <h1>الاسم :-</h1>
                <?php echo $row->current_from_user_name;?>
            </div>
            <div class="col-md-3">
                <h1>التوقيع :-</h1>
                <?php echo $row->current_from_user_name;?>
            </div>
            <div class="col-md-3">
                <h1>التاريخ :-</h1>
                <?php echo $row->ezn_date_ar;?>
            </div>
        </div>
        <div class="col-md-12">
            <div class="col-md-2">  <input type="radio" onchange="show_hide($(this).val());" value="1"  name="radi"onchange="" class="form-control decision"> موافق </div>

            <div class="col-md-2">  <input type="radio" onchange="show_hide($(this).val());" value="2" name="radi" onchange=""   class="form-control decision"> غير موافق </div>
        </div>
        <div class="col-md-12 accept">

            <div class="col-md-8">

                <div class="col-md-12">
                    <label class="label top-label">الاداره </label>
                    <select name="gender" onchange="get_emps($(this).val())" id="edara"
                            data-validation="required"   class="form-control bottom-input"
                            aria-required="true">
                        <option value="">إختر</option>
                        <?php
                        if(isset($admin)&&!empty($admin)) {
                            foreach($admin as $row){
                                ?>
                                <option value="<?php echo $row->id;?>"> <?php echo $row->name;?></option >
                                <?php
                            }
                        }
                        ?>
                    </select>
                </div>
                </br></br>

                <div class="col-md-12">
                    <label class="label top-label">الموظف </label>
                    <select name="gender" onchange="get_emp_data($(this).val());" id="employee_id"
                            data-validation="required"   class="form-control bottom-input"
                            aria-required="true">
                        <option value=""> اختر </option>

                        <?php
                        if(isset($employee)&&!empty($employee)) {
                            foreach($employee as $row){
                                ?>
                                <option value="<?php echo $row->id;?>"> <?php echo $row->employee;?></option >
                                <?php
                            }
                        }
                        ?>
                    </select>
                </div>





            </div>

            <div class="col-md-4 profile">
                <div class="col-md-12">
                    الصوره
                </div>
                <div class="col-md-12">

                    <h4>الاسم</h4>
                    <h4>
                        الاسم
                    </h4>

                </div>
                <div class="col-md-12">
                    <h4>الوظيفه</h4>
                    <h4>الوظيفه</h4>

                </div>
            </div>

        </div>
    </div>
<?php }if($level==3){ ?>
    <div class="col-md-12">
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th colspan="2" class="info">افاده شئون الموظفين </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>بلغت الاستئذانات الشخصيه للموظف:-</td>
                    <td>بلغت الاستئذانات العمل للموظف:-</td>
                </tr>
                <tr>
                    <td>عدد(<?php echo $row->num_personal_ezn;?>)لمده(<?php echo $row->peroid_personal_ezn;?>)</td>
                    <td>عدد(<?php echo $row->num_work_ezn;?>)لمده(<?php echo $row->peroid_work_ezn;?>)</td>
                </tr>
                <tr>
                    <td> الموظف المختص:- <?php echo $row->current_from_user_name;?> </td>
                    <td>التاريخ :- <?php echo $row->ezn_date_ar;?> </td>
                </tr>
                </tbody>

            </table>
        </div>
        <div class="col-md-12">
            <div class="col-md-2">  <input type="radio" value="1" onchange="show_hide($(this).val());" onchange="" name="radio" class="form-control decision"> موافق </div>

            <div class="col-md-2">  <input type="radio" value="2" onchange="show_hide($(this).val());" onchange=""   name="radio"  class="form-control decision"> غير موافق </div>
        </div>
        <div class="col-md-12 accept">

            <div class="col-md-8">

                <div class="col-md-12">
                    <label class="label top-label">الاداره </label>
                    <select name="gender" onchange="get_emps($(this).val())" id="edara"
                            data-validation="required"   class="form-control bottom-input"
                            aria-required="true">
                        <option value="">إختر</option>
                        <?php
                        if(isset($admin)&&!empty($admin)) {
                            foreach($admin as $row){
                                ?>
                                <option value="<?php echo $row->id;?>"> <?php echo $row->name;?></option >
                                <?php
                            }
                        }
                        ?>
                    </select>
                </div>
                </br></br>

                <div class="col-md-12">
                    <label class="label top-label">الموظف </label>
                    <select name="gender" id="employee_id"
                            data-validation="required" onchange="get_emp_data($(this).val());"   class="form-control bottom-input"
                            aria-required="true">
                        <option value=""> اختر </option>

                        <?php
                        if(isset($employee)&&!empty($employee)) {
                            foreach($employee as $row){
                                ?>
                                <option value="<?php echo $row->id;?>"> <?php echo $row->employee;?></option >
                                <?php
                            }
                        }
                        ?>
                    </select>
                </div>





            </div>

            <div class="col-md-4 profile">
               <div class="col-md-12">
                   الصوره
               </div>
                <div class="col-md-12">

                    <h4>الاسم</h4>
                    <h4>
                    </h4>

                </div>
                <div class="col-md-12">
                    <h4>الوظيفه</h4>
                    <h4>الوظيفه</h4>

                </div>
            </div>

        </div>
    </div>

<?php } if($level==4){ ?>
    <div class="col-md-12">
        <div class="col-md-12">
            <div class="col-md-2">  <input type="radio"  onchange="show_hide($(this).val());" value="1" onchange="" class="form-control decision"> موافق </div>

            <div class="col-md-2">  <input type="radio"  onchange="show_hide($(this).val());" value="2" onchange=""   class="form-control decision"> غير موافق </div>
        </div>

    </div>
<?php } ?>

<script>
    function make_suspend()
    {
        valu= $(".decision:radio:checked").val();
        if(valu!=1&& valu!=2)
        {
            Swal.fire(
                'تنبيه!',
                'من فضلك حدد قراراك سواء القبول او الرفض',

            )
            return;
        }
        if(valu==1){
            var level_check=parseInt($('#level').val());

            if(level_check==1 || level_check==2||level_check==3){
                if($('#employee_id').val()=='')
                {
                    Swal.fire(
                        'تنبيه!',
                        'من فضلك قم باختيار الموظف ',

                    )
                    return;
                }
            }


//موافق
            var current_from_id=$('#current_from_id').val();
            var current_from_user_name=$('#current_from_user_name').val();
            var current_to_id=$('#employee_id').val();
            var current_to_user_name=$('#employee_id').val()+'name';
            var current_procedure=valu;
            var current_process_title='موفق';
            var last_from_id=$('#last_from_id').val();
            var last_to_id=$('#last_to_id').val();
            var last_from_user_name=$('#last_from_user_name').val();
            var last_to_user_name=$('#last_to_user_name').val();
            var last_procedure=$('#last_procedure').val();
            var last_procedure_title=$('#last_procedure_title').val();
            var level=parseInt($('#level').val())+1;
            var ezn_id=$('#ezn_id').val();
            var ezn_rkm=$('#ezn_rkm').val();
            var message_accept=$('#message_accept').val();
            var message_refuse=$('#message_refuse').val();


            $.ajax({
                type:'post',
                url:"<?php echo base_url();?>human_resources/employee_forms/all_ozonat/Transformation/make_suspend_accept",
                data:{current_from_id:current_from_id,current_from_user_name:current_from_user_name,current_to_id:current_to_id
                    ,current_to_user_name:current_to_user_name,current_procedure:current_procedure,current_process_title:current_process_title,
                    last_from_id:last_from_id,last_to_id:last_to_id,last_from_user_name:last_from_user_name,
                    last_to_user_name:last_to_user_name,last_procedure:last_procedure,last_procedure_title:last_procedure_title,
                    level:level,ezn_id:ezn_id,ezn_rkm:ezn_rkm,valu:valu},
                success:function(d){

                    Swal.fire(
                        'بنجاح!',
                        message_accept,

                    )
                    $('#ezn_table').hide();
                    $('#detailsModal').modal('hide');






                }

            });





        }
        if(valu==2){

//غير موافق

            var current_from_id=$('#last_to_id').val();
            var current_from_user_name=$('#last_to_user_name').val();
            var current_to_id=$('#last_from_id').val();
            var current_to_user_name=$('#last_from_user_name').val();
            var current_procedure=valu;
            var current_process_title='غير موافق';
            var last_from_id=$('#last_from_id').val();
            var last_to_id=$('#last_to_id').val();
            var last_from_user_name=$('#last_from_user_name').val();
            var last_to_user_name=$('#last_to_user_name').val();
            var last_procedure=$('#last_procedure').val();
            var last_procedure_title=$('#last_procedure_title').val();
            var level=parseInt($('#level').val())-1;
            var ezn_id=$('#ezn_id').val();
            var ezn_rkm=$('#ezn_rkm').val();
            //alert(level);

            $.ajax({
                type:'post',
                url:"<?php echo base_url();?>human_resources/employee_forms/all_ozonat/Transformation/make_suspend_refused",
                data:{current_from_id:current_from_id,current_from_user_name:current_from_user_name,current_to_id:current_to_id
                    ,current_to_user_name:current_to_user_name,current_procedure:current_procedure,current_process_title:current_process_title,
                    last_from_id:last_from_id,last_to_id:last_to_id,last_from_user_name:last_from_user_name,
                    last_to_user_name:last_to_user_name,last_procedure:last_procedure,last_procedure_title:last_procedure_title,
                    level:level,ezn_id:ezn_id,ezn_rkm:ezn_rkm,valu:valu},
                success:function(d){

                    Swal.fire(
                        'بنجاح!',
                        'تم رفض الطلب وتحويله الي الموظف مقدم الطلب',
                    )

                    $('#detailsModal').modal('hide');
                    $('#ezn_table').hide();




                }

            });





        }


    }

</script>

<script>
    function get_emps(valu)
    {
        $.ajax({
            type:'post',
            url:"<?php echo base_url();?>human_resources/employee_forms/all_ozonat/Transformation/get_employee",
            data:{valu:valu},
            success:function(d){



                $('#employee_id').html(d);



            }

        });
    }

</script>

<script>
    function get_emp_data(emp_id)
    {

        $.ajax({
            type:'post',
            url:"<?php echo base_url();?>human_resources/employee_forms/all_ozonat/Transformation/get_emp_data",
            data:{emp_id:emp_id},
            success:function(d){



                $('.profile').html(d);



            }

        });
    }
</script>

<script>
    function show_hide(valu)
    {
       if(valu==2)
       {
           $('.accept').hide();
       }else{
           $('.accept').show();
       }
    }
</script>