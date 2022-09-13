<?php
Breadcrumbs::register('main', function ($breadcrumbs) {

    $breadcrumbs->push('Главная', url('/'));

});


Breadcrumbs::register('all-add', function ($breadcrumbs) {

    $breadcrumbs->push('Добавить ', url('/kek'));

});


Breadcrumbs::for('form-add', function ($breadcrumbs, $category) {

    $breadcrumbs->parent('main');

    $breadcrumbs->parent('main');

    $breadcrumbs->push('Изменить '.$category, url('/kek?cat='.$category));

});

