<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'News event');

$tmp_roq_newsevent_columns = array(

    'tx_roqnewsevent_is_event' => array(
   		'exclude' => 0,
   		'label' => 'LLL:EXT:roq_newsevent/Resources/Private/Language/locallang_db.xml:tx_roqnewsevent_is_event',
   		'config' => array(
   			'type' => 'check',
   			'default' => 0
   		),
   	),
	'tx_roqnewsevent_startdate' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:roq_newsevent/Resources/Private/Language/locallang_db.xml:tx_roqnewsevent_startdate',
		'config' => array(
			'type' => 'input',
			'size' => 7,
			'eval' => 'date',
			'checkbox' => 1,
		),
	),
	'tx_roqnewsevent_starttime' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:roq_newsevent/Resources/Private/Language/locallang_db.xml:tx_roqnewsevent_starttime',
		'config' => array(
			'type' => 'input',
			'size' => 4,
			'eval' => 'time',
			'checkbox' => 1,
		),
	),
	'tx_roqnewsevent_enddate' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:roq_newsevent/Resources/Private/Language/locallang_db.xml:tx_roqnewsevent_enddate',
		'config' => array(
			'type' => 'input',
			'size' => 7,
			'eval' => 'date',
			'checkbox' => 1,
		),
	),
	'tx_roqnewsevent_endtime' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:roq_newsevent/Resources/Private/Language/locallang_db.xml:tx_roqnewsevent_endtime',
		'config' => array(
			'type' => 'input',
			'size' => 4,
			'eval' => 'time',
			'checkbox' => 1,
		),
	),
	'tx_roqnewsevent_location' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:roq_newsevent/Resources/Private/Language/locallang_db.xml:tx_roqnewsevent_location',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
);

t3lib_extMgm::addTCAcolumns('tx_news_domain_model_news',$tmp_roq_newsevent_columns);

t3lib_extMgm::addToAllTCAtypes('tx_news_domain_model_news', ',--div--;LLL:EXT:roq_newsevent/Resources/Private/Language/locallang_db.xml:tx_roqnewsevent_domain_model_event,');
t3lib_extMgm::addToAllTCAtypes('tx_news_domain_model_news', 'tx_roqnewsevent_is_event, tx_roqnewsevent_startdate, tx_roqnewsevent_starttime, tx_roqnewsevent_enddate, tx_roqnewsevent_endtime, tx_roqnewsevent_location');

/*
$TCA['tx_news_domain_model_news']['columns'][$TCA['tx_news_domain_model_news']['ctrl']['type']]['config']['items'][] = array('LLL:EXT:roq_newsevent/Resources/Private/Language/locallang_db.xml:tx_news_domain_model_news.tx_extbase_type.Tx_RoqNewsevent_Event','Tx_RoqNewsevent_Event');

$TCA['tx_news_domain_model_news']['types']['Tx_RoqNewsevent_Event']['showitem'] = $TCA['tx_news_domain_model_news']['types']['0']['showitem'];
$TCA['tx_news_domain_model_news']['types']['Tx_RoqNewsevent_Event']['showitem'] .= ',--div--;LLL:EXT:roq_newsevent/Resources/Private/Language/locallang_db.xml:tx_roqnewsevent_domain_model_event,';
$TCA['tx_news_domain_model_news']['types']['Tx_RoqNewsevent_Event']['showitem'] .= 'tx_roqnewsevent_is_event, tx_roqnewsevent_startdate, tx_roqnewsevent_starttime, tx_roqnewsevent_enddate, tx_roqnewsevent_endtime, tx_roqnewsevent_location';
*/

?>