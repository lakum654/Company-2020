<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use PDF;
use App\Models\User;
  
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF()
    {
        $data = [
            'title' => 'Welcome to PDF Generate in Laravel 8',
            'date' => date('m/d/Y')
        ];
          
        $pdf = PDF::loadView('myPDF', $data);
    
        return $pdf->download('laravel8pdf.pdf');
    }

    public function usersPDF(){        
        $pdf = PDF::loadView('users');
        return $pdf->download('users.pdf');
    }
    public function employeePDF(){
        $pdf = PDF::loadView('employee');
        return $pdf->download('employees.pdf');
    }
}