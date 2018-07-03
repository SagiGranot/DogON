(function(){
	var obj1 = document.getElementById("medicalFile");
	var obj2 = document.getElementById("clickOnMedical");
	var obj3 = document.getElementById("file");
	var obj4 = document.getElementById("vaccine");
	var obj5 = document.getElementById("clickOnVaccine");
	var obj6 = document.getElementById("vac");
	obj1.onclick = function(){
		obj1.style.display = "none";
		obj2.style.display = "block";
	}
	obj3.onclick = function(){
		obj2.style.display = "none";
		obj1.style.display = "block";
	}
	obj4.onclick = function(){
		obj4.style.display = "none";
		obj5.style.display = "block";
	}
	obj6.onclick = function(){
		obj5.style.display = "none";
		obj4.style.display = "block";
	}
})();
