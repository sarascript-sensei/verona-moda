const host = window.location.host;

const base = {
  name: "cloudshop",
  currency: "RUB",
  country: "country_RU",
  phone_prefix: "+7",
  partner: "",
  integration_menu: true,
  yandexPartner: true,
  pxVK: true,
  lang: "ru",
  dadata: true,
  docServer: "doc-server.cloudshop.ru",
  websocket: "socket.cloudshop.ru",
  billing: "billing.cloudshop.ru",
  export_uri: "export.cloudshop.ru",
  googleTagManager: "GTM-WBBJ9S",
  pos_windows_uri: "//192604.selcdn.ru/winpos/CloudShopPOSLatest.exe",
  terms_link: "https://cloudshop.ru/welcome/info/terms.html",
  metrics_link: "https://metrics.cloudshop.ru/",
  headwayapp: "JVD9Wx",
  register_promo_code: true,
  menuBottomLinks: [
    {
      url: "https://cloudshop.ru/portal/",
      icon: "question circle outline",
      placeholder: "KNOWLEDGE_BASE"
    },
    {
      url: "https://play.google.com/store/apps/developer?id=CloudShop:+%D1%81%D0%BA%D0%BB%D0%B0%D0%B4,+%D1%82%D0%BE%D0%B2%D0%B0%D1%80%D1%8B,+%D0%BF%D1%80%D0%BE%D0%B4%D0%B0%D0%B6%D0%B8+%D0%B8+%D1%83%D1%87%D0%B5%D1%82+%D0%BC%D0%B0%D0%B3%D0%B0%D0%B7%D0%B8%D0%BD%D0%B0",
      icon: "android",
      placeholder: "ANDROID_APP"
    },
    {
      url: "https://itunes.apple.com/ru/app/%D1%83%D1%87%D0%B5%D1%82-%D0%B2-%D0%BC%D0%B0%D0%B3%D0%B0%D0%B7%D0%B8%D0%BD%D0%B5-cloudshop/id1276569149",
      icon: "apple",
      placeholder: "IPHONE_APP"
    },
  ],
  messenger: {
    name: "carrotquest",
    active: true,
    domain: "carrotquest.io",
    key: "25978-ccb24a76cf1dc17d8b27697209",
  },
}

const sites = {
  "web.cloudshop.kz": {
    currency: "KZT",
    country: "country_KZ",
    phone_prefix: "+77",
    partner: "5b966a4a690687000926f442",
    integration_menu: false,
    yandexPartner: false,
  },
  "web.cloudshop.md": {
    currency: "MDL",
    country: "country_MD",
    phone_prefix: "+373",
    partner: "5ca73f757896f810430aefd2",
    integration_menu: false,
    yandexPartner: false,
  },
  "web.cs.deskpos.app": {
    currency: "",
    country: "",
    phone_prefix: "",
    integration_menu: false,
    yandexPartner: false,
    pxVK: false,
    lang: "en",
    docServer: "docs.cs.deskpos.app",
    websocket: "socket.cs.deskpos.app",
    billing: "billing.cs.deskpos.app",
  },
  "web.ainur.app": {
    name: "ainur",
    currency: "",
    country: "",
    phone_prefix: "",
    partner: "",
    integration_menu: true,
    yandexPartner: false,
    pxVK: false,
    lang: "en",
    dadata: false,
    docServer: "doc-server.ainur.app",
    websocket: "socket.ainur.app",
    billing: "billing.ainur.app",
    export_uri: "export.ainur.app",
    googleTagManager: "G-K30SK8810N",
    pos_windows_uri: "//ainur-static.s3.eu-central-1.amazonaws.com/AinurPOS+Setup+Latest.exe",
    terms_link: "https://ainurpos.com/terms-and-conditions/",
    metrics_link: "https://metrics.ainur.app/",
    headwayapp: "7O4MPJ",
    register_promo_code: true,
    menuBottomLinks: [
      {
        url: "https://cloudshop.ru/portal/",
        icon: "question circle outline",
        placeholder: "KNOWLEDGE_BASE"
      },
      {
        url: "https://play.google.com/store/apps/developer?id=CloudShop:+%D1%81%D0%BA%D0%BB%D0%B0%D0%B4,+%D1%82%D0%BE%D0%B2%D0%B0%D1%80%D1%8B,+%D0%BF%D1%80%D0%BE%D0%B4%D0%B0%D0%B6%D0%B8+%D0%B8+%D1%83%D1%87%D0%B5%D1%82+%D0%BC%D0%B0%D0%B3%D0%B0%D0%B7%D0%B8%D0%BD%D0%B0",
        icon: "android",
        placeholder: "ANDROID_APP"
      },
      {
        url: "https://itunes.apple.com/ru/app/%D1%83%D1%87%D0%B5%D1%82-%D0%B2-%D0%BC%D0%B0%D0%B3%D0%B0%D0%B7%D0%B8%D0%BD%D0%B5-cloudshop/id1276569149",
        icon: "apple",
        placeholder: "IPHONE_APP"
      },
    ],
    messenger: {
      name: "dashly",
      active: true,
      domain: "dashly.app",
      key: "4632-9fca0bbe9841aae8b5ce6e1d407",
    },
  },
}

const site = Object.assign(base, sites[host])

angular.module('cloudshop')
  .constant('CONFIG', {
    host,
    metrics: {
      active: true
    },
    export: {
      catalog: `https://${site.export_uri}/catalog_export`,
      docs: `https://${site.export_uri}/docs`,
      labels: `https://${site.docServer}/print/labels`,
    },
    ...site,
  })
  .run(['$rootScope', 'CONFIG', function($rootScope, CONFIG) {
    $rootScope.CONFIG = CONFIG;
  }])

console.warn('HOST SETTINGS', site);