jQuery(document).ready(function($) {

    // SP用 MVスライド
    $('.top-mv__slide').slick({
        infinite: true,
        dots: true,
        arrows: false,
        speed: 1000,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
    });

    // バナースライド
    $('.banner-slide').slick({
        infinite: true,
        dots: false,
        arrows: true,
        speed: 1000,
        slidesToShow: 2,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 640,
                settings: {
                    slidesToShow: 1,
                    dots: true
                }
            }
        ]
    });

    //path = $('.banner-slide .slick-slide img').attr('src');
    //$('.banner-slide .slick-slide img').height();
    //$('.banner-slide .slick-slide img').width();

	$(".banner-slide .slick-slide img").each(function(){
		if($(window).width() >= 640){
			currentImg  = $(this).attr("src");
			width  = $(this).width();
			height = $(this).height();
			ratiow = width / height;
			ratioh = height / width;
			w =$('div.slick-slide').width();
			h =$('div.slick-slide').height();
			if (h > 380) { h = 380; }
			stratiow = w / h;
			stratioh = h / w;
			mt = (h - height) / 2;
			if (mt < 0) { mt=0; }
			if ((ratiow > stratiow) && (width > w)) {
				$(this).width(w);
				height  = $(this).height();
				$(this).height(height);
				$(this).css("margin", mt+"px auto");
			}else if (height > h){
				$(this).height(h);
				width  = $(this).width();
				$(this).width(width);
				$(this).css("margin", mt+"px auto");
			}else if (ratiow > stratiow){
				console.log("03:" + width + " x " + height);
				$(this).css("margin", mt+"px auto");
			}else if (ratiow < stratiow){
				$(this).height(h);
				width  = $(this).width();
				$(this).width(width);
				$(this).css("margin", " auto");
			}else{
				console.log("05:" + width + " x " + height);
				$(this).css("margin", mt+"px auto");
			}
			
		}else{
			height = $(this).height();
			h =$('div.slick-slide').height();
			mt = (h - height) / 2;
			$(this).css("margin", mt+"px auto");
		}
	});



})


$(document).ready(function(){
	let mvSlider = $(".mvSlider");
	let preSlideNum = 0;
	mvSlider.on("init",function(){
		mvSlider.delay(500).queue(function(){ 
			$(".mvCarten").addClass("fadeOut");
			$(".mvSlider-cell.cell-1").addClass("motion");
			mvSlider.slick("slickPlay");
		});
	}).slick({
		arrows:false,
		dots:true,
		autoplay:false,
		pauseOnHover:false,
		pauseOnFocus:false,
		pauseOnDotsHover:false,
		speed:1000,
		autoplaySpeed:6000,
		fade:true,
		swipe:false
	}).on("beforeChange",function(event,slick,currentSlide,nextSlide,){
		let targetSlide;
		let targetMotion;
		if(nextSlide === 0){
			targetMotion = 1;
		}else if(nextSlide === 1){
			targetMotion = 2;
		}else if(nextSlide === 2){
			targetMotion = 3;
		}else if(nextSlide === 3){
			targetMotion = 4;
		}
		targetSlide = $(".mvSlider-cell.cell-" + (targetMotion));
		targetSlide.addClass("motion");
		preSlideNum = currentSlide;
		
	}).on("afterChange",function(event,slick,currentSlide){
		let preSlide;
		let targetMotion;
		if(preSlideNum === 0){
			targetMotion = 1;
		}else if(preSlideNum === 1){
			targetMotion = 2;
		}else if(preSlideNum === 2){
			targetMotion = 3;
		}else if(preSlideNum === 3){
			targetMotion = 4;
		}
		preSlide = $(".mvSlider-cell.cell-" + (targetMotion));
		preSlide.removeClass("motion");
		
	});
});
