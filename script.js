$(document).ready(function(){
	blurbGenerator("blurb");
	
	beeAnimate();
});

function blurbGenerator(el_id){
	var element = $("#"+el_id);
	var blurbs = ["Animator", "Designer", "Developer", "Problem Solver", "Bee Enthusiast", "Cartoonist"];
	var text = "";
	for(i=0; i<3;i++){
		var a = blurbs[Math.floor(Math.random() * blurbs.length)];
		if(text.includes(a)){
			while(text.includes(a)){
				var a = blurbs[Math.floor(Math.random() * blurbs.length)];
			}
		}
		text+= a;
		text+= " ";
	}
	element.text(text);
}

function beeAnimate(){
	$("#bee-img").on('mouseenter', function(){
		$("#bee-img").attr('src', 'img/bee.gif');
	});
	$("#bee-img").on('mouseleave', function(){
		$("#bee-img").attr('src', 'img/bee.png');
	});
}