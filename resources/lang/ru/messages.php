<?php

return [
    'add-references'                            => 'Сканировать приложение',
    'add-suffixed-keys'                         => 'Добавить ключи суффиксом',
    'addkeys'                                   => 'Добавить ключи',
    'addkeys-placeholder'                       => 'Добавляйте по одному ключу на строку без префикса группы',
    'addsuffixes'                               => 'Набор суффиксов',
    'addsuffixes-placeholder'                   => 'Один суффикс на линии. Добавить/Удалить ключи добавит суффиксы указанные здесь на каждый ключ.',
    'application-settings'                      => 'Настройки приложения',
    'auto-fill'                                 => 'Автозаполнение',
    'auto-fill-disabled'                        => 'Заполнение...',
    'auto-prop-case-disabled'                   => 'Применение...',
    'auto-translate'                            => 'Авто перевод',
    'auto-translate-disabled'                   => 'Перевод...',
    'auto-update-translation-table'             => 'Автоматическое  обновление таблицы перевода',
    'auto-update-views'                         => 'Автоматическое Обновление Панелей',
    'busy-processing'                           => 'Обработка ...',
    'cached'                                    => 'Кэшированные',
    'changed'                                   => 'Измененные',
    'check-all'                                 => 'Все',
    'check-none'                                => 'Искл.',
    'choose-group'                              => 'Выберите группу переводов',
    'choose-group-text'                         => 'Выберите группу переводов для редакции. Если нет групп в списке, обратитесь к вашему веб-админу.',
    'clear-user-ui-settings'                    => 'Сброс настройки',
    'cleardstkeys'                              => 'Стереть ключи',
    'clearkeys'                                 => 'Стереть ключи',
    'clearsrckeys'                              => 'Стереть ключи',
    'clearsuffixes'                             => 'Стереть суфф.',
    'close'                                     => 'Закрыть',
    'confirm-add-references'                    => 'Подтвердите Добавление Ссылок',
    'confirm-add-references-message'            => 'Добавление ссылок предполагает эвристический поиск на основе исходных файлов. Это может привести к ложных срабатываний и может создать дополнительные клавиши перевод и групп.',
    'confirm-add-references-title'              => 'Подтвердите Добавление Ссылок Операции',
    'confirm-add-suffixed-keys'                 => 'Подтвердите добавление ключей суффиксом',
    'confirm-add-suffixed-keys-message'         => 'Ключи в комбинации с суффиксом будут добавлены в эту группу:',
    'confirm-add-suffixed-keys-title'           => 'Подтвердите добавление ключей',
    'confirm-clear-user-ui-settings-message'    => 'Сброс настройки интерфейса имеет эффект восстановления LTM пользовательского интерфейса к источным.',
    'confirm-clear-user-ui-settings-title'      => 'Подтвердите сброс настроек интерфейса пользователя',
    'confirm-delete'                            => <<<'TEXT'
Вы уверены, что хотите удалить переводы

:group

из базы данных? Любые изменения, которые не были опубликованы в файлы переводов будут потеряны.
TEXT
,
    'confirm-delete-all'                        => <<<'TEXT'
Вы уверены, что хотите удалить все переводы из базы данных?

Любые изменения, которые не были опубликованы в файлы переводов будут потеряны.
TEXT
,
    'confirm-delete-group'                      => 'Подтверждение Удаления Группы',
    'confirm-delete-group-message'              => 'При удалении группы будут удалены все ключи перевода для всех языков группы из базы данных. Если у вас есть какие-либо неопубликованные переводы, они будут потеряны. Если вы публикуете в группе после его удаления, то языковой файл тоже будет удален.',
    'confirm-delete-group-title'                => 'Подтвердите Операцию Удаления Группы',
    'confirm-delete-suffixed-keys-message'      => 'Удаление ключей из базы данных приведет к удалению их от всех файлов перевода для группы, когда в группе будет опубликован.',
    'confirm-delete-suffixed-keys-title'        => 'Подтвердите удаление ключей',
    'confirm-find'                              => 'Вы уверены, что хотите просканировать папки приложения? Все найденные ключи перевода будут добавлены в базу данных.',
    'confirm-import-all-groups'                 => 'Подтвердить Импорт Всех Групп',
    'confirm-import-all-groups-message'         => 'Импорт всех групп может занять некоторое время в зависимости от размера ваших файлов перевода. Убедитесь, что вы выбрали правильное операция по замене существующих и новых ключей перевод.',
    'confirm-import-all-groups-title'           => 'Подтвердить Импорт Всех Групп Эксплуатации',
    'confirm-import-group'                      => 'Подтвердить Импорт Группы',
    'confirm-import-group-message'              => 'Импорт одной группе может заменить его перевод. Убедитесь, что вы выбрали правильное операция по замене существующих и новых ключей перевод.',
    'confirm-import-group-title'                => 'Подтвердить Операцию Импорта Группы',
    'confirm-publish-all-groups'                => 'Подтвердить Публикацию Всех Группах',
    'confirm-publish-all-groups-message'        => 'Издание всех групп будет перезаписывать файлы переводов с переводов в базе данных и может занять некоторое время в зависимости от размера и количества файлов перевода.',
    'confirm-publish-all-groups-title'          => 'Подтвердить Опубликовать Все Операции Группы',
    'confirm-publish-group'                     => 'Подтверждение Публикации Группы',
    'confirm-publish-group-message'             => 'Издательская группа перезапишет все файлы перевода языковой группе с переводами в базе данных.',
    'confirm-publish-group-title'               => 'Подтверждение Публикации Работы Группы',
    'copykeys'                                  => 'Скопировать',
    'dashboards'                                => 'Дашборды',
    'db-connection'                             => 'База данных',
    'debug-trace'                               => 'Tрассировка Данных',
    'default-suffixes'                          => 'Суффиксы По Умолчанию',
    'default-suffixes-placeholder'              => 'Один суффикс на линии. Они будут использованы для кнопки "Набор суффиксов" в дашборде "Ключевых операций с суффиксами".',
    'delete'                                    => 'Удалить',
    'delete-all'                                => 'Удалить все',
    'delete-group'                              => 'Удалить',
    'delete-suffixed-keys'                      => 'Удалить ключи с суффиксами',
    'delete-uisettings'                         => 'Сброс пользовательского интерфейса',
    'deleted'                                   => 'Удаленные',
    'deletekeys'                                => 'Удалить ключи',
    'deleting'                                  => 'Удаление...',
    'display-locales'                           => 'Рабочий набор',
    'done-publishing'                           => 'Публикация переводов для группы <strong>:group</strong> завершена.',
    'done-publishing-all'                       => 'Публикация переводов для <strong>всех</strong> групп завершена.',
    'dst-preview'                               => 'На',
    'dstkey'                                    => 'На',
    'dstkeys'                                   => 'На ключи',
    'dstkeys-placeholder'                       => 'Добавляйте по одному ключу на каждой строке с префиксом или без префикса группы',
    'enter-translation'                         => 'Редактируйте перевод',
    'export-warning-text'                       => 'Переводы не видны, пока они не опубликованы администратором.',
    'find-in-files'                             => 'Сканировать приложение',
    'group'                                     => 'Группа',
    'group-admin'                               => 'Администрация групп',
    'hide-actions'                              => 'Скрывать действия, затрагивающие все группы',
    'import-add'                                => 'Добавлять только новые переводы',
    'import-all-done'                           => 'Выполнен импорт, обработанно <strong>:count</strong> переводов. Перезагрузите страницу, чтобы обновить группы.',
    'import-all-groups'                         => 'Импортировать все',
    'import-done-head'                          => 'Выполнен импорт, обработанно',
    'import-done-tail'                          => 'переводов. Перезагрузите страницу, чтобы обновить группы.',
    'import-fresh'                              => 'Удалить все, потом импортировать',
    'import-group'                              => 'Импорт',
    'import-group-done'                         => 'Сделан импорт группы <strong>:group</strong>, обработанно <strong>:count</strong> переводов. Перезагрузите страницу, чтобы обновить переводы.',
    'import-groups'                             => 'Импортировать все',
    'import-replace'                            => 'Заменить существующие переводы',
    'in-place-edit'                             => 'Редактирование на месте',
    'interface-locale'                          => 'Интерфейс',
    'key'                                       => 'Ключ',
    'keyop-count-mustmatch'                     => 'Количество ключей для источника и получателя должны совпадать',
    'keyop-header'                              => 'Результаты операций над ключами',
    'keyop-header-copy'                         => 'Копирования ключей группы <strong>:group</strong>:',
    'keyop-header-delete'                       => 'Удаления ключей в группе <strong>:group</strong>:',
    'keyop-header-move'                         => 'Перемещение ключей в группе <strong>:group</strong>:',
    'keyop-header-preview'                      => 'Пересмотр операции по ключам для группы <strong>:group</strong>:',
    'keyop-need-group'                          => 'Операции над ключами требуют группу',
    'keyop-need-keys'                           => 'Не указаны ключи для операции',
    'keyop-no-match'                            => 'Нет соответствующих ключей.',
    'keyop-wildcard-mustmatch'                  => 'Подстановочный символ * должен быть первым или последним символом, и если он присутствует, должен быть использован на оба источника и в том же положении.',
    'keyop-wildcard-once'                       => 'Подстановочный символ * может появиться в ключе только один раз.',
    'keyops-not-authorized'                     => 'Ключевые операции не авторизованы на этом сервере. Обратитесь к веб-админу чтобы изменить этот параметр.',
    'keys'                                      => 'Ключи',
    'loading'                                   => 'Импорт...',
    'locale'                                    => 'Язык',
    'manage-groups'                             => 'Управление группами',
    'mismatched-quotes'                         => 'несоответствующие или отсутствующие кавычки в строковом атрибуте :string',
    'mismatches'                                => 'Не совпадающие переводы',
    'missing'                                   => 'Отсутствующие',
    'missmatched-quotes'                        => 'несоответствующие или отсутствующие кавычки в строковом атрибуте :string',
    'modal-button-close'                        => 'Отменить',
    'modal-button-never-show'                   => 'Действуй и не спрашивай снова',
    'modal-button-ok'                           => 'Продолжить',
    'movekeys'                                  => 'Переместить ключи',
    'no-mismatches'                             => 'Нет нестыковок',
    'no-results'                                => 'Нет соответствующий переводов',
    'powered-by-yandex'                         => '<a href="http://translate.yandex.com/">Powered by Yandex.Translate</a>',
    'preview'                                   => 'Превью',
    'primary-locale'                            => 'Первичная',
    'publish'                                   => 'Опубликовать группу',
    'publish-all'                               => 'Опубликовать все',
    'publish-all-groups'                        => 'Опубликовать все',
    'publish-group'                             => 'Опубликовать',
    'publishing'                                => 'Публикуется..',
    'reload-page'                               => 'Перезагрузить страницу',
    'reset-usage-info'                          => 'Сброс информации об использовании',
    'save-settings'                             => 'Сохранить Настройки',
    'search'                                    => 'Поиск',
    'search-done'                               => 'Выполнен поиск переводов. Ссылки на источник обновлены, добавленно <strong>:count</strong> новых элементов перевода.',
    'search-done-head'                          => 'Выполнен поиск переводов, найдено',
    'search-done-tail'                          => 'переводов.',
    'search-header'                             => 'Найдено :count',
    'search-header-prefix'                      => ':count перевод содержащий|:count перевода содержащиe|:count переводов содержащиe',
    'search-header-suffix'                      => 'Сброс настройки',
    'search-text-placeholder'                   => 'Поиск по тексту, % - это шаблон.',
    'search-translations'                       => 'Поиск переводов',
    'searching'                                 => 'Поиск...',
    'set-usage-info'                            => 'Hабор информации',
    'settings'                                  => 'Настройка',
    'show'                                      => 'Показать',
    'show-actions'                              => 'Показывают действия, затрагивающие все группы.',
    'show-all'                                  => 'Bсе',
    'show-changed'                              => 'Изменненые',
    'show-deleted'                              => 'Удаленные',
    'show-empty'                                => 'Отсутствующие',
    'show-matching'                             => 'Показать подходящие',
    'show-matching-text'                        => 'Regex для ключей',
    'show-need-attention'                       => 'Нуждающих внимания',
    'show-new'                                  => 'Новые',
    'show-nonempty'                             => 'Скрыть отсутствующие',
    'show-source-refs'                          => 'Показать ссылки на источник',
    'show-unpublished'                          => 'Неопубликованные',
    'show-usage-info'                           => 'Показать использующиеся',
    'show-used'                                 => 'Использованые',
    'source-refs-header'                        => 'Источник ссылки для',
    'src-preview'                               => 'От',
    'srckey'                                    => 'От',
    'srckeys'                                   => 'От ключей',
    'srckeys-placeholder'                       => 'Добавляйте по одному ключу на строке с префиксом или без префикса группы',
    'stats'                                     => 'Обзор',
    'suffixed-keyops'                           => 'Ключевых операций с суффиксами',
    'suffixes'                                  => 'Суффиксы',
    'title-cancel-changes'                      => 'Отменить изменения',
    'title-capitalize'                          => 'Использовать текст',
    'title-capitalize-first-word'               => 'Капитализировать первое слово',
    'title-clean-html-markdown'                 => 'Очистить HTML разметку',
    'title-convert-key'                         => 'Преобразовать перевод ключа к значению',
    'title-generate-plurals'                    => 'Создания множественных форм',
    'title-load-last'                           => 'Загрузить последние опубликованные/импортированные значения',
    'title-lowercase'                           => 'Текст в нижнем регистре',
    'title-reset-editor'                        => 'Сбросить изменения',
    'title-save-changes'                        => 'Сохранить изменения',
    'title-simulated-copy'                      => 'Копирование текста в буфер обмена (обновление страницы очистит содержимое)',
    'title-simulated-paste'                     => 'Вставить текст из буфера обмена',
    'title-translate'                           => 'Перевести',
    'total'                                     => 'В общем',
    'trace-appSettings'                         => 'Настройки',
    'trace-globalMismatches'                    => 'Несоответствия',
    'trace-globalSearchData'                    => 'Поиск',
    'trace-globalSummary'                       => 'Сводные',
    'trace-globalTranslations'                  => 'Переводы',
    'trace-globalUserLocales'                   => 'Локали Пользователя',
    'translating-locale'                        => 'Перевод',
    'translation'                               => 'Перевод',
    'translation-manager'                       => 'Контроль переводов',
    'translation-ops'                           => 'Помощник перевода',
    'translation-settings'                      => 'Параметры перевода',
    'translations'                              => 'Переводы',
    'try-new-ui'                                => 'Попробуйте новый интерфейс',
    'ui-settings'                               => 'Настройки интерфейса',
    'user-admin'                                => 'Админ. пользователь',
    'user-email'                                => 'Email пользователя',
    'user-id'                                   => 'ID пользователя',
    'user-locales'                              => 'Локали изменяемые пользователем',
    'user-locales-user-id'                      => 'ID',
    'user-name'                                 => 'Имя пользователя',
    'wildcard-keyops'                           => 'Подстановочные операции с ключами',
    'xdebug-session'                            => 'Сеанс X-Debug',
    'xdebug-session-set'                        => 'Сохранить X-Debug',
    'zip'                                       => 'Zip',
    'zip-all'                                   => 'Zip все',
    'zip-group'                                 => 'Zip группу',
];
