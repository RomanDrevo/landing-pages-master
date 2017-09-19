<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public static function ajaxResult($isSuccess, $errors = [], $redirect = null)
    {
        $result = [
            'success' => $isSuccess
        ];
        if (count($errors)) {
            $result['errors'] = $errors;
        }
        if (!is_null($redirect)) {
            $result['redirect'] = $redirect;
        }
        return $result;
    }
}
