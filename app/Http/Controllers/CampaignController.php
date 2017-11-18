<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

use App\Respondent;

class CampaignController extends BaseController
{
	use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

	public function calculator() {
		return view('campaign.calculator');
	}

	public function calculatorStore(Request $request, Respondent $respondent) {

		$this->validate($request, [
			'name' => 'required',
			'email' => 'required|email',
			'age' => 'required|integer|min:0|max:150',
			'height' => 'required|integer|min:0|max:300',
			'weight' => 'required|integer|min:0|max:600',
			'gender' => 'required',
			'activity_option' => 'required',
			]);


		if ($request->gender == 'male') {
			// Determine male activity factor
			switch ($request->activity_option) {
				case "1":
				$activity_factor = 1.2;
				break;
				case "2":
				$activity_factor = 1.3;
				break;
				case "3":
				$activity_factor = 1.4;
				break;
				case "4":
				$activity_factor = 1.5;
				break;
				case "5":
				case "6":
				$activity_factor = 1.6;
				break;
				case "7":
				$activity_factor = 1.8;
				break;
				default:
				$activity_factor = 1.8;
			}

			$estimated_kcal = round((66.47 + (13.75 * ($request->weight)) + (5 * ($request->height)) - (6.76 * ($request->age))) * $activity_factor);
			$target_kcal = $estimated_kcal - 400;
		}
		elseif ($request->gender == 'female') {
			// Determine female activity factor
			switch ($request->activity_option) {
				case "1":
				$activity_factor = 1.2;
				break;
				case "2":
				$activity_factor = 1.3;
				break;
				case "3":
				$activity_factor = 1.4;
				break;
				case "4":
				$activity_factor = 1.5;
				break;
				case "5":
				$activity_factor = 1.6;
				break;
				case "6":
				$activity_factor = 1.8;
				break;
				case "7":
				$activity_factor = 2;
				break;
				default:
				$activity_factor = 2;
			}

			$estimated_kcal = round((655.1 + (9.56 * ($request->weight)) + (1.85 * ($request->height)) - (4.68 * ($request->age))) * $activity_factor);
			$target_kcal = $estimated_kcal - 400;
		}
		else {
			return redirect()->route('campaign.calculator')->withErrors(['unknown_gender'=>'Oops! Something went wrong. Please try again.']);
		}

		$respondent->fill($request->all());
		$respondent->activity_factor = $activity_factor;
		$respondent->estimated_kcal = $estimated_kcal;
		$respondent->target_kcal = $target_kcal;
		$respondent->save();

		$encoded_respondent_id = base64_encode($respondent->id);
		return redirect()->route('campaign.calculator.results',[$encoded_respondent_id]);
		
	}

	public function calculatorResults($encoded_respondent_id) {
		$respondent_id = base64_decode($encoded_respondent_id);
		$respondent = Respondent::find($respondent_id);
		return view('campaign.results',compact('respondent'));
	}
}
