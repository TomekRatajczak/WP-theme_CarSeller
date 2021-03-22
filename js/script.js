//CIASTECZKA
const cookieStorage = {
    getItem: (item) => {
        const cookies = document.cookie
            .split(';')
            .map(cookie => cookie.split('='))
            .reduce((acc, [key, value]) => ({ ...acc, [key.trim()]: value }), {});
        return cookies[item];
    },
    setItem: (item, value) => {
        document.cookie = `${item}=${value};`
    }
}

const storageType = cookieStorage;
const consentPropertyName = 'polnar_cookie';
const shouldShowPopup = () => !storageType.getItem(consentPropertyName);
const saveToStorage = () => storageType.setItem(consentPropertyName, true);

window.onload = () => {

    const acceptFn = event => {
        saveToStorage(storageType);
        consentPopup.parentElement.removeChild(consentPopup);
    }
    const consentPopup = document.getElementById('consent-popup');
    const acceptBtn = document.getElementById('accept');
    acceptBtn.addEventListener('click', acceptFn);

    if (shouldShowPopup(storageType)) {
        setTimeout(() => {
            consentPopup.classList.remove('hidden');
        }, 2000);
    }else consentPopup.parentElement.removeChild(consentPopup);
};
//ZMIANA KOLORU PASKA NAWIGACYJNEGO
$(window).scroll(function() {
    $('.navbar').toggleClass('navbar-scroll', $(this).scrollTop() > 300);
    $('.pink').toggleClass('pink-none', $(this).scrollTop() > 60);
});
//aAUOMATYCZNE ZNIKANIE PASKA NAWIGACYJNEGO
$('.navbar-collapse a').click(function(){
    $(".navbar-collapse").collapse('hide');
});
//GLADKIE LINKOWANIE
const mediaQuery = window.matchMedia('(min-width: 768px)')

if(mediaQuery.matches){

    gsap.registerPlugin(ScrollToPlugin);

    function getSamePageAnchor(link) {
        if (
            link.protocol !== window.location.protocol ||
            link.host !== window.location.host ||
            link.pathname !== window.location.pathname ||
            link.search !== window.location.search
        ) {
            return false;
        }

        return link.hash;
    }

    // Scroll to a given hash, preventing the event given if there is one
    function scrollToHash(hash, e) {
        const elem = hash ? document.querySelector(hash) : false;
        if (elem) {
            if (e) e.preventDefault();
            gsap.to(window, { duration: 2, scrollTo: elem, });
        }
    }

    // If a link's href is within the current page, scroll to it instead
    document.querySelectorAll('.link-scroll').forEach(a => {
        a.addEventListener('click', e => {
            scrollToHash(getSamePageAnchor(a), e);
        });
    });

    // Scroll to the element in the URL's hash on load
    scrollToHash(window.location.hash);

    let allImages = document.querySelectorAll("img");
    allImages.forEach((value)=>{
        value.oncontextmenu = (e)=>{
            e.preventDefault();
        }
    })
}

//GALERIA ZDJĘĆ
function gallery() {
    const allimages = document.querySelectorAll(".image-script");
    for (let i = 0; i < allimages.length; i++) {
        if (allimages[i].id.indexOf("small") > -1) {
            allimages[i].onclick = imgChanger;
        }
    }
}
window.addEventListener('load', gallery());

function imgChanger() {
    document.getElementById('big-image').src = this.src;
}

function toggleFullscreen(elem) {
    elem = elem || document.documentElement;

    if (!document.fullscreenElement && !document.mozFullScreenElement &&
        !document.webkitFullscreenElement && !document.msFullscreenElement) {
        if (elem.requestFullscreen) {
            elem.requestFullscreen();
        } else if (elem.msRequestFullscreen) {
            elem.msRequestFullscreen();
        } else if (elem.mozRequestFullScreen) {
            elem.mozRequestFullScreen();
        } else if (elem.webkitRequestFullscreen) {
            elem.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
        }
    } else {
        if (document.exitFullscreen) {
            document.exitFullscreen();
        } else if (document.msExitFullscreen) {
            document.msExitFullscreen();
        } else if (document.mozCancelFullScreen) {
            document.mozCancelFullScreen();
        } else if (document.webkitExitFullscreen) {
            document.webkitExitFullscreen();
        }
    }
}

let e = document.getElementById('big-image');
document.getElementById('img-main-text').addEventListener('click', function() {
    toggleFullscreen(e);
});



