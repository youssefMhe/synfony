<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
	
</head>
<body>
  
  
  <script>
    function onVidyoClientLoaded(status){
        console.log("mozitoun"+status.state);
        
        if(status.state=="READY"){
            VC.CreateVidyoConnector({
                
                viewId:"render",
                viewStyle:"VIDYO_CONNECTORVIEWSTYLE_Default",
                
                remoteParticipants : 16,
                
                logFileFilter : "error",
                logFileName:"",
                userData:""
                
            }).then(function (vc){
                    console.log("create success");
                    })
        }
        
        
        
    }
    
    </script>


	<script src="https://static.vidyo.io/4.1.21.7/javascript/VidyoClient/VidyoClient.js?onload=onVidyoClientLoaded"></script>

	
  
  
  
  
   <div id="render">
       
   </div>
    </body>
</html>