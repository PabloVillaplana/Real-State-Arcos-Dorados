<?php

namespace App\Http\Controllers\Api\Internals;

use App\Http\Controllers\Controller;
use App\Models\Canton;
use Illuminate\Http\Request;


class CantonController extends Controller
{
    public function index(Request $request)
    {
        $search_term = $request->input('q');
        $form = collect($request->input('form'))->pluck('value', 'name');

        $options = Canton::query();

        // if no category has been selected, show no options
        if (!$form['provincia_codigo']) {
            return [];
        }

        // if a category has been selected, only show articles in that category
        if ($form['provincia_codigo']) {
            $options = $options->where('provincia_codigo', $form['provincia_codigo']);
        }

        if ($search_term) {
            $results = $options->where('nombre', 'LIKE', '%' . $search_term . '%')->paginate(10);
        } else {
            $results = $options->paginate(10);
        }

        return $results;
    }

    public function show($id)
    {
        return Canton::find($id);
    }
}
