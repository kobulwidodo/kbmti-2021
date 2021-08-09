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
    'content' => [
        'title'          => 'Content',
        'title_singular' => 'Content',
    ],
    'anggotum' => [
        'title'          => 'Anggota',
        'title_singular' => 'Anggotum',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => ' ',
            'name'                 => 'Nama Anggota',
            'name_helper'          => ' ',
            'image'                => 'Foto Anggota',
            'image_helper'         => ' ',
            'instagram_acc'        => 'Akun Instagram',
            'instagram_acc_helper' => ' ',
            'linkedin_acc'         => 'Akun Linkedin',
            'linkedin_acc_helper'  => ' ',
            'keanggotaan'          => 'Keanggotaan',
            'keanggotaan_helper'   => ' ',
            'created_at'           => 'Created at',
            'created_at_helper'    => ' ',
            'updated_at'           => 'Updated at',
            'updated_at_helper'    => ' ',
            'deleted_at'           => 'Deleted at',
            'deleted_at_helper'    => ' ',
            'department'           => 'Department',
            'department_helper'    => ' ',
            'type'                 => 'Jabatan',
            'type_helper'          => ' ',
            'caption'              => 'Keterangan',
            'caption_helper'       => ' ',
        ],
    ],
    'article' => [
        'title'          => 'Article',
        'title_singular' => 'Article',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Nama Artikel',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'event' => [
        'title'          => 'List Event',
        'title_singular' => 'List Event',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'name'                => 'Name',
            'name_helper'         => ' ',
            'label'               => 'Label Event',
            'label_helper'        => ' ',
            'description'         => 'Deskripsi Event',
            'description_helper'  => ' ',
            'event_type'          => 'Tipe Event',
            'event_type_helper'   => ' ',
            'expired_date'        => 'Expired Date',
            'expired_date_helper' => ' ',
            'user'                => 'User',
            'user_helper'         => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => ' ',
        ],
    ],
    'eventRegistration' => [
        'title'          => 'Event Registration',
        'title_singular' => 'Event Registration',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'event'             => 'Event',
            'event_helper'      => ' ',
            'dummy_name'        => 'Dummy Name',
            'dummy_name_helper' => ' ',
        ],
    ],
    'customEventRegistration' => [
        'fields' => [
            // Default Fields
            'NIM' => 'NIM',
            'Nama' => 'Nama',
            'Email' => 'Email',
            'Id_Line' => 'ID LINE',
            'Nomor_Telepon' => 'Nomor Telepon',
            'Angkatan' => 'Angkatan',

            // Add on
            'Inovasi' => 'Inovasi',
            'Swot' => 'Analisis Swot',
            'Organisasi' => 'Organisasi',
            'Tahun_Organisasi' => 'Tahun Organisasi',
            'Kepanitiaan' => 'Kepanitiaan',
            'Tahun_Kepanitiaan' => 'Tahun Kepanitiaan',
            'Pemberkasan' => 'Pemberkasan'
        ],
    ],
    'misc' => [
        'title'          => 'Misc',
        'title_singular' => 'Misc',
    ],
    'eventField' => [
        'title'          => 'Event Field',
        'title_singular' => 'Event Field',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'type'              => 'Tipe Field',
            'type_helper'       => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'event'             => 'Event',
            'event_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'eventFieldResponse' => [
        'title'          => 'Event Field Response',
        'title_singular' => 'Event Field Response',
        'fields'         => [
            'id'                        => 'ID',
            'id_helper'                 => ' ',
            'response'                  => 'Response',
            'response_helper'           => ' ',
            'created_at'                => 'Created at',
            'created_at_helper'         => ' ',
            'updated_at'                => 'Updated at',
            'updated_at_helper'         => ' ',
            'deleted_at'                => 'Deleted at',
            'deleted_at_helper'         => ' ',
            'event_registration'        => 'Event Registration',
            'event_registration_helper' => ' ',
            'event_field'               => 'Event Field',
            'event_field_helper'        => ' ',
        ],
    ],
    'upcomingProker' => [
        'title'          => 'Upcoming Proker',
        'title_singular' => 'Upcoming Proker',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Nama Proker',
            'name_helper'        => ' ',
            'caption'            => 'Caption Proker',
            'caption_helper'     => ' ',
            'description'        => 'Deskripsi Proker',
            'description_helper' => ' ',
            'is_active'          => 'Status Keaktivan',
            'is_active_helper'   => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'eventFieldChoice' => [
        'title'          => 'Event Field Choice',
        'title_singular' => 'Event Field Choice',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'choice'             => 'Opsi Pilihan',
            'choice_helper'      => ' ',
            'event_field'        => 'Event Field',
            'event_field_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'department' => [
        'title'          => 'Department',
        'title_singular' => 'Department',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Nama',
            'name_helper'        => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'logo'               => 'Logo',
            'logo_helper'        => ' ',
            'type'               => 'Tipe',
            'type_helper'        => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
            'initial'            => 'Inisial',
            'initial_helper'     => ' ',
            'sub_type'           => 'Sub Type',
            'sub_type_helper'    => ' ',
        ],
    ],
];
