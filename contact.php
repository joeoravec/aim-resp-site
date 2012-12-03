<?php
    include('conn_rfs.php');
    include('mail_rfs.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alliance Impairment Management</title>
    <meta name="description" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="http://aimcminc.com/favicon.ico">
    <link rel="apple-touch-icon" href="http://aimcminc.com/apple-touch-icon.png" />
    <link rel="apple-touch-icon-precomposed" href="http://aimcminc.com/apple-touch-icon-57x57-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://aimcminc.com/apple-touch-icon-72x72-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://aimcminc.com/apple-touch-icon-114x114-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://aimcminc.com/apple-touch-icon-114x114-precomposed.png" />

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
<div id="wrap">
    <div class="navbar hidden-desktop hidden-tablet">
        <div class="navbar-inner">
            <div class="container">
                <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </a>
                <div class="nav-collapse">
                    <div class="nav-mobile">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About AIM</a></li>
                            <li><a href="services.php">Services</a></li>
                            <li><a href="partners.php">Partners</a></li>
                            <!--<li><a href="#">Clients</a></li>-->
                            <li><a href="contact.php">Request Info</a></li>
                         </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div id="headtrim" class="hidden-phone hidden-tablet">
    <div class="container">
        <div class="row-fluid">
            <div class="span12" id="headtrimcontent">
                <a href="mailto:info@aimcminc.com">info@aimcminc.com</a> | (717) 239-0500 | (866) 308-9600 | <a href="https://www.aimcminc.com/cmapp">Case Manager Access</a>
            </div>
        </div>
    </div>
</div>
<div id="headhome">
    <div class="container">
        <div class="row-fluid">
            <div class="span6 logo-sub">
                <span class="hide-text">Alliance Impairment Management</span>
            </div>
        </div>
    </div>
</div>

<div id="headnav" class="hidden-phone">
    <div class="container">
        <div class="row-fluid">
            <div class="span12">
                <div id="headnavcontent">
                    <ul>
                        <li><a href="index.php" id="headnavhome">Home</a></li>
                        <li><a href="about.php" id="headnavabout">About AIM</a></li>
                        <li><a href="services.php" id="headnavservices">Services</a></li>
                        <li><a href="partners.php" id="headnavpartners">Partners</a></li>
                        <!--<li><a href="#">Clients</a></li>-->
                        <li><a href="contact.php" id="headnavcontact">Request Info</a></li>
                     </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="subcontainer">
<div class="container">
    <div class="row-fluid">
        <div class="span8 homemain clearfix" id="maincontent">
        <h1>Service Request</h1>
            <p>To learn more about how Alliance Impairment Management can meet your case management needs, please contact us using the information at the right or complete our Service Request Form below.</p>
            <form name="serviceRequestForm" method="post" action="contact.php">
            <?php
                if ($isSubmitted == 1) {
            ?>
                <fieldset>     
                    <legend>Request Submitted</legend>
                    <p style="padding-left: 10px; padding-right: 10px;">Thank you for submitting your request. We will review the information provided and follow up as soon as possible. A copy of your request is provided below.</p>     
                </fieldset>
            <?php
                }
            ?>
                <fieldset>     
                    <legend>Contact Details</legend>     
                        <ol>     
                            <li>     
                                <label for="claimsexaminer">Claims Examiner:</label>     
                                <input name="claimsexaminer" id="claimsexaminer" value="<?= $claimsexaminer ?>" class="text" type="text" />     
                            </li>     
                            <li>     
                                <label for="cetelephone">Telephone:</label>     
                                <input name="cetelephone" id="cetelephone" value="<?= $cetelephone ?>" class="text" type="tel" />     
                            </li>     
                            <li>     
                                <label for="cerefsource">Referral Source:</label>     
                                <input name="cerefsource" id="cerefsource" value="<?= $cerefsource ?>" class="text" type="text" />     
                            </li>     
                            <li>     
                                <label for="cefax">Fax:</label>     
                                <input name="cefax" id="cefax" value="<?= $cefax ?>" class="text" type="tel" />     
                            </li>     
                            <li>     
                                <label for="ceaddress">Address:</label>     
                                <textarea name="ceaddress" id="ceaddress" class="text"><?= $ceaddress ?></textarea>     
                            </li>     
                            <li>     
                                <label for="cecity">City:</label>     
                                <input name="cecity" id="cecity" value="<?= $cecity ?>" class="text" type="text" />     
                            </li>     
                            <li>     
                                <label for="cestate">State:</label>     
                                <input name="cestate" id="cestate" value="<?= $cestate ?>" class="text" type="text" />     
                            </li>     
                            <li>     
                                <label for="cezip">Zip Code:</label>     
                                <input name="cezip" id="cezip" value="<?= $cezip ?>" class="text" type="text" />     
                            </li>     
                            <li>     
                                <label for="cedefattorney">Defense Attorney:</label>     
                                <input name="cedefattorney" id="cedefattorney" value="<?= $cedefattorney ?>" class="text" type="text" />     
                            </li>     
                            <li>     
                                <label for="daaddress">Address:</label>     
                                <textarea name="daaddress" id="daaddress" class="text" ><?= $daaddress ?></textarea>     
                            </li>     
                            <li>     
                                <label for="datelephone">Telephone:</label>     
                                <input name="datelephone" id="datelephone" value="<?= $datelephone ?>" class="text" type="tel" />     
                            </li>     
                            <li>     
                                <label for="dafax">Fax:</label>     
                                <input name="dafax" id="dafax" value="<?= $dafax ?>" class="text" type="tel" />     
                            </li>      
                        </ol>     
                </fieldset>    
                <fieldset>     
                    <legend>Employee Information</legend>     
                    <ol>     
                            <li>     
                                <label for="eename">Name:</label>     
                                <input name="eename" id="eename" value="<?= $eename ?>" class="text" type="text" />     
                            </li>     
                            <li>     
                                <label for="eeclaimno">Claim #:</label>     
                                <input name="eeclaimno" id="eeclaimno" value="<?= $eeclaimno ?>" class="text" type="text" />     
                            </li>     
                            <li>     
                                <label for="eecountry">County:</label>     
                                <input name="eecountry" id="eecountry" value="<?= $eecountry ?>" class="text" type="text" />     
                            </li>     
                            <li>     
                                <label for="eeaddress">Address:</label>     
                                <textarea name="eeaddress" id="eeaddress" class="text" ><?= $eeaddress ?></textarea>     
                            </li>     
                            <li>     
                                <label for="eecity">City:</label>     
                                <input name="eecity" id="eecity" value="<?= $eecity ?>" class="text" type="text" />     
                            </li>     
                            <li>     
                                <label for="eestate">State:</label>     
                                <input name="eestate" id="eestate" value="<?= $eestate ?>" class="text" type="text" />     
                            </li>     
                            <li>     
                                <label for="eezip">Zip Code:</label>     
                                <input name="eezip" id="eezip" value="<?= $eezip ?>" class="text" type="text" />     
                            </li>     
                            <li>     
                                <label for="eephone">Telephone:</label>     
                                <input name="eephone" id="eephone" value="<?= $eephone ?>" class="text" type="tel" />     
                            </li>     
                            <li>     
                                <label for="eedoi">DOI:</label>     
                                <input name="eedoi" id="eedoi" value="<?= $eedoi ?>" class="text" type="date" />     
                            </li>     
                            <li>     
                                <label for="eedob">Date of Birth:</label>     
                                <input name="eedob" id="eedob" value="<?= $eedob ?>" class="text" type="date" />     
                            </li>     
                            <li>     
                                <label for="eeoccupation">Occupation:</label>     
                                <input name="eeoccupation" id="eeoccupation" value="<?= $eeoccupation ?>" class="text" type="text" />     
                            </li>     
                            <li>     
                                <label for="plantiffattorney">Plantiff Attorney:</label>     
                                <input name="plantiffattorney" id="plantiffattorney" value="<?= $plantiffattorney ?>" class="text" type="text" />     
                            </li>     
                            <li>     
                                <label for="paphone">Telephone:</label>     
                                <input name="paphone" id="paphone" value="<?= $paphone ?>" class="text" type="tel" />     
                            </li>     
                            <li>     
                                <label for="paaddress">Address:</label>     
                                <textarea name="paaddress" id="paaddress" class="text" ><?= $paaddress ?></textarea>
                            </li>     
                            <li>     
                                <label for="eephysician">Physician:</label>     
                                <input name="eephysician" id="eephysician" value="<?= $eephysician ?>" class="text" type="text" />     
                            </li>     
                            <li>     
                                <label for="eediagnosis">Diagnosis:</label>     
                                <input name="eediagnosis" id="eediagnosis" value="<?= $eediagnosis ?>" class="text" type="text" />     
                            </li>     
                    </ol>     
                </fieldset>    
                <fieldset>     
                    <legend>Employer Information</legend>     
                    <ol>     
                            <li>     
                                <label for="employer">Employer:</label>     
                                <input name="employer" id="employer" value="<?= $employer ?>" class="text" type="text" />     
                            </li>  
                            <li>     
                                <label for="emcontact">Contact Person:</label>     
                                <input name="emcontact" id="emcontact" value="<?= $emcontact ?>" class="text" type="tel" />     
                            </li>  
                            <li>     
                                <label for="emaddress">Address:</label>     
                                <textarea name="emaddress" id="emaddress" class="text" ><?= $emaddress ?></textarea>     
                            </li>  
                            <li>     
                                <label for="emcity">City:</label>     
                                <input name="emcity" id="emcity" value="<?= $emcity ?>" class="text" type="text" />     
                            </li>  
                            <li>     
                                <label for="emstate">State:</label>     
                                <input name="emstate" id="emstate" value="<?= $emstate ?>" class="text" type="text" />     
                            </li>  
                            <li>     
                                <label for="emzip">Zip Code:</label>     
                                <input name="emzip" id="emzip" value="<?= $emzip ?>" class="text" type="text" />     
                            </li>  
                            <li>     
                                <label for="emphone">Telephone:</label>     
                                <input name="emphone" id="emphone" value="<?= $emphone ?>" class="text" type="tel" />     
                            </li>  
                            <li>     
                                <label for="emfax">Fax:</label>     
                                <input name="emfax" id="emfax" value="<?= $emfax ?>" class="text" type="tel" />     
                            </li>  
                            <li>     
                                <label for="ememail">Email:</label>     
                                <input name="ememail" id="ememail" value="<?= $ememail ?>" class="text" type="email" />     
                            </li>     
                    </ol>     
                </fieldset>    
                <fieldset>     
                    <legend>Referral Information</legend>     
                    <ol>     
                        <li>   
                            <fieldset>        
                                <legend>Services Requested:</legend>        
                                <ol>        
                                    <li>        
                                        <input name="service" id="service" value="Medical Case Management" type="checkbox" class="checkbox" <?php if ($service) { echo "checked"; } ?> />        
                                        <label for="service">Medical Case Management</label>        
                                    </li>        
                                    <li>        
                                        <input id="checkbox6" name="checkbox6" value="Medical Reserve Analysis/Medical Bill Audits" type="checkbox" class="checkbox" <?php if ($checkbox6) { echo "checked"; } ?> />        
                                        <label for="checkbox6">Medical Reserve Analysis/Medical Bill Audits</label>        
                                    </li>        
                                    <li>        
                                        <input id="checkbox2" name="checkbox2" value="Life Care Planning" type="checkbox" class="checkbox" <?php if ($checkbox2) { echo "checked"; } ?> />        
                                        <label for="checkbox2">Life Care Planning</label>        
                                    </li>        
                                    <li>        
                                        <input id="checkbox3" name="checkbox3" value="IME Coordination" type="checkbox" class="checkbox" <?php if ($checkbox3) { echo "checked"; } ?> />        
                                        <label for="checkbox3">IME Coordination</label>        
                                    </li>        
                                    <li>        
                                        <input id="checkbox7" name="checkbox7" value="Earning Power Assessment" type="checkbox" class="checkbox" <?php if ($checkbox7) { echo "checked"; } ?> />        
                                        <label for="checkbox7">Earning Power Assessment</label>        
                                    </li>        
                                    <li>        
                                        <input id="checkbox4" name="checkbox4" value="File Review" type="checkbox" class="checkbox" <?php if ($checkbox4) { echo "checked"; } ?> />        
                                        <label for="checkbox4">File Review</label>        
                                    </li>        
                                    <li>        
                                        <input id="checkbox5" name="checkbox5" value="Medicare Set-Aside" type="checkbox" class="checkbox" <?php if ($checkbox5) { echo "checked"; } ?> />        
                                        <label for="checkbox5">Medicare Set-Aside</label>        
                                    </li>        
                                    <li>        
                                        <input id="checkbox53" name="checkbox53" value="LTD Case Management" type="checkbox" class="checkbox" <?php if ($checkbox53) { echo "checked"; } ?> />        
                                        <label for="checkbox53">LTD Case Management</label>        
                                    </li>        
                                    <li>        
                                        <input id="checkbox54" name="checkbox54" value="Long Term Care Case Management" type="checkbox" class="checkbox" <?php if ($checkbox54) { echo "checked"; } ?> />        
                                        <label for="checkbox54">Long Term Care Case Management</label>        
                                    </li>        
                                    <li>        
                                        <input name="checkbox52" value="Other" type="checkbox" class="checkbox" <?php if ($checkbox52) { echo "checked"; } ?> />        
                                        <label for="other">Other: &nbsp; <input name="other" class="text" id="other" value="<?= $other ?>" type="text"></label>        
                                    </li>                                       
                                </ol> 
                                <br style="clear: both;" />       
                            </fieldset>                          
                        </li>
                        <li>     
                            <label for="specinstr">Special Instructions:</label>     
                            <textarea name="specinstr" id="specinstr"  class="text"><?= $specinstr ?></textarea>
                        </li>       
                    </ol>     
                </fieldset>    
                <div class="homebutton" style="">
                    <a href="contact.php" id="submitRFS">Submit Service Request</a>
                </div>
            </form>
        </div>
        <div class="span4 homemain clearfix">
            <div id="homerequest" class="clearfix">
                <h1>Contact Us</h1>
                <p>Mailing Address:<br />
                PO Box 1557<br />
                Lancaster PA 17608-1557</p>
                <p>Telephone:<br />
                (717) 239-0500<br />
                (866) 308-9600</p>
                <p>Fax: <br />
                (717) 239-0660</p>
            </div>
        </div>
    </div>
</div>
</div>

</div>

<div id="footer">
<div class="container">
    <div class="row-fluid">
        <div class="span6 hidden-phone">
            <div id="footernav">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About AIM</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="partners.php">Partners</a></li>
                    <li><a href="contact.php">Request Info</a></li>
                </ul>
            </div>
        </div>
        <div class="span6">
            <div id="footertext">
                <a href="mailto:info@aimcminc.com">info@aimcminc.com</a> | (717) 239-0500 | (866) 308-9600</div>

            </div>
        </div>
    </div>
</div>
</div>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-collapse.js"></script>
<script>
    $(document).ready(function() {
        $('#headnavcontact').addClass('headnavactive');
        $('#submitRFS').on('click', function(e){
            e.preventDefault();
            document.serviceRequestForm.submit();
        });
    });
</script>
</body>
</html>