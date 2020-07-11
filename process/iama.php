<?php 
function iama($perm,$id){
        global $conn;

    $stmtF = $conn->prepare(" SELECT *  FROM permission WHERE idU=? AND perm=?"); // Write, Accept, Comuni
    $stmtF->bind_param('ss',$id,$perm);
    $stmtF->execute();
    $resultT=$stmtF->get_result();
    
    if($resultT->num_rows=='1'){
        return true;
    }else{
        return false;
    }
}
?>