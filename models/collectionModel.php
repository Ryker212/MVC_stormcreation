<?php 
class Collection{
    public $collection_ID,$collection;
    public function __construct($collection_ID,$collection)
        {
            $this->collection_ID = $collection_ID;
            $this->collection = $collection;
        }


    public static function getAll()
        {
            $CollectionList = [];
            require("connect_db.php");
            $sql = "SELECT co.collectionID as CoID ,co.collection as co FROM collection as co ";
            $conn->select_db("db23_120");
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc())
            {
                $CoID = $row["CoID"];
                $co = $row["co"];
                $CollectionList[] = new Collection($CoID,$co);
            }
            require("close_db.php");
            return $CollectionList;
        }
    public static function addCollection($collection)
        {
            require("connect_db.php");
            $sql = "insert into collection(collection)
            values('$collection')";
            $conn->select_db("db23_120");
            $result = $conn->query($sql);
            
            require("close_db.php");
            return "Insert success $result rows";
        }
    public static function updateCollection($collection_ID,$collection)
        {
            require("connect_db.php");
            $sql = "UPDATE collection SET collectionID = '$collection_ID',collection = '$collection'
            WHERE collectionID= '$collection_ID'";
            $conn->select_db("db23_120");
            $result = $conn->query($sql);
            
            require("close_db.php");
            return "UPDATE success $result rows";
        }
    public static function deleteCollection($collection_ID)
        {
            require("connect_db.php");
            $sql = "Delete from collection WHERE collectionID = '$collection_ID'";
            $conn->select_db("db23_120");
            $result = $conn->query($sql);
            
            require("close_db.php");
            return "UPDATE success $result rows";
        }
    public static function get($collection_ID)
        {
            require("connect_db.php");
            $sql = "SELECT co.collectionID as coID,co.collection as co
            FROM collection as co WHERE co.collectionID= '$collection_ID';";
            $conn->select_db("db23_120");
            $result = $conn->query($sql);
            
            $my_row=$result->fetch_assoc();
            $collection_ID = $my_row["coID"];
            $collection = $my_row["co"];
            $CollectionList  = [];
            $CollectionList [] = new Collection($collection_ID,$collection);
            require("close_db.php");
            return $CollectionList  ;

        }
    }