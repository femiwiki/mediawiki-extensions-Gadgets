<?php
$namespaceNames = array();

// For wikis without Gadgets installed.
if ( !defined( 'NS_GADGET' ) ) {
	define( 'NS_GADGET', 2300 );
	define( 'NS_GADGET_TALK', 2301 );
	define( 'NS_GADGET_DEFINITION', 2302 );
	define( 'NS_GADGET_DEFINITION_TALK', 2303 );
}

$namespaceNames['azb'] = array(
	NS_GADGET => 'آلت',
	NS_GADGET_TALK => 'آلت_دانیشیغی',
	NS_GADGET_DEFINITION => 'آلت_آچیقلاماسی',
	NS_GADGET_DEFINITION_TALK => 'آلت_آچیقلاماسی_دانیشیغی',
);

$namespaceNames['ckb'] = array(
	NS_GADGET => 'ئامراز',
	NS_GADGET_TALK => 'وتووێژی_ئامراز',
	NS_GADGET_DEFINITION => 'پێناسه‌ی_ئامراز',
	NS_GADGET_DEFINITION_TALK => 'وتووێژی_پێناسه‌ی_ئامراز',
);

$namespaceNames['en'] = array(
	NS_GADGET => 'Gadget',
	NS_GADGET_TALK => 'Gadget_talk',
	NS_GADGET_DEFINITION => 'Gadget_definition',
	NS_GADGET_DEFINITION_TALK => 'Gadget_definition_talk',
);

$namespaceNames['fa'] = array(
	NS_GADGET => 'ابزار',
	NS_GADGET_TALK => 'بحث_ابزار',
	NS_GADGET_DEFINITION => 'توضیحات_ابزار',
	NS_GADGET_DEFINITION_TALK => 'بحث_توضیحات_ابزار',
);

$namespaceNames['he'] = array(
	NS_GADGET => 'גאדג\'ט',
	NS_GADGET_TALK => 'שיחת_גאדג\'ט',
	NS_GADGET_DEFINITION => 'הגדרת_גאדג\'ט',
	NS_GADGET_DEFINITION_TALK => 'שיחת_הגדרת_גאדג\'ט',
);

$namespaceNames['it'] = array(
	NS_GADGET => 'Accessorio',
	NS_GADGET_TALK => 'Discussioni_accessorio',
	NS_GADGET_DEFINITION => 'Definizione_accessorio',
	NS_GADGET_DEFINITION_TALK => 'Discussioni_definizione_accessorio',
);

$namespaceNames['lrc'] = array(
	NS_GADGET => 'گأجئت',
	NS_GADGET_TALK => 'چأک_چئنە_گأجئت',
	NS_GADGET_DEFINITION => 'توضییا_گأجئت',
	NS_GADGET_DEFINITION_TALK => 'چأک_چئنە_توضییا_گأجئت',
);

$namespaceNames['pl'] = array(
	NS_GADGET => 'Gadżet',
	NS_GADGET_TALK => 'Dyskusja_gadżetu',
	NS_GADGET_DEFINITION => 'Definicja_gadżetu',
	NS_GADGET_DEFINITION_TALK => 'Dyskusja_definicji_gadżetu',
);

$namespaceNames['ur'] = array(
	NS_GADGET => 'آلہ',
	NS_GADGET_TALK => 'تبادلۂ_خیال_آلہ',
	NS_GADGET_DEFINITION => 'تعریف_آلہ',
	NS_GADGET_DEFINITION_TALK => 'تبادلۂ_خیال_تعریف_آلہ',
);

$namespaceNames['vi'] = array(
	NS_GADGET => 'Tiện_ích',
	NS_GADGET_TALK => 'Thảo_luận_Tiện_ích',
	NS_GADGET_DEFINITION => 'Định_nghĩa_tiện_ích',
	NS_GADGET_DEFINITION_TALK => 'Thảo_luận_Định_nghĩa_tiện_ích',
);
