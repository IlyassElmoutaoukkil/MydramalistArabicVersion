<?php 
session_start();
include("conn.php");  
include("functions.php");
include("iama.php");

    //* بإسم الله الرحمان الرحيم
    //* Vendredi 14-02-2020 
    //*   الزبون الكريم صبري



if(isset($_POST['opt'])){
    if ( $_SESSION['type']=='1' ){
    header("Content-Type: application/json; charset=UTF-8");
    
    switch ($_POST['opt']){
        case "search":
            
            $word=$_POST['titlename'];
            $word = preg_replace('/(?<!\\\)([%_])/', '\\\$1',$word);
            
            $stmt4 = $conn->prepare("SELECT title,country,id,image,p_date,country,status,content_type FROM title WHERE title LIKE CONCAT('%',?,'%') LIMIT 10");
            $stmt4->bind_param("s", $word);
            $stmt4->execute();
            $result4=$stmt4->get_result();
            $mess=array();

            while($titles=$result4->fetch_assoc()){
                
                if($titles['content_type']=='serie'){
                    $stat=datasignif($titles['country'],'countryF');
                }else{
                    $stat=datasignif($titles['country'],'countryM'); 
                }
                
                $type=datasignif($titles['content_type'],'type');
                
                $titles['country'] = $stat;
                $titles['content_type'] = $type;
                
                array_push($mess, $titles );
                
            }
            
            if ($result4->num_rows=='0'){
                $code="false";
            }else{
                $code="true";
            }
            
            echo json_encode(["code"=>$code,"titles"=>$mess]);
            
        break;
            
            
        case 'getinfo':
            $u=userinfo($_POST['id']);
            
            $stmt4 = $conn->prepare("SELECT id FROM permission WHERE idU=? AND perm='writer'");
                        
                        $stmt4->bind_param("s", $_POST['id']);
                        $stmt4->execute();
                        $resu=$stmt4->get_result();
                        $r['arti']=$resu->num_rows;
                        
                        
                        
                        $stmt4 = $conn->prepare("SELECT id FROM permission WHERE idU=? AND perm='manager'");
                        
                        $stmt4->bind_param("s", $_POST['id']);
                        $stmt4->execute();
                        $resu=$stmt4->get_result();
                        $r['share']=$resu->num_rows;

                        
                        $stmt4 = $conn->prepare("SELECT id FROM permission WHERE idU=? AND perm='contact'  ");
                        $stmt4->bind_param("s", $_POST['id']);
                        $stmt4->execute();
                        $resu=$stmt4->get_result();
                        $r['conta']=$resu->num_rows;
                        
            
            echo json_encode(['code'=>'true','data'=>['code'=>$u['code'],'username'=>$u['username'],'email'=>$u['email'],'wn'=>$u['wn'],'type'=>$u['type'],'picture'=>$u['picture']],'roles'=>['writer'=>$r['arti'],'manager'=>$r['share'],'contact'=>$r['conta']]]);
        break;
        
        case 'role':
            
            $arti=$_POST['arti'];
            $share=$_POST['share'];
            $conta=$_POST['conta'];
            
            if($arti=='true'){$arti=true;}else{$arti=false;}
            if($share=='true'){$share=true;}else{$share=false;}
            if($conta=='true'){$conta=true;}else{$conta=false;}
            
            if ((userinfo($_POST['id'])['type']=='0' || userinfo($_POST['id'])['type']=='2') && ($arti || $share || $conta)){
                $stmt4 = $conn->prepare("UPDATE users SET type='2' WHERE code=?");
                $stmt4->bind_param("s", $_POST['id']);
                if ($_SESSION['id']==$_POST['id']){
                    $code='false';
                    $mcode='BadAction';
                }else{
                    
                    if($stmt4->execute()){
                     $code='true';
                     $mcode='succ';
                        $r=[];
                        
                        $stmt4 = $conn->prepare("SELECT id FROM permission WHERE idU=? AND perm='writer' ");
                        
                        $stmt4->bind_param("s", $_POST['id']);
                        $stmt4->execute();
                        $resu=$stmt4->get_result();
                        $r['arti']=$resu->num_rows;
                        
                        
                        
                        $stmt4 = $conn->prepare("SELECT id FROM permission WHERE idU=? AND perm='manager'");
                        
                        $stmt4->bind_param("s", $_POST['id']);
                        $stmt4->execute();
                        $resu=$stmt4->get_result();
                        $r['share']=$resu->num_rows;

                        
                        $stmt4 = $conn->prepare("SELECT id FROM permission WHERE idU=? AND perm='contact'  ");
                        $stmt4->bind_param("s", $_POST['id']);
                        $stmt4->execute();
                        $resu=$stmt4->get_result();
                        $r['conta']=$resu->num_rows;
                        
                        
                        
                        
                        $al_arti=false;
                        $al_share=false;
                        $al_conta=false;
                        
                        
                            if($r['arti']=='0'){
                                
                            }else{
                                $al_arti=true;
                            }
                            if($r['share']=='0'){
                                
                            }else{
                                $al_share=true;
                            }
                            if($r['conta']=='0'){
                                
                            }else{
                                $al_conta=true;
                            }
                        
                        
                        if ($arti && !$al_arti){
                            $rn='writer';
                            $stmt4 = $conn->prepare("INSERT INTO permission(idU,perm) VALUES(?,?)");
                            $stmt4->bind_param("ss", $_POST['id'], $rn );
                            $stmt4->execute();
                        }else{
                            if(!$arti){
                                $rn='writer';
                                $stmt4 = $conn->prepare("DELETE FROM permission WHERE idU=? AND perm=?");
                                $stmt4->bind_param("ss", $_POST['id'], $rn );
                                $stmt4->execute();
                            }
                        }
                        
                        if ($share && !$al_share){
                            $rn='manager';
                            $stmt4 = $conn->prepare("INSERT INTO permission(idU,perm) VALUES(?,?)");
                            $stmt4->bind_param("ss", $_POST['id'], $rn );
                            $stmt4->execute();
                        }else{
                            if(!$share){
                                $rn='manager';
                                $stmt4 = $conn->prepare("DELETE FROM permission WHERE idU=? AND perm=?");
                                $stmt4->bind_param("ss", $_POST['id'], $rn );
                                $stmt4->execute();
                            }
                        }
                        
                        if ($conta && !$al_conta){
                            $rn='contact';
                            $stmt4 = $conn->prepare("INSERT INTO permission(idU,perm) VALUES(?,?)");
                            $stmt4->bind_param("ss", $_POST['id'], $rn );
                            $stmt4->execute();
                        }else{
                            if(!$conta){
                                $rn='contact';
                                $stmt4 = $conn->prepare("DELETE FROM permission WHERE idU=? AND perm=?");
                                $stmt4->bind_param("ss", $_POST['id'], $rn );
                                $stmt4->execute();
                            }
                        }
                    }else{
                      $code='false';
                      $mcode='error';
                    }
                }
            }else{
                $stmt4 = $conn->prepare("UPDATE users SET type='0' WHERE code=?");
                $stmt4->bind_param("s", $_POST['id']);
                if ($_SESSION['id']==$_POST['id'] || userinfo($_POST['id'])['type']=='1'){
                    $code='false';
                    $mcode='BadAction';
                }else{
                    if($stmt4->execute()){
                     $code='true';
                     $mcode='succ';
                        
                     $stmt4 = $conn->prepare("DELETE FROM permission WHERE idU=?");
                     $stmt4->bind_param("s", $_POST['id'] );
                     $stmt4->execute();
                    }else{
                      $code='false';
                      $mcode='error';
                    }
                }
            }
                
            
            echo json_encode(['code'=>$code,'mcode'=>$mcode]);
        break;
            
            
        case 'delete':
            $stmt4 = $conn->prepare("DELETE FROM users WHERE code=?");
            $stmt4->bind_param("s", $_POST['id']);
            if ($_SESSION['id']==$_POST['id']){
                $code='false';
                $mcode='BadAction';
            }else{
                if($stmt4->execute()){
                 $code='true';
                 $mcode='succ';   
                }else{
                  $code='false';
                  $mcode='error';
                }
            }
            
            echo json_encode(['code'=>$code,'mcode'=>$mcode]);
        break;
            
        case 'searchu':
            $word=$_POST['pr2'];
            $me=$_SESSION['id'];
            
            $word = preg_replace('/(?<!\\\)([%_])/', '\\\$1',$word);
            
            $stmt4 = $conn->prepare("SELECT code,picture,username,email,wn,code,type FROM users WHERE email LIKE CONCAT('%',?,'%') OR username LIKE CONCAT('%',?,'%') AND code!=? LIMIT 10");
            $stmt4->bind_param("sss", $word, $word, $me);
            
            
            if($stmt4->execute()){
                
                $result4=$stmt4->get_result();
                $code="true";
                
            }else{
                
                $code="false";
                
            }
            
            
            $data=array();
            while($user=$result4->fetch_assoc()){
                array_push($data,$user);
            };

            
            echo json_encode(['code'=>$code,'data'=>$data]);
            
            
        break;
        
        case 'paginate':
            $page=$_POST['pr2'];
            $me=$_SESSION['id'];
            $stmtuA = $conn->prepare("SELECT * FROM users WHERE code!=? ");
            $stmtuA->bind_param("s", $me);
            $stmtuA->execute();
            $resultuA=$stmtuA->get_result();
            
            $pages=$resultuA->num_rows/10;
            
            
            $me=$_SESSION['id'];
            $from=$page*10;
            $stmtu = $conn->prepare("SELECT code,picture,username,email,wn,code,type FROM users WHERE code!=? ORDER BY type DESC LIMIT 10 OFFSET ?");
            $stmtu->bind_param("ss", $me ,$from);
            if($stmtu->execute()){
                $code="true";
            }else{
                $code="false";
            }
            $resultu=$stmtu->get_result();
            $x=0;
            
            $data=array();
            while($user=$resultu->fetch_assoc()){
                array_push($data,$user);
            };

            
            echo json_encode(['code'=>$code,'data'=>$data,'from'=>$from.'->'.($from+2)]);
        break;
        
        case 'message':
            $username=$_POST['id'];
            $sub=$_POST['sub'];
            $text=$_POST['text'];
        
            //block
            if($text=='' || $sub=='' || $username==''){
                echo json_encode(array("code"=>"false","mcode"=>"emptyF"));
            }else{
                $stmt = $conn->prepare("SELECT username,code FROM users WHERE code = ? ");
                $stmt->bind_param("s", $username);
                $stmt->execute();
                $result=$stmt->get_result();
                
                
                if($result->num_rows==0 || $username==$_SESSION['id']){
                    echo json_encode(array("code"=>"false","mcode"=>"invalidUser"));
                }else{
                    $touser = $result->fetch_assoc();
                    $toid=$touser['code'];
                    $id=$_SESSION['id'];
                    
                    $sql="SELECT * FROM msession WHERE (mfrom='$id' AND mto='$toid') OR (mto='$id' AND mfrom='$toid') ";
                    $query=$conn->query($sql);
                    
                    
                    if(mysqli_num_rows($query)=='0'){
                        
                        
                        $from = $_SESSION['id'];
                        $to = $toid;
                        $message = $_POST['text'];
                        
                        $sql="INSERT INTO msession(mfrom,mto,sub) VALUES('$from','$toid','$sub')";
                        if($conn->query($sql)){
                           
                            $stmt = $conn->prepare("INSERT INTO messages (mfrom, mto, message, status) VALUES (?, ?, ?, '0')");
                            $stmt->bind_param('sss', $from, $to, $message);
                            // insert a row
                            $from = $_SESSION['id'];
                            $to = $toid;
                            
                            if(!$stmt->execute()){trigger_error("there was an error....".$conn->error, E_USER_WARNING);}else{
                                echo json_encode(array("code"=>"true","mcode"=>"messageSent"));
                                
                                $stmt4 = $conn->prepare("SELECT * FROM messages WHERE ( mfrom = ? AND mto = ? ) OR ( mto = ? AND mfrom = ? ) ORDER BY id DESC LIMIT 1");
                                $stmt4->bind_param("ssss", $id , $toid, $id , $toid);
                                $stmt4->execute();
                                $result4=$stmt4->get_result();
                                $post4=$result4->fetch_assoc();
                                
                                notificationC($from,$to,"message",$post4['id']);
                            }

                        }else{
                            echo "error";
                        }
                       
                       
                        
                    }else{
                        
                        $from = $_SESSION['id'];
                        $to = $toid;
                        $message = $_POST['text'];
                        $status="0";
                        $stmt = $conn->prepare("INSERT INTO messages (mfrom, mto, message, status) VALUES (?, ?, ?, ?)");
                        $stmt->bind_param('sssi', $from, $to, $message,$status);

                        // insert a row
                        $from = $_SESSION['id'];
                        $to = $toid;
                        //execute
                        if($stmt->execute()){echo json_encode(array("code"=>"true","mcode"=>"messageSent"));
                             $stmt4 = $conn->prepare("SELECT * FROM messages WHERE ( mfrom = ? AND mto = ? ) OR ( mto = ? AND mfrom = ? ) ORDER BY id DESC LIMIT 1");
                             $stmt4->bind_param("ssss", $from , $to, $from , $to);
                             $stmt4->execute();
                             $result4=$stmt4->get_result();
                             $post4=$result4->fetch_assoc(); 
                                             
                             notificationC($from, $to, "message", $post4['id']);
                        }else{

                        };
                        
            
                    }
                    
                }
            }
        break;
    }
    }
}

if (isset($_POST['descussion'])){
        header("Content-Type: application/json; charset=UTF-8");

        if (isset($_SESSION['id']) && $_SESSION['type']=='1' ){
            
              $myid=$_SESSION['id'];
            switch ($_POST['descussion']){
                    
                    case 'get_gdesc':
                    
                        $stmt1 = $conn->prepare("SELECT id,name FROM gdescussion");
                        $stmt1->execute();
                        $result1=$stmt1->get_result();
                        $data=[];
                        while($gds=$result1->fetch_assoc()){
                            array_push($data,$gds);
                        }
                        echo json_encode(['data'=>$data]);
                    
                    break;
                  
                    
                    case 'add_GF':
                        $title=filter_var(htmlentities($_POST['title']),FILTER_SANITIZE_STRING);
                      
                    
                        if (strlen($title)>3){    /**OR_this_can_do_that*/  
                            
                            $stmt1 = $conn->prepare("SELECT * FROM gdescussion WHERE name=?");
                            $stmt1->bind_param("s", $title);
                            $stmt1->execute();
                            $result1=$stmt1->get_result();
                            if ($result1->num_rows=='0'){
                                
                                $stmt4 = $conn->prepare("INSERT INTO gdescussion (name,idU) VALUES(?,?)");
                                $stmt4->bind_param("ss", $title,$myid);
                                if($stmt4->execute()){
                                    echo json_encode(['code'=>true,'mcode'=>true]);
                                }else{
                                    echo json_encode(['code'=>false,'mcode'=>false]);
                                }
                                
                            }else{
                                echo json_encode(['code'=>false,'mcode'=>'alreExist']);
                            }
                            
                        }else{
                           if(strlen($title)<3){
                                echo json_encode(['code'=>false,'mcode'=>'smallinput']);
                           }
                        }
                    break;
                  
                    
                    case 'add_FR':
                        $title=filter_var(htmlentities($_POST['title']),FILTER_SANITIZE_STRING);
                        $gdid=$_POST['gdes'];
                        $descr=filter_var(htmlentities($_POST['descr']),FILTER_SANITIZE_STRING);
                      
                        
                        $stmt1 = $conn->prepare("SELECT * FROM gdescussion WHERE id=?");
                        $stmt1->bind_param("s", $gdid);
                        $stmt1->execute();
                        $result1=$stmt1->get_result();
                    
                        if (strlen($title)>3 && strlen($descr)>20 && strlen($descr)<90 && $result1->num_rows=='1'){    /**OR_this_can_do_that*/  
                            
                            $stmt2 = $conn->prepare("SELECT * FROM forum WHERE name=?");
                            $stmt2->bind_param("s", $title);
                            $stmt2->execute();
                            $result2=$stmt2->get_result();
                            
                            
                            if ($result2->num_rows=='0'){
                                
                                $stmt4 = $conn->prepare("INSERT INTO forum (idG,name,descr,idU) VALUES(?,?,?,?)");
                                $stmt4->bind_param("ssss", $gdid,$title,$descr,$myid);
                                if($stmt4->execute()){
                                    echo json_encode(['code'=>true,'mcode'=>true]);
                                }else{
                                    echo json_encode(['code'=>false,'mcode'=>false]);
                                }
                                
                            }else{
                                echo json_encode(['code'=>false,'mcode'=>'alreExist']);
                            }
                            
                        }else{
                           if(strlen($title)<3){
                                echo json_encode(['code'=>false,'mcode'=>'smallinput']);
                           }
                           if(strlen($descr)<20){
                                echo json_encode(['code'=>false,'mcode'=>'smalldescr']);
                           }
                        }
                    break;
                
                    case 'add_topic':
                        
                    break;
            }
        }else{
            
        }
}

if(isset($_POST['management'])){
    header("Content-Type: application/json; charset=UTF-8");
    if (isset($_SESSION['id']) && (($_SESSION['type']=='2' && iama('manager',$_SESSION['id'])) || $_SESSION['type']=='1') ){
        switch ($_POST['management']){
            case 'accept':
                
                $subject=filter_var(htmlentities($_POST['subject']),FILTER_SANITIZE_STRING);
                $message=filter_var(htmlentities($_POST['message']),FILTER_SANITIZE_STRING);
                $id=$_POST['id'];
                
                $stmt1 = $conn->prepare("SELECT * FROM mission WHERE id=? AND status='0'");
                $stmt1->bind_param("s", $id);
                $stmt1->execute();
                $result1=$stmt1->get_result();
                if($result1->num_rows=='0'){
                    echo json_encode(["code"=>'false',"mcode"=>'AlredyAcce']);
                }else{
                    $missioninfo=$result1->fetch_assoc();
                    
                    if($missioninfo['type']=='addTitle'){
                        $stmt4 = $conn->prepare("UPDATE title SET admin_o='1' WHERE id=?");
                        $stmt4->bind_param("s", $missioninfo['idT']);
                        $stmt4->execute();

                        $stmt4 = $conn->prepare("UPDATE mission SET status='Accepted' WHERE id=?");
                        $stmt4->bind_param("s", $missioninfo['id']);
                        $stmt4->execute();


                        $idU=$_SESSION['id'];
                        $toid=$missioninfo['idU'];
                        $sql="SELECT * FROM msession WHERE (mfrom='$idU' AND mto='$toid') OR (mto='$idU' AND mfrom='$toid') ";
                        $query=$conn->query($sql);


                        if(mysqli_num_rows($query)=='0'){

                            $from = $_SESSION['id'];
                            $to = $toid;
                            $message =filter_var(htmlentities($_POST['message']),FILTER_SANITIZE_STRING);

                            $sql="INSERT INTO msession(mfrom,mto,sub) VALUES('$from','$toid','$subject')";
                            if($conn->query($sql)){

                                    $stmt = $conn->prepare("INSERT INTO messages (mfrom, mto, message, status) VALUES (?, ?, ?, '0')");
                                    $stmt->bind_param('sss', $from, $to, $message);
                                    // insert a row
                                    $from = $_SESSION['id'];
                                    $to = $toid;

                                    if(!$stmt->execute()){trigger_error("there was an error....".$conn->error, E_USER_WARNING);}else{

                                        $stmt4 = $conn->prepare("SELECT * FROM messages WHERE ( mfrom = ? AND mto = ? ) OR ( mto = ? AND mfrom = ? ) ORDER BY id DESC LIMIT 1");
                                        $stmt4->bind_param("ssss", $idU , $toid, $idU , $toid);
                                        $stmt4->execute();
                                        $result4=$stmt4->get_result();
                                        $post4=$result4->fetch_assoc();

                                        notificationC($from,$to,"message",$post4['id']);
                                    }

                            }else{
                            echo "error";
                            }



                        }else{

                            $from = $_SESSION['id'];
                            $to = $toid;
                            $message =filter_var(htmlentities($_POST['message']),FILTER_SANITIZE_STRING);
                            $status="0";
                            $stmt = $conn->prepare("INSERT INTO messages (mfrom, mto, message, status) VALUES (?, ?, ?, ?)");
                            $stmt->bind_param('sssi', $from, $to, $message,$status);

                            // insert a row
                            $from = $_SESSION['id'];
                            $to = $toid;
                            //execute
                            if($stmt->execute()){
                                    $stmt4 = $conn->prepare("SELECT * FROM messages WHERE ( mfrom = ? AND mto = ? ) OR ( mto = ? AND mfrom = ? ) ORDER BY id DESC LIMIT 1");
                                    $stmt4->bind_param("ssss", $from , $to, $from , $to);
                                    $stmt4->execute();
                                    $result4=$stmt4->get_result();
                                    $post4=$result4->fetch_assoc();

                                    notificationC($from, $to, "message", $post4['id']);
                            }else{

                            };


                        }
                        echo json_encode(["code"=>'true',"mcode"=>'true']);
                        
                    
                    }elseif($missioninfo['type']=='addPers'){
                        $stmt4 = $conn->prepare("UPDATE persones SET status='1' WHERE id=?");
                        $stmt4->bind_param("s", $missioninfo['idT']);
                        $stmt4->execute();
                        
                        $stmt4 = $conn->prepare("UPDATE mission SET status='Accepted' WHERE id=?");
                        $stmt4->bind_param("s", $missioninfo['id']);
                        $stmt4->execute();
                    
                    
                    $idU=$_SESSION['id'];
                    $toid=$missioninfo['idU'];
                    $sql="SELECT * FROM msession WHERE (mfrom='$idU' AND mto='$toid') OR (mto='$idU' AND mfrom='$toid') ";
                    $query=$conn->query($sql);
                    
                    
                    if(mysqli_num_rows($query)=='0'){
                        
                        $from = $_SESSION['id'];
                        $to = $toid;
                        $message =filter_var(htmlentities($_POST['message']),FILTER_SANITIZE_STRING);
                        
                        $sql="INSERT INTO msession(mfrom,mto,sub) VALUES('$from','$toid','$subject')";
                        if($conn->query($sql)){
                           
                            $stmt = $conn->prepare("INSERT INTO messages (mfrom, mto, message, status) VALUES (?, ?, ?, '0')");
                            $stmt->bind_param('sss', $from, $to, $message);
                            // insert a row
                            $from = $_SESSION['id'];
                            $to = $toid;
                            
                            if(!$stmt->execute()){trigger_error("there was an error....".$conn->error, E_USER_WARNING);}else{
                                
                                $stmt4 = $conn->prepare("SELECT * FROM messages WHERE ( mfrom = ? AND mto = ? ) OR ( mto = ? AND mfrom = ? ) ORDER BY id DESC LIMIT 1");
                                $stmt4->bind_param("ssss", $idU , $toid, $idU , $toid);
                                $stmt4->execute();
                                $result4=$stmt4->get_result();
                                $post4=$result4->fetch_assoc();
                                
                                notificationC($from,$to,"message",$post4['id']);
                            }

                        }else{
                            echo "error";
                        }
                    
                       
                        
                    }else{
                        
                        $from = $_SESSION['id'];
                        $to = $toid;
                        $message =filter_var(htmlentities($_POST['message']),FILTER_SANITIZE_STRING);
                        $status="0";
                        $stmt = $conn->prepare("INSERT INTO messages (mfrom, mto, message, status) VALUES (?, ?, ?, ?)");
                        $stmt->bind_param('sssi', $from, $to, $message,$status);

                        // insert a row
                        $from = $_SESSION['id'];
                        $to = $toid;
                        //execute
                        if($stmt->execute()){
                             $stmt4 = $conn->prepare("SELECT * FROM messages WHERE ( mfrom = ? AND mto = ? ) OR ( mto = ? AND mfrom = ? ) ORDER BY id DESC LIMIT 1");
                             $stmt4->bind_param("ssss", $from , $to, $from , $to);
                             $stmt4->execute();
                             $result4=$stmt4->get_result();
                             $post4=$result4->fetch_assoc(); 
                                             
                             notificationC($from, $to, "message", $post4['id']);
                        }else{

                        };
                        
            
                    }
                        echo json_encode(["code"=>'true',"mcode"=>'true']);
                    
                        
                    }elseif($missioninfo['type']=='edititle'){
                            
                        $stmt4 = $conn->prepare("UPDATE mission SET status='Accepted' WHERE id=?");
                        $stmt4->bind_param("s", $missioninfo['id']);
                        $stmt4->execute();
                        
                        $stmt4 = $conn->prepare("SELECT * FROM postedit WHERE id=?");
                        $stmt4->bind_param("s", $missioninfo['idT']);
                        $stmt4->execute();
                        $rs=$stmt4->get_result();
                        $frE=$rs->fetch_assoc();
                        
                        
                        
                        if($frE['image']==''){
                            $img=titleinfo($frE['idO'])['image'];
                        }else{
                            $img=$frE['image'];
                        }
                        
                        
                        $stmt4 = $conn->prepare("UPDATE title SET
                        
                                                title=?,
                                                country=?,
                                                title_origine=?,
                                                other_names=?,
                                                auther_id=?,
                                                synopsis=?,
                                                status=?,
                                                content_rate=?,
                                                content_type=?,
                                                duration=?,
                                                episodes=?,
                                                tvshow_type=?,
                                                image=?,
                                                rate=?,
                                                season=?,
                                                p_date=?,
                                                f_date=?,
                                                origin_lang=?,
                                                production_count=?,
                                                origin_net=?,
                                                genre=?,
                                                tag=?
                                                
                                                WHERE id=?");
                        
                        $stmt4->bind_param("sssssssssssssssssssssss",$frE['title'],$frE['country'],$frE['title_origine'],$frE['other_names'],$frE['auther_id'],$frE['synopsis'],$frE['status'],$frE['content_rate'],$frE['content_type'],$frE['duration'],$frE['episodes'],$frE['tvshow_type'],$img,$frE['rate'],$frE['season'],$frE['p_date'],$frE['f_date'],$frE['origin_lang'],$frE['production_count'],$frE['origin_net'],$frE['genre'],$frE['tag'],$frE['idO']);
                        $stmt4->execute();
                        
                        
                        
                        $stmt4 = $conn->prepare("SELECT * FROM editwork WHERE idT=?");
                        $stmt4->bind_param("s", $missioninfo['idT']);
                        $stmt4->execute();
                        $rsw=$stmt4->get_result();
              
                        
                        
                        $stmt4 = $conn->prepare("DELETE  FROM work WHERE idT=?");
                        $stmt4->bind_param("s", $frE['idO']);
                        $stmt4->execute();
                        
                        
                        while($wori=$rsw->fetch_assoc()){
                            if($wori['format']=='related'){
                              $tr=postexist($wori['idP'],'ac');
                            }else{
                              $tr=postexist($wori['idT'],'dr');
                            }
                           
                            
                            if($tr){  
                                $stmtn = $conn->prepare("INSERT INTO work(idP,format,idT,chara,type) values(?,?,?,?,?)");
                                $stmtn->bind_param("sssss", $wori['idP'], $wori['format'],$frE['idO'], $wori['chara'],$wori['type']);
                                $stmtn->execute();
                            }
                        }
                        
                        $idU=$_SESSION['id'];
                        $toid=$missioninfo['idU'];
                        $sql="SELECT * FROM msession WHERE (mfrom='$idU' AND mto='$toid') OR (mto='$idU' AND mfrom='$toid') ";
                        $query=$conn->query($sql);
                    
                    
                        if(mysqli_num_rows($query)=='0'){
                        
                            
                            
                            
                            $from = $_SESSION['id'];
                            $to = $toid;
                            $message =filter_var(htmlentities($_POST['message']),FILTER_SANITIZE_STRING);
                        
                            $sql="INSERT INTO msession(mfrom,mto,sub) VALUES('$from','$toid','$subject')";
                            if($conn->query($sql)){
                           
                            $stmt = $conn->prepare("INSERT INTO messages (mfrom, mto, message, status) VALUES (?, ?, ?, '0')");
                            $stmt->bind_param('sss', $from, $to, $message);
                            // insert a row
                            $from = $_SESSION['id'];
                            $to = $toid;
                            
                            if(!$stmt->execute()){trigger_error("there was an error....".$conn->error, E_USER_WARNING);}else{
                                
                                $stmt4 = $conn->prepare("SELECT * FROM messages WHERE ( mfrom = ? AND mto = ? ) OR ( mto = ? AND mfrom = ? ) ORDER BY id DESC LIMIT 1");
                                $stmt4->bind_param("ssss", $idU , $toid, $idU , $toid);
                                $stmt4->execute();
                                $result4=$stmt4->get_result();
                                $post4=$result4->fetch_assoc();
                                
                                notificationC($from,$to,"message",$post4['id']);
                            }

                        }else{
                            echo "error";
                        }
                       
                       
                        
                    }else{
                        
                        $from = $_SESSION['id'];
                        $to = $toid;
                        $message =filter_var(htmlentities($_POST['message']),FILTER_SANITIZE_STRING);
                        $status="0";
                        $stmt = $conn->prepare("INSERT INTO messages (mfrom, mto, message, status) VALUES (?, ?, ?, ?)");
                        $stmt->bind_param('sssi', $from, $to, $message,$status);

                        // insert a row
                        $from = $_SESSION['id'];
                        $to = $toid;
                        //execute
                        if($stmt->execute()){
                             $stmt4 = $conn->prepare("SELECT * FROM messages WHERE ( mfrom = ? AND mto = ? ) OR ( mto = ? AND mfrom = ? ) ORDER BY id DESC LIMIT 1");
                             $stmt4->bind_param("ssss", $from , $to, $from , $to);
                             $stmt4->execute();
                             $result4=$stmt4->get_result();
                             $post4=$result4->fetch_assoc(); 
                                             
                             notificationC($from, $to, "message", $post4['id']);
                        }else{

                        };
                        
            
                    }
                        echo json_encode(["code"=>'true',"mcode"=>'true']);
                    
                    }elseif($missioninfo['type']=='edipersone'){
                            
                        $stmt4 = $conn->prepare("UPDATE mission SET status='Accepted' WHERE id=?");
                        $stmt4->bind_param("s", $missioninfo['id']);
                        $stmt4->execute();
                        
                        $stmt4 = $conn->prepare("SELECT * FROM editpers WHERE id=?");
                        $stmt4->bind_param("s", $missioninfo['idT']);
                        $stmt4->execute();
                        $rs=$stmt4->get_result();
                        $frE=$rs->fetch_assoc();
                        
                        
                        
                        if($frE['picture']==''){
                            $img=titleinfo($frE['idO'])['picture'];
                        }else{
                            $img=$frE['picture'];
                        }
                        
                        
                        $stmt4 = $conn->prepare("UPDATE persones SET
                        
                                                fname=?,
                                                lname=?,
                                                sex=?,
                                                country=?,
                                                orname=?,
                                                othname=?,
                                                biography=?,
                                                dayb=?,
                                                dayd=?,
                                                picture=?
                                                
                                                WHERE id=?");
                        
                        $stmt4->bind_param("sssssssssss",$frE['fname'],$frE['lname'],$frE['sex'],$frE['country'],$frE['orname'],$frE['othname'],$frE['biography'],$frE['dayb'],$frE['dayd'],$frE['picture'],$frE['idO']);
                        $stmt4->execute();
                        
                        
                        
                        $stmt4 = $conn->prepare("SELECT * FROM editwork WHERE idP=?");
                        $stmt4->bind_param("s", $missioninfo['idT']);
                        $stmt4->execute();
                        $rsw=$stmt4->get_result();
              
                        
                        
                        $stmt4 = $conn->prepare("DELETE  FROM work WHERE idP=?");
                        $stmt4->bind_param("s", $frE['idO']);
                        $stmt4->execute();
                        
                        
                        while($wori=$rsw->fetch_assoc()){
                            if($wori['format']=='related'){
                              $tr=postexist($wori['idP'],'ac');
                            }else{
                              $tr=postexist($wori['idT'],'dr');
                            }
                            echo $frE['idO'];
                            
                            if($tr){  
                                $stmtn = $conn->prepare("INSERT INTO work(idP,format,idT,chara,type) values(?,?,?,?,?)");
                                $stmtn->bind_param("sssss",$frE['idO'], $wori['format'], $wori['idP'], $wori['chara'],$wori['type']);
                                $stmtn->execute();
                            }
                        }
                        
                        $idU=$_SESSION['id'];
                        $toid=$missioninfo['idU'];
                        $sql="SELECT * FROM msession WHERE (mfrom='$idU' AND mto='$toid') OR (mto='$idU' AND mfrom='$toid') ";
                        $query=$conn->query($sql);
                    
                    
                        if(mysqli_num_rows($query)=='0'){
                        
                            
                            
                            
                            $from = $_SESSION['id'];
                            $to = $toid;
                            $message =filter_var(htmlentities($_POST['message']),FILTER_SANITIZE_STRING);
                        
                            $sql="INSERT INTO msession(mfrom,mto,sub) VALUES('$from','$toid','$subject')";
                            if($conn->query($sql)){
                           
                            $stmt = $conn->prepare("INSERT INTO messages (mfrom, mto, message, status) VALUES (?, ?, ?, '0')");
                            $stmt->bind_param('sss', $from, $to, $message);
                            // insert a row
                            $from = $_SESSION['id'];
                            $to = $toid;
                            
                            if(!$stmt->execute()){trigger_error("there was an error....".$conn->error, E_USER_WARNING);}else{
                                
                                $stmt4 = $conn->prepare("SELECT * FROM messages WHERE ( mfrom = ? AND mto = ? ) OR ( mto = ? AND mfrom = ? ) ORDER BY id DESC LIMIT 1");
                                $stmt4->bind_param("ssss", $idU , $toid, $idU , $toid);
                                $stmt4->execute();
                                $result4=$stmt4->get_result();
                                $post4=$result4->fetch_assoc();
                                
                                notificationC($from,$to,"message",$post4['id']);
                            }

                        }else{
                            echo "error";
                        }
                       
                       
                        
                    }else{
                        
                        $from = $_SESSION['id'];
                        $to = $toid;
                        $message =filter_var(htmlentities($_POST['message']),FILTER_SANITIZE_STRING);
                        $status="0";
                        $stmt = $conn->prepare("INSERT INTO messages (mfrom, mto, message, status) VALUES (?, ?, ?, ?)");
                        $stmt->bind_param('sssi', $from, $to, $message,$status);

                        // insert a row
                        $from = $_SESSION['id'];
                        $to = $toid;
                        //execute
                        if($stmt->execute()){
                             $stmt4 = $conn->prepare("SELECT * FROM messages WHERE ( mfrom = ? AND mto = ? ) OR ( mto = ? AND mfrom = ? ) ORDER BY id DESC LIMIT 1");
                             $stmt4->bind_param("ssss", $from , $to, $from , $to);
                             $stmt4->execute();
                             $result4=$stmt4->get_result();
                             $post4=$result4->fetch_assoc(); 
                                             
                             notificationC($from, $to, "message", $post4['id']);
                        }else{

                        };
                        
            
                    }
                        echo json_encode(["code"=>'true',"mcode"=>'true']);
                    
                    }
                }
            break;
                
            case 'refuse':
                $subject=filter_var(htmlentities($_POST['subject']),FILTER_SANITIZE_STRING);
                $message=filter_var(htmlentities($_POST['message']),FILTER_SANITIZE_STRING);
                $id=$_POST['id'];
                
                $stmt1 = $conn->prepare("SELECT * FROM mission WHERE id=? AND status='0'");
                $stmt1->bind_param("s", $id);
                $stmt1->execute();
                $result1=$stmt1->get_result();
                if($result1->num_rows=='0'){
                    echo json_encode(["code"=>'false',"mcode"=>'AlredyAcce']);
                }else{
                    $missioninfo=$result1->fetch_assoc();
                    
                    if($missioninfo['type']=='addTitle'){
                        
                        
                        $stmt4 = $conn->prepare("UPDATE mission SET status='Refused' WHERE id=?");
                        $stmt4->bind_param("s", $missioninfo['id']);
                        $stmt4->execute();
                    
                    
                    $idU=$_SESSION['id'];
                    $toid=$missioninfo['idU'];
                    $sql="SELECT * FROM msession WHERE (mfrom='$idU' AND mto='$toid') OR (mto='$idU' AND mfrom='$toid') ";
                    $query=$conn->query($sql);
                    
                    
                    if(mysqli_num_rows($query)=='0'){
                        
                        $from = $_SESSION['id'];
                        $to = $toid;
                        $message =filter_var(htmlentities($_POST['message']),FILTER_SANITIZE_STRING);
                        
                        $sql="INSERT INTO msession(mfrom,mto,sub) VALUES('$from','$toid','$sub')";
                        if($conn->query($sql)){
                           
                            $stmt = $conn->prepare("INSERT INTO messages (mfrom, mto, message, status) VALUES (?, ?, ?, '0')");
                            $stmt->bind_param('sss', $from, $to, $message);
                            // insert a row
                            $from = $_SESSION['id'];
                            $to = $toid;
                            
                            if(!$stmt->execute()){trigger_error("there was an error....".$conn->error, E_USER_WARNING);}else{
                                
                                $stmt4 = $conn->prepare("SELECT * FROM messages WHERE ( mfrom = ? AND mto = ? ) OR ( mto = ? AND mfrom = ? ) ORDER BY id DESC LIMIT 1");
                                $stmt4->bind_param("ssss", $idU , $toid, $idU , $toid);
                                $stmt4->execute();
                                $result4=$stmt4->get_result();
                                $post4=$result4->fetch_assoc();
                                
                                notificationC($from,$to,"message",$post4['id']);
                            }

                        }else{
                            echo "error";
                        }
                       
                       
                        
                    }else{
                        
                        $from = $_SESSION['id'];
                        $to = $toid;
                        $message =filter_var(htmlentities($_POST['message']),FILTER_SANITIZE_STRING);
                        $status="0";
                        $stmt = $conn->prepare("INSERT INTO messages (mfrom, mto, message, status) VALUES (?, ?, ?, ?)");
                        $stmt->bind_param('sssi', $from, $to, $message,$status);

                        // insert a row
                        $from = $_SESSION['id'];
                        $to = $toid;
                        //execute
                        if($stmt->execute()){
                             $stmt4 = $conn->prepare("SELECT * FROM messages WHERE ( mfrom = ? AND mto = ? ) OR ( mto = ? AND mfrom = ? ) ORDER BY id DESC LIMIT 1");
                             $stmt4->bind_param("ssss", $from , $to, $from , $to);
                             $stmt4->execute();
                             $result4=$stmt4->get_result();
                             $post4=$result4->fetch_assoc(); 
                                             
                             notificationC($from, $to, "message", $post4['id']);
                        }else{

                        };
                        
            
                    }
                        echo json_encode(["code"=>'true',"mcode"=>'true']);
                    
                        
                    
                    }elseif($missioninfo['type']=='addPers'){
                         $stmt4 = $conn->prepare("UPDATE mission SET status='Refused' WHERE id=?");
                        $stmt4->bind_param("s", $missioninfo['id']);
                        $stmt4->execute();
                    
                    
                    $idU=$_SESSION['id'];
                    $toid=$missioninfo['idU'];
                    $sql="SELECT * FROM msession WHERE (mfrom='$idU' AND mto='$toid') OR (mto='$idU' AND mfrom='$toid') ";
                    $query=$conn->query($sql);
                    
                    
                    if(mysqli_num_rows($query)=='0'){
                        
                        $from = $_SESSION['id'];
                        $to = $toid;
                        $message =filter_var(htmlentities($_POST['message']),FILTER_SANITIZE_STRING);
                        
                        $sql="INSERT INTO msession(mfrom,mto,sub) VALUES('$from','$toid','$sub')";
                        if($conn->query($sql)){
                           
                            $stmt = $conn->prepare("INSERT INTO messages (mfrom, mto, message, status) VALUES (?, ?, ?, '0')");
                            $stmt->bind_param('sss', $from, $to, $message);
                            // insert a row
                            $from = $_SESSION['id'];
                            $to = $toid;
                            
                            if(!$stmt->execute()){trigger_error("there was an error....".$conn->error, E_USER_WARNING);}else{
                                
                                $stmt4 = $conn->prepare("SELECT * FROM messages WHERE ( mfrom = ? AND mto = ? ) OR ( mto = ? AND mfrom = ? ) ORDER BY id DESC LIMIT 1");
                                $stmt4->bind_param("ssss", $idU , $toid, $idU , $toid);
                                $stmt4->execute();
                                $result4=$stmt4->get_result();
                                $post4=$result4->fetch_assoc();
                                
                                notificationC($from,$to,"message",$post4['id']);
                            }

                        }else{
                            echo "error";
                        }
                       
                       
                        
                    }else{
                        
                        $from = $_SESSION['id'];
                        $to = $toid;
                        $message =filter_var(htmlentities($_POST['message']),FILTER_SANITIZE_STRING);
                        $status="0";
                        $stmt = $conn->prepare("INSERT INTO messages (mfrom, mto, message, status) VALUES (?, ?, ?, ?)");
                        $stmt->bind_param('sssi', $from, $to, $message,$status);

                        // insert a row
                        $from = $_SESSION['id'];
                        $to = $toid;
                        //execute
                        if($stmt->execute()){
                             $stmt4 = $conn->prepare("SELECT * FROM messages WHERE ( mfrom = ? AND mto = ? ) OR ( mto = ? AND mfrom = ? ) ORDER BY id DESC LIMIT 1");
                             $stmt4->bind_param("ssss", $from , $to, $from , $to);
                             $stmt4->execute();
                             $result4=$stmt4->get_result();
                             $post4=$result4->fetch_assoc(); 
                                             
                             notificationC($from, $to, "message", $post4['id']);
                        }else{

                        };
                        
            
                    }
                        echo json_encode(["code"=>'true',"mcode"=>'true']);
                    
                        
                    }
                }
            break;
        }
    }
}


if (isset($_POST['logo']) && isset($_SESSION['id']) && (($_SESSION['type']=='2' && iama('manager',$_SESSION['id'])) || $_SESSION['type']=='1')){
    
    if(isset($_FILES['main']) && !empty($_FILES['main'])){
        $up=uploadlogo($_FILES['main']);
        if($up['imguploaded']=='true'){
            $stmt4 = $conn->prepare("INSERT INTO social(type,info) VALUES ('main_logo',?)");
            $stmt4->bind_param("s", $up['imagename']);
            $stmt4->execute();
        }
    }
    
    if(isset($_FILES['footer']) && !empty($_FILES['footer'])){
        $up=uploadlogo($_FILES['footer']);
        if($up['imguploaded']=='true'){    
            $stmt4 = $conn->prepare("INSERT INTO social(type,info) VALUES ('footer_logo',?)");
            $stmt4->bind_param("s", $up['imagename']);
            $stmt4->execute();
        }
    }
    
    if(isset($_FILES['mobile']) && !empty($_FILES['mobile'])){  
        $up=uploadlogo($_FILES['mobile']); 
        if($up['imguploaded']=='true'){     
            $stmt4 = $conn->prepare("INSERT INTO social(type,info) VALUES ('mobile_logo',?)");
            $stmt4->bind_param("s", $up['imagename']);
            $stmt4->execute();
        }
        
    }
    
}




if (isset($_POST['social']) && isset($_SESSION['id']) && $_SESSION['type']=='1'){
    
    if(isset($_POST['facebook']) && !empty($_POST['facebook'])){
        
        $up=UrlCheck($_POST['facebook']);
        
        if($up['valide']){
            $stmt4 = $conn->prepare("INSERT INTO social(type,info) VALUES ('facebook',?)");
            $stmt4->bind_param("s", $_POST['facebook']);
            $stmt4->execute();
        } 
    }
    
    
    if(isset($_POST['twitter']) && !empty($_POST['twitter'])){
        
        $up=UrlCheck($_POST['twitter']);
        
        if($up['valide']){
            $stmt4 = $conn->prepare("INSERT INTO social(type,info) VALUES ('twitter',?)");
            $stmt4->bind_param("s", $_POST['twitter']);
            $stmt4->execute();
        }
    }
    
    
    if(isset($_POST['instagram']) && !empty($_POST['instagram'])){
        
        $up=UrlCheck($_POST['instagram']);
        
        if($up['valide']){
            $stmt4 = $conn->prepare("INSERT INTO social(type,info) VALUES ('instagram',?)");
            $stmt4->bind_param("s", $_POST['instagram']);
            $stmt4->execute();
        }
    }   
    
    if(isset($_POST['youtube']) && !empty($_POST['youtube'])){
        
        $up=UrlCheck($_POST['youtube']);
        
        if($up['valide']){
            $stmt4 = $conn->prepare("INSERT INTO social(type,info) VALUES ('youtube',?)");
            $stmt4->bind_param("s", $_POST['youtube']);
            $stmt4->execute();
        }
        
    }
    
}


if (isset($_POST['pages']) && isset($_SESSION['id']) && $_SESSION['type']=='1'){
    if ($_POST['pages']=='creation'){
        $tl=false;
        $cn=false;
        $tp=false;
        
        if(isset($_POST['title']) && !empty($_POST['title']) && !($_POST['title']=='') ){
            $tl=true;
        }
        
        if(isset($_POST['type']) && !empty($_POST['type']) && !($_POST['type']=='')) {
            $tp=true;
        }
        
        if(isset($_POST['content']) && !empty($_POST['content']) && !($_POST['content']=='') ){
            $cn=true;
        }
        
        
        if($tl && $cn && $tp){
            $stmt4 = $conn->prepare("INSERT INTO pages(title,type,content) VALUES (?,?,?)");
            $stmt4->bind_param("sss", $_POST['title'],$_POST['type'],$_POST['content']);
            $stmt4->execute();
        }
    }
}
?>
