 $(document).ready(function () {
	 
 	$(".ts-sidebar-menu li a").each(function () {
 		if ($(this).next().length > 0) {
 			$(this).addClass("parent");
 		};
 	})
 	var menux = $('.ts-sidebar-menu li a.parent');
 	$('<div class="more"><i class="fa fa-angle-down"></i></div>').insertBefore(menux);
 	$('.more').click(function () {
 		$(this).parent('li').toggleClass('open');
 	});
	$('.parent').click(function (e) {
		e.preventDefault();
 		$(this).parent('li').toggleClass('open');
 	});
 	$('.menu-btn').click(function () {
 		$('nav.ts-sidebar').toggleClass('menu-open');
 	});
	 
	 
	 $('#zctb').DataTable();
	 
	 
	 $("#input-43").fileinput({
		allowedFileExtensions: ["zip", "rar", "gz", "tgz"],
		elErrorContainer: "#errorBlock43"
			// you can configure `msgErrorClass` and `msgInvalidFileExtension` as well
	});

 });


 const btnCli = document.querySelector(".myBtnCli");
 const btnCom = document.querySelector(".myBtnCom");
 const btnCon = document.querySelector(".myBtnCon");
 const btnFac = document.querySelector(".myBtnFac");
 const btnPan = document.querySelector(".myBtnPan");
 const btnReg = document.querySelector(".myBtnReg");
 const btnTreg = document.querySelector(".myBtnTreg");


 btnCli.onclick = ()=>{	
	console.log("echo client ..");
	location.href = "client.php";

} 
btnCli.onclick = ()=>{	
	console.log("echo client ..");
	location.href = "client.php";

}
 btnCom.onclick = ()=>{
	console.log("echo commune ..");
	location.href = "commune.php";

} 
btnCon.onclick = ()=>{
	console.log("echo contrat ..");
	location.href = "contrat.php";

}
btnFac.onclick = ()=>{
	console.log("echo facture ..");
	location.href = "facture.php";

}

btnPan.onclick = ()=>{
	console.log("echo panneau ..");
	location.href = "panneau.php";

}

btnReg.onclick = ()=>{
	console.log("echo reglement ..");
	location.href = "reglement.php";

}
btnTreg.onclick = ()=>{
	console.log("echo Type reglement ..");
	location.href = "typereglement.php";

}




//  //  /login page admin without control
 const btnLog = document.querySelector(".form-login .myBtnLog");

 // log
 btnLog.onclick =()=>{
	 console.log("echo page admin is open");
	 location.href = "/admin/admin-profile.php";
	 // alert('echo reply...');
 }
 