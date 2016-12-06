$(function(){
	var ColorPicker = function(){
		this.initialize = function(){
			this.image = $('#image');
			this.listeners = $(this.image).on('click', this.getColor);
			this.canvas = $('#myCanvas');
			this.getPosition = function(e)
			{
				event = e;
  				var x = event.x;
  				var y = event.y;
				var canvas = document.getElementById("canvas");
				x -= canvas.offsetLeft;
  				y -= canvas.offsetTop;
				alert("x:" + x + " y:" + y);
			}

			this.listen = function(el)
			{
				el.on("click", function(e)
				{
					event = e;
					console.log(event);
  					var x = event.offsetX;
  					var y = event.offsetY;
					var canvas = document.getElementById("myCanvas");
					//x -= canvas.offsetLeft;
  					//y -= canvas.offsetTop;
					var c=document.getElementById("myCanvas");
    				var ctx=c.getContext("2d");
    				var data =	ctx.getImageData(x, y, 1, 1).data;
    				var rgb = data[0] + ' ' + data[1] +' ' + data[2];
    				document.getElementById('rgb').value = rgb;
				});
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
    			this.image.css('display','none');
				this.listen(this.canvas);
			};
		this.getColor = function(e){
			var target = e.target;
			console.log(target);
			};
		this.initialize();
		this.drawTheImage();
		}
		var picker = new ColorPicker();
});


