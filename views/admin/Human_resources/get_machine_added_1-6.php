<tr class="">

   <th class="info">الفترة</th>
   <td><?=$period_id_fk?>
        <input type="hidden" name="period_id_fk" value="<?=$period_id_fk?>" class="form-control class-row-<?=$len_class?>" /> 
        <input type="hidden" name="always_id_fk" value="<?=$always_id_fk?>" class="form-control class-row-<?=$len_class?>" />
    </td>
    
   <th class="info">وقت الحضور </th>
   
     <td>
       <input type="time" name="attend_time" value="<?=$data_period["attend_time"]?>"  readonly="" class="form-control class-row-<?=$len_class?>"/>
       </td>
       
       
   <th class="info">وقت الإنصراف</th>
   
     <td>
       <input type="time" name="leave_time"  value="<?=$data_period["leave_time"]?>"  readonly="" class="form-control class-row-<?=$len_class?>" />
    </td>

</tr>


<tr >
    <th class="info">بدايه تسجيل الدخول</th>
     <td>
       <input type="time" name="start_enter" value="<?=$data_period["start_enter"]?>" readonly="" class="form-control class-row-<?=$len_class?>" />
    </td>
     <th class="info">نهايه تسجيل الدخول</th>
     
     
      <td>
       <input type="time" name="end_enter"   value="<?=$data_period["end_enter"]?>"   readonly="" class="form-control class-row-<?=$len_class?>" />
    </td>
      <th class="info"> بدايه تسجيل الخروج</th>
       <td>
       <input type="time" name="start_out"   value="<?=$data_period["start_out"]?>"  readonly=""  class="form-control class-row-<?=$len_class?>" />
    </td>
     
</tr>

<tr >
<th class="info">نهايه تسجيل الخروج</th>
<td>
       <input type="time" name="end_out"     value="<?=$data_period["end_out"]?>"    readonly=""  class="form-control class-row-<?=$len_class?>" />
    </td>

<th class="info"> من تاريخ</th>
 <td>
       <input type="date" name="from_date"   value=""                                 class="form-control class-row-<?=$len_class?>" />
    </td>

<th class="info"> الى تاريخ</th>
<td>
       <input type="date" name="to_date"    value=""                                 class="form-control class-row-<?=$len_class?>" />
    </td>
</tr>


<tr >
<th>الإجراء</th>
 <td colspan="5">
      <input type="button"  id="button" name="add" value="إضافة" onclick="SendForm('<?=$len_class?>')" class="btn btn-success"></td>

</tr>

<!--<tr class="">
    <td># 
        <input type="hidden" name="period_id_fk" value="<?//=$period_id_fk?>" class="form-control class-row-<?//=$len_class?>" />
        <input type="hidden" name="always_id_fk" value="<?//=$always_id_fk?>" class="form-control class-row-<?//=$len_class?>" />
    </td>
    <td>
       <input type="time" name="attend_time" value="<?//=$data_period["attend_time"]?>" class="form-control class-row-<?//=$len_class?>"/>
       </td>
    <td>
       <input type="time" name="leave_time"  value="<?//=$data_period["leave_time"]?>"  class="form-control class-row-<?//=$len_class?>" />
    </td>
    <td>
       <input type="time" name="start_enter" value="<?//=$data_period["start_enter"]?>" class="form-control class-row-<?//=$len_class?>" />
    </td>
    <td>
       <input type="time" name="end_enter"   value="<?//=$data_period["end_enter"]?>"   class="form-control class-row-<?//=$len_class?>" />
    </td>
    <td>
       <input type="time" name="start_out"   value="<?//=$data_period["start_out"]?>"   class="form-control class-row-<?//=$len_class?>" />
    </td>
    <td>
       <input type="time" name="end_out"     value="<?//=$data_period["end_out"]?>"     class="form-control class-row-<?//=$len_class?>" />
    </td>
    <td>
       <input type="date" name="from_date"   value=""                                 class="form-control class-row-<?//=$len_class?>" />
    </td>
    <td>
       <input type="date" name="to_date"    value=""                                 class="form-control class-row-<?//=$len_class?>" />
    </td>
    <td>
      <input type="button"  id="button" name="add" value="إضافة" onclick="SendForm('<?//=$len_class?>')" class="btn btn-success"></td>
    </td>
</tr>     -->
    
    
    
    
    
    
    
    
    