<?php
    $controllers = array('pages' => ['home', 'error'],'ministry'=>['index'],'agency'=>['index','search'],'worker'=>['index','search','newWorker','addWorker','updateForm','update','deleteConfirm','delete'],'equipment'=>['index','search','newEquipment','addEquipment','updateForm','update','deleteConfirm','delete'],'report'=>['index','search','newReport','addReport','updateForm','update','deleteConfirm','delete'],'summarize'=>['index','search']);
    function call($controller, $action){
        echo "routes to " . $controller . "-" . $action . "<br>";
        require_once("controllers/".$controller."_controller.php");
        switch($controller){
            case "pages":       $controller = new PagesController();
            break;
            case "ministry":    require_once("models/ministryModel.php");
                                $controller = new MinistryController();
            break;
            case "agency":      require_once("models/agencyModel.php");
                                require_once("models/ministryModel.php");
                                $controller = new AgencyController();
            break;
            case "worker":      require_once("models/workerModel.php");
                                require_once("models/titleModel.php");
                                require_once("models/positionModel.php");
                                $controller = new WorkerController();
            break;
            case "equipment":   require_once("models/equipmentModel.php");
                                $controller = new EquipmentController();
            break;
            case "report":      require_once("models/reportModel.php");
                                require_once("models/equipmentModel.php");
                                require_once("models/agencyModel.php");
                                $controller = new ReportController();
            break;
            case "summarize":   require_once("models/summarizeModel.php");
                                require_once("models/reportModel.php");
                                require_once("models/equipmentModel.php");
                                require_once("models/agencyModel.php");
                                $controller = new SummarizeController();
            break;
        }
        $controller->{$action}();
    }

    if(array_key_exists($controller,$controllers)){
        if(in_array($action,$controllers[$controller])){
            call($controller,$action);
        }
        else{
            call('pages','error');
        }
    }
    else{
        call('pages','error');
    }
?>