@section('navbar')
    <div class="left-sidenav">

        <ul class="metismenu left-sidenav-menu" id="side-nav">

            <li class="menu-title">Основное</li>

            <li>
                <a href="index.php"><i class="mdi mdi-monitor"></i><span>Главное меню</span><span class="badge badge-danger badge-pill float-right">9+</span></a>
            </li>
            <li>
                <a href="create_clients.php"><i class="mdi mdi-human-greeting"></i><span>Создать клиента</span></a>
            </li>


            <li class="menu-title">Панель администратора</li>
            <li>
                <a href="javascript: void(0);"><i class="mdi mdi-apps"></i><span>Сотрудники</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" id="1" aria-expanded="false">
                    <li><a href="create_user.php">Создать пользователя</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript: void(0);"><i class="mdi mdi-apps"></i><span>Прочее</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" id="2" aria-expanded="false">
                    <li><a href="add_databse.php">Базы данных</a></li>
                    <li><a href="show_viewers.php">Количество просмотров сайта</a></li>
                </ul>
            </li>
            <li>
            <a href="javascript: void(0);"><i class="mdi mdi-apps"></i><span>Настройки сайта</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
            <ul class="nav-second-level" aria-expanded="false">
                <li><a href="">Контакты</a></li>
                <li><a href="form-add-cat.php">Тип сайтов</a></li>
                <li><a href="form-add-status.php">Статусы разработки</a></li>
                <li><a href="form_create_status_call.php">Статусы Звонков</a></li>
                <li><a href="form_create_status_bid.php">Статусы Заявки</a></li>
                <li><a href="form-add-know.php">Наши особенности</a></li>
                <li><a href="form-add-cms.php">Система разработки</a></li>
                <li><a href="form-add-work-style.php">Виды работ</a></li>
                <li><a href="forms-page.php">Локализация</a></li>
            </ul>
            </li>


            <li class="menu-title">Маркетинг</li>
            <li>
                <a href="javascript: void(0);">Настройка коммерции <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li><a href="list-tarif.php">Список тарифов</a></li>
                    <li><a href="create-tarif.php">Создать тариф</a></li>
                    <li><a href="list-type.php">Типы сайтов</a></li>
                    <li><a href="app-ecommerce-product.html">Product</a></li>



                    <li><a href="app-ecommerce-product.html">Product</a></li>
                    <li><a href="app-ecommerce-product-list.html">Product List</a></li>
                    <li><a href="app-ecommerce-product-detail.html">Product Detail</a></li>
                    <li><a href="app-ecommerce-cart.html">Cart</a></li>
                    <li><a href="app-ecommerce-checkout.html">Checkout</a></li>
                </ul>
            </li>

            <li class="menu-title">Проектный менеджер</li>
            <li>
                <a href="javascript: void(0);"><i class="mdi mdi-developer-board"></i><span>Проекты</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li><a href="create_project.php">Создание проекта</a></li>
                    <li><a href="form-add-demo.php">Дэмо</a></li>
                    <li><a href="pm_view_all_project.php">Все проекты</a></li>
                    <li><a href="create_tz.php">Сделать ТЗ</a></li>
                </ul>
            </li>



            <li class="menu-title">менеджер</li>
            <li><a href="site_bid.php">Заявки с сайта</a></li>
            <li><a href="calc.php">Калькулятор</a></li>
            <li>
                <a href="javascript: void(0);"><i class="mdi mdi-phone"></i><span>Звонки</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li><a href="view_me_calling.php">Все мои звонки</a></li>
                    <li><a href="create_calling.php">Расписать звонок</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript: void(0);"><i class="mdi mdi-email-open"></i><span>Почта</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li><a href="send_kp.php">Отправить коммерческое предложение</a></li>
                </ul>
            </li>

            <li><a href="app-contact-list-clients.php"><span>Клиенты</span></a></li>
            <li><a href="app-chat.php"><span>Чат</span></a></li>


<!--
            <li>
                <a href="javascript: void(0);"><i class="mdi mdi-developer-board"></i><span>Портфолио</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li><a href="view_all_project.php">Проекты для портфолио</a></li>
                    <li><a href="create_portfolio.php">Добавить проекты для портфолио</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);"><i class="mdi mdi-monitor"></i><span>Dashboards</span><span class="badge badge-danger badge-pill float-right">9+</span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li><a href="{{ url('/test') }}">test</a></li>
                    <li><a href="index-2.html">Dashboard 2</a></li>
                    <li><a href="index-3.html">Dashboard 3</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);"><i class="mdi mdi-apps"></i><span>App</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li><a href="app-chat.html"><span>Chat</span></a></li>
                    <li><a href="app-calendar.html"><span>Calendar</span></a></li>

                    <li>
                        <a href="javascript: void(0);">ECommerce <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="app-ecommerce-product.html">Product</a></li>
                            <li><a href="app-ecommerce-product-list.html">Product List</a></li>
                            <li><a href="app-ecommerce-product-detail.html">Product Detail</a></li>
                            <li><a href="app-ecommerce-cart.html">Cart</a></li>
                            <li><a href="app-ecommerce-checkout.html">Checkout</a></li>
                        </ul>
                    </li>
                    <li><a href="app-contact-list.html"><span>Contact List</span></a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);"><i class="mdi mdi-email-variant"></i><span>Email</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li><a href="email-inbox.html">Inbox</a></li>
                    <li><a href="email-read.html">Read Email</a></li>
                </ul>
            </li>

            <li class="menu-title">Components</li>

            <li>
                <a href="javascript: void(0);"><i class="mdi mdi-cards-playing-outline"></i><span>UI Elements</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">

                    <li><a href="ui-alerts.html">Alerts</a></li>
                    <li><a href="ui-buttons.html">Buttons</a></li>
                    <li><a href="ui-cards.html">Cards</a></li>
                    <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                    <li><a href="ui-modals.html">Modals</a></li>
                    <li><a href="ui-typography.html">Typography</a></li>
                    <li><a href="ui-progress.html">Progress</a></li>
                    <li><a href="ui-tabs-accordions.html">Tabs & Accordions</a></li>
                    <li><a href="ui-tooltips-popovers.html">Tooltips & Popover</a></li>
                    <li><a href="ui-carousel.html">Carousel</a></li>
                    <li><a href="ui-pagination.html">Pagination</a></li>
                    <li><a href="ui-grid.html">Grid System</a></li>
                    <li><a href="ui-scrollspy.html">Scrollspy</a></li>
                    <li><a href="ui-spinners.html">Spinners</a></li>
                    <li><a href="ui-toasts.html">Toasts</a></li>


                    <li>
                        <a href="javascript: void(0);">Oter Components <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="ui-other-animation.html">Animation</a></li>
                            <li><a href="ui-other-avatar.html">Avatar</a></li>
                            <li><a href="ui-other-clipboard.html">Clip Board</a></li>
                            <li><a href="ui-other-files.html">File Meneger</a></li>
                            <li><a href="ui-other-ribbons.html">Ribbons</a></li>
                            <li><a href="ui-other-dragula.html"><span>Dragula</span></a></li>
                            <li><a href="ui-other-check-radio.html"><span>Check & Radio Buttons</span></a></li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);"><i class="mdi mdi-buffer"></i><span>Advanced UI</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li><a href="advanced-rangeslider.html">Range Slider</a></li>
                    <li><a href="advanced-sweetalerts.html">Sweet Alerts</a></li>
                    <li><a href="advanced-nestable.html">Nestable List</a></li>
                    <li><a href="advanced-ratings.html">Ratings</a></li>
                    <li><a href="advanced-highlight.html">Highlight</a></li>
                    <li><a href="advanced-session.html">Session Timeout</a></li>
                    <li><a href="advanced-idle-timer.html">Idle Timer</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);"><i class="mdi mdi-clipboard-outline"></i><span class="badge badge-info float-right">8</span><span>Forms</span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li><a href="forms-elements.html">Basic Elements</a></li>
                    <li><a href="forms-advanced.html">Advance Elements</a></li>
                    <li><a href="forms-validation.html">Validation</a></li>
                    <li><a href="forms-wizard.html">Wizard</a></li>
                    <li><a href="forms-editors.html">Editors</a></li>
                    <li><a href="forms-repeater.html">Repeater</a></li>
                    <li><a href="forms-x-editable.html">X Editable</a></li>
                    <li><a href="forms-uploads.html">File Upload</a></li>
                    <li><a href="forms-img-crop.html">Image Crop</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);"><i class="mdi mdi-poll"></i><span>Charts</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li><a href="charts-apex.html">Apex</a></li>
                    <li><a href="charts-morris.html">Morris</a></li>
                    <li><a href="charts-chartist.html">Chartist</a></li>
                    <li><a href="charts-flot.html">Flot</a></li>
                    <li><a href="charts-peity.html">Peity</a></li>
                    <li><a href="charts-chartjs.html">Chartjs</a></li>
                    <li><a href="charts-sparkline.html">Sparkline</a></li>
                    <li><a href="charts-knob.html">Jquery Knob</a></li>
                    <li><a href="charts-justgage.html">JustGage</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);"><i class="mdi mdi-format-list-bulleted-type"></i><span>Tables</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li><a href="tables-basic.html">Basic</a></li>
                    <li><a href="tables-datatable.html">Datatables</a></li>
                    <li><a href="tables-responsive.html">Responsive</a></li>
                    <li><a href="tables-footable.html">Footable</a></li>
                    <li><a href="tables-jsgrid.html">Jsgrid</a></li>
                    <li><a href="tables-editable.html">Editable</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);"><i class="mdi mdi-diamond-stone"></i><span>Icons</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li><a href="icons-materialdesign.html">Material Design</a></li>
                    <li><a href="icons-dripicons.html">Dripicons</a></li>
                    <li><a href="icons-fontawesome.html">Font awesome</a></li>
                    <li><a href="icons-themify.html">Themify</a></li>
                    <li><a href="icons-typicons.html">Typicons</a></li>
                </ul>
            </li>

            <li class="menu-title">More</li>

            <li>
                <a href="javascript: void(0);"><i class="mdi mdi-map"></i><span>Maps</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li><a href="maps-google.html">Google Maps</a></li>
                    <li><a href="maps-vector.html">Vector Maps</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);"><i class="mdi mdi-lock-outline"></i><span>Authentication</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li><a href="auth-login.html">Login</a></li>
                    <li><a href="auth-register.html">Register</a></li>
                    <li><a href="auth-recoverpw.html">Recover Password</a></li>
                    <li><a href="auth-lock-screen.html">Lock Screen</a></li>
                    <li><a href="auth-404.html">Error 404</a></li>
                    <li><a href="auth-500.html">Error 500</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);"><i class="mdi mdi-book-open-page-variant"></i><span>Pages</span><span class="badge badge-success float-right">Hot</span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li><a href="page-tour.html">Tour</a></li>
                    <li><a href="page-timeline.html">Timeline</a></li>
                    <li><a href="page-invoice.html">Invoice</a></li>
                    <li><a href="page-treeview.html">Treeview</a></li>
                    <li><a href="page-profile.html">Profile</a></li>
                    <li><a href="page-starter.html">Starter Page</a></li>
                    <li><a href="page-pricing.html">Pricing</a></li>
                    <li><a href="page-blogs.html"><span>Blogs</span></a></li>
                    <li><a href="page-faq.html">FAQs</a></li>
                    <li><a href="page-gallery.html">Gallery</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript:void(0);"><i class="mdi mdi-contact-mail"></i><span>Email Templates</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li><a href="email-templates-basic.html">Basic Action Email</a></li>
                    <li><a href="email-templates-alert.html">Alert Email</a></li>
                    <li><a href="email-templates-billing.html">Billing Email</a></li>
                </ul>
            </li>
-->
        </ul>
    </div>
