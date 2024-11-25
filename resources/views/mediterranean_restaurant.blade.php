<x-app-layout>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>地中海飲食介紹</title>
    <style>
/* 確保 body 的背景色仍然覆蓋整個頁面 */
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 40;

        }

        header {
            background-color: #007BFF;
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        h1 {
            font-size: 36px;
            margin: 0;
        }

        /* 新增 main 的樣式，限制寬度並居中 */
        main {
            max-width: 1000px; /* 設置最大寬度 */
            margin: 0 auto; /* 居中 */
            padding: 20px; /* 內距 */
        }



        .description-section, .components-section, .table-section {
            margin-bottom: 30px;
        }

        h2 {
            font-size: 24px;
            color: #333;
            margin-bottom: 10px;
        }

        p, ul {
            list-style-type: disc;
            margin-left: 20px;
        }

        ul {
            list-style-type: disc;
            margin-left: 20px;
        }

        .hidden-image {
            display: none;
            margin-top: 10px;
            max-width: 100%;
            height: auto;
        }


        .visible-image {
            display: block;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        table th, table td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }

        table th {
            background-color: #007BFF;
            color: white;
            font-weight: bold;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .section-box {
            border: 2px solid #007BFF;
            border-radius: 10px;
            background-color: #f9f9f9;
            padding: 20px;
            margin-bottom: 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #007BFF;
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        h1 {
            font-size: 36px;
            margin: 0;
        }

        main {
            max-width: 1000px; /* 設置最大寬度 */
            margin: 0 auto; /* 居中 */
            padding: 20px;
        }

        .content-with-image {
            display: flex;
            align-items: flex-start; /* 文字和圖片對齊 */
            gap: 20px; /* 文字與圖片之間的間距 */
        }

        /* 圖片樣式 */
        .right-image {
            max-width: 300px; /* 限制圖片寬度 */
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* 添加陰影效果 */
        }


        /* 容器內的文字和圖片排版 */
        .content-with-image {
            display: flex; /* 使文字和右側圖片並排 */
            align-items: flex-start; /* 垂直對齊 */
            gap: 20px; /* 文字和右側圖片之間的間距 */
        }

        /* 控制文字和下方圖片的布局 */
        .text-and-down-image {
            display: flex;
            flex-direction: column; /* 將文字和下方圖片排列成縱向 */
            gap: 15px; /* 文字與下方圖片之間的間距 */
        }

        /* 下方圖片樣式 */
        .down-image {
            max-width: 50%; /* 讓圖片與文字寬度對齊 */
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* 添加陰影效果 */
        }

    </style>
</head>
<body>
    <header>
        <h1>地中海飲食介紹</h1>
    </header>

    
    <main>
        <section class="components-section section-box">
            <h2>什麼是地中海飲食？</h2>
            <div class="content-with-image">
                <div class="text-and-down-image">
                    <p>
                        地中海飲食是一種以橄欖油、新鮮蔬果、全穀類、堅果、魚類為主的健康飲食模式，
                        它以多樣化、均衡的食材搭配，對於心血管健康、高血壓及代謝疾病具有顯著的預防與改善效果。
                    </p>
                    <img src="{{ asset('圖片/餐盒-removebg-preview.png') }}" alt="餐盒" class="down-image">

                    
                </div>
                <img src="{{ asset('圖片/original-removebg-preview.png') }}" alt="地中海飲食圖片" class="right-image">
            </div>
        </section>
        
        

        <section class="components-section section-box">
            <h2>地中海飲食的主要成分與效果</h2>
            <ul>
                <li>
                    <span class="clickable" onclick="showImage('olive-oil')">橄欖油</span>：提供豐富的單元不飽和脂肪酸，有助於降低壞膽固醇。
                    </li>
                <li>
                    <span class="clickable" onclick="showImage('fishImage')">魚類</span>：富含
                    <span class="clickable" onclick="showImage('omegaImage')">Omega-3脂肪酸</span>，促進心血管健康。
                </li>
                <li>                  
                    <span class="clickable" onclick="showImage('fresh-food')">新鮮蔬果</span>：高纖維及抗氧化物質，有助於腸胃健康與抗發炎。
                </li>
                <li>
                    <span class="clickable" onclick="showImage('nut')">堅果</span>：提供健康脂肪與維生素E。
                    </li>
                <li>
                    <span class="clickable" onclick="showImage('whole_grains')">全穀類</span>：穩定血糖並提供長效能量來源。
                    </li>
            </ul>
            <!-- 圖片元素 -->
            <img src="{{ asset('圖片/橄欖油-removebg-preview.png') }}" alt="橄欖油" id="olive-oil" class="hidden-image">
            <img src="{{ asset('圖片/魚類-removebg-preview.png') }}" alt="魚類圖片" id="fishImage" class="hidden-image">
            <img src="{{ asset('圖片/富含Omega-3脂肪酸-removebg-preview.png') }}" alt="Omega-3脂肪酸圖片" id="omegaImage" class="hidden-image">
            <img src="{{ asset('圖片/fresh-food-removebg-preview.png') }}" alt="新鮮蔬果" id="fresh-food" class="hidden-image">
            <img src="{{ asset('圖片/nut-removebg-preview.png') }}" alt="堅果" id="nut" class="hidden-image">
            <img src="{{ asset('圖片/全穀類-removebg-preview.png') }}" alt="whole_grains" id="whole_grains" class="hidden-image">
        </section>

        <section class="components-section section-box">
            <h2>年齡與BMI分段攝取建議</h2>
            <table>
                <thead>
                    <tr>
                        <th>年齡段</th>
                        <th>BMI分類</th>
                        <th>橄欖油 (g)</th>
                        <th>魚類 (g)</th>
                        <th>新鮮蔬果 (g)</th>
                        <th>堅果 (g)</th>
                        <th>全穀類 (g)</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- 18-25 歲 -->
                    <tr>
                        <td rowspan="6">18-25 歲</td>
                        <td><18.5</td>
                        <td>25</td>
                        <td>120</td>
                        <td>800</td>
                        <td>25</td>
                        <td>300</td>
                    </tr>
                    <tr>
                        <td>18.5-24</td>
                        <td>20</td>
                        <td>100</td>
                        <td>700</td>
                        <td>20</td>
                        <td>250</td>
                    </tr>
                    <tr>
                        <td>24-27</td>
                        <td>20</td>
                        <td>100</td>
                        <td>600</td>
                        <td>20</td>
                        <td>200</td>
                    </tr>
                    <tr>
                        <td>27-30</td>
                        <td>15</td>
                        <td>80</td>
                        <td>500</td>
                        <td>15</td>
                        <td>150</td>
                    </tr>
                    <tr>
                        <td>30-35</td>
                        <td>15</td>
                        <td>60</td>
                        <td>400</td>
                        <td>10</td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <td>>35</td>
                        <td>10</td>
                        <td>50</td>
                        <td>300</td>
                        <td>10</td>
                        <td>80</td>
                    </tr>
        
                    <!-- 26-35 歲 -->
                    <tr>
                        <td rowspan="6">26-35 歲</td>
                        <td><18.5</td>
                        <td>20</td>
                        <td>110</td>
                        <td>750</td>
                        <td>25</td>
                        <td>280</td>
                    </tr>
                    <tr>
                        <td>18.5-24</td>
                        <td>20</td>
                        <td>100</td>
                        <td>650</td>
                        <td>20</td>
                        <td>240</td>
                    </tr>
                    <tr>
                        <td>24-27</td>
                        <td>18</td>
                        <td>90</td>
                        <td>600</td>
                        <td>18</td>
                        <td>200</td>
                    </tr>
                    <tr>
                        <td>27-30</td>
                        <td>15</td>
                        <td>70</td>
                        <td>500</td>
                        <td>15</td>
                        <td>150</td>
                    </tr>
                    <tr>
                        <td>30-35</td>
                        <td>15</td>
                        <td>60</td>
                        <td>400</td>
                        <td>12</td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <td>>35</td>
                        <td>10</td>
                        <td>50</td>
                        <td>300</td>
                        <td>10</td>
                        <td>80</td>
                    </tr>
        
                    <!-- 36-50 歲 -->
                    <tr>
                        <td rowspan="6">36-50 歲</td>
                        <td><18.5</td>
                        <td>20</td>
                        <td>100</td>
                        <td>700</td>
                        <td>20</td>
                        <td>260</td>
                    </tr>
                    <tr>
                        <td>18.5-24</td>
                        <td>20</td>
                        <td>90</td>
                        <td>650</td>
                        <td>18</td>
                        <td>240</td>
                    </tr>
                    <tr>
                        <td>24-27</td>
                        <td>18</td>
                        <td>80</td>
                        <td>600</td>
                        <td>15</td>
                        <td>200</td>
                    </tr>
                    <tr>
                        <td>27-30</td>
                        <td>15</td>
                        <td>70</td>
                        <td>500</td>
                        <td>12</td>
                        <td>150</td>
                    </tr>
                    <tr>
                        <td>30-35</td>
                        <td>15</td>
                        <td>60</td>
                        <td>400</td>
                        <td>10</td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <td>>35</td>
                        <td>10</td>
                        <td>50</td>
                        <td>300</td>
                        <td>10</td>
                        <td>80</td>
                    </tr>
        
                    <!-- 51 歲以上 -->
                    <tr>
                        <td rowspan="6">51 歲以上</td>
                        <td><18.5</td>
                        <td>15</td>
                        <td>80</td>
                        <td>600</td>
                        <td>15</td>
                        <td>240</td>
                    </tr>
                    <tr>
                        <td>18.5-24</td>
                        <td>15</td>
                        <td>70</td>
                        <td>550</td>
                        <td>12</td>
                        <td>200</td>
                    </tr>
                    <tr>
                        <td>24-27</td>
                        <td>12</td>
                        <td>60</td>
                        <td>500</td>
                        <td>10</td>
                        <td>180</td>
                    </tr>
                    <tr>
                        <td>27-30</td>
                        <td>10</td>
                        <td>50</td>
                        <td>400</td>
                        <td>8</td>
                        <td>150</td>
                    </tr>
                    <tr>
                        <td>30-35</td>
                        <td>10</td>
                        <td>40</td>
                        <td>350</td>
                        <td>7</td>
                        <td>120</td>
                    </tr>
                    <tr>
                        <td>>35</td>
                        <td>8</td>
                        <td>30</td>
                        <td>300</td>
                        <td>5</td>
                        <td>100</td>
                    </tr>
                </tbody>
            </table>
        </section>

    </main>
    <script>
        function showImage(imageId) {
            // 隱藏所有圖片
            const allImages = document.querySelectorAll('.hidden-image, .visible-image');
            allImages.forEach(image => {
                image.classList.remove('visible-image');
                image.classList.add('hidden-image');
            });

            // 顯示指定圖片
            const image = document.getElementById(imageId);
            if (image) {
                image.classList.remove('hidden-image');
                image.classList.add('visible-image');
            }
        }
    </script>
</body>
</x-app-layout>

