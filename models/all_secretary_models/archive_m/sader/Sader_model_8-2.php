<?php
class Sader_model extends CI_Model{



    public function get_table_by_id($table,$arr){
        if (!empty($arr)){
            $this->db->where($arr);
        }
        $query = $this->db->get($table)->row();
        
            return $query;
        
    }
 

 public function get_table($table,$arr){
     if (!empty($arr)){
         $this->db->where($arr);
     }
     $query = $this->db->get($table);
     if ($query->num_rows()>0){
         return $query->result();
     } else{
         return false;
     }
 }
    public function get_rkm()
    {
        $this->db->select_max('sader_rkm');
        $query = $this->db->get('arch_sader');
        if ($query->num_rows() > 0) {
            return $query->row()->sader_rkm;
        } else {
            return 0;
        }


    }
    
    public function select_secret()
    {
     $this->db->where('from_code',801);
      return $this->db->get('arch_setting')->result();
   
    }
    
    public function insert_sader($id=''){
        $data['tasgel_date'] = $this->input->post('tasgel_date');

        $data['ersal_date'] = $this->input->post('ersal_date');
        $data['ersal_time'] = $this->input->post('ersal_time');
        $data['geha_ekhtsas_fk'] = $this->input->post('geha_ekhtsas_fk');
        $data['geha_ekhtsas_n'] = $this->input->post('geha_ekhtsas_n');
        $data['sader_rkm'] = $this->input->post('sader_rkm');
        //
        $data['folder_path'] = $this->input->post('folder_path');
        $data['folder_id_fk'] = $this->input->post('folder_id_fk');

        $data['folder_name']=$this->input->post('folder_name');
        //
        $data['no3_khtab_fk'] = $this->input->post('no3_khtab_fk');
        $data['no3_khtab_n'] = $this->input->post('no3_khtab_n');
        $data['mawdo3_name'] = $this->input->post('mawdo3_name');
        $data['title_id_fk']=$this->input->post('title_id_fk');
        $data['mawdo3_subject'] = $this->input->post('mawdo3_subject');
        $data['tarekt_ersal_fk'] = $this->input->post('tarekt_ersal_fk');
        $data['tarekt_ersal_n'] = $this->input->post('tarekt_ersal_n');
        $data['is_secret'] = $this->input->post('is_secret');
        $data['geha_morsel_fk'] = $this->input->post('geha_morsel_fk');
        $data['geha_morsel_n'] = $this->input->post('geha_morsel_n');
        $data['mostlem_name'] = $this->input->post('mostlem_name');
        $data['awlawia_fk'] = $this->input->post('awlawia_fk');
        $priority = array('1'=>'عادي','2'=>'هام','3'=>'هام جدا');
        $data['awlawia_n'] = $priority[$data['awlawia_fk']];
        $data['esthkak_date'] = $this->input->post('esthkak_date');
        $data['esthkak_time'] = $this->input->post('esthkak_time');
        $data['need_follow'] = $this->input->post('need_follow');
        $data['notes'] = $this->input->post('notes');
        $data['mo3mla_reply'] = $this->input->post('mo3mla_reply');
        $data['sader_type'] = $this->input->post('sader_type');
        $data['morfaq_num'] = $this->input->post('morfaq_num');
        $data['date_ar'] = date("Y-m-d H:i:s");

        $data['date'] =  strtotime(date("Y-m-d"));
        if ($_SESSION['role_id_fk'] == 1) {

            $data['publisher'] = $_SESSION['user_id'];
            $data['publisher_name'] = $_SESSION['user_name'];;
        } else if ($_SESSION['role_id_fk'] == 2) {
            $data['publisher'] = $this->get_id("magls_members_table", 'id', $_SESSION['emp_code'], "id");
            $data['publisher_name'] = $this->get_id("magls_members_table", 'id', $_SESSION['emp_code'], "member_name");

        } else if ($_SESSION['role_id_fk'] == 3) {
            $data['publisher'] = $this->get_id("employees", 'id', $_SESSION['emp_code'], "id");
            $data['publisher_name'] = $this->get_id("employees", 'id', $_SESSION['emp_code'], "employee");
        } else if ($_SESSION['role_id_fk'] == 4) {
            $data['publisher'] = $this->get_id("general_assembley_members", 'id', $_SESSION['emp_code'], "id");
            $data['publisher_name'] = $this->get_id("general_assembley_members", 'id', $_SESSION['emp_code'], "name");
        }
        if(!empty($id)){
            $this->db->where('id',$id);
            $this->db->update('arch_sader',$data);
        } else{
            $this->db->insert('arch_sader',$data);

        }

    }
    public function get_sader_by_id($id){
        $this->db->where('id',$id);
        $query = $this->db->get('arch_sader');
        if ($query->num_rows()>0){
            return $query->row();
        } else{
            return false;
        }
    }
    public function delete_sader($id){
        $this->db->where('id',$id);
        $this->db->delete('arch_sader');

    }
    public function get_id($table, $where, $id, $select)
    {
        $h = $this->db->get_where($table, array($where => $id));
        $arr = $h->row_array();
        return $arr[$select];
    }
    public function insert_attach($id,$images)
    {
        if(isset($images)&& !empty($images))
        {
            $count=count($images);
            for($x=0; $x<$count;$x++)
            {

                $data['title']=$this->input->post('title');
                $data['sader_id_fk']=$id;
                $data['morfaq']=$images[$x];
                $data['date_ar'] = date("Y-m-d");
                $data['date'] =  strtotime(date("Y-m-d"));
                if ($_SESSION['role_id_fk'] == 1) {

                    $data['publisher'] = $_SESSION['user_id'];
                    $data['publisher_name'] = $_SESSION['user_name'];;
                } else if ($_SESSION['role_id_fk'] == 2) {
                    $data['publisher'] = $this->get_id("magls_members_table", 'id', $_SESSION['emp_code'], "id");
                    $data['publisher_name'] = $this->get_id("magls_members_table", 'id', $_SESSION['emp_code'], "member_name");

                } else if ($_SESSION['role_id_fk'] == 3) {
                    $data['publisher'] = $this->get_id("employees", 'id', $_SESSION['emp_code'], "id");
                    $data['publisher_name'] = $this->get_id("employees", 'id', $_SESSION['emp_code'], "employee");
                } else if ($_SESSION['role_id_fk'] == 4) {
                    $data['publisher'] = $this->get_id("general_assembley_members", 'id', $_SESSION['emp_code'], "id");
                    $data['publisher_name'] = $this->get_id("general_assembley_members", 'id', $_SESSION['emp_code'], "name");
                }

               $this->db->insert('arch_sader_morfaq',$data);
            }
        }

    }
    public function delete_morfaq($id){
        $this->db->where('id',$id);
        $this->db->delete('arch_sader_morfaq');
    }
    public function insert_comments($id){
        $row_id =$this->input->post('row_id');
        $data['comment']=$this->input->post('comment');

        $data['sader_id_fk']=$id;
        $data['date_ar'] = date("Y-m-d H:i:s");
        $data['date'] =  strtotime(date("Y-m-d H:i:s"));
        if ($_SESSION['role_id_fk'] == 1) {

            $data['publisher'] = $_SESSION['user_id'];
            $data['publisher_name'] = $_SESSION['user_name'];;
        } else if ($_SESSION['role_id_fk'] == 2) {
            $data['publisher'] = $this->get_id("magls_members_table", 'id', $_SESSION['emp_code'], "id");
            $data['publisher_name'] = $this->get_id("magls_members_table", 'id', $_SESSION['emp_code'], "member_name");

        } else if ($_SESSION['role_id_fk'] == 3) {
            $data['publisher'] = $this->get_id("employees", 'id', $_SESSION['emp_code'], "id");
            $data['publisher_name'] = $this->get_id("employees", 'id', $_SESSION['emp_code'], "employee");
        } else if ($_SESSION['role_id_fk'] == 4) {
            $data['publisher'] = $this->get_id("general_assembley_members", 'id', $_SESSION['emp_code'], "id");
            $data['publisher_name'] = $this->get_id("general_assembley_members", 'id', $_SESSION['emp_code'], "name");
        }
        if (!empty($row_id)){
            $this->db->where('id',$row_id);
            $this->db->update('arch_sader_comments',$data);

        } else{
            $this->db->insert('arch_sader_comments',$data);
        }




    }
    public function delete_comment($id){
        $this->db->where('id',$id);
        $this->db->delete('arch_sader_comments');
    }

    public function insert_tahwel($sader_id){
      $row_id = $this->input->post('row_id');
        $data['sader_id_fk']=$sader_id;
       // $data['mohema_n']=$this->input->post('mohema_n');
        $data['mohema_n']=$this->input->post('mohema_n');
        $data['mohema_fk']=$this->input->post('mohema_fk');
        $data['tahwel_type']=$this->input->post('tahwel_type');
      //  $data['to_user_id']=$this->input->post('to_user_id');
    //    $data['to_user_n']=$this->input->post('to_user_n');
        $data['esthkak_date']=$this->input->post('esthkak_date');
        $data['subject']=$this->input->post('subject');
        $data['awlawia_fk']=$this->input->post('awlawia_fk');
        $priority = array('1'=>'عادي','2'=>'هام','3'=>'هام جدا');
        $data['awlawia_n'] = $priority[$data['awlawia_fk']];
        $data['date_ar'] = date("Y-m-d");
        $data['date'] =  strtotime(date("Y-m-d"));
        if ($_SESSION['role_id_fk'] == 1) {

            $data['publisher'] = $_SESSION['user_id'];
            $data['publisher_name'] = $_SESSION['user_name'];
        } else if ($_SESSION['role_id_fk'] == 2) {
            $data['publisher'] = $this->get_id("magls_members_table", 'id', $_SESSION['emp_code'], "id");
            $data['publisher_name'] = $this->get_id("magls_members_table", 'id', $_SESSION['emp_code'], "member_name");

        } else if ($_SESSION['role_id_fk'] == 3) {
            $data['publisher'] = $this->get_id("employees", 'id', $_SESSION['emp_code'], "id");
            $data['publisher_name'] = $this->get_id("employees", 'id', $_SESSION['emp_code'], "employee");
        } else if ($_SESSION['role_id_fk'] == 4) {
            $data['publisher'] = $this->get_id("general_assembley_members", 'id', $_SESSION['emp_code'], "id");
            $data['publisher_name'] = $this->get_id("general_assembley_members", 'id', $_SESSION['emp_code'], "name");
        }
        $data['from_user_id'] = $data['publisher'];
        $data['from_user_n'] = $data['publisher_name'];
        $x= $this->input->post('to_user_id');
        $y=$this->input->post('to_user_n');
        if(   $x!=null)
        {
            for($i=0;$i<sizeof($x);$i++)
            {
               
               if($data['tahwel_type']==1)
               {
                
               $data['to_user_id'] = $x[$i];
               $data['to_user_n'] = $y[$i];
            //echo "<pre>";
            //print_r($data);
            if (!empty($row_id)){
                $this->db->where('id',$row_id);
                $this->db->update('arch_sader_history',$data);
            
            } else{
                $this->db->insert('arch_sader_history',$data);
            }
               
              }elseif($data['tahwel_type']==2)
              {
                //$data['to_user_id'] = $x[$i];
                $yy=$this->get_id("department_jobs","id",$x[$i],"from_id_fk");
                $vv=$this->get_id("hr_depart_managers","depart_id_fk",$yy,"emp_id_fk");
              $data['to_user_id']=$vv;
              $final=$this->get_id("employees","id",$vv,"employee");
              $data['to_user_n'] =$final;
            //  echo "<pre>";
            //  print_r($data);
            if (!empty($row_id)){
                $this->db->where('id',$row_id);
                $this->db->update('arch_sader_history',$data);
            
            } else{
                $this->db->insert('arch_sader_history',$data);
            }
            
              } 
            
            
            
            
            
            
            }
     
    
    
    
    
    
    
    
    
    
    }
     
      
        $data_sader['current_from_user_id'] =  $data['from_user_id'];
        $data_sader['current_from_user_name'] =  $data['from_user_n'];
        $data_sader['current_to_user_id'] =  $data['to_user_id'];
        $data_sader['current_to_user_name'] =  $data['to_user_n'];
        $data_sader['tahwel_type'] =  $data['tahwel_type'];
        $data_sader['mohema_n'] =  $data['mohema_n'];
        $this->db->where('id',$sader_id);
        $this->db->update('arch_sader',$data_sader);


    }

    public function delete_tahwel($id){
        $this->db->where('id',$id);
        $this->db->delete('arch_sader_history');
    }
    //
    public function insert_realtion($sader_id)
    {
        $row_id = $this->input->post('row_id');
        $data['sader_id_fk'] = $sader_id;
        $data['mo3mla_rkm'] = $this->input->post('mo3mla_rkm');
        $data['type'] = $this->input->post('type');
        $data['date_ar'] = date("Y-m-d");
        $data['date'] = strtotime(date("Y-m-d"));
        if ($_SESSION['role_id_fk'] == 1) {
            $data['publisher'] = $_SESSION['user_id'];
            $data['publisher_name'] = $_SESSION['user_name'];
        } else if ($_SESSION['role_id_fk'] == 2) {
            $data['publisher'] = $this->get_id("magls_members_table", 'id', $_SESSION['emp_code'], "id");
            $data['publisher_name'] = $this->get_id("magls_members_table", 'id', $_SESSION['emp_code'], "member_name");

        } else if ($_SESSION['role_id_fk'] == 3) {
            $data['publisher'] = $this->get_id("employees", 'id', $_SESSION['emp_code'], "id");
            $data['publisher_name'] = $this->get_id("employees", 'id', $_SESSION['emp_code'], "employee");
        } else if ($_SESSION['role_id_fk'] == 4) {
            $data['publisher'] = $this->get_id("general_assembley_members", 'id', $_SESSION['emp_code'], "id");
            $data['publisher_name'] = $this->get_id("general_assembley_members", 'id', $_SESSION['emp_code'], "name");
        }
        if (!empty($row_id)) {
            $this->db->where('id', $row_id);
            $this->db->update('arch_sader_relation', $data);

        } else {
            $this->db->insert('arch_sader_relation', $data);
        }
    }
    public function delete_relation($id){
        $this->db->where('id',$id);
        $this->db->delete('arch_sader_relation');
    }
    public function update_sader_status($id,$value,$name,$to_user_n,$to_user_id,$from_user_n,$date_end,$num_end)
    {
        $data['reason_id']=$value;
        $data['reason_name']=$name;
        //
        $data['to_user_n']=$to_user_n;
        $data['to_user_id']=$to_user_id;
        $data['from_user_n']=$from_user_n;
        $data['date_end']=$date_end;
        $data['num_end']=$num_end;
        //
        $data['suspend']=4;
        $data['suspend_date']= strtotime(date("Y-m-d"));
        $data['suspend_date_ar'] = date('Y-m-d H:i:s');
        if($_SESSION['role_id_fk']==1){

            $data['suspend_publisher']=$_SESSION['user_id'];
            $data['suspend_publisher_name']=$_SESSION['user_name'];
        }
        else if ($_SESSION['role_id_fk']==2){
            $data['suspend_publisher'] = $this->get_id("magls_members_table",'id',$_SESSION['emp_code'],"id");
            $data['suspend_publisher_name'] = $this->get_id("magls_members_table",'id',$_SESSION['emp_code'],"member_name");
    
        }
        else if ($_SESSION['role_id_fk']==3){
            $data['suspend_publisher'] = $this->get_id("employees",'id',$_SESSION['emp_code'],"id");
            $data['suspend_publisher_name'] = $this->get_id("employees",'id',$_SESSION['emp_code'],"employee");
        }
        else if ($_SESSION['role_id_fk']==4){
            $data['suspend_publisher'] = $this->get_id("general_assembley_members",'id',$_SESSION['emp_code'],"id");
            $data['suspend_publisher_name'] = $this->get_id("general_assembley_members",'id',$_SESSION['emp_code'],"name");
        }
        $this->db->where('id',$id);
        $this->db->update('arch_sader',$data);
    }
    ///////////////////////////////////notification/////////////////////////////////////////

public function total_rows($q=NULL){

    $this->db->like('id',$q);

$this->db->where('to_user_id',$_SESSION['emp_code']);

$this->db->where('seen',0);  

    

     $this->db->from('arch_sader_history');

    return $this->db->count_all_results();





}

public function get_new_sader($q=NULL)

{

    $this->db->where('to_user_id',$_SESSION['emp_code']);

  $this->db->where('readed',0);



     $this->db->from('arch_sader_history');

    return $this->db->get()->result();

    

}

public function update_seen_sader()

{

   

   $data['seen']=1;

     

 $this->db->where('to_user_id',$_SESSION['emp_code'])->update('arch_sader_history',$data);





}



public function update_read_sader($id)

{

   

   $data['readed']=1;

     

 $this->db->where('id',$id)->update('arch_sader_history',$data);





}
public function select_search_key($table,$search_key,$search_key_value){
    $this->db->select('*');
    $this->db->from($table);
    $this->db->where($search_key,$search_key_value);
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
        foreach ($query->result() as $row) {
            $data[] = $row;
        }
        return $data;
    }
    return false;
}

public function add_mohema_n()
{
    $data['title'] =$this->input->post('mohema_n');

    $data['from_code'] = 901;
    $this->db->insert('arch_setting', $data);
}

public function GetFromGeneral_settings_mohema_n($id)
{
    $this->db->select('*');
    $this->db->from('arch_setting');
    $this->db->where('from_code', 901);
    $this->db->where('id', $id);
    $query = $this->db->get()->row();

    return $query;
}

public function update_mohema($id)
{
    $data['title'] =$this->input->post('mohema_n');

    $data['from_code'] = 901;
    $this->db->where('id',$id)->update('arch_setting', $data);
}

public function delete_setting($id)
{

    $this->db->where("id", $id);
    $this->db->delete("arch_setting");
}

}