# 環境設定

1. コンテナを実行。wordpressコンテナ内でwordpressのダウンロードも実行される。
```
$ cd to_wordpress-backend-template
$ docker-compose up -d
```

2. http://localhost:8000/ でwordpress管理画面の初期設定画面に遷移。初期設定。

3. .htaccessを編集。All in one migration実行時に平均1~2GBの容量を要するため。
```
# BEGIN WordPress
# "BEGIN WordPress" から "END WordPress" までのディレクティブ (行) は
# 動的に生成され、WordPress フィルターによってのみ修正が可能です。
# これらのマーカー間にあるディレクティブへのいかなる変更も上書きされてしまいます。
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]
RewriteBase /
RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /index.php [L]
</IfModule>

# END WordPress

↓↓↓ 追記 ↓↓↓
php_value upload_max_filesize 2G
php_value post_max_size 2G
php_value memory_limit 2G
php_value max_execution_time 3000
php_value max_input_time 3000
↑↑↑ 追記 ↑↑↑
```


## front-starterと併用する場合
[front-starterリポジトリ](httto_ps://github.com/gizumo-inc/front-starter/tree/wordpress)

1. wp-content/themes 配下にテーマを作成

2. 以下のディレクトリとファイルを作成

```
wp-content/themes/任意のテーマ
├── js
│    ├── common
│    │    └── index.js
│    ├── module
│    │    └── index.js
│    └── index.js
│
(省略)
│
└── style.css
```

### 開発運用方法
1. コーディングしたhtml/css/jsをコンパイル
```
$ cd to_front-starter
$ npm run build
```

2. コンパイルされたcssとjsを丸々コピーしてそれぞれ対応するファイルに添付。  

フロント
```
_dist/themes/$npm_package_config_wpThemeName/
├── js
│    ├── common
│    │    └── index.js ...WordPressの①に添付
│    ├── module
│    │    └── index.js ...WordPressの②に添付
│    └── index.js ...WordPressの③に添付
│
(省略)
│
└── style.css ...WordPressの④に添付
```

WordPress
```
wp-content/themes/任意のテーマ
├── js
│    ├── common
│    │    └── index.js ...①
│    ├── module
│    │    └── index.js ...②
│    └── index.js ...③
│
(省略)
│
└── style.css ...④
```

3. 投稿部分を管理画面の投稿から表示(必要があれば)
