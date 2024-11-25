<x-app-layout>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>健康美食地圖</title>
    <link rel="icon" href="{{ asset('圖片/Logo2.png') }}" type="image/png">
    <!-- <link rel="stylesheet" href="Home_Page.css"> Link to CSS file -->
</head>
<style>
    body {
        background-color: #f4f4f4;
        font-family: Arial, sans-serif;
    }

    /* Logo 圖片樣式 */
    .logo {
        position: absolute;
        top: 70px;
        left: 0;
        width: 10vw; /* 相對單位，隨頁面縮放 */
        height: auto;
        margin: 1px;
    }

    /* container_1 的樣式 */
    .container_1 {
        display: flex;
        align-items: center;
        justify-content: flex-end;
        gap: 20px;
        font-size: 18px;
        font-weight: 300;
        background-color: #b49e9e;
        padding: 5px 20px;
        border-bottom: 1px solid #ccc;
        width: 100%;
        box-sizing: border-box;
        position: relative;
    }

    .Greeting, .Developer, .login-register, .Publish, .box {
        text-align: center;
    }

    /* Developer 和 Publish 的下拉菜單樣式 */
    .Developer, .Publish {
        position: relative;
        padding: 10px;
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .Developer .icon, .Publish .icon {
        width: 1em;
        height: 1em;
        vertical-align: middle;
    }

    .dropdown_Developer, .dropdown_Publish {
        display: none;
        position: absolute;
        top: calc(100% + 5px);
        left: 0;
        background-color: white;
        padding: 10px;
        text-align: left;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        border-top: 1px solid #ccc;
    }

    .Developer:hover .dropdown_Developer,
    .Publish:hover .dropdown_Publish {
        display: block;
    }

    .dropdown_Developer table, .dropdown_Publish table {
        width: auto;
        font-size: inherit;
        border-collapse: collapse;
    }

    .dropdown_Developer td, .dropdown_Publish td {
        padding: 10px 0;
        text-align: left;
    }

    .dropdown_Developer a, .dropdown_Publish a, .login-register a {
        color: inherit;
        text-decoration: none;
        white-space: nowrap;
    }

    .login-register {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    /* container_2 的樣式 */
    .container_2 {
        display: flex;
        align-items: center;
        gap: 40px;
        font-size: 23px;
        margin-top: 20px;
        justify-content: flex-start;
    }

    .container_2 span {
        margin-left: 300px;
    }

    .container_2 .icon {
        width: 1em;
        height: 1em;
        vertical-align: middle;
    }

    .map_search a {
        color: inherit;
        text-decoration: none;
        white-space: nowrap;
    }

    /* 懸停時變色 */
    .container_1 a:hover,
    .container_1 .Developer span:hover,
    .container_1 .Publish span:hover,
    .container_2 a:hover,
    .container_2 span:hover {
        color: #007BFF;
    }

    /* 背景圖片容器和黑色長方形 */
    .background_container {
        position: relative;
        width: 100vw;
        height: auto;
    }

    .background_pic {
        width: 100%;
        height: auto;
        display: block;
        opacity: 0.7;
        filter: blur(5px);
        margin-top: 140px;
    }

    /* 黑色長方形，覆蓋在背景圖片上 */
    .black_rectangle {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) translateY(-30px); /* 居中並向上移動 30px */
        width: calc(100% - 200px); /* 水平縮小 200px（左右各縮 100px） */
        height: 200px;
        background-color: rgba(0, 0, 0, 0.5);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 20px;
        box-sizing: border-box;
        border-radius: 15px; /* 圓角效果 */
    }

    /* 粗體文字樣式，顯示在黑色長方形上方 */
    .title_text {
        position: absolute;
        top: calc(50% - 400px); /* 在黑色長方形的上方 */
        left: 50%;
        transform: translateX(-50%);
        color: white;
        font-size: 48px;
        font-weight: bold;
        text-align: center;
    }

    /* container_4 的樣式 */
    .container_4 {
        display: flex;
        align-items: center;
        gap: 20px;
        font-size: 23px;
        color: white;
    }

    .container_4 span {
        margin-left: 100px;
    }

    .container_4 .icon {
        width: 1em;
        height: 1em;
        vertical-align: middle;
    }

    /* container_3 的樣式 */
    .container__3 {
        display: flex;
        gap: 20px;
        justify-content: center;
        align-items: center;
        margin-bottom: 20px;
    }

    .box {
        padding: 20px;
        background-color: #f0f0f0;
        border-radius: 5px;
        text-align: center;
        min-width: 100px;
    }

    /* 共同的父容器樣式 */
    .city-container {
        display: inline-flex;
        align-items: center;
        cursor: pointer;
    }

    /* 當滑鼠懸停在 city-container（包含台北市+圖標）上時顯示下拉延伸內容 */
    .city-container:hover .dropdown_County_and_city {
        display: block;
    }

    /* 下拉菜單容器樣式 */
    .dropdown_County_and_city {
        display: none;
        position: absolute;
        top: calc(100% + 5px);
        left: 0;
        background-color: white;
        padding: 10px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        border-top: 1px solid #ccc;
        text-align: left;
        z-index: 10;
    }

    /* 下拉內容表格樣式 */
    .dropdown_County_and_city table {
        width: auto;
        font-size: inherit;
        border-collapse: collapse;
    }

    .dropdown_County_and_city td {
        padding: 10px 0;
    }

    .dropdown_County_and_city a {
        color: inherit;
        text-decoration: none;
        white-space: nowrap;
    }

    /* 搜尋容器樣式 */
    .search-container {
        display: flex;
        align-items: center;
        border: 1px solid #ccc;
        border-radius: 8px; /* 四角圓滑 */
        overflow: hidden;
        width: 500px; /* 調整總寬度 */
        margin-top: 30px;
    }

    /* 輸入框樣式 */
    #searchInput {
        flex: 7; /* 佔 7/10 寬度 */
        padding: 10px;
        border: none;
        outline: none;
        font-size: 16px;
    }

    /* 右側互動區域樣式 */
    .search-action {
        flex: 3; /* 佔 3/10 寬度 */
        padding: 10px 15px;
        background-color: #007BFF;
        color: white;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
    }

    .search-action:hover {
        background-color: #0056b3;
    }

</style>
<body>
    <!-- 背景圖片和黑色長方形 -->
    <div class="background_container">
        <img src="{{ asset('圖片/4-1-food-11.jpg') }}" alt="background_pic" class="background_pic">
        
        <!-- 粗體文字，顯示在黑色長方形上方 -->
        <div class="title_text"><strong>Healthy Diet</strong></div>

        <!-- 黑色長方形和 container_4 -->
        <div class="black_rectangle">
            <div class="container_4">
                <div class="map_search">
                    <a href="https://www.tgos.tw/MapSites/Web/Map/MS_Map.aspx?themeid=43184&type=edit&visual=point">地圖尋找</a>
                </div>
        
                <div class="map_search">
                    <a href="{{ url('/mediterranean_restaurant') }}">地中海飲食</a>
                </div>
        
                <div class="map_search">
                    <a href="{{ url('/fitness_meal') }}">減脂餐飲食</a>
                </div>
        
                <div class="map_search">
                    <a href="{{ url('/filter') }}">條件篩選</a>
                </div>
        
                <div class="map_search">
                    <a href="{{ url('/shopping') }}">購物牆</a>
                </div>
        
                <div class="map_search">
                    <a href="https://chatgpt.com/">AI智能推薦</a>
                </div>
            </div>

            <div class="search-container">
                <input type="text" id="searchInput" placeholder="請輸入餐廳名稱" oninput="updateSearchAction()">
                <div class="search-action" onclick="searchFunction()">🔍 搜尋</div>
            </div>
        </div>
    </div>

    <script>
        // 更新右側顯示文字
        function updateSearchAction() {
            const searchValue = document.getElementById("searchInput").value;
            document.querySelector(".search-action").textContent = searchValue ? `搜尋 "${searchValue}"` : "🔍 搜尋";
        }

        const searchRouteUrl = @json(route('dashboard'));

        // 點擊時執行的搜尋功能
        function searchFunction() {
            const query = document.getElementById("searchInput").value;
            if (query) {
                window.location.href = `${searchRouteUrl}?query=${encodeURIComponent(query)}`;
            }
        }
    </script>
</body>

</html>

</x-app-layout>