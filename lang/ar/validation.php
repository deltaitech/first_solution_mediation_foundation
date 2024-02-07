<?php

/*
|--------------------------------------------------------------------------
| Validation Language Lines
|--------------------------------------------------------------------------
|
| The following language lines contain the default error messages used by
| the validator class. Some of these rules have multiple versions such
| as the size rules. Feel free to tweak each of these messages here.
|
*/

return [
    "accepted" => "يجب قبول :attribute.",
    "active_url" => "حقل :attribute لا يُمثّل رابطًا صحيحًا.",
    "after" => "يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.",
    "after_or_equal" =>
    "حقل :attribute يجب أن يكون تاريخاً لاحقاً أو مطابقاً للتاريخ :date.",
    "alpha" => "يجب أن لا يحتوي حقل :attribute سوى على حروف.",
    "alpha_dash" =>
    "يجب أن لا يحتوي حقل :attribute سوى على حروف، أرقام ومطّات.",
    "alpha_num" => "يجب أن يحتوي حقل :attribute على حروفٍ وأرقامٍ فقط.",
    "array" => "يجب أن يكون حقل :attribute ًمصفوفة.",
    "attached" => "حقل :attribute تم إرفاقه بالفعل.",
    "before" => "يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.",
    "before_or_equal" =>
    "حقل :attribute يجب أن يكون تاريخا سابقا أو مطابقا للتاريخ :date.",
    "between" => [
        "array" =>
        "يجب أن يحتوي حقل :attribute على عدد من العناصر بين :min و :max.",
        "file" =>
        "يجب أن يكون حجم ملف حقل :attribute بين :min و :max كيلوبايت.",
        "numeric" => "يجب أن تكون قيمة حقل :attribute بين :min و :max.",
        "string" => "يجب أن يكون عدد حروف نّص حقل :attribute بين :min و :max.",
    ],
    "boolean" => "يجب أن تكون قيمة حقل :attribute إما نعم أو لا .",
    "confirmed" => "حقل التأكيد غير مُطابق للحقل :attribute.",
    "current_password" => "كلمة المرور غير صحيحة.",
    "date" => "حقل :attribute ليس تاريخًا صحيحًا.",
    "date_equals" => "يجب أن يكون حقل :attribute مطابقاً للتاريخ :date.",
    "date_format" => "لا يتوافق حقل :attribute مع الشكل :format.",
    "different" => "يجب أن يكون الحقلان :attribute و :other مُختلفين.",
    "digits" => "يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام.",
    "digits_between" =>
    "يجب أن يحتوي حقل :attribute بين :min و :max رقمًا/أرقام .",
    "dimensions" => "الحقل:attribute يحتوي على أبعاد صورة غير صالحة.",
    "distinct" => "للحقل :attribute قيمة مُكرّرة.",
    "email" => "يجب أن يكون حقل :attribute عنوان بريد إلكتروني صحيح البُنية.",
    "ends_with" => "يجب أن ينتهي حقل :attribute بأحد القيم التالية: :values",
    "exists" => "القيمة المحددة :attribute غير موجودة.",
    "file" => "الحقل :attribute يجب أن يكون ملفا.",
    "filled" => "حقل :attribute إجباري.",
    "gt" => [
        "array" => "يجب أن يحتوي حقل :attribute على أكثر من :value عناصر/عنصر.",
        "file" => "يجب أن يكون حجم ملف حقل :attribute أكبر من :value كيلوبايت.",
        "numeric" => "يجب أن تكون قيمة حقل :attribute أكبر من :value.",
        "string" =>
        "يجب أن يكون طول نّص حقل :attribute أكثر من :value حروفٍ/حرفًا.",
    ],
    "gte" => [
        "array" =>
        "يجب أن يحتوي حقل :attribute على الأقل على :value عُنصرًا/عناصر.",
        "file" =>
        "يجب أن يكون حجم ملف حقل :attribute على الأقل :value كيلوبايت.",
        "numeric" =>
        "يجب أن تكون قيمة حقل :attribute مساوية أو أكبر من :value.",
        "string" =>
        "يجب أن يكون طول نص حقل :attribute على الأقل :value حروفٍ/حرفًا.",
    ],
    "image" => "يجب أن يكون حقل :attribute صورةً.",
    "in" => "حقل :attribute غير موجود.",
    "in_array" => "حقل :attribute غير موجود في :other.",
    "integer" => "يجب أن يكون حقل :attribute عددًا صحيحًا.",
    "ip" => "يجب أن يكون حقل :attribute عنوان IP صحيحًا.",
    "ipv4" => "يجب أن يكون حقل :attribute عنوان IPv4 صحيحًا.",
    "ipv6" => "يجب أن يكون حقل :attribute عنوان IPv6 صحيحًا.",
    "json" => "يجب أن يكون حقل :attribute نصًا من نوع JSON.",
    "lt" => [
        "array" => "يجب أن يحتوي حقل :attribute على أقل من :value عناصر/عنصر.",
        "file" => "يجب أن يكون حجم ملف حقل :attribute أصغر من :value كيلوبايت.",
        "numeric" => "يجب أن تكون قيمة حقل :attribute أصغر من :value.",
        "string" =>
        "يجب أن يكون طول نّص حقل :attribute أقل من :value حروفٍ/حرفًا.",
    ],
    "lte" => [
        "array" =>
        "يجب أن لا يحتوي حقل :attribute على أكثر من :value عناصر/عنصر.",
        "file" => "يجب أن لا يتجاوز حجم ملف حقل :attribute :value كيلوبايت.",
        "numeric" =>
        "يجب أن تكون قيمة حقل :attribute مساوية أو أصغر من :value.",
        "string" =>
        "يجب أن لا يتجاوز طول نّص حقل :attribute :value حروفٍ/حرفًا.",
    ],
    "max" => [
        "array" =>
        "يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.",
        "file" => "يجب أن لا يتجاوز حجم ملف حقل :attribute :max كيلوبايت.",
        "numeric" => "يجب أن تكون قيمة حقل :attribute مساوية أو أصغر من :max.",
        "string" => "يجب أن لا يتجاوز طول نّص حقل :attribute :max حروفٍ/حرفًا.",
    ],
    "mimes" => "يجب أن يكون ملفًا من نوع : :values.",
    "mimetypes" => "يجب أن يكون ملفًا من نوع : :values.",
    "min" => [
        "array" =>
        "يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر.",
        "file" => "يجب أن يكون حجم ملف حقل :attribute على الأقل :min كيلوبايت.",
        "numeric" => "يجب أن تكون قيمة حقل :attribute مساوية أو أكبر من :min.",
        "string" =>
        "يجب أن يكون طول نص حقل :attribute على الأقل :min حروفٍ/حرفًا.",
    ],
    "multiple_of" => "حقل :attribute يجب أن يكون من مضاعفات :value",
    "not_in" => "عنصر الحقل :attribute غير صحيح.",
    "not_regex" => "صيغة حقل :attribute غير صحيحة.",
    "numeric" => "يجب على حقل :attribute أن يكون رقمًا.",
    "password" => "كلمة المرور غير صحيحة.",
    "present" => "يجب تقديم حقل :attribute.",
    "prohibited" => "حقل :attribute محظور.",
    "prohibited_if" => "حقل :attribute محظور إذا كان :other هو :value.",
    "prohibited_unless" => "حقل :attribute محظور ما لم يكن :other ضمن :values.",
    "regex" => "صيغة حقل :attribute .غير صحيحة.",
    "relatable" => "حقل :attribute قد لا يكون مرتبطا بالمصدر المحدد.",
    "required" => "حقل :attribute مطلوب.",
    "required_if" =>
    "حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.",
    "required_unless" =>
    "حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.",
    "required_with" => "حقل :attribute مطلوب إذا توفّر :values.",
    "required_with_all" => "حقل :attribute مطلوب إذا توفّر :values.",
    "required_without" => "حقل :attribute مطلوب",
    "required_without_all" => "حقل :attribute مطلوب إذا لم يتوفّر :values.",
    "same" => "يجب أن يتطابق حقل :attribute مع :other.",
    "size" => [
        "array" => "يجب أن يحتوي حقل :attribute على :size عنصرٍ/عناصر بالضبط.",
        "file" => "يجب أن يكون حجم ملف حقل :attribute :size كيلوبايت.",
        "numeric" => "يجب أن تكون قيمة حقل :attribute مساوية لـ :size.",
        "string" =>
        "يجب أن يحتوي نص حقل :attribute على :size حروفٍ/حرفًا بالضبط.",
    ],
    "starts_with" => "يجب أن يبدأ حقل :attribute بأحد القيم التالية: :values",
    "string" => "يجب أن يكون حقل :attribute نصًا.",
    "timezone" => "يجب أن يكون حقل :attribute نطاقًا زمنيًا صحيحًا.",
    "unique" => "قيمة حقل :attribute مُستخدمة من قبل.",
    "uploaded" => "فشل في تحميل الـ :attribute.",
    "url" =>
    "صيغة رابط حقل :attribute غير صحيحة يجب أن اكون مثل https://www.domain.com",
    "uuid" => "حقل :attribute يجب أن يكون بصيغة UUID سليمة.",
    "custom" => [
        "attribute-name" => [
            "rule-name" => "custom-message",
        ],
    ],
    "attributes" => [
        "address" => "العنوان",
        "age" => "العمر",
        "available" => "مُتاح",
        "city" => "المدينة",
        "content" => "المُحتوى",
        "country" => "الدولة",
        "date" => "التاريخ",
        "day" => "اليوم",
        "description" => "الوصف",
        "email" => "البريد الالكتروني",
        "excerpt" => "المُلخص",
        "first_name" => "الاسم الأول",
        "gender" => "النوع",
        "hour" => "ساعة",
        "last_name" => "اسم العائلة",
        "minute" => "دقيقة",
        "mobile" => "الجوال",
        "month" => "الشهر",
        'name'                  => 'الاسم',
        "password" => "كلمة المرور",
        "password_confirmation" => "تأكيد كلمة المرور",
        "phone" => "الهاتف",
        "second" => "ثانية",
        "sex" => "الجنس",
        "size" => "الحجم",
        "time" => "الوقت",
        "title" => "العنوان",
        "username" => "اسم المُستخدم",
        "year" => "السنة",
        "image" => "الصورة",
        "permissions" => "الصلحيات",
        "message" => "الرسالة",
        "service" => "الحدمة",
        //        'en' => [
        //            'name' => 'الإسم باللغة الإنجليزية',
        //            'description' => 'الوصف باللغة الإنجليزية',
        //        ],
        //
        "slider_file" => [
            "*" => "إختيار الملف",
        ],
        "category_id" => "القائمة",
        "phone.0" => "الهاتف",
        "name_en" => "الإسم بالانجليزية",
        "name_ar" => "الإسم بالعربية",
        "manufacture_country_id" => "بلد التصنيع",
        "brand_id" => "العلامة التجارية",
        "country_id" => "الدولة",
        "city_id" => "المدينة",
        "area_id" => "المنطقة",
        "type" => "النوع",
        "color_name" => "إسم اللون بالإنجليزية",
        "color_name_ar" => "إسم اللون بالعربية",
        "color_code" => "كود اللون",
        "description_en" => "الوصف بالإنجليزية",
        "description_ar" => "الوصف بالعربية",
        "logo" => "اللوجو",
        "tax_number" => "رقم السجل",
        "year_founded" => "سنة التأسيس",
        "identifier" => "المعرف",
        "contact" => "وسيلة الإتصال",
        "social" => "رابط موقع تواصل إجتماعى",
        "link" => "الرابط",
        "video" => "الفيديو",
        "organization_name" => "إسم المنشأة",
        "falling_facility" => "الكيان القانوني للمنشأة",
        "what_falling_facility" => "ما هو الكيان القانوني لمنشأتك؟",
        "facility_have_financial" => "هل لدى المنشأة قوائم مالية؟",
        "does_facility_have_financial" => "هل لدى منشأتك قوائم مالية (ميزانيات) ؟",
        "financial_statements" => "القوائم المالية (الميزانيات)",
        "revenues" => "الإيرادات (المبيعات) في 2023",
        "notes" => "ملاحظات",
        'company' => "شركة",
        'organization' => "مؤسسة",
        'internal' => 'داخلية',
        'audited' => 'مدققة',
        'true' => 'نعم',
        'false' => 'لا',

        "ar" => [
            "title" => "العنوان باللغة العربية",
            "sub_title" => "العنوان الفرعي باللغة العربية",
            "description" => "الوصف باللغة العربية",
            "short_description" => "الوصف المختصر باللغة العربية",
            "address" => "العنوان باللغة العربية",
            "job_title" => "المسمى الوظيفي باللغة العربية",
            "copyrights " => "حقوق النشر باللغة العربية",
            "phone " => "الهاتف باللغة العربية",
            "email " => "البريد الإلكتروني باللغة العربية",
            "question" => "السؤال باللغة العربية",
            "answer" => "الإجابة باللغة العربية",
        ],

        "en" => [
            "title" => "العنوان باللغة الإنجليزية",
            "sub_title" => "العنوان الفرعي باللغة الإنجليزية",
            "description" => "الوصف باللغة الإنجليزية",
            "short_description" => "الوصف المختصر باللغة الإنجليزية",
            "address" => "العنوان باللغة الإنجليزية",
            "job_title" => "المسمى الوظيفي باللغة الإنجليزية",
            "copyrights" => "حقوق النشر باللغة الإنجليزية",
            "phone " => "الهاتف باللغة الإنجليزية",
            "email " => "البريد الإلكتروني باللغة الإنجليزية",
            "question" => "السؤال باللغة الإنجليزية",
            "answer" => "الإجابة باللغة الإنجليزية",
        ],
        "images" => "الصور",
    ],
    "insurance_amount" => "الحد التأميني",

];
