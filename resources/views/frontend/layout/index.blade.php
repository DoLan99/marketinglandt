<!doctype html>
<html lang="en-US">

<head>
    @include('frontend.layout.head')
</head>

<body class="home page-template-default page page-id-5 wp-embed-responsive  elementor-default elementor-kit-7 elementor-page elementor-page-5">
    <!-- Google Tag Manager (noscript) --> <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-54BG889" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> <!-- End Google Tag Manager (noscript) -->
    <!-- 1.1 uicore_before_body_content -->
    <div class="uicore-body-content">
        <!-- 1.2 uicore_before_page_content -->
        <div id="uicore-page">
            @include('frontend.layout.navbar')<!-- #wrapper-navbar end -->
            <!-- 1.3 uicore_page -->
            @yield('content')<!-- #content -->
            <footer class="uicore-footer-wrapper elementor">
                @include('frontend.layout.footer')
            </footer><!-- 1.5 uicore_content_end -->
        </div><!-- #page -->
        <link rel="stylesheet" id="ep-advanced-icon-box-css" href="{{asset('frontend/css/ep-advanced-icon-box.css')}}" media="all">
        <link rel="stylesheet" id="ep-total-count-css" href="{{asset('frontend/css/ep-total-count.css')}}" media="all">
        <link rel="stylesheet" id="uicore-blog-st-css" href="{{asset('frontend/css/uicore-blog.css')}}" media="all">
        <script id="bdt-uikit-js-extra">
            var element_pack_ajax_login_config = {
                "ajaxurl": "https:\/\/landio.uicore.co\/crypto\/wp-admin\/admin-ajax.php",
                "loadingmessage": "Sending user info, please wait...",
                "unknownerror": "Unknown error, make sure access is correct!"
            };
            var ElementPackConfig = {
                "ajaxurl": "https:\/\/landio.uicore.co\/crypto\/wp-admin\/admin-ajax.php",
                "nonce": "22442518b3",
                "data_table": {
                    "language": {
                        "lengthMenu": "Show _MENU_ Entries",
                        "info": "Showing _START_ to _END_ of _TOTAL_ entries",
                        "search": "Search :",
                        "paginate": {
                            "previous": "Previous",
                            "next": "Next"
                        }
                    }
                },
                "contact_form": {
                    "sending_msg": "Sending message please wait...",
                    "captcha_nd": "Invisible captcha not defined!",
                    "captcha_nr": "Could not get invisible captcha response!"
                },
                "mailchimp": {
                    "subscribing": "Subscribing you please wait..."
                },
                "elements_data": {
                    "sections": [],
                    "columns": [],
                    "widgets": []
                }
            };
        </script>
        <script id="elementor-frontend-js-before">
            var elementorFrontendConfig = {
                "environmentMode": {
                    "edit": false,
                    "wpPreview": false,
                    "isScriptDebug": false
                },
                "i18n": {
                    "shareOnFacebook": "Share on Facebook",
                    "shareOnTwitter": "Share on Twitter",
                    "pinIt": "Pin it",
                    "download": "Download",
                    "downloadImage": "Download image",
                    "fullscreen": "Fullscreen",
                    "zoom": "Zoom",
                    "share": "Share",
                    "playVideo": "Play Video",
                    "previous": "Previous",
                    "next": "Next",
                    "close": "Close"
                },
                "is_rtl": false,
                "breakpoints": {
                    "xs": 0,
                    "sm": 480,
                    "md": 768,
                    "lg": 1025,
                    "xl": 1440,
                    "xxl": 1600
                },
                "responsive": {
                    "breakpoints": {
                        "mobile": {
                            "label": "Mobile",
                            "value": 767,
                            "default_value": 767,
                            "direction": "max",
                            "is_enabled": true
                        },
                        "mobile_extra": {
                            "label": "Mobile Extra",
                            "value": 880,
                            "default_value": 880,
                            "direction": "max",
                            "is_enabled": false
                        },
                        "tablet": {
                            "label": "Tablet",
                            "value": 1024,
                            "default_value": 1024,
                            "direction": "max",
                            "is_enabled": true
                        },
                        "tablet_extra": {
                            "label": "Tablet Extra",
                            "value": 1200,
                            "default_value": 1200,
                            "direction": "max",
                            "is_enabled": false
                        },
                        "laptop": {
                            "label": "Laptop",
                            "value": 1366,
                            "default_value": 1366,
                            "direction": "max",
                            "is_enabled": false
                        },
                        "widescreen": {
                            "label": "Widescreen",
                            "value": 2400,
                            "default_value": 2400,
                            "direction": "min",
                            "is_enabled": false
                        }
                    }
                },
                "version": "3.4.4",
                "is_static": false,
                "experimentalFeatures": {
                    "e_dom_optimization": true,
                    "a11y_improvements": true,
                    "e_import_export": true,
                    "landing-pages": true,
                    "elements-color-picker": true,
                    "admin-top-bar": true
                },
                "urls": {
                    "assets": "https:\/\/landio.uicore.co\/crypto\/wp-content\/plugins\/elementor\/assets\/"
                },
                "settings": {
                    "page": [],
                    "editorPreferences": []
                },
                "kit": {
                    "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                    "global_image_lightbox": "yes",
                    "lightbox_enable_counter": "yes",
                    "lightbox_enable_fullscreen": "yes",
                    "lightbox_enable_zoom": "yes",
                    "lightbox_enable_share": "yes",
                    "lightbox_title_src": "title",
                    "lightbox_description_src": "description"
                },
                "post": {
                    "id": 5,
                    "title": "Crypto%20Landing%20Page%20%E2%80%93%20Landio%20WordPress%20Theme",
                    "excerpt": "",
                    "featuredImage": false
                }
            };
        </script>
        <style>
            .ui-link-helper svg {
                width: 22px;
            }

            .ui-link-helper {
                position: fixed;
                right: 0;
                top: calc(50vh - 111px);
                display: flex;
                flex-direction: column;
                background: white;
                width: 45px;
                cursor: pointer;
                border-left: 0;
                border-radius: 0;
                -webkit-box-shadow: 0 5px 40px rgb(0 0 0 / 7%);
                -moz-box-shadow: 0 5px 40px rgba(0, 0, 0, 7%);
                box-shadow: 0 5px 40px rgb(0 0 0 / 7%);
                padding: 0;
                border-top-left-radius: 5px;
                border-bottom-left-radius: 5px;
                border: 1px solid #eaeaea;
                border-right: 0;
                z-index: 9999999;
            }

            .ui-link-helper .ui-tooltip {
                opacity: 0;
                visibility: hidden;
                -webkit-transform: scale(.7);
                -moz-transform: scale(.7);
                -ms-transform: scale(.7);
                transform: scale(.7);
                position: absolute;
                background-color: #fff;
                font-size: 13px;
                margin: 0;
                padding: 0px 20px;
                font-family: inherit;
                width: auto;
                font-weight: 500;
                line-height: 36px;
                letter-spacing: .1px;
                right: 10px;
                top: 4px;
                border-radius: 3px;
                white-space: nowrap;
                -webkit-box-shadow: 0 5px 40px rgb(0 0 0 / 7%), 0 0 3px -1px rgb(83 45 245 / 15%);
                -moz-box-shadow: 0 5px 40px rgb(0 0 0 / 7%), 0 0 3px -1px rgb(83 45 245 / 15%);
                box-shadow: 0 5px 40px rgb(0 0 0 / 7%), 0 0 3px -1px rgb(83 45 245 / 15%);
                -moz-transition: all .3s cubic-bezier(0.64, -0.09, 0.13, 1.15);
                -o-transition: all .3s cubic-bezier(0.64, -0.09, 0.13, 1.15);
                transition: all .3s cubic-bezier(0.64, -0.09, 0.13, 1.15);
                color: #FE3931
            }

            .ui-link-helper .ui-tooltip-link:hover .ui-tooltip {
                opacity: 1;
                right: 60px;
                visibility: visible;
                -webkit-transform: scale(1);
                -moz-transform: scale(1);
                -ms-transform: scale(1);
                transform: scale(1);
            }

            .ui-link-helper .ui-tooltip-link {
                position: relative;
                display: flex;
                justify-content: center;
                height: 44px;
                align-items: center;
                transition: all .3s ease-in;
            }

            .ui-link-helper .ui-tooltip span {
                display: block;
                position: absolute;
                right: -5px;
                top: 12px;
                width: 0;
                height: 0;
                border-left: 5px solid #fff;
                border-bottom: 5px solid transparent;
                border-top: 5px solid transparent;
            }

            .ui-link-helper .ui-tooltip-link+.ui-tooltip-link {
                border-top: 1px solid #eaeaea;
            }

            .ui-link-helper .ui-tooltip-link svg {
                height: 20px;
            }

            .ui-tooltip-link:hover {
                background: rgb(83 45 245 / 5%);
            }

            .ui-tooltip-link:hover svg path {
                fill: #FE3931;
            }

            @media(max-width: 767px) {
                .ui-link-helper {
                    display: none;
                }
            }
        </style>
        <div class="ui-link-helper"> <a class="ui-tooltip-link" href="https://landio.uicore.co/?utm_campaign=Landio&utm_source=Demos&utm_medium=LinkHelper" target="_blank"> <svg viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                    <path d="M32 24.34a6 6 0 11-4 0V14a2 2 0 014 0v10.34zm-12-.68V34a2 2 0 01-4 0V23.66a6 6 0 114 0zM12 4h24a8 8 0 018 8v24a8 8 0 01-8 8H12a8 8 0 01-8-8V12a8 8 0 018-8zm0 4a4 4 0 00-4 4v24a4 4 0 004 4h24a4 4 0 004-4V12a4 4 0 00-4-4H12zm6 12a2 2 0 100-4 2 2 0 000 4zm12 12a2 2 0 100-4 2 2 0 000 4z" fill="#1C1C1C" fill-rule="nonzero" />
                </svg> <span class="ui-tooltip">Features <span></span> </span> </a> <a class="ui-tooltip-link" href="https://support.uicore.co/help-center/categories/4/getting-started?utm_campaign=Landio&utm_source=Demos&utm_medium=LinkHelper" target="_blank"> <svg viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                    <path d="M24 39.95L11.13 37.1A4 4 0 018 33.2V12a4 4 0 014-4h6a2 2 0 100-4h-6a8 8 0 00-8 8v21.19a8 8 0 006.26 7.8L24 44.06 37.74 41A8 8 0 0044 33.19V12a8 8 0 00-8-8h-6a8 8 0 00-8 8v22a2 2 0 004 0V12a4 4 0 014-4h6a4 4 0 014 4v21.19a4 4 0 01-3.13 3.9L24 39.95z" fill="#1C1C1C" fill-rule="nonzero" />
                </svg> <span class="ui-tooltip">Read Documentation <span></span> </span> </a> <a class="ui-tooltip-link" href="https://support.uicore.co?utm_campaign=Landio&utm_source=Demos&utm_medium=LinkHelper" target="_blank"> <svg viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                    <path d="M24 42a2 2 0 01-4 0v-2a8 8 0 018-8h8a4 4 0 004-4V12a4 4 0 00-4-4H12a4 4 0 00-4 4v16a4 4 0 004 4h2a2 2 0 010 4h-2a8 8 0 01-8-8V12a8 8 0 018-8h24a8 8 0 018 8v16a8 8 0 01-8 8h-8a4 4 0 00-4 4v2zm0-20a2 2 0 110-4 2 2 0 010 4zm-8 0a2 2 0 110-4 2 2 0 010 4zm16 0a2 2 0 110-4 2 2 0 010 4z" fill="#1C1C1C" fill-rule="nonzero" />
                </svg> <span class="ui-tooltip">Support <span></span> </span> </a> <a class="ui-tooltip-link" href="https://uicore.co/blog/category/showcase/?utm_campaign=Landio&utm_source=Demos&utm_medium=LinkHelper" target="_blank"> <svg viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 10a6 6 0 016-6h20a6 6 0 016 6h2a4 4 0 014 4v7.68a6 6 0 01-3.02 5.2l-4.96 2.84a16 16 0 01-28.04 0L5.02 26.9A6 6 0 012 21.68V14a4 4 0 014-4h2zm0 4H6v7.68a2 2 0 001 1.74l1.13.64C8.04 23.38 8 22.7 8 22v-8zm32 0v8c0 .7-.04 1.38-.13 2.06l1.12-.64A2 2 0 0042 21.68V14h-2zM14 8a2 2 0 00-2 2v12a12 12 0 1024 0V10a2 2 0 00-2-2H14zm10 20a8 8 0 110-16 8 8 0 010 16zm0-4a4 4 0 100-8 4 4 0 000 8zm-6 20a2 2 0 010-4h12a2 2 0 010 4H18z" fill="#1C1C1C" fill-rule="nonzero" />
                </svg> <span class="ui-tooltip">Showcase <span></span> </span> </a> <a class="ui-tooltip-link" href="http://1.envato.market/0JdOvL" target="_blank"> <svg viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 8a2 2 0 110-4h2a8 8 0 018 8v16a4 4 0 004 4h16a4 4 0 004-4v-8a4 4 0 00-4-4H22a2 2 0 110-4h14a8 8 0 018 8v8a8 8 0 01-8 8H20a8 8 0 01-8-8V12a4 4 0 00-4-4H6zm31 36a3 3 0 110-6 3 3 0 010 6zm-18 0a3 3 0 110-6 3 3 0 010 6z" fill="#1C1C1C" fill-rule="nonzero" />
                </svg> <span class="ui-tooltip">Purchase Landio <span></span> </span> </a></div> <!-- Start of Async Drift Code -->
        <!-- End of Async Drift Code -->
        <div id="uicore-back-to-top" class="uicore-back-to-top uicore-i-arrow uicore_hide_mobile "></div>
        <div class="uicore-navigation-wrapper uicore-navbar elementor-section elementor-section-boxed uicore-mobile-menu-wrapper
 ">
            <nav class="uicore elementor-container">
                <div class="uicore-branding uicore-mobile"> <a href="https://landio.uicore.co/crypto/" rel="home"> <img class="uicore uicore-logo" src="{{asset('frontend/img/landio-logo_1.png')}}" alt="Crypto Landing Page"> </a></div>
                <div class="uicore-branding uicore-desktop"></div> <button type="button" class="uicore-toggle uicore-ham"> <span class="bars"> <span class="bar"></span> <span class="bar"></span> <span class="bar"></span> </span> </button>
            </nav>
            <div class="uicore-navigation-content">
                <div class="uicore-menu-container uicore-nav">
                    <ul class="uicore-menu">
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-528"><a href="https://landio.uicore.co/#demos"><span class="ui-menu-item-wrapper">Demos</span></a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-531"><a href="https://landio.uicore.co/chat-bot/"><span class="ui-menu-item-wrapper">Chat Bot</span></a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-532"><a href="https://landio.uicore.co/consultant/"><span class="ui-menu-item-wrapper">Consultant</span></a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-533"><a href="https://landio.uicore.co/crypto/"><span class="ui-menu-item-wrapper">Crypto</span></a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-534"><a href="https://landio.uicore.co/dark-landing-page/"><span class="ui-menu-item-wrapper">Dark Landing</span></a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-535"><a href="https://landio.uicore.co/digital-product/"><span class="ui-menu-item-wrapper">Digital Product</span></a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-536"><a href="https://landio.uicore.co/fintech/"><span class="ui-menu-item-wrapper">Fintech</span></a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-537"><a href="https://landio.uicore.co/fitness/"><span class="ui-menu-item-wrapper">Fitness</span></a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-538"><a href="https://landio.uicore.co/mobile-app/"><span class="ui-menu-item-wrapper">Mobile App</span></a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-539"><a href="https://landio.uicore.co/saas/"><span class="ui-menu-item-wrapper">SaaS</span></a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-540"><a href="https://landio.uicore.co/seo/"><span class="ui-menu-item-wrapper">SEO</span></a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-541"><a href="https://landio.uicore.co/software/"><span class="ui-menu-item-wrapper">Software</span></a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-542"><a href="https://landio.uicore.co/webinar/"><span class="ui-menu-item-wrapper">Webinar</span></a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-530"><a href="#"><span class="ui-menu-item-wrapper">Pages</span></a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-543"><a href="https://landio.uicore.co/pages/about-us/"><span class="ui-menu-item-wrapper">About Us</span></a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-544"><a href="https://landio.uicore.co/pages/contact-us/"><span class="ui-menu-item-wrapper">Contact Us</span></a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-545"><a href="https://landio.uicore.co/pages/our-services/"><span class="ui-menu-item-wrapper">Our Services</span></a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-546"><a href="https://landio.uicore.co/pages/service-details/"><span class="ui-menu-item-wrapper">Service Details</span></a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-547"><a href="https://landio.uicore.co/pages/pricing-plan/"><span class="ui-menu-item-wrapper">Pricing</span></a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-555"><a href="https://landio.uicore.co/pages/team-member/"><span class="ui-menu-item-wrapper">Team</span></a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-556"><a href="https://landio.uicore.co/pages/coming-soon/"><span class="ui-menu-item-wrapper">Coming Soon</span></a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-557"><a href="https://landio.uicore.co/pages/under-construction/"><span class="ui-menu-item-wrapper">Under Construction</span></a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-558"><a href="https://landio.uicore.co/pages/404-2/"><span class="ui-menu-item-wrapper">Error 404</span></a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-529"><a href="#"><span class="ui-menu-item-wrapper">Features</span></a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-566"><a target="_blank" rel="noopener" href="https://uicore.co/framework/page-builder/"><span class="ui-menu-item-wrapper">Page Builder</span></a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-549"><a target="_blank" rel="noopener" href="https://uicore.co/framework/theme-options/"><span class="ui-menu-item-wrapper">Theme Options</span></a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-550"><a target="_blank" rel="noopener" href="https://uicore.co/framework/theme-builder/"><span class="ui-menu-item-wrapper">Theme Builder</span></a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-551"><a target="_blank" rel="noopener" href="https://uicore.co/framework/popup-builder/"><span class="ui-menu-item-wrapper">Popup Builder</span></a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-552"><a target="_blank" rel="noopener" href="https://uicore.co/framework/animations-engine/"><span class="ui-menu-item-wrapper">Animations Engine</span></a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-548"><a target="_blank" rel="noopener" href="https://uicore.co/framework/elements/"><span class="ui-menu-item-wrapper">Builder Widgets</span></a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-565"><a target="_blank" rel="noopener" href="https://uicore.co/framework/performance/"><span class="ui-menu-item-wrapper">Performance Manager™</span></a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-553"><a target="_blank" rel="noopener" href="https://uicore.co/framework/template-library/"><span class="ui-menu-item-wrapper">Template Library</span></a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-567"><a target="_blank" rel="noopener" href="https://uicore.co/framework/white-label/"><span class="ui-menu-item-wrapper">White Label</span></a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-554"><a href="#"><span class="ui-menu-item-wrapper">Blog</span></a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-559"><a href="#"><span class="ui-menu-item-wrapper">Classic Layout</span></a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-561"><a href="https://landio.uicore.co/layouts/blog/classic/"><span class="ui-menu-item-wrapper">Blog &#8211; Classic</span></a></li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-562"><a href="https://landio.uicore.co/layouts/blog/blog-classic-boxed/"><span class="ui-menu-item-wrapper">Blog &#8211; Classic Boxed</span></a></li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-563"><a href="https://landio.uicore.co/layouts/blog/blog-classic-boxed-creative/"><span class="ui-menu-item-wrapper">Blog &#8211; Classic Boxed Creative</span></a></li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-564"><a href="https://landio.uicore.co/layouts/blog/blog-classic-cover/"><span class="ui-menu-item-wrapper">Blog &#8211; Classic Cover</span></a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-560"><a href="#"><span class="ui-menu-item-wrapper">Grid Layout</span></a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-573"><a href="https://landio.uicore.co/layouts/blog/grid/"><span class="ui-menu-item-wrapper">Blog &#8211; Grid</span></a></li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-574"><a href="https://landio.uicore.co/layouts/blog/blog-grid-boxed/"><span class="ui-menu-item-wrapper">Blog &#8211; Grid Boxed</span></a></li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-575"><a href="https://landio.uicore.co/layouts/blog/blog-grid-boxed-creative/"><span class="ui-menu-item-wrapper">Blog &#8211; Grid Boxed Creative</span></a></li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-576"><a href="https://landio.uicore.co/layouts/blog/blog-grid-cover/"><span class="ui-menu-item-wrapper">Blog &#8211; Grid Cover</span></a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-570"><a href="#"><span class="ui-menu-item-wrapper">Masonry Layout</span></a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-577"><a href="https://landio.uicore.co/layouts/blog/masonry/"><span class="ui-menu-item-wrapper">Blog &#8211; Masonry</span></a></li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-578"><a href="https://landio.uicore.co/layouts/blog/blog-masonry-boxed/"><span class="ui-menu-item-wrapper">Blog &#8211; Masonry Boxed</span></a></li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-579"><a href="https://landio.uicore.co/layouts/blog/blog-masonry-boxed-creative/"><span class="ui-menu-item-wrapper">Blog &#8211; Masonry Boxed Creative</span></a></li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-580"><a href="https://landio.uicore.co/layouts/blog/blog-masonry-cover/"><span class="ui-menu-item-wrapper">Blog &#8211; Masonry Cover</span></a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-571"><a href="#"><span class="ui-menu-item-wrapper">Horizontal Layout</span></a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-581"><a href="https://landio.uicore.co/layouts/blog/horizontal/"><span class="ui-menu-item-wrapper">Blog &#8211; Horizontal</span></a></li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-582"><a href="https://landio.uicore.co/layouts/blog/blog-horizontal-boxed/"><span class="ui-menu-item-wrapper">Blog &#8211; Horizontal Boxed</span></a></li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-583"><a href="https://landio.uicore.co/layouts/blog/blog-horizontal-boxed-creative/"><span class="ui-menu-item-wrapper">Blog &#8211; Horizontal Boxed Creative</span></a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-572"><a href="#"><span class="ui-menu-item-wrapper">Post Style</span></a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-584"><a href="https://landio.uicore.co/layouts/2021/07/20/5-uses-of-artificial-intelligence-that-will-blow-your-mind/"><span class="ui-menu-item-wrapper">Default Layout</span></a></li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-585"><a href="https://landio.uicore.co/layouts/2020/08/31/design-thinking-building-a-design-system-for-an-existing-product/"><span class="ui-menu-item-wrapper">Simple Layout</span></a></li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-586"><a href="https://landio.uicore.co/layouts/2021/07/20/10-simple-practices-that-will-help-you-get-1-better-every-day/"><span class="ui-menu-item-wrapper">Simple Creative Layout</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-568"><a href="#"><span class="ui-menu-item-wrapper">Portfolio</span></a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-587"><a href="https://landio.uicore.co/layouts/portfolio-type/grid/"><span class="ui-menu-item-wrapper">Portfolio &#8211; Grid</span></a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-588"><a href="https://landio.uicore.co/layouts/portfolio-type/grid-tiles/"><span class="ui-menu-item-wrapper">Portfolio &#8211; Grid Tiles</span></a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-589"><a href="https://landio.uicore.co/layouts/portfolio-type/justified-tiles/"><span class="ui-menu-item-wrapper">Portfolio &#8211; Justified Tiles</span></a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-590"><a href="https://landio.uicore.co/layouts/portfolio-type/masonry/"><span class="ui-menu-item-wrapper">Portfolio &#8211; Masonry</span></a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-591"><a href="https://landio.uicore.co/layouts/portfolio-type/masonry-tiles/"><span class="ui-menu-item-wrapper">Portfolio &#8211; Masonry Tiles</span></a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-569"><a href="#"><span class="ui-menu-item-wrapper">Shop</span></a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-592"><a href="https://landio.uicore.co/layouts/shop/"><span class="ui-menu-item-wrapper">Shop Page</span></a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-593"><a href="https://landio.uicore.co/layouts/cart/"><span class="ui-menu-item-wrapper">Cart</span></a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-594"><a href="https://landio.uicore.co/layouts/checkout/"><span class="ui-menu-item-wrapper">Checkout</span></a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-595"><a href="https://landio.uicore.co/layouts/my-account/"><span class="ui-menu-item-wrapper">My Account</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="uicore uicore-extra">
                    <div class="uicore-custom-area uicore-only-mobile"></div>
                    <div class="uicore-cta-wrapper"> <a href="#" target="_self" class="uicore-btn "> Get Started </a></div>
                </div>
            </div>
        </div> <!-- 1.6 uicore_body_end -->
    </div> <!-- 1.7 uicore_after_body_content -->
    <script defer src="{{asset('frontend/js/siteground-optimizer-combined-js-2e900b302b5616893c0f9c21a3966f92.js')}}"></script>
</body>

</html>