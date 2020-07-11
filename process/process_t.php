<?php 
session_start();
include("conn.php");  
include("functions.php");
header("Content-Type: application/json; charset=UTF-8");

    //* بإسم الله الرحمان الرحيم
    //* Vendredi 14-02-2020 
    //*   الزبون الكريم صبري

//addtitle
    
    if(isset($_POST['addtitle']) && isset($_SESSION['id']) && confirmed($_SESSION['id'])){
                header("Content-Type: application/json; charset=UTF-8");

        //necessary inputs.
        
        if (
            !(isset($_POST['title'])) ||
            !(isset($_POST['country'])) ||
            !(isset($_POST['title_origine'])) ||
            !(isset($_POST['content_type'])) ||
            !(isset($_FILES['image'])) ||
            ($_POST['title'] == '') ||
            ($_POST['country'] == '') ||
            ($_POST['title_origine'] == '') ||
            ($_POST['content_type'] == '') ||
            ($_FILES['image'] == '') ||
            (isset($_POST['episodes']) && (!is_numeric($_POST['episodes']) && !$_POST['episodes']=='')) ||
            (isset($_POST['duration']) && (!is_numeric($_POST['duration']) && !$_POST['duration']==''))
            ) {
            echo json_encode(array("code"=>'false',"mcode"=>"noNec"));
            
            }else{
            
            
            $title              = $_POST['title'];
            $country            = $_POST['country'];
            $title_origine      = $_POST['title_origine'];
            $content_rate       = $_POST['content_rate'];
            $content_type       = $_POST['content_type'];
            $image              = $_FILES['image'];


            //ennissary inputs
             if(isset($_POST['other_names'])){ $other_names=filter_var(htmlentities($_POST['other_names']),FILTER_SANITIZE_STRING);  }else{ $other_names= '';};


             $auther_id = $_SESSION['id'];


             if(isset($_POST['synopsis'])){ $synopsis=filter_var(htmlentities($_POST['synopsis']),FILTER_SANITIZE_STRING);  }else{ $synopsis= '';};


             if(isset($_POST['status'])){ $status=filter_var(htmlentities($_POST['status']),FILTER_SANITIZE_STRING);;  }else{ $status= '';};


             if(isset($_POST['duration'])){ $duration=$_POST['duration'];  }else{ $duration= '';};


             if(isset($_POST['episodes'])){ $episodes=$_POST['episodes'];  }else{ $episodes= '';};


             if(isset($_POST['tvshow_type'])){ $tvshow_type=$_POST['tvshow_type'];  }else{ $tvshow_type= '';};


             if(isset($_POST['season'])){ $season=$_POST['season'];  }else{ $season= '';};


             if(isset($_POST['p_date'])){ $p_date=$_POST['p_date'];  }else{ $p_date= '';};


             if(isset($_POST['f_date'])){ $f_date=$_POST['f_date'];  }else{ $f_date= '';};


             if(isset($_POST['origin_lang'])){ $origin_lang=$_POST['origin_lang'];  }else{ $origin_lang= '';};


             if(isset($_POST['production_count'])){ $production_count=$_POST['production_count'];  }else{ $production_count= '';};


             if(isset($_POST['original_net'])){ $origin_net=$_POST['original_net'];  }else{ $origin_net= '';};


             if(isset($_POST['genre'])){ $genre=$_POST['genre'];  }else{ $genre= '';};


             if(isset($_POST['keywords'])){ $tag=$_POST['keywords'];  }else{ $tag= false;};
            
             if(isset($_POST['note'])){ $note=$_POST['note'];  }else{ $note= '';};

             if(isset($_POST['related'])){ $related = json_decode($_POST['related']);  }else{ $related=false;};
            
             if(isset($_POST['work'])){ $work = json_decode($_POST['work']);  }else{ $work=false;};
            
             if(isset($_POST['act'])){ $act = json_decode($_POST['act']);  }else{ $act=false;};
            
            
            
             
             $imgupinf;
             $imgupinf=uploadimage($_FILES['image'],"title");
             
             if ($imgupinf['imguploaded']=='true'){
                 $image=$imgupinf['imagename'];
                 
                 $result = $conn->query("SHOW TABLE STATUS WHERE `Name` = 'title'");
                 $data = mysqli_fetch_array($result);
                 $next_increment = $data['Auto_increment'];
                 
                 
                 $stmt = $conn->prepare("INSERT INTO title (title, country, title_origine, other_names, auther_id, synopsis, status, content_rate, content_type, duration, episodes, tvshow_type, image, rate, admin_o, season, p_date, f_date, origin_lang, production_count, origin_net, genre, tag, note) VALUES (?, ?, ?, ?,?, ?, ?, ?,?, ?, ?, ?,?, ?, '0', ?,?, ?, ?, ?,?, ?,?,?)");
            
                        $stmt->bind_param('sssssssssssssssssssssss', $title, $country, $title_origine, $other_names, $auther_id, $synopsis, $status, $content_rate, $content_type, $duration, $episodes, $tvshow_type, $image, $rate, $season, $p_date, $f_date, $origin_lang, $production_count, $origin_net, $genre, $tag ,$note);
            
                        if($stmt->execute()){
                            
                            $stmw = $conn->prepare("SELECT permission.idU,permission.id, mission.idA, COUNT(mission.id) as num ,mission.status FROM permission JOIN mission ON mission.idA=permission.idU WHERE permission.perm='manager' GROUP BY mission.idA ORDER BY num ASC ");
                            $stmw->execute();
                            $r=$stmw->get_result();
                            $stmw->close();
                            
                            $stmwm = $conn->prepare("SELECT id from permission WHERE perm='manager'");
                            $stmwm->execute();
                            $rm=$stmwm->get_result();
                            $stmwm->close();
                            
                            if($rm->num_rows==$r->num_rows){
                                $n=$rm->num_rows;
                                $stmwim = $conn->prepare("SELECT mission.id,mission.idU,mission.idA,mission.wn,permission.idU,permission.perm from mission JOIN permission ON mission.idA=permission.idU WHERE permission.perm='manager' GROUP BY mission.idA ORDER BY mission.id DESC LIMIT ? ");
                                $stmwim->bind_param('i',$n);
                                $stmwim->execute();
                                $rim=$stmwim->get_result();
                                $stmwim->close();
                                
                                $f=true;
                                     $x=0;
                                
                                    while($adm=$rim->fetch_assoc()){
                                        $x++;
                                        
                                        if($x==$n){
                                            $admin=$adm['idA'];
                                        }
                                    }
                                
                            }else{
                                
                                if($r->num_rows=='0'){
                                    $stmwim = $conn->prepare("SELECT idU from permission WHERE perm='manager' ORDER BY wn DESC");
                                    $stmwim->execute();
                                    $rim=$stmwim->get_result();
                                    $stmwim->close();
                                    
                                    $admin=$rim->fetch_assoc()['idU'];
                                }
                                
                                if ($rm->num_rows>$r->num_rows){
                                    
                                    $stmwim = $conn->prepare("SELECT permission.idU,permission.perm, mission.idA from permission LEFT JOIN mission ON mission.idA=permission.idU WHERE permission.perm='manager' AND mission.idT IS NULL ORDER BY mission.wn DESC");
                                    $stmwim->execute();
                                    $rim=$stmwim->get_result();
                                    $stmwim->close();
                                    
                                    $admin=$rim->fetch_assoc()['idU'];
                                    
                                }
                                
                            }
                            
                           
                            
                            echo 'admin: '.$admin;
                            $stmtn1 = $conn->prepare("INSERT INTO mission(type,idT,idU,idA,status) VALUES('addTitle',?,?,?,'0')");
                            $stmtn1->bind_param("sss", $next_increment, $auther_id,$admin );
                            $stmtn1->execute();
                            
                            
                            echo json_encode(array("code"=>'true',"mcode"=>"addedSucc"));
                            
                            if (!$work){}else{
                                $w= array($work);
                                foreach ($w as $work_i) {
                                    foreach ($work_i as $wori) {
                                        if(postexist($wori->id,'ac')){
                                            $stmtn = $conn->prepare("INSERT INTO work(idP,format,idT,type) values(?,?,?,'work')");
                                            $stmtn->bind_param("sss", $wori->id, $wori->format,$next_increment );
                                            $stmtn->execute();
                                        }
                                    }
                                }
                            }
//                          
                           
                            if (!$related){}else{
                                $w= array($related);
                                foreach ($w as $work_i) {
                                    foreach ($work_i as $wori) {
                                        if(postexist($wori->id,'dr') ){
                                            $stmtn = $conn->prepare("INSERT INTO work(idP,format,idT,type) values(?,?,?,'related')");
                                            $stmtn->bind_param("sss", $wori->id, $wori->format,$next_increment );
                                            $stmtn->execute();
                                        }
                                    }
                                }
                            }
                            if (!$act){}else{
                                $w= array($act);
                                foreach ($w as $work_i) {
                                    foreach ($work_i as $wori) {
                                        if(postexist($wori->id,'ac')){
                                            $stmtn = $conn->prepare("INSERT INTO work(idP,format,idT,chara,type) values(?,?,?,?,'act')");
                                            $stmtn->bind_param("ssss", $wori->id, $wori->format,$next_increment, $wori->char);
                                            $stmtn->execute();
                                        }
                                    }
                                }
                            }
                            
                            if (!$tag){}else{
                                $w= json_decode($tag);
                                
                                    foreach ($w as $wori) {
                                            $stmtn = $conn->prepare("INSERT INTO keywords(idT,keyword) values(?,?)");
                                            $stmtn->bind_param("ss", $next_increment, $wori);
                                            $stmtn->execute();
                                    }
                                
                            }
                            
                            $type='dr';
                            $auther='';
                            $stmtn = $conn->prepare("INSERT INTO likes(idP,postT,idL) values(?,?,?)");
                            $stmtn->bind_param("sss", $next_increment, $type, $auther);
                            $stmtn->execute();
                            
                        }else{
                            echo json_encode(array("code"=>'false',"mcode"=>"error"));

                        } 
              }else{
                  echo json_encode(array("code"=>'false',"mcode"=>"image"));
              }
            
        
            
            
                        
                       
        //        INSERT INTO `title`(`id`, `title`, `country`, `title_origine`, `other_names`, `auther_id`, `synopsis`, `status`, `content_rate`, `content_type`, `duration`, `episodes`, `tvshow_type`, `image`, `rate`, `admin_o`, `season`, `p_date`, `f_date`, `origin_lang`, `production_count`, `origin_net`, `genre`, `tag`, `wn`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13],[value-14],[value-15],[value-16],[value-17],[value-18],[value-19],[value-20],[value-21],[value-22],[value-23],[value-24],[value-25])
            
        }
    }



if(isset($_POST['title'])){
    
    
    switch ($_POST['title']){
        case "gettitles":
            
            $word=$_POST['titlename'];
            $word = preg_replace('/(?<!\\\)([%_])/', '\\\$1',$word);
            
            $stmt4 = $conn->prepare("SELECT title,country,id,image,p_date,country,status,content_type FROM title WHERE title LIKE CONCAT('%',?,'%')  AND admin_o='1' LIMIT 10");
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
                
                
                $titles['country'] = $type.' '.$stat;
                
                
                array_push($mess, $titles );
                
            }
            
            if ($result4->num_rows=='0'){
                $code="false";
            }else{
                $code="true";
            }
            
            echo json_encode(["code"=>$code,"titles"=>$mess]);
            
            
        break;
    }
}


if(isset($_POST['get'])){
    
    header("Content-Type: application/json; charset=UTF-8");
    
    switch ($_POST['get']){
        case "related":
            
            $word=$_POST['key'];
            $word = preg_replace('/(?<!\\\)([%_])/', '\\\$1',$word);
            
            $stmt4 = $conn->prepare("SELECT title,country,id,image,p_date,country,status,content_type,synopsis FROM title WHERE title LIKE CONCAT('%',?,'%')  AND admin_o='1' LIMIT 10");
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
                $titles['p_date'] = substr($titles['p_date'],6,9);
                
                $titles['country'] = $type.' '.$stat;
                
                $titles['rate']=detailpost($titles['id'],'dr')['postRa'];
                $titles['synopsis']=substr($titles['synopsis'],0,100);
                array_push($mess, $titles );
                
            }
            
           

            
            if ($result4->num_rows=='0'){
                $code="false";
            }else{
                $code="true";
            }
            
            echo json_encode(["code"=>$code,"titles"=>$mess]);
        break;
            
            
        case "act" || "work":
            
            $word=$_POST['key'];
            $word = preg_replace('/(?<!\\\)([%_])/', '\\\$1',$word);
            
            $stmt4 = $conn->prepare("SELECT id,fname,lname,country,dayb,sex,picture FROM persones WHERE fname LIKE CONCAT('%',?,'%') OR lname LIKE CONCAT('%',?,'%') AND status='1' LIMIT 10");
            $stmt4->bind_param("ss", $word, $word);
            $stmt4->execute();
            $result4=$stmt4->get_result();
            $mess=array();

            while($titles=$result4->fetch_assoc()){
                
                if($titles['sex']=='1' ){
                    $stat= 'فنانة '.datasignif($titles['country'],'countryF');
                }else{
                    $stat= 'فنان '.datasignif($titles['country'],'countryM'); 
                }                
                
                $titles['country'] = $stat;
                $titles['dayb'] = substr($titles['dayb'],6,9);
                
                array_push($mess, $titles );
            }
            
            
            if ($result4->num_rows=='0'){
                $code="false";
            }else{
                $code="true";
            }
            
            echo json_encode(["code"=>$code,"titles"=>$mess]);
        break;
    }
}
?>
