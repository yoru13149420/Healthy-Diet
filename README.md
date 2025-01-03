# Healthy Diet
# SHU-IM-31-Graduation Project
# DEMO VIDEO ： https://drive.google.com/file/d/144N6Ll7iC7zmhDd3N7HNRcDo1jSKnv-9/view?usp=sharing

## 功能概述
1.地圖搜索
2.列表搜索
3.評論收藏
4.條件搜索
### use laravel
foodmap <-DB use mysql

安裝 php, composer

編輯 .env - DB

php artisan migrate

在 dashboard.blade.php 填入 googleAPI填入api_key

php artisan serve

前端(首頁)在 resources/views/home.blade.php

路由 routes/web.php

app/sModels 對應DB table

新增 API 或指令在 app/Http/Controllers

php artisan make:controller {檔案名稱} --resource
