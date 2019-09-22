<?php
$_api = "https://www.data.qld.gov.au/api/3/action/datastore_search?resource_id=1275335e-72c8-4848-ae39-94275defe86d";
$_data = file_get_contents($_api);
$_data = json_decode($_data, true);
if ($_GET["id"]) {$_picNo=$_GET["id"];} else {$_picNo=2;}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/piano.css">
    <title>Piano</title>
</head>

    <body onselectstart="return false;">
        <header>
            <a href="index.html">Homepage</a>
            &#160&#160&#160|&#160&#160&#160
            <p>Piano</p>
        </header>
        <main>
            <div id="score">
            Please click the "Load Unsafe Script" option on the right side of the browser address bar to browse the score
                <?php foreach($_data["result"]["records"] as $recordKey =>$recordValue) {
                    $recordId = $recordValue["_id"];
                    $recordTitle = $recordValue["Title"]; 
                    $recordCreator = $recordValue["Creator"]; 
                    $recordDescription = $recordValue["Description"];
                    $recordURL = $recordValue["URL"];
                    $realURL =  "https".substr($recordURL,4);
                    if ($recordId == $_picNo) {
                        echo "<embed 
                        style='border:1px black solid'  
                        src=".$realURL ." 
                        width='90%' height='600px'  
                        >
                        </embed>";
                    }
                }
               ?>
            </div>
            <footer class="pianoKey">
                <div id="button1" class="white">
                    <p>a</p>s
                </div>
                <div id="button2" class="black">
                    <p>w</p>
                </div>

                <div id="button3" class="white">
                    <p>s</p>
                </div>

                <div id="button4" class="black">
                    <p>e</p>
                </div>

                <div id="button5" class="white">
                    <p>d</p>
                </div>

                <div id="button6" class="white">
                    <p>f</p>
                </div>

                <div id="button7" class="black">
                    <p>t</p>
                </div>

                <div id="button8" class="white">
                    <p>g</p>
                </div>

                <div id="button9" class="black">
                    <p>y</p>
                </div>

                <div id="button10" class="white">
                    <p>h</p>
                </div>

                <div id="button11" class="black">
                    <p>u</p>
                </div>

                <div id="button12" class="white">
                    <p>j</p>
                </div>
            </footer>
        </main>
       <audio id="keysound1" src="" autoplay></audio>
       <audio id="keysound2" src="" autoplay></audio>
       <audio id="keysound3" src="" autoplay></audio>
       <audio id="keysound4" src="" autoplay></audio>
       <audio id="keysound5" src="" autoplay></audio>
       <audio id="keysound6" src="" autoplay></audio>
       <audio id="keysound7" src="" autoplay></audio>
       <audio id="keysound8" src="" autoplay></audio>
       <audio id="keysound9" src="" autoplay></audio>
       <audio id="keysound10" src="" autoplay></audio>
       <audio id="keysound11" src="" autoplay></audio>
       <audio id="keysound12" src="" autoplay></audio>
    </body>
    
    <script>
   
        var key1=document.getElementById('button1');
        var key2=document.getElementById('button2');
        var key3=document.getElementById('button3');
        var key4=document.getElementById('button4');
        var key5=document.getElementById('button5');
        var key6=document.getElementById('button6');
        var key7=document.getElementById('button7');
        var key8=document.getElementById('button8');
        var key9=document.getElementById('button9');
        var key10=document.getElementById('button10');
        var key11=document.getElementById('button11');
        var key12=document.getElementById('button12');
        // mouise click
        key1.addEventListener('mousedown',function(){
            key1.style.boxShadow='1px 1px 5px black inset';
            keysound1.src='./sound/1.mp3';
        })
        key1.addEventListener('mouseup',function(){
            key1.style.boxShadow='none';
        })
        
        key2.addEventListener('mousedown',function(){
            key2.style.boxShadow='1px 1px 5px black inset';
            keysound2.src='./sound/2.mp3';
        })
        key2.addEventListener('mouseup',function(){
            key2.style.boxShadow='none';
        })
        
        key3.addEventListener('mousedown',function(){
            key3.style.boxShadow='1px 1px 5px black inset';
            keysound3.src='./sound/3.mp3';
        })
        key3.addEventListener('mouseup',function(){
            key3.style.boxShadow='none';
        })
        
        key4.addEventListener('mousedown',function(){
            key4.style.boxShadow='1px 1px 5px black inset';
            keysound4.src='./sound/4.mp3';
        })
        key4.addEventListener('mouseup',function(){
            key4.style.boxShadow='none';
        })
        
        key5.addEventListener('mousedown',function(){
            key5.style.boxShadow='1px 1px 5px black inset';
            keysound5.src='./sound/5.mp3';
        })
        key5.addEventListener('mouseup',function(){
            key5.style.boxShadow='none';
        })
        
        key6.addEventListener('mousedown',function(){
            key6.style.boxShadow='1px 1px 5px black inset';
            keysound6.src='./sound/6.mp3';
        })
        key6.addEventListener('mouseup',function(){
            key6.style.boxShadow='none';
        })
        
        key7.addEventListener('mousedown',function(){
            key7.style.boxShadow='1px 1px 5px black inset';
            keysound7.src='./sound/7.mp3';
        })
        key7.addEventListener('mouseup',function(){
            key7.style.boxShadow='none';
        })
        
        key8.addEventListener('mousedown',function(){
            key8.style.boxShadow='1px 1px 5px black inset';
            keysound8.src='./sound/8.mp3';
        })
        key8.addEventListener('mouseup',function(){
            key8.style.boxShadow='none';
        })
        
        key9.addEventListener('mousedown',function(){
            key9.style.boxShadow='1px 1px 5px black inset';
            keysound9.src='./sound/9.mp3';
        })
        key9.addEventListener('mouseup',function(){
            key9.style.boxShadow='none';
        })
        
        key10.addEventListener('mousedown',function(){
            key10.style.boxShadow='1px 1px 5px black inset';
            keysound10.src='./sound/10.mp3';
        })
        key10.addEventListener('mouseup',function(){
            key10.style.boxShadow='none';
        })
        
        key11.addEventListener('mousedown',function(){
            key11.style.boxShadow='1px 1px 5px black inset';
            keysound11.src='./sound/11.mp3';
        })
        key11.addEventListener('mouseup',function(){
            key11.style.boxShadow='none';
        })
        
        key12.addEventListener('mousedown',function(){
            key12.style.boxShadow='1px 1px 5px black inset';
            keysound12.src='./sound/12.mp3';
        })
        key12.addEventListener('mouseup',function(){
            key12.style.boxShadow='none';
        })
        
        
        // keyboard key up down
        window.onkeydown=function(e){
            if(e.key=='a'){
               key1.style.boxShadow='1px 1px 5px black inset';
               keysound1.src='./sound/1.mp3';
        } 
            if(e.key=='w'){
               key2.style.boxShadow='1px 1px 5px white inset';
               keysound2.src='./sound/2.mp3';
        } 
          
            if(e.key=='s'){
               key3.style.boxShadow='1px 1px 5px black inset';
               keysound3.src='./sound/3.mp3';
        } 
   
           if(e.key=='e'){
               key4.style.boxShadow='1px 1px 5px white inset';
               keysound4.src='./sound/4.mp3';
        } 
           if(e.key=='d'){
               key5.style.boxShadow='1px 1px 5px black inset';
               keysound5.src='./sound/5.mp3';
        } 
   
           if(e.key=='f'){
               key6.style.boxShadow='1px 1px 5px black inset';
               keysound6.src='./sound/6.mp3';
        } 
        
           if(e.key=='t'){
               key7.style.boxShadow='1px 1px 5px white inset';
               keysound7.src='./sound/7.mp3';
        } 
        
           if(e.key=='g'){
               key8.style.boxShadow='1px 1px 5px black inset';
               keysound8.src='./sound/8.mp3';
        } 
        
           if(e.key=='y'){
               key9.style.boxShadow='1px 1px 5px white inset';
               keysound9.src='./sound/9.mp3';
        } 
        
           if(e.key=='h'){
               key10.style.boxShadow='1px 1px 5px black inset';
               keysound10.src='./sound/10.mp3';
        } 
           if(e.key=='u'){
               key11.style.boxShadow='1px 1px 5px white inset';
               keysound11.src='./sound/11.mp3';
        } 
           if(e.key=='j'){
               key12.style.boxShadow='1px 1px 5px black inset';
               keysound12.src='./sound/12.mp3';
        } 
    }
    window.onkeyup=function(e){
        if(e.key=='a'){
            key1.style.boxShadow='none';
            }

        if(e.key=='w'){
        
            key2.style.boxShadow='none';
            }
            
        if(e.key=='s'){
         
            key3.style.boxShadow='none';
            } 
        
   
        if(e.key=='e'){
         
            key4.style.boxShadow='none';
            }
        
       if(e.key=='d'){
        
            key5.style.boxShadow='none';
            }
   
       if(e.key=='f'){
    
            key6.style.boxShadow='none';
            }
        
       if(e.key=='t'){
  
            key7.style.boxShadow='none';
            }
        
       if(e.key=='g'){
  
            key8.style.boxShadow='none';
            }
        
       if(e.key=='y'){
  
            key9.style.boxShadow='none';
            }
        
       if(e.key=='h'){
  
            key10.style.boxShadow='none';
            }
        
       if(e.key=='u'){

            key11.style.boxShadow='none';
            }
        
       if(e.key=='j'){
    
            key12.style.boxShadow='none';
            } 
    }
    </script>
</html>