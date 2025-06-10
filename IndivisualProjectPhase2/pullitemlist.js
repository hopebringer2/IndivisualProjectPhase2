    function makeTitle(name){
        let newtitle=name;
        document.cookie="title="+newtitle+"; expires=Thu, 18 Dec 2026 12:00:00 UTC";
    }

    function setTitle(){
        let titlename=getcookie("title");
        if(titlename!=""){
            document.title=titlename;
        }else{
            document.title="fail";
        }
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

    function checkcookie(){
        let titlename=getcookie("titlename");
        if(titlename!=""){
            return titlename;
        }else{
            return test;
        }
    }

    function deleteCookies(){

    }