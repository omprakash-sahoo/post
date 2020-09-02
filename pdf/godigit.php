<?php 
    header('Content-Type:application/json');
    header('Access-Control-Allow_origin: * ');
    header('Access-Control-Allow_methods: POST');
    header('Access-Control-Allow-Header:Access-Control-Allow-Header,Content-Type,Access-Control-Allow_methods,Auhtorization');
    require_once "../config/database.php";
    if($_SERVER['REQUEST_METHOD']=='POST'){
    $responseArray = array('status'=>0,'message'=>'Something went wrong','resultData'=>[]);
    $params = json_decode(file_get_contents("php://input"), true);
    $paramsValue = isset($params['godigicomp_schedule_path_hc'])?$params['godigicomp_schedule_path_hc']:'';

if(isset($params['godigicomp_schedule_path_hc'])){
    $insertQuery = "INSERT INTO premium(pcopy)VALUES('$paramsValue')";
     if(mysqli_query($conn,$insertQuery)){
         $selectQuery = 'SELECT * FROM premium where pcopy LIKE "%' .$paramsValue. '%"';
         $qryResult = mysqli_query($conn,$selectQuery);
         if((mysqli_num_rows($qryResult)>0)){
            $resultData = mysqli_fetch_all($qryResult , MYSQLI_ASSOC);
            $responseArray['message']= 'Successfully Inserted !';
            $responseArray['status']= 1;
            $responseArray['resultData']= $resultData;
        }else{
            $responseArray['message']='Not Inserted';
        } 
    } 
    }else{
        $responseArray['message']='Invalid Params';
    }
}else{
    $responseArray['message']='Bad Request';
}
    echo json_encode($responseArray);
?>