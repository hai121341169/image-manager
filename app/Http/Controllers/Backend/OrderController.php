<?php
/**
 * Created by PhpStorm.
 * User: hailer
 * Date: 2018/12/15
 * Time: 12:13
 */

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Customer;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{
    public function index(){
        DB::enableQueryLog();
//        dd(get_defined_constants());
        echo '<pre>';
        Log::info('aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa');
        $result = Customer::chunk(1, function ($details){
            var_dump($details);
        });;
//        Log::info(app('db')->getQueryLog());
//        return $result;

//        dd(DB::table('customers')->first());
//        return app('db')->select("SELECT * FROM customers");
//        return '33323';
    }
}