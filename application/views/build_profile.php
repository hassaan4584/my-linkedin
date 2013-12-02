<!DOCTYPE html>
<!-- saved from url=(0072)https://www.linkedin.com/reg/basic-profile?_l=en_US&flow=1ofgqp7-16k61ld -->
<html lang="en" class="os-win"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<base href="<?php echo base_url(); ?>" />                   

				   <script type="text/javascript" src="./Build Your Profile   LinkedIn_files/js"></script>
                   
<link rel="apple-touch-icon-precomposed" href="https://www.linkedin.com/img/icon/apple-touch-icon.png">
<!--[if lte IE 8]>
  <link rel="shortcut icon" href="https://static.licdn.com/scds/common/u/images/logos/favicons/v1/16x16/favicon.ico">
<![endif]-->
<!--[if IE 9]>
  <link rel="shortcut icon" href="https://static.licdn.com/scds/common/u/images/logos/favicons/v1/favicon.ico">
<![endif]-->
<link rel="icon" href="https://static.licdn.com/scds/common/u/images/logos/favicons/v1/favicon.ico">

 <link rel="openid.server" href="https://www.linkedin.com/uas/openid/authorize">
 
 <link rel="stylesheet" type="text/css" href="./Build Your Profile   LinkedIn_files/css">
 <script type="text/javascript" src="./Build Your Profile   LinkedIn_files/js(1)"></script>

<script src="jquery-1.10.2.min.js"></script>
 
 <script type="text/javascript">
 LI.define('UrlPackage');
 LI.UrlPackage.containerCore = 
 ["https://static.licdn.com/scds/concat/common/js?h=d7z5zqt26qe7ht91f8494hqx5"]
 [0];
 </script>
        <script type="text/javascript" src="./Build Your Profile   LinkedIn_files/scds-hashes.js"></script>
      <script type="text/javascript">
        LI.JSContentBasePath = "https://static.licdn.com/scds/concat/common/js?v=build-2000_1_30317-prod";
        LI.CSSContentBasePath = "https://static.licdn.com/scds/concat/common/css?v=build-2000_1_30317-prod";
        LI.injectRelayHtmlUrl = "https://static.licdn.com/scds/common/u/lib/inject/0.4.2/relay.html";
        LI.injectRelaySwfUrl = "https://static.licdn.com/scds/common/u/lib/inject/0.4.2/relay.swf";
        LI.comboBaseUrl = "https://static.licdn.com/scds/concat/common/css?v=build-2000_1_30317-prod";
        LI.staticUrlHashEnabled = "true";
      </script>
 
 <script type="text/javascript" src="./Build Your Profile   LinkedIn_files/js(2)"></script>

<title>Build Your Profile | LinkedIn</title>
                  
                    <script type="text/javascript" src="./Build Your Profile   LinkedIn_files/js(3)"></script>
                  
                    <link rel="stylesheet" type="text/css" href="./Build Your Profile   LinkedIn_files/css(1)">
                  
                    <script type="text/javascript" src="./Build Your Profile   LinkedIn_files/js(4)"></script>
<script type="text/javascript">
LI.i18n.register( 'typeahead2-no-matching-results', 'No matching results' );
LI.i18n.register( 'typeahead2-search-connections', 'Connections' );
LI.i18n.register( 'typeahead2-search-companies', 'Companies' );
LI.i18n.register( 'typeahead2-search-groups', 'Groups' );
LI.i18n.register( 'typeahead2-search-features', 'Features' );
LI.i18n.register( 'typeahead2-search-skills', 'Skills' );
LI.i18n.register( 'typeahead2-search-skill', 'Skill' );
LI.i18n.register( 'typeahead2-search-suggestions', 'Suggestions' );
LI.i18n.register( 'typeahead2-search-schools', 'Universities' );
LI.i18n.register( 'typeahead2-search-degrees', 'Degrees' );
LI.i18n.register( 'typeahead2-search-fields-of-study', 'Fields of study' );
LI.i18n.register( 'typeahead2-cap-prospects', 'Profiles' );
LI.i18n.register( 'typeahead2-cap-jobs', 'Jobs' );
LI.i18n.register( 'typeahead2-cap-projects', 'Projects' );
LI.i18n.register( 'typeahead2-search-discussion-participants', 'Participants' );
LI.i18n.register( 'typeahead2-search-group-members', 'Group Members' );

LI.TypeaheadDataSourceUrls = {
  COMPANY: "/ta/company",
  INDUSTRY: "/ta/industry",
  REGION: "/ta/region",
  GROUP: "/ta/group",
  JOB_TITLE: "/ta/titleV2",
  JOB_FUNCTION: "/ta/jobfunc",
  SKILL: "/ta/skill",
  LANGUAGE: "/ta/language",
  SCHOOL: "/ta/school",
  DEGREE: "/ta/degree",
  FIELD_OF_STUDY: "/ta/fieldofstudy",
  MY_NETWORK: "/ta/mynetwork",
  MY_GROUP: "/typeahead/mygroup",
  FIRST_DEGREE_MY_NETWORK: "/ta/my1stnetwork",
  SITEFEATURE: "/ta/sitefeature",
  FEDERATOR: "/ta/federator",
  AUTOCOMPLETE: "/ta/autocomplete",
  CAP_PROSPECTS_PROJECTS_JOBS: "/cap/lookup/capTaAjax"
};

LI.Typeahead2Dependencies = {
  scripts: 
      
        
            
              
              
                ["https://static.licdn.com/scds/concat/common/js?h=7rb4l1o9vdmb0cskta2khh57b-62cjxbtqyt2o85tawwwz12otx-4x86zwg60yai73dk59vhiu5hr-e9hlju2yiqcg1o8gd3c94jdkf"]
              
            
          
        
      
    
};

        
    
            LI.Controls.addControl('control-http-12119-2240875-1', 'Typeahead2', {
                                source: 'TYPE_COMPANY',
                                hiddenField: 'companyID-companyInfo-employeeCompany-employedProfileForm',
                                maxResultsDisplayed: 10,
                                loadingImgConfig: {
                                  loaderClass: 'typeahead-loading-icon',
                                  loaderText: 'Loading'
                                },
                                renderAs: ['DEFAULT','AUTOCHOOSE'],
                                handleEventAs: ['DEFAULT','USE_NO_RESULTS'],
                                containerEl: 'employedProfileForm_company_ta',
                                noResultsEl: 'employedProfileForm_industry',
                                itemSelectEventHandler: function(){
                                  var form = YDom.get('employed-form');
                                  YDom.removeClass(form, 'unknown-company');
                                  YDom.addClass(form, 'known-company');
                                },
                                unmatchedItemSelectEventHandler: function(){
                                  var industry = YDom.get('employedProfileForm_industry'),
                                      form = YDom.get('employed-form');
                                  YDom.addClass(industry, 'show');
                                  YDom.addClass(form, 'unknown-company');
                                  YDom.removeClass(form, 'known-company');
                                }
                });
          

            
        /* extlib: _countrypostalcodeinteraction */
          
        
    
            LI.Controls.addControl('control-http-12119-2240878-2', 'countryPostalCodeInteraction', {});
          

            
        /* extlib: _companyprefillaction */
          
        
    
            LI.Controls.addControl('control-http-12119-2240879-3', 'companyPrefillAction', {});
          

            
        /* extlib: _frontierajaxform */
          
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
    
LI.i18n.register( 'oneOrMoreErrors', 'There were one or more errors in your submission. Please correct the marked fields below.' );
LI.i18n.register( 'unableToProcessRequest', 'We were unable to handle your request. Please try again.' );
        
    
            LI.Controls.addControl('control-http-12119-2240879-4', 'FrontierAJAXForm', {
  injectAfter: '#employed-btn-submit',
  errorId: 'register-global-error',
  errorCallback: function(errs){
    if(errs && errs.fieldErrors && errs.fieldErrors['industryChooser-employeeCompany-employedProfileForm']){
      YDom.addClass(YDom.get('employedProfileForm_industry'), 'show');
    }
  }
});
          

            
        /* extlib: _stylishinputborders */
          
        
    
            LI.Controls.addControl('control-http-12119-2240880-5', 'StylishInputBorders', {});
          

            
      
    
            LI.Controls.addControl('control-http-12119-2240884-6', 'Typeahead2', {
                                source: 'TYPE_COMPANY',
                                hiddenField: 'companyID-companyInfo-employeeCompany-lookingProfileForm',
                                maxResultsDisplayed: 10,
                                loadingImgConfig: {
                                  loaderClass: 'typeahead-loading-icon',
                                  loaderText: 'Loading'
                                },
                                renderAs: ['DEFAULT','AUTOCHOOSE'],
                                handleEventAs: ['DEFAULT','USE_NO_RESULTS'],
                                containerEl: 'lookingProfileForm_company_ta',
                                noResultsEl: 'lookingProfileForm_industry',
                                itemSelectEventHandler: function(){
                                  var form = YDom.get('looking-form');
                                  YDom.removeClass(form, 'unknown-company');
                                  YDom.addClass(form, 'known-company');
                                },
                                unmatchedItemSelectEventHandler: function(){
                                  var industry = YDom.get('lookingProfileForm_industry'),
                                      form = YDom.get('looking-form');
                                  YDom.addClass(industry, 'show');
                                  YDom.addClass(form, 'unknown-company');
                                  YDom.removeClass(form, 'known-company');

                                }
                });
          

            
      
    
            LI.Controls.addControl('control-http-12119-2240886-7', 'countryPostalCodeInteraction', {});
          

            
      
    
            LI.Controls.addControl('control-http-12119-2240887-8', 'companyPrefillAction', {});
          

            
      
    
            LI.Controls.addControl('control-http-12119-2240887-9', 'FrontierAJAXForm', {
  injectAfter: '#looking-btn-submit',
  errorId: 'register-global-error',
  errorCallback: function(errs){
    if(errs && errs.fieldErrors && errs.fieldErrors['industryChooser-employeeCompany-lookingProfileForm']){
      YDom.addClass(YDom.get('lookingProfileForm_industry'), 'show');
    }
  }
});
          

            
      
    
            LI.Controls.addControl('control-http-12119-2240887-10', 'StylishInputBorders', {});
          

            
      
    
            LI.Controls.addControl('control-http-12119-2240890-11', 'Typeahead2', {
                                source: 'TYPE_SCHOOL',
                                hiddenField: 'schoolID-school-education-studentProfileForm',
                                maxResultsDisplayed: 10,
                                loadingImgConfig: {
                                  loaderClass: 'typeahead-loading-icon',
                                  loaderText: 'Loading'
                                },
                                renderAs: ['DEFAULT','AUTOCHOOSE'],
                                containerEl: 'studentProfileForm_school_ta',
                                itemSelectEventHandler: function(type, args) {
                                  LI.Registration.AgeVerification.enableAgeVerification(type, args);
                                },
                                unmatchedItemSelectEventHandler: function() {
                                  LI.Registration.AgeVerification.disableAgeVerification();
                                }
                });
          

            
      
        
        
        /* extlib: _ballooncallout */
          
        
        
        
        
      
    
            LI.Controls.addControl('control-http-12119-2240890-12', 'LI.BalloonCallout', {
                 width: 200,
                 id:'info-callout',
                 orientation: 'left-top',
                 offsetX: 5,
                 offsetY: -10,
                 type: 'hovercard-callout'
                });
          

            
      
    
            LI.Controls.addControl('control-http-12119-2240892-13', 'countryPostalCodeInteraction', {});
          

            
      
    
            LI.Controls.addControl('control-http-12119-2240892-14', 'FrontierAJAXForm', {injectAfter: '#student-btn-submit', errorId: 'register-global-error'});
          

            
      
    
            LI.Controls.addControl('control-http-12119-2240892-15', 'StylishInputBorders', {});
          

            
      
        
        
        /* extlib: _selfemployedtoggle */
          
        
        
        
        
      
    
            LI.Controls.addControl('control-http-12119-2240892-16', 'selfEmployedToggle', {});
          

            
    
            LI.Controls.addControl('control-http-12119-2240893-17', 'EstablishProfileForms', {useRadios:true});
          </script><script id="yui__dyn_0" type="text/javascript" src="./Build Your Profile   LinkedIn_files/ga.js"></script><script id="yui__dyn_1" type="text/javascript" src="./Build Your Profile   LinkedIn_files/quant.js"></script><script id="yui__dyn_2" type="text/javascript" src="./Build Your Profile   LinkedIn_files/beacon.js"></script><script id="yui__dyn_3" type="text/javascript" src="./Build Your Profile   LinkedIn_files/js(5)"></script></head>
        

<body class="en member v2 guest chrome-v5 chrome-v5-responsive background-v4 sticky-bg js " id="pagekey-reg-basic-profile-new"><iframe id="_yuiResizeMonitor" title="Text Resize Monitor" style="position: absolute; visibility: visible; background-color: transparent; border-width: 0px; width: 2em; height: 2em; left: 0px; top: -21px;"></iframe><div id="callout-overlay" class="yui-module yui-overlay" style="visibility: visible; z-index: 10;"></div>

 
 <input id="inSlowConfig" type="hidden" value="false">

<script type="text/javascript">document.body.className += " js ";</script>

<div id="header" class="member">
 <div class="wrapper">
 <div id="nav-primary">
 <div class="wrapper">
 <div class="logo" id="logo-linkedin">
 <img src="./Build Your Profile   LinkedIn_files/logo_linkedin_92x22.png" width="92" height="22" alt="LinkedIn">
 </div>
 </div>
 </div>
 </div>
</div>
<div id="body">
 
 <div class="wrapper">

<div id="global-error">
</div>
  
    <div id="main" class="establish-profile employed">
      <div class="progress-container">
            
                <h1><strong></strong>, let's start creating your professional profile</h1>
          
      </div>
      
        <div id="register-global-error"></div>
      
            <div id="motivation" class="motivation">
              
              <div class="profile-features">
                <h3>A LinkedIn profile helps you...</h3>
                <ul>
                  <li class="first">Showcase your skills and experience</li>
                  <li>Be found for new opportunities</li>
                  <li>Stay in touch with colleagues and friends</li>
                </ul>
              </div>
            </div>
      
      <ul style="display:none;">
        <!-- /status-chooser-container -->
      </ul>
      
	   <script type="text/javascript">
        jQuery(document).ready(function ()
        {
            $("input[name='status-chooser']").change(radioValueChanged);
        })

        function radioValueChanged()
        {
            radioValue = $(this).val();

          //  alert(radioValue);

            if(radioValue == 'undefined' || radioValue == "0")
            {
              //  $('#Question2Wrapper:visible').hide();
            }
            else if(radioValue=='looking')
            {
                $('#looking-form').show();
				$('#employed-form').hide();
				$('#student-form').hide();
            }
			else if(radioValue=='student')
            {
                $('#looking-form').hide();
				$('#employed-form').hide();
				$('#student-form').show();
            }
			else if(radioValue=='employed')
            {
                $('#looking-form').hide();
				$('#employed-form').show();
				$('#student-form').hide();
            }
        } 
    </script>

	  
	  
	  

      
        <div id="control_gen_1">
  
      
        <form action="<?php echo base_url();?>index.php/BuildProfile/process" method="POST" name="employedProfileForm" novalidate="novalidate" id="employed-form" class="standard-form sided employed stacked-form active-form unknown-company">
       
      <h2 class="status">I am currently <span class="employed">Employed</span></h2>

    <ul class="infoList">


        <li class="country required location">
            <label for="countryCode-location-employedProfileForm" class="hidden-el">
              <abbr title="This is a required field."><em>*</em></abbr>
              Country
            </label>
              <div class="fieldgroup">
                <span class="error" id="countryCode-location-employedProfileForm-error"></span>
                <select name="countryCode" id="countryCode-location-employedProfileForm" class="country-select">
<option value="">Country...</option>
<option value="Afganistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Aruba">Aruba</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bermuda">Bermuda</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bonaire">Bonaire</option>
<option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
<option value="Botswana">Botswana</option>
<option value="Brazil">Brazil</option>
<option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
<option value="Brunei">Brunei</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Canary Islands">Canary Islands</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Channel Islands">Channel Islands</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos Island">Cocos Island</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cote DIvoire">Cote D'Ivoire</option>
<option value="Croatia">Croatia</option>
<option value="Cuba">Cuba</option>
<option value="Curaco">Curacao</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="East Timor">East Timor</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Falkland Islands">Falkland Islands</option>
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="French Guiana">French Guiana</option>
<option value="French Polynesia">French Polynesia</option>
<option value="French Southern Ter">French Southern Ter</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Great Britain">Great Britain</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Hawaii">Hawaii</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran">Iran</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Isle of Man">Isle of Man</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Korea North">Korea North</option>
<option value="Korea Sout">Korea South</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Laos">Laos</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libya">Libya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macau">Macau</option>
<option value="Macedonia">Macedonia</option>
<option value="Madagascar">Madagascar</option>
<option value="Malaysia">Malaysia</option>
<option value="Malawi">Malawi</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Midway Islands">Midway Islands</option>
<option value="Moldova">Moldova</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Nambia">Nambia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherland Antilles">Netherland Antilles</option>
<option value="Netherlands">Netherlands (Holland, Europe)</option>
<option value="Nevis">Nevis</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan" selected="">Pakistan</option>
<option value="Palau Island">Palau Island</option>
<option value="Palestine">Palestine</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Phillipines">Philippines</option>
<option value="Pitcairn Island">Pitcairn Island</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Republic of Montenegro">Republic of Montenegro</option>
<option value="Republic of Serbia">Republic of Serbia</option>
<option value="Reunion">Reunion</option>
<option value="Romania">Romania</option>
<option value="Russia">Russia</option>
<option value="Rwanda">Rwanda</option>
<option value="St Barthelemy">St Barthelemy</option>
<option value="St Eustatius">St Eustatius</option>
<option value="St Helena">St Helena</option>
<option value="St Kitts-Nevis">St Kitts-Nevis</option>
<option value="St Lucia">St Lucia</option>
<option value="St Maarten">St Maarten</option>
<option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
<option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
<option value="Saipan">Saipan</option>
<option value="Samoa">Samoa</option>
<option value="Samoa American">Samoa American</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Serbia">Serbia</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra Leone">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syria">Syria</option>
<option value="Tahiti">Tahiti</option>
<option value="Taiwan">Taiwan</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania">Tanzania</option>
<option value="Thailand">Thailand</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Erimates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States of America">United States of America</option>
<option value="Uraguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Vatican City State">Vatican City State</option>
<option value="Venezuela">Venezuela</option>
<option value="Vietnam">Vietnam</option>
<option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
<option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
<option value="Wake Island">Wake Island</option>
<option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
<option value="Yemen">Yemen</option>
<option value="Zaire">Zaire</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
</select>              </div>
        </li>
        <li class="postal-code">
            <label for="postalCode-location-employedProfileForm">
              <abbr title="This is a required field."><em>*</em></abbr>
              <span>Postal Code</span>
            </label>
            <div class="fieldgroup">
              <span class="error" id="postalCode-location-employedProfileForm-error"></span>
                  <input type="text" name="postalCode" value="" id="postalCode-location-employedProfileForm" class="text-input" data-ime-mode-disabled="">
          </div>
          <p class="example">
            <span class="code">&nbsp;</span>
          </p>
        </li> <li id="status-chooser-container" class="status-chooser-container">
          <fieldset>
            <legend class="status-chooser-legend"><span>I am currently:</span></legend>
            <ul>
              <li class="employed"><label for="employed-btn">
                <input type="radio" name="status-chooser" value="employed" id="employed-btn" checked="checked">Employed</label>
              </li>
              <li class="looking"><label for="looking-btn"><input type="radio" name="status-chooser" value="looking" id="looking-btn">Job Seeker</label></li>
              <li class="student"><label for="student-btn"><input type="radio" name="status-chooser" value="student" id="student-btn">Student</label></li>
            </ul>
          </fieldset>
        </li>


        <li class="job-title required">
          <label for="workCompanyTitle-employedProfileForm">
            <abbr title="This is a required field."><em>*</em></abbr>
            Job title
          </label>
          <div class="fieldgroup">
            <span class="error" id="workCompanyTitle-employedProfileForm-error"></span>
            <input type="text" name="workCompanyTitle" value="" id="workCompanyTitle-employedProfileForm" class="text-input">
          </div>
        </li>

        <li class="self-employed">
            <div class="fieldgroup">
              <span class="error" id="selfEmployed-employeeCompany-employedProfileForm-error"></span>
              <input type="checkbox" name="selfEmployed" value="true" id="selfEmployed-employeeCompany-employedProfileForm">
              <label for="selfEmployed-employeeCompany-employedProfileForm">I am self-employed</label>
            </div>
        </li>

        <li class="company required">
              <label for="companyName-companyInfo-employeeCompany-employedProfileForm">
                <abbr title="This is a required field."><em>*</em></abbr>
                Company
              </label>
              <div id="employedProfileForm_company_ta" class="fieldgroup yui-ac"><div class="typeahead-results-container yui-ac-container"><div class="yui-ac-content" style="display: none;"><div class="yui-ac-hd" style="display: none;"></div><div class="yui-ac-bd"><ul><li style="display: none;"></li><li style="display: none;"></li><li style="display: none;"></li><li style="display: none;"></li><li style="display: none;"></li><li style="display: none;"></li><li style="display: none;"></li><li style="display: none;"></li><li style="display: none;"></li><li style="display: none;"></li></ul></div><div class="yui-ac-ft" style="display: none;"></div></div></div>
                <span class="error" id="companyName-companyInfo-employeeCompany-employedProfileForm-error"></span>
                
                  <input type="text" name="companyName" value="" id="companyName-companyInfo-employeeCompany-employedProfileForm" class="text-input yui-ac-input" autocomplete="off">
                

              </div>
        </li>

        <li id="employedProfileForm_industry" class="industry required show">
            <label for="industryChooser-employeeCompany-employedProfileForm">
              <abbr title="This is a required field."><em>*</em></abbr>
              Industry:
            </label>
            <div class="fieldgroup">
              <span class="error" id="industryChooser-employeeCompany-employedProfileForm-error"></span>
              <select name="industryChooser" id="industryChooser-employeeCompany-employedProfileForm">
<option value="" selected="">-</option><option value="47" class="corp fin">Accounting</option><option value="94" class="man tech tran">Airlines/Aviation</option><option value="120" class="leg org">Alternative Dispute Resolution</option><option value="125" class="hlth">Alternative Medicine</option><option value="127" class="art med">Animation</option><option value="19" class="good">Apparel &amp; Fashion</option><option value="50" class="cons">Architecture &amp; Planning</option><option value="111" class="art med rec">Arts and Crafts</option><option value="53" class="man">Automotive</option><option value="52" class="gov man">Aviation &amp; Aerospace</option><option value="41" class="fin">Banking</option><option value="12" class="gov hlth tech">Biotechnology</option><option value="36" class="med rec">Broadcast Media</option><option value="49" class="cons">Building Materials</option><option value="138" class="corp man">Business Supplies and Equipment</option><option value="129" class="fin">Capital Markets</option><option value="54" class="man">Chemicals</option><option value="90" class="org serv">Civic &amp; Social Organization</option><option value="51" class="cons gov">Civil Engineering</option><option value="128" class="cons corp fin">Commercial Real Estate</option><option value="118" class="tech">Computer &amp; Network Security</option><option value="109" class="med rec">Computer Games</option><option value="3" class="tech">Computer Hardware</option><option value="5" class="tech">Computer Networking</option><option value="4" class="tech">Computer Software</option><option value="48" class="cons">Construction</option><option value="24" class="good man">Consumer Electronics</option><option value="25" class="good man">Consumer Goods</option><option value="91" class="org serv">Consumer Services</option><option value="18" class="good">Cosmetics</option><option value="65" class="agr">Dairy</option><option value="1" class="gov tech">Defense &amp; Space</option><option value="99" class="art med">Design</option><option value="69" class="edu">Education Management</option><option value="132" class="edu org">E-Learning</option><option value="112" class="good man">Electrical/Electronic Manufacturing</option><option value="28" class="med rec">Entertainment</option><option value="86" class="org serv">Environmental Services</option><option value="110" class="corp rec serv">Events Services</option><option value="76" class="gov">Executive Office</option><option value="122" class="corp serv">Facilities Services</option><option value="63" class="agr">Farming</option><option value="43" class="fin">Financial Services</option><option value="38" class="art med rec">Fine Art</option><option value="66" class="agr">Fishery</option><option value="34" class="rec serv">Food &amp; Beverages</option><option value="23" class="good man serv">Food Production</option><option value="101" class="org">Fund-Raising</option><option value="26" class="good man">Furniture</option><option value="29" class="rec">Gambling &amp; Casinos</option><option value="145" class="cons man">Glass, Ceramics &amp; Concrete</option><option value="75" class="gov">Government Administration</option><option value="148" class="gov">Government Relations</option><option value="140" class="art med">Graphic Design</option><option value="124" class="hlth rec">Health, Wellness and Fitness</option><option value="68" class="edu">Higher Education</option><option value="14" class="hlth">Hospital &amp; Health Care</option><option value="31" class="rec serv tran">Hospitality</option><option value="137" class="corp">Human Resources</option><option value="134" class="corp good tran">Import and Export</option><option value="88" class="org serv">Individual &amp; Family Services</option><option value="147" class="cons man">Industrial Automation</option><option value="84" class="med serv">Information Services</option><option value="96" class="tech">Information Technology and Services</option><option value="42" class="fin">Insurance</option><option value="74" class="gov">International Affairs</option><option value="141" class="gov org tran">International Trade and Development</option><option value="6" class="tech">Internet</option><option value="45" class="fin">Investment Banking</option><option value="46" class="fin">Investment Management</option><option value="73" class="gov leg">Judiciary</option><option value="77" class="gov leg">Law Enforcement</option><option value="9" class="leg">Law Practice</option><option value="10" class="leg">Legal Services</option><option value="72" class="gov leg">Legislative Office</option><option value="30" class="rec serv tran">Leisure, Travel &amp; Tourism</option><option value="85" class="med rec serv">Libraries</option><option value="116" class="corp tran">Logistics and Supply Chain</option><option value="143" class="good">Luxury Goods &amp; Jewelry</option><option value="55" class="man">Machinery</option><option value="11" class="corp">Management Consulting</option><option value="95" class="tran">Maritime</option><option value="80" class="corp med">Marketing and Advertising</option><option value="97" class="corp">Market Research</option><option value="135" class="cons gov man">Mechanical or Industrial Engineering</option><option value="126" class="med rec">Media Production</option><option value="17" class="hlth">Medical Devices</option><option value="13" class="hlth">Medical Practice</option><option value="139" class="hlth">Mental Health Care</option><option value="71" class="gov">Military</option><option value="56" class="man">Mining &amp; Metals</option><option value="35" class="art med rec">Motion Pictures and Film</option><option value="37" class="art med rec">Museums and Institutions</option><option value="115" class="art rec">Music</option><option value="114" class="gov man tech">Nanotechnology</option><option value="81" class="med rec">Newspapers</option><option value="100" class="org">Nonprofit Organization Management</option><option value="57" class="man">Oil &amp; Energy</option><option value="113" class="med">Online Media</option><option value="123" class="corp">Outsourcing/Offshoring</option><option value="87" class="serv tran">Package/Freight Delivery</option><option value="146" class="good man">Packaging and Containers</option><option value="61" class="man">Paper &amp; Forest Products</option><option value="39" class="art med rec">Performing Arts</option><option value="15" class="hlth tech">Pharmaceuticals</option><option value="131" class="org">Philanthropy</option><option value="136" class="art med rec">Photography</option><option value="117" class="man">Plastics</option><option value="107" class="gov org">Political Organization</option><option value="67" class="edu">Primary/Secondary Education</option><option value="83" class="med rec">Printing</option><option value="105" class="corp">Professional Training &amp; Coaching</option><option value="102" class="corp org">Program Development</option><option value="79" class="gov">Public Policy</option><option value="98" class="corp">Public Relations and Communications</option><option value="78" class="gov">Public Safety</option><option value="82" class="med rec">Publishing</option><option value="62" class="man">Railroad Manufacture</option><option value="64" class="agr">Ranching</option><option value="44" class="cons fin good">Real Estate</option><option value="40" class="rec serv">Recreational Facilities and Services</option><option value="89" class="org serv">Religious Institutions</option><option value="144" class="gov man org">Renewables &amp; Environment</option><option value="70" class="edu gov">Research</option><option value="32" class="rec serv">Restaurants</option><option value="27" class="good man">Retail</option><option value="121" class="corp org serv">Security and Investigations</option><option value="7" class="tech">Semiconductors</option><option value="58" class="man">Shipbuilding</option><option value="20" class="good rec">Sporting Goods</option><option value="33" class="rec">Sports</option><option value="104" class="corp">Staffing and Recruiting</option><option value="22" class="good">Supermarkets</option><option value="8" class="gov tech">Telecommunications</option><option value="60" class="man">Textiles</option><option value="130" class="gov org">Think Tanks</option><option value="21" class="good">Tobacco</option><option value="108" class="corp gov serv">Translation and Localization</option><option value="92" class="tran">Transportation/Trucking/Railroad</option><option value="59" class="man">Utilities</option><option value="106" class="fin tech">Venture Capital &amp; Private Equity</option><option value="16" class="hlth">Veterinary</option><option value="93" class="tran">Warehousing</option><option value="133" class="good">Wholesale</option><option value="142" class="good man rec">Wine and Spirits</option><option value="119" class="tech">Wireless</option><option value="103" class="art med rec">Writing and Editing</option></select>
            </div>
        </li>

    </ul>

    <p class="actions">
          <span>
                <input type="submit" name="" value="Create my profile" id="employed-btn-submit" class="btn-primary"><div class="progress-indicator" style="line-height: 16px;"></div>
          </span>
    </p>

    <p class="key"><strong>*</strong> Indicates required field.</p>
      
     
          
          <input type="hidden" name="jsEnabled" value="" id="jsEnabled-employedProfileForm"><input type="hidden" name="fandango" value="" id="fandango-employedProfileForm"><input type="hidden" name="headline" value="" id="headline-employedProfileForm"><input type="hidden" name="companyID" value="" id="companyID-companyInfo-employeeCompany-employedProfileForm"><input type="hidden" name="csrfToken" value="ajax:1690202095752644668" id="csrfToken-employedProfileForm"><input type="hidden" name="sourceAlias" value="0_2nuweabSjU-BOy1HFto4tRsrgPtss1-6iUJGlP4cF4r" id="sourceAlias-employedProfileForm"><input type="hidden" name="flow" value="1ofgqp7-16k61ld" id="flow-employedProfileForm">
          <div class="screen"></div></form>

        
        <form action="<?php echo base_url();?>index.php/BuildProfile/process" method="POST" name="lookingProfileForm" novalidate="novalidate" id="looking-form" class="standard-form sided looking stacked-form">
        

      <h2 class="status">I am currently <span class="looking">A Job Seeker</span></h2>

    <ul class="infoList">

      
        <li class="country required">
          
            <label for="countryCode-location-lookingProfileForm" class="hidden-el">
              <abbr title="This is a required field."><em>*</em></abbr>
              Country
            </label>
              <div class="fieldgroup">
                <span class="error" id="countryCode-location-lookingProfileForm-error"></span>
                <select name="countryCode" id="countryCode-location-lookingProfileForm" class="country-select">
<option value="">Country...</option>
<option value="Afganistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Aruba">Aruba</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bermuda">Bermuda</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bonaire">Bonaire</option>
<option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
<option value="Botswana">Botswana</option>
<option value="Brazil">Brazil</option>
<option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
<option value="Brunei">Brunei</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Canary Islands">Canary Islands</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Channel Islands">Channel Islands</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos Island">Cocos Island</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cote DIvoire">Cote D'Ivoire</option>
<option value="Croatia">Croatia</option>
<option value="Cuba">Cuba</option>
<option value="Curaco">Curacao</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="East Timor">East Timor</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Falkland Islands">Falkland Islands</option>
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="French Guiana">French Guiana</option>
<option value="French Polynesia">French Polynesia</option>
<option value="French Southern Ter">French Southern Ter</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Great Britain">Great Britain</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Hawaii">Hawaii</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran">Iran</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Isle of Man">Isle of Man</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Korea North">Korea North</option>
<option value="Korea Sout">Korea South</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Laos">Laos</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libya">Libya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macau">Macau</option>
<option value="Macedonia">Macedonia</option>
<option value="Madagascar">Madagascar</option>
<option value="Malaysia">Malaysia</option>
<option value="Malawi">Malawi</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Midway Islands">Midway Islands</option>
<option value="Moldova">Moldova</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Nambia">Nambia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherland Antilles">Netherland Antilles</option>
<option value="Netherlands">Netherlands (Holland, Europe)</option>
<option value="Nevis">Nevis</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan" selected="">Pakistan</option>
<option value="Palau Island">Palau Island</option>
<option value="Palestine">Palestine</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Phillipines">Philippines</option>
<option value="Pitcairn Island">Pitcairn Island</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Republic of Montenegro">Republic of Montenegro</option>
<option value="Republic of Serbia">Republic of Serbia</option>
<option value="Reunion">Reunion</option>
<option value="Romania">Romania</option>
<option value="Russia">Russia</option>
<option value="Rwanda">Rwanda</option>
<option value="St Barthelemy">St Barthelemy</option>
<option value="St Eustatius">St Eustatius</option>
<option value="St Helena">St Helena</option>
<option value="St Kitts-Nevis">St Kitts-Nevis</option>
<option value="St Lucia">St Lucia</option>
<option value="St Maarten">St Maarten</option>
<option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
<option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
<option value="Saipan">Saipan</option>
<option value="Samoa">Samoa</option>
<option value="Samoa American">Samoa American</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Serbia">Serbia</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra Leone">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syria">Syria</option>
<option value="Tahiti">Tahiti</option>
<option value="Taiwan">Taiwan</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania">Tanzania</option>
<option value="Thailand">Thailand</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Erimates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States of America">United States of America</option>
<option value="Uraguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Vatican City State">Vatican City State</option>
<option value="Venezuela">Venezuela</option>
<option value="Vietnam">Vietnam</option>
<option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
<option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
<option value="Wake Island">Wake Island</option>
<option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
<option value="Yemen">Yemen</option>
<option value="Zaire">Zaire</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
</select>                
              </div>
          
        </li>
        <li class="postal-code">
          
          
            <label for="postalCode-location-lookingProfileForm">
              <abbr title="This is a required field."><em>*</em></abbr>
              <span>Postal Code</span>
              
            </label>
            <div class="fieldgroup">
              <span class="error" id="postalCode-location-lookingProfileForm-error"></span>
              <input type="text" name="postalCode" value="" id="postalCode-location-lookingProfileForm" class="text-input" data-ime-mode-disabled="">
              
          
          
            </div>
            <p class="example">
              <span class="code">&nbsp;</span>
            </p>
          
          
        </li>
		<li id="status-chooser-container" class="status-chooser-container">
          <fieldset>
            <legend class="status-chooser-legend"><span>I am currently:</span></legend>
            <ul>
              <li class="employed"><label for="employed-btn">
                <input type="radio" name="status-chooser" value="employed" id="employed-btn" >Employed</label>
              </li>
              <li class="looking"><label for="looking-btn"><input type="radio" name="status-chooser" value="looking" id="looking-btn" checked="checked">Job Seeker</label></li>
              <li class="student"><label for="student-btn"><input type="radio" name="status-chooser" value="student" id="student-btn">Student</label></li>
            </ul>
          </fieldset>
        </li>


      
        <li class="job-title required">
          <label for="workCompanyTitle-lookingProfileForm">
            <abbr title="This is a required field."><em>*</em></abbr>
            Most recent job title
          </label>
          <div class="fieldgroup">
            <span class="error" id="workCompanyTitle-lookingProfileForm-error"></span>
            <input type="text" name="workCompanyTitle" value="" id="workCompanyTitle-lookingProfileForm" class="text-input">
          </div>
        </li>
      

      
        <li class="self-employed">
          
            <div class="fieldgroup">
              <span class="error" id="selfEmployed-employeeCompany-lookingProfileForm-error"></span>
              <input type="checkbox" name="selfEmployed" value="true" id="selfEmployed-employeeCompany-lookingProfileForm">
              <label for="selfEmployed-employeeCompany-lookingProfileForm">I am self-employed</label>
            </div>
          
        </li>

        <li class="company required">
          
            
              <label for="companyName-companyInfo-employeeCompany-lookingProfileForm">
                <abbr title="This is a required field."><em>*</em></abbr>
                Most recent company
              </label>
              <div id="lookingProfileForm_company_ta" class="fieldgroup">
                <span class="error" id="companyName-companyInfo-employeeCompany-lookingProfileForm-error"></span>
                
                  <input type="text" name="companyName" value="" id="companyName-companyInfo-employeeCompany-lookingProfileForm" class="text-input">
                
      
     



    
              </div>
            
          
        </li>

        <li id="lookingProfileForm_industry" class="industry required">
          
            <label for="industryChooser-employeeCompany-lookingProfileForm">
              <abbr title="This is a required field."><em>*</em></abbr>
              Industry
            </label>
            <div class="fieldgroup">
              <span class="error" id="industryChooser-employeeCompany-lookingProfileForm-error"></span>
              <select name="industryChooser" id="industryChooser-employeeCompany-lookingProfileForm">
<option value="" selected="">-</option><option value="47" class="corp fin">Accounting</option><option value="94" class="man tech tran">Airlines/Aviation</option><option value="120" class="leg org">Alternative Dispute Resolution</option><option value="125" class="hlth">Alternative Medicine</option><option value="127" class="art med">Animation</option><option value="19" class="good">Apparel &amp; Fashion</option><option value="50" class="cons">Architecture &amp; Planning</option><option value="111" class="art med rec">Arts and Crafts</option><option value="53" class="man">Automotive</option><option value="52" class="gov man">Aviation &amp; Aerospace</option><option value="41" class="fin">Banking</option><option value="12" class="gov hlth tech">Biotechnology</option><option value="36" class="med rec">Broadcast Media</option><option value="49" class="cons">Building Materials</option><option value="138" class="corp man">Business Supplies and Equipment</option><option value="129" class="fin">Capital Markets</option><option value="54" class="man">Chemicals</option><option value="90" class="org serv">Civic &amp; Social Organization</option><option value="51" class="cons gov">Civil Engineering</option><option value="128" class="cons corp fin">Commercial Real Estate</option><option value="118" class="tech">Computer &amp; Network Security</option><option value="109" class="med rec">Computer Games</option><option value="3" class="tech">Computer Hardware</option><option value="5" class="tech">Computer Networking</option><option value="4" class="tech">Computer Software</option><option value="48" class="cons">Construction</option><option value="24" class="good man">Consumer Electronics</option><option value="25" class="good man">Consumer Goods</option><option value="91" class="org serv">Consumer Services</option><option value="18" class="good">Cosmetics</option><option value="65" class="agr">Dairy</option><option value="1" class="gov tech">Defense &amp; Space</option><option value="99" class="art med">Design</option><option value="69" class="edu">Education Management</option><option value="132" class="edu org">E-Learning</option><option value="112" class="good man">Electrical/Electronic Manufacturing</option><option value="28" class="med rec">Entertainment</option><option value="86" class="org serv">Environmental Services</option><option value="110" class="corp rec serv">Events Services</option><option value="76" class="gov">Executive Office</option><option value="122" class="corp serv">Facilities Services</option><option value="63" class="agr">Farming</option><option value="43" class="fin">Financial Services</option><option value="38" class="art med rec">Fine Art</option><option value="66" class="agr">Fishery</option><option value="34" class="rec serv">Food &amp; Beverages</option><option value="23" class="good man serv">Food Production</option><option value="101" class="org">Fund-Raising</option><option value="26" class="good man">Furniture</option><option value="29" class="rec">Gambling &amp; Casinos</option><option value="145" class="cons man">Glass, Ceramics &amp; Concrete</option><option value="75" class="gov">Government Administration</option><option value="148" class="gov">Government Relations</option><option value="140" class="art med">Graphic Design</option><option value="124" class="hlth rec">Health, Wellness and Fitness</option><option value="68" class="edu">Higher Education</option><option value="14" class="hlth">Hospital &amp; Health Care</option><option value="31" class="rec serv tran">Hospitality</option><option value="137" class="corp">Human Resources</option><option value="134" class="corp good tran">Import and Export</option><option value="88" class="org serv">Individual &amp; Family Services</option><option value="147" class="cons man">Industrial Automation</option><option value="84" class="med serv">Information Services</option><option value="96" class="tech">Information Technology and Services</option><option value="42" class="fin">Insurance</option><option value="74" class="gov">International Affairs</option><option value="141" class="gov org tran">International Trade and Development</option><option value="6" class="tech">Internet</option><option value="45" class="fin">Investment Banking</option><option value="46" class="fin">Investment Management</option><option value="73" class="gov leg">Judiciary</option><option value="77" class="gov leg">Law Enforcement</option><option value="9" class="leg">Law Practice</option><option value="10" class="leg">Legal Services</option><option value="72" class="gov leg">Legislative Office</option><option value="30" class="rec serv tran">Leisure, Travel &amp; Tourism</option><option value="85" class="med rec serv">Libraries</option><option value="116" class="corp tran">Logistics and Supply Chain</option><option value="143" class="good">Luxury Goods &amp; Jewelry</option><option value="55" class="man">Machinery</option><option value="11" class="corp">Management Consulting</option><option value="95" class="tran">Maritime</option><option value="80" class="corp med">Marketing and Advertising</option><option value="97" class="corp">Market Research</option><option value="135" class="cons gov man">Mechanical or Industrial Engineering</option><option value="126" class="med rec">Media Production</option><option value="17" class="hlth">Medical Devices</option><option value="13" class="hlth">Medical Practice</option><option value="139" class="hlth">Mental Health Care</option><option value="71" class="gov">Military</option><option value="56" class="man">Mining &amp; Metals</option><option value="35" class="art med rec">Motion Pictures and Film</option><option value="37" class="art med rec">Museums and Institutions</option><option value="115" class="art rec">Music</option><option value="114" class="gov man tech">Nanotechnology</option><option value="81" class="med rec">Newspapers</option><option value="100" class="org">Nonprofit Organization Management</option><option value="57" class="man">Oil &amp; Energy</option><option value="113" class="med">Online Media</option><option value="123" class="corp">Outsourcing/Offshoring</option><option value="87" class="serv tran">Package/Freight Delivery</option><option value="146" class="good man">Packaging and Containers</option><option value="61" class="man">Paper &amp; Forest Products</option><option value="39" class="art med rec">Performing Arts</option><option value="15" class="hlth tech">Pharmaceuticals</option><option value="131" class="org">Philanthropy</option><option value="136" class="art med rec">Photography</option><option value="117" class="man">Plastics</option><option value="107" class="gov org">Political Organization</option><option value="67" class="edu">Primary/Secondary Education</option><option value="83" class="med rec">Printing</option><option value="105" class="corp">Professional Training &amp; Coaching</option><option value="102" class="corp org">Program Development</option><option value="79" class="gov">Public Policy</option><option value="98" class="corp">Public Relations and Communications</option><option value="78" class="gov">Public Safety</option><option value="82" class="med rec">Publishing</option><option value="62" class="man">Railroad Manufacture</option><option value="64" class="agr">Ranching</option><option value="44" class="cons fin good">Real Estate</option><option value="40" class="rec serv">Recreational Facilities and Services</option><option value="89" class="org serv">Religious Institutions</option><option value="144" class="gov man org">Renewables &amp; Environment</option><option value="70" class="edu gov">Research</option><option value="32" class="rec serv">Restaurants</option><option value="27" class="good man">Retail</option><option value="121" class="corp org serv">Security and Investigations</option><option value="7" class="tech">Semiconductors</option><option value="58" class="man">Shipbuilding</option><option value="20" class="good rec">Sporting Goods</option><option value="33" class="rec">Sports</option><option value="104" class="corp">Staffing and Recruiting</option><option value="22" class="good">Supermarkets</option><option value="8" class="gov tech">Telecommunications</option><option value="60" class="man">Textiles</option><option value="130" class="gov org">Think Tanks</option><option value="21" class="good">Tobacco</option><option value="108" class="corp gov serv">Translation and Localization</option><option value="92" class="tran">Transportation/Trucking/Railroad</option><option value="59" class="man">Utilities</option><option value="106" class="fin tech">Venture Capital &amp; Private Equity</option><option value="16" class="hlth">Veterinary</option><option value="93" class="tran">Warehousing</option><option value="133" class="good">Wholesale</option><option value="142" class="good man rec">Wine and Spirits</option><option value="119" class="tech">Wireless</option><option value="103" class="art med rec">Writing and Editing</option></select>
            </div>
          
        </li>

      
      <li class="previous-daterange required">
        <fieldset>
          <legend class="hidden-el">
            <span>
              <abbr title="This is a required field."><em>*</em></abbr>
              Time period
            </span>
          </legend>

          <p>
            
              <span class="error" id="startYear-previousStartEnd-lookingProfileForm-error"></span>
            
            
              <span class="error" id="endYear-previousStartEnd-lookingProfileForm-error"></span>
            
          </p>

          <ul>
              <li class="start-year-entry">
                
                  
                    <select name="startYear.0" id="startYear-previousStartEnd-lookingProfileForm">
		<option value="" selected="">-</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option></select>
                  
                
              </li>
              <li class="end-year-entry">
                
                  
                    <label for="endYear-previousStartEnd-lookingProfileForm" class="to">to</label>
                    <select name="endYear.0" id="endYear-previousStartEnd-lookingProfileForm">
<option value="" selected="">-</option><option value="PRESENT">Present</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option></select>
                  
                
              </li>
          </ul>
        </fieldset>
      </li>
      
    </ul>

    <p class="actions">

      
          <span>
            <input type="submit" name="" value="Create my profile" id="looking-btn-submit" class="btn-primary"><div class="progress-indicator" style="line-height: 16px;"></div>
          </span>
        

    </p>

    <p class="key"><strong>*</strong> Indicates required field.</p>

  
      
     
        
          
          <input type="hidden" name="jsEnabled" value="" id="jsEnabled-lookingProfileForm"><input type="hidden" name="fandango" value="" id="fandango-lookingProfileForm"><input type="hidden" name="headline" value="" id="headline-lookingProfileForm"><input type="hidden" name="companyID" value="" id="companyID-companyInfo-employeeCompany-lookingProfileForm"><input type="hidden" name="csrfToken" value="ajax:1690202095752644668" id="csrfToken-lookingProfileForm"><input type="hidden" name="sourceAlias" value="0_2nuweabSjU-BOy1HFto4tRsrgPtss1-6iUJGlP4cF4r" id="sourceAlias-lookingProfileForm"><input type="hidden" name="flow" value="1ofgqp7-16k61ld" id="flow-lookingProfileForm">
          <div class="screen"></div></form>
      
        
        <form action="<?php echo base_url();?>index.php/BuildProfile/process" method="POST" name="studentProfileForm" novalidate="novalidate" id="student-form" class="standard-form sided student stacked-form">
 
      <h2 class="status">I am currently a <span class="student">Student</span></h2>

    <ul class="infoList">
     
        <li class="country required">
          
            <label for="countryCode-location-studentProfileForm" class="">
              <abbr title="This is a required field."><em>*</em></abbr>
              Country
            </label>
              <div class="fieldgroup">
                <span class="error" id="countryCode-location-studentProfileForm-error"></span>
                <select name="countryCode" id="countryCode-location-studentProfileForm" class="country-select country">
<option value="">Country...</option>
<option value="Afganistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Aruba">Aruba</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bermuda">Bermuda</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bonaire">Bonaire</option>
<option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
<option value="Botswana">Botswana</option>
<option value="Brazil">Brazil</option>
<option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
<option value="Brunei">Brunei</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Canary Islands">Canary Islands</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Channel Islands">Channel Islands</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos Island">Cocos Island</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cote DIvoire">Cote D'Ivoire</option>
<option value="Croatia">Croatia</option>
<option value="Cuba">Cuba</option>
<option value="Curaco">Curacao</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="East Timor">East Timor</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Falkland Islands">Falkland Islands</option>
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="French Guiana">French Guiana</option>
<option value="French Polynesia">French Polynesia</option>
<option value="French Southern Ter">French Southern Ter</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Great Britain">Great Britain</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Hawaii">Hawaii</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran">Iran</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Isle of Man">Isle of Man</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Korea North">Korea North</option>
<option value="Korea Sout">Korea South</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Laos">Laos</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libya">Libya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macau">Macau</option>
<option value="Macedonia">Macedonia</option>
<option value="Madagascar">Madagascar</option>
<option value="Malaysia">Malaysia</option>
<option value="Malawi">Malawi</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Midway Islands">Midway Islands</option>
<option value="Moldova">Moldova</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Nambia">Nambia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherland Antilles">Netherland Antilles</option>
<option value="Netherlands">Netherlands (Holland, Europe)</option>
<option value="Nevis">Nevis</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan" selected="">Pakistan</option>
<option value="Palau Island">Palau Island</option>
<option value="Palestine">Palestine</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Phillipines">Philippines</option>
<option value="Pitcairn Island">Pitcairn Island</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Republic of Montenegro">Republic of Montenegro</option>
<option value="Republic of Serbia">Republic of Serbia</option>
<option value="Reunion">Reunion</option>
<option value="Romania">Romania</option>
<option value="Russia">Russia</option>
<option value="Rwanda">Rwanda</option>
<option value="St Barthelemy">St Barthelemy</option>
<option value="St Eustatius">St Eustatius</option>
<option value="St Helena">St Helena</option>
<option value="St Kitts-Nevis">St Kitts-Nevis</option>
<option value="St Lucia">St Lucia</option>
<option value="St Maarten">St Maarten</option>
<option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
<option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
<option value="Saipan">Saipan</option>
<option value="Samoa">Samoa</option>
<option value="Samoa American">Samoa American</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Serbia">Serbia</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra Leone">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syria">Syria</option>
<option value="Tahiti">Tahiti</option>
<option value="Taiwan">Taiwan</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania">Tanzania</option>
<option value="Thailand">Thailand</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Erimates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States of America">United States of America</option>
<option value="Uraguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Vatican City State">Vatican City State</option>
<option value="Venezuela">Venezuela</option>
<option value="Vietnam">Vietnam</option>
<option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
<option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
<option value="Wake Island">Wake Island</option>
<option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
<option value="Yemen">Yemen</option>
<option value="Zaire">Zaire</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
</select>                
              </div>
          
        </li>
        <li class="postal-code">
          
          
            <label for="postalCode-location-studentProfileForm">
              <abbr title="This is a required field."><em>*</em></abbr>
              <span>Postal Code</span>
              
            </label>
            <div class="fieldgroup">
              <span class="error" id="postalCode-location-studentProfileForm-error"></span>
              <input type="text" name="postalCode" value="" id="postalCode-location-studentProfileForm" class="postal-code text-input" data-ime-mode-disabled="">
              
          
          
            </div>
            <p class="example">
              <span class="code">&nbsp;</span>
            </p>
          
          
        </li>
      
				<li id="status-chooser-container" class="status-chooser-container">
          <fieldset>
            <legend class="status-chooser-legend"><span>I am currently:</span></legend>
            <ul>
              <li class="employed"><label for="employed-btn">
                <input type="radio" name="status-chooser" value="employed" id="employed-btn" >Employed</label>
              </li>
              <li class="looking"><label for="looking-btn"><input type="radio" name="status-chooser" value="looking" id="looking-btn" >Job Seeker</label></li>
              <li class="student"><label for="student-btn"><input type="radio" name="status-chooser" value="student" id="student-btn" checked="checked">Student</label></li>
            </ul>
          </fieldset>
        </li>

      

        <li class="education typeahead required">

          
            
              
                  <label for="schoolText-school-education-studentProfileForm">
                    <abbr title="This is a required field."><em>*</em></abbr>
                    School/University
                  </label>
                
              <div id="studentProfileForm_school_ta" class="fieldgroup">
                <span class="error" id="schoolText-school-education-studentProfileForm-error"></span>
                
                  <input type="text" name="schoolText" value="" id="schoolText-school-education-studentProfileForm" class="text-input">
                
      
      
      
    
              </div>
            
          
        </li>

        
        <li class="previous-daterange required">
         <fieldset>
           <legend class="">
             <span>
               <abbr title="This is a required field."><em>*</em></abbr>
               Dates attended
              </span>
            </legend>

            <p>
              
                <span class="error" id="startYear-startEndYear-education-studentProfileForm-error"></span>
              
              
                <span class="error" id="endYear-startEndYear-education-studentProfileForm-error"></span>
              
            </p>

           <ul>
             <li class="start-year-entry">
              
               
                 <select name="startYear" id="startYear-startEndYear-education-studentProfileForm">
<option value="" selected="">-</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option></select>
               
              
             </li>
             <li class="end-year-entry">
              
               
                 <label for="endYear-startEndYear-education-studentProfileForm" class="to">to</label>
                 <select name="endYear" id="endYear-startEndYear-education-studentProfileForm">
<option value="" selected="">-</option><option value="2020">2020</option><option value="2019">2019</option><option value="2018">2018</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option></select>
               
              
             </li>
           </ul>
         </fieldset>
         <p class="tip">Current students: enter your expected graduation year</p>
        </li>
        

        


        <li id="age" class="required">
          <fieldset>
            <legend>
              <span>
                
                <abbr title="This is a required field."><em>*</em></abbr> Age
              </span>
            </legend>
            <ul>
              <li class="over-eighteen">
                
                  <input type="checkbox" name="ageOverEighteen" value="true" checked="" id="ageOverEighteen-studentAgeBirthday-studentProfileForm"><label for="ageOverEighteen-studentAgeBirthday-studentProfileForm">I am 18 or older.</label>
                
                
                  <span class="info" id="control_gen_0"></span>
                
      
      
      
    
                <div id="info-callout" class="callout-container hidden">
                  <div class="callout-content">
                    <div class="callout-body">
                      <p>Knowing your birthdate helps us make sure you get age-appropriate settings.  Minors are welcome as long as you satisfy our <a href="http://www.linkedin.com/legal/user-agreement">age requirements</a>.</p>
                    </div>
                  </div>
                </div>
              </li>
              <li class="dob-chooser-error"><span class="error" id="studentAgeBirthday-studentProfileForm-error"></span></li>
              <li class="dob-chooser">
                <p class="instruction">Please provide your date of birth</p>

            
            
            

            
            
              
                
                  <span class="error" id="birthMonth-studentAgeBirthday-studentProfileForm-error"></span>
                  <select name="birthMonth" id="birthMonth-studentAgeBirthday-studentProfileForm">
<option value="" selected="">Month...</option><option value="1">January</option><option value="2">February</option><option value="3">March</option><option value="4">April</option><option value="5">May</option><option value="6">June</option><option value="7">July</option><option value="8">August</option><option value="9">September</option><option value="10">October</option><option value="11">November</option><option value="12">December</option></select>
                
                
                 <span class="error" id="birthDay-studentAgeBirthday-studentProfileForm-error"></span>
                 <select name="birthDay" id="birthDay-studentAgeBirthday-studentProfileForm">
<option value="" selected="">Day...</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>
              
                
                  <span class="error" id="birthYear-studentAgeBirthday-studentProfileForm-error"></span>
                  <select name="birthYear" id="birthYear-studentAgeBirthday-studentProfileForm">
<option value="" selected="">Year...</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option><option value="1916">1916</option><option value="1915">1915</option><option value="1914">1914</option><option value="1913">1913</option><option value="1912">1912</option><option value="1911">1911</option><option value="1910">1910</option><option value="1909">1909</option><option value="1908">1908</option><option value="1907">1907</option><option value="1906">1906</option><option value="1905">1905</option></select>
                

              </li>
            </ul>

            <div>

            </div>
          </fieldset>
        </li>

      
    
    </ul>

    <p class="actions">
      
          <span>
            <input type="submit" name="" value="Create my profile" id="student-btn-submit" class="btn-primary"><div class="progress-indicator" style="line-height: 16px;"></div>
          </span>
        
    </p>

    <p class="key"><strong>*</strong> Indicates required field.</p>

  
      
     
        
          
          <input type="hidden" name="jsEnabled" value="" id="jsEnabled-studentProfileForm"><input type="hidden" name="fandango" value="" id="fandango-studentProfileForm"><input type="hidden" name="headline" value="" id="headline-studentProfileForm"><input type="hidden" name="schoolID" value="" id="schoolID-school-education-studentProfileForm"><input type="hidden" name="csrfToken" value="ajax:1690202095752644668" id="csrfToken-studentProfileForm"><input type="hidden" name="sourceAlias" value="0_2nuweabSjU-BOy1HFto4tRsrgPtss1-6iUJGlP4cF4r" id="sourceAlias-studentProfileForm"><input type="hidden" name="flow" value="1ofgqp7-16k61ld" id="flow-studentProfileForm">
          <div class="screen"></div></form>
      
          

        </div>
      

    </div>
 
 
 
 
 
 
 
 
 </div>
</div>
 
 
<div id="footer">
 <div class="wrapper">
 <div id="legal">
 <p id="copyright">LinkedIn Corporation © 2013</p>
 <p id="terms-of-use">
 Commercial use of this site without express authorization is prohibited.
 </p>
 </div>
 </div>
</div>




</body></html>