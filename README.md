# アプリケーション名
お問い合わせフォーム
## 環境構築
1.git clone 
2.docker-compose up -d -build

1.docker-compose exec php bash
2.composer install
3..env.exampleファイルから.envを作成し、環境変数を変更
4.php artisan key:generate
5.php artisan migrate
6.php artisan db:seed

## 使用技術(実行環境)
PHP8.0
Laravel10.0
Mysql8.0

## URL
開発環境　http://localhost/
phpMyAdmin  http://localhost:8080/
