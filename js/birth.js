$(document).ready(function() {

    var date = new Date();

    today = date.getDate();

    Month = date.getMonth();

    Month = Month + 1;

    birth = today + "/" + Month;



    const isBirthday = (datum) => {

        Birthday = [] //Initialised array for birthday

        for (let i = 0; i < datum.length; i++) {

            if (datum[i][0] == birth) {

                Birthday.push(datum[i])

            }

        }

        if (Birthday.length > 0) {

            for (let j = 0; j < Birthday.length; j++) {

                $("#bday").append("<li><div class='c5' style='margin:0 20px 10px 0;background: url(images/birthday/1.jpg);background-size:100% 400px; min-height:400px; background-repeat:no-repeat'><font size='4'></font><img src='" + Birthday[j][2] + "' class='' style='width:44%; height:148px; position:relative; left:52%; top:173px;' alt=''></div></li>")

            }

        } else {

            $("#bday").html("<h3>NO BIRTHDAY UPDATE FOR TODAY</h3>")

        }



    }

    //isBirthday([['31/7','OLUTOSON DAVID','images/gallery/1.jpg','+2349030802288','MALE','PUREE AND INDUSTRIAL'],['31/7','OLUTOSON DAVID','images/gallery/6 (4).jpg','+2349030802288','MALE','PUREE AND INDUSTRIAL'],['31/7','JESUS CHRIST','images/gallery/6 (6).jpg','+2349032295527','MALE','HEAVEN'],['31/7','CHUKWU ESTHER','images/birthday/IMG-20181224-WA0000.jpg', '+2347039192349','MALE','PHARMACY']])

})