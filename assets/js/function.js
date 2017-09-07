$('[lang-package]').unbind().on("click", function(e){
    var language = $(this).attr('lang-package');
    loadFileAsText(language);
    setCookie("language",language,1);
});
getCookie('language');
// loadFileAsText();
function loadFileAsText(language){
    var fileContents = "";
    var csrfName = '<?php echo $this->security->get_csrf_token_name();?>';
    var csrfHash = '<?php echo $this->security->get_csrf_hash();?>';
    var fileInput = "assets/language/package/"+language+"/home.ini";

    $.ajax({
            url: fileInput,
            type: 'get',
            dataType : 'text',
            async: false,
            success: function (data){
                fileContents = data;
            }
        });
    changeLanguage(fileContents);
// console.log('nah');
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
    var result = "";
    var ca = document.cookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            // return c.substring(name.length, c.length);
            result =  c.substring(name.length, c.length);
        }
    }
    if(result == ''){
        loadFileAsText('e');
    }else{
        loadFileAsText(result);
    }
    // return "";
}