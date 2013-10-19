api = 2
core = 7.x

; core
projects[drupal][type] = core

; wdh_profile
projects[wdh][type] = profile
projects[wdh][download][type] = git
projects[wdh][download][url] = https://github.com/tikaszvince/wdh_profile.git
projects[wdh][download][branch] = master
projects[wdh][directory_name] = wdh_profile

; Contrib modules
projects[admin_menu][subdir] = contrib
projects[admin_menu][version] = 3.0-rc4
projects[features][subdir] = contrib
projects[features][version] = 2.0
projects[views][subdir] = contrib
projects[views][version] = 3.7
projects[ctools][subdir] = contrib
projects[ctools][version] = 1.3
projects[strongarm][subdir] = contrib
projects[strongarm][version] = 2.0
projects[jquery_update][subdir] = contrib
projects[jquery_update][version] = 2.3
projects[token][subdir] = contrib
projects[token][version] = 1.5
projects[pathauto][subdir] = contrib
projects[pathauto][version] = 1.2
projects[transliteration][subdir] = contrib
projects[transliteration][version] = 3.1
projects[google_analytics][subdir] = contrib
projects[google_analytics][version] = 1.4
projects[job_scheduler][subdir] = contrib
projects[job_scheduler][version] = 2.0-alpha3
projects[feeds][subdir] = contrib
projects[feeds][version] = 2.0-alpha8
projects[feeds_jsonpath_parser][subdir] = contrib
projects[feeds_jsonpath_parser][version] = 1.0-beta2
projects[link][subdir] = contrib
projects[link][version] = 1.1

; User interface
projects[ckeditor][type] = "module"
projects[ckeditor][subdir] = "contrib"
projects[ckeditor][download][type] = "git"
projects[ckeditor][download][url] = "http://git.drupal.org/project/ckeditor.git"

; Use Libraries API for ckeditor.
; http://drupal.org/node/1063482#comment-6964504
projects[ckeditor][download][branch] = "7.x-1.x"
projects[ckeditor][download][revision] = "f6abbda"

; Fatal error if Libraries module is enabled after CKEditor
; http://drupal.org/node/1898294#comment-6980796
projects[ckeditor][patch][] = "http://drupal.org/files/ckeditor-install-lib-1898294-2.patch"

libraries[ckeditor][download][type] = "get"
libraries[ckeditor][download][url] = "http://download.cksource.com/CKEditor/CKEditor/CKEditor%204.0/ckeditor_4.0_standard.tar.gz"
libraries[ckeditor][type] = "libraries"
