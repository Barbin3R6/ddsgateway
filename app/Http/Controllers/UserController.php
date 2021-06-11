<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\Response;
use App\Traits\ApiResponser;
use DB;

Class UserController extends Controller {

    use ApiResponser;

    private $request;

    public function __construct(Request $request){

        $this->request = $request;

    }
 
    public function getUsers(){

        

    }


    /**
     * Return the list of users
     * @return Illuminate\Http\Response
     *     
     * */



    public function index(){
       


    }

    public function add(Request $request){
        




    }



    //don't forget to add timestamp for updated_at and created_at incase it gets error

    /**
     * Obtains and show one author
     * @return Illuminate\Http\Response
     */




    public function show($id){
        
       




    }

    public function update(Request $request, $id){
        




    }




    /**
    * Remove an Existing user
    * @return Illuminate\Http\Response
    */




    public function delete($id){

	




    }   

}