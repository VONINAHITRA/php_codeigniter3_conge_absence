
var decalage = 0;
var nbBout;	  
var timer;

function menu(nb)
{
 var angle = 360 / nb;		
 nbBout = nb;
 var posX;
 var posY;
 var rayon = 20;
 var centreX = document.getElementById("centre").offsetLeft;
 var centreY = document.getElementById("centre").offsetTop;
 var lItem = 7;
 var i = 1;
 var item;
 var b;
 
for(b = 0; b < 360; b += angle)
 {		  
  posX = centreX + 25 + rayon * Math.cos(b * Math.PI / 180);
  posY = centreY + 25 + rayon * Math.sin(b * Math.PI / 180); 
  
  item = document.getElementById("item" + i);
  item.className = "item";	
  item.style.top = (posY - lItem / 2) + "px"; 
  item.style.left = (posX - lItem / 2) + "px";
  i++;
 }
}

function anim()
{		  
 decalage++;
 var angle = 360 / nbBout;		
 var posX;
 var posY;
 var rayon = 210;
 var centreX = document.getElementById("centre").offsetLeft;
 var centreY = document.getElementById("centre").offsetTop;
 var lCentre = 80;
 var lItem = 8;
 var i = 1;
 var item
 var b;

 for(b = 0; b < 360; b = b + angle)
 {		  
  posX = centreX + 25 + rayon * Math.cos((b + decalage) * Math.PI / 180);
  posY = centreY + 25 + rayon * Math.sin((b + decalage) * Math.PI / 180); 
  
  item = document.getElementById("item" + i);
  item.style.top = (posY - lItem / 2) + "px"; 
  item.style.left = (posX - lItem / 2) + "px";
  i++;
 }	
}

timer = setInterval("anim()",120);

function stopanim()
{
 clearInterval(timer);		   
}

function replayanim()
{
 timer = setInterval("anim()",120);
}
