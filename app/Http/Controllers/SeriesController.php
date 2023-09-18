<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Psy\debug;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = Serie::all();
        $series =  Serie::query()->orderBy('nome')->get();
        $messagemSucesso = session('messagem.sucesso');
        return view('series.index')->with('series', $series)->with('messagemSucesso', $messagemSucesso);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(SeriesFormRequest $request)
    {
        $request->validate([
            'nome'=> ['required', 'min:3']
        ]);
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

    public function edit(Serie $series)
    {
        return view('series.edit')->with('serie', $series);
    }

    public function update(Serie $series, Request $request)
    {
        $series->fill($request->all());
        $series->save();
        return to_route('series.index')
            ->with('Menssagem.sucesso', "Serie '{$series->nome}' atualizada com sucesso!");
    }
}
