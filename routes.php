<?php
    $controllers = array( 'pages'=>['home','error'],'country'=>['index','insert','addCountry','updateFrom','update','deleteConfirm','delete']
                                                    ,'collection'=>['index','insert','addCollection','updateFrom','update','deleteConfirm','delete']
                                                    ,'stormList'=>['index','insert','addStormList','updateFrom','update','deleteConfirm','delete','check','summary']);
    function call($controller,$action){
        require_once("controllers/".$controller."_controller.php");
        //echo $controller;
        //echo $action;
        switch($controller){
        case "country":require_once('controllers/'.$controller."_controller.php");
                       require_once("models/countryModel.php");
                       $controller = new CountryController();
                       break;
        case "collection":require_once('controllers/'.$controller."_controller.php");
                       require_once("models/collectionModel.php");
                       $controller = new CollectionController();
                       break;
        case "stormList":require_once('controllers/'.$controller."_controller.php");
                       require_once("models/stormListModel.php");
                       require_once("models/collectionModel.php");
                       require_once("models/countryModel.php");
                       $controller = new StormListController();
                       break;
        
        case "pages":require_once('controllers/'.$controller."_controller.php");
                    $controller = new PagesController;
                    break;
        }
        $controller->{$action}();
    }
    if(array_key_exists($controller,$controllers)){
        if(in_array($action,$controllers[$controller])){
            call($controller,$action);
        }
       
    }
    
?>