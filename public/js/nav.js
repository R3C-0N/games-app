function main(){
    const navlinks = document.querySelectorAll('.nav-link');
    const passwordSpans = document.querySelectorAll('span.input-group-text.password');
    for (let navlink of navlinks) {
        if (navlink.href == window.location.origin+window.location.pathname) {
            navlink.classList.add('active');
        }
    }
    for (let passwordSpan of passwordSpans) {
        passwordSpan.onclick = function () {
            let svgs = this.querySelectorAll('svg');
            let type = 'password';
            for (let svg of svgs) {
                if (svg.classList.contains('hidden') && svg.classList.contains('bi-eye-fill')) {
                    svg.classList.remove('hidden');
                    type = 'text';

                } else if (svg.classList.contains('hidden')) {
                    svg.classList.remove('hidden');

                }
                else {
                    svg.classList.add('hidden');
                }
            }
            this.closest('div').querySelector('input').type = type;
        }
    }

}
document.addEventListener('DOMContentLoaded',main);

window.setTimeout(() => {
    CRSF_TOKEN = document.querySelector('meta#csrf-token').content;
}, 1000);

function toogleDarkmode(){
    window['user']['darkmode'] = (window['user']['darkmode']+1)%2;
    setDarkMode(window['user']['darkmode']);
    updateUser(window['user']);
}

function apiRequest(url, request, method){
    $.ajax({
        method: method,
        url: "/api/"+url,
        data: {
            data: request,
            userId: window['user']['id'],
            token: CRSF_TOKEN
        },
        success: function( result ) {
            console.log(result);
        }
    });
}

function updateUser(user){
    apiRequest('user/'+user['id'], user, 'put');
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

    dark = ['black', 'white'];
    choose = dark[value];
    other = dark[(value+1)%2];
    for(let node of document.querySelectorAll(".text-"+other))
    {
        node.classList.remove("text-"+other);
        node.classList.add("text-"+choose);
    }
}

function tooglePassword(event, test) {
    console.log(event.target, test);
}
