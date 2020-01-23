let p=null 
function BindEvents(p){
     
     p.on('signal' , function (data){
       
         document.querySelector('#offer').textContent= JSON.stringify(data)
         
     })
     
     
    
    
    p.on('stream',function (stream){
        let video =  document.querySelector('#rec')
         video.volume = 0
       
         video.src = window.URL.createObjectURL(stream)
         video.play()
        
    })
    
    
 }


document.querySelector('#start').addEventListener('click',function (e){
     
     
     navigator.getUserMedia({
         
         video : true,
         audio : true
     },function(stream){
         
         p = new SimplePeer({
             
             initiator : true,
             stream : stream,
             trickle: false
         })
         
         BindEvents(p)
         
         let emitter =  document.querySelector('#emm')
         
         emitter.volume = 0
       
         emitter.src = window.URL.createObjectURL(stream)
         emitter.play()
     },function () {})
     
     
 })



document.querySelector('#incoming').addEventListener('submit',function(e){
    e.preventDefault()
    
    if(p==null){
        
        p = new SimplePeer({
        
        initiator:false,
        trickle:false
        
    })
       BindEvents(p)
        
    }
    
    
    
    p.signal(JSON.parse(e.target.querySelector('textarea').value))
 
})

