'use strict';

// Динамический адаптив

function DynamicAdapt(type) {
    this.type = type;
}
DynamicAdapt.prototype.init = function () {
    const _this = this;
    // массив объектов
    this.оbjects = [];
    this.daClassname = '_dynamic_adapt_';
    // массив DOM-элементов
    this.nodes = document.querySelectorAll('[data-da]');
    // наполнение оbjects объктами
    for (let i = 0; i < this.nodes.length; i++) {
        const node = this.nodes[i];
        const data = node.dataset.da.trim();
        const dataArray = data.split(',');
        const оbject = {};
        оbject.element = node;
        оbject.parent = node.parentNode;
        оbject.destination = document.querySelector(dataArray[0].trim());
        оbject.breakpoint = dataArray[1] ? dataArray[1].trim() : '767';
        оbject.place = dataArray[2] ? dataArray[2].trim() : 'last';
        оbject.index = this.indexInParent(оbject.parent, оbject.element);
        this.оbjects.push(оbject);
    }
    this.arraySort(this.оbjects);
    // массив уникальных медиа-запросов
    this.mediaQueries = Array.prototype.map.call(
        this.оbjects,
        function (item) {
            return '(' + this.type + '-width: ' + item.breakpoint + 'px),' + item.breakpoint;
        },
        this
    );
    this.mediaQueries = Array.prototype.filter.call(this.mediaQueries, function (item, index, self) {
        return Array.prototype.indexOf.call(self, item) === index;
    });
    // навешивание слушателя на медиа-запрос
    // и вызов обработчика при первом запуске
    for (let i = 0; i < this.mediaQueries.length; i++) {
        const media = this.mediaQueries[i];
        const mediaSplit = String.prototype.split.call(media, ',');
        const matchMedia = window.matchMedia(mediaSplit[0]);
        const mediaBreakpoint = mediaSplit[1];
        // массив объектов с подходящим брейкпоинтом
        const оbjectsFilter = Array.prototype.filter.call(this.оbjects, function (item) {
            return item.breakpoint === mediaBreakpoint;
        });
        matchMedia.addListener(function () {
            _this.mediaHandler(matchMedia, оbjectsFilter);
        });
        this.mediaHandler(matchMedia, оbjectsFilter);
    }
};
DynamicAdapt.prototype.mediaHandler = function (matchMedia, оbjects) {
    if (matchMedia.matches) {
        for (let i = 0; i < оbjects.length; i++) {
            const оbject = оbjects[i];
            оbject.index = this.indexInParent(оbject.parent, оbject.element);
            this.moveTo(оbject.place, оbject.element, оbject.destination);
        }
    } else {
        //for (let i = 0; i < оbjects.length; i++) {
        for (let i = оbjects.length - 1; i >= 0; i--) {
            const оbject = оbjects[i];
            if (оbject.element.classList.contains(this.daClassname)) {
                this.moveBack(оbject.parent, оbject.element, оbject.index);
            }
        }
    }
};
// Функция перемещения
DynamicAdapt.prototype.moveTo = function (place, element, destination) {
    element.classList.add(this.daClassname);
    if (place === 'last' || place >= destination.children.length) {
        destination.insertAdjacentElement('beforeend', element);
        return;
    }
    if (place === 'first') {
        destination.insertAdjacentElement('afterbegin', element);
        return;
    }
    destination.children[place].insertAdjacentElement('beforebegin', element);
};
// Функция возврата
DynamicAdapt.prototype.moveBack = function (parent, element, index) {
    element.classList.remove(this.daClassname);
    if (parent.children[index] !== undefined) {
        parent.children[index].insertAdjacentElement('beforebegin', element);
    } else {
        parent.insertAdjacentElement('beforeend', element);
    }
};
// Функция получения индекса внутри родителя
DynamicAdapt.prototype.indexInParent = function (parent, element) {
    const array = Array.prototype.slice.call(parent.children);
    return Array.prototype.indexOf.call(array, element);
};
// Функция сортировки массива по breakpoint и place
// по возрастанию для this.type = min
// по убыванию для this.type = max
DynamicAdapt.prototype.arraySort = function (arr) {
    if (this.type === 'min') {
        Array.prototype.sort.call(arr, function (a, b) {
            if (a.breakpoint === b.breakpoint) {
                if (a.place === b.place) {
                    return 0;
                }

                if (a.place === 'first' || b.place === 'last') {
                    return -1;
                }

                if (a.place === 'last' || b.place === 'first') {
                    return 1;
                }

                return a.place - b.place;
            }

            return a.breakpoint - b.breakpoint;
        });
    } else {
        Array.prototype.sort.call(arr, function (a, b) {
            if (a.breakpoint === b.breakpoint) {
                if (a.place === b.place) {
                    return 0;
                }

                if (a.place === 'first' || b.place === 'last') {
                    return 1;
                }

                if (a.place === 'last' || b.place === 'first') {
                    return -1;
                }

                return b.place - a.place;
            }

            return b.breakpoint - a.breakpoint;
        });
        return;
    }
};
const da = new DynamicAdapt('max');
da.init();

const isMobile = {
    Android: function () {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function () {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function () {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function () {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function () {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function () {
        return isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows();
    },
};

// Меню бургер
const iconMenu = document.querySelector('.menu-burger__icon');
const menuBody = document.querySelector('.header__menu-burger');

if (iconMenu) {
    iconMenu.addEventListener('click', function (e) {
        document.body.classList.toggle('_lock');
        iconMenu.classList.toggle('_active');
        menuBody.classList.toggle('_active');
    });
}

// Спойлеры Телефоны
document.addEventListener('DOMContentLoaded', function () {
    const langHeaderItems = document.querySelectorAll('.phone-header__item');

    langHeaderItems.forEach((item) => {
        const spoller = item.querySelector('.phone-header__spoller');
        const langHeaderList = item.querySelector('.phone-header__list');
        const chevronButton = document.querySelector('.phone-header__arrow-img');

        chevronButton.addEventListener('click', function (event) {
            langHeaderList.style.display = langHeaderList.style.display === 'none' ? 'block' : 'none';

            chevronButton.classList.toggle('rotated');

            event.stopPropagation();
        });
    });

    document.addEventListener('click', function (event) {
        const langHeaderLists = document.querySelectorAll('.phone-header__list');

        langHeaderLists.forEach((langHeaderList) => {
            if (!langHeaderList.contains(event.target)) {
                langHeaderList.style.display = 'none';
                const chevronButton = langHeaderList
                    .closest('.phone-header__item')
                    .querySelector('.phone-header__arrow-img');
                chevronButton.classList.remove('rotated');
            }
        });
    });
});

// Lang
document.addEventListener('DOMContentLoaded', function () {
    const langButtons = document.querySelectorAll('.header__lang-button');

    langButtons.forEach((button) => {
        button.addEventListener('click', function () {
            langButtons.forEach((btn) => {
                btn.classList.remove('_active-lang');
            });

            button.classList.add('_active-lang');
            const selectedLang = button.getAttribute('data-lang');
        });
    });
});

//swiper Steps
document.addEventListener('DOMContentLoaded', function () {
    if (window.innerWidth <= 768) {
        const swiperSteps = new Swiper('.swiper', {
            speed: 400,
            navigation: {
                nextEl: '.steps-swiper__next',
                prevEl: '.steps-swiper__prev',
            },
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
            },
            breakpoints: {
                425: {
                    spaceBetween: 15,
                    slidesPerView: 'auto',
                },
                320: {
                    spaceBetween: 15,
                    slidesPerView: '1.1',
                },
            },
        });
        // swiper.init(swiperSteps);
    }
});

//swiper order
document.addEventListener('DOMContentLoaded', function () {
    // Инициализация основного слайдера
    // Инициализация миниатюрного слайдера (thumbs)
    const thumbsSwiper = new Swiper('.thumbs-swiper', {
        spaceBetween: 15,
        slidesPerView: 4,
        loop: true,
        freeMode: true,
      //   loopedSlides: 4,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
    });

    const mainSwiper = new Swiper('.main-swiper', {
        speed: 700,
        spaceBetween: 50,
        loop: true,
      //   loopedSlides: 4,
      //   allowTouchMove: false,
        navigation: {
            prevEl: '.main-swiper__button-prev',
            nextEl: '.main-swiper__button-next',
        },
        thumbs: {
            swiper: thumbsSwiper,
        },
    });
});

//seo text
document.addEventListener('DOMContentLoaded', function () {
    const textContainers = document.querySelectorAll('.seo__text-container');
    const showMoreButtons = document.querySelectorAll('.seo__show-more');

    function toggleText(index) {
        const textContainer = textContainers[index];
        const showMoreButton = showMoreButtons[index];

        if (textContainer.textContent.length > 234 && window.innerWidth < 768) {
            if (textContainer.classList.contains('expanded')) {
                textContainer.classList.remove('expanded');
                showMoreButton.textContent = 'Показать еще';
                showMoreButton.classList.remove('show-more-text');
            } else {
                textContainer.classList.add('expanded');
                showMoreButton.textContent = 'Скрыть';
                showMoreButton.classList.add('show-more-text');
            }
        }
    }

    textContainers.forEach((textContainer, index) => {
        toggleText(index);

        showMoreButtons[index].addEventListener('click', function () {
            toggleText(index);
        });
    });
});

//client slider
document.addEventListener('DOMContentLoaded', function () {
    const clientSlider = new Swiper('.clients__slider', {
        slidesPerView: '7',
        initialSlide: '2',
        freeMode: true,
        speed: 400,
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
        },
        breakpoints: {
            1280: {
                slidesPerView: '5',
                initialSlide: '1',
            },
            750: {
                slidesPerView: '3.2',
            },
            600: {
                slidesPerView: '3',
            },
            480: {
                initialSlide: '1',
                slidesPerView: '2',
            },
            320: {
                centeredSlides: true,
                initialSlide: '1',
                slidesPerView: '2.3',
                spaceBetween: 40,
            },
        },
    });
});

//rent slider
document.addEventListener('DOMContentLoaded', function () {
    if (window.innerWidth <= 750) {
        //swiper rent
        const rentSlider = new Swiper('.rent__slider', {
            speed: 400,
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
            },
            breakpoints: {
                750: {
                    spaceBetween: 15,
                    slidesPerView: 'auto',
                },
                320: {
                    spaceBetween: 10,
                    slidesPerView: '1.05',
                },
            },
        });
    }
});

//footer accordions
document.addEventListener('DOMContentLoaded', function () {
    function initAccordions(singleOpen = true) {
        const accordions = document.querySelectorAll('.accordion-triger');

        accordions.forEach((accordion) => {
            accordion.addEventListener('click', function () {
                const parent = this.parentElement;
                const panel = parent.querySelector('.accordion-panel');
                const svg = this.querySelector('svg');

                if (singleOpen) {
                    accordions.forEach((otherAccordion) => {
                        const otherParent = otherAccordion.parentElement;
                        const otherPanel = otherParent.querySelector('.accordion-panel');
                        const otherSvg = otherAccordion.querySelector('svg');

                        if (otherAccordion !== accordion) {
                            otherPanel.style.maxHeight = '0';
                            otherSvg.classList.remove('rotate');
                            otherParent.classList.remove('ac_active');
                        }
                    });
                }

                if (!parent.classList.contains('ac_active')) {
                    // Открывание выбранного аккордеона
                    parent.classList.add('ac_active');
                    panel.style.maxHeight = panel.scrollHeight + 'px';
                    svg.classList.add('rotate');
                } else {
                    // Закрывание выбранного аккордеона
                    panel.style.maxHeight = '0';
                    svg.classList.remove('rotate');
                    parent.classList.remove('ac_active');
                }
            });
        });
    }
    // Инициализация аккордеонов с разрешением открытия нескольких
    initAccordions(true);
});
