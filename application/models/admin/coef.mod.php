<?php

class coef_mod extends app_models
{
	public $default_from = 'coef';

	public function get_list($array)
	{
		if($array){
			$this->where($array);
          	$this->order_by('id','down Desc');
          	$this->pager();
			$data = $this->get();
			return $data;
		}else{
			// $this->order_by('down Desc,id');
          	$this->order_by('id','down Desc');
			$this->pager();
			$data = $this->get();
			return $data;
		}
	}

	public function get_one($id)
	{
		$uid = (int) $uid;
		$where = array('id' => $id);
		$this->where($where);
		$data = $this->find_one();
		return $data;
	}


	public function del($id)
	{
		$where = array('id' => (int) $id);
		$this->where($where);
		$data = $this->delete();
	}

	public function update_rating($uid, $rating)
	{
		$where = array('uid' => (int) $uid);
		$data = array('rating' => $rating);
		$this->where($where);
		$this->set($data);
		$data = $this->update();
	}


	public function add_post($array)
	{

		$this->set($array);
		$this->insert();
		return true;
	}

	public function update_post($data,$id)
	{
		$where = array('id' => (int) $id);
		$this->where($where);
		$this->set($data);
		$data = $this->update();
	}

	
}


?>
