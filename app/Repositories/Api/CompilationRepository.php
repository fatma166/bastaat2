<?php

namespace App\Repositories\Api;
use App\Models\Compilation;
use Illuminate\Http\Request;

class CompilationRepository implements CompilationInterface
{

    public function list(Request $request)
    {
        // TODO: Implement list_cats() method.
            $compilations = Compilation::where(['position'=>0,'status'=>1])->orderBy('priority','desc')->get();
            return $compilations;

    }


}
