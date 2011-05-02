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
 | Japanese translation 1.7                                                 |
 +--------------------------------------------------------------------------+
*/

/*basic data*/
define('BD_LANG_SHORTCUT',"ja"); // used for the php function setlocale()
define('BD_DATE_FORMAT',"%x %X"); // used for the php function strftime()
define('BD_CHARSET_HTML',"UTF-8"); // the charset used in you language for html
define('BD_CHARSET_EMAIL',"ISO-2022-JP"); // the charset used in your langauge for MIME-emails

/*functions.inc.php*/
define('F_START',"開始する");
define('F_CONFIG',"設定");
define('F_IMPORT',"インポート");
define('F_BACKUP',"バックアップ");
define('F_SCHEDULE',"スケジュールバックアップ");
define('F_DB_INFO',"データベース情報");
define('F_SQL_QUERY',"SQL 問合せ");
define('F_HELP',"ヘルプ");
define('F_LOGOUT',"ログアウト");
define('F_FOOTER',"新規リリースとニュースを取得しに %sphpMyBackupPro プロジェクトのサイト%s へ訪問します。");
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
define('F_FTP_1',"サーバーへの FTP 接続に失敗しました。");
define('F_FTP_2',"ユーザーでログインに失敗しました。");
define('F_FTP_3',"FTP アップロードに失敗しました");
define('F_FTP_4',"次のファイルとしてアップロードに成功しました:");
define('F_FTP_5',"ファイル「%s」の FTP 削除に失敗しました。");
define('F_FTP_6',"FTP サーバー上でファイル「%s」の削除に成功しました。");
define('F_FTP_7',"FTP サーバー上でファイル「%s」は利用できません。");
define('F_MAIL_1',"ひとつの受信者電子メールが間違っています。");
define('F_MAIL_2',"このメールは ".PMBP_WEBSITE." で実行中の phpMyBackupPro ".PMBP_VERSION." から送信されました。");
define('F_MAIL_3',"読み込みができません。");
define('F_MAIL_4',"次から MySQL バックアップする:");
define('F_MAIL_5',"メールを送信できません。");
define('F_MAIL_6',"次に電子メールでファイルを送信することに成功しました:");
define('F_YES',"はい");
define('F_NO',"いいえ");
define('F_DURATION',"期間");
define('F_SECONDS',"秒");
define('F_WRONG_FILE',"これは、正確な .zip ファイルでないように見えます。それは phpMyBackupPro のバグかもしれません。");

/*index.php*/
define('I_SQL_ERROR',"エラー: 「configuration」に正確な MySQL データを挿入してください!");
define('I_NAME',"これは phpMyBackupPro です。");
define('I_WELCOME',"phpMyBackupPro は GNU GPL の元でライセンスされたフリーソフトウェアです。<br>
援助が必要ならオンラインヘルプを試すか、%s に訪れてください。<br><br>
次に何を行いたいかトップメニューから選択します!
これが初めての phpMyBackupPro の使用なら設定から始めるべきです!
ディレクトリ「export」とファイル「global_conf.php」の権限は 0777 に設定されていなければなりません。");
define('I_CONF_ERROR',"ファイル「".PMBP_GLOBAL_CONF."」が書き込めません!");
define('I_DIR_ERROR',"ディレクトリ「".PMBP_EXPORT_DIR."」が書き込めません!");
define('I_COMMENT_ERROR',"ファイル「".PMBP_EXPORT_DIR."comments.dat」が書き込めません!");
define('PMBP_I_INFO',"システム情報");
define('PMBP_I_SERVER',"サーバー");
define('PMBP_I_TIME',"時間");
define('PMBP_I_PHP_VERS',"PHP バージョン");
define('PMBP_I_MEM_LIMIT',"PHP メモリ制限");
define('PMBP_I_SAFE_MODE',"セーフモード有効");
define('PMBP_I_FTP',"FTP 転送可能");
define('PMBP_I_MAIL',"電子メール送信可能");
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
define('C_EMAIL_USE',"電子メールを使用しますか?");
define('C_EMAIL',"電子メールアドレス");
define('C_STYLESHEET',"スキン");
define('C_DATE',"日付のスタイル");
define('C_DEL_TIME',"x 日経過したローカルバックアップを削除する");
define('C_DEL_NUMBER',"データベース毎に最大 x ファイル保存します");
define('C_TIMELIMIT',"PHP 時間制限");
define('C_IMPORT_ERROR',"インポートエラーを表示しますか?");
define('C_NO_LOGIN',"ログイン機能を無効にしますか?");
define('C_LOGIN',"HTTP 認証しますか?");
define('C_DIR_BACKUP',"ディレクトリバックアップを有効にしますか?");
define('C_DIR_REC',"サブディレクトリにディレクトリバックアップしますか?");
define('C_CONFIRM',"確認レベル");
define('C_CONFIRM_1',"空、削除、インポート");
define('C_CONFIRM_2',"... all");
define('C_CONFIRM_3',"... ALL");
define('C_CONFIRM_4',"何も確認しません");

define('C_BASIC_VAL',"基本設定");
define('C_EXT_VAL',"拡張設定");
define('PMBP_C_SYSTEM_VAL',"システム変数");
define('PMBP_C_SYS_WARNING',"これらのシステム変数は phpMyBackupPro にて管理されています。もし何をしているか知らないならそれらを編集しないでください!");
define('C_TITLE_SQL',"SQL データ");
define('C_TITLE_FTP',"FTP でバックアップ");
define('C_TITLE_EMAIL',"電子メールでバックアップ");
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
define('IM_SUCCESS',"インポートに成功しました");
define('IM_TABLES',"tables and");
define('IM_ROWS',"rows");

define('B_EMPTIED_ALL',"すべてのデータベースを空にすることに成功しました。");
define('B_EMPTIED',"データベースを空にすることに成功しました。");
define('B_DELETED',"ファイの削除に成功しました。");
define('B_DELETED_ALL',"すべてのファイルを削除することに成功しました。");
define('B_NO_FILES',"現在バックアップファイルがありません。");
define('B_DELETE_ALL_2',"すべてのバックアップを削除する");
define('B_IMPORT_ALL',"すべてのバックアップをインポートする");
define('B_EMPTY_ALL',"すべてのデータベースを空にする");
define('B_EMPTY_DB',"データベースを空にする");
define('B_DELETE_ALL',"すべてのバックアップを削除する");
define('B_INFO',"情報");
define('B_VIEW',"閲覧");
define('B_DOWNLOAD',"ダウンロード");
define('B_IMPORT',"インポート");
define('B_DELETE',"削除");
define('B_CONF_EMPTY_DB',"本当にデータベースを空にしますか?");
define('B_CONF_DEL_ALL',"本当にこのデータベースのすべてのバックアップを削除しますか?");
define('B_CONF_IMP',"本当にこのバックアップをインポートしますか?");
define('B_CONF_DEL',"本当にこのバックアップを削除しますか?");
define('B_CONF_EMPT_ALL',"本当にすべてのデータベースを空にしますか?");
define('B_CONF_IMP_ALL',"本当に最後のバックアップからすべてインポートしますか?");
define('B_CONF_DEL_ALL_2',"本当にすべてのバックアップを削除しますか?");
define('B_LAST_BACKUP',"Last backup built on");
define('B_SIZE_SUM',"すべてのバックアップの総容量");

/*backup.php*/
define('EX_SAVED',"次のようにファイルの保存に成功しました:");
define('EX_NO_DB',"データベースが選択されていません");
define('EX_EXPORT',"バックアップ");
define('EX_NOT_SAVED',"データベース %s を保管できません。");
define('EX_DIRS',"バックアップ先 FTP サーバーを選択する");
define('EX_DIRS_MAN',"Enter more directory paths relative to phpMyBackupPro directory.<br>Separate with '|'");
define('PMBP_EX_NO_AVAILABLE',"データベース %s は利用できません。");
define('PMBP_EXS_UPDATE_DIRS',"ディレクトリ一覧を更新する");
define('PMBP_EX_NO_ARGV',"使用例:\n$ php backup.php db1,db2,db3
更なる機能はディレクトリ「documentation」の「SHELL_MODE.txt」を読んでください。");

/*scheduled.php*/
define('EXS_PERIOD',"バックアップ期間を選択する");
define('EXS_PATH',"Select directory where the php file will be placed");
define('EXS_BACK',"戻る");
define('PMBP_EXS_ALWAYS',"At each call");
define('EXS_HOUR',"hour");
define('EXS_HOURS',"hours");
define('EXS_DAY',"day");
define('EXS_DAYS',"days");
define('EXS_WEEK',"week");
define('EXS_WEEKS',"weeks");
define('EXS_MONTH',"month");
define('EXS_SHOW',"スクリプトを表示する");
define('PMBP_EXS_INCL',"�Хå����åפ�Ԥ�����php�ե�����ˤ��Υ�����ץȤ��������Ʋ�����(%s)");
define('PMBP_EXS_SAVE',"or save this script to a new file (will overwrite an existing file!)");

/*file_info.php*/
define('INF_INFO',"情報");
define('INF_DATE',"日付");
define('INF_DB',"データベース");
define('INF_SIZE',"バックアックサイズ");
define('INF_COMP',"圧縮するかどうか");
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
define('DB_DIFF',"���̤��Хå����åץե���������̤Ȱ�äƤ⹽���ޤ���!");
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
define('SQ_WARNING',"注意: このページはデータベースへ単純な SQL 照会を送信する為に構築されています。不注意な実行はデータベースを破壊する場合があります!");
define('SQ_SELECT_DB',"データベースを選択");
define('SQ_INSERT',"ここに SQL 照会を挿入します");
define('SQ_FILE',"SQL ファイルをアップロードするファイル");
define('SQ_SEND',"実行する");

/*login.php*/
define('LI_MSG',"ログインしてください (MySQL ユーザー名とパスワードを使います)");
define('LI_USER',"ユーザー名");
define('LI_PASSWD',"パスワード");
define('LI_LOGIN',"ログイン");
define('LI_LOGED_OUT',"安全にログアウトアウトしました!");
define('LI_NOT_LOGED_OUT',"安全ではないログアウトです!<br>安全なログアウトは間違ったパスワードの入力です。");
?>
