Laravelでメモ帳を作成(ノーフレームワーク)
参考教材：テックピット


# 開発環境の立ち上げ
docker-compose -f .docker_memo_laravel/docker-compose.yml up -d

# 開発環境を止める
docker-compose -f .docker_memo_laravel/docker-compose.yml down

# dockerにログイン
docker-compose -f .docker_memo_laravel/docker-compose.yml exec php /bin/bash
cd simple_memo_laravel

# laravelプロジェクトのインストール
composer create-project laravel/laravel=8.1.0 simple_memo_laravel

# 認証機能の追加
composer require laravel/ui "^3.0" 

# uiのコマンドヘルプ
php artisan ui -h

# マイグレーション
php artisan migrate

## マイグレーションのロールバック（１つ前の状態に戻す）
php artisan migrate:rollback

# フォームリクエストの作成
php artisan make:request UserCreateRequest

# node.js関連のライブラリをインストール dev のコマンドを実行
npm install && npm run dev
## 上記でエラーが出る場合、以下のコマンドでsass-loaderのバージョンを落とす。&webpack.mix.jsの「.vue()」をコメントアウト
npm install sass-loader@10.1.1


# 環境
http://127.0.0.1:8085/

# 参考
https://github.com/YasuakiHirano/simple_memo_laravel
## パート別
https://github.com/YasuakiHirano/simple_memo_laravel/commits/

https://github.com/laravel/ui


