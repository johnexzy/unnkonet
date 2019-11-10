var id = document.getElementById.bind(document);

const update = () => {
    var tag = id('tag').value
    var updateRequest
    try {
        updateRequest = new XMLHttpRequest()
    } catch (e) {
        try {
            updateRequest = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            try {
                updateRequest = new ActiveXObject("Microsoft.XMLHTTP")
            } catch (e) {
                alert("Your browser broke")
                return false
            }
        }
    }
    updateRequest.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            id("commentts").innerHTML = this.responseText
        }
    }
    var updateString = "?tag=" + tag;
    updateRequest.open("GET", "update.php" + updateString, true)
    updateRequest.send(null)
}

const comment = () => {
    var names = id('names').value
    var comments = id('comments').value
    var tag = id('tag').value
    if ((names == null || names == undefined || names == "") && (comments == null || comments == undefined || comments == "")) {
        id('names').style.border = "1px solid red"
        id('comments').style.border = "1px solid red"
        return false
    }
    if (names == null || names == undefined || names == "") {
        id('names').style.border = "1px solid red"
        return false
    }
    if (comments == null || comments == undefined || comments == "") {
        id('comments').style.border = "1px solid red"
        return false
    }
    var ajaxRequest
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

    ajaxRequest.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            id('comments').value = '';
            update()

        }

    }
    var queryString = "?tag=" + tag;
    queryString += "&names=" + names;
    queryString += "&comments=" + encodeURIComponent(comments);

    ajaxRequest.open("GET", "comment.php" + queryString, true);
    ajaxRequest.send(null)
}