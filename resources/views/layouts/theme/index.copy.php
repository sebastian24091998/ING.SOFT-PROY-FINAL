<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>CORK Admin Template - Sales Dashboard </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <script src="assets/js/loader.js"></script>
   @include('layouts.theme.styles')

</head>
<body class="sidebar-noneoverflow dashboard-sales">
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    @include(layouts.theme.header)
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">
            
            <nav id="compactSidebar">
                <ul class="menu-categories">
                    <li class="menu active">
                        <a href="#dashboard" data-active="true" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                </div>
                                <span>Dashboard</span>
                            </div>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
                    </li>

                    <li class="menu">
                        <a href="#app" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg>
                                </div>
                                <span>Apps</span>
                            </div>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
                    </li>

                    <li class="menu">
                        <a href="#uiKit" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                                </div>
                                <span>UI Kit</span>
                            </div>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
                    </li>

                    <li class="menu">
                        <a href="#components" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                                </div>
                                <span>Components</span>
                            </div>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
                    </li>

                    <li class="menu">
                        <a href="#forms" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>
                                </div>
                                <span>Forms</span>
                            </div>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
                    </li>

                    <li class="menu">
                        <a href="#tables" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                                </div>
                                <span>Tables</span>
                            </div>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
                    </li>

                    <li class="menu">
                        <a href="#users" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                </div>
                                <span>Users</span>
                            </div>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
                    </li>

                    <li class="menu">
                        <a href="#pages" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                                </div>
                                <span>Pages</span>
                            </div>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
                    </li>

                    <li class="menu">
                        <a href="#more" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                                </div>
                                <span class="">More</span>
                            </div>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
                    </li>
                </ul>
            </nav>

            <div id="compact_submenuSidebar" class="submenu-sidebar">

                <div class="submenu" id="dashboard">
                    <ul class="submenu-list" data-parent-element="#dashboard"> 
                        <li>
                            <a href="index.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg> Analytics </a>
                        </li>
                        <li>
                            <a href="index2.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg> Sales </a>
                        </li>
                    </ul>
                </div>

                <div class="submenu" id="app">
                    <ul class="submenu-list" data-parent-element="#app"> 
                        <li>
                            <a href="apps_chat.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg> Chat </a>
                        </li>
                        <li>
                            <a href="apps_mailbox.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg> Mailbox </a>
                        </li>
                        <li>
                            <a href="apps_todoList.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg> Todo List </a>
                        </li>
                        <li>
                            <a href="apps_notes.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg> Notes</a>
                        </li>
                        <li>
                            <a href="apps_scrumboard.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-plus"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="12" y1="18" x2="12" y2="12"></line><line x1="9" y1="15" x2="15" y2="15"></line></svg> Scrumboard</a>
                        </li>
                        <li>
                            <a href="apps_contacts.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg> Contacts</a>
                        </li>
                        <li>
                            <a href="apps_invoice.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg> Invoice List</a>
                        </li>
                        <li>
                            <a href="apps_calendar.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> Calendar</a>
                        </li>
                    </ul>
                </div>

                <div class="submenu" id="uiKit">
                    <ul class="submenu-list" data-parent-element="#uiKit"> 
                        <li>
                            <a href="ui_alerts.html"> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Alerts </a>
                        </li>
                        <li>
                            <a href="ui_avatar.html"> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Avatar </a>
                        </li>
                        <li>
                            <a href="ui_badges.html"> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Badges </a>
                        </li>
                        <li>
                            <a href="ui_breadcrumbs.html"> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Breadcrumbs </a>
                        </li>                            
                        <li>
                            <a href="ui_buttons.html"> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Buttons </a>
                        </li>
                        <li>
                            <a href="ui_buttons_group.html"> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Button Groups </a>
                        </li>
                        <li>
                            <a href="ui_color_library.html"> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Color Library </a>
                        </li>
                        <li>
                            <a href="ui_dropdown.html"> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Dropdown </a>
                        </li>
                        <li>
                            <a href="ui_infobox.html"> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Infobox </a>
                        </li>
                        <li>
                            <a href="ui_jumbotron.html"> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Jumbotron </a>
                        </li>
                        <li>
                            <a href="ui_loader.html"> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Loader </a>
                        </li>
                        <li>
                            <a href="ui_pagination.html"> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Pagination </a>
                        </li>
                        <li>
                            <a href="ui_popovers.html"> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Popovers </a>
                        </li>
                        <li>
                            <a href="ui_progress_bar.html"> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Progress Bar </a>
                        </li>
                        <li>
                            <a href="ui_search.html"> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Search </a>
                        </li>
                        <li>
                            <a href="ui_tooltips.html"> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Tooltips </a>
                        </li>
                        <li>
                            <a href="ui_treeview.html"> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Treeview </a>
                        </li>
                        <li>
                            <a href="ui_typography.html"> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Typography </a>
                        </li>
                    </ul>
                </div>

                <div class="submenu" id="components">
                    <ul class="submenu-list" data-parent-element="#components"> 
                        <li>
                            <a href="component_tabs.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Tabs </a>
                        </li>
                        <li>
                            <a href="component_accordion.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Accordions  </a>
                        </li>
                        <li>
                            <a href="component_modal.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Modals </a>
                        </li>                            
                        <li>
                            <a href="component_cards.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Cards </a>
                        </li>
                        <li>
                            <a href="component_bootstrap_carousel.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span>Carousel</a>
                        </li>
                        <li>
                            <a href="component_blockui.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Block UI </a>
                        </li>
                        <li>
                            <a href="component_countdown.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Countdown </a>
                        </li>
                        <li>
                            <a href="component_counter.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Counter </a>
                        </li>
                        <li>
                            <a href="component_sweetalert.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Sweet Alerts </a>
                        </li>
                        <li>
                            <a href="component_timeline.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Timeline </a>
                        </li>
                        <li>
                            <a href="component_snackbar.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Notifications </a>
                        </li>
                        <li>
                            <a href="component_session_timeout.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Session Timeout </a>
                        </li>
                        <li>
                            <a href="component_media_object.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Media Object </a>
                        </li>
                        <li>
                            <a href="component_list_group.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> List Group </a>
                        </li>
                        <li>
                            <a href="component_pricing_table.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Pricing Tables </a>
                        </li>
                        <li>
                            <a href="component_lightbox.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Lightbox </a>
                        </li>
                    </ul>
                </div>

                <div class="submenu" id="forms">
                    <ul class="submenu-list" data-parent-element="#forms">
                        <li>
                            <a href="form_bootstrap_basic.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Basic </a>
                        </li>
                        <li>
                            <a href="form_input_group_basic.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Input Group </a>
                        </li>
                        <li>
                            <a href="form_layouts.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Layouts </a>
                        </li>
                        <li>
                            <a href="form_validation.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Validation </a>
                        </li>
                        <li>
                            <a href="form_input_mask.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Input Mask </a>
                        </li>
                        <li>
                            <a href="form_bootstrap_select.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Bootstrap Select </a>
                        </li>
                        <li>
                            <a href="form_select2.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Select2 </a>
                        </li>
                        <li>
                            <a href="form_bootstrap_touchspin.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> TouchSpin </a>
                        </li>
                        <li>
                            <a href="form_maxlength.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Maxlength </a>
                        </li>
                        <li>
                            <a href="form_checkbox_radio.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Checkbox &amp; Radio </a>
                        </li>
                        <li>
                            <a href="form_switches.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Switches </a>
                        </li>
                        <li>
                            <a href="form_wizard.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Wizards </a>
                        </li>
                        <li>
                            <a href="form_fileupload.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> File Upload </a>
                        </li>
                        <li>
                            <a href="form_quill.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Quill Editor </a>
                        </li>
                        <li>
                            <a href="form_markdown.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Markdown Editor </a>
                        </li>
                        <li>
                            <a href="form_date_range_picker.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Date &amp; Range Picker </a>
                        </li>
                        <li>
                            <a href="form_clipboard.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Clipboard </a>
                        </li>
                        <li>
                            <a href="form_typeahead.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Typeahead </a>
                        </li>
                    </ul>
                </div>


                <div class="submenu" id="tables">
                    <ul class="submenu-list" data-parent-element="#tables">
                        <li>
                            <a href="table_basic.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Basic </a>
                        </li>
                        <li class="sub-submenu">
                            <a role="menu" class="collapsed" data-toggle="collapse" data-target="#datatables" aria-expanded="false"><div><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Datatables</div> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                            <ul id="datatables" class="collapse" data-parent="#compact_submenuSidebar">
                                <li>
                                    <a href="table_dt_basic.html"> Basic </a>
                                </li>
                                <li>
                                    <a href="table_dt_basic-dark.html"> Dark </a>
                                </li>
                                <li>
                                    <a href="table_dt_ordering_sorting.html"> Order Sorting </a>
                                </li>
                                <li>
                                    <a href="table_dt_multi-column_ordering.html"> Multi-Column </a>
                                </li>
                                <li>
                                    <a href="table_dt_multiple_tables.html"> Multiple Tables</a>
                                </li>
                                <li>
                                    <a href="table_dt_alternative_pagination.html"> Alt. Pagination</a>
                                </li>
                                <li>
                                    <a href="table_dt_custom.html"> Custom </a>
                                </li>
                                <li>
                                    <a href="table_dt_range_search.html"> Range Search </a>
                                </li>
                                <li>
                                    <a href="table_dt_html5.html"> HTML5 Export </a>
                                </li>
                                <li>
                                    <a href="table_dt_live_dom_ordering.html"> Live DOM ordering </a>
                                </li>
                                <li>
                                    <a href="table_dt_miscellaneous.html"> Miscellaneous </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="submenu" id="users">
                    <ul class="submenu-list" data-parent-element="#users">
                        <li>
                            <a href="user_profile.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Profile </a>
                        </li>
                        <li>
                            <a href="user_account_setting.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Account Settings </a>
                        </li>
                        <li>
                            <a href="fonticons.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Font Icons </a>
                        </li>
                        <li>
                            <a href="widgets.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Widgets </a>
                        </li>
                    </ul>
                </div>

                <div class="submenu" id="pages">
                    <ul class="submenu-list" data-parent-element="#pages">
                        <li>
                            <a href="pages_helpdesk.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Helpdesk </a>
                        </li>
                        <li>
                            <a href="pages_contact_us.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Contact Form </a>
                        </li>
                        <li>
                            <a href="pages_faq.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> FAQ </a>
                        </li>
                        <li>
                            <a href="pages_faq2.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> FAQ 2 </a>
                        </li>
                        <li>
                            <a href="pages_privacy.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Privacy Policy </a>
                        </li>
                        <li>
                            <a href="pages_coming_soon.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Coming Soon </a>
                        </li>
                        <li class="sub-submenu">
                            <a role="menu" class="collapsed" data-toggle="collapse" data-target="#error" aria-expanded="false"><div><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Error</div> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></a>
                            <ul id="error" class="collapse" data-parent="#compact_submenuSidebar">
                                <li>
                                    <a href="pages_error404.html"> 404 </a>
                                </li>
                                <li>
                                    <a href="pages_error500.html"> 500 </a>
                                </li>
                                <li>
                                    <a href="pages_error503.html"> 503 </a>
                                </li>
                                <li>
                                    <a href="pages_maintenence.html"> Maintanence </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                
                <div class="submenu" id="more">
                    <ul class="submenu-list" data-parent-element="#more">

                        <li class="sub-submenu">
                            <a role="menu" class="collapsed" data-toggle="collapse" data-target="#auth" aria-expanded="false"><div> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Authentication</div> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></a>
                            <ul id="auth" class="collapse" data-parent="#compact_submenuSidebar">
                                <li>
                                    <a href="auth_login.html"> Login </a>
                                </li>
                                <li>
                                    <a href="auth_login_boxed.html"> Login Boxed </a>
                                </li>
                                <li>
                                    <a href="auth_register.html"> Register </a>
                                </li>
                                <li>
                                    <a href="auth_register_boxed.html"> Register Boxed </a>
                                </li>
                                <li>
                                    <a href="auth_lockscreen.html"> Unlock </a>
                                </li>
                                <li>
                                    <a href="auth_lockscreen_boxed.html"> Unlock Boxed </a>
                                </li>
                                <li>
                                    <a href="auth_pass_recovery.html"> Recover ID </a>
                                </li>
                                <li>
                                    <a href="auth_pass_recovery_boxed.html"> Recover ID Boxed </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="dragndrop_dragula.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Drag and Drop </a>
                        </li>
                        <li>
                            <a href="charts_apex.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Charts </a>
                        </li>
                        <li>
                            <a href="map_jvector.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Maps </a>
                        </li>
                        <li class="sub-submenu">
                            <a role="menu" class="collapsed" data-toggle="collapse" data-target="#starter-kit" aria-expanded="false"><div><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Starter Kit</div> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></a>
                            <ul id="starter-kit" class="collapse" data-parent="#compact_submenuSidebar">
                                <li>
                                    <a href="starter_kit_blank_page.html"> Blank Page </a>
                                </li>
                                <li>
                                    <a href="starter_kit_breadcrumb.html"> Breadcrumb </a>
                                </li>
                                <li>
                                    <a href="starter_kit_boxed.html"> Boxed </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="../documentation/index.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg></span> Documentation </a>
                        </li>
                    </ul>
                </div>

            </div>

        </div>
        <!--  END SIDEBAR  -->
        
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="page-header">
                    <div class="page-title">
                        <h3>Sales</h3>
                    </div>
                </div>

                <div class="row layout-top-spacing">

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                        <div class="widget-three">
                            <div class="widget-heading">
                                <h5 class="">Summary</h5>
                            </div>
                            <div class="widget-content">

                                <div class="order-summary">

                                    <div class="summary-list">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                                        </div>
                                        <div class="w-summary-details">
                                            
                                            <div class="w-summary-info">
                                                <h6>Income</h6>
                                                <p class="summary-count">$92,600</p>
                                            </div>

                                            <div class="w-summary-stats">
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-secondary" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="summary-list">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7" y2="7"></line></svg>
                                        </div>
                                        <div class="w-summary-details">
                                            
                                            <div class="w-summary-info">
                                                <h6>Profit</h6>
                                                <p class="summary-count">$37,515</p>
                                            </div>

                                            <div class="w-summary-stats">
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="summary-list">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
                                        </div>
                                        <div class="w-summary-details">
                                            
                                            <div class="w-summary-info">
                                                <h6>Expenses</h6>
                                                <p class="summary-count">$55,085</p>
                                            </div>

                                            <div class="w-summary-stats">
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    
                                </div>

                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                        <div class="widget-two">
                            <div class="widget-content">
                                <div class="w-numeric-value">
                                    <div class="w-content">
                                        <span class="w-value">Daily sales</span>
                                        <span class="w-numeric-title">Go to columns for details.</span>
                                    </div>
                                    <div class="w-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                    </div>
                                </div>
                                <div class="w-chart">
                                    <div id="daily-sales"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget-one widget">
                            <div class="widget-content">
                                <div class="w-numeric-value">
                                    <div class="w-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                                    </div>
                                    <div class="w-content">
                                        <span class="w-value">3,192</span>
                                        <span class="w-numeric-title">Total Orders</span>
                                    </div>
                                </div>
                                <div class="w-chart">
                                    <div id="total-orders"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-chart-two">
                            <div class="widget-heading">
                                <h5 class="">Sales by Category</h5>
                            </div>
                            <div class="widget-content">
                                <div id="chart-2" class=""></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-chart-one">
                            <div class="widget-heading">
                                <h5 class="">Revenue</h5>
                                <ul class="tabs tab-pills">
                                    <li><a href="javascript:void(0);" id="tb_1" class="tabmenu">Monthly</a></li>
                                </ul>
                            </div>

                            <div class="widget-content">
                                <div class="tabs tab-content">
                                    <div id="content_1" class="tabcontent"> 
                                        <div id="revenueMonthly"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-5 col-lg-12 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-table-one">
                            <div class="widget-heading">
                                <h5 class="">Transactions</h5>
                            </div>

                            <div class="widget-content">
                                <div class="transactions-list">
                                    <div class="t-item">
                                        <div class="t-company-name">
                                            <div class="t-icon">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                                </div>
                                            </div>
                                            <div class="t-name">
                                                <h4>Electricity Bill</h4>
                                                <p class="meta-date">4 Aug 1:00PM</p>
                                            </div>

                                        </div>
                                        <div class="t-rate rate-dec">
                                            <p><span>-$16.44</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="transactions-list">
                                    <div class="t-item">
                                        <div class="t-company-name">
                                            <div class="t-icon">
                                                <div class="avatar avatar-xl">
                                                    <span class="avatar-title rounded-circle">SP</span>
                                                </div>
                                            </div>
                                            <div class="t-name">
                                                <h4>Shaun Park</h4>
                                                <p class="meta-date">4 Aug 1:00PM</p>
                                            </div>
                                        </div>
                                        <div class="t-rate rate-inc">
                                            <p><span>+$66.44</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline></svg></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="transactions-list">
                                    <div class="t-item">
                                        <div class="t-company-name">
                                            <div class="t-icon">
                                                <div class="avatar avatar-xl">
                                                    <span class="avatar-title rounded-circle">AD</span>
                                                </div>
                                            </div>
                                            <div class="t-name">
                                                <h4>Amy Diaz</h4>
                                                <p class="meta-date">4 Aug 1:00PM</p>
                                            </div>

                                        </div>
                                        <div class="t-rate rate-inc">
                                            <p><span>+$66.44</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline></svg></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="transactions-list">
                                    <div class="t-item">
                                        <div class="t-company-name">
                                            <div class="t-icon">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                                </div>
                                            </div>
                                            <div class="t-name">
                                                <h4>Netflix</h4>
                                                <p class="meta-date">4 Aug 1:00PM</p>
                                            </div>

                                        </div>
                                        <div class="t-rate rate-dec">
                                            <p><span>-$32.00</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        
                        <div class="widget widget-activity-four">

                            <div class="widget-heading">
                                <h5 class="">Recent Activities</h5>
                            </div>

                            <div class="widget-content">

                                <div class="mt-container mx-auto">
                                    <div class="timeline-line">
                                        
                                        <div class="item-timeline timeline-primary">
                                            <div class="t-dot" data-original-title="" title="">
                                            </div>
                                            <div class="t-text">
                                                <p><span>Updated</span> Server Logs</p>
                                                <span class="badge badge-danger">Pending</span>
                                                <p class="t-time">Just Now</p>
                                            </div>
                                        </div>

                                        <div class="item-timeline timeline-success">
                                            <div class="t-dot" data-original-title="" title="">
                                            </div>
                                            <div class="t-text">
                                                <p>Send Mail to <a href="javascript:void(0);">HR</a> and <a href="javascript:void(0);">Admin</a></p>
                                                <span class="badge badge-success">Completed</span>
                                                <p class="t-time">2 min ago</p>
                                            </div>
                                        </div>

                                        <div class="item-timeline  timeline-danger">
                                            <div class="t-dot" data-original-title="" title="">
                                            </div>
                                            <div class="t-text">
                                                <p>Backup <span>Files EOD</span></p>
                                                <span class="badge badge-danger">Pending</span>
                                                <p class="t-time">14:00</p>
                                            </div>
                                        </div>

                                        <div class="item-timeline  timeline-dark">
                                            <div class="t-dot" data-original-title="" title="">
                                            </div>
                                            <div class="t-text">
                                                <p>Collect documents from <a href="javascript:void(0);">Sara</a></p>
                                                <span class="badge badge-success">Completed</span>
                                                <p class="t-time">16:00</p>
                                            </div>
                                        </div>

                                        <div class="item-timeline  timeline-warning">
                                            <div class="t-dot" data-original-title="" title="">
                                            </div>
                                            <div class="t-text">
                                                <p>Conference call with <a href="javascript:void(0);">Marketing Manager</a>.</p>
                                                <span class="badge badge-primary">In progress</span>
                                                <p class="t-time">17:00</p>
                                            </div>
                                        </div>

                                        <div class="item-timeline  timeline-secondary">
                                            <div class="t-dot" data-original-title="" title="">
                                            </div>
                                            <div class="t-text">
                                                <p>Rebooted Server</p>
                                                <span class="badge badge-success">Completed</span>
                                                <p class="t-time">17:00</p>
                                            </div>
                                        </div>

                                        <div class="item-timeline  timeline-warning">
                                            <div class="t-dot" data-original-title="" title="">
                                            </div>
                                            <div class="t-text">
                                                <p>Send contract details to Freelancer</p>
                                                <span class="badge badge-danger">Pending</span>
                                                <p class="t-time">18:00</p>
                                            </div>
                                        </div>

                                        <div class="item-timeline  timeline-dark">
                                            <div class="t-dot" data-original-title="" title="">
                                            </div>
                                            <div class="t-text">
                                                <p>Kelly want to increase the time of the project.</p>
                                                <span class="badge badge-primary">In Progress</span>
                                                <p class="t-time">19:00</p>
                                            </div>
                                        </div>

                                        <div class="item-timeline  timeline-success">
                                            <div class="t-dot" data-original-title="" title="">
                                            </div>
                                            <div class="t-text">
                                                <p>Server down for maintanence</p>
                                                <span class="badge badge-success">Completed</span>
                                                <p class="t-time">19:00</p>
                                            </div>
                                        </div>

                                        <div class="item-timeline  timeline-secondary">
                                            <div class="t-dot" data-original-title="" title="">
                                            </div>
                                            <div class="t-text">
                                                <p>Malicious link detected</p>
                                                <span class="badge badge-warning">Block</span>
                                                <p class="t-time">20:00</p>
                                            </div>
                                        </div>

                                        <div class="item-timeline  timeline-warning">
                                            <div class="t-dot" data-original-title="" title="">
                                            </div>
                                            <div class="t-text">
                                                <p>Rebooted Server</p>
                                                <span class="badge badge-success">Completed</span>
                                                <p class="t-time">23:00</p>
                                            </div>
                                        </div>

                                    </div>                                    
                                </div>

                                <div class="tm-action-btn">
                                    <button class="btn">View All <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12 layout-spacing">
                        
                        <div class="widget widget-account-invoice-one">

                            <div class="widget-heading">
                                <h5 class="">Account Info</h5>
                            </div>

                            <div class="widget-content">
                                <div class="invoice-box">
                                    
                                    <div class="acc-total-info">
                                        <h5>Balance</h5>
                                        <p class="acc-amount">$470</p>
                                    </div>

                                    <div class="inv-detail">                                        
                                        <div class="info-detail-1">
                                            <p>Monthly Plan</p>
                                            <p>$ 199.0</p>
                                        </div>
                                        <div class="info-detail-2">
                                            <p>Taxes</p>
                                            <p>$ 17.82</p>
                                        </div>
                                        <div class="info-detail-3 info-sub">
                                            <div class="info-detail">
                                                <p>Extras this month</p>
                                                <p>$ -0.68</p>
                                            </div>
                                            <div class="info-detail-sub">
                                                <p>Netflix Yearly Subscription</p>
                                                <p>$ 0</p>
                                            </div>
                                            <div class="info-detail-sub">
                                                <p>Others</p>
                                                <p>$ -0.68</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="inv-action">
                                        <a href="" class="btn btn-outline-dark">Summary</a>
                                        <a href="" class="btn btn-danger">Transfer</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-table-two">

                            <div class="widget-heading">
                                <h5 class="">Recent Orders</h5>
                            </div>

                            <div class="widget-content">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th><div class="th-content">Customer</div></th>
                                                <th><div class="th-content">Product</div></th>
                                                <th><div class="th-content">Invoice</div></th>
                                                <th><div class="th-content th-heading">Price</div></th>
                                                <th><div class="th-content">Status</div></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><div class="td-content customer-name"><img src="assets/img/90x90.jpg" alt="avatar">Andy King</div></td>
                                                <td><div class="td-content product-brand">Nike Sport</div></td>
                                                <td><div class="td-content">#76894</div></td>
                                                <td><div class="td-content pricing"><span class="">$88.00</span></div></td>
                                                <td><div class="td-content"><span class="badge outline-badge-primary">Shipped</span></div></td>
                                            </tr>
                                            <tr>
                                                <td><div class="td-content customer-name"><img src="assets/img/90x90.jpg" alt="avatar">Irene Collins</div></td>
                                                <td><div class="td-content product-brand">Speakers</div></td>
                                                <td><div class="td-content">#75844</div></td>
                                                <td><div class="td-content pricing"><span class="">$84.00</span></div></td>
                                                <td><div class="td-content"><span class="badge outline-badge-success">Paid</span></div></td>
                                            </tr>
                                            <tr>
                                                <td><div class="td-content customer-name"><img src="assets/img/90x90.jpg" alt="avatar">Laurie Fox</div></td>
                                                <td><div class="td-content product-brand">Camera</div></td>
                                                <td><div class="td-content">#66894</div></td>
                                                <td><div class="td-content pricing"><span class="">$126.04</span></div></td>
                                                <td><div class="td-content"><span class="badge outline-badge-danger">Pending</span></div></td>
                                            </tr>
                                            <tr>
                                                <td><div class="td-content customer-name"><img src="assets/img/90x90.jpg" alt="avatar">Luke Ivory</div></td>
                                                <td><div class="td-content product-brand">Headphone</div></td>
                                                <td><div class="td-content">#46894</div></td>
                                                <td><div class="td-content pricing"><span class="">$56.07</span></div></td>
                                                <td><div class="td-content"><span class="badge outline-badge-success">Paid</span></div></td>
                                            </tr>
                                            <tr>
                                                <td><div class="td-content customer-name"><img src="assets/img/90x90.jpg" alt="avatar">Ryan Collins</div></td>
                                                <td><div class="td-content product-brand">Sport</div></td>
                                                <td><div class="td-content">#89891</div></td>
                                                <td><div class="td-content pricing"><span class="">$108.09</span></div></td>
                                                <td><div class="td-content"><span class="badge outline-badge-primary">Shipped</span></div></td>
                                            </tr>
                                            <tr>
                                                <td><div class="td-content customer-name"><img src="assets/img/90x90.jpg" alt="avatar">Nia Hillyer</div></td>
                                                <td><div class="td-content product-brand">Sunglasses</div></td>
                                                <td><div class="td-content">#26974</div></td>
                                                <td><div class="td-content pricing"><span class="">$168.09</span></div></td>
                                                <td><div class="td-content"><span class="badge outline-badge-primary">Shipped</span></div></td>
                                            </tr>
                                            <tr>
                                                <td><div class="td-content customer-name"><img src="assets/img/90x90.jpg" alt="avatar">Sonia Shaw</div></td>
                                                <td><div class="td-content product-brand">Watch</div></td>
                                                <td><div class="td-content">#76844</div></td>
                                                <td><div class="td-content pricing"><span class="">$110.00</span></div></td>
                                                <td><div class="td-content"><span class="badge outline-badge-success">Paid</span></div></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-table-three">

                            <div class="widget-heading">
                                <h5 class="">Top Selling Product</h5>
                            </div>

                            <div class="widget-content">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th><div class="th-content">Product</div></th>
                                                <th><div class="th-content th-heading">Price</div></th>
                                                <th><div class="th-content th-heading">Discount</div></th>
                                                <th><div class="th-content">Sold</div></th>
                                                <th><div class="th-content">Source</div></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><div class="td-content product-name"><img src="assets/img/90x90.jpg" alt="product">Speakers</div></td>
                                                <td><div class="td-content"><span class="pricing">$84.00</span></div></td>
                                                <td><div class="td-content"><span class="discount-pricing">$10.00</span></div></td>
                                                <td><div class="td-content">240</div></td>
                                                <td><div class="td-content"><a href="javascript:void(0);" class="">Direct</a></div></td>
                                            </tr>
                                            <tr>
                                                <td><div class="td-content product-name"><img src="assets/img/90x90.jpg" alt="product">Sunglasses</div></td>
                                                <td><div class="td-content"><span class="pricing">$56.07</span></div></td>
                                                <td><div class="td-content"><span class="discount-pricing">$5.07</span></div></td>
                                                <td><div class="td-content">190</div></td>
                                                <td><div class="td-content"><a href="javascript:void(0);" class="">Google</a></div></td>
                                            </tr>
                                            <tr>
                                                <td><div class="td-content product-name"><img src="assets/img/90x90.jpg" alt="product">Watch</div></td>
                                                <td><div class="td-content"><span class="pricing">$88.00</span></div></td>
                                                <td><div class="td-content"><span class="discount-pricing">$20.00</span></div></td>
                                                <td><div class="td-content">66</div></td>
                                                <td><div class="td-content"><a href="javascript:void(0);" class="">Ads</a></div></td>
                                            </tr>
                                            <tr>
                                                <td><div class="td-content product-name"><img src="assets/img/90x90.jpg" alt="product">Laptop</div></td>
                                                <td><div class="td-content"><span class="pricing">$110.00</span></div></td>
                                                <td><div class="td-content"><span class="discount-pricing">$33.00</span></div></td>
                                                <td><div class="td-content">35</div></td>
                                                <td><div class="td-content"><a href="javascript:void(0);" class="">Email</a></div></td>
                                            </tr>
                                            <tr>
                                                <td><div class="td-content product-name"><img src="assets/img/90x90.jpg" alt="product">Camera</div></td>
                                                <td><div class="td-content"><span class="pricing">$126.04</span></div></td>
                                                <td><div class="td-content"><span class="discount-pricing">$26.04</span></div></td>
                                                <td><div class="td-content">30</div></td>
                                                <td><div class="td-content"><a href="javascript:void(0);" class="">Referral</a></div></td>
                                            </tr>
                                            <tr>
                                                <td><div class="td-content product-name"><img src="assets/img/90x90.jpg" alt="product">Shoes</div></td>
                                                <td><div class="td-content"><span class="pricing">$108.09</span></div></td>
                                                <td><div class="td-content"><span class="discount-pricing">$47.09</span></div></td>
                                                <td><div class="td-content">130</div></td>
                                                <td><div class="td-content"><a href="javascript:void(0);" class="">Google</a></div></td>
                                            </tr>
                                            <tr>
                                                <td><div class="td-content product-name"><img src="assets/img/90x90.jpg" alt="product">Headphone</div></td>
                                                <td><div class="td-content"><span class="pricing">$168.09</span></div></td>
                                                <td><div class="td-content"><span class="discount-pricing">$60.09</span></div></td>
                                                <td><div class="td-content">170</div></td>
                                                <td><div class="td-content"><a href="javascript:void(0);" class="">Ads</a></div></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © 2020 <a target="_blank" href="https://designreset.com">DesignReset</a>, All rights reserved.</p>
                </div>
                <div class="footer-section f-section-2">
                    <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
                </div>
            </div>
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->


    <!-- <aside id="colorPallet" class="color-pallet">
        <div class="pallet-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg></div>

        <div class="p-colors">
            
            <div id="default" class="color-scheme-default"></div>
            <div id="lite" class="color-scheme-lite"></div>

        </div>

    </aside> -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->

   @include(layouts.theme.scripts)

</body>
</html>