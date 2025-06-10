    function makeTitle(name){
        let newtitle=name;
        document.cookie="title="+newtitle+"; expires=Thu, 18 Dec 2026 12:00:00 UTC";
    }

    function getcookie(cname){
        let name = cname + "=";
        let decodedCookie =decodeURIComponent(document.cookie);
        let ca = decodedCookie.split(';');
        for(let i=0;i<ca.length;i++){
            let c=ca[i];
            while(c.charAt(0)==' '){
                c=c.substring(1);
            }
            if(c.indexOf(name)==0){
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }
