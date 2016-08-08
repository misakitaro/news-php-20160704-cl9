* このメモは下が新しいメモ。

* 以下のサイトをcloud9上で動かしてみる。
  [参考URL]ニュース投稿ツール（MySQL + PDO + Smarty を利用）http://www.php-labo.net/tutorial/example/news.html
  
* cloud9でのmysqlの使い方
    [参考URL] Cloud9でMySQLを使う:  http://qiita.com/ao_love/items/31b660ab53bee959c940
    まずは起動
    $ mysql-ctl start
    mysql> の入力画面にする
    $ mysql-ctl cli  
    
* user作成
    [参考URL]https://community.c9.io/t/setting-up-mysql/1718
    command.sqlを参照
    CREATE USERは1回だけでよい。（エラーになる。）

* エラー発生
    内容: Fatal error: Uncaught --> Smarty: Unable to load template file 'index.html' <-- thrown in /home/ubuntu/workspace/libs/sysplugins/smarty_internal_template.php on line 139
    対処：index.htmlを作成しtemplatesフォルダに格納。
    原因：index.htmlを作ってなかった。

* smartyのフォルダ作成等はこちらを参考にした
    [参考URL]Smarty3をインストールする！: Smarty3をインストールする！

* mysqlで文字化けと？？？と表示されてしまう問題への対処
    - [参考URL]https://teratail.com/questions/34567
     - データベース作成は、CREATE DATABASE sample DEFAULT CHARACTER SET utf8;とする。
    - [参考URL]http://qiita.com/mjunya1030/items/02f2d77e814f8494cf38
     * [mysqld]
      - character-set-server=utf8 #mysqldセクションの末尾に追加
     * [client]  
      - default-character-set=utf8 #clientセクションを追加

* git-hubからワークスペースを作成直後は、MySQLでDB作成を行うこと。
 - command.sqlの内容を打ち込むこと。
 - 打ち込むためのmysqlの起動は上記の「cloud9でのmysqlの使い方」参照
 
* bootstrap化
  1. headerにlinkをコピペ
  2. bodyの閉じタグ直前にscript
  3. コンテナクラスのdivで全体を囲み、タイトル行を最初に記述
  4. リンクとサブミットをボタン化。

* ログイン機能を追加。参考＝sns_php_v2,surasura

1. ファイル： command.sql
　 内容:      usersテーブルを追加。
　 
2. ファイル： command.sql
　 内容:      コンソールでmysqlを立ち上げてcomman.sqlを反映

3. ファイル： config.php
　 内容:      SITE_URLを変更を修正。

4. ファイル： functions.php
　 内容:      require_login(),require_unlogin()を追加。

5. ファイル： ほぼ全てのphpファイル
　 内容:      require_login();,require_unlogin();を追加。

6. ファイル： login.php,logout.php,signup.php
　 内容:      新たに作成（コピペ）

