    function makeTablepage(){
        let inde="000001";
        /*for(let i=0;i<20;i++){

        }
        */

        var x = document.createElement("TABLE");
        x.setAttribute("id", "myTable");
        document.body.appendChild(x);

        var y = document.createElement("TR");
        y.setAttribute("id", "myTr");
        document.getElementById("myTable").appendChild(y);

        var z = document.createElement("TD");
        var t = document.createTextNode("hello");
        z.appendChild(t);
        document.getElementById("myTr").appendChild(z);
    }