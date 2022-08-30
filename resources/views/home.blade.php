@include('components.header')
<title>Главная</title>
@include('components.menu')
    <!----><div class="content" ui-view=""><!----><div ui-view="" style="overflow: hidden;"><div class="dashboard blank-page baron baron__scroller _macosx _scrollbar" scroll="" data-baron-v-id="2" style="overflow-y: scroll; box-sizing: border-box; margin: 0px; border: 0px;">
                <!----><div ng-include="&#39;js/pages/dashboard/blocks/chart.html&#39;"><div class="panel white chart animated zoomIn" loading="false">
                        <div class="header">
                            <h1>
                                <div>
                                    <span translate="">Показатели за</span>&nbsp;<!--
      --><div ng-class="[ dropdown_class, class, {disabled: disabled}, ngClass ]" ng-transclude="" ng-model="panel.indicators.chart.type" items="block.date" class="pointing ui dropdown action-activate ng-not-empty ng-valid" tabindex="0">
                                        <div class="text" translate="">месяц</div>
                                        <div class="menu" tabindex="-1">
                                            <!----><div class="item" ng-repeat="(key, item) in block.date" data-value="today" ng-bind="item.title | translate">сегодня</div><!----><div class="item" ng-repeat="(key, item) in block.date" data-value="week" ng-bind="item.title | translate">неделю</div><!----><div class="item active selected" ng-repeat="(key, item) in block.date" data-value="month" ng-bind="item.title | translate">месяц</div><!----><div class="item" ng-repeat="(key, item) in block.date" data-value="quarter" ng-bind="item.title | translate">квартал</div><!----><div class="item" ng-repeat="(key, item) in block.date" data-value="year" ng-bind="item.title | translate">год</div><!---->
                                        </div>
                                    </div>&nbsp;<!--
        --><span ng-show="panel.indicators.chart.store.length == 1" class="ng-hide">по магазину&nbsp;</span><!--
        --><span ng-show="panel.indicators.chart.store.length &gt; 1" class="ng-hide">Магазины&nbsp;</span><!--
        -->
                                </div>
                                <div ng-class="{active: panel.indicators.chart.store.length &gt; 0}">
                                    <div ng-class="[ dropdown_class, class, {disabled: disabled}, ngClass ]" ng-transclude="" multiple="multiple" ng-model="panel.indicators.chart.store" class="pointing multiple ui dropdown action-activate ng-not-empty ng-valid" tabindex="0">
                                        <input type="hidden" autocomplete="off" value="">
                                        <div class="default text" translate="">по всем магазинам</div>
                                        <a ng-show="db.stores.data.length !== panel.indicators.chart.store.length" href="https://web.cloudshop.ru/" class="ui tiny circular basic icon button"><i class="plus icon"></i></a>
                                        <div class="menu transition visible" tabindex="-1">
                                            <!----><div class="item" ng-repeat="(key, item) in db.stores.data" data-value="62c1409219a20d4058567c65" ng-bind="item.name">Магазин</div><!---->
                                        </div>
                                    </div>
                                </div>
                            </h1>
                            <div>
                                <i popup="" popup-content="Все показатели с учетом возвратов" class="icon help circular">?</i>
                            </div>
                        </div>

                        <div class="dashboard-chart-widget" ng-class="{loading: load}">
                            <div class="menu">
                                <!----><!----><div class="indicators" ng-repeat="(key, item) in indicators" ng-if="item.visible">
                                    <div class="panel white info-box animated zoomIn active" ng-class="{active: key == chartService.field}" ng-click="panel.indicators.rebuild(key)">
                                        <h1 ng-bind="(item.value || 0) | number:2">0.00</h1>
                                        <p ng-bind="item.title | translate">Выручка</p>
                                    </div>
                                </div><!----><!----><!----><div class="indicators" ng-repeat="(key, item) in indicators" ng-if="item.visible">
                                    <div class="panel white info-box animated zoomIn" ng-class="{active: key == chartService.field}" ng-click="panel.indicators.rebuild(key)">
                                        <h1 ng-bind="(item.value || 0) | number:2">0.00</h1>
                                        <p ng-bind="item.title | translate">Себестоимость продаж</p>
                                    </div>
                                </div><!----><!----><!----><div class="indicators" ng-repeat="(key, item) in indicators" ng-if="item.visible">
                                    <div class="panel white info-box animated zoomIn" ng-class="{active: key == chartService.field}" ng-click="panel.indicators.rebuild(key)">
                                        <h1 ng-bind="(item.value || 0) | number:2">0.00</h1>
                                        <p ng-bind="item.title | translate">Прибыль</p>
                                    </div>
                                </div><!----><!----><!----><div class="indicators" ng-repeat="(key, item) in indicators" ng-if="item.visible">
                                    <div class="panel white info-box animated zoomIn" ng-class="{active: key == chartService.field}" ng-click="panel.indicators.rebuild(key)">
                                        <h1 ng-bind="(item.value || 0) | number:2">0.00</h1>
                                        <p ng-bind="item.title | translate">Средний чек</p>
                                    </div>
                                </div><!----><!----><!----><!---->
                            </div>

                            <div id="dashboard-chart" type="panel.indicators.chart.type" class="">
                                <div class="loading-text"><p>подождите...</p></div>
                                <div class="segment">
                                    <div class="pie">
                                        <div class="chart-placeholder"></div>
                                        <svg width="60" height="60"><g></g></svg>
                                    </div>
                                    <div class="text"></div>
                                </div>
                                <svg class="mainSvg" width="401" height="488"><g transform="translate(60, 5)"><path class="area" d="M15,458C15,458,21.911111111111115,457.99999999999994,25.366666666666667,458C28.822222222222223,458,32.277777777777786,457.99999999999994,35.733333333333334,458C39.18888888888889,458,42.644444444444446,457.99999999999994,46.1,458C49.55555555555555,458,53.01111111111111,457.99999999999994,56.46666666666667,458C59.92222222222222,457.99999999999994,63.377777777777794,458,66.83333333333334,458C70.2888888888889,458.00000000000006,73.74444444444445,458,77.2,458C80.65555555555555,458,84.11111111111111,458,87.56666666666666,458C91.02222222222221,458.00000000000006,94.47777777777779,457.99999999999994,97.93333333333334,458C101.3888888888889,458,104.84444444444446,458,108.30000000000001,458C111.75555555555557,458.00000000000006,115.21111111111111,458,118.66666666666667,458C122.12222222222223,458,125.57777777777778,458,129.03333333333333,458C132.4888888888889,458.00000000000006,135.94444444444446,457.99999999999994,139.4,458C142.85555555555558,458,146.31111111111116,458,149.76666666666668,458C153.22222222222223,458,156.6777777777778,458,160.13333333333333,458C163.5888888888889,458.00000000000006,167.04444444444445,457.99999999999994,170.5,458C173.95555555555555,458,177.4111111111111,457.99999999999994,180.86666666666667,458C184.32222222222222,458,187.77777777777777,457.99999999999994,191.23333333333335,458C194.6888888888889,458,198.1444444444445,458,201.60000000000002,458C205.0555555555556,458,208.51111111111112,458,211.96666666666667,458C215.42222222222222,458.00000000000006,218.8777777777778,457.99999999999994,222.33333333333334,458C225.7888888888889,458,229.24444444444447,458,232.70000000000002,458C236.1555555555556,458,239.61111111111111,458,243.06666666666666,458C246.52222222222224,458.00000000000006,249.97777777777776,457.99999999999994,253.43333333333334,458C256.88888888888886,458,260.34444444444443,457.99999999999994,263.8,458C267.25555555555553,458,270.7111111111111,457.99999999999994,274.1666666666667,458C277.6222222222222,458,281.07777777777784,457.99999999999994,284.53333333333336,458C287.98888888888894,458,291.4444444444444,457.99999999999994,294.90000000000003,458C298.35555555555555,458,301.81111111111113,457.99999999999994,305.26666666666665,458C308.72222222222223,458,312.1777777777778,457.99999999999994,315.6333333333333,458C319.0888888888889,458,326,458,326,458L326,458C326,458,319.0888888888889,457.99999999999994,315.6333333333333,458C312.1777777777778,458,308.72222222222223,457.99999999999994,305.26666666666665,458C301.81111111111113,458,298.35555555555555,457.99999999999994,294.90000000000003,458C291.4444444444444,458,287.98888888888894,457.99999999999994,284.53333333333336,458C281.07777777777784,458,277.6222222222222,457.99999999999994,274.1666666666667,458C270.7111111111111,458,267.25555555555553,457.99999999999994,263.8,458C260.34444444444443,458,256.88888888888886,457.99999999999994,253.43333333333334,458C249.97777777777776,458,246.52222222222224,458,243.06666666666666,458C239.61111111111111,458,236.1555555555556,458,232.70000000000002,458C229.24444444444447,458.00000000000006,225.7888888888889,457.99999999999994,222.33333333333334,458C218.8777777777778,458,215.42222222222222,458,211.96666666666667,458C208.51111111111112,458,205.0555555555556,458,201.60000000000002,458C198.1444444444445,458.00000000000006,194.6888888888889,457.99999999999994,191.23333333333335,458C187.77777777777777,458,184.32222222222222,457.99999999999994,180.86666666666667,458C177.4111111111111,458,173.95555555555555,457.99999999999994,170.5,458C167.04444444444445,458,163.5888888888889,458,160.13333333333333,458C156.6777777777778,458,153.22222222222223,458,149.76666666666668,458C146.31111111111116,458.00000000000006,142.85555555555558,457.99999999999994,139.4,458C135.94444444444446,458,132.4888888888889,458,129.03333333333333,458C125.57777777777778,458.00000000000006,122.12222222222223,458,118.66666666666667,458C115.21111111111111,458,111.75555555555557,458,108.30000000000001,458C104.84444444444446,458.00000000000006,101.3888888888889,457.99999999999994,97.93333333333334,458C94.47777777777779,458,91.02222222222221,458,87.56666666666666,458C84.11111111111111,458.00000000000006,80.65555555555557,458,77.2,458C73.74444444444445,458,70.2888888888889,458,66.83333333333334,458C63.377777777777794,458.00000000000006,59.92222222222222,457.9999999999999,56.46666666666667,458C53.01111111111111,458,49.55555555555555,457.99999999999994,46.1,458C42.644444444444446,458,39.18888888888889,457.99999999999994,35.733333333333334,458C32.27777777777778,458,28.822222222222223,457.99999999999994,25.366666666666667,458C21.911111111111115,458,15,458,15,458Z"></path><path class="line" d="M15,458C15,458,21.911111111111115,457.99999999999994,25.366666666666667,458C28.822222222222223,458,32.277777777777786,457.99999999999994,35.733333333333334,458C39.18888888888889,458,42.644444444444446,457.99999999999994,46.1,458C49.55555555555555,458,53.01111111111111,457.99999999999994,56.46666666666667,458C59.92222222222222,457.99999999999994,63.377777777777794,458,66.83333333333334,458C70.2888888888889,458.00000000000006,73.74444444444445,458,77.2,458C80.65555555555555,458,84.11111111111111,458,87.56666666666666,458C91.02222222222221,458.00000000000006,94.47777777777779,457.99999999999994,97.93333333333334,458C101.3888888888889,458,104.84444444444446,458,108.30000000000001,458C111.75555555555557,458.00000000000006,115.21111111111111,458,118.66666666666667,458C122.12222222222223,458,125.57777777777778,458,129.03333333333333,458C132.4888888888889,458.00000000000006,135.94444444444446,457.99999999999994,139.4,458C142.85555555555558,458,146.31111111111116,458,149.76666666666668,458C153.22222222222223,458,156.6777777777778,458,160.13333333333333,458C163.5888888888889,458.00000000000006,167.04444444444445,457.99999999999994,170.5,458C173.95555555555555,458,177.4111111111111,457.99999999999994,180.86666666666667,458C184.32222222222222,458,187.77777777777777,457.99999999999994,191.23333333333335,458C194.6888888888889,458,198.1444444444445,458,201.60000000000002,458C205.0555555555556,458,208.51111111111112,458,211.96666666666667,458C215.42222222222222,458.00000000000006,218.8777777777778,457.99999999999994,222.33333333333334,458C225.7888888888889,458,229.24444444444447,458,232.70000000000002,458C236.1555555555556,458,239.61111111111111,458,243.06666666666666,458C246.52222222222224,458.00000000000006,249.97777777777776,457.99999999999994,253.43333333333334,458C256.88888888888886,458,260.34444444444443,457.99999999999994,263.8,458C267.25555555555553,458,270.7111111111111,457.99999999999994,274.1666666666667,458C277.6222222222222,458,281.07777777777784,457.99999999999994,284.53333333333336,458C287.98888888888894,458,291.4444444444444,457.99999999999994,294.90000000000003,458C298.35555555555555,458,301.81111111111113,457.99999999999994,305.26666666666665,458C308.72222222222223,458,312.1777777777778,457.99999999999994,315.6333333333333,458C319.0888888888889,458,326,458,326,458"></path><g class="x axis" transform="translate(0,458)" fill="none" font-size="10" font-family="sans-serif" text-anchor="middle"><path class="domain" stroke="#000" d="M15.5,-458V0.5H326.5V-458"></path><g class="tick" opacity="1" transform="translate(15.5,0)"><line stroke="#000" y2="-458"></line><text fill="#000" y="3" dy="0.71em" style="">1</text></g><g class="tick" opacity="1" transform="translate(25.866666666666667,0)"><line stroke="#000" y2="-458"></line><text fill="#000" y="3" dy="0.71em" style="">2</text></g><g class="tick" opacity="1" transform="translate(36.233333333333334,0)"><line stroke="#000" y2="-458"></line><text fill="#000" y="3" dy="0.71em" style="font-weight: bold; font-size: 12px; fill: #0288d1;">3</text></g><g class="tick" opacity="1" transform="translate(46.6,0)"><line stroke="#000" y2="-458"></line><text fill="#000" y="3" dy="0.71em" style="">4</text></g><g class="tick" opacity="1" transform="translate(56.96666666666667,0)"><line stroke="#000" y2="-458"></line><text fill="#000" y="3" dy="0.71em" style="">5</text></g><g class="tick" opacity="1" transform="translate(67.33333333333334,0)"><line stroke="#000" y2="-458"></line><text fill="#000" y="3" dy="0.71em" style="">6</text></g><g class="tick" opacity="1" transform="translate(77.7,0)"><line stroke="#000" y2="-458"></line><text fill="#000" y="3" dy="0.71em" style="">7</text></g><g class="tick" opacity="1" transform="translate(88.06666666666666,0)"><line stroke="#000" y2="-458"></line><text fill="#000" y="3" dy="0.71em" style="">8</text></g><g class="tick" opacity="1" transform="translate(98.43333333333334,0)"><line stroke="#000" y2="-458"></line><text fill="#000" y="3" dy="0.71em" style="">9</text></g><g class="tick" opacity="1" transform="translate(108.80000000000001,0)"><line stroke="#000" y2="-458"></line><text fill="#000" y="3" dy="0.71em" style="font-weight: bold; font-size: 12px; fill: #0288d1;">10</text></g><g class="tick" opacity="1" transform="translate(119.16666666666667,0)"><line stroke="#000" y2="-458"></line><text fill="#000" y="3" dy="0.71em" style="">11</text></g><g class="tick" opacity="1" transform="translate(129.53333333333333,0)"><line stroke="#000" y2="-458"></line><text fill="#000" y="3" dy="0.71em" style="">12</text></g><g class="tick" opacity="1" transform="translate(139.9,0)"><line stroke="#000" y2="-458"></line><text fill="#000" y="3" dy="0.71em" style="">13</text></g><g class="tick" opacity="1" transform="translate(150.26666666666668,0)"><line stroke="#000" y2="-458"></line><text fill="#000" y="3" dy="0.71em" style="">14</text></g><g class="tick" opacity="1" transform="translate(160.63333333333333,0)"><line stroke="#000" y2="-458"></line><text fill="#000" y="3" dy="0.71em" style="">15</text></g><g class="tick" opacity="1" transform="translate(171,0)"><line stroke="#000" y2="-458"></line><text fill="#000" y="3" dy="0.71em" style="">16</text></g><g class="tick" opacity="1" transform="translate(181.36666666666667,0)"><line stroke="#000" y2="-458"></line><text fill="#000" y="3" dy="0.71em" style="font-weight: bold; font-size: 12px; fill: #0288d1;">17</text></g><g class="tick" opacity="1" transform="translate(191.73333333333335,0)"><line stroke="#000" y2="-458"></line><text fill="#000" y="3" dy="0.71em" style="">18</text></g><g class="tick" opacity="1" transform="translate(202.10000000000002,0)"><line stroke="#000" y2="-458"></line><text fill="#000" y="3" dy="0.71em" style="">19</text></g><g class="tick" opacity="1" transform="translate(212.46666666666667,0)"><line stroke="#000" y2="-458"></line><text fill="#000" y="3" dy="0.71em" style="">20</text></g><g class="tick" opacity="1" transform="translate(222.83333333333334,0)"><line stroke="#000" y2="-458"></line><text fill="#000" y="3" dy="0.71em" style="">21</text></g><g class="tick" opacity="1" transform="translate(233.20000000000002,0)"><line stroke="#000" y2="-458"></line><text fill="#000" y="3" dy="0.71em" style="">22</text></g><g class="tick" opacity="1" transform="translate(243.56666666666666,0)"><line stroke="#000" y2="-458"></line><text fill="#000" y="3" dy="0.71em" style="">23</text></g><g class="tick" opacity="1" transform="translate(253.93333333333334,0)"><line stroke="#000" y2="-458"></line><text fill="#000" y="3" dy="0.71em" style="font-weight: bold; font-size: 12px; fill: #0288d1;">24</text></g><g class="tick" opacity="1" transform="translate(264.3,0)"><line stroke="#000" y2="-458"></line><text fill="#000" y="3" dy="0.71em" style="">25</text></g><g class="tick" opacity="1" transform="translate(274.6666666666667,0)"><line stroke="#000" y2="-458"></line><text fill="#000" y="3" dy="0.71em" style="">26</text></g><g class="tick" opacity="1" transform="translate(285.03333333333336,0)"><line stroke="#000" y2="-458"></line><text fill="#000" y="3" dy="0.71em" style="">27</text></g><g class="tick" opacity="1" transform="translate(295.40000000000003,0)"><line stroke="#000" y2="-458"></line><text fill="#000" y="3" dy="0.71em" style="">28</text></g><g class="tick" opacity="1" transform="translate(305.76666666666665,0)"><line stroke="#000" y2="-458"></line><text fill="#000" y="3" dy="0.71em" style="">29</text></g><g class="tick" opacity="1" transform="translate(316.1333333333333,0)"><line stroke="#000" y2="-458"></line><text fill="#000" y="3" dy="0.71em" style="">30</text></g><g class="tick" opacity="1" transform="translate(326.5,0)"><line stroke="#000" y2="-458"></line><text fill="#000" y="3" dy="0.71em" style="font-weight: bold; font-size: 12px; fill: #0288d1;">31</text></g></g><g class="y axis" fill="none" font-size="10" font-family="sans-serif" text-anchor="end"><path class="domain" stroke="#000" d="M341,458.5H0.5V0.5H341"></path><g class="tick" opacity="1" transform="translate(0,458.5)"><line stroke="#000" x2="341"></line><text fill="#000" x="-3" dy="0.32em">0</text></g></g><g class="focus" style="display: none;" transform="translate(253.43333333333334, 458)"><line class="x-hover-line hover-line" y1="0" y2="0"></line><line class="y-hover-line hover-line" x1="697" x2="1394"></line><circle r="7.5"></circle><text x="15" dy=".31em">0</text></g><rect transform="translate(0, 0)" class="overlay" width="341" height="458"></rect><g class="dots"><circle r="3" cx="15" cy="458"></circle><circle r="3" cx="25.366666666666667" cy="458"></circle><circle r="3" cx="35.733333333333334" cy="458"></circle><circle r="3" cx="46.1" cy="458"></circle><circle r="3" cx="56.46666666666667" cy="458"></circle><circle r="3" cx="66.83333333333334" cy="458"></circle><circle r="3" cx="77.2" cy="458"></circle><circle r="3" cx="87.56666666666666" cy="458"></circle><circle r="3" cx="97.93333333333334" cy="458"></circle><circle r="3" cx="108.30000000000001" cy="458"></circle><circle r="3" cx="118.66666666666667" cy="458"></circle><circle r="3" cx="129.03333333333333" cy="458"></circle><circle r="3" cx="139.4" cy="458"></circle><circle r="3" cx="149.76666666666668" cy="458"></circle><circle r="3" cx="160.13333333333333" cy="458"></circle><circle r="3" cx="170.5" cy="458"></circle><circle r="3" cx="180.86666666666667" cy="458"></circle><circle r="3" cx="191.23333333333335" cy="458"></circle><circle r="3" cx="201.60000000000002" cy="458"></circle><circle r="3" cx="211.96666666666667" cy="458"></circle><circle r="3" cx="222.33333333333334" cy="458"></circle><circle r="3" cx="232.70000000000002" cy="458"></circle><circle r="3" cx="243.06666666666666" cy="458"></circle><circle r="3" cx="253.43333333333334" cy="458"></circle><circle r="3" cx="263.8" cy="458"></circle><circle r="3" cx="274.1666666666667" cy="458"></circle><circle r="3" cx="284.53333333333336" cy="458"></circle><circle r="3" cx="294.90000000000003" cy="458"></circle><circle r="3" cx="305.26666666666665" cy="458"></circle><circle r="3" cx="315.6333333333333" cy="458"></circle><circle r="3" cx="326" cy="458"></circle></g></g></svg><div class="legend"><p>Выручка</p></div></div>
                        </div>
                    </div>
                </div>

                <div class="grid">
                    <div>
                        <!----><div ng-include="&#39;js/pages/dashboard/blocks/docs-table.html&#39;"><div class="panel basic white docs animated zoomIn" loading="panel.docs.loading">
                                <h1>
                                    <span translate="">Документы</span>
                                    <div ng-class="[ dropdown_class, class, {disabled: disabled}, ngClass ]" ng-transclude="" ng-model="panel.docs.type" items="block.date" class="pull-right button basic icon top right pointing ui dropdown action-activate ng-not-empty ng-valid" tabindex="0">
                                        <i class="icon calendar outline"></i>
                                        <div class="text">месяц</div>
                                        <div class="menu" tabindex="-1">
                                            <!----><div class="item" ng-repeat="(key, item) in block.date" data-value="today" ng-bind="item.title | translate">сегодня</div><!----><div class="item" ng-repeat="(key, item) in block.date" data-value="week" ng-bind="item.title | translate">неделю</div><!----><div class="item active selected" ng-repeat="(key, item) in block.date" data-value="month" ng-bind="item.title | translate">месяц</div><!----><div class="item" ng-repeat="(key, item) in block.date" data-value="quarter" ng-bind="item.title | translate">квартал</div><!----><div class="item" ng-repeat="(key, item) in block.date" data-value="year" ng-bind="item.title | translate">год</div><!---->
                                        </div>
                                    </div>
                                </h1>

                                <table class="ui large very basic celled table right aligned">
                                    <thead>
                                    <tr>
                                        <th class="left aligned" translate="">Наименование</th>
                                        <th width="24%"><span style="display: inline-flex;" text="Количество документов">
        <span ng-transclude=""><span>Кол-во</span></span>
        <i style="flex-basis: 20px;" popup="" popup-on="click" popup-html="Количество документов" class="icon help circular">?</i>
      </span></th>
                                        <th width="20%"><span style="display: inline-flex;" text="Сумма всех документов">
        <span ng-transclude=""><span>Сумма</span></span>
        <i style="flex-basis: 20px;" popup="" popup-on="click" popup-html="Сумма всех документов" class="icon help circular">?</i>
      </span></th>
                                        <th width="20%"><span style="display: inline-flex;" text="Количество товара в документах">
        <span ng-transclude=""><span>Склад</span></span>
        <i style="flex-basis: 20px;" popup="" popup-on="click" popup-html="Количество товара в документах" class="icon help circular">?</i>
      </span></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <!----><tr ng-repeat="(key, item) in panel.docs.types">
                                        <td class="left aligned" ng-bind="item.title | translate">Продажа</td>
                                        <td>0</td>
                                        <td>0.00</td>
                                        <td>0</td>
                                    </tr><!----><tr ng-repeat="(key, item) in panel.docs.types">
                                        <td class="left aligned" ng-bind="item.title | translate">Закупка</td>
                                        <td>0</td>
                                        <td>0.00</td>
                                        <td>0</td>
                                    </tr><!----><tr ng-repeat="(key, item) in panel.docs.types">
                                        <td class="left aligned" ng-bind="item.title | translate">Возврат продажи</td>
                                        <td>0</td>
                                        <td>0.00</td>
                                        <td>0</td>
                                    </tr><!----><tr ng-repeat="(key, item) in panel.docs.types">
                                        <td class="left aligned" ng-bind="item.title | translate">Возврат закупки</td>
                                        <td>0</td>
                                        <td>0.00</td>
                                        <td>0</td>
                                    </tr><!----><tr ng-repeat="(key, item) in panel.docs.types">
                                        <td class="left aligned" ng-bind="item.title | translate">Корректировка</td>
                                        <td>0</td>
                                        <td>0.00</td>
                                        <td>0</td>
                                    </tr><!----><tr ng-repeat="(key, item) in panel.docs.types">
                                        <td class="left aligned" ng-bind="item.title | translate">Инвентаризация</td>
                                        <td>0</td>
                                        <td>0.00</td>
                                        <td>0</td>
                                    </tr><!----><tr ng-repeat="(key, item) in panel.docs.types">
                                        <td class="left aligned" ng-bind="item.title | translate">Оприходование</td>
                                        <td>0</td>
                                        <td>0.00</td>
                                        <td>0</td>
                                    </tr><!----><tr ng-repeat="(key, item) in panel.docs.types">
                                        <td class="left aligned" ng-bind="item.title | translate">Списание</td>
                                        <td>0</td>
                                        <td>0.00</td>
                                        <td>0</td>
                                    </tr><!----><tr ng-repeat="(key, item) in panel.docs.types">
                                        <td class="left aligned" ng-bind="item.title | translate">Перемещение</td>
                                        <td>0</td>
                                        <td>-</td>
                                        <td>0</td>
                                    </tr><!---->
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                    <div>
                        <!----><div ng-include="&#39;js/pages/dashboard/blocks/stock.html&#39;"><div class="panel white stock animated zoomIn">
                                <div class="header">
                                    <h1>
                                        <div>
                                            <span translate="">Оценка склада</span>&nbsp;<!--
      --><!--span translate>FOR</span>&nbsp;--><!--
      --><span ng-show="panel.stock.storage.store.length == 1" class="ng-hide">по магазину&nbsp;</span><!--
      --><span ng-show="panel.stock.storage.store.length &gt; 1" class="ng-hide">Магазины&nbsp;</span><!--
      -->
                                        </div>
                                        <div ng-class="{active: panel.stock.storage.store.length &gt; 0}">
                                            <div ng-class="[ dropdown_class, class, {disabled: disabled}, ngClass ]" ng-transclude="" multiple="multiple" ng-model="panel.stock.storage.store" class="pointing multiple ui dropdown action-activate ng-not-empty ng-valid" tabindex="0">
                                                <input type="hidden" autocomplete="off" value="">
                                                <div class="default text" translate="">по всем магазинам</div>
                                                <a ng-show="db.stores.data.length !== panel.stock.storage.store.length" href="https://web.cloudshop.ru/" class="ui tiny circular basic icon button"><i class="plus icon"></i></a>
                                                <div class="menu" tabindex="-1">
                                                    <!----><div class="item" ng-repeat="(key, item) in db.stores.data" data-value="62c1409219a20d4058567c65" ng-bind="item.name">Магазин</div><!---->
                                                </div>
                                            </div>
                                        </div>
                                    </h1>
                                </div>
                                <h1 style="" class="_message ng-hide" ng-class="[classes]" ng-transclude="" ng-show="panel.stock.loading">
                                    <i class="icon spinner loading"></i><div class="text">подождите</div></h1>
                                <div class="content" ng-show="!panel.stock.loading">
                                    <div class="ui small warning message" ng-show="panel.stock.data.emptyCost &gt; 0 || panel.stock.data.emptyStock &gt; 0">
                                        <div class="header" translate="">Внимание</div>
                                        <!-- TODO: language  -->
                                        <ul>
                                            <li ng-show="panel.stock.data.emptyCost &gt; 0" class="">
                                                <a href="https://web.cloudshop.ru/" ng-click="panel.stock.openCost()">
                                                    1 поз.
                                                    с себестоимостью равной 0 сом
                                                </a>
                                                (<a ui-sref="authenticated.card.support({post: 5})" translate="" href="https://web.cloudshop.ru/card/support/5">как изменить себестоимость</a>)
                                            </li>
                                            <li ng-show="panel.stock.data.emptyStock &gt; 0" class="ng-hide">
                                                <a href="https://web.cloudshop.ru/" ng-click="panel.stock.openStock()">
                                                    0 поз.
                                                    <span translate="">с остатком меньше 0</span>
                                                </a>
                                            </li>
                                            <li ng-show="panel.stock.data.expirationDate &gt; 0" class="ng-hide">
                                                <a href="https://web.cloudshop.ru/#" ng-click="panel.stock.openExpired()">
                                                    0 поз. с истёкшим сроком годности
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="item">
                                        <strong translate="">Количество товара</strong>
                                        <h1>0 ед.</h1>
                                    </div>
                                    <div class="item">
                                        <em translate="">Стоимость товара</em>
                                        <strong translate="">В розничных ценах</strong>
                                        <h1>0.00 сом</h1>
                                    </div>
                                    <div class="item">
                                        <em translate="">Стоимость товара</em>
                                        <strong translate="">По себестоимости</strong>
                                        <h1>0.00 сом</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="baron__track"><div class="baron__free"><div id="scroll-732755" class="baron__bar" style="right: 2px; height: 116px; top: 0px;"></div></div></div></div>
        </div>

        <!----><div ui-view="sidebar_right" class="sidebar_right"></div>

        <div id="overlay"></div></div>
</div>

<!----><div ui-view="login"></div>


<status-bar></status-bar>

<div class="notification-messages">
    <!---->
</div>
<div style="display: none;">
    <div class="chat">
        <i class="ui mail icon"></i>
    </div>
    <div class="cs overlay">
        <form method="post" action="https://web.cloudshop.ru/" name="support" class="cs small modal ng-pristine ng-invalid ng-invalid-required">
            <div class="header">
                Обратная связь
                <a href="https://web.cloudshop.ru/" ng-click="toggle(false)" class="ui circular tiny icon button">
                    <i class="ui icon close"></i>
                </a>
            </div>
            <div class="content" style="padding-top: 11px;">
                <div class="ui form">
                    <div class="field">
                        <label translate="">Тема</label>
                        <input name="subject" type="text" ng-model="form.subject" class="ng-pristine ng-untouched ng-valid ng-empty">
                    </div>
                    <div class="field text">
                        <label translate="">Сообщение</label>
                        <textarea name="text" required="" ng-model="form.text" class="ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required"></textarea>
                    </div>
                </div>
            </div>
            <div class="footer">
                <button class="ui green button" translate="">Отправить</button>
            </div>
        </form>
    </div>
</div>

<div class="ui modal" id="popup"></div>

<!----><div class="cs sidebar" id="state-modal" ui-view="modal"></div>
<billing-modal></billing-modal>
<div class="ui modal" ng-class="data.size" id="confirm-modal">
    <div class="header">
        Внимание
    </div>
    <div class="content">
        <form class="description ng-pristine ng-valid" ng-bind-html="data.body"></form>
    </div>
    <div class="actions">
        <div class="ui cancel basic button">Отмена</div>
        <div class="ui ok right green button">
            Да
        </div>
    </div>
</div>
<div class="ui modal" ng-class="data.size" id="alert-modal">
    <div class="header">
        Внимание
    </div>
    <div class="content">
        <form class="description ng-pristine ng-valid" ng-bind-html="data.body"></form>
    </div>
    <div class="actions">
        <div class="ui cancel red button">Закрыть</div>
    </div>
</div>
<div class="ui modal" ng-class="data.size" id="prompt-modal">
    <div class="header">

    </div>
    <div class="content">
        <form class="ui form description ng-pristine ng-valid">
            <div class="field">
                <input placeholder="" ng-model="text" name="text" type="text" class="ng-pristine ng-untouched ng-valid ng-empty">
            </div>
        </form>
    </div>
    <div class="actions">
        <div class="ui cancel basic button">Отмена</div>
        <div class="ui ok right green button">
            Создать
        </div>
    </div>
</div>


<!-- JS -->
<script src="./Главная_files/vendor-c183680731.js"></script>


<script src="./Главная_files/main-3985a405ca.js"></script>

<script src="./Главная_files/app.config.js"></script>


<div><div id="carrotquest-messenger-collapsed-container" class="carrotquest-css-reset carrotquest-messenger-right_bottom" data-touch="false"><div id="chat-container"><div id="icon-container"><iframe id="carrot-messenger-collapsed-frame" name="carrot-messenger-collapsed-frame" class="carrot-messenger-collapsed-frame" data-resize-width="1" data-resize-height="1" src="./Главная_files/saved_resource.html"></iframe></div><div id="bubble-container" style="width: 5px !important; height: 0px !important;"><iframe id="carrot-messenger-bubble" name="carrot-messenger-bubble" class="carrot-messenger-bubble" data-resize-width="1" data-resize-height="1" src="./Главная_files/saved_resource(1).html"></iframe></div></div></div></div><div class="ui dimmer modals page"><div class="ui tiny modal">
        <div class="header" ng-bind="modalTitle | translate"></div>
        <div class="content">
            <div class="description" ng-bind-html="modalBody"></div>
        </div>
        <div class="actions" style="text-align: center;">
            <div ng-click="closeModal()" ui-sref="authenticated.payment" class="ui large green button" translate="" href="/payment">Перейти к оплате</div>
        </div>
    </div><div class="ui tiny modal">
        <div class="header" ng-bind="modalTitle | translate"></div>
        <div class="content">
            <div class="description" ng-bind-html="modalBody"></div>
        </div>
        <div class="actions" style="text-align: center;">
            <div ng-click="closeModal()" ui-sref="authenticated.payment" class="ui large green button" translate="" href="/payment">Перейти к оплате</div>
        </div>
    </div><div class="ui tiny modal">
        <div class="header" ng-bind="modalTitle | translate"></div>
        <div class="content">
            <div class="description" ng-bind-html="modalBody"></div>
        </div>
        <div class="actions" style="text-align: center;">
            <div ng-click="closeModal()" ui-sref="authenticated.payment" class="ui large green button" translate="" href="/payment">Перейти к оплате</div>
        </div>
    </div></div><div class="date-picker-wrapper two-months has-gap" unselectable="on" style="display: none; top: 0px; left: 0px; user-select: none;"><div class="drp_top-bar normal"><div class="normal-top"><span class="selection-top">Выбрано: </span> <b class="start-day">2022-05-25</b> <span class="separator-day"> to </span> <b class="end-day">2022-07-24</b> <i class="selected-days" style="display: inline;">(<span class="selected-days-num">61</span> Дней)</i></div><div class="error-top">error</div><div class="default-top">Пожалуйста выберите диапазон</div><input type="button" class="apply-btn" value="Применить"></div><div class="column"><div class="month-wrapper" style="width: 425px;">   <table class="month1" cellspacing="0" border="0" cellpadding="0">       <thead>           <tr class="caption">               <th>                   <span class="prev">&lt;                   </span>               </th>               <th colspan="5" class="month-name"><div class="select-wrapper"><select class="month" name="month"><option value="0">январь</option><option value="1">февраль</option><option value="2">март</option><option value="3">апрель</option><option value="4" selected="">май</option><option value="5">июнь</option><option value="6">июль</option><option value="7">август</option><option value="8">сентябрь</option><option value="9">октябрь</option><option value="10">ноябрь</option><option value="11">декабрь</option></select>май</div> <div class="select-wrapper"><select class="year" name="year"><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022" selected="">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option></select>2022</div></th>               <th><span class="next">&gt;</span>               </th>           </tr>           <tr class="week-name"><th>пн</th><th>вт</th><th>ср</th><th>чт</th><th>пт</th><th>сб</th><th>вс</th>       </tr></thead>       <tbody><tr><td><div time="1650823200000" data-tooltip-="" class="day lastMonth valid">25</div></td><td><div time="1650909600000" data-tooltip-="" class="day lastMonth valid">26</div></td><td><div time="1650996000000" data-tooltip-="" class="day lastMonth valid">27</div></td><td><div time="1651082400000" data-tooltip-="" class="day lastMonth valid">28</div></td><td><div time="1651168800000" data-tooltip-="" class="day lastMonth valid">29</div></td><td><div time="1651255200000" data-tooltip-="" class="day lastMonth valid">30</div></td><td><div time="1651341600000" data-tooltip-="" class="day toMonth valid">1</div></td></tr><tr><td><div time="1651428000000" data-tooltip-="" class="day toMonth valid">2</div></td><td><div time="1651514400000" data-tooltip-="" class="day toMonth valid">3</div></td><td><div time="1651600800000" data-tooltip-="" class="day toMonth valid">4</div></td><td><div time="1651687200000" data-tooltip-="" class="day toMonth valid">5</div></td><td><div time="1651773600000" data-tooltip-="" class="day toMonth valid">6</div></td><td><div time="1651860000000" data-tooltip-="" class="day toMonth valid">7</div></td><td><div time="1651946400000" data-tooltip-="" class="day toMonth valid">8</div></td></tr><tr><td><div time="1652032800000" data-tooltip-="" class="day toMonth valid">9</div></td><td><div time="1652119200000" data-tooltip-="" class="day toMonth valid">10</div></td><td><div time="1652205600000" data-tooltip-="" class="day toMonth valid">11</div></td><td><div time="1652292000000" data-tooltip-="" class="day toMonth valid">12</div></td><td><div time="1652378400000" data-tooltip-="" class="day toMonth valid">13</div></td><td><div time="1652464800000" data-tooltip-="" class="day toMonth valid">14</div></td><td><div time="1652551200000" data-tooltip-="" class="day toMonth valid">15</div></td></tr><tr><td><div time="1652637600000" data-tooltip-="" class="day toMonth valid">16</div></td><td><div time="1652724000000" data-tooltip-="" class="day toMonth valid">17</div></td><td><div time="1652810400000" data-tooltip-="" class="day toMonth valid">18</div></td><td><div time="1652896800000" data-tooltip-="" class="day toMonth valid">19</div></td><td><div time="1652983200000" data-tooltip-="" class="day toMonth valid">20</div></td><td><div time="1653069600000" data-tooltip-="" class="day toMonth valid">21</div></td><td><div time="1653156000000" data-tooltip-="" class="day toMonth valid">22</div></td></tr><tr><td><div time="1653242400000" data-tooltip-="" class="day toMonth valid">23</div></td><td><div time="1653328800000" data-tooltip-="" class="day toMonth valid">24</div></td><td><div time="1653415200000" data-tooltip-="" class="day toMonth valid checked first-date-selected">25</div></td><td><div time="1653501600000" data-tooltip-="" class="day toMonth valid checked">26</div></td><td><div time="1653588000000" data-tooltip-="" class="day toMonth valid checked">27</div></td><td><div time="1653674400000" data-tooltip-="" class="day toMonth valid checked">28</div></td><td><div time="1653760800000" data-tooltip-="" class="day toMonth valid checked">29</div></td></tr><tr><td><div time="1653847200000" data-tooltip-="" class="day toMonth valid checked">30</div></td><td><div time="1653933600000" data-tooltip-="" class="day toMonth valid checked">31</div></td><td><div time="1654020000000" data-tooltip-="" class="day nextMonth valid checked">1</div></td><td><div time="1654106400000" data-tooltip-="" class="day nextMonth valid checked">2</div></td><td><div time="1654192800000" data-tooltip-="" class="day nextMonth valid checked">3</div></td><td><div time="1654279200000" data-tooltip-="" class="day nextMonth valid checked">4</div></td><td><div time="1654365600000" data-tooltip-="" class="day nextMonth valid checked">5</div></td></tr></tbody>   </table><div class="gap" style="visibility: visible; height: 10px;"><div class="gap-top-mask"></div><div class="gap-bottom-mask"></div><div class="gap-lines"><div class="gap-line"><div class="gap-1"></div><div class="gap-2"></div><div class="gap-3"></div></div><div class="gap-line"><div class="gap-1"></div><div class="gap-2"></div><div class="gap-3"></div></div><div class="gap-line"><div class="gap-1"></div><div class="gap-2"></div><div class="gap-3"></div></div><div class="gap-line"><div class="gap-1"></div><div class="gap-2"></div><div class="gap-3"></div></div><div class="gap-line"><div class="gap-1"></div><div class="gap-2"></div><div class="gap-3"></div></div><div class="gap-line"><div class="gap-1"></div><div class="gap-2"></div><div class="gap-3"></div></div><div class="gap-line"><div class="gap-1"></div><div class="gap-2"></div><div class="gap-3"></div></div><div class="gap-line"><div class="gap-1"></div><div class="gap-2"></div><div class="gap-3"></div></div><div class="gap-line"><div class="gap-1"></div><div class="gap-2"></div><div class="gap-3"></div></div><div class="gap-line"><div class="gap-1"></div><div class="gap-2"></div><div class="gap-3"></div></div><div class="gap-line"><div class="gap-1"></div><div class="gap-2"></div><div class="gap-3"></div></div><div class="gap-line"><div class="gap-1"></div><div class="gap-2"></div><div class="gap-3"></div></div><div class="gap-line"><div class="gap-1"></div><div class="gap-2"></div><div class="gap-3"></div></div><div class="gap-line"><div class="gap-1"></div><div class="gap-2"></div><div class="gap-3"></div></div><div class="gap-line"><div class="gap-1"></div><div class="gap-2"></div><div class="gap-3"></div></div><div class="gap-line"><div class="gap-1"></div><div class="gap-2"></div><div class="gap-3"></div></div><div class="gap-line"><div class="gap-1"></div><div class="gap-2"></div><div class="gap-3"></div></div><div class="gap-line"><div class="gap-1"></div><div class="gap-2"></div><div class="gap-3"></div></div><div class="gap-line"><div class="gap-1"></div><div class="gap-2"></div><div class="gap-3"></div></div><div class="gap-line"><div class="gap-1"></div><div class="gap-2"></div><div class="gap-3"></div></div></div></div><table class="month2" cellspacing="0" border="0" cellpadding="0">   <thead>   <tr class="caption">       <th><span class="prev">&lt;</span>       </th>       <th colspan="5" class="month-name"><div class="select-wrapper"><select class="month" name="month"><option value="0">январь</option><option value="1">февраль</option><option value="2">март</option><option value="3">апрель</option><option value="4">май</option><option value="5">июнь</option><option value="6" selected="">июль</option><option value="7">август</option><option value="8">сентябрь</option><option value="9">октябрь</option><option value="10">ноябрь</option><option value="11">декабрь</option></select>июль</div> <div class="select-wrapper"><select class="year" name="year"><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022" selected="">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option></select>2022</div></th>       <th>           <span class="next">&gt;</span>       </th>   </tr>   <tr class="week-name"><th>пн</th><th>вт</th><th>ср</th><th>чт</th><th>пт</th><th>сб</th><th>вс</th>   </tr></thead>   <tbody><tr><td><div time="1656266400000" data-tooltip-="" class="day lastMonth valid checked">27</div></td><td><div time="1656352800000" data-tooltip-="" class="day lastMonth valid checked">28</div></td><td><div time="1656439200000" data-tooltip-="" class="day lastMonth valid checked">29</div></td><td><div time="1656525600000" data-tooltip-="" class="day lastMonth valid checked">30</div></td><td><div time="1656612000000" data-tooltip-="" class="day toMonth valid checked">1</div></td><td><div time="1656698400000" data-tooltip-="" class="day toMonth valid checked">2</div></td><td><div time="1656784800000" data-tooltip-="" class="day toMonth valid checked">3</div></td></tr><tr><td><div time="1656871200000" data-tooltip-="" class="day toMonth valid checked">4</div></td><td><div time="1656957600000" data-tooltip-="" class="day toMonth valid checked">5</div></td><td><div time="1657044000000" data-tooltip-="" class="day toMonth valid checked">6</div></td><td><div time="1657130400000" data-tooltip-="" class="day toMonth valid checked">7</div></td><td><div time="1657216800000" data-tooltip-="" class="day toMonth valid checked">8</div></td><td><div time="1657303200000" data-tooltip-="" class="day toMonth valid checked">9</div></td><td><div time="1657389600000" data-tooltip-="" class="day toMonth valid checked">10</div></td></tr><tr><td><div time="1657476000000" data-tooltip-="" class="day toMonth valid checked">11</div></td><td><div time="1657562400000" data-tooltip-="" class="day toMonth valid checked">12</div></td><td><div time="1657648800000" data-tooltip-="" class="day toMonth valid checked">13</div></td><td><div time="1657735200000" data-tooltip-="" class="day toMonth valid checked">14</div></td><td><div time="1657821600000" data-tooltip-="" class="day toMonth valid checked">15</div></td><td><div time="1657908000000" data-tooltip-="" class="day toMonth valid checked">16</div></td><td><div time="1657994400000" data-tooltip-="" class="day toMonth valid checked">17</div></td></tr><tr><td><div time="1658080800000" data-tooltip-="" class="day toMonth valid checked">18</div></td><td><div time="1658167200000" data-tooltip-="" class="day toMonth valid checked">19</div></td><td><div time="1658253600000" data-tooltip-="" class="day toMonth valid checked">20</div></td><td><div time="1658340000000" data-tooltip-="" class="day toMonth valid checked">21</div></td><td><div time="1658426400000" data-tooltip-="" class="day toMonth valid checked">22</div></td><td><div time="1658512800000" data-tooltip-="" class="day toMonth valid checked">23</div></td><td><div time="1658599200000" data-tooltip-="" class="day toMonth valid real-today checked last-date-selected">24</div></td></tr><tr><td><div time="1658685600000" data-tooltip-="" class="day toMonth valid">25</div></td><td><div time="1658772000000" data-tooltip-="" class="day toMonth valid">26</div></td><td><div time="1658858400000" data-tooltip-="" class="day toMonth valid">27</div></td><td><div time="1658944800000" data-tooltip-="" class="day toMonth valid">28</div></td><td><div time="1659031200000" data-tooltip-="" class="day toMonth valid">29</div></td><td><div time="1659117600000" data-tooltip-="" class="day toMonth valid">30</div></td><td><div time="1659204000000" data-tooltip-="" class="day toMonth valid">31</div></td></tr><tr><td><div time="1659290400000" data-tooltip-="" class="day nextMonth valid">1</div></td><td><div time="1659376800000" data-tooltip-="" class="day nextMonth valid">2</div></td><td><div time="1659463200000" data-tooltip-="" class="day nextMonth valid">3</div></td><td><div time="1659549600000" data-tooltip-="" class="day nextMonth valid">4</div></td><td><div time="1659636000000" data-tooltip-="" class="day nextMonth valid">5</div></td><td><div time="1659722400000" data-tooltip-="" class="day nextMonth valid">6</div></td><td><div time="1659808800000" data-tooltip-="" class="day nextMonth valid">7</div></td></tr></tbody></table><div class="dp-clearfix"></div><div class="time"><div class="time1"></div><div class="time2"></div></div><div class="dp-clearfix"></div></div><div class="footer"><div class="shortcuts"><b>Быстрый выбор</b><span class="custom-shortcut"><a href="javascript:;" shortcut="custom">сегодня</a></span><span class="custom-shortcut"><a href="javascript:;" shortcut="custom">Вчера</a></span><span class="custom-shortcut"><a href="javascript:;" shortcut="custom">7 дней</a></span><span class="custom-shortcut"><a href="javascript:;" shortcut="custom">30 дней</a></span><span class="custom-shortcut"><a href="javascript:;" shortcut="custom">Этот месяц</a></span><span class="custom-shortcut"><a href="javascript:;" shortcut="custom">Прошлый месяц</a></span><span class="custom-shortcut"><a href="javascript:;" shortcut="custom">квартал</a></span></div></div></div><div class="date-range-length-tip"></div></div><style id="HW_styles_cont">.HW_badge_cont {
        visibility: hidden;
        pointer-events: none;
        display: block;
        cursor: pointer;
        position: relative;
        width: 32px;
        height: 32px;
    }

    .HW_absolute {
        position: absolute !important;
    }

    .HW_badge_cont.HW_visible {
        visibility: visible;
        pointer-events: auto;
    }

    .HW_badge {
        display: block;
        border-radius: 20px;
        background: #CD4B5B;
        height: 16px;
        width: 16px;
        color: #fff;
        text-align: center;
        line-height: 16px;
        font-size: 11px;
        cursor: pointer;
        position: absolute;
        top: 8px;
        left: 8px;
        opacity: 0;
        will-change: scale;
        transform: scale(0);
        transition: all 0.3s;
    }

    .HW_top {
        top: -16px;
    }

    .HW_bottom {
        bottom: -16px;
    }

    .HW_left {
        left: -16px;
    }

    .HW_right {
        right: -16px;
    }

    .HW_center, .HW_vcenter {
        left: 50%;
        margin-left: -16px;
    }

    .HW_center, .HW_hcenter {
        top: 50%;
        margin-top: -16px;
    }

    .HW_badge.HW_softHidden {
        background: #d4d4d4;
        opacity: 1;
        transform: scale(0.6);
    }

    .HW_badge.HW_hidden {
        opacity: 0;
        transform: scale(0);
    }

    .HW_badge.HW_visible {
        opacity: 1;
        transform: scale(1.0);
    }

    .HW_frame_cont {
        pointer-events: none;
        border-radius: 4px;
        box-shadow: 0 0 1px rgba(99, 114, 130, 0.32), 0 8px 16px rgba(27, 39, 51, 0.08);
        background: #fff;
        border: none;
        position: fixed;
        top: -900em;
        z-index: 2147483647;
        width: 340px;
        height: 0;
        opacity: 0;
        will-change: height, margin-top, opacity;
        margin-top: -10px;
        transition: margin-top 0.15s ease-out, opacity 0.1s ease-out;
        overflow: hidden;
    }

    .HW_frame_cont.HW_visible {
        opacity: 1;
        pointer-events: auto;
        margin-top: 0px;
    }

    .HW_frame_cont.HW_visible.HW_bottom {
        transition: margin-top 0.15s ease-out, opacity 0.1s ease-out, height 0.3s ease-out;
    }

    .HW_frame {
        background: #fff;
        border: none;
        width: 100%;
        overflow: hidden;
        border-radius: 4px;
        position: relative;
        z-index: 2147483647;
    }

    .HW_frame_cont.HW_embed {
        position: static;
        margin-top: 0;
    }

    .HW_notransition {
        transition: none !important;
    }</style><div id="HW_frame_cont" class="HW_frame_cont HW_bottom" data-account="JVD9Wx" style="height: 369px;"><iframe id="HW_frame" class="HW_frame" src="./Главная_files/JVD9Wx.html" referrerpolicy="strict-origin" sandbox="allow-same-origin allow-scripts allow-top-navigation allow-popups allow-forms allow-popups-to-escape-sandbox" tabindex="-1" aria-hidden="true" style="height: 369px;"></iframe></div></body></html>

