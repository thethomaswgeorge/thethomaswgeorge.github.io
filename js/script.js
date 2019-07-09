 document.querySelectorAll('a[href^="#"]').forEach(anchor => {
     anchor.addEventListener('click', function(e) {
         e.preventDefault();

         document.querySelector(this.getAttribute('href')).scrollIntoView({
             behavior: 'smooth'
         });
     });
 });

 function sayHello() {
     console.log("You sneaky developer you ;)");
     console.log("I don't have much here, but if the screen it too bright, just type \"darkMode()\" and hit enter!");
 }

 function displayCodeOfVets() {
     if (confirm("While you're looking through my site, thousands of veterans are homeless on the streets.  Would you like to help them find a place they can call home?")) {

         window.location = "http://www.codeofvets.com/";
     }
 }

 function hideCoffee() {
     $("#paypal-coffee").hide();
 }

 function displayPaypalCoffee() {
     $("#paypal-coffee").show();
 }
 darkModes = 0;

 function darkMode() {
     if (darkModes) {

         document.getElementById("container").style.backgroundColor = '#fff';
         document.getElementById("container").style.color = '#333';
     } else {
         document.getElementById("container").style.backgroundColor = '#333';
         document.getElementById("container").style.color = '#fff';
     }
     darkModes = !darkModes;
 }
 sayHello();
 $(".project-box").on("click", function() {
     //$("#"+this.id+'-box').removeClass("hidden");
     //$("#hidden-info").removeClass("hidden");
     //console.log(this.id);
     displayProject(this.id);
     switch (this.id) {
         case "ergo":
             changeTheme('#f1c40f', '#fff');
             break;
         case "glory":
             changeTheme('#fff', '#3ac1dd');
             break;
         case "moolah":
             changeTheme('#fff', '#00b16a');
             break;
         case "cruise":
             changeTheme('#0984e3', '#fff');
             break;
         case "topnotch":
             changeTheme('#22313f', '#51af61');
             break;
         case "ttl":
             changeTheme('#213140', '#fff');
             break;
         case "reach":
             changeTheme('linear-gradient(to right, #4a118f , #0897cc)', '#fff');
             break;
         case "merge":
             changeTheme('#fff', '#29abe2');
             break;
         case "rotg":
             changeTheme('#600edf', '#fff');
             break;
         case "mla":
             changeTheme('#fff', '#cf000f');
             break;
         case "kreadiv":
             changeTheme('#0c2461', '#fff');
             break;
         case "bibliotaf":
             changeTheme('#fff', '#f39c12');
             break;
         case "validate":
             changeTheme('#2ecc71', '#fff');
             break;
         case "urge":
             changeTheme('#fff', '#27ae60');
             break;

     }
 });
 $("#hidden-info").on("click", function() {
     //$("#"+this.id+'-box').addClass("hidden");
     //$("#hidden-info").addClass("hidden");
 });
 $("#bars").on("click", function() {
     $("#mobile-ul").removeClass("hidden");
 });
 $(".hide-mobile-menu").on("click", function() {
     $("#mobile-ul").addClass("hidden");
 });
 $("#hide-mobile-menu").on("click", function() {
     $("#mobile-ul").addClass("hidden");
 });

 function displayProject(divToDisplay) {
     $(".project-info").addClass("hidden");
     $("#" + divToDisplay + "-div").removeClass("hidden");
 }

 function changeTheme(mainColor, linkColor) {
     document.getElementById("container").style.background = mainColor;
     document.getElementById("container").style.color = linkColor;

 }