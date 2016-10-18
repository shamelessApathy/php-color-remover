$(function(){
	var ColorPicker = function(){
		this.initalize = function(){
			this.image = $('#image');
			this.rgbCode = document.getElementById('rgb-code');
			this.pixelColor;
			this.directory = $('#directory').attr('data-attribute');
			this.listeners = function(){
				$('#myCanvas').on('click', function(e){
				console.log('executing');
				var target = e.target;
				var c=document.getElementById("myCanvas");
    			var ctx=c.getContext("2d");
    			var target = e.target;
				console.log(e);
    			var pixelColor = ctx.getImageData(e.offsetX, e.offsetY, 1, 1).data;
    			var pixelColor = pixelColor.slice(1,4);
    			this.pixelColor = pixelColor;
    			this.rgbCode.value = pixelColor[0] + ' ' + pixelColor[1] + ' ' + pixelColor[2];

				console.log(pixelColor);
			}.bind(this));
				$('#submit').on('click', function(){
					if (this.rgbCode.value){
						this.startAjax();
					}
				}.bind(this));
			}.bind(this);	
			this.canvas = $('#canvas');
			this.startAjax = function(){
				var data = {'directory' -> this.directory, 'color' -> this.pixelColor};
				console.log(data);
			}.bind(this);
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
			this.listeners();
			};
		this.initalize();
		this.drawTheImage();
		}
		var picker = new ColorPicker();
});

