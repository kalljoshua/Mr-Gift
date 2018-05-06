function topViewed(pid){

    var chk = document.getElementById("top-viewed-check"+pid);
    var status;
    if(chk.checked == true) {
        state = 1;
    }else {
        state = 0;
    }

    console.log("Howdy: "+pid);
    console.log("Howdy2: "+state);

    $.ajax({
        type: 'GET',
        headers: {"cache-control": "no-cache"},
        url: "/top-viewed-ad",
        async: true,
        cache: false,
        dataType: "json",
        data: 'product_id=' + pid+ '&state=' +state,
        processData: false,
        contentType: false,
        success: function (jsonData, textStatus, jqXHR) {

            console.log("Error: "+jsonData["error"]+", Status: "+jsonData["status"]+", Message: "+jsonData["message"]);


            if(jsonData["error"] == 0 && jsonData["status"] == 1){
                document.getElementById("top-viewed-check"+pid).checked = true;
            }

            if(jsonData["error"] == 0 && jsonData["status"] == 2){
                document.getElementById("top-viewed-check"+pid).checked = false;
            }

        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            console.log("the error is: "+errorThrown);
        }
    });
}



(function($){

    $.ajax({
        type: 'GET',
        headers: {"cache-control": "no-cache"},
        url: "/get-top-viewed-ad",
        async: true,
        cache: false,
        dataType: "json",
        data: 'product_id=',
        processData: false,
        contentType: false,
        success: function (jsonData, textStatus, jqXHR) {

            console.log('getting showing in banner products');

            var f = jsonData["banner"];

            for(var i = 0;i < f.length;i++){

                console.log("top-viewed-check"+f[i]);

                //var span = document.getElementById("banner-show-check"+f[i]);
                document.getElementById("top-viewed-check"+f[i]).checked = true;
            }

        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            console.log("the error is: "+errorThrown);
        }
    });
})(window.jQuery);
