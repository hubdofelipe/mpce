export default function menuControl(){
    let leftMenuCall = document.querySelector('.desktop-side-menu-call');
    if(leftMenuCall){
        leftMenuCall.addEventListener('click', function(){
            document.querySelector('.side-desktop-menu').classList.toggle('is-active');
        })
    }

    let fullMenuCall = document.querySelector('.desktop-full-menu-call');
    if(fullMenuCall){
        fullMenuCall.addEventListener('click', function(){
            document.querySelector('.full-desktop-menu').classList.toggle('is-active');
        })
    }
}
