/**
 * Pagination
 * @type {number}
 */



const usersRefs = JSON.parse(JSON.stringify([
    {
        id: 1,
        name: 'Dmit34t334triy',
        avatar: '/assets/img/plug/avatar.png',
        income: 100000,
        amountRefUsers: 124,
        date: '14.01.2023 12:22:57'
    },
    {
        id: 2,
        name: '3r3fdver',
        avatar: '/assets/img/plug/avatar.png',
        income: 100000,
        amountRefUsers: 124,
        date: '14.01.2023 12:22:57'
    },
    {
        id: 3,
        name: 'dsfe3cc',
        avatar: '/assets/img/plug/avatar.png',
        income: 100000,
        amountRefUsers: 124,
        date: '14.01.2023 12:22:57'
    },
    {
        id: 4,
        name: 're343',
        avatar: '/assets/img/plug/avatar.png',
        income: 100000,
        amountRefUsers: 124,
        date: '14.01.2023 12:22:57'
    },
    {
        id: 5,
        name: 'htrhtyy',
        avatar: '/assets/img/plug/avatar.png',
        income: 100000,
        amountRefUsers: 124,
        date: '14.01.2023 12:22:57'
    },
    {
        id: 6,
        name: '234232342',
        avatar: '/assets/img/plug/avatar.png',
        income: 100000,
        amountRefUsers: 124,
        date: '14.01.2023 12:22:57'
    },
    {
        id: 7,
        name: 'cvbcvbcbcv',
        avatar: '/assets/img/plug/avatar.png',
        income: 100000,
        amountRefUsers: 124,
        date: '14.01.2023 12:22:57'
    },
    {
        id: 8,
        name: 'dsfdsfsf',
        avatar: '/assets/img/plug/avatar.png',
        income: 100000,
        amountRefUsers: 124,
        date: '14.01.2023 12:22:57'
    },
    {
        id: 9,
        name: 'sdfdsf',
        avatar: '/assets/img/plug/avatar.png',
        income: 100000,
        amountRefUsers: 124,
        date: '14.01.2023 12:22:57'
    }
]));


const ITEMS_PER_PAGE = 5;
let currentPage = 1;

function displayItems(page) {
    let start = (page - 1) * ITEMS_PER_PAGE;
    let end = start + ITEMS_PER_PAGE;

    let itemsToDisplay = usersRefs.slice(start, end);

    let $usersRefs = '';
    itemsToDisplay.forEach(function (prop) {
        $usersRefs += `<tr class="trl-player-bet rounded-5  trl-bg-light-2 ">
            <td class="border-0">
                <div class="d-flex">
                    <div class="me-1  rounded-3">
                        <img src="${prop.avatar}" class="trl-player-bet__avatar" alt="">
                    </div>
                    <div class="me-2">
                        <div  class="trl-player-bet__name">${prop.name}</div>
                        <div>${prop.id}</div>
                    </div>
                </div>
            </td>
            <td class="border-0">
                <div class="text-center"><span  class="trl-gr-green lh-1 p-1 d-inline-block rounded-3">${prop.income}</span></div>
            </td>
            <td class="border-0">
                <div class="text-center"><span  class="trl-gr-blue lh-1 p-1 d-inline-block rounded-3">${prop.amountRefUsers}</span></div>
            </td>
            <td class="border-0">
                <div class="text-center"><span  class="trl-gr-yellow lh-1 p-1 d-inline-block rounded-3">${prop.date}</span></div>
            </td>
        </tr>`;
    })

    $('.ref tbody').html($usersRefs);
}



function displayPaginationControls(currentPage, totalPages) {
    let $controls = '';

    if (currentPage > 1) {
        $controls += `<button class="pagination-btn lh-1 p-2 trl-bg-light-2 rounded-3 me-1" data-page="${currentPage - 1}"><</button>`;
    }

    for (let i = 1; i <= totalPages; i++) {
        // Если это начальные, конечные страницы или страницы вокруг текущей страницы
        if (i === currentPage) {
            $controls += `<button class="pagination-btn lh-1 p-2 trl-gr-blue rounded-3 me-1" data-page="${i}">${i}</button>`;
        }
        else if(i === 1 || i === totalPages || (i >= currentPage - 1 && i <= currentPage + 1)) {
            $controls += `<button class="pagination-btn lh-1 p-2 trl-bg-light-2 rounded-3 me-1" data-page="${i}">${i}</button>`;
        }
        else if (i === currentPage - 2 || i === currentPage + 2) {
            $controls += `<span class="me-1">...</span>`;
        }
    }

    if (currentPage < totalPages) {
        $controls += `<button class="pagination-btn lh-1 p-2 trl-bg-light-2 rounded-3" data-page="${currentPage + 1}">></button>`;
    }

    $('.pagination-controls').html($controls);
}

$(document).on('click', '.pagination-btn', function() {
    currentPage = $(this).data('page');
    displayItems(currentPage);
    displayPaginationControls(currentPage, totalPages);
});
let totalPages = Math.ceil(usersRefs.length / ITEMS_PER_PAGE);
displayItems(currentPage);
displayPaginationControls(currentPage, totalPages);


/**
 * Copy ref link
 */

function copyURL() {
    var urlField = document.getElementById("urlInput");

    urlField.select();
    urlField.setSelectionRange(0, 99999);

    document.execCommand("copy");
}
$('#copyBtn').on('click', copyURL);
