<?php

namespace App\Models\patterns;

use App\Models\interfaces\ReportsStrategy;

class ReportPdf implements reportsStrategy
{

	public function doReport()
	{
		return "PDF REPORT";
	}

}