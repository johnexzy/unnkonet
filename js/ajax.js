const ajaxFunction = () =>{
    var ajaxRequest;
    try {
        ajaxRequest = new XMLHttpRequest()
    } catch (e) {
        try {
            ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            try {
                ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP")
            } catch (e) {
                alert("Your browser broke")
                return false
            }
        }
    }

    ajaxRequest.onreadystatechange = ()=>{
        if (ajaxRequest.readyState == 4) {
            var ajaxDisplay = document.getElementById('ajaxDiv')
            ajaxDisplay.innerHTML = ajaxRequest.responseText;
        }
    }
    var Id = document.getElementById.bind(document);
    var age = Id("age").value;
    var wpm = Id("wpm").value;
    var sex = Id("sex").value;
    var querystring = "?age=" + age;
    querystring += "&wpm=" + wpm + "&sex="+ sex;
    ajaxRequest.open("GET", "ajax-example.php" + querystring, true);
    ajaxRequest.send(null)

}