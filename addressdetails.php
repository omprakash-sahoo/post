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
				$ploc = isset($params['ploc'])?$params['ploc']:'';
				$pstate = isset($params['pstate'])?$params['pstate']:'';
				$padd = isset($params['padd'])?$params['padd']:'';
				$ppin = isset($params['ppin'])?$params['ppin']:'';
				$cpin = isset($params['cpin'])?$params['cpin']:'';
				$cloc = isset($params['cloc'])?$params['cloc']:'';
				$cstate = isset($params['cstate'])?$params['cstate']:'';
				$cadd = isset($params['cadd'])?$params['cadd']:'';
				$cdistrict = isset($params['cdistrict'])?$params['cdistrict']:'';
				$pdistrict = isset($params['pdistrict'])?$params['pdistrict']:'';
				$photo = isset($params['photo'])?$params['photo']:'';
			    $go1_totalgrosspremium = isset($params['go1_totalgrosspremium'])?$params['go1_totalgrosspremium']:'';


                $isValid=1;
                $paramsValue=array('makemodel','rtolocation','vregnum','mfgyear','ploc','pstate','padd','ppin','cpin','cloc','cstate','cadd','cdistrict','pdistrict','photo','go1_totalgrosspremium');
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
                            "ploc"=>$ploc,
                            "pstate"=>$pstate,
                            "padd"=>$padd,
                            "ppin"=>$ppin,
                            "cpin"=>$cpin,
                            "cloc"=>$cloc, 
                            "cstate"=>$cstate,
                            "cadd"=>$cadd,
                            "cdistrict"=>$cdistrict,
                            "pdistrict"=>$pdistrict,
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