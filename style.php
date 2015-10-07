<style>



.fade.in {
  opacity: 1;
}

.collapse {
  position: relative;
  height: 0;
  overflow: hidden;
  -webkit-transition: height 0.35s ease;
     -moz-transition: height 0.35s ease;
       -o-transition: height 0.35s ease;
          transition: height 0.35s ease;
}

.collapse.in {
  height: auto;
}

.close {
  float: right;
  font-size: 20px;
  font-weight: bold;
  line-height: 20px;
  color: #000000;
  text-shadow: 0 1px 0 #ffffff;
  opacity: 0.2;
  filter: alpha(opacity=20);
}

.close:hover,
.close:focus {
  color: #000000;
  text-decoration: none;
  cursor: pointer;
  opacity: 0.4;
  filter: alpha(opacity=40);
}

/* Buttons */
.button {
	margin: 0 4px 0px 4px;
	display: inline-block;
	position: relative;
	text-decoration: none;
	cursor: pointer;
	padding: 4px 12px;
	border-radius:3px 3px 3px 3px;
	-moz-border-radius:3px 3px 3px 3px;
	font-weight:bold;
	text-shadow:none;
	font-size:13px;
	border-width:2px;
	border-style:solid;
	font-family:Ubuntu;
}

button.close {
  padding: 0;
  cursor: pointer;
  background: transparent;
  border: 0;
  -webkit-appearance: none;
}

input[type=submit].button, input[type=button].button {
	padding:2px 12px;
}

.button.white {
	box-shadow:0 0px 0 1px #000, 0 1px 0 1px #000000, inset 0 12px #F3F3F3;
	background-color:#D9D9D9;
	border-color:#D9D9D9;
}

.button.green {
	box-shadow:0 0px 0 1px #000, 0 1px 0 1px #000000, inset 0 12px #00A100;
	background-color:#009000;
	border-color:#009000;
	color:#fff;
}

.button.red {
	box-shadow:0 0px 0 1px #000, 0 1px 0 1px #000000, inset 0 12px #C11D00;
	background-color:#9B1700;
	border-color:#9B1700;
	color:#fff;
}

.button.thick.white {
	box-shadow:0 0px 0 2px #000, 0 1px 0 2px #000000, inset 0 12px #F3F3F3;
}

.button.thick.green {
	box-shadow:0 0px 0 2px #000, 0 1px 0 2px #000000, inset 0 12px #00A100;
}

.button.thick.red {
	box-shadow:0 0px 0 2px #000, 0 1px 0 2px #000000, inset 0 12px #C11D00;
}

.button, .button:hover, .button:active {
	-webkit-transition: background-color 0.2s, box-shadow linear 0.2s;
	-moz-transition: background-color 0.2s, box-shadow linear 0.2s;
	-o-transition: background-color 0.2s, box-shadow linear 0.2s;
	transition: background-color 0.2s, box-shadow linear 0.2s;
}

.button.white:hover {
	background-color:#EBEBEB;
	border-color:#EBEBEB;
}

.button.green:hover {
	background-color:#009C00;
	border-color:#009C00;
}

.button.red:hover {
	background-color:#AF1A00;
	border-color:#AF1A00;
}

.button.white:active {
	background-color:#A3A3A3;
	border-color:#A3A3A3;
	box-shadow:0 0px 0 1px #000, 0 1px 0 1px #000000, inset 0 12px #E1E1E1;
}

.button.green:active {
	background-color:#006C00;
	border-color:#006C00;
	box-shadow:0 0px 0 1px #000, 0 1px 0 1px #000000, inset 0 12px #009500;
}

.button.red:active {
	background-color:#7C1200;
	border-color:#7C1200;
	box-shadow:0 0px 0 1px #000, 0 1px 0 1px #000000, inset 0 12px #AA1600;
}

.button.white.thick:active {
	box-shadow:0 0px 0 2px #000, 0 1px 0 2px #000000, inset 0 12px #E1E1E1;
}

.button.green.thick:active {
	box-shadow:0 0px 0 2px #000, 0 1px 0 2px #000000, inset 0 12px #009500;
}

.button.red.thick:active {
	box-shadow:0 0px 0 2px #000, 0 1px 0 2px #000000, inset 0 12px #AA1600;
}


#userstats {
	border: 2px solid;
	border-radius: 4px;
	margin-top:10px; border:#c2c1c1 1px solid;
	width:590px;
	height:187px;
	background:url('christmas.png') 0% 70%;
}
#userstats img { 
	-webkit-filter: drop-shadow(0 1px 0 #FFF)
	drop-shadow(0 -1px 0 #FFF)
	drop-shadow(1px 0 0 #FFF)
	drop-shadow(-1px 0 0 #FFF)
	drop-shadow(0 0 10px rgba(000,000,000,000)) 
}
#enter-hotel {
    position: absolute;
    margin-top: 60px;
    margin-left: 390px;
}
#enter-hotel div a {
    float: left;
    background: transparent url(../images/enter_button.png) no-repeat -9px 0;
    height: 49px;
    text-align: center;
    line-height: 47px;
    padding: 0 16px 0 19px;
    font-size: 14px;
    text-decoration: none;
    color: #fff;
    position: relative;
}
#enter-hotel div b {
    float: left;
    background: transparent url(../images/enter_button.png) no-repeat 0 0;
    height: 49px;
    width: 9px;
}
#enter-hotel div:hover a {
    background-position: -9px -49px;
    text-decoration: none;
}
#enter-hotel div:hover b { background-position: 0 -49px }
.transparent {
	border-bottom-left-radius: 4px;
	border-bottom-right-radius: 4px;
	background-color: rgba(0,0,0,0.6);
	height: 30px;
	position: absolute;
	margin-top: 157px;
	width: 590px;
}
.items {
	float: left;
	font-size: 11px;
	color: #FFFFFF;
	padding: 10px 10px 8px 26px;
	margin: 0px 6px;
}
.credits {
	background: url(../images/userstats/icons/coins.png) no-repeat center left;
}
.pixels {
	background: url(../images/userstats/icons/duckets.png) no-repeat center left;
}
.shells {
	background: url(../images/userstats/icons/shells.png) no-repeat center left;
}


/* Buttons */
/* Notifications */
div#notification {
	position:fixed;
	margin:0 auto;
	left:0;
	right:0;
	width:500px;
	top:25px;
	z-index:9999;
	padding:10px;
	border-radius:3px 3px 3px 3px;
	-moz-border-radius:3px 3px 3px 3px;
	box-shadow:0 5px 20px rgba(0,0,0,0.4);
	color:#fff;
	text-shadow:0 1px 0 #000;
	cursor:move;
	display:none;
}

div#notification.green {
	background: -moz-linear-gradient(top,  rgba(36,183,102,1) 0%, rgba(11,102,0,0.8) 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(36,183,102,1)), color-stop(100%,rgba(11,102,0,0.8)));
	background: -webkit-linear-gradient(top,  rgba(36,183,102,1) 0%,rgba(11,102,0,0.8) 100%);
	background: -o-linear-gradient(top,  rgba(36,183,102,1) 0%,rgba(11,102,0,0.8) 100%);
	background: -ms-linear-gradient(top,  rgba(36,183,102,1) 0%,rgba(11,102,0,0.8) 100%);
	background: linear-gradient(to bottom,  rgba(36,183,102,1) 0%,rgba(11,102,0,0.8) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#24b766', endColorstr='#cc0b6600',GradientType=0 );
}

div#notification.red {
	background: #e82e2e;
	background: -moz-linear-gradient(top,  rgba(232,46,46,1) 0%, rgba(132,0,0,0.8) 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(232,46,46,1)), color-stop(100%,rgba(132,0,0,0.8)));
	background: -webkit-linear-gradient(top,  rgba(232,46,46,1) 0%,rgba(132,0,0,0.8) 100%);
	background: -o-linear-gradient(top,  rgba(232,46,46,1) 0%,rgba(132,0,0,0.8) 100%);
	background: -ms-linear-gradient(top,  rgba(232,46,46,1) 0%,rgba(132,0,0,0.8) 100%);
	background: linear-gradient(to bottom,  rgba(232,46,46,1) 0%,rgba(132,0,0,0.8) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e82e2e', endColorstr='#cc840000',GradientType=0 );
}

div#notification h1 {
	font-size:25px;
	line-height:25px;
}

div#notification p {
	font-size:13px;
	line-height:13px;
	margin-top:10px;
}
/* Notifications */
/* Footer */
.footer {
	margin:0 auto 15px auto;
	font-size:12px;
	text-align: center;
}
/* Footer */
/* Tables */
table {
  max-width: 100%;
  background-color: transparent;
  border-collapse: collapse;
  border-spacing: 0;
}

.table {
  width: 100%;
  margin-bottom: 20px;
}

.table th,
.table td {
  padding: 8px;
  text-align: left;
  vertical-align: top;
  border-top: 1px solid #dddddd;
}

.table th {
  font-weight: bold;
}

.table thead th {
  vertical-align: bottom;
}

.table caption + thead tr:first-child th,
.table caption + thead tr:first-child td,
.table colgroup + thead tr:first-child th,
.table colgroup + thead tr:first-child td,
.table thead:first-child tr:first-child th,
.table thead:first-child tr:first-child td {
  border-top: 0;
}

.table tbody + tbody {
  border-top: 2px solid #dddddd;
}

.table .table {
  background-color: #ffffff;
}

.table-condensed th,
.table-condensed td {
  padding: 4px 5px;
}

.table-bordered {
  border: 1px solid #dddddd;
  border-collapse: separate;
  *border-collapse: collapse;
  border-left: 0;
  -webkit-border-radius: 4px;
     -moz-border-radius: 4px;
          border-radius: 4px;
}

.table-bordered th,
.table-bordered td {
  border-left: 1px solid #dddddd;
}

.table-bordered caption + thead tr:first-child th,
.table-bordered caption + tbody tr:first-child th,
.table-bordered caption + tbody tr:first-child td,
.table-bordered colgroup + thead tr:first-child th,
.table-bordered colgroup + tbody tr:first-child th,
.table-bordered colgroup + tbody tr:first-child td,
.table-bordered thead:first-child tr:first-child th,
.table-bordered tbody:first-child tr:first-child th,
.table-bordered tbody:first-child tr:first-child td {
  border-top: 0;
}

.table-bordered thead:first-child tr:first-child > th:first-child,
.table-bordered tbody:first-child tr:first-child > td:first-child,
.table-bordered tbody:first-child tr:first-child > th:first-child {
  -webkit-border-top-left-radius: 4px;
          border-top-left-radius: 4px;
  -moz-border-radius-topleft: 4px;
}

.table-bordered thead:first-child tr:first-child > th:last-child,
.table-bordered tbody:first-child tr:first-child > td:last-child,
.table-bordered tbody:first-child tr:first-child > th:last-child {
  -webkit-border-top-right-radius: 4px;
          border-top-right-radius: 4px;
  -moz-border-radius-topright: 4px;
}

.table-bordered thead:last-child tr:last-child > th:first-child,
.table-bordered tbody:last-child tr:last-child > td:first-child,
.table-bordered tbody:last-child tr:last-child > th:first-child,
.table-bordered tfoot:last-child tr:last-child > td:first-child,
.table-bordered tfoot:last-child tr:last-child > th:first-child {
  -webkit-border-bottom-left-radius: 4px;
          border-bottom-left-radius: 4px;
  -moz-border-radius-bottomleft: 4px;
}

.table-bordered thead:last-child tr:last-child > th:last-child,
.table-bordered tbody:last-child tr:last-child > td:last-child,
.table-bordered tbody:last-child tr:last-child > th:last-child,
.table-bordered tfoot:last-child tr:last-child > td:last-child,
.table-bordered tfoot:last-child tr:last-child > th:last-child {
  -webkit-border-bottom-right-radius: 4px;
          border-bottom-right-radius: 4px;
  -moz-border-radius-bottomright: 4px;
}

.table-bordered tfoot + tbody:last-child tr:last-child td:first-child {
  -webkit-border-bottom-left-radius: 0;
          border-bottom-left-radius: 0;
  -moz-border-radius-bottomleft: 0;
}

.table-bordered tfoot + tbody:last-child tr:last-child td:last-child {
  -webkit-border-bottom-right-radius: 0;
          border-bottom-right-radius: 0;
  -moz-border-radius-bottomright: 0;
}

.table-bordered caption + thead tr:first-child th:first-child,
.table-bordered caption + tbody tr:first-child td:first-child,
.table-bordered colgroup + thead tr:first-child th:first-child,
.table-bordered colgroup + tbody tr:first-child td:first-child {
  -webkit-border-top-left-radius: 4px;
          border-top-left-radius: 4px;
  -moz-border-radius-topleft: 4px;
}

.table-bordered caption + thead tr:first-child th:last-child,
.table-bordered caption + tbody tr:first-child td:last-child,
.table-bordered colgroup + thead tr:first-child th:last-child,
.table-bordered colgroup + tbody tr:first-child td:last-child {
  -webkit-border-top-right-radius: 4px;
          border-top-right-radius: 4px;
  -moz-border-radius-topright: 4px;
}

.table-striped tbody > tr:nth-child(odd) > td,
.table-striped tbody > tr:nth-child(odd) > th {
  background-color: #F9F9F4;
}

.table-hover tbody tr:hover > td,
.table-hover tbody tr:hover > th {
  background-color: #f1f1f1;
}

table td[class*="span"],
table th[class*="span"],
.row-fluid table td[class*="span"],
.row-fluid table th[class*="span"] {
  display: table-cell;
  float: none;
  margin-left: 0;
}

.table tbody tr.success > td {
  background-color: #dff0d8;
}

.table tbody tr.error > td {
  background-color: #f2dede;
}

.table tbody tr.warning > td {
  background-color: #fcf8e3;
}

.table tbody tr.info > td {
  background-color: #d9edf7;
}

.table-hover tbody tr.success:hover > td {
  background-color: #d0e9c6;
}

.table-hover tbody tr.error:hover > td {
  background-color: #ebcccc;
}

.table-hover tbody tr.warning:hover > td {
  background-color: #faf2cc;
}

.table-hover tbody tr.info:hover > td {
  background-color: #c4e3f3;
}
/* Tables */

/* Icons */
[class^="icon-"],
[class*=" icon-"]{
  display: inline-block;
  width: 14px;
  height: 14px;
  margin-top: -2px;
  margin-left:5px;
  position:relative;
  top:2px;
  *margin-right: .3em;
  line-height: 14px;
  background-image: url("/web-gallery/images/glyphicons-halflings.png");
  background-position: 14px 14px;
  background-repeat: no-repeat;
}

.button.red > [class^="icon-"],
.button.green > [class^="icon-"],
.icon-white,



.icon-glass {
  background-position: 0      0;
}

.icon-music {
  background-position: -24px 0;
}

.icon-search {
  background-position: -48px 0;
}

.icon-envelope {
  background-position: -72px 0;
}

.icon-heart {
  background-position: -96px 0;
}

.icon-star {
  background-position: -120px 0;
}

.icon-star-empty {
  background-position: -144px 0;
}

.icon-user {
  background-position: -168px 0;
}

.icon-film {
  background-position: -192px 0;
}

.icon-th-large {
  background-position: -216px 0;
}

.icon-th {
  background-position: -240px 0;
}

.icon-th-list {
  background-position: -264px 0;
}

.icon-ok {
  background-position: -288px 0;
}

.icon-remove {
  background-position: -312px 0;
}

.icon-zoom-in {
  background-position: -336px 0;
}

.icon-zoom-out {
  background-position: -360px 0;
}

.icon-off {
  background-position: -384px 0;
}

.icon-signal {
  background-position: -408px 0;
}

.icon-cog {
  background-position: -432px 0;
}

.icon-trash {
  background-position: -456px 0;
}

.icon-home {
  background-position: 0 -24px;
}

.icon-file {
  background-position: -24px -24px;
}

.icon-time {
  background-position: -48px -24px;
}

.icon-road {
  background-position: -72px -24px;
}

.icon-download-alt {
  background-position: -96px -24px;
}

.icon-download {
  background-position: -120px -24px;
}

.icon-upload {
  background-position: -144px -24px;
}

.icon-inbox {
  background-position: -168px -24px;
}

.icon-play-circle {
  background-position: -192px -24px;
}

.icon-repeat {
  background-position: -216px -24px;
}

.icon-refresh {
  background-position: -240px -24px;
}

.icon-list-alt {
  background-position: -264px -24px;
}

.icon-lock {
  background-position: -287px -24px;
}

.icon-flag {
  background-position: -312px -24px;
}

.icon-headphones {
  background-position: -336px -24px;
}

.icon-volume-off {
  background-position: -360px -24px;
}

.icon-volume-down {
  background-position: -384px -24px;
}

.icon-volume-up {
  background-position: -408px -24px;
}

.icon-qrcode {
  background-position: -432px -24px;
}

.icon-barcode {
  background-position: -456px -24px;
}

.icon-tag {
  background-position: 0 -48px;
}

.icon-tags {
  background-position: -25px -48px;
}

.icon-book {
  background-position: -48px -48px;
}

.icon-bookmark {
  background-position: -72px -48px;
}

.icon-print {
  background-position: -96px -48px;
}

.icon-camera {
  background-position: -120px -48px;
}

.icon-font {
  background-position: -144px -48px;
}

.icon-bold {
  background-position: -167px -48px;
}

.icon-italic {
  background-position: -192px -48px;
}

.icon-text-height {
  background-position: -216px -48px;
}

.icon-text-width {
  background-position: -240px -48px;
}

.icon-align-left {
  background-position: -264px -48px;
}

.icon-align-center {
  background-position: -288px -48px;
}

.icon-align-right {
  background-position: -312px -48px;
}

.icon-align-justify {
  background-position: -336px -48px;
}

.icon-list {
  background-position: -360px -48px;
}

.icon-indent-left {
  background-position: -384px -48px;
}

.icon-indent-right {
  background-position: -408px -48px;
}

.icon-facetime-video {
  background-position: -432px -48px;
}

.icon-picture {
  background-position: -456px -48px;
}

.icon-pencil {
  background-position: 0 -72px;
}

.icon-map-marker {
  background-position: -24px -72px;
}

.icon-adjust {
  background-position: -48px -72px;
}

.icon-tint {
  background-position: -72px -72px;
}

.icon-edit {
  background-position: -96px -72px;
}

.icon-share {
  background-position: -120px -72px;
}

.icon-check {
  background-position: -144px -72px;
}

.icon-move {
  background-position: -168px -72px;
}

.icon-step-backward {
  background-position: -192px -72px;
}

.icon-fast-backward {
  background-position: -216px -72px;
}

.icon-backward {
  background-position: -240px -72px;
}

.icon-play {
  background-position: -264px -72px;
}

.icon-pause {
  background-position: -288px -72px;
}

.icon-stop {
  background-position: -312px -72px;
}

.icon-forward {
  background-position: -336px -72px;
}

.icon-fast-forward {
  background-position: -360px -72px;
}

.icon-step-forward {
  background-position: -384px -72px;
}

.icon-eject {
  background-position: -408px -72px;
}

.icon-chevron-left {
  background-position: -432px -72px;
}

.icon-chevron-right {
  background-position: -456px -72px;
}

.icon-plus-sign {
  background-position: 0 -96px;
}

.icon-minus-sign {
  background-position: -24px -96px;
}

.icon-remove-sign {
  background-position: -48px -96px;
}

.icon-ok-sign {
  background-position: -72px -96px;
}

.icon-question-sign {
  background-position: -96px -96px;
}

.icon-info-sign {
  background-position: -120px -96px;
}

.icon-screenshot {
  background-position: -144px -96px;
}

.icon-remove-circle {
  background-position: -168px -96px;
}

.icon-ok-circle {
  background-position: -192px -96px;
}

.icon-ban-circle {
  background-position: -216px -96px;
}

.icon-arrow-left {
  background-position: -240px -96px;
}

.icon-arrow-right {
  background-position: -264px -96px;
}

.icon-arrow-up {
  background-position: -289px -96px;
}

.icon-arrow-down {
  background-position: -312px -96px;
}

.icon-share-alt {
  background-position: -336px -96px;
}

.icon-resize-full {
  background-position: -360px -96px;
}

.icon-resize-small {
  background-position: -384px -96px;
}

.icon-plus {
  background-position: -408px -96px;
}

.icon-minus {
  background-position: -433px -96px;
}

.icon-asterisk {
  background-position: -456px -96px;
}

.icon-exclamation-sign {
  background-position: 0 -120px;
}

.icon-gift {
  background-position: -24px -120px;
}

.icon-leaf {
  background-position: -48px -120px;
}

.icon-fire {
  background-position: -72px -120px;
}

.icon-eye-open {
  background-position: -96px -120px;
}

.icon-eye-close {
  background-position: -120px -120px;
}

.icon-warning-sign {
  background-position: -144px -120px;
}

.icon-plane {
  background-position: -168px -120px;
}

.icon-calendar {
  background-position: -192px -120px;
}

.icon-random {
  width: 16px;
  background-position: -216px -120px;
}

.icon-comment {
  background-position: -240px -120px;
}

.icon-magnet {
  background-position: -264px -120px;
}

.icon-chevron-up {
  background-position: -288px -120px;
}

.icon-chevron-down {
  background-position: -313px -119px;
}

.icon-retweet {
  background-position: -336px -120px;
}

.icon-shopping-cart {
  background-position: -360px -120px;
}

.icon-folder-close {
  width: 16px;
  background-position: -384px -120px;
}

.icon-folder-open {
  width: 16px;
  background-position: -408px -120px;
}

.icon-resize-vertical {
  background-position: -432px -119px;
}

.icon-resize-horizontal {
  background-position: -456px -118px;
}

.icon-hdd {
  background-position: 0 -144px;
}

.icon-bullhorn {
  background-position: -24px -144px;
}

.icon-bell {
  background-position: -48px -144px;
}

.icon-certificate {
  background-position: -72px -144px;
}

.icon-thumbs-up {
  background-position: -96px -144px;
}

.icon-thumbs-down {
  background-position: -120px -144px;
}

.icon-hand-right {
  background-position: -144px -144px;
}

.icon-hand-left {
  background-position: -168px -144px;
}

.icon-hand-up {
  background-position: -192px -144px;
}

.icon-hand-down {
  background-position: -216px -144px;
}

.icon-circle-arrow-right {
  background-position: -240px -144px;
}

.icon-circle-arrow-left {
  background-position: -264px -144px;
}

.icon-circle-arrow-up {
  background-position: -288px -144px;
}

.icon-circle-arrow-down {
  background-position: -312px -144px;
}

.icon-globe {
  background-position: -336px -144px;
}

.icon-wrench {
  background-position: -360px -144px;
}

.icon-tasks {
  background-position: -384px -144px;
}

.icon-filter {
  background-position: -408px -144px;
}

.icon-briefcase {
  background-position: -432px -144px;
}

.icon-fullscreen {
  background-position: -456px -144px;
}
/* Icons */
b {
	font-weight:bold;
}

div#overlay {
	background-color:rgba(0,0,0,0.5);
	position:fixed;
	width:100%;
	height:100%;
	display:none;
	z-index:9999;
	top:0;
	bottom:0;
	left:0;
	right:0;
	overflow:auto;
}

div#overlay_progress {
	position:fixed;
	width:150px;
	height:150px;
	top:0 !important;
	bottom:0 !important;
	left:0 !important;
	right:0 !important;
	margin:auto;
	z-index:10000;
	color:#fff;
	text-shadow:0 1px 0 #000;
}

div#habblet.dark div.tile {
	background:#24211C;
	box-shadow:inset -1px -1px 0 #000, inset 0 -40px 0 #000;
	color:#fff;
}

div.tile {
	width:110px;
	height:100px;
	border:1px solid #C2C1C1;
	background:#ffffff;
	border-radius:3px 3px 3px 3px;
	-moz-border-radius:3px 3px 3px 3px;
	box-shadow:inset -1px -1px 0 #B5B5B5, inset 0 -40px 0 #F0F0F0;
	display:inline-block;
	margin:0 3px 5px 0;
	color:#000;
	text-shadow:0 1px 0 #fff;
}

div.tile.badge {
	cursor:pointer;
	box-shadow:inset -1px -1px 0 #B5B5B5, inset 0 -50px 0 #F0F0F0;
}

div.tile div.badge {
	width:31px;
	height:31px;
	background:url('/c_images/album1584/ADMP.gif') no-repeat;
	position:absolute;
	margin:45px 0 0 10px;
}

div.tile:hover {
	box-shadow:0px 2px 10px rgba(0,0,0,0.4), inset -1px -1px 0 #B5B5B5, inset 0 -40px 0 #F0F0F0;
}

div.tile.badge:hover {
	box-shadow:0px 2px 10px rgba(0,0,0,0.4), inset -1px -1px 0 #B5B5B5, inset 0 -50px 0 #F0F0F0;
}

div.tile div.avatar {
	background-repeat:no-repeat;
	background-position:20px -12px;
	width:110px;
	height:60px;
}

div.tile.badge div.badges {
	background-repeat:no-repeat;
	background-position:center center;
	width:50px;
	height:50px;
	margin:0 auto;
}

div.tile div.username, div.tile.badge div.info {
	width:110px;
	height:40px;
	line-height:40px;
	text-align:center;
	font-weight:bold;
	font-size:16px;
	overflow:hidden;
}

div.tile.badge div.info {
	word-wrap:break-word;
	float:left;
	line-height:16px;
	height:45px;
	margin-top:5px;
}

div#habblet.dark div.tile div.username a, div#habblet.dark div.tile.badge div.info a {
	color:#fff;
}

div.tile div.hover-container {
	position:absolute;
	margin:20px 0 0 110px;
	width:250px;
	height:60px;
	display:none;
	z-index:9999;
	color:#fff;
	text-shadow:0 1px 0 #000;
}

div.tile div.hover-container div.inner div.top {
	height:20px;
	width:230px;
	padding:5px;
	font-weight:bold;
	font-size:12px;
	line-height:20px;
	text-align:center;
	overflow:hidden;
}

div.tile div.hover-container div.inner div.bottom {
	font-family:Ubuntu;
	padding:5px;
	text-align:center;
}

div.tile div.hover-container div.inner {
	background:#808080;
	border-radius:3px 3px 3px 3px;
	-moz-border-radius:3px 3px 3px 3px;
	height:60px;
	width:240px;
	float:right;
	box-shadow:inset 0 0 0 5px #767676, inset 0 -30px 0 #767676, 3px 0 10px rgba(0,0,0,0.3);
}

div.tile div.hover-container div.arrow {
	width: 0; 
	height: 0; 
	border-top: 10px solid transparent;
	border-bottom: 10px solid transparent; 
	border-right:10px solid #767676;
	float:left;
	margin-top:20px;
}

	
	/* News Slider */
	#campaigns { 
		overflow: hidden;
		zoom: 1;
		position: absolute;
		top:0;
		left:0;
		z-index:5;
		box-shadow:inset 0 0 25px #000;
		background-size:100%;
	}
	
	.cs-buttons {
		font-size: 0px;
		padding: 10px;
		float: left;
	}

	.cs-buttons a {
		margin-left: 5px;
		height: 10px;
		width: 10px;
		float: left;
		border: 1px solid #B8C4CF;
		color: #B8C4CF;
		text-indent: -1000px;
	}

	.cs-active {
		background-color: #B8C4CF;
		color: #FFFFFF;
	}

	.cs-title {
		width: 600px;
		color: #FFFFFF;
		text-shadow: 0 1px 2px #000;
		font-size: 16px;
		line-height: 20px;
		font-weight:500;
		text-align: right;
		padding: 15px 15px 0 0;
		position: absolute;
		top: 0;
		right: 0;
		z-index: 5;
	}

	.cs-title b {
		font-weight:500;
		font-size: 30px;
		line-height: 40px;
	}

	.cs-prev, 
		.cs-next {
		background-color: #000000;
		color: #FFFFFF;
		padding: 0px 10px;
		border-radius: 0 0 5px 5px;
		-moz-border-radius: 0 0 5px 5px;
		line-height: 30px;
		background-color: rgba(0,0,0,0.2);
	}
	
	.cs-campaigns {
		background-size:100%;
	}
	/* News Slider */


div#column1 {
	width:680px;
	float:left;
}

div#column2 {
	width:310px;
	float:left;
}

div#column3 {
	width:985px;
	clear:both;
}

div#habblet {
	border:1px solid #ddd;
	margin:0 8px 10px 0;
	color:#000;
	border-radius:3px 3px 3px 3px;
	-moz-border-radius:3px 3px 3px 3px;
	background:#F8F8F8;
}

div#habblet.dark {
	background:#333029;
	color:#fff;
	box-shadow:0 1px 0 #ddd, inset 0 0 0 2px #000;
}

div#habblet h2.title {
	padding: 7px 15px;
	font-size: 17px;
	position: relative;
	line-height: 21px;
	height: 20px;
	text-align: left;
	color:#000;
	font-family:Ubuntu;
	font-weight:500;
	border-radius:3px 3px 0 0;
	-moz-border-radius:3px 3px 0 0;
	background:#FFFFFF;
	border-bottom-width: 1px;
	border-bottom-style: solid;
}

div#habblet.green h2.title {
	border-bottom-color: #4ab501;
	color:#4ab501;
}

div#habblet.red h2.title {
	border-bottom-color: #c73c3c;
	color:#c73c3c;
}

div#habblet.orange h2.title {
	border-bottom-color: #f66200;
	color:#f66200;
}

div#habblet.blue h2.title {
	border-bottom-color: #2767a7;
	color:#2767a7;
}

div#habblet.yellow h2.title {
	border-bottom-color: #FAFF00;
	color:#FAFF00;
}

div#habblet.pink h2.title {
	border-bottom-color: #D600AE;
	color:#D600AE;
}

div#habblet.purple h2.title {
	border-bottom-color: #8D00A0;
	color:#8D00A0;
}

div#habblet.black h2.title {
	border-bottom-color: #000;
	color:#000;
}

div#habblet.dark-purple h2.title {
	border-bottom-color: #77197F;
	color:#77197F;
}

div#habblet.pixels {
	background:#8DE0FF url('/web-gallery/v2/images/surfer/pixelpage_surferdude_crop.gif') no-repeat;
	background-position:bottom right;
	min-height:377px;
}

div#habblet.pixels h2.title {
	background:#0046A8;
}

div#habblet.coins {
	background:#FFDB8D url('/web-gallery/v2/images/surfer/creditpage_surferdude_crop.gif') no-repeat;
	background-position:bottom right;
	min-height:377px;
}

div#habblet.coins h2.title {
	background:#A1611C;
}

div#habblet.rainbow h2.title {
	filter:none;
	background: #ce0600;
	background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIxMDAlIiB5Mj0iMTAwJSI+CiAgICA8c3RvcCBvZmZzZXQ9IjAlIiBzdG9wLWNvbG9yPSIjY2UwNjAwIiBzdG9wLW9wYWNpdHk9IjEiLz4KICAgIDxzdG9wIG9mZnNldD0iMTglIiBzdG9wLWNvbG9yPSIjZTJhZDAwIiBzdG9wLW9wYWNpdHk9IjEiLz4KICAgIDxzdG9wIG9mZnNldD0iMzYlIiBzdG9wLWNvbG9yPSIjZmZmNjAwIiBzdG9wLW9wYWNpdHk9IjEiLz4KICAgIDxzdG9wIG9mZnNldD0iNTclIiBzdG9wLWNvbG9yPSIjMDBjOTI0IiBzdG9wLW9wYWNpdHk9IjEiLz4KICAgIDxzdG9wIG9mZnNldD0iNzglIiBzdG9wLWNvbG9yPSIjMDAxMmJhIiBzdG9wLW9wYWNpdHk9IjEiLz4KICAgIDxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iIzU0MDA2ZCIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgPC9saW5lYXJHcmFkaWVudD4KICA8cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMSIgaGVpZ2h0PSIxIiBmaWxsPSJ1cmwoI2dyYWQtdWNnZy1nZW5lcmF0ZWQpIiAvPgo8L3N2Zz4=);
	background: -moz-linear-gradient(-45deg,  #ce0600 0%, #e2ad00 18%, #fff600 36%, #00c924 57%, #0012ba 78%, #54006d 100%);
	background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,#ce0600), color-stop(18%,#e2ad00), color-stop(36%,#fff600), color-stop(57%,#00c924), color-stop(78%,#0012ba), color-stop(100%,#54006d));
	background: -webkit-linear-gradient(-45deg,  #ce0600 0%,#e2ad00 18%,#fff600 36%,#00c924 57%,#0012ba 78%,#54006d 100%);
	background: -o-linear-gradient(-45deg,  #ce0600 0%,#e2ad00 18%,#fff600 36%,#00c924 57%,#0012ba 78%,#54006d 100%);
	background: -ms-linear-gradient(-45deg,  #ce0600 0%,#e2ad00 18%,#fff600 36%,#00c924 57%,#0012ba 78%,#54006d 100%);
	background: linear-gradient(135deg,  #ce0600 0%,#e2ad00 18%,#fff600 36%,#00c924 57%,#0012ba 78%,#54006d 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ce0600', endColorstr='#54006d',GradientType=1 );
	-webkit-background-clip: text;
	-webkit-text-fill-color: transparent;
}


div#habblet.white h2.title {
	color:#000;
}

div#habblet.brown {
	background:#747474;
	color:#fff;
}

div#habblet.brown h2.title {
	color:#fff;
	background:#000;
	border-bottom-color: #000;
}

div#habblet.lightbrown h2.title {
	color:#CF9C44;
}

div#habblet.red ul li:hover {
	background-color:#FFC4C4 !important;
}

div#habblet.blue ul li:hover {
	background-color:#C4D7FF !important;
}

div#habblet.green ul li:hover {
	background-color:#D2FFC4 !important;
}

div#habblet.orange ul li:hover {
	background-color:#FCDDC2 !important;
}

div#habblet.yellow ul li:hover {
	background-color:#F6F7BE !important;
}

div#habblet.pink ul li:hover {
	background-color:#FFC4F3 !important;
}

div#habblet.purple ul li:hover {
	background-color:#DAC0F9 !important;
}

div#habblet.black ul li:hover {
	background-color:#E0E0E0 !important;
}

div#habblet.dark-purple ul li:hover {
	background-color:#CAB0E5 !important;
}

div#habblet.light-brown ul li:hover {
	background:#CF9C44 !important;
}

div#habblet.rainbow ul li:hover {
background: rgb(255,178,178) !important;
background: -moz-linear-gradient(-45deg,  rgba(255,178,178,1) 0%, rgba(255,228,178,1) 15%, rgba(251,255,178,1) 29%, rgba(183,255,178,1) 44%, rgba(183,178,255,1) 61%, rgba(220,178,255,1) 82%, rgba(135,135,135,1) 100%) !important;
background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,rgba(255,178,178,1)), color-stop(15%,rgba(255,228,178,1)), color-stop(29%,rgba(251,255,178,1)), color-stop(44%,rgba(183,255,178,1)), color-stop(61%,rgba(183,178,255,1)), color-stop(82%,rgba(220,178,255,1)), color-stop(100%,rgba(135,135,135,1))) !important;
background: -webkit-linear-gradient(-45deg,  rgba(255,178,178,1) 0%,rgba(255,228,178,1) 15%,rgba(251,255,178,1) 29%,rgba(183,255,178,1) 44%,rgba(183,178,255,1) 61%,rgba(220,178,255,1) 82%,rgba(135,135,135,1) 100%) !important;
background: -o-linear-gradient(-45deg,  rgba(255,178,178,1) 0%,rgba(255,228,178,1) 15%,rgba(251,255,178,1) 29%,rgba(183,255,178,1) 44%,rgba(183,178,255,1) 61%,rgba(220,178,255,1) 82%,rgba(135,135,135,1) 100%) !important;
background: -ms-linear-gradient(-45deg,  rgba(255,178,178,1) 0%,rgba(255,228,178,1) 15%,rgba(251,255,178,1) 29%,rgba(183,255,178,1) 44%,rgba(183,178,255,1) 61%,rgba(220,178,255,1) 82%,rgba(135,135,135,1) 100%) !important;
background: linear-gradient(135deg,  rgba(255,178,178,1) 0%,rgba(255,228,178,1) 15%,rgba(251,255,178,1) 29%,rgba(183,255,178,1) 44%,rgba(183,178,255,1) 61%,rgba(220,178,255,1) 82%,rgba(135,135,135,1) 100%) !important;
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffb2b2', endColorstr='#878787',GradientType=1 ) !important;
}

div#habblet.white ul li:hover {
	background-color:#FFFFFF !important;
}

div.rounded-container h2.title {
	color:#fff;
	font-family:arial, sans-serif;
	padding: 4px 10px;
	font-size: 12px;
	position: relative;
	line-height: 17px;
	height:17px;
	text-align:left;
	border-radius:3px;
	text-transform:uppercase;
}

div.rounded-container {
	background: #f29730;
	border-radius:3px;
}

div#habblet .box-content {
	padding: 8px 15px;
	clear: both;
}

div#habblet.lightblue {
	background:#EDFAFF;
}

div#habblet.lightblue h2.title {
	color:#51A5D5;
}
	

.tabbable {
  *zoom: 1;
}

.tabbable:before,
.tabbable:after {
  display: table;
  line-height: 0;
  content: "";
}

.tabbable:after {
  clear: both;
}

.tab-content {
  overflow: auto;
}



a.button.red + .dropdown-menu li > a:hover, a.button.red + .dropdown-menu li > a:focus{
	background: rgb(193,29,0);
	background: -moz-linear-gradient(top,  rgba(193,29,0,1) 0%, rgba(155,23,0,1) 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(193,29,0,1)), color-stop(100%,rgba(155,23,0,1)));
	background: -webkit-linear-gradient(top,  rgba(193,29,0,1) 0%,rgba(155,23,0,1) 100%);
	background: -o-linear-gradient(top,  rgba(193,29,0,1) 0%,rgba(155,23,0,1) 100%);
	background: -ms-linear-gradient(top,  rgba(193,29,0,1) 0%,rgba(155,23,0,1) 100%);
	background: linear-gradient(to bottom,  rgba(193,29,0,1) 0%,rgba(155,23,0,1) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#c11d00', endColorstr='#9b1700',GradientType=0 );
	text-shadow:0 1px 0 #000;
}

a.button.red + .dropdown-menu li > a:active {
	background: rgb(150,20,0);
	background: -moz-linear-gradient(top,  rgba(150,20,0,1) 0%, rgba(117,15,0,1) 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(150,20,0,1)), color-stop(100%,rgba(117,15,0,1)));
	background: -webkit-linear-gradient(top,  rgba(150,20,0,1) 0%,rgba(117,15,0,1) 100%);
	background: -o-linear-gradient(top,  rgba(150,20,0,1) 0%,rgba(117,15,0,1) 100%);
	background: -ms-linear-gradient(top,  rgba(150,20,0,1) 0%,rgba(117,15,0,1) 100%);
	background: linear-gradient(to bottom,  rgba(150,20,0,1) 0%,rgba(117,15,0,1) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#961400', endColorstr='#750f00',GradientType=0 );
}

a.button.green + .dropdown-menu li > a:hover, a.button.green + .dropdown-menu li > a:focus{
	background: rgb(0,161,0);
	background: -moz-linear-gradient(top,  rgba(0,161,0,1) 0%, rgba(0,144,0,1) 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,161,0,1)), color-stop(100%,rgba(0,144,0,1)));
	background: -webkit-linear-gradient(top,  rgba(0,161,0,1) 0%,rgba(0,144,0,1) 100%);
	background: -o-linear-gradient(top,  rgba(0,161,0,1) 0%,rgba(0,144,0,1) 100%);
	background: -ms-linear-gradient(top,  rgba(0,161,0,1) 0%,rgba(0,144,0,1) 100%);
	background: linear-gradient(to bottom,  rgba(0,161,0,1) 0%,rgba(0,144,0,1) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00a100', endColorstr='#009000',GradientType=0 );
	text-shadow:0 1px 0 #000;
}

a.button.green + .dropdown-menu li > a:active {
	background: rgb(2,130,0);
	background: -moz-linear-gradient(top,  rgba(2,130,0,1) 0%, rgba(11,112,0,1) 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(2,130,0,1)), color-stop(100%,rgba(11,112,0,1)));
	background: -webkit-linear-gradient(top,  rgba(2,130,0,1) 0%,rgba(11,112,0,1) 100%);
	background: -o-linear-gradient(top,  rgba(2,130,0,1) 0%,rgba(11,112,0,1) 100%);
	background: -ms-linear-gradient(top,  rgba(2,130,0,1) 0%,rgba(11,112,0,1) 100%);
	background: linear-gradient(to bottom,  rgba(2,130,0,1) 0%,rgba(11,112,0,1) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#028200', endColorstr='#0b7000',GradientType=0 );
}

.dropdown-menu > .active > a,
.dropdown-menu > .active > a:hover,
.dropdown-menu > .active > a:focus {
  color: #ffffff;
  text-decoration: none;
  background-color: #0081c2;
  background-image: -moz-linear-gradient(top, #0088cc, #0077b3);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#0088cc), to(#0077b3));
  background-image: -webkit-linear-gradient(top, #0088cc, #0077b3);
  background-image: -o-linear-gradient(top, #0088cc, #0077b3);
  background-image: linear-gradient(to bottom, #0088cc, #0077b3);
  background-repeat: repeat-x;
  outline: 0;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff0088cc', endColorstr='#ff0077b3', GradientType=0);
}

.dropdown-menu > .disabled > a,
.dropdown-menu > .disabled > a:hover,
.dropdown-menu > .disabled > a:focus {
  color: #999999;
}

.dropdown-menu > .disabled > a:hover,
.dropdown-menu > .disabled > a:focus {
  text-decoration: none;
  cursor: default;
  background-color: transparent;
  background-image: none;
  filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
}

.open {
  *z-index: 1000;
}

.open > .dropdown-menu {
  display: block;
}

.dropdown-backdrop {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 990;
}

.pull-right > .dropdown-menu {
  right: 0;
  left: auto;
}

.dropup .caret,
.navbar-fixed-bottom .dropdown .caret {
  border-top: 0;
  border-bottom: 4px solid #000000;
  content: "";
}

.dropup .dropdown-menu,
.navbar-fixed-bottom .dropdown .dropdown-menu {
  top: auto;
  bottom: 100%;
  margin-bottom: 1px;
}

.dropdown-submenu {
  position: relative;
}

.dropdown-submenu > .dropdown-menu {
  top: 0;
  left: 100%;
  margin-top: -6px;
  margin-left: -1px;
  -webkit-border-radius: 0 6px 6px 6px;
     -moz-border-radius: 0 6px 6px 6px;
          border-radius: 0 6px 6px 6px;
}

.dropdown-submenu:hover > .dropdown-menu {
  display: block;
}

.dropup .dropdown-submenu > .dropdown-menu {
  top: auto;
  bottom: 0;
  margin-top: 0;
  margin-bottom: -2px;
  -webkit-border-radius: 5px 5px 5px 0;
     -moz-border-radius: 5px 5px 5px 0;
          border-radius: 5px 5px 5px 0;
}

.dropdown-submenu > a:after {
  display: block;
  float: right;
  width: 0;
  height: 0;
  margin-top: 5px;
  margin-right: -10px;
  border-color: transparent;
  border-left-color: #cccccc;
  border-style: solid;
  border-width: 5px 0 5px 5px;
  content: " ";
}

.dropdown-submenu:hover > a:after {
  border-left-color: #ffffff;
}

.dropdown-submenu.pull-left {
  float: none;
}

.dropdown-submenu.pull-left > .dropdown-menu {
  left: -100%;
  margin-left: 10px;
  -webkit-border-radius: 6px 0 6px 6px;
     -moz-border-radius: 6px 0 6px 6px;
          border-radius: 6px 0 6px 6px;
}

.dropdown .dropdown-menu .nav-header {
  padding-right: 20px;
  padding-left: 20px;
}

.typeahead {
  z-index: 1051;
  margin-top: 2px;
  -webkit-border-radius: 4px;
     -moz-border-radius: 4px;
          border-radius: 4px;
}
/* Dropdown Menus */

/* Modal Box */ 
.modal-backdrop {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1040;
  background-color: #000000;
}

.modal-backdrop.fade {
  opacity: 0;
}

.modal-backdrop,
.modal-backdrop.fade.in {
  opacity: 0.4;
  filter: alpha(opacity=40);
}

.modal {
  position: fixed;
  top: 10%;
  left: 50%;
  z-index: 1050;
  width: 600px;
  margin-left: -320px;
  background-color: #ffffff;
  border: 1px solid #999;
  border: 1px solid rgba(0, 0, 0, 0.3);
  *border: 1px solid #999;
  -webkit-border-radius: 2px;
     -moz-border-radius: 2px;
          border-radius: 2px;
  outline: none;
  -webkit-box-shadow: 0 3px 20px rgba(0, 0, 0, 0.3);
     -moz-box-shadow: 0 3px 20px rgba(0, 0, 0, 0.3);
          box-shadow: 0 3px 20px rgba(0, 0, 0, 0.3);
  -webkit-background-clip: padding-box;
     -moz-background-clip: padding-box;
          background-clip: padding-box;
}

.modal.fade {
  top: -25%;
  -webkit-transition: opacity 0.3s linear, top 0.3s ease-out;
     -moz-transition: opacity 0.3s linear, top 0.3s ease-out;
       -o-transition: opacity 0.3s linear, top 0.3s ease-out;
          transition: opacity 0.3s linear, top 0.3s ease-out;
}

.modal.fade.in {
  top: 10%;
}

.modal-header {
  padding: 12px 15px;
}

.modal-header .close {
  margin-top: 0px;
}

.modal-header h3 {
  margin: 0;
  line-height: 30px;
}

.modal-body {
  position: relative;
  max-height: 400px;
  padding: 15px;
  overflow-y: auto;
}

.modal-form {
  margin-bottom: 0;
}

.modal-footer {
  padding: 14px 15px 15px;
  margin-bottom: 0;
  text-align: right;
  background-color: #F8F8F8;
  border-top: 1px solid #ddd;
  -webkit-border-radius: 0 0 2px 2px;
     -moz-border-radius: 0 0 2px 2px;
          border-radius: 0 0 2px 2px;
  *zoom: 1;
  -webkit-box-shadow: inset 0 1px 0 #ffffff;
     -moz-box-shadow: inset 0 1px 0 #ffffff;
          box-shadow: inset 0 1px 0 #ffffff;
}

.modal-footer:before,
.modal-footer:after {
  display: table;
  line-height: 0;
  content: "";
}

.modal-footer:after {
  clear: both;
}

.modal-footer .btn + .btn {
  margin-bottom: 0;
  margin-left: 5px;
}

.modal-footer .btn-group .btn + .btn {
  margin-left: -1px;
}

.modal-footer .btn-block + .btn-block {
  margin-left: 0;
}
/* Modal Box */

/* Tooltip */
.tooltip {
  position: absolute;
  z-index: 1030;
  display: block;
  font-size: 11px;
  line-height: 1.4;
  opacity: 0;
  filter: alpha(opacity=0);
  visibility: visible;
}

.tooltip.in {
  opacity: 0.8;
  filter: alpha(opacity=80);
}

.tooltip.top {
  padding: 5px 0;
  margin-top: -3px;
}

.tooltip.right {
  padding: 0 5px;
  margin-left: 3px;
}

.tooltip.bottom {
  padding: 5px 0;
  margin-top: 3px;
}

.tooltip.left {
  padding: 0 5px;
  margin-left: -3px;
}

.tooltip-inner {
  max-width: 250px;
  padding: 8px;
  color: #ffffff;
  text-align: center;
  text-decoration: none;
  background-color: #000000;
  -webkit-border-radius: 4px;
     -moz-border-radius: 4px;
          border-radius: 4px;
  font-size:12px;
  font-family:Ubuntu;
  font-weight:500;
}

.tooltip-arrow {
  position: absolute;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
}

.tooltip.top .tooltip-arrow {
  bottom: 0;
  left: 50%;
  margin-left: -5px;
  border-top-color: #000000;
  border-width: 5px 5px 0;
}

.tooltip.right .tooltip-arrow {
  top: 50%;
  left: 0;
  margin-top: -5px;
  border-right-color: #000000;
  border-width: 5px 5px 5px 0;
}

.tooltip.left .tooltip-arrow {
  top: 50%;
  right: 0;
  margin-top: -5px;
  border-left-color: #000000;
  border-width: 5px 0 5px 5px;
}

.tooltip.bottom .tooltip-arrow {
  top: 0;
  left: 50%;
  margin-left: -5px;
  border-bottom-color: #000000;
  border-width: 0 5px 5px;
}
/* Tooltip */

/* Popover */
.popover {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1010;
  display: none;
  max-width: 276px;
  padding: 1px;
  text-align: left;
  white-space: normal;
  background-color: #ffffff;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, 0.2);
  -webkit-border-radius: 6px;
     -moz-border-radius: 6px;
          border-radius: 6px;
  -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
     -moz-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
          box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  -webkit-background-clip: padding-box;
     -moz-background-clip: padding;
          background-clip: padding-box;
}

.popover.top {
  margin-top: -10px;
}

.popover.right {
  margin-left: 10px;
}

.popover.bottom {
  margin-top: 10px;
}

.popover.left {
  margin-left: -10px;
}

.popover-title {
  padding: 8px 14px;
  margin: 0;
  font-size: 14px;
  font-weight: normal;
  line-height: 18px;
  background-color: #f7f7f7;
  border-bottom: 1px solid #ebebeb;
  -webkit-border-radius: 5px 5px 0 0;
     -moz-border-radius: 5px 5px 0 0;
          border-radius: 5px 5px 0 0;
}

.popover-title:empty {
  display: none;
}

.popover-content {
  padding: 9px 14px;
}

.popover .arrow,
.popover .arrow:after {
  position: absolute;
  display: block;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
}

.popover .arrow {
  border-width: 11px;
}

.popover .arrow:after {
  border-width: 10px;
  content: "";
}

.popover.top .arrow {
  bottom: -11px;
  left: 50%;
  margin-left: -11px;
  border-top-color: #999;
  border-top-color: rgba(0, 0, 0, 0.25);
  border-bottom-width: 0;
}

.popover.top .arrow:after {
  bottom: 1px;
  margin-left: -10px;
  border-top-color: #ffffff;
  border-bottom-width: 0;
}

.popover.right .arrow {
  top: 50%;
  left: -11px;
  margin-top: -11px;
  border-right-color: #999;
  border-right-color: rgba(0, 0, 0, 0.25);
  border-left-width: 0;
}

.popover.right .arrow:after {
  bottom: -10px;
  left: 1px;
  border-right-color: #ffffff;
  border-left-width: 0;
}

.popover.bottom .arrow {
  top: -11px;
  left: 50%;
  margin-left: -11px;
  border-bottom-color: #999;
  border-bottom-color: rgba(0, 0, 0, 0.25);
  border-top-width: 0;
}

.popover.bottom .arrow:after {
  top: 1px;
  margin-left: -10px;
  border-bottom-color: #ffffff;
  border-top-width: 0;
}

.popover.left .arrow {
  top: 50%;
  right: -11px;
  margin-top: -11px;
  border-left-color: #999;
  border-left-color: rgba(0, 0, 0, 0.25);
  border-right-width: 0;
}

.popover.left .arrow:after {
  right: 1px;
  bottom: -10px;
  border-left-color: #ffffff;
  border-right-width: 0;
}
/* Popover */

/* Thumbnails */
.thumbnails {
  margin-left: -20px;
  list-style: none;
  *zoom: 1;
}

.thumbnails:before,
.thumbnails:after {
  display: table;
  line-height: 0;
  content: "";
}

.thumbnails:after {
  clear: both;
}

.row-fluid .thumbnails {
  margin-left: 0;
}

.thumbnails > li {
  float: left;
  margin-bottom: 20px;
  margin-left: 20px;
}

.thumbnail {
  display: block;
  padding: 4px;
  line-height: 20px;
  border: 1px solid #ddd;
  -webkit-border-radius: 4px;
     -moz-border-radius: 4px;
          border-radius: 4px;
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.055);
     -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.055);
          box-shadow: 0 1px 3px rgba(0, 0, 0, 0.055);
  -webkit-transition: all 0.2s ease-in-out;
     -moz-transition: all 0.2s ease-in-out;
       -o-transition: all 0.2s ease-in-out;
          transition: all 0.2s ease-in-out;
}

a.thumbnail:hover,
a.thumbnail:focus {
  border-color: #0088cc;
  -webkit-box-shadow: 0 1px 4px rgba(0, 105, 214, 0.25);
     -moz-box-shadow: 0 1px 4px rgba(0, 105, 214, 0.25);
          box-shadow: 0 1px 4px rgba(0, 105, 214, 0.25);
}

.thumbnail > img {
  display: block;
  max-width: 100%;
  margin-right: auto;
  margin-left: auto;
}

.thumbnail .caption {
  padding: 9px;
  color: #555555;
}
/* Thumbnails */

/* Labels */

.media,
.media-body {
  overflow: hidden;
  *overflow: visible;
  zoom: 1;
}

.media,
.media .media {
  margin-top: 15px;
}

.media:first-child {
  margin-top: 0;
}

.media-object {
  display: block;
}

.media-heading {
  margin: 0 0 5px;
}

.media > .pull-left {
  margin-right: 10px;
}

.media > .pull-right {
  margin-left: 10px;
}

.media-list {
  margin-left: 0;
  list-style: none;
}

.label,
.badge {
  display: inline-block;
  padding: 2px 4px;
  font-size: 11.844px;
  font-weight: bold;
  line-height: 14px;
  color: #ffffff;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  white-space: nowrap;
  vertical-align: baseline;
  background-color: #999999;
}

.label {
  -webkit-border-radius: 3px;
     -moz-border-radius: 3px;
          border-radius: 3px;
}

.badge {
  padding-right: 9px;
  padding-left: 9px;
  -webkit-border-radius: 9px;
     -moz-border-radius: 9px;
          border-radius: 9px;
}

.label:empty,
.badge:empty {
  display: none;
}

a.label:hover,
a.label:focus,
a.badge:hover,
a.badge:focus {
  color: #ffffff;
  text-decoration: none;
  cursor: pointer;
}

.label-important,
.badge-important {
  background-color: #b94a48;
}

.label-important[href],
.badge-important[href] {
  background-color: #953b39;
}

.label-warning,
.badge-warning {
  background-color: #f89406;
}

.label-warning[href],
.badge-warning[href] {
  background-color: #c67605;
}

.label-success,
.badge-success {
  background-color: #468847;
}

.label-success[href],
.badge-success[href] {
  background-color: #356635;
}

.label-info,
.badge-info {
  background-color: #3a87ad;
}

.label-info[href],
.badge-info[href] {
  background-color: #2d6987;
}

.label-inverse,
.badge-inverse {
  background-color: #333333;
}

.label-inverse[href],
.badge-inverse[href] {
  background-color: #1a1a1a;
}

.btn .label,
.btn .badge {
  position: relative;
  top: -1px;
}

.btn-mini .label,
.btn-mini .badge {
  top: 0;
}
/* Labels */

/* Progress Bars */
.progress {
  height: 20px;
  margin-bottom: 20px;
  overflow: hidden;
  background-color: #f7f7f7;
  background-image: -moz-linear-gradient(top, #f5f5f5, #f9f9f9);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#f5f5f5), to(#f9f9f9));
  background-image: -webkit-linear-gradient(top, #f5f5f5, #f9f9f9);
  background-image: -o-linear-gradient(top, #f5f5f5, #f9f9f9);
  background-image: linear-gradient(to bottom, #f5f5f5, #f9f9f9);
  background-repeat: repeat-x;
  -webkit-border-radius: 4px;
     -moz-border-radius: 4px;
          border-radius: 4px;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff5f5f5', endColorstr='#fff9f9f9', GradientType=0);
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
     -moz-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
          box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
}

.progress .bar {
  float: left;
  width: 0;
  height: 100%;
  font-size: 12px;
  color: #ffffff;
  text-align: center;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  background-color: #0e90d2;
  background-image: -moz-linear-gradient(top, #149bdf, #0480be);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#149bdf), to(#0480be));
  background-image: -webkit-linear-gradient(top, #149bdf, #0480be);
  background-image: -o-linear-gradient(top, #149bdf, #0480be);
  background-image: linear-gradient(to bottom, #149bdf, #0480be);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff149bdf', endColorstr='#ff0480be', GradientType=0);
  -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
     -moz-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
          box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  -webkit-transition: width 0.6s ease;
     -moz-transition: width 0.6s ease;
       -o-transition: width 0.6s ease;
          transition: width 0.6s ease;
}

.progress .bar + .bar {
  -webkit-box-shadow: inset 1px 0 0 rgba(0, 0, 0, 0.15), inset 0 -1px 0 rgba(0, 0, 0, 0.15);
     -moz-box-shadow: inset 1px 0 0 rgba(0, 0, 0, 0.15), inset 0 -1px 0 rgba(0, 0, 0, 0.15);
          box-shadow: inset 1px 0 0 rgba(0, 0, 0, 0.15), inset 0 -1px 0 rgba(0, 0, 0, 0.15);
}

.progress-striped .bar {
  background-color: #149bdf;
  background-image: -webkit-gradient(linear, 0 100%, 100% 0, color-stop(0.25, rgba(255, 255, 255, 0.15)), color-stop(0.25, transparent), color-stop(0.5, transparent), color-stop(0.5, rgba(255, 255, 255, 0.15)), color-stop(0.75, rgba(255, 255, 255, 0.15)), color-stop(0.75, transparent), to(transparent));
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -moz-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  -webkit-background-size: 40px 40px;
     -moz-background-size: 40px 40px;
       -o-background-size: 40px 40px;
          background-size: 40px 40px;
}

.progress.active .bar {
  -webkit-animation: progress-bar-stripes 2s linear infinite;
     -moz-animation: progress-bar-stripes 2s linear infinite;
      -ms-animation: progress-bar-stripes 2s linear infinite;
       -o-animation: progress-bar-stripes 2s linear infinite;
          animation: progress-bar-stripes 2s linear infinite;
}

.progress-danger .bar,
.progress .bar-danger {
  background-color: #dd514c;
  background-image: -moz-linear-gradient(top, #ee5f5b, #c43c35);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ee5f5b), to(#c43c35));
  background-image: -webkit-linear-gradient(top, #ee5f5b, #c43c35);
  background-image: -o-linear-gradient(top, #ee5f5b, #c43c35);
  background-image: linear-gradient(to bottom, #ee5f5b, #c43c35);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffee5f5b', endColorstr='#ffc43c35', GradientType=0);
}

.progress-danger.progress-striped .bar,
.progress-striped .bar-danger {
  background-color: #ee5f5b;
  background-image: -webkit-gradient(linear, 0 100%, 100% 0, color-stop(0.25, rgba(255, 255, 255, 0.15)), color-stop(0.25, transparent), color-stop(0.5, transparent), color-stop(0.5, rgba(255, 255, 255, 0.15)), color-stop(0.75, rgba(255, 255, 255, 0.15)), color-stop(0.75, transparent), to(transparent));
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -moz-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}

.progress-success .bar,
.progress .bar-success {
  background-color: #5eb95e;
  background-image: -moz-linear-gradient(top, #62c462, #57a957);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#62c462), to(#57a957));
  background-image: -webkit-linear-gradient(top, #62c462, #57a957);
  background-image: -o-linear-gradient(top, #62c462, #57a957);
  background-image: linear-gradient(to bottom, #62c462, #57a957);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff62c462', endColorstr='#ff57a957', GradientType=0);
}

.progress-success.progress-striped .bar,
.progress-striped .bar-success {
  background-color: #62c462;
  background-image: -webkit-gradient(linear, 0 100%, 100% 0, color-stop(0.25, rgba(255, 255, 255, 0.15)), color-stop(0.25, transparent), color-stop(0.5, transparent), color-stop(0.5, rgba(255, 255, 255, 0.15)), color-stop(0.75, rgba(255, 255, 255, 0.15)), color-stop(0.75, transparent), to(transparent));
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -moz-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}

.progress-info .bar,
.progress .bar-info {
  background-color: #4bb1cf;
  background-image: -moz-linear-gradient(top, #5bc0de, #339bb9);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#5bc0de), to(#339bb9));
  background-image: -webkit-linear-gradient(top, #5bc0de, #339bb9);
  background-image: -o-linear-gradient(top, #5bc0de, #339bb9);
  background-image: linear-gradient(to bottom, #5bc0de, #339bb9);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff5bc0de', endColorstr='#ff339bb9', GradientType=0);
}

.progress-info.progress-striped .bar,
.progress-striped .bar-info {
  background-color: #5bc0de;
  background-image: -webkit-gradient(linear, 0 100%, 100% 0, color-stop(0.25, rgba(255, 255, 255, 0.15)), color-stop(0.25, transparent), color-stop(0.5, transparent), color-stop(0.5, rgba(255, 255, 255, 0.15)), color-stop(0.75, rgba(255, 255, 255, 0.15)), color-stop(0.75, transparent), to(transparent));
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -moz-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}

.progress-warning .bar,
.progress .bar-warning {
  background-color: #faa732;
  background-image: -moz-linear-gradient(top, #fbb450, #f89406);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#fbb450), to(#f89406));
  background-image: -webkit-linear-gradient(top, #fbb450, #f89406);
  background-image: -o-linear-gradient(top, #fbb450, #f89406);
  background-image: linear-gradient(to bottom, #fbb450, #f89406);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fffbb450', endColorstr='#fff89406', GradientType=0);
}

.progress-warning.progress-striped .bar,
.progress-striped .bar-warning {
  background-color: #fbb450;
  background-image: -webkit-gradient(linear, 0 100%, 100% 0, color-stop(0.25, rgba(255, 255, 255, 0.15)), color-stop(0.25, transparent), color-stop(0.5, transparent), color-stop(0.5, rgba(255, 255, 255, 0.15)), color-stop(0.75, rgba(255, 255, 255, 0.15)), color-stop(0.75, transparent), to(transparent));
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -moz-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}

.accordion {
  margin-bottom: 20px;
}

.accordion-group {
  margin-bottom: 2px;
  border: 1px solid #e5e5e5;
  -webkit-border-radius: 4px;
     -moz-border-radius: 4px;
          border-radius: 4px;
}

.accordion-heading {
  border-bottom: 0;
}

.accordion-heading .accordion-toggle {
  display: block;
  padding: 8px 15px;
}

.accordion-toggle {
  cursor: pointer;
}

.accordion-inner {
  padding: 9px 15px;
  border-top: 1px solid #e5e5e5;
}
/* Progress Bars */

/* Carousel */
.carousel {
  position: relative;
  margin-bottom: 20px;
  line-height: 1;
}

.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden;
}

.carousel-inner > .item {
  position: relative;
  display: none;
  -webkit-transition: 0.6s ease-in-out left;
     -moz-transition: 0.6s ease-in-out left;
       -o-transition: 0.6s ease-in-out left;
          transition: 0.6s ease-in-out left;
}

.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
  display: block;
  line-height: 1;
}

.carousel-inner > .active,
.carousel-inner > .next,
.carousel-inner > .prev {
  display: block;
}

.carousel-inner > .active {
  left: 0;
}

.carousel-inner > .next,
.carousel-inner > .prev {
  position: absolute;
  top: 0;
  width: 100%;
}

.carousel-inner > .next {
  left: 100%;
}

.carousel-inner > .prev {
  left: -100%;
}

.carousel-inner > .next.left,
.carousel-inner > .prev.right {
  left: 0;
}

.carousel-inner > .active.left {
  left: -100%;
}

.carousel-inner > .active.right {
  left: 100%;
}

.carousel-control {
  position: absolute;
  top: 40%;
  left: 15px;
  width: 40px;
  height: 40px;
  margin-top: -20px;
  font-size: 60px;
  font-weight: 100;
  line-height: 30px;
  color: #ffffff;
  text-align: center;
  background: #222222;
  border: 3px solid #ffffff;
  -webkit-border-radius: 23px;
     -moz-border-radius: 23px;
          border-radius: 23px;
  opacity: 0.5;
  filter: alpha(opacity=50);
}

.carousel-control.right {
  right: 15px;
  left: auto;
}

.carousel-control:hover,
.carousel-control:focus {
  color: #ffffff;
  text-decoration: none;
  opacity: 0.9;
  filter: alpha(opacity=90);
}

.carousel-indicators {
  position: absolute;
  top: 15px;
  right: 15px;
  z-index: 5;
  margin: 0;
  list-style: none;
}

.carousel-indicators li {
  display: block;
  float: left;
  width: 10px;
  height: 10px;
  margin-left: 5px;
  text-indent: -999px;
  background-color: #ccc;
  background-color: rgba(255, 255, 255, 0.25);
  border-radius: 5px;
}

.carousel-indicators .active {
  background-color: #fff;
}

.carousel-caption {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 15px;
  background: #333333;
  background: rgba(0, 0, 0, 0.75);
}

.carousel-caption h4,
.carousel-caption p {
  line-height: 20px;
  color: #ffffff;
}

.carousel-caption h4 {
  margin: 0 0 5px;
}

.carousel-caption p {
  margin-bottom: 0;
}
/* Carousel */

/* Rooms Widget */
div#container div#content div#habblet ul.list {
	max-height:300px;
	overflow-y:auto;
	overflow-x:hidden;
}

div#container div#content div#habblet ul.list li {
	padding:10px;
	font-family:arial, sans-serif;
}

div#container div#content div#habblet ul.list li.even {
	background:#eee;
}

div#container div#content div#habblet ul.list li span.enter-room-link {
	background-repeat:no-repeat;
	background-position:center left;
	display:block;
	min-height:40px;
	padding-left:50px;
}

div#container div#content div#habblet ul.list li span.enter-room-link span.room-name {
	font-weight:bold;
	display:block;
	font-size:12px;
}

div#container div#content div#habblet ul.list li span.enter-room-link span.room-description {
	display:block;
	font-size:11px;
}

div#container div#content div#habblet ul.list li span.enter-room-link span.room-owner {
	display:block;
	text-align:right;
	font-style:italic;
}

/* Groups & Staff Picks Widgets */

div#container div#content div#habblet ul.staffpick {
	overflow-x:hidden;
	overflow-y:auto;
	max-height:188px;
}

div#container div#content div#habblet ul.staffpick li {
	background-repeat:no-repeat;
	background-position:7px 50%;
}

div#container div#content div#habblet ul.grouplist {
	height:415px;
	overflow-x:hidden;
	overflow-y:auto;
}

div#container div#content div#habblet ul.grouplist li {
	width:50%;
	background-repeat:no-repeat;
	background-position:7px 50%;
}

div#container div#content div#habblet ul.grouplist li a.item,div#container div#content div#habblet ul.staffpick li a.item {
	padding:2px 0 2px 60px;
	display:block;
	height:42px;
	margin-right:30px;
	color:#000;
	font-family:arial, sans-serif;
	line-height:17px;
}

div#container div#content div#habblet ul.grouplist li.right a.item,div#container div#content div#habblet ul.staffpick li.right a.item {
	border-left:1px solid #D9D9D9;
}

div#container div#content div#habblet ul.staffpick li a.item {
	border-bottom:1px solid #D9D9D9;
}

div#container div#content div#habblet ul.grouplist li.left {
	float:left;
}

div#container div#content div#habblet ul.grouplist li.right {
	float:right;
}

div#container div#content div#habblet ul.staffpick li.right {
	background-color:#eee;
}

div#container div#content div#habblet ul.grouplist li.odd{
	background-color:#eee;
}

div#container div#content div#habblet ul.grouplist li a.item span.index,div#container div#content div#habblet ul.staffpick li a.item span.index {
	color:#777;
	padding-right:8px;
}

/* Tag Cloud */

div#container div#content div#habblet ul.tag-list li {
	display:inline-block;
}

div#container div#content div#habblet ul.tag-list li a.tag {
	padding:5px 10px;
	display:block;
	font-family:Ubuntu;
}

/* Tabs { box-content area } */

div#container div#content div#habblet #tabs{
	height:30px;
}

div#container div#content div#habblet #tabs > ul{
	font-size: 1em;
	list-style:none;
	width: 100%;
	display: table;
	table-layout: fixed;}

div#container div#content div#habblet #tabs > ul > li{
	margin:0 0px 0 0;
	padding:7px 10px;
	display:block;
	display: table-cell;
	width: auto;
background: rgb(214,214,214);
background: -moz-linear-gradient(top,  rgba(214,214,214,1) 0%, rgba(198,198,198,1) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(214,214,214,1)), color-stop(100%,rgba(198,198,198,1)));
background: -webkit-linear-gradient(top,  rgba(214,214,214,1) 0%,rgba(198,198,198,1) 100%);
background: -o-linear-gradient(top,  rgba(214,214,214,1) 0%,rgba(198,198,198,1) 100%);
background: -ms-linear-gradient(top,  rgba(214,214,214,1) 0%,rgba(198,198,198,1) 100%);
background: linear-gradient(to bottom,  rgba(214,214,214,1) 0%,rgba(198,198,198,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#d6d6d6', endColorstr='#c6c6c6',GradientType=0 );
    text-align: center;
	color: #000;
	text-shadow:0 1px 0 #fff;
	border:1px solid transparent;
}

div#container div#content div#habblet #tabs > ul > li:hover{
background: rgb(160,160,160);
background: -moz-linear-gradient(top,  rgba(160,160,160,1) 0%, rgba(198,198,198,1) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(160,160,160,1)), color-stop(100%,rgba(198,198,198,1)));
background: -webkit-linear-gradient(top,  rgba(160,160,160,1) 0%,rgba(198,198,198,1) 100%);
background: -o-linear-gradient(top,  rgba(160,160,160,1) 0%,rgba(198,198,198,1) 100%);
background: -ms-linear-gradient(top,  rgba(160,160,160,1) 0%,rgba(198,198,198,1) 100%);
background: linear-gradient(to bottom,  rgba(160,160,160,1) 0%,rgba(198,198,198,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a0a0a0', endColorstr='#c6c6c6',GradientType=0 );
	cursor:pointer;
	box-shadow:0 1px 0 #fff;
}

div#container div#content div#habblet #tabs > ul > li:active {
background: rgb(158,158,158);
background: -moz-linear-gradient(top,  rgba(158,158,158,1) 0%, rgba(119,119,119,1) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(158,158,158,1)), color-stop(100%,rgba(119,119,119,1)));
background: -webkit-linear-gradient(top,  rgba(158,158,158,1) 0%,rgba(119,119,119,1) 100%);
background: -o-linear-gradient(top,  rgba(158,158,158,1) 0%,rgba(119,119,119,1) 100%);
background: -ms-linear-gradient(top,  rgba(158,158,158,1) 0%,rgba(119,119,119,1) 100%);
background: linear-gradient(to bottom,  rgba(158,158,158,1) 0%,rgba(119,119,119,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#9e9e9e', endColorstr='#777777',GradientType=0 );
	color:#fff;
	text-shadow:0 1px 0 #000;
}

div#container div#content div#habblet #tabs > ul > li.tabActiveHeader{
	background: #fff;
	cursor:default;
	color: #000;
	font-weight:bold;
	text-shadow:0 1px 0 #fff;
	border:1px solid #ddd;
}

div#container div#content div#habblet .tabpage {
display:none;
}

/* News Content */
div#wrap {
	padding:15px 0px 0 20px;
	position:absolute;
	top:0;
	left:0;
	text-shadow:0 1px 2px #000;
	width:600px;
	color:#FFF;
	text-align:left;
}

div#wrap h1 {
	font-weight:500;
	font-size: 30px;
	line-height: 40px;
}

div#wrap p {
	color: #FFFFFF;
	text-shadow: 0 1px 2px #000;
	font-size: 16px;
	line-height: 20px;
	font-weight:500;
}

div#wrap p.time {
	font-family:Ubuntu;
	background-color:rgba(0,0,0,0.3);
	padding:5px 10px;
	border-radius:3px 3px 3px 3px;
	-moz-border-radius:3px 3px 3px 3px;
	display:inline-block;
	font-size:12px;
}

div#news-container {
	position: relative;
	-webkit-box-shadow:0 0 40px rgba(0, 0, 0, 0.1) inset;
	-moz-box-shadow:0 0 40px rgba(0, 0, 0, 0.1) inset;
	box-shadow:0 0 40px rgba(0, 0, 0, 0.1) inset;
	text-shadow:0 1px 0 #fff;
	font-size:12px;
	font-family:Ubuntu;
	line-height:normal;
	display:block;
	background:#fff url('/web-gallery/images/news.png') repeat-y;
	border:1px solid rgba(0,0,0,0.2);
	margin-bottom:5px;
}

div#news-container:first-child {
	border-radius:4px 4px 0 0;
	-moz-border-radius:4px 4px 0 0;
	border-top:1px solid rgba(0,0,0,0.2);
}

div#news-container:last-child {
	border-radius:0 0 4px 4px ;
	-moz-border-radius:0 0 4px 4px ;
}

div#news-container.comment:first-child {
	margin-top:10px !important;
}

div#news-container img {
	max-width:100%;
	height:auto;
}

div#news-container div.author {
	width:230px;
	float:left;
	padding:10px
}

div#news-container div.author a.author {
	text-align:center;
	color:#000;
	text-decoration:none;
	font-size:13px;
	margin-bottom:5px;
	display:block;
}

div#news-container div.author a.author:hover {
	background:#fff;
	box-shadow:0 5px 15px rgba(0,0,0,0.1);
	border-radius:3px 3px 3px 3px;
	-moz-border-radius:3px 3px 3px 3px;
}

div#news-container div.img {
	float:left;
	width:64px;
	height:120px;
}

div#news-container div.info {
	float:right;
	width:160px;
	min-height:120px;
    word-break:break-word;
}

div#news-container div.content {
	float:right;
	width:700px;
	margin-right:7px;
	padding:10px;
}

div#news-container textarea#guestbook-message {
	display:block;
	width:690px;
	height:100px;
}

div#news-container ul#bbcode_toolbar select {
	width:120px !important;
}

div#news-container ul.bbcode_toolbar li.control-button {
	margin-top:5px;
}

div#news-container span.teaser {
	display:block;
	font-family:Arial,sans-serif;
	font-size:13px;
	font-weight:bold;
	font-style:italic;
}

div#news-container a {
	color:#399AE5;
	text-decoration:underline;
}

/* News Widget */
.habblet-container.news-promo .bt {
	display: none;
}

#content .habblet-container.news-promo .i1 {
	background-repeat: no-repeat;
	background-position: 0 5px;
}

#content .habblet-container.news-promo .i2 {
	background-repeat: no-repeat;
	background-position: right 5px;
}

.notitle .bt div {
	z-index: 0;
}

#newspromo #topstories {
	position: relative;
	height: 187px;
}

#newspromo #topstories #topstories-nav {
    position: absolute;
    top: 0;
    left: 0;
    height: 21px;
    width: 100%;
    background: transparent url(/web-gallery/v2/images/topstories_nav_bg.png) no-repeat top left;
    color: #fff;
    text-align: center;
    line-height: 21px;
}

#newspromo #topstories #topstories-nav a.prev {
	left: 10px;
}

#newspromo #topstories #topstories-nav a.next {
    right: 10px;
}

#newspromo #topstories #topstories-nav a {
    top: 0px;
	color: #fff;
    text-decoration: none;
    position: absolute;
}

#newspromo .topstory {
	background: transparent none no-repeat;
	background-color: #D8D9CE;
	color: #fff;
	height: 177px;
	width: 272px;
	position: absolute;
	top: 0;
	left: 0;
	padding: 5px 14px;
}

#newspromo .topstory a {
	color: #fff;
}

#newspromo .topstory h4 {
	margin: 0 0 3px 0;
	padding: 0;
	font-weight: normal;
	text-transform: uppercase;
	font-size: 11px;
}

#newspromo .topstory h3 {
	margin: 0 0 10px 0;
	padding: 0;
	font-size: 18px;
}

#newspromo .topstory h3 a {
	text-decoration: none;
	line-height: 25px;
	font-size: 20px;
}

#newspromo .topstory h3 a:hover {
	text-decoration: underline;
}

#newspromo .topstory p.summary {
	width: 65%;
}

#newspromo .newsitem-date {
	color: #888;
	font-size: 10px;
	margin-top: 2px;
}

#newspromo li.odd a, #newspromo li.even a {
	color: #333;
	text-decoration: none;
}

#newspromo li.odd a:hover, #newspromo li.even a:hover {
	text-decoration: underline;
}

#newspromo li.last {
	text-align: right;
}

div.message {
	background:rgb(242, 151, 8);
	padding:10px 15px;
	color:#fff;
	border-radius:5px 5px 5px 5px;
	-moz-border-radius:5px 5px 5px 5px;
	text-align:center;
	border:1px solid #fff;
	font-size:13px;
}

div.message.orange {
	background:rgb(242, 151, 8);
}

div.message.red {
	background:rgb(224, 23, 23);
}

.contains-fbLike {
	width:300px;
	height:250px;
	position:absolute;
	top:0;
	bottom:0;
	left:0;
	right:0;
	margin:30px 0 0 30px;
}

#groupcontainer {
	width:300px;
	height:250px;
	position:absolute;
	top:0;
	bottom:0;
	left:0;
	right:0;
	border-radius:10px 10px 10px 10px;
	-moz-border-radius:10px 10px 10px 10px;
	box-shadow:3px 3px 10px #111;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -o-user-select: none;
    -ms-user-select: none;
    user-select: none;
	cursor:default;
}

#groupcontainer .header {
	height:30px;
	background:#367897;
	box-shadow:0 0 0 1px #000;
	border-radius:10px 10px 0 0;
	-moz-border-radius:10px 10px 0 0;
	border:2px solid #408CAF;
	border-bottom:none;
	color:#fff;
	font-weight:bold;
	font-size:13px;
	line-height:30px;
	text-align:center;
}

#groupcontainer b.bigtext {
	font-weight:500;
	font-size:20px;
	text-align:center;
	line-height:20px;
	text-align:center;
	display:block;
}

#groupcontainer b {
	font-weight:bold;
}

#groupcontainer i {
	font-family:"Ubuntu-Boldi";
}

.habblet-close {
	background:url('/web-gallery/images/close.png') no-repeat;
	width:19px;
	height:20px;
	margin:5px 5px 0 0;
	cursor:pointer;
}

.habblet-close:hover {
	background-position:-19px 0;
}

.habblet-close:active {
	background-position:-38px 0;
}

#groupcontainer .content {
	background:#E9E9E1;
	border:2px solid #ffffff;
	border-top:none;	
	box-shadow:0 0 0 1px #000;
	height:195px;
	border-radius:0 0 10px 10px;
	-moz-border-radius:0 0 10px 10px;
	font-size:12px;
	line-height:12px;
	font-family:Ubuntu;
	padding:10px;
}

#groupcontainer .specialbutton {
	height:28px;
	line-height:28px;
	border-radius:3px 3px 3px 3px;
	-moz-border-radius:3px 3px 3px 3px
	cursor:pointer;
	display:inline-block;
	position:relative;
	z-index:999;
	width:auto;
}

#groupcontainer .specialbutton span {
	background:url('/web-gallery/images/button.png') repeat-x;
	background-position:0 -28px;
	height:28px;
	line-height:26px;
	float:left;
	padding: 0 20px 0 26px;
	font-weight:bold;
	font-size:13px;
	border-radius:3px 0px 0px 3px;
	-moz-border-radius:3px 0px 0px 3px;
}

#groupcontainer .specialbutton b {
	background:url('/web-gallery/images/button.png') no-repeat;
	background-position:0 0;
	float:left;
	height:28px;
	width:6px;
	position:absolute;
	border-radius:3px 0px 0px 3px;
	-moz-border-radius:3px 0px 0px 3px;
}

#groupcontainer .specialbutton i {
	background:url('/web-gallery/images/button.png') no-repeat;
	background-position:0 -56px;
	float:right;
	height:28px;
	width:6px;
	position:absolute;
	border-radius:0px 3px 3px 0px;
	-moz-border-radius:0px 3px 3px 0px;
}

#groupcontainer .specialbutton:hover b {
	background-position:0 -84px;
}
#groupcontainer .specialbutton:hover span {
	background-position:0 -112px;
}
#groupcontainer .specialbutton:hover i {
	background-position:0 -140px;
}
#groupcontainer .specialbutton:active b {
	background-position:0 -168px;
}
#groupcontainer .specialbutton:active span {
	background-position:0 -196px;
}
#groupcontainer .specialbutton:active i {
	background-position:0 -224px;
}

#groupcontainer .badge-wrap {
	padding:5px;
	background:#fff;
	width:78px;
	height:78px;
	border-radius:4px 4px 4px 4px;
	-moz-border-radius:4px 4px 4px 4px;
	border:1px solid #8E8E8B;
	float:left;
}

#groupcontainer .info-wrap {
	float:right;
	width:175px;
	height:90px;
}

#groupcontainer .info-wrap p {
	height:54px;
	overflow-x:hidden;
	overflow-y:auto;
}

#groupcontainer .full-wrap {
	width:275px;
	padding:5px 0 0 0;
	height:100px;
	clear:both;
}

#groupcontainer a.basiclink {
	text-decoration:underline;
	font-size:13px;
}

#groupcontainer .placeholder {
	width:94px;
	height:136px;
	background:url('/web-gallery/v2/images/personal_info/info_habbo_plate.png') no-repeat;
	background-position:bottom left;
	position:absolute;
	right:-48px;
	top:147px;
}

/* User Details Box */
div.userinfo table h2 {
	font-size:18px;
	width:400px;
}

div.userinfo p.motto {
	font-weight:500;
	font-size:14px;
	margin:5px 0;
	position:relative;
	width:400px;
}

div.userinfo div.currency {
	font-size:16px;
	font-weight:bold;
	padding:7px 7px;
	width:130px;
	border-radius:4px 4px 4px 4px;
	-moz-border-radius:4px 4px 4px 4px;
	float:left;
	color:#fff;
	text-shadow:0 1px 0 #000;
	margin:20px 5px 0 0;
	box-shadow:0 1px 0px #000;
	position:relative;
}

div.userinfo div.currency.credits {
	background:#DBA000;
	border:2px solid #FFC942;
}

div.userinfo div.currency.credits span.credit {
	background:url('/web-gallery/images/purse/coin.png') no-repeat;
	width:20px;
	height:18px;
	position:absolute;
	right:5px;
	top:4px;
}

div.userinfo div.currency.duckets {
	background:#AE44A7;
	border:2px solid #D798D7;
}

div.userinfo div.currency.duckets small {
	font-size:11px;
}

div.userinfo div.currency.duckets span.ducket {
	background:url('/web-gallery/images/purse/duckets.png') no-repeat;
	width:38px;
	height:43px;
	position:absolute;
	right:5px;
	top:-7px;
}

div.userinfo div.currency.pures {
	background:#659F00;
	border:2px solid #A1E35C;
}

div.userinfo div.currency.pures span.pure {
	background:url('/web-gallery/images/purse/pure.png') no-repeat;
	width:19px;
	height:19px;
	position:absolute;
	right:5px;
	top:3px;
}

div.userinfo a.enter {
	float:right;
	background:url('/web-gallery/images/purse/enter-hotel.png') no-repeat;
	background-position:top left;
	height:52px;
	width:53px;
	margin-right:10px;
}

div.userinfo a.enter:active {
	background-position:bottom left;
}

div.userinfo div.vip {
	height:50px;
	width:50px;
	background:url('/c_images/album1584/UVIP.gif') no-repeat;
	position: absolute;
	bottom: 0;
	right: 0;
}
/* User Details Box */


/* Habbo Homes Content */
ul.widelist li { padding:.5em 14px;margin: 0 }
  
div.box-tabs-container { position: relative }
 
	div.box-tabs-container h2 {
		position: absolute;
		top: 0;
		left: 0;
		color: #000;
		margin: 0;
		padding: 3px 0 0 10px;
		text-transform: none;
		font-weight:bold;
		font-size: 13px;
		line-height:1.2em;
		}
 
ul.box-tabs {
	padding: 0 5px;
	margin: 0;
	font-size: 11px;
	height: 31px;
	border-bottom: 1px solid #f90 }
 
	ul.box-tabs li {
		padding: 0;
		float: right;
		height: 30px;
		margin: 0 0 0 4px;
		position: relative;}
 
		ul.box-tabs li strong,ul.box-tabs li a,ul.box-tabs li span.tab-spacer {
			top: 1px;
			position: relative;
			text-shadow: none;
			font-family: Ubuntu;
			font-size:13px;
			}
 
		ul.box-tabs li a:focus { outline: 0 }
 
		ul.box-tabs li strong,ul.box-tabs li a {
			float: left;
			height: 20px;
			padding: 10px 10px 0 14px;
			color: #fff;
			font-weight: normal;
			text-decoration: none;
			max-width: 184px;
			overflow: hidden;
			border-radius:5px 0 0 0;
			-moz-border-radius:5px 0 0 0;}
 
		ul.box-tabs li span.tab-spacer {
			float: left;
			height: 30px;
			width: 4px;
			border-radius:0px 5px 0 0;
			-moz-border-radius:0px 5px 0 0;
			 }
 
		ul.box-tabs li.selected strong,ul.box-tabs li.selected a {
			background-position: -16px 0;
			color: #000;
			font-weight: bold }
 
		ul.box-tabs li.selected span.tab-spacer { background-position: -12px 0 }
 
		ul.box-tabs li:hover a { background-position: -16px -50px }
 
		ul.box-tabs li:hover span.tab-spacer { background-position: -12px -50px }
 
		ul.box-tabs li.selected:hover a { background-position: -16px 0 }
 
		ul.box-tabs li.selected:hover span.tab-spacer { background-position: -12px 0 }
 
div.box-tabs-container h2 { position: absolute }
 
	div.box-tabs-container h2.page-owner { position:relative;float: left }
 
div.box-tabs-left ul.box-tabs li { float: left }
 
div.blue a.secondary { color: #2767a7 }
 
div.blue div.box-tabs-container h2 { color: #009dff }
 
div.blue ul.box-tabs { border-bottom-color: #528dc9 }
 
	div.blue ul.box-tabs li strong,div.blue ul.box-tabs li a { background:#528dc9;border-left:1px solid #528DC9;border-top:1px solid #528DC9; }
 
	div.blue ul.box-tabs li span.tab-spacer { background:#528dc9;border-right:1px solid #528DC9;border-top:1px solid #528DC9; }
 
	div.blue ul.box-tabs li.selected strong,div.blue ul.box-tabs li.selected a { background:#fff; }
 
	div.blue ul.box-tabs li.selected span.tab-spacer { background:#fff; }
 
	div.blue ul.box-tabs li:hover a { background:#66ADE4; }
 
	div.blue ul.box-tabs li:hover span.tab-spacer { background:#66ADE4; }
 
	div.blue ul.box-tabs li.selected:hover a { background:#fff; }
 
	div.blue ul.box-tabs li.selected:hover span.tab-spacer { background:#fff; }
 
div.green a.secondary { color: #4ab501 }
 
div.green div.box-tabs-container h2 { color: #3ba800 }
 
div.green ul.box-tabs { border-bottom-color: #3ba800 }
 
	div.green ul.box-tabs li strong,div.green ul.box-tabs li a { background:#3BA800;border-left:1px solid #3BA800;border-top:1px solid #3BA800; }
 
	div.green ul.box-tabs li span.tab-spacer { background:#3BA800;border-right:1px solid #3BA800;border-top:1px solid #3BA800; }
 
	div.green ul.box-tabs li.selected strong,div.green ul.box-tabs li.selected a { background:#fff; }
 
	div.green ul.box-tabs li.selected span.tab-spacer { background:#fff; }
 
	div.green ul.box-tabs li:hover a { background:#49C700; }
 
	div.green ul.box-tabs li:hover span.tab-spacer { background:#49C700; }
 
	div.green ul.box-tabs li.selected:hover a { background:#fff; }
 
	div.green ul.box-tabs li.selected:hover span.tab-spacer { background:#fff; }
 
div.red div.box-tabs-container h2 { color: #d64242 }
 
div.red ul.box-tabs { border-bottom-color: #d64242 }
 
	div.red ul.box-tabs li strong,div.red ul.box-tabs li a { background:#CA2323;border-left:1px solid #CA2323;border-top:1px solid #CA2323; }
 
	div.red ul.box-tabs li span.tab-spacer { background:#CA2323;border-right:1px solid #CA2323;border-top:1px solid #CA2323; }
 
	div.red ul.box-tabs li.selected strong,div.red ul.box-tabs li.selected a { background:#fff; }
 
	div.red ul.box-tabs li.selected span.tab-spacer { background:#fff; }
 
	div.red ul.box-tabs li:hover a { background:#D64242; }
 
	div.red ul.box-tabs li:hover span.tab-spacer { background:#D64242; }
 
	div.red ul.box-tabs li.selected:hover a { background:#fff; }
 
	div.red ul.box-tabs li.selected:hover span.tab-spacer { background:#fff; }
 
div.hcred div.box-tabs-container h2 { color: #7a7a7a }
 
div.hcred ul.box-tabs { border-bottom-color: #7a7a7a }
 
	div.hcred ul.box-tabs li strong,div.hcred ul.box-tabs li a { background-position: -16px -175px }
 
	div.hcred ul.box-tabs li span.tab-spacer { background-position: -12px -175px }
 
	div.hcred ul.box-tabs li.selected strong,div.hcred ul.box-tabs li.selected a { background-position: -16px -150px }
 
	div.hcred ul.box-tabs li.selected span.tab-spacer { background-position: -12px -150px }
 
	div.hcred ul.box-tabs li:hover a { background-position: -16px -200px }
 
	div.hcred ul.box-tabs li:hover span.tab-spacer { background-position: -12px -200px }
 
	div.hcred ul.box-tabs li.selected:hover a { background-position: -16px -150px }
 
	div.hcred ul.box-tabs li.selected:hover span.tab-spacer { background-position: -12px -150px }
 
div.lightbrown div.box-tabs-container h2 { color: #cf9c44 }
 
div.lightbrown ul.box-tabs { border-bottom-color: #cf9c44 }
 
	div.lightbrown ul.box-tabs li strong,div.lightbrown ul.box-tabs li a { background-position: -16px -175px }
 
	div.lightbrown ul.box-tabs li span.tab-spacer { background-position: -12px -175px }
 
	div.lightbrown ul.box-tabs li.selected strong,div.lightbrown ul.box-tabs li.selected a { background-position: -16px -150px }
 
	div.lightbrown ul.box-tabs li.selected span.tab-spacer { background-position: -12px -150px }
 
	div.lightbrown ul.box-tabs li:hover a { background-position: -16px -200px }
 
	div.lightbrown ul.box-tabs li:hover span.tab-spacer { background-position: -12px -200px }
 
	div.lightbrown ul.box-tabs li.selected:hover a { background-position: -16px -150px }
 
	div.lightbrown ul.box-tabs li.selected:hover span.tab-spacer { background-position: -12px -150px }
 
div.black div.box-tabs-container h2 { color: #fff }
 
div.black ul.box-tabs { border-bottom-color: #C4C4C4 }
 
	div.black ul.box-tabs li strong,div.black ul.box-tabs li a { background:#333333;border-left:1px solid #C4C4C4;border-top:1px solid #C4C4C4; }
 
	div.black ul.box-tabs li span.tab-spacer { background:#333333;border-right:1px solid #C4C4C4;border-top:1px solid #C4C4C4; }
 
	div.black ul.box-tabs li.selected strong,div.black ul.box-tabs li.selected a { background:#fff; }
 
	div.black ul.box-tabs li.selected span.tab-spacer { background:#fff; }
 
	div.black ul.box-tabs li:hover a { background:#4F4F4F; }
 
	div.black ul.box-tabs li:hover span.tab-spacer { background:#4F4F4F; }
 
	div.black ul.box-tabs li.selected:hover a { background:#fff; }
 
	div.black ul.box-tabs li.selected:hover span.tab-spacer { background:#fff; }
 
ul.box-tabs li a.icon-help-tab,ul.box-tabs li.selected a.icon-help-tab { padding: 3px 10px 3px 14px }
 
ul.box-tabs li a.icon-help-tab span,ul.box-tabs li.selected a.icon-help-tab span {
	float: left;
	margin: 0;
	padding: 0;
	background: url(/web-gallery/v2/images/help.gif) no-repeat 0 0;
	width: 16px;
	height: 16px }
  
div.bottom-bubble-c {
	background-color: white;
	border-left: 2px solid black;
	border-right: 2px solid black;
	padding: 4px 7px }
 
div.bottom-bubble-t {
	background: url(/web-gallery/v2/images/groups/editbubble-tl.png) no-repeat 0 100%;
	font-size: 1px;
	margin-right: 5px;
	text-align: right }
 
	div.bottom-bubble-t div {
		background: url(/web-gallery/v2/images/groups/editbubble-tr.png) no-repeat 100% 100%;
		padding-top: 15px;
		margin-right: -5px }
 
div.bottom-bubble-b {
	background: url(/web-gallery/v2/images/groups/editbubble-bl.png) no-repeat 0 0;
	font-size: 1px;
	margin-right: 5px }
 
	div.bottom-bubble-b div {
		background: url(/web-gallery/v2/images/groups/editbubble-br.png) no-repeat 100% 0;
		padding-top: 5px;
		margin-right: -5px }
 
    #playground, #playground-outer{
	    height: 1360px;
    }
/* Habbo Homes Content */

/* Popup dialogs */
div.topdialog {
	position:absolute;
	width:450px;
	background:#F8F8F8;
	border-radius:4px 4px 4px 4px;
	-moz-border-radius:4px 4px 4px 4px;
	box-shadow:0 10px 20px rgba(0,0,0,0.5);
	z-index:9000;
	border:1px solid #DDDDDD;
}

div.topdialog h2.title {
	padding: 7px 15px;
	font-size: 17px;
	position: relative;
	line-height: 21px;
	height: 20px;
	text-align: left;
	color:#000;
	font-family:Ubuntu;
	font-weight:500;
	border-radius:3px 3px 0 0;
	-moz-border-radius:3px 3px 0 0;
	background:#FFFFFF;
	border-bottom-width: 1px;
	cursor:default;
	border-bottom-style: solid;
	border-bottom-color:#DDDDDD;
}

div.topdialog .right {
	float:right;
	padding:10px 0;
	display:block;
}

div.topdialog div.topdialog-body {
	padding:5px;
}

div.topdialog .buttons a {
	float:right;
	margin:0 0 0 5px;
}
/* Popup dialogs */

.room-occupancy-1 { background-image: url('/web-gallery/v2/images/rooms/room_icon_1.gif') !important; }
.room-occupancy-2 { background-image: url('/web-gallery/v2/images/rooms/room_icon_2.gif') !important; }
.room-occupancy-3 { background-image: url('/web-gallery/v2/images/rooms/room_icon_3.gif') !important; }
.room-occupancy-4 { background-image: url('/web-gallery/v2/images/rooms/room_icon_4.gif') !important; }
.room-occupancy-5 { background-image: url('/web-gallery/v2/images/rooms/room_icon_5.gif') !important; }


ul#habblet-navigation li a{
	display:block;
	font-size:15px;
	line-height:15px;
	padding:7px 15px;
}

ul#habblet-navigation li.important a {
	font-weight:500;
	background-color:rgba(0,0,0,0.1)
}

ul#habblet-navigation li.active a {
	font-weight:bold;
}



</style>