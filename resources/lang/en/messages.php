<?php

return [
    'add-references'                            => 'Add References',
    'add-suffixed-keys'                         => 'Add Suffixed Keys',
    'addkeys'                                   => 'Add Keys',
    'addkeys-placeholder'                       => 'Add 1 key per line, without the group prefix',
    'addsuffixes'                               => 'Set Suffixes',
    'addsuffixes-placeholder'                   => 'One suffix per line. Add/Delete keys will suffix keys by lines entered here.',
    'application-settings'                      => 'Application Settings',
    'auto-fill'                                 => 'Auto Fill',
    'auto-fill-disabled'                        => 'Filling...',
    'auto-prop-case-disabled'                   => 'Applying...',
    'auto-translate'                            => 'Auto Translate',
    'auto-translate-disabled'                   => 'Translating...',
    'auto-update-translation-table'             => 'Auto Update Translation Table',
    'auto-update-views'                         => 'Auto Update Views',
    'busy-processing'                           => 'Processing ...',
    'cached'                                    => 'Cached',
    'changed'                                   => 'Changed',
    'check-all'                                 => 'All',
    'check-none'                                => 'None',
    'choose-group'                              => 'Choose a translation group',
    'choose-group-text'                         => 'Choose a group to display the group translations. If no groups are visible, contact your web-admin.',
    'clear-user-ui-settings'                    => 'Reset UI',
    'cleardstkeys'                              => 'Clear Keys',
    'clearkeys'                                 => 'Clear Keys',
    'clearsrckeys'                              => 'Clear Keys',
    'clearsuffixes'                             => 'Clear Suffixes',
    'close'                                     => 'Close',
    'confirm-add-references'                    => 'Confirm Add References',
    'confirm-add-references-message'            => 'Adding references involves doing a heuristic search through the source files. This can result in false positives and can create extra translation keys and groups.',
    'confirm-add-references-title'              => 'Confirm Add References Operation',
    'confirm-add-suffixed-keys'                 => 'Confirm Add Suffixed Keys',
    'confirm-add-suffixed-keys-message'         => 'The key and suffix combinations will be added to this group:',
    'confirm-add-suffixed-keys-title'           => 'Confirm Adding Keys',
    'confirm-clear-user-ui-settings-message'    => 'Resetting UI settings has the effect of reverting user\'s persisted LTM UI options to defaults.',
    'confirm-clear-user-ui-settings-title'      => 'Confirm Resetting User UI Settings',
    'confirm-delete'                            => <<<'TEXT'
Are you sure you want delete:

:group

the translations from the database? Any changes that have not been published to translation files, will be lost.
TEXT
,
    'confirm-delete-all'                        => <<<'TEXT'
Are you sure you want delete all the translations from the database?

Any changes that have not been published to translation files, will be lost.
TEXT
,
    'confirm-delete-group'                      => 'Confirm Delete Group',
    'confirm-delete-group-message'              => 'Deleting a group will delete all translation keys for all locales of the group from the database. If you have any unpublished translations they will be lost. When you later publish all groups, then the language files for all deleted groups will also be deleted.',
    'confirm-delete-group-title'                => 'Confirm Delete Group Operation',
    'confirm-delete-suffixed-keys-message'      => 'Deleting keys from the database will also delete them from all translation files for the group when the group is published.',
    'confirm-delete-suffixed-keys-title'        => 'Confirm Deleting Keys',
    'confirm-find'                              => 'Are you sure you want to scan your app and views folders? All found translation keys will be added to the database and source references will be updated.',
    'confirm-import-all-groups'                 => 'Confirm Import All Groups',
    'confirm-import-all-groups-message'         => 'Importing all groups can potentially replace all translations in the database and may take some time depending on the size of your translation files. Make sure you have selected the right replacement operation for existing and new translation keys.',
    'confirm-import-all-groups-title'           => 'Confirm Import All Groups Operation',
    'confirm-import-group'                      => 'Confirm Import Group',
    'confirm-import-group-message'              => 'Importing a single group can potentially replace its translations. Make sure you have selected the right replacement operation for existing and new translation keys.',
    'confirm-import-group-title'                => 'Confirm Import Group Operation',
    'confirm-publish-all-groups'                => 'Confirm Publish All Groups',
    'confirm-publish-all-groups-message'        => 'Publishing all groups will overwrite all locale translation files with the translations in the database for all groups and may take some time to process depending on the size and number of your translation files.',
    'confirm-publish-all-groups-title'          => 'Confirm Publish All Groups Operation',
    'confirm-publish-group'                     => 'Confirm Publish Group',
    'confirm-publish-group-message'             => 'Publishing a group will overwrite all locale translation files for the group with the translations in the database.',
    'confirm-publish-group-title'               => 'Confirm Publish Group Operation',
    'copykeys'                                  => 'Copy Keys',
    'dashboards'                                => 'Dashboards',
    'db-connection'                             => 'Database',
    'debug-trace'                               => 'Trace Data',
    'default-suffixes'                          => 'Default Suffixes',
    'default-suffixes-placeholder'              => 'Place one suffix per line. These will be used for the "Set Suffixes" button in "Suffixed Key Operations" dashboard.',
    'delete'                                    => 'Delete',
    'delete-all'                                => 'Delete All',
    'delete-group'                              => 'Delete Group',
    'delete-suffixed-keys'                      => 'Delete Suffixed Keys',
    'delete-uisettings'                         => 'Reset UI',
    'deleted'                                   => 'Deleted',
    'deletekeys'                                => 'Delete Keys',
    'deleting'                                  => 'Deleting...',
    'display-locales'                           => 'Working Set',
    'done-publishing'                           => 'Done publishing the translations for group <strong>:group</strong>.',
    'done-publishing-all'                       => 'Done publishing the translations for <strong>all</strong> groups.',
    'dst-preview'                               => 'To',
    'dstkey'                                    => 'To',
    'dstkeys'                                   => 'To Keys',
    'dstkeys-placeholder'                       => 'Add 1 key per line, with or without the group prefix',
    'enter-translation'                         => 'Enter translation',
    'export-warning-text'                       => 'Translations are not visible until they are published by an administrator.',
    'find-in-files'                             => 'Add References',
    'group'                                     => 'Group',
    'group-admin'                               => 'Group Administration',
    'hide-actions'                              => 'Hide actions affecting all groups',
    'import-add'                                => 'Only add new translations',
    'import-all-done'                           => 'Done importing, processed <strong>:count</strong> items. Reload this page to refresh the groups.',
    'import-all-groups'                         => 'Import All',
    'import-done-head'                          => 'Done importing, processed',
    'import-done-tail'                          => 'items. Reload this page to refresh the groups.',
    'import-fresh'                              => 'Delete All then Import',
    'import-group'                              => 'Import',
    'import-group-done'                         => 'Done importing group <strong>:group</strong>, processed <strong>:count</strong> items. Reload this page to refresh translations.',
    'import-groups'                             => 'Import all',
    'import-replace'                            => 'Replace existing translations',
    'in-place-edit'                             => 'Edit In-Place',
    'interface-locale'                          => 'Interface',
    'key'                                       => 'Key',
    'keyop-count-mustmatch'                     => 'Number of keys for source and destination must match',
    'keyop-header'                              => 'Key Operation Results',
    'keyop-header-copy'                         => 'Copy key operation for <strong>:group</strong> group:',
    'keyop-header-delete'                       => 'Delete keys operation from <strong>:group</strong> group:',
    'keyop-header-move'                         => 'Move key operation for <strong>:group</strong> group:',
    'keyop-header-preview'                      => 'Preview key operation for <strong>:group</strong> group:',
    'keyop-need-group'                          => 'Key operations require a group',
    'keyop-need-keys'                           => 'No keys provided for key operation',
    'keyop-no-match'                            => 'No keys matched.',
    'keyop-wildcard-mustmatch'                  => 'Wildcard * character must be the first or last character, and if present must be used on both source and destination keys in the same position.',
    'keyop-wildcard-once'                       => 'Wildcard * character can only appear once in a key.',
    'keyops-not-authorized'                     => 'Key  operations are not authorized on this server. Contact your web-admin to change this setting.',
    'keys'                                      => 'Keys',
    'loading'                                   => 'Importing...',
    'locale'                                    => 'Locale',
    'manage-groups'                             => 'Manage Groups',
    'mismatched-quotes'                         => 'mismatched or missing quotes in :string attribute',
    'mismatches'                                => 'Mismatched Translations',
    'missing'                                   => 'Missing',
    'missmatched-quotes'                        => 'mismatched or missing quotes in :string attribute',
    'modal-button-close'                        => 'Cancel',
    'modal-button-never-show'                   => 'Proceed and do not ask again',
    'modal-button-ok'                           => 'Proceed',
    'movekeys'                                  => 'Move Keys',
    'no-mismatches'                             => 'No Mismatches',
    'no-results'                                => 'No Matching Translations',
    'powered-by-yandex'                         => '<a href="http://translate.yandex.com/">Powered by Yandex.Translate</a>',
    'preview'                                   => 'Preview',
    'primary-locale'                            => 'Primary',
    'publish'                                   => 'Publish Group',
    'publish-all'                               => 'Publish All',
    'publish-all-groups'                        => 'Publish All',
    'publish-group'                             => 'Publish',
    'publishing'                                => 'Publishing...',
    'reload-page'                               => 'Reload Page',
    'reset-usage-info'                          => 'Reset Usage Info',
    'save-settings'                             => 'Save Settings',
    'search'                                    => 'Search',
    'search-done'                               => 'Done searching for translations. Source references updated, added <strong>:count</strong> new translation items.',
    'search-done-head'                          => 'Done searching for translations, found',
    'search-done-tail'                          => 'items.',
    'search-header'                             => 'Results found: :count',
    'search-header-prefix'                      => ':count translation containing|:count translations containing',
    'search-header-suffix'                      => 'Search Header Suffix',
    'search-text-placeholder'                   => 'Search text, % is wildcard pattern.',
    'search-translations'                       => 'Search Translations',
    'searching'                                 => 'Searching...',
    'set-usage-info'                            => 'Set Usage Info',
    'settings'                                  => 'Settings',
    'show'                                      => 'Show',
    'show-actions'                              => 'Show actions affecting all groups.',
    'show-all'                                  => 'All',
    'show-changed'                              => 'Changed',
    'show-deleted'                              => 'Deleted',
    'show-empty'                                => 'Missing',
    'show-matching'                             => 'Filter Keys',
    'show-matching-text'                        => 'key RegEx',
    'show-need-attention'                       => 'Need Attention',
    'show-new'                                  => 'New',
    'show-nonempty'                             => 'Hide Missing',
    'show-source-refs'                          => 'Show Source References',
    'show-unpublished'                          => 'Unpublished',
    'show-usage-info'                           => 'Show Usage',
    'show-used'                                 => 'Used',
    'source-refs-header'                        => 'Source References for',
    'src-preview'                               => 'From',
    'srckey'                                    => 'From',
    'srckeys'                                   => 'From Keys',
    'srckeys-placeholder'                       => 'Add 1 key per line, with or without the group prefix',
    'stats'                                     => 'Overview',
    'suffixed-keyops'                           => 'Suffixed Key Operations',
    'suffixes'                                  => 'Suffixes',
    'title-cancel-changes'                      => 'Cancel changes',
    'title-capitalize'                          => 'Capitalize text',
    'title-capitalize-first-word'               => 'Capitalize first word',
    'title-clean-html-markdown'                 => 'Clean HTML markdown',
    'title-convert-key'                         => 'Convert translation key to text',
    'title-generate-plurals'                    => 'Generate plural forms',
    'title-load-last'                           => 'Load last published/imported value',
    'title-lowercase'                           => 'Lowercase text',
    'title-reset-editor'                        => 'Reset editor contents',
    'title-save-changes'                        => 'Save changes',
    'title-simulated-copy'                      => 'Copy text to simulated clipboard (page refresh clears contents)',
    'title-simulated-paste'                     => 'Paste text from simulated clipboard',
    'title-translate'                           => 'Translate',
    'total'                                     => 'Total',
    'trace-appSettings'                         => 'App Settings',
    'trace-globalMismatches'                    => 'Mismatch',
    'trace-globalSearchData'                    => 'Search',
    'trace-globalSummary'                       => 'Summary',
    'trace-globalTranslations'                  => 'Translations',
    'trace-globalUserLocales'                   => 'User Locales',
    'translating-locale'                        => 'Translating',
    'translation'                               => 'Translation',
    'translation-manager'                       => 'Translation Manager',
    'translation-ops'                           => 'Translation Helper',
    'translation-settings'                      => 'Translation Settings',
    'translations'                              => 'Translations',
    'try-new-ui'                                => 'Try New User Interface',
    'ui-settings'                               => 'UI Settings',
    'user-admin'                                => 'User Admin',
    'user-email'                                => 'User Email',
    'user-id'                                   => 'User ID',
    'user-locales'                              => 'User Modifiable Locales',
    'user-locales-user-id'                      => 'ID',
    'user-name'                                 => 'User Name',
    'wildcard-keyops'                           => 'Wildcard Key Operations',
    'xdebug-session'                            => 'X-Debug Session',
    'xdebug-session-set'                        => 'Set X-Debug Session',
    'zip'                                       => 'Zip',
    'zip-all'                                   => 'Zip All',
    'zip-group'                                 => 'Zip Group',
];
