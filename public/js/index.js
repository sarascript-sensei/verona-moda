function LoadingBanners() {
  const lang = (window.localStorage.getItem('ls.language') || "").replace(/"/g, "") || "ru";

  function createElem(tag, parent, attrs) {
    let el
    attrs = typeof attrs === 'string' ? { className: attrs } : (attrs || {});
    el = document.createElement(tag)
    if (attrs) {
      Object.keys(attrs).forEach(function(i) {
        if (attrs[i] !== undefined) {
          el.setAttribute(i === 'className' ? 'class' : i, attrs[i])
        }
      })
    }
    parent.appendChild(el)
    return el;
  }

  function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min + 1)) + min;
  }

  function getCookie(name) {
    const matches = document.cookie.match(new RegExp(
      "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
  }

  const banners = [
    {
      name: 'winpos',
      link: 'https://cloudshop.ru/portal/articles/webserver-atol/',
      target: '_blank',
      languages: ["ru"],
    },
    {
      name: 'reports',
      link: '/card/reports',
      target: '_self',
      languages: ["ru", "en"],
    },
    {
      name: 'android-app-gp',
      link: 'https://play.google.com/store/apps/developer?id=CloudShop:+%D1%81%D0%BA%D0%BB%D0%B0%D0%B4,+%D1%82%D0%BE%D0%B2%D0%B0%D1%80%D1%8B,+%D0%BF%D1%80%D0%BE%D0%B4%D0%B0%D0%B6%D0%B8+%D0%B8+%D1%83%D1%87%D0%B5%D1%82+%D0%BC%D0%B0%D0%B3%D0%B0%D0%B7%D0%B8%D0%BD%D0%B0',
      target: '_blank',
      languages: ["ru", "en"],
    },
    {
      name: 'android-app-ag',
      link: 'https://appgallery.huawei.com/#/app/C102739463',
      target: '_blank',
      languages: ["ru", "en"],
    },
    {
      name: 'ios-app',
      link: 'https://itunes.apple.com/ru/app/%D1%83%D1%87%D0%B5%D1%82-%D0%B2-%D0%BC%D0%B0%D0%B3%D0%B0%D0%B7%D0%B8%D0%BD%D0%B5-cloudshop/id1276569149',
      target: '_blank',
      languages: ["ru", "en"],
    },
    {
      name: 'mspos',
      link: '/card/marketplace/m/marketplace/mspos',
      target: '_self',
      languages: ["ru"],
    },
    {
      name: 'labels',
      languages: ["ru", "en"],
    },
    {
      name: 'partners',
      link: 'https://partners.cloudshop.ru/',
      target: '_blank',
      languages: ["ru", "en"],
    },
    {
      name: 'portal',
      link: 'https://cloudshop.ru/portal/',
      target: '_blank',
      languages: ["ru", "en"],
    },
    {
      name: 'free-1-month',
      languages: ["ru", "en"],
    },
    {
      name: 'import',
      languages: ["ru", "en"],
    },
    {
      name: 'sunmi',
      languages: ["ru"],
    },
  ].filter((item) => item.languages.includes(lang))

  let inited = false
  const SHOW_TIME = 5000 // * 100
  let Wrapper, Banner, Loader, Text;

  function showBannersCheck() {
    // return true
    const check = window.localStorage.getItem('showBanners')
    if (!check) {
      window.localStorage.setItem('showBanners', +(new Date()))
      return true
    }
    const date = new Date(+check);
    if (new Date() - date >= (3 * 60 * 60 * 1000)) {
      window.localStorage.setItem('showBanners', +(new Date()))
      return true
    }
    return false
  }

  function init() {
    if (inited || !showBannersCheck()) return
    inited = true
    Wrapper = createElem('div', document.body, 'loading-banners')
    Banner = createElem('div', Wrapper, 'banner')
    Loader = createElem('div', Wrapper, 'loader')

    showBanners()
    showLoader()
    window.setTimeout(destroy, SHOW_TIME)
  }

  function showBanners() {
    const index = getRandomInt(0, banners.length - 1)
    console.log('banner', banners, index)
    const banner = banners[index]
    const Link = createElem(banner.link ? 'a' : 'div', Banner, {
      href: banner.link,
      target: banner.target
    })
    const ratio = window.devicePixelRatio === 1 ? 1 : 2;

    Link.style.backgroundImage = `url(/loading-banners/images/${lang}_x${ratio}/${banner.name}.png)`
  }

  function showLoader() {
    createElem('i', Loader, {
      className: 'spinner loading icon',
    })
    Text = createElem('span', Loader)
    Text.innerText = lang === "ru" ? 'Загрузка профиля' : "Loading profile"
  }

  function event({ detail: [name] }) {
    if (!inited) return
    switch (name) {
      case 'AUTH.SUCCEEDED':
        Text.innerText = lang === "ru" ? 'Загрузка CloudShop' : "Loading CloudShop"
        break;
      default:
    }
  }

  function destroy() {
    Wrapper && Wrapper.remove()
    document.removeEventListener('appEvent', event);
    document.removeEventListener('DOMContentLoaded', LoadingBanners)
  }

  document.addEventListener('appEvent', event);

  if (getCookie('ls.auth') && window.location.pathname.includes('/anonymous/') === false) {
    init()
  }
}

document.addEventListener('DOMContentLoaded', LoadingBanners)
