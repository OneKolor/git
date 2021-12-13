function OpenWide(){
	var obj = document.getElementById('Rank')
	obj.onclick = X1;
    obj.ondblclick = X2;
	
   }
  
   function X1(){
	   var obj = document.getElementById('Rank')
	   obj.setAttribute('style','width:540px; height:460px;transition:1s')
   
	   var obj = document.getElementById('Rank1')
	   obj.setAttribute('style','width:30px; height:450px; transition:1s; ')
   
	   var obj = document.getElementById('Rank2')
	   obj.setAttribute('style','height:30px;  transition:1s;')

	   var obj = document.getElementById('cup')
	   obj.setAttribute('style','width:140px; height:120px; transition:1s;transition:3.5s; animation-delay:1s')
   
   }
   function X2(){
	var obj = document.getElementById('Rank')
	obj.setAttribute('style','width:190px; height:190px;transition:1s')

	var obj = document.getElementById('Rank1')
	obj.setAttribute('style','width:390px; height:190px; transition:1s; ')

	var obj = document.getElementById('Rank2')
	obj.setAttribute('style','width:520px; height:290px;  transition:1s;')

	var obj = document.getElementById('cup')
	 obj.setAttribute('style','width:120px; height:100px; transition:3.5s; animation-delay:1s')

}





function OpenWide1(){
	var obj = document.getElementById('Rank1')
	obj.onclick = X3;
    obj.ondblclick = X4;
   }
   function X3(){
	   var obj = document.getElementById('Rank')
	   obj.setAttribute('style','width:30px; height:460px;transition:1s')
   
	   var obj = document.getElementById('Rank1')
	   obj.setAttribute('style','width:550px; height:460px; transition:1s; ')
   
	   var obj = document.getElementById('Rank2')
	   obj.setAttribute('style','height:30px;  transition:1s;')

	   var obj = document.getElementById('cup')
	   obj.setAttribute('style','opacity:0% ;transition:0.1s;')
   
   }
   function X4(){
	var obj = document.getElementById('Rank')
	obj.setAttribute('style','width:190px; height:190px;transition:1s')

	var obj = document.getElementById('Rank1')
	obj.setAttribute('style','width:390px; height:190px; transition:1s; ')

	var obj = document.getElementById('Rank2')
	obj.setAttribute('style','width:520px; height:290px;  transition:1s;')

	var obj = document.getElementById('cup')
	obj.setAttribute('style','opacity:100% ;transition:3.5s; animation-delay:1s')

}


function OpenWide2(){
	var obj = document.getElementById('Rank2')
	obj.onclick = X5;
    obj.ondblclick = X6;
   }
   function X5(){
	   var obj = document.getElementById('Rank')
	   obj.setAttribute('style','height:30px;transition:1s')
   
	   var obj = document.getElementById('Rank1')
	   obj.setAttribute('style','height:30px; transition:1s; ')
   
	   var obj = document.getElementById('Rank2')
	   obj.setAttribute('style','height:470px; width:540px; transition:1s;')

	   var obj = document.getElementById('cup')
	   obj.setAttribute('style','opacity:0% ;transition:0.1s;')
   
   }
   function X6(){
	var obj = document.getElementById('Rank')
	obj.setAttribute('style','width:190px; height:190px;transition:1s')

	var obj = document.getElementById('Rank1')
	obj.setAttribute('style','width:390px; height:190px; transition:1s; ')

	var obj = document.getElementById('Rank2')
	obj.setAttribute('style','width:520px; height:290px;  transition:1s;')

	var obj = document.getElementById('cup')
	obj.setAttribute('style','opacity:100% ;transition:3.5s; animation-delay:1s')

}