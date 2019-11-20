$(document).ready(function() {

    $(document).on('click', '#embed', function(e) {

        e.preventDefault();
        var url = $("#url").val()
        if (url !== "" && url != null) {
            if (url.includes("src") && url.includes("width") && url.includes("iframe")) {
                url = url.slice(url.indexOf("src") + 5)
                url = url.slice(0, url.indexOf(" ") - 1)
                if (!url.includes("https")) {
                    $("#showresult").html("<div class='alert alert-danger'>" +
                        "<span class='pe-7s-info'></span> &nbsp; " +
                        "url is not an embed code !</div>")
                } else {
                    //alert(url)
                    $.ajax({
                            url: 'youtube.inc.php',
                            type: 'POST',
                            data: 'url=' + url,
                            dataType: 'html'
                        })
                        .done(function(data) {
                            if (data == "sucess") {
                                //alert(data)
                                $("#showresult").html("<div class='alert alert-success'>" +
                                    "<span class='pe-7s-info'></span>" +
                                    "&nbsp; successfully Succesfully added !</div>")
                            } else {
                                $("#showresult").html("<div class='alert alert-danger'>" +
                                    "<span class='pe-7s-info'></span> " +
                                    "&nbsp; Internal Server Error. Contact Developer !</div>")

                            }

                        })
                        .fail(function() {
                            alert('error');
                        });
                }

            } else {
                $("#showresult").html("<div class='alert alert-danger'><span class='pe-7s-info'></span> &nbsp; input is not an embed code !</div>")
            }
        } else {
            $("#showresult").html("<div class='alert alert-danger'>" +
                "<span class='pe-7s-info'></span> " +
                "&nbsp; Please provide a Youtube embed code !</div>")

        }


    });

});