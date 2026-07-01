'use strict';

const container = document.getElementById('shopContainer');
const heading = document.querySelector('.headingTtl');
const tabs = document.querySelectorAll('.categoryTabs button');
const categories = ['omiyage', 'restaurant', 'food', 'service'];
const categoryMap = {
    omiyage: 'おみやげ',
    restaurant: 'レストラン・カフェ',
    food: 'フード・スィーツ',
    service: 'サービス'
};
let shopData= [];
let currentCategory = "omiyage";

init();

async function init() {
    await fetchData();
    setupTabs();
    initTab();
}
async function fetchData() {
    const res = await fetch("/serviceinfo/assets/js/sendaiekinaka/ekinaka-shop.json");
    shopData = await res.json();
}

function setupTabs() {
    tabs.forEach(tab => {
        tab.addEventListener('click', ()=> {
            const category = tab.dataset.category;
            document.body.classList.remove(...categories);
            document.body.classList.add(category);
            switchTab(category);
        })
    })
}

function switchTab(category) {
    currentCategory = category;

    tabs.forEach(tab => {
        tab.classList.toggle('active', tab.dataset.category === category);
    });

    const activeTab = [...tabs].find(tab => tab.dataset.category === category);

    if(activeTab) {
        const categoryName = activeTab.textContent.trim();
        heading.textContent = categoryName;
        heading.className = 'headingTtl fontM '+ currentCategory;
    }
    render();
}

function initTab() {
    const params = new URLSearchParams(window.location.search);
    const tab = params.get('tab');
    const target = document.querySelector(`.categoryTabs button[data-category="${tab}"]`);
    if (target) {
        switchTab(tab);
    } else {
        switchTab(currentCategory);
    }
}

function render() {
    const filtered = shopData.filter(
        shop => shop.category === currentCategory
    );

    const grouped = groupByArea(filtered);
    let html = '';

    Object.keys(grouped).forEach(area => {
        html += `
        <div class="areaBlock">
        <h2 class="areaTitle ${currentCategory} fontM"><span>[${area}]</span></h2>
        <ul class="shoplist">
          ${grouped[area].map(createShopHTML).join("")}
        </ul>
        </div>`;
    });
    container.innerHTML = html;
}

function groupByArea(list) {
    const result = {};
    list.forEach(shop => {
        if(!result[shop.area]) {
            result[shop.area] = [];
        }
        result[shop.area].push(shop);
    });
    return result;
}

function getTaxfreeLabel(type) {
    if (!type || type === "none") return "";

    if(type === "red") {
        return `<li><p class="tax red">TAXFREE</p></li>`;
    }
    if(type === "blue") {
        return `<li><p class="tax blue">TAXFREE</p></li>`;
    }
    return "";
}

function createShopHTML(shop) {
    const time = shop.time.replace(/\\n/g, '<br>');
    const categoryLabel = categoryMap[shop.category] || shop.category;

    const newClass = shop.new ? 'new' : '';
    return `
    <li class="${newClass}"><a href="${shop.url}" class="btn">
    <div class="resizeRatioBox"><div class="resizeRatioBoxIn"><p class="resizeRatioImg"><img src="/serviceinfo/assets/img/sendaiekinaka/shoplist/${shop.category}/${shop.image}" onerror="this.src='/serviceinfo/assets/img/sendaiekinaka/shoplist/noimage.jpg'" alt="${shop.name}"></p></div></div>
    <ul class="LBoxTagList">${getTaxfreeLabel(shop.taxfree)}</ul>
    <p class="ttl">${shop.name} / ${categoryLabel}</p>
    <p class="desc">${time}</p></a></li>`;
}



