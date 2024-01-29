<?php
class CollectionController
{
    public function index(){
        $collection_List = Collection::getAll();
        require_once('views/collection/index_collection.php');
    }
    public function insert(){

        require_once("views/collection/insertCollection.php");

    }
    public function addCollection(){
        $collection =$_GET['co'];
        Collection::addCollection($collection); //Insert
        CollectionController::index(); //call Collection->index
    }
    public function updateFrom(){
        $collection_ID =$_GET['coID'];
        $collection = Collection::get($collection_ID);
        $collection_List = Collection::getAll();
        foreach($collection as  $collection);
        
        require_once('views/collection/updateFromCollection.php');
    }
    public function update(){
        $collection_ID =$_GET['coID'];
        $collection  =$_GET['co'];
        Collection::updateCollection($collection_ID,$collection ); //update
        CollectionController::index();  //call Country->index
        
    }
    public function deleteConfirm(){
        $collection_ID =$_GET['coID'];
        $collection = Collection::get($collection_ID);
        foreach( $collection as  $collection);

        require_once('views/collection/deleteConfirm.php');
    }
    public function delete(){
        $collection_ID =$_GET['coID'];
        Collection::deleteCollection($collection_ID); //delete
        CollectionController::index();  //call Country->index
    }
}   
?>