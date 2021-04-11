<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class ConfigControll extends Controller
{
    public function index(Request $request){
        //usando com a rota conf
        $url=$request->url();
        $method=$request->method();
        $dados=$request->input('idade');
        $data=$request->all();
        $dada=$request->query('nome','Visitante');

        echo "Meu Nome e ".$data['name'].'<br>';
        echo "Meu idade: ".$dados.'<br>';
        echo "status".$dada.'<br>';
        print_r($data);
        echo "<br>";
        echo "URL: ",$url;
        echo '<br>';
        echo "Metodo: ".$method;
        return view('config');
    }
    public function info(){
        echo "info";
    }
    public function permissoes(){
        echo "permissoes";
    }
}
