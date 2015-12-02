<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\dirty\Reports;
use App\Models\patterns\StrategyContext;
use App\Models\patterns\ReportPdf;
use App\Models\patterns\ReportHtml;

class ReportsController extends Controller
{

	public function makeDirtyHtml()
	{
		$report = new Reports();
		echo $report->doReport('html');
	}

	public function makeDirtyPdf()
	{
		$report = new Reports();
		echo $report->doReport('pdf');
	}

	public function makeHtml()
	{
		$report = new StrategyContext(new ReportHtml());
		echo $report->executeStrategy();
	}

	public function makepdf()
	{
		$report = new StrategyContext(new ReportPdf());
		echo $report->executeStrategy();
	}
}