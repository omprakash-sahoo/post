<?php 
    header('Content-Type:application/json');
    header('Access-Control-Allow_origin: * ');
    header('Access-Control-Allow_methods: POST');
    header('Access-Control-Allow-Header:Access-Control-Allow-Header,Content-Type,Access-Control-Allow_methods,Auhtorization');
        $responseArray = array('status'=>0,'message'=>'Something went wrong','resultData'=>[]);
        if($_SERVER['REQUEST_METHOD']==='POST'){
            $params = json_decode(file_get_contents("php://input"), true);

            $relipay_proposal_no = isset($params['relipay_proposal_no'])?$params['relipay_proposal_no']:''; 
            $relipay_net_premium = isset($params['relipay_net_premium'])?$params['relipay_net_premium']:'';


                $isValid=1;
                $paramsValue=array('relipay_proposal_no','relipay_net_premium');
                foreach($paramsValue as $value){
                    if(!array_key_exists($value, $params)){
                        $isValid=0;
                        }
                    }
                    if($isValid==1){
                        $resultData = array
                                    (                
                        "relipay_proposal_no" => $relipay_proposal_no,
                        "relipay_net_premium" => $relipay_net_premium
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