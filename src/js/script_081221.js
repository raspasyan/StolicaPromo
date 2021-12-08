adultConfirm.addEventListener("click", e => adult.style.display = 'none');

let cd = new Date();
let dt = new Date("2022-01-12");

if (cd > dt) {
    let element = document.createElement("img");
    element.src = "src/media/discount_02.jpg";
    gallery.appendChild(element);
} else {
    const REGION_DATA = [
        {
            title: "Регионы",
            qty: 36
        },
        {
            title: "Зея, Тында (Чегдомын, Ургал)",
            qty: 36
        },
        {
            title: "Хабаровск",
            qty: 36
        },
        {
            title: "Чегдомын",
            qty: 0
        },
        {
            title: "Николаевск",
            qty: 24
        },
        {
            title: "Биробиджан",
            qty: 36
        }
    ];

    let REGION = (window.location.search ? (window.location.search.replace('?', '').split("=")[1] != "" ? Number(window.location.search.replace( '?', '').split("=")[1]) : 0) : 0);
    if (REGION >= REGION_DATA.length) REGION = 0;
    REGION = (REGION == 3 ? 1 : REGION); // Чегдомын показываем как Зею

    console.info(REGION_DATA[REGION].title);

    for (let index = 1; index <= REGION_DATA[REGION].qty; index++) {
        let elementImg = document.createElement("img");
        elementImg.src = "src/media/reg_" + String(REGION) + "/" + index + ".jpg";
        gallery.appendChild(elementImg);
    }

    setTimeout(() => gallery.children[0].scrollIntoView(), 333);
}