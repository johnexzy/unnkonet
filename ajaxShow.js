id = document.getElementById.bind(document)
const addShowcase = ()=>{
    header = id('header').value;
    msg = id('msg').value;
    avatar = id('image').value;
    alert(msg)
    Request = new XMLHttpRequest()
   Request.onreadystatechange = function () {
       if (this.readyState == 4 && this.status == 200) {
           alert(this.responseText);
           
           
       }
       
   }
   var query = "?header=" + header;
   query += "&msg=" + msg;
   query += "&avatar=" + avatar;
   Request.open("GET", "db.php" + query, true);
   Request.send(null)
}