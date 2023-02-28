<?php
class model extends CI_Model{

    public function insert($data)
    {
        return $this->db->insert('prospect',$data);

    }
    public function fetch(){
       $query = $this->db->get('prospect');
       return $query->result();
    }

    public function edit($id)
    {
       $query = $this->db->get_where('prospect',['id'=>$id]);
       return $query->row(); 
       echo "EDIT";
    }

    public function update($data,$id)
    {
        $this->db->update('prospect',$data,['id'=>$id]);
        echo "<script>Data Updated</script>";
    }

} 
?>