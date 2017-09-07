$('[lang-package]').unbind().on("click", function(e){
    var language = $(this).attr('lang-package');
    loadFileAsText(language);
});

// loadFileAsText();
function loadFileAsText(language){
    var fileContents = "";
    var fileInput = "<?php echo site_url()?>assets/language/package/id/lang_"+language+".ini";

   $.ajax({
            url: fileInput,
            async: false,
            success: function (data){
                fileContents = data;
            }
        });
   changeLanguage(fileContents);
}

function changeLanguage(fileContents){
    var nah = fileContents.split('\n');
    for(var a = 0; a < nah.length; a++){
        var ieu = nah[a].split('#');
        $('[lang-id="'+ieu[0]+'"]').html(ieu[1]);
    }
}
function setCookie(cname,cvalue,exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    // for(var i = 0; i < ca.length; i++) {
    //     var c = ca[i];
    //     while (c.charAt(0) == ' ') {
    //         c = c.substring(1);
    //     }
    //     if (c.indexOf(name) == 0) {
    //         return c.substring(name.length, c.length);
    //     }
    // }
    return ca;
}