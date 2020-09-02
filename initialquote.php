<?php 
header('Content-Type:application/json');
header('Access-Control-Allow_origin: * ');
header('Access-Control-Allow_methods: POST');
header('Access-Control-Allow-Header:Access-Control-Allow-Header,Content-Type,Access-Control-Allow_methods,Auhtorization');
$responseArray = array('status'=>0,'code'=>http_response_code(),'message'=>'Something went wrong','resultData'=>[]);
if($_SERVER['REQUEST_METHOD']==='POST'){
    $params = json_decode(file_get_contents("php://input"), true);
    $rtoLocation = $params['rtolocation'];
    $vregNum = isset($params['vregnum'])?$params['vregnum']:'';
    $mfgYear = isset($params['mfgyear'])?$params['mfgyear']:'';
    $makeModel = isset($params['makemodel'])?$params['makemodel']:'';
    $cMobile = isset($params['cmobile'])?$params['cmobile']:'';

    if(isset($params['rtolocation'])){
        if(isset($params['vregnum'])){
         if(isset($params['mfgyear'])){
          if(isset($params['makemodel'])){
            if(isset($params['cmobile'])){
                        $result = array
                                    (                
                    "rtolocation" => $rtoLocation,
                    "vregnum"=> $vregNum,
                    "mfgyear"=> $mfgYear,
                    "makemodel" => $makeModel,
                    "cmobile"=> $cMobile
                    );
                    $responseArray['message']= 'Success !';
                    $responseArray['status']= 1;
                    $responseArray['resultData']= $result;
                }else{
                    $responseArray['message']='Invalid cmobile params';
                }
            }else{
                $responseArray['message']='Invalid makemodel params'; 
            }
        }else{
                $responseArray['message']='Invalid mfgyear params';  
            }
        }else{
            $responseArray['message']='Invalid vregnum params';  
        }
    }else{
        $responseArray['message']='Invalid rto location params';
    }  
}else{
    $responseArray['message']='Bad request';
}
echo json_encode($responseArray);exit();
?>