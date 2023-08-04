<?php
use App\Factory;
use App\FactoryInspectionSafety;
use App\FactoryInspectionImpact;
use App\FactoryLabourInspectionLaw;
use App\FactoryInspectionInforms;
use App\ShopInspectionSafety;
use App\ShopInspectionInform;
use App\ShopLabourInspectionLaw;
use App\OtherShopName;
use App\Worker;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
	if(Auth::guard('')->check()){
            return redirect()->route('dashboard');
        }
        
    return view('auth.login');
});
Auth::routes();
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('registertest','Auth\RegisterController@create');
Route::group(['middleware'=>['auth','roles']],function (){
Route::get('/region','RegionController@index');
Route::post('/region','RegionController@create');
Route::get('/district','DistrictController@index');
Route::post('/district','DistrictController@create');
Route::get('/township','TownshipController@index');
Route::get('/townshiplist','TownshipController@show');
Route::post('/township','TownshipController@create');
Route::get('/townshipname','TownshipController@searchname')->name('townshipname');
Route::get('/industrialzone','IndustrialzoneController@index');
Route::post('/industrialzone','IndustrialzoneController@create');
Route::get('/dashboard',['as'=>'dashboard','uses'=>'DashboardController@index']);
Route::get('/changePassword','DashboardController@showChangePasswordForm');
Route::post('/changePassword','DashboardController@changePassword')->name('changePassword');
Route::get('/FactoryInspection','FactoryLeaveInspectionController@index');
Route::get('/FactoryInspections','FactoryLeaveInspectionController@factoryInspection');
Route::post('/autocompletefactoryinspection','FactoryLeaveInspectionController@search')->name('autocomplete.fetch');
Route::get('/autocompletefactorydata','FactoryLeaveInspectionController@data')->name('autocomplete.data');
Route::get('/1951factoryact','FactoryLeaveInspectionController@FactoryAct1951');
//
// Route::get('/1951Labaourandholiday','FactoryLeaveInspectionController@LabourAholiday1951');
// Route::post('/searchcheckid','Factory_leaveController@search')->name('autocomplete.labourdata');
// Route::get('/getcheckid','Factory_leaveController@data')->name('autocomplete.checkdatadata');
//
// Route::get('/2016wage','FactoryLeaveInspectionController@Wage2016');
//for factory labour inspection law
Route::resource('/LabourInspectionLaw','FactoryLabourInspectionLawController');
//for shop labour inspection law
Route::resource('/ShopLabourInspectionLaw','ShopLabourInspectionLawController');

///search data factories names
Route::post('/FactoySearch','FactoryController@searchdata')->name('autocomplete.searchdata');
//end
///search data shop names
Route::post('/Shopsearch','ShopController@searchdata')->name('autocomplete.shopsearchdata');
//end
/*** for Factory Inspections ****/
Route::get('/logout', function()
	{
		Auth::logout();
	
		return Redirect::to('/');
	});
Route::resource('/factories','FactoryController');
Route::resource('/shops','ShopController');
/** 
 * shop information download file
 */
Route::get('Shop-Downlaod-file/{id}','ShopController@download')->name('shops.download');
/**
 * end 
 */

 /** 
 * factory information download file
 */
Route::get('Factory-Downlaod-file/{id}','FactoryController@download')->name('factories.download');
/**
 * end 
 */

//close Factory 
Route::get('/CloseFactory/{id}','FactoryController@CloseFactory')->name('Close.Factory');
Route::post('/CloseFactory','FactoryController@CloseFactorySave')->name('Close.Factory');
Route::get('/CloseFactoryList','FactoryController@CloseFactoryList')->name('closefactory.list');
//close shop 
Route::get('/CloseShop/{id}','ShopController@CloseShop')->name('Close.Shop');
Route::post('/CloseShop','ShopController@CloseShopSave')->name('Close.Shop');
Route::get('/CloseShopList','ShopController@CloseShopList')->name('closeshop.list');
//
Route::resource('/FactoryInspection','FactoryInspectionInformsController');
Route::resource('/FactoryLeave','Factory_leaveController');
Route::resource('/FactoryInspectionWage','FactoryInspectionWageController');
Route::resource('/FactoryInspectionAct','FactoryInspectionActController');
Route::resource('/FactoryInspectionSafety','FactoryInspectionSafetyController');
Route::resource('/FactoryInspectionImpact','FactoryInspectionImpactController');
Route::resource('/TempFactory','TempFactoryController');
Route::get('/Tempoaryfactoryregister','TempFactoryController@index');
Route::get('/Tempoaryshopregister','TempShopController@index');
// unfinished works 
Route::get('/UnsuccessfullyWork','UnFinishedWorkController@index');
//unfinished work factory
Route::get('/factory/{id}','TempFactoryController@index');
//unfinished work shop
Route::get('/shop/{id}','TempShopController@index');
//unfinished work factory inspection impact
Route::get('/TempFactoryInspectionImpact/{id}','TempFactoryInspectionImpactController@index');
//unfinished work factory inspection information
Route::get('/TempFactoryInspectionInformation/{id}','TempFactoryInspectionInformController@index');
//unfinished work factory inspection safety 
Route::get('/TempFactoryInspectionSafety/{id}','TempFactoryInspectionSafetyController@index');
//unfinished work factory inspection wage
// Route::get('/TempFactoryInspectionWage/{id}','TempFactoryInspectionWageController@index');
//unfinished work factory inspection leave
// Route::get('/TempFactoryInspectionLeave/{id}','TempFactoryInspectionLeaveController@index');
//unfinsihed work factory inspection act
// Route::get('/TempFactoryInspectionAct/{id}','TempFactoryInspectionActController@index');
//unfinished shop inspection inform
Route::get('/TempShopInspectionInform/{id}','TempShopInspectionInformController@index');
//unfinished shop inspection Leave 1951
Route::get('/TempShopInspectionLeave/{id}','TempShopInspectionLeaveController@index');
Route::get('/leave',function(){
	return view('inspection.factoryleave');
});
Route::get('/impact',function(){
	return view('pdftemplate.inspectionImpact');
});
// NoticeLetter
Route::get('/notices','NoticeController@index');
// Route::post('/FactoryInspection',function(){
// 	return "HELLO";
// });
Route::get('/factoryregister',function(){
	return view('adminpanel.factoryregister');
});
//location region for factory
Route::get('/searchregionlocation','FactoryController@locationRegion')->name('locationregion.fetch');
Route::get('/searchtownshiplocation','FactoryController@locationTownship')->name('locationtownship.fetch');
Route::get('/searchtownshipZone','FactoryController@locationZone')->name('locationZone.fetch');
//for worktype 
Route::get('/WorkTypeSection','FactoryController@WorkTypeSection')->name('WorkTypeSection.fetch');
Route::get('/WorkTypeGroup','FactoryController@WorkTypeGroup')->name('WorkTypeGroup.fetch');
Route::get('/WorkTypeClass','FactoryController@WorkTypeClass')->name('WorkTypeClass.fetch');
//end
//choose affected body part 
Route::get('/PainPartSection','FactoryController@PainPartSection')->name('PainPartSection.fetch');
Route::get('/PainCaseSection','FactoryController@PainCaseSection')->name('PainCaseSection.fetch');
//end
Route::get('/factorysafteyinspection',function(){
	return view('inspection.FactorySafteyInspection');
});
Route::get('/shopregister',function(){
	return view('adminpanel.shopregister');
});
Route::get('/shopleaveinspection',function(){
	return view('inspection.ShopLeaveInspection');
});
/**factoryInspection Lists*/
	Route::get('FactoryInspectionLists','FactoryInspectionListController@lists');
	Route::get('Edit_factorysafteyinspection/{id}','FactoryInspectionSafetyController@edit');
	Route::post('Edit_factorysafteyinspection/{id}','FactoryInspectionSafetyController@update');
	Route::get('View_factorysafteyinspection/{id}','FactoryInspectionSafetyController@show');
	Route::get('Edit_Factory_LabourInspectionLaw/{id}','FactoryLabourInspectionLawController@editLabourLawInspection');
	Route::post('Edit_Factory_LabourInspectionLaw/{id}','FactoryLabourInspectionLawController@update');
	Route::get('View_Factory_LabourInspectionLaw/{id}','FactoryLabourInspectionLawController@show');
/** End */

/** shop Inspection Lists */
	Route::get('ShopInspectionLists','ShopInspectionListController@lists');
	Route::get('Edit_Shopsafteyinspection/{id}','ShopInspectionSafetyController@editInspection');
	Route::post('Edit_Shopsafteyinspection/{id}','ShopInspectionSafetyController@update');
	Route::get('View_Shopsafteyinspection/{id}','ShopInspectionSafetyController@show');
	Route::get('Edit_Shop_LabourInspectionLaw/{id}','ShopLabourInspectionLawController@editLabourLawInspection');
	Route::post('Edit_Shop_LabourInspectionLaw/{id}','ShopLabourInspectionLawController@update');
	Route::get('View_Shop_LabourInspectionLaw/{id}','ShopLabourInspectionLawController@show');
/** End */
//inspection impact in work
Route::get('/impactworkerinform/{id}/{factoryid}/{Type}','FactoryInspectionImpactController@create');
Route::get('/impactworkerinform/{id}','FactoryInspectionImpactController@edit');
//update impact inspection in work 
Route::post('/impactworkerinform/{id}','FactoryInspectionImpactController@update');
//impact inspection ---- instruction 
Route::get('/CreateImpactInstruction/{id}/{factoryid}/{Type}','ImpactInstructionController@create');
Route::post('/InstructionImpactSave','ImpactInstructionController@store');
//Impact Instructin lists
Route::get('ImpactInstructionList','ImpactInstructionController@InstructionLists')->name('impactinstruciton.list');
Route::get('impactDownloadFile/{id}','ImpactInstructionController@downloadfile')->name('impactDownloadFile');
//Edit Impact Instruction 
Route::get('EditImpactInstruction/{id}','ImpactInstructionController@EditInstruction')->name('EditImpactInstruction');
Route::post('Edit_ImpactInstruction_Save/{id}','ImpactInstructionController@EditInstructionSave')->name('Edit-ImpactInstruction-Save');
//end
Route::get('/shop_information_add', 'ShopInspectionController@shop_information_add');
Route::post('/shop_information_store', 'ShopInspectionController@shop_information_store')->name('shop_inspection.store');
Route::post('/shopname',['as'=>'shopnamesearch','uses'=>'ShopInspectionController@autocompletefill']);
Route::get('/autocompleteshopdata','ShopInspectionController@data')->name('autocompletedata');
Route::resource('/ShopSafteyInspection','ShopInspectionSafetyController');
// Route::get('/shop2016Law',function(){
// 	return view('ShopInspection.Shop2016ActLaw');
// });
Route::resource('/ShopInspection2016Act','ShopInspectionActController');
// Route::get('/shop1951LeaveLaw',function(){
// 	return view('ShopInspection.Shop1951Leave');
// });
//for to store ShopInspection2016Act
Route::resource('/ShopInspection1951LeaveLaw','ShopInspectionLeaveController');
//
// Route::get('1951factoryact',function(){
// 	return view('inspection.1951factoryact');
// });
Route::get('1951labourholidayact',function(){
	return view('inspection.1951labourholiday');
});
Route::get('2016wageact',function(){
	return view('inspection.2016wage');
});
Route::get('factorysafteyact',function(){
	return view('inspection.FactorySafteyInspection');
});
Route::get('caselist',['as'=>'caselist','uses'=>'InternalProcessController@index']);
Route::get('casenewinspectiontype','InternalProcessController@createtype');
Route::get('newcaseinspection/{id}',['as'=>'newcaseinspection','uses'=>'InternalProcessController@create']);
Route::get('casenewinspection/{cid}/{id}',['as'=>'newcaseinspection','uses'=>'InternalProcessController@caseopenurl']);
Route::post('casenewinspection',['as'=>'newcaseinspection','uses'=>'InternalProcessController@caseopen']);
//to generate pdf
Route::get('generate-pdf','FactoryInspectionController@generatePDF');
Route::get('inspectioncase/{id}','InternalProcessController@createpdf');
Route::post('caseopen','InternalProcessController@createcase');
Route::get('createinstruction/{id}/{factorytype}','InternalProcessController@createinstruction');
/* For Detail Case **/
Route::get('casedetail/{id}','InternalProcessController@detailcase');
Route::get('createreport/{id}/{factorytype}','InternalProcessController@report');
Route::post('createreport/{id}','InternalProcessController@reportdetail');
//Submission Report
Route::get('submissionReport','InternalProcessController@submissionreport');

//Case close 
Route::get('CloseCase/{id}','InternalProcessController@CaseClose');
/****report detail for leave,factoryact and wage***/
Route::get('inspectionform/{id}','InternalProcessController@reportact');
/**To Create Instruction **/
Route::get('createinstruction','InternalProcessController@createinstruction');
Route::post('createinstructionsave','InternalProcessController@saveinstruction');
/**End create Instruction **/
/** for auto complete search **/
Route::post('/autocompleteinstruction','InternalProcessController@searchfact')->name('autocompleteinstruction');
Route::get('/autocompleteinstructiondata','InternalProcessController@data')->name('autocompleteinstructiondata');
Route::post('/instructionupdate','InternalProcessController@update');
Route::get('/generateinstructionpdf/{id}','InternalProcessController@generatepdf');
/** end of auto complete search **/
/** for auto inspection filter **/
Route::get('/autocompleteinspectiondata','InternalProcessController@inspectionfilter')->name('autocompleteinspectiondata');
/** to view instruction detail **/
Route::get('/instructiondetail/{id}','InternalProcessController@detailinstruction');
Route::get('/instructiondestory/{id}',['as'=>'instructiondestroy','uses'=>'InternalProcessController@destroyinstruction']);
//for work type 
Route::resource('/economicsection','EconomicSectionController');
Route::resource('/economicdivision','EconomicDivisionController');
Route::resource('/economicgroup','EconomicGroupController');
Route::resource('/economicclass','EconomicClassController');

/**Affected Information */
// Route::get('/AffectedInformation','AffectedInformationController@index')->name('affectedInformation.AffectedInformation');
// Route::resource('/affectedinform','AffectedInformationController');
/****new Affected information route*/
Route::resource('/AffectedIndex','AffectedInformationController');
 /** To view Instruction view list **/
 Route::get('/instructionlist','InternalProcessController@instructionlist');
 //pdf generate inspection 
Route::get('/inspectionpdf/{id}','InspectionPdfController@generatepdf');
//for shop pdf
Route::get('/inspectionShoppdf/{id}','InspectionPdfController@ShopInspectionPdf');

/******** Prosecuted route sai
 * ******* */
//Route::resource('/prosecuted','ProsecutedController');
Route::resource('/Factoryprosecuted','FactoryProsecutedController');
Route::post('/autocompleteprosecuted','FactoryLeaveInspectionController@Prosecutedsearch')->name('prosecutedautocomplete.prosecutedfetch');
Route::get('/autocompleteprosecuteddata','FactoryLeaveInspectionController@Prosecuteddata')->name('prosecutedautocomplete.prosecuteddata'); 
/** For Seminar **/
 Route::get('/createseminar','SeminarController@index')->name('create.seminar');
 Route::post('/createseminar','SeminarController@create');
 Route::get('/seminarlist','SeminarController@show');
 Route::get('/seminardetail/{id}','SeminarController@detail');
 Route::get('seminaredit/{id}','SeminarController@detail');
 Route::post('seminaredit/{id}','SeminarController@edit');
 Route::get('/seminardestroy/{id}',['as'=>'seminardestroy','uses'=>'SeminarController@destroy']);
 /**for seminar search **/
 Route::get('/factorysearchdata',['as'=>'factorysearchdata','uses'=>'SeminarController@serachfactoryname']);
 Route::get('/autocompletename',['as'=>'autocompletename','uses'=>'SeminarController@factorydata']);

//for permission overtime 
Route::resource('/PermissionOtFactory','PermissionOtFactoryController');
 //
Route::get('otpermissionreport','OTReportController@index');

Route::get('download/{id}',['as'=>'downloadfile','uses'=>'InternalProcessController@downloadfile']);
//for report all information //
//Report all
Route::get('ReportAll','ReportController@ReportAll');

/**
 * report pdf 
 */
Route::get('Report-Pdf/{id}/{township_id}/{from}/{to}','ReportPdfController@reportPdf');
 /**
  * 
  */
// Route::get('seminarreport','ReportController@seminar');
Route::post('seminarreportdata','ReportController@seminardata')->name('seminarreportdata');
//Approve ot permission
Route::get('ApproveOtPermission/{id}','OTReportController@ApproveOtPermission');
Route::get('inspectiondata','InternalProcessController@inspectiondata')->name('inspectiondata');
Route::get('factorycase/{id}','InternalProcessController@caseindex');

});

/**
 * user logs 
 * 
 */
Route::get('User-activity-logs','UserLogController@lists')->name('users.log');
/**
 * end
 */


/****
 * pdf UI route
//  */	
// Route::get('/pdfimpact',function(){
// 	$factory_impact= FactoryInspectionImpact::where('id',22)->first();
//  	return view('pdftemplate.inspectionImpact',compact('factory_impact'));
//  });

//  Route::get('/shopsafe',function(){
// 	// dd($shop_safety);
// 	$shopinform = new ShopInspectionInform;
    
// 	$shop_safety= ShopInspectionSafety::where('id',3)->first();
// 	$shopinform = ShopInspectionInform::where('id',54)->first();
// 	return view('pdftemplate.ShopInspectionSafety',compact('shop_safety','shopinform'));
//  });
   Route::get('/shoplaw',function(){
  	$shopinform = new ShopInspectionInform;
  	$shop_labourlaw = ShopLabourInspectionLaw::where('id',9)->first();
  	$shopinform = ShopInspectionInform::where('id',67)->first();
  	$shopname = new OtherShopName;
  	$shopname = OtherShopName::where('shop_inform_id',$shop_labourlaw->check_id)->first();
  	$shopworker = new Worker;
  	$shopworker = Worker::where('shop_inform_id',$shop_labourlaw->check_id)->first();
  	 return view('pdftemplate.ShopInspectionLabourLaw',compact('shop_labourlaw','shopinform','shopname','shopworker'));
 });

 























