<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ReportPDFRepository;
use Barryvdh\DomPDF\Facade\Pdf;

class ReportPDFController extends Controller
{
    private ReportPDFRepository $reportPDFRepository;

    public function __construct(ReportPDFRepository $reportPDFRepository) {
        $this->reportPDFRepository = $reportPDFRepository;
    }

    public function reportPDFCompany(){

        $data = $this->reportPDFRepository->reportCompany();
        $pdf = Pdf::loadView('pdfReportAcme', ['data'=>$data]);

        //return $pdf->stream('PDFReportAcme.pdf');

        $pdf->stream('PDFReportAcme.pdf');
        return response($pdf->output(), 200)
        ->header('Content-Type', 'application/pdf')
        ->header('Content-Disposition', 'inline; filename="informe.pdf"');

    }
}
