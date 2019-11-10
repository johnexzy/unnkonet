var selector = document.getElementById.bind(document);
function iScheck() {
    if (this.value.length !== 1) {
        // this.style.padding = "15px 15px 15px 0px";
        alert("jnu")
    } else {
        this.style.padding = "15px";
    };
}
selector("input").addEventListener('input', iScheck)