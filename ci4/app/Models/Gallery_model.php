<?php namespace App\Models;
use CodeIgniter\Model;
 
class Gallery_model extends Model
{
    protected $table = 'media_list';
     
    public function getRows($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id' => $id]);
        }   
    }
    public function getRowsByUUID($uuid = false)
    {
        if($uuid === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['uuid' => $uuid]);
        }   
    }
	
	public function saveData($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }
	
	public function deleteData($id)
    {
        $query = $this->db->table($this->table)->delete(array('id' => $id));
        return $query;
    }
	
	public function updateData($id = null, $data = null)
	{
		$query = $this->db->table($this->table)->update($data, array('id' => $id));
		return $query;
	}
	public function updateDataByUUID($uuid = null, $data = null)
	{
		$query = $this->db->table($this->table)->update($data, array('uuid' => $uuid));
		return $query;
	}
}