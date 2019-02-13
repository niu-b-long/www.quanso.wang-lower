<?php
APP::load_file('admin/admin', 'ctl');

class stats_ctl extends admin_ctl
{
	final public function plan_list()
	{
		$this->_list('day,planid', 'day,planid');
	}

	final public function user_list()
	{
		$this->_list('day,uid', 'day,uid');
	}

	final public function ads_list()
	{
		$this->_list('day,adsid', 'day,adsid');
	}

	final public function zone_list()
	{
		$this->_list('day,zoneid', 'day,zoneid');
	}

	final public function _list($select, $group)
	{
		$sortingtype = request('sortingtype');
		$timerange = request('timerange');
		$searchval = request('searchval');
		$searchtype = request('searchtype');
		$plantype = request('plantype');
		$page = APP::adapter('pager', 'default');
		$get_timerange = $this->get_timerange();
		$stats = dr('admin/stats.get_data', $select, $group);
		$sum_stats = dr('admin/stats.get_data', false, false, false);
		$params = array('searchtype' => $searchtype, 'searchval' => $searchval, 'plantype' => $plantype, 'sortingtype' => $sortingtype, 'timerange' => $timerange);
		$page->params_url = $params;
		TPL::assign('page', $page);
		TPL::assign('stats', $stats);
		TPL::assign('sortingtype', $sortingtype);
		TPL::assign('timerange', $timerange);
		TPL::assign('searchtype', $searchtype);
		TPL::assign('searchval', $searchval);
		TPL::assign('plantype', $plantype);
		TPL::assign('get_timerange', $get_timerange);
		TPL::assign('sum_stats', $sum_stats[0]);
		TPL::display('stats');
	}

	final public function del()
	{
		if (is_post()) {
			$statsid = explode(',', post('statsid'));

			foreach ($statsid as $id ) {
				$e = explode('_', $id);
				$day = $e[0];
				$del_val = $e[1];
				$type = $e[2];

				if ($type == 'planid') {
					$del_field = 'planid';
				}

				if ($type == 'adsid') {
					$del_field = 'adsid';
				}

				if ($type == 'uid') {
					$del_field = 'uid';
				}

				if ($type == 'zoneid') {
					$del_field = 'zoneid';
				}

				dr('admin/stats.del', $day, $del_field, $del_val);
			}
		}
	}
	
  	//final public function toExcel($list,$filename,$indexKey,$startRow=1,$excel2007=false)
   // {
      	// ob_end_clean();
    	//if(empty($filename)) $filename = time();  
    	//if( !is_array($indexKey)) return false;  

    //$header_arr = array('A','B','C','D','E','F','G','H','I','J','K','L','M', 'N','O','P','Q','R','S','T','U','V','W','X','Y','Z');  
    //初始化PHPExcel()  
    //$objPHPExcel = new PHPExcel();
    //echo '<pre>'; 
    //var_dump($objPHPExcel);exit;

    //设置保存版本格式  
    //if($excel2007){  
        //$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);  
       // $filename = $filename.'.xlsx';  
   // }else{  
       // $objWriter = new PHPExcel_Writer_Excel5($objPHPExcel);  
      //  $filename = $filename.'.xlsx';  
   // }  

    //接下来就是写数据到表格里面去  
   //$objPHPExcel = $this->get_phpexcel();
   //$objWriter = $this->get_phpexcel_reader($objPHPExcel);
   //$objActSheet = $objPHPExcel->getActiveSheet();
    // $startRow = 1;  
    //foreach ($list as $row) {  
       // foreach ($indexKey as $key => $value){  
            //这里是设置单元格的内容  
           // $objActSheet->setCellValue($header_arr[$key].$startRow,$row[$value]);  
       // }  
       // $startRow++;  
   // }  

    // 下载这个表格，在浏览器输出  
    //header("Pragma: public");  
    //header("Expires: 0");  
    //header("Cache-Control:must-revalidate, post-check=0, pre-check=0");  
    //header("Content-Type:application/force-download");  
    //header("Content-Type:application/vnd.ms-execl");  
    //header("Content-Type:application/octet-stream");  
    //header("Content-Type:application/download");;  
    //header('Content-Disposition:attachment;filename='.$filename.'');  
    //header("Content-Transfer-Encoding:binary");  
    //$objWriter->save('php://output');
    //}
  
	final public function down_execl()
	{
		$action = get('action');

		if ($action == 'plan_list') {
			$select = 'day,planid';
			$group = 'day,planid';
		}

		if ($action == 'user_list') {
			$select = 'day,uid';
			$group = 'day,uid';
          	//$indexKey = array('order_sn','name','business','type','total','address','tel','moble','time1','status');       
            //excel表头内容
            //$header = array('day'=>'日期','name'=>'收货人','business'=>'商户名称','type'=>'支付方式','total'=>'订单金额','address'=>'收货地址','tel'=>'手机','moble'=>'电话','time1'=>'下单时间','status'=>'订单状态');
            //$list = array();
            //$list[] = dr('admin/stats.get_')
            //array_unshift($list,$header);//将查询到的订单数据和表头内容合并,构造成数组list
            // echo '<pre>';print_r($list);die;
            //$Excel = new Excel();
            //$this->toExcel($list,'1',$indexKey,1,true);exit;
		}

		if ($action == 'ads_list') {
			$select = 'day,adsid';
			$group = 'day,adsid';
		}

		if ($action == 'zone_list') {
			$select = 'day,zoneid';
			$group = 'day,zoneid';
		}

		$objPHPExcel = $this->get_phpexcel();
		$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A1', '日期')->setCellValue('B1', '广告项目')->setCellValue('C1', '浏览数')->setCellValue('D1', '结算数');

		if ($action == 'plan_list') {
			$objPHPExcel->setActiveSheetIndex(0)->setCellValue('E1', '点击量');
			$objPHPExcel->setActiveSheetIndex(0)->setCellValue('F1', '扣量');
			$objPHPExcel->setActiveSheetIndex(0)->setCellValue('G1', '二次点击');
			$objPHPExcel->setActiveSheetIndex(0)->setCellValue('H1', '效果数');
			$objPHPExcel->setActiveSheetIndex(0)->setCellValue('I1', '应付金额');
			$objPHPExcel->setActiveSheetIndex(0)->setCellValue('J1', '盈利');
		}
		else {
			$objPHPExcel->setActiveSheetIndex(0)->setCellValue('E1', '支付');
			$objPHPExcel->setActiveSheetIndex(0)->setCellValue('F1', '会员UID');
		}

		$objActSheet = $objPHPExcel->getActiveSheet();
		$objPHPExcel->getActiveSheet()->getStyle('A1:J1')->applyFromArray(array(
	'font' => array('bold' => true)
	));
		$objActSheet->getColumnDimension('A')->setAutoSize(30);
		$objActSheet->getColumnDimension('B')->setWidth(40);
		$lt = 3;
		$timerange = get('timerange');
		$stats = dr('admin/stats.get_data', $select, $group, false);

		foreach ((array) $stats as $row ) {
			$plan = dr('admin/plan.get_one', (int) $row['planid']);
			$objPHPExcel->getActiveSheet()->setCellValue('A' . $lt, $row['day']);
			$objPHPExcel->getActiveSheet()->setCellValue('B' . $lt, $plan['planname']);
			$objPHPExcel->getActiveSheet()->setCellValue('C' . $lt, $row['views'] . ' ');
			$objPHPExcel->getActiveSheet()->setCellValue('D' . $lt, $row['num'] + $row['deduction']);

			if ($action == 'plan_list') {
				$objPHPExcel->getActiveSheet()->setCellValue('E' . $lt, $row['clicks']);
				$objPHPExcel->getActiveSheet()->setCellValue('F' . $lt, $row['deduction']);
				$objPHPExcel->getActiveSheet()->setCellValue('G' . $lt, $row['do2click']);
				$objPHPExcel->getActiveSheet()->setCellValue('H' . $lt, $row['effectnum']);
				$objPHPExcel->getActiveSheet()->setCellValue('I' . $lt, $row['sumadvpay']);
				$objPHPExcel->getActiveSheet()->setCellValue('J' . $lt, $row['sumprofit']);
			}
			else {
				$objPHPExcel->getActiveSheet()->setCellValue('E' . $lt, $row['sumpay']);
				$objPHPExcel->getActiveSheet()->setCellValue('F' . $lt, $row['uid']);
			}

			$lt++;
		}

		$objPHPExcel->getActiveSheet()->setTitle('报表');
		$filename = 'stats';
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="' . $filename . '.xls"');
		header('Cache-Control: max-age=0');
		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
		$objWriter->save('php://output');
		exit();
	}
}



?>
