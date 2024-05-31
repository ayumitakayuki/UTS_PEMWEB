<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission' => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ], 
    'fnB' => [
        'title'          => 'Fakultas',
        'title_singular' => 'Fakultas',
    ],
    'data_anggaran' => [
        'title'          => 'Data Anggaran',
        'title_singular' => 'Data Anggaran',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            // 'image'              => 'Image',
            // 'image_helper'       => ' ',
            'Kategori_pengeluaran'               => 'Kategori Pengeluaran',
            'Kategori_pengeluaran_helper'        => ' ',
            'Alokasi_anggaran'        => 'Alokasi Anggaran',
            'Alokasi_anggaran_helper' => ' ',
            'Penggunaan_anggaran'              => 'Penggunaan Anggaran',
            'Penggunaan_anggaran_helper'       => ' ',
            'Sisa_anggaran'              => 'Sisa Anggaran',
            'Sisa_anggaran_helper'       => ' ',
            // 'stock'              => 'Stock',
            // 'stock_helper'       => ' ',
            // 'category'           => 'Category',
            // 'category_helper'    => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],

];