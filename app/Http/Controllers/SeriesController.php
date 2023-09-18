<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Episode;
use App\Models\Season;
use App\Models\Series;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Psy\debug;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = Series::all();
        $series =  Series::query()->orderBy('nome')->get();
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
        $serie = Series::create($request->all());
        $seasons = [];
        for ($c = 1; $c <= $request->seasonsQty; $c++) {
            $seasons[] = [
                'series_id' => $serie->id,
                'number' => $c,
            ];
        }
        Season::insert($seasons);
        $episodes = [];
        foreach ($serie->seasons as $season) {
            for ($j = 1; $j <= $request->episodesPerSeasons; $j++){
                $episodes[] = [
                    'season_id' => $season->id,
                    'number' => $j,
                ];
            }
        }
        Episode::insert($episodes);

        $request->session()->flash('messagem.sucesso', "Série '{$serie->nome}' add com sucesso");
        return to_route('series.index');
    }

    public function destroy(Request $request)
    {
        $series = Series::find($request->id);
        Series::destroy($request->id);
        return to_route('series.index')->with('messagem.sucesso', "Série '{$series->nome}' removida com sucesso");
    }

    public function edit(Series $series)
    {
        return view('series.edit')->with('serie', $series);
    }

    public function update(Series $series, Request $request)
    {
        $series->fill($request->all());
        $series->save();
        return to_route('series.index')
            ->with('Menssagem.sucesso', "Series '{$series->nome}' atualizada com sucesso!");
    }
}
