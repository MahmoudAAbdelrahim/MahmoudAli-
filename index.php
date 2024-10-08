<?php   $do = isset($_GET['do']) ? $_GET['do'] : 'Home';
?>

<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Micro+5&family=Protest+Revolution&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.plyr.io/3.6.8/plyr.css" />
    <link rel="stylesheet" href="css/csss.css">
    <link rel="icon" href="folderB/logo.png"/>

    <title>Mahmoud.A.AbdElrahim</title>

  
</head>
<body>
  
  <nav class="navbar navbar-Cyan bg-Cyan justify-content-between" id="nav">       
    <a class="navbar-brand" href="?do=Home" style="     margin: 30px 30px;">    
                 <img src="folderB/logoA.png" width="50" height="50"  class=" d-inline-block align-top rounded-circle" alt="...">
      <span class="loader1"></span>
      </a>  
      <div class="hid">  
        <div class="navbar-brand navbar">
      <div class="dropdown">
            <button class="dropbtn text"> <i class="fas fa-bars"></i></button>
            <div id="input1" class="hidde  dropdown-content">
              <div class="input1">
                <button class="value"> 
                  <a id="li" class="container navbar-brand text"  href="?do=Home">Home</a>
                </button>
                <button class="value"> 
                  <a id="li1" class="container navbar-brand text"href="?do=Adout">Adout</a>
                </button>
                <button class="value">
                  <a id="li2" class="container navbar-brand text"  href="?do=contact">contact</a>
           </button>
              </div></div>
      </div></div></div>
      <div class="hidden">
        <div class="loging_signup">
          <a href="?do=Home"> Home    </a>
          <a href="?do=Adout"> Adout   </a>
          <a href="?do=contact"> contact </a>

      </div></div>
          </nav>

      <?php
          if ($do == 'Home') { ?>

    
      <div class="card mb-3 text" id="ho"  style="margin:200px 0;background:#222831;">
        <img class="card-img-top " src="folderB/ma1.jpg" alt="Card image cap">
        <div class="card-body" style="text-align: center;">
          <h5 class="card-title" >Mahmoud Ali Mahmoud</h5>
          <p class="card-text">
            Full Stack website developer
            <br>
Use of programming languages<br>
HTML__CSS__Bootstrep__JS__PHP
          </p>
        <small class="text-muted"> <p class="card-text text">M_A_G</p></small>
        </div>
      </div>
    


      <?php     }elseif($do == 'Adout') {  ?>
        <div class="text mah" style="margin: 250px;">
                          <a id="li" class="container navbar-brand text"  href="?do=Adout1">Home</a>
                          <a id="li" class="container navbar-brand text"  href="?do=Adout2">Home</a>
                          <a id="li" class="container navbar-brand text"  href="?do=Adout3">Home</a>
                          <a id="li" class="container navbar-brand text"  href="?do=Adout4">Home</a>
                          <a id="li" class="container navbar-brand text"  href="?do=Adout5">Home</a>
        </div>
      

  
<?php     }elseif($do == 'Adout1') {?>


<h1 class="main-title text" style="margin: 150px 0px;">video</h1>

    
<div class="containerr">
    <video controls poster="ma3.jpg" id="player">
        <!-- Video files -->
        <source src="folderB/video.mp4" type="video/mp4" size="360">
        <source src="folderB/video.mp4" type="video/mp4" size="480">
        <source src="folderB/video.mp4" type="video/mp4" size="576">
        <source src="folderB/video.mp4"type="video/mp4" size="720">
    
        <!-- Fallback for browsers that don't support the <video> element -->
        <a href="folderB/video.mp4" download>Download</a>
    </video>

    <div class="actions">
        <p type="button" class="btn js-play"></p>
        <p type="button" class="btn js-pause"></p>
        <p type="button" class="btn js-stop"></p>
        <p type="button" class="btn js-rewind"></p>
        <p type="button" class="btn js-forward"></p>
    </div>
    
</div>
<?php     }elseif($do == 'Adout2') {?>
  <?php     }elseif($do == 'Adout3') {?>


<h1 class="main-title text" style="margin: 150px 0px;">video</h1>

    
<div class="containerr">
    <video controls poster="ma3.jpg" id="player">
        <!-- Video files -->
        <source src="folderB/video.mp4" type="video/mp4" size="360">
        <source src="folderB/video.mp4" type="video/mp4" size="480">
        <source src="folderB/video.mp4" type="video/mp4" size="576">
        <source src="folderB/video.mp4"type="video/mp4" size="720">
    
        <!-- Fallback for browsers that don't support the <video> element -->
        <a href="folderB/video.mp4" download>Download</a>
    </video>

    <div class="actions">
        <p type="button" class="btn js-play"></p>
        <p type="button" class="btn js-pause"></p>
        <p type="button" class="btn js-stop"></p>
        <p type="button" class="btn js-rewind"></p>
        <p type="button" class="btn js-forward"></p>
    </div>
    
</div>
<?php     }elseif($do == 'Adout4') {?>


<h1 class="main-title text" style="margin: 150px 0px;">video</h1>

    
<div class="containerr">
    <video controls poster="ma3.jpg" id="player">
        <!-- Video files -->
        <source src="folderB/video.mp4" type="video/mp4" size="360">
        <source src="folderB/video.mp4" type="video/mp4" size="480">
        <source src="folderB/video.mp4" type="video/mp4" size="576">
        <source src="folderB/video.mp4"type="video/mp4" size="720">
    
        <!-- Fallback for browsers that don't support the <video> element -->
        <a href="folderB/video.mp4" download>Download</a>
    </video>

    <div class="actions">
        <p type="button" class="btn js-play"></p>
        <p type="button" class="btn js-pause"></p>
        <p type="button" class="btn js-stop"></p>
        <p type="button" class="btn js-rewind"></p>
        <p type="button" class="btn js-forward"></p>
    </div>
    
</div>

<?php     }elseif($do == 'Adout5') {?>


<h1 class="main-title text" style="margin: 150px 0px;">video</h1>

    
<div class="containerr">
    <video controls poster="ma3.jpg" id="player">
        <!-- Video files -->
        <source src="folderB/video.mp4" type="video/mp4" size="360">
        <source src="folderB/video.mp4" type="video/mp4" size="480">
        <source src="folderB/video.mp4" type="video/mp4" size="576">
        <source src="folderB/video.mp4"type="video/mp4" size="720">
    
        <!-- Fallback for browsers that don't support the <video> element -->
        <a href="folderB/video.mp4" download>Download</a>
    </video>

    <div class="actions">
        <p type="button" class="btn js-play"></p>
        <p type="button" class="btn js-pause"></p>
        <p type="button" class="btn js-stop"></p>
        <p type="button" class="btn js-rewind"></p>
        <p type="button" class="btn js-forward"></p>
    </div>
    
</div>

<h1 class="main-title text" style="margin: 150px 0px;">video</h1>

    
<div class="containerr">
    <video controls poster="ma3.jpg" id="player">
        <!-- Video files -->
        <source src="folderB/video.mp4" type="video/mp4" size="360">
        <source src="folderB/video.mp4" type="video/mp4" size="480">
        <source src="folderB/video.mp4" type="video/mp4" size="576">
        <source src="folderB/video.mp4"type="video/mp4" size="720">
    
        <!-- Fallback for browsers that don't support the <video> element -->
        <a href="folderB/video.mp4" download>Download</a>
    </video>

    <div class="actions">
        <p type="button" class="btn js-play"></p>
        <p type="button" class="btn js-pause"></p>
        <p type="button" class="btn js-stop"></p>
        <p type="button" class="btn js-rewind"></p>
        <p type="button" class="btn js-forward"></p>
    </div>
    
</div>

<?php     }elseif ($do == 'contact') {
?>
  
<div class="card mb-3 container" style="max-width: 600px; margin-top: 150px; background:#222831;">
    <div class="row g-0" style="    display: flex;
    flex-wrap: wrap;
    flex-direction: row;
    align-content: center;
    justify-content: space-between;
    align-items: center;">
      <div class="col-md-5">
        <img src="folderB/ma2.jpg" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-7" id="co">
        <div class="card-body">  
         <div >
<div>
<div class="mah">

        <br>
<p>By Developed_._MAHMOUD ALI</p>

        <a href="https://www.facebook.com/mahmoud.alimahmoud.7106?mibextid=2JQ9oc"> <i  style="color: blue;"   class="fab fa-facebook"></i> </a>
        <a href="https://www.instagram.com/mahmoud.alimahmoud.7106/?utm_source=qr&igshid=MzNlNGNkZWQ4Mg%3D%3D"> <i  style="color: rgb(219, 12, 98);"  class="fab fa-instagram"></i> </a>
        <a href="https://t.me/Mahmoud_A_AbdELrahim"> <i  style="color: rgb(59, 59, 230);"  class="fab fa-telegram"></i> </a>
        <a href="https://api.whatsapp.com/send?phone=201558236546"> <i  style="color: rgb(0, 107, 0);font-size:26px; "  class="fab fa-whatsapp"></i> </a>
      <p >تم تطوير هذا الموقع بواسطة <span>محمود علي</span> </p>
    </div>
  
    </div>



        </div>
      </div>
    </div>
  </div>

  <div class="plyr__poster" style="background-image: url(&quot;https://vz-c5067693-262.b-cdn.net/21f26023-aeb3-4414-8150-358b45ff2e75/thumbnail.jpg&quot;);"></div>
  <div class="mah">
    <p >All Right Reserved &copy; 2024...</p>
   
   
   </div>
   
        <?php }?>
        <script src="https://cdn.plyr.io/3.5.12/plyr.min.js"></script>
    <script src="https://cdn.plyr.io/3.6.8/plyr.polyfilled.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => { 
            // This is the bare minimum JavaScript. You can opt to pass no arguments to setup.
            const player = new Plyr('.player');
            
            // Expose
            window.player = player;
            
            // Bind event listener
            function on(selector, type, callback) {
                document.querySelector(selector).addEventListener(type, callback, false);
            }
            
            // Play
            on('.js-play', 'click', () => { 
                player.play();
            });
            
            // Pause
            on('.js-pause', 'click', () => { 
                player.pause();
            });
            
            // Stop
            on('.js-stop', 'click', () => { 
                player.stop();
            });
            
            // Rewind
            on('.js-rewind', 'click', () => { 
                player.rewind();
            });
            
            // Forward
            on('.js-forward', 'click', () => { 
                player.forward();
            });
        });
    </script>
    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
      <script>
let list = document.getElementById('list')

let align =document.getElementById('align');
        let times = document.getElementById('times');
        align?.addEventListener('click' ,function(){
            list.classList.remove("hidde")});
            align?.addEventListener('click' ,function(){
                times.classList.remove("hidde")});
        align?.addEventListener('click',function(){
            align.classList.add("hidde")});

            times?.addEventListener('click' ,function(){
            list.classList.add("hidde")});

            
            times?.addEventListener('click' ,function(){
                align.classList.remove("hidde")});
                times?.addEventListener('click',function(){
                    times.classList.add("hidde")});

      </script>
      <script src="https://cdn.plyr.io/3.6.8/plyr.polyfilled.js"></script>
<script>
    const player = new Plyr('#player', {
        // إضافة الخيارات التي ترغب في تكوينها هنا
        controls: ['play-large', 'play', 'progress', 'current-time', 'mute', 'volume', 'settings', 'fullscreen'],
        quality: {
            default: 144, // جودة الفيديو الافتراضية
            options: [1080, 720, 480, 360, 144] // الخيارات المتاحة للجودة
        },
        speed: {
            selected: 1, // السرعة الافتراضية
            options: [0.5, 0.75, 1, 1.25, 1.5, 1.75, 2] // الخيارات المتاحة للسرعة
        }
    });
</script>
</body>
</html>
