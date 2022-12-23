<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        // return ['Punisher', 'Lost', 'Grey\'s Anatomy']; // Por debaixo dos panos o laravel retorna um JSON
        // return $request->get('id'); // Pega o id - busca o dado de qualquer lugar do nosso request, seja da query string ou mesmo de um campo enviado por post
        // return $request->query('id'); // Pega o id - IDEAL - código fique mais explícito, deixando claro de onde vamos buscar o dado
        // return $request->url(); // Pega a url
        // return $request->method(); // Pega o método GET
        // return $request->input(); // Pega o input que veio do formulário
        // return response('', 302, ['Location' => 'https://google.com']);
        // return redirect('https://google.com');


        // $series = DB::select('SELECT nome FROM series');
        // $series = Serie::all();
        $series = Serie::query()->orderBy('nome', 'asc')->get();

        // return view('series.index', ['series' => $series]); // Retorna para view series/index
        // return view('series.index', compact('series')); // Retorna para view series/index
        return view('series.index')->with('series', $series); // Retorna para view series/index
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $nomeSerie = $request->input('nome');
        $serie = new Serie();
        $serie->nome = $nomeSerie;
        $serie->save();

        //DB::insert('INSERT INTO series (nome) VALUES (?)', [$nomeSerie]);
        return redirect('/series');
    }
}
