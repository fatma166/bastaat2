<?php

namespace App\Interfaces\Api;

use Illuminate\Http\Request;

interface  CategoryInterface
{

    public function list_cats(Request $request) ;


}
