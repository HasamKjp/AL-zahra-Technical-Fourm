      
      var i=0;
      var imagees =[];
      var time =1700;
      imagees [0]='pictur/docoad.jpg';
      imagees [1]='pictur/downl).png';
      imagees [2]='pictur/ima).png';
      imagees [3]='pictur/images).jpg';
       

      function changeImg (){
      document.slide.src=imagees[i];
      if (i<imagees.length-1){
          i++;
          
      }
      else {
          i=0;
      }
      setTimeout("changeImg()",time);
      }
      window.onload=changeImg;
       
   