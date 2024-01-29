<?php 
class Country{
    public $country_ID,$name;
    public function __construct($country_ID,$name)
        {
            $this->country_ID = $country_ID;
            $this->name = $name;
        }


    public static function getAll()
        {
            $CountryList = [];
            require("connect_db.php");
            $sql = "SELECT c.countryID as CID ,c.Name as CNAME FROM country as c ";
            $conn->select_db("db23_120");
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc())
            {
                $CID = $row["CID"];
                $Cname = $row["CNAME"];
                $CountryList[] = new Country($CID,$Cname);
            }
            require("close_db.php");
            return $CountryList;
        }
    public static function addCountry($name)
        {
            require("connect_db.php");
            $sql = "insert into country(Name)
            values('$name')";
            $conn->select_db("db23_120");
            $result = $conn->query($sql);
            
            require("close_db.php");
            return "Insert success $result rows";
        }
    public static function updateCountry($country_ID,$name)
        {
            require("connect_db.php");
            $sql = "UPDATE country SET countryID = '$country_ID',Name = '$name'
            WHERE countryID= '$country_ID'";
            $conn->select_db("db23_120");
            $result = $conn->query($sql);
            
            require("close_db.php");
            return "UPDATE success $result rows";
        }
    public static function deleteCountry($country_ID)
        {
            require("connect_db.php");
            $sql = "Delete from country WHERE countryID = '$country_ID'";
            $conn->select_db("db23_120");
            $result = $conn->query($sql);
            
            require("close_db.php");
            return "UPDATE success $result rows";
        }
    public static function get($country_ID)
        {
            require("connect_db.php");
            $sql = "SELECT c.countryID as cID,c.Name as cNAME 
            FROM country as c WHERE c.countryID= '$country_ID';";
            $conn->select_db("db23_120");
            $result = $conn->query($sql);
            
            $my_row=$result->fetch_assoc();
            $country_ID = $my_row["cID"];
            $cName = $my_row["cNAME"];
            $CountryList = [];
            $CountryList [] = new Country($country_ID,$cName);
            require("close_db.php");
            return $CountryList ;

        }
    }