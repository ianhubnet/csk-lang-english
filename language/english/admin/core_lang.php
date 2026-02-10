<?php

/**
 * ------------------------------------------------------------------------
 * CiSkeleton Admin Language File
 * ------------------------------------------------------------------------
 * This file contains all language lines used in the CSK admin dashboard.
 * Each section is separated by comments for easier navigation and maintenance.
 */

/**
 * ------------------------------------------------------------------------
 * Core Dashboard Section
 * ------------------------------------------------------------------------
 * General terms and messages used across the admin dashboard.
 */
$lang['admin_components'] = 'Components';
$lang['admin_content'] = 'Content';
$lang['admin_database_backup'] = 'Database Backups';
$lang['admin_extensions'] = 'Extensions';
$lang['admin_footer_left'] = 'Thank you for creating with <a href="%s" target="_blank" rel="noopener">%s</a>.';
$lang['admin_footer_right'] = 'Version: <b>%s</b>';
$lang['admin_help'] = 'Help';
$lang['admin_languages'] = 'Languages';
$lang['admin_logs'] = 'System Logs';
$lang['admin_media'] = 'Media Library';
$lang['admin_modules'] = 'Modules';
$lang['admin_plugins'] = 'Plugins';
$lang['admin_reports'] = 'Activity Log';
$lang['admin_settings'] = 'System Settings';
$lang['admin_sysinfo'] = 'System Information';
$lang['admin_system'] = 'System';
$lang['admin_themes'] = 'Themes';
$lang['admin_updates'] = 'System Updates';
$lang['admin_users'] = 'Users';
$lang['admin_view_site'] = 'View Site';

/**
 * ---------------------------------------------------------------
 * Database & Backup Section
 * ---------------------------------------------------------------
 * Language lines for the database management section.
 */
$lang['admin_database_backup_clean_error'] = 'Unable to clean old backup files.';
$lang['admin_database_backup_clean_success'] = '%d backup files deleted. %d disk space freed.';
$lang['admin_database_backup_create'] = 'Create Backup';
$lang['admin_database_backup_create_confirm'] = 'Are you sure you want to create a backup now?';
$lang['admin_database_backup_create_error'] = 'Unable to create backup file. Make sure the folder <b>%s</b> is writable.';
$lang['admin_database_backup_create_success'] = 'Database backup file <b>%s</b> successfully created.';
$lang['admin_database_backup_delete_confirm'] = 'Are you sure you want to delete these backup files?';
$lang['admin_database_backup_delete_error'] = 'Unable to delete selected backup files.';
$lang['admin_database_backup_delete_success'] = 'Backup files were successfully deleted.';
$lang['admin_database_backup_download_error'] = 'Unable to download the selected backup file.';
$lang['admin_database_backup_download_success'] = 'Backup file successfully downloaded.';
$lang['admin_database_backup_lock_confirm'] = 'Are you sure you want to lock these backup files?';
$lang['admin_database_backup_lock_error'] = 'Unable to lock selected backup files.';
$lang['admin_database_backup_lock_success'] = 'Backup files successfully locked.';
$lang['admin_database_backup_locked_error'] = 'Unable to delete locked backup files.';
$lang['admin_database_backup_missing_error'] = 'The backup file could not be found.';
$lang['admin_database_backup_unlock_confirm'] = 'Are you sure you want to unlock these backup files?';
$lang['admin_database_backup_unlock_error'] = 'Unable to unlock selected backup files.';
$lang['admin_database_backup_unlock_success'] = 'Backup files successfully unlocked.';
$lang['admin_database_prune'] = 'Prune';
$lang['admin_database_prune_confirm'] = 'Are you sure you want to prune the database? A backup will be created execution.';
$lang['admin_database_prune_error'] = 'Unable to prune database.';
$lang['admin_database_prune_next'] = 'Next prune: <b>%s</b>';
$lang['admin_database_prune_success'] = 'Database pruned successfully.';

/**
 * ---------------------------------------------------------------
 * System Logs Section
 * ---------------------------------------------------------------
 * Language lines for the system logs section.
 */
$lang['admin_logs_delete'] = 'Delete Logs';
$lang['admin_logs_delete_confirm'] = 'Are you sure you want to delete selected log files?';
$lang['admin_logs_delete_error'] = 'Unable to delete log files.';
$lang['admin_logs_delete_success'] = 'Log files successfully deleted.';
$lang['admin_logs_error_disabled'] = 'Logging is not currently enabled.';
$lang['admin_logs_error_empty'] = 'No logs found.';
$lang['admin_logs_error_missing'] = 'Either the log file could not be located, or it was empty.';
$lang['admin_logs_tip'] = 'Logging can rapidly create very large files. For live sites, think of deleting old ones.';

/**
 * ---------------------------------------------------------------
 * Emails Section
 * ---------------------------------------------------------------
 * Language lines for the mail queue section.
 */
$lang['admin_emails_delete_confirm'] = 'Are you sure you want to delete selected emails?';
$lang['admin_emails_delete_error'] = 'Unable to delete selected emails.';
$lang['admin_emails_delete_success'] = 'Selected emails deleted successfully.';
$lang['admin_emails_email_from'] = 'Sent From';
$lang['admin_emails_mail_queue'] = 'Mail Queue';
$lang['admin_emails_mailer'] = 'Mass Mail';
$lang['admin_emails_send_error'] = 'Failed to queue the email. Please try again.';
$lang['admin_emails_send_none'] = 'No users match your selected criteria.';
$lang['admin_emails_send_success'] = 'The email has been queued and will be sent shortly.';
$lang['admin_emails_send_to_banned'] = 'Send to banned users.';
$lang['admin_emails_send_to_deleted'] = 'Send to deleted users.';
$lang['admin_emails_send_to_disabled'] = 'Send to inactive users.';

/**
 * ---------------------------------------------------------------
 * System Settings Section
 * ---------------------------------------------------------------
 * Language lines for the admin dashboard settings section.
 */

// Page Titles
$lang['settings_captcha'] = 'Captcha Settings';
$lang['settings_datetime'] = 'Date & Time Settings';
$lang['settings_email'] = 'Email Settings';
$lang['settings_facebook'] = 'Facebook Settings';
$lang['settings_global'] = 'Global Settings';
$lang['settings_google'] = 'Google Settings';
$lang['settings_imgur'] = 'Imgur Settings';
$lang['settings_integrations'] = 'Integrations';
$lang['settings_manifest'] = 'Manifest Settings';
$lang['settings_other'] = 'Other Settings';
$lang['settings_updates'] = 'Update Settings';
$lang['settings_upload'] = 'Uploads Settings';
$lang['settings_users'] = 'Users Settings';
$lang['settings_website'] = 'Website Settings';

// Settings Fields & Help Texts
$lang['admin_email'] = 'Admin Email';
$lang['admin_email_tip'] = 'The email address to which site notices are sent.';
$lang['allow_2fa_trust'] = 'Allow users to trust devices';
$lang['allow_2fa_trust_tip'] = 'If enabled, users can mark a device as trusted to skip 2FA for 30 days. Disable this to require 2FA on every login.';
$lang['allow_multi_session'] = 'Allow multiple sessions.';
$lang['allow_multi_session_tip'] = 'Whether to allow multiple users to log in to the same account at the same time.';
$lang['allow_quick_login'] = 'Allow One-Click Login';
$lang['allow_quick_login_tip'] = 'Allow users to log in using a secure one-time email link that expires in 15 minutes.';
$lang['allow_registration'] = 'Allow Registration';
$lang['allow_registration_tip'] = 'Whether to allow users to create accounts on your site.';
$lang['allow_remember'] = 'Enable Login Cookies';
$lang['allow_remember_tip'] = 'Allow the browser to save a cookie so that users remain logged in even if they close the site window.';
$lang['allowed_types'] = 'Allowed Files';
$lang['allowed_types_tip'] = 'List of files that are allowed to be uploaded. Use "&#124;" to separate between types.';
$lang['base_controller'] = 'Base Controller';
$lang['base_controller_tip'] = 'The controller used as your default homepage.';
$lang['contact_email'] = 'Contact Email';
$lang['contact_email_tip'] = 'Public email address visitors can use to reach you.';
$lang['date_format'] = 'Date Format';
$lang['date_format_tip'] = 'Choose the date format you want to use.';
$lang['demo_mode'] = 'Demo Mode';
$lang['demo_mode_tip'] = 'Choose whether to put the site on demo-mode.';
$lang['email_activation'] = 'Email Activation';
$lang['email_activation_tip'] = 'Whether to force users to verify their email addresses before being allowed to log in.';
$lang['enable_profiler'] = 'Enable Profiler';
$lang['enable_profiler_tip'] = 'Display benchmark results, queries you have run, and various other info.';
$lang['environment_tip'] = 'Select the environment the site is running in.';
$lang['facebook_app_id'] = 'Facebook App ID';
$lang['facebook_app_id_tip'] = 'Enter your Facebook application ID.';
$lang['facebook_pixel_id'] = 'Facebook Pixel ID';
$lang['facebook_pixel_id_tip'] = 'Your Facebook Pixel ID. Used to track visits and conversions. You can find it in Events Manager under your pixel\'s settings.';
$lang['google_analytics_id'] = 'Google Analytics ID';
$lang['google_analytics_id_tip'] = 'Enter your Google Analytics Tracking ID.';
$lang['google_site_verification'] = 'Google Site Verification';
$lang['google_site_verification_tip'] = 'Enter your Google site verification code.';
$lang['google_tagmanager_id'] = 'Google Tag Manager ID';
$lang['google_tagmanager_id_tip'] = 'Enter the container ID. Leave empty if you want to use Google Analytics instead.';
$lang['image_watermark'] = 'Watermark Images';
$lang['image_watermark_tip'] = 'Enable to automatically add a watermark to all uploaded images.';
$lang['imgur_client_id'] = 'Client ID';
$lang['imgur_client_id_tip'] = 'Enter your Imgur application client ID.';
$lang['imgur_client_secret'] = 'Client Secret';
$lang['imgur_client_secret_tip'] = 'Enter your Imgur application secret key.';
$lang['login_alert_failure_tip'] = 'Alert users about any failed login attempts to their account.';
$lang['login_alert_success_tip'] = 'Notify users about any successful login to their account.';
$lang['login_fail_allowed_attempts'] = 'Allowed login attempts';
$lang['login_fail_allowed_attempts_tip'] = 'Number of failed attempts before short lockout.';
$lang['login_fail_allowed_lockouts'] = 'Allowed login lockouts';
$lang['login_fail_allowed_lockouts_tip'] = 'Number of short lockouts before long lockout applies.';
$lang['login_fail_enabled'] = 'Enable failed login lock';
$lang['login_fail_enabled_tip'] = 'Enable or disable failed login protection.';
$lang['login_fail_long_lockout'] = 'Long login lockout';
$lang['login_fail_long_lockout_tip'] = 'Lockout time in hours after multiple short lockouts.';
$lang['login_fail_short_lockout'] = 'Short login lockout';
$lang['login_fail_short_lockout_tip'] = 'Lockout time in minutes after too many failed attempts.';
$lang['login_type'] = 'Login Type';
$lang['login_type_tip'] = 'Users may log in using usernames, email addresses, or both.';
$lang['mail_protocol'] = 'Mail Protocol';
$lang['mail_protocol_tip'] = 'Choose the mail protocol you want to send emails with.';
$lang['manual_activation'] = 'Manual Activation';
$lang['manual_activation_tip'] = 'Whether to manually verify user accounts.';
$lang['max_height'] = 'Max Height';
$lang['max_height_tip'] = 'The maximum height in pixels. Set to zero for no limit.';
$lang['max_size'] = 'Max File Size';
$lang['max_size_tip'] = 'The maximum size (in kilobytes) that the file can be. Set to zero for no limit.';
$lang['max_width'] = 'Max width';
$lang['max_width_tip'] = 'The maximum width in pixels. Set to zero for no limit.';
$lang['min_height'] = 'Min Height';
$lang['min_height_tip'] = 'The minimum height in pixels. Set to zero for no limit.';
$lang['min_width'] = 'Min width';
$lang['min_width_tip'] = 'The minimum width in pixels. Set to zero for no limit.';
$lang['offline_access_level'] = 'Maintenance Mode Access';
$lang['offline_access_level_tip'] = 'The minimum level capable to login while in maintenance mode.';
$lang['per_page'] = 'Per Page';
$lang['per_page_tip'] = 'How many items are shown on pages using pagination?';
$lang['pwa'] = 'PWA';
$lang['recaptcha_secret_key'] = 'reCAPTCHA Secret Key';
$lang['recaptcha_secret_key_tip'] = 'Enter your reCAPTCHA secret key provided by Google.';
$lang['recaptcha_site_key'] = 'reCAPTCHA Site Key';
$lang['recaptcha_site_key_tip'] = 'Enter your reCAPTCHA site key provided by Google.';
$lang['sendmail_path'] = 'Sendmail Path';
$lang['sendmail_path_tip'] = 'Enter the sendmail path. Default: /usr/sbin/sendmail. Required only if using the Sendmail protocol.';
$lang['server_email'] = 'Server Email';
$lang['server_email_tip'] = 'The email address used to send emails to users. Set as "From". You can use "noreply@..." or an existing email address.';
$lang['site_author'] = 'Site Author';
$lang['site_author_tip'] = 'Enter the site author if you want to add the author meta tag.';
$lang['site_background_color'] = 'Background Color';
$lang['site_background_color_tip'] = 'Sets the background color for the splash screen that appears when the app is loading.';
$lang['site_description'] = 'Site Description';
$lang['site_description_tip'] = 'Enter a short description for your site.';
$lang['site_favicon'] = 'Site Favicon';
$lang['site_favicon_tip'] = 'Enter the URL to the image or icon you want to use as your site\'s favicon.';
$lang['site_keywords'] = 'Site Keywords';
$lang['site_keywords_tip'] = 'Enter your comma-separated site keywords.';
$lang['site_name'] = 'Site Name';
$lang['site_name_tip'] = 'Enter the name of your site.';
$lang['site_offline_tip'] = 'Select if access to the site frontend is available.';
$lang['site_public'] = 'Public Site';
$lang['site_public_tip'] = 'Controls whether this site should appear in search engine results. When disabled, standard <code>noindex</code> directives are added, but search engines may choose whether to honor them.';
$lang['site_short_name'] = 'Shorter Site Name';
$lang['site_short_name_tip'] = 'Shorter version of the name, used in spaces where screen real estate is limited, like under icons.';
$lang['site_theme_color'] = 'Theme Color';
$lang['site_theme_color_tip'] = 'Sets the color of the browser\'s address bar when the user is viewing the site. Some mobile browsers, like Chrome on Android, use this to provide a more integrated experience.';
$lang['smtp_crypto'] = 'SMTP Encryption';
$lang['smtp_crypto_tip'] = 'Choose the SMTP encryption.';
$lang['smtp_host'] = 'SMTP Host';
$lang['smtp_host_tip'] = 'Enter the SMTP host name (i.e: smtp.gmail.com). Required only if using the SMTP protocol.';
$lang['smtp_pass'] = 'SMTP Password';
$lang['smtp_pass_tip'] = 'Enter the password for your SMTP account.';
$lang['smtp_port'] = 'SMTP Port';
$lang['smtp_port_tip'] = 'Enter the SMTP port number provided by your host. Required only if using the SMTP protocol.';
$lang['smtp_user'] = 'SMTP Username';
$lang['smtp_user_tip'] = 'Enter the username of your SMTP account.';
$lang['time_format'] = 'Time Format';
$lang['time_format_tip'] = 'Choose the time format you want to use.';
$lang['time_reference'] = 'Site Timezone';
$lang['time_reference_tip'] = 'Select the timezone for your site. All times will be displayed in this timezone.';
$lang['update_alert_enabled'] = 'Update Notice';
$lang['update_alert_enabled_tip'] = 'Display a notice on the dashboard when an update is available.';
$lang['update_api_endpoint'] = 'Update Server URL';
$lang['update_api_endpoint_tip'] = 'The update server URL. Leave empty to use the official update server (recommended).';
$lang['update_backup_enabled'] = 'Backup Before Update';
$lang['update_backup_enabled_tip'] = 'Automatically create a backup of the site before applying any updates.';
$lang['update_check_enabled'] = 'Enable Update Check';
$lang['update_check_enabled_tip'] = 'Enable this for the system to periodically check for new updates.';
$lang['update_check_interval'] = 'Check Interval';
$lang['update_check_interval_tip'] = 'The interval at which the system should check for new updates.';
$lang['update_client_key'] = 'Client Key';
$lang['update_client_key_tip'] = 'A unique key used to authenticate with the update server when requesting updates.';
$lang['update_email_enabled'] = 'Notify by Email';
$lang['update_email_enabled_tip'] = 'Enable this to receive an email notification when a new update is available.';
$lang['upload_path'] = 'Upload Path';
$lang['upload_path_tip'] = 'The path where different allowed files are uploaded to. Default: content/uploads/';
$lang['upload_year_month'] = 'Year/Month based folders';
$lang['upload_year_month_tip'] = 'Organize uploads into year/month based folders.';
$lang['use_captcha'] = 'Enable CAPTCHA';
$lang['use_captcha_tip'] = 'Whether to enable CAPTCHA on some site forms.';
$lang['use_gravatar'] = 'Use Gravatar';
$lang['use_gravatar_tip'] = 'Use Gravatar or allow users to upload their avatars.';
$lang['use_imgur'] = 'Upload to Imgur.com';
$lang['use_imgur_tip'] = 'Upload your images to Imgur instead (<a href="https://api.imgur.com/oauth2/addclient" target="_blank" rel="noopener noreferrer nofollow">Requires App</a>).';
$lang['use_manifest'] = 'Enable Progressive Web App';
$lang['use_manifest_tip'] = 'A "manifest.json" file is a JSON file that provides metadata about a site or web application, primarily to enhance how the site behaves on mobile devices and how it can be added to the user\'s home screen as a Progressive Web App (PWA).';
$lang['use_recaptcha'] = 'Use reCAPTCHA';
$lang['use_recaptcha_tip'] = 'Whether to use Google reCAPTCHA. Requires valid site and secret keys, and CAPTCHA to be enabled.';

// System Information
$lang['sysinfo_database_type'] = 'Database Type';
$lang['sysinfo_database_version'] = 'Database Version';
$lang['sysinfo_disable_functions'] = 'Disabled Functions';
$lang['sysinfo_display_errors'] = 'Display Errors';
$lang['sysinfo_file_uploads'] = 'File Uploads';
$lang['sysinfo_iconv'] = 'Iconv Available';
$lang['sysinfo_magic_quotes_gpc'] = 'Magic Quotes';
$lang['sysinfo_max_input_vars'] = 'Maximum Input Variables';
$lang['sysinfo_mbstring'] = 'Multibyte String (mbstring) enabled';
$lang['sysinfo_open_basedir'] = 'Open basedir';
$lang['sysinfo_output_buffering'] = 'Output Buffering';
$lang['sysinfo_php_built_on'] = 'PHP Built On';
$lang['sysinfo_php_info'] = 'PHP Information';
$lang['sysinfo_php_settings'] = 'PHP Settings';
$lang['sysinfo_php_version'] = 'PHP Version';
$lang['sysinfo_register_globals'] = 'Register Globals';
$lang['sysinfo_safe_mode'] = 'Safe Mode';
$lang['sysinfo_session.auto_start'] = 'Session Auto Start';
$lang['sysinfo_session.save_path'] = 'Session Save Path';
$lang['sysinfo_short_open_tag'] = 'Short Open Tag';
$lang['sysinfo_skeleton_version'] = 'Skeleton Version';
$lang['sysinfo_user_agent'] = 'User Agent';
$lang['sysinfo_web_server'] = 'Web Server';
$lang['sysinfo_xml'] = 'XML Enabled';
$lang['sysinfo_zip'] = 'Native ZIP Enabled';
$lang['sysinfo_zlib'] = 'Zlib Enabled';

/**
 * ---------------------------------------------------------------
 * Users Section
 * ---------------------------------------------------------------
 * Language lines for the users management section.
 */
$lang['admin_users_add'] = 'Add User';
$lang['admin_users_all_users'] = 'All Users';
$lang['admin_users_ban_confirm'] = 'Are you sure you want to ban selected users?';
$lang['admin_users_ban_error'] = 'Unable to ban selected users.';
$lang['admin_users_ban_success'] = 'Selected users successfully banned.';
$lang['admin_users_delete_confirm'] = 'Are you sure you want to delete selected users?';
$lang['admin_users_delete_error'] = 'Unable to delete selected users.';
$lang['admin_users_delete_success'] = 'Selected users successfully deleted.';
$lang['admin_users_disable_confirm'] = 'Are you sure you want to disable selected users?';
$lang['admin_users_disable_error'] = 'Unable to disable selected users.';
$lang['admin_users_disable_success'] = 'Selected users successfully disabled.';
$lang['admin_users_edit'] = 'Edit User';
$lang['admin_users_edit_error'] = 'Unable to update user.';
$lang['admin_users_edit_success'] = 'User successfully updated.';
$lang['admin_users_enable_confirm'] = 'Are you sure you want to enable selected users?';
$lang['admin_users_enable_error'] = 'Unable to enable selected users.';
$lang['admin_users_enable_success'] = 'Selected users successfully enabled.';
$lang['admin_users_groups'] = 'Groups';
$lang['admin_users_lock_confirm'] = 'Are you sure you want to lock selected users?';
$lang['admin_users_lock_error'] = 'Unable to lock selected users.';
$lang['admin_users_lock_success'] = 'Selected users successfully locked.';
$lang['admin_users_logged'] = 'Logged-in Users';
$lang['admin_users_manage'] = 'Manage Users';
$lang['admin_users_remove_confirm'] = 'Are you sure you want to permanently delete selected users and all their data?';
$lang['admin_users_remove_error'] = 'Unable to permanently delete selected users and all their data.';
$lang['admin_users_remove_success'] = 'Selected users all their data successfully deleted.';
$lang['admin_users_restore_confirm'] = 'Are you sure you want to restore selected users?';
$lang['admin_users_restore_error'] = 'Unable to restore selected users.';
$lang['admin_users_restore_success'] = 'Selected users successfully restored.';
$lang['admin_users_search'] = 'Search by name, username, or email...';
$lang['admin_users_unban_confirm'] = 'Are you sure you want to unban selected users?';
$lang['admin_users_unban_error'] = 'Unable to unban selected users.';
$lang['admin_users_unban_success'] = 'Selected users successfully unbanned.';
$lang['admin_users_unlock_confirm'] = 'Are you sure you want to unlock selected users?';
$lang['admin_users_unlock_error'] = 'Unable to unlock selected users.';
$lang['admin_users_unlock_success'] = 'Selected users successfully unlocked.';

/**
 * ---------------------------------------------------------------
 * Reports Section
 * ---------------------------------------------------------------
 * Language lines for the activity log section.
 */
$lang['admin_reports_clear'] = 'Clear Logs';
$lang['admin_reports_clear_confirm'] = 'Are you sure you want to clear the actions log?';
$lang['admin_reports_clear_error'] = 'Unable to clear actions log.';
$lang['admin_reports_clear_success'] = 'Actions log successfully cleared.';
$lang['admin_reports_latest_actions'] = 'Latest Actions';

/**
 * ---------------------------------------------------------------
 * Media Library Section
 * ---------------------------------------------------------------
 * Language lines for the media library section.
 */
$lang['admin_media_delete_confirm'] = 'Are you sure you want to delete selected files?';
$lang['admin_media_delete_error'] = 'Unable to delete files.';
$lang['admin_media_delete_success'] = 'Files successfully deleted.';
$lang['admin_media_file_delete_error'] = 'Unable to delete file.';
$lang['admin_media_file_delete_success'] = 'File successfully deleted.';
$lang['admin_media_file_update_error'] = 'Unable to update file.';
$lang['admin_media_file_update_success'] = 'File successfully updated.';

/**
 * ---------------------------------------------------------------
 * Modules Section
 * ---------------------------------------------------------------
 * Language lines for the modules management section.
 */
$lang['admin_modules_add'] = 'Add Module';
$lang['admin_modules_delete_confirm'] = 'Are you sure you want to delete the module: <b>%s</b>?';
$lang['admin_modules_delete_error'] = 'Unable to delete the module.';
$lang['admin_modules_delete_success'] = 'Module successfully deleted.';
$lang['admin_modules_disable_all_confirm'] = 'Are you sure you want to disable all modules?';
$lang['admin_modules_disable_all_error'] = 'Unable to disable all modules.';
$lang['admin_modules_disable_all_success'] = 'All modules were successfully disabled.';
$lang['admin_modules_disable_confirm'] = 'Are you sure you want to disable the module: <b>%s</b>?';
$lang['admin_modules_disable_error'] = 'Unable to deactivate the module.';
$lang['admin_modules_disable_success'] = 'Module successfully deactivated.';
$lang['admin_modules_enable_all_confirm'] = 'Are you sure you want to enable all modules?';
$lang['admin_modules_enable_all_error'] = 'Unable to enable all modules.';
$lang['admin_modules_enable_all_success'] = 'All modules were successfully enabled.';
$lang['admin_modules_enable_confirm'] = 'Are you sure you want to enable the module: <b>%s</b>?';
$lang['admin_modules_enable_error'] = 'Unable to activate the module.';
$lang['admin_modules_enable_success'] = 'Module successfully activated.';
$lang['admin_modules_install'] = 'Install Module';
$lang['admin_modules_install_error'] = 'Unable to install module.';
$lang['admin_modules_install_success'] = 'Module successfully installed.';
$lang['admin_modules_install_tip'] = 'Modules add new features and functionality to your site. Browse available modules in the <a href="%s" target="_blank" rel="noopener">module directory</a> or upload one as a .zip package.';
$lang['admin_modules_location_application'] = 'Private to this app';
$lang['admin_modules_location_core'] = 'Shared across all apps';
$lang['admin_modules_location_public'] = 'Public to this app';
$lang['admin_modules_location_select'] = '&#151; Select location &#151;';
$lang['admin_modules_upload'] = 'Upload Module';
$lang['admin_modules_upload_error'] = 'Unable to upload module.';
$lang['admin_modules_upload_success'] = 'Module successfully uploaded.';
$lang['admin_modules_upload_tip'] = 'If you have a module in a .zip format, you may install it by uploading it here.';

/**
 * ---------------------------------------------------------------
 * Plugins Section
 * ---------------------------------------------------------------
 * Language lines for the plugins management section.
 */
$lang['admin_plugins_add'] = 'Add Plugin';
$lang['admin_plugins_delete_confirm'] = 'Are you sure you want to delete the plugin: <b>%s</b>?';
$lang['admin_plugins_delete_error'] = 'Unable to delete the plugin.';
$lang['admin_plugins_delete_success'] = 'Plugin successfully deleted.';
$lang['admin_plugins_disable_all_confirm'] = 'Are you sure you want to disable all plugins?';
$lang['admin_plugins_disable_all_error'] = 'Unable to disable all plugins.';
$lang['admin_plugins_disable_all_success'] = 'All plugins were successfully disabled.';
$lang['admin_plugins_disable_confirm'] = 'Are you sure you want to disable the plugin: <b>%s</b>?';
$lang['admin_plugins_disable_error'] = 'Unable to deactivate the plugin.';
$lang['admin_plugins_disable_success'] = 'Plugin successfully deactivated.';
$lang['admin_plugins_enable_all_confirm'] = 'Are you sure you want to enable all plugins?';
$lang['admin_plugins_enable_all_error'] = 'Unable to enable all plugins.';
$lang['admin_plugins_enable_all_success'] = 'All plugins were successfully enabled.';
$lang['admin_plugins_enable_confirm'] = 'Are you sure you want to enable the plugin: <b>%s</b>?';
$lang['admin_plugins_enable_error'] = 'Unable to activate the plugin.';
$lang['admin_plugins_enable_success'] = 'Plugin successfully activated.';
$lang['admin_plugins_install'] = 'Install Plugin';
$lang['admin_plugins_install_error'] = 'Unable to install plugin.';
$lang['admin_plugins_install_success'] = 'Plugin successfully installed.';
$lang['admin_plugins_install_tip'] = 'Plugins extend existing features with extra options or integrations. Install from the <a href="%s" target="_blank" rel="noopener">plugin directory</a> or upload a .zip file.';
$lang['admin_plugins_location_application'] = 'Private to this app';
$lang['admin_plugins_location_core'] = 'Shared across all apps';
$lang['admin_plugins_location_public'] = 'Public to this app';
$lang['admin_plugins_location_select'] = '&#151; Select location &#151;';
$lang['admin_plugins_upload'] = 'Upload Plugin';
$lang['admin_plugins_upload_error'] = 'Unable to upload plugin.';
$lang['admin_plugins_upload_success'] = 'Plugin successfully uploaded.';
$lang['admin_plugins_upload_tip'] = 'If you have a plugin in a .zip format, you may install it by uploading it here.';

/**
 * ---------------------------------------------------------------
 * Themes Section
 * ---------------------------------------------------------------
 * Language lines for the themes management section.
 */
$lang['admin_themes_add'] = 'Add Theme';
$lang['admin_themes_delete_confirm'] = 'Are you sure you want to delete the theme: <b>%s</b>?';
$lang['admin_themes_delete_error'] = 'Unable to delete theme.';
$lang['admin_themes_delete_error_active'] = 'You cannot delete the currently active theme.';
$lang['admin_themes_delete_success'] = 'Theme successfully deleted.';
$lang['admin_themes_disable_confirm'] = 'Are you sure you want to deactivate the theme: <b>%s</b>?';
$lang['admin_themes_disable_error'] = 'Unable to deactivate theme.';
$lang['admin_themes_disable_success'] = 'Theme successfully deactivated.';
$lang['admin_themes_enable_confirm'] = 'Are you sure you want to activate the theme: <b>%s</b>?';
$lang['admin_themes_enable_error'] = 'Unable to activate theme.';
$lang['admin_themes_enable_success'] = 'Theme successfully activated.';
$lang['admin_themes_install'] = 'Install Theme';
$lang['admin_themes_install_error'] = 'Unable to install theme.';
$lang['admin_themes_install_success'] = 'Theme successfully installed.';
$lang['admin_themes_install_tip'] = 'Themes change your site’s appearance and layout. Choose from the <a href="%s" target="_blank" rel="noopener">theme library</a> or upload a .zip file to install your own.';
$lang['admin_themes_upload'] = 'Upload Theme';
$lang['admin_themes_upload_error'] = 'Unable to upload theme.';
$lang['admin_themes_upload_success'] = 'Theme successfully uploaded.';
$lang['admin_themes_upload_tip'] = 'If you have a theme in a .zip format, you may install it by uploading it here.';

/**
 * ---------------------------------------------------------------
 * Menus Section
 * ---------------------------------------------------------------
 * Language lines for the menu locations section.
 */
$lang['admin_menus'] = 'Menus';
$lang['admin_menus_assign_error'] = 'Unable to update menu locations.';
$lang['admin_menus_assign_success'] = 'Menu locations updated successfully.';
$lang['admin_menus_header'] = 'There are <b>%s</b> menu locations available.';
$lang['admin_menus_location'] = 'Location';
$lang['admin_menus_locations'] = 'Menu Locations';
$lang['admin_menus_manage'] = 'Manage Menus';
$lang['admin_menus_menu'] = 'Assigned Menu';
$lang['admin_menus_none'] = '&#151; None &#151;';

/**
 * ---------------------------------------------------------------
 * Languages Section
 * ---------------------------------------------------------------
 * Language lines for the languages management section.
 */
$lang['admin_languages_default_confirm'] = 'Are you sure you want to make this language the site\'s default language?';
$lang['admin_languages_default_error'] = 'Unable to change default language.';
$lang['admin_languages_default_error_nochange'] = 'This language is already the default one.';
$lang['admin_languages_default_success'] = 'Default language successfully changed.';
$lang['admin_languages_disable_all_confirm'] = 'Are you sure you want to disable all languages?';
$lang['admin_languages_disable_all_error'] = 'Unable to disable all languages.';
$lang['admin_languages_disable_all_success'] = 'All languages were successfully disabled.';
$lang['admin_languages_disable_confirm'] = 'Are you sure you want to disable the language: <b>%s</b>?';
$lang['admin_languages_disable_error'] = 'Unable to disable language.';
$lang['admin_languages_disable_error_default'] = 'Default language cannot be disabled.';
$lang['admin_languages_disable_error_nochange'] = 'This language is already disabled.';
$lang['admin_languages_disable_success'] = 'Language successfully disabled.';
$lang['admin_languages_enable_all_confirm'] = 'Are you sure you want to enable all languages?';
$lang['admin_languages_enable_all_error'] = 'Unable to enable all languages.';
$lang['admin_languages_enable_all_success'] = 'All languages were successfully enabled.';
$lang['admin_languages_enable_confirm'] = 'Are you sure you want to enable the language: <b>%s</b>?';
$lang['admin_languages_enable_error'] = 'Unable to enable language.';
$lang['admin_languages_enable_error_nochange'] = 'This language is already enabled.';
$lang['admin_languages_enable_success'] = 'Language successfully enabled.';
$lang['admin_languages_reload_confirm'] = 'Are you sure you want to reload the language list?';
$lang['admin_languages_reload_error'] = 'Unable to reload language list. Please try again.';
$lang['admin_languages_reload_success'] = 'Language list successfully reloaded.';
$lang['admin_languages_tip'] = 'Enable, disable, and set the site\'s default language. Enabled languages are available to site visitors.';

/**
 * ---------------------------------------------------------------
 * Updates & License Section
 * ---------------------------------------------------------------
 * Language lines for updates and license and updates section.
 */
$lang['update_available'] = 'New updates available!';
$lang['update_backup_error'] = 'Unable to create a backup of the existing package. The update was aborted.';
$lang['update_check_disabled'] = 'Automatic update checks are disabled. Enable them to view updates.';
$lang['update_check_error'] = 'Unable to run the update check at this time.';
$lang['update_check_success'] = 'Update check completed successfully.';
$lang['update_check_throttled'] = 'Too many update check requests. Please try again in %s.';
$lang['update_deliver_error'] = 'Failed to register this update usage. The package will not be delivered.';
$lang['update_download_not_owned'] = 'This package is not included in your license.';
$lang['update_install_error'] = 'The package could not be installed. The current version was kept.';
$lang['update_install_success'] = 'Package successfully updated to the most recent version.';
$lang['update_interval_3days'] = 'Every 3 Days';
$lang['update_interval_biweekly'] = 'Every 2 Weeks';
$lang['update_interval_daily'] = 'Every Day';
$lang['update_interval_monthly'] = 'Once a Month';
$lang['update_interval_weekly'] = 'Once a Week';
$lang['update_license_domain_mismatch'] = 'License invalid for this domain.';
$lang['update_license_expired'] = 'Your license has expired.';
$lang['update_license_inactive'] = 'Your license is not active.';
$lang['update_license_invalid'] = 'The provided license key is invalid.';
$lang['update_license_missing'] = 'No license key or domain was provided.';
$lang['update_license_not_found'] = 'No matching license was found.';
$lang['update_license_not_set'] = 'No license key set.';
$lang['update_license_revoked'] = 'Your license has been revoked.';
$lang['update_license_token_mismatch'] = 'The download token does not match this license.';
$lang['update_not_available'] = 'Your website is up to date.';
$lang['update_package_missing'] = 'The package you are trying to update does not exist.';
$lang['update_request_missing_data'] = 'The request is missing required package information.';
$lang['update_rollback_error'] = 'Unable to restore the previous version. Manual intervention may be required.';
$lang['update_rollback_success'] = 'Previous version restored successfully.';
$lang['update_server_missing'] = 'No update server is configured. Please check your settings.';
$lang['update_token_generated'] = 'Download token has been generated successfully.';
$lang['update_token_missing'] = 'No download token was provided. The request cannot proceed.';
$lang['updates_available'] = 'Available Updates';
$lang['updates_check_now'] = 'Check now';
$lang['updates_check_now_confirm'] = 'Are you sure you want to check for updates now?';
$lang['updates_current_version'] = 'Current version';
$lang['updates_enable'] = 'Enable Updates';
$lang['updates_last_check'] = 'Last check: %s';
$lang['updates_latest_version'] = 'Latest version';
$lang['updates_next_check'] = 'Next scheduled check: %s';
$lang['updates_previous_version'] = 'Previous version';
$lang['updates_recent'] = 'Recently Updated';
