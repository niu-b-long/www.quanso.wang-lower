<?php
APP::load_file('admin/admin', 'ctl');

class tongji_ctl extends admin_ctl
{
	// final public function advertiser_list()
	// {
	// 	$this->_get_list(2);
	// }

	// final public function affiliate_list()
	// {
	// 	$this->_get_list(1);
	// }

	// final public function service_list()
	// {
	// 	$this->_get_list(3);
	// }

	// final public function commercial_list()
	// {
	// 	$this->_get_list(4);
	// }

	final public function get_list()
	{
		$coef = dr('admin/coef.get_list');
		$token = dr('admin/token.get_list');
      	$page = APP::adapter('pager', 'default');
		TPL::assign('page', $page);
		TPL::assign('coef',$coef);
		TPL::assign('token', $token);
		// echo '<pre>';
		// var_dump($coef);
		TPL::display('tongji');
	}

	final public function del(){
		$id = request('id');
		dr('admin/token.del',$id);
		redirect('admin/tongji.get_list_token');
	}

	final public function del_coef(){
		$id = request('id');
		dr('admin/coef.del',$id);
		redirect('admin/tongji.get_list');
	}

	final public function search(){
		if(request('tid')){
          	$array = array('tid' => (int) request('tid'));
			$coef = dr('admin/coef.get_list',$array);
		}else{
        	$array = array(request('searchtype') => request('search'));
			$coef = dr('admin/coef.get_list',$array);
        }
		$token = dr('admin/token.get_list');
      	$page = APP::adapter('pager', 'default');
      	$tid = request('tid');
		$params = array('tid' => $tid);
		$page->params_url = $params;
      	TPL::assign('page', $page);
		TPL::assign('coef',$coef);
		TPL::assign('token', $token);
		TPL::display('tongji');
	}

	final public function update_post()
	{
		if(post()){
			$array = array();
			$id = request('id');
			$array['tid'] = request('tid');
			$array['uid'] = request('uid');
			$array['bid'] = request('bid');
			$array['zoneid'] = request('zoneid');
			$array['type'] = request('type');
			$array['moneycoef'] = request('moneycoef');
			$array['zonetype'] = request('zonetype');
			$array['numcoef'] = request('numcoef');
			$array['edittime'] = date('Y-m-d H:i:s',time());
			// var_dump($array);
			dr('admin/coef.update_post',$array,$id);
			
			redirect('admin/tongji.get_list');
		}else{
			$id = request('id');
			$array = dr('admin/coef.get_one',$id);
			echo json_encode($array);
		}
		
	}

	public function update_post_token()
	{
		//判断是ajax还是post请求
		if(post()){
			$array = array();
			$id = request('id');
			$array['username'] = request('name');
			$array['password'] = request('pwd');
			$array['token'] = request('token');
			$array['edittime'] = date("Y-m-d H:i:s",time());
			$array['cpm'] = request('cpm');
			$array['torder'] = request('order');
			// var_dump($array);exit;
			dr('admin/token.update_post',$id,$array);
			redirect('admin/tongji.get_list_token');
		}else{

			$id = request('id');
			$array = dr('admin/token.get_one',$id);
			echo json_encode($array);
		}
	}

	final public function add_post()
	{
		if(post()){
			$array = array();
			$array['tid'] = request('tid');
			$array['uid'] = request('uid');
			$array['bid'] = request('bid');
			$array['zoneid'] = request('zoneid');
			$array['type'] = request('type');
			$array['moneycoef'] = request('moneycoef');
			$array['zonetype'] = request('zonetype');
			$array['sizeid'] = request('sizeid');
			$array['numcoef'] = request('numcoef');
			$array['addtime'] = date('Y-m-d H:i:s',time());
			// var_dump($array);
			dr('admin/coef.add_post',$array);
			
			redirect('admin/tongji.get_list');
		}else{
			$token = dr('admin/token.get_list');
			TPL::assign('token', $token);
			TPL::display('update_xi');
		}
		
	}

	final public function lock(){
		$id = request('id');
		dr('admin/token.lock',$id);
		redirect('admin/tongji.get_list_token');
	}

	final public function get_list_token()
	{	
		$data = dr('admin/token.get_list');
		$token = array();
		foreach($data as $k => $v){
			$token[$v['id']] = $v;
		}
		TPL::assign('token',$token);
		TPL::display('token');
	}

	final public function add_post_token(){
		$array = array();
		$array['username'] = request('name');
		$array['password'] = request('pwd');
		$array['token'] = request('token');
		$array['cpm'] = request('cpm');
		$array['torder'] = request('order');
		dr('admin/token.add_post',$array);
		redirect('admin/tongji.get_list_token');
	}

	final public function lock_coef(){
		$id = request('id');
		$data = array('status' => 0);
		dr('admin/coef.update_post',$data,$id);
		redirect('admin/tongji.get_list');
	}

	final public function unlock_coef(){
		$id = request('id');
		$data = array('status' => 1);
		dr('admin/coef.update_post',$data,$id);
		redirect('admin/tongji.get_list');
	}

}



?>
