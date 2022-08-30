
<div class="main-content">
<!-- Меню сайта -->
<!----><div ui-view="menu" id="subMenu"><div class="ui menu vertical">
        <div ng-class="[ dropdown_class, class, {disabled: disabled}, ngClass ]" ng-transclude="" overlay="" class="item create ui dropdown action-activate" tabindex="0">
            <div class="ui blue button full-width" translate="">Создать документ</div>
            <div class="ui blue icon button short-width">
                <i class="icon plus"></i>
            </div>
            <div class="menu" tabindex="-1">
                <div class="row">
                    <div class="col-xs-24">
                        <!----><!----><a class="item" ng-repeat="item in ::newDocument.d" ng-if="!item.divider" ng-bind="::item.title | translate" ui-sref="authenticated.card.doc_create.sell" ui-sref-active="active" href="https://web.cloudshop.ru/card/docs/sell">Продажа</a><!----><!----><!----><a class="item" ng-repeat="item in ::newDocument.d" ng-if="!item.divider" ng-bind="::item.title | translate" ui-sref="authenticated.card.doc_create.purchase" ui-sref-active="active" href="https://web.cloudshop.ru/card/docs/purchase">Закупка</a><!----><!----><!----><a class="item" ng-repeat="item in ::newDocument.d" ng-if="!item.divider" ng-bind="::item.title | translate" ui-sref="authenticated.card.doc_create.return_sell" ui-sref-active="active" href="https://web.cloudshop.ru/card/docs/return-sell">Возврат продажи</a><!----><!----><!----><a class="item" ng-repeat="item in ::newDocument.d" ng-if="!item.divider" ng-bind="::item.title | translate" ui-sref="authenticated.card.doc_create.return_purchase" ui-sref-active="active" href="https://web.cloudshop.ru/card/docs/return-purchase">Возврат закупки</a><!----><!----><!----><a class="item" ng-repeat="item in ::newDocument.d" ng-if="!item.divider" ng-bind="::item.title | translate" ui-sref="authenticated.card.doc_create.changes_inventory" ui-sref-active="active" href="https://web.cloudshop.ru/card/docs/changes-inventory">Инвентаризация</a><!----><!----><!----><a class="item" ng-repeat="item in ::newDocument.d" ng-if="!item.divider" ng-bind="::item.title | translate" ui-sref="authenticated.card.doc_create.changes_in" ui-sref-active="active" href="https://web.cloudshop.ru/card/docs/changes-in">Оприходование</a><!----><!----><!----><a class="item" ng-repeat="item in ::newDocument.d" ng-if="!item.divider" ng-bind="::item.title | translate" ui-sref="authenticated.card.doc_create.changes_out" ui-sref-active="active" href="https://web.cloudshop.ru/card/docs/changes-out">Списание</a><!----><!----><!----><a class="item" ng-repeat="item in ::newDocument.d" ng-if="!item.divider" ng-bind="::item.title | translate" ui-sref="authenticated.card.doc_create.moving" ui-sref-active="active" href="https://web.cloudshop.ru/card/docs/moving">Перемещение</a><!----><!---->

                        <div class="ui divider"></div>

                        <h3 translate="">Деньги</h3>
                        <!----><!----><a class="item" ng-repeat="item in ::newDocument.p" ng-if="!item.divider" ng-bind="::item.title | translate" ui-sref="authenticated.card.pay_create.cash_parish" ui-sref-active="active" href="https://web.cloudshop.ru/card/pay/cash-parish">Приход</a><!----><!----><!----><a class="item" ng-repeat="item in ::newDocument.p" ng-if="!item.divider" ng-bind="::item.title | translate" ui-sref="authenticated.card.pay_create.cash_outflow" ui-sref-active="active" href="https://web.cloudshop.ru/card/pay/cash-outflow">Расход</a><!----><!----><!----><a class="item" ng-repeat="item in ::newDocument.p" ng-if="!item.divider" ng-bind="::item.title | translate" ui-sref="authenticated.card.pay_create.cash_transfer" ui-sref-active="active" href="https://web.cloudshop.ru/card/pay/cash-transfer">Перевод</a><!----><!---->
                    </div>
                </div>
            </div>
        </div>
        <div class="items">

            <div class="baron__clipper" style="overflow: hidden;"><div class="main-menu scroll-menu baron baron__scroller _macosx _scrollbar" scroll="" scroll-wrap="true" data-baron-v-id="0" style="overflow-y: scroll; box-sizing: border-box; margin: 0px; border: 0px;">
                    <!----><div ng-repeat="item in menu | filter:{hidden:&#39;!true&#39;}" class="item-block blue">
                        <!---->

                        <!----><a class="item blue" ng-class="::item.className" ui-sref-active="active" ui-sref="authenticated.start" ng-if="::item.url" href="https://web.cloudshop.ru/start">

                            <span translate=""><i class="fas fa-rocket fa-fw"></i>&nbsp; Стартуем!</span>
                            <span ng-show="item.id === &#39;reports&#39;" class="menu-label ng-hide">new</span>
                        </a><!---->

                        <div class="menu ng-hide" ng-show="item.sub">
                            <!---->
                        </div>
                    </div><!----><div ng-repeat="item in menu | filter:{hidden:&#39;!true&#39;}" class="item-block ">
                        <!---->

                        <!----><a class="item active" ng-class="::item.className" ui-sref-active="active" ui-sref="authenticated.dashboard" ng-if="::item.url" href="{{route("home")}}">
                            <span translate=""><i class="fas fa-th fa-fw"></i>&nbsp; Главная</span>
                            <span ng-show="item.id === &#39;reports&#39;" class="menu-label ng-hide">new</span>
                        </a><!---->

                        <div class="menu ng-hide" ng-show="item.sub">
                            <!---->
                        </div>
                    </div><!----><div ng-repeat="item in menu | filter:{hidden:&#39;!true&#39;}" class="item-block ">
                        <!---->

                        <!----><a class="item" ng-class="::item.className" ui-sref-active="active" ui-sref="authenticated.card.catalog.list" ng-if="::item.url" href="{{route("products.index")}}">
                            <span translate=""><i class="fas fa-cube fa-fw"></i>&nbsp; Товары и услуги</span>
                            <span ng-show="item.id === &#39;reports&#39;" class="menu-label ng-hide">new</span>
                        </a><!---->

                        <div class="menu ng-hide" ng-show="item.sub">
                            <!---->
                        </div>
                    </div><!----><div ng-repeat="item in menu | filter:{hidden:&#39;!true&#39;}" class="item-block ">
                        <!----><div class="item" ng-if="!item.url">
                            <span translate=""><i class="fas fa-inbox fa-fw"></i>&nbsp; Кассы и смены</span>
                        </div><!---->

                        <!---->

                        <div class="menu" ng-show="item.sub">
                            <!----><a ng-repeat="submenu in ::item.sub | filter:{hidden:&#39;!true&#39;}" ui-sref-active="active" ui-sref="authenticated.card.register.shift" class="item" translate="" href="https://web.cloudshop.ru/card/register/shift">Смены</a><!----><a ng-repeat="submenu in ::item.sub | filter:{hidden:&#39;!true&#39;}" ui-sref-active="active" ui-sref="authenticated.card.register.cash" class="item" translate="" href="https://web.cloudshop.ru/card/register/cash">Кассы</a><!----><a ng-repeat="submenu in ::item.sub | filter:{hidden:&#39;!true&#39;}" ui-sref-active="active" ui-sref="authenticated.card.register.download" class="item blue" translate="" href="https://web.cloudshop.ru/card/register/download">Скачать программу</a><!---->
                        </div>
                    </div><!----><div ng-repeat="item in menu | filter:{hidden:&#39;!true&#39;}" class="item-block ">
                        <!---->

                        <!----><a class="item" ng-class="::item.className" ui-sref-active="active" ui-sref="authenticated.card.journal" ng-if="::item.url" href="https://web.cloudshop.ru/card/journal">
                            <span translate=""><i class="fas fa-sync fa-fw"></i>&nbsp; Движение товара</span>
                            <span ng-show="item.id === &#39;reports&#39;" class="menu-label ng-hide">new</span>
                        </a><!---->

                        <div class="menu ng-hide" ng-show="item.sub">
                            <!---->
                        </div>
                    </div><!----><div ng-repeat="item in menu | filter:{hidden:&#39;!true&#39;}" class="item-block ">
                        <!---->

                        <!----><a class="item" ng-class="::item.className" ui-sref-active="active" ui-sref="authenticated.card.money" ng-if="::item.url" href="https://web.cloudshop.ru/card/money">
                            <span translate=""><i class="fas fa-dollar-sign fa-fw"></i>&nbsp; Движение денег</span>
                            <span ng-show="item.id === &#39;reports&#39;" class="menu-label ng-hide">new</span>
                        </a><!---->

                        <div class="menu ng-hide" ng-show="item.sub">
                            <!---->
                        </div>
                    </div><!----><div ng-repeat="item in menu | filter:{hidden:&#39;!true&#39;}" class="item-block ">
                        <!---->

                        <!----><a class="item" ng-class="::item.className" ui-sref-active="active" ui-sref="authenticated.card.reports" ng-if="::item.url" href="https://web.cloudshop.ru/card/reports">
                            <span translate=""><i class="fas fa-chart-area fa-fw"></i>&nbsp; Отчеты</span>
                            <span ng-show="item.id === &#39;reports&#39;" class="menu-label">new</span>
                        </a><!---->

                        <div class="menu ng-hide" ng-show="item.sub">
                            <!---->
                        </div>
                    </div><!----><div ng-repeat="item in menu | filter:{hidden:&#39;!true&#39;}" class="item-block ">
                        <!----><div class="item" ng-if="!item.url">

                            <span translate=""><i class="fas fa-user fa-fw"></i>&nbsp; Контрагенты</span>
                        </div><!---->

                        <!---->

                        <div class="menu" ng-show="item.sub">
                            <!----><a ng-repeat="submenu in ::item.sub | filter:{hidden:&#39;!true&#39;}" ui-sref-active="active" ui-sref="authenticated.card.supplier" class="item" translate="" href="https://web.cloudshop.ru/card/supplier">Поставщики</a><!----><a ng-repeat="submenu in ::item.sub | filter:{hidden:&#39;!true&#39;}" ui-sref-active="active" ui-sref="authenticated.card.clients" class="item" translate="" href="https://web.cloudshop.ru/card/clients">Клиенты</a><!---->
                        </div>
                    </div><!----><div ng-repeat="item in menu | filter:{hidden:&#39;!true&#39;}" class="item-block ">
                        <!----><div class="item" ng-if="!item.url">
                            <span translate=""><i class="fas fa-users fa-fw"></i>&nbsp; Компания</span>
                        </div><!---->

                        <!---->

                        <div class="menu" ng-show="item.sub">
                            <!----><a ng-repeat="submenu in ::item.sub | filter:{hidden:&#39;!true&#39;}" ui-sref-active="active" ui-sref="authenticated.card.company.settings.main" class="item" translate="" href="https://web.cloudshop.ru/card/company/company/settings/main/">Настройки</a><!----><a ng-repeat="submenu in ::item.sub | filter:{hidden:&#39;!true&#39;}" ui-sref-active="active" ui-sref="authenticated.card.company.staff" class="item" translate="" href="https://web.cloudshop.ru/card/company/staff/">Сотрудники</a><!----><a ng-repeat="submenu in ::item.sub | filter:{hidden:&#39;!true&#39;}" ui-sref-active="active" ui-sref="authenticated.card.company.stores" class="item" translate="" href="https://web.cloudshop.ru/card/company/stores/">Магазины</a><!----><a ng-repeat="submenu in ::item.sub | filter:{hidden:&#39;!true&#39;}" ui-sref-active="active" ui-sref="authenticated.card.company.accounts" class="item" translate="" href="https://web.cloudshop.ru/card/company/accounts/">Счета</a><!----><a ng-repeat="submenu in ::item.sub | filter:{hidden:&#39;!true&#39;}" ui-sref-active="active" ui-sref="authenticated.card.company.discounts" class="item" translate="" href="https://web.cloudshop.ru/card/company/discounts/">Скидки</a><!----><a ng-repeat="submenu in ::item.sub | filter:{hidden:&#39;!true&#39;}" ui-sref-active="active" ui-sref="authenticated.card.doc_print_templates" class="item" translate="" href="https://web.cloudshop.ru/card/print-templates">Печатные формы</a><!---->
                        </div>
                    </div><!----><div ng-repeat="item in menu | filter:{hidden:&#39;!true&#39;}" class="item-block ">
                        <!---->

                        <!----><a class="item" ng-class="::item.className" ui-sref-active="active" ui-sref="authenticated.card.marketplace.list" ng-if="::item.url" href="https://web.cloudshop.ru/card/marketplace/">
                            <span translate=""><i class="fas fa-paperclip fa-fw"></i>&nbsp; Интеграции</span>
                            <span ng-show="item.id === &#39;reports&#39;" class="menu-label ng-hide">new</span>
                        </a><!---->

                        <div class="menu ng-hide" ng-show="item.sub">
                            <!---->
                        </div>
                    </div><!----><div ng-repeat="item in menu | filter:{hidden:&#39;!true&#39;}" class="item-block ">
                        <!---->

                        <!----><a class="item" ng-class="::item.className" ui-sref-active="active" ui-sref="authenticated.card.yandex" ng-if="::item.url" href="https://web.cloudshop.ru/card/yandex">
                            <span translate=""><i class="fab fa-yandex fa-fw"></i>&nbsp; Реклама бизнеса</span>
                            <span ng-show="item.id === &#39;reports&#39;" class="menu-label ng-hide">new</span>
                        </a><!---->

                        <div class="menu ng-hide" ng-show="item.sub">
                            <!---->
                        </div>
                    </div><!----><div ng-repeat="item in menu | filter:{hidden:&#39;!true&#39;}" class="item-block orange">
                        <!---->

                        <!----><a class="item orange" ng-class="::item.className" ui-sref-active="active" ui-sref="authenticated.payment" ng-if="::item.url" href="https://web.cloudshop.ru/payment">
                            <!----><i class="icon gift" ng-if="item.icon"></i><!---->
                            <span translate="">&nbsp; Тарифы и оплата</span>
                            <span ng-show="item.id === &#39;reports&#39;" class="menu-label ng-hide">new</span>
                        </a><!---->

                        <div class="menu ng-hide" ng-show="item.sub">
                            <!---->
                        </div>
                    </div><!----><div ng-repeat="item in menu | filter:{hidden:&#39;!true&#39;}" class="item-block trash">
                        <!---->

                        <!----><a class="item trash" ng-class="::item.className" ui-sref-active="active" ui-sref="authenticated.card.trash" ng-if="::item.url" href="https://web.cloudshop.ru/card/trash/">
                            <!----><i class="icon trash alternate outline" ng-if="item.icon"></i><!---->
                            <span translate="">&nbsp; Корзина</span>
                            <span ng-show="item.id === &#39;reports&#39;" class="menu-label ng-hide">new</span>
                        </a><!---->

                        <div class="menu ng-hide" ng-show="item.sub">
                            <!---->
                        </div>
                    </div><!---->
                    <div class="ui divider"></div>
                    <div class="item-block newspaper-container" newspaper="">
                        <div class="item">
                            <i class="newspaper outline icon"></i>
                            <span translate="">Что нового</span>
                        </div>
                        <span id="HW_badge_cont" class="HW_badge_cont HW_visible" style=""><span id="HW_badge" class="HW_badge HW_visible HW_animated" data-count-unseen="3" style="">3</span></span></div>
                    <div class="baron__track"><div class="baron__free"><div id="scroll-548713" class="baron__bar" style="right: 2px; height: 367px; top: 0px;"></div></div></div></div></div>
        </div>

        <div class="bottom-menu">
            <a ui-sref="authenticated.start" popup="" popup-content="Стартуем!" href="https://web.cloudshop.ru/start">
                <i class="rocket icon"></i>
            </a>

            <!----><a ng-repeat="item in bottomLinks" ng-href="https://cloudshop.ru/portal/" target="_blank" popup="" popup-content="База знаний" href="https://cloudshop.ru/portal/">
                <i class="icon question circle outline" ng-class="item.icon"></i>
            </a><!----><a ng-repeat="item in bottomLinks" ng-href="https://play.google.com/store/apps/developer?id=CloudShop:+%D1%81%D0%BA%D0%BB%D0%B0%D0%B4,+%D1%82%D0%BE%D0%B2%D0%B0%D1%80%D1%8B,+%D0%BF%D1%80%D0%BE%D0%B4%D0%B0%D0%B6%D0%B8+%D0%B8+%D1%83%D1%87%D0%B5%D1%82+%D0%BC%D0%B0%D0%B3%D0%B0%D0%B7%D0%B8%D0%BD%D0%B0" target="_blank" popup="" popup-content="Приложение для Android" href="https://play.google.com/store/apps/developer?id=CloudShop:+%D1%81%D0%BA%D0%BB%D0%B0%D0%B4,+%D1%82%D0%BE%D0%B2%D0%B0%D1%80%D1%8B,+%D0%BF%D1%80%D0%BE%D0%B4%D0%B0%D0%B6%D0%B8+%D0%B8+%D1%83%D1%87%D0%B5%D1%82+%D0%BC%D0%B0%D0%B3%D0%B0%D0%B7%D0%B8%D0%BD%D0%B0">
                <i class="icon android" ng-class="item.icon"></i>
            </a><!----><a ng-repeat="item in bottomLinks" ng-href="https://itunes.apple.com/ru/app/%D1%83%D1%87%D0%B5%D1%82-%D0%B2-%D0%BC%D0%B0%D0%B3%D0%B0%D0%B7%D0%B8%D0%BD%D0%B5-cloudshop/id1276569149" target="_blank" popup="" popup-content="Приложение для iPhone" href="https://itunes.apple.com/ru/app/%D1%83%D1%87%D0%B5%D1%82-%D0%B2-%D0%BC%D0%B0%D0%B3%D0%B0%D0%B7%D0%B8%D0%BD%D0%B5-cloudshop/id1276569149">
                <i class="icon apple" ng-class="item.icon"></i>
            </a><!---->

            <a ng-click="toggleMenu()" class="toggleMenu" popup="" popup-content="Скрыть меню">
                <i class="icon angle left"></i>
            </a>
            <a ng-click="toggleMenu()" class="toggleMenu" popup="" popup-content="Показать меню">
                <i class="icon angle right"></i>
            </a>
        </div>
    </div>
</div>
