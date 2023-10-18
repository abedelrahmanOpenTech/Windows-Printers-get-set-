/*Delete:*/
 DELETE FROM definition WHERE 1 
 AND definition_name='df_windows_printer_php_file_not_found' AND definition_form='windows_printer';

/*Insert:*/
 INSERT INTO definition 
(definition_name, definition_value_ltr, definition_value_rtl, definition_label, definition_tip_ltr, definition_tip_rtl, definition_width, definition_form, row_is_transferred, definition_for_mobile) 
VALUES 
('df_windows_printer_php_file_not_found', 'Printer File Not Found', 'ملف الطباعة غير موجود', '(?)', '', '', '200', 'windows_printer', '0', '0');
/* ----------------------------------------------------------------------------------------------------------------*/
/*Delete:*/
 DELETE FROM definition WHERE 1 
 AND definition_name='df_windows_printer_exe_file_not_found' AND definition_form='windows_printer';

/*Insert:*/
 INSERT INTO definition 
(definition_name, definition_value_ltr, definition_value_rtl, definition_label, definition_tip_ltr, definition_tip_rtl, definition_width, definition_form, row_is_transferred, definition_for_mobile) 
VALUES 
('df_windows_printer_exe_file_not_found', 'Windows Printer File Url Not Found', 'Windows Printer Fileغير موجود', '(?)', '', '', '200', 'windows_printer', '0', '0');
/* ----------------------------------------------------------------------------------------------------------------*/
/*Delete:*/
 DELETE FROM definition WHERE 1 
 AND definition_name='df_windows_printer_url_not_defined' AND definition_form='windows_printer';

/*Insert:*/
 INSERT INTO definition 
(definition_name, definition_value_ltr, definition_value_rtl, definition_label, definition_tip_ltr, definition_tip_rtl, definition_width, definition_form, row_is_transferred, definition_for_mobile) 
VALUES 
('df_windows_printer_url_not_defined', 'Windows Printer Url Not Defined', 'Windows Printer Url غير معرف', '(?)', '', '', '200', 'windows_printer', '0', '0');
/* ----------------------------------------------------------------------------------------------------------------*/
/*Delete:*/
 DELETE FROM definition WHERE 1 
 AND definition_name='df_windows_printer_url' AND definition_form='windows_printer';

/*Insert:*/
 INSERT INTO definition 
(definition_name, definition_value_ltr, definition_value_rtl, definition_label, definition_tip_ltr, definition_tip_rtl, definition_width, definition_form, row_is_transferred, definition_for_mobile) 
VALUES 
('df_windows_printer_url', 'http://192.168.1.121:90/test/otc_windows_printer/index.php', 'http://192.168.1.121:90/test/otc_windows_printer/index.php', '(?)', '', '', '200', 'windows_printer', '0', '0');
/* ----------------------------------------------------------------------------------------------------------------*/
