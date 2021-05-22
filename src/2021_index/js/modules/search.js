export default function search(){
    let desktopSearch = document.getElementById("desktopToggleSearch");

    if(desktopSearch){
        desktopSearch.addEventListener("click", toggleSearch);
        function toggleSearch(){
            var element = document.getElementById("searchInput")
            element.classList.toggle("active");
        }
    }
}
