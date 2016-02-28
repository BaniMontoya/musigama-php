
<!doctype html>
<html>
  <head>
  	<title>WAAPI tests</title>
    <meta charset="utf-8">
  </head>
  <body>
  
  		
  		<button onclick="play()">play one</button>
  		<button onclick="play2()">play two</button>
 
 
  		<button onclick="stop()">stop</button>
   		<script>
   		
   		  	var context;
   		
   			window.addEventListener('load', initAudio, false);
   			
			
			function initAudio() {
				try {
					context = new AudioContext();
				}
				catch(e) {
			    	onError(e);
			  	}
			}
			
			
		function stop(){
                  soundEnabled = false;
                }	
                             // setTimeout(play2,1000); 
			/* error */
			
			function onError(e) {
				alert(e);	
			}
  		
  		
  		
  		</script>
  		  		
  		  	  	
  	</body>
 </html>