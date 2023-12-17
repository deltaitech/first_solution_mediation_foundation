<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //about us page Homepage
        $page = Page::create([
            "identifier" => "about_us",
            "has_sub_title" => 0,
            "has_description" => 1,
            "has_link" => 0,
            "has_video" => 0,
            "has_image" => 1,
            "ar" => [
                "title" => "من نحن",
                "description" => "<p>شركة شركة الحل الأول للوساطة هي شركة تمويل عقاري تعمل كوسيط بين المستثمرين والعملاء الراغبين في شراء عقارات. تتمثل مهمتنا في توفير الحلول التمويلية الملائمة لعملائنا، وتسهيل عملية الحصول على التمويل اللازم لشراء العقارات. تتميز شركة الحل الأول للوساطة بخبرتها الواسعة في مجال التمويل العقاري، وتعتمد على فريق عمل محترف وذو خبرة في مجال التمويل والعقارات، كما تعمل على توفير حلول تمويلية مختلفة لتلبية احتياجات عملانا المتنوعة. تتضمن خدمات شركة الحل الأول للوساطة تمويل شراء العقارات السكنية، وتقديم الاستشارات العقارية والتمويلية للعملاء. كما تعمل على توفير حلول تمويلية ملائمة للعملاء بما يتناسب مع احتياجاتهم وإمكانياتهم المالية، وتسعى دائماً لتحقيق رضا العملاء من خلال توفير خدمات ذات جودة عالية وبأسعار تنافسة</p>",
            ],
            "en" => [
                "title" => "About Us",
                "description" => "<p>First Solution Brokerage Company is a real estate financing company that works as an intermediary between investors and clients wishing to purchase real estate. Our mission is to provide appropriate financing solutions to our customers, and facilitate the process of obtaining the necessary financing to purchase real estate. First Solution Brokerage Company is distinguished by its extensive experience in the field of real estate financing, and relies on a professional and experienced work team in the field of finance and real estate. It also works to provide different financing solutions to meet the diverse needs of our clients. First Solution Brokerage Company's services include financing the purchase of residential properties, and providing real estate and financing consultations to clients. It also works to provide appropriate financing solutions to customers in accordance with their needs and financial capabilities, and always strives to achieve customer satisfaction by providing high-quality services at competitive prices.</p>",
            ],
        ]);

        $page->file()->create([
            "path" => "seeders/pages/about_us.jpg",
            "type" => "image",
        ]);


        //vision page Homepage
        $page = Page::create([
            "identifier" => "vision",
            "has_sub_title" => 0,
            "has_description" => 1,
            "has_link" => 0,
            "has_video" => 0,
            "has_image" => 1,
            "ar" => [
                "title" => "رؤيتنا",
                "description" => "<p>أن تكون عاملاً محفزاً لنمو واستقرار قطاع التمويل العقاري في المملكة من خلال توفير بنية مطابقة احتياجات إدارة السيولة ورأس المال والمخاطر للبنوك وشركات التمويل العقاري، والعمل على الارتقاء بمعايير قروض الإسكان في المملكة.</p>",
            ],
            "en" => [
                "title" => "Vision",
                "description" => "<p>To be a catalyst for the growth and stability of the real estate finance sector in the Kingdom by providing a structure that matches the liquidity, capital and risk management needs of banks and real estate finance companies, and working to raise the standards of housing loans in the Kingdom.</p>",
            ],
        ]);

        $page->file()->create([
            "path" => "seeders/pages/vision.jpg",
            "type" => "image",
        ]);



        //message page Homepage
        $page = Page::create([
            "identifier" => "message",
            "has_sub_title" => 0,
            "has_description" => 1,
            "has_link" => 0,
            "has_video" => 0,
            "has_image" => 1,
            "ar" => [
                "title" => "رسالتنا",
                "description" => "<p>أن تكون شركة الحل الأول للوساطة محركاً رئيسياً لبرنامج تحقيق رؤية الإسكان من ضمن  <strong>رؤية 2030</strong> ، لتمكين العائلات السعودية من امتلاك منازل تتناسب مع احتياجاتهم الشخصية، وتتوافق مع قدراتهم المالية.
                        </p>",
            ],
            "en" => [
                "title" => "Our Message",
                "description" => "<p>First Solution Brokerage Company will be a major driver of the program to achieve the housing vision within <strong> Vision 2030</strong>, to enable Saudi families to own homes that suit their personal needs and are compatible with their financial capabilities.</p>",
            ],
        ]);

        $page->file()->create([
            "path" => "seeders/pages/message.jpg",
            "type" => "image",
        ]);


        //goals page Homepage
        $page = Page::create([
            "identifier" => "goals",
            "has_sub_title" => 0,
            "has_description" => 1,
            "has_link" => 0,
            "has_video" => 0,
            "has_image" => 1,
            "ar" => [
                "title" => "هدفنا",
                "description" => "<p>ابتكار مزيد من حلول التمويل العقاري لتمكين الأسر السعودية من تملك مسكن مناسب لاحتياجاتهم وتعزيز قدراتهم المادية من خلال دراسة برامج التمويل المتاحة وتوفير الحل الأمثل لهم.</p>",
            ],
            "en" => [
                "title" => "Goals",
                "description" => "<p>Creating more real estate financing solutions to enable Saudi families to own housing suitable for their needs and enhance their financial capabilities by studying available financing programs and providing them with the optimal solution.</p>",
            ],
        ]);

        $page->file()->create([
            "path" => "seeders/pages/goals.jpg",
            "type" => "image",
        ]);
    }
}
