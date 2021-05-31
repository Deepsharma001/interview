<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $data = Company::with('Country','Users')->get();
        dd($data);
    }
    //Task 2

    TO Load Data with ajax we can use jquery, fetch and axios
    we can use formdata to transfer files to our server through xhr request

    1.First Make Validation if its pdf or not  { "file" => "required|mimes:pdf|max:10000"    }
    2.if its not pdf then return 422
    3.then check if word exits in it 
    we can use include('class.pdf2text.php');
    $a = new PDF2Text();
    $a->setFilename('filename.pdf'); 
    $a->decodePDF();
    $pdfText =  $a->output(); 

    //No Check if word "Proposal" exits
    strpos($pdfText, "Proposal")

    if its true then we can proceed further
    now check if db has pdf file with same name

    $pdfExits = PDF::where('name', '=', pdfName)->where('size' , pdfSize)->first();
if ($pdfExits === null) {
    PDF::create(['name'=> pdfname , 'size'=>size]);
}else{
    $pdfExits = PDF::where('name', '=', pdfName)->where('size' , pdfSize)->update(['name'=> pdfname , 'size'=>size]);
}
}
