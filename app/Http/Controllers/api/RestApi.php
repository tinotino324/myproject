<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Author;

class RestApi extends Controller
{
    public function checking_api(Request $request)
    {
        $name = $request->post('name');
        echo "<pre>";print_r(Author::first());die;

        if($name == 'tino')
        {
            $response['status'] = 'success';
            $response['data']   = "";
        }
        else
        {
            $response['status'] = 'fail';
            $response['data']   = '';
        }

        return response()->json_encode($response);
    }
}
