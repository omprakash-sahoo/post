<?php 
    header('Content-Type:application/json');
    header('Access-Control-Allow_origin: * ');
    header('Access-Control-Allow_methods: POST');
    header('Access-Control-Allow-Header:Access-Control-Allow-Header,Content-Type,Access-Control-Allow_methods,Auhtorization');
        $responseArray = array('status'=>0,'message'=>'Something went wrong','resultData'=>[]);
        if($_SERVER['REQUEST_METHOD']==='POST'){
            $params = json_decode(file_get_contents("php://input"), true);

                $makemodel = isset($params['makemodel'])?$params['makemodel']:'';
				$rtolocation = isset($params['rtolocation'])?$params['rtolocation']:'';
				$vregnum = isset($params['vregnum'])?$params['vregnum']:'';
				$mfgyear = isset($params['mfgyear'])?$params['mfgyear']:'';
				$venginenum = isset($params['venginenum'])?$params['venginenum']:'';
				$vchassisnum = isset($params['vchassisnum'])?$params['vchassisnum']:'';
				$preinsurer = isset($params['preinsurer'])?$params['preinsurer']:'';
				$policyno = isset($params['policyno'])?$params['policyno']:'';
				$prepoled = isset($params['prepoled'])?$params['prepoled']:'';
				$prepolsd = isset($params['prepolsd'])?$params['prepolsd']:'';
				$vfin = isset($params['vfin'])?$params['vfin']:'';
				$finname1 = isset($params['finname1'])?$params['finname1']:'';
				$photo = isset($params['photo'])?$params['photo']:'';
			    $go1_totalgrosspremium = isset($params['go1_totalgrosspremium'])?$params['go1_totalgrosspremium']:'';


                $isValid=1;
                $paramsValue=array('makemodel','rtolocation','vregnum','mfgyear','venginenum','vchassisnum','preinsurer','policyno','prepoled','prepolsd','vfin','finname1','photo','go1_totalgrosspremium');
                foreach($paramsValue as $value){
                    if(!array_key_exists($value, $params)){
                        $isValid=0;
                        }
                    }
                    if($isValid==1){
                        $result = array
                            (                
                            "makemodel "=>$makemodel,
                            "rtolocation"=>$rtolocation,
                            "vregnum"=>$vregnum,
                            "mfgyear"=>$mfgyear,
                            "venginenum"=>$venginenum,
                            "vchassisnum"=>$vchassisnum,
                            "preinsurer"=>$preinsurer,
                            "policyno"=>$policyno,
                            "prepoled"=>$prepoled,
                            "prepolsd"=>$prepolsd, 
                            "vfin"=>$vfin,
                            "finname1"=>$finname1,
                            "photo"=>$photo,
                            "go1_totalgrosspremium"=>$go1_totalgrosspremium
                        );

                    $responseArray['message']= 'Success!';
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