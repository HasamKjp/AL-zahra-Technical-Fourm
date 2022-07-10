      
      var i=0;
      var imagees =[];
      var time =1700;
      imagees [0]='pictur/download9.png';
      imagees [1]='pictur/imagesrr.png';
      imagees [2]='pictur/images1.jpg';
      imagees [3]='pictur/images33.jpg';
       

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
       
   