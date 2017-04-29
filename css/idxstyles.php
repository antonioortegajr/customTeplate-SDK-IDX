/* CSS loaded from cache: [client-12085] 6087ac43 */

/* Cached at 04/28/17 23:34:13 */
/* idxbase - 1.000 */
.IDX-clear {clear:both;}
.clear { clear: both; } /* @todo all refrences to this need to be changed to IDX-clear */
.IDX-hide, .IDX-hidden {display:none !important;}

/* clearfix */
.IDX-clearfix:after { content: "."; display: block; clear: both; visibility: hidden; line-height: 0; height: 0; }
.IDX-clearfix {	display:inline-block; }
html[xmlns] .IDX-clearfix { display:block; }
* html .IDX-clearfix {height: 1%;}

/**
 *  Global Elements
 */
#IDX-main { font: 100 10pt Arial,Helvetica,sans-serif; }
.IDX-previousPage {margin:10px 0 20px; text-align:center;}
.IDX-wrapper-mobile .IDX-previousPage {font-size:12px;}
.IDX-leadFormText {margin-bottom:15px;}
.IDX-listAsRow {list-style:none; margin:0; padding:0;}
.IDX-listAsRow li {display:inline-block; margin:0; padding:0 15px;}
.IDX-messageResponse {font-weight:bold; text-align:center;}
.IDX-successMessage {color:green;}
.IDX-errorMessage {color:red;}
.IDX-errorMessage a {color:darkred;}
.IDX-errorField {border: 2px solid #FF0000 !important;}
.IDX-errorIcon {
    width: 15px;
    height: 15px;
    float: left;
    background-image: url(//d1qfrurkpai25r.cloudfront.net/images/smallIconSprite.png);
    background-position: -105px 119px; cursor: move; margin-right: 5px;
}
.IDX-successIcon {
    width: 15px;
    height: 15px;
    float: left;
    background-image: url(//d1qfrurkpai25r.cloudfront.net/images/smallIconSprite.png);
    background-position: -120px 119px; cursor: move; margin-right: 5px;
}
.IDX-required {color:red; font-weight:bold;}
.IDX-lineBreak { border-bottom: 1px solid #CCCCCC; margin: 5px 0px; width: 100% ;}
.IDX-savePropertyForm button {border:inherit; background:inherit; cursor:pointer;}
.IDX-help-inline {font-size:11px;}
.IDX-help-block {font-size:11px; line-height:15px; margin:0;}
.IDX-swapMobileView {display:block; text-align:center;}
#IDX-viewFullSite, #IDX-viewMobileSite {color:red; font-size:11px;}
.IDX-propertySaved {color:green; font-weight:bold;}
.IDX-hopoZoning {display:none !important; visibility:hidden !important;}
.IDX-addressZip4 { visibility: hidden; }
/**
 * UI Overrides
 */
.ui-widget-overlay {background:#000000; opacity:.5;}

/**
 * Psudolink
 */
.IDX-psudolink {cursor:pointer;}
.psudolink { color: #4C669A; text-decoration: none; cursor: pointer; font-variant: normal;}

/**
 * Lead Registration Form (modal window and overlay)
 */
#IDX-leadSignupForm ul { list-style: none; margin: 0; padding: 0;}
#IDX-leadSignupForm ul li {height: 35px;}
#IDX-leadSignupForm ul li:last-child { text-align: center;}

.IDX-signupLoginToggleWrap {margin-top:15px; text-align:center;}
.IDX-signupLoginToggleWrap strong {font-size:16px; color:#336699;}
.IDX-wrapper-standard #IDX-email {width:300px;}

/**
 * Lead Tools Bar
 */

#IDX-leadToolsBar {
    position: relative;
    z-index: 3;
    -moz-border-radius: 10px;
    -webkit-border-radius: 10px;
    -moz-box-shadow: 1px 1px 5px #999999;
    -webkit-box-shadow: 1px 1px 5px #999999;
    background-color: #BBBBBB;
    background-image: url(//d1qfrurkpai25r.cloudfront.net/images/background-controlGrad.png);
    background-repeat: repeat-x;
    border: 1px solid #888888;
    font-variant: small-caps;
    font-weight: bold;
    margin-bottom: 10px;
    padding: 5px 5px 5px 10px;
    text-shadow: 1px 1px 5px #999999;
}
.IDX-leadToolsItem { position: relative; z-index: 2; float: left; width: 20%; text-align: center; }
.IDX-leadToolNotif {
    position: absolute;
    z-index: 1;
    top: 25px;
    width: 95%;
    padding: 2px 2%;
    text-align: center;
    -moz-border-radius: 0 0 10px 10px;
    -webkit-border-radius: 0 0 10px 10px;
    -moz-box-shadow: 1px 1px 5px #999999;
    -webkit-box-shadow: 1px 1px 5px #999999;
    background-color: #BBBBBB;
    background-image: url(//d1qfrurkpai25r.cloudfront.net/images/background-controlGrad.png);
    background-repeat: repeat-x;
    border: 1px solid #888888;
    display: none;
}
#IDX-leadToolsNotifWrap { position: relative; }
#IDX-leadInfo {float:left;}
#IDX-leadLogOutLink {float:left; margin-left:5px;}
#IDX-leadAccountLink {float:right;}

/**
 *  Lead Pages
 */

#IDX-savedSearchLink { float: right; font-size: small }
.IDX-savedSearchCell { position: relative; -moz-border-radius: 10px; -webkit-border-radius: 10px; border: 1px solid #CCC; -moz-box-shadow: 5px 5px 10px #CCC; -webkit-box-shadow: 5px 5px 10px #CCC; margin: 10px 0; padding: 10px; }
.IDX-savedSearchPreview { position: absolute; right: 10px; top: 10px; }
.IDX-savedSearchSave { position: absolute; right: 10px; bottom: 10px; }
.IDX-savedSearchCritHeader { font-weight: bold; margin-top: 5px; }
.IDX-savedSearchCritList {float: left; margin: 0 2%; padding: 0; font-size: 8pt; width: 45%; list-style: none; }
.IDX-savedSearchOverlay { display: none; position: absolute; top: 0; left: 0; width: 100%; text-align: center; margin-top: 75px; font-size: 18pt; }

/**
 * Agent Subheader
 */
.IDX-agentSubheader:after { display: table; content: ""; clear:both }

/**
 * Site Map / Search By City Page
 */
#IDX-sitemap h2, #IDX-searchByCity h2 {margin:15px 0 3px;}

/**
 * Lead modal
 */
#IDX-registrationHeader h1 {display:none;}
#IDX-registrationMessage {margin-bottom:10px;}
.IDX-wrapper-mobile #IDX-registrationHeader h1 {display:block;}
.IDX-signupLoginToggleWrap b {display:block;}
.ui-dialog.IDX-registrationModal a.close {color: #336699;}
.IDX-registration-force .ui-dialog-titlebar-close {}
.IDX-captchaContainer { margin:10px 0 20px; }

/* Social Media Login Styles for Standard pages */
#IDX-social-media-logins { margin: 20px 0; width: 300px; }
#IDX-login-instructions { width: 300px; text-align: center; }
.IDX-social-form { display: inline-block; margin-right: 12px; }
.IDX-social-form button { height: 50px; width: 50px; border: none; background-repeat: no-repeat; border-radius: 50px; cursor: pointer; }
.IDX-social-form button span { display:none; }
#IDX-social-facebook button { background: url(//d1qfrurkpai25r.cloudfront.net/images/social/facebook.png); background-color:#3b5998; }
#IDX-social-google button { background: url(//d1qfrurkpai25r.cloudfront.net/images/social/google.png); background-color: #db4437; }

/**
 * Refinement Search
 */
.IDX-refinementSearchForm {font-size:8pt; font-weight:normal;}
.IDX-refinementSearchForm input {border:1px solid #666;}
.IDX-refinementSearchLeft, .IDX-refinementSearchRight {float:left;}
.IDX-refineCityCountyZipListWrap {width:180px; float:left;}
.IDX-refineCityCountyZipListWrap label, .IDX-refineCityCountyZipListWrap select {display:block; width:100%;}
.IDX-refinementSearchRight {margin-left:5px;}
.IDX-refinementSearchRight div {float:left; margin:0 5px 13px 0;}
.IDX-refinementSearchRight div label {display:block;}
.IDX-refinementSearchRight div input {display:block; width:90px;}
.IDX-refineSubmitWrap input {border:1px solid #666; background:#CCC; font-size:11pt; color:#333;}
.IDX-refineCityCountyZip {height:65px; padding-left:3px;}
#IDX-resultsRefineSortingWrap {margin: 0 10px 0 0; }
#IDX-resultsRefineSortingWrap > label {display: inline-block; margin: 0; }

/**
 * leaflet draw controller
 */
.leaflet-draw-inner-toolbar {
    background: none repeat scroll 0 0 rgba(255, 255, 255, 0.6);
    bottom: 0;
    display: none;
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
    z-index: 1000;
}

	html, body { height: 100%;}
	#IDX-main textarea {width:400px;}



/* details - 1.005 */
.IDX-listingCountWrap {font-weight:bold;}
#IDX-detailsContactForm {position:relative; margin-top:20px; clear:both;}
.IDX-emptyFieldContainer {display:none;}

#IDX-prevProp {float: left; margin-right:10px;}
.IDX-topLink {display:inline-block; margin-right:5px;}
.IDX-lineBreak { border-bottom: 2px solid #CCCCCC; margin: 5px 0px; width: 100%; }

#IDX-detailsWrapper .IDX-parentPtID-3 #IDX-mortgageLink { display: none; }
#IDX-detailsWrapper .IDX-parentPtID-10 #IDX-mortgageLink { display: none; }

#IDX-detailsAgentInfo {margin:20px 0;}
#IDX-detailsAgentPhoto {float:left; margin-right:15px;}
#IDX-detailsAgentDisplayName {font-size:16px; font-weight:bold; margin-bottom:10px;}
#IDX-detailsGalleryLink {text-align:center;}
.IDX-widgetReferer #IDX-detailsLinkModify {display:none;}
#IDX-detailsMap #IDX-map {width:100%; height:100%; position:relative;}

/* standard styles */
.IDX-fieldContainer {float:left; margin-bottom:10px;}

.IDX-fieldOneColumn {margin-right:1%; width:49%;}
.IDX-fieldTwoColumn {width:100%;}
.IDX-fieldContainerList {float:left; padding:10px;	}
.IDX-fieldTwoColumn .IDX-fieldContainerList {width:46%;}
.IDX-fieldContainerListRight {}
.IDX-fieldContainerListLeft {}
.IDX-fieldContainerList li {}
.IDX-fieldContainerList label {color:#666666; font-weight:bold;}
#IDX-fieldsWrapper {margin-top:20px;}
#IDX-fieldsWrapper li {list-style:none; margin:0; padding:0;}
#IDX-detailsMap {width:400px;height:400px;clear:both;}
#IDX-walkscoreContainer {clear:both;}


.IDX-fieldContainer {float:left; margin-bottom:10px;}
.IDX-fieldContainer:before, .IDX-fieldContainer:after { content: ""; display: table; }
.IDX-fieldContainer:after { clear: both; }


/* forms - 1.000 */
.IDX-selectableList { background: #EEEEEE; border: 5px solid #EEEEEE; height: 100px; line-height: 6px; overflow: auto; width: 200px; text-align:left; position:relative;}
.IDX-selectableListLabel { font-size: 12px; font-weight: normal; line-height: 12px; margin: 0; display:block; margin-bottom:2px;}
.IDX-selectableListLabel .IDX-selectableListCheckbox { line-height: 12px; margin: 0 3px 0 0; vertical-align: bottom; display:inline; }

.IDX-control-group, #IDX-registration .IDX-control-group { display: inline-block; margin: 0 10px 10px 0; }

/* registrationComp - 1.000 */
    .IDX-errorIcon {
        width: 15px;
        height: 15px;
        float: left;
        background-image: url(//d1qfrurkpai25r.cloudfront.net/images/smallIconSprite.png);
        background-position: -105px 119px;
        cursor: move;
        margin-right: 5px;
    }
    .IDX-errorField {
        border: 2px solid #FF0000;
    }
    .IDX-errorMessage {
        color: #FF0000;
    }
    .ui-dialog[aria-labelledby="ui-dialog-title-IDX-registration"] {
        min-width: 100%;
        box-sizing: border-box;
        padding: 0 10px;
    }

    .ui-dialog[aria-labelledby="ui-dialog-title-IDX-registration"] * {
        box-sizing: border-box;
    }

    .ui-dialog[aria-labelledby="ui-dialog-title-IDX-registration"] #IDX-registrationSignup .IDX-customRegistrationFields {
        display: inline-block;
        height: auto;
    }

    #IDX-registration .IDX-control-group {
        width: 100%
    }

    #IDX-registration .IDX-btn {
      display: inline-block;
      margin-bottom: 0;
      font-weight: normal;
      text-align: center;
      vertical-align: middle;
      cursor: pointer;
      background-image: none;
      border: 1px solid transparent;
    }


    #IDX-registration .IDX-btn:hover {
        background: #8B8B8B;
    }

    #IDX-registration .IDX-btn{
        width: 100%;
        margin-top: 10px;
    }

    #IDX-registration .IDX-controls input[type="text"],
    #IDX-registration .IDX-controls input[type="email"],
    #IDX-registration .IDX-controls input[type="password"] {
        box-sizing: border-box;
        width: 100%
    }

    #IDX-registration .IDX-controls .IDX-radio-inline {
        display: inline-block;
    }

    #IDX-registration .IDX-controls .IDX-yesOrNo-radio {
        vertical-align: top;
    }

    #IDX-registration .IDX-btn-primary {
        color: #fff;
        background-color: #428bca;
    }

    #IDX-registration .IDX-btn-primary:hover {
        color: #fff;
        background-color: #3071a9;
        border-color: #285e8e;
    }

    #IDX-FormActions {
        display: inline-block;
        width: 100%;
        padding-bottom: 15px;
        border-bottom: 1px solid #ccc;
    }

    #IDX-leadLoginForgotPass a {
        text-decoration: underline;
    }

    #IDX-toggleLogIn, #IDX-toggleSignUp {
        text-decoration: underline;
    }

    #IDX-toggleLogIn:hover, #IDX-toggleSignUp:hover {
    }


    .IDX-signupLoginToggleWrap {
        width: 100%;
    }

    .IDX-signupLoginToggleWrap a {
        text-decoration: none;
    }

    #IDX-loginSignupToggle {
        clear: both;
    }

    @media screen and (min-width: 600px) {

        .ui-dialog[aria-labelledby="ui-dialog-title-IDX-registration"] {
            min-width: 600px;
        }

       #IDX-registration .IDX-control-group {
            width: 30%;
            vertical-align: top;
        }

        #IDX-toggleLogIn, #IDX-toggleSignUp {
            text-decoration: underline;
            float: right;
        }
        #IDX-toggleLogIn:hover, #IDX-toggleSignUp:hover {

        }
        .IDX-signupLoginToggleWrap p{
            display: inline-block;
            width: 100%;
            padding-right: 10px;
            text-align: right;
            float: left;
            margin: 0;
        }

    }


/* featuredAgent - 1.000 */
#IDX-detailsAgentWebsite { margin-bottom: 2px; }

/* contactAccountInfo - 1.000 */
/* IDX Account Contact Information */
#IDX-contactAddress { }
#IDX-contactCityStateZip { }
	#IDX-contactCity { }
	#IDX-contactState { }
	#IDX-contactZip { }
#IDX-contactPhone { }
#IDX-contactFax {}

/* forms - 1.001 */
.IDX-selectableList { background: #EEEEEE; border: 5px solid #EEEEEE; height: 100px; line-height: 6px; overflow: auto; width: 200px; text-align:left; position:relative;}
.IDX-selectableListLabel { font-size: 12px; font-weight: normal; line-height: 12px; margin: 0; display:block; margin-bottom:2px;}
.IDX-selectableListLabel .IDX-selectableListCheckbox { line-height: 12px; margin: 0 3px 0 0; vertical-align: bottom; display:inline; }

.IDX-control-group, #IDX-registration .IDX-control-group { display: inline-block; margin: 0 10px 10px 0; }

/* contactComp - 1.004 */
.IDX-control-group,.IDX-controls{width:100%}
.IDX-control-label{display:inline-block;margin-bottom:5px}
#IDX-moreinfoContactForm input,#IDX-moreinfoContactForm textarea,#IDX-moreinfoContactForm .IDX-select,#IDX-scheduleshowingContactForm input,#IDX-scheduleshowingContactForm textarea,#IDX-scheduleshowingContactForm .IDX-select{width:100%;box-sizing:border-box;border:1px solid #c7c7c7}
#IDX-moreinfoContactForm .IDX-checkbox-inline > input[type="checkbox"],
#IDX-moreinfoContactForm .IDX-radio-inline > input[type="radio"],
#IDX-scheduleshowingContactForm input[type="checkbox"],
#IDX-scheduleshowingContactForm input[type="radio"] {
    width: auto;
}
.IDX-additionalInfo{display:none}
#IDX-moreinfoContactForm #IDX-email,#IDX-moreinfoContactForm #IDX-message,#IDX-scheduleshowingContactForm #IDX-email,#IDX-scheduleshowingContactForm #IDX-message{box-sizing:border-box;width:100%}
#IDX-moreinfoContactForm #IDX-submitBtn,#IDX-moreinfoContactForm #IDX-resetBtn,#IDX-scheduleshowingContactForm #IDX-submitBtn,#IDX-scheduleshowingContactForm #IDX-resetBtn{width:100%;margin:5px 0}
#IDX-moreinfoContactForm #IDX-resetBtn,#IDX-scheduleshowingContactForm #IDX-resetBtn{background-color:#fff;color:#000}
#IDX-moreinfoContactForm #IDX-resetBtn:hover,#IDX-moreinfoContactForm #IDX-resetBtn:active,#IDX-scheduleshowingContactForm #IDX-resetBtn:hover,#IDX-scheduleshowingContactForm #IDX-resetBtn:active{background-color:#c7c7c7}
#IDX-moreinfoContactForm #IDX-submitBtn,#IDX-scheduleshowingContactForm #IDX-submitBtn{background-color:#428bca}
#IDX-moreinfoContactForm #IDX-submitBtn:hover,#IDX-moreinfoContactForm #IDX-submitBtn:active,#IDX-scheduleshowingContactForm #IDX-submitBtn:hover,#IDX-scheduleshowingContactForm #IDX-submitBtn:active{background-color:#3071a9}
.IDX-form-actions{display:inline-block;width:100%}
#IDX-moreinfoFormActions button,#IDX-scheduleshowingFormActions button{box-sizing:border-box;display:inline-block;margin-bottom:0;font-weight:400;text-align:center;vertical-align:middle;cursor:pointer;background-image:none;border:1px solid transparent;white-space:nowrap;padding:6px 12px;font-size:14px;line-height:1.42857;border-radius:0;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;border-color:#ccc;color:#fff;width:100%}
#IDX-moreinfoFormActions textarea,#IDX-scheduleshowingFormActions textarea{min-height:90px}
.IDX-formResponse{margin-top:15px;font-size:1.3em}
.IDX-formResponse a{text-decoration:underline}
#recaptcha_area input[type="text"]{display:inline-block;height:auto}
#recaptcha_area table thead tr th,table tfoot tr th,table tbody tr td,table tr td,table tfoot tr td{line-height:normal!important}
@media only screen and (min-width:641px){
    .IDX-customRegistrationFields,.IDX-showingDates{width:100%;display:inline-block}
    .IDX-control-group{width:45%}
    #IDX-moreinfoContactForm #IDX-submitBtn,#IDX-moreinfoContactForm #IDX-resetBtn,#IDX-scheduleshowingContactForm #IDX-submitBtn,#IDX-scheduleshowingContactForm #IDX-resetBtn{width:50%;margin:0}

    #IDX-moreinfoContactForm #IDX-submitBtn,#IDX-scheduleshowingContactForm #IDX-submitBtn{float:right}
    #IDX-moreinfoContactForm button:first-of-type,#IDX-scheduleshowingFormActions button:first-of-type{border-right:1px solid #c7c7c7}
}

/* detailsTools - 1.001 */
#IDX-detailsLinks-list {list-style:none; margin:10px 0; padding:15px 10px; background:#CCC; border-bottom:1px solid #999; border-top:1px solid #999;}
#IDX-detailsLinks-list li {display:inline-block; width:24%; margin:0; padding:0;}
.IDX-detailsAddressUnitNumber:before {content:"#";}
.IDX-detailsAddressStateAbrv {display:none;}
.IDX-openHouseHostedBy, .IDX-ohHostedBy {margin-top:5px;}
.IDX-openHouseHostedBy:before, .IDX-ohHostedBy:before {content:"Hosted By: ";}

/* detailsGallery - 1.007 */
/* layout */
#IDX-galleryLeft {float:left; width:49%;}
#IDX-galleryRight {float:right; width:49%;}

/* gallery */
#IDX-primaryPhoto {padding:10px; border:1px solid #CCC; background:#F5F5F5;}
#IDX-detailsGalleryLink {margin:10px 0;}
#IDX-detailsShowcase {padding:10px; border:1px solid #CCC; background:#F5F5F5;}
.IDX-showcaseSlide {float:left; margin:1%; width:31%;}
.IDX-showcaseSlide:nth-child(3n+4) { clear: left; }
#IDX-detailsPhoto, .IDX-detailsShowcaseImage {width:100%;}
.IDX-showcaseContent { background: none repeat scroll 0 0 #F5F5F5; border: 1px solid #CCCCCC; cursor: pointer;}
.IDX-showcaseBreak {clear:left;}

/* summary */
#IDX-gallerySummary {padding:10px; border:1px solid #CCC; background:#F5F5F5;}
#IDX-detailsField-listingID {font-size: 16px; font-weight: bold; margin-bottom: 15px;}
#IDX-detailsField-listingPrice, #IDX-detailsField-soldPrice {font-size:20px; font-weight:bold;}
.IDX-detailsField-label {width:100px; display:inline-block;}
#IDX-detailsField-remarksConcat {padding:10px; border:1px solid #CCC; background:#F5F5F5; margin:10px 0;}
.IDX-detailsField-remarksConcat-label {display:none;}

#IDX-propertyRemarks { margin-top: 29px; }

/* default overrides */
#IDX-detailsLinks-list li {margin:0 3% 1% 3%; width:30%; font-size: 12px; white-space: nowrap; }
.IDX-shareThisContainer {
    margin: 18px 0;
    text-align: center;
}

#IDX-viewAllPhotos {
    clear: both;
    display: block;
    text-align: center;
}

#IDX-detailsAgentInfo {
    float: left;
    margin: 20px 0;
    width: 100%;
}


/**** Client CSS ****/
/**
 * Custom Global CSS
 */
#IDX-main {width: 100%;}
