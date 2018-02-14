var drawerTrigger = document.querySelector('.oc-drawer__trigger-container');
var ocOverlay = document.querySelector('.oc-main__overlay');
var ocDrawer = document.querySelector('.oc-drawer');
var ocContent = document.querySelector('.oc-content');
drawerTrigger.addEventListener('click', function(){
            ocOverlay.classList.toggle('is-active');
            ocDrawer.classList.toggle('visible-drawer');
            ocContent.classList.toggle('visible-drawer');
});
