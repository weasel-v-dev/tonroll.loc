const userAgent = navigator.userAgent || navigator.vendor || window.opera;
const $menu = document.querySelector('.js-trl-menu');
// document.querySelectorAll('.js-trl-table').forEach(function (el) {
//
//     if (/android/i.test(userAgent)) {
//         el.style.height = 'calc(100vh - 500px)';
//         if(window.matchMedia("(max-width: 335px)").matches) {
//             el.style.height = 'calc(100vh - 485px)';
//         }
//     } else if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
//         el.style.height = 'calc(100vh - 512px)';
//     } else {
//         el.style.height = 'calc(100vh - 500px)';
//         if(window.matchMedia("(max-width: 335px)").matches) {
//             el.style.height = 'calc(100vh - 485px)';
//         }
//     }
// });

if (/android/i.test(userAgent)) {
    $menu.style.bottom = '45px';
    document.querySelector('input').value = 'android' ;
} else if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
    $menu.style.bottom = '25px';
    document.querySelector('input').value = 'iPhone';
} else {
    $menu.style.bottom = '45px';
    document.querySelector('input').value = 'all';
}
