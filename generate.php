<?php 
// echo "<pre>";
// var_dump($_POST);
// echo"</pre>";

require_once('vendor/autoload.php');
require_once('Helper.php');
use setasign\Fpdi\Fpdi;

$pdf= new Fpdi();

$required_fields = [
    "fullname",
    "email",
    "mobilenumbers",
    "complete_address",
    "career_objective",
    "primary",
    "secondary_jhs",
    "secondary_shs",
    "tertiary",
    "skill1",
    "skill2",
    "skill3",
    "skill4",
    "skill5",
    "training1",
    "training2",
    "training3",
    "training4",
    "fathername",
    "mothername",
    "gender",
    "civil_status",
    "date_of_birth",
    "age",
    "nationality",
    "religion",
    "languages_known",
    "image",
    "signature"
];
$undefined_keys = [];
foreach($_POST as $key => $value){
    if(!in_array($key,$required_fields)){
        $undefined_keys[$key] = '';
    }
}

$_POST = array_merge($_POST,$undefined_keys);

// Check if the image file was uploaded successfully
if ($_FILES['image']['error'] === UPLOAD_ERR_OK && $_FILES['signature']['error'] === UPLOAD_ERR_OK) {
    $formal_image = $_FILES['image']['tmp_name'];
    $signature = $_FILES['signature']['tmp_name'];

    $image_path1 = "images/formal_pic.jpg";
    $image_path2 = "images/signature.png";

    move_uploaded_file($formal_image, $image_path1);
    move_uploaded_file($signature, $image_path2);

}
function GetMultiCellHeight($w, $txt, $pdf)
{
    $height = 1;
    $strlen = strlen($txt);
    $wdth = 0;
    for ($i = 0; $i <= $strlen; $i++) {
        $char = substr($txt, $i, 1);
        $wdth += $pdf->GetStringWidth($char);
        if($char == "\n"){
            $height++;
            $wdth = 0;
        }
        if($wdth >= $w){
            $height++;
            $wdth = 0;
        }
    }
    return $height;
}

// add a page
$pdf->AddPage();

// set the source file
$pdf->setSourceFile('CV-FORMAT.pdf');
// import page 1
$page1 = $pdf->importPage(1);
$pdf_size = $pdf->getTemplateSize($page1);
$pdf->useTemplate($page1, 0, 0, $pdf_size['width'],$pdf_size['height']);


$pdf->SetAutoPageBreak(false);

// now write some text above the imported page
$pdf->SetFont('Arial','U',15);
$pdf->SetTextColor(0, 0, 0);

//Fullname
$pdf->SetXY(24.5,30);
$pdf->Write(0,strtoupper($_POST['fullname']));

$pdf->SetFont('Arial','',10);
$pdf->SetTextColor(0, 0, 0);

//Email
$pdf->SetXY(35,34);
$pdf->Write(0,$_POST['email']);

//Mobile Numbers
$pdf->SetXY(44.5,39);
$pdf->Write(0,$_POST['mobilenumbers']);

//Complete Address
$pdf->SetXY(39,43.5);
$pdf->Write(0,$_POST['complete_address']);

//1x1 picture
$pdf->Image('images/formal_pic.jpg',160.2,18.8,25.7,25.7);


//Career Objective
$pdf->SetXY(31,62);
$line_height = 1.8;
$text_width = 156;
$career_text = ($_POST['career_objective']);    
$career_height = (ceil(($pdf->GetStringWidth($career_text) / $text_width)) * $line_height);
$pdf->MultiCell($text_width,$career_height,$career_text,0,'J');

//Educational Attainment
//Primary
$pdf->SetXY(31,78);
$height = 1.8;
$width = 156;
$text = ($_POST['primary']);      
$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $height);
$pdf->MultiCell($width,$height,$text,0,'J');

//Secondary
//JHS
$pdf->SetXY(31,87);
$height = 1.8;
$width = 156;
$text = ($_POST['secondary_jhs']);       
$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $height);
$pdf->MultiCell($width,$height,$text,0,'J');

//SHS
$pdf->SetXY(31,95.5);
$height = 1.9;
$width = 156;
$text = ($_POST['secondary_shs']);      
$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $height);
$pdf->MultiCell($width,$height,$text,0,'J');

//Tertiary
$pdf->SetXY(31,104.5);
$height = 1.9;
$width = 156;
$text = ($_POST['tertiary']);    
    
$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $height);
$pdf->MultiCell($width,$height,$text,0,'J');


//SKILLS
//1
$pdf->SetXY(31,120);
$height = 1.9;
$width = 156;
$text = ($_POST['skill1']);    
    
$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $height);
$pdf->MultiCell($width,$height,$text,0,'J');

//2
$pdf->SetXY(31,128.8);
$height = 1.9;
$width = 156;
$text = ($_POST['skill2']);     
    
$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $height);
$pdf->MultiCell($width,$height,$text,0,'J');

//3
$pdf->SetXY(31,138);
$height = 1.9;
$width = 156;
$text = ($_POST['skill3']);   

$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $height);
$pdf->MultiCell($width,$height,$text,0,'J');

//4
$pdf->SetXY(31,147);
$height = 1.9;
$width = 156;
$text = ($_POST['skill4']);   

$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $height);
$pdf->MultiCell($width,$height,$text,0,'J');

//Trainings and Seminars
//1
$pdf->SetXY(31,162);
$height = 1.9;
$width = 156;
$text = ($_POST['training1']);    
    
$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $height);
$pdf->MultiCell($width,$height,$text,0,'J');

//2
$pdf->SetXY(31,171);
$height = 1.9;
$width = 156;
$text = ($_POST['training2']);     
    
$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $height);
$pdf->MultiCell($width,$height,$text,0,'J');

//3
$pdf->SetXY(31,179);
$height = 1.9;
$width = 156;
$text = ($_POST['training3']);      
    
$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $height);
$pdf->MultiCell($width,$height,$text,0,'J');

//4
$pdf->SetXY(31,189.3);
$height = 1.9;
$width = 156;
$text = ($_POST['training4']);    
    
$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $height);
$pdf->MultiCell($width,$height,$text,0,'J');

//PERSONAL INFORMATION
//Fathers Name
$pdf->SetXY(65,204.5);
$pdf->Write(0,$_POST['fathername']);

//Mothers Name
$pdf->SetXY(65,210);
$pdf->Write(0,$_POST['mothername']);

//Gender
$pdf->SetXY(65,215.5);
$pdf->Write(0,$_POST['gender']);

//Civil Status
$pdf->SetXY(65,221);
$pdf->Write(0,$_POST['civil_status']);

//Date of Birth
$pdf->SetXY(65,226);
$pdf->Write(0,date("M j, Y",strtotime($_POST['date_of_birth'])));

//Age
$pdf->SetXY(65,231.5);
$pdf->Write(0,$_POST['age']);

//Nationality
$pdf->SetXY(65,237);
$pdf->Write(0,$_POST['nationality']);

//Religion
$pdf->SetXY(65,242.5);
$pdf->Write(0,$_POST['religion']);

//Languages Known
$pdf->SetXY(65,249);
$pdf->Write(0,$_POST['languages_known']);

//Declaration
//Name
$pdf->SetFont('Arial','',8);
$pdf->SetXY(150,274);
$pdf->Write(0,strtoupper($_POST['fullname']));

//Signature
$pdf->Image('images/signature.png',162,261,15,18);

$pdf->Output('I','CV-FORMAT.pdf');
?>