<?php 
    header('Content-Type:application/json');
    header('Access-Control-Allow_origin: * ');
    header('Access-Control-Allow_methods: POST');
    header('Access-Control-Allow-Header:Access-Control-Allow-Header,Content-Type,Access-Control-Allow_methods,Auhtorization');
        $responseArray = array('status'=>0,'message'=>'Something went wrong','resultData'=>[]);
        if($_SERVER['REQUEST_METHOD']==='POST'){
            $params = json_decode(file_get_contents("php://input"), true);

                $fireName = isset($params['name'])?$params['name']:'';
				$fireBuyNewPolicy = isset($params['buy_new_policy'])?$params['buy_new_policy']:'';
				$fireManufacturing = isset($params['manufacturing'])?$params['manufacturing']:'';
				$fireTypeOfInsurance = isset($params['type_of_insurance'])?$params['type_of_insurance']:'';
				$fireSumInsured = isset($params['sum_insured'])?$params['sum_insured']:'';
				$fireEmail = isset($params['email'])?$params['email']:'';
				$fireContact = isset($params['contact'])?$params['contact']:'';
				$fireDescription= isset($params['description'])?$params['description']:'';
				$firePospid= isset($params['posp_id'])?$params['posp_id']:'';


                $isValid=1;
                $paramsValue=array('name','buy_new_policy','manufacturing','type_of_insurance','sum_insured','email','contact','description','posp_id');
                foreach($paramsValue as $value){
                    if(!array_key_exists($value, $params)){
                        $isValid=0;
                        }
                    }
                    if($isValid==1){
                        $resultData = array
                                    (                
                        "name" => $fireName,
                        "buy_new_policy" => $fireBuyNewPolicy,
                        "manufacturing"=> $fireManufacturing,
                        "type_of_insurance"=> $fireTypeOfInsurance,
                        "sum_insured"=> $fireSumInsured,
                        "email"=> $fireEmail,
                        "contact"=> $fireContact,
                        "description"=> $fireDescription,
                        "posp_id"=>$firePospid
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