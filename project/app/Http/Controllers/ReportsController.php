<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\patterns\StrategyContext;
use App\Models\patterns\ReportPdf;
use App\Models\patterns\ReportHtml;

class ReportsController extends Controller
{
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