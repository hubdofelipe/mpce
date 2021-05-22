export default function header(){
    window.onscroll = function() {myFunction()};
    
    var header = document.querySelector(".main-header");
    var sticky = header.offsetTop + 10;
    
    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("change-color");
        } else {
            header.classList.remove("change-color");
        }
    }
    
    let submenuMobile = document.querySelectorAll('.js-open-submenu-mobile');
    let current;
    
    submenuMobile.forEach((item) => {
        item.addEventListener('click', () => {
            let parent = item.parentNode;
    
            if(current && current != parent){
                current.classList.remove('is-active');
            }
            
            parent.classList.toggle('is-active');
            current = parent;
        });
    })
}
