<?php
require_once 'classes/init.php';


if(isset($_POST['submit'])){

  $code     = trim($_POST['code']);
  $quantity = trim($_POST['quantity']);

  $_SESSION['results'] = $generate->generatePhoneNumbers($code, $quantity);
  header('Location: results.php');
  exit();

 //var_dump($results); 

}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Phone Generator</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
  </head>

  <body>

  <section id="container">
      <header class="header black-bg">
            <a href="#" class="logo"><b>Generate random phone numbers</b></a>
      </header>
      
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i>Form</h3>
             	
				<div class="row">
                  <div class="col-md-10">
                      <div class="content-panel">
                        <form autocomplete="off" class="form-horizontal style-form" role="form" name="generate" action="" method="POST">

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Number of phone numbers </label>
                            <div class="col-sm-10">
                                <input type="number" min="1" max="50" class="form-control" name="quantity" required>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Country code</label>
                              <div class="col-sm-10">
                              <select class="form-control" id="code" name="code">
                              <option value="">Pick country code</option>
                                <option value="+93">+93 - Afghanistan</option>
                                <option value="+355">+355 - Albania</option>
                                <option value="+213">+213 - Algeria</option>
                                <option value="+376">+376 - Andorra</option>
                                <option value="+244">+244 - Angola</option>
                                <option value="+54">+54 - Argentina</option>
                                <option value="+374">+374 - Armenia</option>
                                <option value="+61">+61 - Australia</option>
                                <option value="+43">+43 - Austria</option>
                                <option value="+994">+994 - Azerbaijan</option>
                                <option value="+1">+1 - Bahamas</option>
                                <option value="+973">+973 - Bahrain</option>
                                <option value="+880">+880 - Bangladesh</option>
                                <option value="+375">+375 - Belarus</option>
                                <option value="+32">+32 - Belgium</option>
                                <option value="+229">+229 - Benin</option>
                                <option value="+591">+591 - Bolivia</option>
                                <option value="+387">+387 - Bosnia and Herzegovina</option>
                                <option value="+267">+267 - Botswana</option>
                                <option value="+55">+55 - Brazil</option>
                                <option value="+226">+226 -	Burkina Faso</option>
                                <option value="+257">+257 - Burundi</option>
                                <option value="+855">+855 - Cambodia</option>
                                <option value="+237">+237 - Cameroon</option>
                                <option value="+1">+1 - Canada</option>
                                <option value="+238">+238 - Cape Verde</option>
                                <option value="+236">+236 - Central African Republic</option>
                                <option value="+235">+235 - Chad</option>
                                <option value="+56">+56 - Chile</option>
                                <option value="+86">+86 - China</option>
                                <option value="+57">+57 - Colombia</option>
                                <option value="+269">+269 - Comoros</option>
                                <option value="+242">+242 - Congo (Brazzaville)</option>
                                <option value="+243">+243 -	Congo (Kinshasa)</option>
                                <option value="+506">+506 - Costa Rica</option>
                                <option value="+225">+225 - Côte D'Ivoire</option>
                                <option value="+358">+358 - Croatia</option>
                                <option value="+53">+53 - Cuba</option>
                                <option value="+357">+357 - Cyprus</option>
                                <option value="+420">+420 - Czech Republic</option>
                                <option value="+45">+45 - Denmark</option>
                                <option value="+253">+253 - Djibouti</option>
                                <option value="+1">+1 - Dominica</option>
                                <option value="+1">+1 - Dominican Republic</option>
                                <option value="+593">+593 - Ecuador</option>
                                <option value="+20">+20 - Egypt</option>
                                <option value="+503">+503 - El Salvador</option>
                                <option value="+240">+240 - Equatorial Guinea</option>
                                <option value="+291">+291 - Eritrea</option>
                                <option value="+372">+372 - Estonia</option>
                                <option value="+251">+251 - Ethiopia</option>
                                <option value="+298">+298 - Faroe Islands</option>
                                <option value="+679">+679 - Fiji</option>
                                <option value="+358">+358 - Finland</option>
                                <option value="+33">+33 - France</option>
                                <option value="+594">+594 - French Guiana</option>
                                <option value="+689">+689 - French Polynesia</option>
                                <option value="+241">+241 - Gabon</option>
                                <option value="+220">+220 - Gambia</option>
                                <option value="+995">+995 - Georgia</option>
                                <option value="+49">+49 - Germany</option>
                                <option value="+233">+233 - Ghana</option>
                                <option value="+350">+350 - Gibraltar</option>
                                <option value="+30">+30 - Greece</option>
                                <option value="+299">+299 - Greenland</option>
                                <option value="+1">+1 - Grenada</option>
                                <option value="+590">+590 - Guadeloupe</option>
                                <option value="+1">+1 - Guam</option>
                                <option value="+502">+502 - Guatemala</option>
                                <option value="+224">+224 - Guinea</option>
                                <option value="+245">+245 - Guinea-Bissau</option>
                                <option value="+522">+592 - Guyana</option>
                                <option value="+509">+509 - Haiti</option>
                                <option value="+379">+379 - Holy See</option>
                                <option value="+504">+504 - Honduras</option>
                                <option value="+852">+852 - Hong Kong</option>
                                <option value="+36">+36 - Hungary</option>
                                <option value="+352">+352 - Iceland</option>
                                <option value="+91">+91 - India</option>
                                <option value="+62">+62 - Indonesia</option>
                                <option value="+98">+98 - Iran</option>
                                <option value="+964">+964 - Iraq</option>
                                <option value="+353">+353 - Ireland</option>
                                <option value="+972">+972 - Israel</option>
                                <option value="+39">+39 - Italy</option>
                                <option value="+1">+1 - Jamaica</option>
                                <option value="+81">+81 - Japan</option>
                                <option value="+962">+962 - Jordan</option>
                                <option value="+7">+7 - Kazakhstan</option>
                                <option value="+254">+254 - Kenya</option>
                                <option value="+686">+686 - Kiribati</option>
                                <option value="+850">+850 - Korea North</option>
                                <option value="+82">+82 - Korea South</option>
                                <option value="+965">+965 - Kuwait</option>
                                <option value="+966">+966 - Kyrgyzstan</option>
                                <option value="+371">+371 - Latvia</option>
                                <option value="+961">+961 - Lebanon</option>
                                <option value="+266">+266 - Lesotho</option>
                                <option value="+231">+231 - Liberia</option>
                                <option value="+218">+218 - Libya</option>
                                <option value="+423">+423 - Liechtenstein</option>
                                <option value="+370">+370 - Lithuania</option>
                                <option value="+352">+352 -	Luxembourg</option>
                                <option value="+853">+853 - Macau</option>
                                <option value="+389">+389 - Macedonia</option>
                                <option value="+261">+261 - Madagascar</option>
                                <option value="+265">+265 - Malawi</option>
                                <option value="+60">+60 - Malaysia</option>
                                <option value="+960">+960 - Maldives</option>
                                <option value="+223">+223 - Mali</option>
                                <option value="+356">+356 -	Malta</option>
                                <option value="+692">+692 - Marshall Islands</option>
                                <option value="+596">+596 - Martinique</option>
                                <option value="+222">+222 - Mauritania</option>
                                <option value="+230">+230 - Mauritius</option>
                                <option value="+262">+262 - Mayotte</option>
                                <option value="+52">+52 - Mexico</option>
                                <option value="+691">+691 - Micronesia</option>
                                <option value="+373">+373 -	Moldova</option>
                                <option value="+377">+377 - Monaco</option>
                                <option value="+976">+976 - Mongolia</option>
                                <option value="+382">+382 - Montenegro</option>
                                <option value="+1">+1 - Montserrat</option>
                                <option value="+212">+212 - Morocco</option>
                                <option value="+258">+258 - Mozambique</option>
                                <option value="+95">+95 - Myanmar</option>
                                <option value="+264">+264 - Namibia</option>
                                <option value="+674">+674 - Nauru</option>
                                <option value="+977">+977 - Nepal</option>
                                <option value="+31">+31 - Netherlands</option>
                                <option value="+687">+687 - New Caledonia</option>
                                <option value="+64">+64 - New Zealand</option>
                                <option value="+505">+505 - Nicaragua</option>
                                <option value="+227">+227 -	Niger</option>
                                <option value="+234">+234 - Nigeria</option>
                                <option value="+683">+683 - Niue</option>
                                <option value="+672">+672 - Norfolk Island</option>
                                <option value="+1">+1 - Northern Mariana Islands</option>
                                <option value="+47">+47 - Norway</option>
                                <option value="+968">+968 -	Oman</option>
                                <option value="+92">+92 - Pakistan</option>
                                <option value="+680">+680 - Palau</option>
                                <option value="+970">+970 - Palestine </option>
                                <option value="+507">+507 - Panama</option>
                                <option value="+675">+675 - Papua New Guinea</option>
                                <option value="+595">+595 - Paraguay</option>
                                <option value="+51">+51 - Peru</option>
                                <option value="+63">+63 - Philippines</option>
                                <option value="+870">+870 - Pitcairn</option>
                                <option value="+48">+48 - Poland</option>
                                <option value="+351">+351 - Portugal</option>
                                <option value="+1">+1 - Puerto Rico</option>
                                <option value="+974">+974 -	Qatar</option>
                                <option value="+40">+40 - Romania</option>
                                <option value="+7">+7 - Russian</option>
                                <option value="+250">+250 -	Rwanda</option>
                                <option value="+1">+1 - Saint Kitts and Nevis</option>
                                <option value="+1">+1 -	Saint Lucia</option>
                                <option value="+508">+508 - Saint Pierre and Miquelon</option>
                                <option value="+1">+1 - Saint Vincent and the Grenadines</option>
                                <option value="+685">+685 - Samoa</option>
                                <option value="+378">+378 - San Marino</option>
                                <option value="+239">+239 - São Tomé and Principe</option>
                                <option value="+966">+966 - Saudi Arabia</option>
                                <option value="+221">+221 - Senegal</option>
                                <option value="+381">+381 -	Serbia</option>
                                <option value="+248">+248 - Seychelles</option>
                                <option value="+232">+232 - Sierra Leone</option>
                                <option value="+65">+65 -  Singapore</option>
                                <option value="+421">+421 - Slovakia</option>
                                <option value="+386">+386 - Slovenia</option>
                                <option value="+677">+677 - Solomon Islands</option>
                                <option value="+252">+252 - Somalia</option>
                                <option value="+27">+27 - South Africa</option>
                                <option value="+34">+34 - Spain</option>
                                <option value="+94">+94 - Sri Lanka</option>
                                <option value="+249">+249 - Sudan</option>
                                <option value="+597">+597 - Suriname</option>
                                <option value="+47">+47 - Svalbard and Jan Mayen Islands</option>
                                <option value="+268">+268 - Swaziland</option>
                                <option value="+46">+46 - Sweden</option>
                                <option value="+41">+41 - Switzerland</option>
                                <option value="+963">+963 - Syria</option>
                                <option value="+886">+886 - Taiwan</option>
                                <option value="+992">+992 -	Tajikistan</option>
                                <option value="+255">+255 - Tanzania</option>
                                <option value="+66">+66 - Thailand</option>
                                <option value="+670">+670 - Timor-Leste</option>
                                <option value="+228">+228 - Togo</option>
                                <option value="+690">+690 - Tokelau</option>
                                <option value="+676">+676 - Tonga</option>
                                <option value="+1">1 - Trinidad and Tobago</option>
                                <option value="+216">+216 - Tunisia</option>
                                <option value="+90">+90 - Turkey</option>
                                <option value="+993">+993 - Turkmenistan</option>
                                <option value="+688">+688 - Tuvalu</option>
                                <option value="+256">+256 - Uganda</option>
                                <option value="+380">+380 - Ukraine</option>
                                <option value="+971">+971 - United Arab Emirates</option>
                                <option value="+44">+44 - United Kingdom</option>
                                <option value="+1">+1 - United States of America</option>
                                <option value="+598">+598 - Uruguay</option>
                                <option value="+998">+998 - Uzbekistan</option>
                                <option value="+678">+678 - Vanuatu</option>
                                <option value="+58">+58 - Venezuela</option>
                                <option value="+84">+84 - Vietnam</option>
                                <option value="+1">+1 - Virgin Islands, British</option>
                                <option value="+1">+1 - Virgin Islands, US</option>
                                <option value="+681">+681 - Wallis and Futuna Islands</option>
                                <option value="+967">+967 - Yemen</option>
                                <option value="+260">+260 - Zambia</option>
                                <option value="+263">+263 - Zimbabwe</option>
                              </select>
                              </div>
                          </div>

                          
                          <div style="margin-left:100px;">
                            <input type="submit" name="submit" value="Submit" class="btn btn-theme">
                          </div>

                          <?php 
                            if(empty($errors) === false){
                            echo '<p style="color:red;text-align:center;font-size:1.875em;">' . implode('</p><p style="color:red">', $errors) . '</p>';  
                            }
                          ?>
                        </form>
                      </div>
                  </div>
              </div>
		</section>

      </section></section>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    
  </body>
</html>