<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use Illuminate\Support\Facades\Crypt;

use App\Agency;

use App\User;
use DB,Response;

use App\Model\Branch;

use Validator;
use App\Imports\AgencyImport;
use App\Exports\AgencyExport;

use Maatwebsite\Excel\Facades\Excel;

class AgencyController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        $data=Agency::with('User')->where('status',0)->get();


       // echo '<pre>'; print_r($data); die;
        return view('agency.list', compact('data'));

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        $user=User::get(['id', 'name']);
        $regions = DB::table("regions")->get();

        $branch=Branch::get(['id', 'name']);

        return view('agency.create',compact('user','branch','regions') );

    }



    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {
      //  echo '<pre>'; print_r($request->all()); die;

        $validator = Validator::make($request->all(), [

            'name' => 'required',

          //  'branch_name' => 'required',

            'agency_id' => 'required',

            'agency_manager' => 'required',

            'location' => 'required',

            'address' => 'required',
            'region_id'=>'required',
            'state'=>'required',
            'email'=>'required',
            'city_id'=>'required',
            'mobile_number'=>'required',

        ]);



        if ($validator->fails()) {



            return redirect()->back()->with('error', [$validator->errors()->all()])->withInput();

        } else {

        $Agency=Agency::create(

            ['name'=>$request->name,

            'agency_id'=>$request->agency_id,
            'agency_manager'=>$request->agency_manager,
            'location'=>$request->location,
            'address'=>$request->address,
            'region_id'=>$request->region_id,
            'state'=>$request->state,
            'email'=>$request->email,
            'city_id'=>$request->city_id,
            'mobile_number'=>$request->mobile_number,
            'agency_phone'=>$request->mobile_number,
            ]

        );

        if($Agency){

            return redirect('agency')->with('success', ['Agency created successfully.']);

        }

        else{

            return redirect()->back()->with('error', ['Agency creation unsuccessfully.']);

        }

        }

    }



    /**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function show($id)

    {

        // $data=Agency::where('id',Crypt::decrypt($id))->delete();
        $data=Agency::where('id',Crypt::decrypt($id))->update(['status'=>1]);

        if($data){

            return redirect('agency')->with('success', ['Agency deleted successfully.']);

        }

        else{

            return redirect()->back()->with('error', ['Agency deletion unsuccessfully.']);

        }

    }



    /**

     * Show the form for editing the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function edit($id)

    {

        $data = Agency::with('city.state.region')->find(Crypt::decrypt($id));

        $region = $data->city->state->region->id ?? '';

        $user=User::get(['id', 'name']);

        $regions = DB::table("regions")->get();

        $branch=Branch::get(['id', 'name']);

        return view('agency.edit', compact('data','user','branch','regions','region'));

    }



    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, $id)

    {

        $validator = Validator::make($request->all(), [

            'name' => 'required',

          //  'branch_name' => 'required',

            'agency_id' => 'required',

            'agency_manager' => 'required',

            'location' => 'required',

            'address' => 'required',
            'region_id'=>'required',
            'state'=>'required',
            'email'=>'required',
            'city_id'=>'required',
            'mobile_number'=>'required',

        ]);



        if ($validator->fails()) {



            return redirect()->back()->with('error', [$validator->errors()->all()])->withInput();

        } else {

        $agency=Agency::where('id',Crypt::decrypt($id))->update(

            ['name'=>$request->name,

          //  'branch_id'=>$request->branch_name,

            'agency_id'=>$request->agency_id,

            'agency_manager'=>$request->agency_manager,

            'location'=>$request->location,

            'address'=>$request->address,
            
            
            'region_id'=>$request->region_id,
            'state'=>$request->state,
            'email'=>$request->email,
            'city_id'=>$request->city_id,
            'mobile_number'=>$request->mobile_number,
            'agency_phone'=>$request->mobile_number,
            ]

        );

        if($agency){

            return redirect('agency')->with('success', ['Agency updated successfully.']);

        }

        else{

            return redirect()->back()->with('error', ['Agency updation unsuccessfully.']);

        }

        }

    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)

    {

        //

    }

    public function excelDownloadAgency(){

        ini_set('memory_limit', '-1');

        ini_set('max_execution_time', 3000);

        return Excel::download(new AgencyExport, 'Agency.xlsx');

    }


    //V Upload Page Show
    public function showAgencyImport()
    {
        return view('agency.upload');
    }


    //V Upload Excel Data
    public function agencyImport()
    {
     //  echo 'dfdsf'; die;AgencyImport
        Excel::import(new AgencyImport, request()->file('file'));

        return redirect()->back()->with('success', 'Excel file imported successfully.');
    }

    public function downloadAgencySample(){
      //  echo "jh"; die;
       $file= public_path(). "/download/agency_import.xlsx";
        $headers = array(
                  'Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                );
        return Response::download($file, 'agency_import.xlsx',$headers);
    }

}