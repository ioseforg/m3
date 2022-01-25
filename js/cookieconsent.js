/* Client side cookie consent tool for M3
    © Joey Mann 2021; You may use this file under the GPL2, 
    see LICENSE in the repo root directory for more information. */

/* EU/EFTA/UK users are advised that this cookie consent is unlikely to comply with the GDPR. Australian users are advised to go right ahead. */

var cookieDomain = "iosef.org" /*domain you wish to add cookie for*/;
var termsURL = "https://iosef.org/wp-content/themes/m3/inc/terms.html" /* Terms of service URL */;
var bannerID = "cookieconsent" /* The CSS id of your cookie consent banner */;


function cookieConsentCreate(){
    //This function places a cookie for cookieDomain with a key of 'cookieconsent' and a value of '1', for 90 days (7776000 seconds).
    
    var cookieMaxAge = "7776000" /* amount of time in seconds you want cookie to last */;
    document.cookie = "cookieconsent=1; domain=" + cookieDomain + "; max-age=" + cookieMaxAge + "; secure";
}

function cookieConsentClose(){
	//This funciton hides the cookie consent messsage.
    document.getElementById(bannerID).style.display = "none";
}

function cookieConsent() {
	//This function checks to see if the cookie consent cookie is present and responds appropriately.
	
    if(document.cookie.indexOf("cookieconsent=1") == -1) {
		console.log("By using " + cookieDomain + ", you consent to the use of cookies. If you do not consent to cookies, please leave this website within 10 seconds of seeing this message. See more at " + termsURL);
		//If it isn't present, wait 10 seconds and create it.
        setTimeout(cookieConsentCreate, 10000);
    }
    else if(document.cookie.indexOf("cookieconsent=1") != -1) {
        cookieConsentClose();
        console.log("By using " + cookieDomain + ", you consent to the use of cookies. See more at " + termsURL);
    }
}

function ifCookieConsent() {
    //This function allows you to check if the cookie consent cookie is present programatically. For example, you could use this function to stop advertisements from loading on browsers that do not have the cookie. Returns true or false.
    if (document.cookie.indexOf("cookieconsent=1") != -1) {
        return true;
    } else {
        return false;
    }
}