
    const isBirthday = (datum)=>{
        const Birthday = []
        var date = new Date();
        today = date.getDate();
        Month = date.getMonth();
        Month = Month + 1;
        birth = today +"/"+ Month;
        
        for (let i = 0; i < datum.length; i++) {
            

            if (datum[i].indexOf(birth) == 0) {
                Birthday.push(datum[2])
                delete datum[i]
            }else{ 
             }
             
        }return Birthday
    }
console.log(isBirthday([['25/12','OBA JOHN OBINNA','images/gallery/1.jpg','+2349030802288','MALE','PUREE AND INDUSTRIAL'],['13/12','OLUTOSON DAVID IFEANYI','images/gallery/6 (3).jpg','+2349032295527','MALE','COMBINED ARTS'],['25/12','CHUKWU ESTHER','images/gallery/6 (8).jpg', '+2347039192349','MALE','PHARMACY']]))

