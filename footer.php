<?php 
include('process/conn.php');
function footer(){ ?>
<div id="footer" class="app-footer black dk pos-rlt">
            <?php 
    
            global $conn;
             
            
            
            ?>
                <div class="footer p-x-lg">
                    <div class="row">

                        <div class="col-sm-2">
                            <div class="m-y">
                                <h3 class="text-md">تابعنا على موافع التواصل</h3>
                                <div class="m-t inline m-y">
                                    <?php
                                     $stmtnm = $conn->prepare("SELECT * FROM social WHERE type='facebook'");
                                     $stmtnm->execute();
                                     $resultnm=$stmtnm->get_result();
                                    ?>
                                    <?php if($resultnm -> num_rows!='0'){ ;?>
                                    <a target="_blank" href="<?php echo $resultnm->fetch_assoc()['info']; ?>" class="btn btn-icon btn-social rounded btn-sm white"><i class="fab fa-facebook-f"></i> <i class="fab fa-facebook-f indigo"></i></a>
                                    <?php } ?>
                                    
                                    
                                    <?php
                                     $stmtnm = $conn->prepare("SELECT * FROM social WHERE type='twitter'");
                                     $stmtnm->execute();
                                     $resultnm=$stmtnm->get_result();
                                    ?>
                                    <?php if($resultnm -> num_rows!='0'){ ;?>
                                    <a target="_blank" href="<?php echo $resultnm->fetch_assoc()['info']; ?>" class="btn btn-icon btn-social rounded btn-sm white"><i class="fab fa-twitter"></i> <i class="fab fa-twitter light-blue"></i></a>
                                    <?php } ?>
                                    
                                    
                                    <?php
                                     $stmtnm = $conn->prepare("SELECT * FROM social WHERE type='instagram'");
                                     $stmtnm->execute();
                                     $resultnm=$stmtnm->get_result();
                                    ?>
                                    
                                    <?php if($resultnm -> num_rows!='0'){ ;?>
                                    <a target="_blank" href="<?php echo $resultnm->fetch_assoc()['info']; ?>" class="btn btn-icon btn-social rounded btn-sm white"><i class="fab fa-instagram"></i> <i class="fab fa-instagram red"></i></a>
                                    <?php } ?>
                                    
                                    
                                    <?php
                                     $stmtnm = $conn->prepare("SELECT * FROM social WHERE type='youtube'");
                                     $stmtnm->execute();
                                     $resultnm=$stmtnm->get_result();
                                    ?>
                                    
                                    <?php if($resultnm -> num_rows!='0'){ ;?>
                                    <a target="_blank" href="<?php echo $resultnm->fetch_assoc()['info']; ?>" class="btn btn-icon btn-social rounded btn-sm white"><i class="fab fa-youtube"></i> <i class="fab fa-youtube red"></i></a>
                                    <?php } ?>
                                </div>

                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="m-y">
                                <h3 class="text-md">اعمل معنا</h3>
                                <ul class="nav m-t">
                                    <li class="m-t-sm"><a href="/discussions/community-tasks/29624-mdl-writers-article-ideas-discussion"><span>متاب</span></a></li>
                                    <li class="m-t-sm"><a href="/contact" rel="external nofollow"><span>إشهار</span></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="m-y">
                                <h3 class="text-md">معلومات عنا</h3>
                                <ul class="nav m-t">
                                    
                                    <li class="m-t-sm"><a href="/faq" rel="external nofollow"><span>الأسئلة المتكررة</span></a></li>
                                    <li class="m-t-sm"><a href="/about" rel="external nofollow"><span>من نحن</span></a></li>
                                    <li class="m-t-sm"><a href="/contact" rel="external nofollow"><span>تواصل معنا</span></a></li>
                                    <li class="m-t-sm"><a href="/terms" rel="external nofollow"><span>قوانين الخدمة</span></a></li>
                                    <li class="m-t-sm"><a href="/privacy" rel="external nofollow"><span>سياسة الخصوصية</span></a></li>
                                    
                                </ul>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="m-t">
                                <a href="/">
                                
                                    <?php
                                     $stmtnm = $conn->prepare("SELECT * FROM social WHERE type='footer_logo'");
                                     $stmtnm->execute();
                                     $resultnm=$stmtnm->get_result();
                                    ?>
                                    <?php if($resultnm -> num_rows!='0'){ ;?>
                                    
                                    <img alt="تقييم.كوم" src="process/<?php echo $resultnm->fetch_assoc()['info']; ?>" width="158" height="24">
                                    
                                    <?php }else{ ?>
                                    <img alt="تقييم.كوم" src="" width="158" height="24">
                                    <?php } ?>
                                    
                                
                                </a>
                            </div>
                            <div><small class="text-muted">© جميع الحقوق محفوظة.</small></div>
                        </div>

                    </div>
                </div>
            </div>

<?php } ?>