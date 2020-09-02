<?php 
    header('Content-Type:application/json');
    header('Access-Control-Allow_origin: * ');
    header('Access-Control-Allow_methods: POST');
    header('Access-Control-Allow-Header:Access-Control-Allow-Header,Content-Type,Access-Control-Allow_methods,Auhtorization');
        $responseArray = array('status'=>0,'message'=>'Something went wrong','resultData'=>[]);
        if($_SERVER['REQUEST_METHOD']==='POST'){
            $params = json_decode(file_get_contents("php://input"), true);
                $makeModel = isset($params['makemodel'])?$params['makemodel']:'';
                $rtoLocation = isset($params['rtolocation'])?$params['rtolocation']:'';
                $vregNum = isset($params['vregnum'])?$params['vregnum']:'';
                $mfgYear = isset($params['mfgyear'])?$params['mfgyear']:'';
                $cpa = isset($params['cpa'])?$params['cpa']:'';
                $roadTax = isset($params['roadtax'])?$params['roadtax']:'';
                $pa = isset($params['pa'])?$params['pa']:'';
                $rsa = isset($params['rsa'])?$params['rsa']:'';
                $zd = isset($params['zd'])?$params['zd']:'';
                $ep = isset($params['ep'])?$params['ep']:'';
                $consu = isset($params['consu'])?$params['consu']:'';
                $tyrep = isset($params['tyrep'])?$params['tyrep']:'';
				$kr = isset($params['kr'])?$params['kr']:'';
				$rti = isset($params['rti'])?$params['rti']:'';
				$ncbp = isset($params['ncbp'])?$params['ncbp']:'';
				$condr = isset($params['condr'])?$params['condr']:'';
				$lpb = isset($params['lpb'])?$params['lpb']:'';
				$rtppd = isset($params['rtppd'])?$params['rtppd']:'';
				$regDate1 = isset($params['regdate1'])?$params['regdate1']:'';
				$policyExp = isset($params['policyexp'])?$params['policyexp']:'';
				$vncb = isset($params['vncb'])?$params['vncb']:'';
				$currentNcb = isset($params['currentncb'])?$params['currentncb']:'';
				$setidv = isset($params['setidv'])?$params['setidv']:'';
				$previousCliam1 = isset($params['previouscliam1'])?$params['previouscliam1']:'';
				$img = isset($params['img'])?$params['img']:'';
				$idv = isset($params['idv'])?$params['idv']:'';
				$go1TotalGrossPremium = isset($params['go1_totalgrosspremium'])?$params['go1_totalgrosspremium']:'';
				$anti = isset($params['anti'])?$params['anti']:'';
                $auto = isset($params['auto'])?$params['auto']:'';


                $isValid=1;
                $paramsValue=array('makemodel','rtolocation','vregnum','mfgyear','cpa','roadtax','pa','rsa','zd','ep','consu','tyrep','kr','rti','ncbp','condr','lpb','rtppd','regdate1','policyexp','vncb','currentncb','setidv','previouscliam1','img','idv','go1_totalgrosspremium','anti','auto');
                foreach($paramsValue as $value){
                    if(!array_key_exists($value, $params)){
                        $isValid=0;
                        }
                    }
                    if($isValid==1){
                        $result = array
                        (                
                            "makemodel"  => $makeModel,
                            "rtolocation"  => $rtoLocation,
                            "vregnum"  => $vregNum,
                            "mfgyear"  => $mfgYear,
                            "cpa"  => $cpa,
                            "roadtax"  => $roadTax,
                            "pa"  => $pa,
                            "rsa"  => $rsa,
                            "zd"  => $zd,
                            "ep"  => $ep,
                            "consu"  => $consu,
                            "tyrep"  => $tyrep,
                            "kr"  => $kr,
                            "rti"  => $rti,
                            "ncbp"  => $ncbp,
                            "condr"  => $condr,
                            "lpb"  => $lpb,
                            "rtppd"  => $rtppd,
                            "regdate1"  => $regDate1,
                            "policyexp"  => $policyExp,
                            "vncb"  => $vncb,
                            "currentncb"  => $currentNcb,
                            "setidv"  => $setidv,
                            "previouscliam1"  => $previousCliam1,
                            "img"  => $img,
                            "idv"  => $idv,
                            "go1_totalgrosspremium"  => $go1TotalGrossPremium,
                            "anti"  => $anti,
                            "auto"  => $auto
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