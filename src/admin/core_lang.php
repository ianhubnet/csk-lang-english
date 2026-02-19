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
$lang['admin_firewall'] = 'Firewall';
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
$lang['admin_system_firewall'] = 'System Firewall';
$lang['admin_themes'] = 'Themes';
$lang['admin_updates'] = 'System Updates';
$lang['admin_users'] = 'Users';
$lang['admin_view_site'] = 'View Site';
$lang['per_page'] = 'Per Page';

/**
 * ---------------------------------------------------------------
 * Database & Backup Section
 * ---------------------------------------------------------------
 * Language lines for the database management section.
 */
$lang['admin_database_backup_clean_error'] = 'Failed to clean old backup files.';
$lang['admin_database_backup_clean_success'] = '%d backup files deleted. %d disk space freed.';
$lang['admin_database_backup_create'] = 'Create Backup';
$lang['admin_database_backup_create_confirm'] = 'Are you sure you want to create a backup now?';
$lang['admin_database_backup_create_error'] = 'Failed to create backup file. Make sure the folder <b>%s</b> is writable.';
$lang['admin_database_backup_create_success'] = 'Database backup file <b>%s</b> successfully created.';
$lang['admin_database_backup_delete_confirm'] = 'Are you sure you want to delete these backup files?';
$lang['admin_database_backup_delete_error'] = 'Failed to delete selected backup files.';
$lang['admin_database_backup_delete_success'] = 'Backup files were successfully deleted.';
$lang['admin_database_backup_download_error'] = 'Failed to download the selected backup file.';
$lang['admin_database_backup_download_success'] = 'Backup file successfully downloaded.';
$lang['admin_database_backup_lock_confirm'] = 'Are you sure you want to lock these backup files?';
$lang['admin_database_backup_lock_error'] = 'Failed to lock selected backup files.';
$lang['admin_database_backup_lock_success'] = 'Backup files successfully locked.';
$lang['admin_database_backup_locked_error'] = 'Failed to delete locked backup files.';
$lang['admin_database_backup_missing_error'] = 'The backup file could not be found.';
$lang['admin_database_backup_unlock_confirm'] = 'Are you sure you want to unlock these backup files?';
$lang['admin_database_backup_unlock_error'] = 'Failed to unlock selected backup files.';
$lang['admin_database_backup_unlock_success'] = 'Backup files successfully unlocked.';
$lang['admin_database_prune'] = 'Prune';
$lang['admin_database_prune_confirm'] = 'Are you sure you want to prune the database? A backup will be created execution.';
$lang['admin_database_prune_error'] = 'Failed to prune database.';
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
$lang['admin_logs_delete_error'] = 'Failed to delete log files.';
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
$lang['admin_emails_delete_error'] = 'Failed to delete selected emails.';
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
 * Users Section
 * ---------------------------------------------------------------
 * Language lines for the users management section.
 */
$lang['admin_users_add'] = 'Add User';
$lang['admin_users_all_users'] = 'All Users';
$lang['admin_users_ban_confirm'] = 'Are you sure you want to ban selected users?';
$lang['admin_users_ban_error'] = 'Failed to ban selected users.';
$lang['admin_users_ban_success'] = 'Selected users successfully banned.';
$lang['admin_users_delete_confirm'] = 'Are you sure you want to delete selected users?';
$lang['admin_users_delete_error'] = 'Failed to delete selected users.';
$lang['admin_users_delete_success'] = 'Selected users successfully deleted.';
$lang['admin_users_disable_confirm'] = 'Are you sure you want to disable selected users?';
$lang['admin_users_disable_error'] = 'Failed to disable selected users.';
$lang['admin_users_disable_success'] = 'Selected users successfully disabled.';
$lang['admin_users_edit'] = 'Edit User';
$lang['admin_users_edit_error'] = 'Failed to update user.';
$lang['admin_users_edit_success'] = 'User successfully updated.';
$lang['admin_users_enable_confirm'] = 'Are you sure you want to enable selected users?';
$lang['admin_users_enable_error'] = 'Failed to enable selected users.';
$lang['admin_users_enable_success'] = 'Selected users successfully enabled.';
$lang['admin_users_groups'] = 'Groups';
$lang['admin_users_lock_confirm'] = 'Are you sure you want to lock selected users?';
$lang['admin_users_lock_error'] = 'Failed to lock selected users.';
$lang['admin_users_lock_success'] = 'Selected users successfully locked.';
$lang['admin_users_logged'] = 'Logged-in Users';
$lang['admin_users_manage'] = 'Manage Users';
$lang['admin_users_remove_confirm'] = 'Are you sure you want to permanently delete selected users and all their data?';
$lang['admin_users_remove_error'] = 'Failed to permanently delete selected users and all their data.';
$lang['admin_users_remove_success'] = 'Selected users all their data successfully deleted.';
$lang['admin_users_restore_confirm'] = 'Are you sure you want to restore selected users?';
$lang['admin_users_restore_error'] = 'Failed to restore selected users.';
$lang['admin_users_restore_success'] = 'Selected users successfully restored.';
$lang['admin_users_search'] = 'Search by name, username, or email...';
$lang['admin_users_unban_confirm'] = 'Are you sure you want to unban selected users?';
$lang['admin_users_unban_error'] = 'Failed to unban selected users.';
$lang['admin_users_unban_success'] = 'Selected users successfully unbanned.';
$lang['admin_users_unlock_confirm'] = 'Are you sure you want to unlock selected users?';
$lang['admin_users_unlock_error'] = 'Failed to unlock selected users.';
$lang['admin_users_unlock_success'] = 'Selected users successfully unlocked.';

/**
 * ---------------------------------------------------------------
 * Reports Section
 * ---------------------------------------------------------------
 * Language lines for the activity log section.
 */
$lang['admin_reports_clear'] = 'Clear Logs';
$lang['admin_reports_clear_confirm'] = 'Are you sure you want to clear the actions log?';
$lang['admin_reports_clear_error'] = 'Failed to clear actions log.';
$lang['admin_reports_clear_success'] = 'Actions log successfully cleared.';
$lang['admin_reports_latest_actions'] = 'Latest Actions';

/**
 * ---------------------------------------------------------------
 * Media Library Section
 * ---------------------------------------------------------------
 * Language lines for the media library section.
 */
$lang['admin_media_delete_confirm'] = 'Are you sure you want to delete selected files?';
$lang['admin_media_delete_error'] = 'Failed to delete files.';
$lang['admin_media_delete_success'] = 'Files successfully deleted.';
$lang['admin_media_file_delete_error'] = 'Failed to delete file.';
$lang['admin_media_file_delete_success'] = 'File successfully deleted.';
$lang['admin_media_file_update_error'] = 'Failed to update file.';
$lang['admin_media_file_update_success'] = 'File successfully updated.';

/**
 * ---------------------------------------------------------------
 * Modules Section
 * ---------------------------------------------------------------
 * Language lines for the modules management section.
 */
$lang['admin_install_location_app'] = 'This application only';
$lang['admin_install_location_core'] = 'All applications';
$lang['admin_install_location_select'] = '&#151; Select location &#151;';
$lang['admin_modules_add'] = 'Add Module';
$lang['admin_modules_delete_confirm'] = 'Are you sure you want to delete the module: <b>%s</b>?';
$lang['admin_modules_delete_error'] = 'Failed to delete the module.';
$lang['admin_modules_delete_success'] = 'Module successfully deleted.';
$lang['admin_modules_disable_all_confirm'] = 'Are you sure you want to disable all modules?';
$lang['admin_modules_disable_all_error'] = 'Failed to disable all modules.';
$lang['admin_modules_disable_all_success'] = 'All modules were successfully disabled.';
$lang['admin_modules_disable_confirm'] = 'Are you sure you want to disable the module: <b>%s</b>?';
$lang['admin_modules_disable_error'] = 'Failed to deactivate the module.';
$lang['admin_modules_disable_success'] = 'Module successfully deactivated.';
$lang['admin_modules_enable_all_confirm'] = 'Are you sure you want to enable all modules?';
$lang['admin_modules_enable_all_error'] = 'Failed to enable all modules.';
$lang['admin_modules_enable_all_success'] = 'All modules were successfully enabled.';
$lang['admin_modules_enable_confirm'] = 'Are you sure you want to enable the module: <b>%s</b>?';
$lang['admin_modules_enable_error'] = 'Failed to activate the module.';
$lang['admin_modules_enable_success'] = 'Module successfully activated.';
$lang['admin_modules_install'] = 'Install Module';
$lang['admin_modules_install_error'] = 'Failed to install module.';
$lang['admin_modules_install_success'] = 'Module successfully installed.';
$lang['admin_modules_install_tip'] = 'Modules add new features and functionality to your site. Browse available modules in the <a href="%s" target="_blank" rel="noopener">module directory</a> or upload one as a .zip package.';
$lang['admin_modules_upload'] = 'Upload Module';
$lang['admin_modules_upload_error'] = 'Failed to upload module.';
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
$lang['admin_plugins_delete_error'] = 'Failed to delete the plugin.';
$lang['admin_plugins_delete_success'] = 'Plugin successfully deleted.';
$lang['admin_plugins_disable_all_confirm'] = 'Are you sure you want to disable all plugins?';
$lang['admin_plugins_disable_all_error'] = 'Failed to disable all plugins.';
$lang['admin_plugins_disable_all_success'] = 'All plugins were successfully disabled.';
$lang['admin_plugins_disable_confirm'] = 'Are you sure you want to disable the plugin: <b>%s</b>?';
$lang['admin_plugins_disable_error'] = 'Failed to deactivate the plugin.';
$lang['admin_plugins_disable_success'] = 'Plugin successfully deactivated.';
$lang['admin_plugins_enable_all_confirm'] = 'Are you sure you want to enable all plugins?';
$lang['admin_plugins_enable_all_error'] = 'Failed to enable all plugins.';
$lang['admin_plugins_enable_all_success'] = 'All plugins were successfully enabled.';
$lang['admin_plugins_enable_confirm'] = 'Are you sure you want to enable the plugin: <b>%s</b>?';
$lang['admin_plugins_enable_error'] = 'Failed to activate the plugin.';
$lang['admin_plugins_enable_success'] = 'Plugin successfully activated.';
$lang['admin_plugins_install'] = 'Install Plugin';
$lang['admin_plugins_install_error'] = 'Failed to install plugin.';
$lang['admin_plugins_install_success'] = 'Plugin successfully installed.';
$lang['admin_plugins_install_tip'] = 'Plugins extend existing features with extra options or integrations. Install from the <a href="%s" target="_blank" rel="noopener">plugin directory</a> or upload a .zip file.';
$lang['admin_plugins_upload'] = 'Upload Plugin';
$lang['admin_plugins_upload_error'] = 'Failed to upload plugin.';
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
$lang['admin_themes_delete_error'] = 'Failed to delete theme.';
$lang['admin_themes_delete_error_active'] = 'You cannot delete the currently active theme.';
$lang['admin_themes_delete_success'] = 'Theme successfully deleted.';
$lang['admin_themes_disable_confirm'] = 'Are you sure you want to deactivate the theme: <b>%s</b>?';
$lang['admin_themes_disable_error'] = 'Failed to deactivate theme.';
$lang['admin_themes_disable_success'] = 'Theme successfully deactivated.';
$lang['admin_themes_enable_confirm'] = 'Are you sure you want to activate the theme: <b>%s</b>?';
$lang['admin_themes_enable_error'] = 'Failed to activate theme.';
$lang['admin_themes_enable_success'] = 'Theme successfully activated.';
$lang['admin_themes_install'] = 'Install Theme';
$lang['admin_themes_install_error'] = 'Failed to install theme.';
$lang['admin_themes_install_success'] = 'Theme successfully installed.';
$lang['admin_themes_install_tip'] = 'Themes change your site\'s appearance and layout. Choose from the <a href="%s" target="_blank" rel="noopener">theme library</a> or upload a .zip file to install your own.';
$lang['admin_themes_upload'] = 'Upload Theme';
$lang['admin_themes_upload_error'] = 'Failed to upload theme.';
$lang['admin_themes_upload_success'] = 'Theme successfully uploaded.';
$lang['admin_themes_upload_tip'] = 'If you have a theme in a .zip format, you may install it by uploading it here.';

/**
 * ---------------------------------------------------------------
 * Menus Section
 * ---------------------------------------------------------------
 * Language lines for the menu locations section.
 */
$lang['admin_menus'] = 'Menus';
$lang['admin_menus_assign_error'] = 'Failed to update menu locations.';
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
$lang['admin_languages_default_error'] = 'Failed to change default language.';
$lang['admin_languages_default_error_nochange'] = 'This language is already the default one.';
$lang['admin_languages_default_success'] = 'Default language successfully changed.';
$lang['admin_languages_disable_all_confirm'] = 'Are you sure you want to disable all languages?';
$lang['admin_languages_disable_all_error'] = 'Failed to disable all languages.';
$lang['admin_languages_disable_all_success'] = 'All languages were successfully disabled.';
$lang['admin_languages_disable_confirm'] = 'Are you sure you want to disable the language: <b>%s</b>?';
$lang['admin_languages_disable_error'] = 'Failed to disable language.';
$lang['admin_languages_disable_error_default'] = 'Default language cannot be disabled.';
$lang['admin_languages_disable_error_nochange'] = 'This language is already disabled.';
$lang['admin_languages_disable_success'] = 'Language successfully disabled.';
$lang['admin_languages_enable_all_confirm'] = 'Are you sure you want to enable all languages?';
$lang['admin_languages_enable_all_error'] = 'Failed to enable all languages.';
$lang['admin_languages_enable_all_success'] = 'All languages were successfully enabled.';
$lang['admin_languages_enable_confirm'] = 'Are you sure you want to enable the language: <b>%s</b>?';
$lang['admin_languages_enable_error'] = 'Failed to enable language.';
$lang['admin_languages_enable_error_nochange'] = 'This language is already enabled.';
$lang['admin_languages_enable_success'] = 'Language successfully enabled.';
$lang['admin_languages_tip'] = 'Enable, disable, and set the site\'s default language. Enabled languages are available to site visitors.';

/**
 * ---------------------------------------------------------------
 * Updates & License Section
 * ---------------------------------------------------------------
 * Language lines for updates and license and updates section.
 */
$lang['update_available'] = 'New updates available!';
$lang['update_backup_error'] = 'Failed to create a backup of the existing package. The update was aborted.';
$lang['update_check_disabled'] = 'Automatic update checks are disabled. Enable them to view updates.';
$lang['update_check_error'] = 'Failed to run the update check at this time.';
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
$lang['update_rollback_error'] = 'Failed to restore the previous version. Manual intervention may be required.';
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

/**
 * ---------------------------------------------------------------
 * Firewall Section
 * ---------------------------------------------------------------
 * Language lines for the system firewall section.
 */
$lang['admin_firewall_ban_error'] = 'Failed to block the specified IP address.';
$lang['admin_firewall_ban_success'] = 'IP address has been successfully blocked.';
$lang['admin_firewall_block_ip'] = 'Block IP address';
$lang['admin_firewall_delete_confirm'] = 'Are you sure you want to unblock the selected IP addresses?';
$lang['admin_firewall_delete_error'] = 'Failed to unblock selected IP addresses.';
$lang['admin_firewall_delete_success'] = 'Selected IP addresses have been successfully unblocked.';
$lang['admin_firewall_duration'] = 'Ban duration';
$lang['admin_firewall_permanent'] = 'Permanent';
$lang['admin_firewall_reason'] = 'Ban reason';
$lang['admin_firewall_tip'] = 'View and manage IP addresses blocked by the firewall due to repeated violations or suspicious activity.';

// Settings
$lang['404_ban_duration'] = '404 Ban Duration';
$lang['404_threshold'] = '404 Strike Limit';
$lang['uri_ban_duration'] = 'URI Ban Duration';
$lang['uri_strike_threshold'] = 'URI Strike Limit';
