<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Psy\debug;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series =  Serie::query()->orderBy('nome')->get();
        $messagemSucesso = session('messagem.sucesso');
        return view('series.index')->with('series', $series)->with('messagemSucesso', $messagemSucesso);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $serie = Serie::create($request->all());
        $request->session()->flash('messagem.sucesso', "Série '{$serie->nome}' add com sucesso");
        return to_route('series.index');
    }

    public function destroy(Request $request)
    {
        $series = Serie::find($request->id);
        Serie::destroy($request->id);
        return to_route('series.index')->with('messagem.sucesso', "Série '{$series->nome}' removida com sucesso");
    }
}
