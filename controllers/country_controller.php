<?php
class CountryController
{
    public function index(){
        $country_List = Country::getAll();
        require_once('views/country/index_country.php');
    }
    public function insert(){

        require_once("views/country/insertCountry.php");

    }
    public function addCountry(){
        $name =$_GET['cName'];
        Country::addCountry($name); //Insert
        CountryController::index(); //call Country->index
    }
    public function updateFrom(){
        $countryID =$_GET['cID'];
        $country = Country::get($countryID);
        $country_List = Country::getAll();
        foreach( $country as  $country);
        
        require_once('views/country/updateFromCountry.php');
    }
    public function update(){
        $countryID =$_GET['cID'];
        $cName =$_GET['cName'];
        Country::updateCountry($countryID,$cName); //update
        CountryController::index();  //call Country->index
        
    }
    public function deleteConfirm(){
        $countryID =$_GET['cID'];
        $country = Country::get($countryID);
        foreach( $country as  $country);
        {}
        require_once('views/country/deleteConfirm.php');
    }
    public function delete(){
        $countryID =$_GET['cID'];
        Country::deleteCountry($countryID); //delete
        CountryController::index();  //call Country->index
    }
}   
?>