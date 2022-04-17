
$(document).ready(function () {

    window.onload= function() {
        checkboxs = document.getElementsByName("interests[]")
        sumbit = document.getElementById("submit")
        var count = 0;
        sumbit.onclick= function(){
            
            for(var i=0;i<checkboxs.length;i++)
            {
                if(checkboxs[i].checked)
                {
                    count++;
                }
            }
            if(count<2){
                alert("Please choose at least 2 interests");
                return false;
            }
            else return true;
        }
    }
});



