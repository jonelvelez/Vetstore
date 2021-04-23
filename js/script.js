// Create Ajax Request for Pet Data
let navlogin = document.querySelector("#navlogin").addEventListener("click", petData);

    function petData(str) {
        if (str=="") {
           document.querySelector(".profilebody").innerHTML="";
           return;
        }
         // Create XHR Object
        let xhr = new XMLHttpRequest();
 
        xhr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.querySelector(".profilebody").innerHTML=this.responseText;
            }
        };
        xhr.open('GET', "petData.php?q="+str, true);
        xhr.send();
    }
   
