<?php

use app\assets\TestAppAsset;
use codesk\assets\WebFontAsset;
use codesk\components\Html;

WebFontAsset::register($this);
TestAppAsset::register($this);
?>
<!-- Off-Canvas Category Menu-->
<div class="offcanvas-container" id="shop-categories">
    <div class="offcanvas-header">
        <h3 class="offcanvas-title">Shop Categories</h3>
    </div>
    <nav class="offcanvas-menu">
        <ul class="menu">
            <li class="has-children"><span><a href="#">Men's Shoes</a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                    <li><a href="#">Sneakers</a></li>
                    <li><a href="#">Loafers</a></li>
                    <li><a href="#">Boat Shoes</a></li>
                    <li><a href="#">Sandals</a></li>
                    <li><a href="#">View All</a></li>
                </ul>
            </li>
            <li class="has-children"><span><a href="#">Women's Shoes</a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                    <li><a href="#">Sandals</a></li>
                    <li><a href="#">Flats</a></li>
                    <li><a href="#">Sneakers</a></li>
                    <li><a href="#">Heels</a></li>
                    <li><a href="#">View All</a></li>
                </ul>
            </li>
            <li class="has-children"><span><a href="#">Men's Clothing</a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                    <li><a href="#">Shirts &amp; Tops</a></li>
                    <li><a href="#">Pants</a></li>
                    <li><a href="#">Jackets</a></li>
                    <li><a href="#">View All</a></li>
                </ul>
            </li>
            <li class="has-children"><span><a href="#">Women's Clothing</a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                    <li><a href="#">Dresses</a></li>
                    <li><a href="#">Shirts &amp; Tops</a></li>
                    <li><a href="#">Shorts</a></li>
                    <li><a href="#">Swimwear</a></li>
                    <li><a href="#">View All</a></li>
                </ul>
            </li>
            <li class="has-children"><span><a href="#">Kid's Shoes</a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                    <li><a href="#">Boots</a></li>
                    <li><a href="#">Sandals</a></li>
                    <li><a href="#">Crib Shoes</a></li>
                    <li><a href="#">Loafers</a></li>
                    <li><a href="#">View All</a></li>
                </ul>
            </li>
            <li class="has-children"><span><a href="#">Bags</a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                    <li><a href="#">Handbags</a></li>
                    <li><a href="#">Backpacks</a></li>
                    <li><a href="#">Luggage</a></li>
                    <li><a href="#">Wallets</a></li>
                    <li><a href="#">View All</a></li>
                </ul>
            </li>
            <li class="has-children"><span><a href="#">Accessories</a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                    <li><a href="#">Sunglasses</a></li>
                    <li><a href="#">Hats</a></li>
                    <li><a href="#">Watches</a></li>
                    <li><a href="#">Jewelry</a></li>
                    <li><a href="#">Belts</a></li>
                    <li><a href="#">View All</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</div>
<!-- Off-Canvas Mobile Menu-->
<div class="offcanvas-container" id="mobile-menu"><a class="account-link" href="account-orders.html">
        <div class="user-ava"><img src="/mic-book/web/assets/252599a3/img/account/user-ava-md.jpg" alt="Daniel Adams">
        </div>
        <div class="user-info">
            <h6 class="user-name">Daniel Adams</h6><span class="text-sm text-white opacity-60">290 Reward points</span>
        </div></a>
    <nav class="offcanvas-menu">
        <ul class="menu">
            <li class="has-children active"><span><a href="index.html"><span>Home</span></a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                    <li class="active"><a href="index.html">Featured Products Slider</a></li>
                    <li><a href="home-featured-categories.html">Featured Categories</a></li>
                    <li><a href="home-collection-showcase.html">Products Collection Showcase</a></li>
                </ul>
            </li>
            <li class="has-children"><span><a href="shop-grid-ls.html"><span>Shop</span></a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                    <li><a href="shop-categories.html">Shop Categories</a></li>
                    <li class="has-children"><span><a href="shop-grid-ls.html"><span>Shop Grid</span></a><span class="sub-menu-toggle"></span></span>
                        <ul class="offcanvas-submenu">
                            <li><a href="shop-grid-ls.html">Grid Left Sidebar</a></li>
                            <li><a href="shop-grid-rs.html">Grid Right Sidebar</a></li>
                            <li><a href="shop-grid-ns.html">Grid No Sidebar</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><span><a href="shop-list-ls.html"><span>Shop List</span></a><span class="sub-menu-toggle"></span></span>
                        <ul class="offcanvas-submenu">
                            <li><a href="shop-list-ls.html">List Left Sidebar</a></li>
                            <li><a href="shop-list-rs.html">List Right Sidebar</a></li>
                            <li><a href="shop-list-ns.html">List No Sidebar</a></li>
                        </ul>
                    </li>
                    <li><a href="shop-single.html">Single Product</a></li>
                    <li><a href="cart.html">Cart</a></li>
                    <li><a href="checkout.html">Checkout</a></li>
                </ul>
            </li>
            <li class="has-children"><span><a href="#">Categories</a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                    <li class="has-children"><span><a href="#">Men's Shoes</a><span class="sub-menu-toggle"></span></span>
                        <ul class="offcanvas-submenu">
                            <li><a href="#">Sneakers</a></li>
                            <li><a href="#">Loafers</a></li>
                            <li><a href="#">Boat Shoes</a></li>
                            <li><a href="#">Sandals</a></li>
                            <li><a href="#">View All</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><span><a href="#">Women's Shoes</a><span class="sub-menu-toggle"></span></span>
                        <ul class="offcanvas-submenu">
                            <li><a href="#">Sandals</a></li>
                            <li><a href="#">Flats</a></li>
                            <li><a href="#">Sneakers</a></li>
                            <li><a href="#">Heels</a></li>
                            <li><a href="#">View All</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><span><a href="#">Men's Clothing</a><span class="sub-menu-toggle"></span></span>
                        <ul class="offcanvas-submenu">
                            <li><a href="#">Shirts &amp; Tops</a></li>
                            <li><a href="#">Pants</a></li>
                            <li><a href="#">Jackets</a></li>
                            <li><a href="#">View All</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><span><a href="#">Women's Clothing</a><span class="sub-menu-toggle"></span></span>
                        <ul class="offcanvas-submenu">
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Shirts &amp; Tops</a></li>
                            <li><a href="#">Shorts</a></li>
                            <li><a href="#">Swimwear</a></li>
                            <li><a href="#">View All</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><span><a href="#">Bags</a><span class="sub-menu-toggle"></span></span>
                        <ul class="offcanvas-submenu">
                            <li><a href="#">Handbags</a></li>
                            <li><a href="#">Backpacks</a></li>
                            <li><a href="#">Luggage</a></li>
                            <li><a href="#">Wallets</a></li>
                            <li><a href="#">View All</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><span><a href="#">Accessories</a><span class="sub-menu-toggle"></span></span>
                        <ul class="offcanvas-submenu">
                            <li><a href="#">Sunglasses</a></li>
                            <li><a href="#">Hats</a></li>
                            <li><a href="#">Watches</a></li>
                            <li><a href="#">Jewelry</a></li>
                            <li><a href="#">Belts</a></li>
                            <li><a href="#">View All</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="has-children"><span><a href="account-orders.html"><span>Account</span></a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                    <li><a href="account-login.html">Login / Register</a></li>
                    <li><a href="account-password-recovery.html">Password Recovery</a></li>
                    <li><a href="account-orders.html">Orders List</a></li>
                    <li><a href="account-wishlist.html">Wishlist</a></li>
                    <li><a href="account-profile.html">Profile Page</a></li>
                    <li><a href="account-address.html">Contact / Shipping Address</a></li>
                    <li><a href="account-open-ticket.html">Open Ticket</a></li>
                    <li><a href="account-tickets.html">My Tickets</a></li>
                    <li><a href="account-single-ticket.html">Single Ticket</a></li>
                </ul>
            </li>
            <li class="has-children"><span><a href="blog-rs.html"><span>Blog</span></a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                    <li class="has-children"><span><a href="blog-rs.html"><span>Blog Layout</span></a><span class="sub-menu-toggle"></span></span>
                        <ul class="offcanvas-submenu">
                            <li><a href="blog-rs.html">Blog Right Sidebar</a></li>
                            <li><a href="blog-ls.html">Blog Left Sidebar</a></li>
                            <li><a href="blog-ns.html">Blog No Sidebar</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><span><a href="blog-single-rs.html"><span>Single Post Layout</span></a><span class="sub-menu-toggle"></span></span>
                        <ul class="offcanvas-submenu">
                            <li><a href="blog-single-rs.html">Post Right Sidebar</a></li>
                            <li><a href="blog-single-ls.html">Post Left Sidebar</a></li>
                            <li><a href="blog-single-ns.html">Post No Sidebar</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="has-children"><span><a href="#"><span>Pages</span></a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="mobile-app.html">Unishop Mobile App</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="contacts.html">Contacts</a></li>
                    <li><a href="faq.html">Help / FAQ</a></li>
                    <li><a href="order-tracking.html">Order Tracking</a></li>
                    <li><a href="search-results.html">Search Results</a></li>
                    <li><a href="404.html">404</a></li>
                    <li><a href="coming-soon.html">Coming Soon</a></li>
                    <li><a class="text-danger" href="docs/dev-setup.html">Documentation</a></li>
                </ul>
            </li>
            <li class="has-children"><span><a href="components/accordion.html"><span>Components</span></a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                    <li><a href="components/accordion.html">Accordion</a></li>
                    <li><a href="components/alerts.html">Alerts</a></li>
                    <li><a href="components/buttons.html">Buttons</a></li>
                    <li><a href="components/cards.html">Cards</a></li>
                    <li><a href="components/carousel.html">Carousel</a></li>
                    <li><a href="components/countdown.html">Countdown</a></li>
                    <li><a href="components/forms.html">Forms</a></li>
                    <li><a href="components/gallery.html">Gallery</a></li>
                    <li><a href="components/google-maps.html">Google Maps</a></li>
                    <li><a href="components/images.html">Images &amp; Figures</a></li>
                    <li><a href="components/list-group.html">List Group</a></li>
                    <li><a href="components/market-social-buttons.html">Market &amp; Social Buttons</a></li>
                    <li><a href="components/media.html">Media Object</a></li>
                    <li><a href="components/modal.html">Modal</a></li>
                    <li><a href="components/pagination.html">Pagination</a></li>
                    <li><a href="components/pills.html">Pills</a></li>
                    <li><a href="components/progress-bars.html">Progress Bars</a></li>
                    <li><a href="components/shop-items.html">Shop Items</a></li>
                    <li><a href="components/steps.html">Steps</a></li>
                    <li><a href="components/tables.html">Tables</a></li>
                    <li><a href="components/tabs.html">Tabs</a></li>
                    <li><a href="components/team.html">Team</a></li>
                    <li><a href="components/toasts.html">Toast Notifications</a></li>
                    <li><a href="components/tooltips-popovers.html">Tooltips &amp; Popovers</a></li>
                    <li><a href="components/typography.html">Typography</a></li>
                    <li><a href="components/video-player.html">Video Player</a></li>
                    <li><a href="components/widgets.html">Widgets</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</div>
<!-- Topbar-->
<div class="topbar">
    <div class="topbar-column"><a class="hidden-md-down" href="mailto:support@unishop.com"><i class="icon-mail"></i>&nbsp; support@matichonbook.com</a><a class="hidden-md-down" href="tel:025890020#1335"><i class="glyphicon glyphicon-earphone"></i>&nbsp; 0-2589-0020 ต่อ 1335</a><a class="social-button sb-facebook shape-none sb-dark" href="#" target="_blank"><i class="socicon-facebook"></i></a><a class="social-button sb-twitter shape-none sb-dark" href="#" target="_blank"><i class="socicon-twitter"></i></a><a class="social-button sb-instagram shape-none sb-dark" href="#" target="_blank"><i class="socicon-instagram"></i></a><a class="social-button sb-pinterest shape-none sb-dark" href="#" target="_blank"><i class="socicon-pinterest"></i></a>
    </div>
    <div class="topbar-column">
        <div class="lang-currency-switcher-wrap">
            <div class="lang-currency-switcher dropdown-toggle"><span class="language"><img alt="English" src="/mic-book/web/assets/252599a3/img/flags/GB.png"></span><span class="currency">฿ THB</span></div>
            <div class="dropdown-menu">
                <div class="currency-select">
                    <select class="form-control form-control-rounded form-control-sm">
                        <option value="usd">$ USD</option>
                        <option value="usd">€ EUR</option>
                        <option value="usd">£ UKP</option>
                        <option value="usd">¥ JPY</option>
                    </select>
                </div><a class="dropdown-item" href="#"><img src="/mic-book/web/assets/252599a3/img/flags/FR.png" alt="Français">Français</a><a class="dropdown-item" href="#"><img src="/mic-book/web/assets/252599a3/img/flags/DE.png" alt="Deutsch">Deutsch</a><a class="dropdown-item" href="#"><img src="/mic-book/web/assets/252599a3/img/flags/IT.png" alt="Italiano">Italiano</a>
            </div>
        </div>
    </div>
</div>
<!-- Navbar-->
<!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
<header class="navbar navbar-sticky">
    <!-- Search-->
    <form class="site-search" method="get">
        <input type="text" name="site_search" placeholder="Type to search...">
        <div class="search-tools"><span class="clear-search">Clear</span><span class="close-search"><i class="icon-cross"></i></span></div>
    </form>
    <div class="site-branding">
        <div class="inner">
            <!-- Off-Canvas Toggle (#shop-categories)--><a class="offcanvas-toggle cats-toggle" href="#shop-categories" data-toggle="offcanvas"></a>
            <!-- Off-Canvas Toggle (#mobile-menu)--><a class="offcanvas-toggle menu-toggle" href="#mobile-menu" data-toggle="offcanvas"></a>
            <!-- Site Logo-->
            <?= Html::a(Html::img('@web/images/web/micbook-logo.png', ['alt' => 'Unishop']), ['site/index'], ['class' => 'site-logo']); ?>
        </div>
    </div>
    <!-- Main Navigation-->
    <nav class="site-menu">
        <ul>
            <li class="has-megamenu active"><a href="index.html"><span>หน้าแรก</span></a>
                <ul class="mega-menu">
                    <li><a class="d-block img-thumbnail text-center navi-link" href="index.html"><img alt="Featured Products Slider" src="/mic-book/web/assets/252599a3/img/mega-menu-home/01.jpg">
                            <h6 class="mt-3">Featured Products Slider</h6></a></li>
                    <li><a class="d-block img-thumbnail text-center navi-link" href="home-featured-categories.html"><img alt="Featured Categories" src="/mic-book/web/assets/252599a3/img/mega-menu-home/02.jpg">
                            <h6 class="mt-3">Featured Categories</h6></a></li>
                    <li><a class="d-block img-thumbnail text-center navi-link" href="home-collection-showcase.html"><img alt="Products Collection Showcase" src="/mic-book/web/assets/252599a3/img/mega-menu-home/03.jpg">
                            <h6 class="mt-3">Products Collection Showcase</h6></a></li>
                    <li>
                        <div class="img-thumbnail text-center"><img alt="More To Come. Stay Tuned!" src="/mic-book/web/assets/252599a3/img/mega-menu-home/04.jpg">
                            <h6 class="mt-3">More To Come. Stay Tuned!</h6>
                        </div>
                    </li>
                </ul>
            </li>
            <li><a href="shop-grid-ls.html"><span>Shop</span></a>
                <ul class="sub-menu">
                    <li><a href="shop-categories.html">Shop Categories</a></li>
                    <li class="has-children"><a href="shop-grid-ls.html"><span>Shop Grid</span></a>
                        <ul class="sub-menu">
                            <li><a href="shop-grid-ls.html">Grid Left Sidebar</a></li>
                            <li><a href="shop-grid-rs.html">Grid Right Sidebar</a></li>
                            <li><a href="shop-grid-ns.html">Grid No Sidebar</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><a href="shop-list-ls.html"><span>Shop List</span></a>
                        <ul class="sub-menu">
                            <li><a href="shop-list-ls.html">List Left Sidebar</a></li>
                            <li><a href="shop-list-rs.html">List Right Sidebar</a></li>
                            <li><a href="shop-list-ns.html">List No Sidebar</a></li>
                        </ul>
                    </li>
                    <li><a href="shop-single.html">Single Product</a></li>
                    <li><a href="cart.html">Cart</a></li>
                    <li class="has-children"><a href="checkout-address.html"><span>Checkout</span></a>
                        <ul class="sub-menu">             
                            <li><a href="checkout-address.html">Address</a></li>
                            <li><a href="checkout-shipping.html">Shipping</a></li>
                            <li><a href="checkout-payment.html">Payment</a></li>
                            <li><a href="checkout-review.html">Review</a></li>
                            <li><a href="checkout-complete.html">Complete</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="has-megamenu"><a href="#"><span>Mega Menu</span></a>
                <ul class="mega-menu">
                    <li><span class="mega-menu-title">Top Categories</span>
                        <ul class="sub-menu">
                            <li><a href="#">Men's Shoes</a></li>
                            <li><a href="#">Women's Shoes</a></li>
                            <li><a href="#">Shirts and Tops</a></li>
                            <li><a href="#">Swimwear</a></li>
                            <li><a href="#">Shorts and Pants</a></li>
                            <li><a href="#">Accessories</a></li>
                        </ul>
                    </li>
                    <li><span class="mega-menu-title">Specialty Shops</span>
                        <ul class="sub-menu">
                            <li><a href="#">Junior's Shop</a></li>
                            <li><a href="#">Swim Shop</a></li>
                            <li><a href="#">Athletic Shop</a></li>
                            <li><a href="#">Outdoor Shop</a></li>
                            <li><a href="#">Luxury Shop</a></li>
                            <li><a href="#">Accessories Shop</a></li>
                        </ul>
                    </li>
                    <li>
                        <section class="promo-box" style="background-image: url(/mic-book/web/assets/252599a3/img/banners/02.jpg);"><span class="overlay-dark" style="opacity: .4;"></span>
                            <div class="promo-box-content text-center padding-top-2x padding-bottom-2x">
                                <h4 class="text-light text-thin text-shadow">New Collection of</h4>
                                <h3 class="text-bold text-light text-shadow">Sunglasses</h3><a class="btn btn-sm btn-primary" href="#">Shop Now</a>
                            </div>
                        </section>
                    </li>
                    <li>
                        <section class="promo-box" style="background-image: url(/mic-book/web/assets/252599a3/img/banners/03.jpg);">
                            <!-- Choose between .overlay-dark (#000) or .overlay-light (#fff) with default opacity of 50%. You can overrride default color and opacity values via 'style' attribute.--><span class="overlay-dark" style="opacity: .45;"></span>
                            <div class="promo-box-content text-center padding-top-2x padding-bottom-2x">
                                <h3 class="text-bold text-light text-shadow">Limited Offer</h3>
                                <h4 class="text-light text-thin text-shadow">save up to 50%!</h4><a class="btn btn-sm btn-primary" href="#">Learn More</a>
                            </div>
                        </section>
                    </li>
                </ul>
            </li>
            <li><a href="account-orders.html"><span>Account</span></a>
                <ul class="sub-menu">
                    <li><a href="account-login.html">Login / Register</a></li>
                    <li><a href="account-password-recovery.html">Password Recovery</a></li>
                    <li><a href="account-orders.html">Orders List</a></li>
                    <li><a href="account-wishlist.html">Wishlist</a></li>
                    <li><a href="account-profile.html">Profile Page</a></li>
                    <li><a href="account-address.html">Contact / Shipping Address</a></li>
                    <li><a href="account-tickets.html">My Tickets</a></li>
                    <li><a href="account-single-ticket.html">Single Ticket</a></li>
                </ul>
            </li>
            <li><a href="blog-rs.html"><span>Blog</span></a>
                <ul class="sub-menu">
                    <li class="has-children"><a href="blog-rs.html"><span>Blog Layout</span></a>
                        <ul class="sub-menu">
                            <li><a href="blog-rs.html">Blog Right Sidebar</a></li>
                            <li><a href="blog-ls.html">Blog Left Sidebar</a></li>
                            <li><a href="blog-ns.html">Blog No Sidebar</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><a href="blog-single-rs.html"><span>Single Post Layout</span></a>
                        <ul class="sub-menu">
                            <li><a href="blog-single-rs.html">Post Right Sidebar</a></li>
                            <li><a href="blog-single-ls.html">Post Left Sidebar</a></li>
                            <li><a href="blog-single-ns.html">Post No Sidebar</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="#"><span>Pages</span></a>
                <ul class="sub-menu">
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="contacts.html">Contacts</a></li>
                    <li><a href="faq.html">Help / FAQ</a></li>
                    <li><a href="order-tracking.html">Order Tracking</a></li>
                    <li><a href="search-results.html">Search Results</a></li>
                    <li><a href="404.html">404 Not Found</a></li>
                    <li><a href="coming-soon.html">Coming Soon</a></li>
                    <li><a class="text-danger" href="docs/dev-setup.html">Documentation</a></li>
                </ul>
            </li>
            <li class="has-megamenu"><a href="components/accordion.html"><span>Components</span></a>
                <ul class="mega-menu">
                    <li><span class="mega-menu-title">A - F</span>
                        <ul class="sub-menu">
                            <li><a href="components/accordion.html">Accordion</a></li>
                            <li><a href="components/alerts.html">Alerts</a></li>
                            <li><a href="components/buttons.html">Buttons</a></li>
                            <li><a href="components/cards.html">Cards</a></li>
                            <li><a href="components/carousel.html">Carousel</a></li>
                            <li><a href="components/countdown.html">Countdown</a></li>
                            <li><a href="components/forms.html">Forms</a></li>
                        </ul>
                    </li>
                    <li><span class="mega-menu-title">G - M</span>
                        <ul class="sub-menu">
                            <li><a href="components/gallery.html">Gallery</a></li>
                            <li><a href="components/google-maps.html">Google Maps</a></li>
                            <li><a href="components/images.html">Images &amp; Figures</a></li>
                            <li><a href="components/list-group.html">List Group</a></li>
                            <li><a href="components/market-social-buttons.html">Market &amp; Social Buttons</a></li>
                            <li><a href="components/media.html">Media Object</a></li>
                            <li><a href="components/modal.html">Modal</a></li>
                        </ul>
                    </li>
                    <li><span class="mega-menu-title">P - T</span>
                        <ul class="sub-menu">
                            <li><a href="components/pagination.html">Pagination</a></li>
                            <li><a href="components/pills.html">Pills</a></li>
                            <li><a href="components/progress-bars.html">Progress Bars</a></li>
                            <li><a href="components/shop-items.html">Shop Items</a></li>
                            <li><a href="components/steps.html">Steps</a></li>
                            <li><a href="components/tables.html">Tables</a></li>
                            <li><a href="components/tabs.html">Tabs</a></li>
                        </ul>
                    </li>
                    <li><span class="mega-menu-title">T - W</span>
                        <ul class="sub-menu">
                            <li><a href="components/team.html">Team</a></li>
                            <li><a href="components/toasts.html">Toast Notifications</a></li>
                            <li><a href="components/tooltips-popovers.html">Tooltips &amp; Popovers</a></li>
                            <li><a href="components/typography.html">Typography</a></li>
                            <li><a href="components/video-player.html">Video Player</a></li>
                            <li><a href="components/widgets.html">Widgets</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- Toolbar-->
    <div class="toolbar">
        <div class="inner">
            <div class="tools">
                <div class="search"><i class="icon-search"></i></div>
                <div class="account"><a href="account-orders.html"></a><i class="icon-head"></i>
                    <ul class="toolbar-dropdown">
                        <li class="sub-menu-user">
                            <div class="user-ava"><img src="/mic-book/web/assets/252599a3/img/account/user-ava-sm.jpg" alt="Daniel Adams">
                            </div>
                            <div class="user-info">
                                <h6 class="user-name">Daniel Adams</h6><span class="text-xs text-muted">290 Reward points</span>
                            </div>
                        </li>
                        <li><a href="account-profile.html">My Profile</a></li>
                        <li><a href="account-orders.html">Orders List</a></li>
                        <li><a href="account-wishlist.html">Wishlist</a></li>
                        <li class="sub-menu-separator"></li>
                        <li><a href="#"> <i class="icon-unlock"></i>Logout</a></li>
                    </ul>
                </div>
                <div class="cart"><a href="cart.html"></a><i class="icon-bag"></i><span class="count">3</span><span class="subtotal">$289.68</span>
                    <div class="toolbar-dropdown">
                        <div class="dropdown-product-item"><span class="dropdown-product-remove"><i class="icon-cross"></i></span><a class="dropdown-product-thumb" href="shop-single.html"><img src="/mic-book/web/assets/252599a3/img/cart-dropdown/01.jpg" alt="Product"></a>
                            <div class="dropdown-product-info"><a class="dropdown-product-title" href="shop-single.html">Unionbay Park</a><span class="dropdown-product-details">1 x $43.90</span></div>
                        </div>
                        <div class="dropdown-product-item"><span class="dropdown-product-remove"><i class="icon-cross"></i></span><a class="dropdown-product-thumb" href="shop-single.html"><img src="/mic-book/web/assets/252599a3/img/cart-dropdown/02.jpg" alt="Product"></a>
                            <div class="dropdown-product-info"><a class="dropdown-product-title" href="shop-single.html">Daily Fabric Cap</a><span class="dropdown-product-details">2 x $24.89</span></div>
                        </div>
                        <div class="dropdown-product-item"><span class="dropdown-product-remove"><i class="icon-cross"></i></span><a class="dropdown-product-thumb" href="shop-single.html"><img src="/mic-book/web/assets/252599a3/img/cart-dropdown/03.jpg" alt="Product"></a>
                            <div class="dropdown-product-info"><a class="dropdown-product-title" href="shop-single.html">Haan Crossbody</a><span class="dropdown-product-details">1 x $200.00</span></div>
                        </div>
                        <div class="toolbar-dropdown-group">
                            <div class="column"><span class="text-lg">Total:</span></div>
                            <div class="column text-right"><span class="text-lg text-medium">$289.68&nbsp;</span></div>
                        </div>
                        <div class="toolbar-dropdown-group">
                            <div class="column"><a class="btn btn-sm btn-block btn-secondary" href="cart.html">View Cart</a></div>
                            <div class="column"><a class="btn btn-sm btn-block btn-success" href="checkout-address.html">Checkout</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Off-Canvas Wrapper-->
<div class="offcanvas-wrapper">
    <!-- Page Content-->
    <!-- Main Slider-->
    <section class="hero-slider" style="background-image: url(/mic-book/web/images/unishop/main-bg.jpg);">
        <div class="owl-carousel large-controls dots-inside" data-owl-carousel="{ &quot;nav&quot;: true, &quot;dots&quot;: true, &quot;loop&quot;: true, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 7000 }">
            <div class="item">
                <div class="container padding-top-3x">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-5 col-md-6 padding-bottom-2x text-md-left text-center">
                            <div class="from-bottom"><img class="d-inline-block w-150 mb-4" src="/mic-book/web/assets/252599a3/img/hero-slider/logo02.png" alt="Puma">
                                <div class="h2 text-body text-normal mb-2 pt-1">บันทึกประเทศไทยปี 2560</div>
                                <div class="h2 text-body text-normal mb-4 pb-1">ราคาพิเศษ <span class="text-bold">320.00฿</span></div>
                            </div><a class="btn btn-primary scale-up delay-1" href="shop-grid-ls.html">Shop Now</a>
                        </div>
                        <div class="col-md-6 padding-bottom-2x mb-3">
                            <?= Html::img('@web/images/new-books/2.jpg', ['class' => 'd-block mx-auto book-cover']); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container padding-top-3x">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-5 col-md-6 padding-bottom-2x text-md-left text-center">
                            <div class="from-bottom"><img class="d-inline-block w-200 mb-4" src="/mic-book/web/assets/252599a3/img/hero-slider/logo01.png" alt="Converse">
                                <div class="h2 text-body text-normal mb-2 pt-1">Chuck Taylor All Star II</div>
                                <div class="h2 text-body text-normal mb-4 pb-1">for only <span class="text-bold">$59.99</span></div>
                            </div><a class="btn btn-primary scale-up delay-1" href="shop-single.html">Shop Now</a>
                        </div>
                        <div class="col-md-6 padding-bottom-2x mb-3">
                            <?= Html::img('@web/images/new-books/1.jpg', ['class' => 'd-block mx-auto book-cover']); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container padding-top-3x">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-5 col-md-6 padding-bottom-2x text-md-left text-center">
                            <div class="from-bottom"><img class="d-inline-block mb-4" src="/mic-book/web/assets/252599a3/img/hero-slider/logo03.png" style="width: 125px;" alt="Motorola">
                                <div class="h2 text-body text-normal mb-2 pt-1">Smart Watch Moto 360 2nd</div>
                                <div class="h2 text-body text-normal mb-4 pb-1">for only <span class="text-bold">$299.99</span></div>
                            </div><a class="btn btn-primary scale-up delay-1" href="shop-single.html">Shop Now</a>
                        </div>
                        <div class="col-md-6 padding-bottom-2x mb-3">
                            <?= Html::img('@web/images/new-books/3.jpg', ['class' => 'd-block mx-auto book-cover']); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Products Carousel-->
    <section class="container padding-top-3x padding-bottom-3x">
        <h3 class="text-center mb-30">หนังสือแนะนำ</h3>
        <div class="owl-carousel" data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: true, &quot;margin&quot;: 30, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;576&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3},&quot;991&quot;:{&quot;items&quot;:4},&quot;1200&quot;:{&quot;items&quot;:4}} }">
            <!-- Product-->
            <div class="grid-item">
                <div class="product-card">
                    <div class="product-badge text-danger">22% Off</div>
                    <a class="product-thumb" href="shop-single.htl">
                        <?= Html::img('@web/images/new-books/1.jpg', ['class' => 'd-block mx-auto book-cover']); ?>
                    </a>
                    <h3 class="product-title"><a href="shop-single.html">Rocket Dog</a></h3>
                    <h4 class="product-price">
                        <del>$44.95</del>$34.99
                    </h4>
                    <div class="product-buttons">
                        <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                        <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                    </div>
                </div>
            </div>
            <!-- Product-->
            <div class="grid-item">
                <div class="product-card">
                    <div class="rating-stars"><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star"></i>
                    </div>
                    <a class="product-thumb" href="shop-single.html">
                        <?= Html::img('@web/images/new-books/2.jpg', ['class' => 'd-block mx-auto book-cover']); ?>
                    </a>
                    <h3 class="product-title"><a href="shop-single.html">Oakley Kickback</a></h3>
                    <h4 class="product-price">$155.00</h4>
                    <div class="product-buttons">
                        <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                        <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                    </div>
                </div>
            </div>
            <!-- Product-->
            <div class="grid-item">
                <div class="product-card">
                    <a class="product-thumb" href="shop-single.html">
                        <?= Html::img('@web/images/new-books/3.jpg', ['class' => 'd-block mx-auto book-cover']); ?>
                    </a>
                    <h3 class="product-title"><a href="shop-single.html">Vented Straw Fedora</a></h3>
                    <h4 class="product-price">$49.50</h4>
                    <div class="product-buttons">
                        <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                        <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                    </div>
                </div>
            </div>
            <!-- Product-->
            <div class="grid-item">
                <div class="product-card">
                    <div class="rating-stars"><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i>
                    </div>
                    <a class="product-thumb" href="shop-single.html">
                        <?= Html::img('@web/images/new-books/4.jpg', ['class' => 'd-block mx-auto book-cover']); ?>
                    </a>
                    <h3 class="product-title"><a href="shop-single.html">Top-Sider Fathom</a></h3>
                    <h4 class="product-price">$90.00</h4>
                    <div class="product-buttons">
                        <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                        <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                    </div>
                </div>
            </div>
            <!-- Product-->
            <div class="grid-item">
                <div class="product-card"><a class="product-thumb" href="shop-single.html"><?= Html::img('@web/images/new-books/1.jpg', ['class' => 'd-block mx-auto book-cover']); ?></a>
                    <h3 class="product-title"><a href="shop-single.html">Waist Leather Belt</a></h3>
                    <h4 class="product-price">$47.00</h4>
                    <div class="product-buttons">
                        <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                        <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                    </div>
                </div>
            </div>
            <!-- Product-->
            <div class="grid-item">
                <div class="product-card">
                    <div class="product-badge text-danger">50% Off</div><a class="product-thumb" href="shop-single.html"><?= Html::img('@web/images/new-books/2.jpg', ['class' => 'd-block mx-auto book-cover']); ?></a>
                    <h3 class="product-title"><a href="shop-single.html">Unionbay Park</a></h3>
                    <h4 class="product-price">
                        <del>$99.99</del>$49.99
                    </h4>
                    <div class="product-buttons">
                        <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                        <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Widgets-->
    <section class="container padding-bottom-2x">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="widget widget-featured-products">
                    <h3 class="widget-title">สินค้าขายดี</h3>
                    <!-- Entry-->
                    <div class="entry">
                        <div class="entry-thumb"><a href="shop-single.html"><img src="/mic-book/web/assets/252599a3/img/shop/widget/01.jpg" alt="Product"></a></div>
                        <div class="entry-content">
                            <h4 class="entry-title"><a href="shop-single.html">Oakley Kickback</a></h4><span class="entry-meta">$155.00</span>
                        </div>
                    </div>
                    <!-- Entry-->
                    <div class="entry">
                        <div class="entry-thumb"><a href="shop-single.html"><img src="/mic-book/web/assets/252599a3/img/shop/widget/03.jpg" alt="Product"></a></div>
                        <div class="entry-content">
                            <h4 class="entry-title"><a href="shop-single.html">Vented Straw Fedora</a></h4><span class="entry-meta">$49.50</span>
                        </div>
                    </div>
                    <!-- Entry-->
                    <div class="entry">
                        <div class="entry-thumb"><a href="shop-single.html"><img src="/mic-book/web/assets/252599a3/img/shop/widget/04.jpg" alt="Product"></a></div>
                        <div class="entry-content">
                            <h4 class="entry-title"><a href="shop-single.html">Big Wordmark Tote</a></h4><span class="entry-meta">$29.99</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="widget widget-featured-products">
                    <h3 class="widget-title">สินค้ามาใหม่</h3>
                    <!-- Entry-->
                    <div class="entry">
                        <div class="entry-thumb"><a href="shop-single.html"><img src="/mic-book/web/assets/252599a3/img/shop/widget/05.jpg" alt="Product"></a></div>
                        <div class="entry-content">
                            <h4 class="entry-title"><a href="shop-single.html">Union Park</a></h4><span class="entry-meta">$49.99</span>
                        </div>
                    </div>
                    <!-- Entry-->
                    <div class="entry">
                        <div class="entry-thumb"><a href="shop-single.html"><img src="/mic-book/web/assets/252599a3/img/shop/widget/06.jpg" alt="Product"></a></div>
                        <div class="entry-content">
                            <h4 class="entry-title"><a href="shop-single.html">Cole Haan Crossbody</a></h4><span class="entry-meta">$200.00</span>
                        </div>
                    </div>
                    <!-- Entry-->
                    <div class="entry">
                        <div class="entry-thumb"><a href="shop-single.html"><img src="/mic-book/web/assets/252599a3/img/shop/widget/07.jpg" alt="Product"></a></div>
                        <div class="entry-content">
                            <h4 class="entry-title"><a href="shop-single.html">Skagen Holst Watch</a></h4><span class="entry-meta">$145.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="widget widget-featured-products">
                    <h3 class="widget-title">สินค้ายอดนิยม</h3>
                    <!-- Entry-->
                    <div class="entry">
                        <div class="entry-thumb"><a href="shop-single.html"><img src="/mic-book/web/assets/252599a3/img/shop/widget/08.jpg" alt="Product"></a></div>
                        <div class="entry-content">
                            <h4 class="entry-title"><a href="shop-single.html">Jordan's City Hoodie</a></h4><span class="entry-meta">$65.00</span>
                        </div>
                    </div>
                    <!-- Entry-->
                    <div class="entry">
                        <div class="entry-thumb"><a href="shop-single.html"><img src="/mic-book/web/assets/252599a3/img/shop/widget/09.jpg" alt="Product"></a></div>
                        <div class="entry-content">
                            <h4 class="entry-title"><a href="shop-single.html">Palace Shell Track Jacket</a></h4><span class="entry-meta">$36.99</span>
                        </div>
                    </div>
                    <!-- Entry-->
                    <div class="entry">
                        <div class="entry-thumb"><a href="shop-single.html"><img src="/mic-book/web/assets/252599a3/img/shop/widget/10.jpg" alt="Product"></a></div>
                        <div class="entry-content">
                            <h4 class="entry-title"><a href="shop-single.html">Off the Shoulder Top</a></h4><span class="entry-meta">$128.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Popular Brands-->
    <section class="bg-faded padding-top-3x padding-bottom-3x">
        <div class="container">
            <h3 class="text-center mb-30 pb-2">Popular Brands</h3>
            <div class="owl-carousel" data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: false, &quot;loop&quot;: true, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 4000, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:2}, &quot;470&quot;:{&quot;items&quot;:3},&quot;630&quot;:{&quot;items&quot;:4},&quot;991&quot;:{&quot;items&quot;:5},&quot;1200&quot;:{&quot;items&quot;:6}} }"><img class="d-block w-110 opacity-75 m-auto" src="/mic-book/web/assets/252599a3/img/brands/01.png" alt="Adidas"><img class="d-block w-110 opacity-75 m-auto" src="/mic-book/web/assets/252599a3/img/brands/02.png" alt="Brooks"><img class="d-block w-110 opacity-75 m-auto" src="/mic-book/web/assets/252599a3/img/brands/03.png" alt="Valentino"><img class="d-block w-110 opacity-75 m-auto" src="/mic-book/web/assets/252599a3/img/brands/04.png" alt="Nike"><img class="d-block w-110 opacity-75 m-auto" src="/mic-book/web/assets/252599a3/img/brands/05.png" alt="Puma"><img class="d-block w-110 opacity-75 m-auto" src="/mic-book/web/assets/252599a3/img/brands/06.png" alt="New Balance"><img class="d-block w-110 opacity-75 m-auto" src="/mic-book/web/assets/252599a3/img/brands/07.png" alt="Dior"></div>
        </div>
    </section>
    <!-- Services-->
    <section class="container padding-top-3x padding-bottom-2x">
        <div class="row">
            <div class="col-md-3 col-sm-6 text-center mb-30"><img class="d-block w-90 img-thumbnail rounded-circle mx-auto mb-3" src="/mic-book/web/assets/252599a3/img/services/01.png" alt="Shipping">
                <h6>Free Worldwide Shipping</h6>
                <p class="text-muted margin-bottom-none">Free shipping for all orders over $100</p>
            </div>
            <div class="col-md-3 col-sm-6 text-center mb-30"><img class="d-block w-90 img-thumbnail rounded-circle mx-auto mb-3" src="/mic-book/web/assets/252599a3/img/services/02.png" alt="Money Back">
                <h6>Money Back Guarantee</h6>
                <p class="text-muted margin-bottom-none">We return money within 30 days</p>
            </div>
            <div class="col-md-3 col-sm-6 text-center mb-30"><img class="d-block w-90 img-thumbnail rounded-circle mx-auto mb-3" src="/mic-book/web/assets/252599a3/img/services/03.png" alt="Support">
                <h6>24/7 Customer Support</h6>
                <p class="text-muted margin-bottom-none">Friendly 24/7 customer support</p>
            </div>
            <div class="col-md-3 col-sm-6 text-center mb-30"><img class="d-block w-90 img-thumbnail rounded-circle mx-auto mb-3" src="/mic-book/web/assets/252599a3/img/services/04.png" alt="Payment">
                <h6>Secure Online Payment</h6>
                <p class="text-muted margin-bottom-none">We posess SSL / Secure Certificate</p>
            </div>
        </div>
    </section>
    <!-- Site Footer-->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <!-- Contact Info-->
                    <section class="widget widget-light-skin">
                        <h3 class="widget-title">ติดต่อสอบถาม</h3>
                        <p class="text-white">Phone: 00 33 169 7720</p>
                        <ul class="list-unstyled text-sm text-white">
                            <li><span class="opacity-50">Monday-Friday:</span>9.00 am - 8.00 pm</li>
                            <li><span class="opacity-50">Saturday:</span>10.00 am - 6.00 pm</li>
                        </ul>
                        <p><a class="navi-link-light" href="#">support@unishop.com</a></p><a class="social-button shape-circle sb-facebook sb-light-skin" href="#"><i class="socicon-facebook"></i></a><a class="social-button shape-circle sb-twitter sb-light-skin" href="#"><i class="socicon-twitter"></i></a><a class="social-button shape-circle sb-instagram sb-light-skin" href="#"><i class="socicon-instagram"></i></a><a class="social-button shape-circle sb-google-plus sb-light-skin" href="#"><i class="socicon-googleplus"></i></a>
                    </section>
                </div>
                <div class="col-lg-3 col-md-6">
                    <!-- Mobile App Buttons-->
                    <section class="widget widget-light-skin">
                        <h3 class="widget-title">Our Mobile App</h3><a class="market-button apple-button mb-light-skin" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">App Store</span></a><a class="market-button google-button mb-light-skin" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">Google Play</span></a><a class="market-button windows-button mb-light-skin" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">Windows Store</span></a>
                    </section>
                </div>
                <div class="col-lg-3 col-md-6">
                    <!-- About Us-->
                    <section class="widget widget-links widget-light-skin">
                        <h3 class="widget-title">เกี่ยวกับเรา</h3>
                        <ul>
                            <li><a href="#">สำนักพิมพ์มติชน</a></li>
                            <li><a href="#">การให้บริการ</a></li>
                            <li><a href="#">เว็บไซต์มติชนออนไลน์</a></li>
                        </ul>
                    </section>
                </div>
                <div class="col-lg-3 col-md-6">
                    <!-- Account / Shipping Info-->
                    <section class="widget widget-links widget-light-skin">
                        <h3 class="widget-title">การให้บริการ</h3>
                        <ul>
                            <li><a href="#">บัญชีของคุณ</a></li>
                            <li><a href="#">ค่าธรรมเนียมการจัดส่ง</a></li>
                            <li><a href="#">เงื่นไขการคืนเงินและเปลี่ยนสินค้า</a></li>
                            <li><a href="#">ภาษี</a></li>
                            <li><a href="#">รายละเอียดการส่งสินค้า</a></li>
                        </ul>
                    </section>
                </div>
            </div>
            <hr class="hr-light mt-2 margin-bottom-2x">
            <div class="row">
                <div class="col-md-7 padding-bottom-1x">
                    <!-- Payment Methods-->
                    <div class="margin-bottom-1x" style="max-width: 615px;"><img src="/mic-book/web/assets/252599a3/img/payment_methods.png" alt="Payment Methods">
                    </div>
                </div>
                <div class="col-md-5 padding-bottom-1x">
                    <div class="margin-top-1x hidden-md-up"></div>
                    <!--Subscription-->
                    <form class="subscribe-form" action="//rokaux.us12.list-manage.com/subscribe/post?u=c7103e2c981361a6639545bd5&amp;amp;id=1194bb7544" method="post" target="_blank" novalidate>
                        <div class="clearfix">
                            <div class="input-group input-light">
                                <input class="form-control" type="email" name="EMAIL" placeholder="Your e-mail"><span class="input-group-addon"><i class="icon-mail"></i></span>
                            </div>
                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                <input type="text" name="b_c7103e2c981361a6639545bd5_1194bb7544" tabindex="-1">
                            </div>
                            <button class="btn btn-primary" type="submit"><i class="icon-check"></i></button>
                        </div><span class="form-text text-sm text-white opacity-50">Subscribe to our Newsletter to receive early discount offers, latest news, sales and promo information.</span>
                    </form>
                </div>
            </div>
            <!-- Copyright-->
            <p class="footer-copyright">© All rights reserved. MatichonBook.com</p>
        </div>
    </footer>
</div>
<!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="icon-arrow-up"></i></a>
<!-- Backdrop-->
<div class="site-backdrop"></div>