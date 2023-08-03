$(document).ready(function(){
  if(window.matchMedia('(min-width: 1201px)').matches) {
    document.getElementsById("drawer-checkbox").checked = false;
    
  }
});

//動作確認用
$(function(){
  alert('動作しています。');
});