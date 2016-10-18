$(function(){
	var ColorPicker = function(){
		this.initalize = function(){
			this.image = $('#image');
			this.listeners = $(this.image).on('click', this.getColor);
			this.canvas = $('#canvas');
			this.drawTheImage = function(){
				var c=document.getElementById("myCanvas");
    			var ctx=c.getContext("2d");
    			var img= document.getElementById('image');
    			var imgWidth = $(img).width();
    			var imgHeight = $(img).height();
    			ctx.canvas.width = imgWidth;
    			ctx.canvas.height = imgHeight;
    			ctx.drawImage(img,10,10);
				}.bind(this);
			};
		this.getColor = function(e){
			var target = e.target;
			console.log(target);
			};
		this.initalize();
		this.drawTheImage();
		}
		var picker = new ColorPicker();
});

