<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\TotallywickedController;
use Illuminate\Http\Request;
use App\Models;
use Lang;
use DateTime;
use Carbon\Carbon;
date_default_timezone_set('Asia/Kolkata'); 

class TotallywickedController{
  	public function __construct(){

    }
    public function index(){
        try{
            $url = "https://rickandmortyapi.com/api/character";
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $headers = array(
               "Accept: application/json",
            );
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            $resp = curl_exec($curl);
            curl_close($curl);
            $r = json_decode($resp, true);
            $data = $r['results'];
            // $getName=$this->getEpisode($value['id']);
    
            return view('index')->with('data',$data);
        }catch(Exception $e){
            report($e);
            return false;
        }
    }
    public function getSingleCharacter($id){
        try{
            $url = "https://rickandmortyapi.com/api/character/".$id."";
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $headers = array(
               "Accept: application/json",
            );
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            $resp = curl_exec($curl);
            curl_close($curl);
            $single = json_decode($resp, true);
            return $single;
        }catch(Exception $e){
            report($e);
            return false;
        }
    }

    public function getEpisode($id){
        try{
            $url = "https://rickandmortyapi.com/api/episode/".$id."";
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $headers = array(
               "Accept: application/json",
            );
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            $resp = curl_exec($curl);
            curl_close($curl);
            $single = json_decode($resp, true);
            $singleChar =$single['id'];
            $image = self::getSingleCharacter($singleChar);
            return $image;
            // print_r($image);die();
           // return $this->getSingleCharacter($uri);
            //print_r($image);die();
            // return view('episode')->with(['details'=>$single,'image'=>$image]);
        }catch(Exception $e){
            report($e);
            return false;
        }
    }
    public function getEpisodeAll($id){
        try{
            $url = "https://rickandmortyapi.com/api/episode/".$id."";
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $headers = array(
               "Accept: application/json",
            );
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            $resp = curl_exec($curl);
            curl_close($curl);
            $single = json_decode($resp, true);
            $singleChar =$single['id'];
            $image = self::getSingleCharacter($singleChar);
            return view('episode')->with(['details'=>$single,'image'=>$image]);
        }catch(Exception $e){
            report($e);
            return false;
        }
    }
    public function getcharacterName($id){
        try{
            $names = self::getSingleCharacter($id);
            return view('character')->with('details',$names);
        }catch(Exception $e){
            report($e);
            return false;
        } 
    }
    public function getLocation($id){
        try{
            $url = "https://rickandmortyapi.com/api/location/".$id."";
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $headers = array(
               "Accept: application/json",
            );
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            $resp = curl_exec($curl);
            curl_close($curl);
            $single = json_decode($resp, true);
            $singleChar =$single['id'];
            $image = self::getSingleCharacter($singleChar);
            return view('location')->with(['details'=>$single,'image'=>$image]);
        }catch(Exception $e){
            report($e);
            return false;
        }
    }    
}    