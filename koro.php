<!DOCTYPE html>
<html>
<head>
    <title>BUSD Lottery: Daily Lucky Draws on the Binance Smart Chain (BSC)</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="hs.css">
<!--
<link rel="stylesheet" href="bs/bstrap/css/bootstrap.min.css">
<script src="bs/jquery-1.12.1.js"></script>
<script src="bs/bstrap/js/bootstrap.min.js"></script>-->

<script src="jquery.js"></script>

<link rel="shortcut icon" type="image/x-icon" href="img/126.gif">

<!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
<style>
body,h1,h2,h3,h4,h5,h6
{
    font-family: "Raleway", sans-serif;
}

.w3-bar .w3-button 
{
  padding-left: 16px;
  padding-right: 16px;
}
    /*
    html{
        /*scroll-behavior: smooth;
    }*/

</style>

</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-card" id="myNavbar">

      <a href="javascript:void(0)" class="w3-bar-item w3-button w3-left w3-hide-large w3-hide-medium" onclick="w3_open()">
          <span style="font-size: 20px"><b>&#9776;</b></span>
      </a>

    <a href="">
        <div class="w3-bar-item w3-button w3-wide" style="font-size: 20px;"><b>BUSD Lottery</b></div>
    </a>

    <!-- Right-sided navbar links -->
    <?php $menu1 = ["How to Play Lottery", "Daily Draws", "Weekly Draws", "Contact"];


    ?>
    <div class="w3-right w3-hide-small">
      <a href="#howToPlay" class="w3-bar-item w3-button"><?php echo $menu1[0]; ?></a>
      <a href="#dailyDraw" class="w3-bar-item w3-button"><i class="fa fa-user"></i><?php echo $menu1[1];?></a>
      <a href="#weeklyDraw" class="w3-bar-item w3-button"><i class="fa fa-th"></i><?php echo $menu1[2];?></a>
      <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-usd"></i><?php echo $menu1[3];?></a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->


  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->

<nav class="w3-sidebar w3-bar-block w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none; background-color: #dc9a65;" id="mySidebar">
  <div style="margin-top: 20%"></div>
  <a href="#howToPlay" onclick="w3_close()" class="w3-bar-item w3-button w3-padding-24"><b><?php echo $menu1[0]; ?></b></a>
  <a href="#dailyDraw" onclick="w3_close()" class="w3-bar-item w3-button w3-padding-24"><b><?php echo $menu1[1];?></b></a>
  <a href="#weeklyDraw" onclick="w3_close()" class="w3-bar-item w3-button w3-padding-24"><b><?php echo $menu1[2]; ?></b></a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding-24"><b><?php echo $menu1[3]; ?></b></a>
</nav>
<div class="w3-bottom" style="margin-bottom: 20px;">

    <button id="toTopBtn" onclick="goTop()" style="margin-right: 20px; display: none;" class="w3-button w3-right w3-large w3-circle w3-teal"><a class="arrow up"></a></button>
    <script>
        $(window).scroll(function(){
            if($(this).scrollTop() >= 50){
                $("#toTopBtn").fadeIn(200)
            }else{
                $("#toTopBtn").fadeOut(200)
            }

        })
        function goTop(){
            $("body, html").animate({
                scrollTop: 0
            }, 500);
        }
    </script>
</div>



<div class="w3-row w3-container" style="margin-top: 55px; padding-bottom: 5px" id="investID">
    <div class="w3-center">
        <div>
            <a href=""><img id="circleImg" src="busd-lottery.jpg" alt="busd lottery logo"></a><br/>
            <!-- <button style="margin-left: 0px; margin-top: 5px;" 
                    class='w3-round-xlarge w3-button w3-hover-amber w3-teal'>Connected</button> -->
        </div>
    </div>

   <!-- <div class="w3-row-padding">

    <div class="w3-third">
        <div class="w3-card-4 w3-round-xlarge w3-small w3-center" style="margin-bottom: 10px">
        <h2 class="w3-teal w3-wide">Bronze Plan</h2>
        <p>10% ROI after 3 days</p>
            <div class="" style="margin-left: 60px; margin-right: 60px; margin-bottom: 10px"><input class="w3-input w3-card w3-center w3-text-teal w3-container w3-large w3-round-xxlarge" placeholder="...invest" /></div>
                <button class="w3-button w3-teal w3-round-xxlarge" style="margin-bottom: 5px" id="invest1">Invest</button>
            </div>
    </div>

    <div class="w3-third">
           <div class="w3-card-4 w3-round-xlarge w3-small w3-center" style="margin-bottom: 10px">
               <h2 class="w3-indigo w3-wide">Silver Plan</h2>
               <p>10% ROI after 3 days</p>
               <div class="" style="margin-left: 60px; margin-right: 60px; margin-bottom: 10px"><input class="w3-input w3-card w3-center w3-text-indigo w3-container w3-large w3-round-xxlarge" placeholder="...invest" /></div>
               <button class="w3-button w3-indigo w3-round-xxlarge" style="margin-bottom: 5px" id="invest2">Invest</button>
           </div>
    </div>

    <div class="w3-third">
           <div class="w3-card-4 w3-round-xlarge w3-small w3-center" style="margin-bottom: 10px">
               <h2 class="w3-purple w3-wide">Gold Plan</h2>
               <p>10% ROI after 3 days</p>
               <div class="" style="margin-left: 60px; margin-right: 60px; margin-bottom: 10px"><input class="w3-input w3-card w3-center w3-text-purple w3-container w3-large w3-round-xxlarge" placeholder="...invest" /></div>
               <button class="w3-button w3-purple w3-round-xxlarge" style="margin-bottom: 5px" id="invest3">Invest</button>
           </div>
    </div>
   </div> -->
</div>

<script>
        const image = document.getElementById("circleImg");
        let images = ['one.jpg', 'two.jpg', 'three.jpg', 'four.jpg']
        x = 0;
        function switcher(){
                y = x % images.length;
                image.src = 'rounded/'.concat(images[y]);
                x++;
        }
        setInterval(switcher, 2000);
</script>

<div class="w3-row w3-container" style="padding-top: 5px; padding-bottom: 5px; margin-top: 10px;" id="top24">
   <div class="w3-row-padding">
    <div class="w3-third">
        <div class="w3-card-4 w3-round-xlarge w3-small w3-center" style="margin-bottom: 10px;">

        <img id="circleImg" src="images/lucky16.jpg" alt="busd lottery logo">

        <select style="width: 12%;" class="w3-select w3-left w3-round-xlarge" name="option">
                <!-- <option value="" disabled selected>Choose your option</option> -->
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
        </select>
        
            <div class="" style="margin-left: 60px; margin-right: 60px; margin-bottom: 10px;">
            
                <input class="w3-input w3-card w3-center w3-text-teal w3-container w3-large w3-round-xxlarge" placeholder="...invest" /></div>
                <button class="w3-button w3-teal w3-round-xxlarge" style="margin-bottom: 5px" id="invest1">Invest</button>
            </div>
    </div>
    <div class="w3-third">
        <div class="w3-card-4 w3-padding-large w3-round-xlarge w3-small w3-center" style="margin-bottom: 10px;">
        <!-- onmouseover -->
          <a href="javascript:void(0);"><img onclick="randy()" id="circleImg" src="images/giphy2.gif" alt="busd lottery logo"></a>
            <div class="" style="margin-left: 60px; margin-right: 60px; margin-bottom: 10px; margin-top: 5px; ">
                <div class="" style="display: inline; margin-top: 10px;">
                    <input type="text" class="w3-round-large w3-medium w3-center" style="width: 15%; color:#dc9a65;" id="first_" />
                    <input type="text" class=" w3-round-large w3-medium w3-center" style="width: 15%; color:#dc9a65;" id="second_" />
                    <select onchange="selectOption()" id="_select1" style="width: 25%; margin-left: 20px" 
                                    class="w3-medium w3-select w3-round-large w3-medium w3-center" name="option">
                        <!-- <option value="" disabled selected>Choose your option</option> 
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>-->
                    </select>
                </div>
            </div>
                <button class="w3-button w3-teal w3-round-xxlarge" style="margin-bottom: 0px" id="playID">Play Draw</button>
            </div>
            <script>
                gen50()

                function selectOption(){
                    let selectID = document.getElementById("_select1")
                    let selectedVal = selectID.options[selectID.selectedIndex].text
                    console.log(selectedVal)
                }

                function gen50(){
                    let parent = document.body
                    let selectList = document.getElementById('_select1')// document.createElement("select")
                    //selectList.id = "_select1"
                    //parent.appendChild(selectList)

                    for(let i=1; i<=200; i++){
                        let option = document.createElement('option')
                        option.value = "val_"+i
                        option.text = i
                        selectList.appendChild(option)
                    }
                }
                function randy(){
                    setTimeout(randy2, 500);
                }
                
                function randy2(){
                    //num1 = Math.floor(Math.random() * 1000) //returns random integer from 0 to 999
                    //let num2 = Math.floor(Math.random() * 1000)

                    for(x=0; x<1000; x++){
                            num1 = Math.floor(Math.random() * 10) //returns random integer from 0 to 9
                            num2 = Math.floor(Math.random() * 10)
                    }
                    
                    let num1String = num1.toString()
                    let num2String = num2.toString()
                    a(num1String+' and '+num2String)
                    $("#first_").val(num1String);
                    $("#second_").val(num2String);
                }
                const a = (v) => {
                    console.log(v)
                }
            </script>
    </div>
    <div class="w3-third">
        <div class="w3-card-4 w3-round-xlarge w3-small w3-center" style="margin-bottom: 10px;">
         <img id="circleImg" src="images/giphy2.gif" alt="busd lottery logo">
            <div class="" style="margin-left: 60px; margin-right: 60px; margin-bottom: 10px;">
                <input class="w3-input w3-card w3-center w3-text-teal w3-container w3-large w3-round-xxlarge" placeholder="...invest" /></div>
                <button class="w3-button w3-teal w3-round-xxlarge" style="margin-bottom: 5px" id="invest1">Invest</button>
            </div>
    </div>
   </div>
</div>

        <script>
            $("#invest1").click(function(){
                alert('clicked invest1')
            })
            $("#invest2").click(function(){
                alert('clicked invest2')
            })
            $("#invest3").click(function(){
                alert('clicked invest3')
            })
        </script>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");
var jj = 0;

function w3_open() {
    if (mySidebar.style.display === 'block') {//already showing, so when onopen is clicked, hide the box
        mySidebar.style.display = 'none';
    }
    else {//not showing, show now
        mySidebar.style.display = 'block';
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}

//on click outside of the drawer bar, make it disappear
$(document).mouseup(event => {
    //alert(event.target)
    if(!$("#mySidebar").is(event.target) && $("#mySidebar").has(event.target).length === 0)
    {
        mySidebar.style.display = 'none'
    }
})

</script>

<div id="rooty" class="w3-card-4 w3-container w3-margin"></div>

</body>
</html>