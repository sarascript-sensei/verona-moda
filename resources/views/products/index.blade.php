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

                        <div class="content full-width fixed-title">
                    <div class="ui vertically padded page grid">

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
                                                        <th data-name="unit" class="table-unit">
                                                            <a href="https://web.cloudshop.ru/" ng-click="filter.sort.field(&#39;unit&#39;)">
                                                                <span translate="">Ед. изм.</span>
                                                                <i class="icon sort ascending hidden" ng-class="{ascending: !filter.sort.reverse.unit, descending: filter.sort.reverse.unit, hidden: filter.sort.fieldName != &#39;unit&#39;}"></i>
                                                            </a>
                                                        </th>
                                                        <th data-name="price" class="table-sku">
                                                            <a href="https://web.cloudshop.ru/" ng-click="filter.sort.field(&#39;price&#39;)">
                                                                <span translate="">Цена продажи</span>
                                                                <i class="icon sort ascending hidden" ng-class="{ascending: !filter.sort.reverse.price, descending: filter.sort.reverse.price, hidden: filter.sort.fieldName != &#39;price&#39;}"></i>
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
                                                    @foreach($groups as $group)
                                                        <tr ng-repeat="(key, value) in pg.data.visible | filter:{type: &#39;group&#39;}" class="table-row catalog-group-tr catalogGroupItem" style="cursor: pointer;">
                                                            <td class="table-checkbox">
                                                                <input id="6308952c43ce7c60fb537f78" type="checkbox" catalog-select-one="">
                                                                <label for="6308952c43ce7c60fb537f78"></label>
                                                            </td>
                                                            <td>
                                                                <div class="group-title">
                                                                    <i class="fa-solid fa-folder fa-xl" style="width: 50px;

  position: relative;
  margin-right: 5px;
fill: #fff;"></i>
                                                                    {{$group->name}}
                                                                </div>
                                                                <a ui-sref="authenticated.card.catalog.groupedit({group_id: value._id})" class="group-settings" href="https://web.cloudshop.ru/card/catalog/group-edit/6308952c43ce7c60fb537f78">
                                                                    <i class="icon pencil"></i>
                                                                </a>
                                                            </td>
                                                            <td colspan="99"></td>
                                                        </tr><!---->
                                                    @endforeach
                                                    @foreach($products as $product)
                                                    <!---->

                                                    <!----><tr ng-repeat="(key, value) in pg.data.visible | filter:{type: &#39;!group&#39;}" class="table-row">
                                                        <td class="table-checkbox">
                                                            <input id="62de724e9ac3c23de05018ee" type="checkbox" catalog-select-one="">
                                                            <label for="62de724e9ac3c23de05018ee"></label>
                                                        </td>

                                                        <td data-name="name" class="table-image-a inventory" ng-class="::value.type">
                                                            <a ui-sref="authenticated.card.catalog.get({productId: value._id})" href="{{ route('products.show', $product->id)}}">
                                                                <div>
                                                                    <img class="table-pic cloudImage" img-cloud="::value.pic[0]" src="./Справочник_files/px.gif" style="background-image: url(&quot;https://pic.cloudshop.ru/v2/c53b80df-773a-421b-b695-1c432c2d6105.jpg?s=30,30&quot;);">
                                                                </div>
                                                                <span ng-bind="value.name">{{ $product->name }}</span>
                                                            </a>
                                                        </td>
                                                        <td data-name="unit">
                                                            <div ng-bind="value.unit">{{$product->unit}}</div>
                                                        </td>
                                                        <td data-name="price">
                                                            <div ng-bind="value.price | price">{{$product->price}}</div>
                                                        </td>

                                                        <td data-name="created">
                                                            <div ng-bind="value.created | dateFormat:&#39;DD/MM/YYYY&#39;">{{$product->created_at}}</div>
                                                        </td>
                                                        <td data-name="discount">
                                                            <div ng-bind="value.discount | num">{{$product->discount}}</div>
                                                        </td>

                                                        <!----><td data-name="store_62de6a264dcaee0b3907c015" ng-repeat="store in ::db.stores.data">
                                                            <div ng-class="{&#39;text-red&#39;: value.min_qty_alert}" ng-bind="value.stock[store._id] | num">{{$product->count}}</div>
                                                        </td><!---->

                                                        <td>
                                                            <div ng-class="{&#39;text-red&#39;: value.min_qty_alert}" ng-bind="::value.stockCount | num">{{$product->count}}</div>
                                                        </td>
                                                    </tr>
                                                    @endforeach
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
                </div>
            </div>
        </div>
</div>
