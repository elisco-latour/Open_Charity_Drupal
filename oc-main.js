(function(){
  /* Hide and show drawer navigation on mobile devices*/
  window.addEventListener("load", function(event) {
    var drawerTrigger = document.querySelector('.oc-drawer__trigger-container');
    var ocDrawer = document.querySelector('.oc-drawer');
    var ocContent = document.querySelector('.oc-content');
    drawerTrigger.addEventListener('click', function(){
                ocDrawer.classList.toggle('visible-drawer');
                ocContent.classList.toggle('visible-drawer');
    });
  });
})();
