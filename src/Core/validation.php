<?php
function clean_phone($phone)
{
    return filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
}

function validate($value, $fieldName)
{
    return empty($value) ? "$fieldName is required" : null;
}

function validate_email($email)
{

    return filter_var($email, FILTER_VALIDATE_EMAIL) ? null : "invalid email";
}


function validate_password($password,$confirm_password){
    if(strlen($password)<8){
        return "short password";
    }

    $pattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{8,}$/";
    if ($password !=$confirm_password){
        return "PASSWORD AND CONFIRM PASSWORD NOT MATCH";
    }elseif(!preg_match($pattern, $password)){
        return "week password shouid contain numbers upper later and small,special chrarcter ";

    }
    
    else{
        return null;
    }
}


function validate_user($name, $email, $phone, $password,$confirm_passwor)
{

    $arr = [
        "name" => $name,
        "email" => $email,
        "phone" => $phone,
        "password" => $password

    ];

    foreach ($arr as $key => $value) {

        if ($eror = validate($value, $key)) {
            return $eror;
        }

    }

   if($eror = validate_email($email)) {
        return $eror;
    }
    elseif ($eror=validate_password($password,$confirm_passwor)) {
        return $eror;
    }
    else{
        return $eror;
    }

}


function validate_login($email,$password){
    $arr = [
     
        "email" => $email,
        "password" => $password
    ];
    foreach ($arr as $key => $value) {

        if ($eror = validate($value, $key)) {
            return $eror;
        }

    }
    if($eror = validate_email($email)) {
        return $eror;
    }

    
    else{
        return $eror;
    }


}


function validate_blog($tilte,$content,$image){
    $arr = [
     
        "title"=>$tilte,
        "content"=>$content,
        "image"=>$image
    ];
    foreach ($arr as $key => $value) {

        if ($eror = validate($value, $key)) {
            return $eror;
        }

    }
    

    
  
        return $eror;
    


}