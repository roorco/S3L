<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/srv/http/S3L/user/config/plugins/git-sync.yaml',
    'modified' => 1610818579,
    'data' => [
        'enabled' => true,
        'folders' => [
            0 => 'pages'
        ],
        'sync' => [
            'on_save' => true,
            'on_delete' => true,
            'on_media' => true,
            'cron_enable' => false,
            'cron_at' => '0 12,23 * * *'
        ],
        'local_repository' => NULL,
        'repository' => 'https://github.com/roorco/S3L.git',
        'no_user' => '0',
        'user' => 'roorco',
        'password' => 'gitsync-def50200d80ec62e7b43e6e103c0e8346ea1fe97e8caa605bb171a6fe91c411a47bd713717478961807da26371cd7def3cd3ca904a14df85dee54be86b390041193c456994f4f396f21b532ca940541b5068f09967058c5333a9d75d1ea8510dcfc1',
        'webhook' => '/_git-sync',
        'webhook_enabled' => '0',
        'webhook_secret' => '186904b8d736dd641608e2f7d8e012da4f4cbe87de9063d1',
        'branch' => 'master',
        'remote' => [
            'name' => 'origin',
            'branch' => 'master'
        ],
        'git' => [
            'author' => 'gituser',
            'message' => '(Grav GitSync) Automatic Commit',
            'name' => 'GitSync',
            'email' => 'git-sync@trilby.media',
            'bin' => 'git'
        ],
        'logging' => false
    ]
];
