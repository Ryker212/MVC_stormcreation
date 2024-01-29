<?php
class StormListController
{
    public function index(){
        $StormList_List = StormList::getAll();
        require_once('views/stormList/index_stormList.php');
    }
    public function insert(){

        $country_List = Country::getAll();
        $collection_List = Collection::getAll();
        require_once('views/stormList/insertStormList.php');
    }
    public function addStormList(){
        $stormName =$_GET['slName'];
        $stormNameEng =$_GET['slNameEng'];
        $stormNameMean =$_GET['slNameMe'];
        $substitueName =$_GET['slNameSub'];
        if($substitueName == " "){$substitueName = NULL;}
        $countryID =$_GET['c'];
        $collectionID =$_GET['co'];
        StormList::addStormList($stormName,$stormNameEng,$stormNameMean,$substitueName,$countryID,$collectionID); //Insert
        StormListController::index(); //callback
        
    }
    public function updateFrom(){
        
        $stormListID =$_GET['slID'];
        $stormList = StormList::get($stormListID);
        $country_List = Country::getAll();
        $collection_List = Collection::getAll();
        foreach($stormList as  $stormList);
        require_once('views/stormList/updateFromStormList.php');
    }
    public function update(){
        $stormListID =$_GET['slID'];
        $stormName =$_GET['slName'];
        $stormNameEng =$_GET['slNameEng'];
        $stormNameMean =$_GET['slNameMe'];
        $substitueName =$_GET['slNameSub'];
        if($substitueName == " "){
            $substitueName = NULL;}
        $countryID =$_GET['c'];
        $collectionID =$_GET['co'];
        StormList::update($stormListID,$stormName,$stormNameEng,$stormNameMean,$substitueName,$countryID,$collectionID); //Update
        StormListController::index();//callback
    }
    public function deleteConfirm(){
        
        $stormListID =$_GET['slID'];
        $stormList = StormList::get($stormListID);
        foreach($stormList as  $stormList);
        require_once('views/stormList/deleteConfirm.php');
    }
    public function delete(){
        
        $stormListID =$_GET['slID'];
        $stormList = StormList::delete($stormListID);//delete
        StormListController::index();//callback
    }

    public function check(){
        
        $stormList = StormList::check();//check ถูกใช้
        $stormList = StormList::nocheck();//check ไม่ถูกใช้
        StormListController::index();//callback
    }
    public function summary(){
        $StormList_List = StormList::getAll();
        require_once('views/stormList/summaryStormList.php');
    }
}   
?>