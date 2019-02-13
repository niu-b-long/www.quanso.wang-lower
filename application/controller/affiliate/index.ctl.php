<?php
APP::load_file('main/main', 'ctl');
class index_ctl extends main_ctl
{
	final public function get_list()
	{	
		$get_timerange = $this->get_timerange();
		$get_day_sunpay = dr('affiliate/report.get_day_sunpay');
      	$zong = dr('affiliate/report.get_uid');
		$get_yesterday_sunpay = dr('affiliate/report.get_yesterday_sunpay');
		$get_month_sunpay = dr('affiliate/report.get_month_sunpay');
		$stats = dr('affiliate/report.get_index_stats');
      	if(request('timerange'))
        {
        	$stats = dr('affiliate/report.get_list',request('timerange'),request('type'));
       	}
      	$page = APP::adapter('pager', 'default');
      	$zmoney = 0;
      	foreach($zong as $v)
        {
        	$zmoney=$zmoney+$v['sumpay'];
        }
		TPL::assign('get_timerange', $get_timerange);
		TPL::assign('stats', $stats);
      	TPL::assign('zmoney', $zmoney);
		TPL::assign('get_day_sunpay', $get_day_sunpay);
		TPL::assign('get_yesterday_sunpay', $get_yesterday_sunpay);
		TPL::assign('get_month_sunpay', $get_month_sunpay);
      	TPL::assign('page', $page);
		TPL::display('index');
	}
  	
}



?>
