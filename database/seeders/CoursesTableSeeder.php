<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('courses')->delete();
        
        \DB::table('courses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'teacher_id' => 1,
                'title' => 'Khoa học máy tính',
                'descriptif' => 'Cung cấp kiến thức cơ bản về Computer Science',
                'objectif' => 'Cung cấp kiến thức cơ bản về Khoa học máy tính ',
                'competences_requises' => 'bùm',
                'niveau_de_difficulte' => 1,
                'image' => 'courses/8EDd8xlfWOhjubt9QAVuLSwNqDm4fpOehlKJYDA3.jpg',
                'created_at' => '2022-02-08 18:57:38',
                'updated_at' => '2022-02-08 18:57:38',
            ),
            1 => 
            array (
                'id' => 2,
                'teacher_id' => 1,
                'title' => 'Nguyên lý HĐH',
                'descriptif' => 'Khái niệm về HĐH',
                'objectif' => 'abc',
                'competences_requises' => '0',
                'niveau_de_difficulte' => 6,
                'image' => 'courses/mPXUMIsHrThto4BL0WWITPm2IxLKy3mD8z8rvg9i.png',
                'created_at' => '2022-02-17 12:46:15',
                'updated_at' => '2022-02-17 12:46:15',
            ),
        ));
        
        
    }
}