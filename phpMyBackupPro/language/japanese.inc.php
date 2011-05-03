<?php
/*
 +--------------------------------------------------------------------------+
 | phpMyBackupPro                                                           |
 +--------------------------------------------------------------------------+
 | Copyright (c) 2004-2006 by Dirk Randhahn                                 |                               
 | http://www.phpMyBackupPro.net                                            |
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
 | Japanese translation 2.1                                                 |
 +--------------------------------------------------------------------------+
*/

/*basic data*/
define('BD_LANG_SHORTCUT',"ja"); // used for the php function setlocale()
define('BD_DATE_FORMAT',"%x %X"); // used for the php function strftime()
define('BD_CHARSET_HTML',"UTF-8"); // the charset used in you language for html
define('BD_CHARSET_EMAIL',"ISO-2022-JP"); // the charset used in your langauge for MIME-emails

/*functions.inc.php*/
define('F_START',"ダッシュボード");
define('F_CONFIG',"設定");
define('F_IMPORT',"リストア");
define('F_BACKUP',"バックアップ");
define('F_SCHEDULE',"スケジュールバックアップ");
define('F_DB_INFO',"データベース情報");
define('F_SQL_QUERY',"SQL操作");
define('F_HELP',"ヘルプ");
define('F_LOGOUT',"ログアウト");
define('F_FOOTER',"新規リリースとニュースを取得するために %sphpMyBackupPro プロジェクトのサイト%s へ訪問します。");
define('F_NOW_AVAILABLE',"phpMyBackupPro の新しいバージョンが %s".PMBP_WEBSITE."%s で利用できます。");
define('F_SELECT_DB',"バックアップするデータベースを選択する");
define('F_SELECT_ALL',"すべて選択する");
define('F_COMMENTS',"コメント");
define('F_EX_TABLES',"テーブルをエクスポートする");
define('F_EX_DATA',"データをエクスポートする");
define('F_EX_DROP',"「drop table」を付加する");
define('F_EX_COMP',"圧縮する");
define('F_EX_OFF',"なし");
define('F_EX_GZIP',"gzip");
define('F_EX_ZIP',"zip");
define('F_DEL_FAILED',"Failed to delete backup %s");
define('F_FTP_1',"サーバーへの FTP 接続に失敗しました。");
define('F_FTP_2',"ユーザーでログインに失敗しました。");
define('F_FTP_3',"FTP アップロードに失敗しました");
define('F_FTP_4',"次のファイルとしてアップロードに成功しました:");
define('F_FTP_5',"ファイル「%s」の FTP 削除に失敗しました。");
define('F_FTP_6',"FTP サーバー上でファイル「%s」の削除に成功しました。");
define('F_FTP_7',"FTP サーバー上でファイル「%s」は利用できません。");
define('F_MAIL_1',"送信先メールアドレスが間違っています。");
define('F_MAIL_2',"このメールは phpMyBackupPro ".PMBP_VERSION." から送信しています。");
define('F_MAIL_3',"読み込みができません。");
define('F_MAIL_4',"MySQLバックアップ:");
define('F_MAIL_5',"メールを送信できません。");
define('F_MAIL_6',"ファイルをメール送信しました:");
define('F_YES',"はい");
define('F_NO',"いいえ");
define('F_DURATION',"期間");
define('F_SECONDS',"秒");
define('F_WRONG_FILE',"これは正確な .zip ファイルでないように見えます。それは phpMyBackupPro のバグかもしれません。");

/*index.php*/
define('I_SQL_ERROR',"エラー: 「configuration」に正確な MySQL データを挿入してください!");
define('I_NAME',"これは phpMyBackupPro です。");
define('I_WELCOME','phpMyBackupPro は GNU GPLライセンスの元で配布されているフリーソフトウェアです。<br />
これが初めての phpMyBackupPro の使用なら<a href="config.php">設定</a>から始めてください。<br />
サポートが必要ならオンラインヘルプを試すか、%s に訪れてください。<br />
ディレクトリ「export」とファイル「global_conf.php」の権限は 0777 に設定されていなければなりません。');
define('I_CONF_ERROR',"ファイル「".PMBP_GLOBAL_CONF."」が書き込めません!");
define('I_DIR_ERROR',"ディレクトリ「".PMBP_EXPORT_DIR."」が書き込めません!");
define('PMBP_I_INFO',"システム情報");
define('PMBP_I_SERVER',"サーバー");
define('PMBP_I_TIME',"時間");
define('PMBP_I_PHP_VERS',"PHP バージョン");
define('PMBP_I_MEM_LIMIT',"PHP メモリ制限");
define('PMBP_I_SAFE_MODE',"セーフモード");
define('PMBP_I_FTP',"FTP 転送可能");
define('PMBP_I_MAIL',"メール添付で送信可能");
define('PMBP_I_GZIP',"gzip 圧縮可能");
define('PMBP_I_SQL_SERVER',"MySQL サーバー");
define('PMBP_I_SQL_CLIENT',"MySQL クライアント");
define('PMBP_I_NO_RES',"*取得することができません*");
define('PMBP_I_LAST_SCHEDULED',"最後のスケジュール済バックアップ");
define('PMBP_I_LAST_LOGIN',"最後のログイン");
define('PMBP_I_LAST_LOGIN_ERROR',"最後の間違ったログイン");

/*config.php*/
define('C_SITENAME',"サイト名");
define('C_LANG',"言語");
define('C_SQL_HOST',"MySQL ホスト名");
define('C_SQL_USER',"MySQL ユーザー名");
define('C_SQL_PASSWD',"MySQL パスワード");
define('C_SQL_DB',"このデータベースのみ");
define('C_FTP_USE',"FTP でバックアップ保存?");
define('C_FTP_BACKUP',"ディレクトリバックアップを使用しますか?");
define('C_FTP_REC',"バックアップディレクトリは再帰的ですか?");
define('C_FTP_SERVER',"FTP サーバー (URL もしくは IP)");
define('C_FTP_USER',"FTP ユーザー名");
define('C_FTP_PASSWD',"FTP パスワード");
define('C_FTP_PATH',"FTP パス");
define('C_FTP_PASV',"FTP Passive を使いますか?");
define('C_FTP_PORT',"FTP ポート");
define('C_FTP_DEL',"FTP サーバーのファイルを削除する");
define('C_EMAIL_USE',"メール添付機能を使用する");
define('C_EMAIL',"メールアドレス");
define('C_STYLESHEET',"スキン");
define('C_DATE',"日付のスタイル");
define('C_DEL_TIME',"x 日経過したローカルバックアップを削除する");
define('C_DEL_NUMBER',"データベース毎に最大 x ファイル保存します");
define('C_TIMELIMIT',"PHP 時間制限");
define('C_IMPORT_ERROR',"リストア時のエラーを表示しますか?");
define('C_NO_LOGIN',"ログイン機能を無効にしますか?");
define('C_LOGIN',"HTTP 認証しますか?");
define('C_DIR_BACKUP',"ディレクトリバックアップを有効にしますか?");
define('C_DIR_REC',"サブディレクトリにディレクトリバックアップしますか?");
define('C_CONFIRM',"確認レベル");
define('C_CONFIRM_1',"空、削除、リストア");
define('C_CONFIRM_2',"... all");
define('C_CONFIRM_3',"... ALL");
define('C_CONFIRM_4',"何も確認しません");

define('C_BASIC_VAL',"基本設定");
define('C_EXT_VAL',"拡張設定");
define('PMBP_C_SYSTEM_VAL',"システム変数");
define('PMBP_C_SYS_WARNING',"これらのシステム変数は phpMyBackupPro にて管理されています。もし何をしているか知らないならそれらを編集しないでください!");
define('C_TITLE_SQL',"SQL データ");
define('C_TITLE_FTP',"FTP でバックアップ");
define('C_TITLE_EMAIL',"メール添付でバックアップ");
define('C_TITLE_STYLE',"phpMyBackupPro のスタイル");
define('C_TITLE_DELETE',"バックアップファイルの自動削除");
define('C_TITLE_CONFIG',"さらなる設定項目");
define('C_WRONG_TYPE',"が正しくありません!");
define('C_WRONG_SQL',"MySQL データが正しくありません!");
define('C_WRONG_DB',"MySQL データ名が正しくありません!");
define('C_WRONG_FTP',"FTP データが正しくありません!");
define('C_OPEN',"開くことができません");
define('C_WRITE',"Can't write in");
define('C_SAVED',"データの保存に成功しました");
define('C_WRITEABLE',"は書き込めません");
define('C_SAVE',"データ保存");

/*import.php*/
define('IM_ERROR',"%d 個のエラーが発生しました。You can use 'empty database' to be sure the database does not contain any tables.");
define('IM_SUCCESS',"リストアに成功しました");
define('IM_TABLES',"tables and");
define('IM_ROWS',"rows");

define('B_EMPTIED_ALL',"すべてのデータベースを空にすることに成功しました。");
define('B_EMPTIED',"データベースを空にすることに成功しました。");
define('B_DELETED',"ファイの削除に成功しました。");
define('B_DELETED_ALL',"すべてのファイルを削除することに成功しました。");
define('B_NO_FILES',"現在バックアップファイルがありません。");
define('B_DELETE_ALL_2',"すべてのバックアップを削除する");
define('B_IMPORT_ALL',"最新のバックアップからリストアする");
define('B_EMPTY_ALL',"すべてのデータベースを空にする");
define('B_EMPTY_DB',"データベースを空にする");
define('B_DELETE_ALL',"すべてのバックアップを削除する");
define('B_INFO',"情報");
define('B_VIEW',"閲覧");
define('B_DOWNLOAD',"ダウンロード");
define('B_IMPORT',"リストア");
define('B_IMPORT_FRAG',"フラグメント単位で実行");
define('B_DELETE',"削除");
define('B_CONF_EMPTY_DB',"本当にデータベースを空にしますか?");
define('B_CONF_DEL_ALL',"本当にこのデータベースのすべてのバックアップを削除しますか?");
define('B_CONF_IMP',"本当にこのバックアップをリストアしますか?");
define('B_CONF_DEL',"本当にこのバックアップを削除しますか?");
define('B_CONF_EMPT_ALL',"本当にすべてのデータベースを空にしますか?");
define('B_CONF_IMP_ALL',"本当に最新のバックアップからすべてリストアしますか?");
define('B_CONF_DEL_ALL_2',"本当にすべてのバックアップを削除しますか?");
define('B_LAST_BACKUP',"Last backup built on");
define('B_SIZE_SUM',"すべてのバックアップの総容量");

/*backup.php*/
define('EX_SAVED',"ファイルの保存に成功しました。「リストア」で確認できます。:");
define('EX_NO_DB',"データベースが選択されていません");
define('EX_EXPORT',"バックアップ");
define('EX_NOT_SAVED',"データベース %s を保管できません。");
define('EX_DIRS',"バックアップ先 FTP サーバーを選択する");
define('EX_DIRS_MAN',"Enter more directory paths relative to phpMyBackupPro directory.<br />Separate with '|'");
define('EX_PACKED',"Pack all in one ZIP file");
define('PMBP_EX_NO_AVAILABLE',"データベース %s は利用できません。");
define('PMBP_EXS_UPDATE_DIRS',"ディレクトリ一覧を更新する");
define('PMBP_EX_NO_ARGV',"使用例:\n$ php backup.php db1,db2,db3
更なる機能はディレクトリ「documentation」の「SHELL_MODE.txt」を読んでください。");

/*scheduled.php*/
define('EXS_PERIOD',"バックアップの間隔を選択する");
define('EXS_PATH',"トリガーを記述するPHPファイルが存在するディレクトリを選択");
define('EXS_BACK',"戻る");
define('PMBP_EXS_ALWAYS',"At each call");
define('EXS_HOUR',"hour");
define('EXS_HOURS',"hours");
define('EXS_DAY',"day");
define('EXS_DAYS',"days");
define('EXS_WEEK',"week");
define('EXS_WEEKS',"weeks");
define('EXS_MONTH',"month");
define('EXS_SHOW',"トリガースクリプトを表示する");
define('PMBP_EXS_INCL',"バックアップを行いたいphpファイルにこのスクリプトを挿入して下さい(%s)");
define('PMBP_EXS_SAVE',"or save this script to a new file (will overwrite an existing file!)");

/*file_info.php*/
define('INF_INFO',"情報");
define('INF_DATE',"日付");
define('INF_DB',"データベース");
define('INF_SIZE',"バックアックサイズ");
define('INF_COMP',"圧縮形式");
define('INF_DROP',"「DROP TABLE」を含む");
define('INF_TABLES',"テーブルを含む");
define('INF_DATA',"データを含む");
define('INF_COMMENT',"コメント");
define('INF_NO_FILE',"ファイルが選択されていません");

/*db_status.php*/
define('DB_NAME',"データベースの名前");
define('DB_NUM_TABLES',"テーブル数");
define('DB_NUM_ROWS',"行数");
define('DB_SIZE',"サイズ");
define('DB_DIFF',"※ここで示されるサイズはバックアップファイルのサイズとは異なります。");
define('DB_NO_DB',"データベースは利用できません。");
define('DB_TABLES',"テーブル情報");
define('DB_TAB_TITLE',"tables of database ");
define('DB_TAB_NAME',"テーブルの名前");
define('DB_TAB_COLS',"フィールドの数");

/*sql_query.php*/
define('SQ_ERROR',"照会中にエラーが発生しました。行番号: ");
define('SQ_SUCCESS',"実行に成功しました");
define('SQ_RESULT',"照会結果");
define('SQ_AFFECTED',"影響行数");
define('SQ_WARNING',"注意: このページでは簡単なSQLクエリ文を実行できます。誤ったクエリ文はデータベースを破壊することがあるので、不注意な実行は避けてください。");
define('SQ_SELECT_DB',"データベースを選択");
define('SQ_INSERT',"SQLクエリ文を挿入します");
define('SQ_FILE',"SQLクエリ文が書かれたファイルをアップロードする場合はこちら");
define('SQ_SEND',"実行する");

/*login.php*/
define('LI_MSG',"ログインしてください (MySQL ユーザー名とパスワードを使います)");
define('LI_USER',"ユーザー名");
define('LI_PASSWD',"パスワード");
define('LI_LOGIN',"ログイン");
define('LI_LOGED_OUT',"安全にログアウトアウトしました!");
define('LI_NOT_LOGED_OUT',"安全ではないログアウトです!<br />安全なログアウトは間違ったパスワードの入力です。");

/*big_import.php*/
define('BI_IMPORTING_FILE',"Importing file");
define('BI_INTO_DB',"Into database");
define('BI_SESSION_NO',"Session number");
define('BI_STARTING_LINE',"Starting at line");
define('BI_STOPPING_LINE',"Stopping at line");
define('BI_QUERY_NO',"Number of queries performed");
define('BI_BYTE_NO',"Number of bytes processed yet");
define('BI_DURATION',"Duration of last session");
define('BI_THIS_LAST',"this session/total");
define('BI_END',"End of file reached, import seems to be OK");
define('BI_RESTART',"Restart import of file ");
define('BI_SCRIPT_RUNNING',"This script is still running!<br />Please wait until the end of the file is reached");
define('BI_CONTINUE',"Continue from the line");
define('BI_ENABLE_JS',"Enable JavaScript to continue automatically");
define('BI_BROKEN_ZIP',"The ZIP file seems to be broken");
define('BI_WRONG_FILE',"Stopped at line %s.<br />The current query includes more than %s dump lines. That happens if your backup file was created
by some tool which didn't place a semicolon followed by a linebreak at the end of each query, or if your backup file contains extended inserts.");

define('I_COMMENT_ERROR',"ファイル「".PMBP_EXPORT_DIR."comments.dat」が書き込めません!");
?>
