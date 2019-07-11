<?php

namespace App\Http\Controllers\Api\Internals;

use App\Http\Controllers\Controller;
use App\Models\Provincia;
use Illuminate\Http\Request;


class ProvinciaController extends Controller
{
    public function index(Request $request)
    {
        $search_term = $request->input('q');
        $page = $request->input('page');

        if ($search_term) {
            $results = Provincia::where('nombre', 'LIKE', '%' . $search_term . '%')->paginate(10);
        } else {
            $results = Provincia::paginate(10);
        }

        return $results;
    }

    public function show($id)
    {
        return Provincia::find($id);
    }
}