<?php 
ob_start();

    //* بإسم الله الرحمان الرحيم
    //* Vendredi 14-02-2020 
    //*   الزبون الكريم صابر

session_start();
include("conn.php");  
if(isset($_GET['em']) && !empty($_GET['em']) AND isset($_GET['hs']) && !empty($_GET['hs'])){
    
    
    $em = $_GET['em']; // Set email variable
    $hs = $_GET['hs']; // Set hash variable
    
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $em);
    $stmt->execute();
    $result = $stmt->get_result();
    $unotexist=($result->num_rows==0);
    
    
    
    if($unotexist){
       ?>
                <html><head>    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
                    </head><body style="direction:rtl">
                <h1 style="color:#f40;background-color:#4376aa;text-align:center;padding: 22px;"><img src="assets/logo_w.png"></h1>
                    
                <h2 style="color:#000;text-align:center;color:red;">حدث خطأ !</h2>
                    
                <p style="text-align:center;">سوف يتم توجيهك الى صفحة الدخول في <b id="cntr">0</b> ثوان</p>
                    <script>
                        var vc= 20;
                        tm();
                        function tm(){
                            vc--;
                            if(vc<0){
                                setTimeout(function(){window.location.href="signup.php";},1000)
                            }else{
                                $("#cntr").html(vc);
                                setTimeout(tm,1000);
                            }
                        }
                    </script>
                </body></html>
            <?php
    }else{
        $i=$result->fetch_assoc()['code'];
        
        $stmt = $conn->prepare("SELECT * FROM password_forget WHERE idU=? AND hash=? ");
        $stmt->bind_param("ss", $i,$hs);
        $stmt->execute();
        $result = $stmt->get_result();
        $badinfo=($result->num_rows==0);
        
        if($badinfo){
            
            
                 ?>
                <html><head>    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
                    </head><body style="direction:rtl">
                <h1 style="color:#f40;background-color:#4376aa;text-align:center;padding: 22px;"><img src="assets/logo_w.png"></h1>
                <h2 style="color:#000;text-align:center;color:red">حدث خطأ .</h2>
                <p style="text-align:center;">سوف يتم توجيهك الى صفحة الدخول في <b id="cntr">0</b> ثوان</p>
                    <script>
                        var vc= 20;
                        tm();
                        function tm(){
                            vc--;
                            if(vc<0){
                                setTimeout(function(){window.location.href="signin.php";},1000)
                            }else{
                                $("#cntr").html(vc);
                                setTimeout(tm,1000);
                            }
                        }
                    </script>
                </body></html>
            <?php
           
            
        
        }else{
            $stmt = $conn->prepare("DELETE FROM password_forget WHERE  idU = ?");
            $stmt->bind_param("s", $i);
            if($stmt->execute()){
                
                
                $stmt = $conn->prepare("SELECT * FROM users WHERE code = ?");
                $stmt->bind_param("s", $i);
                $stmt->execute();
                $result = $stmt->get_result();
                $u=$result->fetch_assoc();
                
                    $_SESSION["id"] = $u['code'];
                    $_SESSION["img"] = $u['picture']; 
                    $_SESSION["username"] = $u['username'];
                    $_SESSION["email"] = $u['email'];
                    $_SESSION["type"] = $u['type'];
               
                
            ?>
                <html><head>    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
                    </head><body style="direction:rtl">
                <h1 style="color:#f40;background-color:#4376aa;text-align:center;padding: 22px;"><img src="assets/logo_w.png"></h1>
                <h2 style="color:#000;text-align:center;">تم تأكيد معلوماتك.</h2>
                <p style="text-align:center;">سوف يتم توجيهك لصفحة تغيير كلمتك السرية في <b id="cntr">0</b> ثوان</p>
                    <script>
                        var vc= 10;
                        tm();
                        function tm(){
                            vc--;
                            if(vc<0){
                                setTimeout(function(){window.location.href="settings.php?option=privacy";},1000);
                            }else{
                                $("#cntr").html(vc);
                                setTimeout(tm,1000);
                            }
                        }
                    </script>
                </body></html>
            <?php }else{
               
            }
        }
    }
}else{
    header('location:index.php');
}