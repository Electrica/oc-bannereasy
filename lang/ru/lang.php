<?php

return [
    'app' => [
        'name' => 'BannerEasy',
        'description' => 'Легкое управление баннерами на сайте'
    ],
    'controller' => [
        'create' => 'Создать баннер',
        'create_message' => 'Баннер успешно создан',
        'update' => 'Редактировать баннер',
        'update_message' => 'Баннер успешно обновлен',
        'delete' => 'Удалить выбранные',
        'delete_message' => 'Вы уверены, что хотите удалить выбранные элементы?'
    ],
    'properties' => [
        'position' => 'Позиция',
        'position_description' => 'Позиция в списке баннеров',
        'limit' => 'Лимит',
        'limit_description' => 'Количество баннеров. 0 неограниченно',
    ],
    'banner' => [
        'banner_name_column' => 'Название',
        'banner_date_from_column' => 'Дата начала показа',
        'banner_date_to_column' => 'Дата окончания показа',
        'banner_image_column' => 'Картинка',
        'banner_category_column' => 'Картинка',
        'banner_description_column' => 'Описание',
        'banner_active_column' => 'Активен',
        'banner_tab_time' => 'Время показа',
        'banner_tab_category' => 'Категория',
    ],
    'category' => [
        'name' => 'Категория',
        'description' => 'Описание',
        'create' => 'Создать категорию',
        'update' => 'Обновить категорию',
        'delete' => 'Удалить категории',
        'delete_message' => 'Вы действительно хотите удалить категории?'
    ],
    'button' => [
        'create' => 'Сохранить',
        'create_close' => 'Создать и закрыть',
        'close' => 'Закрыть'
    ]
];