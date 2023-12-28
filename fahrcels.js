to_cels.addEventListener("click", to_cels_f); 
to_fahr.addEventListener("click", to_fahr_f); 

function  to_cels_f (temp) {     
	var temp = document.getElementById('numero').value;
    var itog = (temp - 32) / 1.8;
    if (temp == 0) {
		rez2.innerHTML = "0 ° F  =  "+itog+" ° C";}
	else {
		rez2.innerHTML = temp+"  ° F  =  "+itog+" ° C";} 
	}


function to_fahr_f  (temp) {
	var temp = document.getElementById('numero').value;
    var itog = (temp * 1.8) + 32;
	if (temp == 0) {
		rez2.innerHTML = "0 ° C  =  "+itog+" ° F";}
	else {
    	rez2.innerHTML = temp+" ° C  =  "+itog+" ° F";}
	}