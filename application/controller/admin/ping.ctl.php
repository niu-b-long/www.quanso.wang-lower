<?php
APP::load_file('admin/admin', 'ctl');

class ping_ctl extends admin_ctl
{
	final public function get_list()
	{
		$ping = dr('admin/ping.get_list');
		$page = APP::adapter('pager', 'default');
		TPL::assign('ping', $ping);
		TPL::assign('page', $page);
		TPL::display('ping');
	}

	final public function add()
	{
		TPL::display('ping_add');
	}

	final public function add_post()
	{
		if (is_post()) {
			$q = dr('admin/ping.add_post');
			$_SESSION['succ'] = true;
			redirect('admin/ping.get_list');
		}
	}

	final public function edit()
	{
		$g = dr('admin/ping.get_one', (int) get('pingid'));
		TPL::assign('g', $g);
		TPL::display('ping_add');
	}

	final public function update_post()
	{
		if (is_post()) {
			$q = dr('admin/ping.update_post', (int) post('pingid'));
			$_SESSION['succ'] = true;
			redirect('admin/ping.edit?pingid=' . post('pingid'));
		}
	}

	final public function del()
	{
		if (is_post()) {
			$pingid = explode(',', post('pingid'));

			foreach ($pingid as $id ) {
				$q = dr('admin/ping.del', (int) $id);
			}
		}
	}
}



?>
