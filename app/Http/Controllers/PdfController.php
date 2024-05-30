<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function showPreview()
    {
        $data = [
            'title' => 'SURAT PENGANTAR',
            'date' => date('m/d/y')
        ];
        return view('RW.SuratPengantar.preview', $data);
    }

    public function showPDF()
    {
        // $data = [
        //     'title' => 'SURAT PENGANTAR',
        //     'date' => date('m/d/y')
        // ];
        // $pdf = Pdf::loadView('RW.SuratPengantar.filePDF', $data);
        // return $pdf->stream('SuratPengantar.pdf');

        return $this->showPreview();
    }

    public function downloadPDF()
    {
        $data = [
            'title' => 'SURAT PENGANTAR',
            'date' => date('m/d/y')
        ];
        $pdf = Pdf::loadView('RW.SuratPengantar.filePDF', $data);
        return $pdf->download('SuratPengantar.pdf');
    }
}
