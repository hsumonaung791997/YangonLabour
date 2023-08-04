## Project Name

Yangon Regional Government

## Project Description

Investigation system for factories in Yangon Region. The system can do the registration, investigation and reporting in step by step process. And generating the reports with PDF format that generate according to the requirement of government in-office format.

## Project Functional

* Factory Registration
	- Controller: app/Http/controllers/FactoryController.php
	- Model: app/Factory.php
	- Route: factories
	- Related Table: factories

* ပိတ်သိမ်းထားသော စက်ရုံအလုပ်ရုံများ
	- Controller: app/Http/controllers/FactoryController.php @CloseShopList
	- Model: app/FactoryClose.php
	- Route:CloseFactoryList
	- Related Table: factory_close

* Shop Registration
	- Controller: app/Http/controllers/ShopController.php
	- Model: app/Shop.php
	- Route: shops
	- Related Table: shops

* ပိတ်သိမ်းထားသောဆိုင် / အလုပ်ဌာန
	- Controller: app/Http/controllers/ShopController.php @CloseShopList
	- Model: app/Shop.php
	- Route: CloseShopList
	- Related Table: shop_closes

* စက်ရုံ / အလုပ်ရုံ အကြောင်းအရာ
	- Controller: app/Http/controllers/FactoryLeaveInspectionController.php @factoryInspection
	- Model: app/FactoryInspectionInforms.php
	- Route: FactoryInspections
	- Related Table: factoryinspectioninforms

* အလုပ်ရုံစစ်ဆေးရေး
	- Controller: -
	- Model: app/FactoryInspectionSafety.php
	- Route: factorysafteyinspection
	- Related Table: factory_inspection_safeties

* အလုပ်သမားဥပဒေစစ်ဆေးရေး
	- Controller: app/Http/controllers/FactoryLabourInspectionLawController.php
	- Model: app/FactoryLabourInspectionLaw.php
	- Route: LabourInspectionLaw/create
	- Related Table: factory_labour_inspection_laws

* စစ်ဆေးထားသောစက်ရုံများစာရင်း
	- Controller: app/Http/controllers/FactoryInspectionListController.php @lists
	- Model: app/FactoryInspectionLists.php
	- Route: FactoryInspectionLists
	- Related Table: factoryinspectioninforms, factory_inspection_safeties, factory_labour_inspection_laws
* ဆိုင်/အလုပ်ဌာနစစ်ဆေးချက်
	- Controller: app/Http/controllers/ShopInspectionController.php @shop_information_add
	- Model: app/ShopInspectionInform.php
	- Route: shop_information_add
	- Related Table: shop_inspection_informs

* အလုပ်ရုံစစ်ဆေးရေး
	- Controller: app/Http/controllers/ShopInspectionSafetyController.php
	- Model: app/ShopInspectionSafety.php
	- Route: ShopSafetyInspection/create
	- Related Table: shop_inspection_safeties

* အလုပ်သမားဥပဒေစစ်ဆေးရေး
	- Controller: app/Http/controllers/ShopLabourInspectionLawController.php
	- Model: app/ShopLabourInspectionLaw.php
	- Route: ShopLabourInspectionLaw/create
	- Related Table: shop_labour_inspection_laws

* စစ်ဆေးထားသော ဆိုင်/အလုပ်ဌာနစာရင်းများ
	- Controller: app/Http/controllers/ShopInspectionListController.php @lists
	- Model: app/
	- Route: ShopInspectionLists
	- Related Table: shop_inspection_informs, shop_inspection_safeties, shop_labour_inspection_laws

* ဖိုင်တစ်ခုဖွင့်ခြင်း
	- Controller: app/Http/controllers/InternalProcessController.php @index
	- Model: app/
	- Route: caselist
	- Related Table: cases

* ညွှန်ကြားချက်များ
	- Controller: app/Http/controllers/InternalProcessController.php @instructionlist
	- Model: app/Instruction.php
	- Route: instructionlist
	- Related Table: instructions

* တင်ပြခြင်း
	- Controller: app/Http/controllers/InternalProcessController.php @submissionreport
	- Model: app/CaseOpen.php, app/Casereport.php
	- Route: submissionReport
	- Related Table: casereports

* ထိခိုက်မှုအကြောင်းကြားခြင်းပုံစံ
	- Controller: app/Http/controllers/AffectedInformationController.php
	- Model: app/AffectedInformation.php
	- Route: AffectedIndex
	- Related Table: affected_informations

* လုပ်ငန်းခွင်ထိခိုက်မှုညွှန်ကြားချက်များ
	- Controller: app/Http/controllers/ImpactInstructionController.php @InstructionLists
	- Model: app/ImpactInstruction.php
	- Route: ImpactInstructionList
	- Related Table: impact_instructions

* ဆွေးနွေးပွဲ
	- Controller: app/Http/controllers/SeminarController.php @index
	- Model: app/
	- Route: createseminar
	- Related Table: seminars

* ဆွေးနွေးပွဲစာရင်းများ
	- Controller: app/Http/controllers/SeminarController.php @show
	- Model: app/Seminar.php
	- Route: seminarlist
	- Related Table: seminars

* တရားစွဲဆိုမှုများ
	- Controller: app/Http/controllers/FactoryProsecutedController.php
	- Model: app/FactoryProsecuted.php
	- Route: Factoryprosecuted
	- Related Table: factory_prosecuteds

* အချိန်ပိုလျှောက်ထားခြင်းများ
	- Controller: app/Http/controllers/PermissionOtFactoryController.php
	- Model: app/PermissionOtFactory.php
	- Route:PermissionOtFactory
	- Related Table: permission_ot_factories

* လချုပ်
	- Controller: app/Http/controllers/ReportController.php @seminardata
	- Model: app/
	- Route: seminarreportdata
	- Related Table:

* Economic Section
	- Controller: app/Http/controllers/EconomicSectionController.php
	- Model: app/EconomicSection.php
	- Route: economicsection/create
	- Related Table: economic_sections

* Economic Division
	- Controller: app/Http/controllers/EconomicDivisionController.php
	- Model: app/EconomicDivision.php
	- Route: economicdivision/create
	- Related Table: economic_divisions

* Economic Group
	- Controller: app/Http/controllers/EconomicGroupController.php
	- Model: app/EconomicGroup.php
	- Route: economicgroup/create
	- Related Table: economic_groups

* Economic Class
	- Controller: app/Http/controllers/EconomicClassController.php
	- Model: app/EconomicClass.php
	- Route: economicclass/create
	- Related Table: economic_classes

* ခရိုင်များထည့်ခြင်း
	- Controller: app/Http/controllers/DistrictController.php @index
	- Model: app/District.php
	- Route: district
	- Related Table: districts

* မြိုနယ်များထည့်ခြင်း
	- Controller: app/Http/controllers/TownshipController.php @index
	- Model: app/Township.php
	- Route: township
	- Related Table: townships

* စက်မှုဇုန်များ
	- Controller: app/Http/controllers/IndustrialzoneController.php @index
	- Model: app/Industrialzone.php
	- Route: industrialzone
	- Related Table: industrialzones

* အသုံးပြုသူအသစ်ထည့်ခြင်း
	- Controller: app/Http/controllers/Auth/RegisterController.php @showRegistraionForm
	- Model: app/User.php
	- Route: register
	- Related Table: users

* User Logs
	- Controller: app/Http/controllers/UserLogController.php @lists
	- Model: app/
	- Route: User-activity-logs
	- Related Table: activity_log
	
## Login Information
	- Username : admin@yangon.gov.mm
	- Password : AyqC8p#
	
## To do Task
-

## Server IP Address
-

## Project Database
-

## Project Domain
http://uat04.yrgconnect.online

## Project Repo
https://bitbucket.org/securelinkygn/yangonlabourproject/src/master

## Project Contact Persons
* Consultant
	- Ko Thar Htet
	- 09763669416

* Hlaing Tharyar Office
	- U Soe Nyi Nyi
	- 0925082892

* Insein Office
	- Daw Chan Myae Thu
	- 09969632992