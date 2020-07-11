<?php 
session_start();
include("conn.php");  
include("functions.php");
header("Content-Type: application/json; charset=UTF-8");

    //* بإسم الله الرحمان الرحيم
    //* Vendredi 14-02-2020 
    //*   الزبون الكريم صبري

//addtitle
    
    if(isset($_POST['edittitle']) && isset($_SESSION['id']) && confirmed($_SESSION['id'])){
                header("Content-Type: application/json; charset=UTF-8");

        //necessary inputs.
        
        if (
            !(isset($_POST['title'])) ||
            !(isset($_POST['country'])) ||
            !(isset($_POST['title_origine'])) ||
            !(isset($_POST['content_type'])) ||
            !(isset($_POST['id']) || postexist($_POST['id'],'dr')) ||
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
            $id       = $_POST['id'];
            
            


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

             if(isset($_POST['related'])){ $related = json_decode($_POST['related'],true);  }else{ $related=false;};
            
             if(isset($_POST['work'])){ $work = json_decode($_POST['work'],true);  }else{ $work=false;};
            
             if(isset($_POST['act'])){ $act = json_decode($_POST['act'],true);  }else{ $act=false;};
            
            
            $ti=titleinfo($_POST['id']);
            
            if(empty($_FILES['image']['name'])){
                $imgupinf=[];
                $imgupinf['imguploaded']='true';
                $imgupinf['imagename']='';
            }else{
                $imgupinf;
                $imgupinf=uploadimage($_FILES['image'],"title");
            }
             $same=(
                 $ti['title']==$title && $ti['country']==$country 
                 
                 && $ti['title_origine']==$title_origine && $ti['content_rate']==$content_rate 
                 
                 && $ti['content_type']==$content_type && $ti['other_names']==$other_names 
                 
                 && $ti['synopsis']==$synopsis && $ti['status']==$status 
                 
                 && $ti['duration']==$duration && $ti['episodes']==$episodes &&  $ti['tvshow_type']==$tvshow_type 
                 
                 && $ti['season']==$season && $ti['p_date']==$p_date 
                 
                 && $ti['f_date']==$f_date && $ti['origin_lang']==$origin_lang 
                 
                 && $ti['genre']==$genre  &&  $imgupinf['imagename']=='' );

                 
            
                 
            
                 if(is_null(json_decode($origin_net))){
                     $origin_net='[]';
                 }
                 if(is_null(json_decode($production_count))){
                     $production_count='[]';
                 }
                 if(is_null(json_decode($genre))){
                     $genre='[]';
                 }
                 if($other_names==''){
                     $other_names='';
                 }
            
                 $oreg1=empty(array_diff(json_decode($origin_net),json_decode($ti['origin_net'])));
                 $oreg2=empty(array_diff(json_decode($ti['origin_net']),json_decode($origin_net)));
            
            
                 $oreg1=empty(array_diff(json_decode($production_count),json_decode($ti['production_count'])));
                 $oreg2=empty(array_diff(json_decode($ti['production_count']),json_decode($production_count)));
        
                 $genre1=empty(array_diff(json_decode($genre),json_decode($ti['genre'])));
                 $genre2=empty(array_diff(json_decode($ti['genre']),json_decode($genre)));
            
                 $other1=empty(array_diff(explode(',',$ti['other_names']),explode(',',$other_names)));
                 $other2=empty(array_diff(explode(',',$other_names),explode(',',$ti['other_names'])));
                
                 $arsame=($oreg1 && $oreg2 && $oreg1 && $oreg2 && $genre1 && $genre2 );
                 
                 
            
                
                //act
//                $act = $conn->prepare("SELECT id,format,chara from work WHERE idT=? AND type='act'");
//                $act->bind_param('s',$ti['id']);
//                $act->execute();
//                $ract=$act->get_result();
//                $aract=[];
//                
//                while($acts=$ract->fetch_assoc()){
//                    array_push($aract,$acts);
//                }
//            
//                //work
//                $work = $conn->prepare("SELECT id,format,chara from work WHERE idT=? AND type='work'");
//                $work->bind_param('s',$ti['id']);
//                $work->execute();
//                $rwork=$work->get_result();
//                $arwork=[];
//                
//                while($workss=$rwork->fetch_assoc()){
//                    array_push($arwork,$workss);
//                }
//            
//                //related
//                $rela = $conn->prepare("SELECT id,format,chara from work WHERE idT=? AND type='work'");
//                $rela->bind_param('s',$ti['id']);
//                $rela->execute();
//                $rrela=$rela->get_result();
//                $arrela=[];
//                
//                while($relass=$rrela->fetch_assoc()){
//                    array_push($arrela,$relass);
//                }
//            
//            
//                print_r(array_diff($aract));
             
             if ($imgupinf['imguploaded']=='true' && (!$same || !$arsame)){
                 $image=$imgupinf['imagename'];
                 
                 $result = $conn->query("SHOW TABLE STATUS WHERE `Name` = 'postedit'");
                 $data = mysqli_fetch_array($result);
                 $next_increment = $data['Auto_increment'];
                 
                 
                 $stmt = $conn->prepare("INSERT INTO postedit (idO,title, country, title_origine, other_names, auther_id, synopsis, status, content_rate, content_type, duration, episodes, tvshow_type, image, rate,  season, p_date, f_date, origin_lang, production_count, origin_net, genre, tag, note) VALUES (?, ?, ?, ?,?, ?, ?, ?,?, ?, ?, ?,?, ?, '0', ?,?, ?, ?, ?,?, ?,?,?)");
            
                        $stmt->bind_param('sssssssssssssssssssssss',$id, $title, $country, $title_origine, $other_names, $auther_id, $synopsis, $status, $content_rate, $content_type, $duration, $episodes, $tvshow_type, $image, $season, $p_date, $f_date, $origin_lang, $production_count, $origin_net, $genre, $tag ,$note);
            
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
                            
                           
                            
                            $stmtn1 = $conn->prepare("INSERT INTO mission(type,idT,idU,idA,status) VALUES('edititle',?,?,?,'0')");
                            $stmtn1->bind_param("sss", $next_increment, $auther_id,$admin );
                            $stmtn1->execute();
                            
                            
                            echo json_encode(array("code"=>'true',"mcode"=>"addedSucc"));
                            
                            if (!$work){}else{
                                $w= array($work);
                                foreach ($w as $work_i) {
                                    foreach ($work_i as $wori) {
                                        
                                        
                                        if(postexist($wori['id'],'ac')){
                                            
                                            $stmtn = $conn->prepare("INSERT INTO editwork(idP,format,idT,type) values(?,?,?,'work')");
                                            $stmtn->bind_param("sss", $wori['id'], $wori['format'],$next_increment );
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
                                        if(postexist($wori['id'],'dr') ){
                                            $stmtn = $conn->prepare("INSERT INTO editwork(idP,format,idT,type) values(?,?,?,'related')");
                                            $stmtn->bind_param("sss", $wori['id'], $wori['format'],$next_increment );
                                            $stmtn->execute();
                                        }
                                    }
                                }
                            }
                            
                            
                            if (!$act){}else{
                                $w= array($act);
                                foreach ($w as $work_i) {
                                    foreach ($work_i as $wori) {
                                        if(postexist($wori['id'],'ac')){
                                            $stmtn = $conn->prepare("INSERT INTO editwork(idP,format,idT,chara,type) values(?,?,?,?,'act')");
                                            $stmtn->bind_param("ssss", $wori['id'], $wori['format'],$next_increment, $wori['char']);
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


    
if(isset($_POST['persedit']) && isset($_SESSION['id']) && confirmed($_SESSION['id'])){
                header("Content-Type: application/json; charset=UTF-8");

        //necessary inputs.
        if (
            !(isset($_POST['fname'])) ||
            !(isset($_POST['lname'])) ||
            !(isset($_POST['sex'])) ||
            !(isset($_POST['othname'])) ||
            !(isset($_POST['country'])) ||
            !(isset($_FILES['image']))
            ) {
            
            echo json_encode(array("code"=>'false',"mcode"=>"noNec"));
            
            
            }else{
            


            $fname    = $_POST['fname'];
            $lname    = $_POST['lname'];
            $sex      = $_POST['sex'];
            $orname   = $_POST['orname'];
            $country  = $_POST['country'];
            $image    = $_FILES['image'];


            //ennissary inputs
             if(isset($_POST['othname'])){ $othname=$_POST['othname'];  }else{ $othname= '';};


             $auther_id = $_SESSION['id'];


             if(isset($_POST['biography'])){ $biography=$_POST['biography'];  }else{ $biography= '';};


             

             if(isset($_POST['dayb'])){ $dayb=$_POST['dayb'];  }else{ $dayb= '';};


             if(isset($_POST['dayd'])){ $dayd=$_POST['dayd'];  }else{ $dayd= '';};


             
             if(isset($_POST['note'])){ $note=$_POST['note'];  }else{ $note= '';};

             if(isset($_POST['work'])){ $work = json_decode($_POST['work']);  }else{ $work= [];};


             if(isset($_POST['act'])){ $act = json_decode($_POST['act']);  }else{ $act= [];};
            
             
             

                     ///wiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii
                     ///wiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii
                    // 12345
            
             $ti=personeinfo($_POST['id']);
            
            if(empty($_FILES['image']['name'])){
                $imgupinf=[];
                $imgupinf['imguploaded']='true';
                $imgupinf['imagename']='';
            }else{
                $imgupinf;
                $imgupinf=uploadimage($_FILES['image'],"title");
            }
             $same=(
                 $ti['fname']==$fname && $ti['lname']==$lname && $ti['country']==$country 
                 
                 && $ti['sex']==$sex && $ti['orname']==$orname
                 
                 && $ti['dayd']==$dayd && $ti['dayb']==$dayb 
                 
                 && $ti['biography']==$biography );

                 
            
                 
            
                 if(is_null(json_decode($othname))){
                     $othname='[]';
                 }
            
                 $oreg1=empty(array_diff(explode(',',$othname),explode(',',$ti['othname'])));
                 $oreg2=empty(array_diff(explode(',',$ti['othname']),explode(',',$othname)));
            
                
                 $arsame=($oreg1 && $oreg2);
                 
                 
                $id=$_POST['id'];
                
                
             if ($imgupinf['imguploaded']=='true' && (!$same || !$arsame) && postexist($_POST['id'],'ac')){
                 
                 
         
                    $image=$imgupinf['imagename'];
                 
                    $result = $conn->query("SHOW TABLE STATUS WHERE `Name` = 'editpers'");
                    $data = mysqli_fetch_array($result);
                    $next_increment = $data['Auto_increment'];
                 
                 $stmt = $conn->prepare("INSERT INTO editpers (idO,fname, lname, sex, country, orname, othname, biography, dayb, dayd, picture, auther_id,status,note) VALUES (?, ?, ?, ?,?, ?, ?, ?,?,?,? ,?,'0', ?)");
                        $acte='';
                        $worke='';
                        $stmt->bind_param('sssssssssssss', $id,$fname, $lname, $sex, $country, $orname, $othname, $biography, $dayb, $dayd, $imgupinf['imagename'],$auther_id,  $note );
            
                        if($stmt->execute()){
                            $type='ac';
                            $auther='';
                            
                            
                            
                            //save work here:
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
                            
                           
                            
                            $stmtn1 = $conn->prepare("INSERT INTO mission(type,idT,idU,idA,status) VALUES('edipersone',?,?,?,'0')");
                            $stmtn1->bind_param("sss", $next_increment, $auther_id,$admin );
                            $stmtn1->execute();
                            
                            
                            echo json_encode(array("code"=>'true',"mcode"=>"addedSucc"));
                            
                            $w= array($work);
                            if(!empty(($w))){
                            foreach ($w as $work_i) {
                                foreach ($work_i as $wori) {
                                    $stmtn = $conn->prepare("INSERT INTO editwork(idP,format,idT,type) values(?,?,?,'work')");
                                    $stmtn->bind_param("sss", $next_increment, $wori->format, $wori->id);
                                    $stmtn->execute();
                                    
                                }
                            }
                            }
//                          c
                            $w= array($act);
                            if(!empty(count($w))){
                            foreach ($w as $work_i) {
                                foreach ($work_i as $wori) {
                                    $stmtn = $conn->prepare("INSERT INTO editwork(idP,format,idT,chara,type) values(?,?,?,?,'act')");
                                    $stmtn->bind_param("ssss", $next_increment, $wori->format, $wori->id, $wori->char);
                                    $stmtn->execute();
                                    
                                }
                            }
                            }
                            
                            
                                
                                
                        }else{
                            
                            echo json_encode(array("code"=>'false',"mcode"=>"error"));
                            trigger_error("there was an error....".$conn->error, E_USER_WARNING);

                        } 
              }else{
                  echo json_encode(array("code"=>'false',"mcode"=>"image"));
              }
            
        
            
            
                        
                       
        //        INSERT INTO title(id, title, country, title_origine, other_names, auther_id, synopsis, status, content_rate, content_type, duration, episodes, tvshow_type, image, rate, admin_o, season, p_date, f_date, origin_lang, production_count, origin_net, genre, tag, wn) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13],[value-14],[value-15],[value-16],[value-17],[value-18],[value-19],[value-20],[value-21],[value-22],[value-23],[value-24],[value-25])
            
        }
    }




?>