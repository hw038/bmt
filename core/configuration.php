<?php
#%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%#
# Main configuration                         [Thomas Lange <code@nerdmind.de>] #
#%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%#
#                                                                              #
# This file will override the pre-defined configuration settings of the system #
# and is the primary file where you change the configuration. Do not touch any #
# other files to change your configuration – just override it here!            #
#                                                                              #
# Documentation:                                                               #
# 1. https://github.com/Nerdmind/Blog/wiki/Configuration                       #
# 2. https://code.nerdmind.de/blog/wiki/tree/Configuration.md                  #
#                                                                              #
#%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%#

Application::set('CORE.LANGUAGE', 'en');
Application::set('BLOGMETA.NAME', 'My Techblog');
Application::set('BLOGMETA.DESC', '[a creative description]');
Application::set('BLOGMETA.HOME', 'Home');
Application::set('BLOGMETA.MAIL', 'mail@example.org');
Application::set('BLOGMETA.LANG', 'en');
//Application::set('DATABASE.HOSTNAME', 'bmt-db-hh.mysql.database.azure.com');
//Application::set('DATABASE.HOSTNAME', 'bmt-db-hh-1core.mysql.database.azure.com');
Application::set('DATABASE.HOSTNAME', '20.41.97.93');
Application::set('DATABASE.BASENAME', 'blog');
//Application::set('DATABASE.USERNAME', 'woocc@bmt-db-hh');
//Application::set('DATABASE.USERNAME', 'woocc@bmt-db-hh-1core');
Application::set('DATABASE.USERNAME', 'misuser');
//Application::set('DATABASE.PASSWORD', 'Ghkd6586');
Application::set('DATABASE.PASSWORD', '!Qaz2wsx3edc');
Application::set('TEMPLATE.NAME', 'standard');
Application::set('TEMPLATE.LANG', Application::get('CORE.LANGUAGE'));
Application::set('ADMIN.LANGUAGE', Application::get('CORE.LANGUAGE'));
?>