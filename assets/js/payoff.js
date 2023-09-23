/**
 * Pagination
 * @type {number}
 */



const payoffs = JSON.parse(JSON.stringify([
    {
        id: 1,
        amount: '12000',
        card: '2347236jdgkdjf4984sfgd',
        status: 'Успешно',
        date: '14.01.2023 12:22:57'
    },
    {
        id: 2,
        amount: '12000',
        card: '2347236jdgkdjf4984sfgd',
        status: 'Успешно',
        date: '14.01.2023 12:22:57'
    },
    {
        id: 3,
        amount: '12000',
        card: '2347236jdgkdjf4984sfgd',
        status: 'Успешно',
        date: '14.01.2023 12:22:57'
    },
    {
        id: 4,
        amount: '12000',
        card: '2347236jdgkdjf4984sfgd',
        status: 'Успешно',
        date: '14.01.2023 12:22:57'
    },
    {
        id: 5,
        amount: '12000',
        card: '2347236jdgkdjf4984sfgd',
        status: 'Успешно',
        date: '14.01.2023 12:22:57'
    },
    {
        id: 6,
        amount: '12000',
        card: '2347236jdgkdjf4984sfgd',
        status: 'Успешно',
        date: '14.01.2023 12:22:57'
    },
    {
        id: 7,
        amount: '12000',
        card: '2347236jdgkdjf4984sfgd',
        status: 'Успешно',
        date: '14.01.2023 12:22:57'
    },
    {
        id: 8,
        amount: '12000',
        card: '2347236jdgkdjf4984sfgd',
        status: 'Успешно',
        date: '14.01.2023 12:22:57'
    },
    {
        id: 9,
        amount: '12000',
        card: '2347236jdgkdjf4984sfgd',
        status: 'Успешно',
        date: '14.01.2023 12:22:57'
    }
]));


const ITEMS_PER_PAGE = 5;
let currentPage = 1;

function displayItems(page) {
    let start = (page - 1) * ITEMS_PER_PAGE;
    let end = start + ITEMS_PER_PAGE;

    let itemsToDisplay = payoffs.slice(start, end);

    let $elements = '';
    itemsToDisplay.forEach(function (prop) {
        $elements += ` <tr class="pag trl-player-bet rounded-5  trl-bg-light-2">
          <td class="border-0">
            <div class="text-center"><span  class="trl-gr-black lh-1 p-1 d-inline-block rounded-3">${prop.id}</span></div>
          </td>
          <td class="border-0">
            <div class="text-center"><span  class="trl-gr-blue lh-1 p-1 d-inline-block rounded-3">${prop.amount}</span></div>
          </td>
          <td class="border-0">
            <div class="text-center"><span  class="trl-gr-black trl-player-bet__name lh-1 p-1 d-inline-block rounded-3">${prop.card}</span></div>
          </td>
          <td class="border-0">
            <div class="text-center"><span  class="trl-gr-red lh-1 p-1 d-inline-block rounded-3">${prop.status}</span></div>
          </td>
          <td class="border-0">
            <div class="text-center"><span  class="trl-gr-orange nowrap lh-1 p-1 d-inline-block rounded-3">${prop.date}</span></div>
          </td>
        </tr>`;
    })

    $('.payoff tbody').html($elements);
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
let totalPages = Math.ceil(payoffs.length / ITEMS_PER_PAGE);
displayItems(currentPage);
displayPaginationControls(currentPage, totalPages);

