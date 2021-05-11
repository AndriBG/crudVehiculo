<?php namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\VehiculoModel;

class Vehiculo extends BaseController
{
    private $vehiculoModel;

    public function __construct(){
        $this->vehiculoModel = new VehiculoModel();
    }

	public function index()
	{
        $vehiculos = $this->vehiculoModel->findAll();
        $data = array("list"=>$vehiculos);
		return view('header').view('Lista',$data).view('footer');
	}

    public function form()
    {
        return view("header").view("form").view("footer");
    }

    public function guardar()
    {
        $request = \Config\Services::request();

        $data = array(
            "modelo"=> $request->getPost("modelo"),
            "marca"=> $request->getPost("marca"),
            "precio"=> $request->getPost("precio")
        );

        if( $this->vehiculoModel->insert($data)===false){
            $this->vehiculoModel->errors();
        }
        // $vehiculos = $this->vehiculoModel->findAll();
        // $data = array("list"=>$vehiculos);

        return redirect()->to(base_url("/"));
    }

    public function editar()
    {
		$request = \Config\Services::request();

		if($request->getPostGet("id")){
			$id=$request->getPostGet("id");
		}else{
			$id=$request->uri->getSegment(3);
            var_dump($id);
            exit();
		}

		$vehiculo = $this->vehiculoModel->find($id);
		$data=array('data'=>$vehiculo);

		return view("header").view("editar",$data).view("footer");
    }

    public function actualizar(){
		$request = \Config\Services::request();

		$id=$request->getPost("id");

		$fact = [
			"modelo" => $request->getPost("modelo"),
			"marca" => $request->getPost("marca"),
            "precio" => $request->getPost("precio")
		];

		if($this->vehiculoModel->update($id,$fact)===false){
			$this->vehiculoModel->errors();
		}

		// $users = $userModel->asObject()->paginate(6, "users"); // Solo devuelve 6 registros de la bd
		// $paginator = $userModel->pager; // 
		// $paginator->setPath("plantilla/about");
		// $data=array('data'=>$users,"pager"=>$paginator);

        // $vehiculo = $this->vehiculoModel->find($id);
		// $data=array('data'=>$vehiculo);
		return redirect()->to(base_url("/"));
	}

    public function eliminar(){
		$request = \Config\Services::request();

		$id=$request->getGet("id");

		$this->vehiculoModel->delete($id);

		// $users = $userModel->asObject()->paginate(6, "users");
		// $paginator = $userModel->pager; // 
		// $paginator->setPath("plantilla/about");
		// $data=array('data'=>$users,"pager"=>$paginator);

        // $vehiculos = $this->vehiculoModel->findAll();
		// $data=array('data'=>$vehiculos);
		return redirect()->to(base_url("/"));
	}

}
