<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Set1
        DB::table('questions')->insert([
            'question_name' => 'ในเวลาที่ฉันทำงาน และต้องการวิเคราะห์ข้อมูล ฉันมักจะ..',
            'choice1' => 'ใช้จินตนาการ<ins>และพิจารณาถึงสิ่งที่เป็นไปได้</ins>',
            'choice1_type' => 'N',
            'choice2' => 'ใช้ความรู้สึกของฉันที่เกิดขึ้นจริง ตระหนักถึง<ins>ข้อเท็จจริง</ins> และสิ่งที่จับต้องได้',
            'choice2_type' => 'S',
            'set' => '1',
        ]);

        DB::table('questions')->insert([
            'question_name' => '<ins>ในการตัดสินใจเรื่องต่างๆ ฉันมักจะ..</ins>',
            'choice1' => 'ใช้ประสบการณ์และข้อมูลที่รวมรวมมาได้',
            'choice1_type' => 'S',
            'choice2' => 'ใช้สัญชาตญาณนำไปสู่คำตอบที่ใช่',
            'choice2_type' => 'N',
            'set' => '1',
        ]);

        DB::table('questions')->insert([
            'question_name' => 'ในเรื่องความสัมพันธ์กับผู้อื่น ฉันเชื่อว่า...',
            'choice1' => '<ins>ฉันมีความสัมพันธ์ที่ดีกับคนอื่นอยู่แล้ว หากไม่มีปัญหาเกิดขึ้นก็ไม่ต้องดำเนินการใดๆ</ins>',
            'choice1_type' => 'S',
            'choice2' => '<ins>ยังมีสิ่งที่สามารถดำเนินการเพื่อสร้างความสัมพันธ์ให้ดียิ่งขึ้นได้อีก</ins>',
            'choice2_type' => 'N',
            'set' => '1',
        ]);

        DB::table('questions')->insert([
            'question_name' => 'เมื่ออยู่กับคนสนิท ไม่ว่าจะเพื่อนร่วมงาน คนรัก หรือคนในครอบครัว ฉันชอบที่จะพูดเรื่อง....',
            'choice1' => 'เรื่องเกี่ยวกับความฝันในอนาคต หรือ<ins>ความเป็นไปได้ของชีวิตที่ดีขึ้น</ins>',
            'choice1_type' => 'N',
            'choice2' => '<ins>สิ่งดีๆ ที่เป็นอยู่หรือที่กำลังจะเกิดขึ้น เช่นการท่องเที่ยวที่สนุกๆ หรือการรับประทานไวน์ที่รสชาติดี</ins>',
            'choice2_type' => 'S',
            'set' => '1',
        ]);

        DB::table('questions')->insert([
            'question_name' => 'ในเวลาที่ฉันทำงาน ฉันมักจะเป็นคนที่....',
            'choice1' => 'มองภาพรวมเป็นอันดับแรก <ins>ก่อนที่จะลงมือปฎิบัติ</ins>',
            'choice1_type' => 'N',
            'choice2' => 'ชอบลงลึกในรายละเอียดก่อน เพื่อดูสิ่งที่จะต้องทำ ก่อนที่จะลงมือปฎิบัติ',
            'choice2_type' => 'S',
            'set' => '1',
        ]);

        DB::table('questions')->insert([
            'question_name' => '<ins>ฉันเป็นคน...</ins>',
            'choice1' => 'ชอบที่จะอยู่กับความจริง สิ่งที่จับต้องได้ แม้มันจะห่างจากความฝันที่ฉันคิดไว้',
            'choice1_type' => 'S',
            'choice2' => 'ชอบที่จะสนุกอยู่กับความฝัน และจินตนาการที่ฉันอยากจะเป็น',
            'choice2_type' => 'N',
            'set' => '1',
        ]);

        DB::table('questions')->insert([
            'question_name' => 'ฉันชอบที่จะ..',
            'choice1' => '<ins>ฝันอยากจะมีส่วนร่วมหรือทำในสิ่งที่ยิ่งใหญ่</ins>',
            'choice1_type' => 'N',
            'choice2' => '<ins>ฝันว่าสามารถทำสิ่งต่างๆ ได้สำเร็จโดยง่ายจากประสบการณ์ที่มีอยู่</ins>',
            'choice2_type' => 'S',
            'set' => '1',
        ]);

        //Set 2
        DB::table('questions')->insert([
            'question_name' => 'ถ้าฉันต้องคัดเลือกทีมงานหนึ่งคน มาร่วมทำงาน ฉันจะ...',
            'choice1' => '<ins>ดูความรู้ความสามารถเป็นหลัก แล้วค่อยพิจารณาสิ่งอื่น</ins>',
            'choice1_type' => 'T',
            'choice2' => 'ใช้ความรู้สึกตัดสิน เลือกคนที่ถูกชะตา และคิดว่าเข้ากันได้',
            'choice2_type' => 'F',
            'set' => '2',
        ]);

        DB::table('questions')->insert([
            'question_name' => 'เมื่ออยู่กับคนรอบข้าง ฉันมักจะจับสังเกตได้เสมอว่า....',
            'choice1' => 'คนๆนั้นกำลังหดหู่ หรือต้องการกำลังใจ',
            'choice1_type' => 'F',
            'choice2' => 'คนๆ นั้น <ins>กำลังไม่มีเหตุผล</ins>',
            'choice2_type' => 'T',
            'set' => '2',
        ]);

        DB::table('questions')->insert([
            'question_name' => 'ในวันที่ฉันเลิกกับแฟน...',
            'choice1' => 'ถึงแม้จะรู้สึกเจ็บปวด ฉันสามารถที่จะตัด<ins>เขา</ins>ออกไปจาก<ins>ความรู้สึกได้</ins>',
            'choice1_type' => 'T',
            'choice2' => '<ins>ฉันมักเสียใจอย่างหนัก คิดซ้ำๆ เกี่ยวกับกับความสัมพันธ์ที่จบลง</ins>',
            'choice2_type' => 'F',
            'set' => '2',
        ]);

        DB::table('questions')->insert([
            'question_name' => 'เมื่อฉันเลือกคบใครซักคน ฉันเลือกคนที่...',
            'choice1' => 'เน้นการพูดคุยใช้เหตุผล พูดกันตรงๆ <ins>ในประเด็นที่มีความสนใจร่วมกัน</ins>',
            'choice1_type' => 'T',
            'choice2' => 'คนที่มองตาก็รู้ใจ เข้าใจอารมณ์ความรู้สึกของกันและกัน โดยไม่ต้องพูดคุย',
            'choice2_type' => 'F',
            'set' => '2',
        ]);

        DB::table('questions')->insert([
            'question_name' => 'เมื่อฉันไม่เห็นด้วยกับคนใกล้ตัว',
            'choice1' => 'ฉันเลือกจะหลีกเลี่ยงการทำร้ายจิตใจอีกฝ่าย และจะไม่พูดอะไรถ้ามันจะทำให้รู้สึกไม่ดี',
            'choice1_type' => 'F',
            'choice2' => 'ฉันจะพูดออกไปตรงๆ เพื่อแก้ไขสิ่งที่ฉันคิดว่าผิด ให้เป็นสิ่งที่ถูกต้อง',
            'choice2_type' => 'T',
            'set' => '2',
        ]);

        DB::table('questions')->insert([
            'question_name' => 'หลายคนที่รู้จักฉันดี เช่นคนในครอบครัว คนรัก เพื่อนร่วมงาน มักจะบอกว่าฉันเป็นคนที่..',
            'choice1' => 'เป็นคนตรงๆ มีเหตุผล',
            'choice1_type' => 'T',
            'choice2' => '<ins>อบอุ่น เห็นอกเห็นใจ อ่อนไหวต่อความรู้สึก</ins>',
            'choice2_type' => 'F',
            'set' => '2',
        ]);

        DB::table('questions')->insert([
            'question_name' => 'วิธีที่ฉันใช้เมื่อต้องร่วมงานกับผู้อื่น คือ...',
            'choice1' => 'เข้าหาผู้อื่นด้วยความมีอัธยาศัยที่ดี เน้นพูดคุยให้มีความเป็นกันเอง ไม่ใช่แค่เฉพาะเรื่องงานเท่านั้น',
            'choice1_type' => 'F',
            'choice2' => 'เข้าหาผู้อื่นแบบตรงประเด็น เพื่อให้ได้ผลลัพธ์ที่ถูกต้อง',
            'choice2_type' => 'T',
            'set' => '2',
        ]);


        //Set 3
        DB::table('questions')->insert([
            'question_name' => 'ถ้าอยู่ดีๆเพื่อนชวนไปเที่ยว โดยมีเวลาเตรียมตัวแค่วันเดียว ฉันจะ...',
            'choice1' => 'จัดกระเป๋าโดยไม่ต้องคิดเลย',
            'choice1_type' => 'P',
            'choice2' => 'เช็คตารางนัดหมายก่อนเป็นอันดับแรก',
            'choice2_type' => 'J',
            'set' => '3',
        ]);

        DB::table('questions')->insert([
            'question_name' => 'เมื่อคนที่ฉันนัดไว้มาสาย ฉันจะ...',
            'choice1' => 'ฉันจะหงุดหงิด และผิดหวัง',
            'choice1_type' => 'J',
            'choice2' => 'ฉันรู้สึกเฉยๆ เพราะ<ins>เป็นเรื่องปกติที่บางครั้งฉันก็มาสายเหมือนกัน</ins>',
            'choice2_type' => 'P',
            'set' => '3',
        ]);

        DB::table('questions')->insert([
            'question_name' => 'ฉันมักที่จะใช้ชีวิตในแบบที่..',
            'choice1' => 'มีการวางแผนล่วงหน้าว่าฉันจะต้องทำอะไร ที่ไหน อย่างไร นานแค่ไหน แต่งตัวอย่างไร',
            'choice1_type' => 'J',
            'choice2' => 'ไม่ต้องวางแผนอะไรล่วงหน้ามากนัก  เพราะการแก้ไขเหตุการณ์เฉพาะหน้า<ins>เป็นประสบการณ์ชีวิต</ins>',
            'choice2_type' => 'P',
            'set' => '3',
        ]);

        DB::table('questions')->insert([
            'question_name' => 'ฉันชอบใช้ชีวิตในแบบที่..',
            'choice1' => 'มีความยืดหยุ่น ปรับเปลี่ยนได้ตามต้องการ',
            'choice1_type' => 'P',
            'choice2' => 'มีแบบแผน และมีการจัดการที่ดี',
            'choice2_type' => 'J',
            'set' => '3',
        ]);

        DB::table('questions')->insert([
            'question_name' => 'เมื่อมีนัดหมาย สิ่งที่เกิดขึ้นบ่อยๆคือ...',
            'choice1' => 'ฉันมาถึงทันเวลานัดเสมอ แต่คนอื่นๆ มักจะสาย',
            'choice1_type' => 'J',
            'choice2' => 'คนอื่นๆมักจะมา<ins>ก่อน</ins>ฉัน แทบทุกครั้ง',
            'choice2_type' => 'P',
            'set' => '3',
        ]);

        DB::table('questions')->insert([
            'question_name' => 'เมื่อต้องตัดสินใจเรื่องใดเรื่องหนึ่ง ฉันชอบที่จะ...',
            'choice1' => 'คิดด้วยตนเอง ตัดสินใจเด็ดขาด',
            'choice1_type' => 'J',
            'choice2' => 'เปิดกว้าง รับฟัง<ins>ความเห็นของผู้อื่น</ins>',
            'choice2_type' => 'P',
            'set' => '3',
        ]);

        DB::table('questions')->insert([
            'question_name' => 'เมื่อมีหลายๆ งานเข้ามาพร้อมๆ กัน ฉันมักจะ...',
            'choice1' => 'ชอบทำงานให้เสร็จทีละงาน ก่อนที่จะไปเริ่มงานใหม่',
            'choice1_type' => 'J',
            'choice2' => 'ชอบที่จะทำงาน<ins>หลายๆ งานพร้อมกัน</ins>',
            'choice2_type' => 'P',
            'set' => '3',
        ]);
    }
}
