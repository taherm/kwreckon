<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('services')->delete();
        
        \DB::table('services')->insert(array (
            0 => 
            array (
                'menu_id' => 2,
                'id' => 2,
                'title_en' => 'Bookkeeping And Accounting Management Services',
                'title_ar' => 'خدمات المحاسبة والادارة المالية',
                'description_en' => '<div class="container" style="box-sizing: border-box; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto; width: 1170px; color: #777777; font-family: Lato, sans-serif; font-size: 15px;">
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: black; text-align: justify; font-size: 18px; line-height: 30px;">Whether you are launching a startup of small business or already run an established business, Reckon can offer you a convenient bookkeeping solution. We provide you with easy access to qualified accounting professionals without you ever having to hire them. Even if you own an established business and your in-house bookkeeper is not sufficiently qualified or is unable to keep pace with the work flow, we can provide efficient bookkeeping solutions at cost-effective rates.</p>
</div>
<p>&nbsp;</p>
<div class="container" style="box-sizing: border-box; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto; width: 1170px; color: #777777; font-family: Lato, sans-serif; font-size: 15px;">
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #5ea7da; font-size: 18px; font-weight: bold;">Our Bookkeeping and Accounting services include the following:</p>
<ul style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: black; font-size: 18px; line-height: 30px;">
<li style="box-sizing: border-box;">Accounts Payable Management (Vendor Bills and Payments)</li>
<li style="box-sizing: border-box;">Accounts Receivable Management (Customer Invoices and Collections)</li>
<li style="box-sizing: border-box;">Bank Reconciliations</li>
<li style="box-sizing: border-box;">Revenue Reconciliation with Bank Deposits</li>
<li style="box-sizing: border-box;">Preparing Chart of Accounts</li>
<li style="box-sizing: border-box;">Fixed Assets</li>
<li style="box-sizing: border-box;">General Ledger</li>
<li style="box-sizing: border-box;">Help in creating accounting procedures</li>
<li style="box-sizing: border-box;">Working with Professionals (External Auditor, Banker, Attorney etc.)</li>
<li style="box-sizing: border-box;">Preparing Financial Statements</li>
<li style="box-sizing: border-box;">Preparing Adjusted Trial Balance</li>
</ul>
</div>',
                'description_ar' => '<p style="box-sizing: border-box; margin: 0px 0px 10px; font-family: Lato, sans-serif; text-align: right; font-size: 18px; line-height: 30px;">سواء كنت على وشك إطلاق أحد المشاريع الصغيرة أو كنت تدير حاليا أحد الأعمال التجارية ، شركة ريكين تقدم لك خدمات إعداد وحفظ السجلات المحاسبية . نحن نوفر لك المهنيين المؤهلين في مجال المحاسبة دون الحاجة إلى توظيفهم. حتى لو كان يتوفر لديك محاسب ولكنه غير مؤهل بما فيه الكفاية أو غير قادر على مواكبة حجم الأنشطة وتدفق العمل ، بإمكاننا توفير خدمات إعداد وحفظ السجلات المحاسبية بشكل فعال وبأسعار مناسبة .</p>
<p>&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; font-family: Lato, sans-serif; text-align: right; color: #5ea7da; font-size: 18px; line-height: 30px;">تشمل خدمات إعداد وحفظ السجلات المحاسبية ما يلي:</p>
<ul style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; font-family: Lato, sans-serif; font-size: 18px; line-height: 30px;">
<li style="box-sizing: border-box;">إدارة الحسابات الدائنة (فواتير الموردين والمدفوعات)</li>
<li style="box-sizing: border-box;">إدارة الحسابات المدينة (فواتير العملاء والتحصيل)</li>
<li style="box-sizing: border-box;">التسويات البنكية</li>
<li style="box-sizing: border-box;">مطابقة الإيرادات مع الإيداعات البنكية</li>
<li style="box-sizing: border-box;">إعداد دليل الحسابات</li>
<li style="box-sizing: border-box;">الأصول الثابتة</li>
<li style="box-sizing: border-box;">دفتر الأستاذ العام</li>
<li style="box-sizing: border-box;">المساعدة في إعداد الإجراءات المحاسبية</li>
<li style="box-sizing: border-box;">العمل مع المهنيين (مراجع الحسابات الخارجي ، البنوك، المحاميين الخ)</li>
<li style="box-sizing: border-box;">إعداد القوائم المالية</li>
<li style="box-sizing: border-box;">إعداد ميزان المراجعة المعدل</li>
</ul>',
                'image' => 'cef0508632c8fad5bfd0b368a18122b9.jpg',
                'created_at' => '2018-06-12 19:00:44',
                'updated_at' => '2018-06-12 19:00:44',
            ),
            1 => 
            array (
                'menu_id' => 2,
                'id' => 3,
                'title_en' => 'Financial Analysis Services',
                'title_ar' => 'خدمات التحليل المالي',
                'description_en' => '<div class="container" style="box-sizing: border-box; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto; width: 1170px; color: #777777; font-family: Lato, sans-serif; font-size: 15px;">
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: black; text-align: justify; font-size: 18px; line-height: 30px;">Financial Ratios Analysis is a way of determining the health of a business. Just as a doctor might take your pulse, temperature and blood pressure to give information on your health, we use Financial Ratios Analysis to identify weaknesses of your business.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: black; text-align: justify; font-size: 18px; line-height: 30px;">Financial Ratios Analysis is an important tool for small business owners to measure progress toward reaching their business goals, as well as toward competing in the market. Financial Ratios Analysis is a useful tool that will provide key indicators of your business performance. Business owners use Financial Ratios Analysis to identify weaknesses from which corrective action can be taken.</p>
</div>
<p>&nbsp;</p>
<div class="container" style="box-sizing: border-box; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto; width: 1170px; color: #777777; font-family: Lato, sans-serif; font-size: 15px;">
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #5ea7da; font-size: 18px; font-weight: bold;">The ratios presented below represent some of the standard ratios used in business practice. We can also develop your own ratios and indicators based on what you consider important and meaningful to your business and industry:</p>
<ul style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: black; font-size: 18px; line-height: 30px;">
<li style="box-sizing: border-box;"><span style="box-sizing: border-box; font-weight: bold; color: #5ea7da;">Operational Efficiency Ratios</span>&nbsp;<br style="box-sizing: border-box;" />How efficiently are you utilizing your assets and managing your liabilities?</li>
</ul>
<ul style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: black; font-size: 18px; line-height: 30px;">
<li style="box-sizing: border-box;"><span style="box-sizing: border-box; font-weight: bold; color: #5ea7da;">Profitability Ratios</span>&nbsp;<br style="box-sizing: border-box;" />How well is your business performing over a specific period?</li>
</ul>
<ul style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: black; font-size: 18px; line-height: 30px;">
<li style="box-sizing: border-box;"><span style="box-sizing: border-box; font-weight: bold; color: #5ea7da;">Liquidity Ratios</span>&nbsp;<br style="box-sizing: border-box;" />Does your business have enough cash on an ongoing basis to meet its operational obligations?</li>
</ul>
</div>',
                'description_ar' => '<p style="box-sizing: border-box; margin: 0px 0px 10px; font-family: Lato, sans-serif; text-align: right; font-size: 18px; line-height: 30px;">تحليل النسب المالية هو وسيلة لتحديد مدى نجاح الأعمال. وكما أن الطبيب عند تشخيص حالتك الصحية يقوم بقياس نبضات القلب ودرجة الحرارة وضغط الدم ، ونحن نستخدم تحليل النسب المالية لتحديد نقاط الضعف في مشروعك التجاري.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; font-family: Lato, sans-serif; text-align: right; font-size: 18px; line-height: 30px;">تحليل النسب المالية هو أداة هامة لأصحاب الأعمال الصغيرة لقياس التقدم المحرز نحو تحقيق أهداف أعمالهم، وكذلك نحو المنافسة في السوق. تحليل النسب المالية هو أداة مفيدة من شأنها أن تزودنا بالمؤشرات الرئيسية عن أداء مشروعك التجاري، كما يستخدم أصحاب الأعمال تحليل النسب المالية لتحديد نقاط الضعف التي يمكن من خلالها اتخاذ الإجراءات التصحيحية.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; font-family: Lato, sans-serif; text-align: right; color: #5ea7da; font-size: 18px; line-height: 30px;">النسب الواردة أدناه تمثل بعض النسب الرئيسية المستخدمة في الأعمال التجارية ، كما يمكننا أيضا تطوير النسب والمؤشرات الخاصة بك بناء على نظرتك المتعلقة بمشروعك التجاري والسوق الذي تعمل به :</p>
<ul style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; font-family: Lato, sans-serif; text-align: right; font-size: 18px; line-height: 30px;">
<li style="box-sizing: border-box;">
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #5ea7da;">نسب الكفاءة التشغيلية</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px;">تقيس تلك النسبة مدى فعالية استخدامك للأصول وإدارة إلتزاماتك المرتبطة بمشروعك التجاري؟</p>
</li>
</ul>
<ul style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #777777; font-family: Lato, sans-serif; font-size: 15px;">
<li style="box-sizing: border-box; text-align: right; color: black; font-size: 18px; line-height: 30px;">
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #5ea7da;">معدلات الربح</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px;">تقيس تلك النسبة مدى نجاح أداء مشروعك التجاري على مدى فترة معينة؟</p>
</li>
</ul>
<ul style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #777777; font-family: Lato, sans-serif; font-size: 15px;">
<li style="box-sizing: border-box; text-align: right; color: black; font-size: 18px; line-height: 30px;">
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #5ea7da;">نسب السيولة</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px;">تقيس تلك النسبة مدى كفاية النقدية على أساس مستمر للوفاء بالألتزامات التشغيلية لمشروعك التجاري؟</p>
</li>
</ul>',
                'image' => 'efcba7a47bb2aee95368237bb71d9fec.jpg',
                'created_at' => '2018-06-12 19:01:56',
                'updated_at' => '2018-06-12 19:01:56',
            ),
            2 => 
            array (
                'menu_id' => 2,
                'id' => 4,
                'title_en' => 'Financial Planning Services',
                'title_ar' => 'خدمات التخطيط المالي',
                'description_en' => '<div class="container" style="box-sizing: border-box; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto; width: 1170px; color: #777777; font-family: Lato, sans-serif; font-size: 15px;">
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: black; text-align: justify; font-size: 18px; line-height: 30px;">Financial planning is at the heart of every successful business. A financial plan, which includes detailed financial statements and projections, forms the core of your overall business plan. Your business will only be as strong as its financial plan.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: black; text-align: justify; font-size: 18px; line-height: 30px;">We will develop your business financial plan to help you build a stronger financial position. Developing your business financial plan can also help you strengthen your business operation.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: black; text-align: justify; font-size: 18px; line-height: 30px;">Our financial planners will work closely with you to understand your objectives while reviewing all of your options thoroughly. We simplify the process and work as your partner to develop your financial plan. With valued advice and an expert&rsquo;s touch, we can help you reach your business goals.</p>
</div>
<p>&nbsp;</p>
<div class="container" style="box-sizing: border-box; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto; width: 1170px; color: #777777; font-family: Lato, sans-serif; font-size: 15px;">
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #5ea7da; font-size: 18px; font-weight: bold;">Your financial plan will include:</p>
<ul style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: black; font-size: 18px; line-height: 30px;">
<li style="box-sizing: border-box;">Start-up costs, if you are starting a new business</li>
<li style="box-sizing: border-box;">Cash flow projections</li>
<li style="box-sizing: border-box;">Projected balance sheets and income statements</li>
<li style="box-sizing: border-box;">A break-even analysis</li>
</ul>
</div>',
                'description_ar' => '<p style="box-sizing: border-box; margin: 0px 0px 10px; font-family: Lato, sans-serif; text-align: right; font-size: 18px; line-height: 30px;">التخطيط المالي هو الركن الأساسي لأي عمل تجاري ناجح . الخطة المالية تتضمن بيانات مالية وتوقعات تفصيلية ، وهي تشكل أساس خطة العمل العامة لمشروعك التجاري. سنعمل على إعداد خطة مالية لمشروعك التجاري لمساعدتك في بناء وضع مالي أقوى.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; font-family: Lato, sans-serif; text-align: right; font-size: 18px; line-height: 30px;">سوف نعمل بشكل وثيق معكم لفهم أهدافكم ومراجعة جميع الخيارات المتاحة بدقة ، سنعمل كشركاء لإعداد الخطة المالية الخاصة بمشروعكم التجاري. مع الإستشارة ذات القيمة ومساهمة خبرائنا ، فبإمكاننا أن نساعدكم في تحقيق أهداف مشاريعكم التجارية</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; font-family: Lato, sans-serif; color: #5ea7da; font-size: 18px; line-height: 30px; text-align: right; font-weight: bold;">ستتضمن الخطة المالية:</p>
<ul style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #777777; font-family: Lato, sans-serif; font-size: 15px;">
<li style="box-sizing: border-box; text-align: right; line-height: 30px; color: black; font-size: 18px;">تكاليف بدء التشغيل ، إذا كنت بصدد بدء مشروع تجاري جديد</li>
<li style="box-sizing: border-box; text-align: right; line-height: 30px; color: black; font-size: 18px;">توقعات التدفقات النقدية</li>
<li style="box-sizing: border-box; text-align: right; line-height: 30px; color: black; font-size: 18px;">قائمة الدخل والمركز المالي المتوقعة</li>
</ul>',
                'image' => '3345baecdf3d11336be1f8dde73f207c.jpg',
                'created_at' => '2018-06-12 19:02:59',
                'updated_at' => '2018-06-12 19:02:59',
            ),
            3 => 
            array (
                'menu_id' => 2,
                'id' => 5,
                'title_en' => 'Feasibility Studies Services',
                'title_ar' => 'خدمات إعداد دراسة الجدوى الإقتصادية',
                'description_en' => '<div class="container" style="box-sizing: border-box; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto; width: 1170px; color: #777777; font-family: Lato, sans-serif; font-size: 15px;">
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: black; text-align: justify; font-size: 18px; line-height: 30px;">The feasibility study focuses on helping answer the essential question of &ldquo;should we proceed with the proposed project idea?&rdquo; All activities of the study are directed toward helping answer this question.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: black; text-align: justify; font-size: 18px; line-height: 30px;">Feasibility studies is an analysis and evaluation of your proposed project to determine if it is technically feasible, is feasible within the estimated cost, and will be profitable.</p>
</div>
<p>&nbsp;</p>
<div class="container" style="box-sizing: border-box; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto; width: 1170px; color: #777777; font-family: Lato, sans-serif; font-size: 15px;">
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #5ea7da; font-size: 18px; font-weight: bold;">Reckon deploys three main components for feasibility studies</p>
<ul style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: black; font-size: 18px; line-height: 30px;">
<li style="box-sizing: border-box;">Market Analysis: This includes a study of the industry, present market, projected market potential, sales, competition, and potential buyers. Understanding market potential gives businesses insight into the demand for their product or service.</li>
<li style="box-sizing: border-box;">Financial Analysis: It establishes how much start-up capital is required, sources of capital, returns on investments, and other financial estimates such as gross profit margins and net income</li>
<li style="box-sizing: border-box;">Technical Analysis: It analyses the materials, transportation, labor, location, technology required, and other factors related to the product or service</li>
</ul>
</div>',
                'description_ar' => '<p style="box-sizing: border-box; margin: 0px 0px 10px; font-family: Lato, sans-serif; text-align: right; font-size: 18px; line-height: 30px;">تركز دراسة الجدوى الإقتصادية للمساعدة في الإجابة على السؤال الأساسي &ldquo;هل يجب علينا المضي قدما في فكرة المشروع المقترح؟&rdquo; حيث توجه جميع أنشطة الدراسة نحو المساعدة في الإجابة على هذا السؤال.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; font-family: Lato, sans-serif; text-align: right; font-size: 18px; line-height: 30px;">دراسات الجدوى هو تحليل وتقييم المشاريع المقترحة لتحديد ما إذا كان من الممكن من الناحية الفنية تنفيذ المشروع بالتكلفة المقدرة وما إذا كان ذلك سيؤدي إلى أرباح تعود على أصحاب المشروع .</p>
<p>&nbsp;</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; font-family: Lato, sans-serif; text-align: right; color: #5ea7da; font-size: 18px; line-height: 30px; font-weight: bold;">شركة ريكين تتناول ثلاثة عناصر رئيسية لدراسات الجدوى:</p>
<ul style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; font-family: Lato, sans-serif; text-align: right; font-size: 18px; line-height: 30px;">
<li style="box-sizing: border-box;">تحليل السوق: يشمل هذا التحليل دراسة للصناعة أو القطاع والسوق الحالية وفرص السوق المتوقعة والمبيعات والمنافسة للعملاء المحتملين . فهم فرص السوق يقدم للمشاريع التجارية نظرة ثاقبة عن الطلب على المنتج أو الخدمة.</li>
<li style="box-sizing: border-box;">التحليل المالي: يدرس هذا التحليل حجم رأس المال المطلوب للبدأ بالمشروع التجاري ومصادر رأس المال والعائد على الإستثمار ، والتقديرات المالية الأخرى مثل هامش الربح الإجمالي وصافي الدخل.</li>
<li style="box-sizing: border-box;">التحليل الفني: يدرس هذا التحليل المواد المستخدمة في المشروع التجاري والنقل والأيدي العاملة والموقع والتكنولوجيا المطلوبة وغيرها من العوامل ذات الصلة للمنتج أو الخدمة.</li>
</ul>',
                'image' => 'acee60356bf07b9ca0ddf3c2007b9c99.jpg',
                'created_at' => '2018-06-12 19:04:02',
                'updated_at' => '2018-06-12 19:04:02',
            ),
            4 => 
            array (
                'menu_id' => 2,
                'id' => 6,
                'title_en' => 'CFO Services',
                'title_ar' => 'خدمات المستشار المالي',
                'description_en' => '<div class="container" style="box-sizing: border-box; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto; width: 1170px; color: #777777; font-family: Lato, sans-serif; font-size: 15px;">
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: black; text-align: justify; font-size: 18px; line-height: 30px;">Successful business owners are expected to take critical decisions directly impacting the success of the business. Growth initiatives, resource allocation, cost management, cash-flow management, all of this is a daunting task.</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: black; text-align: justify; font-size: 18px; line-height: 30px;">With such a broad scope of responsibility and increased complexity in navigating today&rsquo;s business environment, business owners call Reckon when they need independent advice from professionals who understand these challenges, having faced them and implemented, first-hand, solutions to similar problems. At Reckon, we have assembled a team of expertise, CFOs and others experienced in finance operations to provide objective guidance for critical decisions impacting business.</p>
</div>
<p>&nbsp;</p>
<div class="container" style="box-sizing: border-box; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto; width: 1170px; color: #777777; font-family: Lato, sans-serif; font-size: 15px;">
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #5ea7da; font-size: 18px; font-weight: bold;">Business Owners calls us when :</p>
<ul style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;">
<li style="box-sizing: border-box; color: black; font-size: 18px; line-height: 30px;">They have never had a formal strategic planning process and need assistance in facilitating the process with the business owner.</li>
<li style="box-sizing: border-box; color: black; font-size: 18px; line-height: 30px;">They have multiple, uncoordinated business initiatives and want an objective opinion about how to manage them.</li>
<li style="box-sizing: border-box; color: black; font-size: 18px; line-height: 30px;">They are experiencing liquidity risks and would like guidance to better manage cash flow and working capital.</li>
<li style="box-sizing: border-box; color: black; font-size: 18px; line-height: 30px;">They suspect fraud and/or embezzlement due to accounting irregularities and want to understand the steps they need to take to prove or disprove their suspicions.</li>
<li style="box-sizing: border-box; color: black; font-size: 18px; line-height: 30px;">They want to understand what benchmarks and metrics are available and relevant for measuring performance against their peers.</li>
<li style="box-sizing: border-box; color: black; font-size: 18px; line-height: 30px;">They need improvement in finance and accounting processes such as level of automation, degree of standardization, cycle times and quality and controls.</li>
<li style="box-sizing: border-box; color: black; font-size: 18px; line-height: 30px;">They are considering functional organization shifts or different operating models to improve the delivery of services and products or reduce the expenditure.</li>
<li style="box-sizing: border-box; color: black; font-size: 18px; line-height: 30px;">They are implementing fundamental structural change in the business due to a merger, acquisition, joint venture or other legal entity change.</li>
<li style="box-sizing: border-box; color: black; font-size: 18px; line-height: 30px;">They have identified weaknesses in their internal controls.</li>
</ul>
</div>',
                'description_ar' => '<div class="container" style="box-sizing: border-box; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto; width: 1170px; color: #777777; font-family: Lato, sans-serif; font-size: 15px;">
<p style="box-sizing: border-box; margin: 0px 0px 10px; text-align: right; color: black; font-size: 18px; line-height: 30px;">أصحاب الأعمال التجارية الناجحة يتخذون قرارات حاسمة تؤثر تأثيرا مباشرا في نجاح أعمالهم . إن مبادرات النمو في المشروع التجاري وتوجيه الموارد وإدارة التكاليف وإدارة التدفقات النقدية ، كل ذلك يشكل مهمة شاقة على أصحاب المشاريع .</p>
<p style="box-sizing: border-box; margin: 0px 0px 10px; text-align: right; color: black; font-size: 18px; line-height: 30px;">مع مثل هذا النطاق الواسع من المسؤولية وزيادة الأعباء في بيئة الأعمال اليوم ، يمكن لأصحاب المشاريع التجارية الإستعانة بشركة ريكين عند الحاجة إلى المشورة الموضوعية من المهنيين الذين يعون هذه التحديات ، من خلال خبرتهم بالتعامل ومواجهة تحديات مماثلة وأوجدوا الحلول المناسبة لها مع مشاريع وعملاء آخرين. في شركة ريكين قمنا بتشكيل فريق من الخبرات والمدراء الماليين وغيرهم من ذوي الخبرة في مجال المحاسبة والمالية لتوفير التوجيه الموضوعي للقرارات الحاسمة ذات التأثير الجوهري على الأعمال والمشاريع التجارية.</p>
</div>
<p>&nbsp;</p>
<div class="container" style="box-sizing: border-box; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto; width: 1170px; color: #777777; font-family: Lato, sans-serif; font-size: 15px;">
<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #5ea7da; font-size: 18px; font-weight: bold;">بإمكان أصحاب الأعمال والمشاريع التجارية الإستعانة بنا في الحالات التالية:</p>
<ul style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px;">
<li style="box-sizing: border-box; text-align: right; color: black; font-size: 18px; line-height: 30px;">إن لم يكن لديهم خطة إستراتيجيةمعدة بطريقة إحترافية وبحاجة إلى المساعدة في إعدادها بالتنسيق مع مدير المشروع.</li>
<li style="box-sizing: border-box; text-align: right; color: black; font-size: 18px; line-height: 30px;">إن كان لديهم أهداف متعددة غير متسقة أو مترابطة ويرغبون في رأي موضوعي حول كيفية إدارتها .</li>
<li style="box-sizing: border-box; text-align: right; color: black; font-size: 18px; line-height: 30px;">إن كانوا يواجهون مخاطر السيولة وبحاجة إلى توجيه لإدارة التدفق النقدي ورأس المال العامل بشكل أفضل.</li>
<li style="box-sizing: border-box; text-align: right; color: black; font-size: 18px; line-height: 30px;">إن كان لديهم شبهات بوجود إحتيال أو إختلاس بسبب مخالفات محاسبية ويودون معرفة الخطوات التي يجب إتخاذها لإثبات أو دحض تلك الشبهات.</li>
<li style="box-sizing: border-box; text-align: right; color: black; font-size: 18px; line-height: 30px;">إن كانوا يريدون التعرف على المعايير والمقاييس ذات الصلة لقياس الأداء بالمقارنة مع منافسيهم في السوق.</li>
<li style="box-sizing: border-box; text-align: right; color: black; font-size: 18px; line-height: 30px;">إن كانوا بحاجة الى تحسين في العمليات المالية والمحاسبية مثل مستوى الحاجة إلى إستخدام الأنظمة الآلية ومستوى توحيد السياسات والإنظمة وتطوير الدورة المستندية والجودة والرقابة.</li>
<li style="box-sizing: border-box; text-align: right; color: black; font-size: 18px; line-height: 30px;">إن كانوا بحاجة إلى إعادة هيكلة أو إعادة تنظيم بعض الوظائف أو الأقسام أو خطوط الإنتاج بهدف تحسين الخدمات والمنتجات أو تخفيض المصاريف.</li>
<li style="box-sizing: border-box; text-align: right; color: black; font-size: 18px; line-height: 30px;">إن كانوا بصدد تبني وتطبيق تغيير أساسي في الهيكل التنظيمي نتيجة الإندماج أو الإستحواذ أو المشاريع المشتركة أو غيرها من تغيير الكيان القانوني.</li>
<li style="box-sizing: border-box; text-align: right; color: black; font-size: 18px; line-height: 30px;">إن إكتشفوا نقاط ضعف في الضوابط أو أنظمة الرقابة الداخلية.</li>
</ul>
</div>',
                'image' => '84ead84b6bb94273bf03d6757dcc98c8.jpg',
                'created_at' => '2018-06-12 19:04:59',
                'updated_at' => '2018-06-12 19:04:59',
            ),
        ));
        
        
    }
}