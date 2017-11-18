<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Respondent;
use Excel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $respondents = Respondent::all();
        return view('dashboard', compact('respondents'));
    }

    public function exportCsv()
    {
        Excel::create('respondents', function($excel) {
            $excel->sheet('respondents', function($sheet) {
            $sheet->prependRow(array( 'Name', 'Email', 'Age (yrs)', 'Height (cm)', 'Weight (kg)', 'Gender', 'Activity Factor', 'Estimated Kcal', 'Target Kcal' ));

            $respondents = Respondent::all();
            foreach ($respondents as $respondent){
                $sheet->appendRow(array( $respondent->name, $respondent->email, $respondent->age, $respondent->height, $respondent->weight, $respondent->gender, $respondent->activity_factor, $respondent->estimated_kcal, $respondent->target_kcal ));
            }
        });
        })->export('csv');
    }

    public function exportXls()
    {
        Excel::create('respondents', function($excel) {
            $excel->sheet('respondents', function($sheet) {
            $sheet->prependRow(array( 'Name', 'Email', 'Age (yrs)', 'Height (cm)', 'Weight (kg)', 'Gender', 'Activity Factor', 'Estimated Kcal', 'Target Kcal' ));

            $respondents = Respondent::all();
            foreach ($respondents as $respondent){
                $sheet->appendRow(array( $respondent->name, $respondent->email, $respondent->age, $respondent->height, $respondent->weight, $respondent->gender, $respondent->activity_factor, $respondent->estimated_kcal, $respondent->target_kcal ));
            }
        });
        })->export('xls');
    }
}
