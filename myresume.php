<?php
 // Rect(x,y,500,1000,[D]);

 // Page header
if (!empty($_POST['submit'])) {
  // code...
   $files= $_FILES['imagefile'];

   $filename= $files['name'];
   $fileerror= $files['error'];
   $filetmp= $files['tmp_name'];
              // file extension checking
   $fileext= explode('.',$filename);
   $filecheck= strtolower(end($fileext));

   $fileextstored= array('jpg','jpeg','png');
   if (in_array($filecheck,$fileextstored)) {
  $f_name=$_POST['name'];
  $e_mail=$_POST['email'];
  $phno=$_POST['phn'];
  $address=$_POST['address'];
  $skill=$_POST['skill'];
  $languages=$_POST['languages'];
  $intrests=$_POST['intrests'];
  $institution=$_POST['institution'];
  $yearofpass=$_POST['yearofpass'];
  $tenthgpa=$_POST['tenthgpa'];
  $institutioninter=$_POST['institutioninter'];
  $yearofpassinter=$_POST['yearofpassinter'];
  $intermarks=$_POST['intermarks'];
  $institutionbtech=$_POST['institutionbtech'];
  $yearofpassbtech=$_POST['yearofpassbtech'];
  $btechmarks=$_POST['btechmarks'];
  $position=$_POST['position'];
  $workpalace=$_POST['workpalace'];
  $tymdur=$_POST['tymdur'];
  $cmpnydisc=$_POST['cmpnydisc'];
  $achievements=$_POST['achievements'];
  $certificates=$_POST['certificates'];
  $projects=$_POST['projects'];
  $descriptionabtprject=$_POST['descriptionabtprject'];
  $achievement=$_POST['achievement'];
  $descriptionachieve=$_POST['descriptionachieve'];
  $fileNameNew= $f_name.".".$filecheck;
  $destinationfile='images/' .$fileNameNew;
  move_uploaded_file($filetmp,$destinationfile);
}
}

include('library/tcpdf.php');
//make tcpdf Object
$pdf = new TCPDF('p', 'mm','A4');
// remove header and footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

$pdf->AddPage();

$pdf->SetFont("Merriweather Sans","B",20);
$pdf->SetTextColor(255,255,255);
// $pdf->WriteHTMLCell(160,30,60,8,$f_name,1,1);
$pdf->SetFillColor(95,158,160);
$pdf->SetXY(65,8);
$pdf->Cell(160,25,strtoupper("$f_name"),0,1,'L',1);

$pdf->SetTextColor(0,0,0);
$pdf->Image("images/$f_name.jpg", 7, 8,'',30, 'JPG', '','',true);

$pdf->SetFont("Merriweather Sans","I",8.25);
$pdf->Image("ProjectImages/email.png", 7,40, 6, '', 'PNG', '', '', true);
$pdf->WriteHTMLCell(48,'',7,46,$e_mail,0,1);
$pdf->Ln(1);
$pdf->Image("ProjectImages/mobile.png", 7,'', 6, '', 'PNG', '', '', true);
$pdf->WriteHTMLCell(48,'',7,60,$phno,0,1);
$pdf->Ln(1);
$pdf->Image("ProjectImages/location.png", 7,'', 6, '', 'PNG', '', '', true);
$pdf->WriteHTMLCell(48,'',7,73,$address,0,1);
$pdf->Ln(2);
$pdf->SetFont("Merriweather Sans","B",14);
$pdf->SetTextColor(95,158,160);
$pdf->WriteHTMLCell(48,8,7,'',"SKILLS :",'B',1);
$pdf->Ln(1);
$pdf->SetFont("Merriweather Sans","I",10);
$pdf->SetTextColor(0,0,0);
$pdf->WriteHTMLCell(48,'',7,'',$skill,0,1);
$pdf->Ln(2);

$pdf->SetFont("Merriweather Sans","B",14);
$pdf->SetTextColor(95,158,160);
$pdf->WriteHTMLCell(48,8,7,'',"LANGUAGES :",'B',1);

$pdf->SetFont("Merriweather Sans","I",10);
$pdf->SetTextColor(0,0,0);
$pdf->WriteHTMLCell(48,'',7,'',$languages,0,1);
$pdf->Ln(2);

$pdf->SetFont("Merriweather Sans","B",15);
$pdf->SetTextColor(95,158,160);
$pdf->WriteHTMLCell(48,8,7,'',"INTRESTS :",'B',1);

$pdf->SetFont("Merriweather Sans","I",10);
$pdf->SetTextColor(0,0,0);
$pdf->WriteHTMLCell(48,'',7,'',$intrests,0,1);
$pdf->Ln();

$pdf->SetFont("Merriweather Sans","B",15);
$pdf->SetTextColor(95,158,160);
$pdf->WriteHTMLCell(120,8,65,35,"EDUCATION :",'B',1);
$pdf->Ln(1);

$pdf->SetFont("Merriweather Sans","B",12);
$pdf->SetTextColor(95,158,160);
$pdf->WriteHTMLCell(120,8,65,'',"TENTH ",'0',1);
$pdf->Ln(0);

$pdf->SetFont("Merriweather Sans","I",10);
$pdf->SetTextColor(95,158,160);
$pdf->WriteHTMLCell(120,8,65,'',"Institution/Place of Education :",'0',0);

$pdf->SetFont("Merriweather Sans","I",10);
$pdf->SetTextColor(0,0,0);
$pdf->WriteHTMLCell(87,'',115,'', $institution,0,1);
$pdf->Ln(1);

$pdf->SetFont("Merriweather Sans","I",10);
$pdf->SetTextColor(95,158,160);
$pdf->WriteHTMLCell(120,8,65,'',"Year of passed out :",'0',0);

$pdf->SetFont("Merriweather Sans","I",10);
$pdf->SetTextColor(0,0,0);
$pdf->WriteHTMLCell(120,'',115,'', $yearofpass,'0',1);
$pdf->Ln(1);

$pdf->SetFont("Merriweather Sans","I",10);
$pdf->SetTextColor(95,158,160);
$pdf->WriteHTMLCell(120,8,65,'',"Marks Scored :",'0',0);

$pdf->SetFont("Merriweather Sans","I",10);
$pdf->SetTextColor(0,0,0);
$pdf->WriteHTMLCell(120,'',115,'', "$tenthgpa/10",'0',1);
$pdf->Ln(2);

$pdf->SetFont("Merriweather Sans","B",12);
$pdf->SetTextColor(95,158,160);
$pdf->WriteHTMLCell(120,8,65,'',"INTERMEDIATE ",'0',1);
$pdf->Ln(0);

$pdf->SetFont("Merriweather Sans","I",10);
$pdf->SetTextColor(95,158,160);
$pdf->WriteHTMLCell(120,8,65,'',"Institution/Place of Education :",'0',0);

$pdf->SetFont("Merriweather Sans","I",10);
$pdf->SetTextColor(0,0,0);
$pdf->WriteHTMLCell(87,'',115,'', $institutioninter,0,1);
$pdf->Ln(1);

$pdf->SetFont("Merriweather Sans","I",10);
$pdf->SetTextColor(95,158,160);
$pdf->WriteHTMLCell(120,8,65,'',"Year of passed out :",'0',0);

$pdf->SetFont("Merriweather Sans","I",10);
$pdf->SetTextColor(0,0,0);
$pdf->WriteHTMLCell(120,'',115,'', $yearofpassinter,'0',1);
$pdf->Ln(1);

$pdf->SetFont("Merriweather Sans","I",10);
$pdf->SetTextColor(95,158,160);
$pdf->WriteHTMLCell(120,8,65,'',"Marks Scored :",'0',0);

$pdf->SetFont("Merriweather Sans","I",10);
$pdf->SetTextColor(0,0,0);
$pdf->WriteHTMLCell(120,'',115,'', "$intermarks/1000",'0',1);
$pdf->Ln(2);

$pdf->SetFont("Merriweather Sans","B",12);
$pdf->SetTextColor(95,158,160);
$pdf->WriteHTMLCell(120,8,65,'',"BACHELOR'S DEGREE(B.TECH) ",'0',1);
$pdf->Ln(0);

$pdf->SetFont("Merriweather Sans","I",10);
$pdf->SetTextColor(95,158,160);
$pdf->WriteHTMLCell(120,8,65,'',"Institution/Place of Education :",'0',0);

$pdf->SetFont("Merriweather Sans","I",10);
$pdf->SetTextColor(0,0,0);
$pdf->WriteHTMLCell(87,'',115,'', $institutionbtech,0,1);
$pdf->Ln(1);

$pdf->SetFont("Merriweather Sans","I",10);
$pdf->SetTextColor(95,158,160);
$pdf->WriteHTMLCell(120,8,65,'',"Year of passed out :",'0',0);

$pdf->SetFont("Merriweather Sans","I",10);
$pdf->SetTextColor(0,0,0);
$pdf->WriteHTMLCell(120,'',115,'', $yearofpassbtech,'0',1);
$pdf->Ln(1);

$pdf->SetFont("Merriweather Sans","I",10);
$pdf->SetTextColor(95,158,160);
$pdf->WriteHTMLCell(120,8,65,'',"Marks Scored :",'0',0);

$pdf->SetFont("Merriweather Sans","I",10);
$pdf->SetTextColor(0,0,0);
$pdf->WriteHTMLCell(120,'',115,'', "$btechmarks/10",'0',1);
$pdf->Ln(2);

$pdf->SetFont("Merriweather Sans","B",15);
$pdf->SetTextColor(95,158,160);
$pdf->WriteHTMLCell(120,8,65,'',"WORK EXPERIENCE :",'B',1);
$pdf->Ln(1);

$pdf->SetFont("Merriweather Sans","B",12);
$pdf->SetTextColor(95,158,160);
$pdf->WriteHTMLCell(120,'',65,'',strtoupper("$position"),'0',1);
$pdf->Ln(1);

$pdf->SetFont("Merriweather Sans","B",9);
$pdf->SetTextColor(0,0,0);
$pdf->WriteHTMLCell(120,'',65,'',strtoupper($workpalace),'0',1);
$pdf->Ln(1);

$pdf->SetFont("Merriweather Sans","I",10);
$pdf->SetTextColor(95,158,160);
$pdf->WriteHTMLCell(120,8,65,'',"WORK DURATION :",'0',0);

$pdf->SetFont("Merriweather Sans","I",10);
$pdf->SetTextColor(0,0,0);
$pdf->WriteHTMLCell(120,'',115,'', $tymdur,'0',1);
$pdf->Ln(1);

$pdf->SetFont("Merriweather Sans","I",10);
$pdf->SetTextColor(95,158,160);
$pdf->WriteHTMLCell(120,8,65,'',"My Views about Organisation :",'0',0);

$pdf->SetFont("Merriweather Sans","I",10);
$pdf->SetTextColor(0,0,0);
$pdf->WriteHTMLCell(87,'',115,'', $cmpnydisc,'0',1);
$pdf->Ln(2);

$pdf->SetFont("Merriweather Sans","B",15);
$pdf->SetTextColor(95,158,160);
$pdf->WriteHTMLCell(120,8,65,'',"CERTIFICATES :",'B',1);
$pdf->Ln(1);

$pdf->SetFont("Merriweather Sans","I",10);
$pdf->SetTextColor(95,158,160);
$pdf->WriteHTMLCell(120,8,65,'',"Certificates gained :",'0',0);

$pdf->SetFont("Merriweather Sans","I",10);
$pdf->SetTextColor(0,0,0);
$pdf->WriteHTMLCell(87,'',115,'', $certificates,'0',1);
$pdf->Ln(2);
$pdf->Ln(2);
$pdf->SetFont("Merriweather Sans","B",15);
$pdf->SetTextColor(95,158,160);
$pdf->WriteHTMLCell(120,8,65,'',"PERSONAL PROJECTS :",'B',1);
$pdf->Ln(1);

$pdf->SetFont("Merriweather Sans","I",10);
$pdf->SetTextColor(95,158,160);
$pdf->WriteHTMLCell(120,8,65,'',"My project Name :",'0',0);

$pdf->SetFont("Merriweather Sans","I",10);
$pdf->SetTextColor(0,0,0);
$pdf->WriteHTMLCell(87,'',115,'', $projects,'0',1);
$pdf->Ln(1);

$pdf->SetFont("Merriweather Sans","I",10);
$pdf->SetTextColor(95,158,160);
$pdf->WriteHTMLCell(120,8,65,'',"My Project Description :",'0',0);

$pdf->SetFont("Merriweather Sans","I",10);
$pdf->SetTextColor(0,0,0);
$pdf->WriteHTMLCell(87,'',115,'', $descriptionabtprject,'0',1);
$pdf->Ln(2);
$pdf->SetFont("Merriweather Sans","B",15);
$pdf->SetTextColor(95,158,160);
$pdf->WriteHTMLCell(120,8,65,'',"ACHIEVEMENTS :",'B',1);
$pdf->Ln(1);

$pdf->SetFont("Merriweather Sans","I",10);
$pdf->SetTextColor(95,158,160);
$pdf->WriteHTMLCell(120,8,65,'',"My achievement :",'0',0);

$pdf->SetFont("Merriweather Sans","I",10);
$pdf->SetTextColor(0,0,0);
$pdf->WriteHTMLCell(87,'',115,'', $achievement,'0',1);
$pdf->Ln(1);

$pdf->SetFont("Merriweather Sans","I",10);
$pdf->SetTextColor(95,158,160);
$pdf->WriteHTMLCell(120,8,65,'',"Description :",'0',0);

$pdf->SetFont("Merriweather Sans","I",10);
$pdf->SetTextColor(0,0,0);
$pdf->WriteHTMLCell(87,'',115,'', $descriptionachieve,'0',1);
$pdf->Ln(1);


$pdf->Output();
 ?>
