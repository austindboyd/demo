
<?php
// NOte about this file. The database post and email are working however the formating for the email nor the tabbing order are in place.  This file was corrected after it appeared to have some issues. 862011

// THIS FILE UPDATED 2-17-2014 - ADDED GMAIL ADDRESS TO SOLVE FAILED SUBMISSION ISSUES. Checking with AOL on address blacklist.

//Two file includes - both of these files include PHP functions.
//We do this so we can use these functions on mutliple pages.
include("form/includes/common_functions.php");
include("form/includes/dbase_functions.php");
?>

<?php ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>West Virginia School of Preaching</title>
<script language="javascript">AC_FL_RunContent = 0;</script>
<script src="AC_RunActiveContent.js" language="javascript"></script>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="sidenavigation.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="sidebarnav.js"></script>
<?php include("googletracking.php"); ?>
<!--Preload-->
<SCRIPT TYPE="text/javascript" LANGUAGE="javascript">  
<!-- PreLoad Wait - Script --> 
<!-- This script and more from http://www.rainbow.arch.scriptmania.com 
 
function waitPreloadPage() { //DOM
if (document.getElementById){
document.getElementById('prepage').style.visibility='hidden';
}else{
if (document.layers){ //NS4
document.prepage.visibility = 'hidden';
}
else { //IE4
document.all.prepage.style.visibility = 'hidden';
}
}
}
// End --> 
</SCRIPT>
<!--End Preload-->
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" class="oneColElsCtrHdr">
<div id="headercontainer">
  <div id="centerHeader"> <a href="index.php" target="_self"><img src="images/logo_top.jpg" alt="header" width="197" height="128" border="0" /></a> <img  style="margin-bottom:22px"src="images/wvsop-text.gif" width="464" height="54" alt="School of Preaching" /> </div>
</div>
<div id="all">
  <div id="container">
    <div id="sidebarNav">
      <div id="sidebarNavMenu">
        <?php include("sidenavigation.php"); ?>
        <a href="enrollment-application.php"><img src="images/apply.gif" width="177" height="53" border="0" style="margin-top:18px"/></a>
        <div style="color:white; font-family: arial, sans-serif;font-size: 9px;letter-spacing: 0.6pt; padding-left:16px; padding-top:16px; text-align:left; "> West Virginia School of Preaching<br />
          Fourth Street & Willard Avenue<br />
          P.O. Box 785 <br />
          Moundsville, WV. 26041<br />
          <br />
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="24%"><strong>Phone:</strong></td>
              <td width="76%">(888) 418-4573</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>(304) 845-8001</td>
            </tr>
          </table>
        </div>
      </div>
      <img src="images/fadeoff.png" width="197" height="77" alt="fade" /> </div>
    <?php include("topnavigation.php"); ?>
    <div id="six">
      <h2>Enrollment Application Form</h2>
      <p> If you have difficulty with our online form, or simply prefer to send a printed application, please feel free to print and fill out the<br />
<a href="http://www.wvsop.com/WVSOPApplication.pdf" target="_blank">PDF version</a> of our application and mail it to the address listed in the column to the left. <br />

      <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
         
          <tr>
            <td colspan="2" align="left" valign="top">
            <label>First Name:<strong><span id="firstnamealert" style="color:#C30345; display:none">*</span></strong><br /><input type="text" name="firstname" style="width:150px;" accesskey="" tabindex="" ></label> 
            </td>
            <td colspan="2" align="left" valign="top">
             <label>Last Name: <br /><input type="text" name="lastname" style="width:150px;" accesskey="" tabindex=""></label>
           </td>
          </tr>
        
          <tr>
            <td colspan="2" align="left" valign="top">
            <label>Place of Birth:<br /> <input type="text" name="birthplace" style="width: 300px;" accesskey="" tabindex=""/>
            
            </label>
            
            </td>
            <td colspan="2" align="left" valign="top">
           <label>Date of Birth<br /></label>
                <input name="birthdate" type="text" id="birthdate" size="2" maxlength="2" accesskey="" tabindex=""  />
                -
                <input name="birthday" type="text" id="birthday" size="2" maxlength="2" accesskey="" tabindex=""  />
                -
                <input name="birthyear" type="text" id="birthyear" size="4" maxlength="4"  accesskey="" tabindex="" />
            </td>
          </tr>
          <tr>
            <td colspan="4" align="left" valign="top"><label>Address<br />
                <input type="text" name="address" id="address" accesskey="" tabindex="" style="width:100%"/>
              </label></td>
          </tr>
          <tr>
            <td align="left" valign="top">
            <label>City: <br />
                <input type="text" name="city" id="city" accesskey="" tabindex=""  style="width:300px" />
              </label>
              </td>
            <td align="left" valign="top"></td>
            <td align="left" valign="top">
            <label>State:<br />
                <select id="state" name="state" size="1" accesskey="" tabindex="" >
<option value="">Please select State or Province</option>
<option value="AL">Alabama</option>
<option value="AK">Alaska</option>
<option value="AB">Alberta</option>
<option value="AZ">Arizona</option>
<option value="AR">Arkansas</option>
<option value="BC">British Columbia</option>
<option value="CA">California</option>
<option value="CO">Colorado</option>
<option value="CT">Connecticut</option>
<option value="DE">Delaware</option>
<option value="DC">District of Columbia</option>
<option value="FL">Florida</option>
<option value="GA">Georgia</option>
<option value="HI">Hawaii</option>
<option value="ID">Idaho</option>
<option value="IL">Illinois</option>
<option value="IN">Indiana</option>
<option value="IA">Iowa</option>
<option value="KS">Kansas</option>
<option value="KY">Kentucky</option>
<option value="LA">Louisiana</option>
<option value="ME">Maine</option>
<option value="MB">Manitoba</option>
<option value="MD">Maryland</option>
<option value="MA">Massachusetts</option>
<option value="MI">Michigan</option>
<option value="MN">Minnesota</option>
<option value="MS">Mississippi</option>
<option value="MO">Missouri</option>
<option value="MT">Montana</option>
<option value="NE">Nebraska</option>
<option value="NV">Nevada</option>
<option value="NB">New Brunswick</option>
<option value="NH">New Hampshire</option>
<option value="NJ">New Jersey</option>
<option value="NM">New Mexico</option>
<option value="NY">New York</option>
<option value="NL">Newfoundland and Labrador</option>
<option value="NC">North Carolina</option>
<option value="ND">North Dakota</option>
<option value="NT">Northwest Territories</option>
<option value="NS">Nova Scotia</option>
<option value="NU">Nunavut</option>
<option value="OH">Ohio</option>
<option value="OK">Oklahoma</option>
<option value="ON">Ontario</option>
<option value="OR">Oregon</option>
<option value="PA">Pennsylvania</option>
<option value="PE">Prince Edward Island</option>
<option value="PR">Puerto Rico</option>
<option value="QC">Quebec</option>
<option value="RI">Rhode Island</option>
<option value="SK">Saskatchewan</option>
<option value="SC">South Carolina</option>
<option value="SD">South Dakota</option>
<option value="TN">Tennessee</option>
<option value="TX">Texas</option>
<option value="UT">Utah</option>
<option value="VT">Vermont</option>
<option value="VA">Virginia</option>
<option value="WA">Washington</option>
<option value="WV">West Virginia</option>
<option value="WI">Wisconsin</option>
<option value="WY">Wyoming</option>
<option value="YT">Yukon</option>
</select>
              </label></td>
            <td align="left" valign="top"><label>Zip:<br />
                <input name="zipcode" type="text" id="zipcode" accesskey="" tabindex="" size="10" maxlength="10" /></label></td>
          </tr>
          <tr>
            <td colspan="2" align="left" valign="top"></td>
            <td colspan="2" align="left" valign="top"></td>
          </tr>
            <tr>
            <td colspan="2" align="left" valign="top">
             <label>Phone Number: <br />
                <input type="text" name="phone" id="phone" accesskey="" tabindex=""  style="width:300px" />
              </label>
            
            </td>
            <td colspan="2" align="left" valign="top"> <label>E-mail: <br />
                <input type="text" name="email_address" id="email_address" accesskey="" tabindex=""  style="width:300px" />
              </label></td>
          </tr>
          <tr>
            <td colspan="4" align="left" valign="top"><label>
                <br />
                <input type="checkbox" name="interviewConcent" id="interviewConcent" accesskey="" tabindex="" />
I agree to a personal interview (along with my wife if married ) with the Director of the School and an Elder of Hillview Terrace Church of Christ prior to my being accepted for admission.</label>
              <br />
            <br /></td>
          </tr>
          <tr>
            <td colspan="2" align="left" valign="top"><label>Education grade level attained:<br />
                <input name="educationLevel" type="text" id="educationLevel" accesskey="" tabindex="" value="" size="45" />
                <br />
                <br />
            </label>
            
            <label> Have you had to withdraw from any school or college?<br />
                <input type="radio" name="withdraw" value="yes" id="withdraw_0" accesskey="" tabindex=""  />
                yes
                <input type="radio" name="withdraw" value="no" id="withdraw_1"  />
                no<br />
            </label></td>
            <td colspan="2" align="left" valign="top"><label> Names of schools: (or colleges, if any)<br />
                <textarea name="schoolnames" id="schoolnames" cols="45" rows="5" accesskey="" tabindex=""></textarea>
                <br />
            </label></td>
          </tr>
          <tr>
            <td colspan="4" align="left" valign="top"><label><br />
              Please explain:<br />
                <textarea name="explainwithdraw" id="explainwithdraw" cols="45" rows="5" accesskey="" tabindex="" style="width:100%"></textarea>
                <br />
                <br />
              </label></td>
          </tr>
          <tr>
            <td colspan="4" align="left" valign="top"><label>Please list anywhere you where employed and what type of work it was:<br />
                
                <textarea name="employment" id="employment" cols="45" rows="5" accesskey="" tabindex="" style="width:100%"></textarea><br />
                <br />
              </label></td>
          </tr>
          <tr>
            <td colspan="2" align="left" valign="top"><strong>Marital Status:</strong>
            
                <label>
      <br />
      <input type="radio" name="marriedstat" value="single" id="marriedstat_0">
      single</label>
    <br>
    <label>
      <input type="radio" name="marriedstat" value="married" id="marriedstat_1">
      married</label>
    <br>
    <label>
      <input type="radio" name="marriedstat" value="divorced" id="marriedstat_2">
      divorced</label>
    <br>
    <label>
      <input type="radio" name="marriedstat" value="divorced and remarried" id="marriedstat_3">
      divorced and re-married</label>
            
              <br />
              <br /></td>
            <td colspan="2" align="left" valign="top"><label>Please explain fully any divorce  status:<br />
                <textarea name="explaindivorce" id="explaindivorce" cols="45" rows="5" accesskey="" tabindex=""></textarea>
                <br />
            </label></td>
          </tr>
          <tr>
            <td colspan="2" align="left" valign="top"><label>Wife's name:<br />
                <input type="text" name="spoucename" id="spoucename" accesskey="" tabindex="" />
              </label></td>
            <td colspan="2" align="left" valign="top"><label>Please list any children:<br />
              <textarea name="anychildren" id="anychildren" cols="45" rows="5" accesskey="" tabindex=""></textarea>
              <br />
                <br />
            </label></td>
          </tr>
          <tr>
            <td colspan="4" align="left" valign="top"><label>If married, what are your wife's feelings about you attending West Virginia School of Preaching and devoting your life to preaching the gospel?<br />
                <textarea name="spouceconsent" id="spouceconsent" cols="45" rows="5" accesskey="" tabindex="" style="width:100%"></textarea>
              </label></td>
          </tr>
          <tr>
            <td colspan="2" align="left" valign="top"><label><br />
              When were you baptized?<br />
                <input type="text" name="baptized" id="baptized" accesskey="" tabindex="" />
              </label></td>
            <td colspan="2" align="left" valign="top"><label><br />
              Where you baptized?<br />
                <input type="text" name="baptizinglocation" id="baptizinglocation" accesskey="" tabindex="" />
              </label></td>
          </tr>
          <tr>
            <td colspan="2" align="left" valign="top"><label><br />
              Who baptized you?<br />
                <input type="text" name="whobaptized" id="whobaptized" accesskey="" tabindex="" />
              </label></td>
            <td colspan="2" align="left" valign="top"><label><br />
              Which congregation are you attending?<br />
                <input type="text" name="congregation" id="congregation" accesskey="" tabindex="" />
              </label></td>
          </tr>
          <tr>
            <td colspan="4" align="left" valign="top"><label><br />
              What experience do you have in the work of the church?<br />
                <textarea name="churchworkexperience" id="churchworkexperience" cols="45" rows="5" accesskey="" tabindex="" style="width:100%"></textarea>
            </label></td>
          </tr>
          <tr>
            <td colspan="2" align="left" valign="top"><label> <br />
              Could you handle a preaching appointment, if such were available?<br />
                <input type="radio" name="handlepreaching" value="yes" id="handlepreaching_0" accesskey="" tabindex="" />
                yes
                <input type="radio" name="handlepreaching" value="no" id="handlepreaching_1" />
                no<br />
                <br />
              </label></td>
            <td colspan="2" align="left" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2" align="left" valign="top"><label> Could you lead singing for a congregation, if invited?<br />
          <input type="radio" name="leadsinging" value="yes" id="leadsinging_0" accesskey="" tabindex=""/>
        yes</label>
        <label>
          <input type="radio" name="leadsinging" value="no" id="leadsinging_1" />
          no</label>
        <br /></td>
            <td colspan="2" align="left" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="4" align="left" valign="top">
          <strong><br />
          </strong>
          <label>Do you use or have you used any of the following substances: </label>
          <label><br />
            <input type="checkbox" name="drugusetobacco" value="tobacco" id="CheckboxGroup1_0" accesskey="" tabindex=""  />
            Tobacco</label>
          <br />
          <label>
            <input type="checkbox" name="drugusealcohol" value="alcohol" id="CheckboxGroup1_1" accesskey="" tabindex=""  />
            Alcohol</label>
          <br />
          <label>
            <input type="checkbox" name="druguseDrugs" value="drugs" id="CheckboxGroup1_2"  accesskey="" tabindex="" />
            Drugs</label>
          <br />
          <br />
          <label> If you use tobacco, will you quit before entering school?<br />
            <input type="radio" name="tobaccouse" value="yes" id="tobaccouse_0" accesskey="" tabindex=""  />
            yes</label>
          <label>
            <input type="radio" name="tobaccouse" value="no" id="tobaccouse_1" />
            no<br />
            <br />
          </label>
          <label> Do you have any dependency on any of these substances?<br />
            <input type="radio" name="dependency" value="yes" id="dependency_0" accesskey="" tabindex="" />
            yes</label>
          <label>
            <input type="radio" name="dependency" value="no" id="dependency_1" />
            no</label>
          <br />
          <br />
          <label>Do you have any physical handicap which might hinder you as a gospel preacher?<br />
            <input type="radio" name="handicap" value="yes" id="handicap_0"  accesskey="" tabindex=""/>
            yes</label>
          <label>
            <input type="radio" name="handicap" value="no" id="handicap_1" />
            no</label>
          <br />
          <br />
          <label> If so, please explain:</label>
          <br />
          <textarea name="explainhandicap" id="explainhandicap" cols="45" rows="5" accesskey="" tabindex="" style="width:100%"></textarea></td>
          </tr>
          <tr>
            <td colspan="4" align="left" valign="top"> <br />        
        <label> Do you have any medical or psychriatric condition that may require treatment while in school?<br />
          <input type="radio" name="medicalrequirement" value="yes" id="medicalrequirement_0" accesskey="" tabindex="" />
          yes</label>
        <label>
          <input type="radio" name="medicalrequirement" value="no" id="medicalrequirement_1" />
          no<br />
          <br />
        </label>
            </td>
          </tr>
          <tr>
            <td colspan="4" align="left" valign="top"><label><br />
              If yes, please explain.<br />
                <textarea name="explaintreatmentneed" id="explaintreatmentneed" cols="45" rows="5" style="width:100%" accesskey="" tabindex=""></textarea>
                <br />
        </label></td>
          </tr>
          <tr>
            <td colspan="2" align="left" valign="top">  <label><br />
              Have you ever served in the military?<br />
          <input type="radio" name="millitary" value="yes" id="millitary_0" accesskey="" tabindex="" />
          yes</label>
        <label>
          <input type="radio" name="millitary" value="no" id="millitary_1" />
          no<br />
          <br />
        </label></td>
            <td colspan="2" align="left" valign="top"> <label><br />
              Were you honorably discharged?<br />
          <input type="radio" name="dischargedwithhonor" value="yes" id="dischargedwithhonor_0" accesskey="" tabindex="" />
          yes</label>
        <label>
          <input type="radio" name="dischargedwithhonor" value="no" id="dischargedwithhonor_1" />
          no<br />
        </label></td>
          </tr>
          <tr>
            <td colspan="2" align="left" valign="top"> <label><strong><br />
              Financial Information:</strong></label>
        <br />
        <label> Will you have full financial support while in school?<br />
          <input type="radio" name="havefinancialsupport" value="yes" id="havefinancialsupport_0" accesskey="" tabindex="" />
          yes</label>
        <label>
          <input type="radio" name="havefinancialsupport" value="no" id="havefinancialsupport_1" />
          no</label></td>
            <td colspan="2" align="left" valign="top">        <label><br />
              What minimum support will you required while in school?<br />
                <input name="minimumsupportneed" type="text" id="minimumsupportneed" value="$" accesskey="" tabindex="" />
                <br />
        </label></td>
          </tr>
          <tr>
            <td colspan="2" align="left" valign="top"> <label> <br />
              Will you have indebtedness while you are in school?<br />
          <input type="radio" name="debt" value="yes" id="debt_0" accesskey="" tabindex="" />
          yes</label>
        <label>
          <input type="radio" name="debt" value="no" id="debt_1" />
          no<br />
          <br />
        </label></td>
            <td colspan="2" align="left" valign="top"> <label><br />              
              What amount will you owe?<br />
          <input name="amountowed" type="text" id="amountowed" value="$" accesskey="" tabindex="" />
        </label>
        </td>
          </tr>
          <tr>
            <td colspan="4" align="left" valign="top">        <label><strong><br />
              Note:</strong> while we will be glad to help students raise support, if possible, be it understood that we cannot be responsible. Students should have all their living and other expenses arranged before entering school. <br />
              <br />
              <strong>References:</strong><br />
          List one preacher, one elder, one Christian businessman and one non-Christian member of the business community; each of whom has known you for at least two years. Give the complete mailing address for each reference. <br />
          (Do not include relatives.)  
            <br />
            <br />
            </label></td>
          </tr>
          <tr>
            <td colspan="4" align="left" valign="top"><label><strong>Preacher's Name:</strong><br />
                <input type="text" name="Preacher_name" id="Preacher_name" accesskey="" tabindex="" /></label>
              <br />
            </label></td>
          </tr>
                    <tr>
            <td colspan="2" align="left" valign="top"><label>Address<br />
                <input type="text" name="preacher_Address" id="preacher_Address" accesskey="" tabindex="" style="width:300px"/>
              </label></td> <td colspan="2" align="left" valign="top"><label>Phone Number:<br />
                <input type="text" name="preacher_Phone" accesskey="" tabindex="" style="width:212px"/>
              </label></td>
          </tr>
          <tr>
            <td align="left" valign="top"><label>City <br />
                <input type="text" name="preacher_City" id="preacher_City" accesskey="" tabindex=""  style="width:300px" />
              </label></td>
            <td align="left" valign="top"></td>
            <td align="left" valign="top">
            <label>State<br />
                <select id="preacher_state" name="preacher_state" size="1">
<option value="">Please select State or Province</option>
<option value="AL">Alabama</option>
<option value="AK">Alaska</option>
<option value="AB">Alberta</option>
<option value="AZ">Arizona</option>
<option value="AR">Arkansas</option>
<option value="BC">British Columbia</option>
<option value="CA">California</option>
<option value="CO">Colorado</option>
<option value="CT">Connecticut</option>
<option value="DE">Delaware</option>
<option value="DC">District of Columbia</option>
<option value="FL">Florida</option>
<option value="GA">Georgia</option>
<option value="HI">Hawaii</option>
<option value="ID">Idaho</option>
<option value="IL">Illinois</option>
<option value="IN">Indiana</option>
<option value="IA">Iowa</option>
<option value="KS">Kansas</option>
<option value="KY">Kentucky</option>
<option value="LA">Louisiana</option>
<option value="ME">Maine</option>
<option value="MB">Manitoba</option>
<option value="MD">Maryland</option>
<option value="MA">Massachusetts</option>
<option value="MI">Michigan</option>
<option value="MN">Minnesota</option>
<option value="MS">Mississippi</option>
<option value="MO">Missouri</option>
<option value="MT">Montana</option>
<option value="NE">Nebraska</option>
<option value="NV">Nevada</option>
<option value="NB">New Brunswick</option>
<option value="NH">New Hampshire</option>
<option value="NJ">New Jersey</option>
<option value="NM">New Mexico</option>
<option value="NY">New York</option>
<option value="NL">Newfoundland and Labrador</option>
<option value="NC">North Carolina</option>
<option value="ND">North Dakota</option>
<option value="NT">Northwest Territories</option>
<option value="NS">Nova Scotia</option>
<option value="NU">Nunavut</option>
<option value="OH">Ohio</option>
<option value="OK">Oklahoma</option>
<option value="ON">Ontario</option>
<option value="OR">Oregon</option>
<option value="PA">Pennsylvania</option>
<option value="PE">Prince Edward Island</option>
<option value="PR">Puerto Rico</option>
<option value="QC">Quebec</option>
<option value="RI">Rhode Island</option>
<option value="SK">Saskatchewan</option>
<option value="SC">South Carolina</option>
<option value="SD">South Dakota</option>
<option value="TN">Tennessee</option>
<option value="TX">Texas</option>
<option value="UT">Utah</option>
<option value="VT">Vermont</option>
<option value="VA">Virginia</option>
<option value="WA">Washington</option>
<option value="WV">West Virginia</option>
<option value="WI">Wisconsin</option>
<option value="WY">Wyoming</option>
<option value="YT">Yukon</option>
</select>
              </label></td>
            <td align="left" valign="top"><label>Zip<br />
                <input name="preacher_zip" type="text" id="preacher_zip" accesskey="" tabindex=""size="9" maxlength="9" />
              </label></td>
          </tr>
            <tr>
              <td colspan="4" align="left" valign="top"><hr /></td>
            </tr>
            <tr>
            <td colspan="4" align="left" valign="top"><label><br />
                <strong>Elder's Name:</strong><br />
<input type="text" name="Eldername" id="Eldername" />
            </label></td>
          </tr>
                    <tr>
            <td colspan="2" align="left" valign="top"><label>Address<br />
                <input type="text" name="elder_Address" id="elder_Address" accesskey="" tabindex="" style="width:300px"/>
              </label></td>
            <td colspan="2" align="left" valign="top"><label>Phone Number:<br />
                <input type="text" name="elder_Phone" accesskey="" tabindex="" style="width:212px"/>
              </label></td>
          </tr>
          <tr>
            <td align="left" valign="top"><label>City <br />
                <input type="text" name="elder_city" id="elder_city" accesskey="" tabindex="" style="width:300px" />
              </label></td>
            <td align="left" valign="top"></td>
            <td align="left" valign="top">
            <label>State<br />
                <select id="elder_state" name="elder_state" size="1">
<option value="">Please select State or Province</option>
<option value="AL">Alabama</option>
<option value="AK">Alaska</option>
<option value="AB">Alberta</option>
<option value="AZ">Arizona</option>
<option value="AR">Arkansas</option>
<option value="BC">British Columbia</option>
<option value="CA">California</option>
<option value="CO">Colorado</option>
<option value="CT">Connecticut</option>
<option value="DE">Delaware</option>
<option value="DC">District of Columbia</option>
<option value="FL">Florida</option>
<option value="GA">Georgia</option>
<option value="HI">Hawaii</option>
<option value="ID">Idaho</option>
<option value="IL">Illinois</option>
<option value="IN">Indiana</option>
<option value="IA">Iowa</option>
<option value="KS">Kansas</option>
<option value="KY">Kentucky</option>
<option value="LA">Louisiana</option>
<option value="ME">Maine</option>
<option value="MB">Manitoba</option>
<option value="MD">Maryland</option>
<option value="MA">Massachusetts</option>
<option value="MI">Michigan</option>
<option value="MN">Minnesota</option>
<option value="MS">Mississippi</option>
<option value="MO">Missouri</option>
<option value="MT">Montana</option>
<option value="NE">Nebraska</option>
<option value="NV">Nevada</option>
<option value="NB">New Brunswick</option>
<option value="NH">New Hampshire</option>
<option value="NJ">New Jersey</option>
<option value="NM">New Mexico</option>
<option value="NY">New York</option>
<option value="NL">Newfoundland and Labrador</option>
<option value="NC">North Carolina</option>
<option value="ND">North Dakota</option>
<option value="NT">Northwest Territories</option>
<option value="NS">Nova Scotia</option>
<option value="NU">Nunavut</option>
<option value="OH">Ohio</option>
<option value="OK">Oklahoma</option>
<option value="ON">Ontario</option>
<option value="OR">Oregon</option>
<option value="PA">Pennsylvania</option>
<option value="PE">Prince Edward Island</option>
<option value="PR">Puerto Rico</option>
<option value="QC">Quebec</option>
<option value="RI">Rhode Island</option>
<option value="SK">Saskatchewan</option>
<option value="SC">South Carolina</option>
<option value="SD">South Dakota</option>
<option value="TN">Tennessee</option>
<option value="TX">Texas</option>
<option value="UT">Utah</option>
<option value="VT">Vermont</option>
<option value="VA">Virginia</option>
<option value="WA">Washington</option>
<option value="WV">West Virginia</option>
<option value="WI">Wisconsin</option>
<option value="WY">Wyoming</option>
<option value="YT">Yukon</option>
</select>
              </label></td>
            <td align="left" valign="top"><label>Zip<br />
                <input name="elder_zip" type="text" id="elder_zip" accesskey="" tabindex="" size="9" maxlength="9" />
              </label></td>
          </tr>
            <tr>
              <td colspan="4" align="left" valign="top"><hr /></td>
            </tr>
            <tr>
            <td colspan="4" align="left" valign="top"><label><strong>Christian Businessman:</strong><br />
<input type="text" name="Christian_Biz" id="Christian_Biz" cols="45" rows="5"></textarea>
<br />
            </label></td>
          </tr>
                    <tr>
            <td colspan="2" align="left" valign="top"><label>Address<br />
                <input type="text" name="chr_biz_address" id="chr_biz_address" accesskey="" tabindex="" style="width:300px"/>
              </label></td>
              <td colspan="2" align="left" valign="top"><label>Phone Number:<br />
                <input type="text" name="chr_biz_Phone" accesskey="" tabindex="" style="width:212px"/>
              </label></td>
          </tr>
          <tr>
            <td align="left" valign="top"><label>City <br />
                <input type="text" name="chr_biz_city" id="chr_biz_city" accesskey="" tabindex="" style="width:300px" />
              </label></td>
            <td align="left" valign="top"></td>
            <td align="left" valign="top">
            <label>State<br />
                <select id="chr_biz_state" name="chr_biz_state" size="1">
<option value="">Please select State or Province</option>
<option value="AL">Alabama</option>
<option value="AK">Alaska</option>
<option value="AB">Alberta</option>
<option value="AZ">Arizona</option>
<option value="AR">Arkansas</option>
<option value="BC">British Columbia</option>
<option value="CA">California</option>
<option value="CO">Colorado</option>
<option value="CT">Connecticut</option>
<option value="DE">Delaware</option>
<option value="DC">District of Columbia</option>
<option value="FL">Florida</option>
<option value="GA">Georgia</option>
<option value="HI">Hawaii</option>
<option value="ID">Idaho</option>
<option value="IL">Illinois</option>
<option value="IN">Indiana</option>
<option value="IA">Iowa</option>
<option value="KS">Kansas</option>
<option value="KY">Kentucky</option>
<option value="LA">Louisiana</option>
<option value="ME">Maine</option>
<option value="MB">Manitoba</option>
<option value="MD">Maryland</option>
<option value="MA">Massachusetts</option>
<option value="MI">Michigan</option>
<option value="MN">Minnesota</option>
<option value="MS">Mississippi</option>
<option value="MO">Missouri</option>
<option value="MT">Montana</option>
<option value="NE">Nebraska</option>
<option value="NV">Nevada</option>
<option value="NB">New Brunswick</option>
<option value="NH">New Hampshire</option>
<option value="NJ">New Jersey</option>
<option value="NM">New Mexico</option>
<option value="NY">New York</option>
<option value="NL">Newfoundland and Labrador</option>
<option value="NC">North Carolina</option>
<option value="ND">North Dakota</option>
<option value="NT">Northwest Territories</option>
<option value="NS">Nova Scotia</option>
<option value="NU">Nunavut</option>
<option value="OH">Ohio</option>
<option value="OK">Oklahoma</option>
<option value="ON">Ontario</option>
<option value="OR">Oregon</option>
<option value="PA">Pennsylvania</option>
<option value="PE">Prince Edward Island</option>
<option value="PR">Puerto Rico</option>
<option value="QC">Quebec</option>
<option value="RI">Rhode Island</option>
<option value="SK">Saskatchewan</option>
<option value="SC">South Carolina</option>
<option value="SD">South Dakota</option>
<option value="TN">Tennessee</option>
<option value="TX">Texas</option>
<option value="UT">Utah</option>
<option value="VT">Vermont</option>
<option value="VA">Virginia</option>
<option value="WA">Washington</option>
<option value="WV">West Virginia</option>
<option value="WI">Wisconsin</option>
<option value="WY">Wyoming</option>
<option value="YT">Yukon</option>
</select>
              </label></td>
            <td align="left" valign="top"><label>Zip<br />
                <input name="chr_biz_zip" type="text" id="chr_biz_zip" accesskey="" tabindex="" size="9" maxlength="9" />
              </label></td>
          </tr>
            <tr>
              <td colspan="4" align="left" valign="top"><hr /></td>
            </tr>
            <tr>
            <td colspan="4" align="left" valign="top"><label><strong>Non-Christian Businessman:</strong><br />
              <input type="text" name="non-christ-bizman" id="non-christ-bizman" />
              <br />
            </label></td>
          </tr>
                    <tr>
            <td colspan="2" align="left" valign="top"><label>Address<br />
                <input type="text" name="non-christ-biz_address" id="non-christ-biz_address" accesskey="" tabindex="" style="width:300px"/>
              </label></td>
         <td colspan="2" align="left" valign="top"><label>Phone Number:<br />
                <input type="text" name="non-christ_biz_Phone" accesskey="" tabindex="" style="width:212px"/>
              </label></td>
          </tr>
          <tr>
            <td align="left" valign="top"><label>City <br />
                <input type="text" name="non-christ-biz_city" id="non-christ-biz_city" accesskey="" tabindex="" style="width:300px" />
              </label></td>
            <td align="left" valign="top"></td>
            <td align="left" valign="top">
            <label>State<br />
                <select id="non-christ-biz_state" name="non-christ-biz_state" size="1">
<option value="">Please select State or Province</option>
<option value="AL">Alabama</option>
<option value="AK">Alaska</option>
<option value="AB">Alberta</option>
<option value="AZ">Arizona</option>
<option value="AR">Arkansas</option>
<option value="BC">British Columbia</option>
<option value="CA">California</option>
<option value="CO">Colorado</option>
<option value="CT">Connecticut</option>
<option value="DE">Delaware</option>
<option value="DC">District of Columbia</option>
<option value="FL">Florida</option>
<option value="GA">Georgia</option>
<option value="HI">Hawaii</option>
<option value="ID">Idaho</option>
<option value="IL">Illinois</option>
<option value="IN">Indiana</option>
<option value="IA">Iowa</option>
<option value="KS">Kansas</option>
<option value="KY">Kentucky</option>
<option value="LA">Louisiana</option>
<option value="ME">Maine</option>
<option value="MB">Manitoba</option>
<option value="MD">Maryland</option>
<option value="MA">Massachusetts</option>
<option value="MI">Michigan</option>
<option value="MN">Minnesota</option>
<option value="MS">Mississippi</option>
<option value="MO">Missouri</option>
<option value="MT">Montana</option>
<option value="NE">Nebraska</option>
<option value="NV">Nevada</option>
<option value="NB">New Brunswick</option>
<option value="NH">New Hampshire</option>
<option value="NJ">New Jersey</option>
<option value="NM">New Mexico</option>
<option value="NY">New York</option>
<option value="NL">Newfoundland and Labrador</option>
<option value="NC">North Carolina</option>
<option value="ND">North Dakota</option>
<option value="NT">Northwest Territories</option>
<option value="NS">Nova Scotia</option>
<option value="NU">Nunavut</option>
<option value="OH">Ohio</option>
<option value="OK">Oklahoma</option>
<option value="ON">Ontario</option>
<option value="OR">Oregon</option>
<option value="PA">Pennsylvania</option>
<option value="PE">Prince Edward Island</option>
<option value="PR">Puerto Rico</option>
<option value="QC">Quebec</option>
<option value="RI">Rhode Island</option>
<option value="SK">Saskatchewan</option>
<option value="SC">South Carolina</option>
<option value="SD">South Dakota</option>
<option value="TN">Tennessee</option>
<option value="TX">Texas</option>
<option value="UT">Utah</option>
<option value="VT">Vermont</option>
<option value="VA">Virginia</option>
<option value="WA">Washington</option>
<option value="WV">West Virginia</option>
<option value="WI">Wisconsin</option>
<option value="WY">Wyoming</option>
<option value="YT">Yukon</option>
</select>
              </label></td>
            <td align="left" valign="top"><label>Zip<br />
                <input name="non-christ-biz_zip" type="text" id="non-christ-biz_zip" accesskey="" tabindex="" size="9" maxlength="9" />
              </label></td>
          </tr>
          <tr>
            <td colspan="2" align="left" valign="top"> <label>              What is the date you plan to enroll?
              <br />
<input type="text" name="enrollmentdate" id="enrollmentdate" />
         
        <br />
            </label></td>
            <td colspan="2" align="left" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="4" align="left" valign="top">  <label><br />
              In the space below please provide a brief statement explaining why you want to attend West Virginia School of Preaching and how you plan to use this training. Also, explain what motivated you to decide to preach the gospel. This is an important part of your application. 
              <br />
<br />   </label><label>
          <textarea name="whywvsop" id="whywvsop" cols="45" rows="5" style="width:100%"></textarea>
         
        </label>
       </td>
          </tr>
          <tr>
            <td colspan="4" align="left" valign="top">  <label><strong><br />
              Dorm Application: </strong>A dorm is available to those who are not married or who do not have dependents living with them while in school. To obtain these accommodations you must be a student at the West Virginia School of Preaching and must maintain passing grades. Any damage to the dorm will be taken from the final pay to make the repairs, and the balance will be returned to the student upon his leaving the dorm housing. Please fill in as completely as possible and sign this document. This form is to be submitted to the elders for their approval and a signed copy returned to the student before moving into the dorm.</label>
            <br />
            <br /></td>
          </tr>
          <tr>
            <td colspan="2" align="left" valign="top"> <label>Emergency Contact<br />
          <input type="text" name="emergencycontact" id="emergencycontact" />
          <br />
          <br />
            </label></td>
            <td colspan="2" align="left" valign="top"> <label>
          Emergency contacts address.<br />
          <input type="text" name="econtactaddress" id="econtactaddress" />
          <br />
          <br />
            </label></td>
          </tr>
          <tr>
            <td colspan="2" align="left" valign="top"><label>Emergency contacts Phone Number.<br />
          <input type="text" name="econtactphone" id="econtactphone" />
        </label></td>
            <td colspan="2" align="left" valign="top">&nbsp;</td>
          </tr>
        </table>
       
        <br />
      
        <label> <input type="submit" name="submit" value="Submit"></label>
        </p>
        

      
        <br />
        <br />
      </form>
      </p>
      <div >
      <!-- //////////////////////////////////////// CODE  COLLECT DATA & SENDS TO DB //////////////////////////////////////// -->
      <?php  
          
          if(isset($_REQUEST['submit']))
          {
		  
            //Variable to hold a boolen value, to tell us whether or not
            //to proceed with database entry
            $proceed = TRUE;            
            //Capture data in vars
			$firstname = "";
			$lastname = "";             
			$birthplace = "";    
			$birthdate = "";
			$birthday = ""; 
			$birthyear = "";  
			$address = "";
			$city = "";
			$state = "";
			$zipcode = "";	
			$phone = "";	
			$EmailAddress = "";	
			$interviewConcent = "";
			$educationLevel = "";  
			$withdraw = ""; 
			$schoolnames = "";
			$explainwithdraw = ""; 
			$employment = ""; 
			$marriedstat = "";
			$explaindivorce = ""; 
			$spoucename = ""; 
			$anychildren = ""; 
			$spouceconsent = "";
			$baptized = "";
			$baptizinglocation = "";
			$whobaptized = ""; 
			$congregation = "";
			$churchworkexperience = ""; 
			$handlepreaching = ""; 
			$drugusetobacco = ""; 
			$drugusealcohol = "";
			$druguseDrugs = ""; 
			$tobaccouse = "";
			$dependency = "";
			$handicap = "";
			$explainhandicap = "";
			$leadsinging = "";			
			$medicalrequirement = "";
			$explaintreatmentneed = "";
			$millitary = "";
			$dischargedwithhonor = "";
			$havefinancialsupport = "";			
			$minimumsupportneed = "";
			$debt = "";
			$amountowed = "";
			$Preacher_name = ""; 
			$preacher_Address = "";
			$preacher_Phone = "";
			$preacher_state = "";
			$preacher_zip = "";
			$Eldername = "";
			$elder_Address = "";
			$elder_Phone = "";
			$elder_city = "";
			$elder_state = "";
			$elder_zip = "";
			$Christian_Biz = "";
			$chr_biz_address = "";
			$chr_biz_Phone = "";
			$chr_biz_city = "";
			$chr_biz_state = "";
			$chr_biz_zip = "";
			$non_christ_bizman = "";
			$non_christ_biz_address = "";
			$non_christ_biz_Phone= "";
			$non_christ_biz_city = "";
			$non_christ_biz_state = "";
			$non_christ_biz_zip = "";
			$enrollmentdate = "";
			$whywvsop = "";
			$emergencycontact = "";
			$econtactaddress = "";
			$econtactphone = "";			
			$emailBody="";
			
////////////////////////////////////////////////////////////



//////////
if(isset($_REQUEST['firstname']))
{
$firstname = $_REQUEST['firstname'];
$firstname = str_replace("'","''",$firstname);
$emailBody .= "Firstname: ";
$emailBody .= $firstname;
$emailBody .= "\n";
}   

if(isset($_REQUEST['lastname']))
{
$lastname = $_REQUEST['lastname'];
$lastname = str_replace("'","''",$lastname);
$emailBody .= "Lastname: ";
$emailBody .= $lastname;
$emailBody .= "\n";
}  

if(isset($_REQUEST['birthplace']))
{
$birthplace = $_REQUEST['birthplace'];
$birthplace= str_replace("'","''",$birthplace);
$emailBody .= "Place of Birth ";
$emailBody .= $birthplace;
$emailBody .= "\n";
}  

if(isset($_REQUEST['birthdate']))
{
$birthdate = $_REQUEST['birthdate'];
$birthdate = str_replace("'","''",$birthdate);
$emailBody .= "Birth Month: ";
$emailBody .= $birthdate;
$emailBody .= "\n";
}  

if(isset($_REQUEST['birthday']))
{
$birthday = $_REQUEST['birthday'];
$birthday = str_replace("'","''",$birthday);
$emailBody .= "Birth Day: ";
$emailBody .= $birthday;
$emailBody .= "\n";
}  
if(isset($_REQUEST['birthyear']))
{
$birthyear = $_REQUEST['birthyear'];
$birthyear = str_replace("'","''",$birthyear);
$emailBody .= "Birth Year: ";
$emailBody .= $birthyear;
$emailBody .= "\n";
}  


if(isset($_REQUEST['address']))
{
$address = $_REQUEST['address'];
$address = str_replace("'","''",$address);
$emailBody .= "Street Address: ";
$emailBody .= $address;
$emailBody .= "\n";
}  

if(isset($_REQUEST['city']))
{
$city = $_REQUEST['city'];
$city = str_replace("'","''",$city);
$emailBody .= "City: ";
$emailBody .= $city;
$emailBody .= "\n";
}  

if(isset($_REQUEST['state']))
{
$state = $_REQUEST['state'];
$state= str_replace("'","''",$state);
$emailBody .= "State: ";
$emailBody .= $state;
$emailBody .= "\n";
}  

if(isset($_REQUEST['zipcode']))
{
$zipcode = $_REQUEST['zipcode'];
$zipcode= str_replace("'","''",$zipcode);
$emailBody .= "zipcode: ";
$emailBody .= $zipcode;
$emailBody .= "\n";
}

if(isset($_REQUEST['phone']))
{
$phone = $_REQUEST['phone'];
$phone  = str_replace("'","''",$phone );
$emailBody .= "Phone Number: ";
$emailBody .= $phone;
$emailBody .= "\n";
}  

if(isset($_REQUEST['email_address']))
{
$EmailAddress = $_REQUEST['email_address'];
$EmailAddress = str_replace("'","''",$EmailAddress);
$emailBody .= "Email Address: ";
$emailBody .= $EmailAddress;
$emailBody .= "\n";
} 

if(isset($_REQUEST['interviewConcent']))
{
$interviewConcent = $_REQUEST['interviewConcent'];
$interviewConcent= str_replace("'","''",$interviewConcent);
$emailBody .= "Interview Concent: ";
$emailBody .= $interviewConcent;
$emailBody .= "\n";
}  

if(isset($_REQUEST['educationLevel']))
{
$educationLevel = $_REQUEST['educationLevel'];
$educationLevel = str_replace("'","''",$educationLevel);
$emailBody .= "Education Level: ";
$emailBody .= $educationLevel;
$emailBody .= "\n";
}  

if(isset($_REQUEST['schoolnames']))
{
$schoolnames = $_REQUEST['schoolnames'];
$schoolnames= str_replace("'","''",$schoolnames);
$emailBody .= "School Names: ";
$emailBody .= $schoolnames;
$emailBody .= "\n";
}  

if(isset($_REQUEST['withdraw']))
{
$withdraw = $_REQUEST['withdraw'];
$withdraw = str_replace("'","''",$withdraw);
$emailBody .= "Withdraw from a School: ";
$emailBody .= $withdraw;
$emailBody .= "\n";
} 

if(isset($_REQUEST['explainwithdraw']))
{
$explainwithdraw = $_REQUEST['explainwithdraw'];
$explainwithdraw= str_replace("'","''",$explainwithdraw);
$emailBody .= "Explain School Withdraw: ";
$emailBody .= $explainwithdraw;
$emailBody .= "\n";
}  

if(isset($_REQUEST['employment']))
{
$employment = $_REQUEST['employment'];
$employment= str_replace("'","''",$employment);
$emailBody .= "Places of Employment: ";
$emailBody .= $employment;
$emailBody .= "\n";
}  

if(isset($_REQUEST['marriedstat']))
{
$marriedstat = $_REQUEST['marriedstat'];
$marriedstat = str_replace("'","''",$marriedstat);
$emailBody .= "Marital Status: ";
$emailBody .= $marriedstat;
$emailBody .= "\n";
}  

if(isset($_REQUEST['explaindivorce']))
{
$explaindivorce = $_REQUEST['explaindivorce'];
$explaindivorce= str_replace("'","''",$explaindivorce);
$emailBody .= "Explaination of Divorce: ";
$emailBody .= $explaindivorce;
$emailBody .= "\n";
}  

if(isset($_REQUEST['spoucename']))
{
$spoucename = $_REQUEST['spoucename'];
$spoucename= str_replace("'","''",$spoucename);
$emailBody .= "Wife's Name: ";
$emailBody .= $spoucename;
$emailBody .= "\n";
}

if(isset($_REQUEST['anychildren']))
{
$anychildren = $_REQUEST['anychildren'];
$anychildren= str_replace("'","''",$anychildren);
$emailBody .= "Children's Names: ";
$emailBody .= $anychildren;
$emailBody .= "\n";
}  	

if(isset($_REQUEST['spouceconsent']))
{
$spouceconsent = $_REQUEST['spouceconsent'];
$spouceconsent = str_replace("'","''",$spouceconsent);
$emailBody .= "Wife's Feelings About Attending: ";
$emailBody .= $spouceconsent;
$emailBody .= "\n";
}

if(isset($_REQUEST['baptized']))
{
$baptized = $_REQUEST['baptized'];
$baptized = str_replace("'","''",$baptized);
$emailBody .= "Baptizing Date: ";
$emailBody .= $baptized;
$emailBody .= "\n";
}  

if(isset($_REQUEST['baptizinglocation']))
{
$baptizinglocation = $_REQUEST['baptizinglocation'];
$baptizinglocation= str_replace("'","''",$baptizinglocation);
$emailBody .= "Baptizing Location: ";
$emailBody .= $baptizinglocation;
$emailBody .= "\n";
} 

if(isset($_REQUEST['whobaptized']))
{
$whobaptized = $_REQUEST['whobaptized'];
$whobaptized= str_replace("'","''",$whobaptized);
$emailBody .= "Who Baptized This person: ";
$emailBody .= $whobaptized;
$emailBody .= "\n";
}  

if(isset($_REQUEST['congregation']))
{
$congregation = $_REQUEST['congregation'];
$congregation= str_replace("'","''",$congregation);
$emailBody .= "Current Congregation: ";
$emailBody .= $congregation;
$emailBody .= "\n";
}  

if(isset($_REQUEST['churchworkexperience']))
{
$churchworkexperience = $_REQUEST['churchworkexperience'];
$churchworkexperience= str_replace("'","''",$churchworkexperience);
$emailBody .= "Church Work Experience: ";
$emailBody .= $churchworkexperience;
$emailBody .= "\n";
}  

if(isset($_REQUEST['handlepreaching']))
{
$handlepreaching = $_REQUEST['handlepreaching'];
$handlepreaching = str_replace("'","''",$handlepreaching);
$emailBody .= "Could you Handle a Preaching Position: ";
$emailBody .= $handlepreaching;
$emailBody .= "\n"; 
}  

if(isset($_REQUEST['drugusetobacco']))
{
$drugusetobacco = $_REQUEST['drugusetobacco'];
$drugusetobacco = str_replace("'","''",$drugusetobacco);
$emailBody .= "This person uses Tobacco: ";
$emailBody .= $drugusetobacco;
$emailBody .= "\n";
}  

if(isset($_REQUEST['tobaccouse']))
{
$tobaccouse = $_REQUEST['tobaccouse'];
$tobaccouse = str_replace("'","''",$tobaccouse);
$emailBody .= "Will this person stop using tobacco before school?: ";
$emailBody .= $tobaccouse;
$emailBody .= "\n";
}  

if(isset($_REQUEST['drugusealcohol']))
{
$drugusealcohol = $_REQUEST['drugusealcohol'];
$drugusealcohol = str_replace("'","''",$drugusealcohol);
$emailBody .= "This person drings alcohol: ";
$emailBody .= $drugusealcohol;
$emailBody .= "\n";
}  

if(isset($_REQUEST['druguseDrugs']))
{
$druguseDrugs = $_REQUEST['druguseDrugs'];
$druguseDrugs = str_replace("'","''",$druguseDrugs);
$emailBody .= "This Person Uses Illegal Drugs: ";
$emailBody .= $druguseDrugs;
$emailBody .= "\n";
}  

if(isset($_REQUEST['dependency']))
{
$dependency = $_REQUEST['dependency'];
$dependency = str_replace("'","''",$dependency);
$emailBody .= "Does this Person Have a Dependency on a Drug: ";
$emailBody .= $dependency;
$emailBody .= "\n";
}  

if(isset($_REQUEST['handicap']))
{
$handicap = $_REQUEST['handicap'];
$handicap  = str_replace("'","''",$handicap );
$emailBody .= "Does this person have a physical handicap: ";
$emailBody .= $handicap;
$emailBody .= "\n";
}

if(isset($_REQUEST['explainhandicap']))
{
$explainhandicap= $_REQUEST['explainhandicap'];
$explainhandicap= str_replace("'","''",$explainhandicap);
$emailBody .= "Handicap Explaination: ";
$emailBody .= $explainhandicap;
$emailBody .= "\n";
}

if(isset($_REQUEST['leadsinging']))
{
$leadsinging = $_REQUEST['leadsinging'];
$leadsinging = str_replace("'","''",$leadsinging);
$emailBody .= "Compfortable Leading singing?: ";
$emailBody .= $leadsinging;
$emailBody .= "\n";
}

if(isset($_REQUEST['medicalrequirement']))
{
$medicalrequirement = $_REQUEST['medicalrequirement'];
$medicalrequirement = str_replace("'","''",$medicalrequirement);
$emailBody .= "Does this person have any medical or psychriatric conditions requiring treatment?: ";
$emailBody .= $medicalrequirement;
$emailBody .= "\n";
}

if(isset($_REQUEST['explaintreatmentneed']))
{
$explaintreatmentneed = $_REQUEST['explaintreatmentneed'];
$explaintreatmentneed = str_replace("'","''",$explaintreatmentneed);
$explaintreatmentneed= str_replace("'","''",$explaintreatmentneed);
$emailBody .= "Explain treatment needs: ";
$emailBody .= $explaintreatmentneed;
$emailBody .= "\n";
}

if(isset($_REQUEST['millitary']))
{
$millitary = $_REQUEST['millitary'];
$millitary = str_replace("'","''",$millitary);
$emailBody .= "Millitary: ";
$emailBody .= $millitary;
$emailBody .= "\n";
} 

if(isset($_REQUEST['dischargedwithhonor']))
{
$dischargedwithhonor = $_REQUEST['dischargedwithhonor'];
$dischargedwithhonor = str_replace("'","''",$dischargedwithhonor);
$emailBody .= "Was this person discharged with honor?: ";
$emailBody .= $dischargedwithhonor;
$emailBody .= "\n";
}

if(isset($_REQUEST['havefinancialsupport']))
{
$havefinancialsupport = $_REQUEST['havefinancialsupport'];
$havefinancialsupport = str_replace("'","''",$havefinancialsupport);
$emailBody .= "Will this person have full financial support while in school?: ";
$emailBody .= $havefinancialsupport;
$emailBody .= "\n";
}  

if(isset($_REQUEST['minimumsupportneed']))
{
$minimumsupportneed = $_REQUEST['minimumsupportneed'];
$minimumsupportneed = str_replace("'","''",$minimumsupportneed);
$emailBody .= "What is the minimum support needed: ";
$emailBody .= $minimumsupportneed;
$emailBody .= "\n";
}  

if(isset($_REQUEST['debt']))
{
$debt = $_REQUEST['debt'];
$debt = str_replace("'","''",$debt);
$emailBody .= "Is this person in Debt?: ";
$emailBody .= $debt;
$emailBody .= "\n";
}  

if(isset($_REQUEST['amountowed']))
{
$amountowed = $_REQUEST['amountowed'];
$amountowed = str_replace("'","''",$amountowed);
$emailBody .= "What is the Amount of Debt Owed?: ";
$emailBody .= $amountowed;
$emailBody .= "\n";
}  

/////////////////////// Old Belolw /////////////////////////////////////


if(isset($_REQUEST['chr_biz_city']))
{
$chr_biz_city = $_REQUEST['chr_biz_city'];
$chr_biz_city= str_replace("'","''",$chr_biz_city);
$emailBody .= "Christian Business person's City: ";
$emailBody .= $chr_biz_city;
$emailBody .= "\n";
}  

if(isset($_REQUEST['chr_biz_Phone']))
{
$chr_biz_Phone = $_REQUEST['chr_biz_Phone'];
$chr_biz_Phone= str_replace("'","''",$chr_biz_Phone);
$emailBody .= "Christian Business person's Phone: ";
$emailBody .= $chr_biz_Phone;
$emailBody .= "\n";
}  

if(isset($_REQUEST['chr_biz_address']))
{
$chr_biz_address = $_REQUEST['chr_biz_address'];
$chr_biz_address= str_replace("'","''",$chr_biz_address);
$emailBody .= "Christian Business person's Address: ";
$emailBody .= $chr_biz_address;
$emailBody .= "\n";
}  

if(isset($_REQUEST['chr_biz_state']))
{
$chr_biz_state = $_REQUEST['chr_biz_state'];
$chr_biz_state = str_replace("'","''",$chr_biz_state);
$emailBody .= "Christian Business person's State: ";
$emailBody .= $chr_biz_state;
$emailBody .= "\n";
}  

if(isset($_REQUEST['chr_biz_zip']))
{
$chr_biz_zip = $_REQUEST['chr_biz_zip'];
$chr_biz_zip = str_replace("'","''",$chr_biz_zip);
$emailBody .= "Christian Business person's Zip: ";
$emailBody .= $chr_biz_zip;
$emailBody .= "\n";
}  

if(isset($_REQUEST['Christian_Biz']))
{
$Christian_Biz= $_REQUEST['Christian_Biz'];
$Christian_Biz= str_replace("'","''",$Christian_Biz);
$emailBody .= "Christian Business person: ";
$emailBody .= $Christian_Biz;
$emailBody .= "\n";
}  

if(isset($_REQUEST['elder_Address']))
{
$elder_Address = $_REQUEST['elder_Address'];
$elder_Address = str_replace("'","''",$elder_Address );
$emailBody .= "Elder's Address: ";
$emailBody .= $elder_Address;
$emailBody .= "\n";
}  

if(isset($_REQUEST['elder_Phone']))
{
$elder_Phone = $_REQUEST['elder_Phone'];
$elder_Phone = str_replace("'","''",$elder_Phone );
$emailBody .= "Elder's Phone: ";
$emailBody .= $elder_Phone;
$emailBody .= "\n";
}  

if(isset($_REQUEST['elder_city']))
{
$elder_city = $_REQUEST['elder_city'];
$elder_city = str_replace("'","''",$elder_city);
$emailBody .= "Elder's City: ";
$emailBody .= $elder_city;
$emailBody .= "\n";
}  

if(isset($_REQUEST['elder_state']))
{
$elder_state = $_REQUEST['elder_state'];
$elder_state = str_replace("'","''",$elder_state);
$emailBody .= "Elder's State: ";
$emailBody .= $elder_state;
$emailBody .= "\n";
}  

if(isset($_REQUEST['elder_zip']))
{
$elder_zip = $_REQUEST['elder_zip'];
$elder_zip = str_replace("'","''",$elder_zip);
$emailBody .= "Elder's Zip: ";
$emailBody .= $elder_zip;
$emailBody .= "\n";
}  

if(isset($_REQUEST['Eldername']))
{
$Eldername = $_REQUEST['Eldername'];
$Eldername = str_replace("'","''",$Eldername );
$emailBody .= "Elder name: ";
$emailBody .= $Eldername;
$emailBody .= "\n";
}  

if(isset($_REQUEST['non-christ-biz_address']))
{
$non_christ_biz_address = $_REQUEST['non-christ-biz_address'];
$non_christ_biz_address = str_replace("'","''",$non_christ_biz_address );
$emailBody .= "NonChristian Business address: ";
$emailBody .= $non-christ-biz_address;
$emailBody .= "\n";
}  

if(isset($_REQUEST['non-christ_biz_Phone']))
{
$non_christ_biz_Phone = $_REQUEST['non-christ_biz_Phone'];
$non_christ_biz_Phone = str_replace("'","''",$non_christ_biz_Phone );
$emailBody .= "NonChristian Business phone: ";
$emailBody .= $non_christ_biz_Phone;
$emailBody .= "\n";
}  

if(isset($_REQUEST['non-christ-biz_city']))
{
$non_christ_biz_city = $_REQUEST['non-christ-biz_city'];
$non_christ_biz_city = str_replace("'","''",$non_christ_biz_city);
$emailBody .= "NonChristian Business city: ";
$emailBody .= $non-christ-biz_city;
$emailBody .= "\n";
}  

if(isset($_REQUEST['non-christ-biz_state']))
{
$non_christ_biz_state = $_REQUEST['non-christ-biz_state'];
$non_christ_biz_state = str_replace("'","''",$non_christ_biz_state);
$emailBody .= "NonChristian Business state: ";
$emailBody .= $non-christ-biz_state;
$emailBody .= "\n";
}  

if(isset($_REQUEST['non-christ-biz_zip']))
{
$non_christ_biz_zip = $_REQUEST['non-christ-biz_zip'];
$non_christ_biz_zip = str_replace("'","''",$non_christ_biz_zip);
$emailBody .= "NonChristian Business zip: ";
$emailBody .= $non-christ-biz_zip;
$emailBody .= "\n";
} 

if(isset($_REQUEST['non-christ-bizman']))
{
$non_christ_bizman = $_REQUEST['non-christ-bizman'];
$non_christ_bizman= str_replace("'","''",$non_christ_bizman);
$emailBody .= "NonChristian Business : ";
$emailBody .= $non-christ-bizman;
$emailBody .= "\n";
}  

if(isset($_REQUEST['preacher_Address']))
{
$preacher_Address = $_REQUEST['preacher_Address'];
$preacher_Address  = str_replace("'","''",$preacher_Address  ); //////////////////////
$emailBody .= "Preacher Address: ";
$emailBody .= $preacher_Address;
$emailBody .= "\n";
}

if(isset($_REQUEST['preacher_Phone']))
{
$preacher_Phone = $_REQUEST['preacher_Phone'];
$preacher_Phone  = str_replace("'","''",$preacher_Phone  ); //////////////////////
$emailBody .= "Preacher Phone: ";
$emailBody .= $preacher_Phone;
$emailBody .= "\n";
}  


if(isset($_REQUEST['Preacher_name']))
{
$Preacher_name = $_REQUEST['Preacher_name'];
$Preacher_name = str_replace("'","''",$Preacher_name);
$emailBody .= "Preacher name: ";
$emailBody .= $Preacher_name;
$emailBody .= "\n";
}  

if(isset($_REQUEST['preacher_state']))
{
$preacher_state = $_REQUEST['preacher_state'];
$preacher_state = str_replace("'","''",$preacher_state);
$emailBody .= "Preacher state: ";
$emailBody .= $preacher_state;
$emailBody .= "\n";
}  

if(isset($_REQUEST['preacher_zip']))
{
$preacher_zip = $_REQUEST['preacher_zip'];
$preacher_zip = str_replace("'","''",$preacher_zip);
$emailBody .= "Preacher zip: ";
$emailBody .= $preacher_zip;
$emailBody .= "\n";
}  

if(isset($_REQUEST['whywvsop']))
{
$whywvsop = $_REQUEST['whywvsop'];
$whywvsop = str_replace("'","''",$whywvsop);
$emailBody .= "Why WVSOP?: ";
$emailBody .= $whywvsop;
$emailBody .= "\n";
}  

if(isset($_REQUEST['emergencycontact']))
{
$emergencycontact = $_REQUEST['emergencycontact'];
$emergencycontact = str_replace("'","''",$emergencycontact);
$emailBody .= "Emergency Contact: ";
$emailBody .= $emergencycontact;
$emailBody .= "\n";
}  

if(isset($_REQUEST['econtactphone']))
{
$econtactphone = $_REQUEST['econtactphone'];
$econtactphone = str_replace("'","''",$econtactphone);
$emailBody .= "Emergency Contact phone: ";
$emailBody .= $econtactphone;
$emailBody .= "\n";
}  

if(isset($_REQUEST['econtactaddress']))
{
$econtactaddress = $_REQUEST['econtactaddress'];
$econtactaddress = str_replace("'","''",$econtactaddress);
$emailBody .= "Emergency Contact address: ";
$emailBody .= $econtactaddress;
$emailBody .= "\n";
}  

if(isset($_REQUEST['enrollmentdate']))
{
$enrollmentdate = $_REQUEST['enrollmentdate'];
$enrollmentdate = str_replace("'","''",$enrollmentdate);
$emailBody .= "Enrollment Date: ";
$emailBody .= $enrollmentdate;
$emailBody .= "\n";
}

//Date added Nov 12 2011

$today = date("F j, Y, g:i a");
$emailBody .= "Submission Date: ";
$emailBody .= $today;
$emailBody .= "\n";



////////////////////////////////////

		
            
            
            //Need to do some validation/data scrubbing here- REQUIRED FIELDS
            if(($firstname == "") || ($lastname == "" ))
            {
           	
			echo '<script language="javascript">';
			echo 'alert("One or more values are empty!")';
			echo '</script>';
			 
              $proceed = FALSE;
            }
            
            if($proceed == TRUE)
            {
               
            
//Enter data in database****             
            
              if(connect_dbase() == FALSE)
              {
                PrintNiceError("ERROR: Unable to connect MySQL and/or select the dbase.");
                exit();
              }
              
//$newvar = str_replace("replacethis","with this", "in this"); 
              
$SQL = "INSERT INTO `wvsop_data` (firstname_DB,lastname_DB,birthplace_DB,birthdate_DB,birthday_DB,birthyear_DB,address_DB,city_DB,state_DB,zipcode_DB,phone_DB,emailaddress_DB,interviewConcent_DB,educationLevel_DB,withdraw_DB,schoolnames_DB,explainwithdraw_DB,employmentloc_DB,married_DB,explaindivorce_DB,spoucename_DB,children_DB,spouceconsent_DB,baptized_DB,baptizinglocation_DB,whobaptized_DB,congregation_DB,churchworkexperience_DB,handlepreaching_DB,drugusetobacco_DB,drugusealcohol_DB,druguseDrugs_DB,tobaccouse_DB,dependency_DB,handicap_DB,explainhandicap_DB,leadsinging_DB,medicalrequirement_DB,explaintreatmentneed_DB,millitary_DB,dischargedwithhonor_DB,havefinancialsupport_DB,minimumsupportneed_DB,debt_DB,amountowed_DB,Preacher_name_DB,preacher_Address_DB,preacher_Phone_DB,preacher_state_DB,preacher_zip_DB,Eldername_DB,elder_Address_DB,elder_Phone_DB,elder_city_DB,elder_state_DB,elder_zip_DB,Christian_Biz_DB,chr_biz_address_DB,chr_biz_Phone_DB,chr_biz_city_DB,chr_biz_state_DB,chr_biz_zip_DB,non_christ_bizman_DB,non_christ_biz_address_DB,non_christ_biz_Phone_DB,non_christ_biz_city_DB,non_christ_biz_state_DB,non_christ_biz_zip_DB,enrollmentdate_DB,whywvsop_DB,emergencycontact_DB,econtactaddress_DB,econtactphone_DB,submitdate_DB) VALUES ('" . $firstname . "','" . $lastname . "','" . $birthplace . "','" . $birthdate . "','" . $birthday . "','" . $birthyear . "','" . $address . "','" . $city . "','" . $state . "','" . $zipcode . "','" . $phone . "','" . $EmailAddress . "','" . $interviewConcent . "','" . $educationLevel . "','" . $withdraw . "','" . $schoolnames . "','" . $explainwithdraw . "','" . $employment . "','" . $marriedstat . "','" . $explaindivorce . "','" . $spoucename . "','" . $anychildren . "','" . $spouceconsent . "','" . $baptized . "','" . $baptizinglocation . "','" . $whobaptized . "','" . $congregation . "','" . $churchworkexperience . "','" . $handlepreaching . "','" . $drugusetobacco . "','" . $drugusealcohol . "','" . $druguseDrugs . "','" . $tobaccouse . "','" . $dependency . "','" . $handicap . "','" . $explainhandicap . "','" . $leadsinging . "','" . $medicalrequirement . "','" . $explaintreatmentneed . "','" . $millitary . "','" . $dischargedwithhonor . "','" . $havefinancialsupport . "','" . $minimumsupportneed . "','" . $debt . "','" . $amountowed . "','" . $Preacher_name . "','" . $preacher_Address . "','" . $preacher_Phone . "','" . $preacher_state . "','" . $preacher_zip . "','" . $Eldername . "','" . $elder_Address . "','" . $elder_Phone . "','" . $elder_city . "','" . $elder_state . "','" . $elder_zip . "','" . $Christian_Biz . "','" . $chr_biz_address . "','" . $chr_biz_Phone . "','" . $chr_biz_city . "','" . $chr_biz_state . "','" . $chr_biz_zip . "','" . $non_christ_bizman . "','" . $non_christ_biz_address . "','" . $non_christ_biz_Phone . "','" . $non_christ_biz_city . "','" . $non_christ_biz_state . "','" . $non_christ_biz_zip . "','" . $enrollmentdate . "','" . $whywvsop . "','" . $emergencycontact . "','" . $econtactaddress . "','" . $econtactphone . "','" . $today . "')"; 

// SENDING Email
	  $EmailFrom = "wvsop.com";// this is the email of the person sending the messege.
$EmailTo = "secwvsop@aol.com, wvsop@wvsop.com, austinboyd@suddenlink.net, secwvsop@gmail.com, dirwvsop@aol.com";// Who it's going to. This is the original test to myself.  

	 
	  $Subject = "SUBMITTED: Application for Submission to WV School of Preaching";// This is the subject of the email	  
	  $headers = 'From: WVSOP <wvsop@wvsop.com>';
	  //$headers .= 'MIME-Version: 1.0' . "\r\n";
	 // $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	 
	  $success = mail("secwvsop@aol.com, wvsop@wvsop.com, austindboyd@gmail.com, secwvsop@gmail.com, dirwvsop@aol.com", $Subject, $emailBody, $headers);
	  //$success = mail($EmailTo, $Subject, $emailBody, $headers);

              
              if(!@mysql_query($SQL))
              {
                //Error
                echo("Database entry failed.");
              }else
              {
               //echo("Database entry succeeded.");
			   print "<meta http-equiv=\"refresh\" content=\"0;URL=enrollment-application-thanks.php\">";
              }
              
              //Close the database
              @mysql_close();       
            }
                                                        
          }else
          {
            //You could choose to do something here if the form had not been
            //submitted
          }
          
          ?>      
     
      </div>
    </div>
  </div>
  <div>
    <!--<a href="mailto:"><img src="images/redshop.gif" alt="This site was designed by Redshop studio." name="redshop" width="129" height="25" border="0" id="redshop" /></a>-->
  </div>
  <div id="footer" title="Disclaimer Information"> <span id="copyright" >Footer</span><br />
  </div>
</div>
</div>

</body>
</html>
