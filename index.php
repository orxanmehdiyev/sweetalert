<!DOCTYPE html>
<html>
<head>
	<title>Sweet Alert</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js" ></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src = "js/sweetalert.min.js " > </script> 
</head>
<body>  
	<div class="container">
		<div class="col-md-6">
			<form id="udemyform" >
				<input class="form-control " type="text" name="kadi">
				<input class="form-control " type="password" name="pass">

				<button id="gonder" class="btn btn-primary">kaydet</button>


			</form>
		</div>
	</div>
	<script type="text/javascript">
		$("#udemyform").submit(function(){

			event.preventDefault();
			$.ajax({

type:"POST",
url:"islem.php",
data:$("#udemyform").serialize(),
success:function(data){
  var veri=JSON.parse(data);

swal("bilgileriniz",veri.message,veri.status)

}
			});
			return false;


		});




	</script>









<!--
	<div class="container">
	<button  id="udemy" class="btn btn-primary"  >Butonu sil</button>
	
</div>
<script type="text/javascript">

	var baslik="merhaba dunya";
	var icerik="Lorem ipsum dolor sit amet";

	$("#udemy").click(function(){
		/*swal(baslik,icerik,"error");*/
/*swal("Hello world!");*/
/*swal({
	title:"Udemy Kursalari",
	text:"merhaba dunay adipisicing elit,",
	icon:"info",	
	button:"bagla",
})
.then((value) => {
swal(baslik,icerik,"error");
})*/
swal({
	title:"Button silinecek",
	text:"Buttonu silirsen dostum",
	icon:"warning",
	buttons:true,
	dangerMode:true
})
.then((sil)=>{
	if(sil){
		$("#udemy").hide();
		swal("tebrikler butonu sildiniz",{
			icon:"success",
		})
	}else{
		swal("Buttonu silmediniz",{
			icon:"error"})
	}
});





	});

</script>-->
</body>

</html>