<?php

namespace App\Models\dirty;

class Reports
{

	public function doReport($type)
	{
		switch($type)
		{
			case 'html': return $this->reportHtml(); break;
			case 'pdf': return $this->reportPdf(); break;
		}
	}

	public function reportHtml()
	{

		return "HTML REPORT";
	}

	public function reportPdf()
	{
		return "PDF REPORT";
	}
}

