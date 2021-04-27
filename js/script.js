// Create Ajax Request for Pet Data
// document.querySelector("#navlogin").addEventListener("click", sample);
// window.addEventListener("load", sample);

    function petData(str) {
        if (str=="") {
           document.querySelector(".record-details").innerHTML="";
           return;
        }
         // Create XHR Object
        let xhr = new XMLHttpRequest();
       
        xhr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.querySelector(".record-details").innerHTML=this.responseText;
            }
        };
            //OPEN - type,      url/file,     async
        xhr.open('GET', "petData.php?q="+str, true);
        xhr.send();
    }
   

    document.querySelector("#btn-login").addEventListener("click", login_failed);

    function login_failed(){

        let xhr = new XMLHttpRequest();

        xhr.onreadystatechange = function() {
            if (this.status == 200) {
                document.querySelector(".login_failed").innerHTML = this.responseText;
                // console.log(this.responseText);
            }
        };

        xhr.open('GET', 'login.php', true);
        xhr.send();
    }
