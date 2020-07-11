<?php 
session_start();
include("conn.php");  
include("functions.php");

//addtitle
    
    if(isset($_POST['list']) && isset($_SESSION['id']) && confirmed($_SESSION['id']) ){
                header("Content-Type: application/json; charset=UTF-8");

        switch ($_POST['list']){
            case 'create':
                if (
                !(isset($_POST['type'])) ||
                !(isset($_POST['content'])) ||
                !(isset($_POST['title'])) ||
                !(isset($_POST['elements'])) ||
                !(isset($_POST['desc'])) 
                ) {
                echo json_encode(array("code"=>'false',"mcode"=>"noNec"));            
                }else{
                    
                    $myid=$_SESSION['id'];
                     
                    
                    $type    = $_POST['type'];
                    $content    = $_POST['content'];
                    $title      = $_POST['title'];
                    $elements   = json_decode($_POST['elements']);
                    $desc  = $_POST['desc'];
                    
                    $stmtN = $conn->prepare("SELECT * FROM list WHERE title=? and idU=?");
                    $stmtN->bind_param('ss', $title,$myid);
                    $stmtN->execute();
                    $resultN=$stmtN->get_result();
                    $reports=$resultN->num_rows=='0';  
                            
                        
                        if($reports && ($type=='private' || $type=='public' || $type=='vote') && ($content=='persone' || $content=='title') && strlen($desc)<599 && strlen($title)<65 && strlen($title)>3){
                            $result = $conn->query("SHOW TABLE STATUS WHERE `Name` = 'list'");
                            $data = mysqli_fetch_array($result);
                            $next_increment = $data['Auto_increment'];
                            $stmt = $conn->prepare("INSERT INTO list(idU,type, content, title, descr, score) VALUES(?,?,?,?,?,'0')");
                            $stmt->bind_param('sssss',$myid, $type, $content, $title, $desc);

                            if($stmt->execute()){
                                $type='ls';
                                $auther='';
                                echo json_encode(array("code"=>'true',"mcode"=>"addedSucc"));
                                $stmtn = $conn->prepare("INSERT INTO likes(idP,postT,idL) values(?,?,?)");
                                $stmtn->bind_param("sss", $next_increment, $type, $auther);
                                $stmtn->execute();
                                //save work here:
                                $w= array($elements);
                                foreach ($w as $work_i) {
                                    foreach ($work_i as $wori) {
                                        if($content=='persone'){
                                            if(strlen($wori->comment)<300 && postExist($wori->id,'ac') && !Alrinlist($next_increment,$wori->id)){
                                                $stmtn = $conn->prepare("INSERT INTO listT(idL,idT,comment) values(?,?,?)");
                                                $stmtn->bind_param("sss", $next_increment, $wori->id, $wori->comment);
                                                $stmtn->execute();
                                            }   
                                        }else{
                                                if(strlen($wori->comment)<300 && postExist($wori->id,'dr') && !Alrinlist($next_increment,$wori->id)){
                                                $stmtn = $conn->prepare("INSERT INTO listT(idL,idT,comment) values(?,?,?)");
                                                $stmtn->bind_param("sss", $next_increment, $wori->id, $wori->comment);
                                                $stmtn->execute();
                                            } 
                                        }
                                    }
                                }
                                }else{
                                echo json_encode(array("code"=>'false',"mcode"=>"error"));
                            } 

                }else{
                     if (!$reports){
                         echo json_encode(array("code"=>'false',"mcode"=>"alrExist"));
                     }
                            
                     if (strlen($desc)>599){
                         echo json_encode(array("code"=>'false',"mcode"=>"desclong"));
                     }  
                }
                }
            break;
                
            case 'addto':
                
                    $type    = $_POST['tp'];
                    $idL    = $_POST['idL'];
                    $id      = $_POST['id'];
                
                    $listinfo=listinfo($idL);
                
                    if( ($type=='ac' || $type=='dr') && postExist($id,$type) && postExist($idL,'ls') && $listinfo['info']['idU']==$_SESSION['id'] ){
                        
                        if($type=='ac' && $listinfo['info']['content']=='persone'){
                            
                            if (Alrinlist($idL,$id)){
                                echo json_encode(array("code"=>'false',"mcode"=>"alrExist"));
                            }else{
                            $stmtn = $conn->prepare("INSERT INTO listT(idL,idT,comment) values(?,?,'')");
                            $stmtn->bind_param("ss", $idL, $id);
                            if ($stmtn->execute()){
                                echo json_encode(array("code"=>'true',"mcode"=>""));
                            }else{
                                echo json_encode(array("code"=>'false',"mcode"=>"error"));
                            }
                                
                            }
                            
                            
                            
                        }elseif($type=='dr' && $listinfo['info']['content']=='title'){
                            
                            
                            if (Alrinlist($idL,$id)){
                                echo json_encode(array("code"=>'false',"mcode"=>"alrExist"));
                            }else{
                            $stmtn = $conn->prepare("INSERT INTO listt(idL,idT,comment) values(?,?,'')");
                            $stmtn->bind_param("ss", $idL, $id);
                            if ($stmtn->execute()){
                                echo json_encode(array("code"=>'true',"mcode"=>""));
                            }else{
                                echo json_encode(array("code"=>'false',"mcode"=>"error"));
                            }
                            }
                            
                            
                        }else{
                            echo json_encode(array("code"=>'false',"mcode"=>"typeError"));
                        }
                        
                    }else{
                        echo json_encode(array("code"=>'false',"mcode"=>"error"));
                    }
                    
            break;
                
            case 'addvo':
                
                    $type    = $_POST['tp'];
                    $idL    = $_POST['idL'];
                    $id      = $_POST['id'];
                    
                    $listinfo=listinfo($idL);
                
                    if( ($type=='ac' || $type=='dr') && postExist($id,$type) && postExist($idL,'ls') ){
                        
                        if($type=='ac' && $listinfo['info']['content']=='persone' && $listinfo['info']['type']=='vote'){
                            
                            if (Alrinlist($idL,$id)){
                                
                                $stmtn = $conn->prepare("SELECT * FROM votel WHERE idL=? AND idT=? AND idU=? ");
                                $stmtn->bind_param("sss", $idL, $id, $_SESSION['id']);
                                $stmtn->execute();
                                $fs=$stmtn->get_result();
                                
                                if($fs->num_rows=='0'){
                                    $stmtn = $conn->prepare("INSERT INTO votel(idL,idT,idU) values(?,?,?)");
                                    $stmtn->bind_param("sss", $idL, $id, $_SESSION['id']);
                                    if ($stmtn->execute()){

                                        $stmtn = $conn->prepare("SELECT * FROM listt WHERE idT=? AND idL=?");
                                        $stmtn->bind_param("ss", $id, $idL);
                                        $stmtn->execute();
                                        $sc=$stmtn->get_result();
                                        $score=$sc->fetch_assoc()['score'];
                                        $score=$score+10;
                                        $stmtn = $conn->prepare("UPDATE listt SET score=? WHERE idT=? AND idL=?");
                                        $stmtn->bind_param("sss",$score, $id, $idL);
                                        $stmtn->execute();

                                        echo json_encode(array("code"=>'true',"mcode"=>"vote","score"=>$score));
                                    }else{
                                        echo json_encode(array("code"=>'false',"mcode"=>"error"));
                                    }
                                }else{
                                    $stmtn = $conn->prepare("DELETE FROM votel WHERE idL=? AND idT=? AND idU=?");
                                    $stmtn->bind_param("sss", $idL, $id, $_SESSION['id']);
                                    if ($stmtn->execute()){

                                        $stmtn = $conn->prepare("SELECT * FROM listt WHERE idT=? AND idL=?");
                                        $stmtn->bind_param("ss", $id, $idL);
                                        $stmtn->execute();
                                        $sc=$stmtn->get_result();
                                        $score=$sc->fetch_assoc()['score'];

                                        $score=$score-10;
                                        $stmtn = $conn->prepare("UPDATE listt SET score=? WHERE idT=? AND idL=?");
                                        $stmtn->bind_param("sss",$score, $id, $idL);
                                        $stmtn->execute();

                                        echo json_encode(array("code"=>'true',"mcode"=>"disvote","score"=>$score));
                                    }else{
                                        echo json_encode(array("code"=>'false',"mcode"=>"error"));
                                    }
                                }
                                
                            }else{
                                  
                            }
                            
                            
                            
                        }elseif($type=='dr' && $listinfo['info']['content']=='title'){
                            
                            
                            $stmtn = $conn->prepare("SELECT * FROM votel WHERE idL=? AND idT=? AND idU=? ");
                                $stmtn->bind_param("sss", $idL, $id, $_SESSION['id']);
                                $stmtn->execute();
                                $fs=$stmtn->get_result();
                                
                                if($fs->num_rows=='0'){
                                    $stmtn = $conn->prepare("INSERT INTO votel(idL,idT,idU) values(?,?,?)");
                                    $stmtn->bind_param("sss", $idL, $id, $_SESSION['id']);
                                    if ($stmtn->execute()){

                                        $stmtn = $conn->prepare("SELECT * FROM listt WHERE idT=? AND idL=?");
                                        $stmtn->bind_param("ss", $id, $idL);
                                        $stmtn->execute();
                                        $sc=$stmtn->get_result();
                                        $score=$sc->fetch_assoc()['score'];
                                        $score=$score+10;
                                        $stmtn = $conn->prepare("UPDATE listt SET score=? WHERE idT=? AND idL=?");
                                        $stmtn->bind_param("sss",$score, $id, $idL);
                                        $stmtn->execute();

                                        echo json_encode(array("code"=>'true',"mcode"=>"vote","score"=>$score));
                                    }else{
                                        echo json_encode(array("code"=>'false',"mcode"=>"error"));
                                    }
                                }else{
                                    $stmtn = $conn->prepare("DELETE FROM votel WHERE idL=? AND idT=? AND idU=?");
                                    $stmtn->bind_param("sss", $idL, $id, $_SESSION['id']);
                                    if ($stmtn->execute()){

                                        $stmtn = $conn->prepare("SELECT * FROM listt WHERE idT=? AND idL=?");
                                        $stmtn->bind_param("ss", $id, $idL);
                                        $stmtn->execute();
                                        $sc=$stmtn->get_result();
                                        $score=$sc->fetch_assoc()['score'];

                                        $score=$score-10;
                                        $stmtn = $conn->prepare("UPDATE listt SET score=? WHERE idT=? AND idL=?");
                                        $stmtn->bind_param("sss",$score, $id, $idL);
                                        $stmtn->execute();

                                        echo json_encode(array("code"=>'true',"mcode"=>"disvote","score"=>$score));
                                    }else{
                                        echo json_encode(array("code"=>'false',"mcode"=>"error"));
                                    }
                                }
                            
                        }else{
                            echo json_encode(array("code"=>'false',"mcode"=>"typeError"));
                        }
                        
                    }else{
                        echo json_encode(array("code"=>'false',"mcode"=>"error"));
                    }
                    
            break;
            
            case 'listdelt':
                    $myid=$_SESSION['id'];
                    
                    $type    = $_POST['tp'];
                    $idL    = $_POST['idL'];
                    $id      = $_POST['id'];
                    
                    $listinfo=listinfo($idL);
                
                    if( ($type=='ac' || $type=='dr') && postExist($id,$type) && postExist($idL,'ls') ){
                        
                        if( (($type=='ac' && $listinfo['info']['content']=='persone') || ($type=='dr' && $listinfo['info']['content']=='title')) && $listinfo['info']['idU']==$myid){
                            
                             if (Alrinlist($idL,$id)){
                                $stmtn = $conn->prepare("SELECT * FROM votel WHERE idL=? AND idT=?");
                                $stmtn->bind_param("ss", $idL, $id);
                                $stmtn->execute();
                                $fs=$stmtn->get_result();
                                $score11=$fs->num_rows;
                            
                               
                                    $stmtn = $conn->prepare("DELETE FROM votel WHERE idL=? AND idT=?");
                                    $stmtn->bind_param("ss", $idL, $id);
                                    if ($stmtn->execute()){
                                        
                                        $stmtn = $conn->prepare("DELETE FROM listt WHERE idL=? AND idT=?");
                                        $stmtn->bind_param("ss", $idL, $id);
                                        $stmtn->execute();
                                       

                                        echo json_encode(array("code"=>'true',"mcode"=>"disvote"));
                                    }else{
                                        echo json_encode(array("code"=>'false',"mcode"=>"error"));
                                    }
                                
                                }else{
                                  
                            }
                            
                            
                            
                        }else{
                            echo json_encode(array("code"=>'false',"mcode"=>"typeError"));
                        }
                        
                    }else{
                        echo json_encode(array("code"=>'false',"mcode"=>"error"));
                    }
                    
            break;
        }
        //necessary inputs.
        
    }

if(isset($_POST['feeds'])){
                header("Content-Type: application/json; charset=UTF-8");

        switch ($_POST['feeds']){
            case 'create':
                if (!(
                (isset($_POST['text'])) ||
                (isset($_POST['link'])) ||
                (isset($_FILES['fileToUpload'])) ||
                isset($_SESSION['id'])
                )) {
                echo json_encode(array("code"=>'false',"mcode"=>"noNec"));            
                }else{
                    
                    $myid=$_SESSION['id'];
                     
                    
                    $text=    filter_var(htmlentities($_POST['text']),FILTER_SANITIZE_STRING);
                    $link=    $_POST['link'];
                    $post=    $_POST['post'];
                    $spoiler= $_POST['spoiler'];
                    $privacy= $_POST['privacy'];
                    $delef= json_decode($_POST['delef']);
                    $erri=false;
                    $images=[];
                    if (isset($_FILES['fileToUpload']) && count($_FILES['fileToUpload']["name"])<5){
                    $count = count($_FILES['fileToUpload']['name']);
                    
                    for ($i = 0; $i < $count; $i++) {
                        if (count($delef)=='0'){
                             $imgupinf;
                                    $validextensions = array("jpeg", "jpg", "png");
                                    $temporary = explode(".", $_FILES['fileToUpload']["name"][$i]);
                                    $file_extension = end($temporary);
                                    list($width, $height, $typei, $attr) = getimagesize($_FILES['fileToUpload']['tmp_name'][$i]);
        
                                        if ((($_FILES['fileToUpload']["type"][$i] == "image/png") || ($_FILES['fileToUpload']["type"][$i] == "image/jpg") || ($_FILES['fileToUpload']["type"][$i] == "image/jpeg")
                                        ) //Approx. 100kb files can be uploaded.
                                        && in_array($file_extension, $validextensions) && $width>=150 && $height>=150) {
                                        if ($_FILES['fileToUpload']["error"][$i] > 0)
                                        {
                                        return false;
                                            $erri=true;
                                        }
                                        else
                                        {
                                        $folder="imageposts/feed/";
            
                                        if (file_exists($folder . $_FILES['fileToUpload']["name"][$i])) {
                
                                        $rds=substr(str_shuffle('124234'), 0,4);

                                        $sourcePath = $_FILES['fileToUpload']['tmp_name'][$i]; // Storing source path of the file in a variable
                                        $targetPath = $folder.$rds.$_FILES['fileToUpload']['name'][$i]; // Target path where file is to be stored
                
                                        if(move_uploaded_file($sourcePath,$targetPath)){
                                           $uplsucc="succ";
                                            array_push($images,$targetPath);
                                        }else{
                                           $uplsucc="notsucc";
                                            $erri=true;
                                        } // Moving Uploaded file

                                        }else{
                
                                            $sourcePath = $_FILES['fileToUpload']['tmp_name'][$i]; // Storing source path of the file in a variable
                                            $targetPath = $folder.$_FILES['fileToUpload']['name'][$i]; // Target path where file is to be stored
                                            if(move_uploaded_file($sourcePath,$targetPath)){
                                               $uplsucc="succ";
                                               array_push($images,$targetPath);
                                            }else{
                                               $uplsucc="notsucc";
                                                $erri=true;
                                            }
                                        }
                                        }
                                        }else{
                                            $erri=true;
                                        }
                        }else{
                                
                                if(in_array($_FILES['fileToUpload']['name'][$i],$delef)){
                                }else{
                                    
                                    $imgupinf;
                                    $validextensions = array("jpeg", "jpg", "png");
                                    $temporary = explode(".", $_FILES['fileToUpload']["name"][$i]);
                                    $file_extension = end($temporary);
                                    list($width, $height, $typei, $attr) = getimagesize($_FILES['fileToUpload']['tmp_name'][$i]);
    
                                    if ((($_FILES['fileToUpload']["type"][$i] == "image/png") || ($_FILES['fileToUpload']["type"][$i] == "image/jpg") || ($_FILES['fileToUpload']["type"][$i] == "image/jpeg")
                                        ) //Approx. 100kb files can be uploaded.
                                        && in_array($file_extension, $validextensions) && $width>=150 && $height>=150) {
                                        if ($_FILES['fileToUpload']["error"][$i] > 0)
                                        {
                                        return false;
                                        $erri=true;
                                        }
                                        else
                                        {
      
                                        $folder="imageposts/feed/";
            
                                        if (file_exists($folder . $_FILES['fileToUpload']["name"][$i])) {
                
                                        $rds=substr(str_shuffle('124234'), 0,4);

                                        $sourcePath = $_FILES['fileToUpload']['tmp_name'][$i]; // Storing source path of the file in a variable
                                        $targetPath = $folder.$rds.$_FILES['fileToUpload']['name'][$i]; // Target path where file is to be stored
                
                                        if(move_uploaded_file($sourcePath,$targetPath)){
                                            $uplsucc="succ";
                                            array_push($images,$targetPath);
                                        }else{
                                            $uplsucc="notsucc";
                                        $erri=true;
                                        } // Moving Uploaded file

                                        }else{
                
                                            $sourcePath = $_FILES['fileToUpload']['tmp_name'][$i]; // Storing source path of the file in a variable
                                            $targetPath = $folder.$_FILES['fileToUpload']['name'][$i]; // Target path where file is to be stored
                                            if(move_uploaded_file($sourcePath,$targetPath)){
                                                $uplsucc="succ";
                                                array_push($images,$targetPath);
                                            }else{
                                                $uplsucc="notsucc";
                                            $erri=true;
                                            }
                                        }
                                        }
                                        }else{
                                        $erri=true;
                                    }

                                    
                                }
                            
                        }
//                        $_FILES['fileToUpload']['name'][$i]
                    }
                    }
                
                
                        if ($post=='undefined'){
                            $post='';
                        }
                        
                        if ($link=='undefined'){
                            $link='';
                        }
                     
                        
                    
                        if (($privacy=='pri' || $privacy=='pub') && ($spoiler=='true' || $spoiler=='false') && ((strlen($text)<300  && strlen($text)>3) || strlen($text)=='') && (($link!='' && filter_var($link, FILTER_VALIDATE_URL)) || $link=='' || $link=='undefined') && ( ($post!='' && postExist($post,'dr')) || $post=='' || $post=='undefined') && !$erri){
                            
                            $result = $conn->query("SHOW TABLE STATUS WHERE `Name` = 'feed'");
                            $data = mysqli_fetch_array($result);
                            $next_increment = $data['Auto_increment'];
                            $stmt = $conn->prepare("INSERT INTO feed(idU,text, spoiler, images, privacy, link, post) VALUES(?,?,?,?,?,?,?)");
                            $stmt->bind_param('sssssss',$myid, $text, $spoiler, $erri, $privacy, $link, $post);

                            if($stmt->execute()){
                                $type='fd';
                                $auther='';
                                echo json_encode(array("code"=>'true',"mcode"=>"addedSucc"));
                                $stmtn = $conn->prepare("INSERT INTO likes(idP,postT,idL) values(?,?,?)");
                                $stmtn->bind_param("sss", $next_increment, $type, $auther);
                                $stmtn->execute();
                                
                                //save work here:
                                $w= $images;
                                foreach ($w as $work_i) {
                                 
                                         
                                        
                                               
                                                $stmtn = $conn->prepare("INSERT INTO feedimages(idF,name) values(?,?)");
                                                $stmtn->bind_param("ss", $next_increment, $work_i);
                                                $stmtn->execute();
                                            
                                        
                                    
                                }
                                }else{
                                echo json_encode(array("code"=>'false',"mcode"=>"error"));
                            } 

                }else{
                     
                            
                     if (strlen($text)>=300){
                         echo json_encode(array("code"=>'false',"mcode"=>"textlong"));
                     }elseif ($erri){
                         echo json_encode(array("code"=>'false',"mcode"=>"images"));
                     }else{
                          echo json_encode(array("code"=>'false',"mcode"=>"false"));
                     }
                }
                }
            break;
            
            
            
            case 'update':
                
                $myid=$_SESSION['id'];
                
                $stmtn = $conn->prepare("SELECT * FROM feed WHERE id=?");
                $stmtn->bind_param("s", $_POST['id']);
                $stmtn->execute();
                $res=$stmtn->get_result();
                
                if(!($res->num_rows=='0') && $res->fetch_assoc()['idU']==$myid){
                    $ex=true;
                }else{
                    $ex=false;
                }
                
                if (!(
                (isset($_POST['text'])) ||
                (isset($_POST['id'])) ||
                (isset($_POST['link'])) ||
                (isset($_FILES['fileToUpload'])) ||
                ($ex) ||
                isset($_SESSION['id'])
                )) {
                echo json_encode(array("code"=>'false',"mcode"=>"noNec"));            
                }else{
                    
                    $myid=$_SESSION['id'];
                    $id=$_POST['id'];
                    
                    $text=    filter_var(htmlentities($_POST['text']),FILTER_SANITIZE_STRING);
                    $link=    $_POST['link'];
                    $post=    $_POST['post'];
                    $spoiler= $_POST['spoiler'];
                    $privacy= $_POST['privacy'];
                    $oldimg=json_decode($_POST['oldim']);
                    $delef= json_decode($_POST['delef']);
                    $erri=false;
                    $images=[];
                    
//                    $oldimg-count($_FILES['fileToUpload']["name"])-count($delef)
                    
                    if(isset($_FILES['fileToUpload']) && ((count($_FILES['fileToUpload']["name"])-count($delef)+count($oldimg)))<=4){
//                        if((count($_FILES['fileToUpload']["name"])-count($delef))>count($oldimg)){
//                            $df=(count($_FILES['fileToUpload']["name"])-count($delef))-count($oldimg);
//                            if(count($_FILES['fileToUpload']['name'])>(4-$df)){
//                                $file=false;
//                            }else{
//                                $file=true;
//                            }
//                            
//                        }else{
//                            $df=count($oldimg)-(count($_FILES['fileToUpload']["name"])-count($delef));
//                            if(count($_FILES['fileToUpload']['name'])>(4-$df)){
//                                $file=false;
//                               
//                            }else{
//                                $file=true;
//                            }
//                             echo $df;
//                        }
                        $file=true;
                    }else{
                        $file=false;
                    }
                    
                    if ($file){
                    $count = count($_FILES['fileToUpload']['name']);
                    
                    for ($i = 0; $i < $count; $i++) {
                        if (count($delef)=='0'){
                             $imgupinf;
                                    $validextensions = array("jpeg", "jpg", "png");
                                    $temporary = explode(".", $_FILES['fileToUpload']["name"][$i]);
                                    $file_extension = end($temporary);
                                    list($width, $height, $typei, $attr) = getimagesize($_FILES['fileToUpload']['tmp_name'][$i]);
        
                                        if ((($_FILES['fileToUpload']["type"][$i] == "image/png") || ($_FILES['fileToUpload']["type"][$i] == "image/jpg") || ($_FILES['fileToUpload']["type"][$i] == "image/jpeg")
                                        ) //Approx. 100kb files can be uploaded.
                                        && in_array($file_extension, $validextensions) && $width>=150 && $height>=150) {
                                        if ($_FILES['fileToUpload']["error"][$i] > 0)
                                        {
                                        return false;
                                            $erri=true;
                                        }
                                        else
                                        {
                                        $folder="imageposts/feed/";
            
                                        if (file_exists($folder . $_FILES['fileToUpload']["name"][$i])) {
                
                                        $rds=substr(str_shuffle('124234'), 0,4);

                                        $sourcePath = $_FILES['fileToUpload']['tmp_name'][$i]; // Storing source path of the file in a variable
                                        $targetPath = $folder.$rds.$_FILES['fileToUpload']['name'][$i]; // Target path where file is to be stored
                
                                        if(move_uploaded_file($sourcePath,$targetPath)){
                                           $uplsucc="succ";
                                            array_push($images,$targetPath);
                                        }else{
                                           $uplsucc="notsucc";
                                            $erri=true;
                                        } // Moving Uploaded file

                                        }else{
                
                                            $sourcePath = $_FILES['fileToUpload']['tmp_name'][$i]; // Storing source path of the file in a variable
                                            $targetPath = $folder.$_FILES['fileToUpload']['name'][$i]; // Target path where file is to be stored
                                            if(move_uploaded_file($sourcePath,$targetPath)){
                                               $uplsucc="succ";
                                               array_push($images,$targetPath);
                                            }else{
                                               $uplsucc="notsucc";
                                                $erri=true;
                                            }
                                        }
                                        }
                                        }else{
                                                                                    $erri=true;
                                        }
                        }else{
                                
                                if(in_array($_FILES['fileToUpload']['name'][$i],$delef)){
                                
                                }else{
                                    
                                    $imgupinf;
                                    $validextensions = array("jpeg", "jpg", "png");
                                    $temporary = explode(".", $_FILES['fileToUpload']["name"][$i]);
                                    $file_extension = end($temporary);
                                    list($width, $height, $typei, $attr) = getimagesize($_FILES['fileToUpload']['tmp_name'][$i]);
    
                                    if ((($_FILES['fileToUpload']["type"][$i] == "image/png") || ($_FILES['fileToUpload']["type"][$i] == "image/jpg") || ($_FILES['fileToUpload']["type"][$i] == "image/jpeg")
                                        ) //Approx. 100kb files can be uploaded.
                                        && in_array($file_extension, $validextensions) && $width>=150 && $height>=150) {
                                        if ($_FILES['fileToUpload']["error"][$i] > 0)
                                        {
                                        return false;
                                        $erri=true;
                                        }
                                        else
                                        {
      
                                        $folder="imageposts/feed/";
            
                                        if (file_exists($folder . $_FILES['fileToUpload']["name"][$i])) {
                
                                        $rds=substr(str_shuffle('124234'), 0,4);

                                        $sourcePath = $_FILES['fileToUpload']['tmp_name'][$i]; // Storing source path of the file in a variable
                                        $targetPath = $folder.$rds.$_FILES['fileToUpload']['name'][$i]; // Target path where file is to be stored
                
                                        if(move_uploaded_file($sourcePath,$targetPath)){
                                            $uplsucc="succ";
                                            array_push($images,$targetPath);
                                        }else{
                                            $uplsucc="notsucc";
                                        $erri=true;
                                        } // Moving Uploaded file

                                        }else{
                
                                            $sourcePath = $_FILES['fileToUpload']['tmp_name'][$i]; // Storing source path of the file in a variable
                                            $targetPath = $folder.$_FILES['fileToUpload']['name'][$i]; // Target path where file is to be stored
                                            if(move_uploaded_file($sourcePath,$targetPath)){
                                                $uplsucc="succ";
                                                array_push($images,$targetPath);
                                            }else{
                                                $uplsucc="notsucc";
                                            $erri=true;
                                            }
                                        }
                                        }
                                        }else{
                                        $erri=true;
                                    }

                                    
                                }
                            
                        }
//                        $_FILES['fileToUpload']['name'][$i]
                    }
                        
                            
                        
                    }else{
                    }
                        
                            $stmtnid = $conn->prepare("SELECT * FROM feedimages WHERE idF=?");
                            $stmtnid->bind_param("s", $_POST['id']);
                            $stmtnid->execute();
                            $resid=$stmtnid->get_result();
                            if($resid->num_rows==count($oldimg)){}else{
                                
                                while($exm=$resid->fetch_assoc()){
                                    if(in_array($exm['id'],$oldimg)){

                                    }else{
                                        $stmtnidr = $conn->prepare("DELETE FROM feedimages WHERE id=?");
                                        $stmtnidr->bind_param("s", $exm['id']);
                                        $stmtnidr->execute();
                                    }
                                }
                            }
                    
                
                        if ($post=='undefined'){
                            $post='';
                        }
                        
                        if ($link=='undefined'){
                            $link='';
                        }
                     
                        
                    
                        if (($privacy=='pri' || $privacy=='pub') && ($spoiler=='true' || $spoiler=='false') && ((strlen($text)<300  && strlen($text)>3) || strlen($text)=='') && (($link!='' && filter_var($link, FILTER_VALIDATE_URL)) || $link=='' || $link=='undefined') && ( ($post!='' && postExist($post,'dr')) || $post=='' || $post=='undefined') && !$erri){
                            
                            $result = $conn->query("SHOW TABLE STATUS WHERE `Name` = 'feed'");
                            $data = mysqli_fetch_array($result);
                            $next_increment = $data['Auto_increment'];
                            $stmt = $conn->prepare("UPDATE  feed SET text=?, spoiler=?, images=?, privacy=?, link=?, post=? WHERE id=?");
                            $stmt->bind_param('sssssss', $text, $spoiler, $erri, $privacy, $link, $post,$id);

                            if($stmt->execute()){
                                $type='fd';
                                $auther='';
                                echo json_encode(array("code"=>'true',"mcode"=>"addedSucc"));
                                
                                //save work here:
                                $w= $images;
                                foreach ($w as $work_i) {
                                 
                                         
                                        
                                               
                                                $stmtn = $conn->prepare("INSERT INTO feedimages(idF,name) values(?,?)");
                                                $stmtn->bind_param("ss", $id, $work_i);
                                                $stmtn->execute();
                                            
                                        
                                    
                                }
                                }else{
                                echo json_encode(array("code"=>'false',"mcode"=>"error"));
                            } 

                }else{
                     
                            
                     if (strlen($text)>=300){
                         echo json_encode(array("code"=>'false',"mcode"=>"textlong"));
                     }elseif ($erri){
                         echo json_encode(array("code"=>'false',"mcode"=>"images"));
                     }else{
                          echo json_encode(array("code"=>'false',"mcode"=>"false"));
                     }
                }
                }
            break;
                
            case 'urlf':
                
                if(filter_var($_POST["url"], FILTER_VALIDATE_URL)){
                     // Extract HTML using curl
                    
                    $url=$_POST["url"];
                    $output=urlfetch($url);
                    $output['code']='true';
                    $output['mcode']='true';
                    echo json_encode($output); 
                    
                    
                }else{
                    echo json_encode(array('code'=>'false','mcode'=>'invalidurl'));
                }
                
            break;
                
                
            case 'delete':
                if (isset($_SESSION['id'])){
                    $myid=$_SESSION['id'];
                    $id=$_POST["id"];
                    $stmtN = $conn->prepare("SELECT * FROM feed WHERE id=? and idU=?");
                    $stmtN->bind_param('ss', $id,$myid);
                    $stmtN->execute();
                    $resultN=$stmtN->get_result();
                    $feednum=$resultN->num_rows;
                    
                    if ($feednum=='0'){
                        echo json_encode(array('code'=>'false','mcode'=>'false'));
                    }else{
                        $stmtN = $conn->prepare("DELETE FROM feed WHERE id=? and idU=?");
                        $stmtN->bind_param('ss', $id,$myid);
                        if($stmtN->execute()){
                            echo json_encode(array('code'=>'true','mcode'=>'deleted'));
                            $stmtI = $conn->prepare("SELECT * FROM feedimages WHERE idF=?");
                            $stmtI->bind_param('s', $id);
                            $stmtI->execute();
                            $resultI=$stmtI->get_result();
                            
                            if ($resultI->num_rows=='0'){
                                
                            }else{
                                
                                while($image=$resultI->fetch_assoc()){
                                    if(file_exists($image['name'])){
                                        
                                        if (unlink($image['name'])){
                                            
                                        }
                                    }
                                }
                                
                                $stmtN = $conn->prepare("DELETE FROM feedimages WHERE idF=?");
                                $stmtN->bind_param('s', $id);
                                $stmtN->execute();
                                
                            }
                            
                        }
                    }
                }else{
                    echo json_encode(array('code'=>'false','mcode'=>'false'));
                }
            break;
                
            case 'edit':
                if (isset($_SESSION['id'])){
                    $id=$_POST['id'];
                    $myid=$_SESSION['id'];
                    
                    if(is_numeric($id) && postexist($id,'fd')){
                        $stmtN = $conn->prepare("SELECT * FROM feed WHERE id=? and idU=?");
                        $stmtN->bind_param('ss', $id,$myid);
                        $stmtN->execute();
                        $resultN=$stmtN->get_result();
                        $feednum=$resultN->num_rows;
                        
                        if ($feednum=='0'){
                            echo json_encode(array('code'=>'false','mcode'=>'false'));
                        }else{
                            $data=[];
                            $feedinfo;
                            $feedinfo=$resultN->fetch_assoc();
                            $data['feedinfo']=$feedinfo;
                            
                            $stmtI = $conn->prepare("SELECT * FROM feedimages WHERE idF=?");
                            $stmtI->bind_param('s', $id);
                            $stmtI->execute();
                            $resultI=$stmtI->get_result();
                            if ($resultI->num_rows=='0'){
                                $data['images']=[];
                            }else{
                                $images=[];
                                while($image=$resultI->fetch_assoc()){
                                    array_push($images,$image);
                                }
                                $data['images']=$images;
                            }
                            
                            //Liiink  !!!    IMPORTANT GET THE LINK   !!!  //
                            if ($feedinfo['link']=='' || !filter_var($feedinfo['link'], FILTER_VALIDATE_URL)){
                                $data['link']=[];
                            }else{
                                
                                $getfeedlink=urlfetch($feedinfo['link']);
                                if($getfeedlink){
                                    $getfeedlink['link']=$feedinfo['link'];
                                    $host=parse_url($feedinfo['link']);
                                    $getfeedlink['url']=$host['host'];
                                    $data['link']=$getfeedlink;
                                }else{
                                    $data['link']=[];
                                }
                                
                                
                            }
                            
                            $post=[];
                            if ($feedinfo['post']=='' || !postexist($feedinfo['post'],'dr')){
                                $data['post']=[];
                            }else{
                                $tl=titleinfo($feedinfo['post']);
                                $data['post']=[$tl['id'],$tl['title'],$tl['synopsis'],$tl['image']];
                            }
                                
                            echo json_encode(array('code'=>'true','mcode'=>'true','data'=>$data));
                        }
                        
                    }else{
                        echo json_encode(array('code'=>'false','mcode'=>'false'));
                    }
                }else{
                    echo json_encode(array('code'=>'false','mcode'=>'false'));
                }
            break;
            
            
    
        }
        //necessary inputs.
        
    }


?>
