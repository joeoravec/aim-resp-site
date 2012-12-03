<?php
	$isSubmitted = 0;
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		$isSubmitted = 1;
		$FROMMAIL = "sender@email.com";
		$MYEMAIL = "recipient@email.com"; 
		$SUBJECT = "ONLINE SERVICE REQUEST"; 
		$MESSAGE = "SERVICE REQUEST FORM\n\n"; 
		$MESSAGE .= "Claims Examiner: $claimsexaminer\n" . "Telephone: $cetelephone\n" . "Referral Source: $cerefsource\n" . "Fax: $cefax\n" . "Address: $ceaddress\n" . "City: $cecity " . "State: $cestate " . "Zip: $cezip\n\n" . "Defense Attorney: $cedefattorney\n" . "Address: $daaddress\n" . "Telephone: $datelephone\n" . "Fax: $dafax\n\n" . "EMPLOYEE INFORMATION \n" . "Employee Name: $eename\n" . "Claim Number: $eeclaimno\n" . "County: $eecountry\n" . "Address: $eeaddress\n" . "City: $eecity " . "State: $eestate " . "Zip: $eezip\n" . "Telephone: $eephone\n" . "DOI: $eedoi\n" . "Date of Birth: $eedob\n" . "Occupation: $eeoccupation\n\n" . "Plantiff Attorney: $plantiffattorney\n" . "Telephone: $paphone\n" . "Address: $paaddress\n" . "Physician: $eephysician\n" . "Diagnosis: $eediagnosis\n\n" . "EMPLOYER INFORMATION \n" . "Employer: $employer\n" . "Contact Person: $emcontact\n" . "Address: $emaddress\n" . "City: $emcity " . "State: $emstate " . "Zip: $emzip\n" . "Telephone: $emphone\n" . "Fax: $emfax\n" . "Email: $ememail\n\n" . "REFERRAL INFORMATION \n" . "Services Requested: "; 
		$servicelist = 0; 
		if ($service) { $MESSAGE .= "$service"; $servicelist = 1; } 
		if ($checkbox2) { if ($servicelist > 0) { $MESSAGE .= ", "; } $MESSAGE .= "$checkbox2"; $servicelist = 1; } 
		if ($checkbox3) { if ($servicelist > 0) { $MESSAGE .= ", "; } $MESSAGE .= "$checkbox3"; $servicelist = 1; } 
		if ($checkbox4) { if ($servicelist > 0) { $MESSAGE .= ", "; } $MESSAGE .= "$checkbox4"; $servicelist = 1; } 
		if ($checkbox5) { if ($servicelist > 0) { $MESSAGE .= ", "; } $MESSAGE .= "$checkbox5"; $servicelist = 1; } 
		if ($checkbox6) { if ($servicelist > 0) { $MESSAGE .= ", "; } $MESSAGE .= "$checkbox6"; $servicelist = 1; } 
		if ($checkbox7) { if ($servicelist > 0) { $MESSAGE .= ", "; } $MESSAGE .= "$checkbox7"; $servicelist = 1; } 
		if ($checkbox8) { if ($servicelist > 0) { $MESSAGE .= ", "; } $MESSAGE .= "$checkbox8"; $servicelist = 1; } 
		if ($checkbox9) { if ($servicelist > 0) { $MESSAGE .= ", "; } $MESSAGE .= "$checkbox9"; $servicelist = 1; } 
		if ($checkbox53) { if ($servicelist > 0) { $MESSAGE .= ", "; } $MESSAGE .= "$checkbox53"; $servicelist = 1; } 
		if ($checkbox54) { if ($servicelist > 0) { $MESSAGE .= ", "; } $MESSAGE .= "$checkbox54"; $servicelist = 1; } 
		if ($checkbox52) { if ($servicelist > 0) { $MESSAGE .= ", "; } $MESSAGE .= "$checkbox52: $other"; $servicelist = 1; } 
		$MESSAGE .= "\n\n"; 
		$MESSAGE .= "Special Instructions: $specinstr\n";  
		mail($MYEMAIL,$SUBJECT,$MESSAGE,"From: $FROMMAIL. \r\n");

		$servicesreq = $service .'|' . $checkbox2 .'|' . $checkbox3 .'|' . $checkbox4 .'|' . $checkbox5 .'|' . $checkbox6 .'|' . $checkbox7 .'|' . $checkbox8 .'|' . $checkbox9 .'|' . $checkbox53 .'|' . $checkbox54 .'|' . $checkbox52;
		$sql = "INSERT INTO t_referral (claimsexaminer, cetelephone, cerefsource, cefax, ceaddress, cecity, cestate, cezip, cedefattorney, daaddress, datelephone, dafax, eename, eeclaimno, eecountry, eeaddress, eecity, eestate, eezip, eephone, eedoi, eedob, eeoccupation, plantiffattorney, paphone, paaddress, eephysician, eediagnosis, employer, emcontact, emaddress, emcity, emstate, emzip, emphone, emfax, ememail, servicesreq, other, specinstr) VALUES (:claimsexaminer, :cetelephone, :cerefsource, :cefax, :ceaddress, :cecity, :cestate, :cezip, :cedefattorney, :daaddress, :datelephone, :dafax, :eename, :eeclaimno, :eecountry, :eeaddress, :eecity, :eestate, :eezip, :eephone, :eedoi, :eedob, :eeoccupation, :plantiffattorney, :paphone, :paaddress, :eephysician, :eediagnosis, :employer, :emcontact, :emaddress, :emcity, :emstate, :emzip, :emphone, :emfax, :ememail, :servicesreq, :other, :specinstr)";
		$q = $db_conn_rfs->prepare($sql);
		$q->execute(array(':claimsexaminer'=>$claimsexaminer, 
		':cetelephone'=>$cetelephone, 
		':cerefsource'=>$cerefsource, 
		':cefax'=>$cefax, 
		':ceaddress'=>$ceaddress, 
		':cecity'=>$cecity, 
		':cestate'=>$cestate, 
		':cezip'=>$cezip, 
		':cedefattorney'=>$cedefattorney, 
		':daaddress'=>$daaddress, 
		':datelephone'=>$datelephone, 
		':dafax'=>$dafax, 
		':eename'=>$eename, 
		':eeclaimno'=>$eeclaimno, 
		':eecountry'=>$eecountry, 
		':eeaddress'=>$eeaddress, 
		':eecity'=>$eecity, 
		':eestate'=>$eestate, 
		':eezip'=>$eezip, 
		':eephone'=>$eephone, 
		':eedoi'=>$eedoi, 
		':eedob'=>$eedob, 
		':eeoccupation'=>$eeoccupation, 
		':plantiffattorney'=>$plantiffattorney, 
		':paphone'=>$paphone, 
		':paaddress'=>$paaddress, 
		':eephysician'=>$eephysician, 
		':eediagnosis'=>$eediagnosis, 
		':employer'=>$employer, 
		':emcontact'=>$emcontact, 
		':emaddress'=>$emaddress, 
		':emcity'=>$emcity, 
		':emstate'=>$emstate, 
		':emzip'=>$emzip, 
		':emphone'=>$emphone, 
		':emfax'=>$emfax, 
		':ememail'=>$ememail, 
		':servicesreq'=>$servicesreq, 
		':other'=>$other, 
		':specinstr'=>$specinstr));
	}
?>