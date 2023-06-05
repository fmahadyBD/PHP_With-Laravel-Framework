<?php


namespace App\classes;


class News
{
    public $news=[],$data = [];

    public function __construct()
    {
        $this->news=[
            0=>[
                'id'            =>1,
                'cat-id'        =>1,
                'title'         =>"নিহতের সংখ্যা বেড়ে ২৩৩, ওডিশায় এক দিনের শোক",
                'image'         => '1.PNG',
                'sort-des'         =>'ভারতের ওডিশা রাজ্যে ভয়াবহ ট্রেন দুর্ঘটনায় নিহত মানুষের সংখ্যা বেড়ে হয়েছে ২৩৩। আহত হয়েছেন ৯০০ জনের বেশি। ট্রেনের ভেতর থেকে একের পর এক মরদেহ উদ্ধার করা হচ্ছে। ভেতরে আটকা পড়ে রয়েছেন অনেকেই। 
                                    তাই নিহত মানুষের সংখ্যা আরও বাড়তে পারে বলে আশঙ্কা করা হচ্ছে।
                                    রাজ্যে আজ শনিবার এক দিনের শোক ঘোষণা করেছেন ওডিশার মুখ্যমন্ত্রী নবীন পট্টনায়েক। দুর্ঘটনাস্থল পরিদর্শন করেছেন তিনি।
                                    গতকাল শুক্রবার সন্ধ্যা সাতটার দিকে ওডিশার বালাসোর জেলার বাহাঙ্গাবাজার এলাকায় এ দুর্ঘটনা ঘটে। ওডিশার মুখ্য সচিব প্রদীপ জেনা হতাহতের এ সংখ্যা জানিয়েছেন।',
                'des'           =>'জানা গেছে, কলকাতাগামী বেঙ্গালুরু-হাওড়া সুপারফাস্ট এক্সপ্রেস ট্রেনটি ওডিশার বাহাঙ্গাবাজার এলাকায় লাইনচ্যুত হয়ে পড়েছিল। 
                                    চেন্নাইগামী শালিমার–চেন্নাই সেন্ট্রাল করমন্ডল এক্সপ্রেস ট্রেনটি ওই এলাকা পেরিয়ে যাওয়ার সময় লাইনচ্যুত ট্রেনের বগির সঙ্গে সংঘর্ষ হয়।
                                    এতে ভয়াবহ দুর্ঘটনা ঘটে। এ সময় করমন্ডল এক্সপ্রেস ট্রেনটির কয়েকটি বগি একটি পণ্যবাহী ট্রেনের বগির ওপরও আছড়ে পড়ে।
                                    দুর্ঘটনার পর উদ্ধারকাজে নেমেছেন ভারতের ন্যাশনাল ডিজাস্টার রিলিফ ফোর্সের (এনডিআরএফ) সদস্যরা। রয়েছে ওডিশা ডিজাস্টার র‍্যাপিড অ্যাকশন ফোর্সও (ওডিআরএএফ)।
                                    এদিকে ভারতের কেন্দ্রীর রেলমন্ত্রী অশ্বিনী বৈষ্ণব টুইট করে জানিয়েছেন, উদ্ধারকাজে অংশ নেওয়ার জন্য ভারতীয় বিমানবাহিনীর 
                                    সহায়তা চাওয়া হয়েছে।

                                    দুর্ঘটনার পর পরিস্থিতি পর্যবেক্ষণ করছেন পশ্চিমবঙ্গের মুখ্যমন্ত্রী মমতা বন্দ্যোপাধ্যায়। এক টুইট বার্তায় তিনি বলেন, রাজ্যের ঊর্ধ্বতন
                                     কর্মকর্তাদের নিয়ে ঘটনা পর্যবেক্ষণ করছেন।
                                    
                                    দুর্ঘটনার খবরে দুঃখ প্রকাশ করেছেন ভারতের প্রধানমন্ত্রী নরেন্দ্র মোদি। তিনি টুইট করে বলেছেন, ওডিশায় ট্রেন দুর্ঘটনায় আমি মর্মাহত। 
                                    এই দুঃসময়ে শোকসন্তপ্ত পরিবারের প্রতি সমবেদনা জানাই। আহত ব্যক্তিরা দ্রুত সুস্থ হয়ে উঠুক। পরিস্থিতি নিয়ে রেলমন্ত্রী অশ্বিনী বৈষ্ণবের
                                     সঙ্গেও কথা বলেছি।'

            ],
            1=>[
                'id'            =>2,
                'cat-id'        =>1,
                'title'         =>"মঙ্গল গ্রহের পরিবেশে টানা ৫২০ দিন",
                'image'         => '2.PNG',
                'sort-des'        =>'বিশ্বে প্রতিদিন নানা ঘটনা-দুর্ঘটনা ঘটে। উদ্ভাবন-উন্মোচন ঘটে অনেক কিছুর। জন্ম ও মৃত্যু হয় অনেকের।
                                     তবে কিছু বিষয় দাগ কাটে মানুষের মনে, স্থায়ীভাবে ঠাঁই পায় ইতিহাসে। 
                                    তেমন কিছু বিষয় নিয়ে আমাদের নিয়মিত আয়োজন ‘ইতিহাসের এই দিনে’।
                                    
                                    আজ ৩ জুন। ফিরে দেখা যাক, উল্লেখযোগ্য কী ঘটেছিল এই দিনে। ‘অন দিস ডে: আ হিস্ট্রি অব দ্য ওয়ার্ল্ড ইন ৩৬৬ ডেজ’
                                     বই থেকে অনুবাদ করেছেন অনিন্দ্য সাইমুম।',
                'des'           =>'মঙ্গল গ্রহে বসবাসের অভিজ্ঞতা কেমন হবে? এ প্রশ্ন করলে বেশির ভাগ মানুষ হয়তো উত্তর দিতে পারবেন না।
                                 সে উত্তর খুঁজতেই এই দিনে মঙ্গলে বসবাসের অভিজ্ঞতা নিতে অভিযানে গিয়েছিলেন ছয় স্বেচ্ছাসেবী। এ জন্য রাশিয়ায়
                                 বিশেষ একটি চেম্বার তৈরি করা হয়। এই চেম্বারের ভেতরকার পরিবেশ একেবারে মঙ্গল গ্রহের মতোই।
                                
                                ২০১০ সালের এই দিনে চেম্বারে প্রবেশ করেন ওই ছয়জন। থাকেন টানা ৫২০ দিন। এই সময়ে বাইরের বিশ্বের সঙ্গে তাঁদের 
                                যোগাযোগ ছিল খুবই সামান্য। তাঁদের এই অভিযানের নাম ছিল মার্স-৫০০। মঙ্গলের পরিবেশ এই স্বেচ্ছাসেবীদের শরীরে কেমন প্রভাব ফেলে,
                                 বিজ্ঞানীরা সেটা পর্যবেক্ষণ করেন। এই পর্যবেক্ষণ ভবিষ্যতে মঙ্গলে অভিযানে কাজে লাগানো হবে।'

            ],
            2=>[
                'id'            =>3,
                'cat-id'        =>1,
                'title'         =>"মঙ্গল গ্রহের পরিবেশে টানা ৫২০ দিন",
                'image'         => '2.PNG',
                'sort-des'        =>'বিশ্বে প্রতিদিন নানা ঘটনা-দুর্ঘটনা ঘটে। উদ্ভাবন-উন্মোচন ঘটে অনেক কিছুর। জন্ম ও মৃত্যু হয় অনেকের।
                                     তবে কিছু বিষয় দাগ কাটে মানুষের মনে, স্থায়ীভাবে ঠাঁই পায় ইতিহাসে। 
                                    তেমন কিছু বিষয় নিয়ে আমাদের নিয়মিত আয়োজন ‘ইতিহাসের এই দিনে’।
                                    
                                    আজ ৩ জুন। ফিরে দেখা যাক, উল্লেখযোগ্য কী ঘটেছিল এই দিনে। ‘অন দিস ডে: আ হিস্ট্রি অব দ্য ওয়ার্ল্ড ইন ৩৬৬ ডেজ’
                                     বই থেকে অনুবাদ করেছেন অনিন্দ্য সাইমুম।',
                'des'           =>'মঙ্গল গ্রহে বসবাসের অভিজ্ঞতা কেমন হবে? এ প্রশ্ন করলে বেশির ভাগ মানুষ হয়তো উত্তর দিতে পারবেন না।
                                 সে উত্তর খুঁজতেই এই দিনে মঙ্গলে বসবাসের অভিজ্ঞতা নিতে অভিযানে গিয়েছিলেন ছয় স্বেচ্ছাসেবী। এ জন্য রাশিয়ায়
                                 বিশেষ একটি চেম্বার তৈরি করা হয়। এই চেম্বারের ভেতরকার পরিবেশ একেবারে মঙ্গল গ্রহের মতোই।
                                
                                ২০১০ সালের এই দিনে চেম্বারে প্রবেশ করেন ওই ছয়জন। থাকেন টানা ৫২০ দিন। এই সময়ে বাইরের বিশ্বের সঙ্গে তাঁদের 
                                যোগাযোগ ছিল খুবই সামান্য। তাঁদের এই অভিযানের নাম ছিল মার্স-৫০০। মঙ্গলের পরিবেশ এই স্বেচ্ছাসেবীদের শরীরে কেমন প্রভাব ফেলে,
                                 বিজ্ঞানীরা সেটা পর্যবেক্ষণ করেন। এই পর্যবেক্ষণ ভবিষ্যতে মঙ্গলে অভিযানে কাজে লাগানো হবে।'

            ],
            3=>[
                'id'            =>4,
                'cat-id'        =>1,
                'title'         =>"মঙ্গল গ্রহের পরিবেশে টানা ৫২০ দিন",
                'image'         => '2.PNG',
                'sort-des'        =>'বিশ্বে প্রতিদিন নানা ঘটনা-দুর্ঘটনা ঘটে। উদ্ভাবন-উন্মোচন ঘটে অনেক কিছুর। জন্ম ও মৃত্যু হয় অনেকের।
                                     তবে কিছু বিষয় দাগ কাটে মানুষের মনে, স্থায়ীভাবে ঠাঁই পায় ইতিহাসে। 
                                    তেমন কিছু বিষয় নিয়ে আমাদের নিয়মিত আয়োজন ‘ইতিহাসের এই দিনে’।
                                    
                                    আজ ৩ জুন। ফিরে দেখা যাক, উল্লেখযোগ্য কী ঘটেছিল এই দিনে। ‘অন দিস ডে: আ হিস্ট্রি অব দ্য ওয়ার্ল্ড ইন ৩৬৬ ডেজ’
                                     বই থেকে অনুবাদ করেছেন অনিন্দ্য সাইমুম।',
                'des'           =>'মঙ্গল গ্রহে বসবাসের অভিজ্ঞতা কেমন হবে? এ প্রশ্ন করলে বেশির ভাগ মানুষ হয়তো উত্তর দিতে পারবেন না।
                                 সে উত্তর খুঁজতেই এই দিনে মঙ্গলে বসবাসের অভিজ্ঞতা নিতে অভিযানে গিয়েছিলেন ছয় স্বেচ্ছাসেবী। এ জন্য রাশিয়ায়
                                 বিশেষ একটি চেম্বার তৈরি করা হয়। এই চেম্বারের ভেতরকার পরিবেশ একেবারে মঙ্গল গ্রহের মতোই।
                                
                                ২০১০ সালের এই দিনে চেম্বারে প্রবেশ করেন ওই ছয়জন। থাকেন টানা ৫২০ দিন। এই সময়ে বাইরের বিশ্বের সঙ্গে তাঁদের 
                                যোগাযোগ ছিল খুবই সামান্য। তাঁদের এই অভিযানের নাম ছিল মার্স-৫০০। মঙ্গলের পরিবেশ এই স্বেচ্ছাসেবীদের শরীরে কেমন প্রভাব ফেলে,
                                 বিজ্ঞানীরা সেটা পর্যবেক্ষণ করেন। এই পর্যবেক্ষণ ভবিষ্যতে মঙ্গলে অভিযানে কাজে লাগানো হবে।'

            ],
            4=>[
                'id'            =>5,
                'cat-id'        =>1,
                'title'         =>"মঙ্গল গ্রহের পরিবেশে টানা ৫২০ দিন",
                'image'         => '2.PNG',
                'sort-des'        =>'বিশ্বে প্রতিদিন নানা ঘটনা-দুর্ঘটনা ঘটে। উদ্ভাবন-উন্মোচন ঘটে অনেক কিছুর। জন্ম ও মৃত্যু হয় অনেকের।
                                     তবে কিছু বিষয় দাগ কাটে মানুষের মনে, স্থায়ীভাবে ঠাঁই পায় ইতিহাসে। 
                                    তেমন কিছু বিষয় নিয়ে আমাদের নিয়মিত আয়োজন ‘ইতিহাসের এই দিনে’।
                                    
                                    আজ ৩ জুন। ফিরে দেখা যাক, উল্লেখযোগ্য কী ঘটেছিল এই দিনে। ‘অন দিস ডে: আ হিস্ট্রি অব দ্য ওয়ার্ল্ড ইন ৩৬৬ ডেজ’
                                     বই থেকে অনুবাদ করেছেন অনিন্দ্য সাইমুম।',
                'des'           =>'মঙ্গল গ্রহে বসবাসের অভিজ্ঞতা কেমন হবে? এ প্রশ্ন করলে বেশির ভাগ মানুষ হয়তো উত্তর দিতে পারবেন না।
                                 সে উত্তর খুঁজতেই এই দিনে মঙ্গলে বসবাসের অভিজ্ঞতা নিতে অভিযানে গিয়েছিলেন ছয় স্বেচ্ছাসেবী। এ জন্য রাশিয়ায়
                                 বিশেষ একটি চেম্বার তৈরি করা হয়। এই চেম্বারের ভেতরকার পরিবেশ একেবারে মঙ্গল গ্রহের মতোই।
                                
                                ২০১০ সালের এই দিনে চেম্বারে প্রবেশ করেন ওই ছয়জন। থাকেন টানা ৫২০ দিন। এই সময়ে বাইরের বিশ্বের সঙ্গে তাঁদের 
                                যোগাযোগ ছিল খুবই সামান্য। তাঁদের এই অভিযানের নাম ছিল মার্স-৫০০। মঙ্গলের পরিবেশ এই স্বেচ্ছাসেবীদের শরীরে কেমন প্রভাব ফেলে,
                                 বিজ্ঞানীরা সেটা পর্যবেক্ষণ করেন। এই পর্যবেক্ষণ ভবিষ্যতে মঙ্গলে অভিযানে কাজে লাগানো হবে।'

            ],
            5=>[
                'id'            =>6,
                'cat-id'        =>1,
                'title'         =>"মঙ্গল গ্রহের পরিবেশে টানা ৫২০ দিন",
                'image'         => '2.PNG',
                'sort-des'        =>'বিশ্বে প্রতিদিন নানা ঘটনা-দুর্ঘটনা ঘটে। উদ্ভাবন-উন্মোচন ঘটে অনেক কিছুর। জন্ম ও মৃত্যু হয় অনেকের।
                                     তবে কিছু বিষয় দাগ কাটে মানুষের মনে, স্থায়ীভাবে ঠাঁই পায় ইতিহাসে। 
                                    তেমন কিছু বিষয় নিয়ে আমাদের নিয়মিত আয়োজন ‘ইতিহাসের এই দিনে’।
                                    
                                    আজ ৩ জুন। ফিরে দেখা যাক, উল্লেখযোগ্য কী ঘটেছিল এই দিনে। ‘অন দিস ডে: আ হিস্ট্রি অব দ্য ওয়ার্ল্ড ইন ৩৬৬ ডেজ’
                                     বই থেকে অনুবাদ করেছেন অনিন্দ্য সাইমুম।',
                'des'           =>'মঙ্গল গ্রহে বসবাসের অভিজ্ঞতা কেমন হবে? এ প্রশ্ন করলে বেশির ভাগ মানুষ হয়তো উত্তর দিতে পারবেন না।
                                 সে উত্তর খুঁজতেই এই দিনে মঙ্গলে বসবাসের অভিজ্ঞতা নিতে অভিযানে গিয়েছিলেন ছয় স্বেচ্ছাসেবী। এ জন্য রাশিয়ায়
                                 বিশেষ একটি চেম্বার তৈরি করা হয়। এই চেম্বারের ভেতরকার পরিবেশ একেবারে মঙ্গল গ্রহের মতোই।
                                
                                ২০১০ সালের এই দিনে চেম্বারে প্রবেশ করেন ওই ছয়জন। থাকেন টানা ৫২০ দিন। এই সময়ে বাইরের বিশ্বের সঙ্গে তাঁদের 
                                যোগাযোগ ছিল খুবই সামান্য। তাঁদের এই অভিযানের নাম ছিল মার্স-৫০০। মঙ্গলের পরিবেশ এই স্বেচ্ছাসেবীদের শরীরে কেমন প্রভাব ফেলে,
                                 বিজ্ঞানীরা সেটা পর্যবেক্ষণ করেন। এই পর্যবেক্ষণ ভবিষ্যতে মঙ্গলে অভিযানে কাজে লাগানো হবে।'

            ],
            6=>[
                'id'            =>7,
                'cat-id'        =>1,
                'title'         =>"মঙ্গল গ্রহের পরিবেশে টানা ৫২০ দিন",
                'image'         => '2.PNG',
                'sort-des'        =>'বিশ্বে প্রতিদিন নানা ঘটনা-দুর্ঘটনা ঘটে। উদ্ভাবন-উন্মোচন ঘটে অনেক কিছুর। জন্ম ও মৃত্যু হয় অনেকের।
                                     তবে কিছু বিষয় দাগ কাটে মানুষের মনে, স্থায়ীভাবে ঠাঁই পায় ইতিহাসে। 
                                    তেমন কিছু বিষয় নিয়ে আমাদের নিয়মিত আয়োজন ‘ইতিহাসের এই দিনে’।
                                    
                                    আজ ৩ জুন। ফিরে দেখা যাক, উল্লেখযোগ্য কী ঘটেছিল এই দিনে। ‘অন দিস ডে: আ হিস্ট্রি অব দ্য ওয়ার্ল্ড ইন ৩৬৬ ডেজ’
                                     বই থেকে অনুবাদ করেছেন অনিন্দ্য সাইমুম।',
                'des'           =>'মঙ্গল গ্রহে বসবাসের অভিজ্ঞতা কেমন হবে? এ প্রশ্ন করলে বেশির ভাগ মানুষ হয়তো উত্তর দিতে পারবেন না।
                                 সে উত্তর খুঁজতেই এই দিনে মঙ্গলে বসবাসের অভিজ্ঞতা নিতে অভিযানে গিয়েছিলেন ছয় স্বেচ্ছাসেবী। এ জন্য রাশিয়ায়
                                 বিশেষ একটি চেম্বার তৈরি করা হয়। এই চেম্বারের ভেতরকার পরিবেশ একেবারে মঙ্গল গ্রহের মতোই।
                                
                                ২০১০ সালের এই দিনে চেম্বারে প্রবেশ করেন ওই ছয়জন। থাকেন টানা ৫২০ দিন। এই সময়ে বাইরের বিশ্বের সঙ্গে তাঁদের 
                                যোগাযোগ ছিল খুবই সামান্য। তাঁদের এই অভিযানের নাম ছিল মার্স-৫০০। মঙ্গলের পরিবেশ এই স্বেচ্ছাসেবীদের শরীরে কেমন প্রভাব ফেলে,
                                 বিজ্ঞানীরা সেটা পর্যবেক্ষণ করেন। এই পর্যবেক্ষণ ভবিষ্যতে মঙ্গলে অভিযানে কাজে লাগানো হবে।'

            ],


        ];
    }

    public function getAllNews()
    {
        return $this->news;
    }

    public function getnewsById($id)
    {
        foreach ($this->news as $newses)
        {
            if($newses['id'] == $id)
            {
                return $newses;
            }
        }
    }
}