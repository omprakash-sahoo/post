<?php 
    header('Content-Type:application/json');
    header('Access-Control-Allow_origin: * ');
    header('Access-Control-Allow_methods: POST');
    header('Access-Control-Allow-Header:Access-Control-Allow-Header,Content-Type,Access-Control-Allow_methods,Auhtorization');
        $responseArray = array('status'=>0,'message'=>'Something went wrong','resultData'=>[]);
        if($_SERVER['REQUEST_METHOD']==='POST'){
            $params = json_decode(file_get_contents("php://input"), true);

            $rs_gproposal15_premium = isset($params['rs_gproposal15_premium'])?$params['rs_gproposal15_premium']:''; 
			$rs_gproposal15_quoteid = isset($params['rs_gproposal15_quoteid'])?$params['rs_gproposal15_quoteid']:'';


                $isValid=1;
                $paramsValue=array('rs_gproposal15_premium','rs_gproposal15_quoteid');
                foreach($paramsValue as $value){
                    if(!array_key_exists($value, $params)){
                        $isValid=0;
                        }
                    }
                    if($isValid==1){
                        $resultData = array
                                    (                
                        "rs_gproposal15_premium" => $rs_gproposal15_premium,
                        "rs_gproposal15_quoteid" => $rs_gproposal15_quoteid
                        );

                    $responseArray['message']= 'Success !';
                    $responseArray['status']= 1;
                    $responseArray['resultData']= $resultData;
                    }else{
                        $responseArray['message']='Invalid Params';
                    }
}else{
    $responseArray['message']='Bad request';
}
echo json_encode($responseArray);exit();
?>