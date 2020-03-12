<?php

namespace App\Http\Controllers\Dev;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Rules\MediaPath;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DevController extends Controller
{
    /**
     * @param $table
     * @return mixed
     *
     * regex_resource
     * from: \"(.*)\",
     * to:   "$1" => \$this->$1,
     *
     *
     */

    public function getTableColumns($table)
    {
        return DB::getSchemaBuilder()->getColumnListing($table);

        // OR

        return Schema::getColumnListing($table);
    }

    /**
     * @param Request $request
     * @return array
     *
     */
    public function getkeys(Request $request)
    {
        return $request->keys();
    }



    public function getTest(Request $request)
    {
        return 'test';
    }


}
