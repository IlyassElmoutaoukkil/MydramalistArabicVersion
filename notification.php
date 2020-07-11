<?php
session_start();
include("process/conn.php");
include("process/functions.php");
 if (isset($_SESSION['id'])){
     $login=true;
     
     if (isset($_GET['id'])){
    
        $userid=$_GET['id'];

        $stmtA = $conn->prepare("SELECT * FROM notification WHERE id=? AND nto=?");
        $stmtA->bind_param("ss", $userid,$_SESSION['id']);
        $stmtA->execute();
        $resultA=$stmtA->get_result();
         
        
        if ($resultA->num_rows==0){
            
            //HERE WE TELL THE USER THAT THE POST HAVE BEEN DELETED ...
           header('location:badpage.php');
            
            
        }else{
            $notifinfo=$resultA->fetch_assoc(); 
            
            if($notifinfo['nto']==$_SESSION['id']){
                $stmtA = $conn->prepare("UPDATE notification set status='1' WHERE id=?");
                $stmtA->bind_param("s", $userid);
                $stmtA->execute();
            }
            
            
            
            if($notifinfo['type']=='ac|comment' || $notifinfo['type']=='dr|comment' || $notifinfo['type']=='ar|comment' || $notifinfo['type']=='fd|comment' || $notifinfo['type']=='ls|comment' || $notifinfo['type']=='rv|comment' || $notifinfo['type']=='dc|comment'){
                
                
                $stmt_s = $conn->prepare("SELECT * FROM comments WHERE id = ? ");
                $stmt_s->bind_param("s", $notifinfo['post']);
                $stmt_s->execute();
                $result_s=$stmt_s->get_result();
                $fetch_s = $result_s->fetch_assoc();
                
            
               
                switch($notifinfo['type']){

                      case'ac|comment': //done
                        if( postexist($fetch_s['idP'],'ac')){
                            $p='location:persone.php?id='.$fetch_s['idP'].'&comm='.$fetch_s['id'];
                            header($p);
                        }else{
                            header('location:badpage.php');
                        }
                      break;  
                        
                      case'dc|comment': //done
                        
                        if( postexist($fetch_s['idP'],'dc')){
                            $p='location:topic.php?id='.$fetch_s['idP'].'&comm='.$fetch_s['id'];
                            header($p);
                        }else{
                            header('location:badpage.php');
                        }
                        
                      break;  
                        
                      case'dr|comment': //done
                        if( postexist($fetch_s['idP'],'dr')){
                            $p='location:post.php?id='.$fetch_s['idP'].'&comm='.$fetch_s['id'];
                            header($p);
                        }else{
                            header('location:badpage.php');
                        }
                      break;  

                      case'ar|comment': //done
                        if(postexist($fetch_s['idP'],'ar')){
                            $p='location:oneart.php?id='.$fetch_s['idP'].'&comm='.$fetch_s['id'];
                            header($p);
                        }else{
                            header('location:badpage.php');
                        }
                      break;  

                      case'fd|comment': //done
                        if( postexist($fetch_s['idP'],'fd')){
                            $p='location:feeds.php?id='.$fetch_s['idP'].'&comm='.$fetch_s['id'];
                            header($p);
                        }else{
                            header('location:badpage.php');
                        }
                      break;  

                      case'ls|comment': //done
                        if( postexist($fetch_s['idP'],'ls')){
                            $p='location:list.php?id='.$fetch_s['idP'].'&comm='.$fetch_s['id'];
                            header($p);
                        }else{
                            header('location:badpage.php');
                        }
                      break;  

                      case'rv|comment': //done
                        if( postexist($fetch_s['idP'],'rv')){
                            
                            $stmt_r = $conn->prepare("SELECT * FROM reviews WHERE id = ? ");
                            $stmt_r->bind_param("s", $fetch_s['idP']);
                            $stmt_r->execute();
                            $result_r=$stmt_r->get_result();
                            $fetch_r = $result_r->fetch_assoc();
                            
                            $profile=$fetch_r['idU'];
                            $p='location:profile.php?id='.$fetch_r['idU'].'&option=reviews&rid='.$fetch_r['id'].'&comm='.$fetch_s['id'];
                            header($p);
                        }else{
                            header('location:badpage.php');
                        }
                      break;
                }
            }elseif($notifinfo['type']=='cm|like' || $notifinfo['type']=='rp|like' || $notifinfo['type']=='ac|like' || $notifinfo['type']=='dr|like' || $notifinfo['type']=='ar|like' || $notifinfo['type']=='fd|like' || $notifinfo['type']=='ls|like' || $notifinfo['type']=='rv|like' || $notifinfo['type']=='dc|like'){
                
                if($notifinfo['type']=='cm|like'){
                    
                   
                    $stmt_s = $conn->prepare("SELECT * FROM comments WHERE id = ? ");
                    $stmt_s->bind_param("s", $notifinfo['post']);
                    $stmt_s->execute();
                    $result_s=$stmt_s->get_result();
                    $fetch_s = $result_s->fetch_assoc();
                    
                    switch($fetch_s['postT']){
                        
                        case 'ac':
                            if( postexist($fetch_s['idP'],'ac')){
                            $p='location:persone.php?id='.$fetch_s['idP'].'&comm='.$fetch_s['id'];
                            header($p);
                        }else{
                            header('location:badpage.php');
                        }
                        break;
                        case 'dr':
                            if( postexist($fetch_s['idP'],'dr')){
                            $p='location:post.php?id='.$fetch_s['idP'].'&comm='.$fetch_s['id'];
                            header($p);
                            }else{
header('location:badpage.php');
                            }
                        break;
                        case 'fd':
                            if( postexist($fetch_s['idP'],'fd')){
                            $p='location:feeds.php?id='.$fetch_s['idP'].'&comm='.$fetch_s['id'];
                            header($p);
                            }else{
header('location:badpage.php');
                            }
                        break;
                        case 'rv':
                            
                            if( postexist($fetch_s['idP'],'rv')){
                            
                            $stmt_r = $conn->prepare("SELECT * FROM reviews WHERE id = ? ");
                            $stmt_r->bind_param("s", $fetch_s['idP']);
                            $stmt_r->execute();
                            $result_r=$stmt_r->get_result();
                            $fetch_r = $result_r->fetch_assoc();
                            
                            $profile=$fetch_r['idU'];
                            $p='location:profile.php?id='.$fetch_r['idU'].'&option=reviews&rid='.$fetch_r['id'].'&comm='.$fetch_s['id'];
                            header($p);
                            }else{
header('location:badpage.php');
                            }
                            
                        break;
                            
                        case 'ls':
                            if( postexist($fetch_s['idP'],'ls')){
                            $p='location:list.php?id='.$fetch_s['idP'].'&comm='.$fetch_s['id'];
                            header($p);
                            }else{
header('location:badpage.php');
                            }
                        break;
                            
                        case 'ar':
                           if(postexist($fetch_s['idP'],'ar')){
                            $p='location:oneart.php?id='.$fetch_s['idP'].'&comm='.$fetch_s['id'];
                            header($p);
                            }else{
header('location:badpage.php');
                            }
                        break;
                    }
                   
                }elseif($notifinfo['type']=='rp|like'){
                    
                    $stmt_r = $conn->prepare("SELECT * FROM replies WHERE id = ? ");
                    $stmt_r->bind_param("s", $notifinfo['post']);
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
                            if( postexist($fetch_s['idP'],'ac')){
                            $p='location:persone.php?id='.$fetch_s['idP'].'&comm='.$fetch_s['id'];
                            header($p);
                        }else{
                           header('location:badpage.php'); 
                        }
                        break;
                        case 'dr':
                            if( postexist($fetch_s['idP'],'dr')){
                            $p='location:post.php?id='.$fetch_s['idP'].'&comm='.$fetch_s['id'];
                            header($p);
                            }else{
                                header('location:badpage.php');
                            }
                        break;
                        case 'fd':
                            if( postexist($fetch_s['idP'],'fd')){
                            $p='location:feeds.php?id='.$fetch_s['idP'].'&comm='.$fetch_s['id'];
                            header($p);
                            }else{
                                header('location:badpage.php');
                            }
                        break;
                        case 'rv':
                            
                            if( postexist($fetch_s['idP'],'rv')){
                            
                            $stmt_r = $conn->prepare("SELECT * FROM reviews WHERE id = ? ");
                            $stmt_r->bind_param("s", $fetch_s['idP']);
                            $stmt_r->execute();
                            $result_r=$stmt_r->get_result();
                            $fetch_r = $result_r->fetch_assoc();
                            
                            $profile=$fetch_r['idU'];
                            $p='location:profile.php?id='.$fetch_r['idU'].'&option=reviews&rid='.$fetch_r['id'].'&comm='.$fetch_s['id'];
                            header($p);
                            }else{
                                header('location:badpage.php');
                            }
                            
                        break;
                            
                        case 'ls':
                            if( postexist($fetch_s['idP'],'ls')){
                            $p='location:list.php?id='.$fetch_s['idP'].'&comm='.$fetch_s['id'];
                            header($p);
                            }else{
                                header('location:badpage.php');
                            }
                        break;
                            
                        case 'ar':
                           if(postexist($fetch_s['idP'],'ar')){
                            $p='location:oneart.php?id='.$fetch_s['idP'].'&comm='.$fetch_s['id'];
                            header($p);
                            }else{
                               header('location:badpage.php');
                            }
                        break;
                    }
                    
               
                    
                }elseif ($notifinfo['type']=='ac|like'){
                    if(postexist($notifinfo['post'],'ac')){
                            $p='location:persone.php?id='.$notifinfo['post'];
                            header($p);
                            }else{
                                header('location:badpage.php');
                            }
                }elseif($notifinfo['type']=='dr|like'){
                    
                            if(postexist($notifinfo['post'],'dr')){
                            $p='location:post.php?id='.$notifinfo['post'];
                            header($p);
                            }else{
                                header('location:badpage.php');
                            }
                    
                }elseif($notifinfo['type']=='ar|like'){
                            if(postexist($notifinfo['post'],'ar')){
                            $p='location:oneart.php?id='.$notifinfo['post'];
                            header($p);
                            }else{
                                header('location:badpage.php');     
                            }
                }elseif($notifinfo['type']=='fd|like'){
                    if(postexist($notifinfo['post'],'fd')){
                            $p='location:feeds.php?id='.$notifinfo['post'];
                            header($p);
                            }else{
                                header('location:badpage.php');
                            }
                }elseif($notifinfo['type']=='ls|like'){
                    
                    if(postexist($notifinfo['post'],'ls')){
                            $p='location:list.php?id='.$notifinfo['post'];
                            header($p);
                            }else{
                            header('location:badpage.php');
                            }
                }elseif($notifinfo['type']=='rv|like'){
                    
                    $stmt_r = $conn->prepare("SELECT * FROM reviews WHERE id = ? ");
                    $stmt_r->bind_param("s", $notifinfo['post']);
                    $stmt_r->execute();
                    $result_r=$stmt_r->get_result();
                    $fetch_r = $result_r->fetch_assoc();
                    
                    if(!($result_r->num_rows=='0')){
                    $profile=$fetch_r['idU'];
                    $p='location:profile.php?id='.$fetch_r['idU'].'&option=reviews&rid='.$fetch_r['id'];
                    header($p);
                    }else{
                        header('location:badpage.php');
                    }
                            
                }elseif($notifinfo['type']=='rc|like'){
                    
                    $stmt_r = $conn->prepare("SELECT * FROM recom WHERE id = ? ");
                    $stmt_r->bind_param("s", $notifinfo['post']);
                    $stmt_r->execute();
                    $result_r=$stmt_r->get_result();
                    $fetch_r = $result_r->fetch_assoc();
                    
                    if($result_r->num_rows=='0'){
                        header('location:badpage.php');
                    }else{
                    $p='location:profile.php?id='.$fetch_r['idU'].'&option=recom';
                    header($p);
                    }
                            
                }
            }elseif($notifinfo['type']=='replie'){
                
                
                
                $stmt_r = $conn->prepare("SELECT * FROM replies WHERE id = ? ");
                $stmt_r->bind_param("s", $notifinfo['post']);
                $stmt_r->execute();
                $result_r=$stmt_r->get_result();
                $fetch_r = $result_r->fetch_assoc();
                
                
                $stmt_s = $conn->prepare("SELECT * FROM comments WHERE id = ? ");
                $stmt_s->bind_param("s", $fetch_r['idC']);
                $stmt_s->execute();
                $result_s=$stmt_s->get_result();
                $fetch_s = $result_s->fetch_assoc();
                
                
               
                switch($fetch_s['postT']){

                      case'ac': //done
                        if( postexist($fetch_s['idP'],'ac')){
                            $p='location:persone.php?id='.$fetch_s['idP'].'&comm='.$fetch_s['id'];
                            header($p);
                        }else{
                            header('location:badpage.php');
                        }
                      break;  
                        
                      case'dc': //done
                        
                        if( postexist($fetch_s['idP'],'dc')){
                            $p='location:topic.php?id='.$fetch_s['idP'].'&comm='.$fetch_s['id'];
                            header($p);
                        }else{
                            header('location:badpage.php');
                        }
                        
                      break;  
                        
                      case'dr': //done
                        if( postexist($fetch_s['idP'],'dr')){
                            $p='location:post.php?id='.$fetch_s['idP'].'&comm='.$fetch_s['id'];
                            header($p);
                        }else{
                            header('location:badpage.php');
                        }
                      break;  

                      case'ar': //done
                        if(postexist($fetch_s['idP'],'ar')){
                            $p='location:oneart.php?id='.$fetch_s['idP'].'&comm='.$fetch_s['id'];
                            header($p);
                        }else{
                            header('location:badpage.php');
                        }
                      break;  

                      case'fd': //done
                        if( postexist($fetch_s['idP'],'fd')){
                            $p='location:feeds.php?id='.$fetch_s['idP'].'&comm='.$fetch_s['id'];
                            header($p);
                        }else{
                            header('location:badpage.php');
                        }
                      break;  

                      case'ls': //done
                        if( postexist($fetch_s['idP'],'ls')){
                            $p='location:list.php?id='.$fetch_s['idP'].'&comm='.$fetch_s['id'];
                            header($p);
                        }else{
                            header('location:badpage.php');
                        }
                      break;  

                      case'rv': //done
                        if( postexist($fetch_s['idP'],'rv')){
                            
                            $stmt_r = $conn->prepare("SELECT * FROM reviews WHERE id = ? ");
                            $stmt_r->bind_param("s", $fetch_s['idP']);
                            $stmt_r->execute();
                            $result_r=$stmt_r->get_result();
                            $fetch_r = $result_r->fetch_assoc();
                            
                            $profile=$fetch_r['idU'];
                            $p='location:profile.php?id='.$fetch_r['idU'].'&option=reviews&rid='.$fetch_r['id'].'&comm='.$fetch_s['id'];
                            header($p);
                        }else{
                            header('location:badpage.php');
                        }
                      break;
                }
                
            }elseif($notifinfo['type']=='fReqAccepted' || $notifinfo['type']=='fReqSent'){
                header('location:profile.php?id='.$notifinfo['nfrom']);
            }elseif($notifinfo['type']=='message'){
                header('location:message.php?id='.$notifinfo['nfrom']);
            }else{
                header('location:badpage.php');
            }
        }
    }elseif(isset($_POST['rall'])){
         
         $stmtA = $conn->prepare("UPDATE notification set status='1' WHERE nto=?");
         $stmtA->bind_param("s", $_SESSION['id']);
         $stmtA->execute();
    }
 }else{
      header('location:signin.php');
 }


?>
