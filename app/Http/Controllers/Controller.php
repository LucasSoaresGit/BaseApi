<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    private $headers = [];

    function response ($data, $code = 200) {        
        return response()->json($data, $code, $this->headers);
    }

    function index () {
        return $this->response('index');
    }

    function paginate() {
        return $this->response('paginate');
    }

    function create () {
        return $this->response('create');
    }

    function update () {
        return $this->response('update');
    }

    function delete () {
        return $this->response('delete');
    }

}
