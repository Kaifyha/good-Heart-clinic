/* $('.single-item').slick({
	infinite: true,
	dots: true,
	slidesToShow: 3,
	slidesToScroll: 1,
	responsive: [
		{
			breakpoint: 768,
			settings: {
			slidesToShow: 2,
			}
		},
			{
			breakpoint: 480,
			settings: {
			slidesToShow: 1,
			}
		}
	]
}); */

$(".single-item").slick({
  dots: true,
  infinite: true,
  speed: 500,
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000
});