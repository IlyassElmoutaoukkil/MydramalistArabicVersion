<?php
include("conn.php");
function isnotexist($table,$row,$string){
    global $conn;
    $sql="SELECT * FROM $table WHERE '$row'='$string'";
    return (mysqli_num_rows($conn->query($sql))==0);
}

function numof($table,$row,$string){
    global $conn;
    if ($string=='all'){
        $sql="SELECT * FROM users";
    }else{ 
        $sql="SELECT * FROM '$table' WHERE '$row'='$string'";   
    }
    return mysqli_num_rows($conn->query($sql));
}


function notificationC($from,$to,$type,$post){
    
    
    global $conn;
    
    $stmt = $conn->prepare("INSERT INTO notification (nfrom, nto, type, post, status) VALUES (?, ?, ?, ?, '0')");
    $stmt->bind_param('ssss', $from, $to, $type, $post);
    if(!$stmt->execute()){trigger_error("there was an error....".$conn->error, E_USER_WARNING);}else{}
    
}

function getLikes($post){
    
    
    global $conn;
    
    $stmtl = $conn->prepare("SELECT * FROM likes WHERE idP=? ");
    $stmtl->bind_param('s', $post);
    $stmtl->execute();
    $resultl=$stmtl->get_result();
    
    return ($resultl->num_rows)-1;
}

function postexist($id,$type){
    global $conn;
    switch  ($type){
            
        case 'ac':
        $stmtN = $conn->prepare("SELECT * FROM persones WHERE id=? AND status='1' ");
        break; 
            
        case 'ls':
        $stmtN = $conn->prepare("SELECT * FROM list WHERE id=?");
        break;
            
        case 'rv':
        $stmtN = $conn->prepare("SELECT * FROM reviews WHERE id=?");
        break; 
            
        case 'fd':
        $stmtN = $conn->prepare("SELECT * FROM feed WHERE id=?");
        break; 
            
        case 'tp':
        $stmtN = $conn->prepare("SELECT * FROM topics WHERE id=?");
        break;
        
        case 'ar':
        $stmtN = $conn->prepare("SELECT * FROM article WHERE id=?");
        break;
        
        case 'dr':
        $stmtN = $conn->prepare("SELECT * FROM title WHERE id=? AND admin_o='1'");
        break;
        
        case 'cm':
        $stmtN = $conn->prepare("SELECT * FROM comments WHERE id=?");
        break;
            
        case 'rp':
        $stmtN = $conn->prepare("SELECT * FROM replies WHERE id=?");
        break;
            
        case 'rc':
        $stmtN = $conn->prepare("SELECT * FROM recom WHERE id=?");
        break;
            
        case 'dc':
        $stmtN = $conn->prepare("SELECT * FROM topics WHERE id=?");
        break;
            
    }
    
    
    
    $stmtN->bind_param('s', $id);
    $stmtN->execute();
    $resultN=$stmtN->get_result();
    
    if ($resultN->num_rows=='0'){
        return false;
    }else{
        return true;
    }
    $stmtN->close();
    
}
function detailpost($id,$type){
    
    global $conn;
    
    if (postexist($id,$type)){            
            
            $stmtN = $conn->prepare("SELECT * FROM likes WHERE postT=? AND idP=? AND idL!=''");
            $stmtN->bind_param('ss', $type, $id);
            $stmtN->execute();
            $resultN=$stmtN->get_result();
            $likes=($resultN->num_rows);
            $stmtN->close();
        
        
            $stmtN = $conn->prepare("SELECT * FROM reports WHERE idT=? AND idP=?");
            $stmtN->bind_param('ss', $type, $id);
            $stmtN->execute();
            $resultN=$stmtN->get_result();
            $reports=($resultN->num_rows)-1;
            $stmtN->close();
        
            $stmtN = $conn->prepare("SELECT * FROM rate WHERE idT=? AND (status!='nitint' OR status!='planning')");
            $stmtN->bind_param('s', $id);
            $stmtN->execute();
            $resultN=$stmtN->get_result();
            $watchers=($resultN->num_rows);
            $stmtN->close();
        
            if ($type=='cm'){
            $stmtN = $conn->prepare("SELECT * FROM replies WHERE idC=?");
            $stmtN->bind_param('s',  $id);
            $stmtN->execute();
            $resultN=$stmtN->get_result();
            $replies=($resultN->num_rows)-1;
            $stmtN->close();
            }else{
            $replies='';
            }
        
            if ($type=='ar'){
            $stmtN = $conn->prepare("SELECT * FROM comments WHERE idP=? and postT='ar'");
            $stmtN->bind_param('s',  $id);
            $stmtN->execute();
            $resultN=$stmtN->get_result();
            $postC=($resultN->num_rows);
            $stmtN->close();
            }else{
            $postC='';
            }
        
            if ($type=='rv'){
            $stmtN = $conn->prepare("SELECT * FROM comments WHERE idP=? and postT='rv'");
            $stmtN->bind_param('s',  $id);
            $stmtN->execute();
            $resultN=$stmtN->get_result();
            $postC=($resultN->num_rows);
            $stmtN->close();
            }else{
            $postC='';
            }
        
        
            $stmtN = $conn->prepare("SELECT count(*) as cn, SUM(rate) as sm FROM rate WHERE idT=? AND !(rate='0' OR rate>'5' OR rate<'0' OR rate='')");
            $stmtN->bind_param('s',  $id);
            $stmtN->execute();
            $resultN=$stmtN->get_result();
            $fet=$resultN->fetch_assoc();
            $stmtN->close();
            if ($fet['cn']=='0'){
              $postRa=0;
              $raters= 0;
            }else{
                $postRf= $fet['sm']/$fet['cn'];
                $postRa= substr($postRf,0,3);
                $raters= $fet['cn'];
            }
            
                
            if (isset($_SESSION['id'])){
                
                $myid=$_SESSION['id'];
                
                $stmtm = $conn->prepare("SELECT * FROM likes WHERE postT=? AND idP=? AND idL=?");
                $stmtm->bind_param('sss', $type, $id, $myid);
                $stmtm->execute();
                $resultm=$stmtm->get_result();
                
                if ($resultm->num_rows=='0'){
                $mylike='false';
                }else{
                $mylike='true';
                }
                
                $stmtm = $conn->prepare("SELECT * FROM reports WHERE idT=? AND idP=? AND idR=?");
                $stmtm->bind_param('sss', $type, $id, $myid);
                $stmtm->execute();
                $resultm=$stmtm->get_result();
                
                if ($resultm->num_rows=='0'){
                $myRe='false';
                }else{
                $myRe='true';
                
                }
                
                $stmtm->close();

                $stmtm = $conn->prepare("SELECT * FROM rate WHERE idT=? AND idU=?");
                $stmtm->bind_param('ss', $id, $myid);
                $stmtm->execute();
                $resultm=$stmtm->get_result();
                
                if ($resultm->num_rows=='0'){
                $myR='false';
                $myRN=0;
                }else{
                $myR='true';
                $myRN=$resultm->fetch_assoc()['rate'];
                }
                $stmtm->close();

                
            }else{
                $mylike='false';
                $myR='false';
                $myRe='false';
                $myRN='0';
            } 
            return array('postL'=>$likes,'postR'=>$reports, 'myL'=>$mylike,'myRe'=>$myRe,'postE'=>'true','postR'=>$reports,'postRa'=>$postRa, 'myR'=>$myR, 'myRN'=>$myRN, 'postRp'=>$replies,'raters'=>$raters, 'watchers'=>$watchers,'postrepo'=>$reports,'postC'=>$postC);
    }else{
            return array('postL'=>'', 'myL'=>'','postE'=>'false');
    }
}


function notificationF($noti,$info){
    global $conn;
    
    $type = $noti['type'];
    $from = $noti['nfrom'];
    $to = $noti['nto'];
    $wn   = $noti['wn'];
    $post   = $noti['post'];
    
    
    if($type=='message'){
        
            
        $stmtm = $conn->prepare("SELECT * FROM messages WHERE id = ? ORDER BY id DESC LIMIT 1");
        $stmtm->bind_param("s", $post);
        $stmtm->execute();
        $resultm=$stmtm->get_result();
        $fetchm = $resultm->fetch_assoc();


        $stmtu = $conn->prepare("SELECT * FROM users WHERE code = ? ");
        $stmtu->bind_param("s", $fetchm['mfrom']);
        $stmtu->execute();
        $resultu=$stmtu->get_result();
        $fetchu = $resultu->fetch_assoc();
        
        switch ($info){
            case 'user':
                return $fetchu['username'];
            break;
            
            case 'picture':
                return $fetchu['picture'];
            break;
                
            case 'code':
                return $fetchu['code'];
            break;
                
            case 'message':
                return $fetchm['message'];
            break;
            
            case 'text':
                return "أرسل لك رسالة ";
            break;
        }
        
    }elseif($type=='fReqAccepted' || $type=='fReqSent'){
            
    
            
        $stmtm = $conn->prepare("SELECT * FROM notification WHERE id = ?");
        $stmtm->bind_param("s", $noti['id']);
        $stmtm->execute();
        $resultm=$stmtm->get_result();
        $fetchm = $resultm->fetch_assoc();
            


        $stmtu = $conn->prepare("SELECT * FROM users WHERE code = ? ");
        $stmtu->bind_param("s", $fetchm['nfrom']);
        $stmtu->execute();
        $resultu=$stmtu->get_result();
        $fetchu = $resultu->fetch_assoc();
        
        switch ($info){
            case 'user':
               
                return $fetchu['username'];
            break;
            
            case 'picture':
                return $fetchu['picture'];
            break;
                
            case 'code':
                return $fetchu['code'];
            break;
            
            case 'text':
                if ($type=='fReqSent'){
                    return "أرسل لك طلب صداقة ";
                }elseif($type=='fReqAccepted'){
                    return "قام بقبول طلب صداقتك ";
                }
                
            break;
        }
    }elseif ($type=='fd|comment' || $type=='ls|comment' || $type=='rv|comment' ||  $type=='ac|comment' || $type=='dr|comment' || $type=='ar|comment' || $type=='dc|comment' ){            
        
            
        
            
        $stmtm = $conn->prepare("SELECT * FROM notification WHERE id = ?");
        $stmtm->bind_param("s", $noti['id']);
        $stmtm->execute();
        $resultm=$stmtm->get_result();
        $fetchm = $resultm->fetch_assoc();
            


        $stmtu = $conn->prepare("SELECT * FROM users WHERE code = ? ");
        $stmtu->bind_param("s", $fetchm['nfrom']);
        $stmtu->execute();
        $resultu=$stmtu->get_result();
        $fetchu = $resultu->fetch_assoc();
        
                
                
        switch ($info){
            case 'user':
                return $fetchu['username'];
            break;
            
            case 'picture':
                return $fetchu['picture'];
            break;
                
            case 'code':
                return $fetchu['code'];
            break;
            
            case 'text':
                
                $stmt_s = $conn->prepare("SELECT * FROM comments WHERE id = ? ");
                $stmt_s->bind_param("s", $fetchm['post']);
                $stmt_s->execute();
                $result_s=$stmt_s->get_result();
                $fetch_s = $result_s->fetch_assoc();

                if ($type=='ac|comment'){
                    return "قام بالتعليق على الشخص ".personeinfo($fetch_s['idP'])['fname'].' '.personeinfo($fetch_s['idP'])['lname']." الذي أضفته.";
                }elseif($type=='dr|comment'){
                    return "قام بالتعليق على العنوان ".titleinfo($fetch_s['idP'])['title']." الذي أضفته.";
                }elseif($type=='ar|comment'){
                    return "قام بالتعليق على مقالتك بعنوان  ".substr(articleinfo($fetch_s['idP'])['title'],0,80).' ...';
                }elseif($type=='fd|comment'){
                    
                    return "قام بالتعليق على منشورك على المنصة الاجتماعية.";
                    
                }elseif($type=='ls|comment'){
                    return "قام بالتعليق على لائحتك ".substr(listinfo($fetch_s['idP'])['info']['title'],0,80).' ...';
                }elseif($type=='dc|comment'){
                    
                    $stmt_r = $conn->prepare("SELECT * FROM topics WHERE id = ? ");
                    $stmt_r->bind_param("s", $fetch_s['idP']);
                    $stmt_r->execute();
                    $result_r=$stmt_r->get_result();
                    $fetch_r = $result_r->fetch_assoc();
                    
                    return "قام بالتعليق على على موضوعك بعنوان  ".substr($fetch_r['title'],0,80).' ...';

                }elseif($type=='rv|comment'){
                    
                    $stmt_r = $conn->prepare("SELECT * FROM reviews WHERE id = ? ");
                    $stmt_r->bind_param("s", $fetch_s['idP']);
                    $stmt_r->execute();
                    $result_r=$stmt_r->get_result();
                    $fetch_r = $result_r->fetch_assoc();
                    
                    return "قام بالتعليق على مراجعتك على العمل ".titleinfo($fetch_r['idT'])['title'];
                }
            break;
        }
        }elseif($type=='replie'){
       
        $stmtm = $conn->prepare("SELECT * FROM notification WHERE id = ?");
        $stmtm->bind_param("s", $noti['id']);
        $stmtm->execute();
        $resultm=$stmtm->get_result();
        $fetchm = $resultm->fetch_assoc();
            


        $stmtu = $conn->prepare("SELECT * FROM users WHERE code = ? ");
        $stmtu->bind_param("s", $fetchm['nfrom']);
        $stmtu->execute();
        $resultu=$stmtu->get_result();
        $fetchu = $resultu->fetch_assoc();
        
                
                
        switch ($info){
            case 'user':
                return $fetchu['username'];
            break;
            
            case 'picture':
                return $fetchu['picture'];
            break;
                
            case 'code':
                return $fetchu['code'];
            break;
            
            case 'text':
                
                $stmt_r = $conn->prepare("SELECT * FROM replies WHERE id = ? ");
                $stmt_r->bind_param("s", $fetchm['post']);
                $stmt_r->execute();
                $result_r=$stmt_r->get_result();
                $fetch_r = $result_r->fetch_assoc();
                
                $stmt_s = $conn->prepare("SELECT * FROM comments WHERE id = ? ");
                $stmt_s->bind_param("s", $fetch_r['idC']);
                $stmt_s->execute();
                $result_s=$stmt_s->get_result();
                $fetch_s = $result_s->fetch_assoc();
                
                

                if ($fetch_s['postT']=='ac'){
                    return "قام بالرد على تعليقك على الشخص ".personeinfo($fetch_s['idP'])['fname'].' '.personeinfo($fetch_s['idP'])['lname'];
                }elseif($fetch_s['postT']=='dr'){
                    return "قام بالرد على تعليقك على العنوان ".titleinfo($fetch_s['idP'])['title'];
                }elseif($fetch_s['postT']=='ar'){
                    return "قام بالرد على تعليقك على المقالة   ".substr(articleinfo($fetch_s['idP'])['title'],0,80).' ...';
                }elseif($fetch_s['postT']=='fd'){
                    
                    return "قام بالرد على تعليقك على منشور على المنصة الاجتماعية.";
                    
                }elseif($fetch_s['postT']=='ls'){
                    return "قام بالرد على تعليقك على اللائحة  ".substr(listinfo($fetch_s['idP'])['info']['title'],0,80).' ...';
                }elseif($fetch_s['postT']=='rv'){
                    
                    $stmt_r = $conn->prepare("SELECT * FROM reviews WHERE id = ? ");
                    $stmt_r->bind_param("s", $fetch_s['idP']);
                    $stmt_r->execute();
                    $result_r=$stmt_r->get_result();
                    $fetch_r = $result_r->fetch_assoc();
                    
                    return "قام بالرد على تعليقك على مراجعة للعمل ".titleinfo($fetch_r['idT'])['title'];
                }
            break;
        }
        
    }elseif($type=='cm|like' || $type=='rp|like' || $type=='ac|like' || $type=='dr|like' || $type=='ar|like' || $type=='fd|like' || $type=='ls|like' || $type=='rv|like' || $type=='rc|like'){
       
        $stmtm = $conn->prepare("SELECT * FROM notification WHERE id = ?");
        $stmtm->bind_param("s", $noti['id']);
        $stmtm->execute();
        $resultm=$stmtm->get_result();
        $fetchm = $resultm->fetch_assoc();
            


        $stmtu = $conn->prepare("SELECT * FROM users WHERE code = ? ");
        $stmtu->bind_param("s", $fetchm['nfrom']);
        $stmtu->execute();
        $resultu=$stmtu->get_result();
        $fetchu = $resultu->fetch_assoc();
        
                
                
        switch ($info){
            case 'user':
                return $fetchu['username'];
            break;
            
            case 'picture':
                return $fetchu['picture'];
            break;
                
            case 'code':
                return $fetchu['code'];
            break;
            
            case 'text':
                
              
                

                if($type=='cm|like'){
                    
                   
                    $stmt_s = $conn->prepare("SELECT * FROM comments WHERE id = ? ");
                    $stmt_s->bind_param("s", $fetchm['post']);
                    $stmt_s->execute();
                    $result_s=$stmt_s->get_result();
                    $fetch_s = $result_s->fetch_assoc();
                    
                    switch($fetch_s['postT']){
                        
                        case 'ac':
                            return "قام بالاعجاب على تعليقك على الشخص ".personeinfo($fetch_s['idP'])['fname'].' '.personeinfo($fetch_s['idP'])['lname'];
                        break;
                        case 'dr':
                            return "قام بالاعجاب بتعليقك على العنوان ".titleinfo($fetch_s['idP'])['title'];
                        break;
                        case 'fd':
                            return "قام بالاعجاب بتعليقك على منشور ل  ".userinfo(feedinfo($fetch_s['idP'])['idU'])['username'];
                        break;
                        case 'rv':
                            
                            $stmt_r = $conn->prepare("SELECT * FROM reviews WHERE id = ? ");
                            $stmt_r->bind_param("s", $fetch_s['idP']);
                            $stmt_r->execute();
                            $result_r=$stmt_r->get_result();
                            $fetch_r = $result_r->fetch_assoc();
                            
                            return "قام بالاعجاب بتعليقك على مراجعة للعنوان   ".titleinfo($fetch_r['idT'])['title'];
                        break;
                            
                        case 'ls':
                            return "قام بالاعجاب بتعليقك على لائحة بعنوان  ".listinfo($fetch_s['idP'])['info']['title'];
                        break;
                            
                        case 'ar':
                            return "قام بالاعجاب بتعليقك على مقالة بعنوان  ".articleinfo($fetch_s['idP'])['title'];
                        break;
                    }
                   
                }elseif($type=='rp|like'){
                    
                    $stmt_r = $conn->prepare("SELECT * FROM replies WHERE id = ? ");
                    $stmt_r->bind_param("s", $fetchm['post']);
                    $stmt_r->execute();
                    $result_r=$stmt_r->get_result();
                    $fetch_r = $result_r->fetch_assoc();
                    
                    $stmt_s = $conn->prepare("SELECT * FROM comments WHERE id = ? ");
                    $stmt_s->bind_param("s", $fetch_r['idC']);
                    $stmt_s->execute();
                    $result_s=$stmt_s->get_result();
                    $fetch_s = $result_s->fetch_assoc();
                    
                    switch($fetch_s['postT']){
                        
                        case 'ac':
                            return "قام بالاعجاب  بردك على تعليق  على الشخص ".personeinfo($fetch_s['idP'])['fname'].' '.personeinfo($fetch_s['idP'])['lname'];
                        break;
                        case 'dr':
                            return "قام بالاعجاب بردك على تعليق  على العنوان ".titleinfo($fetch_s['idP'])['title'];
                        break;
                        case 'fd':
                            return "قام بالاعجاب بردك على تعليق  على منشور ل  ".userinfo(feedinfo($fetch_s['idP'])['idU'])['username'];
                        break;
                        case 'rv':
                            
                            $stmt_r = $conn->prepare("SELECT * FROM reviews WHERE id = ? ");
                            $stmt_r->bind_param("s", $fetch_s['idP']);
                            $stmt_r->execute();
                            $result_r=$stmt_r->get_result();
                            $fetch_r = $result_r->fetch_assoc();
                            
                            return "قام بالاعجاب بردك على تعليق على مراجعة للعنوان   ".titleinfo($fetch_r['idT'])['title'];
                        break;
                            
                        case 'ls':
                            return "قام بالاعجاب بردك على تعليق  على لائحة بعنوان  ".listinfo($fetch_s['idP'])['info']['title'];
                        break;
                            
                        case 'ar':
                            return "قام بالاعجاب بردك على تعليق على مقالة بعنوان  ".articleinfo($fetch_s['idP'])['title'];
                        break;
                    }
                    
               
                    
                }elseif ($type=='ac|like'){
                    return "قام بالاعجاب على الشخص ".personeinfo($fetchm['post'])['fname'].' '.personeinfo($fetchm['post'])['lname'].' الذي اضفته.';
                }elseif($type=='dr|like'){
                    return "قام بالاعجاب العنوان الذي أضفته  ".titleinfo($fetchm['post'])['title'];
                }elseif($type=='ar|like'){
                    return "قام بالاعجاب على تعليقك على المقالة   ".substr(articleinfo($fetchm['post'])['title'],0,80).' ...';
                }elseif($type=='fd|like'){
                    
                    return "قام بالاعجاب على بمنشورك على المنصة الاجتماعية.";
                    
                }elseif($type=='ls|like'){
                    return "قام بالاعجاب بلائحتك   ".substr(listinfo($fetchm['post'])['info']['title'],0,80).' ...';
                }elseif($type=='rv|like'){
                    
                    $stmt_r = $conn->prepare("SELECT * FROM reviews WHERE id = ? ");
                    $stmt_r->bind_param("s", $fetchm['post']);
                    $stmt_r->execute();
                    $result_r=$stmt_r->get_result();
                    $fetch_r = $result_r->fetch_assoc();
                    
                    return "قام بالاعجاب على مراجعتك للعمل  ".titleinfo($fetch_r['idT'])['title'];
                }elseif($type=='rc|like'){
                    
                    $stmt_r = $conn->prepare("SELECT * FROM recom WHERE id = ? ");
                    $stmt_r->bind_param("s", $fetchm['post']);
                    $stmt_r->execute();
                    $result_r=$stmt_r->get_result();
                    $fetch_r = $result_r->fetch_assoc();
                    
                    return "قام بالاعجاب بتوصيتك على العمل  ".titleinfo($fetch_r['idRT'])['title'];
                }
            break;
        }
        
    }
}

function block($type,$from,$to){
    
    global $conn;
    global $connp;
    
    if ($type=='block'){
        
        $stmtu = $conn->prepare("SELECT * FROM block WHERE (bfrom = ? AND bto = ?) OR (bfrom = ? AND bto = ?) ");
        $stmtu->bind_param("ssss", $from, $to , $to , $from);
        $stmtu->execute();
        $resultu=$stmtu->get_result();
        return $resultu->num_rows==0;
         
    }
    
    if ($type=='iblock'){
        
        $stmtu = $conn->prepare("SELECT * FROM block WHERE bfrom = ? AND bto = ? ");
        $stmtu->bind_param("ss", $from, $to );
        $stmtu->execute();
        $resultu=$stmtu->get_result();
        return $resultu->num_rows==0;
        
    }
    
}

function userE($code){
    
    global $conn;
    global $connp;
    
    $stmtu = $conn->prepare("SELECT * FROM users WHERE code = ? ");
    $stmtu->bind_param("s", $code);
    $stmtu->execute();
    $resultu=$stmtu->get_result();
    return $resultu->num_rows==1;
    
}

function userinfo($code){
    
    global $conn;
    global $connp;
    
    $stmtu = $conn->prepare("SELECT id, code, username, displayname, password, email, emailver, type, picture, birth, location, genre, descr, wn FROM users WHERE code = ? ");
    $stmtu->bind_param("s", $code);
    $stmtu->execute();
    $resultu=$stmtu->get_result();
    
    return $resultu->fetch_assoc();
    
}

function titleinfo($code){
    
    global $conn;
    global $connp;
    
    $stmtu = $conn->prepare("SELECT * FROM title WHERE id = ?  AND admin_o='1' ");
    $stmtu->bind_param("s", $code);
    $stmtu->execute();
    $resultu=$stmtu->get_result();
    
    return $resultu->fetch_assoc();
    
}
function topicinfo($code){
    
    global $conn;
    global $connp;
    
    $stmtu = $conn->prepare("SELECT * FROM topics WHERE id = ? ");
    $stmtu->bind_param("s", $code);
    $stmtu->execute();
    $resultu=$stmtu->get_result();
    
    return $resultu->fetch_assoc();
    
}

function feedinfo($code){
    
    global $conn;
    global $connp;
    
    $stmtu = $conn->prepare("SELECT * FROM feed WHERE id = ? ");
    $stmtu->bind_param("s", $code);
    $stmtu->execute();
    $resultu=$stmtu->get_result();
    
    return $resultu->fetch_assoc();
    
}
    
function articleinfo($code){
    
    global $conn;
    global $connp;
    
    $stmtu = $conn->prepare("SELECT * FROM article WHERE id = ? ");
    $stmtu->bind_param("s", $code);
    $stmtu->execute();
    $resultu=$stmtu->get_result();
    
    return $resultu->fetch_assoc();
    
}

function personeinfo($code){
    
    global $conn;
    global $connp;
    
    $stmtu = $conn->prepare("SELECT * FROM persones WHERE id = ? AND status='1' ");
    $stmtu->bind_param("s", $code);
    $stmtu->execute();
    $resultu=$stmtu->get_result();
    
    return $resultu->fetch_assoc();
    
}

function titleCD($code,$op,$fr){
    
    global $conn;
    global $connp;
    
    $stmtu = $conn->prepare("
    
    SELECT 
    
    work.idP,
    work.idT,
    work.id,
    work.type,
    work.format,
    
    persones.fname,
    persones.lname,
    persones.id as idop
    
    FROM work JOIN persones ON work.idP=persones.id  WHERE work.idT=? AND work.type=? AND work.format=? AND persones.status='1' GROUP BY work.idP  ");
    
    $stmtu->bind_param("sss", $code,$op,$fr);
    $stmtu->execute();
    $resultu=$stmtu->get_result();
    
        $res=[];
    
    while ($r=$resultu->fetch_assoc()){
        array_push($res,$r);
    }
    
    if ($resultu->num_rows=='0'){
        return false;
    }else{return $res; }
    
    
}



function uploadlogo($img){
    
    $error;

    $validextensions = array("jpeg", "jpg", "png");
    
    $temporary = explode(".", $img["name"]);
    
    $file_extension = end($temporary);
    
    if ((($img["type"] == "image/png") || ($img["type"] == "image/jpg") || ($img["type"] == "image/jpeg")
    ) //Approx. 100kb files can be uploaded.
    && in_array($file_extension, $validextensions)) {
        $file_name=$img['tmp_name'];
        $target_filename = $file_name;


        
    if ($img["error"] > 0)
    {
    return false;
    }
    else
    {
                $folder="logo/";
        
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
                return array("imguploaded"=>"true","imagename"=>$targetPath);
            }else{
                return array("imguploaded"=>"false","mcode"=>'picError');
            }

        
        
    }
    }
    else
    {
    return false;
    }
}

function uploadimage($img,$type){
    
    $error;

    $validextensions = array("jpeg", "jpg", "png");
    
    $temporary = explode(".", $img["name"]);
    
    $file_extension = end($temporary);
    
    list($width, $height, $typei, $attr) = getimagesize($img['tmp_name']);
    
    if ((($img["type"] == "image/png") || ($img["type"] == "image/jpg") || ($img["type"] == "image/jpeg")
    ) //Approx. 100kb files can be uploaded.
    && in_array($file_extension, $validextensions) && $width>=300 && $height>=300) {
        $file_name=$img['tmp_name'];
        $target_filename = $file_name;
    $ratio = $width/$height;
    
        $new_width = 300;
        $new_height = 422;
    
        
    $src = imagecreatefromstring( file_get_contents( $file_name ) );
    $dst = imagecreatetruecolor( $new_width, $new_height );
    imagecopyresampled( $dst, $src, 0, 0, 0, 0, $new_width, $new_height, $width, $height );
    imagedestroy( $src );
    imagepng( $dst, $target_filename ); // adjust format as needed
    imagedestroy( $dst );
        
        
    if ($img["error"] > 0)
    {
    return false;
    }
    else
    {
        switch ($type){
                
            case "title":
                $folder="imageposts/title/";
            break;
                
            case "article":
                $folder="imageposts/article/";
            break;
                
            case "persone":
                $folder="imageposts/persone/";
            break;
                
            case "feed":
                $folder="imageposts/feed/";
            break;
            
            case "imageuser":
                $folder="imageusers/";
            break;
                
        }
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
                return array("imguploaded"=>"true","imagename"=>$targetPath);
            }else{
                return array("imguploaded"=>"false","mcode"=>'picError');
            }

        
        
    }
    }
    else
    {
    return false;
    }
}


function getdata($table){
    
}

function datasignif($info,$type){
    switch($type){
            
        case "countryF":
            $sign = array(
                 "fil"=>"فلبينية",
                 "tai"=>"تايلاندية",
                 "jap"=>"يابانية",
                 "kor"=>"كوريية",
                 "chi"=>"صينية",
                 "honx"=>"هونك كونك"
            );
        break;
        
        case "genre":
            $sign = array(
                 
                 "movm"=>"حركة",
                 "adven"=>"مغامرات",
                 "reman"=>"رومانسية",
                 "zomb"=>"زومبي",
                 "come"=>"كوميديا",
                 "gang"=>"جريمة/عصابات",
                 "emot"=>"عاطفية",
                 "hero"=>"بطولية",
                 "horro"=>"رعب",
                 "musi"=>"راقصة/موسيقية",
                 "scie"=>"علمية",
                 "war"=>"حروب" ,
                 "whes"=>"غربية",
                 "self"=>"ذاتية",
                 "girl"=>"فتيات",
                 "police"=>"بوليسية/سرية",
                 "catas"=>"كوارث",
                 "fant"=>"فانتازيا" ,
                 "black"=>"سوداء",
                 "boys"=>"فتيان",
                 "milod"=>"ميلودراما",
                 "road"=>"طرقات",
                 "sport"=>"رياضية",
                 "supern"=>"خارقة" ,
                 "exci"=>"إثارة",
                 "cartoo"=>"متحركة",
                 "english"=>"إنجليزية",
                 "famil"=>"للطفال والأسرة",
                 "class"=>"كلاسيكية",
                 "reco"=>"تسجيلية",
                 "seri"=>"مسلسلة",
                 "sexu"=>"جنسية",
                 "sile"=>"صامتة"
            );
        break;
            
        case "role":
            $sign = array(
                 ""=>"",
                 "dir"=>"إخراج",
                 "scrwr"=>"كتابة السيناريو",
                 "scrdir"=>"إخراج & سيناريو",
                 "mainr"=>"دور رئيسي",
                 "suppr"=>"دور مساعد",
                 "guest"=>"ضيف",
                 "unk"=>"دور ثانوي",
                 "hoster"=>"مقدم البرنامج",
                 "host"=>"ضيف"
            );
        break;   
            
            
        case "mv_r_s":
            $sign = array(
                 "curw"=>"أشاهده حاليا",
                 "finish"=>"أكملته",
                 "planning"=>"اخطط لمشاهدته",
                 "notfiniyet"=>"لم اكمله بعد",
                 "canceledw"=>"ألغيت مشاهدته",
                 "nitintr"=>"غير مهتم"
                 
            );
        break;  
        
            
        case "mv_ir_s":
            $sign = array(
                 "curw"=>"يشاهده حاليا",
                 "finish"=>"أكملته",
                 "planning"=>"يخطط لمشاهدته",
                 "notfiniyet"=>"لم يكمله بعد",
                 "canceledw"=>"ألغى مشاهدته",
                 "nitintr"=>"غير مهتم به"
                 
            );
        break;  
            
        case "related":
            $sign = array(
                 "ormake"=>"سيناريو اصلي",
                 "mstory"=>"العمل الاصلي ",
                 "compl"=>"تتمة",
                 "remake"=>"إعادة انتاج",
                 "smmake"=>"إنتاج مصغر<",
            );
        break;  
            
            
        case "language":
            $sign = array(
                 "Cantonese"=>"الكانتونية",
                 "English"=>"الإنجليزية",
                 "Filipino"=>"الفلبينية",
                 "Japanese"=>"اليابانية",
                 "Korean"=>"الكورية",
                 "Mandarin"=>"الماندرين",
                 "Thai"=>"التايلاندية",
                 "Vietnamese"=>"الفيتنامية",
                 "Other"=>"أخرى"
            );
        break;
        
        case "countryM":
            $sign = array(
                 "fil"=>"فلبيني",
                 "tai"=>"تايلاندي",
                 "jap"=>"ياباني",
                 "kor"=>"كوريي",
                 "chi"=>"صيني",
                 "honx"=>"هونك كونك"
            );
        break;
        
        case "countryN":
            $sign = array(
                 "fil"=>"الفلبين",
                 "tai"=>"تايلاند",
                 "jap"=>"اليابان",
                 "kor"=>"كوريا الجنوبية",
                 "chi"=>"الصين",
                 "honx"=>"هونك كونك"
            );
        break;
            
            
        case "type":
            $sign = array(
                 "serie"=>"دراما",
                 "movie"=>"فيلم",
                 "tvshow"=>"برنامج"
            );
        break;
        
            
        case "status":
            $sign = array(
                 "notpub"=>"لم ينشر بعد",
                 "pub"=>"تم نشره",
                 "canceled"=>"ملغي"
            );
        break;
                
        case "tvt":
            $sign = array(
                 "dialog"=>"برنامج حواري",
                 "other"=>"متنوع"
            );
        break;
            
            
        case "content_rate":
            $sign = array(
                 "norate"=>"لا يوجد اي تصنيف لحد الان",
                 "all"=>" جميع الأعمار المسموح بها",
                 "13"=>"13 سنة و أكثر",
                 "15"=>"15 سنة و أكثر",
                 "18"=>"18 سنة و أكثر (عنف &amp; شتائم)",
                 "18s"=>"خاص بالبالغين فقط (عنف &amp; عري)"
            );
            
        break;
    }
    
    return $sign[$info];
}



function inforo($u,$op){
    global $conn;
    $stmtu = $conn->prepare("SELECT 
                                                        
                                                        
                                                        rate.id as ratei,
                                                        rate.idT,
                                                        rate.idU,
                                                        rate.status,
                                                        rate.rate,
                                                        rate.epi_w,
                                                        
                                                        title.id,
                                                        title.title,
                                                        title.content_type,
                                                        title.duration,
                                                        
                                                        title.f_date,
                                                        title.country,
                                                  
                                                        title.episodes
                                                        
                                                        FROM rate JOIN title on rate.idT=title.id
                                                        
                                                        WHERE rate.idU=? 
                                                        
                                                        ");
    
                                                      $stmtu->bind_param("s", $u);
                                                      $stmtu->execute();
                                                      $resultu=$stmtu->get_result();
//{"id":17,"title":"sdfsdf","content_type":"tvshow","duration":"34","sumE":34,"episodes":"34","idT":"64","idU":"6KbjFdagD4H7fi2","status":"curw","sumW":5,"epi_w":"5"}                                           
                                                    
                                                      $movie_t=0;
                                                      $movie_n=0;
                                                      
                                                      $show_t=0;
                                                      $show_e=0;
                                                      $show_n=0;
                                                      
                                                      $serie_t=0;
                                                      $serie_e=0;
                                                      $serie_n=0;
            
                                                      
        
                                                      while($rt=$resultu->fetch_assoc()){
                                                          if ($rt['status']==$op){
                                                                
                                                          
                                                         
                                                          
                                                          
                                                          if ($rt['epi_w']=='' || $rt['epi_w']=='0' || !is_numeric($rt['epi_w'])){$rt['epi_w']=0;}
                                                          
                                                          if ($rt['episodes']=='' || $rt['episodes']=='0' || !is_numeric($rt['episodes'])){$rt['episodes']=0;}
                                                          
                                                          if ($rt['duration']=='' || $rt['duration']=='0' || !is_numeric($rt['duration'])){$rt['duration']=0;}
                                                          
                                                          
                                                          if ($rt['content_type']=='movie'){
                                                              if ($rt['status']=='curw' || $rt['status']=='notfiniyet' || $rt['status']=='canceledw'){
                                                                  
                                                                  $movie_n=$movie_n+1;
                                                                  $movie_t=$movie_t+$rt['duration']; 
                                                                  
                                                              }else if($rt['status']=='finish'){
                                                                  
                                                                  $movie_n=$movie_n+1;
                                                                  $movie_t=$movie_t+$rt['duration'];
                                                                  
                                                              }else{
                                                                  
                                                                  $movie_n=$movie_n+1;
                                                                  $movie_t=$movie_t+$rt['duration'];
                                                                  
                                                              }
                                                          }
                                                          
                                                          if ($rt['content_type']=='tvshow'){
                                                              if ($rt['status']=='curw' || $rt['status']=='notfiniyet' || $rt['status']=='canceledw'){
                                                                  
                                                                  $show_n=$show_n+1;
                                                                  $show_t=$show_t+($rt['epi_w']*$rt['duration']); 
                                                                  $show_e=$show_e+$rt['epi_w'];
                                                                  
                                                              }else{
                                                                  
                                                                  $show_n=$show_n+1;
                                                                  $show_t=$show_t+($rt['episodes']*$rt['duration']);
                                                                  $show_e=$show_e+$rt['episodes'];
                                                                  
                                                              }
                                                          }
                                                          
                                                          if ($rt['content_type']=='serie'){
                                                              if ($rt['status']=='curw' || $rt['status']=='notfiniyet' || $rt['status']=='canceledw'){
                                                                  
                                                                  $serie_n=$serie_n+1;
                                                                  $serie_t=$serie_t+($rt['epi_w']*$rt['duration']); 
                                                                  $serie_e=$serie_e+$rt['epi_w'];
                                                                  
                                                              }else{
                                                                  
                                                                  $serie_n=$serie_n+1;
                                                                  $serie_t=$serie_t+($rt['episodes']*$rt['duration']);
                                                                  $serie_e=$serie_e+$rt['episodes'];
                                                                  
                                                              }
                                                          }
                                                          
                                                          //here we get the num of episodes and the duration
                                                      }
                                                      }
        

                                                $minutesM=$movie_t;
                                                $d_M = floor ($minutesM / 1440);
                                              
        
                                                $minutesS=$show_t;
                                                $d_S = floor ($minutesS / 1440);
                                              
        
                                                $minutesD=$serie_t;
                                                $d_D = floor ($minutesD / 1440);
    
    
                            return array('movie_t'=>$movie_t,'movie_n'=>$movie_n,'show_t'=>$show_t,'show_e'=>$show_e,'show_n'=>$show_n,'serie_t'=>$serie_t,'serie_e'=>$serie_e,'serie_n'=>$serie_n,'d_M'=>$d_M,'d_S'=>$d_S,'d_D'=>$d_D);
                                   


}
function Alrinlist($idL,$idT){
        global $conn;

        $stmtN = $conn->prepare("SELECT * FROM listt WHERE idT=? AND idL=?");
        $stmtN->bind_param('ss', $idT, $idL);
    
        $stmtN->execute();
        $resultN=$stmtN->get_result();
        $likes=$resultN->num_rows;
        $stmtN->close();
        
        if($likes=='0'){
            return false;
        }else{
            return true;
        }
}

function listinfo($id){
        global $conn;
    
        $stmtN = $conn->prepare("SELECT * FROM list WHERE id=?");
        $stmtN->bind_param('s',$id);
        $stmtN->execute();
        $resultN=$stmtN->get_result();
		$stmtN->close();
        if ($resultN->num_rows=='0'){
            $exist=false;
            $info=[];
            $total=0;
        }else{
            
            $stmtN = $conn->prepare("SELECT * FROM listt WHERE idL=?");
            $stmtN->bind_param('s',$id);
            $stmtN->execute();
            $resultNT=$stmtN->get_result();
            $exist=true;
            $info=$resultN->fetch_assoc();
            $total=$resultNT->num_rows;
        }
    
        return array('exist'=>$exist,'info'=>$info, 'total'=>$total);
}



function urlfetch($url){
    
    // Extract HTML using curl
    
    $urlP=parse_url($url);
     
    $ch = curl_init();
    $image_src = 'sdsd';
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $data = curl_exec($ch);
    
    
    
    if ((!curl_errno($ch) || !curl_getinfo($ch, CURLINFO_HTTP_CODE)=='200') && $data) {
    // Load HTML to DOM Object
    $dom = new DOMDocument();
    @$dom->loadHTML($data);
    
    // Parse DOM to get Title
    $nodes = $dom->getElementsByTagName('title');
    $title = $nodes->item(0)->nodeValue;
    
    // Parse DOM to get Meta Description
    $metas = $dom->getElementsByTagName('meta');
    $body = "";
    for ($i = 0; $i < $metas->length; $i ++) {
        $meta = $metas->item($i);
        if ($meta->getAttribute('name') == 'description') {
            $body = $meta->getAttribute('content');
        }
    }
    
    // Parse DOM to get Images
    $image_urls = array();
    $images = $dom->getElementsByTagName('img');
     $imex=false;
    if ($urlP['host']=='www.youtube.com' || $urlP['host']=='www.youtube.fr' || $urlP['host']=='www.youtube.ar' || $urlP['host']=='www.youtube.net' || $urlP['host']=='www.youtube.ma' || $urlP['host']=='www.youtu.be' || $urlP['host']=='youtube.com' || $urlP['host']=='youtube.net' || $urlP['host']=='youtube.fr' ){
        $bigone='https://lh3.googleusercontent.com/vA4tG0v4aasE7oIvRIvTkOYTwom07DfqHdUPr6k7jmrDwy_qA_SonqZkw6KX0OXKAdk';
    }else{
        
        $im=[];
        $imr=[];
     for ($i = 0; $i < $images->length; $i ++) {
         
         $image = $images->item($i);
         $src = $image->getAttribute('src');
         
         if(filter_var($src, FILTER_VALIDATE_URL)) {
             if(getimagesize($src)){
                $size=getimagesize($src);
                $surface=$size[0]*$size[1];
                array_push($im,$surface);
                array_push($imr,$src);
                $image_src= $src;
                $imex=true;
                 
             }
             
         }
     }
        
        if ($imex){
        $index=array_search(max($im), $im);
        $bigone=$imr[$index];
    }else{
        $bigone='https://www.cicar.com/html/thumbnails/noimage.png';
    }
    }
    
    
    
    $resp='true';
    }else{
            $title='invalid';
            $bigone='invalid';
            $body='invalid';
            $resp='false';
    }
    curl_close($ch);
    $output = array(
        'title' => $title,
        'image_src' => $bigone,
        'body' => $body,
        'resp' => $resp,
        'URL' => $urlP['host']
    );
    return $output; 
}


function getlastdes($type){
    global $conn;
    
    
    if($type=='pup_vote_per'){
                                            
                                        $stmtA = $conn->prepare("SELECT list.id,list.idU,list.type,list.content,list.title,list.descr,list.score,list.wn, SUM(listt.score) as ls,listt.idL FROM list JOIN listt ON list.id=listt.idL WHERE list.type!='private' GROUP BY listt.idL ORDER BY ls DESC ");
        
                                        
        
                                        $stmtA->execute();
                                        
                                        $resultA=$stmtA->get_result();
                                        
                                        if($resultA->num_rows=='0'){
                                            $list=false;
                                
                                        }else{
                                            while($array2=$resultA->fetch_assoc()){
                                                
                                        $stmtC = $conn->prepare("SELECT * FROM comments WHERE idP=? AND postT='ls'");
                                        $stmtC->bind_param("s",$array2['id']);
                                        $stmtC->execute();
                                        $resultC=$stmtC->get_result();
                                        $array2['comments']=$resultC->num_rows;
                                            
                                        $stmtL = $conn->prepare("SELECT * FROM likes WHERE idP=? AND postT='ls' and idL!=''");
                                        $stmtL->bind_param("s",$array2['id']);
                                        $stmtL->execute();
                                        $resultL=$stmtL->get_result();
                                        $array2['liken']=$resultL->num_rows   ;
                                            
                                        $stmtP = $conn->prepare("SELECT * FROM listt WHERE idL=?");
                                        $stmtP->bind_param("s",$array2['id']);
                                        $stmtP->execute();
                                        $resultP=$stmtP->get_result();
                                        $array2['s']=$resultP->num_rows ;
                                        
                                        if($array2['type']=='vote'){
                                        $stmtV = $conn->prepare("SELECT SUM(score) as total,idL FROM listt WHERE idL=?");
                                        $stmtV->bind_param("s",$array2['id']);
                                        $stmtV->execute();
                                        $resultV=$stmtV->get_result();
                                        $array2['totalS']=$resultV->fetch_assoc()['total'];
                                        }
                                                
                                            
                                            if( $array2['type']=='public' || $array2['type']=='vote'   ){
                                                
                                                ?>
                                
                                            <div class="box-body">
                                                <div class="custom-list-preview">
                                                    <div class="content people">
                                                        <a class="collection" href="list.php?id=<?php echo $array2['id']; ?>" title="<?php echo $array2['id'] ?>">
                                                        <?php 
                                                        $stmtA = $conn->prepare("SELECT * FROM listt WHERE idL=? LIMIT 5");
                                                        $stmtA->bind_param("s", $array2['id']);
                                                        $stmtA->execute();
                                                        $result2=$stmtA->get_result();
                                                        
                                                        while ($items=$result2->fetch_assoc()){ $tinf; $tinf=titleinfo($items['idT']);
                                                        ?>
                                                        
                                                        <?php if($array2['content']=='title'){ $typea="عنوان"; ?><?php $tinf; $tinf=titleinfo($items['idT']); ?>
                                                        <span class="list-item people">
                                                                <img style="height:100%" src="process/<?php echo $tinf['image']; ?>" alt="<?php echo $tinf['title']; ?>">
                                                            
                                                        </span>
                                                        <?php }else{ $typea='شخص' ?><?php $tinf; $tinf=personeinfo($items['idT']); ?>
                                                        <span class="list-item people">
                                                                <img style="height:100%" src="process/<?php echo $tinf['picture']; ?>" alt="<?php echo $tinf['fname'].' '.$tinf['lname']; ?>">
                                                           
                                                        </span>
                                                        
                                                        <?php  } ?>
                                                        <?php
                                                        }
                                                
                                                        
                                                        ?>

                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="title bottom">

                                                    <a href="list.php?id=<?php echo $array2['id']; ?>" title="<?php echo $array2['title']; ?>"><?php echo $array2['title']; ?></a>
                                                    <div class="list-bars text-black-lt">
                                                        <span class="m-r"><i class="fal fa-user m-r-xs"></i>  <?php echo $array2['s'].' '.$typea;  ?></span> <span class="m-r"><i class="fal fa-heart m-r-xs"></i> <?php echo $array2['liken'] ?> إعجاب</span> 
                                                        
                                                        <?php if($array2['type']=='vote'){ ?>
                                                            <span class="m-r"><i class="fal fa-vote-yea m-r-xs"></i><?php echo $array2['totalS'] ?> تصويت</span>
                                                        <?php } ?>
                                                        <span class="m-r"><i class="fal fa-comment-alt m-r-xs"></i> <?php echo $array2['comments'] ?> تعليق</span> </div>
                                                </div>
                                            </div>
                                <?php

                                            }else{
                                                $list=false;
                                            }
                                            
                                        }
                                        }
          
          
                                            
                                
                               
    }
    
    
    
    
    
    
    
    if($type=='rec_desc'){
        $stmtF = $conn->prepare(" SELECT * FROM topics ORDER BY wn DESC LIMIT 0,8");
        $stmtF->execute();
        $resultT=$stmtF->get_result();
        
        while($resultf=$resultT->fetch_assoc()){ $usri;$usri=userinfo($resultf['idU']); ?>
                                    <li class="list-item">

                <div class="list-body"><a style="margin-right: 16px;" class="text-ellipsis text-primary" href="topic.php?id=<?php echo $resultf['id'];  ?>"><?php echo $resultf['title'];  ?></a>
                    <div><small class="text-muted"><i class="fa fa-fw fa-clock-o"></i>
                        <script type="application/javascript">
                            moment.locale("ar_AL");
                            document.write(moment('<?php echo $resultf['wn'] ?>', "YYYY-MM-DD hh:mm:ss").tz('Africa/Casablanca').fromNow());

                        </script> - <a href="profile.php?id=<?php echo $resultf['idU'];  ?>"><?php echo $usri['username'];  ?></a>
                    </small></div>
                </div>
        </li>

<?php }
    }
    
    
    
    
    
    
    
        if($type=='rec_desc_im'){
        $stmtF = $conn->prepare(" SELECT * FROM topics ORDER BY wn DESC LIMIT 0,8");
        $stmtF->execute();
        $resultT=$stmtF->get_result();
        
        while($resultf=$resultT->fetch_assoc()){ $usri;$usri=userinfo($resultf['idU']); ?>
                                    <li class="list-item">
                                            <div class="list-left "><img src="process/<?php echo $usri['picture'];  ?>" class="w-40 avatar"></div>
                <div class="list-body"><a style="margin-right: 16px;" class="text-ellipsis text-primary" href="topic.php?id=<?php echo $resultf['id'];  ?>"><?php echo $resultf['title'];  ?></a>
                    <div><small class="text-muted"><i class="fa fa-fw fa-clock-o"></i>
                        <script type="application/javascript">
                            moment.locale("ar_AL");
                            document.write(moment('<?php echo $resultf['wn'] ?>', "YYYY-MM-DD hh:mm:ss").tz('Africa/Casablanca').fromNow());

                        </script> - <a href="profile.php?id=<?php echo $resultf['idU'];  ?>"><?php echo $usri['username'];  ?></a>
                    </small></div>
                </div>
        </li>

<?php }
    }
    
    
    
    
    
    
    
    
    if($type=='act_desc'){
        $stmtF = $conn->prepare(" SELECT topics.idU,topics.title,topics.wn,topics.id, comments.idP, comments.idU,count(comments.id) as cms,comments.postT  FROM topics JOIN comments on topics.id=comments.idP WHERE comments.postT='dc' GROUP BY comments.idP ORDER BY COUNT(comments.idP) DESC LIMIT 8");
        $stmtF->execute();
        
        $resultT=$stmtF->get_result();
        
        while($resultf=$resultT->fetch_assoc()){ $usri;$usri=userinfo($resultf['idU']); ?>
        <li class="list-item">
            <div class="list-body"><a style="margin-right: 16px;" class="text-ellipsis text-primary" href="topic.php?id=<?php echo $resultf['id'];  ?>"><?php echo $resultf['title'];  ?></a>
                <div><small class="text-muted"><i class="fa fa-fw fa-clock-o"></i>
                        <script type="application/javascript">
                            moment.locale("ar_AL");
                            document.write(moment('<?php echo $resultf['wn'] ?>', "YYYY-MM-DD hh:mm:ss").tz('Africa/Casablanca').fromNow());

                        </script> - <a href="profile.php?id=<?php echo $resultf['idU'];  ?>"><?php echo $usri['username'];  ?></a>
                    </small></div>
            </div>
        </li>
<?php }
    }
    
}

function addT($id){
    
      if (isset($_SESSION['id'])){
                  $drama;$drama=titleinfo($id);$rate_inf=detailpost($id, 'dr');
?>
                                                <button id='addTb<?php echo $drama['id'] ?>' onclick="addT('<?php echo $drama['id'] ?>','<?php echo $drama['image'] ?>','<?php echo $drama['title'] ?>','<?php echo substr($drama['f_date'],6,9); ?>','<?php echo $drama['content_type'] ?>','<?php echo $drama['episodes'] ?>')" class="btn simple btn-manage-list" data-id="" data-stats=""><span>
                                                        <?php  if($rate_inf['myR']=='true'){?><i class="fa fa-check"></i><?php }else{ ?>إضافة<?php }    ?>
                                                    </span></button>
                                               <?php } 
    
}




function admin_menu(){ 
                       if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    
      
                      $urlP=parse_url($url);
                        $u=false;
                        $a=false;
                        $m=false;
                        $d=false;
                        $l=false;
                        $i=false;
                      
                          
                      switch ($urlP['path']){
                          case '/admin_index.php':
                              $i=true;
                          break;
                          
                          case '/admin_users.php':
                              $u=true;
                          break;
                          
                          case '/admin_article.php':
                              $a=true;
                          break;
                          
                          case '/admin_management.php':
                              $m=true;
                          break;
                          
                          case '/admin_desc.php':
                              $d=true;
                          break;
                          
                          case '/admin_front.php':
                              $f=true;
                          break;
                          
                          case '/log.php':
                              $l=true;
                          break;
                      }
                      
?>

                                    <ul class="row no-gutter list nav-tabs text-center admin_nav" style="list-style:none;">
                                        
                                        <li class="col-xs-12 col-lg-12">
                                             <a href="admin_index.php"><i class="fa fa-tachometer-alt"></i></a>
                                        </li>
                                        
                                        <?php if (isset($_SESSION['id']) && $_SESSION['type']=='1' ){ ?>
                                            <li class="col-xs-12 col-lg-12 <?php if($u){ echo 'active';} ?>" >
                                                <a href="admin_users.php"><i class="fa fa-user"></i></a>
                                            </li>
                                        <?php } ?>
                                        
                                         <?php if($_SESSION['type']=='1' || iama('writer',$_SESSION['id'])){ ?>
                                            <li class="col-xs-12 col-lg-12 <?php if($a){ echo 'active';} ?>" >
                                                <a href="admin_article.php"><i class="fad fa-align-justify"></i></a>
                                            </li>
                                        <?php } ?>
                                        
                                         <?php if($_SESSION['type']=='1' || iama('manager',$_SESSION['id'])){ ?>
                                            <li class="col-xs-12 col-lg-12 <?php if($m){ echo 'active';} ?>" >
                                                <a href="admin_management.php"><i class="fa fa-camera-movie"></i></a>
                                            </li>
                                        <?php } ?>
                                        
                                        
                                        <?php if($_SESSION['type']=='1' || iama('manager',$_SESSION['id'])){ ?>
                                            <li class="col-xs-12 col-lg-12 <?php if($d){ echo 'active';} ?>" >
                                                <a href="admin_front.php"><i class="fa fa-window"></i></a>
                                            </li>
                                        <?php } ?>
                                        
                                        
                                        
                                        <?php if($_SESSION['type']=='1' || iama('contact',$_SESSION['id'])){ ?>
                                            <li class="col-xs-12 col-lg-12 <?php if($d){ echo 'active';} ?>" >
                                                <a href="admin_desc.php"><i class="fa fa-comments"></i></a>
                                            </li>
                                        <?php } ?>
                                        
                                        
                                        
                                        
                                            <li class="col-xs-12 col-lg-12 " >
                                                <a href="logout.php"><i class="fa fa-power-off"></i></a>
                                            </li>

                                    </ul>
    
<?php }


function confirmed($id){
    if(userinfo($id)['emailver']=='1'){
        return true;
    }else{
        return false;
    }
}


function addvisite($page){
    
    global $conn;
    
    if(isset($_SESSION['id'])){
        $login=true;
        if(userinfo($_SESSION['id'])['emailver']=='1'){
            $emailVer=true;
        }else{
            $emailVer=false;
        }
        
    }else{
        $login=false;
        $emailVer=false;
    }
    
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = @$_SERVER['REMOTE_ADDR'];
    
    
    if(filter_var($client, FILTER_VALIDATE_IP)){
        $ip = $client;
    }elseif(filter_var($forward, FILTER_VALIDATE_IP)){
        $ip = $forward;
    }else{
        $ip = $remote;
    }
    
    if($ip=='127.0.0.1'){
        $code='MA';
    }else{
        
        
        
        
        $access_key = 'b9806350050c3a76ad55fdb733feca0f';
        // Initialize CURL:
        
        $stmtN = $conn->prepare("SELECT * FROM pagev WHERE ip=? LIMIT 1");
        $stmtN->bind_param('s',$ip);
        $stmtN->execute();
        $resultNT=$stmtN->get_result();
        
        if($resultNT->num_rows=='0'){
        $ch = curl_init('http://api.ipstack.com/'.$ip.'?access_key='.$access_key.'');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Store the data:
        $json = curl_exec($ch);
        curl_close($ch);

        // Decode JSON response:
        $api_result = json_decode($json, true);

        // Output the "capital" object inside "location"
        $code=$api_result['country_code'];
        }else{
            $code=$resultNT->fetch_assoc()['country'];
        }
        
    }
    
    
    $stmtn = $conn->prepare("INSERT INTO `pagev`( `page`, `ip`, `login`, `emailVer`, `country`) VALUES (?,?,?,?,?)");
    $stmtn->bind_param("sssss", $page, $ip, $login, $emailVer,$code);
    if($stmtn->execute()){ 
    }else{ 
    }
    
}


function UrlCheck($url){
    if(filter_var($url, FILTER_VALIDATE_URL)){
        $urlP=parse_url($url);
        return array("valide"=>true,"host"=>$urlP['host'],'path'=>$urlP['path']);
    }else{
        return array("valide"=>false);
    }
}
?>
