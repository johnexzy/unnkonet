var id = document.querySelector.bind(document)
id("#touch").addEventListener("click", function() {
    $("#upload").click();
})
$(document).on("click", "#vidUrl", function(e){
    e.preventDefault()
    // alert($(this).text())
     
    $("#copyUrl").val($(this).text()).select()
    if(document.execCommand("copy")) alert("link copied!!")

})