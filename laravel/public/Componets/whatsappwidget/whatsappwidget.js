$(".widget-toggler").click(function () {
    $(".widget-holder").fadeToggle(500);
  });
  

  document.querySelector('#openBizBtn').addEventListener('click',()=>{
    location.assign('biz.html')
  })

  document.querySelector('#openHCDBtn').addEventListener('click',()=>{
    location.assign('hcd.html')
  })

  document.querySelector('#openSDEBtn').addEventListener('click',()=>{
   alert("No SDE")
  })