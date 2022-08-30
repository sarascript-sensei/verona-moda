@include('components.header')
<title>Справочник</title>
@include('components.menu')

<!----><div class="content" ui-view=""><!----><div ui-view=""></div>

    <!----><div ui-view="sidebar_right" class="sidebar_right"><div class="my sidebar" id="sidebar">
            <div class="sidebar__wrap">
                <!---->

                <!----><ui-view><!----><ui-view><!----><div ng-include="&#39;js/pages/catalog/blocks/menu.html&#39;" class="ui menu actions full-width catalog-header"><div class="item">
                                <div class="catalog-list-filter-item">
                                    <div class="catalog-list-filter">
                                        <div class="ui icon input">
                                            <input ng-model="filter.search.query" select-text="" type="text" placeholder="Поиск по наименованию, артикулу, штрихкоду и описанию" ng-change="filterQuery()" ng-model-options="{ debounce: { &#39;default&#39;: 500, &#39;blur&#39;: 0 } }" class="ng-pristine ng-untouched ng-valid ng-empty">
                                            <i class="circular icon filter link" ng-class="{&#39;spinner loading&#39;: searchLoading, &#39;filter link&#39;: !searchLoading}"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="item catalog-header-buttons" permission="catalog.post">
                                <div>
                                    <a ui-sref="authenticated.card.catalog.create" class="ui green button" translate="" href="{{route('products.create')}}">Создать товар</a>
                                    <a popup="" popup-content="Создать группу" ui-sref="authenticated.card.catalog.groupcreate" class="ui basic icon button" href="{{route('groups.create')}}">
                                        <i class="icons">
                                            <i class="folder outline icon"></i>
                                            <i class="corner add icon"></i>
                                        </i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @include('products.create')
                        <div class="content full-width fixed-title">
                            <div class="ui vertically padded page grid">

                                <h1 style="" class="_message blank panel white ng-hide" ng-class="[classes]" ng-transclude="" classes="blank panel white" ng-show="!loaded" type="progress" progress="count" total="total">

                                    <div class="ui small progress" data-percent="0">
                                        <div class="bar">
                                            <div class="progress"></div>
                                        </div>
                                        <div class="label"></div>
                                    </div>
                                    <div class="text"></div></h1>
                                <h1 style="" class="_message blank panel white ng-hide" ng-class="[classes]" ng-transclude="" classes="blank panel white" type="404" text="NOT_FOUND" sub-text="Чтобы добавить товар, услугу&lt;br&gt; или комплект нажмите «добавить товар»" ng-show="loaded &amp;&amp; !pg.data.visible.length &amp;&amp; !filter.group.value">
                                    <i class="icon folder open outline"></i><div class="text">Не найдено</div><div class="sub-text">Чтобы добавить товар, услугу<br> или комплект нажмите «добавить товар»</div></h1>

                                <!----><div ng-include="&#39;js/pages/catalog/blocks/table.html&#39;" class="blank panel panel-table white" ng-show="loaded &amp;&amp; pg.data.visible.length || filter.group.value"><ul ng-show="data.length" class="catalog-groups-breadcrumbs ng-hide">
                                        <li ng-click="selectGroup(&#39;0&#39;)"><i class="icon home" ng-class="{&#39;spinner loading&#39;: loading, home: !loading}"></i></li>
                                        <!---->
                                    </ul>
                                    <div class="table" catalog-table="" ng-class="{withBreadScrums: filter.group.value != 0}">
                                        <div>
                                            <table class="ui small celled table scroll main-table products">
                                                <thead>
                                                <tr>
                                                    <th class="table-checkbox">
                                                        <div>
                                                            <label><input type="checkbox" catalog-select-all=""></label>
                                                        </div>
                                                    </th>
                                                    <th data-name="name" class="table-name">
                                                        <a href="https://web.cloudshop.ru/" ng-click="filter.sort.field(&#39;name&#39;)">
                                                            <span translate="">Наименование</span>
                                                            <i class="icon sort ascending hidden" ng-class="{ascending: filter.sort.reverse.name, descending: !filter.sort.reverse.name, hidden: filter.sort.fieldName != &#39;name&#39;}"></i>
                                                        </a>
                                                    </th>
                                                    <th data-name="code" class="table-code">
                                                        <a href="https://web.cloudshop.ru/" ng-click="filter.sort.field(&#39;code&#39;)">
                                                            <span translate="">Код</span>
                                                            <i class="icon sort ascending hidden" ng-class="{ascending: !filter.sort.reverse.code, descending: filter.sort.reverse.code, hidden: filter.sort.fieldName != &#39;code&#39;}"></i>
                                                        </a>
                                                    </th>
                                                    <th data-name="vat" class="table-code">
                                                        <a href="https://web.cloudshop.ru/" ng-click="filter.sort.field(&#39;vat&#39;)">
                                                            <span translate="">НДС</span>
                                                            <i class="icon sort ascending hidden" ng-class="{ascending: !filter.sort.reverse.vat, descending: filter.sort.reverse.vat, hidden: filter.sort.fieldName != &#39;vat&#39;}"></i>
                                                        </a>
                                                    </th>
                                                    <th data-name="barcode" class="table-barcode">
                                                        <a href="https://web.cloudshop.ru/" ng-click="filter.sort.field(&#39;barcode&#39;)">
                                                            <span translate="">Штрих-код</span>
                                                            <i class="icon sort ascending hidden" ng-class="{ascending: !filter.sort.reverse.barcode, descending: filter.sort.reverse.barcode, hidden: filter.sort.fieldName != &#39;barcode&#39;}"></i>
                                                        </a>
                                                    </th>
                                                    <th data-name="sku" class="table-sku">
                                                        <a href="https://web.cloudshop.ru/" ng-click="filter.sort.field(&#39;sku&#39;)">
                                                            <span translate="">Артикул</span>
                                                            <i class="icon sort ascending hidden" ng-class="{ascending: !filter.sort.reverse.sku, descending: filter.sort.reverse.sku, hidden: filter.sort.fieldName != &#39;sku&#39;}"></i>
                                                        </a>
                                                    </th>
                                                    <th data-name="unit" class="table-unit">
                                                        <a href="https://web.cloudshop.ru/" ng-click="filter.sort.field(&#39;unit&#39;)">
                                                            <span translate="">Ед. изм.</span>
                                                            <i class="icon sort ascending hidden" ng-class="{ascending: !filter.sort.reverse.unit, descending: filter.sort.reverse.unit, hidden: filter.sort.fieldName != &#39;unit&#39;}"></i>
                                                        </a>
                                                    </th>
                                                    <th data-name="PLU_code" class="table-PLU_code">
                                                        <a href="https://web.cloudshop.ru/" ng-click="filter.sort.field(&#39;PLU_code&#39;)">
                                                            <span translate="">PLU код</span>
                                                            <i class="icon sort ascending hidden" ng-class="{ascending: !filter.sort.reverse.PLU_code, descending: filter.sort.reverse.PLU_code, hidden: filter.sort.fieldName != &#39;PLU_code&#39;}"></i>
                                                        </a>
                                                    </th>
                                                    <th data-name="expiration_date" class="table-sku">
                                                        <a href="https://web.cloudshop.ru/" ng-click="filter.sort.field(&#39;expiration_date&#39;)">
                                                            <span translate="">Срок годности</span>
                                                            <i class="icon sort ascending hidden" ng-class="{ascending: !filter.sort.reverse.expiration_date, descending: filter.sort.reverse.expiration_date, hidden: filter.sort.fieldName != &#39;expiration_date&#39;}"></i>
                                                        </a>
                                                    </th>
                                                    <th data-name="categories" class="table-categories">
                                                        <div translate="">Категория</div>
                                                    </th>
                                                    <th data-name="country" class="table-country">
                                                        <a href="https://web.cloudshop.ru/" ng-click="filter.sort.field(&#39;country&#39;)">
                                                            <span translate="">Страна</span>
                                                            <i class="icon sort ascending hidden" ng-class="{ascending: !filter.sort.reverse.country, descending: filter.sort.reverse.country, hidden: filter.sort.fieldName != &#39;country&#39;}"></i>
                                                        </a>
                                                    </th>
                                                    <th data-name="supplier" class="table-supplier">
                                                        <a href="https://web.cloudshop.ru/" ng-click="filter.sort.field(&#39;supplier&#39;)">
                                                            <span translate="">Поставщик</span>
                                                            <i class="icon sort ascending hidden" ng-class="{ascending: !filter.sort.reverse.supplier, descending: filter.sort.reverse.supplier, hidden: filter.sort.fieldName != &#39;supplier&#39;}"></i>
                                                        </a>
                                                    </th>
                                                    <th data-name="price" class="table-sku">
                                                        <a href="https://web.cloudshop.ru/" ng-click="filter.sort.field(&#39;price&#39;)">
                                                            <span translate="">Цена продажи</span>
                                                            <i class="icon sort ascending hidden" ng-class="{ascending: !filter.sort.reverse.price, descending: filter.sort.reverse.price, hidden: filter.sort.fieldName != &#39;price&#39;}"></i>
                                                        </a>
                                                    </th>
                                                    <th data-name="cost" class="table-sku">
                                                        <a href="https://web.cloudshop.ru/" ng-click="filter.sort.field(&#39;cost&#39;)">
                                                            <span translate="">Себестоимость</span>
                                                            <i class="icon sort ascending hidden" ng-class="{ascending: !filter.sort.reverse.cost, descending: filter.sort.reverse.cost, hidden: filter.sort.fieldName != &#39;cost&#39;}"></i>
                                                        </a>
                                                    </th>
                                                    <th data-name="purchase" class="table-sku">
                                                        <a href="https://web.cloudshop.ru/" ng-click="filter.sort.field(&#39;purchase&#39;)">
                                                            <span translate="">Цена закупки</span>
                                                            <i class="icon sort ascending hidden" ng-class="{ascending: !filter.sort.reverse.purchase, descending: filter.sort.reverse.purchase, hidden: filter.sort.fieldName != &#39;purchase&#39;}"></i>
                                                        </a>
                                                    </th>
                                                    <th data-name="created" class="table-sku">
                                                        <a href="https://web.cloudshop.ru/" ng-click="filter.sort.field(&#39;created&#39;)">
                                                            <span translate="">Создан</span>
                                                            <i class="icon sort ascending hidden" ng-class="{ascending: !filter.sort.reverse.created, descending: filter.sort.reverse.created, hidden: filter.sort.fieldName != &#39;created&#39;}"></i>
                                                        </a>
                                                    </th>
                                                    <th data-name="discount" class="price-discount">
                                                        <a href="https://web.cloudshop.ru/" ng-click="filter.sort.field(&#39;discount&#39;)">
                                                            <span>Скидка, %</span>
                                                            <i class="icon sort ascending hidden" ng-class="{ascending: !filter.sort.reverse.discount, descending: filter.sort.reverse.discount, hidden: filter.sort.fieldName != &#39;discount&#39;}"></i>
                                                        </a>
                                                    </th>
                                                    <th data-name="min_qty" class="table-min_qty">
                                                        <a href="https://web.cloudshop.ru/" ng-click="filter.sort.field(&#39;min_qty&#39;)">
                                                            <span translate="">Мин. ост.</span>
                                                            <i class="icon sort ascending hidden" ng-class="{ascending: !filter.sort.reverse.min_qty, descending: filter.sort.reverse.min_qty, hidden: filter.sort.fieldName != &#39;min_qty&#39;}"></i>
                                                        </a>
                                                    </th>
                                                    <th data-name="marking_type" class="table-sku">
                                                        <a href="https://web.cloudshop.ru/" ng-click="filter.sort.field(&#39;marking_type&#39;)">
                                                            <span translate="">Тип маркировки</span>
                                                            <i class="icon sort ascending hidden" ng-class="{ascending: !filter.sort.reverse.marking_type, descending: filter.sort.reverse.marking_type, hidden: filter.sort.fieldName != &#39;marking_type&#39;}"></i>
                                                        </a>
                                                    </th>
                                                    <th data-name="ru_tax_system" class="table-sku">
                                                        <a href="https://web.cloudshop.ru/" ng-click="filter.sort.field(&#39;ru_tax_system&#39;)">
                                                            <span translate="">Система налогообложения</span>
                                                            <i class="icon sort ascending hidden" ng-class="{ascending: !filter.sort.reverse.ru_tax_system, descending: filter.sort.reverse.ru_tax_system, hidden: filter.sort.fieldName != &#39;ru_tax_system&#39;}"></i>
                                                        </a>
                                                    </th>

                                                    <!----><th data-name="store_62de6a264dcaee0b3907c015" class="table-stock" ng-repeat="store in db.stores.data">
                                                        <a title="Магазин" href="https://web.cloudshop.ru/" ng-click="filter.sort.field(&#39;store_&#39;+store._id)">
                                                            <span ng-bind="store.name">Магазин</span>
                                                            <i class="icon sort ascending hidden" ng-class="{ascending: !filter.sort.reverse[&#39;store_&#39;+store._id], descending: filter.sort.reverse[&#39;store_&#39;+store._id], hidden: filter.sort.fieldName != &#39;store_&#39;+store._id}"></i>
                                                        </a>
                                                    </th><!---->

                                                    <th>
                                                        <a href="https://web.cloudshop.ru/" ng-click="filter.sort.field(&#39;stockCount&#39;)">
                                                            <span translate="">Остатки</span>
                                                            <i class="icon sort descending hidden" ng-class="{ascending: filter.sort.reverse.stockCount, descending: !filter.sort.reverse.stockCount, hidden: filter.sort.fieldName != &#39;stockCount&#39;}"></i>
                                                        </a>
                                                    </th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                <!---->

                                                <!----><tr ng-repeat="(key, value) in pg.data.visible | filter:{type: &#39;!group&#39;}" class="table-row">
                                                    <td class="table-checkbox">
                                                        <input id="62de724e9ac3c23de05018ee" type="checkbox" catalog-select-one="">
                                                        <label for="62de724e9ac3c23de05018ee"></label>
                                                    </td>
                                                    @foreach($products as $product)
                                                        <td data-name="name" class="table-image-a inventory" ng-class="::value.type">
                                                            <a ui-sref="authenticated.card.catalog.get({productId: value._id})" href="https://web.cloudshop.ru/card/catalog/get/62de724e9ac3c23de05018ee">
                                                                <div>
                                                                    <img class="table-pic cloudImage" img-cloud="::value.pic[0]" src="./Справочник_files/px.gif" style="background-image: url(&quot;https://pic.cloudshop.ru/v2/c53b80df-773a-421b-b695-1c432c2d6105.jpg?s=30,30&quot;);">
                                                                </div>
                                                                <span ng-bind="value.name">{{ $product->name }}</span>
                                                            </a>
                                                        </td>
                                                        <td data-name="code">
                                                            <div ng-bind="value.code">{{ $product->code }}</div>
                                                        </td>
                                                        <td data-name="vat">
                                                            <div ng-bind="value.vat"></div>
                                                        </td>
                                                        <td data-name="barcode">
                                                            <div ng-bind="value.barcode">{{$product->strich}}</div>
                                                        </td>
                                                        <td data-name="sku">
                                                            <div ng-bind="value.sku"></div>
                                                        </td>
                                                        <td data-name="unit">
                                                            <div ng-bind="value.unit">{{$product->unit}}</div>
                                                        </td>
                                                        <td data-name="PLU_code">
                                                            <div ng-bind="value.PLU_code"></div>
                                                        </td>
                                                        <td data-name="expiration_date">
                                                            <div ng-class="{&#39;text-red&#39;: value.expiration_date &lt; now}" ng-show="::value.expiration_date" ng-bind="::value.expiration_date | dateNice" class="ng-hide">-</div>
                                                        </td>
                                                        <td data-name="categories" class="table-categories">
                                                            <!----><span ng-repeat="cat in ::value.categories track by $index | limitTo:5"><a href="https://web.cloudshop.ru/" ng-click="selectCat(cat)" ng-bind="::cat">Зонт</a></span><!---->
                                                        </td>
                                                        <td data-name="country">
                                                            <div ng-bind="value.country"></div>
                                                        </td>
                                                        <td data-name="supplier" class="table-image-a">
                                                            <a ui-sref="authenticated.card.supplier_show({suppliers_id: value.supplier})" ng-init="name = value.getSupplier().name" href="https://web.cloudshop.ru/card/suppliers/show/62de6a264dcaee0b3907c016">
                                                                <span ng-bind="name">Поставщик</span>
                                                            </a>
                                                        </td>
                                                        <td data-name="price">
                                                            <div ng-bind="value.price | price">66,672.66</div>
                                                        </td>

                                                        <td data-name="cost">
                                                            <div ng-bind="value.cost | price">0.00</div>
                                                        </td>
                                                        <td data-name="purchase">
                                                            <div ng-bind="value.purchase | price">6.00</div>
                                                        </td>
                                                        <td data-name="created">
                                                            <div ng-bind="value.created | dateFormat:&#39;DD/MM/YYYY&#39;">25/07/2022</div>
                                                        </td>
                                                        <td data-name="discount">
                                                            <div ng-bind="value.discount | num">0</div>
                                                        </td>
                                                        <td data-name="min_qty">
                                                            <div ng-bind="value.min_qty">0</div>
                                                        </td>
                                                        <td data-name="marking_type">
                                                            <div ng-init="marking_type = value.getMarkingType().name" ng-bind="marking_type"></div>
                                                        </td>
                                                        <td data-name="ru_tax_system">
                                                            <div ng-init="ru_tax_system = value.getRuTaxSystem().name" ng-bind="ru_tax_system"></div>
                                                        </td>

                                                        <!----><td data-name="store_62de6a264dcaee0b3907c015" ng-repeat="store in ::db.stores.data">
                                                            <div ng-class="{&#39;text-red&#39;: value.min_qty_alert}" ng-bind="value.stock[store._id] | num">10000</div>
                                                        </td><!---->

                                                        <td>
                                                            <div ng-class="{&#39;text-red&#39;: value.min_qty_alert}" ng-bind="::value.stockCount | num">10000</div>
                                                        </td>
                                                </tr>
                                                @endforeach

                                                <!----><tr ng-repeat="(key, value) in pg.data.visible | filter:{type: &#39;!group&#39;}" class="table-row">
                                                    <td class="table-checkbox">
                                                        <input id="62de6a264dcaee0b3907c01b" type="checkbox" catalog-select-one="">
                                                        <label for="62de6a264dcaee0b3907c01b"></label>
                                                    </td>
                                                    <td data-name="name" class="table-image-a inventory" ng-class="::value.type">
                                                        <a ui-sref="authenticated.card.catalog.get({productId: value._id})" href="https://web.cloudshop.ru/card/catalog/get/62de6a264dcaee0b3907c01b">
                                                            <div>
                                                                <img class="table-pic cloudImage" img-cloud="::value.pic[0]" src="./Справочник_files/px.gif" style="background-image: url(&quot;/images/placeholder.png&quot;);">
                                                            </div>
                                                            <span ng-bind="value.name">Товар по свободной цене</span>
                                                        </a>
                                                    </td>
                                                    <td data-name="code">
                                                        <div ng-bind="value.code">00001</div>
                                                    </td>
                                                    <td data-name="vat">
                                                        <div ng-bind="value.vat"></div>
                                                    </td>
                                                    <td data-name="barcode">
                                                        <div ng-bind="value.barcode"></div>
                                                    </td>
                                                    <td data-name="sku">
                                                        <div ng-bind="value.sku"></div>
                                                    </td>
                                                    <td data-name="unit">
                                                        <div ng-bind="value.unit"></div>
                                                    </td>
                                                    <td data-name="PLU_code">
                                                        <div ng-bind="value.PLU_code"></div>
                                                    </td>
                                                    <td data-name="expiration_date">
                                                        <div ng-class="{&#39;text-red&#39;: value.expiration_date &lt; now}" ng-show="::value.expiration_date" ng-bind="::value.expiration_date | dateNice" class="ng-hide">-</div>
                                                    </td>
                                                    <td data-name="categories" class="table-categories">
                                                        <!---->
                                                    </td>
                                                    <td data-name="country">
                                                        <div ng-bind="value.country"></div>
                                                    </td>
                                                    <td data-name="supplier" class="table-image-a">
                                                        <a ui-sref="authenticated.card.supplier_show({suppliers_id: value.supplier})" ng-init="name = value.getSupplier().name" href="https://web.cloudshop.ru/card/suppliers/show/">
                                                            <span ng-bind="name"></span>
                                                        </a>
                                                    </td>
                                                    <td data-name="price">
                                                        <div ng-bind="value.price | price">0.00</div>
                                                    </td>

                                                    <td data-name="cost">
                                                        <div ng-bind="value.cost | price">0.00</div>
                                                    </td>
                                                    <td data-name="purchase">
                                                        <div ng-bind="value.purchase | price">0.00</div>
                                                    </td>
                                                    <td data-name="created">
                                                        <div ng-bind="value.created | dateFormat:&#39;DD/MM/YYYY&#39;">25/07/2022</div>
                                                    </td>
                                                    <td data-name="discount">
                                                        <div ng-bind="value.discount | num">0</div>
                                                    </td>
                                                    <td data-name="min_qty">
                                                        <div ng-bind="value.min_qty">0</div>
                                                    </td>
                                                    <td data-name="marking_type">
                                                        <div ng-init="marking_type = value.getMarkingType().name" ng-bind="marking_type"></div>
                                                    </td>
                                                    <td data-name="ru_tax_system">
                                                        <div ng-init="ru_tax_system = value.getRuTaxSystem().name" ng-bind="ru_tax_system"></div>
                                                    </td>

                                                    <!----><td data-name="store_62de6a264dcaee0b3907c015" ng-repeat="store in ::db.stores.data">
                                                        <div ng-class="{&#39;text-red&#39;: value.min_qty_alert}" ng-bind="value.stock[store._id] | num">0</div>
                                                    </td><!---->

                                                    <td>
                                                        <div ng-class="{&#39;text-red&#39;: value.min_qty_alert}" ng-bind="::value.stockCount | num">0</div>
                                                    </td>
                                                </tr><!---->
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="ui small pagination menu" id="pagination" ng-show="view.data.length" data="pg.view.data">
                                    <span class="item disabled" translate="">страницы</span>

                                    <a href="https://web.cloudshop.ru/" ng-show="view.first" class="first item ng-hide" data-step="1">
                                        <i class="left double angle icon"></i>
                                    </a>
                                    <!----><a href="https://web.cloudshop.ru/" ng-repeat="(key, step) in view.short track by $index" class="item active" ng-class="{active: step.active}" ng-bind="step.value" data-step="1">1</a><!---->
                                    <a href="https://web.cloudshop.ru/" ng-show="view.last" class="last item ng-hide" data-step="-1">
                                        <i class="right double angle icon"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </ui-view>
                </ui-view>
            </div>
        </div>
    </div>
</div>
