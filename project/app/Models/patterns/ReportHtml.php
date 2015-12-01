<?php

namespace App\Models\patterns;

use App\Models\interfaces\ReportsStrategy;

class ReportHtml implements reportsStrategy
{

	public function doReport()
	{
		return "HTML REPORT";
	}

}