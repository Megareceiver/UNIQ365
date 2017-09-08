$('[name="newQuotation"]').unbind().on('click',function(e){
    var url = window.location.origin;
    $.ajax({
       type :'POST',
       url  :url+"/UNIQ365/Sales_controller/SalesQuotation/",
       data :'',
       success:function(result){
        alert('ok');
       },
       error: function(result)
       {
        alert('no');
       }

    });
});