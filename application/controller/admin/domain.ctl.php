<?php
APP::load_file('admin/admin', 'ctl');

class domain_ctl extends admin_ctl
{
	final public function get_list()
	{

		$domain = dr('admin/domain.get_list');
		$page = APP::adapter('pager', 'default');
		TPL::assign('page', $page);
		TPL::assign('domain', $domain);
		TPL::display('domain');
	}

	final public function add()
	{	
		$class = dr('admin/class.get_all');
		$ping = dr('admin/ping.get_all');
		TPL::assign('class',$class);
		TPL::assign('ping',$ping);
		TPL::display('domain_add');
	}

	final public function add_post()
	{
		if (is_post()) {
			$q = dr('admin/domain.add_post');
			if($q){
				$_SESSION['succ'] = true;
			}else{
				$_SESSION['err'] = true;
			}
			redirect('admin/domain.get_list');
		}
	}

	final public function edit()
	{
		$c = dr('admin/domain.get_one', (int) get('id'));
		$class = dr('admin/class.get_all');
		$ping = dr('admin/ping.get_all');
		TPL::assign('class',$class);
		TPL::assign('ping',$ping);
		TPL::assign('c', $c);
		TPL::display('domain_add');
	}

	final public function update_post()
	{
		if (is_post()) {
			$q = dr('admin/domain.update_post',post('dname'),(int) post('classid'),(int) post(pingid));
			if($q){
				$_SESSION['succ'] = true;
			}else{
				$_SESSION['err'] = true;
			}
			redirect('admin/domain.get_list');
		}
	}

	final public function del()
	{
		if (is_post()) {
			$id = explode(',', post('classid'));
			foreach ($id as $id ) {
				$q = dr('admin/domain.del', (int) $id);
			}
		}
	}
}



?>
