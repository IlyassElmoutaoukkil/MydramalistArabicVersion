<?php 
session_start();
include("conn.php");  
include("functions.php");

    //* بإسم الله الرحمان الرحيم
    //* Vendredi 14-02-2020 
    //*   الزبون الكريم صبري

//addtitle
    
if(isset($_POST['addpersone']) && isset($_SESSION['id']) && confirmed($_SESSION['id'])){
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
            
             $imgupinf;
             $imgupinf=uploadimage($_FILES['image'],"persone");
             
             if ($imgupinf['imguploaded']=='true'){
                    $image=$imgupinf['imagename'];
                 
                    $result = $conn->query("SHOW TABLE STATUS WHERE `Name` = 'persones'");
                    $data = mysqli_fetch_array($result);
                    $next_increment = $data['Auto_increment'];
                 
                 $stmt = $conn->prepare("INSERT INTO persones ( fname, lname, sex, country, orname, othname, biography, dayb, dayd, picture, act, work, note, auther_id, status) VALUES (?, ?, ?, ?,?, ?, ?, ?,?, ?, ?, ?,?, ?,'0')");
                        $acte='';
                        $worke='';
                        $stmt->bind_param('ssssssssssssss', $fname, $lname, $sex, $country, $orname, $othname, $biography, $dayb, $dayd, $imgupinf['imagename'], $acte, $worke, $note, $auther_id);
            
                        if($stmt->execute()){
                            $type='ac';
                            $auther='';
                            
                            $stmtn = $conn->prepare("INSERT INTO likes(idP,postT,idL) values(?,?,?)");
                            $stmtn->bind_param("sss", $next_increment, $type, $auther);
                            $stmtn->execute();
                            
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
                            
                           
                            
                            $stmtn1 = $conn->prepare("INSERT INTO mission(type,idT,idU,idA,status) VALUES('addPers',?,?,?,'0')");
                            $stmtn1->bind_param("sss", $next_increment, $auther_id,$admin );
                            $stmtn1->execute();
                            
                            
                            echo json_encode(array("code"=>'true',"mcode"=>"addedSucc"));
                            
                            $w= array($work);
                            if(!empty(($w))){
                            foreach ($w as $work_i) {
                                foreach ($work_i as $wori) {
                                    $stmtn = $conn->prepare("INSERT INTO work(idP,format,idT,type) values(?,?,?,'work')");
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
                                    $stmtn = $conn->prepare("INSERT INTO work(idP,format,idT,chara,type) values(?,?,?,?,'act')");
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
