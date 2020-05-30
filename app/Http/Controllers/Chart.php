<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class Chart extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function create()
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('/login');
        } else {
            return view('/new');
        }
    }

    public function insert(Request $request)
    {
        $user = Auth::user();

        if ($user) {
            $keyword = $request->input('keyword');
            $url = $request->input('url');

            if ($request->input()) {
                DB::insert('insert into graphs (user_id, keyword, url) values (?, ?, ?)', [$user->id, $keyword, $url]);
                return redirect()->route('home');
            } else {
                return redirect()->route('/new');
            }
        } else {
            return redirect()->route('/login');
        }
    }

    public function destroy()
    {
    }

    public function show(string $stringIds)
    {
        $ids = explode('+', $stringIds, 63);
        array_walk($ids, 'intval');
        $sendData = array();
        $labels = array();

        foreach($ids as $id){
            $graph = DB::table('graphs')->where('id', $id)->first();
            $nodeArray = DB::table('nodes')->where('graph_id', $id)->get();
            $nodesLabels = array();
            $nodeFreq = array();

            foreach ($nodeArray as $node) {
                $coords = ['x'=> $node->created_at, 'y'=>$node->frequency];
                array_push($nodesLabels, $node->created_at);
                array_push($nodeFreq, $coords);
            }
            $lineLabel = $graph->keyword.'@'.$graph->url;
            array_push($labels, $nodesLabels);
            array_push($sendData, ['label'=>$lineLabel, 'data'=>$nodeFreq]);
        }


        $datacollection = ['labels'=>$labels[0], 'datasets'=>$sendData];
        return view('graph', ['graph_data' => json_encode($datacollection)]);
    }
}
