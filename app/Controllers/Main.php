<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Bundesland;
use App\Models\Station;
use App\Models\Data;

class Main extends BaseController
{

    var $bundesland;
    var $station;
    var $data;
    public function __construct(){  

        $this->bundesland = new Bundesland();
        $this->station = new Station();
        $this->data = new Data();
    }

    public function index()
    {
        return view ('index');
    }
    public function bundesland()
    {

        $data["bundesland"] = $this->bundesland->orderby('name','asc')->findAll();

        echo view ("bundesland", $data); 
    }
    public function station($bundesland)
    {
        $data["station"] = $this->station->where('bundesland', $bundesland)->findAll();
        $data["bundesland"] = $this->bundesland->where('id', $bundesland)->findAll();
        echo view ('station', $data);
    }
    public function mereni($station)
    {
        $data["mereni"] = $this->data->where("STATIONS_ID", $station)->findAll();
        $data["stanice"] = $this->station->find($station);
        echo view ('mereni', $data);
    }
    public function info($bundesland)
    {
        $data["bundesland"] = $this->station->where("bundesland", $bundesland)->findAll();
        $data["stat"] = $this->bundesland->find($bundesland);
        return view ('info', $data);
    }

    public function statystanice($bundesland){
        $info = $this->bundesland->join("station", "bundesland.id = station.bundesland", "inner")->orderBy("place")->paginate(25);
        $pager = $this->bundesland->pager;
        $data["stat"] = $this->bundesland->find($bundesland);
        $data["pager"]= $pager;
        $data["statystanice"]= $info;
        echo view ("statystanice", $data);
    }
    public function mazani()
    {
        $data['stanice'] = $this->station->findAll();
        return view('mazani', $data);
    }

    public function smazatData()
    {
        $stanice = $this->request->getPost('station');
        $rok = $this->request->getPost('year');
        $mesic = $this->request->getPost('month');

        $od = "$rok-$mesic-01";
        $do = date('Y-m-d', strtotime("$od +1 month"));

        $this->data
            ->where('STATIONS_ID', $stanice)
            ->where('date >=', $od)
            ->where('date <', $do)
            ->delete();

        return redirect()->to(site_url('mazani'))
            ->with('success', 'Data byla smazána.');
    }



}
