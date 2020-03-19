


function toggleOn(){

   // alert("hi!");

  // document.body.style.backgroundColor= "dark";
  // document.body.style.backgroundImage = "none";
  // document.body.style.fontSize = "24px";
  // document.body.style.lineHeight = "100px" ;
   document.body.classList.toggle("togglemode");

  var arrId = [
                 ["header","notoggleHeader"],
                 ["navbar" , "notoggleNavbar"],
                 ["footer","notoggleFooter"]
              ];

      for (var i=0;i<arrId.length;i++){

          var toggleElement = document.getElementById(arrId[i][0]);
          var toggleStyle = arrId[i][1];
          // alert(arrId[i][1]);
          // alert(toggleElement);
          // alert(toggleStyle);

          // changeContrast(toggleElement,toggleStyle);

           toggleElement.classList.toggle(toggleStyle);

      }   

    
        function changeContrast(element,style){
         // alert(element);

          if (element.classList) { 
          element.classList.toggle(style);
          } else {
            var classes = element.className.split(" ");
            var i = classes.indexOf(style);

            if (i >= 0) 
              classes.splice(i, 1);
            else {classes.push(style);
            }
               element.className = classes.join(" ");
        
           }

          
       }

}



      document.onkeyup = function(e) {

        var sKey = event.keyCode;
          if (e.ctrlKey && sKey == 66) {

            // alert("in!");

            toggleOn();

          }
      };