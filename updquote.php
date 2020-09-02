<?php 
    header('Content-Type:application/json');
    header('Access-Control-Allow_origin: * ');
    header('Access-Control-Allow_methods: POST');
    header('Access-Control-Allow-Header:Access-Control-Allow-Header,Content-Type,Access-Control-Allow_methods,Auhtorization');
        $responseArray = array('status'=>0,'code'=>http_response_code(),'message'=>'Something went wrong','resultData'=>[]);
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
                
        if(isset($params['makemodel'])){
        if(isset($params['rtolocation'])){
        if(isset($params['vregnum'])){
        if(isset($params['mfgyear'])){
        if(isset($params['cpa'])){
        if(isset($params['roadtax'])){
        if(isset($params['pa'])){
        if(isset($params['rsa'])){
        if(isset($params['zd'])){
        if(isset($params['ep'])){
        if(isset($params['consu'])){
        if(isset($params['tyrep'])){
        if(isset($params['kr'])){
        if(isset($params['rti'])){
        if(isset($params['ncbp'])){
        if(isset($params['condr'])){
        if(isset($params['lpb'])){
        if(isset($params['rtppd'])){
        if(isset($params['regdate1'])){
        if(isset($params['policyexp'])){
        if(isset($params['vncb'])){
        if(isset($params['currentncb'])){
        if(isset($params['setidv'])){
        if(isset($params['previouscliam1'])){
        if(isset($params['img'])){
        if(isset($params['idv'])){
        if(isset($params['go1_totalgrosspremium'])){
        if(isset($params['anti'])){
        if(isset($params['auto'])){

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
        $responseArray['message']='Invalid auto Params'; 
        }
        }else{
        $responseArray['message']='Invalid anti Params'; 
        }
        }else{
        $responseArray['message']='Invalid go1_totalgrosspremium Params'; 
        }
        }else{
        $responseArray['message']='Invalid idv Params'; 
        }
        }else{
        $responseArray['message']='Invalid img Params'; 
        }
        }else{
        $responseArray['message']='Invalid previouscliam1 Params'; 
        }
        }else{
        $responseArray['message']='Invalid setidv Params'; 
        }
        }else{
        $responseArray['message']='Invalid currentncb Params'; 
        }

        }else{
        $responseArray['message']='Invalid vncb Params'; 
        }
        }else{
        $responseArray['message']='Invalid policyexp Params'; 
        }
        }else{
        $responseArray['message']='Invalid regdate1 Params'; 
        }
        }else{
        $responseArray['message']='Invalid rtppd Params'; 
        }
        }else{
        $responseArray['message']='Invalid lpb Params'; 
        }
        }else{
        $responseArray['message']='Invalid condr Params'; 
        }
        }else{
        $responseArray['message']='Invalid ncbp Params'; 
        }
        }else{
        $responseArray['message']='Invalid rti Params'; 
        }
        }else{
        $responseArray['message']='Invalid kr Params'; 
        }
        }else{
        $responseArray['message']='Invalid tyrep Params'; 
        }
        }else{
        $responseArray['message']='Invalid consu Params'; 
        }
        }else{
        $responseArray['message']='Invalid ep Params'; 
        }    
        }else{
        $responseArray['message']='Invalid zd Params'; 
        }
        }else{
        $responseArray['message']='Invalid rsa Params'; 
        }
        }else{
        $responseArray['message']='Invalid pa Params'; 
        }
        }else{
        $responseArray['message']='Invalid roadtax Params'; 
        }
        }else{
        $responseArray['message']='Invalid cpa Params'; 
        }
        }else{
        $responseArray['message']='Invalid mfgyear Params'; 
        }
        }else{
        $responseArray['message']='Invalid vregnum Params'; 
        }
        }else{
        $responseArray['message']='Invalid rtolocation Params'; 
        }
        }else{
        $responseArray['message']='Invalid make model Params';
        $responseArray['code']= http_response_code(400);
        }  
}else{
    $responseArray['message']='Bad request';
}
echo json_encode($responseArray);exit();
?>