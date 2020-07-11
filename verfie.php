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
                    </head><body style="">
                <h1 style="color:#f40;background-color:#4376aa;text-align:center;padding: 22px;"><img src="assets/logo_w.png"></h1>
                    
                <h2 style="color:#000;text-align:center;">حدث خطأ في عملية التأكيد.</h2>
                    
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
        $alrV=($result->fetch_assoc()['emailver']=='1');
        
        $stmt = $conn->prepare("SELECT * FROM verifie WHERE email = ? AND hash=? AND verif='0' ");
        $stmt->bind_param("ss", $em,$hs);
        $stmt->execute();
        $result = $stmt->get_result();
        $badinfo=($result->num_rows==0);
        
        if($alrV || $badinfo){
            
            if($alrV){
                 ?>
                <html><head>    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
                    </head><body style="">
                <h1 style="color:#f40;background-color:#4376aa;text-align:center;padding: 22px;"><img src="assets/logo_w.png"></h1>
                    
                <h2 style="color:#000;text-align:center;">تم تأكيد البريد الالكتروني الخاص بك مسبقا، شكرا</h2>
                    
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
                 ?>
                <html><head>    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
                    </head><body style="">
                <h1 style="color:#f40;background-color:#4376aa;text-align:center;padding: 22px;"><img src="assets/logo_w.png"></h1>
                <h2 style="color:#000;text-align:center;">حدث خطأ في عملية التأكيد.</h2>
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
            }
            
        
        }else{
            $stmt = $conn->prepare("UPDATE users SET emailver='1' WHERE email = ?");
            $stmt->bind_param("s", $em);
            if($stmt->execute()){
                $stmt = $conn->prepare("UPDATE verifie SET verif='1' WHERE email = ? AND hash=?");
                $stmt->bind_param("ss", $em,$hs);
                $stmt->execute();
            ?>
                <html><head>    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
                    </head><body style="">
                <h1 style="color:#f40;background-color:#4376aa;text-align:center;padding: 22px;"><img src="assets/logo_w.png"></h1>
                <h2 style="color:#000;text-align:center;">تم تأكيد البريد الالكتروني الخاص بك. شكرا</h2>
                <p style="text-align:center;">سوف يتم توجيهك الى صفحة الدخول في <b id="cntr">0</b> ثوان</p>
                    <script>
                        var vc= 10;
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
            <?php }else{
                echo 'sss';
            }
        }
    }
}else{
    header('location:index.php');
}