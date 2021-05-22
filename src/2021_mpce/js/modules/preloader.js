export default function preloader(){
    if(document.querySelector('.preloader-js')){
        let preloader = document.querySelector('.preloader-js');
    
        window.onload = function() {
            preloader.style.display = 'none';
        };
    }
}