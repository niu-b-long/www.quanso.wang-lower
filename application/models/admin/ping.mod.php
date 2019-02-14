<?php

class ping_mod extends app_models
{
	public $default_from = 'ping';

	public function get_list()
	{
		$this->order_by('pingid','down Desc');
		$data = $this->get();
		return $data;
	}

	public function add_post()
	{
		$data = array('pingname' => post('pingname'));
		$this->set($data);
		$this->insert();
		return true;
	}

	public function update_post($pingid)
	{
		$where = array('pingid' => (int) $pingid);
		$data = array('pingname' => post('pingname'));
		$this->where($where);
		$this->set($data);
		$data = $this->update();
	}

	public function get_one($pingid)
	{
		$where = array('pingid' => $pingid);
		$this->where($where);
		$data = $this->find_one();
		return $data;
	}

	public function get_all()
	{
		$this->order_by('pingid','down Desc');
		$data = $this->get();
		return $data;
	}

	public function del($pingid)
	{
		$where = array('pingid' => (int) $pingid);
		$this->where($where);
		$data = $this->delete();
	}

	public function get_sum_pingid($pingid)
	{
		$where = array('pingid' => (int) $pingid);
		$this->where($where);
		$data = $this->find_count('users');
		$this->ar_where = array();
		return $data;
	}
}


?>
