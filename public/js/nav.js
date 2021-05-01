function main(){
    const navlinks = document.querySelectorAll('.nav-link');
    for (let navlink of navlinks) {
        if (navlink.href == window.location.origin+window.location.pathname) {
            navlink.classList.add('active');
        }
    }
}
document.addEventListener('DOMContentLoaded',main);

function toogleDarkmode(){
    window['user']['darkmode'] = (window['user']['darkmode']+1)%2;
    setDarkMode(window['user']['darkmode']);
    updateUser(window['user']);
}

function updateUser(user){
    $.ajax({
        method:'put',
        url: "/api/user/"+user['id'],
        data: {
            modif: user
        },
        success: function( result ) {
            console.log(result);
        }
    });
}

function setDarkMode(value){
    let dark = ['light', 'dark'];
    let choose = dark[value];
    let other = dark[(value+1)%2];
    for(let node of document.querySelectorAll(".bg-"+other))
    {
        node.classList.remove("bg-"+other);
        node.classList.add("bg-"+choose);
    }
    for(let node of document.querySelectorAll(".dropdown-menu-"+other))
    {
        node.classList.remove("dropdown-menu-"+other);
        node.classList.add("dropdown-menu-"+choose);
    }
    for(let node of document.querySelectorAll(".navbar-"+other))
    {
        node.classList.remove("navbar-"+other);
        node.classList.add("navbar-"+choose);
    }

    dark = ['none', 'black'];
    choose = dark[value];
    other = dark[(value+1)%2];
    for(let node of document.querySelectorAll(".bg-"+other))
    {
        node.classList.remove("bg-"+other);
        node.classList.add("bg-"+choose);
    }
}
