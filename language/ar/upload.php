<?php
/**
*
* @package Upload Extensions
* @copyright (c) 2014 - 2015 Igor Lavrov (https://github.com/LavIgor) and John Peskens (http://ForumHulp.com)
* @translated by Bassel Taha Alhitary - www.alhitary.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_UPLOAD_EXT_TITLE'				=> 'رفع الإضافات',
	'ACP_UPLOAD_EXT_CONFIG_TITLE'		=> 'رفع الإضافات',
	'ACP_UPLOAD_EXT_DESCRIPTION'		=> 'تنصيب / تحديث / حذف الإضافات , إدارة ملفاتها المضغوطة بصيغة zip وغيرها من الخصائص الأخرى بدون استخدام برنامج نقل الملفات FTP.',
	'ACP_UPLOAD_EXT_TITLE_EXPLAIN'		=> 'تستطيع من هنا رفع الإضافات المضغوطة بصيغة zip أو حذفها من السيرفر.<br />تستطيع أيضاً تنصيب / تحديث / حذف الإضافات بدون استخدام برنامج نقل الملفات FTP. ويتم تحديث الإضافة القديمة عندما تقوم برفع الإضافة الجديدة ( المُحدثة ).',
	'ACP_UPLOAD_EXT_HELP'				=> 'الأسئلة المتكررة : دليل الإستخدام',
	'UPLOAD'							=> 'رفع الإضافة',
	'BROWSE'							=> 'استعراض...',
	'EXTENSION_UPLOAD'					=> 'رفع الإضافة',
	'EXTENSION_UPLOAD_EXPLAIN'			=> 'من هنا تستطيع رفع ملف الإضافة المضغوط بصيغة zip من جهازك المحلي أو من سيرفر بعيد. وسيتم بعد ذلك فك ملف الإضافة المضغوط والتجهيز لعملية التنصيب.<br />اختار الملف المطلوب أو أكتب الرابط في الحقل أدناه.',
	'EXT_UPLOAD_ERROR'					=> 'لم يتم رفع الإضافة.',
	'EXT_UPLOAD_INIT_FAIL'				=> 'هناك خطأ أثناء عملية رفع الإضافة.',
	'EXT_NOT_WRITABLE'					=> array(
		'error'		=> 'المجلد ext/ غير قابل للكتابة وبالتالي لا يُمكن أن تعمل الإضافة "رفع الإضافات" بصورة صحيحة.',
		'solution'	=> 'الرجاء إعطاء المجلد ext تصريح الكتابة أو ضبط الإعدادات والمحاولة مرة أخرى.',
	),
	'EXT_TMP_NOT_WRITABLE'				=> array(
		'error'		=> 'المجلد tmp بالمسار ext/boardtools/upload/tmp/ غير قابل للكتابة وبالتالي لا يُمكن أن تعمل الإضافة "رفع الإضافات" بصورة صحيحة.',
		'solution'	=> 'الرجاء إعطاء المجلد tmp تصريح الكتابة أو ضبط الإعدادات والمحاولة مرة أخرى.',
	),
	'EXT_ALLOW_URL_FOPEN_DISABLED'		=> array(
			'error'		=> 'يجب تفعيل الخيار allow_url_fopen لكي تستطيع الحصول على المعلومات من السيرفر البعيد.',
			'solution'	=> 'الرجاء التأكد من تفعيل الخيار allow_url_fopen في الملف php.ini الخاص بسيرفرك والمُحاولة مرة أخرى.',
	),
	'EXT_OPENSSL_DISABLED'				=> array(
			'error'		=> 'يجب تفعيل الإضافة openssl لكي تستطيع الحصول على المعلومات من مصدر https.',
			'solution'	=> 'الرجاء التأكد من تفعيل الإضافة openssl في الملف php.ini الخاص بسيرفرك والمُحاولة مرة أخرى.',
	),
	'NO_UPLOAD_FILE'					=> array(
		'error'		=> 'لم يتم تحديد أي ملف أو هناك خطأ أثناء عملية رفع الإضافة.',
		'solution'	=> 'نرجوا التأكد من صحة الملف المضغوط والمحاولة مرة أخرى.',
	),
	'NOT_AN_EXTENSION'					=> 'لم يتم التعرف على الملف المضغوط الذي رفعته. وبالتالي لم يتم حفظ هذا الملف على سيرفرك.',
	'EXT_ACTION_ERROR'					=> 'لا يمكن تنفيذ الإجراء المطلوب للإضافة التي حددتها.<br />ملاحظة : لا يمكن إدارة الإضافة "رفع الإضافات" إلا بواسطة إدارة الإضافات القياسي.',

	'SOURCE'							=> 'المصدر',
	'EXTENSION_UPDATE_NO_LINK'			=> 'رابط التحميل غير متوفر.',
	'EXTENSION_TO_BE_ENABLED'			=> 'سوف يتم تعطيل "رفع الإضافات" أثناء عملية التحديث وإعادة التفعيل بعد التحديث.',
	'EXTENSION_UPLOAD_UPDATE'			=> 'تحديث الإضافة',
	'EXTENSION_UPLOAD_UPDATE_EXPLAIN'	=> 'سيتم تنفيذ عملية الرفع من الرابط المبين أدناه.',

	'EXTENSION_UPLOADED'				=> 'تم رفع الإضافة “%s” بنجاح.',
	'EXTENSIONS_AVAILABLE'				=> 'الإضافات الغير مُثبتة',
	'EXTENSIONS_UPLOADED'				=> 'الإضافات المرفوعة',
	'EXTENSIONS_UNAVAILABLE'			=> 'الإضافات الغير صالحة',
	'EXTENSIONS_UNAVAILABLE_EXPLAIN'	=> 'تم رفع الإضافات المذكورة في القائمة أدناه إلى منتداك ولكنها لم تعد صالحة بسبب بعض العوامل , ولذلك هي غير متوفرة ولا يمكن تفعيلها في منتداك. نرجوا التأكد من وجود الملفات الخاصة بهذه الإضافات بمكانها الصحيح أو استخدم أداة تنظيف الإضافات لو رغبت في حذف هذه الإضافات الغير صالحة من السيرفر لديك.',
	'EXTENSION_BROKEN'					=> 'إضافة غير صالحة',
	'EXTENSION_BROKEN_ENABLED'			=> 'تم تفعيل هذه الإضافة الغير صالحة !',
	'EXTENSION_BROKEN_DISABLED'			=> 'تم تعطيل هذه الإضافة الغير صالحة !',
	'EXTENSION_BROKEN_TITLE'			=> 'هذه الإضافة غير صالحة !',
	'EXTENSION_BROKEN_DETAILS'			=> 'انقر هنا لقراءة التفاصيل.',
	'EXTENSION_BROKEN_EXPLAIN'			=> '<strong>لا تزال بعض بيانات هذه الإضافة مخزونة في السيرفر.</strong> الرجاء التأكد من سبب عدم عمل هذه الإضافة وكذلك من وجود ملفاتها في المسار المطلوب. قد تحتاج طلب المساعدة من مبرمجي الإضافة واستخدام برنامج نقل البيانات FTP لتغيير بعض الملفات ( أو تستطيع رفع نسخة جديدة بالإصلاحات ). عند ذلك سوف تستطيع إدارة هذه الإضافة مرة أخرى.<br /><h3>تستطيع عمل التالي :</h3><br /><strong>تحديث الإضافة الغير صالحة.</strong><br /><ul><li>التأكد من تعطيل الإضافة ( انقر على زر التعطيل لو أستدعى الأمر ).</li><li>التأكد من توفر إصدار جديد للإضافة ورفعها إلى المسار الصحيح.</li><li>طلب المساعدة من مبرمجي الإضافة إذا لم يتم حل المشكلة بالخطوات أعلاه.</ul><strong>أو</strong><br /><br /><strong>إزالة الإضافة الغير صالحة بالكامل.</strong><br /><ul><li>التأكد من تعطيل الإضافة ( انقر على زر التعطيل لو أستدعى الأمر ).</li><li>التأكد من حذف البيانات للإضافة ( انقر على زر الحذف لو أستدعى الأمر ).</li><li>احذف ملفات الإضافة بواسطة أداة حذف الإضافات.</ul>',

	'EXTENSION_UPLOADED_ENABLE'			=> 'تفعيل هذه الإضافة',
	'ACP_UPLOAD_EXT_UNPACK'				=> 'فك الضغط',
	'ACP_UPLOAD_EXT_CONT'				=> 'محتوى المجلد : %s',

	'EXT_LIST_DOWNLOAD'					=> 'تحميل القائمة كاملة',
	'EXT_LIST_DOWNLOAD_ENGLISH'			=> 'استخدام الأسماء باللغة الإنجليزية',
	'EXT_LIST_DOWNLOAD_GROUP'			=> 'التجميع بالأسماء',
	'EXT_LIST_DOWNLOAD_GROUP_STANDARD'	=> 'المرفوعة/الغير صالحة',
	'EXT_LIST_DOWNLOAD_GROUP_DISABLED'	=> 'المُفعلة/المُعطلة/الغير صالحة',
	'EXT_LIST_DOWNLOAD_GROUP_PURGED'	=> 'المُفعلة/المُعطلة/الملغية/الغير صالحة',
	'EXT_LIST_DOWNLOAD_SHOW'			=> 'يتضمن ',
	'EXT_LIST_DOWNLOAD_SHOW_FULL'		=> 'أسماء العرض وأسماء المسار',
	'EXT_LIST_DOWNLOAD_SHOW_CLEAN'		=> 'أسماء المسار فقط',
	'EXT_LIST_DOWNLOAD_SHOW_NAME'		=> 'أسماء العرض فقط',
	'EXT_LIST_DOWNLOAD_TITLE'			=> 'القائمة الكاملة للإضافات المرفوعة',
	'EXT_LIST_DOWNLOAD_FOOTER'			=> 'بواسطة رفع الإضافات',

	'EXT_ROW_ENABLED'					=> 'المُفعلة',
	'EXT_ROW_DISABLED'					=> 'المُعطلة',
	'EXT_ROW_UNINSTALLED'				=> 'الملغية',
	'EXT_ROWS_ENABLED'					=> 'المُفعلة :',
	'EXT_ROWS_DISABLED'					=> 'المُعطلة :',
	'EXT_ROWS_UNINSTALLED'				=> 'الملغية :',
	'EXT_ROWS_UPLOADED'					=> 'المرفوعة :',
	'EXT_ROWS_BROKEN'					=> 'الغير صالحة :',
	
	'EXTENSION_DELETE'					=> 'حذف الإضافة',
	'EXTENSION_DELETE_CONFIRM'			=> 'هل تريد بالفعل حذف الإضافة “%s” ؟',
	'EXTENSIONS_DELETE_CONFIRM'			=> array(
		2	=> 'هل تريد بالفعل حذف عدد <strong>%1$s</strong> إضافات ؟',
	),
	'EXT_DELETE_SUCCESS'				=> 'تم حذف الإضافة بنجاح.',
	'EXTS_DELETE_SUCCESS'				=> 'تم حذف الإضافات بنجاح.',
	'EXT_DELETE_ERROR'					=> 'لم يتم تحديد الملف أو حدثت مشكلة أثناء عملية الحذف.',
	'EXT_DELETE_NO_FILE'				=> 'لم يتم تحديد الملف للحذف.',
	'EXT_CANNOT_BE_PURGED'				=> 'يجب عليك تعطيل الإضافة أولاً لكي تستطيع حذف البيانات الخاصة بها.',

	'EXTENSION_ZIP_DELETE'				=> 'حذف الملف المضغوط',
	'EXTENSION_ZIP_DELETE_CONFIRM'		=> 'هل تريد بالفعل حذف الملف المضغوط للإضافة “%s” ?',
	'EXTENSIONS_ZIP_DELETE_CONFIRM'		=> array(
		2	=> 'هل تريد بالفعل حذف الملفات المضغوطة لعدد <strong>%1$s</strong> إضافات ؟',
	),
	'EXT_ZIP_DELETE_SUCCESS'			=> 'تم حذف ملف الإضافة المضغوط بنجاح.',
	'EXT_ZIPS_DELETE_SUCCESS'			=> 'تم حذف الملفات المضغوطة zip للإضافات بنجاح.',
	'EXT_ZIP_DELETE_ERROR'				=> 'لم يتم تحديد أي ملف أو هناك خطأ أثناء عملية الحذف.',

	'ACP_UPLOAD_EXT_ERROR_DEST'			=> 'مجلد ال vendor أو مسار المجلد غير موجود في الملف المضغوط الذي رفعته. لم يتم حفظ هذا الملف على سيرفرك.',
	'ACP_UPLOAD_EXT_ERROR_COMP'			=> 'الملف composer.json غير موجود في الملف المضغوط الذي رفعته. لم يتم حفظ هذا الملف على سيرفرك.',
	'ACP_UPLOAD_EXT_ERROR_NOT_SAVED'	=> 'لم يتم حفظ الملف على سيرفرك.',
	'ACP_UPLOAD_EXT_ERROR_TRY_SELF'		=> 'لا يمكن تحديث “رفع الإضافات” إلا بواسطة أداة التحديث الخاص بها أو برنامج الـ FTP.',
	'ACP_UPLOAD_EXT_WRONG_RESTORE'		=> 'حدثت مشكلة أثناء عملية تحديث الإضافة. نرجوا المحاولة مرة أخرى.',

	'DEVELOPER'							=> 'المطور ',
	'DEVELOPERS'						=> 'المطورين ',

	'EXT_UPLOAD_SAVE_ZIP'				=> 'حفظ هذا الملف المضغوط',
	'CHECKSUM'							=> 'فحص إختباري ',
	'RESTORE'							=> 'إستعادة',
	'ZIP_UPLOADED'						=> 'الملفات المضغوطة للإضافات المرفوعة على موقعك',
	'EXT_ENABLE'						=> 'تفعيل',
	'EXT_ENABLE_DISABLE'				=> 'تفعيل / تعطيل الإضافة',
	'EXT_ENABLED'						=> 'تم تفعيل الإضافة بنجاح.',
	'EXT_DISABLED'						=> 'تم تعطيل الإضافة بنجاح.',
	'EXT_PURGE'							=> 'حذف بيانات الإضافة',
	'EXT_PURGED'						=> 'تم حذف بيانات الإضافة بنجاح.',
	'EXT_UPLOADED'						=> 'تم الرفع.',
	'EXT_UPDATE_ENABLE'					=> 'انقر هذا الزر لتفعيل الإضافة.',
	'EXT_UPDATE_CHECK_FILETREE'			=> 'الرجاء التأكد من ملفات الإضافة.',
	'EXT_UPDATE_ERROR'					=> 'خطأ في تنفيذ هذه العملية.',
	'EXT_UPDATE_TIMEOUT'				=> 'أنتهت المُدة المسموح بها لتنفيذ هذه العملية.',
	'EXT_UPDATES_AVAILABLE'				=> 'توجد تحديثات',
	'EXT_UPDATE_METHODS_TITLE'			=> 'الوسائل المتوفرة للتحديث ',
	'EXT_UPLOAD_UPDATE_METHODS'			=> 'تستطيع تحديث الإضافة بواسطة أحد الوسائل المُمكنة :<ul><li><strong>أداة تحديث “رفع الإضافات”.</strong> تستطيع تحديث “رفع الإضافات” بواسطة أداة تحديث خاصة بـ “رفع الإضافات”. تأكد من توفر هذه الأداة لديك أولاً. وإلا ستحتاج إلى إستخدام الوسيلة الثانية.</li><li><strong>برنامج نقل البيانات FTP.</strong> تستطيع تحديث “رفع الإضافات” بواسطة الطريقة القياسية. وهي تحميل نسخة جديدة من الإضافة إلى جهازك ( أنقر على زر التحميل أدناه ), ثم تعطيل الإضافة بواسطة إدارة الإضافات , بعدها إرفع النسخة الجديدة من جهازك إلى المسار الصحيح بواسطة برنامج البيانات FTP ومن ثم تفعيل الإضافة.</li></ul>',
	'EXT_UPDATED'						=> 'تم التحديث.',
	'EXT_UPDATED_LATEST_VERSION'		=> 'مُحدث إلى آخر إصدار',
	'EXT_SAVED_OLD_ZIP'					=> '<strong>ملاحظة :</strong> تم حفظ نسخة سابقة للإضافة بإسم <strong>%s</strong> بسيرفرك. ويمكن أن تجدها في قسم "إدارة الملفات المضغوطة".',
	'EXT_RESTORE_LANGUAGE'				=> '<strong>هناك مجلد لغة واحده غير موجود في نسخة الإضافة التي رفعنها.</strong> تستطيع إستعادة المجلد %s من النسخة السابقة للإضافة المحفوظة في الأرشيف. بعدها قد تحتاج إلى تحديث ملفات هذا المجلد لكي يتوافق مع نسخة الإضافة التي رفعتها.',
	'EXT_RESTORE_LANGUAGES'				=> '<strong>هناك بعض مجلدات اللغة غير موجودة في نسخة الإضافة التي رفعنها.</strong> تستطيع إستعادة المجلدات %1$s و %2$s من النسخة السابقة للإضافة المحفوظة في الأرشيف. بعدها قد تحتاج إلى تحديث ملفات هذه المجلدات لكي تتوافق مع نسخة الإضافة التي رفعتها.',
	'EXT_LANGUAGES_RESTORED'			=> 'تمت عملية الإستعادة بنجاح.',
	'EXT_SHOW_DESCRIPTION'				=> 'إظهار وصف الإضافة',
	'EXT_UPLOAD_BACK'					=> '« العودة إلى الصفحة الرئيسية',
	'EXT_RELOAD_PAGE'					=> 'إعادة تحميل الصفحة',
	'EXT_REFRESH_PAGE'					=> 'تحديث الصفحة',
	'EXT_REFRESH_NOTICE'				=> 'قائمة الإنتقال قد تكون بحاجة إلى تحديث.',

	'ERROR_COPY_FILE'					=> 'فشل في عملية نسخ المجلد “%1$s” إلى “%2$s”.',
	'ERROR_CREATE_DIRECTORY'			=> 'فشل في عملية انشاء المجلد “%s”.',
	'ERROR_REMOVE_DIRECTORY'			=> 'فشل في عملية حذف المجلد “%s”.',
	'ERROR_CHECKSUM_MISMATCH'			=> 'رقم الهاش %s للملف الذي رفعته يختلف عن ماهو موجود في الفحص الإختباري. لم يتم حفظ الملف على سيرفرك.',
	'ERROR_ZIP_NO_COMPOSER'				=> 'الملف composer.json غير موجود في الملف المضغوط للإضافة المطلوبة.',
	'ERROR_DIRECTORIES_NOT_RESTORED'	=> 'لم يتم الإنتهاء من عملية الإستعادة بسبب بعض الأخطاء.',
	'ERROR_LANGUAGE_UNKNOWN_STRUCTURE'	=> 'لم يتم التعرف على ملف اللغة الذي رفعته. لم يتم حفظ الملف على سيرفرك.',
	'ERROR_LANGUAGE_NO_EXTENSION'		=> 'لم يتم تحديد إسم الإضافة لحزمة اللغة.',
	'ERROR_LANGUAGE_NOT_DEFINED'		=> 'يجب تحديد رمز اللغة ISO للملف المرفوع. الرجاء تعبئة الحقل المطلوب والمحاولة مرة أخرى.',

	'ACP_UPLOAD_EXT_DIR'				=> 'مسار تخزين الإضافات المضغوطة',
	'ACP_UPLOAD_EXT_DIR_EXPLAIN'		=> 'المسار الموجود في مجلد المنتدى , على سبيل المثال : <samp>ext</samp>.<br />تستطيع تغيير هذا المسار إلى مجلد خاص لحفظ الملفات المضغوطة ( مثال : اذا تريد اتاحة تحميل هذه الملفات للأعضاء , تستطيع تغيير المسار إلى <em>downloads</em>, واذا تريد منعها , تستطيع تغييرها إلى المسار الذي يكون أعلى بمستوى واحد عن المسار الرئيسي http لموقعك ( أو تستطيع انشاء مجلد يحتوى على الملف .htaccess ))..',

	'ACP_UPLOAD_EXT_UPDATED'			=> 'تم تحديث الإضافة بنجاح.',
	'ACP_UPLOAD_EXT_UPDATED_EXPLAIN'	=> 'لقد قمت برفع ملف مضغوط لإضافة موجودة مُسبقاً. <strong>تم تعطيل</strong> تلك الإضافة <strong>تلقائياً</strong> لتنفيذ عملية التحديث بصورة آمنة. نرجوا الآن <strong>التأكد</strong> من صحة عمل الإضافة و <strong>تفعيلها</strong> اذا تريد ذلك.',

	'ACP_UPLOAD_EXT_NO_CHECKSUM_TITLE'	=> 'الفحص الإختباري غير متوفر للملف الذي رفعته.',
	'ACP_UPLOAD_EXT_NO_CHECKSUM'		=> '"رفع الإضافات" غير قادر على تنفيذ الفحوصات الآمنية بسبب أن <strong>الفحص الإختباري غير متوفر</strong> في الإضافة التي رفعتها. يتم استخدام "الفحص الإختباري" للتأكد من أن الإضافة آمنة وغير تالفة.',

	'VALID_PHPBB_EXTENSIONS'			=> 'الإضافات المُعتمدة في phpbb.com',
	'SHOW_VALID_PHPBB_EXTENSIONS'		=> 'إظهار الإضافات المُعتمدة في phpbb.com',
	'VALID_PHPBB_EXTENSIONS_TITLE'		=> 'تستطيع تحميل الإضافات من الموقع الأم phpbb.com أو قراءة إعلانات اصدارها.',
	'VALID_PHPBB_EXTENSIONS_EMPTY_LIST'	=> 'لا توجد إضافات مُقترحة حالياً. نرجوا التأكد من صحة إتصالك إلى الإنترانت. وكذلك التأكد من توفر آخر نسخة من "رفع الإضافات" لديك.',
	'POSSIBLE_SOLUTIONS'				=> 'الحلول المتوفرة',

	'ACP_UPLOAD_EXT_MANAGER_EXPLAIN'	=> 'من هنا تستطيع إدارة جميع الإضافات الموجودة لديك ومعرفة جميع التفاصيل عنها.',
	'ACP_UPLOAD_ZIP_TITLE'				=> 'إدارة الملفات المضغوطة',
	'ACP_UPLOAD_UNINSTALLED_TITLE'		=> 'حذف الإضافات',

	'EXT_DETAILS_README'				=> 'اقرأني',
	'EXT_DETAILS_CHANGELOG'				=> 'سجل التحديثات',
	'EXT_DETAILS_LANGUAGES'				=> 'اللغات',
	'EXT_DETAILS_FILETREE'				=> 'محتوى الملفات',
	'EXT_DETAILS_TOOLS'					=> 'الأدوات',

	'DEFAULT'							=> 'الإفتراضي',
	'EXT_LANGUAGE_ISO_CODE'				=> 'رمز اللغة ISO ',
	'EXT_LANGUAGES'						=> 'اللغات المتوفرة',
	'EXT_LANGUAGES_UPLOAD'				=> 'إضافة لغة',
	'EXT_LANGUAGES_UPLOAD_EXPLAIN'		=> 'هنا تستطيع رفع ملفات اللغة للإضافة التي تريدها من جهازك المحلي أو سيرفر بعيد / رابط ( يجب أن يكون الرفع بصيغة ملف مضغوط ZIP ). “رفع الإضافات” سوف يعمل على فك الضغط عن الملفات ونقلها إلى المجلد المخصص لها.<br />يجب عليك تحديد الملف المطلوب من جهازك المحلي أو أكتب الرابط في الحقل أدناه.<br />لا تنسى تحديد رمز اللغة إيزو ISO في الحقل المخصص بالأسفل ( مثال : <strong>ar</strong> للغة العربية و <strong>en</strong> للغة الإنجليزية ).<br /><strong>تنبيه هام !</strong> سيتم حذف مجلد اللغة الحالي للإضافة مع رمز اللغة ISO في حالة وجودها مُسبقاً , <strong>لن يتم حفظ نسخة مضغوطة لهذه اللغة.</strong>.',
	'EXT_LANGUAGE_UPLOADED'				=> 'تم إضافة اللغة “%s” بنجاح.',
	'EXT_LANGUAGE_DELETE_CONFIRM'		=> 'هل أنت متأكد من حذف اللغة “%s” ?',
	'EXT_LANGUAGES_DELETE_CONFIRM'		=> array(
		2	=> 'هل أنت متأكد من حذف عدد <strong>%1$s</strong> لغات ?',
	),
	'EXT_LANGUAGE_DELETE_SUCCESS'		=> 'تم حذف اللغة بنجاح.',
	'EXT_LANGUAGES_DELETE_SUCCESS'		=> 'تم حذف اللغات بنجاح.',
	'EXT_LANGUAGE_DELETE_ERROR'			=> 'لم يتم تحديد أي ملف أو هناك خطا أثناء عملية الحذف.',

	'EXT_TOOLS_DOWNLOAD_TITLE'			=> 'تحميل الإضافة',
	'EXT_TOOLS_DOWNLOAD'				=> 'تستطيع تحميل الإضافة بصيغة ملف مضغوط ZIP إلى جهازك. تستطيع أيضاً حذف إسم لاحقة نسخة التطوير ( مثال : من أجل توفير الوقت لإعداد الإضافة إلى قاعدة البيانات الخاصة بالإضافات المُعتمدة ).',
	'EXT_TOOLS_DOWNLOAD_DELETE_SUFFIX'	=> 'حذف إسم لاحقة التطوير إذا كان موجود',
	'EXT_DOWNLOAD_ERROR'				=> 'فشلت عملية تحميل الإضافة “%s”.',

	'EXT_LOAD_ERROR'					=> 'خطأ في التحميل',
	'EXT_LOAD_TIMEOUT'					=> 'أنتهت المُدة المسموح بها لعملية التحميل',
	'EXT_LOAD_ERROR_EXPLAIN'			=> 'هناك خطأ حدث أثناء عملية التحميل.',
	'EXT_LOAD_ERROR_SHOW'				=> 'عرض الأخطاء',
	'EXT_LOAD_SOLUTIONS'				=> 'الرجاء التحقق من ملف سجل الأخطاء في سيرفرك ومعالجة المشكلة , ثم حاول مرة أخرى.',

	'UPLOAD_DESCRIPTION_UPLOAD'			=> 'رفع الإضافات',
	'UPLOAD_DESCRIPTION_UPLOAD_CDB'		=> 'من الموقع الأم phpbb.com',
	'UPLOAD_DESCRIPTION_UPLOAD_LOCAL'	=> 'جهاز محلي',
	'UPLOAD_DESCRIPTION_UPLOAD_REMOTE'	=> 'سيرفر بعيد',
	'UPLOAD_DESCRIPTION_UPDATE'			=> 'تحديث الإضافات',
	'UPLOAD_DESCRIPTION_UPDATE_ABOUT'	=> 'تستطيع تحديث أي إضافة موجودة لديك مُسبقاً. حيث سيتم تلقائياً تعطيلها لجعل عملية التحديث أكثر أماناً.',
	'UPLOAD_DESCRIPTION_MANAGE'			=> 'إدارة الإضافات',
	'UPLOAD_DESCRIPTION_MANAGE_ACTIONS'	=> 'تثبيت / إزالة أي إضافات',
	'UPLOAD_DESCRIPTION_MANAGE_LANG'	=> 'إضافة وإدارة حزمات اللغة الخاصة بالإضافات',
	'UPLOAD_DESCRIPTION_MANAGE_DETAILS'	=> 'مُشاهدة التفاصيل ومحتوى الملفات',
	'UPLOAD_DESCRIPTION_DESIGN'			=> 'تصميم فعال',
	'UPLOAD_DESCRIPTION_DESIGN_ABOUT'	=> 'تستطيع تنفيذ العمليات بطريقة أسرع بفضل وظائف سكربت الجافا JavaScript. الرسائل والتلميحات الملونة ستساعدك على تنفيذ الخيارات التي تريدها.',
	'UPLOAD_DESCRIPTION_ZIP'			=> 'إدارة الملفات المضغوطة',
	'UPLOAD_DESCRIPTION_ZIP_SAVE'		=> 'حفظ الملفات المضغوطة للإضافات في أي مجلد تريده',
	'UPLOAD_DESCRIPTION_ZIP_UNPACK'		=> 'فك الضغط لملفات الإضافة المضغوطة ليتم تثبيتها',
	'UPLOAD_DESCRIPTION_ZIP_DOWNLOAD'	=> 'تحميل ملفات مضغوطة لإضافات مُحددة',
	'UPLOAD_DESCRIPTION_CLEANER'		=> 'حذف الإضافة',
	'UPLOAD_DESCRIPTION_CLEANER_ABOUT'	=> 'تستطيع حذف مجلدات الإضافة أو الملفات المضغوطة للإضافات من السيرفر.',
));
