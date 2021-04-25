function main(){
    const navlinks = document.querySelectorAll('.nav-link');
    for (let navlink of navlinks) {
        if (navlink.href == window.location.origin+window.location.pathname) {
            navlink.classList.add('active');
        }
    }
}
document.addEventListener('DOMContentLoaded',main);
