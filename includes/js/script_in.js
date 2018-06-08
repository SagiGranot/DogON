var flag = 0;
function myFunction(x) {
	if (flag == 0){
	    x.classList.toggle("change");
	    document.getElementById("sideMenu").style.display = "block";
	    document.getElementById("hamburger").style.right = "190px";
	    flag = 1;
	}
	else {
		x.classList.toggle("change");
	    document.getElementById("sideMenu").style.display = "none";
	    document.getElementById("hamburger").style.right = "0";
	    flag = 0;
	}
}