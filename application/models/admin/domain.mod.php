<?php

class domain_mod extends app_models
{
	public $default_from = 'addomain';

	public function get_list($type = false)
	{
		if ($type) {
			$this->where('type', (int) $type);
		}
		$this->pager();
		$this->order_by('id','down Desc');
		$data = $this->get();
		return $data;
	}

	public function add_post()
	{
		$this->where(array('classid' => post('classid'),'pingid' => post('pingid')));
		$data = $this->get();
		if(is_array($data)){
			return false;
		}
		$data = array('dname' => post('dname'),'classid' => post('classid'),'pingid' => post('pingid'));
		$this->set($data);
		$this->insert();
		return true;
	}

	public function update_post($dname,$classid,$pingid)
	{
		$data = array('dname' => $dname,'classid' => $classid,'pingid' => $pingid);
		$where = array('id' => post('id'));
		$this->where($where);
		$this->set($data);
		$data = $this->update();
		return $data;
	}

	public function get_one($id)
	{
		$where = array('id' => $id);
		$this->where($where);
		$data = $this->find_one();
		return $data;
	}

	public function get_all($type = false)
	{
		if ($type) {
			$this->where('type', (int) $type);
		}

		$this->order_by('classid');
		$data = $this->get();
		return $data;
	}

	public function del($id)
	{
		$where = array('id' => (int) $id);
		$this->where($where);
		$data = $this->delete();
	}
}


?>
