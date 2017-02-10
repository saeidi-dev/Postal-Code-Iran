<?php
/**
 * Created by PhpStorm.
 * Author: Mahdi Saeedi
 * Email: mahdi.saeedi@hotmail.com
 * Date: 2/10/2017
 */

namespace IranZip;

/**
 * Class PostalCode Iran
 */
class PostalCode
{
    /**
     * @param $postalCode
     *
     * @return array('state' => '', 'city' => '');
     */
    public static function toState($postalCode)
    {
        $postalCode = (int)substr($postalCode, 0, 5);

        switch (true) {
            // West Azerbaijan
            case ($postalCode >= 57131 && $postalCode <= 57591):
                return array('state' => 'آذربایجان غربی', 'city' => 'ارومیه');
            case ($postalCode >= 57611 && $postalCode <= 57691):
                return array('state' => 'آذربایجان غربی', 'city' => 'نقده');
            case ($postalCode >= 57711 && $postalCode <= 57791):
                return array('state' => 'آذربایجان غربی', 'city' => 'اشنویه');
            case ($postalCode >= 57811 && $postalCode <= 57991):
                return array('state' => 'آذربایجان غربی', 'city' => 'پیرانشهر');
            case ($postalCode >= 58131 && $postalCode <= 58591):
                return array('state' => 'آذربایجان غربی', 'city' => 'خوی');
            case ($postalCode >= 58611 && $postalCode <= 58631):
                return array('state' => 'آذربایجان غربی', 'city' => 'ماکو');
            case ($postalCode >= 58641 && $postalCode <= 58791):
                return array('state' => 'آذربایجان غربی', 'city' => 'چالدران');
            case ($postalCode >= 58811 && $postalCode <= 58991):
                return array('state' => 'آذربایجان غربی', 'city' => 'سلماس');
            case ($postalCode >= 59131 && $postalCode <= 59341):
                return array('state' => 'آذربایجان غربی', 'city' => 'مهاباد');
            case ($postalCode >= 59351 && $postalCode <= 59361):
                return array('state' => 'آذربایجان غربی', 'city' => 'میاندوآب');
            case ($postalCode >= 59431 && $postalCode <= 59591):
                return array('state' => 'آذربایجان غربی', 'city' => 'بوکان');
            case ($postalCode >= 59611 && $postalCode <= 59891):
                return array('state' => 'آذربایجان غربی', 'city' => 'سردشت');
            case ($postalCode >= 59916 && $postalCode <= 59971):
                return array('state' => 'آذربایجان غربی', 'city' => 'تکاب');
            // East Azerbaijan
            case ($postalCode >= 51331 && $postalCode <= 51999):
                return array('state' => 'آذربایجان شرقی', 'city' => 'تبریز');
            case ($postalCode >= 53131 && $postalCode <= 53491):
                return array('state' => 'آذربایجان شرقی', 'city' => 'میانه');
            case ($postalCode >= 53511 && $postalCode <= 53591):
                return array('state' => 'آذربایجان شرقی', 'city' => 'اسکو');
            case ($postalCode >= 53616 && $postalCode <= 53651):
                return array('state' => 'آذربایجان شرقی', 'city' => 'سردرود');
            case ($postalCode >= 53661 && $postalCode <= 53691):
                return array('state' => 'آذربایجان شرقی', 'city' => 'باسمنج');
            case ($postalCode >= 53711 && $postalCode <= 53791):
                return array('state' => 'آذربایجان شرقی', 'city' => 'آذرشهر');
            case ($postalCode >= 53811 && $postalCode <= 53891):
                return array('state' => 'آذربایجان شرقی', 'city' => 'شبستر');
            case ($postalCode >= 53911 && $postalCode <= 53991):
                return array('state' => 'آذربایجان شرقی', 'city' => 'هریس');
            case ($postalCode >= 54131 && $postalCode <= 54199):
                return array('state' => 'آذربایجان شرقی', 'city' => 'مرند');
            case ($postalCode >= 54311 && $postalCode <= 54319):
                return array('state' => 'آذربایجان شرقی', 'city' => 'جلفا');
            case ($postalCode >= 54491 && $postalCode <= 54561):
                return array('state' => 'آذربایجان شرقی', 'city' => 'اهر');
            case ($postalCode >= 54611 && $postalCode <= 54691):
                return array('state' => 'آذربایجان شرقی', 'city' => 'کلیبر');
            case ($postalCode >= 54711 && $postalCode <= 54891):
                return array('state' => 'آذربایجان شرقی', 'city' => 'سراب');
            case ($postalCode >= 54911 && $postalCode <= 54991):
                return array('state' => 'آذربایجان شرقی', 'city' => 'بستان آباد');
            case ($postalCode >= 55131 && $postalCode <= 55391):
                return array('state' => 'آذربایجان شرقی', 'city' => 'مراغه');
            case ($postalCode >= 55411 && $postalCode <= 55491):
                return array('state' => 'آذربایجان شرقی', 'city' => 'عجبشیر');
            case ($postalCode >= 55511 && $postalCode <= 55591):
                return array('state' => 'آذربایجان شرقی', 'city' => 'بناب');
            case ($postalCode >= 55611 && $postalCode <= 55691):
                return array('state' => 'آذربایجان شرقی', 'city' => 'ملکان');
            case ($postalCode >= 55711 && $postalCode <= 55781):
                return array('state' => 'آذربایجان شرقی', 'city' => 'هشترود');
            case ($postalCode >= 55791 && $postalCode <= 55991):
                return array('state' => 'آذربایجان شرقی', 'city' => 'چاراویماق');

            // Tehran
            case ($postalCode >= 11111 && $postalCode <= 11999):
                return array('state' => 'تهران', 'city' => 'تهران منطقه 11');
            case ($postalCode >= 13111 && $postalCode <= 13999):
                return array('state' => 'تهران', 'city' => 'تهران منطقه 13');
            case ($postalCode >= 14111 && $postalCode <= 14999):
                return array('state' => 'تهران', 'city' => 'تهران منطقه 14');
            case ($postalCode >= 15111 && $postalCode <= 15999):
                return array('state' => 'تهران', 'city' => 'تهران منطقه 15');
            case ($postalCode >= 16111 && $postalCode <= 16999):
                return array('state' => 'تهران', 'city' => 'تهران منطقه 16');
            case ($postalCode >= 17111 && $postalCode <= 17999):
                return array('state' => 'تهران', 'city' => 'تهران منطقه 17');
            case ($postalCode >= 18111 && $postalCode <= 18999):
                return array('state' => 'تهران', 'city' => 'تهران منطقه 18');
            case ($postalCode >= 19111 && $postalCode <= 19999):
                return array('state' => 'تهران', 'city' => 'تهران منطقه 19');

            // South Khorasan
            case ($postalCode >= 97131 && $postalCode <= 97481):
                return array('state' => 'خراسان جنوبی', 'city' => 'بيرجند');
            case ($postalCode >= 97441 && $postalCode <= 97471):
                return array('state' => 'خراسان جنوبی', 'city' => 'درمیان');
            case ($postalCode >= 97761 && $postalCode <= 97891):
                return array('state' => 'خراسان جنوبی', 'city' => 'سرايان');
            case ($postalCode >= 97311 && $postalCode <= 97491):
                return array('state' => 'خراسان جنوبی', 'city' => 'سربيشه');
            case ($postalCode >= 97711 && $postalCode <= 97881):
                return array('state' => 'خراسان جنوبی', 'city' => 'فردوس');
            case ($postalCode >= 97611 && $postalCode <= 97691):
                return array('state' => 'خراسان جنوبی', 'city' => 'قائنات');
            case ($postalCode >= 97511 && $postalCode <= 97591):
                return array('state' => 'خراسان جنوبی', 'city' => 'نهبندان');

            // Razavi Khorasan
            case ($postalCode >= 95611 && $postalCode <= 95691):
                return array('state' => 'خراسان رضوی', 'city' => 'خواف');
            case ($postalCode >= 94911 && $postalCode <= 94991):
                return array('state' => 'خراسان رضوی', 'city' => 'درگز');
            case ($postalCode >= 95411 && $postalCode <= 95481):
                return array('state' => 'خراسان رضوی', 'city' => 'رشتخوار');
            case ($postalCode >= 96131 && $postalCode <= 96591):
                return array('state' => 'خراسان رضوی', 'city' => 'سبزوار');
            case ($postalCode >= 93811 && $postalCode <= 93891):
                return array('state' => 'خراسان رضوی', 'city' => 'سرخس');
            case ($postalCode >= 93911 && $postalCode <= 93991):
                return array('state' => 'خراسان رضوی', 'city' => 'فريمان');
            case ($postalCode >= 94711 && $postalCode <= 94861):
                return array('state' => 'خراسان رضوی', 'city' => 'قوچان');
            case ($postalCode >= 96711 && $postalCode <= 96791):
                return array('state' => 'خراسان رضوی', 'city' => 'كاشمر');
            case ($postalCode >= 93711 && $postalCode <= 94931):
                return array('state' => 'خراسان رضوی', 'city' => 'كلات');
            case ($postalCode >= 96911 && $postalCode <= 96991):
                return array('state' => 'خراسان رضوی', 'city' => 'گناباد');
            case ($postalCode >= 91331 && $postalCode <= 93781):
                return array('state' => 'خراسان رضوی', 'city' => 'مشهد');
            case ($postalCode >= 93131 && $postalCode <= 93491):
                return array('state' => 'خراسان رضوی', 'city' => 'نيشابور');

            // North Khorasan
            case ($postalCode >= 96611 && $postalCode <= 96691):
                return array('state' => 'خراسان شمالی', 'city' => 'اسفراين');
            case ($postalCode >= 94131 && $postalCode <= 94591):
                return array('state' => 'خراسان شمالی', 'city' => 'بجنورد');
            case ($postalCode >= 94311 && $postalCode <= 94491):
                return array('state' => 'خراسان شمالی', 'city' => 'جاجرم');
            case ($postalCode >= 94611 && $postalCode <= 94691):
                return array('state' => 'خراسان شمالی', 'city' => 'شيروان');
            case ($postalCode >= 94811 && $postalCode <= 94891):
                return array('state' => 'خراسان شمالی', 'city' => 'فاروج');
            case ($postalCode >= 94341 && $postalCode <= 94551):
                return array('state' => 'خراسان شمالی', 'city' => 'مانه و سملقان');

            // Khuzestan
            case ($postalCode >= 64611 && $postalCode <= 64691):
                return array('state' => 'خوزستان', 'city' => 'دزفول');
            case ($postalCode >= 64411 && $postalCode <= 64491):
                return array('state' => 'خوزستان', 'city' => 'دشت آزادگان');
            case ($postalCode >= 63811 && $postalCode <= 64961):
                return array('state' => 'خوزستان', 'city' => 'رامهرمز');
            case ($postalCode >= 64311 && $postalCode <= 64361):
                return array('state' => 'خوزستان', 'city' => 'شادگان');
            case ($postalCode >= 64711 && $postalCode <= 64791):
                return array('state' => 'خوزستان', 'city' => 'شوش');
            case ($postalCode >= 64511 && $postalCode <= 64591):
                return array('state' => 'خوزستان', 'city' => 'شوشتر');
            case ($postalCode >= 64941 && $postalCode <= 64941):
                return array('state' => 'خوزستان', 'city' => 'لالي');
            case ($postalCode >= 63511 && $postalCode <= 63581):
                return array('state' => 'خوزستان', 'city' => 'ماهشهر');
            case ($postalCode >= 64911 && $postalCode <= 64991):
                return array('state' => 'خوزستان', 'city' => 'مسجد سليمان');
            case ($postalCode >= 63591 && $postalCode <= 63591):
                return array('state' => 'خوزستان', 'city' => 'هنديجان');

            // Zanjan
            case ($postalCode >= 45511 && $postalCode <= 45741):
                return array('state' => 'زنجان', 'city' => 'ابهر');
            case ($postalCode >= 45311 && $postalCode <= 45971):
                return array('state' => 'زنجان', 'city' => 'ايجرود');
            case ($postalCode >= 45771 && $postalCode <= 45891):
                return array('state' => 'زنجان', 'city' => 'خدابنده');
            case ($postalCode >= 45711 && $postalCode <= 45761):
                return array('state' => 'زنجان', 'city' => 'خرمدره');
            case ($postalCode >= 45131 && $postalCode <= 45541):
                return array('state' => 'زنجان', 'city' => 'زنجان');
            case ($postalCode >= 45911 && $postalCode <= 45991):
                return array('state' => 'زنجان', 'city' => 'طارم');
            case ($postalCode >= 45411 && $postalCode <= 45481):
                return array('state' => 'زنجان', 'city' => 'ماهنشان');

            //Semnan
            case ($postalCode >= 36711 && $postalCode <= 36991):
                return array('state' => 'سمنان', 'city' => 'دامغان');
            case ($postalCode >= 35131 && $postalCode <= 35791):
                return array('state' => 'سمنان', 'city' => 'سمنان');
            case ($postalCode >= 36131 && $postalCode <= 36691):
                return array('state' => 'سمنان', 'city' => 'شاهرود');
            case ($postalCode >= 35811 && $postalCode <= 35991):
                return array('state' => 'سمنان', 'city' => 'گرمسار');

            // Sistan and Baluchestan
            case ($postalCode >= 99131 && $postalCode <= 99491):
                return array('state' => 'سیستان و بلوچستان', 'city' => 'ايرانشهر');
            case ($postalCode >= 99711 && $postalCode <= 99861):
                return array('state' => 'سیستان و بلوچستان', 'city' => 'چابهار');
            case ($postalCode >= 98811 && $postalCode <= 98991):
                return array('state' => 'سیستان و بلوچستان', 'city' => 'خاش');
            case ($postalCode >= 99471 && $postalCode <= 99471):
                return array('state' => 'سیستان و بلوچستان', 'city' => 'دلگان');
            case ($postalCode >= 98511 && $postalCode <= 98791):
                return array('state' => 'سیستان و بلوچستان', 'city' => 'زابل');
            case ($postalCode >= 99661 && $postalCode <= 99661):
                return array('state' => 'سیستان و بلوچستان', 'city' => 'زابلی');
            case ($postalCode >= 98131 && $postalCode <= 98491):
                return array('state' => 'سیستان و بلوچستان', 'city' => 'زاهدان');
            case ($postalCode >= 99511 && $postalCode <= 99691):
                return array('state' => 'سیستان و بلوچستان', 'city' => 'سراوان');
            case ($postalCode >= 99311 && $postalCode <= 99391):
                return array('state' => 'سیستان و بلوچستان', 'city' => 'سرباز');
            case ($postalCode >= 99331 && $postalCode <= 99991):
                return array('state' => 'سیستان و بلوچستان', 'city' => 'نيكشهر');

            // Fars
            case ($postalCode >= 73911 && $postalCode <= 73991):
                return array('state' => 'فارس', 'city' => 'آباده');
            case ($postalCode >= 73731 && $postalCode <= 73761):
                return array('state' => 'فارس', 'city' => 'ارسنجان');
            case ($postalCode >= 74461 && $postalCode <= 74519):
                return array('state' => 'فارس', 'city' => 'استهبان');
            case ($postalCode >= 73811 && $postalCode <= 73891):
                return array('state' => 'فارس', 'city' => 'اقليد');
            case ($postalCode >= 73781 && $postalCode <= 73971):
                return array('state' => 'فارس', 'city' => 'بوانات');
            case ($postalCode >= 73741 && $postalCode <= 73791):
                return array('state' => 'فارس', 'city' => 'پاسارگاد');
            case ($postalCode >= 74131 && $postalCode <= 74591):
                return array('state' => 'فارس', 'city' => 'جهرم');
            case ($postalCode >= 73751 && $postalCode <= 73961):
                return array('state' => 'فارس', 'city' => 'خرمبيد');
            case ($postalCode >= 74431 && $postalCode <= 74431):
                return array('state' => 'فارس', 'city' => 'خنج');
            case ($postalCode >= 74111 && $postalCode <= 74891):
                return array('state' => 'فارس', 'city' => 'داراب');
            case ($postalCode >= 74814 && $postalCode <= 74861):
                return array('state' => 'فارس', 'city' => 'زرین دشت');
            case ($postalCode >= 73611 && $postalCode <= 73691):
                return array('state' => 'فارس', 'city' => 'سپيدان');
            case ($postalCode >= 71331 && $postalCode <= 73491):
                return array('state' => 'فارس', 'city' => 'شيراز');
            case ($postalCode >= 74771 && $postalCode <= 74781):
                return array('state' => 'فارس', 'city' => 'فراشبند');
            case ($postalCode >= 74611 && $postalCode <= 74691):
                return array('state' => 'فارس', 'city' => 'فسا');
            case ($postalCode >= 74711 && $postalCode <= 74791):
                return array('state' => 'فارس', 'city' => 'فيروزآباد');
            case ($postalCode >= 74714 && $postalCode <= 74761):
                return array('state' => 'فارس', 'city' => 'قیروکارزین');
            case ($postalCode >= 73111 && $postalCode <= 73391):
                return array('state' => 'فارس', 'city' => 'كازرون');
            case ($postalCode >= 74311 && $postalCode <= 74419):
                return array('state' => 'فارس', 'city' => 'لارستان');
            case ($postalCode >= 74341 && $postalCode <= 74441):
                return array('state' => 'فارس', 'city' => 'لامرد');
            case ($postalCode >= 73431 && $postalCode <= 73771):
                return array('state' => 'فارس', 'city' => 'مرودشت');
            case ($postalCode >= 73511 && $postalCode <= 73591):
                return array('state' => 'فارس', 'city' => 'ممسني');
            case ($postalCode >= 74414 && $postalCode <= 74451):
                return array('state' => 'فارس', 'city' => 'مهر');
            case ($postalCode >= 74911 && $postalCode <= 74991):
                return array('state' => 'فارس', 'city' => 'ني ريز');

            //Qazvin
            case ($postalCode >= 34411 && $postalCode <= 34481):
                return array('state' => 'قزوین', 'city' => 'آبيك');
            case ($postalCode >= 34151 && $postalCode <= 34161):
                return array('state' => 'قزوین', 'city' => 'البرز');
            case ($postalCode >= 34491 && $postalCode <= 34691):
                return array('state' => 'قزوین', 'city' => 'بوئين زهرا');
            case ($postalCode >= 34561 && $postalCode <= 34951):
                return array('state' => 'قزوین', 'city' => 'تاكستان');
            case ($postalCode >= 34131 && $postalCode <= 34981):
                return array('state' => 'قزوین', 'city' => 'قزوين');

            // Qom
            case ($postalCode >= 37131 && $postalCode <= 37491):
                return array('state' => 'قم', 'city' => 'قم');

            // Kurdistan
            case ($postalCode >= 66911 && $postalCode <= 66991):
                return array('state' => 'کردستان', 'city' => 'بانه');
            case ($postalCode >= 66511 && $postalCode <= 66591):
                return array('state' => 'کردستان', 'city' => 'بيجار');
            case ($postalCode >= 66411 && $postalCode <= 66491):
                return array('state' => 'کردستان', 'city' => 'ديواندره');
            case ($postalCode >= 66771 && $postalCode <= 66791):
                return array('state' => 'کردستان', 'city' => 'سروآباد');
            case ($postalCode >= 66811 && $postalCode <= 66891):
                return array('state' => 'کردستان', 'city' => 'سقز');
            case ($postalCode >= 66131 && $postalCode <= 66199):
                return array('state' => 'کردستان', 'city' => 'سنندج');
            case ($postalCode >= 66611 && $postalCode <= 66691):
                return array('state' => 'کردستان', 'city' => 'قروه');
            case ($postalCode >= 66311 && $postalCode <= 66391):
                return array('state' => 'کردستان', 'city' => 'كامياران');
            case ($postalCode >= 66711 && $postalCode <= 66761):
                return array('state' => 'کردستان', 'city' => 'مريوان');

            // Kerman
            case ($postalCode >= 76511 && $postalCode <= 77991):
                return array('state' => 'کرمان', 'city' => 'راور');
            case ($postalCode >= 77131 && $postalCode <= 77491):
                return array('state' => 'کرمان', 'city' => 'رفسنجان');
            case ($postalCode >= 78831 && $postalCode <= 78831):
                return array('state' => 'کرمان', 'city' => 'رودبار');
            case ($postalCode >= 77611 && $postalCode <= 77691):
                return array('state' => 'کرمان', 'city' => 'زرند');
            case ($postalCode >= 78131 && $postalCode <= 78391):
                return array('state' => 'کرمان', 'city' => 'سيرجان');
            case ($postalCode >= 77511 && $postalCode <= 77591):
                return array('state' => 'کرمان', 'city' => 'شهر بابك');
            case ($postalCode >= 78719 && $postalCode <= 78791):
                return array('state' => 'کرمان', 'city' => 'عنبرآباد');
            case ($postalCode >= 78841 && $postalCode <= 78971):
                return array('state' => 'کرمان', 'city' => 'قلعه گنج');
            case ($postalCode >= 77711 && $postalCode <= 77891):
                return array('state' => 'کرمان', 'city' => 'کوهبنان');
            case ($postalCode >= 76131 && $postalCode <= 77951):
                return array('state' => 'کرمان', 'city' => 'كرمان');
            case ($postalCode >= 78811 && $postalCode <= 78891):
                return array('state' => 'کرمان', 'city' => 'كهنوج');
            case ($postalCode >= 78851 && $postalCode <= 78991):
                return array('state' => 'کرمان', 'city' => 'منوجان');

            // Gilan
            case ($postalCode >= 44391 && $postalCode <= 44311):
                return array('state' => 'گیلان', 'city' => 'سياهكل');
            case ($postalCode >= 43541 && $postalCode <= 43591):
                return array('state' => 'گیلان', 'city' => 'شفت');
            case ($postalCode >= 43611 && $postalCode <= 43691):
                return array('state' => 'گیلان', 'city' => 'صومعه سرا');
            case ($postalCode >= 43711 && $postalCode <= 43791):
                return array('state' => 'گیلان', 'city' => 'طوالش');
            case ($postalCode >= 43511 && $postalCode <= 43581):
                return array('state' => 'گیلان', 'city' => 'فومن');
            case ($postalCode >= 44131 && $postalCode <= 44371):
                return array('state' => 'گیلان', 'city' => 'لاهيجان');
            case ($postalCode >= 44711 && $postalCode <= 44791):
                return array('state' => 'گیلان', 'city' => 'لنگرود');
            case ($postalCode >= 43811 && $postalCode <= 43851):
                return array('state' => 'گیلان', 'city' => 'ماسال');

            // Golestan
            case ($postalCode >= 49611 && $postalCode <= 49671):
                return array('state' => 'گلستان', 'city' => 'آزاد شهر');
            case ($postalCode >= 49311 && $postalCode <= 49391):
                return array('state' => 'گلستان', 'city' => 'آق قلا');
            case ($postalCode >= 48711 && $postalCode <= 48791):
                return array('state' => 'گلستان', 'city' => 'بندر گز');
            case ($postalCode >= 48911 && $postalCode <= 48991):
                return array('state' => 'گلستان', 'city' => 'تركمن');
            case ($postalCode >= 49511 && $postalCode <= 49681):
                return array('state' => 'گلستان', 'city' => 'راميان');
            case ($postalCode >= 49411 && $postalCode <= 49491):
                return array('state' => 'گلستان', 'city' => 'كردكوی');
            case ($postalCode >= 49851 && $postalCode <= 49991):
                return array('state' => 'گلستان', 'city' => 'كلاله');
            case ($postalCode >= 49131 && $postalCode <= 49371):
                return array('state' => 'گلستان', 'city' => 'گرگان');
            case ($postalCode >= 49691 && $postalCode <= 49791):
                return array('state' => 'گلستان', 'city' => 'گنبد كاووس');
            case ($postalCode >= 49811 && $postalCode <= 49891):
                return array('state' => 'گلستان', 'city' => 'مينو دشت');

            // Yazd
            case ($postalCode >= 89131 && $postalCode <= 89391):
                return array('state' => 'یزد', 'city' => 'ابركوه');
            case ($postalCode >= 89511 && $postalCode <= 89691):
                return array('state' => 'یزد', 'city' => 'اردكان');
            case ($postalCode >= 89711 && $postalCode <= 89791):
                return array('state' => 'یزد', 'city' => 'بافق');
            case ($postalCode >= 89911 && $postalCode <= 89991):
                return array('state' => 'یزد', 'city' => 'تفت');
            case ($postalCode >= 89871 && $postalCode <= 89891):
                return array('state' => 'یزد', 'city' => 'خاتم');
            case ($postalCode >= 89411 && $postalCode <= 89481):
                return array('state' => 'یزد', 'city' => 'صدوق');
            case ($postalCode >= 97911 && $postalCode <= 97991):
                return array('state' => 'یزد', 'city' => 'طبس');
            case ($postalCode >= 89811 && $postalCode <= 89861):
                return array('state' => 'یزد', 'city' => 'مهريز');
            case ($postalCode >= 89611 && $postalCode <= 89681):
                return array('state' => 'یزد', 'city' => 'ميبد');
            case ($postalCode >= 89131 && $postalCode <= 89493):
                return array('state' => 'یزد', 'city' => 'يزد');

            // Hamadan
            case ($postalCode >= 65411 && $postalCode <= 65491):
                return array('state' => 'همدان', 'city' => 'اسد آباد');
            case ($postalCode >= 65311 && $postalCode <= 65391):
                return array('state' => 'همدان', 'city' => 'بهار');
            case ($postalCode >= 65811 && $postalCode <= 65891):
                return array('state' => 'همدان', 'city' => 'تويسركان');
            case ($postalCode >= 65661 && $postalCode <= 65691):
                return array('state' => 'همدان', 'city' => 'رزن');
            case ($postalCode >= 65511 && $postalCode <= 65591):
                return array('state' => 'همدان', 'city' => 'كبودر آهنگ');
            case ($postalCode >= 65711 && $postalCode <= 65791):
                return array('state' => 'همدان', 'city' => 'ملاير');
            case ($postalCode >= 65911 && $postalCode <= 65991):
                return array('state' => 'همدان', 'city' => 'نهاوند');
            case ($postalCode >= 65131 && $postalCode <= 65651):
                return array('state' => 'همدان', 'city' => 'همدان');

            // Hormozgan
            case ($postalCode >= 79591 && $postalCode <= 79591):
                return array('state' => 'هرمزگان', 'city' => 'ابوموسي');
            case ($postalCode >= 79611 && $postalCode <= 79691):
                return array('state' => 'هرمزگان', 'city' => 'بستک');
            case ($postalCode >= 79131 && $postalCode <= 79661):
                return array('state' => 'هرمزگان', 'city' => 'بندر عباس');
            case ($postalCode >= 79413 && $postalCode <= 79781):
                return array('state' => 'هرمزگان', 'city' => 'بندر لنگه');
            case ($postalCode >= 79481 && $postalCode <= 79891):
                return array('state' => 'هرمزگان', 'city' => 'جاسک');
            case ($postalCode >= 79371 && $postalCode <= 79411):
                return array('state' => 'هرمزگان', 'city' => 'حاجي آباد');
            case ($postalCode >= 79911 && $postalCode <= 79951):
                return array('state' => 'هرمزگان', 'city' => 'رودان');
            case ($postalCode >= 79511 && $postalCode <= 79581):
                return array('state' => 'هرمزگان', 'city' => 'قشم');
            case ($postalCode >= 79461 && $postalCode <= 79991):
                return array('state' => 'هرمزگان', 'city' => 'ميناب');


        }
    }
}
