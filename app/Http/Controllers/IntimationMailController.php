<?php



namespace App\Http\Controllers;



use App\Model\IntimationMail;

use App\Model\Products;

use App\Model\Branchable;

use App\User;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Crypt;

use App\Agency;

use Illuminate\Support\Facades\DB;

use Validator;

use App\Exports\BranchExport;

use Maatwebsite\Excel\Facades\Excel;



class IntimationMailController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        echo 'fsfd'; die;
        $data = IntimationMail::get();

        return view('intimation_mail.list', compact('data'));

    }


    public function create()

    {

        echo 'ravi'; die;
        $data = IntimationMail::get();

        return view('intimation_mail.list', compact('data'));

    }


}

