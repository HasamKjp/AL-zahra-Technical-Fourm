      
      var i=0;
      var imagees =[];
      var time =1700;
      imagees [0]='pictur/eef.png';
      imagees [1]='pictur/dssd.jfif';
      imagees [2]='pictur/dsdsfs.png';
      imagees [3]='pictur/dfgg.jfif';
       

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
       
   