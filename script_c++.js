      
      var i=0;
      var imagees =[];
      var time =1700;
      imagees [0]='pictur/hbu.png';
      imagees [1]='pictur/nxjnik.jpg';
      imagees [2]='pictur/huho.jpg';
      imagees [3]='pictur/nxjnik.jpg';
       

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
       
   