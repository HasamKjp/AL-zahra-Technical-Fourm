      
      var i=0;
      var imagees =[];
      var time =1700;
      imagees [0]='pictur/download).png';
      imagees [1]='pictur/javaa.jpg';
      imagees [2]='pictur/im).jpg';
      imagees [3]='pictur/dow).png';
       

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
       
   