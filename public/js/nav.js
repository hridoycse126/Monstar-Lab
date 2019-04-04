      function openNav() {
            document.getElementById("myNav").style.width = "300px";
            document.getElementById("main").style.marginLeft = "0";
            document.body.style.backgroundImage = "linear-gradient(to right, #0f2027, #203a43, #2c5364)";
        }
        function closeNav() {
            document.getElementById("myNav").style.width = "0";
            document.getElementById("main").style.marginLeft= "0";
            document.body.style.backgroundImage = "linear-gradient(to right, #67b26f, #4ca2cd)";
        }
		
		
  $(".overlay-content ul ul li").click(function(){
    $(".overlay-content ul li ul").toggle();
})
