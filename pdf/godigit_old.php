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
    $insertQuery = "INSERT INTO pdf(pcopy)VALUES('$paramsValue')";
     if(mysqli_query($conn,$insertQuery)){
         $selectQuery = 'SELECT * FROM pdf where pcopy LIKE "%' .$paramsValue. '%"';
         $qryResult = mysqli_query($conn,$selectQuery);
         if((mysqli_num_rows($qryResult)>0)){
            $resultData = mysqli_fetch_all($qryResult , MYSQLI_ASSOC);
            $responseArray['message']= 'Successfully Inserted !';
            $responseArray['status']= 1;
            $responseArray['resultData']= $resultData;
        }else{
            $responseArray['message']='No record found';
        }      
        }else{
            $responseArray['message']='Invalid Params';
        }
    }
        }else{
            $responseArray['message']='Bad request';
        }
        echo json_encode($responseArray);exit();

?>