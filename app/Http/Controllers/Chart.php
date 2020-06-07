<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use function GuzzleHttp\json_encode;

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
        $graphData = array();
        $user = Auth::user();

        if($user){
            $graphs = DB::table('graphs')->where('user_id', $user->id)->get();

            foreach($graphs as $graph){
                $nodeArray = DB::table('nodes')->where('graph_id', $graph->id)->get();

                $store = [
                    'keyword'=>$graph->keyword.'@'.$graph->url,
                    'id' =>$graph->id,
                    'nodes'=> count($nodeArray)
                ];

                array_push($graphData, json_encode($store));
            }
            return view('home', ['graphData'=> $graphData]);
        }

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
            $fixed = parse_url($url, PHP_URL_HOST);
            if($fixed){
                $url = $fixed;
            }
            $url = preg_replace('/^www./','' ,$url );

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

    public function destroy(Int $id)
    {
        $user = Auth::user();

        if ($user) {
            if ($id) {
                $graph = DB::table('graphs')->where('id', $id)->first();
                if ($graph && $user->id == $graph->user_id){
                    DB::table('graphs')->where('id', $id)->delete();
                }
                return redirect()->route('home');
            } else {
                return redirect()->route('home');
            }
        } else {
            return redirect()->route('/login');
        }
    }


    protected function gen_color($index, $bg){
        $bgColorArray = array(
            'rgba(141, 107, 148, 0.2)',
            'rgba(207, 92, 54, 0.2)',
            'rgba(153, 57, 85, 0.2)',
            'rgba(33, 160, 160, 0.2)',
            'rgba(58, 51, 53 0.2)',
            'rgba(195, 151, 151, 0.2)'
        );
        $colorArray = array(
            'rgba(141, 107, 148, 1)',
            'rgba(207, 92, 54, 1)',
            'rgba(153, 57, 85, 1)',
            'rgba(33, 160, 160, 1)',
            'rgba(58, 51, 53 1)',
            'rgba(195, 151, 151, 1)'
        );

        if($bg){
            return $bgColorArray[$index % count($bgColorArray)];
        } else{
            return $colorArray[$index % count($colorArray)];
        }
    }

    public function show(string $stringIds)
    {
        $ids = explode('+', $stringIds, 63);
        array_walk($ids, 'intval');
        $sendData = array();
        $labels = array();

        foreach($ids as $index=>$id){
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



            array_push($sendData, ['label'=>$lineLabel, 'data'=>$nodeFreq, 'fill'=>false, 'borderColor'=>$this->gen_color($index, false), "showLine"=>true] );

        }

        $datacollection = ['labels'=>$labels[0] ,'datasets'=>$sendData]; //'labels'=>$labels[0] ,
        //print_r(json_encode($datacollection));
        return view('graph', ['graph_data' => json_encode($datacollection)]);
    }
}
