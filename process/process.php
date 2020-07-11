<?php 
ob_start();

    //* بإسم الله الرحمان الرحيم
    //* Vendredi 14-02-2020 
    //*   الزبون الكريم صابر

session_start();
include("conn.php");  
include("functions.php");

//Login steps
    
    if(isset($_POST['register'])){
        header("Content-Type: application/json; charset=UTF-8");
        
        //inputs from the form.
        $fresh_username=$_POST['username'];
        $fresh_email=$_POST['email'];
        $fresh_pass=$_POST['password'];
        
        
        //check if the username _containe special chars_ not empty _valid length (>3)
        
            //check if username exist:
            
        
        $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->bind_param("s", $fresh_username);
        $stmt->execute();
        //fetching result would go here, but will be covered later
        $result = $stmt->get_result();
        
        $unotexist=($stmt->num_rows==0);
        
        
        
            
        if( (strlen($fresh_username)>3) && (strlen($fresh_username)<12) && !($fresh_username=='') && (preg_match('/[^a-zA-Z0-9_]/', $fresh_username) == 0) && $unotexist)
        {
            $e_username=true;
            $c_username=1;
        }else{
            $e_username=false;
            $c_username=0;
            
            
            if($fresh_username==''){
                $c_username="us_Empty";
            }elseif(!(strlen($fresh_username)>3)){
                $c_username="us_Small";
            }elseif(!(strlen($fresh_username)<12)){
                $c_username="us_Big";
            }elseif(!(preg_match('/[^a-zA-Z0-9_]/', $fresh_username) == 0)){
                $c_username="us_Invalid";
            }elseif(!$unotexist){
                $c_username="us_Already";
            }
        }
        
        $stmt->close();
        
        //check if the email is valid
            //check if email exist:
            
        $sql="SELECT email FROM users WHERE email='$fresh_email'";
        $enotexist=(mysqli_num_rows($conn->query($sql))==0);
        
        if (filter_var($fresh_email, FILTER_VALIDATE_EMAIL) && $enotexist) {
          $e_email=true; $c_email=1;
        } else {
          $e_email=false; $c_email=0;
          
          if(!$enotexist){
              $c_email="em_Already";
          }elseif(!filter_var($fresh_email, FILTER_VALIDATE_EMAIL)){
              $c_email="em_Invalid";
          }
        }
        
        
        //check if the password is valid
        
        if (preg_match('/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/', $fresh_pass) && strlen($fresh_pass)>8){
            $e_pass=true; $c_pass=1;
        }else{
            if (strlen($fresh_pass)<8){
                $e_pass=false; $c_pass='ps_small';
            }elseif(!preg_match('/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/', $fresh_pass)){
                $e_pass=false; $c_pass='ps_invalid';
            }
        }
        
            
        
        if ( $e_username && $e_email && $e_pass){
            
            
            $code=substr(str_shuffle('123456780abcdefghijkABCDEFGHIJK'),0,15);
            
            $password=password_hash($fresh_pass, PASSWORD_DEFAULT);
            $sql="INSERT INTO users(code,username,displayname,password,email,emailver,type,picture) VALUES('$code','$fresh_username','$fresh_username','$password','$fresh_email','0','0','imageusers/user.png')";
            if($conn->query($sql)){
                
                echo json_encode(array("code"=>true,"saved"=> true));
               
                $_SESSION["id"] = $code;
                $_SESSION["img"] = "imageusers/user.png"; 
                $_SESSION["username"] = $fresh_username;
                $_SESSION["email"] = $fresh_email;
                $_SESSION["type"] = '0';
                
                $host = "smtp.ta9yem.com";
                $username = "noreply@ta9yem.com";
                $password = "Fz25965b1";
                $port = "578";
                
                $to = $fresh_email;
                $subject = 'تأكيد البريد الإلكتروني الخاص بك.';
                $from='noreply@ta9yem.com';

                // To send HTML mail, the Content-type header must be set
                $headers  = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

                // Create email headers
                $headers .= 'From: '.$from."\r\n".
                    'Reply-To: Ta9yem'."\r\n" .
                    'X-Mailer: PHP/' . phpversion();
                
                $hash = md5(rand(0,1000)); 
                $stmt = $conn->prepare("INSERT INTO verifie(code,email,hash,verif) VALUES(?,?,?,'0')");
                $stmt->bind_param("sss", $code,$fresh_email,$hash);
                $stmt->execute();
                
                
                
                // Compose a simple HTML email message
                $message = '<html><body style="">';
                $message .= '<h1 style="color:#f40;background-color:#4376aa;text-align:center;padding: 22px;"><img src="www.ta9yem.com/assets/logo_w.png"></h1>';
                $message .= '<h1 style="color:#000;text-align:center"> <b>'.$fresh_username.'</b>,  مرحبا بك في موقعنا</h1>';
                $message .= '<p style="color:##2c2f2c;font-size:18px;text-align:right">نحن سعداء بتسجيلك بموقعنا، بقيت آخر خطوة و هي تأكيد بريدك الالكتروني.</p>';
                $message .= '<p style="color:##2c2f2c;font-size:15px;text-align:right">لتأكيد بريدك الإلكتروني المرجوا الضغط على البريد التالي: <br><a href="http://www.ta9yem.com/verfie.php?em='.$fresh_email.'&hs='.$hash.'">http://www.ta9yem.com/verfie.php?em='.$fresh_email.'&hs='.$hash.'</a></p>';
                $message .= '</body></html>';
                
                
                // Sending email
                if(mail($to, $subject, $message, $headers)){
                    echo 'Your mail has been sent successfully.';
                } else{
                    echo 'Unable to send email. Please try again.';
                }
            
            }else{
                echo json_encode(array("code"=>false,"error"=> 'sss'));
            }
            
        }else{
            if (!$e_username){
                echo json_encode(array("code"=> "false","codem"=>$c_username));
            }elseif(!$e_email){
                echo json_encode(array("code"=> "false","codem"=>$c_email));
            }elseif(!$e_pass){
                echo json_encode(array("code"=> "false","codem"=>$c_pass));
            }
            
        }
        
        
    }

if(isset($_POST['login'])){
    header("Content-Type: application/json; charset=UTF-8");
    $email=$_POST['email'];
    $pass=$_POST['password'];
    
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $unotexist=($result->num_rows==0);
    
    if ($unotexist){
        echo json_encode(array("code"=>false));
    }else{
        $row = $result->fetch_assoc();
        
        if (password_verify($pass, $row["password"])){
            echo json_encode(array("code"=>true));
            
            $_SESSION["username"] = $row['username'];
            $_SESSION["img"] = $row['picture'];  
            $_SESSION["email"] = $row['email'];
            $_SESSION["id"] = $row['code'];
            $_SESSION["type"] = $row['type'];  
        }else{
            echo json_encode(array("code"=>false));
        } 
    }
}

if(isset($_POST['forgetpass'])){
    header("Content-Type: application/json; charset=UTF-8");
    $email=$_POST['email'];
    
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $unotexist=($result->num_rows==0);
    
    if ($unotexist){
        echo json_encode(array("code"=>false));
    }else{
        $row = $result->fetch_assoc();
        $username=$row['username'];
                                    $to = $row['email'];
                                    $subject = 'تأكيد البريد الإلكتروني الخاص بك.';
                                    $from='noreply@ta9yem.com';

                                    // To send HTML mail, the Content-type header must be set
                                    $headers  = 'MIME-Version: 1.0' . "\r\n";
                                    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

                                    // Create email headers
                                    $headers .= 'From: ta9yem@ta9yem.com'."\r\n".
                                        'Reply-To: Ta9yem'."\r\n" .
                                        'X-Mailer: PHP/' . phpversion();

                                    $hash = md5(rand(0,1000)); 
                                    
                                    

                                    // Compose a simple HTML email message
                                    $message = '<html><body style="">';
                                    $message .= '<h1 style="color:#f40;background-color:#4376aa;text-align:center;padding: 22px;"><img src="www.ta9yem.com/assets/logo_w.png"></h1>';
                                    $message .= '<h1 style="color:#000;text-align:center"> <b>'.$username.'</b>, مرحبا بك</h1>';
                                    $message .= '<p style="color:##2c2f2c;font-size:18px;text-align:right">تأكيد كلمة السر الخاصة بك.</p>';
                                    $message .= '<p style="color:##2c2f2c;font-size:15px;text-align:right">لتغيير كلمة السر الخاصة بك المرجوا الضغط على الرابط : <br><a href="http://www.ta9yem.com/passver.php?em='.$row['email'].'&hs='.$hash.'">http://www.ta9yem.com/pass_ver.php?em='.$row['email'].'&hs='.$hash.'</a></p>';
                                    $message .= '</body></html>';


                                    // Sending email
                                    if(mail($to, $subject, $message, $headers)){
                                    } else{
                                    }
        
                                    $stmt = $conn->prepare("INSERT INTO password_forget(idU,hash) VALUES(?,?)");
                                    $stmt->bind_param("ss", $row['code'],$hash);
                                    $stmt->execute();
                                    
                                    echo json_encode(array("code"=>true));
    }
}
if(isset($_POST['operation'])){
    header("Content-Type: application/json; charset=UTF-8");
    
        
        switch ($_POST['operation']){
            case 'like':
            if (isset($_SESSION['id']) && confirmed($_SESSION['id'])){
                $myid=$_SESSION['id'];
                $id = $_POST['id'];
                $type = $_POST['post'];
                
                $detailpost;
                $detailpost=detailpost($id,$type); #output: $postL $myL
                
                if ($detailpost['postE']=='true' &&  ($type=='ac' ||$type=='ls' || $type=='dr' || $type=='ar' || $type=='cm' || $type=='rp'  || $type=='rc' || $type=='fd' )){
                  if ($detailpost['myL']=='false'){

                    $stmtn = $conn->prepare("INSERT INTO likes(idP,postT,idL) values(?,?,?)");
                    $stmtn->bind_param("sss", $id, $type, $myid);
                    if ($stmtn->execute()){
                        
                        switch ($type){
                                
                            case 'cm':
                                
                                $stmt = $conn->prepare("SELECT * FROM comments WHERE id = ?");
                                $stmt->bind_param("s", $id);
                                $stmt->execute();
                                $result = $stmt->get_result();
                                $comment = $result->fetch_assoc();
                                if($myid==$comment['idU']){
                                }else{
                                notificationC($myid,$comment['idU'],"cm|like",$id);
                                }
                            break;
                            
                            case 'rp':
                                
                                $stmt = $conn->prepare("SELECT * FROM replies WHERE id = ?");
                                $stmt->bind_param("s", $id);
                                $stmt->execute();
                                $result = $stmt->get_result();
                                $comment = $result->fetch_assoc();
                                if($myid==$comment['idU']){
                                    
                                }else{
                                    notificationC($myid,$comment['idU'],"rp|like",$id);
                                }
                                
                            break;    
                                
                            case 'ac':
                                if($myid==personeinfo($id)['auther_id']){}else{
                                notificationC($myid,personeinfo($id)['auther_id'],"ac|like",$id);
                                }
                            break;
                            
                            case 'dr':
                        
                                if($myid==titleinfo($id)['auther_id']){}else{
                                notificationC($myid,titleinfo($id)['auther_id'],"dr|like",$id);
                                }
                        
                            break;
                            
                            case 'ar':
                                if($myid==articleinfo($id)['idU']){}else{
                                notificationC($myid,articleinfo($id)['idU'],"ar|like",$id);
                                }
                            break;
                            
                            case 'fd':
                                if($myid==feedinfo($id)['idU']){}else{
                                notificationC($myid,feedinfo($id)['idU'],"fd|like",$id);
                                }
                            break;
                            
                            case 'ls':
                                if($myid==listinfo($id)['info']['idU']){}else{
                                notificationC($myid,listinfo($id)['info']['idU'],"ls|like",$id);
                                }
                            break;
                            
                            case 'rv':
                                $stmt_r = $conn->prepare("SELECT * FROM reviews WHERE id = ? ");
                                $stmt_r->bind_param("s", $id);
                                $stmt_r->execute();
                                $result_r=$stmt_r->get_result();
                                $fetch_r = $result_r->fetch_assoc();
                                
                                if($myid==$fetch_r['idU']){}else{
                                notificationC($myid,$fetch_r['idU'],"rv|like",$id);
                                }
                            break;
                                
                            case 'rc':
                                
                                $stmt_r = $conn->prepare("SELECT * FROM recom WHERE id = ? ");
                                $stmt_r->bind_param("s", $id);
                                $stmt_r->execute();
                                $result_r=$stmt_r->get_result();
                                $fetch_r = $result_r->fetch_assoc();
                                
                                if($myid==$fetch_r['idU']){}else{
                                notificationC($myid,$fetch_r['idU'],"rc|like",$id);
                                }
                            break;
                                
                        }
                        
                        $code='true';
                        $mcode='liked';
                        
                    }else{
                        $code='false';
                        $mcode='Errorliked';
                        
                    };
                    
                    }else{
                        $stmtn = $conn->prepare("DELETE FROM likes WHERE idP=? AND postT=? AND idL=?");
                        $stmtn->bind_param("sss", $id, $type, $myid);
                        if($stmtn->execute()){
                            $code='true';
                            $mcode='disliked';
                        }else{
                            $code='false';
                            $mcode='Errordisliked';
                        }
                    }  
                }else{
                    $code='false';
                    $mcode='postNE';
                }
                echo json_encode(array("code"=>$code,'mcode'=>$mcode, 'data'=>$detailpost));
            }else{
                if(isset($_SESSION['id'])  &&  !confirmed($_SESSION['id'])){
                    echo json_encode(array("code"=>'false','mcode'=>'emailVer'));
                }else{
                    echo json_encode(array("code"=>'false','mcode'=>'notLogin'));
                }
                 
            }
            break;
            
            case 'reviewd':
            if (isset($_SESSION['id']) && confirmed($_SESSION['id'])){
                $myid=$_SESSION['id'];
                $id = $_POST['id'];
                $helprd = $_POST['d'];
            
                
                $detailpost;
                $detailpost=postexist($id,'rv'); #output: $postL $myL
                function updateh($id){
                    global $helprd;
                    global $conn;
                    $stmtnU = $conn->prepare("SELECT * FROM reviews WHERE id=?");
                    $stmtnU->bind_param("s", $id);
                    $stmtnU->execute();
                    $resultnU=$stmtnU->get_result();
                    $fetchU=$resultnU->fetch_assoc();

                    if ($helprd=='1'){$newv=$fetchU['helpf']+1;}else{if($fetchU['helpf']=='0'){$newv=$fetchU['helpf'];}else{$newv=$fetchU['helpf']-1;}}

                    $stmtn = $conn->prepare("UPDATE reviews SET helpf=? WHERE id=?");
                    $stmtn->bind_param("ss", $newv, $id);
                    $stmtn->execute();
                }
                
                if ($detailpost){
                    $stmtn1 = $conn->prepare("SELECT * FROM helpfr WHERE idR=? AND idU=?");
                    $stmtn1->bind_param("ss", $id,$myid);
                    $stmtn1->execute();
                    $resultn1=$stmtn1->get_result();
                    $numr1=$resultn1->num_rows;
                      
                    if ($numr1=='0' && ($helprd=='0' || $helprd=='1')){
                            $stmtn = $conn->prepare("INSERT INTO helpfr(idR,idU,op) values(?,?,?)");
                            $stmtn->bind_param("sss", $id, $myid, $helprd);
                            if ($stmtn->execute()){
                                $code='true';
                                $mcode='revd';
                                
                                updateh($id);
                                
                            }else{
                                $code='false';
                                $mcode='error_revd';
                            }
                    }else{
                        $r=$resultn1->fetch_assoc();
                       
                        if ($r['op']=='1' && ($helprd=='0' || $helprd=='1')){
                            if($helprd=='0'){
                                
                                $stmtn = $conn->prepare("DELETE FROM helpfr WHERE  idU=? and idR=?");
                                $stmtn->bind_param("ss", $myid, $id);
                                $stmtn->execute();
                                
                                $stmtn = $conn->prepare("INSERT INTO helpfr(idR,idU,op) values(?,?,?)");
                                $stmtn->bind_param("sss", $id, $myid, $helprd);
                                if ($stmtn->execute()){
                                    $code='true';
                                    $mcode='revd';
                                    updateh($id);
                                }else{
                                    $code='false';
                                    $mcode='error_revd';
                                }
                            }else if($helprd=='1'){
                                    $code='true';
                                    $mcode='revd';
                            }else{
                                    $code='true';
                                    $mcode='revd';
                            }
                        }elseif($r['op']=='0' && ($helprd=='0' || $helprd=='1')){
                            if($helprd=='1'){
                                $stmtn = $conn->prepare("DELETE FROM helpfr WHERE  idU=? and idR=?");
                                $stmtn->bind_param("ss", $myid, $id);
                                $stmtn->execute();
                                
                                $stmtn = $conn->prepare("INSERT INTO helpfr(idR,idU,op) values(?,?,?)");
                                $stmtn->bind_param("sss", $id, $myid, $helprd);
                                if ($stmtn->execute()){
                                    $code='true';
                                    $mcode='revd';
                                    updateh($id);
                                }else{
                                    $code='false';
                                    $mcode='error_revd';
                                }
                            }else if($helprd=='0'){
                                    $code='true';
                                    $mcode='revd';
                            }else{
                                    $code='true';
                                    $mcode='revd';
                            }
                            
                        }else{
                            $code='false';
                            $mcode='error_revd';                            
                        }
                    }
                      
                }else{
                    $code='false';
                    $mcode='postNE';
                }
                echo json_encode(array("code"=>$code,'mcode'=>$mcode, 'data'=>$detailpost));
            }else{
                 if(isset($_SESSION['id'])  &&  !confirmed($_SESSION['id'])){
                    echo json_encode(array("code"=>'false','mcode'=>'emailVer'));
                }else{
                    echo json_encode(array("code"=>'false','mcode'=>'notLogin'));
                }
            }
                
                
            break;
            
            
            case 'report':
                if (isset($_SESSION['id']) && confirmed($_SESSION['id'])){
                    $myid=$_SESSION['id'];
                    $id = $_POST['id'];
                    $type = $_POST['post'];

                    $detailpost;
                    $detailpost=detailpost($id,$type); #output: $postL $myL

                if ($detailpost['postE']=='true' &&  ($type=='ac' || $type=='dr' || $type=='ar' || $type=='cm' || $type=='rp' || $type=='fd' || $type=='dc' || $type=='ls'  || $type=='rc' || $type=='tp' ) ){
                  if ($detailpost['myRe']=='false'){

                    $stmtn = $conn->prepare("INSERT INTO reports(idP,idT,idR) values(?,?,?)"); //idP: id of post, idT: type of post, idR: id of user
                    $stmtn->bind_param("sss", $id, $type, $myid);
                    if ($stmtn->execute()){
                        
                        $code='true';
                        $mcode='reported';
                        
                    }else{
                        $code='false';
                        $mcode='Errorrepoted';
                    };
                    
                    }else{
                        $stmtn = $conn->prepare("DELETE FROM reports WHERE idP=? AND idT=? AND idR=?");
                        $stmtn->bind_param("sss", $id, $type, $myid);
                        if($stmtn->execute()){
                            $code='true';
                            $mcode='disreported';
                        }else{
                            $code='false';
                            $mcode='Errordisreported';
                        }
                    }  
                }else{
                    $code='false';
                    $mcode='postNE';
                }
                echo json_encode(array("code"=>$code,'mcode'=>$mcode, 'data'=>$detailpost));
            }else{
                  if(isset($_SESSION['id'])  &&  !confirmed($_SESSION['id'])){
                    echo json_encode(array("code"=>'false','mcode'=>'emailVer'));
                }else{
                    echo json_encode(array("code"=>'false','mcode'=>'notLogin'));
                }
            }
            break;
                
            case 'deleteart':
                if (isset($_SESSION['id']) && confirmed($_SESSION['id'])){
                    $myid=$_SESSION['id'];
                    $id = $_POST['id'];

                    $articleinfo;
                    $articleinfo=articleinfo($id); #output: $postL $myL

                if (postexist($id,'ar') &&  ($articleinfo['idU']==$_SESSION['id'] || $_SESSION['type']=='1') ){
                  
                        $stmtn = $conn->prepare("DELETE FROM article WHERE id=? ");
                        $stmtn->bind_param("s", $id);
                        if($stmtn->execute()){
                            $code='true';
                            $mcode='artdeleted';
                        }else{
                            $code='false';
                            $mcode='notArtDeleted';
                        }
                      
                }else{
                    $code='false';
                    $mcode='postNE';
                }
                echo json_encode(array("code"=>$code,'mcode'=>$mcode));
            }else{
                 if(isset($_SESSION['id'])  &&  !confirmed($_SESSION['id'])){
                    echo json_encode(array("code"=>'false','mcode'=>'emailVer'));
                }else{
                    echo json_encode(array("code"=>'false','mcode'=>'notLogin'));
                }
            }
            break;
                
            case 'deletels':
                if (isset($_SESSION['id']) && confirmed($_SESSION['id'])){
                    $myid=$_SESSION['id'];
                    $id = $_POST['id'];

                    $listinfo;
                    $listinfo=listinfo($id); #output: $postL $myL

                if (postexist($id,'ls') && ($listinfo['info']['idU']==$_SESSION['id'] || $_SESSION['type']=='1') ){
                  
                        $stmtn = $conn->prepare("DELETE FROM list WHERE id=? ");
                        $stmtn->bind_param("s", $id);
                        if($stmtn->execute()){
                            $code='true';
                            $mcode='listdeleted';
                        }else{
                            $code='false';
                            $mcode='notListDeleted';
                        }
                      
                }else{
                    $code='false';
                    $mcode='postNE';
                }
                echo json_encode(array("code"=>$code,'mcode'=>$mcode));
            }else{
                 if(isset($_SESSION['id'])  &&  !confirmed($_SESSION['id'])){
                    echo json_encode(array("code"=>'false','mcode'=>'emailVer'));
                }else{
                    echo json_encode(array("code"=>'false','mcode'=>'notLogin'));
                }
            }
            break;
                
            case 'deletetp':
                if (isset($_SESSION['id']) && confirmed($_SESSION['id'])){
                    $myid=$_SESSION['id'];
                    $id = $_POST['id'];

                    $topicinfo;
                    $topicinfo=topicinfo($id); #output: $postL $myL
                if (postexist($id,'tp') && ($topicinfo['idU']==$_SESSION['id'] || $_SESSION['type']=='1') ){
                  
                        $stmtn = $conn->prepare("DELETE FROM topics WHERE id=? ");
                        $stmtn->bind_param("s", $id);
                        if($stmtn->execute()){
                            $code='true';
                            $mcode='topicdeleted';
                        }else{
                            $code='false';
                            $mcode='notListDeleted';
                        }
                      
                }else{
                    $code='false';
                    $mcode='postNE';
                }
                echo json_encode(array("code"=>$code,'mcode'=>$mcode));
            }else{
                 if(isset($_SESSION['id'])  &&  !confirmed($_SESSION['id'])){
                    echo json_encode(array("code"=>'false','mcode'=>'emailVer'));
                }else{
                    echo json_encode(array("code"=>'false','mcode'=>'notLogin'));
                }
            }
            break;
            
            
            case 'addreco':
                if (isset($_SESSION['id']) && confirmed($_SESSION['id'])){
                    $myid=$_SESSION['id'];
                    $id = $_POST['id'];
                    $idR = $_POST['idR'];
                    $text = filter_var(htmlentities($_POST['text']),FILTER_SANITIZE_STRING);
                    
                    $stmtn = $conn->prepare("SELECT * FROM recom WHERE idU=? AND idRT=? AND idT=?"); 
                    $stmtn->bind_param("sss", $myid, $idR,$id);
                    $stmtn->execute();
                    $re=$stmtn->get_result();
                    $num=$re->num_rows=='0';
                    
                    #output: $postL $myL
                    
                   
                if ( !($idR==$id) && postexist($id,'dr') &&  postexist($idR,'dr') && strlen($text)<1000 &&  strlen($text)>200 && $num){
                  

                    $stmtn = $conn->prepare("INSERT INTO recom(idT,idRT,idU,review,score) values(?,?,?,?,'0')"); 
                    $stmtn->bind_param("ssss", $id, $idR, $myid,$text);
                    if ($stmtn->execute()){
                        
                        $code='true';
                        $mcode='addreco';
                        
                    }else{
                        $code='false';
                        $mcode='erroraddreco';
                    };
                    
                    
                }else{
                    if ($num){
                        $code='false';
                        $mcode='postNE';
                    }else{
                        $code='true';
                        $mcode='recoAlr';
                    }
                    
                }
                echo json_encode(array("code"=>$code,'mcode'=>$mcode));
            }else{
                if(isset($_SESSION['id'])  &&  !confirmed($_SESSION['id'])){
                    echo json_encode(array("code"=>'false','mcode'=>'emailVer'));
                }else{
                    echo json_encode(array("code"=>'false','mcode'=>'notLogin'));
                }
            }
            break;
            
            
            case 'more_c':
                $id = $_POST['id'];
                $type = $_POST['post'];
                if ($type=='fd'){
                $page=false;
                }else{
                $page = $_POST['page'];
                }
                $detailpost;
                $detailpost=detailpost($id,$type); #output: $postL $myL
                
                if (!$page){
                }else{
                $offset=$page*6; // 6->12,...       12->18,18->24,24->28,28->34...
                }
                
                
                
                
                
                if ($detailpost['postE']=='true'){
                  if (!$page){
                      $stmtnN = $conn->prepare("SELECT postT,id,idP FROM comments WHERE idP=? AND postT='fd'"); 
                      $stmtnN->bind_param("s", $id);
                      $stmtnN->execute();
                      $res=$stmtnN->get_result();
                      $num=$res->num_rows;
                      $stmtn = $conn->prepare("SELECT 
                                    comments.id as cmi,
                                    comments.comment ,
                                    comments.idU ,
                                    comments.spoiler,
                                    comments.idP as thisP,
                                    comments.postT as thisT,
                                    comments.wn ,
                                    count(comments.id) as how,
                                    
                                    users.username,
                                    users.picture,
                                    users.code,
                                    
                                    count(reports.id) as RepCount,
                                    reports.idP,
                                    reports.idR,
                                    reports.idT,
                                    
                                    count(replies.id) as repCount,
                                    replies.idU,
                                    
                                    
                                    likes.idL,
                                    likes.idP,
                                    likes.id,
                                    count(likes.postT) as liken
                                    
                                    FROM comments  
                                    
                                    JOIN users ON users.code=comments.idU 
                                    
                                    JOIN likes ON likes.idP=comments.id 
                                    
                                    JOIN reports ON reports.idP=comments.id  
                                    
                                    JOIN replies ON replies.idC=comments.id  
                                    
                                    WHERE comments.idP=? AND comments.postT=? AND reports.idT='cm' AND likes.postT='cm' GROUP BY comments.id ORDER BY comments.wn DESC LIMIT 6,?
                                    ");
                                    $stmtn->bind_param("ssi", $id, $type,$num );
                  }else{
                      $stmtn = $conn->prepare("SELECT 
                                    comments.id as cmi,
                                    comments.comment ,
                                    comments.idU ,
                                    comments.spoiler,
                                    comments.idP as thisP,
                                    comments.postT as thisT,
                                    comments.wn ,
                                    count(comments.id) as how,
                                    
                                    users.username,
                                    users.picture,
                                    users.code,
                                    
                                    count(reports.id) as RepCount,
                                    reports.idP,
                                    reports.idR,
                                    reports.idT,
                                    
                                    count(replies.id) as repCount,
                                    replies.idU,
                                    
                                    
                                    likes.idL,
                                    likes.idP,
                                    likes.id,
                                    count(likes.postT) as liken
                                    
                                    FROM comments  
                                    
                                    JOIN users ON users.code=comments.idU 
                                    
                                    JOIN likes ON likes.idP=comments.id 
                                    
                                    JOIN reports ON reports.idP=comments.id  
                                    
                                    JOIN replies ON replies.idC=comments.id  
                                    
                                    WHERE comments.idP=? AND comments.postT=? AND reports.idT='cm' AND likes.postT='cm' GROUP BY comments.id ORDER BY comments.wn DESC 
                                    
                                    LIMIT 6 OFFSET ?
                                    ");
                                    $stmtn->bind_param("ssi", $id, $type ,$offset);
                  }
                  
                                    if($stmtn->execute()){
                                    
                                        $comm=$stmtn->get_result();
                                        $detailpost=[];
                                        while($comminfo=$comm->fetch_assoc()){
                                            $comminfo['liken']=detailpost($comminfo['cmi'],'cm')['postL'];
                                            if (isset($_SESSION['id'])){
                                                
                                                $comminfo['how']=$_SESSION['id'];
                                                $stmtn = $conn->prepare("SELECT idP,idR FROM reports WHERE idP=? AND idR=? AND idT='cm'");
                                                $stmtn->bind_param("ss", $comminfo['cmi'], $_SESSION['id']);
                                                $stmtn->execute();
                                                $resu=$stmtn->get_result();
                                                if ($resu->num_rows!=0){
                                                    $comminfo['idR']='true';
                                                }else{
                                                    $comminfo['idR']='false';
                                                }
                                                
                                            }else{
                                                $comminfo['how']='';
                                            }
                                            
                                            $stmtn = $conn->prepare("SELECT 
                                    
                                            replies.id ,
                                            replies.replie ,
                                            replies.idU ,
                                            replies.spoiler,
                                            replies.idC,
                                            replies.wn ,

                                            users.username,
                                            users.picture,
                                            users.code,

                                            reports.idR,
                                            count(reports.idP) as reported,
                                            reports.idT,

                                            likes.idL,
                                            likes.postT,
                                            likes.idP,likes.id as likesn
                                            

                                            FROM replies  

                                            JOIN users ON users.code=replies.idU 

                                            JOIN likes ON likes.idP=replies.id 

                                            JOIN reports ON reports.idP=replies.id  

                                            WHERE replies.idC=? AND reports.idT='rp' AND replies.idU!='' AND likes.postT='rp' GROUP BY replies.id ORDER BY replies.wn DESC 

                                            ");
                                            $stmtn->bind_param("s", $comminfo['cmi']);
                                            $stmtn->execute();
                                            $rep=$stmtn->get_result();
                                            $comminfo['thisT']=[];
                                                while($repinfo=$rep->fetch_assoc()){
                                                    $ri=detailpost($repinfo['id'],'rp');
                                                    $repinfo['idT']=$ri['myRe'];
                                                    $repinfo['myl']=$ri['myL'];
                                                    $repinfo['likesn']=$ri['postL'];
                                                    array_push($comminfo['thisT'],$repinfo);
                                                }
                                            
                                            array_push($detailpost,$comminfo);
                                            
                                        }
                                        
                                        
                                        
                                        $mcode='moreCEexist';
                                        $code='true';
                                        echo json_encode(array("code"=>$code,'mcode'=>$mcode, 'data'=>$detailpost));

                                    }else{
                                        echo json_encode(array("code"=>'false','mcode'=>'postNE'));

                                    }
                                    
                                    }else{
                                        $code='false';
                                        $mcode='postNE';
                                                            echo json_encode(array("code"=>'false','mcode'=>'postNE'));

                                    }
            break;
            
            
            case 'comment':
            if (isset($_SESSION['id']) && confirmed($_SESSION['id'])){
                $myid=$_SESSION['id'];
                $id = $_POST['id'];
                $type = $_POST['post'];
                
                $comment = filter_var(htmlentities($_POST['comment']),FILTER_SANITIZE_STRING);;
                $spoiler = $_POST['spoiler'];
                
                
                $detailpost;
                $detailpost=detailpost($id,$type); #output: $postL $myL
                
                if ($detailpost['postE']=='true' && (strlen($comment)!=0 || strlen($comment)<500 || strlen($comment)>3 ) && ($type=='ac' || $type=='dr' || $type=='ar' || $type=='fd'|| $type=='ls' || $type=='rv' ) ){
                    
                    $result = $conn->query("SHOW TABLE STATUS WHERE `Name` = 'comments'");
                    $data = mysqli_fetch_array($result);
                    $next_increment = $data['Auto_increment'];
 	 	 	 
                    $stmtn = $conn->prepare("INSERT INTO comments(idU,idP,comment,spoiler,postT) values(?,?,?,?,?)");
                    $stmtn->bind_param("sssss",$myid,$id,$comment,$spoiler,$type);
                    if ($stmtn->execute()){
                        
                     
                            switch ($type){

                                case 'ac':
                                    if($myid==personeinfo($id)['auther_id']){}else{
                                        notificationC($myid,personeinfo($id)['auther_id'],"ac|comment",$next_increment);
                                    }
                                break;

                                case 'dr':
                                    if($myid==titleinfo($id)['auther_id']){}else{
                                        notificationC($myid,titleinfo($id)['auther_id'],"dr|comment",$next_increment);
                                    }
                                break;

                                case 'ar':
                                    if($myid==articleinfo($id)['idU']){}else{
                                        notificationC($myid,articleinfo($id)['idU'],"ar|comment",$next_increment);
                                    }
                                break;

                                case 'fd':
                                    if($myid==feedinfo($id)['idU']){}else{
                                        notificationC($myid,feedinfo($id)['idU'],"fd|comment",$next_increment);
                                    }
                                break;

                                case 'ls':
                                    if($myid==listinfo($id)['info']['idU']){}else{
                                        notificationC($myid,listinfo($id)['info']['idU'],"ls|comment",$next_increment);
                                    }
                                break;

                                case 'rv':
                                    
                                    $stmt_r = $conn->prepare("SELECT * FROM reviews WHERE id = ? ");
                                    $stmt_r->bind_param("s", $id);
                                    $stmt_r->execute();
                                    $result_r=$stmt_r->get_result();
                                    $fetch_r = $result_r->fetch_assoc();
                                    if($myid==$fetch_r['idU']){}else{
                                        notificationC($myid,$fetch_r['idU'],"rv|comment",$next_increment);
                                    }
                                break;   
                            
                        }
                        
                        $code='true';
                        $mcode='commented';
                        
                        $stmtn = $conn->prepare("INSERT INTO reports(idP,idT,idR) values(?,'cm','')"); //idP: id of post, idT: type of post, idR: id of user
                        $stmtn->bind_param("s", $next_increment);
                        $stmtn->execute();
                        
                        
                        $detailpost['postR']=$next_increment;
                        $detailpost['postE']=$_SESSION['username'];
                        $detailpost['myL']=$_SESSION['img'];
                        $detailpost['myR']=$_SESSION['id'];

                        $type='cm';
                        $auther='';
                        $stmtn = $conn->prepare("INSERT INTO likes(idP,postT,idL) values(?,?,?)");
                        $stmtn->bind_param("sss", $next_increment, $type, $auther);
                        $stmtn->execute();
                        
                        $stmtn = $conn->prepare("INSERT INTO replies(idU,idC,replie,spoiler) values('',?,'','true')");
                        $stmtn->bind_param("s", $next_increment);
                        $stmtn->execute();
                        
                        
                    }else{
                        $code='false';
                        $mcode='errorcommented';
                        
                    };
                    
                      
                }else{
                    $code='false';
                    $mcode='postNE';
                }
                
                echo json_encode(array("code"=>$code,'mcode'=>$mcode, 'data'=>$detailpost));
            }else{
                 if(isset($_SESSION['id'])  &&  !confirmed($_SESSION['id'])){
                    echo json_encode(array("code"=>'false','mcode'=>'emailVer'));
                }else{
                    echo json_encode(array("code"=>'false','mcode'=>'notLogin'));
                }
            }
            break;
            
            
            
            case 'reply':
            if (isset($_SESSION['id']) && confirmed($_SESSION['id'])){
                $myid=$_SESSION['id'];
                $id = $_POST['id'];
                $type = $_POST['post'];
                
                $comment = filter_var(htmlentities($_POST['comment']),FILTER_SANITIZE_STRING);;
                $spoiler = $_POST['spoiler'];
                
                
                $detailpost;
                $detailpost=detailpost($id,$type); #output: $postL $myL
                
                if ($detailpost['postE']=='true' && (strlen($comment)!=0 || strlen($comment)<500 || strlen($comment)>3 ) && $type=='cm' ){
                    
                    $result = $conn->query("SHOW TABLE STATUS WHERE `Name` = 'replies'");
                    $data = mysqli_fetch_array($result);
                    $next_increment = $data['Auto_increment'];
 	 	 	 
                    $stmtn = $conn->prepare("INSERT INTO replies(idU,idC,replie,spoiler) values(?,?,?,?)");
                    $stmtn->bind_param("ssss",$myid,$id,$comment,$spoiler);
                    if ($stmtn->execute()){
                        
                        $code='true';
                        $mcode='replied';
                        
                        $stmte = $conn->prepare("SELECT id,idU FROM comments WHERE id=?");
                        $stmte->bind_param("s", $id);
                        $stmte->execute();
                        $resulte=$stmte->get_result();
                        $idU=$resulte->fetch_assoc()['idU'];
                        
                        if($myid==$idU){}else{
                       
                          notificationC($myid,$idU,"replie",$next_increment);
                        }
                        
                        $stmtn = $conn->prepare("INSERT INTO reports(idP,idT,idR) values(?,'rp','')"); //idP: id of post, idT: type of post, idR: id of user
                        $stmtn->bind_param("s", $next_increment);
                        $stmtn->execute();
                        $detailpost['postR']=$next_increment;
                        $detailpost['postE']=$_SESSION['username'];
                        $detailpost['myL']=$_SESSION['img'];
                        $detailpost['myR']=$_SESSION['id'];

                        $type='rp';
                        $auther='';
                        $stmtn = $conn->prepare("INSERT INTO likes(idP,postT,idL) values(?,?,?)");
                        $stmtn->bind_param("sss", $next_increment, $type, $auther);
                        $stmtn->execute();
                        
                        
                    }else{
                        $code='false';
                        $mcode='errorreplied';
                        
                    };
                    
                      
                }else{
                    $code='false';
                    $mcode='postNE';
                }
                
                echo json_encode(array("code"=>$code,'mcode'=>$mcode, 'data'=>$detailpost));
            }else{
                 if(isset($_SESSION['id'])  &&  !confirmed($_SESSION['id'])){
                    echo json_encode(array("code"=>'false','mcode'=>'emailVer'));
                }else{
                    echo json_encode(array("code"=>'false','mcode'=>'notLogin'));
                }
            }
            break;
            
            
            case 'update_c':
            if (isset($_SESSION['id']) && confirmed($_SESSION['id'])){
                $myid=$_SESSION['id'];
                
                $id = $_POST['id'];
                $type = $_POST['post'];
                
                $idC = $_POST['idC'];
                
                $comment = filter_var(htmlentities($_POST['comment']),FILTER_SANITIZE_STRING);;
                $spoiler = $_POST['spoiler'];
                
                
                
                
                    $stmte = $conn->prepare("SELECT id,idU FROM comments WHERE id=?");
                    $stmte->bind_param("s", $idC);
                    $stmte->execute();
                    $resulte=$stmte->get_result();
                    $numr=$resulte->num_rows;
                    
                $detailpost;
                $detailpost=detailpost($id,$type); #output: $postL $myL
                
                
                if ($detailpost['postE']=='true' && (strlen($comment)!=0 || strlen($comment)<500 || strlen($comment)>3 ) && ($type=='ac' || $type=='dr' || $type=='ar' || $type=='fd' ) && ($spoiler=='true' || $spoiler=='false' ) && $numr!=0 ){
                    
                    $i=$resulte->fetch_assoc();
                    if ($myid==$i['idU']){
 	 	 	          $stmte->close();
                        $stmtn = $conn->prepare("UPDATE comments SET idU=?,idP=?,comment=?,spoiler=?,postT=? WHERE id=?");
                        $stmtn->bind_param("ssssss",$myid,$id,$comment,$spoiler,$type,$idC);
                        if ($stmtn->execute()){

                            $code='true';
                            $mcode='updated';

                        }else{
                            $code='false';
                            $mcode='errorupdate';

                        }
                        
                    }else{
                        $code='false';
                        $mcode='errorupdate';
                        
                    }

                }else{
                    $code='false';
                    $mcode='postNEU';
                }
                
                echo json_encode(array("code"=>$code,'mcode'=>$mcode, 'data'=>$detailpost));
            }else{
                if(isset($_SESSION['id'])  &&  !confirmed($_SESSION['id'])){
                    echo json_encode(array("code"=>'false','mcode'=>'emailVer'));
                }else{
                    echo json_encode(array("code"=>'false','mcode'=>'notLogin'));
                }
            }
            break;
            
            case 'update_r':
            if (isset($_SESSION['id']) && confirmed($_SESSION['id'])){
                $myid=$_SESSION['id'];
                $id = $_POST['id'];
                
                $comment = filter_var(htmlentities($_POST['comment']),FILTER_SANITIZE_STRING);;
                $spoiler = $_POST['spoiler'];
                
                
                
                
                    $stmte = $conn->prepare("SELECT id,idU FROM replies WHERE id=?");
                    $stmte->bind_param("s", $id);
                    $stmte->execute();
                    $resulte=$stmte->get_result();
                    $numr=$resulte->num_rows;
                    
                $detailpost;
                $detailpost=detailpost($id,'rp'); #output: $postL $myL
                
                
                if ($detailpost['postE']=='true' && (strlen($comment)!=0 || strlen($comment)<500 || strlen($comment)>3 ) && ($spoiler=='true' || $spoiler=='false' ) && $numr!=0 ){
                    
                    $i=$resulte->fetch_assoc();
                    if ($myid==$i['idU']){
 	 	 	          $stmte->close();
                        $stmtn = $conn->prepare("UPDATE replies SET replie=?,spoiler=? WHERE id=?");
                        $stmtn->bind_param("sss",$comment,$spoiler,$id);
                        if ($stmtn->execute()){

                            $code='true';
                            $mcode='updated';

                        }else{
                            $code='false';
                            $mcode='errorupdate';
                        }
                        
                    }else{
                        $code='false';
                        $mcode='errorupdate';
                        
                    }

                }else{
                    $code='false';
                    $mcode='postNEU';
                }
                
                echo json_encode(array("code"=>$code,'mcode'=>$mcode, 'data'=>$detailpost));
            }else{
                
                if(isset($_SESSION['id'])  &&  !confirmed($_SESSION['id'])){
                    echo json_encode(array("code"=>'false','mcode'=>'emailVer'));
                }else{
                    echo json_encode(array("code"=>'false','mcode'=>'notLogin'));
                }
                
            }
            break;
            
            case 'addreview':
            if (isset($_SESSION['id']) && confirmed($_SESSION['id'])){
                
                $id = $_POST['id'];
                $myid=$_SESSION['id'];
                
                $review = filter_var(htmlentities($_POST['review']),FILTER_SANITIZE_STRING);
                $headline = filter_var(htmlentities($_POST['headl']),FILTER_SANITIZE_STRING);
                
                $rstory = $_POST['rstory'];
                $ract = $_POST['ract'];
                $rmusic = $_POST['rmusic'];
                $rrewatch = $_POST['rrewatch'];
                $average = $_POST['average'];
                
                
                $spoil = $_POST['spoil'];
                $rewde = $_POST['rewde'];
                
                if(isset($_POST['cancelw']) && !$_POST['cancelw']==''){$cancelw = $_POST['cancelw'];}else{$cancelw = 'false';}
                if(isset($_POST['episw']) && !$_POST['episw']==''){$episw = $_POST['episw'];}else{$episw = '0';}
                
                
                    $stmte = $conn->prepare("SELECT id FROM title WHERE id=? AND admin_o='1'");
                    $stmte->bind_param("s", $id);
                    $stmte->execute();
                    $resulte=$stmte->get_result();
                    $numr=$resulte->num_rows;
                    
                $detailpost;
                $detailpost=detailpost($id,'dr'); #output: $postL $myL
                
                
                if ($detailpost['postE']=='true' && (strlen($review)!=0 || strlen($review)<500 || strlen($review)>3 ) && (strlen($headline)!=0 || strlen($headline)<199 || strlen($headline)>3 ) && ($spoil=='true' || $spoil=='false' ) && ($rewde=='true' || $rewde=='false' ) && ( is_numeric($rstory) &&  is_numeric($ract) &&  is_numeric($rmusic) &&  is_numeric($rrewatch) &&  is_numeric($average)) && ( !($rstory<0) &&  !($ract<0) &&  !($rmusic<0) &&  !($rrewatch<0) &&  !($average<0)) && ( !($rstory>10) &&  !($ract>10) &&  !($rmusic>10) &&  !($rrewatch>10) &&  !($average>10)) && $numr!=0 && (is_numeric($episw) && ($cancelw=='true' || $cancelw=='false'))){
                    
                    
 	 	 	            $stmte->close();
                        
                          	 	 	 	 	 	 	 	 	 
                        $stmtn = $conn->prepare("INSERT INTO reviews(idU,idT,story,act,music,rewatch,overall,rewa,cancelw,episw,spoiler,headline,text) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)");
                        $stmtn->bind_param("sssssssssssss",$myid,$id,$rstory,$ract,$rmusic,$rrewatch,$average,$rewde,$cancelw,$episw,$spoil,$headline,$review);
                    
                        if ($stmtn->execute()){
                            $code='true';
                            $mcode='added';
                        }else{
                            $code='false';
                            $mcode='erroradd';
                            trigger_error("there was an error....".$conn->error, E_USER_WARNING);
                        }
                     
                        
                    

                }else{
                    $code='false';
                    $mcode='postNEU';
                }
                
                echo json_encode(array("code"=>$code,'mcode'=>$mcode, 'data'=>$detailpost));
            }else{
                 if(isset($_SESSION['id'])  &&  !confirmed($_SESSION['id'])){
                    echo json_encode(array("code"=>'false','mcode'=>'emailVer'));
                }else{
                    echo json_encode(array("code"=>'false','mcode'=>'notLogin'));
                }
            }
            break;
            
            
            
            case 'deletec':
            if (isset($_SESSION['id']) && confirmed($_SESSION['id'])){
                $myid=$_SESSION['id'];
                $id = $_POST['id'];
                $post = $_POST['type'];
                
                    if ($post=='c'){
                        $stmte = $conn->prepare("SELECT id,idU FROM comments WHERE id=?");
                        $stmte->bind_param("s", $id);
                        $stmte->execute();
                        $resulte=$stmte->get_result();
                        $numr=$resulte->num_rows; 
                        $detailpost;
                        $detailpost=detailpost($id,'cm');
                    }elseif ($post=='r'){
                        $stmte = $conn->prepare("SELECT id,idU FROM replies WHERE id=?");
                        $stmte->bind_param("s", $id);
                        $stmte->execute();
                        $resulte=$stmte->get_result();
                        $numr=$resulte->num_rows;
                        $detailpost;
                        $detailpost=detailpost($id,'rp');
                    }
                    
                    
                 #output: $postL $myL
                
                
                if ($detailpost['postE']=='true'   && $numr!=0 ){
                    
                    $i=$resulte->fetch_assoc();
                    if ($myid==$i['idU']){
 	 	 	           $stmte->close();
                        
                        if ($post=='c'){
                            $stmtn = $conn->prepare("DELETE FROM comments WHERE id=? and idU=?");
                        }elseif($post=='r'){
                            $stmtn = $conn->prepare("DELETE FROM replies WHERE id=? and idU=?");
                        }
                        
                        $stmtn->bind_param("ss",$id,$myid);
                        if ($stmtn->execute()){
                            
                            if ($post=='c'){
                                $mcode='c_deleted';
                            }elseif($post=='r'){
                                $mcode='r_deleted';
                            }
                            
                            $code='true';

                        }else{
                            $code='false';
                            $mcode='errorDeleted';

                        }
                        
                    }else{
                        $code='false';
                        $mcode='errorDeleted';
                        
                    }

                }else{
                    $code='false';
                    $mcode='postNEU';
                }
                
                echo json_encode(array("code"=>$code,'mcode'=>$mcode, 'data'=>$detailpost));
            }else{
                if(isset($_SESSION['id'])  &&  !confirmed($_SESSION['id'])){
                    echo json_encode(array("code"=>'false','mcode'=>'emailVer'));
                }else{
                    echo json_encode(array("code"=>'false','mcode'=>'notLogin'));
                }
            }
            break;
            
            
            case 'add_t':
            if (isset($_SESSION['id']) && confirmed($_SESSION['id'])){
                $id = $_POST['id'];
                
                if (isset($_POST['rat_si'])) {$rat_si = $_POST['rat_si'];} else{$rat_si='';};
                if (isset($_POST['epi_w'])) {$epi_w = $_POST['epi_w'];} else{$epi_w='';};
                if (isset($_POST['note_r'])) {$note_r = $_POST['note_r'];} else{$note_r='';};
                if (isset($_POST['addt_r'])) {$addt_r = $_POST['addt_r'];} else{$addt_r='';};
                if (isset($_POST['addt_l'])) {$addt_l = $_POST['addt_l'];} else{$addt_l='';};
                
                if (isset($_POST['preo'])) {$preo = $_POST['preo'];} else{$preo='';};
                if (isset($_POST['numrew'])) {$numrew = $_POST['numrew'];} else{$numrew='';};
                if (isset($_POST['watchag'])) {$watchag = $_POST['watchag'];} else{$watchag='';};
                if (isset($_POST['dstart'])) {$dstart = $_POST['dstart'];} else{$dstart='';};
                if (isset($_POST['dfinish'])) {$dfinish = $_POST['dfinish'];} else{$dfinish='';};
                






 
                
                $detailpost;
                $detailpost=detailpost($id,'dr'); #output: $postL $myL
                
                if ($detailpost['postE']=='true' && (is_numeric($epi_w) || $epi_w=='' ||  !isset($_POST['epi_w'])) && (is_numeric($addt_r) || (!isset($_POST['$addt_r']) || !($_POST['$addt_r']<0 || $_POST['$addt_r']>5)) ) && isset($_SESSION['id'])){
                    
                    if($detailpost['myR']=='true'){
                        
                        $myid=$_SESSION['id'];
                        $stmtn = $conn->prepare("UPDATE rate SET idT=?,idU=?,rate=?,status=?,epi_w=?,note=?,ilike=? WHERE idU=? and idT=?");
                        $stmtn->bind_param("sssssssss", $id, $myid, $addt_r,$rat_si,$epi_w,$note_r,$addt_l,$myid,$id);

                        if ($stmtn->execute()){
                            $code='true';
                            $mcode='rated';
                        }else{
                            $code='false';
                            $mcode='errorrated';  
                        }
                        
                        
                    }else{
                        
                    $myid=$_SESSION['id'];
                    $stmtn = $conn->prepare("INSERT INTO rate(idT,idU,rate,status,epi_w,note,ilike,preo,numrew,watchag,dstart,dfinish) values(?,?,?,?,?,?,?,?,?,?,?,?)");
                    $stmtn->bind_param("ssssssssssss", $id, $myid, $addt_r,$rat_si,$epi_w,$note_r,$addt_l,$preo,$numrew,$watchag,$dstart,$dfinish);
                    
                    if ($stmtn->execute()){
                        $code='true';
                        $mcode='rated';
                    }else{
                        $code='false';
                        $mcode='errorrated';  
                    }
                        
                    }
                    
                    
                    
                    
                    
                }else{
                    $code='false';
                    $mcode='postNE';
                }
                
                echo json_encode(array("code"=>$code,'mcode'=>$mcode, 'data'=>$detailpost));
            }else{
                if(isset($_SESSION['id'])  &&  !confirmed($_SESSION['id'])){
                    echo json_encode(array("code"=>'false','mcode'=>'emailVer'));
                }else{
                    echo json_encode(array("code"=>'false','mcode'=>'notLogin'));
                }
            }
            break;
        }
        
        
        
    
}





if(isset($_POST['mssg'])){
    
    header("Content-Type: application/json; charset=UTF-8");
    if (isset($_SESSION['id']) && confirmed($_SESSION['id'])) {
    
    switch ($_POST['mssg']){
        case 'searchU':
            $word=$_POST['word'];
            $word = preg_replace('/(?<!\\\)([%_])/', '\\\$1',$word);
            
            //block!
            $stmt = $conn->prepare("SELECT username,displayname,picture FROM users WHERE username LIKE CONCAT('%',?,'%')");
            $stmt->bind_param("s", $word);
            $stmt->execute();
            $result=$stmt->get_result();
            if($result->num_rows==0){
               echo json_encode(array("code"=>"false","mcode"=>"false"));
            }else{
               $names=$result->fetch_assoc();
               echo json_encode($names); 
            }
        break;
            
            
        case 'send':
            $username=$_POST['username'];
            $sub=filter_var(htmlentities($_POST['sub'],FILTER_SANITIZE_STRING));
            $text=filter_var(htmlentities($_POST['text'],FILTER_SANITIZE_STRING));
        
            //block
            if($text=='' || $sub=='' || $username==''){
                echo json_encode(array("code"=>"false","mcode"=>"emptyF"));
            }else{
                $stmt = $conn->prepare("SELECT username,code FROM users WHERE username = ? ");
                $stmt->bind_param("s", $username);
                $stmt->execute();
                $result=$stmt->get_result();
                
                
                if($result->num_rows==0 || $username==$_SESSION['username']){
                    echo json_encode(array("code"=>"false","mcode"=>"invalidUser"));
                }else{
                    $touser = $result->fetch_assoc();
                    $toid=$touser['code'];
                    $id=$_SESSION['id'];
                    
                    $sql="SELECT * FROM msession WHERE (mfrom=? AND mto=?) OR (mto=? AND mfrom=?) ";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("ssss", $id, $toid, $id, $toid);
                    $stmt->execute();
                    
                    
                    
                    if(mysqli_num_rows($query)=='0'){
                        
                        
                        $from = $_SESSION['id'];
                        $to = $toid;
                        $message =filter_var(htmlentities($_POST['text']),FILTER_SANITIZE_STRING);
                        
                        $sql="INSERT INTO msession(mfrom,mto,sub) VALUES('$from','$toid','$sub')";
                        $stmt = $conn->prepare($sql);
                        $stmt->bind_param("sss", $from, $toid, $sub);
                        
                        
                        
                        if($stmt->execute()){
                           
                            $stmt = $conn->prepare("INSERT INTO messages (mfrom, mto, message, status) VALUES (?, ?, ?, '0')");
                            $stmt->bind_param('sssi', $from, $to, $message);
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
                        $message =filter_var(htmlentities($_POST['text']),FILTER_SANITIZE_STRING);
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
            
            
        
        case 'getmssg':
            $id=$_POST['id'];
            $myid=$_SESSION['id'];
            
            
            $stmt4 = $conn->prepare("SELECT * FROM msession WHERE ( mfrom= ? AND mto= ? ) OR ( mto= ? AND mfrom=? )");
            $stmt4->bind_param("ssss", $myid , $id, $myid , $id);
            $stmt4->execute();
            $result4=$stmt4->get_result();
            $session4=$result4->fetch_assoc();
            
            $stmt = $conn->prepare("SELECT * FROM users WHERE code = ?");
            $stmt->bind_param("s", $id);
            $stmt->execute();
            $result = $stmt->get_result();
            
            //block
            if ($id=='' || $result->num_rows=='0' || $result4->num_rows=='0' ){
                echo json_encode(array("mcode"=>"userError", "code"=>"false"));
            }else{
                header("Content-Type: application/json; charset=UTF-8");
                $mes=array();
                $stmt4 = $conn->prepare("SELECT message,wn,mfrom,id FROM messages WHERE ( mfrom= ? AND mto= ? ) OR ( mto= ? AND mfrom= ? ) ORDER BY id DESC LIMIT 10");
                $stmt4->bind_param("ssss", $myid , $id, $myid , $id);
                $stmt4->execute();
                $result4=$stmt4->get_result();
                $k=0;
                
                $stmtu = $conn->prepare("SELECT username,picture,code FROM users WHERE code=?");
                $stmtu->bind_param("s", $id);
                $stmtu->execute();
                $resultu=$stmtu->get_result();
                $user=$resultu->fetch_assoc();
                
                
                $recp=$user['picture'];
                $recus=$user['username'];
                $recid=$user['code'];
                $mess=array();
                
                while($messages=$result4->fetch_assoc()){
                    $k++;
                    array_push($mes, $messages );

                }
                
                $stmtr = $conn->prepare("UPDATE messages SET status='1' WHERE (mfrom= ? AND mto= ?)");
                $stmtr->bind_param("ss", $id , $myid);
                $stmtr->execute();
                $readre=$stmtr->get_result();
                if(!$stmt->execute()){trigger_error("there was an error....".$conn->error, E_USER_WARNING);}else{
                                
                            }
                
                echo json_encode(["mcode"=>"getIt", "code"=>"true","messages"=>$result4->num_rows,"userp"=>$recp,"userus"=>$recus,"userid"=>$recid,"myname"=>$_SESSION['username'],"myimg"=>$_SESSION['img'],"myid"=>$_SESSION['id'],"all"=>$mes]);   
            }
        break;
            
            
            
        case 'sendone':
            $id=$_POST['id'];
            $message=$_POST['val'];
        
            //block
            if($id=='' || $message==''){
                echo json_encode(array("code"=>"false","mcode"=>"error"));
            }else{
                $stmt = $conn->prepare("SELECT username,code FROM users WHERE code = ? ");
                $stmt->bind_param("s", $id);
                $stmt->execute();
                $result=$stmt->get_result();
                
                
                if($result->num_rows==0 || $username==$_SESSION['username']){
                    echo json_encode(array("code"=>"false","mcode"=>"invalidUser"));
                }else{
                    $touser = $result->fetch_assoc();
                    $toid=$touser['code'];
                    $id=$_SESSION['id'];
                    
                    $sql="SELECT * FROM msession WHERE (mfrom=? AND mto=?) OR (mto=? AND mfrom=?) ";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("ssss", $id,$toid,$id,$toid);
                    $stmt->execute();
                    $numthis=$stmt->get_result();
                    
                    
                    if(($numthis->num_rows)=='0'){
                       echo json_encode(array("code"=>"false","mcode"=>"invalidSession"));
                    }else{
                        
                        $from = $_SESSION['id'];
                        $to = $id;
                        $message = filter_var(htmlentities($_POST['val']),FILTER_SANITIZE_STRING);
                        $status="0";
                        $stmt = $conn->prepare("INSERT INTO messages (mfrom, mto, message, status) VALUES (?, ?, ?, ?)");
                        $stmt->bind_param('sssi', $from, $to, $message,$status);

                        // insert a row
                        $from = $_SESSION['id'];
                        $to = $toid;
                        //execute
                        if($stmt->execute()){
                            
                            
                            $stmtuf = $conn->prepare("SELECT username,code,picture FROM users WHERE code = ? ");
                            $stmtuf->bind_param("s", $_SESSION['id']);
                            $stmtuf->execute();
                            $resultuf=$stmtuf->get_result();
                            $resultff=$resultuf->fetch_assoc();
                            
                            $stmtuM = $conn->prepare("SELECT wn FROM messages WHERE mfrom = ? AND mto = ? ORDER BY id DESC");
                            $stmtuM->bind_param("ss", $_SESSION['id'], $to);
                            $stmtuM->execute();
                            $resultuM=$stmtuM->get_result();
                            $resultfM=$resultuM->fetch_assoc();
                            
                            echo json_encode(array("code"=>"true","mcode"=>"messageSent","picture"=>$resultff['picture'],"username"=>$resultff['username'],"codei"=>$resultff['code'],"wn"=>$resultfM['wn']));
                            
                             $stmt4 = $conn->prepare("SELECT * FROM messages WHERE ( mfrom = ? AND mto = ? ) OR ( mto = ? AND mfrom = ? ) ORDER BY id DESC LIMIT 1");
                             $stmt4->bind_param("ssss", $id , $toid, $id , $toid);
                             $stmt4->execute();
                             $result4=$stmt4->get_result();
                             $post4=$result4->fetch_assoc(); 
                            
                             notificationC($from, $to, "message", $post4['id']);
                        
                        };
            
                    }
                    
                }
            }
            
        break;
            
        case 'mssgmore':
            $i=$_POST['page'];
            $id=$_POST['id'];
            $myid=$_SESSION['id'];
            
            
            $stmt4 = $conn->prepare("SELECT * FROM msession WHERE ( mfrom= ? AND mto= ? ) OR ( mto= ? AND mfrom=? )");
            $stmt4->bind_param("ssss", $myid , $id, $myid , $id);
            $stmt4->execute();
            $result4=$stmt4->get_result();
            $session4=$result4->fetch_assoc();
            
            $stmt = $conn->prepare("SELECT picture,username,code FROM users WHERE code = ?");
            $stmt->bind_param("s", $id);
            $stmt->execute();
            $resultu = $stmt->get_result();
            $user=$resultu->fetch_assoc();
                
                
                $recp=$user['picture'];
                $recus=$user['username'];
                $recid=$user['code'];
            
            
            //block
            if ($id=='' || $resultu->num_rows=='0' || $result4->num_rows=='0' ){
                echo json_encode(array("mcode"=>"userError", "code"=>"false"));
            }else{
                $stmt1 = $conn->prepare("SELECT * FROM messages WHERE ( mfrom = ? AND mto = ? ) OR ( mto = ? AND mfrom = ? )");
            
                $stmt1->bind_param("ssss", $id , $myid, $id , $myid);
                $stmt1->execute();
                $result1=$stmt1->get_result();


                $All = $result1->num_rows;

                $leftMess = $All-10;

                $homp = ceil($leftMess/10);

                $to=($i*10);
                $from=($i+1)*10;

                $stmt1 = $connp->prepare('SELECT * FROM messages WHERE ( mfrom = ? AND mto = ? ) OR ( mto = ? AND mfrom = ? ) ORDER BY id DESC LIMIT 10 OFFSET ? ');


                $stmt1->bindValue(1, $id, PDO::PARAM_STR);
                $stmt1->bindValue(2, $myid, PDO::PARAM_STR);
                $stmt1->bindValue(3, $id, PDO::PARAM_STR);
                $stmt1->bindValue(4, $myid, PDO::PARAM_STR);
                $stmt1->bindValue(5, $to-$i, PDO::PARAM_INT);
    //            $stmt1->bindValue(6, $from, PDO::PARAM_INT);

                $stmt1->execute();






                echo json_encode(["info"=>["num"=>$stmt1->fetchColumn(),"i"=>$i,"from"=>$from,"to"=>$to,"picture"=>$recp,"username"=>$recus,"id"=>$recid,"myname"=>$_SESSION['username'],"myimg"=>$_SESSION['img'],"myid"=>$_SESSION['id']],"data"=>$stmt1->fetchAll(PDO::FETCH_ASSOC)]);
            }
                
            
            
            
        break;
                      
    }
    
    
    }else{
                if(isset($_SESSION['id'])  &&  !confirmed($_SESSION['id'])){
                    echo json_encode(array("code"=>'false','mcode'=>'emailVer'));
                }else{
                    echo json_encode(array("code"=>'false','mcode'=>'notLogin'));
                }
    }
}

if (isset($_POST['live'])){
    
   header("Content-Type: application/json; charset=UTF-8");
    if (isset($_SESSION['id'])){
   switch ($_POST['live']){
       case 'getstate':
            $myid=$_SESSION['id'];
            //connect first
                $stmt = $conn->prepare("SELECT * FROM notification WHERE nto = ? AND status= '0' ");
                $stmt->bind_param("s", $myid);
                $stmt->execute();
                $resultn=$stmt->get_result();   
                
            
            echo json_encode(array("code"=>"true","state"=>$resultn->num_rows));
        break;
       
       case 'update':
            $oldstate=$_POST['state'];
            $myid=$_SESSION['id'];
            //connect first
           
            $stmtn = $conn->prepare("SELECT * FROM online WHERE user = ? ORDER BY id DESC");
            $stmtn->bind_param("s", $myid);
            $stmtn->execute();
            $resultnn=$stmtn->get_result();
            $lastf=$resultnn->fetch_assoc();
           
            $thwn=strtotime($lastf['time']); //when it saved 
            $now=date("Y-m-d H:m:s"); //2020-02-24 22:08:59 now!
           
            $deff=(strtotime($now)-$thwn)/1000;
            

           
            if ($resultnn->num_rows==0){
                
                $stmt = $conn->prepare("INSERT INTO online(user,time) VALUES(?,?)");
                $stmt->bind_param("ss", $myid,$now);
                $stmt->execute();
                
            }else{
                
                if ((strtotime($now)-$thwn)>2000){
                    
                $stmtn = $conn->prepare("DELETE FROM online WHERE user = ?");
                $stmtn->bind_param("s", $myid);
                $stmtn->execute();
                    
                $stmt = $conn->prepare("INSERT INTO online(user,time) VALUES(?,?)");
                $stmt->bind_param("ss", $myid,$now);
                $stmt->execute(); 
                }  
                
            }
           
           
           
            $stmt = $conn->prepare("SELECT * FROM notification WHERE nto = ? AND status= '0'");
            $stmt->bind_param("s", $myid);
            $stmt->execute();
            $resultn=$stmt->get_result();  
                
                if ($resultn->num_rows>$oldstate){
                    
                    $stmt = $conn->prepare("SELECT * FROM notification WHERE nto = ? AND status = '0' ORDER BY id DESC LIMIT 1");
                    $stmt->bind_param("s", $myid);
                    $stmt->execute();
                    $resultf=$stmt->get_result();
                    
                    $fetchn = $resultf->fetch_assoc();
                    
                    if ($fetchn['type']=='message'){
                        
                        $stmtm = $conn->prepare("SELECT * FROM messages WHERE mto = ? ORDER BY id DESC LIMIT 1");
                        
                        $stmtm->bind_param("s", $myid);
                        $stmtm->execute();
                        
                        $resultm=$stmtm->get_result();
                        
                        $fetchm = $resultm->fetch_assoc();
                        
                        
                        $stmtu = $conn->prepare("SELECT * FROM users WHERE code = ? ");
                        $stmtu->bind_param("s", $fetchm['mfrom']);
                        $stmtu->execute();
                        $resultu=$stmtu->get_result();
                        $fetchu = $resultu->fetch_assoc();
                        
                        
                    
                        echo json_encode(array("data"=>array("code"=>$fetchu['code'],"wn"=>$fetchm['wn'],"nid"=>$fetchn['id'],"message"=>$fetchm['message'],"user"=>$fetchu['username'],"picture"=>$fetchu['picture']),"code"=>"true","codem"=>"new_n","coden"=>"message","state"=>$resultn->num_rows));
                        
                    }elseif($fetchn['type']=='fReqAccepted' || $fetchn['type']=='fReqSent'){
                        if ($fetchn['type']=='fReqAccepted'){
                          echo json_encode(array("data"=>array(
                              "code"=>notificationF($fetchn,'code'),
                              "wn"=>$fetchn['wn'],
                              "nid"=>$fetchn['id'],
                              "user"=>notificationF($fetchn,'user'),
                              "text"=>notificationF($fetchn,'text'),
                              "picture"=>notificationF($fetchn,'picture')),
                              "code"=>"true",                                                
                              "codem"=>"new_n",
                              "coden"=>"fReqAccepted",
                              "state"=>$resultn->num_rows
                          ));  
                        }else{
                            echo json_encode(array("data"=>array(
                              
                              "code"=>notificationF($fetchn,'code'),
                              "wn"=>$fetchn['wn'],
                              "nid"=>$fetchn['id'],
                              "user"=>notificationF($fetchn,'user'),
                              "text"=>notificationF($fetchn,'text'),
                              "picture"=>notificationF($fetchn,'picture')),
                              "code"=>"true",                                                
                              "codem"=>"new_n",
                              "coden"=>"fReqSent",
                              "state"=>$resultn->num_rows
                          ));
                            
                        }
                    }else{
                        if($fetchn['type']=='fReqAccepted' || $fetchn['type']=='fReqSent' || $fetchn['type']=='message'){
                            
                        }else{
                            echo json_encode(array("data"=>array(
                              
                              "code"=>notificationF($fetchn,'code'),
                              "wn"=>$fetchn['wn'],
                              "nid"=>$fetchn['id'],
                              "user"=>notificationF($fetchn,'user'),
                              "text"=>notificationF($fetchn,'text'),
                              "picture"=>notificationF($fetchn,'picture')),
                              "code"=>"true",                                                
                              "codem"=>"new_n",
                              "coden"=>$fetchn['type'],
                              "state"=>$resultn->num_rows
                                                   
                          ));
                        }
                    }
                    
                    
                    
                }else{
                    echo json_encode(array("code"=>"true","codem"=>"no_n","state"=>$resultn->num_rows , "this"=>strtotime($now)-$thwn));
                }

        break;
           
       
   }
    
    
    
    }else{
    echo json_encode(array("code"=>"false", "mcode"=>"notLogin"));
    }
}



if (isset($_POST['frn']) && isset($_SESSION['id'])){
    
            header("Content-Type: application/json; charset=UTF-8");

    
    $myid=$_SESSION['id'];
    
    
    
    switch ($_POST['frn']){
            
        case 'friendreq':
           $id=$_POST['id'];
            if (userE($id)){
                if (!(block('block',$myid,$id))){
                    
                    echo json_encode(["code"=>"false","mcode"=>"ErrorB"]);
                    
                }else{
                    
                    $stmtu = $conn->prepare("SELECT * FROM friend WHERE (rfrom = ? AND rto = ?) OR (rfrom = ? AND rto = ?) ");
                    
                    
                    $stmtu->bind_param("ssss", $myid, $id,$id,$myid );
                    $stmtu->execute();
                    $resultu=$stmtu->get_result();
                    $friendf=$resultu->fetch_assoc();
                    
                    
                   
                    if($resultu->num_rows==0){
            
                        $stmt = $conn->prepare("INSERT INTO friend(rfrom,rto,status) VALUES(?,?,'0')");
                        $stmt->bind_param("ss", $myid,$id);

                        if($stmt->execute()){
                            echo json_encode(["code"=>"true","mcode"=>"fReqSent"]);
                            
                            $stmt4 = $conn->prepare("SELECT * FROM friend WHERE  rfrom = ? AND rto = ? AND status = '0' ORDER BY id DESC");
                                        $stmt4->bind_param("ss", $myid , $id);
                                        $stmt4->execute();
                                        $result4=$stmt4->get_result();
                                        $post4=$result4->fetch_assoc();
                            
                            notificationC($myid,$id,"fReqSent",$post4['id']);
                            
                        }else{
                            echo json_encode(["code"=>"false","mcode"=>"RSError"]);
                        }
                        
                    }else{
                        if ($friendf['rfrom']==$myid){
                            
                            if($friendf['status']=='0'){
                            
                                $stmt = $conn->prepare("DELETE FROM friend WHERE rfrom = ? and rto = ?");
                                $stmt->bind_param("ss", $myid,$id);

                                if($stmt->execute()){
                                    echo json_encode(["code"=>"true","mcode"=>"fReqCanceled"]);
                                }else{
                                    echo json_encode(["code"=>"false","mcode"=>"FRCError"]);
                                }
                                
                            }else{
                                
                                $stmt = $conn->prepare("DELETE FROM friend WHERE rfrom = ? and rto = ?");
                                $stmt->bind_param("ss", $myid,$id);

                                if($stmt->execute()){
                                    echo json_encode(["code"=>"true","mcode"=>"fReqUnfriend"]);
                                }else{
                                    echo json_encode(["code"=>"false","mcode"=>"FRUError"]);
                                }
                                
                            }
                            
                            
                        }else{
                            
                            if ($_POST['op']=='acc'){
                                $stmt = $conn->prepare("UPDATE friend SET status=1 WHERE rto = ? and rfrom = ?");
                                $stmt->bind_param("ss", $myid,$id);

                                if($stmt->execute()){
                                    echo json_encode(["code"=>"true","mcode"=>"fReqAccepted"]);
                                    
                                        $stmt4 = $conn->prepare("SELECT * FROM friend WHERE  rto = ? and rfrom = ?");
                                        $stmt4->bind_param("ss", $myid , $id);
                                        $stmt4->execute();
                                        $result4=$stmt4->get_result();
                                        $post4=$result4->fetch_assoc();
                                    
                                    notificationC($myid,$id,"fReqAccepted",$post4['id']);
                                }else{
                                    echo json_encode(["code"=>"false","mcode"=>"FRAError"]);
                                }
                            }else{
                                $stmt = $conn->prepare("DELETE FROM friend WHERE rfrom = ? and rto = ?");
                                $stmt->bind_param("ss", $id,$myid);

                                if($stmt->execute()){
                                    if ($_POST['op']=='ref'){
                                        echo json_encode(["code"=>"true","mcode"=>"fReqRejected"]);
                                    }else{
                                        echo json_encode(["code"=>"true","mcode"=>"fReqUnfriend"]);
                                    }
                                }else{
                                    echo json_encode(["code"=>"false","mcode"=>"FRJError"]);
                                }
                            }
                        }
                        
                    }
                    
                }
            }else{
                
            echo json_encode(["code"=>"false","mcode"=>"invalidUser"]);
                
            }
        break;
            
            
        case "getfr":
            if(isset($_SESSION['id'])){
                $name=$_POST['name'];
                $name = preg_replace('/(?<!\\\)([%_])/', '\\\$1',$name);

                //block!
                $stmt = $conn->prepare("
                SELECT friend.rto,friend.rfrom,friend.status,users.username,users.code,users.picture FROM users JOIN friend ON (friend.rfrom=users.code) WHERE users.username LIKE CONCAT('%',?,'%') AND friend.status='1'  AND friend.rto=?
                
                UNION
                
                SELECT friend.rto,friend.rfrom,friend.status,users.username,users.code,users.picture FROM users JOIN friend ON (friend.rto=users.code) WHERE users.username LIKE CONCAT('%',?,'%') AND friend.status='1'  AND friend.rfrom=?");
                $stmt->bind_param("ssss", $name,$_SESSION['id'], $name,$_SESSION['id']);
                $stmt->execute();
                $result=$stmt->get_result();
                $friends=[];
                while($friend=$result->fetch_assoc()){
                    array_push($friends,$friend);
                }
                
                
                echo  json_encode(array('code'=>true, 'mcode'=>true, 'data'=>$friends));
                
                
                
                
            }else{
                
            }
        break;
    }
}

if(isset($_POST['settings'])){
    header("Content-Type: application/json; charset=UTF-8");
    if (isset($_SESSION['id'])){
        switch ($_POST['settings']){
            case 'profile':
              $u='';
              $e='';
              $code='';
              $mcode='';
              $emv=false;
                if($_FILES['profp']['error']>0){ $profp='false';  }else{ $profp= 'true';};
                
                if(isset($_POST['username'])){ $username=$_POST['username'];  }else{ $username= '';};
                
                if(isset($_POST['email'])){ $email=$_POST['email'];  }else{ $email= '';};
                
                if(isset($_POST['country'])){ $country=$_POST['country'];  }else{ $country= '';};
                
                if(isset($_POST['genre'])){ $genre=$_POST['genre'];  }else{ $genre= '';};
                
                if(isset($_POST['birth'])){ if(isset($_POST['dds'])){$birth= '1|'.$_POST['birth'];}else{$birth='0|'.$_POST['birth'];}  }else{ $birth= '';};
                
                if(isset($_POST['disc'])){ $disc=$_POST['disc'];  }else{ $disc= '';};
                
                
                
                if ($username=='' || $username==$_SESSION['username']){
                    $username=$_SESSION['username'];
                     $u='true';
                }else{
                    $stmtu = $conn->prepare("SELECT * FROM users WHERE username = ? ");
                    $stmtu->bind_param("s", $username);
                    $stmtu->execute();
                    $resultu=$stmtu->get_result();
                    
                    if ($resultu->num_rows=='0' && strlen($username)>3 && strlen($username)<12 && !(preg_match('/[^a-zA-Z0-9_]/', $username))){  
                        
                        
                        $u='true';
                    }else{
                        
                        
                        
                        $username=$_SESSION['username'];
                        $code='false';
                        $u='false';
                        $mcode="usernameError";
                    }
                }
                
                
                
                
                if ($email=='' || $email==$_SESSION['email']){
                    $email=$_SESSION['email'];
                    $e='true';
                }else{
                    $stmtu = $conn->prepare("SELECT * FROM users WHERE email = ? ");
                    $stmtu->bind_param("s", $email);
                    $stmtu->execute();
                    $resultu=$stmtu->get_result();
                    
                    if ( !($resultu->num_rows=='0') || !(filter_var($email, FILTER_VALIDATE_EMAIL))) {
                        $email=$_SESSION['email'];
                        $e='false';
                        $code='false';
                        $mcode="emailError";
                    }else{
                        $email=$_POST['email'];
                        $e='true';
                    }
                }
                
                $myid=$_SESSION['id'];
                
                
                $myim=$_SESSION['img'];
                
                $myim=userinfo($myid)['picture'];
                
                
                if ($profp=='true'){
                    
                    $imgupinf;
                    $imgupinf=uploadimage($_FILES['profp'],"imageuser");
                    
                    if ($imgupinf['imguploaded']=='true'){
                        
                        
                        if ($u=='true' && $e=='true'){
                        
                        $stmtu = $conn->prepare(" UPDATE users SET username=? ,email=? ,picture=? ,birth=? ,location=? ,genre=? ,descr=?  WHERE code= ?");
                        $stmtu->bind_param("ssssssss", $username, $email,$imgupinf['imagename'],$birth ,$country,$genre,$disc,$myid);
                            if ($stmtu->execute()){
                                $code='true';
                                $mcode='success';
                                
                                if($_SESSION['email']==$_POST['email']){
                                        $emv=false;
                                    }else{
                                        $emv=true;
                                    }
                                
                                $_SESSION['username']=$username;
                                $_SESSION['img']=$imgupinf['imagename'];
                                $_SESSION['email']=$email;
                                
                                
                            }else{
                                $code='false';
                                $mcode='errorAdding';
                            }
                            
                        }else{
                            switch ("false"){
                                case $u:
                                    $code="false";
                                    $mcode="usernameError";
                                break;
                                
                                case $e:
                                    $code="false";
                                    $mcode="emailError";
                                break;
                            }
                        }
                        
                        
                        
                        
                        
                    }else{
                        
                         if ($u=='true' && $e=='true'){
                             
                             $stmtu = $conn->prepare(" UPDATE users SET username=? ,email=? ,picture=? ,birth=? ,location=? ,genre=? ,descr=? WHERE code= ?");
                             $stmtu->bind_param("ssssssss", $username, $email,$myim,$birth ,$country,$genre,$disc,$myid);
                             
                             if ($stmtu->execute()){
                                 
                                    if($_SESSION['email']==$_POST['email']){
                                        $emv=false;
                                    }else{
                                        $emv=true;
                                    }
                                 
                                 $code='true';
                                 $mcode='success';
                                 $_SESSION['username']=$username;
                                 $_SESSION['email']=$email;

                             }else{
                                 
                                 $code='false';
                                 $mcode='errorAdding';
                                 
                             }
                         }else{
                           switch ('false'){
                                case $u:
                                    $code='false';
                                    $mcode="usernameError";
                                break;
                                
                                case $e:
                                    $code='false';
                                    $mcode="emailError";
                                break;
                            }  
                         }
                    }
                    
                    
                }else{
                    $myid=$_SESSION['id'];
                    
                    if ($u=='true' && $e=='true'){
                    $stmtu = $conn->prepare(" UPDATE users SET username=? ,email=? ,picture=? ,birth=? ,location=? ,genre=? ,descr=?  WHERE code= ?");
                        $stmtu->bind_param("ssssssss", $username, $email,$myim,$birth ,$country,$genre,$disc,$myid);
                        if ($stmtu->execute()){
                            $code='true';
                            $mcode='success';
                            if($_SESSION['email']==$_POST['email']){
                                     $emv=false;
                            }else{
                                     $emv=true;
                            }
                            $_SESSION['username']=$username;
                            $_SESSION['img']=$myim;
                            $_SESSION['email']=$email;
                            
                        }else{
                            trigger_error("there was an error....".$conn->error, E_USER_WARNING);
                            $code='false';
                            $mcode='errorAdding';
                        }
                    }else{
                        switch ('false'){
                                case $u:
                                    $code='false';
                                    $mcode="usernameError";
                                break;
                                
                                case $e:
                                    $code='false';
                                    $mcode="emailError";
                                break;
                            }
                    }
                    
                }
                
                                if(!$emv){
                                }else{
                                    

                                    $to = $_POST['email'];
                                    $subject = 'تأكيد البريد الإلكتروني الخاص بك.';
                                    $from='noreply@ta9yem.com';

                                    // To send HTML mail, the Content-type header must be set
                                    $headers  = 'MIME-Version: 1.0' . "\r\n";
                                    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

                                    // Create email headers
                                    $headers .= 'From: ta9yem@ta9yem.com'."\r\n".
                                        'Reply-To: Ta9yem'."\r\n" .
                                        'X-Mailer: PHP/' . phpversion();

                                    $hash = md5(rand(0,1000)); 
                                    $stmt = $conn->prepare("INSERT INTO verifie(code,email,hash,verif) VALUES(?,?,?,'0')");
                                    $stmt->bind_param("sss",  $_SESSION['id'],$_POST['email'],$hash);
                                    $stmt->execute();
                                    
                                    $stmt = $conn->prepare("UPDATE users SET emailver='0' WHERE code=?");
                                    $stmt->bind_param("s", $_SESSION['id']);
                                    $stmt->execute();



                                    // Compose a simple HTML email message
                                    $message = '<html><body style="">';
                                    $message .= '<h1 style="color:#f40;background-color:#4376aa;text-align:center;padding: 22px;"><img src="www.ta9yem.com/assets/logo_w.png"></h1>';
                                    $message .= '<h1 style="color:#000;text-align:center"> <b>'.$username.'</b>, مرحبا بك</h1>';
                                    $message .= '<p style="color:##2c2f2c;font-size:18px;text-align:right">بتغييرك لبريدك الالكتروني. يجب ان يتم تأكيده مجددا.</p>';
                                    $message .= '<p style="color:##2c2f2c;font-size:15px;text-align:right">لتأكيد بريدك الإلكتروني المرجوا الضغط على الرابط التالي: <br><a href="http://www.ta9yem.com/verfie.php?em='.$_POST['email'].'&hs='.$hash.'">http://www.ta9yem.com/verfie.php?em='.$_POST['email'].'&hs='.$hash.'</a></p>';
                                    $message .= '</body></html>';


                                    // Sending email
                                    if(mail($to, $subject, $message, $headers)){
                                    } else{
                                    }
            
                                }
                
            break;
                
            case 'privacy':
                
                if(isset($_SESSION['id']) && isset($_POST['pass']) && isset($_POST['passval']) && !empty($_POST['pass']) && !empty($_POST['passval'])){
                    
                    $e_pass=false;
                    $c_pass='';
                    
                    if($_POST['pass']==$_POST['passval']){
                        $fresh_pass=$_POST['pass'];
                        if (preg_match('/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/', $fresh_pass) && strlen($fresh_pass)>8){
                            $e_pass=true; $c_pass=1;
                        }else{
                            if (strlen($fresh_pass)<8){
                                $e_pass=false; $c_pass='ps_small';
                            }elseif(!preg_match('/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/', $fresh_pass)){
                                $e_pass=false; $c_pass='ps_invalid';
                            }
                        }
                        
                        $mcode=$c_pass;
                    }
                    
                    if($e_pass){
                        $myid=$_SESSION['id'];
                        $password=password_hash($fresh_pass, PASSWORD_DEFAULT);
                        $stmt = $conn->prepare("UPDATE users SET password=? WHERE code=?");
                        $stmt->bind_param("ss", $password,$_SESSION['id']);
                        $stmt->execute();
                        $code=true;
                        $mcode=true;
                    }else{
                        $code=false;
                        if($_POST['pass']==$_POST['passval']){}else{$mcode='valErr';}
                    }
                    
                   
                }
                
            break;
        }
    }else{
    }
    
    echo json_encode(['code'=>$code,'mcode'=>$mcode]);
}

if (isset($_POST['paginate'])){
                header("Content-Type: application/json; charset=UTF-8");

    $v = ($_POST['paginate']=='actors' || $_POST['paginate']=='titles' || $_POST['paginate']=='topshows' || $_POST['paginate']=='feed' || $_POST['paginate']=='lists');
        
    if ($v){
        
        if ($_POST['paginate']=='feed'){
            $comp=explode('|',$_POST['page']);
            $page=$comp[0];
            $type=$comp[1];    
        }else{
            $page=$_POST['page'];
        }
            
        
        
        
        if ($page=='' || $page<1 || !(is_numeric($page))){
            $code='false';
            $mcode='pageError';
            $data='';
        }else{
            switch ($_POST['paginate']){
                
                case "actors":   
                    $stmtm = $conn->prepare("SELECT * FROM persones WHERE status='1' ");
                    $stmtm->execute();
                    $resultm=$stmtm->get_result();

                    $all=$resultm->num_rows;
                    $off=($page-1)*10;

                    $stmt1 = $conn->prepare('SELECT count(likes.id) as likesn,likes.idP as myL,likes.postT,persones.id, persones.fname, persones.lname, persones.country, persones.biography,persones.picture   FROM persones  JOIN  likes ON likes.idP=persones.id WHERE likes.postT="ac" AND persones.status="1" GROUP BY likes.idP ORDER BY count(likes.id) DESC LIMIT 10 OFFSET ? ');
                    $stmt1->bind_param("i", $off);
                    $stmt1->execute();
                    $result1=$stmt1->get_result();
                    $data=[];

                    while($persones=$result1->fetch_assoc()){

                        $persones['country']=datasignif($persones['country'],'countryN');

                        if (strlen($persones['biography'])>200){

                            $persones['biography']=$persones['biography'].'...';

                        }else{
                        }

                        $persones['myL']=detailpost($persones['id'],'ac')['myL'];
                        array_push($data, $persones);
                    }
                    $code='true';

                    if ($result1->num_rows>0){
                       $mcode='exist';
                    }else{
                       $mcode='empty';
                    }
                break;
                
                case "feed":
                 if (isset($_SESSION['id'])){
                     
                     $off=($page-1)*10;
                    if ($type=='fr'){
                        
                        $op='fr';
                        $sql="
                        SELECT 

                        friend.rfrom,friend.rto,friend.status,
                        feed.id , feed.idU , feed.text , feed.spoiler , feed.images , feed.privacy , feed.link , feed.post, feed.wn

                        FROM feed JOIN friend ON feed.idU=friend.rfrom WHERE friend.rto=? AND friend.status='1'

                        UNION 

                        SELECT 

                        friend.rfrom,friend.rto,friend.status,
                        feed.id , feed.idU , feed.text , feed.spoiler , feed.images , feed.privacy , feed.link , feed.post, feed.wn

                        FROM feed JOIN friend ON feed.idU=friend.rto WHERE friend.rfrom=? AND friend.status='1'


                        ORDER BY wn LIMIT 10 OFFSET ?
                        ";

                        $sql2="SELECT 

                        friend.rfrom,friend.rto,friend.status,
                        feed.id , feed.idU , feed.text , feed.spoiler , feed.images , feed.privacy , feed.link , feed.post, feed.wn

                        FROM feed JOIN friend ON feed.idU=friend.rfrom WHERE friend.rto=? AND friend.status='1'

                        UNION 

                        SELECT 

                        friend.rfrom,friend.rto,friend.status,
                        feed.id , feed.idU , feed.text , feed.spoiler , feed.images , feed.privacy , feed.link , feed.post, feed.wn

                        FROM feed JOIN friend ON feed.idU=friend.rto WHERE friend.rfrom=? AND friend.status='1'
                        
                      
                        
                        ";
                       //-->get if the poster if a friend and show it > 
                    }else{
                        $op='pb';
                        $sql="SELECT feed.id, feed.idU , feed.text , feed.spoiler , feed.images , feed.privacy , feed.link , feed.post, feed.wn FROM feed WHERE privacy!='pri' OR (privacy='pri' AND idU=?) ORDER BY wn DESC LIMIT 10
                        
                        OFFSET ?
                        ";

                        $sql2="SELECT feed.id, feed.idU , feed.text , feed.spoiler , feed.images , feed.privacy , feed.link , feed.post, feed.wn FROM feed WHERE privacy!='pri' OR (privacy='pri' AND idU=?)  ";
                    }


                    $stmte = $conn->prepare($sql);
                    if ($op=='fr'){
                        $stmte->bind_param('ssi', $_SESSION['id'], $_SESSION['id'],$off);
                    }else{
                        $stmte->bind_param('si', $_SESSION['id'],$off);
                    }
                    $stmte->execute();
                    $resulte=$stmte->get_result();
                    $numr=$resulte->num_rows;
                    $myid=$_SESSION['id'];
                    $myimg=$_SESSION['img'];
                    $myusername=$_SESSION['username'];
                    $data=[];
                             
                        $data['myusername']=$myusername;
                        $data['myimg']=$myimg;
                        $data['myid']=$myid;
                    $pos=[];
                    while ($feedinfo=$resulte->fetch_assoc()){
                            $datan=$feedinfo;
                        //get likes, and poster infos;
                            
                            
                            
                            $detn=detailpost($feedinfo['id'],'fd');
                            $stmtmC = $conn->prepare("SELECT * FROM comments WHERE postT='fd' AND idP=?");
                            $stmtmC->bind_param('s', $feedinfo['id']);
                            $stmtmC->execute();
                            $resultmC=$stmtmC->get_result();
                            $detn['comments']=$resultmC->num_rows;
                            $datan['prim_info']=$detn;
                        
                        //myL, postL postRp postRe ...
                            if ($feedinfo['idU']==$_SESSION['id']){
                                $mine=true;
                            }else{
                                $mine=false;
                            }
                        
                            $datan['poster']=[userinfo($feedinfo['idU'])['username'],userinfo($feedinfo['idU'])['code'],userinfo($feedinfo['idU'])['picture'],$mine];
                            
                        //get images
                        
                            $stmteI = $conn->prepare('SELECT idF,name FROM feedimages WHERE idF=?');
                            $stmteI->bind_param("s", $feedinfo['id']);
                            $stmteI->execute();
                            $resulteI=$stmteI->get_result();
                            $numrI=$resulteI->num_rows;
                            if ($numrI=='0' || $numrI>4){
                                $datan['poimages']=[];
                            }else{
                                $images=[];
                                while($imag=$resulteI->fetch_assoc()){
                                    array_push($images,$imag['name']);
                                }
                                $datan['poimages']=$images;
                            }
                        //get post
                        
                        
                        if ($feedinfo['post']==''){$datan['title']=[];}else{
                          if (postexist($feedinfo['post'],'dr')){
                                $ti; $ti=titleinfo($feedinfo['post']);
                                $datan['title']=[$ti['id'],$ti['title'],$ti['synopsis'],$ti['image']];
                          }else{
                              $datan['title']=[];
                          }
                        }
                        
                       
                        //get link
                            /**********        VERY IMPORTANT DO NOT FORGET!          **/
                            if ($feedinfo['link']=='' || !filter_var($feedinfo['link'], FILTER_VALIDATE_URL)){
                                $datan['link']=[];
                            }else{
                                
                                $getfeedlink=urlfetch($feedinfo['link']);
                                if($getfeedlink){
                                $getfeedlink['link']=$feedinfo['link'];
                                $host=parse_url($feedinfo['link']);
                                $getfeedlink['url']=$host['host'];
                                $datan['link']=$getfeedlink;
                                }else{
                                $datan['link']=[];  
                                }
                                
                            }
                        
                        //get commants then replies
                              $stmtnN = $conn->prepare("SELECT postT,id,idP FROM comments WHERE idP=? AND postT='fd'"); 
                              $stmtnN->bind_param("s", $feedinfo['id']);
                              $stmtnN->execute();
                              $res=$stmtnN->get_result();
                              $num=$res->num_rows;
                              $comments=[];
                              $stmtn = $conn->prepare("SELECT 
                                            comments.id as cmi,
                                            comments.comment ,
                                            comments.idU ,
                                            comments.spoiler,
                                            comments.idP as thisP,
                                            comments.postT as thisT,
                                            comments.wn ,
                                            count(comments.id) as how,

                                            users.username,
                                            users.picture,
                                            users.code,

                                            count(reports.id) as RepCount,
                                            reports.idP,
                                            reports.idR,
                                            reports.idT,

                                            count(replies.id) as repCount,
                                            replies.idU,


                                            likes.idL,
                                            likes.idP,
                                            likes.id,
                                            count(likes.postT) as liken

                                            FROM comments  

                                            JOIN users ON users.code=comments.idU 

                                            JOIN likes ON likes.idP=comments.id 

                                            JOIN reports ON reports.idP=comments.id  

                                            JOIN replies ON replies.idC=comments.id  

                                            WHERE comments.idP=? AND comments.postT='fd' AND reports.idT='cm' AND likes.postT='cm' GROUP BY comments.id ORDER BY comments.wn DESC LIMIT 6
                                            ");
                        
                        
                                            $stmtn->bind_param("s", $feedinfo['id']);
                                            $stmtn->execute();
                                            $comm=$stmtn->get_result();
                                            while ($comminfo=$comm->fetch_assoc()){
                                                $comminfo['liken']=detailpost($comminfo['cmi'],'cm')['postL'];
                                                if (isset($_SESSION['id'])){

                                                    $comminfo['how']=$_SESSION['id'];
                                                    $stmtn = $conn->prepare("SELECT idP,idR FROM reports WHERE idP=? AND idR=? AND idT='cm'");
                                                    $stmtn->bind_param("ss", $comminfo['cmi'], $_SESSION['id']);
                                                    $stmtn->execute();
                                                    $resu=$stmtn->get_result();
                                                    if ($resu->num_rows!=0){
                                                        $comminfo['idR']='true';
                                                    }else{
                                                        $comminfo['idR']='false';
                                                    }

                                                }else{
                                                    $comminfo['how']='';
                                                }
                                                
                                                $stmtn = $conn->prepare("SELECT 
                                    
                                            replies.id ,
                                            replies.replie ,
                                            replies.idU ,
                                            replies.spoiler,
                                            replies.idC,
                                            replies.wn ,

                                            users.username,
                                            users.picture,
                                            users.code,

                                            reports.idR,
                                            count(reports.idP) as reported,
                                            reports.idT,

                                            likes.idL,
                                            likes.postT,
                                            likes.idP,likes.id as likesn
                                            

                                            FROM replies  

                                            JOIN users ON users.code=replies.idU 

                                            JOIN likes ON likes.idP=replies.id 

                                            JOIN reports ON reports.idP=replies.id  

                                            WHERE replies.idC=? AND reports.idT='rp' AND replies.idU!='' AND likes.postT='rp' GROUP BY replies.id ORDER BY replies.wn DESC 

                                            ");
                                            $stmtn->bind_param("s", $comminfo['cmi']);
                                            $stmtn->execute();
                                            $rep=$stmtn->get_result();
                                            $comminfo['thisT']=[];
                                                while($repinfo=$rep->fetch_assoc()){
                                                    $ri=detailpost($repinfo['id'],'rp');
                                                    $repinfo['idT']=$ri['myRe'];
                                                    $repinfo['myl']=$ri['myL'];
                                                    $repinfo['likesn']=$ri['postL'];
                                                    array_push($comminfo['thisT'],$repinfo);
                                                }
                                                
                                                array_push($comments, $comminfo);
                                            }
                                        
                                        $datan['comm']=$comments;             
                        
                        
                        if ($detn['postL']=='0'){
                            $likers=[];
                        }else{
                            $stmtmL = $conn->prepare("SELECT postT,idP,idL FROM likes WHERE postT='fd' AND idP=? AND idL!=''");
                            $stmtmL->bind_param('s', $feedinfo['id']);
                            $stmtmL->execute();
                            $resultmL=$stmtmL->get_result();
                            $likers=[];

                            while($liker=$resultmL->fetch_assoc()){
                                
                                $li; $li=userinfo($liker['idL']);
                                
                                $idLiker=[$liker['idL'],$li['username'],$li['picture']];
                                array_push($likers,$idLiker);
                            }
                            
                        }
                        
                        
                        $datan['likers']=$likers;
                        
                        
                        //push everything
                        
                        array_push($pos,$datan);
                    }
                     
                     $data['pos']=$pos;

                     
                    if ($resulte->num_rows>0){
                       $code='true';
                       $mcode='exist';
                    }else{
                       $code='true';
                       $mcode='empty';
                    }
                    
                 }else{
                    $code='false';
                    $mcode='notLogin';
                    $data='';
                 }
                break;
                
            }
            
        }
    }else{
        $code='false';
        $mcode='typeError';
        $data='';
    }
    
        echo json_encode(array("code"=>$code, "mcode"=>$mcode, 'data'=>$data));

}

if (isset($_POST['descussion'])){
    
    
    header("Content-Type: application/json; charset=UTF-8");
    switch ($_POST['descussion']){
        case 'add_top':
                if(isset($_SESSION['id']) && confirmed($_SESSION['id'])){

                    $myid=$_SESSION['id'];
                    $id=$_POST['id'];
                    $descr=filter_var(htmlentities($_POST['detail']),FILTER_SANITIZE_STRING);
                    $title=filter_var(htmlentities($_POST['subject']),FILTER_SANITIZE_STRING);


                    $stmt1 = $conn->prepare("SELECT * FROM forum WHERE id=?");
                    $stmt1->bind_param("s", $id);
                    $stmt1->execute();
                    $result1=$stmt1->get_result();
                    
                    $result = $conn->query("SHOW TABLE STATUS WHERE `Name` = 'topics'");
                    $data = mysqli_fetch_array($result);
                    $next_increment = $data['Auto_increment'];
                    
                    
                    if (strlen($title)>10 && strlen($descr)>10 && strlen($descr)<200 && $result1->num_rows=='1'){
                        $stmt1 = $conn->prepare("INSERT INTO topics (idF,title,text,idU) VALUES(?,?,?,?)");
                        $stmt1->bind_param("ssss", $id,$title,$descr,$myid);
                        if ($stmt1->execute()){
                            echo json_encode(array("code"=>true, "mcode"=>'true', 'id'=>$next_increment));
                        }else{
                            echo json_encode(array("code"=>'false', "mcode"=>'false'));
                        }
                    }else{
                        echo json_encode(array("code"=>'false', "mcode"=>'false'));
                    } 
                }else{
                    if(isset($_SESSION['id'])  &&  !confirmed($_SESSION['id'])){
                        echo json_encode(array("code"=>'false','mcode'=>'emailVer'));
                    }else{
                        echo json_encode(array("code"=>'false','mcode'=>'notLogin'));
                    }
                }
        break;
            
        case 'add_answ':
            
                if(isset($_SESSION['id']) && confirmed($_SESSION['id'])){

                    $myid=$_SESSION['id'];
                    $id=$_POST['id'];
                    $descr=filter_var(htmlentities($_POST['detail']),FILTER_SANITIZE_STRING);
                    


                    $stmt1 = $conn->prepare("SELECT * FROM topics WHERE id=?");
                    $stmt1->bind_param("s", $id);
                    $stmt1->execute();
                    $result1=$stmt1->get_result();
                    $r=$result1->fetch_assoc();
                    
                    $result = $conn->query("SHOW TABLE STATUS WHERE `Name` = 'comments'");
                    $data = mysqli_fetch_array($result);
                    $next_increment = $data['Auto_increment'];
                    
                    
                    if ( strlen($descr)>10 && strlen($descr)<200 && $result1->num_rows=='1'){
                        $stmt1 = $conn->prepare("INSERT INTO comments (idU,idP,comment,spoiler,postT) VALUES(?,?,?,'','dc')");
                        $stmt1->bind_param("sss", $myid, $id,$descr);
                        if ($stmt1->execute()){
                            if($r['idU']==$myid){}else{
                                notificationC($myid,$r['idU'],"dc|comment",$next_increment);
                            }
                            echo json_encode(array("code"=>true, "mcode"=>'true'));
                        }else{
                            echo json_encode(array("code"=>'false', "mcode"=>'false'));
                        }
                    }else{
                        echo json_encode(array("code"=>'false', "mcode"=>'false'));
                    } 
                }else{
                    if(isset($_SESSION['id'])  &&  !confirmed($_SESSION['id'])){
                    echo json_encode(array("code"=>'false','mcode'=>'emailVer'));
                    }else{
                        echo json_encode(array("code"=>'false','mcode'=>'notLogin'));
                    }
                }
        break;
        
        case 'delete':
            if (isset($_SESSION['id']) && confirmed($_SESSION['id'])){
                    $myid=$_SESSION['id'];
                    $id=$_POST["id"];
                    $stmtN = $conn->prepare("SELECT * FROM comments WHERE id=? and idU=? AND postT='dc'");
                    $stmtN->bind_param('ss', $id,$myid);
                    $stmtN->execute();
                    $resultN=$stmtN->get_result();
                    $feednum=$resultN->num_rows;
                    
                    if ($feednum=='0'){
                        echo json_encode(array('code'=>'false','mcode'=>'false'));
                    }else{
                        $stmtN = $conn->prepare("DELETE FROM comments WHERE id=? and idU=? and postT='dc'");
                        $stmtN->bind_param('ss', $id,$myid);
                        if($stmtN->execute()){
                            echo json_encode(array('code'=>'true','mcode'=>'deleted'));
                            
                            
                        }
                    }
                }else{
                    if(isset($_SESSION['id'])  &&  !confirmed($_SESSION['id'])){
                        echo json_encode(array("code"=>'false','mcode'=>'emailVer'));
                    }else{
                        echo json_encode(array("code"=>'false','mcode'=>'notLogin'));
                    }
                }
            break;
    
    }
}


if (isset($_POST['article'])){
    include("iama.php");
    header("Content-Type: application/json; charset=UTF-8");
    switch ($_POST['article']){
        case 'create':
                if(isset($_SESSION['id']) && confirmed($_SESSION['id']) && iama('writer',$_SESSION['id'])){ // and i can

                    $myid=$_SESSION['id'];
                    $jkeywods=json_decode($_POST['keyword']);
                    $keyp=$_POST['keyword'];
                    $title=filter_var(htmlentities($_POST['title']),FILTER_SANITIZE_STRING);
                    $body=$_POST['body'];


                    $stmt1 = $conn->prepare("SELECT * FROM article WHERE title=?");
                    $stmt1->bind_param("s", $title);
                    $stmt1->execute();
                    $result1=$stmt1->get_result();
                    
                    $result = $conn->query("SHOW TABLE STATUS WHERE `Name` = 'article'");
                    $data = mysqli_fetch_array($result);
                    $next_increment = $data['Auto_increment'];
                    
                    
                    if (strlen($title)>10 && strlen($body)>200 && $result1->num_rows=='0'){
                        $stmt1 = $conn->prepare("INSERT INTO article (idU,title,body,keywords) VALUES(?,?,?,?)");
                        $stmt1->bind_param("ssss", $myid,$title,$body,$keyp);
                        if ($stmt1->execute()){
                            echo json_encode(array("code"=>true, "mcode"=>'true'));
                            $type='ar';
                            $auther='';
                            $stmtn = $conn->prepare("INSERT INTO likes(idP,postT,idL) values(?,?,?)");
                            $stmtn->bind_param("sss", $next_increment, $type, $auther);
                            $stmtn->execute();
                            if ($jkeywods==null || count($jkeywods)=='0'){}else{
                                $w= $jkeywods;
                                
                                    foreach ($w as $wori) {
                                            $next_increment='a'.$next_increment;
                                            $stmtn = $conn->prepare("INSERT INTO keywords(idT,keyword) values(?,?)");
                                            $stmtn->bind_param("ss", $next_increment, $wori);
                                            $stmtn->execute();
                                    }
                                
                            }
                            
                        }else{
                            echo $conn->error;
                            echo json_encode(array("code"=>'false', "mcode"=>'false'));
                        }
                    }else{
                        echo json_encode(array("code"=>'false', "mcode"=>'falsae'));
                    } 
                }else{
                    if(isset($_SESSION['id'])  &&  !confirmed($_SESSION['id'])){
                        echo json_encode(array("code"=>'false','mcode'=>'emailVer'));
                    }else{
                        echo json_encode(array("code"=>'false','mcode'=>'false'));
                    }
                }
        break;
            
        case 'summerim':
                if(isset($_SESSION['id']) && confirmed($_SESSION['id']) && iama('writer',$_SESSION['id'])){ //and i can add a file
                    $img=$_FILES['file'];
                    $error;

    $validextensions = array("jpeg", "jpg", "png");
    
    $temporary = explode(".", $img["name"]);
    
    $file_extension = end($temporary);
    
    list($width, $height, $typei, $attr) = getimagesize($img['tmp_name']);
    
    if ((($img["type"] == "image/png") || ($img["type"] == "image/jpg") || ($img["type"] == "image/jpeg")
    ) //Approx. 100kb files can be uploaded.
    && in_array($file_extension, $validextensions) && $width>=300 && $height>=300) {
        
    if ($img["error"] > 0)
    {
    return false;
    }
    else
    {
       
                $folder="imageposts/article/";
           
            if (file_exists($folder . $img["name"])) {
                
                $rds=substr(str_shuffle('124234'), 0,4);

                $sourcePath = $img['tmp_name']; // Storing source path of the file in a variable
                $targetPath = $folder.$rds.$img['name']; // Target path where file is to be stored
                
                if(move_uploaded_file($sourcePath,$targetPath)){
                   $uplsucc="succ";
                }else{
                   $uplsucc="notsucc"; 
                } // Moving Uploaded file

            }else{
                
                $sourcePath = $img['tmp_name']; // Storing source path of the file in a variable
                $targetPath = $folder.$img['name']; // Target path where file is to be stored
                if(move_uploaded_file($sourcePath,$targetPath)){
                   $uplsucc="succ";
                }else{
                   $uplsucc="notsucc"; 
                }

            }
        
            if($uplsucc=='succ'){
                $name='http://127.0.0.1/dramalist/process/'.$targetPath;
                echo json_encode(array("imguploaded"=>"true","imagename"=>$name));
            }

        
        
    }
    }
    else
    {
    return false;
    }
                }
        break;
        
        case 'delete':
            if (isset($_SESSION['id']) && confirmed($_SESSION['id']) && iama('writer',$_SESSION['id'])){
                    $myid=$_SESSION['id'];
                    $id=$_POST["id"];
                    $stmtN = $conn->prepare("SELECT * FROM comments WHERE id=? and idU=? AND postT='dc'");
                    $stmtN->bind_param('ss', $id,$myid);
                    $stmtN->execute();
                    $resultN=$stmtN->get_result();
                    $feednum=$resultN->num_rows;
                    
                    if ($feednum=='0'){
                        echo json_encode(array('code'=>'false','mcode'=>'false'));
                    }else{
                        $stmtN = $conn->prepare("DELETE FROM comments WHERE id=? and idU=? and postT='dc'");
                        $stmtN->bind_param('ss', $id,$myid);
                        if($stmtN->execute()){
                            echo json_encode(array('code'=>'true','mcode'=>'deleted')); 
                        }
                    }
                }else{
                    echo json_encode(array('code'=>'false','mcode'=>'false'));
                }
            break;
    
    }
}
if(isset($_POST['recom'])){
    switch ($_POST['recom']){
        case 'delete':
            if (isset($_SESSION['id']) && confirmed($_SESSION['id'])){
                    $myid=$_SESSION['id'];
                    $id=$_POST["id"];
                    $stmtN = $conn->prepare("SELECT * FROM recom WHERE id=? and idU=?");
                    $stmtN->bind_param('ss', $id,$myid);
                    $stmtN->execute();
                    $resultN=$stmtN->get_result();
                    $feednum=$resultN->num_rows;
                    
                    if ($feednum=='0'){
                        echo json_encode(array('code'=>'false','mcode'=>'false'));
                    }else{
                        $stmtN = $conn->prepare("DELETE FROM recom WHERE id=? and idU=?");
                        $stmtN->bind_param('ss', $id,$myid);
                        if($stmtN->execute()){
                            echo json_encode(array('code'=>'true','mcode'=>'deleted'));
                        }
                    }
                }else{
                    echo json_encode(array('code'=>'false','mcode'=>'false'));
                }
        break;
    }
}

?>