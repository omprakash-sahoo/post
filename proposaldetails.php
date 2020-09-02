<?php 
    header('Content-Type:application/json');
    header('Access-Control-Allow_origin: * ');
    header('Access-Control-Allow_methods: POST');
    header('Access-Control-Allow-Header:Access-Control-Allow-Header,Content-Type,Access-Control-Allow_methods,Auhtorization');
        $responseArray = array('status'=>0,'message'=>'Something went wrong','resultData'=>[]);
        if($_SERVER['REQUEST_METHOD']==='POST'){
            $params = json_decode(file_get_contents("php://input"), true);

            $makemodel  = isset($params['makemodel'])?$params['makemodel']:'';
            $rtolocation = isset($params['rtolocation'])?$params['rtolocation']:'';
            $vregnum = isset($params['vregnum'])?$params['vregnum']:'';
            $mfgyear = isset($params['mfgyear'])?$params['mfgyear']:'';
            $title = isset($params['title'])?$params['title']:'';
            $cgender = isset($params['cgender'])?$params['cgender']:'';
            $cfname = isset($params['cfname'])?$params['cfname']:'';
            $clname = isset($params['clname'])?$params['clname']:'';
            $caadhar = isset($params['caadhar'])?$params['caadhar']:'';
            $cpan = isset($params['cpan'])?$params['cpan']:'';
            $cmobile = isset($params['cmobile'])?$params['cmobile']:'';
            $cdob = isset($params['cdob'])?$params['cdob']:'';
            $coccup = isset($params['coccup'])?$params['coccup']:'';
            $cnname = isset($params['cnname'])?$params['cnname']:'';
            $cnage = isset($params['cnage'])?$params['cnage']:'';
            $crship = isset($params['crship'])?$params['crship']:'';
            $compname = isset($params['compname'])?$params['compname']:'';
            $nob = isset($params['nob'])?$params['nob']:'';
            $doi = isset($params['doi'])?$params['doi']:'';
            $compmail = isset($params['compmail'])?$params['compmail']:'';
            $gst = isset($params['gst'])?$params['gst']:'';
            $comppan = isset($params['comppan'])?$params['comppan']:'';
            $compcpname = isset($params['compcpname'])?$params['compcpname']:'';
            $compcprelation = isset($params['compcprelation'])?$params['compcprelation']:'';
            $ploc = isset($params['ploc'])?$params['ploc']:'';
            $pstate = isset($params['pstate'])?$params['pstate']:'';
            $padd = isset($params['padd'])?$params['padd']:'';
            $ppin = isset($params['ppin'])?$params['ppin']:'';
            $cpin = isset($params['cpin'])?$params['cpin']:'';
            $cloc =  isset($params['cloc'])?$params['cloc']:'';
            $cstate = isset($params['cstate'])?$params['cstate']:'';
            $cadd = isset($params['cadd'])?$params['cadd']:'';
            $cdistrict = isset($params['cdistrict'])?$params['cdistrict']:'';
            $pdistrict = isset($params['pdistrict'])?$params['pdistrict']:''; 
            $venginenum = isset($params['venginenum'])?$params['venginenum']:'';
            $vchassisnum = isset($params['vchassisnum'])?$params['vchassisnum']:'';
            $preinsurer = isset($params['preinsurer'])?$params['preinsurer']:'';
            $policyno = isset($params['policyno'])?$params['policyno']:'';
            $prepoled = isset($params['prepoled'])?$params['prepoled']:'';
            $prepolsd = isset($params['prepolsd'])?$params['prepolsd']:'';
            $vfin = isset($params['vfin'])?$params['vfin']:'';
            $finname1 = isset($params['finname1'])?$params['finname1']:'';
            $photo = isset($params['photo'])?$params['photo']:'';
            $go1_totalgrosspremium =isset($params['go1_totalgrosspremium'])?$params['go1_totalgrosspremium']:'';

                $isValid=1;
            $paramsValue=array("makemodel","rtolocation","vregnum","mfgyear","title","cgender","cfname","clname","caadhar","cpan","cmobile","cdob","coccup","cnname",
            "cnage","crship", "compname", "nob", "doi","compmail","gst","comppan","compcpname","compcprelation","ploc","pstate","padd","ppin","cpin","cloc","cstate","cadd","cdistrict","pdistrict","venginenum","vchassisnum","preinsurer","policyno","prepoled","prepolsd","vfin","finname1","photo","go1_totalgrosspremium");
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
                                "title" => $title,//insured
                                "cgender" => $cgender,
                                "cfname" => $cfname,
                                "clname" => $clname,
                                "caadhar" => $caadhar,
                                "cpan"  => $cpan, 
                                "cmobile" => $cmobile,
                                "cdob" => $cdob,
                                "coccup" => $coccup,
                                "cnname" => $cnname,
                                "cnage" => $cnage,
                                "crship" => $crship,
                                "compname" => $compname,
                                "nob" => $nob,
                                "doi" => $doi,
                                "compmail" => $compmail,
                                "gst" => $gst,
                                "comppan" => $comppan,
                                "compcpname" => $compcpname,
                                "compcprelation" => $compcprelation,
                                "ploc"=>$ploc,//address
                                "pstate"=>$pstate,
                                "padd"=>$padd,
                                "ppin"=>$ppin,
                                "cpin"=>$cpin,
                                "cloc"=>$cloc, 
                                "cstate"=>$cstate,
                                "cadd"=>$cadd,
                                "cdistrict"=>$cdistrict,
                                "pdistrict"=>$pdistrict,
                                "venginenum"=>$venginenum,//veh
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