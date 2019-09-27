// window.fbAsyncInit = function () {
//           FB.init({
//                     appId: '274469109644601',
//                     cookie: true,
//                     xfbml: true,
//                     version: 'v2.8'
//           });
//           FB.AppEvents.logPageView();
// };

// (function (d, s, id) {
//           var js, fjs = d.getElementsByTagName(s)[0];
//           if (d.getElementById(id)) {
//                     return;
//           }
//           js = d.createElement(s);
//           js.id = id;
//           js.src = "//connect.facebook.net/en_US/sdk.js";
//           fjs.parentNode.insertBefore(js, fjs);
// }(document, 'script', 'facebook-jssdk'));

// function statusChangeCallback(response) {
//           console.log('statusChangeCallback');
//           console.log(response);
//           // The response object is returned with a status field that lets the
//           // app know the current login status of the person.
//           // Full docs on the response object can be found in the documentation
//           // for FB.getLoginStatus().
//           if (response.status === 'connected') {
//                     // Logged into your app and Facebook.
//                     facebookLoginAPI();
//                     //console.log('Hello There 3');
//           } else if (response.status === 'not_authorized') {
//                     // The person is logged into Facebook, but not your app.
//                     FB.login();
//           } else {
//                     // The person is not logged into Facebook, so we're not sure if
//                     // they are logged into this app or not.
//                     FB.login()
//           }
// }


// function FBlogin() {
//           FB.login(function (response) {
//                     if (response.authResponse) {
//                               facebookLoginAPI();
//                     } else {
//                               console.log('User cancelled login or did not fully authorize.');
//                     }
//           }, {
//                     scope: 'email , user_birthday'
//           });
// }


// function facebookLoginAPI() {
//           FB.api('/me', function (response) {
//                     var profileImage = "http://graph.facebook.com/" + response.id + "/picture?type=large";
//                     var fname = response.first_name;
//                     var lname = response.last_name;
//                     var email = response.email;
//                     var socialID = response.id;
//                     var platform = 'fb';

//                     socialLoginImage(fname, lname, email, profileImage, socialID, platform);
//           });
// }


/************************************************ */
window.fbAsyncInit = function() {
    // FB JavaScript SDK configuration and setup
    FB.init({
      appId      : '274469109644601', // FB App ID
      cookie     : true,  // enable cookies to allow the server to access the session
      xfbml      : true,  // parse social plugins on this page
      version    : 'v2.8' // use graph api version 2.8
    });
    
    // Check whether the user already logged in
    FB.getLoginStatus(function(response) {
        if (response.status === 'connected') {
            //display user data
            getFbUserData();
        }
    });
};

// Load the JavaScript SDK asynchronously
(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

// Facebook login with JavaScript SDK
function fbLogin() {
    FB.login(function (response) {
        if (response.authResponse) {
            // Get and display the user profile data
            getFbUserData();
        } else {
            document.getElementById('status').innerHTML = 'User cancelled login or did not fully authorize.';
        }
    }, {scope: 'email'});
}

// Fetch the user profile data from facebook
function getFbUserData(){
    FB.api('/me', {locale: 'en_US', fields: 'id,first_name,last_name,email,link,gender,locale,picture'},
    function (response) {
        document.getElementById('fbLink').setAttribute("onclick","fbLogout()");
        document.getElementById('fbLink').innerHTML = 'Logout from Facebook';
        document.getElementById('status').innerHTML = 'Thanks for logging in, ' + response.first_name + '!';
        document.getElementById('userData').innerHTML = '<p><b>FB ID:</b> '+response.id+'</p><p><b>Name:</b> '+response.first_name+' '+response.last_name+'</p><p><b>Email:</b> '+response.email+'</p><p><b>Gender:</b> '+response.gender+'</p><p><b>Locale:</b> '+response.locale+'</p><p><b>Picture:</b> <img src="'+response.picture.data.url+'"/></p><p><b>FB Profile:</b> <a target="_blank" href="'+response.link+'">click to view profile</a></p>';
    });
}

// Logout from facebook
function fbLogout() {
    FB.logout(function() {
        document.getElementById('fbLink').setAttribute("onclick","fbLogin()");
        document.getElementById('fbLink').innerHTML = '<img src="fblogin.png"/>';
        document.getElementById('userData').innerHTML = '';
        document.getElementById('status').innerHTML = 'You have successfully logout from Facebook.';
    });
}