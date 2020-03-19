
//siteVisitors.js

// loadTableVisitor();

// function loadTableVisitor() {

  //alert("hi");


  var siteVisitors  = [
            {
                "month": "June",
                "visitors": '2001'
            },
            {
                "month": "July",
                "visitors": "2300"
            },
             {
                "month": "August",
                "visitors": '2428'
            },
            {
                "month": "September",
                "visitors": "2286"
            },

           {
                "month": "October",
                "visitors": "2784"
            },
            {
                "months": "November",
                "visitors": "3200"
            }

  ];

  var visitorHolder = document.getElementById("visitorHolder");

  // var tbVisitors = document.getElementById("tbVisitors");

   var newTable = document.createElement("table");
   var newCaption =  document.createElement("caption");
   newCaption.innerHTML = "visitors statics";
   newTable.appendChild(newCaption);
   newTable.setAttribute("border",1);
   var newRow = document.createElement("tr");
   var newTitle1 =  document.createElement("td");
   newTitle1.innerHTML="month";
   newTitle1.setAttribute("align","left");
   newRow.appendChild(newTitle1);
   var newTitle2 =  document.createElement("td");
   newTitle2.innerHTML="visitors";
   newTitle2.setAttribute("align","right");
   newRow.appendChild(newTitle2);
   newTable.appendChild(newRow);








  for (var i = 0; i < siteVisitors.length; i++) {

     var newTr = document.createElement("tr");
     var newTd =  document.createElement("td");
     //alert(newTr);
     var tdText = document.createTextNode(siteVisitors[i].month);
     newTd.appendChild(tdText);
     newTd.setAttribute("align","left");
     newTr.appendChild(newTd);
     var newTd2 =  document.createElement("td");
     //var tdText2 = document.createTextNode(siteVisitors[i].visitors);
     newTd2.innerHTML=siteVisitors[i].visitors;
     newTd2.setAttribute("align","right");
     newTr.appendChild(newTd2);
     newTable.appendChild(newTr);

  }

     visitorHolder.appendChild(newTable);

// }




