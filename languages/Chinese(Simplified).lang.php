<?php
/**************************************************************************************************************
 *
 *   CF Image Hosting Script
 *   ---------------------------------
 *
 *   Author:    codefuture.co.uk
 *   Version:   1.6.5
 *
 *   You can download the latest version from: http://codefuture.co.uk/projects/imagehost/
 *
 *   Copyright (c) 2010-2013 CodeFuture.co.uk
 *   This file is part of the CF Image Hosting Script.
 *
 *   THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 *   EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *   FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 *   COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
 *   WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF
 *   OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 *
 *   You may not modify and/or remove any copyright notices or labels on the software on each
 *   page (unless full license is purchase) and in the header of each script source file.
 *
 *   You should have received a full copy of the LICENSE AGREEMENT along with
 *   Codefuture Image Hosting Script. If not, see http://codefuture.co.uk/projects/imagehost/license/.
 *
 *
 *   ABOUT THIS PAGE -----
 *   Used For:     Chinese(Simplified) translation
 *   Last edited:  19/12/12
 *
 *************************************************************************************************************
 *
 *   If you have translated this file into another
 *   language or have corrected typos, we would
 *   appreciate it if you would send us the
 *   translated file.
 *
 *************************************************************************************************************/

	$lang = array();
	$lang["site_charset"] = 'UTF-8';
	$lang["site_lang_code"] = 'zh_CN';

/*****************************************************************************
 *
 * Admin Language
 *
 *****************************************************************************/

/*
 * Admin Sitewide
 */
	$lang["admin_footer_powered_by"]	= 'Powered By';
	$lang["admin_footer_version"]		= '版本';

/*
 * config
 */
	$lang["admin_session_error"]	= '无法开启新的 php 对话。请联系服务器管理员或者站长！';
	$lang["error_500"]				= '500 服务器内部错误 - 您请求的页面发生服务器内部错误。';
	$lang["error_404"]				= '404 没有找到 - 您请求的页面不存在。';
	$lang["error_403"]				= '403 禁止 - 您没有权限浏览该页面。';
	$lang["error_401"]				= '401 非法 - 您没有权限浏览该页面...';
	$lang["error_400"]				= '400 错误请求 - 您的浏览器发出的请求服务器无法处理...';


/*
 * Login Page (log)
 */
 	$lang["admin_log_title"]	= '登录';
 	$lang["admin_log_out_suc"]	= '您已成功注销。';
	$lang["admin_log_err"]		= '用户名或者密码错误！';
	// forgot your password - send link
	$lang["admin_log_forgot_password_email_subject"]	= '密码重置链接';//SET_TITLE - Password Reset Link  (SET_TITLE is auto set)
	//{user_name} replace with the admin username
	//{reset_url} replace with a link to reset the admin password
	$lang["admin_log_forgot_password_email_body"]		= '
	<div style="width:700px; margin:0 auto;">
		您好, {user_name}<br/>
		很抱歉的听到您忘了密码。<br/><br/>
		请单击下面的链接或者复制链接到您的浏览器中打开：<br/>
		{reset_url}<br/><br/>

		我们将重置您的密码。您可以登录然后再修改您的密码。<br/>
		这是自动回复，请不要回复！
	</div>';
	$lang["admin_log_forgot_password_suc"]			= '您已经发送了一封电子邮件...';
	$lang["admin_log_forgot_password_email_err"]	= '邮箱地址无效！';
	$lang["admin_log_forgot_password_err"]			= '重置密码时出错......';
	$lang["admin_log_forgot_password"]				= '忘了密码';
	$lang["admin_log_username"]						= '用户名';
	$lang["admin_log_password"]						= '密码';
	$lang["admin_log_remember_me"]					= '记住我的状态';
	$lang["admin_log_button"]						= '登录';
	$lang["admin_log_your_email"]					= '您的邮箱';
	$lang["admin_log_button_submit"]				= '提交';
 	$lang["admin_log_forgot_password_title"]		= '重置密码';
	$lang["admin_log_forgot_password_update"]		= '新密码已保存';


/*
 * Admin Menu
 */
	$lang["admin_menu_visitsite"]	= '浏览站点';
 	$lang["admin_menu_logout"]		= '注销';
	$lang["admin_menu_image_list"]	= '图片';
	$lang["admin_menu_settings"]	= '设置';
	$lang["admin_menu_banned"]		= '禁止用户';
	$lang["admin_menu_bulk"]		= '批量上传';
	$lang["admin_menu_home"]		= '仪表盘';
    $lang["admin_menu_ads"]			= '广告';
// not in pro
	$lang["admin_menu_database"]	= '数据库';


/*
 * admin Dashboard/home page
 */
	$lang["admin_home_dashboard_loading"]		= '如果仪表盘的加载时间过长，您可能会希望切换为基本模式。基本模式加载速度会快很多，但是仅能显示基本信息。如果您希望切换为基本模式，您可以在 inc 目录中找到文件 config.php，并将 "$ADMIN_DASHBOARD_FULL  = turn;" 数值修改为 false。';
	$lang["admin_home_overview"]				= '概况';
	$lang["admin_home_total_images"]			= '图片总数';
	$lang["admin_home_private_images"]			= '私人图片';
	$lang["admin_home_filespace_used"]			= '已使用空间';
	$lang["admin_home_total_bandwidth"]			= '已使用带宽';
 	$lang["admin_home_last_backup"]				= '最近一次备份于';
	$lang["admin_home_top_image"]				= '最热图片';
	$lang["admin_home_by_bandwidth"]			= '按带宽排序';
	$lang["admin_home_id"]						= 'ID';
	$lang["admin_home_name"]					= '名字';
	$lang["admin_home_bandwidth"]				= '带宽';
	$lang["admin_home_hotlink_views"]			= '外链浏览次数';
	$lang["admin_home_by_hotlink_views"]		= '按浏览次数排序';
    $lang["admin_home_uploaded_date"]				= '更新日期';
	$lang["admin_home_total_since_last_reset"]	= '重置后总数';
	$lang["admin_home_last_reset_date"]			= '最近重置于';
	$lang["admin_home_next_reset_date"] 		= '下一次重置于';
	// Reported images / some used on image list page to
	$lang["admin_home_reported_images"]		= '已举报图片';
	$lang["admin_home_tooltip_image_name"]	= '图片介绍/名字';
	$lang["admin_home_image_name"]			= '图片介绍/名字';
	$lang["admin_home_noreported"]			= '没有找到被举报的图片';
	$lang["admin_home_report_remove_suc"]	= '成功从已举报列表中移除图片。';
	$lang["admin_home_report_remove_err"]	= '从已举报列表中移除图片时发生错误。';
	$lang["admin_home_report_alt_remove"]	= '从已举报列表中移除图片';
	$lang["admin_home_report_alt_delete"]	= '删除图片';
	$lang["admin_home_report_delete"]	= '您确定要移除图片 ID "%s"？此操作不可撤销！'; // %s = image id
	$lang["admin_home_report_alt_ban"]	= '禁止用户上传图片';


/*
 * admin ads
 */
	$lang["admin_ad_page_title"]	= '站点广告设置';
	$lang["admin_ad_page_des"]		= '在此页面中，您可以为您的站点添加广告代码/html。 header 与 footer 是全站点显示，其他的则仅在特定的页面显示。如果您输入的是 AdSense 代码，站点将使用 AdSense。';
	$lang["admin_ad_title_header"]	= 'Header';
	$lang["admin_ad_title_index"]	= 'Index';
	$lang["admin_ad_title_thumb"]	= '缩略图';
	$lang["admin_ad_title_gallery"]	= '图库';
	$lang["admin_ad_title_footer"]	= 'Footer';
	$lang["admin_ad_label_header"]	= 'Header 区广告将在所有页面显示';
	$lang["admin_ad_label_index"]	= 'Index 区广告仅在首页上传工具附近显示';
	$lang["admin_ad_label_thumb"]	= '缩略图区广告仅在缩略图页面缩略图附近显示。';
	$lang["admin_ad_label_gallery"]	= '图库区广告将在图库与搜索结果第一项下面显示';
	$lang["admin_ad_label_footer"]	= 'Footer 区广告将在所有页面显示';


/*
 * admin Database page (not used in pro)
 */
	$lang["admin_db_title_database_setting"]			= '数据库工具';
	$lang["admin_db_menu_auto"]							= '数据库自动化';
	$lang["admin_db_menu_image"]						= '图片数据库备份';
	$lang["admin_db_menu_bandwidth"]					= '带宽数据库备份';
	$lang["admin_db_menu_rebuild"]						= '重建图片数据库';
	// Auto Database Setting
	$lang["admin_db_auto_title"]						= '数据库自动化设置';
	$lang["admin_db_auto_backup"]						= '自动备份数据库';
	$lang["admin_db_auto_every"]						= '自动备份频率';
	$lang["admin_db_auto_error"]						= '如果数据库发生错误，则使用最近一次备份的数据库';
	$lang["admin_db_auto_rebuild"]						= '如果使用备份的数据则运行数据库重建工具';
	$lang["admin_db_auto_every_6hours"]					= '6 小时';
	$lang["admin_db_auto_every_12hours"]				= '12 小时';
	$lang["admin_db_auto_every_day"]					= '一天一次';
	$lang["admin_db_auto_every_week"]					= '一周一次';
	// Image Database Setting
    $lang["admin_db_database_now"]						= '立即执行'; // Image and Bandwidth Database Settings
	$lang["admin_db_database_image_title"]				= '图片数据库备份';
	$lang["admin_db_database_image_replace"]			= '替换当前图片数据库为此备份文件（%1$s）？&#x0a;（请注意！此操作不可撤销！）';// %1$s - file name
	$lang["admin_db_database_image_backup"]		 		= '备份图片数据库';
	// Bandwidth Database Settings
	$lang["admin_db_database_bandwidth_title"]		 	= '带宽数据库备份';
	$lang["admin_db_database_bandwidth_replace"]		= '替换当前带宽数据库为此备份文件（%1$s）？&#x0a;（请注意！此操作不可撤销！）';// %1$s - file name
	$lang["admin_db_database_bandwidth_backup"]			= '备份带宽数据库';
	// Image & Bandwidth Database Settings
	$lang["admin_db_database_delete_backup"]			= '删除备份文件（%1$s）？&#x0a;（请注意！此操作不可撤销！）';// %1$s - file name
	$lang["admin_db_database_delete_backup_tip"]		= '删除此备份文件';
	$lang["admin_db_database_download_backup"]			= '下载此备份';
	$lang["admin_db_database_image_replace_tip"]		= '使用此备份文件';
	$lang["admin_db_database_backup_table_date"]		= '备份日期';
	$lang["admin_db_database_backup_table_date_tip"]	= '备份文件创建时间';
	$lang["admin_db_database_backup_table_name"]		= '备份文件';
	$lang["admin_db_database_backup_table_name_tip"]	= '备份文件文件名';
	// Rebuild Image Database
	$lang["admin_db_rebuild_title"]						= '重建图片数据库';
	$lang["admin_db_rebuild_description"]				= '此工具将检查图片上传文件夹中存在而图片数据中不存在的文件，如果找到这样的文件，将自动添加到数据库中。如果您数据库中不存在的文件太多的话，您可能需要多次运行。';
    $lang["admin_db_image_description"]					= '此工具将检查图片上传目录中丢失的图片、缩略图或者小缩略图。如果找不到完整的数据（例：图片、缩略图或小缩略图丢失），服务器将删掉该图片。建议运行数据库检查前先运行此工具。';
	$lang["admin_db_rebuild_check"]						= '检查数据库';
	$lang["admin_db_image_check"]						= '检查图片';
	// backup.class.php
	$lang["admin_db_backup_not_found"]					= '找不到备份文件！';
	$lang["admin_db_backup_deleted"]					= '成功删除备份文件！';
	$lang["admin_db_backup_delete_error"]				= '无法删除备份文件！';


/*
 * Admin Settings Page
 */
 	$lang["admin_set_save_button"]					= '保存修改';
	$lang["admin_set_option_on"]					= '开启';
	$lang["admin_set_option_off"]					= '关闭';
	$lang["admin_set_option_yes"]					= '是';
	$lang["admin_set_option_no"]					= '否';
	// settings menu
 	$lang["admin_set_title_admin_setting"]			= '帐号管理';
	$lang["admin_set_title_site_setting"]			= '常规';
	$lang["admin_set_title_gallery_setting"]		= '图库';
	$lang["admin_set_title_hide_page"]				= '开启/关闭功能';
	$lang["admin_set_title_hide_page_description"]	= '开启或者关闭不需要的功能';
	$lang["admin_set_title_auto_deleted"]			= '自动删除';
	$lang["admin_set_title_upload_setting"]			= '上传';
	$lang["admin_set_watermark_title"]				= '水印';
	$lang["admin_set_title_url_shortener"]			= '短链接生成';
	$lang["admin_set_title_google_setting"]			= 'Google';
	$lang["admin_set_title_comment"]				= '评论'; // pro only
	// admin setting
	$lang["admin_set_old_password"]					= '旧密码';
	$lang["admin_set_new_password"]					= '新密码';
	$lang["admin_set_confirm_new_password"]			= '密码确认';
	$lang["admin_set_admin_username"]				= '管理员用户名';
	$lang["admin_set_email_address"]				= '邮箱地址';
	// site setting
	$lang["admin_set_script_url"]					= '站点地址（URL）';
	$lang["admin_set_site_title"]					= '站点标题';
	$lang["admin_set_site_slogan"]					= '宣传语';
	$lang["admin_set_footer_copyright"]				= '页脚版权';
	$lang["admin_set_site_theme"]					= '主题风格';
	$lang["admin_set_mod_rewrite"]					= 'Mod Rewrite';
	$lang["admin_set_addthis"]						= 'AddThis pubid';
	$lang["admin_set_language"]						= '设置站点语言';
	// Gallery Settings
    $lang["admin_set_images_gallery_rows"]		= '行数';
	$lang["admin_set_images_gallery_rows_no"]	= '每行图片数';
	$lang["admin_set_report_allow"]				= '允许举报图片';
	$lang["admin_set_report_Send_email"]		= '举报图片时发送邮件';
	// Hide/show Pages
	$lang["admin_set_hide_gallery"]				= '图库页面';
	$lang["admin_set_hide_contact"]				= '联系页面';
	$lang["admin_set_hide_tos"]					= '服务条款页面';
	$lang["admin_set_hide_search"]				= '搜索栏';
	$lang["admin_set_hide_faq"]					= 'FAQ页面';
    $lang["admin_set_image_widgit"]				= '显示随机图片';
	$lang["admin_set_hide_feed"]				= '关闭RSS订阅';
	$lang["admin_set_hide_sitemap"]				= '关闭网站地图';
	// Auto Remove images (auto deleted)
	$lang["admin_set_des_auto_deleted"]			= '自动删除功能可以帮您清理旧的与不使用的图片。此功能主要是给那些图片上传网站使用，不过如果您是使用此工具来与家人、好友等分享图片/图片，我们建议您最好关闭此功能，因为这种情况下您一般有较多的时间管理站点。';
	$lang["admin_set_auto_deleted"]				= '自动删除（未被浏览）';
	$lang["admin_set_auto_deleted_for"]			= '自动删除（未被浏览时长）';
	$lang["admin_set_auto_deleted_days"]		= '天';
	$lang["admin_set_run_auto_deleted"]			= '运行自动删除';
	$lang["admin_set_run_auto_deleted_day"]		= '每天';
	$lang["admin_set_run_auto_deleted_week"]	= '每周';
	$lang["admin_set_run_auto_deleted_Month"]	= '每月';
	// Upload Settings
	$lang["admin_set_disable_upload"]			= '关闭上传';
	$lang["admin_set_max_upload_file_size"]		= '最大文件上传大小';
	$lang["admin_set_image_max_bandwidth_des"]	= '如果您不想要设置带宽限制，可以将图片最大带宽设置为 0 。';
	$lang["admin_set_image_max_bandwidth"]		= '图片最大带宽';
	$lang["admin_set_auto_reset_bandwidth"]		= '自动重置带宽';
	$lang["admin_set_multiple_upload_max"]		= '批量上传最大值';
	$lang["admin_set_allow_duplicate"]			= '避免上传重复图片';
	$lang["admin_set_allow_image_resize"]		= '允许用户在上传时修改图片尺寸';
	$lang["admin_set_private_image_upload"]		= '私人图片上传';
	// Watermark Settings
	$lang["admin_set_watermark_des"]			= '水印可以放置在图片的底部或者左上角，仅当在其他站点浏览图片时才会看到水印。';
	$lang["admin_set_watermark_text"]			= '水印文本';
	$lang["admin_set_watermark_image"]			= '水印图片地址';
	$lang["admin_set_watermark_position"]			= '水印位置';
	$lang["admin_set_watermark_center"]			= '中心';
	$lang["admin_set_watermark_left"]			= '左边';
	$lang["admin_set_watermark_right"]			= '右边';
	$lang["admin_set_watermark_top"]			= '顶部';
	$lang["admin_set_watermark_bottom"]			= '底部';
	// URL Shortener Settings
	$lang["admin_set_url_shortener"]			= '短链接工具(b54.in)';
	$lang["admin_set_url_short_service"]		= '短链接生成器服务';
	$lang["admin_set_url_short_api_url"]		= 'API URL <small>（限Yurl）</small>';
	$lang["admin_set_url_short_api_username"]	= 'API 用户名 <small>（B54以外的服务）</small>';
	$lang["admin_set_url_short_api_password"]	= 'API 密码/密钥 <small>（B54以外的服务）</small>';
	// Google Settings
	$lang["admin_set_google_setting_des"]		= '如果您下面输入代码的话，站点将自动添加谷歌分析和Adsence';
	$lang["admin_set_google_analytics_code"]	= '谷歌分析代码';
	$lang["admin_set_google_channal_code"]		= 'Adsense自定义通道ID';
	$lang["admin_set_google_adsense_code"]		= 'Google AdSense 代码';
	// Save Errors
	$lang["admin_set_err_password_wrong"]		= '您输入的密码有误！';
	$lang["admin_set_err_password_both"]		= '新密码与旧密码都必须输入！';
	$lang["admin_set_err_username"]				= '用户名是必填内容，不可以放空';
	$lang["admin_set_err_email_invalid"]		= '您输入的邮箱地址不可用。';
	$lang["admin_set_err_script_url"]			= '站点链接（URL）是必填内容，不可以放空';
	$lang["admin_set_suc_update"]				= '已更新设置！';
	$lang["admin_set_err_saveing_settings"]		= '保存设置时发生错误';


/*
 * Bulk upload page
 */
	$lang["admin_bulk_title"]			= '批量上传图片';
	$lang["admin_bulk_des"]				= '你可以通过FTP上传图片到"%1$s"目录，然后点击下面的上传图片按钮，从而将上传的图片添加到数据库中。每次最多只能上传%2$s图片，此数值可以在 config.php 中修改……你用FTP上传图片的数量没有限制，但是每次添加图片到数据库的数量则限定在%2$s以内。';// %1$s = folder name; %2$s = number of images that can be uploaded 
	$lang["admin_bulk_list"]			= '1) 上传图片到 "%1$s"<br/>
											2) 点击底下的“上传图片”按钮<br/>
											3) 等待上传，根据您的图片大小与数量，您可能需要一定的时间。<br/>
											4) 如果图片数量超过%2$s，请回到第2步继续上传。';// %1$s = folder name; %2$s = number of images that can be uploaded 
											
	$lang["admin_bulk_form_button"]		= "上传图片";
	$lang["admin_bulk_no_image_err"]	= "文件夹 %s 内找不到可以上传的图片";// %s = folder name 
	$lang["admin_bulk_list_show"]		= '上传完成后显示图片';
	$lang["admin_bulk_upload_success"]	= '已成功上传 %s 图片';// %s = number of image uploaded 

	
/*
 * Ban User Page
 */
	$lang["admin_ban_suc"]					= '您已成功禁止 IP: %s 上传新图片';
	$lang["admin_ban_err_save_db"]			= '保存到数据库时发生错误！';
	$lang["admin_ban_err_no_ip"]			= '您输入输入要禁止的 IP 地址！';
	$lang["admin_ban_suc_unbanned"]			= '您已成功解禁 IP：%s';
	$lang["admin_ban_alt_unban"]			= '解禁';
	$lang["admin_ban_form_title"]			= '禁止 IP 上传';
	$lang["admin_ban_form_ip"]				= 'IP';
	$lang["admin_ban_form_reason"]			= '原因';
	$lang["admin_ban_form_button"]			= '禁止 IP';
	$lang["admin_ban_list_tt_date_banned"]	= '添加到禁止列表的日期';
	$lang["admin_ban_list_date_banned"]		= '禁止日期';
	$lang["admin_ban_list_tt_ip"]			= '已禁止 IP 地址';
	$lang["admin_ban_list_ip"]				= 'IP';
	$lang["admin_ban_list_tt_reason"]		= '禁止原因';
	$lang["admin_ban_list_reason"]			= '原因';


/*
 * Image List Page (ilp)
 */
	$lang["admin_ilp_thumb_page_link"]				= '链接页面';
	$lang["admin_ilp_edit_alt"]						= '编辑图片公开/私人属性与介绍/名字';
	$lang["admin_ilp_report_alt_delete"]			= '删除图片';
	$lang["admin_ilp_report_delete"]				= "您确定要删除图片 ID '%s'？此操作不可撤销！"; // %s = image id
	$lang["admin_ilp_report_alt_ban"]				= '禁止用户上传图片';
	$lang["admin_ilp_number_to_list"]				= '每页显示';
	$lang["admin_ilp_number_to_list_all"]			= '全部';
	$lang["admin_ilp_order_list"]					= '排序原则';
	$lang["admin_ilp_order_list_date_added"]		= '上传日期';
	$lang["admin_ilp_order_list_last_viewed"]		= '最近一次浏览';
	$lang["admin_ilp_order_list_hotlink_views"]		= '外链浏览次数';
	$lang["admin_ilp_order_list_bandwidth_used"]	= '已使用带宽';
	$lang["admin_ilp_order_list_gallery_clicked"]	= '图库点击次数';
	$lang["admin_ilp_order_list_private"]			= '私人';
	$lang["admin_ilp_imglist_tt_image_added"]		= '图片上传日期';
	$lang["admin_ilp_imglist_image_added"]			= '上传日期';
	$lang["admin_ilp_imglist_tt_image_name"]		= '图片描述/名字';
	$lang["admin_ilp_imglist_image_name"]			= '图片描述/名字';
	$lang["admin_ilp_imglist_tt_last_viewed"]		= '未活跃天数';
	$lang["admin_ilp_imglist_last_viewed"]			= '最近一次浏览';
	$lang["admin_ilp_imglist_tt_gallery_clicks"]	= '图片在图库中被点击次数';
	$lang["admin_ilp_imglist_gallery_clicks"]		= '图库点击次数';
 	$lang["admin_ilp_imglist_tt_hotlink_views"]		= '外链被浏览的次数（如不是从此站点）';
	$lang["admin_ilp_imglist_hotlink_views"]		= '外链使用次数';
	$lang["admin_ilp_imglist_tt_bandwidth_used"]	= '外链已使用带宽';
	$lang["admin_ilp_imglist_bandwidth_used"]		= '已使用带宽';
    $lang["admin_ilp_imglist_tt_private"]			= '是否是私人照片（不显示在图库中）';
	$lang["admin_ilp_imglist_private"]				= '私人';
    $lang["admin_ilp_ipsearch_alt"]					= '查找用户 %s 上传的所有图片';
	$lang["admin_ilp_st_reset"]						= '从最近一次重置数据计算';
	$lang["admin_ilp_st_all"]						= '建站开始';

/*
 * Image edit Page (iep)
 */
	$lang["admin_iep_suc"]				= '您已成功更新图片。';
	$lang["admin_iep_title"]			= '编辑图片';
	$lang["admin_iep_des_title"]		= '介绍';
	$lang["admin_iep_pp_title"]			= '公开/私人属性';
	$lang["admin_iep_private"]			= '私人';
	$lang["admin_iep_public"]			= '公开';
	$lang["admin_iep_button"]			= '更新';
	$lang["admin_iep_page_views"]		= '页面访问数';
// pro only
	$lang["admin_comment_edit"]			= '编辑评论';
// 1.6
	$lang["admin_iep_img_info"]			= '图片信息';
	$lang["admin_iep_uploaded"]			= '上传于';
	$lang["admin_iep_time"]				= '上传消耗时间';
	$lang["admin_iep_format"]			= '格式';
	$lang["admin_iep_ip_uploaded"]		= '上传IP';
	$lang["admin_iep_ip_find_uploaded"]	= '查看此用户的所有图片';
	$lang["admin_iep_img_size"]			= '图片大小';
	$lang["admin_iep_thumb_size"]		= '缩略图大小';
	$lang["admin_iep_small_thumb_size"]	= '小缩略图大小';
	$lang["admin_iep_short_url"]		= '短链接';
	$lang["admin_iep_last_viewd"	]	= '最近查看';
	$lang["admin_iep_bandwidth_views"]	= '带宽/浏览量';
	$lang["admin_iep_since_uploaded"]	= '从上传之日开始算起';
	$lang["admin_iep_img_views"]		= '图片浏览量';
	$lang["admin_iep_thumb_views"]		= '缩略图浏览量';
	$lang["admin_iep_small_thumb_views"]= '小缩略图浏览量';
	$lang["admin_iep_gallery_views"]	= '相册浏览量';
	$lang["admin_iep_bandwidth_used"]	= '已使用带宽';
	$lang["admin_iep_from_last_reset"]	= '从最近一次重置开始算起';


/*
 * Site Pagination
 */
	$lang["pagination_next_page_tip"]		= "下一页";
	$lang["pagination_previous_page_tip"]	= "上一页";
	$lang["pagination_page_first_tip"]		= "第一页";
	$lang["pagination_page_last_tip"]		= "最后一页";
	$lang["pagination_page_tip"]			= '第 %1$d 页'; // %1$d - page number
	$lang["pagination_page_of"]				= '%1$s 页/ %2$s页';// %1$s - page on / %2$s number of pages
	$lang["pagination_page_first"]			= '第一页';
	$lang["pagination_page_last"]			= '最后一页';


/*****************************************************************************
 *
 * Web Site Language
 *
 *****************************************************************************/


/*
 * Sitewide
 */
	$lang["site_search_text"]	= '图片搜索';
	$lang["site_search_button"]	= '搜素';
	$lang["site_language"]		= '站点语言：';
	$lang["home_image_widgit"]	= '随机图片';
	$lang["footer_feed_title"]	= '图片源';


/*
 * Site Menu
 */
	$lang["site_menu_home"]		= '首页';
	$lang["site_menu_gallery"]	= '图库';
	$lang["site_menu_faq"]		= 'FAQ';
	$lang["site_menu_tos"]		= '服务条款';
	$lang["site_menu_contact"]	= '与我联系';


 /*
 * Site Feed
 */
	$lang["feed_description"]		= '前 10 张最新图片';
	$lang["feed_language"]			= '英语-英国';
	$lang["feed_image_name"]		= '图片名字';
	$lang["feed_no_images"]			= '未上传图片';


/*
 * Delete Images msg
 */
 	$lang["site_index_delete_image_suc"]			= '您的图片已成功删除。';
	$lang["site_index_delete_image_err_db"]			= '保存数据库时发生错误！';
	$lang["site_index_delete_image_err_not_found"]	= '没有找到该文件名的文件！';


/*
 * Upload images msg
 */
 	$lang["upload_duplicate_found"]		= '您上传的一个或者多个文件之前已经有人上传过了。';
	$lang["site_upload_url_err_no_image"]	= '找不到相关图片或者服务器拒绝访问该图片。';
	$lang["site_upload_err"]			= '文件上传时发生错误！';
	$lang["site_upload_err_no_image"]	= '抱歉，找不到要上传的图片！';
	$lang["site_upload_banned"]			= '抱歉，但您已经被禁止在此站点上传图片了。';
	$lang["site_upload_to_small"]		= '抱歉，图片尺寸太小，%s 是允许的最小尺寸。';
	$lang["site_upload_to_big"]			= '抱歉，图片尺寸太大，%s 是允许的最大尺寸。';
	$lang["site_upload_size_accepted"]	= '只能上传小于 %s 的图片';
	$lang["site_upload_types_accepted"]	= '只能上传 %s 格式的图片';


/*
 * Index/Home Page
 */
 	$lang["site_index_des"]								= '上传图片/照片到图床并与好友、家人、同事分享。';
	$lang["site_index_Image_Formats"]					= '支持图片格式';
	$lang["site_index_maximum_filesize"]				= '最大文件尺寸';
	$lang["site_index_uploading_image"]					= '正在上传图片...';
	$lang["site_index_upload_image"]					= '待上传图片';
	$lang["site_index_upload_browse_button"]			= '浏览';
	$lang["site_index_upload_description"]				= '介绍：（可选）';
	$lang["site_index_upload_button"]					= '上传';
	$lang["site_index_upload_disable"]					= '已禁止上传';
	$lang["site_index_local_image_upload"]				= '本地';
	$lang["site_index_local_image_upload_title"]		= '上传本地图片';
	$lang["site_index_Remote_image_copy"]				= '远程';
	$lang["site_index_Remote_image_copy_title"]		= '复制远程图片';
	$lang["site_index_Remote_image"]					= '您想上传的图片链接';
	$lang["site_index_auto_deleted"]					= '<b>不活跃文件</b>隔 %s 天后将自动从服务器中删除。';
	$lang["site_index_max_bandwidth"]					= '外链浏览限制';
	$lang["site_index_max_bandwidth_per"]				= '带宽/单张图片';
	$lang["site_index_max_bandwidth_per_week"] 	= '（每周）';
	$lang["site_index_max_bandwidth_per_month"]	= '（每月）';
	$lang["site_index_max_upload"]						= '批量上传图片';
	$lang["site_index_max_upload_max"]					= '最大';
	$lang["site_index_tos_des"]							= '警告：禁止上传成人内容！<br/>任何与成人相关的内容将被移除。单击 %s 了解上传规则。';//%s = Terms of Service link 
 	$lang["site_index_upload_preferences"]				= '设置';
	$lang["site_index_resize_title"]					= '上传时调整图片大小';
	$lang["site_index_resize_height"]					= '高度';
	$lang["site_index_resize_width"]					= '宽度';
	$lang["site_index_resize_des"]						= '仅输入高度或者宽度的话，图片将保持原有比例。如果同时输入高度与宽度，图片的尺寸将变为您定义的值！';
	$lang["site_index_private_img"]						= '私人图片..';
	$lang["site_index_short_url"]						= '生成短链结，利用';


/*
 * Thumbnail Page
 */
	$lang["site_index_hide_link"]				= '图片链接';
	$lang["site_index_social_networks"]			= '社交网络';
	$lang["site_index_short_url_link"]			= '短链接（Twitter）';
	$lang["site_index_bbcode"]					= 'BB代码（论坛）';
	$lang["site_index_html_code"]				= 'HTML代码（Myspace）';
	$lang["site_index_direct_link"]				= '直接链接（邮箱 &amp; IM）';
	$lang["site_index_small_thumbnail_link"]	= '小缩略图链接';
	$lang["site_index_thumbnail_link"]			= '缩略图链接';
	$lang["site_index_image_link"]				= '图片链接';
	$lang["site_index_thumbs_page_err"]			= '未找到该名字的文件！';
	$lang["site_index_delete_url"]				= '图片删除链接';
	$lang["site_index_delete_url_des"]			= '使用此链接随时移除您上传的图片。';


/*
 * Gallery Page
 */
	$lang["site_gallery_report_suc"]				= '图片已举报';
	$lang["site_gallery_report_err_reporting"]	= '抱歉，举报图片时发生错误。';
	$lang["site_gallery_report_err_find"]			= '找不到您要举报的图片。';
	$lang["site_gallery_report"]					= '举报';
	$lang["site_gallery_report_title"]				= '举报此图片';
	$lang["site_gallery_report_this"]				= '您确定要举报此图片？';
	$lang["site_gallery_page_title"]				= '图库页面';
	$lang["site_gallery_err_no_image"]				= '数据库中没有图片！';


/*
 * search Page
 */
	$lang["site_search_err_short"]					= '请至少输入 3 个字符。';
	$lang["site_search_err_blank"]					= '未输入搜索关键词。';
	$lang["site_search_page_title"]					= '图片搜索';
	$lang["site_search_results"]					= '找到 %s 个搜索结果：';
	$lang["site_search_no_results"]					= '抱歉，没有找到任何结果';
	$lang["site_search_suggestions"]				= '搜索建议：<br/>确保所有关键词都输入正确<br/>尝试短一点的关键词或者尝试别的关键词。';


/*
 * Contact Us Page
 */
	$lang["site_contact_thank_you"]					= '谢谢您，%s<br/>我们已收到您的信息，并且会尽快回复您的问题/评论。<br/>您的私人信息将严格保存，我们不会分享给第三方。';
	$lang["site_contact_des"]						= '请输入有效的邮箱地址，这样我们才能给您回复。<br/>您输入的邮箱不会公开显示。';
	$lang["site_contact_form_name"]					= '名字';
	$lang["site_contact_form_email"]				= '邮箱';
	$lang["site_contact_form_comment"]				= '评论';
	$lang["site_contact_form_captcha"]				= '验证码';
	$lang["site_contact_form_captcha_img"]			= '单击图片刷新';
	$lang["site_contact_form_captcha_image_title"]	= '单击图片以刷新验证码';
	$lang["site_contact_form_send"]					= '发送';
	$lang["site_contact_err_name_blank"]			= '您必须填写名字。';
	$lang["site_contact_err_email_blank"]			= '您必须填写邮箱地址。';
	$lang["site_contact_err_email_invalid"]			= '您输入的邮箱地址无效。';
	$lang["site_contact_err_comment_blank"]			= '您必须输入评论。';
	$lang["site_contact_err_captcha_blank"]			= '您必须输入验证码';
	$lang["site_contact_err_captcha_invalid"]		= '验证码错误';
	$lang["site_contact_err_captcha_cookie"]		= '未获取到验证码。请确保 cookies 已开启。';


/*
 * Terms of Service Page
 */
	$lang["site_tos_title"]						= '服务条款';
	$lang["site_tos_line1"]						= '有权关闭或者删除任何危害服务器安全、超负荷带宽使用、违背服务条款或者被视为不良内容的文件。（解释权归本站所有）';
	$lang["site_tos_line2"]						= '此图片上传服务并不意味着任何形式的担保。因服务器问题而导致的数据丢失、档案损坏，我们一律不承担责任。';
	$lang["site_tos_line3"]						= '禁止上传以下相关内容：';
	$lang["site_tos_line4"]						= '任何侵权的图片。';
	$lang["site_tos_line5"]						= '任何含有成人内容的图片，如色情描写、过度裸露。';
	$lang["site_tos_line6"]						= '任何含有恐怖场面的图片，如死人、肢解。';
	$lang["site_tos_line7"]						= '任何侵犯私人隐私的图片。';
	$lang["site_tos_line8"]						= '任何在当地被视为非法的图片。';
	$lang["site_tos_line9"]						= '文件不会被删除，除非达到了文件自动删除的时间或者违背了服务条款。';
	$lang["site_tos_line10"]					= '有权禁止任何危害服务器安全、超负荷带宽使用或者非法使用此服务的用户。';
	$lang["site_tos_line11"]					= '有权任何时候在事先不告知的情况下修改服务条款。';
	$lang["site_privacy_policy_title"]			= '隐私策略';
	$lang["site_privacy_policy_line1"]			= '我们承诺不出售、出租或者泄漏任何顾客的个人信息给第三方。';


/*
 * Frequently Asked Questions Page
 */
	$lang["site_faq_title"]							= '常见问题与解答';
	$lang["site_faq_q1"]							= '%s 是干嘛的？我怎么使用？';// %s site title
	$lang["site_faq_a1"]							= '我们提供免费的图片上传服务，您可以用来与朋友、家人分享图片，同时可以分享到邮箱、论坛、社交网络、博客以及在线拍卖网站。';
	$lang["site_faq_q2"]							= '此上传服务需要多少钱？';
	$lang["site_faq_a2"]							= '此站点保证永久 100&#37; 免费！%s 依靠大家的赞助与广告商的支持。';// %s site title
	$lang["site_faq_q3"]							= '支持哪些文件格式？';
	$lang["site_faq_a3"]							= '等格式。'; // file types are listed before this
	$lang["site_faq_q4"]							= '可以上传何种类型的图片？';
	$lang["site_faq_a4"]							= '任何合法的图片都可以，只要您不上传成人相关图片。任何违法的照片都将被删除，您的信息还可能会提供给相关部门。';
	$lang["site_faq_q5"]							= '为什么我上传的是.BMP 和 .PSD，但是最后却变成 .PNG 了？';
	$lang["site_faq_a5"]							= '为了减小文件大小，方便网络浏览，任何位图(.BMP)和 Photoshop文件(.PSD) 都将自动转换为 PNG 格式。';
	$lang["site_faq_q6"]							= '允许使用直接链接吗？';
	$lang["site_faq_a6"]							= '可以，我们支持直接链接（或者叫做“外链”）。不过建议外链使用缩略图，以免太早达到图片带宽限制：';// bandwidth limit (set in settings) is added to the end
	$lang["site_faq_q7"]							= '图片可以保存多久？';
	$lang["site_faq_a7_1"]							= '如果不出意外的话，上传的图片只要不违背 <a href="tos.php" title="%1$s">%1$s</a> 都将长期保存在服务器中。';//%1$s tos- title
	$lang["site_faq_a7_2"]							= '不过，如果您的图片超过 %1$d 天没有活跃，服务器将自动删除。';//%1$d number of days
	$lang["site_faq_q8"]							= '文件大小限制？';
	$lang["site_faq_a8"]							= '允许上传的最大文件尺寸为';// file size added to end (set in settings)
	$lang["site_faq_q9"]							= '如何支持本站点？';
	$lang["site_faq_a9"]							= '发布到个人网站或者通过其他途径推广，让更多的人了解本站！';
	$lang["site_faq_q10"]							= '其它问题？';
	$lang["site_faq_a10"]							= '请使用 <a href="contact.php" title="Contact page">与我联系</a> 发邮件提问。';

?>