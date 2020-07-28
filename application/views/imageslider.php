<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style/slider.css') ?>">
</head>
	<body>
		<div class="slideshow">
			
				<div class="slides fade">
					<div><img src="<?php echo base_url('assets/img2/1.jpg') ?>" ></div>
				</div>
				<div class="slides">
					<div><img src="<?php echo base_url('assets/img2/2.jpg') ?>" ></div>
				</div>
				<div class="slides">
					<div><img src="<?php echo base_url('assets/img2/3.jpg') ?>" ></div>
				</div>
				<div class="slides">
					<div><img src="<?php echo base_url('assets/img2/4.jpg') ?>" ></div>
				</div>
				<div class="slides">
					<div><img src="<?php echo base_url('assets/img2/5.jpg') ?>" ></div>
				</div>
				
		</div>
		<br/>
		 
		<div style="text-align:center;">
			<span class="bunder" onclick="currentSlide(1)"></span>
			<span class="bunder" onclick="currentSlide(2)"></span>
			<span class="bunder" onclick="currentSlide(3)"></span>
			<span class="bunder" onclick="currentSlide(4)"></span>
			<span class="bunder" onclick="currentSlide(5)"></span>
			
		</div>
		
		<script type="text/javascript">
		var slideIndex = 1;
		
		showImage(slideIndex);
		
		function plusIndex(n){
			showImage(slideIndex += n);
		}
		
		function currentSlide(n){
			showImage(slideIndex = n);
		}
		
		function showImage(n){
			var slide = document.getElementsByClassName("slides");
			var bunder = document.getElementsByClassName("bunder");
			
			if(n > slide.length){slideIndex = 1};
			if (n < 1) {slideIndex = slide.length};
			
			for (var a = 0; a < slide.length; a++){
				slide[a].style.display = "none" ;
			};
			slide[slideIndex-1].style.display = "block";
			
			for (var a = 0; a < slide.length; a++){
				bunder[a].className = bunder[a].className.replace(" active","");
			};
			
			bunder[slideIndex-1].className += " active";
		} 
		autoSlide();
		function autoSlide(){
			var slide = document.getElementsByClassName("slides");
			
			
				for(var a=0;a<slide.length;a++)
				{
					slide[a].style.display = "none";
				}
				if(slideIndex > slide.length){ slideIndex = 1 };
				slide[slideIndex-1].style.display = "block";
				slideIndex++;
			setTimeout(autoSlide,4000);
			
		}
		</script>
			
	</body>
	
		
</html>		
		
		