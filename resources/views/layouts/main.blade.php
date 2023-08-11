<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/all.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/all.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/lightbox.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/flexslider.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/owl.theme.default.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/jquery.rateyo.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('css/jquery.mmenu.all.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('css/meanmenu.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/inner-page-style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('Admin/css/timeline.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/table.css')}}">
	
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">

    <title>Internet</title>
  </head>
  <body>
    @include('layouts.header')

    <!-- ===========Hero Section===================== -->

    @yield('content')

    @include('layouts.footer')

    <!-- JS -->
    <script type="text/javascript" src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/lightbox.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/all.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/isotope.pkgd.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/owl.carousel.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.flexslider.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.rateyo.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.mmenu.all.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.meanmenu.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/custom.js')}}"></script>

	<script type="text/javascript">
		$(() => {
			$("#btnresi").click(() => {
				const valcekresi = $("#cekresi").val();
				let tag = "";
				let tag2 = "";
				$.ajax({
					method : "GET",
					url:"/cek-resi",
					data: { resi: valcekresi },
					dataType:"JSON",
					success:(result) => {
						if(result)
						{
							result.forEach(element => {
								if(element.pesan_status === "survei")
								{
									tag2 += `<li class="diproses">Diproses</li>
											 <li class="survei">survei</li>
											 <li class="komplit-error">Komplit</li>`;
								}
								else if (element.pesan_status === "process")
								{
									tag2 += `<li class="diproses">Diproses</li>
											 <li class="survei-error" style="color: gray">survei</li>
											 <li class="komplit-error" style="color: gray">Komplit</li>`;
								}
								else{
									tag2 += `<li class="diproses">Diproses</li>
											 <li class="survei">survei</li>
											 <li class="komplit">Komplit</li>`
								}

								tag += `<h1 class="title"> No Resi = ${element.resi}</h1>
								<h1 class="title"> Status Pesanan = ${element.pesan_status}</h1>
								<ul class="bar">
									${tag2}
                    			</ul>`;
							});
							$("#containerdata").html(tag);
						}
						else{
							console.log("not found");
						}
					}
				})

			})
		})
	</script>
  </body>
</html>
