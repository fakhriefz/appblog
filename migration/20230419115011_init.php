<?php

declare(strict_types=1);

use Phoenix\Migration\AbstractMigration;

final class Init extends AbstractMigration
{
    protected function up(): void
    {
        $this->execute('CREATE TABLE `user` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
                `username` varchar(255) NOT NULL,
                       `password` varchar(255) NOT NULL,
                       `created_at` datetime NOT NULL,
                       `updated_at` datetime NULL,
                       PRIMARY KEY (`id`),
                       UNIQUE KEY (`username`)
                   ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;'
              
           );
           $this->insert('user',[
            [
            'username'=>'fakhri',
            'password'=>'123',
            'created_at'=>date('Y-m-d'),

            ]
            ]);
                
    }


    protected function down(): void
    {
        $this->table('user')
        ->drop();
    }
}
