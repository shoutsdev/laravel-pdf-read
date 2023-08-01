<?php

namespace App\Http\Controllers;

use Spatie\PdfToText\Pdf;

class PdfController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $text = Pdf::getText(public_path('sample-demo.pdf'));

        dd($text);
    }

}
