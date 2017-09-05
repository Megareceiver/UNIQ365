$('[lang-package]').unbind().on("click", function(e){
    var language = $(this).attr('lang-package');
    loadFileAsText(language);
});

