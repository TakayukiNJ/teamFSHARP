{"filter":false,"title":"head.blade.php","tooltip":"/cms/resources/views/layouts/head.blade.php","undoManager":{"mark":2,"position":2,"stack":[[{"start":{"row":25,"column":0},"end":{"row":26,"column":0},"action":"insert","lines":["",""],"id":53}],[{"start":{"row":26,"column":0},"end":{"row":27,"column":0},"action":"insert","lines":["",""],"id":54}],[{"start":{"row":26,"column":0},"end":{"row":113,"column":8},"action":"insert","lines":["<style type=\"text/css\">","/* 2019.1.31 nakajo added badge css */","/*body {*/","/*  font-family: 'Allerta Stencil', sans-serif;*/","/*  padding: 0;*/","/*  margin: 70px 10px;*/","/*  background: #efefef;*/","/*  display: flex;*/","/*  justify-content: center;*/","/*  align-items: center;*/","/*  min-height: calc(99vh - 140px);*/","/*}*/","",".badge {","  position: relative;","  letter-spacing: 0.08em;","  color: #fff;","  display: flex;","  justify-content: center;","  align-items: center;","  text-decoration: none;","  transition: -webkit-transform 0.3s ease;","  transition: transform 0.3s ease;","  transition: transform 0.3s ease, -webkit-transform 0.3s ease;","  -webkit-transform: rotate(-14deg);","          transform: rotate(-14deg);","  text-align: center;","  -webkit-filter: drop-shadow(0.25em 0.7em 0.95em rgba(0, 0, 0, 0.8));","          filter: drop-shadow(0.25em 0.7em 0.95em rgba(0, 0, 0, 0.8));","  /* min-size + (max-size - min-size) * ( (100vw - min-width) / ( max-width - min-width) ) */","  font-size: calc(11px + 14 * ( (100vw - 420px) / ( 860) ));","}","@media screen and (max-width: 420px) {","  .badge {","    font-size: 11px;","  }","}","@media screen and (min-width: 1280px) {","  .badge {","    font-size: 25px;","  }","}",".badge::before {","  content: \"\";","  position: absolute;","  top: 50%;","  left: 50%;","  -webkit-transform: translate(-50%, -50%);","          transform: translate(-50%, -50%);","  display: block;","  width: 10em;","  height: 10em;","  border-radius: 100%;","  background: #111;","  opacity: 0.8;","  transition: opacity 0.3s linear;","}",".badge:hover {","  color: #fff;","  text-decoration: none;","  -webkit-transform: rotate(-10deg) scale(1.05);","          transform: rotate(-10deg) scale(1.05);","}",".badge:hover::before {","  opacity: 0.9;","}",".badge svg {","  position: absolute;","  top: 50%;","  left: 50%;","  -webkit-transform: translate(-50%, -50%);","          transform: translate(-50%, -50%);","  display: block;","  z-index: 0;","  width: 10em;","  height: 10em;","}",".badge span {","  display: block;","  background: #111;","  border-radius: 0.4em;","  padding: 0.4em 1em;","  z-index: 1;","  min-width: 11em;","  border: 1px solid;","  text-transform: uppercase;","}","</style>"],"id":55}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":113,"column":8},"end":{"row":113,"column":8},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1550081308018,"hash":"29f05bfb1e30be36db890541bc767c61fadf4f97"}