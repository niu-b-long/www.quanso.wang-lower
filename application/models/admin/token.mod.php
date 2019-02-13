<?php

class token_mod extends app_models
{
	public $default_from = 'token';

	public function get_list()
	{
		$where = array('status' => 1);
		$this->where($where);
		// $this->order_by('down Desc,id');
		$data = $this->get();
		return $data;
	}

	public function get_one($uid)
	{
		$uid = (int) $uid;
		$where = array('id' => $uid);
		$this->where($where);
		$data = $this->find_one();
		return $data;
	}

	public function get_one_all($uid)
	{
		$uid = (int) $uid;
		$where = array('uid' => $uid);
		$this->where($where);
		$data = $this->get();
		return $data;
	}

	public function get_recommend_one($uid)
	{
		$this->select('recommend');
		$where = array('uid' => $uid);
		$this->where($where);
		$data = $this->find_one();
		return $data;
	}

	public function get_one_username($username)
	{
		$where = array('username' => strtolower($username));
		$this->where($where);
		$data = $this->find_one();
		return $data;
	}

	public function get_all_type($type)
	{
		$where = array('type' => (int) $type);
		$this->where($where);
		$data = $this->get();
		return $data;
	}

	public function get_advertiser_ok()
	{
		$where = array('type' => 2, 'status' => 2, 'money >' => 1);
		$this->where($where);
		$data = $this->get();
		return $data;
	}

	public function unlock($uid)
	{
		$where = array('uid' => (int) $uid);
		$data = array('status' => 2, 'memo' => post('log_text'));
		$this->where($where);
		$this->set($data);
		$data = $this->update();
	}

	public function lock($uid)
	{
		$where = array('id' => (int) $uid);
		$data = array('status' => 0);
		$this->where($where);
		$this->set($data);
		$data = $this->update();
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


	public function add_post($data)
	{
		$this->set($data);
		$this->insert();
		return true;
	}

	public function update_post($id,$data)
	{
		$where = array('id' => (int) $id);
		$this->where($where);
		$this->set($data);
		$data = $this->update();
	}

}


?>
