<?php namespace App\Http\Controllers;
use File;
class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$csv = file_get_contents('https://docs.google.com/spreadsheets/d/1a4wpAgCe1o3lY0KjY2K1bM-Sxr1IfOLqTXR_Wasp2hw/pub?output=csv');
		$csv_path =  storage_path().'/event_list.csv';
		File::put($csv_path,$csv);

		$csvObj = new \mnshankar\CSV\CSV();
		$arr =  $csvObj->fromFile($csv_path)->toArray();
		$data = array();
		
		$curtype="";
		$curdata = 0;
		foreach ($arr as $key => $row) {

			if($row['type']=="type")
			{
				if($curdata!=0)
				{
					$data[$curtype] = $curdata;
				}
				$curtype = $row['name'];
				$curdata = array('description'=>$row['description'],'events'=>array());
			}else if($row['type']=="event"){
				array_push($curdata['events'], $row);
			}
		}
		if($curdata!=0)
		{
			$data[$curtype] = $curdata;
		}
		
		//print_r($data);
		return view('pages.home',array('data'=>$data));
	}

	public function test1()
	{
		return view('pages.test');
	}

	public function contact()
	{
		$people = [
			"ADITYA VADGAONKAR"=>["9960195663"],
			"ABHI KOTHARI"=>["9930841847"],
			"ABHINAV THALE"=>["9987474630"],
			"AJINKYA CHAUDHARI"=>["9769155691"],
			"ASHNIK CHAUHAN"=>["9867980069"],
			"DIVYA SRINIVASAN"=>["8767885845"],
			"HIBA NARVEL"=>["9820805738"],
			"KINGSHUK GANGULY"=>["9987841345"],
			"SHRADDHA PAREKH"=>["9870984654"],
			"SHUBHANGI GUPTA"=>["9987476602"],
			"SWASTIKA LAMTURE"=>["9595955665"],
			"VAIBHAVI BHOIR"=>["9167632764"]];

		return view('pages.contact',array('people'=>$people));
	}

	public function pronites()
	{
		return view('pages.pronites');
	}

}
