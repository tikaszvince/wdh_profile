wdh_profile
==================

Drupal profile for WebDevHub website

## How to build?
Use drush
* clone this project for your profiles folder
* add this command <code>drush make --working-copy --no-gitinfofile wdh_profile.make location_your_work_folder/wdh/www/</code>

## How to install?
Install it with [standard Drupal way](https://drupal.org/documentation/install) using <code>wdh_profile</code> profile…

Or with drush: <code>drush si -y --account-mail=<your.email@example.com> --sites-subdir=default wdh_profile; drush uli</code>

After install you have to go <code>admin/config/services/twitter/settings</code> to update your OAuth settings. Just follow instructions about creating a Twitter app and get Consumer key and Consumer secret.

Than You can add your twitter account at <code>admin/config/services/twitter</code>.

Make sure cron jobs runs regulary.
