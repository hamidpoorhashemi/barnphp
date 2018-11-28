
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<div class="window microsoft">
  <div class="header">
    <div class="title"> 
      <div class="icon"><i class="material-icons">get_app</i></div>
      <div class="text">BarnPhp Install</div>
    </div>
    <div class="buttons">
    
    </div>
  </div>
  <div class="form">
    <div class="top">
      <div class="icon">
        <i class="fa fa-install"></i>
      </div>
      <div class="loader">
        <div class="text">Extract: data.. 35%</div>
        <div class="bar"></div>
      </div>
    </div>
    <div class="middle">
      <div class="display">
        <div class="line">Extract Qt5WinExtras.dll... 100%</div>
        <div class="line">Extract RadeonInstaller.exe... 100%</div>
        <div class="line">Extract Setup.exe... 100%</div>
        <div class="line">Extract libEGL.dll... 100%</div>
        <div class="line">Extract mfc120u.dll... 100%</div>
        <div class="line">Extract atdcm64a.exe... 100%</div>
        <div class="line">Extract Qt5WinExtras.dll... 100%</div>
        <div class="line">Extract RadeonInstaller.exe... 100%</div>
        <div class="line">Extract Setup.exe... 100%</div>
        <div class="line">Extract libEGL.dll... 100%</div>
        <div class="line">Extract mfc120u.dll... 100%</div>
        <div class="line">Extract atdcm64a.exe... 100%</div>
        <div class="line">Extract Qt5WinExtras.dll... 100%</div>
        <div class="line">Extract RadeonInstaller.exe... 100%</div>
        <div class="line">Extract Setup.exe... 100%</div>
        <div class="line">Extract libEGL.dll... 100%</div>
        <div class="line">Extract mfc120u.dll... 100%</div>
        <div class="line">Extract atdcm64a.exe... 100%</div>
      </div>
    </div>
    <div class="bottom">
      <div class="btn">Cancel</div>
      <div class="text">Install System v4.0</div>
      <div class="btn">Back</div>
      <div class="btn">Close</div>
    </div>
  </div>
</div>


<style>x
html, body {
  padding: 0px;
  margin: 0px;
  background: #191A1D;
  font-family: 'Raleway', sans-serif;
  color: #FFF;
  height: 100%;
  overflow: hidden;
  font-weight: 100;
}

body {
  display: block;
  padding: 0px 20px;
}
body * {
  box-sizing: border-box;
  padding: 0px;
  margin: 0px;
}

.window {
  max-width: 600px;
  min-width: 420px;
  margin: 40px auto 0px auto;
}

.microsoft {
  font-family: 'Raleway', sans-serif;
  box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5);
  -webkit-animation: openwindows 0.2s;
          animation: openwindows 0.2s;
  -webkit-transform-origin: bottom center;
          transform-origin: bottom center;
}
.microsoft .header {
  display: flex;
  color: rgba(255, 255, 255, 0.85);
  line-height: 40px;
  font-weight: 100;
  height: 40px;
  background: #449;
  position: relative;
  z-index: 1;
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.25);
}
.microsoft .header .title {
  flex: 1;
  width: 100%;
  height: 100%;
  padding: 0px 10px;
  display: flex;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}
.microsoft .header .title .icon {
  width: 30px;
  position: relative;
  display: inline-block;
  top: 6px;
}
.microsoft .header .title .text {
  flex: 1;
  height: 25px;
  top: 7px;
  position: relative;
  padding: 0px 8px;
  line-height: 25px;
  border-left: 1px solid rgba(0, 0, 0, 0.2);
  white-space: nowrap;
  text-overflow: ellipsis;
}
.microsoft .header .buttons {
  display: flex;
  width: 160px;
  height: 30px;
}
.microsoft .header .buttons .btn {
  flex: 1;
  text-align: center;
}
.microsoft .header .buttons .btn:hover {
  cursor: pointer;
}
.microsoft .header .buttons .btn:hover.minus {
  background: rgba(0, 0, 0, 0.25);
}
.microsoft .header .buttons .btn:hover.expand {
  background: rgba(0, 0, 0, 0.25);
}
.microsoft .header .buttons .btn:hover.close {
  background: rgba(150, 0, 0, 0.5);
}
.microsoft .header .buttons .btn i {
  position: relative;
  display: inline-block;
  top: -1px;
  font-size: 20px;
}
.microsoft .form {
  min-height: 60px;
  background: #333;
}
.microsoft .form .top {
  padding: 10px;
  display: flex;
}
.microsoft .form .top .icon {
  width: 50px;
  padding: 0px 10px 0px 0px;
}
.microsoft .form .top .icon .amd {
  background: #333;
  box-shadow: none;
}
.microsoft .form .top .icon .amd .amd-border, .microsoft .form .top .icon .amd .amd-border:after, .microsoft .form .top .icon .amd .amd-top:after {
  background: #333;
}
.microsoft .form .top .loader {
  flex: 1;
}
.microsoft .form .top .loader .text {
  font-size: 12px;
  margin-bottom: 5px;
}
.microsoft .form .top .loader .bar {
  min-height: 20px;
  background: #019966;
  width: 100%;
  transition: 0.2s all;
  -webkit-animation: 0.4s opacitize;
          animation: 0.4s opacitize;
}
.microsoft .middle {
  padding: 0px 10px 10px 10px;
}
.microsoft .middle .display {
  height: 200px;
  background: rgba(0, 0, 0, 0.25);
  padding: 5px;
  font-size: 12px;
  color: #32c832;
  font-weight: 300;
  overflow-y: auto;
  box-shadow: inset 0px 0px 4px rgba(0, 0, 0, 0.5);
}
.microsoft .bottom {
  min-height: 40px;
  display: flex;
  font-size: 12px;
  color: rgba(255, 255, 255, 0.8);
  padding: 0px 10px;
  line-height: 30px;
}
.microsoft .bottom .btn {
  width: 80px;
  text-align: center;
  height: 30px;
  position: relative;
  background: #444;
  box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.25);
  cursor: pointer;
  transition: all 0.2s;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}
.microsoft .bottom .btn:not(:first-child) {
  margin-left: 4px;
}
.microsoft .bottom .btn:active {
  box-shadow: none;
}
.microsoft .bottom .text {
  color: rgba(255, 255, 255, 0.1);
  flex: 1;
  text-align: center;
}

@-webkit-keyframes opacitize {
  0% {
    opacity: 0;
  }
  50% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@keyframes opacitize {
  0% {
    opacity: 0;
  }
  50% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
</style>

<script>
var data = []

var nameData = {
   prefix: ['Win', 'Qt', 'Radeon', 'AMD', 'Setup', 'lib', 'mfc', 'ms', 'mdn'],
   word: ['EGL', 'Installer', 'GLES', 'Soft', 'Diag', 'Over', 'vcr', 'Open', 'Light'],
   suffix: ['Installer.exe', 'Extra.dll', '64a.exe', 'V2.dll', '12sw.exe', 'x86.sys', '120.dll']
}
var display = document.querySelectorAll('.display')[0]
var loaderBar = document.querySelectorAll('.loader .bar')[0]
var loaderText = document.querySelectorAll('.loader .text')[0]
var words = makeInstallerFiles()
drawInstallerFiles(words)
setInterval(function(){
   for(var i = 0; i < words.length; i++){  
      if(words[i].percent < 100){
         words[i].percent += Math.floor(Math.random()*25)
         loaderBar.style.display = 'block'
         if(words[i].percent >= 100){
            words[i].percent = 100
            if(words.length-1 !== i)
               loaderBar.style.display = 'none'
         }
         break;
      } 
   }
   drawInstallerFiles(words)
}, 200)
function drawInstallerFiles(words){
   display.innerHTML = ''
   words.forEach(function(word){
      if(word.percent > 0){
         display.innerHTML += '<div class="line">'+word.word+'...'+word.percent+'%</div>'
         loaderText.innerHTML = word.word+'...'+word.percent+'%'
         loaderBar.style.width = word.percent + '%'
         if(word.percent < 100)
            display.scrollTop = 100000;
         
      }
   })
}

function makeInstallerFiles(){
   var arr = []
   for(var i = 0; i < 20; i++){
      var prefix = chooseRandomValue(nameData.prefix) 
      var word = chooseRandomValue(nameData.word) 
      var suffix = chooseRandomValue(nameData.suffix) 
      arr.push({
         word: prefix + word + suffix,
         percent: 0
      })
   }
   return arr
}
   
function chooseRandomValue(arr){
   min = 0
   max = arr.length
   return arr[Math.floor(Math.random()*(max-min)+min)]
}
</script>
