<!DOCTYPE html>
<!-- saved from url=(0033)https://web.cloudshop.ru/pos/home -->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>CloudShop POS</title>
    <link rel="preload" href="https://web.cloudshop.ru/pos/b993e6ff8d2be1c4327d0882139610e1.woff" as="font"
          type="font/woff2" crossorigin="">
    <link href="{{asset('css/2.29db86c4.chunk.css')}}" rel="stylesheet">
    <link href="{{asset('css/main.4167219f.chunk.css')}}" rel="stylesheet">
    <link href="{{asset('css/pos.css')}}" rel="stylesheet">
    <meta name="viewport"
          content="width=900, initial-scale=0.8533333333333334, minimum-scale=0.8533333333333334, maximum-scale=0.8533333333333334, user-scalable=0, viewport-fit=cover">
<style>
    .ffqSLT {
        height: 60px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-wrap: nowrap;
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
        position: relative;
    }
</style>
</head>
<body class="theme-light">
<div id="root">
    <div class="loadingBar waiting">
        <div class="message"><i class="fa icon fa-spinner fa-fw fa-spin"></i>
            <span></span>
        </div>
    </div>
    <div class="sc-cLQEGU iSQqgt">
        <div class="sc-gqPbQI briKsR">
            <div class="searchField">
                <div class="action styl-material">
                    <div class="main-tabs">
                        <div name="catalog" icon="cubes" class="main-tabs-item">
                            <i class="fa icon fa-cubes fa-fw"></i></div>
                        <div name="categories" icon="tags" class="main-tabs-item"><i class="fa icon fa-tags fa-fw"></i>
                        </div>
                        <div name="groups" icon="folder" class="main-tabs-item main-tabs-item--active"><i
                                class="fa icon fa-folder fa-fw"></i></div>
                    </div>
                </div>
                <input class="search-field" autocomplete="off"
                       placeholder="Поиск по наименованию, артикулу, штрихкоду, коду и описанию" type="text" value="">
            </div>

            <div class="catalogList sc-iuJeZd jiptiQ">
                <div class="sc-esOvli ftlVYe"></div>
                <div style="width: 100%; position: relative; height: 100%;">
                    <div class="scroll-bar" style="position: relative; overflow: hidden; width: 100%; height: 100%;">
                        <div
                            style="position: absolute; inset: 0px; overflow: scroll; margin-right: -17px; margin-bottom: -17px;">
                            <div>
                                <div>
                                    <div class="products">
                                        <div style="position: relative; height: 638px;">
                                            <div style="transform: translate3d(0px, 0px, 0px);">
                                                <div>
                                                    @foreach($products as $product)
                                                    <div class="catalog-card catalog-card-grid item inventory"
                                                         draggable="false">
                                                        <div>
                                                            <div class="stock"><span>    <a href="{{ route('add.to.cart',[$product->id]) }}">{{$product->count}} шт</a></span></div>
                                                            <div class="img">
                                                                <div class="image-wrapper"
                                                                     style="height: 130px; width: 100%; border-radius: 4px;">
                                                                    <img class="image loaded"
                                                                         src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                                                         style="background-image: url(&quot;https://pic.cloudshop.ru/v2/c53b80df-773a-421b-b695-1c432c2d6105.jpg?s=180,151.2&quot;);"><i
                                                                        class="fa icon fa-image fa-fw"
                                                                        style="font-size: 78px;"></i></div>
                                                            </div>
                                                            <div class="text">
                                                                <div class="title"><span>{{$product->name}}</span></div>
                                                                {{--<div class="sku"><i
                                                                        class="fa icon fa-asterisk fa-fw"></i><span>sfasfsaf</span>
                                                                </div>--}}
                                                            </div>
                                                            <div class="price">{{$product->price}} сом</div>
                                                            <div class="label">0</div>
                                                        </div>
                                                    </div>
                                                </a>
                                                    @endforeach

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span style="display: none; opacity: 0;"><div
                                style="position: relative; display: block; height: 100%; cursor: pointer; border-radius: inherit; background-color: rgba(0, 0, 0, 0.2); width: 0px;"></div></span>
                        <div class="scroll-bar-track" style="width: 12px; opacity: 0;">
                            <div
                                style="position: relative; display: block; width: 100%; cursor: pointer; border-radius: inherit; background-color: rgba(0, 0, 0, 0.2); height: 392px; transform: translateY(0px);"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="statusBar sc-hEsumM iHBpSM">
                <div class="sc-dNLxif ccWqrW">
                    <div class="sc-jqCOkK ffqFvl"><i class="fa icon fa-bars fa-fw"></i> Меню</div>
                    <div class="sc-kpOJdX dyQVVw">
                        <div class="sc-jbKcbu fSFqmP">
                            <div class="image-wrapper" style="height: 44px; width: 44px; border-radius: 22px;"><img
                                    class="image"
                                    src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="><i
                                    class="animate fa icon fa-image fa-fw" style="font-size: 26.4px;"></i></div>
                            <div><span>Атай</span><a href="https://web.cloudshop.ru/pos/home">Выйти</a></div>
                        </div>
                        <div class="sc-ckVGcZ doNOSw"></div>
                        <div color="systemRed" class="sc-dxgOiQ eSXFEi"><i class="fa icon fa-times fa-fw"></i>Закрыть
                            смену
                        </div>
                        <div class="sc-dxgOiQ hEwctr"><i class="fa icon fa-repeat fa-fw"></i>Создать возврат</div>
                        <div class="sc-ckVGcZ doNOSw"></div>
                        <a class="sc-dxgOiQ hEwctr" href="https://web.cloudshop.ru/pos/home/settings/base"><i
                                class="fa icon fa-cogs fa-fw"></i>Настройки</a><a class="sc-dxgOiQ hEwctr"
                                                                                  href="https://web.cloudshop.ru/pos/home/shift"><i
                                class="fa icon fa-clone fa-fw"></i>Смены</a></div>
                </div>
                <div class="sc-ktHwxA eVUKKY">
                    <div class="sc-fYxtnH jvSUuq"><span class="sc-tilXH cHPSQw"><span>Магазин</span></span> / Смена #3
                    </div>
                    <div class="sc-uJMKN deaqBI"></div>
                </div>
                <div class="status">
                    <div style="white-space: nowrap;">18 августа, четверг
                        <time>01:43</time>
                    </div>
                    <div class="connect" title="Есть интернет-соединение"><i class="active fa icon fa-wifi fa-fw"></i>
                    </div>
                </div>
            </div>
        </div>
@include('components.interface_modal')
</div>
</div>
<script async="" src="{{asset('js/tag.js')}}"></script>
<script src="{{asset('js/api.min.js')}}"></script>
<script>!function (f) {
        function e(e) {
            for (var r, t, n = e[0], o = e[1], u = e[2], l = 0, p = []; l < n.length; l++) t = n[l], Object.prototype.hasOwnProperty.call(a, t) && a[t] && p.push(a[t][0]), a[t] = 0;
            for (r in o) Object.prototype.hasOwnProperty.call(o, r) && (f[r] = o[r]);
            for (s && s(e); p.length;) p.shift()();
            return c.push.apply(c, u || []), i()
        }

        function i() {
            for (var e, r = 0; r < c.length; r++) {
                for (var t = c[r], n = !0, o = 1; o < t.length; o++) {
                    var u = t[o];
                    0 !== a[u] && (n = !1)
                }
                n && (c.splice(r--, 1), e = l(l.s = t[0]))
            }
            return e
        }

        var t = {}, a = {1: 0}, c = [];

        function l(e) {
            if (t[e]) return t[e].exports;
            var r = t[e] = {i: e, l: !1, exports: {}};
            return f[e].call(r.exports, r, r.exports, l), r.l = !0, r.exports
        }

        l.m = f, l.c = t, l.d = function (e, r, t) {
            l.o(e, r) || Object.defineProperty(e, r, {enumerable: !0, get: t})
        }, l.r = function (e) {
            "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {value: "Module"}), Object.defineProperty(e, "__esModule", {value: !0})
        }, l.t = function (r, e) {
            if (1 & e && (r = l(r)), 8 & e) return r;
            if (4 & e && "object" == typeof r && r && r.__esModule) return r;
            var t = Object.create(null);
            if (l.r(t), Object.defineProperty(t, "default", {
                enumerable: !0,
                value: r
            }), 2 & e && "string" != typeof r) for (var n in r) l.d(t, n, function (e) {
                return r[e]
            }.bind(null, n));
            return t
        }, l.n = function (e) {
            var r = e && e.__esModule ? function () {
                return e.default
            } : function () {
                return e
            };
            return l.d(r, "a", r), r
        }, l.o = function (e, r) {
            return Object.prototype.hasOwnProperty.call(e, r)
        }, l.p = "/pos/";
        var r = this["webpackJsonpcloudshop-pos"] = this["webpackJsonpcloudshop-pos"] || [], n = r.push.bind(r);
        r.push = e, r = r.slice();
        for (var o = 0; o < r.length; o++) e(r[o]);
        var s = n;
        i()
    }([])</script>
<script src="{{asset('js/2.e6333d8e.chunk.js')}}"></script>
<script src="{{asset('js/main.996b00bf.chunk.js')}}"></script>
<script type="text/javascript">!function (e, t, a, c, n, m, r) {
        e.ym = e.ym || function () {
            (e.ym.a = e.ym.a || []).push(arguments)
        }, e.ym.l = 1 * new Date, m = t.createElement(a), r = t.getElementsByTagName(a)[0], m.async = 1, m.src = "https://mc.yandex.ru/metrika/tag.js", r.parentNode.insertBefore(m, r)
    }(window, document, "script"), ym(21370750, "init", {
        id: 21370750,
        clickmap: !1,
        trackLinks: !1,
        accurateTrackBounce: !0,
        trackHash: !1
    })</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/21370750" style="position:absolute;left:-9999px" alt=""/></div>
</noscript>
<div>
    <div id="carrotquest-messenger-collapsed-container" class="carrotquest-css-reset carrotquest-messenger-right_bottom"
         data-touch="false" style="display: none;">
        <div id="chat-container">
            <div id="icon-container">
                <iframe id="carrot-messenger-collapsed-frame" name="carrot-messenger-collapsed-frame"
                        class="carrot-messenger-collapsed-frame" data-resize-width="1" data-resize-height="1"
                        src="./CloudShop POS_files/saved_resource.html"></iframe>
            </div>
            <div id="bubble-container" style="width: 5px !important; height: 0px !important;">
                <iframe id="carrot-messenger-bubble" name="carrot-messenger-bubble" class="carrot-messenger-bubble"
                        data-resize-width="1" data-resize-height="1"
                        src="./CloudShop POS_files/saved_resource(1).html"></iframe>
            </div>
        </div>
    </div>
</div>
</body>
</html>
