$(document).ready(function() {

    displayUserInfo();

});


function displayUserInfo() {
    $.ajax({
        url: "https://api.instagram.com/v1/users/self/?access_token="+getQueryVariable("access_token"),
        dataType: "jsonp",
        success: function (res) {
            $("#top-banner-name").html(res.data.username);
            $("#top-banner-profile-image").css("background-image", "url('"+res.data.profile_picture+"')");
        }
    });
}


//FROM https://css-tricks.com/snippets/javascript/get-url-variables/
function getQueryVariable(variable) {
    var query = window.location.search.substring(1);
    var vars = query.split("&");
    for (var i=0;i<vars.length;i++) {
        var pair = vars[i].split("=");
        if(pair[0] == variable){return pair[1];}
    }
    return(false);
}