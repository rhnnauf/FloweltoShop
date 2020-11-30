function updateAmount(action) {
   var num = parseInt(document.getElementById("number").innerHTML, 10);
   switch(action) {
      case 'minus':
         num--;
         break;
      case 'plus':
         num++;
         break;
   }
   document.getElementById("number").innerHTML = num;
}
