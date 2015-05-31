<?php
 
use Illuminate\Database\Seeder;
 
class Matriculas extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('users')->delete();
        DB::table('userInfo')->delete();
        
        $users = array(
            ['id' => 1,  'cn' => '10170926', 'email' =>'eduardofelix@zn00.net', 'password' => bcrypt('olakase'), 'type' => '6', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2,  'cn' => '10170927', 'email' =>'olakase@zn00.net', 'password' => bcrypt('olakase2'), 'type' => '1', 'created_at' => new DateTime, 'updated_at' => new DateTime]
        );

        $userInfo = array(
            ['id' => 1, 'cn' => '10170926', 'first_name' => 'Luis Eduardo', 'last_name' => 'Felix Leyva', 'credits' => '205', 'career' => 'Ing. en Sistemas', 'plan' => 'ISIC-2010-224', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'cn' => '10170927', 'first_name' => 'Mr', 'last_name' => 'Potato', 'credits' => '150', 'career' => 'Ing. en TICs', 'plan' => 'ISIC-2010-224', 'created_at' => new DateTime, 'updated_at' => new DateTime]
        );
 
        // Uncomment the below to run the seeder
        DB::table('users')->insert($users);
        DB::table('userInfo')->insert($userInfo);
    }
 
}