(function (cjs, an) {

var p; // shortcut to reference prototypes
var lib={};var ss={};var img={};
lib.ssMetadata = [
		{name:"landing_page_atlas_", frames: [[0,1082,807,807],[0,0,1920,1080]]}
];


// symbols:



(lib.CachedBmp_1 = function() {
	this.initialize(ss["landing_page_atlas_"]);
	this.gotoAndStop(0);
}).prototype = p = new cjs.Sprite();



(lib.e_congress_bg_2 = function() {
	this.initialize(ss["landing_page_atlas_"]);
	this.gotoAndStop(1);
}).prototype = p = new cjs.Sprite();
// helper functions:

function mc_symbol_clone() {
	var clone = this._cloneProps(new this.constructor(this.mode, this.startPosition, this.loop));
	clone.gotoAndStop(this.currentFrame);
	clone.paused = this.paused;
	clone.framerate = this.framerate;
	return clone;
}

function getMCSymbolPrototype(symbol, nominalBounds, frameBounds) {
	var prototype = cjs.extend(symbol, cjs.MovieClip);
	prototype.clone = mc_symbol_clone;
	prototype.nominalBounds = nominalBounds;
	prototype.frameBounds = frameBounds;
	return prototype;
	}


(lib.btn = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.instance = new lib.CachedBmp_1();
	this.instance.setTransform(-50,-50,0.1239,0.1239);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

	this._renderFirstFrame();

}).prototype = getMCSymbolPrototype(lib.btn, new cjs.Rectangle(-50,-50,100.1,100.1), null);


// stage content:
(lib.landing_page = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	this.isSingleFrame = false;
	// timeline functions:
	this.frame_0 = function() {
		if(this.isSingleFrame) {
			return;
		}
		if(this.totalFrames == 1) {
			this.isSingleFrame = true;
		}
		this.stop();
		
		var frequency = 30;
		stage.enableMouseOver(frequency)
		
		var _root = this;
		var day1 = new Date(2021, 4, 7);
		var day2 = new Date(2021, 4, 8);
		var day3 = new Date(2021, 4, 9);
		//1
		_root.standovi_btn.addEventListener('click', function(){
		
			window.open('/simpozij/booth', '_parent');
			
			});
			
		_root.standovi_btn.cursor = "pointer";
		
		//2	
		_root.sazetci_btn.addEventListener('click', function(){
		
			window.open('/simpozij/summary', '_parent');
			
			});
		_root.sazetci_btn.cursor = "pointer";
		
		//3
		_root.live_video_btn.addEventListener('click', function(){
			
			if(isToday(day1)){
				window.open('https://zoom.us/j/92397780559', '_blank');
			}
			else if(isToday(day2)){
				window.open('https://zoom.us/j/96324360410', '_blank');
			}
			else if(isToday(day3)){
				window.open('https://zoom.us/j/94918098079', '_blank');
			}
			else{
				alert("Event trenutno nije live.");
			}
			
			});
		_root.live_video_btn.cursor = "pointer";
		
		//4
		_root.posteri_btn.addEventListener('click', function(){
		
			window.open('/simpozij/exibition', '_parent');
			
			});
		_root.posteri_btn.cursor = "pointer";
		
		//5
		_root.program_btn.addEventListener('click', function(){
		
			window.open('/simpozij/webinars', '_parent');
			
			});
		_root.program_btn.cursor = "pointer";
			
		_root.info_pult_btn.addEventListener('click', function(){
			
			$('#infopult').modal('show');
			
			});
		_root.info_pult_btn.cursor = "pointer";
			
		
		const isToday = (date) => {
		    const today = new Date()
		    return date.getDate() === today.getDate() &&
		        date.getMonth() === today.getMonth() &&
		        date.getFullYear() === today.getFullYear();
		};
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).call(this.frame_0).wait(1));

	// info_pult_layer
	this.info_pult_btn = new lib.btn();
	this.info_pult_btn.name = "info_pult_btn";
	this.info_pult_btn.setTransform(320.3,862.1,3.5026,1.6191,0,0,0,0.1,0.1);

	this.timeline.addTween(cjs.Tween.get(this.info_pult_btn).wait(1));

	// program_btn_layer
	this.program_btn = new lib.btn();
	this.program_btn.name = "program_btn";
	this.program_btn.setTransform(238.2,621.65,2.784,1.845,0,0,0,0.1,0.2);

	this.timeline.addTween(cjs.Tween.get(this.program_btn).wait(1));

	// posteri_btn_layer
	this.posteri_btn = new lib.btn();
	this.posteri_btn.name = "posteri_btn";
	this.posteri_btn.setTransform(429.05,443.15,2.5948,1.72,0,0,0,0.1,0.1);

	this.timeline.addTween(cjs.Tween.get(this.posteri_btn).wait(1));

	// live_video_btn_layer
	this.live_video_btn = new lib.btn();
	this.live_video_btn.name = "live_video_btn";
	this.live_video_btn.setTransform(962.35,583.95,4.0339,2.5973,0,0,0,0,0.1);

	this.timeline.addTween(cjs.Tween.get(this.live_video_btn).wait(1));

	// sazetci_btn_layer
	this.sazetci_btn = new lib.btn();
	this.sazetci_btn.name = "sazetci_btn";
	this.sazetci_btn.setTransform(1497.5,442.85,2.6585,1.595);

	this.timeline.addTween(cjs.Tween.get(this.sazetci_btn).wait(1));

	// standovi_btn_layer
	this.standovi_btn = new lib.btn();
	this.standovi_btn.name = "standovi_btn";
	this.standovi_btn.setTransform(1686.95,621.45,2.7511,1.7524,0,0,0,0,0.1);

	this.timeline.addTween(cjs.Tween.get(this.standovi_btn).wait(1));

	// background
	this.instance = new lib.e_congress_bg_2();

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

	this._renderFirstFrame();

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(960,540,960,540);
// library properties:
lib.properties = {
	id: 'D969E1FBB2FB434A81EACF4C091976D4',
	width: 1920,
	height: 1080,
	fps: 30,
	color: "#FFFFFF",
	opacity: 1.00,
	manifest: [
		{src:"images/landing_page_atlas_.png?1620139162606", id:"landing_page_atlas_"}
	],
	preloads: []
};



// bootstrap callback support:

(lib.Stage = function(canvas) {
	createjs.Stage.call(this, canvas);
}).prototype = p = new createjs.StageGL();

p.setAutoPlay = function(autoPlay) {
	this.tickEnabled = autoPlay;
}
p.play = function() { this.tickEnabled = true; this.getChildAt(0).gotoAndPlay(this.getTimelinePosition()) }
p.stop = function(ms) { if(ms) this.seek(ms); this.tickEnabled = false; }
p.seek = function(ms) { this.tickEnabled = true; this.getChildAt(0).gotoAndStop(lib.properties.fps * ms / 1000); }
p.getDuration = function() { return this.getChildAt(0).totalFrames / lib.properties.fps * 1000; }

p.getTimelinePosition = function() { return this.getChildAt(0).currentFrame / lib.properties.fps * 1000; }

an.bootcompsLoaded = an.bootcompsLoaded || [];
if(!an.bootstrapListeners) {
	an.bootstrapListeners=[];
}

an.bootstrapCallback=function(fnCallback) {
	an.bootstrapListeners.push(fnCallback);
	if(an.bootcompsLoaded.length > 0) {
		for(var i=0; i<an.bootcompsLoaded.length; ++i) {
			fnCallback(an.bootcompsLoaded[i]);
		}
	}
};

an.compositions = an.compositions || {};
an.compositions['D969E1FBB2FB434A81EACF4C091976D4'] = {
	getStage: function() { return exportRoot.stage; },
	getLibrary: function() { return lib; },
	getSpriteSheet: function() { return ss; },
	getImages: function() { return img; }
};

an.compositionLoaded = function(id) {
	an.bootcompsLoaded.push(id);
	for(var j=0; j<an.bootstrapListeners.length; j++) {
		an.bootstrapListeners[j](id);
	}
}

an.getComposition = function(id) {
	return an.compositions[id];
}


an.makeResponsive = function(isResp, respDim, isScale, scaleType, domContainers) {		
	var lastW, lastH, lastS=1;		
	window.addEventListener('resize', resizeCanvas);		
	resizeCanvas();		
	function resizeCanvas() {			
		var w = lib.properties.width, h = lib.properties.height;			
		var iw = window.innerWidth, ih=window.innerHeight;			
		var pRatio = window.devicePixelRatio || 1, xRatio=iw/w, yRatio=ih/h, sRatio=1;			
		if(isResp) {                
			if((respDim=='width'&&lastW==iw) || (respDim=='height'&&lastH==ih)) {                    
				sRatio = lastS;                
			}				
			else if(!isScale) {					
				if(iw<w || ih<h)						
					sRatio = Math.min(xRatio, yRatio);				
			}				
			else if(scaleType==1) {					
				sRatio = Math.min(xRatio, yRatio);				
			}				
			else if(scaleType==2) {					
				sRatio = Math.max(xRatio, yRatio);				
			}			
		}			
		domContainers[0].width = w * pRatio * sRatio;			
		domContainers[0].height = h * pRatio * sRatio;			
		domContainers.forEach(function(container) {				
			container.style.width = w * sRatio + 'px';				
			container.style.height = h * sRatio + 'px';			
		});			
		stage.scaleX = pRatio*sRatio;			
		stage.scaleY = pRatio*sRatio;			
		lastW = iw; lastH = ih; lastS = sRatio;            
		stage.tickOnUpdate = false;            
		stage.update();            
		stage.tickOnUpdate = true;		
	}
}


})(createjs = createjs||{}, AdobeAn = AdobeAn||{});
var createjs, AdobeAn;