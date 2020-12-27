<!DOCTYPE html>
<html class="js cssanimations">
<meta charset=utf-8>
<meta http-equiv=X-UA-Compatible content="IE=edge,chrome=1">
<meta name=viewport content="width=device-width, initial-scale=1.0">
<title>网站监控 - 天空EP分销 - ep.52-tk.cn</title>
<meta name="keywords" content="节点监控,网站监控,监控,网站,"><!--网页关键词i-->
<meta name=description content=文曦博客(www.viennce.cn)，><!--网页描述-->
<meta name=author content=个人网络技术><!--网页作者-->
<style>
*,*:after,*:before {
box-sizing: border-box
}

body {
overflow: hidden;
margin: 0;
color: #cecece;
background: #2a2b30;
-webkit-font-smoothing: antialiased;
-moz-osx-font-smoothing: grayscale
}

a {
text-decoration: none;
color: #ff0000;
outline: none
}

a:hover {
color: #ddd
}

.container {
overflow-y: auto;
height: 100vh
}

.content {
position: relative;
min-height: 300px;
margin: 0 0 0 0px;
位置控制
}

@media screen and (max-width:40em) {
.content {
margin: 0
}

body,.container {
height: auto;
overflow: auto
}
}

@-webkit-keyframes outToRight {
to {
opacity: 0;
-webkit-transform: translate3d(100%,0,0);
transform: translate3d(100%,0,0)
}
}

@keyframes outToRight {
to {
opacity: 0;
-webkit-transform: translate3d(100%,0,0);
transform: translate3d(100%,0,0)
}
}

@-webkit-keyframes outToLeft {
to {
opacity: 0;
-webkit-transform: translate3d(-100%,0,0);
transform: translate3d(-100%,0,0)
}
}

@keyframes outToLeft {
to {
opacity: 0;
-webkit-transform: translate3d(-100%,0,0);
transform: translate3d(-100%,0,0)
}
}

@-webkit-keyframes inFromLeft {
from {
opacity: 0;
-webkit-transform: translate3d(-100%,0,0);
transform: translate3d(-100%,0,0)
}

to {
opacity: 1;
-webkit-transform: translate3d(0,0,0);
transform: translate3d(0,0,0)
}
}

@keyframes inFromLeft {
from {
opacity: 0;
-webkit-transform: translate3d(-100%,0,0);
transform: translate3d(-100%,0,0)
}

to {
opacity: 1;
-webkit-transform: translate3d(0,0,0);
transform: translate3d(0,0,0)
}
}

@-webkit-keyframes inFromRight {
from {
opacity: 0;
-webkit-transform: translate3d(100%,0,0);
transform: translate3d(100%,0,0)
}

to {
opacity: 1;
-webkit-transform: translate3d(0,0,0);
transform: translate3d(0,0,0)
}
}

@keyframes inFromRight {
from {
opacity: 0;
-webkit-transform: translate3d(100%,0,0);
transform: translate3d(100%,0,0)
}

to {
opacity: 1;
-webkit-transform: translate3d(0,0,0);
transform: translate3d(0,0,0)
}
}

@-webkit-keyframes fa-spin {
0% {
-webkit-transform: rotate(0deg);
transform: rotate(0deg)
}

100% {
-webkit-transform: rotate(359deg);
transform: rotate(359deg)
}
}

@keyframes fa-spin {
0% {
-webkit-transform: rotate(0deg);
transform: rotate(0deg)
}

100% {
-webkit-transform: rotate(359deg);
transform: rotate(359deg)
}
}

@keyframes bounce {
from,20%,53%,80%,to {
animation-timing-function: cubic-bezier(0.215,0.610,0.355,1.000);
transform: translate3d(0,0,0)
}

40%,43% {
animation-timing-function: cubic-bezier(0.755,0.050,0.855,0.060);
transform: translate3d(0,-30px,0)
}

70% {
animation-timing-function: cubic-bezier(0.755,0.050,0.855,0.060);
transform: translate3d(0,-15px,0)
}

90% {
transform: translate3d(0,-4px,0)
}
}

@keyframes flash {
from,50%,to {
opacity: 1
}

25%,75% {
opacity: 0
}
}

@keyframes pulse {
from {
transform: scale3d(1,1,1)
}

50% {
transform: scale3d(1.05,1.05,1.05)
}

to {
transform: scale3d(1,1,1)
}
}

@keyframes rubberBand {
from {
transform: scale3d(1,1,1)
}

30% {
transform: scale3d(1.25,0.75,1)
}

40% {
transform: scale3d(0.75,1.25,1)
}

50% {
transform: scale3d(1.15,0.85,1)
}

65% {
transform: scale3d(.95,1.05,1)
}

75% {
transform: scale3d(1.05,.95,1)
}

to {
transform: scale3d(1,1,1)
}
}

@keyframes shake {
from,to {
transform: translate3d(0,0,0)
}

10%,30%,50%,70%,90% {
transform: translate3d(-10px,0,0)
}

20%,40%,60%,80% {
transform: translate3d(10px,0,0)
}
}

@keyframes headShake {
0% {
transform: translateX(0)
}

6.5% {
transform: translateX(-6px) rotateY(-9deg)
}

18.5% {
transform: translateX(5px) rotateY(7deg)
}

31.5% {
transform: translateX(-3px) rotateY(-5deg)
}

43.5% {
transform: translateX(2px) rotateY(3deg)
}

50% {
transform: translateX(0)
}
}

@keyframes swing {
20% {
transform: rotate3d(0,0,1,15deg)
}

40% {
transform: rotate3d(0,0,1,-10deg)
}

60% {
transform: rotate3d(0,0,1,5deg)
}

80% {
transform: rotate3d(0,0,1,-5deg)
}

to {
transform: rotate3d(0,0,1,0deg)
}
}

@keyframes tada {
from {
transform: scale3d(1,1,1)
}

10%,20% {
transform: scale3d(.9,.9,.9) rotate3d(0,0,1,-3deg)
}

30%,50%,70%,90% {
transform: scale3d(1.1,1.1,1.1) rotate3d(0,0,1,3deg)
}

40%,60%,80% {
transform: scale3d(1.1,1.1,1.1) rotate3d(0,0,1,-3deg)
}

to {
transform: scale3d(1,1,1)
}
}

@keyframes wobble {
from {
transform: none
}

15% {
transform: translate3d(-25%,0,0) rotate3d(0,0,1,-5deg)
}

30% {
transform: translate3d(20%,0,0) rotate3d(0,0,1,3deg)
}

45% {
transform: translate3d(-15%,0,0) rotate3d(0,0,1,-3deg)
}

60% {
transform: translate3d(10%,0,0) rotate3d(0,0,1,2deg)
}

75% {
transform: translate3d(-5%,0,0) rotate3d(0,0,1,-1deg)
}

to {
transform: none
}
}

@keyframes jello {
from,11.1%,to {
transform: none
}

22.2% {
transform: skewX(-12.5deg) skewY(-12.5deg)
}

33.3% {
transform: skewX(6.25deg) skewY(6.25deg)
}

44.4% {
transform: skewX(-3.125deg) skewY(-3.125deg)
}

55.5% {
transform: skewX(1.5625deg) skewY(1.5625deg)
}

66.6% {
transform: skewX(-0.78125deg) skewY(-0.78125deg)
}

77.7% {
transform: skewX(0.390625deg) skewY(0.390625deg)
}

88.8% {
transform: skewX(-0.1953125deg) skewY(-0.1953125deg)
}
}

@keyframes bounceIn {
from,20%,40%,60%,80%,to {
animation-timing-function: cubic-bezier(0.215,0.610,0.355,1.000)
}

0% {
opacity: 0;
transform: scale3d(.3,.3,.3)
}

20% {
transform: scale3d(1.1,1.1,1.1)
}

40% {
transform: scale3d(.9,.9,.9)
}

60% {
opacity: 1;
transform: scale3d(1.03,1.03,1.03)
}

80% {
transform: scale3d(.97,.97,.97)
}

to {
opacity: 1;
transform: scale3d(1,1,1)
}
}

@keyframes bounceInDown {
from,60%,75%,90%,to {
animation-timing-function: cubic-bezier(0.215,0.610,0.355,1.000)
}

0% {
opacity: 0;
transform: translate3d(0,-3000px,0)
}

60% {
opacity: 1;
transform: translate3d(0,25px,0)
}

75% {
transform: translate3d(0,-10px,0)
}

90% {
transform: translate3d(0,5px,0)
}

to {
transform: none
}
}

@keyframes bounceInLeft {
from,60%,75%,90%,to {
animation-timing-function: cubic-bezier(0.215,0.610,0.355,1.000)
}

0% {
opacity: 0;
transform: translate3d(-3000px,0,0)
}

60% {
opacity: 1;
transform: translate3d(25px,0,0)
}

75% {
transform: translate3d(-10px,0,0)
}

90% {
transform: translate3d(5px,0,0)
}

to {
transform: none
}
}

@keyframes bounceInRight {
from,60%,75%,90%,to {
animation-timing-function: cubic-bezier(0.215,0.610,0.355,1.000)
}

from {
opacity: 0;
transform: translate3d(3000px,0,0)
}

60% {
opacity: 1;
transform: translate3d(-25px,0,0)
}

75% {
transform: translate3d(10px,0,0)
}

90% {
transform: translate3d(-5px,0,0)
}

to {
transform: none
}
}

@keyframes bounceInUp {
from,60%,75%,90%,to {
animation-timing-function: cubic-bezier(0.215,0.610,0.355,1.000)
}

from {
opacity: 0;
transform: translate3d(0,3000px,0)
}

60% {
opacity: 1;
transform: translate3d(0,-20px,0)
}

75% {
transform: translate3d(0,10px,0)
}

90% {
transform: translate3d(0,-5px,0)
}

to {
transform: translate3d(0,0,0)
}
}

@keyframes bounceOut {
20% {
transform: scale3d(.9,.9,.9)
}

50%,55% {
opacity: 1;
transform: scale3d(1.1,1.1,1.1)
}

to {
opacity: 0;
transform: scale3d(.3,.3,.3)
}
}

@keyframes bounceOutDown {
20% {
transform: translate3d(0,10px,0)
}

40%,45% {
opacity: 1;
transform: translate3d(0,-20px,0)
}

to {
opacity: 0;
transform: translate3d(0,2000px,0)
}
}

@keyframes bounceOutLeft {
20% {
opacity: 1;
transform: translate3d(20px,0,0)
}

to {
opacity: 0;
transform: translate3d(-2000px,0,0)
}
}

@keyframes bounceOutRight {
20% {
opacity: 1;
transform: translate3d(-20px,0,0)
}

to {
opacity: 0;
transform: translate3d(2000px,0,0)
}
}

@keyframes bounceOutUp {
20% {
transform: translate3d(0,-10px,0)
}

40%,45% {
opacity: 1;
transform: translate3d(0,20px,0)
}

to {
opacity: 0;
transform: translate3d(0,-2000px,0)
}
}

@keyframes fadeIn {
from {
opacity: 0
}

to {
opacity: 1
}
}

@keyframes fadeInDown {
from {
opacity: 0;
transform: translate3d(0,-100%,0)
}

to {
opacity: 1;
transform: none
}
}

@keyframes fadeInDownBig {
from {
opacity: 0;
transform: translate3d(0,-2000px,0)
}

to {
opacity: 1;
transform: none
}
}

@keyframes fadeInLeft {
from {
opacity: 0;
transform: translate3d(-100%,0,0)
}

to {
opacity: 1;
transform: none
}
}

@keyframes fadeInLeftBig {
from {
opacity: 0;
transform: translate3d(-2000px,0,0)
}

to {
opacity: 1;
transform: none
}
}

@keyframes fadeInRight {
from {
opacity: 0;
transform: translate3d(100%,0,0)
}

to {
opacity: 1;
transform: none
}
}

@keyframes fadeInRightBig {
from {
opacity: 0;
transform: translate3d(2000px,0,0)
}

to {
opacity: 1;
transform: none
}
}

@keyframes fadeInUp {
from {
opacity: 0;
transform: translate3d(0,100%,0)
}

to {
opacity: 1;
transform: none
}
}

@keyframes fadeInUpBig {
from {
opacity: 0;
transform: translate3d(0,2000px,0)
}

to {
opacity: 1;
transform: none
}
}

@keyframes fadeOut {
from {
opacity: 1
}

to {
opacity: 0
}
}

@keyframes fadeOutDown {
from {
opacity: 1
}

to {
opacity: 0;
transform: translate3d(0,100%,0)
}
}

@keyframes fadeOutDownBig {
from {
opacity: 1
}

to {
opacity: 0;
transform: translate3d(0,2000px,0)
}
}

@keyframes fadeOutLeft {
from {
opacity: 1
}

to {
opacity: 0;
transform: translate3d(-100%,0,0)
}
}

@keyframes fadeOutLeftBig {
from {
opacity: 1
}

to {
opacity: 0;
transform: translate3d(-2000px,0,0)
}
}

@keyframes fadeOutRight {
from {
opacity: 1
}

to {
opacity: 0;
transform: translate3d(100%,0,0)
}
}

@keyframes fadeOutRightBig {
from {
opacity: 1
}

to {
opacity: 0;
transform: translate3d(2000px,0,0)
}
}

@keyframes fadeOutUp {
from {
opacity: 1
}

to {
opacity: 0;
transform: translate3d(0,-100%,0)
}
}

@keyframes fadeOutUpBig {
from {
opacity: 1
}

to {
opacity: 0;
transform: translate3d(0,-2000px,0)
}
}

@keyframes flip {
from {
transform: perspective(400px) rotate3d(0,1,0,-360deg);
animation-timing-function: ease-out
}

40% {
transform: perspective(400px) translate3d(0,0,150px) rotate3d(0,1,0,-190deg);
animation-timing-function: ease-out
}

50% {
transform: perspective(400px) translate3d(0,0,150px) rotate3d(0,1,0,-170deg);
animation-timing-function: ease-in
}

80% {
transform: perspective(400px) scale3d(.95,.95,.95);
animation-timing-function: ease-in
}

to {
transform: perspective(400px);
animation-timing-function: ease-in
}
}

@keyframes flipInX {
from {
transform: perspective(400px) rotate3d(1,0,0,90deg);
animation-timing-function: ease-in;
opacity: 0
}

40% {
transform: perspective(400px) rotate3d(1,0,0,-20deg);
animation-timing-function: ease-in
}

60% {
transform: perspective(400px) rotate3d(1,0,0,10deg);
opacity: 1
}

80% {
transform: perspective(400px) rotate3d(1,0,0,-5deg)
}

to {
transform: perspective(400px)
}
}

@keyframes flipInY {
from {
transform: perspective(400px) rotate3d(0,1,0,90deg);
animation-timing-function: ease-in;
opacity: 0
}

40% {
transform: perspective(400px) rotate3d(0,1,0,-20deg);
animation-timing-function: ease-in
}

60% {
transform: perspective(400px) rotate3d(0,1,0,10deg);
opacity: 1
}

80% {
transform: perspective(400px) rotate3d(0,1,0,-5deg)
}

to {
transform: perspective(400px)
}
}

@keyframes flipOutX {
from {
transform: perspective(400px)
}

30% {
transform: perspective(400px) rotate3d(1,0,0,-20deg);
opacity: 1
}

to {
transform: perspective(400px) rotate3d(1,0,0,90deg);
opacity: 0
}
}

@keyframes flipOutY {
from {
transform: perspective(400px)
}

30% {
transform: perspective(400px) rotate3d(0,1,0,-15deg);
opacity: 1
}

to {
transform: perspective(400px) rotate3d(0,1,0,90deg);
opacity: 0
}
}

@keyframes lightSpeedIn {
from {
transform: translate3d(100%,0,0) skewX(-30deg);
opacity: 0
}

60% {
transform: skewX(20deg);
opacity: 1
}

80% {
transform: skewX(-5deg);
opacity: 1
}

to {
transform: none;
opacity: 1
}
}

@keyframes lightSpeedOut {
from {
opacity: 1
}

to {
transform: translate3d(100%,0,0) skewX(30deg);
opacity: 0
}
}

@keyframes rotateIn {
from {
transform-origin: center;
transform: rotate3d(0,0,1,-200deg);
opacity: 0
}

to {
transform-origin: center;
transform: none;
opacity: 1
}
}

@keyframes rotateInDownLeft {
from {
transform-origin: left bottom;
transform: rotate3d(0,0,1,-45deg);
opacity: 0
}

to {
transform-origin: left bottom;
transform: none;
opacity: 1
}
}

@keyframes rotateInDownRight {
from {
transform-origin: right bottom;
transform: rotate3d(0,0,1,45deg);
opacity: 0
}

to {
transform-origin: right bottom;
transform: none;
opacity: 1
}
}

@keyframes rotateInUpLeft {
from {
transform-origin: left bottom;
transform: rotate3d(0,0,1,45deg);
opacity: 0
}

to {
transform-origin: left bottom;
transform: none;
opacity: 1
}
}

@keyframes rotateInUpRight {
from {
transform-origin: right bottom;
transform: rotate3d(0,0,1,-90deg);
opacity: 0
}

to {
transform-origin: right bottom;
transform: none;
opacity: 1
}
}

@keyframes rotateOut {
from {
transform-origin: center;
opacity: 1
}

to {
transform-origin: center;
transform: rotate3d(0,0,1,200deg);
opacity: 0
}
}

@keyframes rotateOutDownLeft {
from {
transform-origin: left bottom;
opacity: 1
}

to {
transform-origin: left bottom;
transform: rotate3d(0,0,1,45deg);
opacity: 0
}
}

@keyframes rotateOutDownRight {
from {
transform-origin: right bottom;
opacity: 1
}

to {
transform-origin: right bottom;
transform: rotate3d(0,0,1,-45deg);
opacity: 0
}
}

@keyframes rotateOutUpLeft {
from {
transform-origin: left bottom;
opacity: 1
}

to {
transform-origin: left bottom;
transform: rotate3d(0,0,1,-45deg);
opacity: 0
}
}

@keyframes rotateOutUpRight {
from {
transform-origin: right bottom;
opacity: 1
}

to {
transform-origin: right bottom;
transform: rotate3d(0,0,1,90deg);
opacity: 0
}
}

@keyframes hinge {
0% {
transform-origin: top left;
animation-timing-function: ease-in-out
}

20%,60% {
transform: rotate3d(0,0,1,80deg);
transform-origin: top left;
animation-timing-function: ease-in-out
}

40%,80% {
transform: rotate3d(0,0,1,60deg);
transform-origin: top left;
animation-timing-function: ease-in-out;
opacity: 1
}

to {
transform: translate3d(0,700px,0);
opacity: 0
}
}

@keyframes jackInTheBox {
from {
opacity: 0;
transform: scale(0.1) rotate(30deg);
transform-origin: center bottom
}

50% {
transform: rotate(-10deg)
}

70% {
transform: rotate(3deg)
}

to {
opacity: 1;
transform: scale(1)
}
}

@keyframes rollIn {
from {
opacity: 0;
transform: translate3d(-100%,0,0) rotate3d(0,0,1,-120deg)
}

to {
opacity: 1;
transform: none
}
}

@keyframes rollOut {
from {
opacity: 1
}

to {
opacity: 0;
transform: translate3d(100%,0,0) rotate3d(0,0,1,120deg)
}
}

@keyframes zoomIn {
from {
opacity: 0;
transform: scale3d(.3,.3,.3)
}

50% {
opacity: 1
}
}

@keyframes zoomInDown {
from {
opacity: 0;
transform: scale3d(.1,.1,.1) translate3d(0,-1000px,0);
animation-timing-function: cubic-bezier(0.550,0.055,0.675,0.190)
}

60% {
opacity: 1;
transform: scale3d(.475,.475,.475) translate3d(0,60px,0);
animation-timing-function: cubic-bezier(0.175,0.885,0.320,1)
}
}

@keyframes zoomInLeft {
from {
opacity: 0;
transform: scale3d(.1,.1,.1) translate3d(-1000px,0,0);
animation-timing-function: cubic-bezier(0.550,0.055,0.675,0.190)
}

60% {
opacity: 1;
transform: scale3d(.475,.475,.475) translate3d(10px,0,0);
animation-timing-function: cubic-bezier(0.175,0.885,0.320,1)
}
}

@keyframes zoomInRight {
from {
opacity: 0;
transform: scale3d(.1,.1,.1) translate3d(1000px,0,0);
animation-timing-function: cubic-bezier(0.550,0.055,0.675,0.190)
}

60% {
opacity: 1;
transform: scale3d(.475,.475,.475) translate3d(-10px,0,0);
animation-timing-function: cubic-bezier(0.175,0.885,0.320,1)
}
}

@keyframes zoomInUp {
from {
opacity: 0;
transform: scale3d(.1,.1,.1) translate3d(0,1000px,0);
animation-timing-function: cubic-bezier(0.550,0.055,0.675,0.190)
}

60% {
opacity: 1;
transform: scale3d(.475,.475,.475) translate3d(0,-60px,0);
animation-timing-function: cubic-bezier(0.175,0.885,0.320,1)
}
}

@keyframes zoomOut {
from {
opacity: 1
}

50% {
opacity: 0;
transform: scale3d(.3,.3,.3)
}

to {
opacity: 0
}
}

@keyframes zoomOutDown {
40% {
opacity: 1;
transform: scale3d(.475,.475,.475) translate3d(0,-60px,0);
animation-timing-function: cubic-bezier(0.550,0.055,0.675,0.190)
}

to {
opacity: 0;
transform: scale3d(.1,.1,.1) translate3d(0,2000px,0);
transform-origin: center bottom;
animation-timing-function: cubic-bezier(0.175,0.885,0.320,1)
}
}

@keyframes zoomOutLeft {
40% {
opacity: 1;
transform: scale3d(.475,.475,.475) translate3d(42px,0,0)
}

to {
opacity: 0;
transform: scale(.1) translate3d(-2000px,0,0);
transform-origin: left center
}
}

@keyframes zoomOutRight {
40% {
opacity: 1;
transform: scale3d(.475,.475,.475) translate3d(-42px,0,0)
}

to {
opacity: 0;
transform: scale(.1) translate3d(2000px,0,0);
transform-origin: right center
}
}

@keyframes zoomOutUp {
40% {
opacity: 1;
transform: scale3d(.475,.475,.475) translate3d(0,60px,0);
animation-timing-function: cubic-bezier(0.550,0.055,0.675,0.190)
}

to {
opacity: 0;
transform: scale3d(.1,.1,.1) translate3d(0,-2000px,0);
transform-origin: center bottom;
animation-timing-function: cubic-bezier(0.175,0.885,0.320,1)
}
}

@keyframes slideInDown {
from {
transform: translate3d(0,-100%,0);
visibility: visible
}

to {
transform: translate3d(0,0,0)
}
}

@keyframes slideInLeft {
from {
transform: translate3d(-100%,0,0);
visibility: visible
}

to {
transform: translate3d(0,0,0)
}
}

@keyframes slideInRight {
from {
transform: translate3d(100%,0,0);
visibility: visible
}

to {
transform: translate3d(0,0,0)
}
}

@keyframes slideInUp {
from {
transform: translate3d(0,100%,0);
visibility: visible
}

to {
transform: translate3d(0,0,0)
}
}

@keyframes slideOutDown {
from {
transform: translate3d(0,0,0)
}

to {
visibility: hidden;
transform: translate3d(0,100%,0)
}
}

@keyframes slideOutLeft {
from {
transform: translate3d(0,0,0)
}

to {
visibility: hidden;
transform: translate3d(-100%,0,0)
}
}

@keyframes slideOutRight {
from {
transform: translate3d(0,0,0)
}

to {
visibility: hidden;
transform: translate3d(100%,0,0)
}
}

@keyframes slideOutUp {
from {
transform: translate3d(0,0,0)
}

to {
visibility: hidden;
transform: translate3d(0,-100%,0)
}
}

@supports (-ms-overflow-style:none) {
.ps {
overflow: auto!important
}
}


* {
margin: 0px;
padding: 0px;
box-sizing: border-box
}

body,html {
height: 100%;
font-family: sans-serif
}

a {
margin: 0px;
transition: all 0.4s;
-webkit-transition: all 0.4s;
-o-transition: all 0.4s;
-moz-transition: all 0.4s
}

a:focus {
outline: none!important
}

a:hover {
text-decoration: none
}

.limiter {
width: 100%;
margin: 0 auto
}

.container-table100 {
width: 100%;
min-height: 100vh;
background: -webkit-linear-gradient(45deg,#2a2b30,#2a2b30);
background: -o-linear-gradient(45deg,#2a2b30,#2a2b30);
background: -moz-linear-gradient(45deg,#2a2b30,#2a2b30);
background: linear-gradient(45deg,#2a2b30,#2a2b30);
display: -webkit-box;
display: -webkit-flex;
display: -moz-box;
display: -ms-flexbox;
display: flex;
align-items: center;
justify-content: center;
flex-wrap: wrap;
padding: 33px 30px
}

.wrap-table100 {
width: 1170px
}

table {
border-collapse: collapse;
background: white;
border-radius: 10px;
overflow: hidden;
width: 100%;
margin: 0 auto;
position: relative
}

table * {
position: relative
}

table td,table th {
padding-left: 8px
}

table thead tr {
height: 60px;
background: #5c5edc
}

table tbody tr {
height: 50px
}

table tbody tr:last-child {
border: 0
}

.table100-head th {
font-family: OpenSans-Regular;
font-size: 18px;
color: #fff;
line-height: 1.2;
font-weight: unset
}

tbody tr:nth-child(even) {
background-color: #f5f5f5
}

tbody tr {
font-family: OpenSans-Regular;
font-size: 15px;
color: #808080;
line-height: 1.2;
font-weight: unset
}

tbody tr:hover {
color: #555555;
background-color: #f5f5f5;
cursor: pointer
}

.column1 {
width: 170px;
text-align: center
}

.column2 {
width: 170px;
text-align: center
}

.column3 {
width: 170px;
text-align: center
}

@media screen and (max-width:992px) {
table {
display: block
}

table>*,table tr,table td,table th {
display: block
}

table thead {
display: none
}

table tbody tr {
height: auto;
padding: 37px 0
}

table tbody tr td {
padding-left: 40%!important;
margin-bottom: 24px
}

table tbody tr td:last-child {
margin-bottom: 0
}

table tbody tr td:before {
font-family: OpenSans-Regular;
font-size: 14px;
color: #999999;
line-height: 1.2;
font-weight: unset;
position: absolute;
width: 40%;
left: 30px;
top: 0
}

table tbody tr td:nth-child(1):before {
content: "网站名字"
}

table tbody tr td:nth-child(2):before {
content: "检测网址"
}

table tbody tr td:nth-child(3):before {
content: "网站状态"
}

table tbody tr td:nth-child(4):before {
content: "网站状态"
}

table tbody tr td:nth-child(5):before {
content: "Quantity"
}

table tbody tr td:nth-child(6):before {
content: "Total"
}

.column1,.column2,.column3 {
width: 100%
}

tbody tr {
font-size: 14px
}
}

@media (max-width:576px) {
.container-table100 {
padding-left: 15px;
padding-right: 15px
}
}

</style>
<body>
  <div> 
   <div> 
    <div> 
     <div> 
      <div> 
       <div> 
        <table> 
         <thead> 
          <tr> 
           <th> 网站名称 </th> 
           <th> 检测地址 </th> 
           <th> 服务状态 </th> 
          </tr> 
         </thead> 
         <tbody> 
<?php
//脚本用于监控网站的运行状态，及时得到反馈

//要监控的网站列表
$urls=array(

$site=array(
'北京精品A区[百度过白]',//站点名称
'120.48.26.44',//测试站显示url
'120.48.26.44',//检测url
),

$site=array(
'德国精品A区',//站点名称
'185.194.239.20',//测试站显示url
'185.194.239.20',//检测url
),

$site=array(
'德阳精品A区[自动过白]',//站点名称
'220.167.109.94',//测试站显示url
'220.167.109.94',//检测url
),

$site=array(
'法国精品A区',//站点名称
'51.255.134.11',//测试站显示url
'51.255.134.11',//检测url
),

$site=array(
'法国精品B区',//站点名称
'92.222.143.231',//测试站显示url
'92.222.143.231',//检测url
),

$site=array(
'荷兰精品A区',//站点名称
'41.216.178.153',//测试站显示url
'41.216.178.153',//检测url
),

$site=array(
'十堰精品A区[工单过白]',//站点名称
'61.136.232.180',//测试站显示url
'61.136.232.180',//检测url
),

$site=array(
'辽宁精品A区[自动过白]',//站点名称
'103.45.179.33',//测试站显示url
'103.45.179.33',//检测url
),

$site=array(
'辽宁精品B区[自动过白]',//站点名称
'43.226.153.199',//测试站显示url
'43.226.153.199',//检测url
),

$site=array(
'辽宁精品C区[工单过白]',//站点名称
'103.45.187.19',//测试站显示url
'103.45.187.19',//检测url
),

$site=array(
'洛杉矶精品A区',//站点名称
'41.216.178.86',//测试站显示url
'41.216.178.86',//检测url
),

$site=array(
'美国精品A区',//站点名称
'45.39.54.229',//测试站显示url
'45.39.54.229',//检测url
),

$site=array(
'美国精品B区',//站点名称
'160.119.65.27',//测试站显示url
'160.119.65.27',//检测url
),

$site=array(
'美国精品C区',//站点名称
'84.39.186.146',//测试站显示url
'84.39.186.146',//检测url
),

$site=array(
'美国精品D区',//站点名称
'45.39.54.222',//测试站显示url
'45.39.54.222',//检测url
),

$site=array(
'日本精品A区',//站点名称
'45.195.152.134',//测试站显示url
'45.195.152.134',//检测url
),

$site=array(
'日本精品B区',//站点名称
'18.183.134.126',//测试站显示url
'18.183.134.126',//检测url
),

$site=array(
'深圳精品A区[阿里过白]',//站点名称
'47.113.178.173',//测试站显示url
'47.113.178.173',//检测url
),

$site=array(
'香港精品A区',//站点名称
'154.86.24.237',//测试站显示url
'154.86.24.237',//检测url
),

$site=array(
'香港精品B区',//站点名称
'154.222.31.210',//测试站显示url
'154.222.31.210',//检测url
),

$site=array(
'香港精品C区',//站点名称
'1.32.219.6',//测试站显示url
'1.32.219.6',//检测url
),

$site=array(
'香港精品D区',//站点名称
'164.155.65.124',//测试站显示url
'164.155.65.124',//检测url
),

$site=array(
'香港精品E区',//站点名称
'154.209.89.19',//测试站显示url
'154.209.89.19',//检测url
),

$site=array(
'香港精品F区',//站点名称
'14.192.48.67',//测试站显示url
'14.192.48.67',//检测url
),

$site=array(
'香港精品G区',//站点名称
'47.57.25.132',//测试站显示url
'47.57.25.132',//检测url
),

$site=array(
'香港精品H区',//站点名称
'164.155.65.35',//测试站显示url
'164.155.65.35',//检测url
),

$site=array(
'香港精品I区',//站点名称
'45.195.12.224',//测试站显示url
'45.195.12.224',//检测url
),

$site=array(
'香港精品J区',//站点名称
'23.235.133.197',//测试站显示url
'23.235.133.197',//检测url
),

$site=array(
'新加坡精品A区',//站点名称
'149.129.33.239',//测试站显示url
'149.129.33.239',//检测url
),

$site=array(
'宿迁精品A区[工单过白]',//站点名称
'43.248.189.56',//测试站显示url
'43.248.189.56',//检测url
),

$site=array(
'英国精品A区',//站点名称
'8.208.11.251',//测试站显示url
'8.208.11.251',//检测url
),

$site=array(
'张家口精品A区[阿里过白]',//站点名称
'39.99.171.130',//测试站显示url
'39.99.171.130',//检测url
),

$site=array(
'美国CDN精品A区[专用]',//站点名称
'us5.jdepd.cn',//测试站显示url
'us5.jdepd.cn',//检测url
),

$site=array(
'美国CDN精品B区[专用]',//站点名称
'23.225.194.74',//测试站显示url
'23.225.194.74',//检测url
),

$site=array(
'宁夏CDN精品A区[专用]',//站点名称
'103.251.240.203',//测试站显示url
'103.251.240.203',//检测url
),

$site=array(
'全球CDN精品A区[专用]',//站点名称
'62.216.74.111',//测试站显示url
'62.216.74.111',//检测url
),

$site=array(
'全球CDN精品B区[专用]',//站点名称
'1.32.219.117',//测试站显示url
'1.32.219.117',//检测url
),

$site=array(
'德国公益A区',//站点名称
'8.209.98.86',//测试站显示url
'8.209.98.86',//检测url
),

$site=array(
'法国公益A区',//站点名称
'178.33.20.229',//测试站显示url
'178.33.20.229',//检测url
),

$site=array(
'法国公益B区',//站点名称
'188.165.157.118',//测试站显示url
'188.165.157.118',//检测url
),

$site=array(
'美国公益A区',//站点名称
'91.189.185.137',//测试站显示url
'91.189.185.137',//检测url
),

$site=array(
'美国公益B区',//站点名称
'45.138.70.188',//测试站显示url
'45.138.70.188',//检测url
),

$site=array(
'美国公益C区',//站点名称
'84.39.185.174',//测试站显示url
'84.39.185.174',//检测url
),

$site=array(
'美国公益D区',//站点名称
'103.232.213.104',//测试站显示url
'103.232.213.104',//检测url
),

$site=array(
'香港公益A区',//站点名称
'47.52.205.15',//测试站显示url
'47.52.205.15',//检测url
),

$site=array(
'香港公益B区',//站点名称
'154.209.76.145',//测试站显示url
'154.209.76.145',//检测url
),

$site=array(
'香港公益C区',//站点名称
'164.155.74.228',//测试站显示url
'164.155.74.228',//检测url
),

);


foreach ($urls as $site) {
    $resCode=getCode($site[2]);

        if (strpos($resCode,'200')===false and strpos($resCode,'300')===false and strpos($resCode,'301')===false and strpos($resCode,'302')===false and strpos($resCode,'303')===false and strpos($resCode,'304')===false and strpos($resCode,'305')===false and strpos($resCode,'306')===false and strpos($resCode,'307')===false and strpos($resCode,'308')===false) {//状态码等于200 300 301 302 303 304 305 306 307 308跳过
?>          <tr>
           <td><?php echo $site[0]; ?></td>
           <td><a href='http://<?php echo $site[1]; ?>' target="_blank"><?php echo $site[1]; ?></a></td>
           <td><font color="red">节点异常,错误码:<?php echo $resCode; ?></font></td>
          </tr>
<?php
    }
    elseif ($resCode=='300' or $resCode=='301' or $resCode=='302' or $resCode=='303' or $resCode=='304' or $resCode=='305' or $resCode=='306' or $resCode=='307' or $resCode=='308') {//状态码等于301 
?>          <tr>
           <td><?php echo $site[0]; ?></td>
           <td><a href='http://<?php echo $site[1]; ?>' target="_blank"><?php echo $site[1]; ?></a></td>
           <td><font color="red">网站存在<?php echo $resCode; ?>重定向,检测失败</font></td>
          </tr>
<?php
    }else{
?>          <tr>
           <td><?php echo $site[0]; ?></td>
           <td><a href='http://<?php echo $site[1]; ?>' target="_blank"><?php echo $site[1]; ?></a></td>
           <td><font color="green">正常</font></td>
          </tr>
<?php    }
}



//返回页面状态码
function getCode($url)
{
    $ch = curl_init ();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_TIMEOUT, 200);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_NOBODY, true);//body就不要了，我们只需要head
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, FALSE);//不进行跳转
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    curl_exec($ch);
    $httpCode = curl_getinfo($ch,CURLINFO_HTTP_CODE);//取出返回的状态码
    curl_close($ch);//用完记得关闭
    return $httpCode;
}
?>
         </tbody> 
        </table> 
       </div> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div>
 </body>
 </html>