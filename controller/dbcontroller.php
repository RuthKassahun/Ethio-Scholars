<?php

class dbcontroller {
   private $conn;
    function __construct() {
        
        include_once 'dbconnect.php';
    
        $db=new dbconnect();
        $this->conn=$db->connect();
}
public function login($username, $password){
        $pass=  md5($password);
        $stm=$this->conn->prepare("select * from account where username=? and password=?");
        $stm->bind_param("ss", $username, $pass);
        $stm->execute();
        $row = $stm->get_result();
          if($row->num_rows>0){
              return $row->fetch_assoc();
             
          }else {
              return -1;
    }
}
public function getId($username, $password){
         $pass=  md5($password);
        $stm=$this->conn->prepare("select * from account where username=? and password=?");
        $stm->bind_param("ss", $username, $pass);
        $stm->execute();
        $row = $stm->get_result()->fetch_assoc();
        return $row['accountId'];
        
}
public function enterprisesignup($companyname,$companyemail,$location,$companywebsite,$fax,$postbox,$companyphone1,
        $companyphone2,$companyphone3,$fullname,$position,$address,$email,$accId){
         $stm= $this->conn->prepare("insert into enterprise(companyname,companyemail,location,companywebsite,fax,postbox,companyphone1,
        companyphone2,companyphone3,fullname,position,address,email,accId) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?);");
         $stm->bind_param("ssssssssssssss",$companyname,$companyemail,$location,$companywebsite,$fax,$postbox,$companyphone1,
        $companyphone2,$companyphone3,$fullname,$position,$address,$email,$accId);
         if($stm->execute()){
             return 1;
             
         }else{
             return 2;
         }
          
        }
         public function addenterprise_pass($username,$password){
             $pass=  md5($password);
         $stm= $this->conn->prepare("insert into account(username,password,role) values(?,?,'enterprise');");
         $stm->bind_param("ss",$username,$pass);
         if($stm->execute()){
             return 1;
             
         }else{
             return 2;
         }
          
        }
public function indpendentresearchersignup($firstname,$lastname,$email,$phonenumber,$address,$location,$educationallevel,$accId){
         $stm= $this->conn->prepare("insert into indpendentresearcher(firstname,lastname,email,phonenumber,address,location,educationallevel,accId) values(?,?,?,?,?,?,?,?);");
         $stm->bind_param("ssssssss",$firstname,$lastname,$email,$phonenumber,$address,$location,$educationallevel,$accId);
         if($stm->execute()){
             return 1;
             
         }else{
             return 2;
         }
          
        }
        public function addindpendentresearcher_pass($username,$password){
             $pass=md5($password);
         $stm= $this->conn->prepare("insert into account(username,password,role) values(?,?,'indpendentresearcher');");
         $stm->bind_param("ss",$username,$pass);
         if($stm->execute()){
             return 1;
             
         }else{
             return 2;
         }
          
        }
        public function usersignup($firstname,$lastname,$email,$phonenumber,$address,$location,$educationallevel,$accId){
         $stm= $this->conn->prepare("insert into user(firstname,lastname,email,phonenumber,address,location,educationallevel,accId) values(?,?,?,?,?,?,?,?);");
         $stm->bind_param("ssssssss",$firstname,$lastname,$email,$phonenumber,$address,$location,$educationallevel,$accId);
         if($stm->execute()){
             return 1;
             
         }else{
             return 2;
         }
          
        }
        public function adduser_pass($username,$password){
            $pass=md5($password); 
         $stm= $this->conn->prepare("insert into account(username,password,role) values(?,?,'user');");
         $stm->bind_param("ss",$username,$pass);
         if($stm->execute()){
             return 1;
             
         }else{
             return 2;
         }
          
        }
//      
        public function universitysignup($institutionname,$institutionemail,$location,$institutionwebsite,$fax,$postbox,$institutionphone1,
        $institutionphone2,$institutionphone3,$fullname,$position,$address,$email,$accId){
         $stm= $this->conn->prepare(" insert into university(institutionname,institutionemail,location,insititutionwebsite,fax,postbox,insititutionphone1,
        insititutionphone2,insititutionphone3,fullname,position,address,email,accId) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?);");
         $stm->bind_param("ssssssssssssss",$institutionname,$institutionemail,$location,$institutionwebsite,$fax,$postbox,$institutionphone1,
        $institutionphone2,$institutionphone3,$fullname,$position,$address,$email,$accId);
         if($stm->execute()){
             return 1;
            
         }else{
             return 2;
         }
          
        }
         public function adduniversity_pass($username,$password){
              $pass=md5($password);
         $stm= $this->conn->prepare("insert into account(username,password,role) values(?,?,'university');");
         $stm->bind_param("ss",$username,$pass);
         if($stm->execute()){
             return 1;
             
         }else{
             return 2;
         }
          
        }
         public function updatepass($user,$newpass){
              $pass=md5($newpass);
                $stm=$this->conn->prepare("update account set password=? where username=? ");
                $stm->bind_param("ss",$pass,$user);
         if($stm->execute()){
                    return 1;
                }else{
                    return 2;
                }
        
             }
}

?>