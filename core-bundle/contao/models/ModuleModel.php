<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @license LGPL-3.0+
 */

namespace Contao;


/**
 * Reads and writes front end modules
 *
 * @property integer $id
 * @property integer $pid
 * @property integer $tstamp
 * @property string  $name
 * @property string  $headline
 * @property string  $type
 * @property integer $levelOffset
 * @property integer $showLevel
 * @property boolean $hardLimit
 * @property boolean $showProtected
 * @property boolean $defineRoot
 * @property integer $rootPage
 * @property string  $navigationTpl
 * @property string  $customTpl
 * @property string  $pages
 * @property string  $orderPages
 * @property boolean $showHidden
 * @property string  $customLabel
 * @property boolean $autologin
 * @property integer $jumpTo
 * @property boolean $redirectBack
 * @property string  $cols
 * @property string  $editable
 * @property string  $memberTpl
 * @property boolean $tableless
 * @property integer $form
 * @property string  $queryType
 * @property boolean $fuzzy
 * @property integer $contextLength
 * @property integer $totalLength
 * @property integer $perPage
 * @property string  $searchType
 * @property string  $searchTpl
 * @property string  $inColumn
 * @property integer $skipFirst
 * @property boolean $loadFirst
 * @property string  $size
 * @property boolean $transparent
 * @property string  $flashvars
 * @property string  $altContent
 * @property string  $source
 * @property string  $singleSRC
 * @property string  $url
 * @property boolean $interactive
 * @property string  $flashID
 * @property string  $flashJS
 * @property string  $imgSize
 * @property boolean $useCaption
 * @property boolean $fullsize
 * @property string  $multiSRC
 * @property string  $orderSRC
 * @property string  $html
 * @property integer $rss_cache
 * @property string  $rss_feed
 * @property string  $rss_template
 * @property integer $numberOfItems
 * @property boolean $disableCaptcha
 * @property string  $reg_groups
 * @property boolean $reg_allowLogin
 * @property boolean $reg_skipName
 * @property string  $reg_close
 * @property boolean $reg_assignDir
 * @property string  $reg_homeDir
 * @property boolean $reg_activate
 * @property integer $reg_jumpTo
 * @property string  $reg_text
 * @property string  $reg_password
 * @property boolean $protected
 * @property string  $groups
 * @property boolean $guests
 * @property string  $cssID
 * @property string  $space
 * @property string  $cal_calendar
 * @property boolean $cal_noSpan
 * @property integer $cal_startDay
 * @property string  $cal_format
 * @property boolean $cal_ignoreDynamic
 * @property string  $cal_order
 * @property integer $cal_readerModule
 * @property integer $cal_limit
 * @property string  $cal_template
 * @property string  $cal_ctemplate
 * @property boolean $cal_showQuantity
 * @property string  $com_order
 * @property boolean $com_moderate
 * @property boolean $com_bbcode
 * @property boolean $com_requireLogin
 * @property boolean $com_disableCaptcha
 * @property string  $com_template
 * @property string  $faq_categories
 * @property integer $faq_readerModule
 * @property string  $list_table
 * @property string  $list_fields
 * @property string  $list_where
 * @property string  $list_search
 * @property string  $list_sort
 * @property string  $list_info
 * @property string  $list_info_where
 * @property string  $list_layout
 * @property string  $list_info_layout
 * @property string  $news_archives
 * @property string  $news_featured
 * @property string  $news_jumpToCurrent
 * @property integer $news_readerModule
 * @property string  $news_metaFields
 * @property string  $news_template
 * @property string  $news_format
 * @property integer $news_startDay
 * @property string  $news_order
 * @property boolean $news_showQuantity
 * @property string  $newsletters
 * @property string  $nl_channels
 * @property boolean $nl_hideChannels
 * @property string  $nl_subscribe
 * @property string  $nl_unsubscribe
 * @property string  $nl_template
 * @property string  $typePrefix
 * @property string  $classes
 *
 * @method static $this findById()
 * @method static $this findOneByPid()
 * @method static $this findOneByTstamp()
 * @method static $this findOneByName()
 * @method static $this findOneByHeadline()
 * @method static $this findOneByType()
 * @method static $this findOneByLevelOffset()
 * @method static $this findOneByShowLevel()
 * @method static $this findOneByHardLimit()
 * @method static $this findOneByShowProtected()
 * @method static $this findOneByDefineRoot()
 * @method static $this findOneByRootPage()
 * @method static $this findOneByNavigationTpl()
 * @method static $this findOneByCustomTpl()
 * @method static $this findOneByPages()
 * @method static $this findOneByOrderPages()
 * @method static $this findOneByShowHidden()
 * @method static $this findOneByCustomLabel()
 * @method static $this findOneByAutologin()
 * @method static $this findOneByJumpTo()
 * @method static $this findOneByRedirectBack()
 * @method static $this findOneByCols()
 * @method static $this findOneByEditable()
 * @method static $this findOneByMemberTpl()
 * @method static $this findOneByTableless()
 * @method static $this findOneByForm()
 * @method static $this findOneByQueryType()
 * @method static $this findOneByFuzzy()
 * @method static $this findOneByContextLength()
 * @method static $this findOneByTotalLength()
 * @method static $this findOneByPerPage()
 * @method static $this findOneBySearchType()
 * @method static $this findOneBySearchTpl()
 * @method static $this findOneByInColumn()
 * @method static $this findOneBySkipFirst()
 * @method static $this findOneByLoadFirst()
 * @method static $this findOneBySize()
 * @method static $this findOneByTransparent()
 * @method static $this findOneByFlashvars()
 * @method static $this findOneByAltContent()
 * @method static $this findOneBySource()
 * @method static $this findOneBySingleSRC()
 * @method static $this findOneByUrl()
 * @method static $this findOneByInteractive()
 * @method static $this findOneByFlashID()
 * @method static $this findOneByFlashJS()
 * @method static $this findOneByImgSize()
 * @method static $this findOneByUseCaption()
 * @method static $this findOneByFullsize()
 * @method static $this findOneByMultiSRC()
 * @method static $this findOneByOrderSRC()
 * @method static $this findOneByHtml()
 * @method static $this findOneByRss_cache()
 * @method static $this findOneByRss_feed()
 * @method static $this findOneByRss_template()
 * @method static $this findOneByNumberOfItems()
 * @method static $this findOneByDisableCaptcha()
 * @method static $this findOneByReg_groups()
 * @method static $this findOneByReg_allowLogin()
 * @method static $this findOneByReg_skipName()
 * @method static $this findOneByReg_close()
 * @method static $this findOneByReg_assignDir()
 * @method static $this findOneByReg_homeDir()
 * @method static $this findOneByReg_activate()
 * @method static $this findOneByReg_jumpTo()
 * @method static $this findOneByReg_text()
 * @method static $this findOneByReg_password()
 * @method static $this findOneByProtected()
 * @method static $this findOneByGroups()
 * @method static $this findOneByGuests()
 * @method static $this findOneByCssID()
 * @method static $this findOneBySpace()
 * @method static $this findOneByCal_calendar()
 * @method static $this findOneByCal_noSpan()
 * @method static $this findOneByCal_startDay()
 * @method static $this findOneByCal_format()
 * @method static $this findOneByCal_ignoreDynamic()
 * @method static $this findOneByCal_order()
 * @method static $this findOneByCal_readerModule()
 * @method static $this findOneByCal_limit()
 * @method static $this findOneByCal_template()
 * @method static $this findOneByCal_ctemplate()
 * @method static $this findOneByCal_showQuantity()
 * @method static $this findOneByCom_order()
 * @method static $this findOneByCom_moderate()
 * @method static $this findOneByCom_bbcode()
 * @method static $this findOneByCom_requireLogin()
 * @method static $this findOneByCom_disableCaptcha()
 * @method static $this findOneByCom_template()
 * @method static $this findOneByFaq_categories()
 * @method static $this findOneByFaq_readerModule()
 * @method static $this findOneByList_table()
 * @method static $this findOneByList_fields()
 * @method static $this findOneByList_where()
 * @method static $this findOneByList_search()
 * @method static $this findOneByList_sort()
 * @method static $this findOneByList_info()
 * @method static $this findOneByList_info_where()
 * @method static $this findOneByList_layout()
 * @method static $this findOneByList_info_layout()
 * @method static $this findOneByNews_archives()
 * @method static $this findOneByNews_featured()
 * @method static $this findOneByNews_jumpToCurrent()
 * @method static $this findOneByNews_readerModule()
 * @method static $this findOneByNews_metaFields()
 * @method static $this findOneByNews_template()
 * @method static $this findOneByNews_format()
 * @method static $this findOneByNews_startDay()
 * @method static $this findOneByNews_order()
 * @method static $this findOneByNews_showQuantity()
 * @method static $this findOneByNewsletters()
 * @method static $this findOneByNl_channels()
 * @method static $this findOneByNl_hideChannels()
 * @method static $this findOneByNl_subscribe()
 * @method static $this findOneByNl_unsubscribe()
 * @method static $this findOneByNl_template()
 * @method static \Model\Collection findByPid()
 * @method static \Model\Collection findByTstamp()
 * @method static \Model\Collection findByName()
 * @method static \Model\Collection findByHeadline()
 * @method static \Model\Collection findByType()
 * @method static \Model\Collection findByLevelOffset()
 * @method static \Model\Collection findByShowLevel()
 * @method static \Model\Collection findByHardLimit()
 * @method static \Model\Collection findByShowProtected()
 * @method static \Model\Collection findByDefineRoot()
 * @method static \Model\Collection findByRootPage()
 * @method static \Model\Collection findByNavigationTpl()
 * @method static \Model\Collection findByCustomTpl()
 * @method static \Model\Collection findByPages()
 * @method static \Model\Collection findByOrderPages()
 * @method static \Model\Collection findByShowHidden()
 * @method static \Model\Collection findByCustomLabel()
 * @method static \Model\Collection findByAutologin()
 * @method static \Model\Collection findByJumpTo()
 * @method static \Model\Collection findByRedirectBack()
 * @method static \Model\Collection findByCols()
 * @method static \Model\Collection findByEditable()
 * @method static \Model\Collection findByMemberTpl()
 * @method static \Model\Collection findByTableless()
 * @method static \Model\Collection findByForm()
 * @method static \Model\Collection findByQueryType()
 * @method static \Model\Collection findByFuzzy()
 * @method static \Model\Collection findByContextLength()
 * @method static \Model\Collection findByTotalLength()
 * @method static \Model\Collection findByPerPage()
 * @method static \Model\Collection findBySearchType()
 * @method static \Model\Collection findBySearchTpl()
 * @method static \Model\Collection findByInColumn()
 * @method static \Model\Collection findBySkipFirst()
 * @method static \Model\Collection findByLoadFirst()
 * @method static \Model\Collection findBySize()
 * @method static \Model\Collection findByTransparent()
 * @method static \Model\Collection findByFlashvars()
 * @method static \Model\Collection findByAltContent()
 * @method static \Model\Collection findBySource()
 * @method static \Model\Collection findBySingleSRC()
 * @method static \Model\Collection findByUrl()
 * @method static \Model\Collection findByInteractive()
 * @method static \Model\Collection findByFlashID()
 * @method static \Model\Collection findByFlashJS()
 * @method static \Model\Collection findByImgSize()
 * @method static \Model\Collection findByUseCaption()
 * @method static \Model\Collection findByFullsize()
 * @method static \Model\Collection findByMultiSRC()
 * @method static \Model\Collection findByOrderSRC()
 * @method static \Model\Collection findByHtml()
 * @method static \Model\Collection findByRss_cache()
 * @method static \Model\Collection findByRss_feed()
 * @method static \Model\Collection findByRss_template()
 * @method static \Model\Collection findByNumberOfItems()
 * @method static \Model\Collection findByDisableCaptcha()
 * @method static \Model\Collection findByReg_groups()
 * @method static \Model\Collection findByReg_allowLogin()
 * @method static \Model\Collection findByReg_skipName()
 * @method static \Model\Collection findByReg_close()
 * @method static \Model\Collection findByReg_assignDir()
 * @method static \Model\Collection findByReg_homeDir()
 * @method static \Model\Collection findByReg_activate()
 * @method static \Model\Collection findByReg_jumpTo()
 * @method static \Model\Collection findByReg_text()
 * @method static \Model\Collection findByReg_password()
 * @method static \Model\Collection findByProtected()
 * @method static \Model\Collection findByGroups()
 * @method static \Model\Collection findByGuests()
 * @method static \Model\Collection findByCssID()
 * @method static \Model\Collection findBySpace()
 * @method static \Model\Collection findByCal_calendar()
 * @method static \Model\Collection findByCal_noSpan()
 * @method static \Model\Collection findByCal_startDay()
 * @method static \Model\Collection findByCal_format()
 * @method static \Model\Collection findByCal_ignoreDynamic()
 * @method static \Model\Collection findByCal_order()
 * @method static \Model\Collection findByCal_readerModule()
 * @method static \Model\Collection findByCal_limit()
 * @method static \Model\Collection findByCal_template()
 * @method static \Model\Collection findByCal_ctemplate()
 * @method static \Model\Collection findByCal_showQuantity()
 * @method static \Model\Collection findByCom_order()
 * @method static \Model\Collection findByCom_moderate()
 * @method static \Model\Collection findByCom_bbcode()
 * @method static \Model\Collection findByCom_requireLogin()
 * @method static \Model\Collection findByCom_disableCaptcha()
 * @method static \Model\Collection findByCom_template()
 * @method static \Model\Collection findByFaq_categories()
 * @method static \Model\Collection findByFaq_readerModule()
 * @method static \Model\Collection findByList_table()
 * @method static \Model\Collection findByList_fields()
 * @method static \Model\Collection findByList_where()
 * @method static \Model\Collection findByList_search()
 * @method static \Model\Collection findByList_sort()
 * @method static \Model\Collection findByList_info()
 * @method static \Model\Collection findByList_info_where()
 * @method static \Model\Collection findByList_layout()
 * @method static \Model\Collection findByList_info_layout()
 * @method static \Model\Collection findByNews_archives()
 * @method static \Model\Collection findByNews_featured()
 * @method static \Model\Collection findByNews_jumpToCurrent()
 * @method static \Model\Collection findByNews_readerModule()
 * @method static \Model\Collection findByNews_metaFields()
 * @method static \Model\Collection findByNews_template()
 * @method static \Model\Collection findByNews_format()
 * @method static \Model\Collection findByNews_startDay()
 * @method static \Model\Collection findByNews_order()
 * @method static \Model\Collection findByNews_showQuantity()
 * @method static \Model\Collection findByNewsletters()
 * @method static \Model\Collection findByNl_channels()
 * @method static \Model\Collection findByNl_hideChannels()
 * @method static \Model\Collection findByNl_subscribe()
 * @method static \Model\Collection findByNl_unsubscribe()
 * @method static \Model\Collection findByNl_template()
 * @method static integer countById()
 * @method static integer countByPid()
 * @method static integer countByTstamp()
 * @method static integer countByName()
 * @method static integer countByHeadline()
 * @method static integer countByType()
 * @method static integer countByLevelOffset()
 * @method static integer countByShowLevel()
 * @method static integer countByHardLimit()
 * @method static integer countByShowProtected()
 * @method static integer countByDefineRoot()
 * @method static integer countByRootPage()
 * @method static integer countByNavigationTpl()
 * @method static integer countByCustomTpl()
 * @method static integer countByPages()
 * @method static integer countByOrderPages()
 * @method static integer countByShowHidden()
 * @method static integer countByCustomLabel()
 * @method static integer countByAutologin()
 * @method static integer countByJumpTo()
 * @method static integer countByRedirectBack()
 * @method static integer countByCols()
 * @method static integer countByEditable()
 * @method static integer countByMemberTpl()
 * @method static integer countByTableless()
 * @method static integer countByForm()
 * @method static integer countByQueryType()
 * @method static integer countByFuzzy()
 * @method static integer countByContextLength()
 * @method static integer countByTotalLength()
 * @method static integer countByPerPage()
 * @method static integer countBySearchType()
 * @method static integer countBySearchTpl()
 * @method static integer countByInColumn()
 * @method static integer countBySkipFirst()
 * @method static integer countByLoadFirst()
 * @method static integer countBySize()
 * @method static integer countByTransparent()
 * @method static integer countByFlashvars()
 * @method static integer countByAltContent()
 * @method static integer countBySource()
 * @method static integer countBySingleSRC()
 * @method static integer countByUrl()
 * @method static integer countByInteractive()
 * @method static integer countByFlashID()
 * @method static integer countByFlashJS()
 * @method static integer countByImgSize()
 * @method static integer countByUseCaption()
 * @method static integer countByFullsize()
 * @method static integer countByMultiSRC()
 * @method static integer countByOrderSRC()
 * @method static integer countByHtml()
 * @method static integer countByRss_cache()
 * @method static integer countByRss_feed()
 * @method static integer countByRss_template()
 * @method static integer countByNumberOfItems()
 * @method static integer countByDisableCaptcha()
 * @method static integer countByReg_groups()
 * @method static integer countByReg_allowLogin()
 * @method static integer countByReg_skipName()
 * @method static integer countByReg_close()
 * @method static integer countByReg_assignDir()
 * @method static integer countByReg_homeDir()
 * @method static integer countByReg_activate()
 * @method static integer countByReg_jumpTo()
 * @method static integer countByReg_text()
 * @method static integer countByReg_password()
 * @method static integer countByProtected()
 * @method static integer countByGroups()
 * @method static integer countByGuests()
 * @method static integer countByCssID()
 * @method static integer countBySpace()
 * @method static integer countByCal_calendar()
 * @method static integer countByCal_noSpan()
 * @method static integer countByCal_startDay()
 * @method static integer countByCal_format()
 * @method static integer countByCal_ignoreDynamic()
 * @method static integer countByCal_order()
 * @method static integer countByCal_readerModule()
 * @method static integer countByCal_limit()
 * @method static integer countByCal_template()
 * @method static integer countByCal_ctemplate()
 * @method static integer countByCal_showQuantity()
 * @method static integer countByCom_order()
 * @method static integer countByCom_moderate()
 * @method static integer countByCom_bbcode()
 * @method static integer countByCom_requireLogin()
 * @method static integer countByCom_disableCaptcha()
 * @method static integer countByCom_template()
 * @method static integer countByFaq_categories()
 * @method static integer countByFaq_readerModule()
 * @method static integer countByList_table()
 * @method static integer countByList_fields()
 * @method static integer countByList_where()
 * @method static integer countByList_search()
 * @method static integer countByList_sort()
 * @method static integer countByList_info()
 * @method static integer countByList_info_where()
 * @method static integer countByList_layout()
 * @method static integer countByList_info_layout()
 * @method static integer countByNews_archives()
 * @method static integer countByNews_featured()
 * @method static integer countByNews_jumpToCurrent()
 * @method static integer countByNews_readerModule()
 * @method static integer countByNews_metaFields()
 * @method static integer countByNews_template()
 * @method static integer countByNews_format()
 * @method static integer countByNews_startDay()
 * @method static integer countByNews_order()
 * @method static integer countByNews_showQuantity()
 * @method static integer countByNewsletters()
 * @method static integer countByNl_channels()
 * @method static integer countByNl_hideChannels()
 * @method static integer countByNl_subscribe()
 * @method static integer countByNl_unsubscribe()
 * @method static integer countByNl_template()
 *
 * @author Leo Feyer <https://github.com/leofeyer>
 */
class ModuleModel extends \Model
{

	/**
	 * Table name
	 * @var string
	 */
	protected static $strTable = 'tl_module';

}
