<?php include 'data.php';?>
<?php

   
   

     
         function sendEmail($mail_to, $mail_subject, $mail_body)
{

   // $cURL_key = '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';
   // $cURL_key = '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';
    
    
    $cURL_key = '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';
    $mail_from = 'bpwithlinux@gmail.com';
    $curl = curl_init();
    
    //$mail_body = "name:".$_POST['name'];
    
    
    $content =  nl2br("name : $_POST[name],  Eamil: $_POST[email], phone : $_POST[phone], Message  : $_POST[query]");
   
    $mail_body = $content;

    $mail_subject = "Neelkanth IVF Center Lp Contact Details";

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.sendgrid.com/v3/mail/send",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "{\"personalizations\": [{\"to\": [{\"email\": \"$mail_to\"}]}],\"from\": {\"email\": \"$mail_from\"},\"subject\": \"$mail_subject\",\"content\": [{\"type\": \"text/plain\", \"value\": \"$mail_body\"}]}",
        CURLOPT_HTTPHEADER => array(
            "authorization: Bearer $cURL_key",
            "cache-control: no-cache",
            "content-type: application/json"
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        echo $response;
    }
}

sendEmail("formquery@convicare.com",$mail_subject, $mail_body);

sendEmail("leadwithbp@gmail.com",$mail_subject, $mail_body);

sendEmail("brandingpioneersapple@gmail.com",$mail_subject, $mail_body);

sendEmail("Neelkanthhospital101@gmail.com",$mail_subject, $mail_body);
   
   
   
   
   
    //   $subject = "Neelkanth Ivf Center Lp Details";

    //             $message = "<table style='border-collapse: collapse' border='1' cellspacing='0' cellpadding='6'>
    //                         <tbody>
    //                             <tr style='background: #47B7E8; color: #ffffff;'>
    //                                 <th colspan='2'>Contact Information</th>
    //                             </tr>
    //                             <tr style='background: #eee;'>
    //                                 <td>Name: </td><td>{$_POST['name']}</td>
    //                             </tr>  
 
    //                             <tr style='background: #eee;'>
    //                                 <td>Phone: </td><td>{$_POST['phone']}</td>
    //                             </tr>
    //                              <tr style='background: #eee;'>
    //                                 <td>Email: </td><td>{$_POST['email']}</td>
    //                             </tr>
                                
    //                              <tr style='background: #eee;'>
    //                                 <td>Message: </td><td>{$_POST['query']}</td>
    //                             </tr>
                               
                                
    //                         </tbody>
    //                     </table>";
    //               $toone = "leadwithbp@gmail.com, formquery@convicare.com, brandingpioneersapple@gmail.com, Neelkanthhospital101@gmail.com";
              
    //             //   $toone = "formquery@convicare.com";
    //                 $totwo = "brandingpioneersnike@gmail.com";
    //                 $from = $_POST['email'];
    //                 $headers .= 'MIME-Version: 1.0'."\r\n";
    //                 $headers ="From: $from \r\n";
    //                 $headers .= 'Content-type:text/html;charset=iso-8859-1'."\r\n"; 
    //                 @mail($toone,$subject,$message,$headers);
    //                 @mail($totwo,$subject,$message,$headers);
                    
    //                   $ch = curl_init();  
    //                 $name=$_POST['name'];
                   
    //                 $phone=$_POST['phone'];
    //                  $services=$_POST['services'];
                  
    //                 $age=$_POST['age'];
                
                    
    //                 // if($consultation==1){
    //                 //     $consultationName="Tele Consultation";
    //                 // }else if($consultation==2)
    //                 // {
    //                 //     $consultationName="Video Consultation";
    //                 // }
    //                 // else if($consultation==3){
    //                 //     $consultationName="Consultation at Clinic";
    //                 // }
    //                 // set url
    //                 curl_setopt($ch, CURLOPT_URL, "https://api.kylas.io/v1/leads/");
    //                 //return the transfer as a string
    //                 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //                 $headers = array(
    //                 "api-key: 8d3e8fc7-0315-44db-b7e5-30aa6a17057c",
    //                 "Content-Type: application/json",
    //                 "Accept: application/json"
    //                 );
    //                 curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    //                 $data = array(
    //                 "firstName" => $name.IvfCenterLP,
    //                 "source"=>47561,
    //                 // "emails"=>[array(
    //                 // "type"=>"OFFICE",
    //                 // "value"=>$email,
    //                 // "primary"=>true)],
    //                 "requirementName"=>$age,
    //                 // "companyZipcode"=>$consultationName,
    //                 "companyState"=>$services,
                    
    //                 "phoneNumbers"=>[array(
    //                 "type"=>"MOBILE",
    //                 "code"=>"IN",
    //                 "value"=>$phone,
    //                 "dialCode"=>"+91",
    //                 "primary"=>true
    //                 )]
                    
    //                 );
    //                 $data_string = json_encode($data);
    //                 curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    //                 // $output contains the output string
    //                 $output = curl_exec($ch);
    //               // echo $output;
    //                 // close curl resource to free up system resources
    //                 curl_close($ch);
    //                 //echo $output;
                    
    //                 echo "yes";

?> 