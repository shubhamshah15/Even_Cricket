//for 360 view of stadium

var stage;

function init() {   
	var canvas = document.getElementById("canvas");
    if (!canvas || !canvas.getContext) return;
		
	stage = new createjs.Stage(canvas);  
    stage.enableMouseOver(true);
    stage.mouseMoveOutside = true; 
    createjs.Touch.enable(stage);
    
    var imgList = [
              "https://res.cloudinary.com/dewn0wy2s/image/upload/v1592668487/360/1.png",
              "https://res.cloudinary.com/dewn0wy2s/image/upload/v1592668487/360/2.png",
              "https://res.cloudinary.com/dewn0wy2s/image/upload/v1592668487/360/3.png",
              "https://res.cloudinary.com/dewn0wy2s/image/upload/v1592668487/360/4.png",
              "https://res.cloudinary.com/dewn0wy2s/image/upload/v1592668487/360/5.png",
              "https://res.cloudinary.com/dewn0wy2s/image/upload/v1592668487/360/6.png",
              "https://res.cloudinary.com/dewn0wy2s/image/upload/v1592668487/360/7.png",
              "https://res.cloudinary.com/dewn0wy2s/image/upload/v1592668487/360/8.png",
              "https://res.cloudinary.com/dewn0wy2s/image/upload/v1592668487/360/10.png",
              "https://res.cloudinary.com/dewn0wy2s/image/upload/v1592668487/360/11.png",
              "https://res.cloudinary.com/dewn0wy2s/image/upload/v1592668487/360/12.png",
              "https://res.cloudinary.com/dewn0wy2s/image/upload/v1592668487/360/13.png",
              "https://res.cloudinary.com/dewn0wy2s/image/upload/v1592668487/360/14.png",
              "https://res.cloudinary.com/dewn0wy2s/image/upload/v1592668487/360/15.png",
              "https://res.cloudinary.com/dewn0wy2s/image/upload/v1592668487/360/16.png",
              "https://res.cloudinary.com/dewn0wy2s/image/upload/v1592668487/360/17.png", 
              "https://res.cloudinary.com/dewn0wy2s/image/upload/v1592668487/360/18.png", 
              "https://res.cloudinary.com/dewn0wy2s/image/upload/v1592668487/360/19.png", 
               "https://res.cloudinary.com/dewn0wy2s/image/upload/v1592668487/360/20.png", 
               "https://res.cloudinary.com/dewn0wy2s/image/upload/v1592668487/360/21.png",
               "https://res.cloudinary.com/dewn0wy2s/image/upload/v1592668487/360/22.png",
               "https://res.cloudinary.com/dewn0wy2s/image/upload/v1592668487/360/23.png",
               "https://res.cloudinary.com/dewn0wy2s/image/upload/v1592668487/360/24.png",
               "https://res.cloudinary.com/dewn0wy2s/image/upload/v1592668487/360/25.png",
               "https://res.cloudinary.com/dewn0wy2s/image/upload/v1592668487/360/26.png", 
              "https://res.cloudinary.com/dewn0wy2s/image/upload/v1592668487/360/27.png",
              "https://res.cloudinary.com/dewn0wy2s/image/upload/v1592668487/360/28.png",
              "https://res.cloudinary.com/dewn0wy2s/image/upload/v1592668487/360/29.png",
              "https://res.cloudinary.com/dewn0wy2s/image/upload/v1592668487/360/30.png",
             "https://res.cloudinary.com/dewn0wy2s/image/upload/v1592668487/360/31.png",
              "https://res.cloudinary.com/dewn0wy2s/image/upload/v1592668487/360/32.png",
              "https://res.cloudinary.com/dewn0wy2s/image/upload/v1592668487/360/33.png",
              "https://res.cloudinary.com/dewn0wy2s/image/upload/v1592668487/360/34.png",
              "https://res.cloudinary.com/dewn0wy2s/image/upload/v1592668487/360/35.png",
              "https://res.cloudinary.com/dewn0wy2s/image/upload/v1592668487/360/36.png",
              "https://res.cloudinary.com/dewn0wy2s/image/upload/v1592668487/360/37.png",
              "https://res.cloudinary.com/dewn0wy2s/image/upload/v1592668487/360/38.png",
              "https://res.cloudinary.com/dewn0wy2s/image/upload/v1592668487/360/39.png",
              "https://res.cloudinary.com/dewn0wy2s/image/upload/v1592668487/360/40.png",
              "https://res.cloudinary.com/dewn0wy2s/image/upload/v1592668487/360/41.png",
              "https://res.cloudinary.com/dewn0wy2s/image/upload/v1592668487/360/42.png",
              "https://res.cloudinary.com/dewn0wy2s/image/upload/v1592668487/360/43.png",
              "https://res.cloudinary.com/dewn0wy2s/image/upload/v1592668487/360/44.png",
              "https://res.cloudinary.com/dewn0wy2s/image/upload/v1592668487/360/45.png",
              "https://res.cloudinary.com/dewn0wy2s/image/upload/v1592668487/360/46.png",
              "https://res.cloudinary.com/dewn0wy2s/image/upload/v1592668487/360/47.png",
              "https://res.cloudinary.com/dewn0wy2s/image/upload/v1592668487/360/48.png",
              "https://res.cloudinary.com/dewn0wy2s/image/upload/v1592668487/360/49.png",
              "https://res.cloudinary.com/dewn0wy2s/image/upload/v1592668487/360/50.png",
              "https://res.cloudinary.com/dewn0wy2s/image/upload/v1592668487/360/51.png"];  
    var images = [], loaded = 0, currentFrame = 0, totalFrames = imgList.length; 
    var rotate360Interval, start_x;
    
    var bg = new createjs.Shape();
    stage.addChild(bg);  
    
    var bmp = new createjs.Bitmap();	  
    stage.addChild(bmp);
    
    var myTxt = new createjs.Text("360 Car", '24px Ubuntu', "#ffffff");
    myTxt.x = myTxt.y =20;
    myTxt.alpha = 0.08;
    stage.addChild(myTxt);   
    
    
    function load360Image() {
        var img = new Image();
        img.src = imgList[loaded];
        img.onload = img360Loaded;
        images[loaded] = img;   
    }
    
    function img360Loaded(event) {
        loaded++;        
        bg.graphics.clear()
        bg.graphics.beginFill("#222").drawRect(0,0,stage.canvas.width * loaded/totalFrames, stage.canvas.height);
        bg.graphics.endFill();
        
        if(loaded==totalFrames) start360();
        else load360Image();
    }

    
    function start360() {
        document.body.style.cursor='none';
        
        // 360 icon
        var iconImage = new Image();
        iconImage.src = "";
        iconImage.onload = iconLoaded;        
       
        // update-draw
        update360(0);
        
        // first rotation
        rotate360Interval = setInterval(function(){ if(currentFrame===totalFrames-1) { clearInterval(rotate360Interval); addNavigation(); } update360(1); }, 25);
    }
    
    function iconLoaded(event) {
        var iconBmp = new createjs.Bitmap();
        iconBmp.image = event.target;
        iconBmp.x = 20;
        iconBmp.y = canvas.height - iconBmp.image.height - 20;
        stage.addChild(iconBmp);
    }
    
    function update360(dir) {
        currentFrame+=dir;
        if(currentFrame<0) currentFrame = totalFrames-1;
        else if(currentFrame>totalFrames-1) currentFrame = 0;
        bmp.image = images[currentFrame];
    }


    //------------------------------- 
     function addNavigation() { 
        stage.onMouseOver = mouseOver;
        stage.onMouseDown = mousePressed;        
        document.body.style.cursor='auto';
    }
    
    function mouseOver(event) {
        document.body.style.cursor='pointer';
    }
    
    function mousePressed(event) {
        start_x = event.rawX;
        stage.onMouseMove = mouseMoved;
        stage.onMouseUp = mouseUp;
        
        document.body.style.cursor='w-resize';        
    }
    
	function mouseMoved(event) {
        var dx = event.rawX - start_x;
        var abs_dx = Math.abs(dx);
        
        if(abs_dx>5) {
            update360(dx/abs_dx);
            start_x = event.rawX;
        }
	}
    
    function mouseUp(event) {
        stage.onMouseMove = null;
        stage.onMouseUp = null;         
        document.body.style.cursor='pointer';
	}    
    
    function handleTick() {	
         stage.update();
    }    
    
    document.body.style.cursor='progress';
    load360Image();
    
    
     // TICKER
    createjs.Ticker.addEventListener("tick", handleTick);
    createjs.Ticker.setFPS(60);
    createjs.Ticker.useRAF = true;
}




// Init
window.addEventListener('load', init, false);