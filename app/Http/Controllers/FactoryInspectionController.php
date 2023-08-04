<?php

namespace App\Http\Controllers;

use App\FactoryLeaveInspection;
use Illuminate\Http\Request;
use App\Factory;
use App\Document;
use DB;
use PDF;

class FactoryInspectionController extends Controller
{

   public function factoryInspection(){


        return view('inspection.factoryInspection');
    }
    public function search(Request $request){

        if($request->get('query'))
        {
              $query = $request->get('query');

              $data =  Factory::all();
              // dd($data);
              $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
              foreach($data as $row)
              {
               $output .= '
               <li><a href="#">'.$row->FactoryName.'</a></li>
               ';
              }
              $output .= '</ul>';
              echo $output;
         }
    }
    public function data(Request $request){
         $name = $request->name;
         $factory = Factory::where('FactoryName',$name)->first();
         // return Response::json(array('success'=>true,'result'=>$result));
         return $factory;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        return view ('inspection.Factory3LawInspection');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FactoryLeaveInspection  $factoryLeaveInspection
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FactoryLeaveInspection  $factoryLeaveInspection
     * @return \Illuminate\Http\Response
     */
    public function edit(FactoryLeaveInspection $factoryLeaveInspection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FactoryLeaveInspection  $factoryLeaveInspection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FactoryLeaveInspection $factoryLeaveInspection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FactoryLeaveInspection  $factoryLeaveInspection
     * @return \Illuminate\Http\Response
     */
    public function destroy(FactoryLeaveInspection $factoryLeaveInspection)
    {
        //
    }

    /****Generate the PDF ****/
    public function generatePDF(){
        $data = ['title' => 'အလုပ်ရုံနှင့်အလုပ်သမားဥပဒေစစ်ဆေးရေးဦးစီးဌာန
                        ၁၉၅၁ ခုနှစ်၊ အလုပ်ရုံများ အက်ဥပဒေ အရ
                လုပ်ငန်းခွင်ဘေးအန္တရာယ် ကင်းရှင်းရေးနှင့် ကျန်းမာရေး စစ်ဆေးချက်ပုံစံ'];
     // $pdf = PDF::loadView('mypdf', $data);
     // $pdfname="test.pdf";
     // $documentid='I000129';
     /* Document::create([
        'documentId'=>$documentid,
        'documentfilename'=>$pdfname,
        'FactoryID'=>1,
        'check_id'=>1,
        'create_date'=>'2019-08-23',
        'documenttitle'=>'Test',
        'FromDepartment'=>'Internal',
        'entrydate'=>'2019-08-28',
        'creator'=>1,
        'placeid'=>1
      ]);
  ;*/
        $view = \View::make('mypdf',$data);
        $html_content = $view->render();
        // Set title in the PDF
        $pdfname='userlist.pdf';
        PDF::SetTitle("List of users");
        PDF::AddPage();
        PDF::writeHTML($html_content, true, false, true, false, '');
        // userlist is the name of the PDF downloading
        PDF::Output(__DIR__ . '/invoices/'.$pdfname,'F');    
    
     //  return $pdf->download($pdfname);
                return view('adminpanel.index');

    }
    
}
