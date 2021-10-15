
function Setup(){
 var obj = document.getElementById('search-box')
 obj.onmouseover = D1;
 obj.onmouseout = D2;
}
function D1(){
    var obj = document.getElementById('signup')
    obj.setAttribute('style','right:-265px; transition:0.4s')

    var obj = document.getElementById('login')
    obj.setAttribute('style','right:-195px; transition:0.4s; ')

    var obj = document.getElementById('donate')
    obj.setAttribute('style','right:-125px; transition:0.4s;')

}

function D2(){
    var obj = document.getElementById('signup')
    obj.setAttribute('style','transition:0.4s')
    
    var obj = document.getElementById('login')
    obj.setAttribute('style','transition:0.4s')

    var obj = document.getElementById('donate')
    obj.setAttribute('style','transition:0.4s')  
}



function Setup1(){
    var obj = document.getElementById('signup')
    obj.onmouseover = E1;
    obj.onmouseout = E2;
   }
   function E1(){
       var obj = document.getElementById('login')
       obj.setAttribute('style','right:-360px; transition:0.3s')

       var obj = document.getElementById('donate')
       obj.setAttribute('style','right:-290px; transition:0.3s')

       var obj = document.getElementById('A12')
       obj.setAttribute('style','opacity:80%')

   }
   function E2(){
       var obj = document.getElementById('login')
       obj.setAttribute('style','transition:0.3s')

       var obj = document.getElementById('donate')
       obj.setAttribute('style','transition:0.3s')

       var obj = document.getElementById('A12')
       obj.setAttribute('style','opacity:0%')
   }
   

function Setup2(){
    var obj = document.getElementById('login')
    obj.onmouseover = M1;
    obj.onmouseout = M2;
   }
   function M1(){
       var obj = document.getElementById('donate')
       obj.setAttribute('style','right:-285px; transition:0.3s')

       var obj = document.getElementById('A13')
       obj.setAttribute('style','opacity:80%')

   }
   function M2(){
       var obj = document.getElementById('donate')
       obj.setAttribute('style','transition:0.3s')

       var obj = document.getElementById('A13')
       obj.setAttribute('style','opacity:0%')
   }


function Setup3(){
    var obj = document.getElementById('donate')
    obj.onmouseover = N1;
    obj.onmouseout = N2;
   }
   function N1(){
       var obj = document.getElementById('A14')
       obj.setAttribute('style','opacity:80%')
   }
   function N2(){
       var obj = document.getElementById('A14')
       obj.setAttribute('style','opacity:0%')
   }


function Clickk1() {
    var obj = document.getElementById('next-btn')
    obj.onclick = P1;
}
function P1 () {
        var obj = document.getElementById('PAD00')
        obj.setAttribute('style','transform: translate(-100px,0); opacity:0%; transition:1s')

        var obj = document.getElementById('PAD01')
        obj.setAttribute('style','transform: translate(-100px,0); opacity:0%; transition:2s')
        
        var obj = document.getElementById('PAD02')
        obj.setAttribute('style','transform: translate(-100px,0); opacity:0%; transition:2.5s')

        var obj = document.getElementById('PAD03')
        obj.setAttribute('style','transform: translate(-100px,0); opacity:0%; transition:3s')

        var obj = document.getElementById('PAD04')
        obj.setAttribute('style','transform: translate(0px,0); opacity:100%; transition:2s')

        var obj = document.getElementById('PAD05')
        obj.setAttribute('style','opacity:100%; transition:3s')
        
        var obj = document.getElementById('PAD06')
        obj.setAttribute('style','opacity:100%; transition:3.5s')

        var obj = document.getElementById('PAD07')
        obj.setAttribute('style','opacity:100%; transition:4s')

        var obj = document.getElementById('it1')
        obj.setAttribute('style','opacity:0%; transition: 2s')

        var obj = document.getElementById('it2')
        obj.setAttribute('style','opacity:100%; padding-left:65px; transition:2s')
 
    } 


function Clickk2() {
    var obj = document.getElementById('next-btn');
    obj.onclick = P2;
}
function P2 () {
        var obj = document.getElementById('it2')
        obj.setAttribute('style','opacity:0%; transition: 2s')
    
        var obj = document.getElementById('it3')
        obj.setAttribute('style','opacity:100%; padding-left:65px; transition:2s')
    
        var obj = document.getElementById('PAD04')
        obj.setAttribute('style','transform: translate(-100px,0); opacity:0%; transition:1s')
    
        var obj = document.getElementById('PAD05')
        obj.setAttribute('style','transform: translate(-100px,0); opacity:0%; transition:2s')
        
        var obj = document.getElementById('PAD06')
        obj.setAttribute('style','transform: translate(-100px,0); opacity:0%; transition:2.5s')
    
        var obj = document.getElementById('PAD07')
        obj.setAttribute('style','transform: translate(-100px,0); opacity:0%; transition:3s')
    
        var obj = document.getElementById('PAD08')
        obj.setAttribute('style','opacity:100%;transition:2s')
    
        var obj = document.getElementById('PAD09')
        obj.setAttribute('style','opacity:100%; transition:3s')
        
        var obj = document.getElementById('PAD10')
        obj.setAttribute('style','opacity:100%; transition:3.5s')
    
        var obj = document.getElementById('PAD11')
        obj.setAttribute('style','opacity:100%; transition:4s')
    
    }

function Clickk3 (){
    var obj = document.getElementById('next-btn1')
    obj.onclick = P3;
}
function P3() {
          
        var obj = document.getElementById('it2')
        obj.setAttribute('style','opacity:0%; transition: 2s')

        var obj = document.getElementById('it1')
        obj.setAttribute('style','opacity:100%; padding-left:65px; transition:2s')
 
        var obj = document.getElementById('PAD04')
        obj.setAttribute('style','transform: translate(-100px,0); opacity:0%; transition:1s')

        var obj = document.getElementById('PAD05')
        obj.setAttribute('style','transform: translate(-100px,0); opacity:0%; transition:2s')
        
        var obj = document.getElementById('PAD06')
        obj.setAttribute('style','transform: translate(-100px,0); opacity:0%; transition:2.5s')

        var obj = document.getElementById('PAD07')
        obj.setAttribute('style','transform: translate(-100px,0); opacity:0%; transition:3s')

        var obj = document.getElementById('PAD00')
        obj.setAttribute('style','transform: translate(0px,0); opacity:100%; transition:1s')

        var obj = document.getElementById('PAD01')
        obj.setAttribute('style','opacity:100%; transition:2s')
        
        var obj = document.getElementById('PAD02')
        obj.setAttribute('style','opacity:100%; transition:2.5s')

        var obj = document.getElementById('PAD03')
        obj.setAttribute('style',' opacity:100%; transition:3s')
         }


   

    

