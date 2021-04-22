// Create Ajax Request for Pet Data

profilebody = document.querySelector(".profilebody")
document.querySelector("#navlogin").addEventListener("click", petData)
  

    function petData() {
        // Create XHR Object
        let xhr = new XMLHttpRequest();

        xhr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                profilebody.innerHTML = this.responseText;
            }
        };
        xhr.open('GET', "petData.php1", true);
        xhr.send();
    }
   
