<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="../assets/img/flags/ID.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Bii | Profile</title>
    <meta author='Bii'>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Chivo" rel="stylesheet">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
    <link href="../assets/css/demo.css" rel="stylesheet" />
</head>
<style type="text/css">
    .photo-container{
        width: 200px!important;
        height: 200px!important;
        animation: title ease 1s;
        animation-iteration-count: 1;
        transform-origin: 50% 50%;
        animation-fill-mode:forwards; /*when the spec is finished*/
        -webkit-animation: title ease 1s;
        -webkit-animation-iteration-count: 1;
        -webkit-transform-origin: 50% 50%;
        -webkit-animation-fill-mode:forwards; /*Chrome 16+, Safari 4+*/ 
        -moz-animation: title ease 1s;
        -moz-animation-iteration-count: 1;
        -moz-transform-origin: 50% 50%;
        -moz-animation-fill-mode:forwards; /*FF 5+*/
        -o-animation: title ease 1s;
        -o-animation-iteration-count: 1;
        -o-transform-origin: 50% 50%;
        -o-animation-fill-mode:forwards; /*Not implemented yet*/
        -ms-animation: title ease 1s;
        -ms-animation-iteration-count: 1;
        -ms-transform-origin: 50% 50%;
        -ms-animation-fill-mode:forwards; /*IE 10+*/
    }
    #title{
        padding-top: 12px!important;
        font-family: 'Chivo', sans-serif;
        animation: title ease 1s;
        animation-iteration-count: 1;
        transform-origin: 50% 50%;
        animation-fill-mode:forwards; /*when the spec is finished*/
        -webkit-animation: title ease 1s;
        -webkit-animation-iteration-count: 1;
        -webkit-transform-origin: 50% 50%;
        -webkit-animation-fill-mode:forwards; /*Chrome 16+, Safari 4+*/ 
        -moz-animation: title ease 1s;
        -moz-animation-iteration-count: 1;
        -moz-transform-origin: 50% 50%;
        -moz-animation-fill-mode:forwards; /*FF 5+*/
        -o-animation: title ease 1s;
        -o-animation-iteration-count: 1;
        -o-transform-origin: 50% 50%;
        -o-animation-fill-mode:forwards; /*Not implemented yet*/
        -ms-animation: title ease 1s;
        -ms-animation-iteration-count: 1;
        -ms-transform-origin: 50% 50%;
        -ms-animation-fill-mode:forwards; /*IE 10+*/
    }
    .content{
        animation: title ease 1s;
        animation-iteration-count: 1;
        transform-origin: 50% 50%;
        animation-fill-mode:forwards; /*when the spec is finished*/
        -webkit-animation: title ease 1s;
        -webkit-animation-iteration-count: 1;
        -webkit-transform-origin: 50% 50%;
        -webkit-animation-fill-mode:forwards; /*Chrome 16+, Safari 4+*/ 
        -moz-animation: title ease 1s;
        -moz-animation-iteration-count: 1;
        -moz-transform-origin: 50% 50%;
        -moz-animation-fill-mode:forwards; /*FF 5+*/
        -o-animation: title ease 1s;
        -o-animation-iteration-count: 1;
        -o-transform-origin: 50% 50%;
        -o-animation-fill-mode:forwards; /*Not implemented yet*/
        -ms-animation: title ease 1s;
        -ms-animation-iteration-count: 1;
        -ms-transform-origin: 50% 50%;
        -ms-animation-fill-mode:forwards; /*IE 10+*/
    }
    .button-container{
  animation: btn ease-out 0.8s;
  animation-iteration-count: 1;
  transform-origin: 50% 50%;
  animation-fill-mode:forwards; /*when the spec is finished*/
  -webkit-animation: btn ease-out 0.8s;
  -webkit-animation-iteration-count: 1;
  -webkit-transform-origin: 50% 50%;
  -webkit-animation-fill-mode:forwards; /*Chrome 16+, Safari 4+*/ 
  -moz-animation: btn ease-out 0.8s;
  -moz-animation-iteration-count: 1;
  -moz-transform-origin: 50% 50%;
  -moz-animation-fill-mode:forwards; /*FF 5+*/
  -o-animation: btn ease-out 0.8s;
  -o-animation-iteration-count: 1;
  -o-transform-origin: 50% 50%;
  -o-animation-fill-mode:forwards; /*Not implemented yet*/
  -ms-animation: btn ease-out 0.8s;
  -ms-animation-iteration-count: 1;
  -ms-transform-origin: 50% 50%;
  -ms-animation-fill-mode:forwards; /*IE 10+*/
}
    .navbar-expand-lg{
        background-color: purple!important;
    }
    .btn-primary{
        background-color: purple!important;
    }
    .card-title{
        font-family: 'Oswald', sans-serif;
        font-size: 30px;
        margin-left: 25px;
    }
    .top {
        text-transform: uppercase;
        font-weight: 900;
        padding-top: 20px;
        padding-left: 80px;
        padding-bottom: 12px;
    }
    .isi {
        text-transform: uppercase;
        font-weight: 600;
        color: #333;
        padding-top: 20px;
        padding-left: 40px;
        padding-bottom: 12px;
    }
    .fa-code,.fa-coffee,.fa-gamepad{
        font-size: 30px;
    }
    .section{
        width: 100%;
        height: auto;
    }
    .footer{
        position: absolute;
        right: 0;
        bottom: 0;
        left: 0;
        padding: 1rem;
        text-align: center;
    }


@keyframes btn{
  0% {
    opacity:0;
    transform:  translate(300px,0px)  skewX(-30deg) ;
  }
  60% {
    opacity:1;
    transform:  translate(-40px,0px)  skewX(30deg) ;
  }
  80% {
    opacity:1;
    transform:  translate(0px,0px)  skewX(-15deg) ;
  }
  100% {
    opacity:1;
    transform:  translate(0px,0px)  skewX(0deg) ;
  }
}

@-moz-keyframes btn{
  0% {
    opacity:0;
    -moz-transform:  translate(300px,0px)  skewX(-30deg) ;
  }
  60% {
    opacity:1;
    -moz-transform:  translate(-40px,0px)  skewX(30deg) ;
  }
  80% {
    opacity:1;
    -moz-transform:  translate(0px,0px)  skewX(-15deg) ;
  }
  100% {
    opacity:1;
    -moz-transform:  translate(0px,0px)  skewX(0deg) ;
  }
}

@-webkit-keyframes btn {
  0% {
    opacity:0;
    -webkit-transform:  translate(300px,0px)  skewX(-30deg) ;
  }
  60% {
    opacity:1;
    -webkit-transform:  translate(-40px,0px)  skewX(30deg) ;
  }
  80% {
    opacity:1;
    -webkit-transform:  translate(0px,0px)  skewX(-15deg) ;
  }
  100% {
    opacity:1;
    -webkit-transform:  translate(0px,0px)  skewX(0deg) ;
  }
}

@-o-keyframes btn {
  0% {
    opacity:0;
    -o-transform:  translate(300px,0px)  skewX(-30deg) ;
  }
  60% {
    opacity:1;
    -o-transform:  translate(-40px,0px)  skewX(30deg) ;
  }
  80% {
    opacity:1;
    -o-transform:  translate(0px,0px)  skewX(-15deg) ;
  }
  100% {
    opacity:1;
    -o-transform:  translate(0px,0px)  skewX(0deg) ;
  }
}

@-ms-keyframes btn {
  0% {
    opacity:0;
    -ms-transform:  translate(300px,0px)  skewX(-30deg) ;
  }
  60% {
    opacity:1;
    -ms-transform:  translate(-40px,0px)  skewX(30deg) ;
  }
  80% {
    opacity:1;
    -ms-transform:  translate(0px,0px)  skewX(-15deg) ;
  }
  100% {
    opacity:1;
    -ms-transform:  translate(0px,0px)  skewX(0deg) ;
  }
}
@keyframes title{
  0% {
    opacity:0;
    transform:  translate(0px,-25px)  ;
  }
  100% {
    opacity:1;
    transform:  translate(0px,0px)  ;
  }
}

@-moz-keyframes title{
  0% {
    opacity:0;
    -moz-transform:  translate(0px,-25px)  ;
  }
  100% {
    opacity:1;
    -moz-transform:  translate(0px,0px)  ;
  }
}

@-webkit-keyframes title {
  0% {
    opacity:0;
    -webkit-transform:  translate(0px,-25px)  ;
  }
  100% {
    opacity:1;
    -webkit-transform:  translate(0px,0px)  ;
  }
}

@-o-keyframes title {
  0% {
    opacity:0;
    -o-transform:  translate(0px,-25px)  ;
  }
  100% {
    opacity:1;
    -o-transform:  translate(0px,0px)  ;
  }
}

@-ms-keyframes title {
  0% {
    opacity:0;
    -ms-transform:  translate(0px,-25px)  ;
  }
  100% {
    opacity:1;
    -ms-transform:  translate(0px,0px)  ;
  }
}
    }

</style>
<body class="profile-page sidebar-collapse">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="#home" rel="tooltip" data-placement="bottom">
                    <img src="../assets/img/bii.png" width="50" height="50">
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="../assets/img/blurred-image-1.jpg">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Contact Me!" data-placement="bottom" href="mailto:abiansyah30@gmail.com">Contact me</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="wrapper" id="home">
        <div class="page-header page-header-small" filter-color="orange">
            <div class="page-header-image" data-parallax="true" style="background-image: url('../assets/img/galaxy.jpg');">
            </div>
            <div class="container">
                <div class="content-center">
                    <div class="photo-container">
                        <img src="../assets/img/shiiro.png" alt="">
                    </div>
                    <h3 id="title">Abiansyah</h3><span class="dud"></span>
                    <div class="content">
                        <div class="social-description">
                            <h2>60%</h2>
                            <p><i class="fa fa-code" aria-hidden="true"></i></p>
                        </div>
                        <div class="social-description">
                            <h2>80%</h2>
                            <p><i class="fa fa-coffee" aria-hidden="true"></i></p>
                        </div>
                        <div class="social-description">
                            <h2>100%</h2>
                            <p><i class="fa fa-gamepad" aria-hidden="true"></i></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="button-container">
                    <a href="#!" class="btn btn-primary btn-round btn-lg">Follow Me</a>
                    <a href="https://www.facebook.com/shiiro30" class="btn btn-default btn-round btn-lg btn-icon" rel="tooltip" title="Follow me on Facebook" target="_blank">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="https://www.instagram.com/abiansyah30" class="btn btn-default btn-round btn-lg btn-icon" rel="tooltip" title="Follow me on Instagram">
                        <i class="fa fa-instagram" target="_blank"></i>
                    </a>
                    <a href="https://github.com/shiiro30" class="btn btn-default btn-round btn-lg btn-icon" rel="tooltip" title="Follow me on Github" target="_blank">
                        <i class="fa fa-github"></i>
                    </a>
                </div>
                <h3 class="title">About me</h3>
                <div class="card" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title">Profile</h5>
                        <table>
                            <thead>
                                <tr>
                                 <td class="top">name :</td><hr>
                                 <td class="isi">m abiansyah af</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                 <td class="top">d.o.b :</td>
                                 <td class="isi">surabaya,05 januari 2002</td>
                                </tr>
                                <tr>
                                 <td class="top">email :</td>
                                 <td class="isi">abiansyah30@gmail.com</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 ml-auto mr-auto">
                        <h4 class="title text-center">My Portfolio</h4>
            <div class="section" id="carousel">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-8">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <img class="d-block" src="../assets/img/shiiro.png" alt="First slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Portfolio 1</h5>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block" src="../assets/img/shiiro.png" alt="Second slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Portfolio 2</h5>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block" src="../assets/img/shiiro.png" alt="Third slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Portfolio 3</h5>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <i class="now-ui-icons arrows-1_minimal-left"></i>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <i class="now-ui-icons arrows-1_minimal-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                </div>
            </div>
        </div>
                <div class="section section-contact-us text-center">
            <div class="container">
            <form method="POST" action="sendmail.php">
                <h2 class="title">Leave me a message</h2>
                <p class="description">Your message is precious to me.</p>
                <div class="row">
                    <div class="col-lg-6 text-center col-md-8 ml-auto mr-auto">
                        <div class="input-group input-lg">
                            <span class="input-group-addon">
                                <i class="now-ui-icons users_circle-08"></i>
                            </span>
                            <input type="text" name="name" class="form-control" placeholder="First Name...">
                        </div>
                        <div class="input-group input-lg">
                            <span class="input-group-addon">
                                <i class="now-ui-icons ui-1_email-85"></i>
                            </span>
                            <input type="email" name="email" class="form-control" placeholder="Email...">
                        </div>
                        <div class="textarea-container">
                            <textarea class="form-control" name="pesan" rows="4" cols="80" placeholder="Type a message..."></textarea>
                        </div>
                        <div class="send-button">
                            <input type="submit" value="Send message" class="btn btn-primary btn-round btn-block btn-lg">
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
        <footer class="footer footer-default">
            <div class="container">
                <div class="copyright">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, Designed by
                    <a href="http://www.invisionapp.com" target="_blank">Invision</a>. Coded by
                    <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>. Recoded by
                    <a href="https://www.biiasa.ga" target="_blank">Bii</a>.
                </div>
            </div>
        </footer>
    </div>
</body>
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<script src="../assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="../assets/js/now-ui-kit.js?v=1.1.0" type="text/javascript"></script>
<script type="text/javascript">
    'use strict';

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var TextScramble = function () {
  function TextScramble(el) {
    _classCallCheck(this, TextScramble);

    this.el = el;
    this.chars = '!<>™-_\\/[]{}?E+*^?#__|';
    this.update = this.update.bind(this);
  }

  TextScramble.prototype.setText = function setText(newText) {
    var _this = this;

    var oldText = this.el.innerText;
    var length = Math.max(oldText.length, newText.length);
    var promise = new Promise(function (resolve) {
      return _this.resolve = resolve;
    });
    this.queue = [];
    for (var i = 0; i < length; i++) {
      var from = oldText[i] || '';
      var to = newText[i] || '';
      var start = Math.floor(Math.random() * 40);
      var end = start + Math.floor(Math.random() * 40);
      this.queue.push({ from: from, to: to, start: start, end: end });
    }
    cancelAnimationFrame(this.frameRequest);
    this.frame = 0;
    this.update();
    return promise;
  };

  TextScramble.prototype.update = function update() {
    var output = '';
    var complete = 0;
    for (var i = 0, n = this.queue.length; i < n; i++) {
      var _queue$i = this.queue[i];
      var from = _queue$i.from;
      var to = _queue$i.to;
      var start = _queue$i.start;
      var end = _queue$i.end;
      var char = _queue$i.char;

      if (this.frame >= end) {
        complete++;
        output += to;
      } else if (this.frame >= start) {
        if (!char || Math.random() < 0.28) {
          char = this.randomChar();
          this.queue[i].char = char;
        }
        output += '<span class="dud">' + char + '</span>';
      } else {
        output += from;
      }
    }
    this.el.innerHTML = output;
    if (complete === this.queue.length) {
      this.resolve();
    } else {
      this.frameRequest = requestAnimationFrame(this.update);
      this.frame++;
    }
  };

  TextScramble.prototype.randomChar = function randomChar() {
    return this.chars[Math.floor(Math.random() * this.chars.length)];
  };

  return TextScramble;
}();

var phrases = ['Abiansyah', 'Recoder'];
var el = document.querySelector('#title');
var fx = new TextScramble(el);

var counter = 0;
var next = function next() {
  fx.setText(phrases[counter]).then(function () {
    setTimeout(next, 800);
  });
  counter = (counter + 1) % phrases.length;
};

next();
  </script>
</html>