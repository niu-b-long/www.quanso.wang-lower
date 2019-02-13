<?php
APP::load_file('main/main', 'ctl');

class xg_ctl extends main_ctl
{
	final public function get_list()
	{
		$xg = dr('main/xg.get_list', $GLOBALS['userinfo']['type']);
		foreach ((array) $xg as $key => $m ) {
			$rid = 'rid' . substr($GLOBALS['userinfo']['uid'], -1);
			$rd = @explode(',', trim($m[$rid], ','));

			if (!in_array($GLOBALS['userinfo']['uid'], (array) $rd)) {
				$xg[$key]['read'] = 'n';
			}
		}

		TPL::assign('xg', $xg);
		TPL::display('xg_getlist');
	}

	final public function read()
	{
		dr('main/xg.read', (int) get('xgid'));
	}

	final public function get_xg_content()
	{
		$xgid = dr('main/xg.get_xg_content', (int) get('xgid'));
	}
}



?>
