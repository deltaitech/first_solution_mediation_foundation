<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $title_ar = [
            'حلول توحيد الالتزامات',
            'حلول الرهن العقاري',
            'حلول التمويل للبناء الذاتي',
            'حلول شراء العقار',
            'حلول لمستفيدي الصندوق والإسكان',
        ];

        $title_en = [
            'Solutions to consolidate obligations',
            'Mortgage solutions',
            'Financing solutions for self-build',
            'Real estate purchasing solutions',
            'Solutions for the Fund and Housing beneficiaries',

        ];

        $description_ar = [
            '<p>يمكننا أن نقدم لك يد المساعدة في توحيد التزاماتك المالية لتكون قسطًا واحدًا لجهة واحدة وذلك بضمان العقار، كما تتيح لك عملية توحيد الالتزامات المالية المتعددة لدى البنوك والشركات التمويلية نظير حصولك على مختلف أنواع القروض تسهيل تسديد أقساط القروض عبر جمعها في مكان واحد بسعر تنافسي وخدمات مالية فعالة مثل السرعة في التنفيذ، الحصول على استشارات مالية وتخفيف أعباء وصعوبات تعدد الالتزامات.
            </br>
            تعد معرفة كيفية إدارة ديونك مهارة أساسية يجب أن تمتلكها في تطوير وضع مالي سليم، ولا تقتصر إدارة التزاماتك المالية على وضع الأموال جانبًا من أجلها فحسب، بل تشمل أيضًا لوجستية تجميع ودفع قروضك وفواتيرك بشكل منفصل إلى عدة بنوك، وفي بعض الأحيان قد تضطر أيضًا إلى إجراء مدفوعات عدة مرات في الشهر، حيث من المحتمل أن يكون لقروضك وفواتيرك دورات فوتره مختلفة.
            </br>
            في حين أن هناك أسباب جيدة لممارسة الأعمال التجارية في بنوك مختلفة ، إلا أن هناك أيضًا أسبابًا وجيهة لتوحيد التزاماتك المالية في مكان واحد فقط.</p>',

            '<p>إن كنت من ملاك العقار أو لديك عقار مرهون فلدينا الحلول المبتكرة للحصول على تمويل عقاري مقابل رهن العقار أو فك رهن العقار وإعادة التمويل لاستكمال بناء عقارك أو شراء عقار أخر بأقساط شهرية ميسرة أو من دخل العقار.
            </br>
            توفر شركتنا الحل الأول للوساطة أفضل الحلول للحصول على تمويل عقاري لشراء عقار جديد ليتم استثماره لتحقيق أرباح وفك الرهن العقاري السابق عبر تسهيل الحصول على قروض عقارية مريحة من أحد المؤسسات البنكية التي نعمل معها.
            </br>
            كما هو معروف أن العقار المرهون لا يمكن التصرف فيه حتى إرجاع كل أقساط القرض إلى البنك، نحن في شركة الحل الأول للوساطة نوفر لك التمويل اللازم للتخلص من الرهن العقاري مقابل فائدة قليلة والذي يسمح لك ببيع أو استكمال بناء العقار للاستفادة من تأجيره أو بدء عمل تجاري عليه مما سيزيد من أرباحك ويختصر عليك الوقت لذلك.</p>',

            '<p>تمويل البناء الذاتي هو أحد الحلول التمويلية التي تقدمها البنوك السعودية بالتعاون مع صندوق التنمية العقارية، والذي يمكن للعميل من خلاله الحصول على تمويل مقابل رهن الأرض السكنية المملوكة له للبنك ، كما يمكنه أيضاً الاستفادة من المزايا التي يقدمها صندوق التنمية العقارية ضمن برنامج مدعوم، على أن يتم دفع مبلغ التمويل للعميل على دفعات حسب مراحل البناء أو بدفعة واحدة .
            </br>
            امتلك عقارك عبر استخدام خيارات التمويل العقاري
            وفي أغلب الاحيان تكون مدة التمويل 5 سنوات – 25 سنة .
            </br>
            ومبلغ التمويل في أغلب الاحيان 250.000 ريال سعودي – 7.000.000 ريال سعودي .</p>',

            '<p>نقدم لك في هذا البرنامج أفضل الحلول التمويلية لشراء العقار الذي تطمح إليه سواءً كان العقار (مكتمل – غير مكتمل – عمارة سكنية – عمارة تجارية – أرض – استراحة) وفي أي منطقة من مناطق المملكة العربية السعودية، ستمكنك خبرة شركة الحل الأول للوساطة وعلاقاتها المتينة بمختلف البنوك الاستثمارية السعودية، إضافة إلى طاقمها الخبير من الحصول على أفضل صيغ القروض العقارية لتمويل شراء العقار الذي تريده، تملك شركة الحل الأول للوساطة العديد من الحلول التي يمكنك أن تختار منها ما يناسبك لتمويل شراء العقار الذي تبحث عنه في وقتٍ قصير وبأقساط مريحة حسب دخلك الشهري، مما يجعلك تتابع حياتك بصفة عادية دون أن تضطر لتخفيض نفقاتك ونفقات أسرتك مع البقاء في نفس المستوى المعيشي والاستمتاع بالإقامة في مسكنك الخاص أو بدء مشروعك التجاري على عقارٍ تملكه لتتفادى مصاريف الإيجار المرتفعة والنفقات المتعلقة بها مع إمكانية الاستفادة من تأجير العقار والحصول على دخل شهري ثابت وخاصةً إذا اخترت المكان الصحيح للعقار.
            </br>
            من أبرز الحلول لمشكلتك هي البحث عن مصادر لتمويل العقار الذي تود شراءه، حيث توفر لك شركة الحل الأول للوساطة العديد من الحلول لمساعدتك في شراء العقار المتمثل في منزل أحلامك أو عقارك التجاري لتبدأ عملك الخاص عبر شبكة علاقاتها المتينة بأقوى البنوك في المملكة العربية السعودية على غرار بنك الرياض، البنك السعودي للاستثمار، بنك البلاد، بنك العربي، مصرف الراجحي والعديد من البنوك الأخرى.</p>',

            '<p>هل ترغب في التعاقد مع شركة تمويل عقاري لتحقيق حلمك في امتلاك عقار خاص بك؟ أنت هنا في المكان المناسب، حيث تقدم لك شركة الحل الأول للوساطة حلولا غير تقليدية تساهم بشكل غير مباشر في تحقيق أهدافك وطموحاتك.
            </br>
            التمويل العقاري اليوم في مجال العقارات، يعدُّ التمويل الإبداعي وسيلة غير تقليدية تهدف إلى تملك المستفيد للأراضي والعقارات أيا كان نوعها باستخدام أقل مبلغ من أمواله الخاصة، وفي هذه الحالة يستطيع المستثمر شراء العديد من العقارات دون أن يكون عدم امتلاكه رأس المال المناسب عائقا يحول دون ذلك.
            </br>
            وبناء على ذلك، يسعى فريق العمل في شركة الحل الأول للوساطة إلى ابتكار حلول التمويل العقاري لتمكين الأسر السعودية من امتلاك عقارات خاصة بهم تلائم احتياجاتهم وتحقق أهدافهم.
            </br>
            حقق حلم شراء عقار خاص بك مع شركة الحل الأول للوساطة هدفنا أولا وأخيرا هو تحقيق حلمك في امتلاك وحدات عقارية أيا كان نوعها سكنية، تجارية، إدارية، خدمية ولذا نعمل في حلول التمليك السكني والتجاري ونقدم لعملائنا مجموعة متكاملة من الخدمات من خلال فريق عمل مهني واحترافي متخصص بالتعاون مع جميع البنوك السعودية، وفقا لأحكام الشريعة الإسلامية، وتحت إشراف نخبة من العلماء والمتخصصين في مجال التمويل الإسلامي.
            </br>
            نضع خبراتنا بين يدي عملائنا لنواجه معا احتياجاتهم بأعلى جودة ممكنة في مجال الحلول تمويل العقارات والحلول الاستشارية لنحقق أعلى درجات الرضا، كما نضع نصب أعيننا المساهمة في النهوض بالقطاع العقاري في المملكة العربية السعودية بما يتوافق مع أحكام الشريعة الإسلامية.</p>',

        ];

        $description_en = [
            '<p>We can provide you with a helping hand in consolidating your financial obligations to be one installment for one party by guaranteeing the property. The process of consolidating multiple financial obligations with banks and financing companies in exchange for obtaining various types of loans allows you to facilitate the payment of loan installments by collecting them in one place at a competitive price and financial services. It is effective, such as speed in implementation, obtaining financial advice, and alleviating the burdens and difficulties of multiple obligations.
            </br>
            Knowing how to manage your debts is an essential skill you must have in developing a sound financial situation. Managing your financial obligations is not only about putting money aside for them, but also includes the logistics of bundling and paying your loans and bills separately to multiple banks. Sometimes you may also have to... Make payments multiple times a month, as your loans and bills will likely have different billing cycles.
            </br>
            While there are good reasons to do business at different banks, there are also good reasons to consolidate your financial obligations in just one place.</p>',

            '<p>If you are a property owner or have a mortgaged property, we have innovative solutions to obtain real estate financing in exchange for mortgaging the property, or to release the property mortgage and refinance to complete the construction of your property, or to purchase another property in easy monthly installments or from the property’s income.
            </br>
            Our company, First Solution Brokerage, provides the best solutions for obtaining real estate financing to purchase a new property to be invested to achieve profits and redeem the previous mortgage by facilitating obtaining convenient real estate loans from one of the banking institutions that we work with.
            </br>
            As it is known that the mortgaged property cannot be disposed of until all loan installments are returned to the bank, we at First Solution Brokerage Company provide you with the necessary financing to get rid of the mortgage in exchange for a small interest, which allows you to sell or complete construction of the property to benefit from renting it or starting a business. This will increase your profits and save you time.</p>',

            '<p>Self-construction financing is one of the financing solutions provided by Saudi banks in cooperation with the Real Estate Development Fund, through which the customer can obtain financing in exchange for mortgaging the residential land owned by him to the bank. He can also benefit from the benefits offered by the Real Estate Development Fund within a subsidized program, provided that The financing amount is paid to the customer in installments according to the construction stages or in one payment.
            </br>
            Own your property using real estate financing options
            In most cases, the financing period is 5 years - 25 years.
            </br>
            The financing amount is usually 250,000 Saudi riyals - 7,000,000 Saudi riyals.</p>',

            '<p>In this program, we offer you the best financing solutions to purchase the property you aspire to, whether the property is (completed - incomplete - residential building - commercial building - land - rest house) and in any region of the Kingdom of Saudi Arabia. The experience of the First Solution Brokerage Company and its strong relationships in various... Saudi investment banks, in addition to its expert staff to obtain the best real estate loan formulas to finance the purchase of the property you want, First Solution Brokerage Company has many solutions from which you can choose what suits you to finance the purchase of the property you are looking for in a short time and in comfortable installments according to your monthly income. Which makes you continue your life normally without having to reduce your expenses and your family’s expenses while remaining at the same standard of living and enjoying living in your own residence or starting your own business project on a property you own to avoid high rental expenses and related expenses with the possibility of benefiting from renting the property and obtaining a fixed monthly income. Especially if you choose the right location for the property.
            </br>
            One of the most prominent solutions to your problem is to search for sources of financing for the property you want to buy, as First Solution Brokerage Company provides you with many solutions to help you purchase the property represented by the home of your dreams or your commercial property to start your own business through its strong network of relationships with the strongest banks in the Kingdom of Saudi Arabia, such as Riyad Bank, Saudi Investment Bank, Albilad Bank, Arab Bank, Al Rajhi Bank and many other banks.</p>',

            '<p>Do you want to contract with a real estate financing company to achieve your dream of owning your own property? You are here in the right place, as First Solution Brokerage Company offers you unconventional solutions that indirectly contribute to achieving your goals and ambitions.
            </br>
            Real estate financing today in the field of real estate, creative financing is an unconventional means that aims to enable the beneficiary to own land and real estate of any type using the least amount of his own money. In this case, the investor can purchase many properties without his lack of appropriate capital being an obstacle to this. .
            </br>
            Accordingly, the work team at First Solution Brokerage Company seeks to innovate real estate financing solutions to enable Saudi families to own their own properties that suit their needs and achieve their goals.
            </br>
            Achieve the dream of buying your own property with First Solution Brokerage Company. Our goal, first and foremost, is to realize your dream of owning real estate units, whatever their type, residential, commercial, administrative, or service. Therefore, we work in residential and commercial ownership solutions and provide our customers with an integrated set of services through a professional and qualified work team. Specialized in cooperation with all Saudi banks, in accordance with the provisions of Islamic Sharia, and under the supervision of an elite group of scholars and specialists in the field of Islamic finance.
            </br>
            We put our expertise in the hands of our clients to meet their needs with the highest possible quality in the field of real estate financing and consulting solutions to achieve the highest levels of satisfaction. We also keep in mind contributing to the advancement of the real estate sector in the Kingdom of Saudi Arabia in accordance with the provisions of Islamic Sharia.</p>',

        ];

        $image = [
            '01.jpg',
            '02.jpg',
            '03.jpg',
            '04.jpg',
            '05.jpg',
        ];

        for ($i = 0; $i < count($title_ar); $i++) {
            $service = Service::create([
                'ar' => [
                    'title' => $title_ar[$i],
                    'description' => $description_ar[$i],

                ],
                'en' => [
                    'title' => $title_en[$i],
                    'description' => $description_en[$i],

                ],
                'status' => 1,

            ]);
            $service->file()->create([
                'path' => 'seeders/services/' . $image[$i],
                'type' => 'image'
            ]);
        }
    }
}
