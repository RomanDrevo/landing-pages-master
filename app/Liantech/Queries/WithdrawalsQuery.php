<?php

namespace App\Liantech\Queries;

use App\Models\Withdrawal;

/**
* Get all deposits Query
*/
class WithdrawalsQuery
{

	public static function get($field = 'id')
	{

        $q = \Request::has("query") ? \Request::get("query") : "";

        $field = \Request::has("field") ? \Request::get("field") : "id";

        $employee_id = ( \Request::has("employee_id") && is_numeric(\Request::get("employee_id")) ) ? \Request::get("employee_id") : "";

        return Withdrawal::with('employee', 'split')
            ->where(function($table) use ($employee_id){
                if(!empty($employee_id))
                    $table->where("employee_id", $employee_id);
            })
            ->where(function($table) use ($field, $q){
                $table->where($field, "LIKE", "%$q%");
            })
            ->orderBy("id", "desc")
            ->paginate(25);
            
	}
}