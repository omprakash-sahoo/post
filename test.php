<?php 
    header('Content-Type:application/json');
    header('Access-Control-Allow_origin: * ');
    header('Access-Control-Allow_methods: POST');
    header('Access-Control-Allow-Header:Access-Control-Allow-Header,Content-Type,Access-Control-Allow_methods,Auhtorization');
    require_once "../config/database.php";
        $responseArray = array('status'=>0,'message'=>'Something went wrong','resultData'=>[]);
        if($_SERVER['REQUEST_METHOD']==='POST'){
            $params = json_decode(file_get_contents("php://input"), true);

            $paramsData = isset($params['godigicomp_schedule_path_hc'])?$params['godigicomp_schedule_path_hc']:'';
            $isValid=1;

            $paramsValue=array('godigicomp_schedule_path_hc');

    foreach($paramsValue as $value){
        if(!array_key_exists($value, $params)){
            $isValid=0;
            }
        }
    if($isValid==1){
        $query = "insert into premium (pcopy) values ('" . $paramsData ."')";
        $queryResult = mysqli_query($conn,$query);
        if(mysqli_num_rows($queryResult)>0){
            $selectQuery = 'SELECT * FROM   premium where pcopy LIKE "%' .$paramsData. '%"';
            $queryResult1 = mysqli_query($conn,$selectQuery); 
            if(mysqli_num_rows($queryResult1)){
                $pcopyData = mysqli_fetch_all($queryResult1,MYSQLI_ASSOC);
            }  
        }

                $result = array
                    (
                        "godigicomp_schedule_path_hc" => $pcopyData
                    );

                    $responseArray['message']= 'Success !';
                    $responseArray['status']= 1;
                    $responseArray['resultData']= $result;
                        
                    }else{
                        $responseArray['message']='Invalid Params';
                    }
        }else{
            $responseArray['message']='Bad request';
        }
        echo json_encode($responseArray);exit();

?>