/*sales quotation*/
$('[name="newQuotation"]').unbind().on('click',function(e){
    var url = window.location.origin;
    // $.ajax({
    //    type :'POST',
    //    url  :url+"/UNIQ365/Sales_controller/SalesEntry/",
    //    data :'',
    //    success:function(result){
    //    },
    //    error: function(result)
    //    {
    //    }

    // });
    window.location = url+"/UNIQ365/Sales_controller/SalesEntry/";
});

/*sales order*/
$('[name="newOrder"]').unbind().on('click',function(e){
    var url = window.location.origin;
    // $.ajax({
    //    type :'POST',
    //    url  :url+"/UNIQ365/Sales_controller/SalesEntry/",
    //    data :'',
    //    success:function(result){
    //    },
    //    error: function(result)
    //    {
    //    }

    // });
    window.location = url+"/UNIQ365/Sales_controller/SalesEntry/";
});

/*Direct Delivery*/
$('[name="newDelivery"]').unbind().on('click',function(e){
    var url = window.location.origin;
    // $.ajax({
    //    type :'POST',
    //    url  :url+"/UNIQ365/Sales_controller/SalesEntry/",
    //    data :'',
    //    success:function(result){
    //    },
    //    error: function(result)
    //    {
    //    }

    // });
    window.location = url+"/UNIQ365/Sales_controller/SalesEntry/";
});