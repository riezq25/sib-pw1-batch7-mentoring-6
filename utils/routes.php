<?php
include_once 'helpers/UrlHelper.php';

function route()
{
    return [
        'dashboard' => url('/'),
        'galery'    => [
            'index'     => url('/pages/galery/index.php'),
            'create'    => url('/pages/galery/create.php'),
            'store'     => url('/pages/galery/store.php'),
            'edit'      => url('/pages/galery/edit.php'),
            'delete'    => url('/pages/galery/delete.php'),
        ]
    ];
}
