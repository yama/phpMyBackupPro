<?php
/*
 +--------------------------------------------------------------------------+
 | phpMyBackupPro                                                           |
 +--------------------------------------------------------------------------+
 | Copyright (c) 2004-2006 by Dirk Randhahn                                 |                               
 | http://www.phpMyBackupPro.net											|
 | version information can be found in definitions.php.                     |
 |                                                                          |
 | This program is free software; you can redistribute it and/or            |
 | modify it under the terms of the GNU General Public License              |
 | as published by the Free Software Foundation; either version 2           |
 | of the License, or (at your option) any later version.                   |
 |                                                                          |
 | This program is distributed in the hope that it will be useful,          |
 | but WITHOUT ANY WARRANTY; without even the implied warranty of           |
 | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            |
 | GNU General Public License for more details.                             |
 |                                                                          |
 | You should have received a copy of the GNU General Public License        |
 | along with this program; if not, write to the Free Software              |
 | Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307,USA.|
 +--------------------------------------------------------------------------+
*/
/*
 +--------------------------------------------------------------------------+
 | phpMyBackupPro Japanese translation                                      |
 +--------------------------------------------------------------------------+
 | Japanese translation 1.7                                                 |
 +--------------------------------------------------------------------------+
*/

chdir("..");
require_once("definitions.php");

echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01//EN\"
   \"http://www.w3.org/TR/html4/loose.dtd\">
<html".ARABIC_HTML.">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html;charset=".BD_CHARSET_HTML."\">
<link rel=\"stylesheet\" href=\"./../".PMBP_STYLESHEET_DIR.$CONF['stylesheet'].".css\" type=\"text/css\">
<title>phpMyBackupPro - ".F_HELP."</title>
</head>
<body>
<table border=\"0\" cellspacing=\"2\" cellpadding=\"0\" width=\"100%\">\n
<tr><th colspan=\"2\" class=\"active\">";
echo PMBP_image_tag("../".PMBP_IMAGE_DIR."logo.png","phpMyBackupPro PMBP_WEBSITE",PMBP_WEBSITE);
echo "</th></tr>\n";

// choose help text
switch(preg_replace("'^.*/'","",$_GET['script'])) {
    case 'index.php': $filename=F_START;
    $html="内容に対して特定のヘルプを取得するために様々な各ページのヘルプをクリックしてください。<br>
    より詳しい情報は次で見つけることができます: <a href=\"".PMBP_WEBSITE."\" target=\"_blank\">".PMBP_WEBSITE."</a><br>
    そこにバグとスペルミスを報告してください。";
    break;
    case 'config.php': $filename=F_CONFIG;
    $html="2 レベルの設定があります: basic and extended configuration options. Editing the extended configuration variables is optional.
	「*」は、この項目がブランクではないかもしれないことを示します。<br><br>
	基本設定:<br>
	".C_SITENAME.": このシステムの名前を与えます。例えば「production server'」です。<br>
	".C_LANG.": phpMyBackupPro の言語を変更します。Your can download several language packages on the phpMyBackupPro project site.<br>
	".C_SQL_HOST.": MySQL のホストを入力します。例えば「localhost」です。<br>
	".C_SQL_USER.": MySQL のユーザー名を入力します。<br>
	".C_SQL_PASSWD.": MySQL のパスワードを入力します。<br>
	".C_SQL_DB.": If you want to only use one database on the server, you can enter the name of that database here.<br>
	".C_FTP_USE.": Check this if you want to use FTP functions to upload your backups automatically to an FTP server.<br>
	".C_FTP_BACKUP.": Check this if you want to enable the backup of directories to a FTP server.<br>
	".C_FTP_REC.": Check this if you want to backup directories including their sub directories.<br>
	".C_FTP_SERVER.": FTP サーバーの IP アドレスか URL を入力します。<br>
	".C_FTP_USER.": FTP サーバーのログイン名を入力します。<br>
	".C_FTP_PASSWD.": FTP サーバーのパスワードを入力します。<br>
	".C_FTP_PATH.": バックアップを保管する FTP サーバー上のディレクトリパスを指定します。<br>
	".C_FTP_PASV.": これをチェックすると passive FTP を使用します。<br>
	".C_FTP_PORT.": FTP サーバーで利用可能なポートを入力します。デフォルトポートは 21 です。<br>
	".C_FTP_DEL.": Check this to have the backup files on the FTP server automatically deleted when they are deleted locally.<br>
	".C_EMAIL_USE.": これをチェックするとバックアップを自動で電子メールを用いて送信します。<br>
	".C_EMAIL.": バックアップを送信する電子メールアドレスを入力します。<br><br>
	拡張設定:<br>
	".C_STYLESHEET.": phpMyBackupPro のスタイルシートを選択します。phpMyBackupPro サイトのスタイルシートのダウンロードとアップロードができます。<br>
	".C_DATE.": お気に入りの日付の書式を選択します。<br>
	".C_LOGIN.": You can switch to HTTP authentication if you want to.<br>
	".C_DEL_TIME.": Specify a number of days after which the backup files are automatically deleted. Use 0 to disable this function.<br>
	".C_DEL_NUMBER.": Spezify a max number of backup files to be stored for each database.<br>
	".C_TIMELIMIT.": Increase the PHP time limit if there are problems with doing backups or imports. Will have no effect if PHP safe mode is on.<br>
	".C_CONFIRM.": Choose which actions on the import site need to be confirmed.<br>
	".C_IMPORT_ERROR.": Check this to receive a list of import errors if any occur.<br>
	".C_DIR_BACKUP.": Check this to enable directory backups. Valid FTP data must be entered to use this feature.<br>
	".C_DIR_REC.": Check this to backup directories recursively (with all subfolders).<br>
	".C_NO_LOGIN.": Check this to disable the login function. This is not recommended as everyone would get access to your database!<br><br>
	システム変数:<br>
	Here you can change the values of the internal phpMyBackupPro system variables. Only change anything if you know what you are doing.
	You can find further help in the 'SYSTEM_VARIABLES.txt' documentation file.";
    break;
    case 'import.php': $filename=F_IMPORT;
    $html="ここでローカルに保管されたすべてのバックアップファイルを参照することができます。<br>
    より詳しい情報は「info」をクリックすると取得できます。<br>
    By clicking 'view', you can read the backup file.<br>
    To download the backup file click '".B_DOWNLOAD."'.<br>
    Click 'import' to re-import the file in the db. Before this you can empty the db by clicking 'empty database'.<br>
    To delete a backup file click 'delete'. You can delete all files belonging to one database by clicking 'delete all backups'.<br><br>
    Click 'empty ALL databases' to empty all available databases, click 'import ALL backups' to import the latest backup of each database,
    click 'delete ALL backups' to delete all available backup files.";
    break;
    case 'backup.php': $filename=F_BACKUP;
    $html="Here you can select which databases you want to backup.<br>
    A comment will be saved to each backup file.<br>
    You can choose if just the table structure, the data or both will be stored.<br>
    Add a 'drop table if exists ...' row to each table structure by clicking 'add drop table'<br>
    You can also choose the compression format for the backup files. On some systems, not all formats are available.
    The zip format is still experimental. Confirm if the zip backup files work correctly!<br><br>
	If you have activated the ftp backup function, you also can backup complete directories to your ftp server.<br>
	The selected directories and their files will be copied to the '".C_FTP_PATH."' configured on the '".F_CONFIG."' page.<br>
	It is not possible to compress or email the files. The directory list is only generated once at the login. If you want to
	update the list, click on '".PMBP_EXS_UPDATE_DIRS."'.";
    break;
    case 'scheduled.php': $filename=F_SCHEDULE;
    $html="To automate the backup, you can generate some code to include in any existing PHP script.<br>
    When this script is loaded, the backup automatically starts. You can schedule when the backup will run.<br><br>
    Next, choose where the script will be located. The directory phpMyBackupPro.".PMBP_VERSION." must not be moved after this change!
	(If you have knowledge of coding PHP you can change the path later.)<br><br>
	A click on '".EXS_SHOW."' will show you a script that can be used for doing the scheduled backup. Copy the code and include it into an existing file,
	or use '".C_SAVE."' to save the script automatically with a given filename. This will overwrite an existing file with the same name!<br>
	Note: The file must be in the directory selected on the previous page in order to work correctly.<br>
    The backup will only run, when the script is opened or executed. You can include it into an existing PHP file or use a frame set with an invisible frame.<br><br>
    All configuration options will work in this script!<br> You can find more information about the backup options in the 'backup' help.";
    break;
    case 'db_info.php': $filename=F_DB_INFO;
    $html="ここはデータベースの小さな要約を参照できます。<br><br>
    In the column 'number of rows' you can find the sum of the number of rows from all tables.<br>
    If a database contains tables, you can click 'tables info' to get the names, number of cols, number of rows and size of all tables of the respective database.<br>
    The sizes may differ from the sizes of backup files because of additional data needed in the backup files.";
    break;
    case 'sql_query.php': $filename=F_SQL_QUERY;
    $html="このページはデータベースへ単純な SQL 照会を送信します。<br><br>
    You can select a database on which you want to run the queries.<br>
    You can insert one or more sql queries in the textbox.<br>
    Queries like 'select ...' will return a result table.<br>
    Some queries like 'delete ...' will only tell you '".SQ_SUCCESS."'<br><br>
    If you upload a file to be executed you will receive an error message for each error that has happened! (and this could be a lot!)<br>
    The last error message contains a list of all queries, which generated errors. An 'F' before a number of the query means this query was in the file.<br><br>
    これらの機能はまだよく練っていません。! There is no guarantee that all correct queries can be processed successfully!";
    break;
    default: $html="すみません、このサイトに利用可能なヘルプはありません。";
}

echo "<tr>\n<td>\n";
if ($filename) echo "<br><div class=\"bold_left\">「".$filename."」関連のヘルプ:</div><br>\n";
echo $html;
echo "</td>\n</tr>\n</table>\n</body>\n</html>";
?>
