const isEnter = () => {
    var w = document.querySelector.bind(document)
    var textarea = w("textarea"), li = w("#underline"), b = w("#bold"), s = w("#size"), i = w("#italics"), c = w("#color")
    const check = ()=>{
        if(textarea.value.length == 0){
            $("#disptext").html('Your text will appear here')
        }else{$("#disptext").html(textarea.value)}
    }
	textarea.addEventListener("keyup", function(event){
		//ThekeycodeforEnterhappenstobe13
		if(event.keyCode == 13){
		replaceSelection(textarea, "<br>");
		event.preventDefault();
		}
    });
    li.addEventListener("click", function(){
        format(textarea, "<u>", "</u> ")
    })
    b.addEventListener("click", function(){
        format(textarea, "<b>", "</b> ")
    })
    s.addEventListener("click", function(){
        format(textarea, "<font size='16px'>", "</font> ")
    })
    i.addEventListener("click", function(){
        format(textarea, "<i>", "</i> ")
    })
	function replaceSelection(field, word){
        var from = field.selectionStart, to=field.selectionEnd;
        field.value = field.value.slice(0, from)+word+field.value.slice(to);
		//Put the cursor after the word
        field.selectionStart = field.selectionEnd = from+word.length;
    }
    const format = (field, open, close) => {
        
        var from = field.selectionStart, to = field.selectionEnd;
        field.value = field.value.slice(0, from)+open+field.value.substr(from, to-from)+close+field.value.substr(to+1)
        textarea.addEventListener('focus', check)
        $("textarea").focus()
        field.selectionStart = field.selectionEnd = to+open.length;
        
    }
    textarea.addEventListener('input', check)
}
isEnter()