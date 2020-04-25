const isEnter = () => {
    var w = document.querySelector.bind(document)
    var textarea = w("#textarea"),
        li = w("#underline"),
        b = w("#bold"),
        adddlink = w("#addlink"),
        addvid = w("#addvid");
    var s = w("#size"),
        i = w("#italics"),
        c = w("#color"),
        im = w("#imgins"),
        vi = w("#vidins"),
        lt = w("#link");
    var linkname = w("#linkname"),
        linktext = w("#linktext"),
        vidlink = w("#vidlink");
    const check = () => {
        if (textarea.value.length == 0) {
            $("#disptext").html('Your text will appear here')
        } else { $("#disptext").html(textarea.value) }
    }
    textarea.addEventListener("keyup", function(event) {
        //ThekeycodeforEnterhappenstobe13
        if (event.keyCode == 13) {
            replaceSelection(textarea, "<br>");
            event.preventDefault();
        }
    });
    lt.addEventListener("click", function() {
        $(this).toggleClass('panelListshowActive');
        $(this).toggleClass('panelList');
        $("#panelPane").toggleClass('panelPane')
        $("#panelPane").toggleClass('panelPaneActive')
        $("#linkPanel").toggleClass('show')
    })
    vi.addEventListener("click", function() {
        //alert("john")
        $(this).toggleClass('panelListshowActive');
        $(this).toggleClass('panelList');
        $("#vidPanel").toggleClass('show');
    })
    adddlink.addEventListener("click", function() {
        imgInsert(textarea, "<a href='" + linkname.value + "' target='_blank'>" + linktext.value + "</a>")
    })
    addvid.addEventListener("click", function() {
        imgInsert(textarea, "<center><video src='" + vidlink.value + "' style='width:300px;height:200px;display:block;' controls></video></center>")
    })
    li.addEventListener("click", function() {
        format(textarea, "<u>", "</u>")
    })
    b.addEventListener("click", function() {
        format(textarea, "<b>", "</b>")
    })
    s.addEventListener("click", function() {
        format(textarea, "<font size='16px'>", "</font>")
    })
    i.addEventListener("click", function() {
        format(textarea, "<i>", "</i>")
    })
    im.addEventListener("click", function() {

        var imgURL = prompt("Paste the correct image url...")
        if (imgURL) {
            imgInsert(textarea, "<img src='" + imgURL + "' style='width:300px;height:200px;display:block;' alt='image'>")
        }

    })

    function replaceSelection(field, word) {
        var from = field.selectionStart,
            to = field.selectionEnd;
        field.value = field.value.slice(0, from) + word + field.value.slice(to);
        //Put the cursor after the word
        field.selectionStart = field.selectionEnd = from + word.length;
    }
    const format = (field, open, close) => {

        var from = field.selectionStart,
            to = field.selectionEnd;
        field.value = field.value.slice(0, from) + open + field.value.substr(from, to - from) + close + field.value.substr(to)
        textarea.addEventListener('focus', check)
        $("#textarea").focus()
        field.selectionStart = field.selectionEnd = to + open.length;

    }
    const imgInsert = (field, open) => {
        var from = field.selectionStart,
            to = field.selectionEnd;
        field.value = field.value.slice(0, from) + open + field.value.slice(to);
        textarea.addEventListener('focus', check)
        $("#textarea").focus()
        field.selectionStart = field.selectionEnd = to + open.length;
    }
    textarea.addEventListener('input', check)
}
isEnter()