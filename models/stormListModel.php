<?php 
class StormList{
    public $stormList_ID,$stormName,$stormNameEng,$stormNameMean,$dateUseStorm,$dateEndStorm,$status,$substitueName,$countryID,$collectionID;
    public function __construct($stormList_ID,$stormName,$stormNameEng,$stormNameMean,$dateUseStorm,$dateEndStorm,$status,$substitueName,$countryID,$collectionID)
        {
            $this->stormList_ID =$stormList_ID;
            $this->stormName =$stormName;
            $this->stormNameEng = $stormNameEng;
            $this->stormNameMean = $stormNameMean;
            $this->dateUseStorm = $dateUseStorm;
            $this->dateEndStorm = $dateEndStorm;
            $this->status = $status;
            $this->substitueName = $substitueName;
            $this->countryID = $countryID ;
            $this->collectionID = $collectionID;
        }


    public static function getAll()
        {
            $StromList_List = [];
            require("connect_db.php");
            $sql = "SELECT sl.stormListID,sl.stormName,sl.stormNameEnglish,sl.stormNameMean,
            sl.dateUseStorm,sl.dateEndStorm,sl.status,sl.substituteName,c.Name,co.collection 
            FROM stormList as sl
            INNER JOIN country  as c ON c.countryID= sl.countryID 
            INNER JOIN collection  as co ON co.collectionID = sl.collectionID
            ORDER BY sl.stormListID ASC";
            $conn->select_db("db23_120");
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc())
            {
                $stormList_ID = $row["stormListID"];
                $stormName = $row["stormName"];
                $stormNameEng = $row["stormNameEnglish"];
                $stormNameMean = $row["stormNameMean"];
                $dateUseStorm = $row["dateUseStorm"];
                $dateEndStorm = $row["dateEndStorm"];
                $status = $row["status"];
                $substitueName = $row["substituteName"];
                $countryID = $row["Name"];
                $collectionID = $row["collection"];
                if($dateUseStorm == NULL){
                    $dateUseStorm = "ไม่มี";
                }
                if($dateEndStorm == NULL){
                    $dateEndStorm = "ไม่มี";
                }
                if($status == 1){
                    $status = "ถูกใช้";
                }
                if($status == NULL){
                    $status = "ไม่ถูกใช้";
                }
                if($substitueName == NULL){
                    $substitueName = "ไม่ใช่";
                }
                $StromList_List[] = new StormList($stormList_ID,$stormName,$stormNameEng,$stormNameMean,$dateUseStorm,$dateEndStorm,$status,$substitueName,$countryID,$collectionID);
            }
            require("close_db.php");
            return $StromList_List;
    }
    public static function addStormList($stormName,$stormNameEng,$stormNameMean,$substitueName,$countryID,$collectionID)
        {
            require("connect_db.php");

            $sql = "insert into stormList(stormName,stormNameEnglish,stormNameMean,dateUseStorm,status,substituteName,countryID,collectionID)
            values('$stormName','$stormNameEng','$stormNameMean',NULL,NULL,'$substitueName','$countryID','$collectionID')";
            $conn->select_db("db23_120");
            $result = $conn->query($sql);
            
            require("close_db.php");
            return "Insert success $result rows";
        }
    public static function update($stormListID,$stormName,$stormNameEng,$stormNameMean,$substitueName,$countryID,$collectionID)
        {
            require("connect_db.php");

            $sql = "UPDATE  stormList SET stormListID = '$stormListID',stormName = '$stormName',stormNameEnglish = '$stormNameEng'
            ,stormNameMean = '$stormNameMean',dateUseStorm = NULL,status = NULL,substituteName = '$substitueName',
            countryID = '$countryID',collectionID = '$collectionID'
            WHERE stormListID = '$stormListID'";
            $conn->select_db("db23_120");
            $result = $conn->query($sql);
            
            require("close_db.php");
            return "Insert success $result rows";
        }
    public static function delete($stormListID)
        {
            require("connect_db.php");

            $sql = "Delete from stormList WHERE stormListID = '$stormListID'";
            $conn->select_db("db23_120");
            $result = $conn->query($sql);
            
            require("close_db.php");
            return "Insert success $result rows";
        }
    public static function check()
        {
            require("connect_db.php");

            $sql = "SELECT sd.stormListID FROM StormDetails as sd 
            NATURAL JOIN stormList as sl";
            $conn->select_db("db23_120");
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()){
                $stormListID = $row["stormListID"];
                $date = date("Y-m-d");
                $conn->query("UPDATE stormList SET status = 1, dateUseStorm = '$date',dateEndStorm = NULL WHERE stormListID = '$stormListID'");
            }
            
            require("close_db.php");
        }
    public static function nocheck()
        {
            require("connect_db.php");

            $sql = "SELECT sl.stormListID FROM stormList as sl
            LEFT JOIN StormDetails as sd ON sd.stormListID = sl.stormListID
            WHERE sd.stormListID IS NULL;";
            $conn->select_db("db23_120");
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()){
                $stormListID = $row["stormListID"];
                $date = date("Y-m-d");
                $conn->query("UPDATE stormList SET status = NULL,dateUseStorm = NULL ,dateEndStorm = '$date' WHERE stormListID = '$stormListID'");
            }
            
            require("close_db.php");
        }

    public static function get($stormList_ID)
    {
        $StromList_List = [];
        require("connect_db.php");
        $sql = "SELECT sl.stormListID,sl.stormName,sl.stormNameEnglish,sl.stormNameMean,
        sl.dateUseStorm,sl.dateEndStorm,sl.status,sl.substituteName,c.Name,co.collection 
        FROM stormList as sl
        INNER JOIN country  as c ON c.countryID= sl.countryID 
        INNER JOIN collection  as co ON co.collectionID = sl.collectionID
        WHERE sl.stormListID = $stormList_ID";
        $conn->select_db("db23_120");
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc())
        {
            $stormList_ID = $row["stormListID"];
            $stormName = $row["stormName"];
            $stormNameEng = $row["stormNameEnglish"];
            $stormNameMean = $row["stormNameMean"];
            $dateUseStorm = $row["dateUseStorm"];
            $dateEndStorm = $row["dateEndStorm"];
            $status = $row["status"];
            $substitueName = $row["substituteName"];
            $countryID = $row["Name"];
            $collectionID = $row["collection"];
            $StromList_List[] = new StormList($stormList_ID,$stormName,$stormNameEng,$stormNameMean,$dateUseStorm,$dateEndStorm,$status,$substitueName,$countryID,$collectionID);
        }
        require("close_db.php");
        return $StromList_List;
}
}