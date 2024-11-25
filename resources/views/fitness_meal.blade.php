<x-app-layout>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>減脂餐介紹</title>
    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 40;

        }

        header {
            background-color: #ff7b00;
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
            background-color: #ff7b00;
            color: white;
            font-weight: bold;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .section-box {
            border: 2px solid #ff7b00;
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
            background-color: #ff7b00;
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
        <h1>減脂餐介紹</h1>
    </header>
    <main>
        <section class="components-section section-box">
            <h2>什麼是減脂餐？</h2>
            <div class="content-with-image">
                <div class="text-and-down-image">
                    <p>
                        減脂餐的主要目的是幫助減少體脂，通常設計為低熱量、低脂肪或低碳水化合物的飲食，並增加高蛋白質的比例，以幫助維持肌肉質量和促進代謝。
                    </p>
                    <img src="{{ asset('圖片/PXL_20210426_044354226.PORTRAIT-removebg-preview.png') }}"alt="餐盒" class="down-image">

                    
                </div>
                <img src="{{ asset('圖片/0421b.jpg') }}"alt="減脂餐" class="right-image">
            </div>
        </section>

        <section class="components-section section-box">
            <h2>減脂餐的主要成分與效果</h2>
            <ul>
                <li>
                    低熱量蛋白質:
                    <span class="clickable" onclick="showImage('chicken-breast')">雞胸肉</span>、
                    <span class="clickable" onclick="showImage('protein')">蛋白</span>
                </li>
                <li>                  
                    低升糖指數的碳水化合物:
                    <span class="clickable" onclick="showImage('brown-rice')">糙米</span>
                    <span class="clickable" onclick="showImage('Quinoa')">藜麥</span>
                </li>
                <li>纖維蔬菜:
                    <span class="clickable" onclick="showImage('broccoli')">西蘭花</span>
                    <span class="clickable" onclick="showImage('spinach')">菠菜</span>
                    </li>
                    <li>適量控制脂肪和糖分</li>
            </ul>
            <!-- 圖片元素 -->


            <img src="{{ asset('圖片/雞胸肉-removebg-preview.png') }}" id="chicken-breast" class="hidden-image">
            <img src="{{ asset('圖片/蛋白.jpg') }}" alt="蛋白" id="protein" class="hidden-image">
            <img src="{{ asset('圖片/糙米-removebg-preview.png') }}" alt="糙米" id="brown-rice" class="hidden-image">
            <img src="{{ asset('圖片/藜麥-removebg-preview.png') }}" alt="藜麥" id="Quinoa" class="hidden-image">
            <img src="{{ asset('圖片/花椰菜-removebg-preview.png') }}" alt="西蘭花" id="broccoli" class="hidden-image">
            <img src="{{ asset('圖片/菠菜-removebg-preview.png') }}" alt="菠菜" id="spinach" class="hidden-image">
        </section>

        <section class="components-section section-box">
            <h2>不同年齡與 BMI 的每日成分攝取建議</h2>
            <table>
                <thead>
                    <tr>
                        <th>年齡</th>
                        <th>BMI 範圍</th>
                        <th>熱量 (kcal)</th>
                        <th>蛋白質 (g)</th>
                        <th>碳水化合物 (g)</th>
                        <th>脂肪 (g)</th>
                        <th>纖維 (g)</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- 18-25 歲 -->
                    <tr>
                        <td rowspan="6">18-25 歲</td>
                        <td><18.5</td>
                        <td>2000</td>
                        <td>75</td>
                        <td>260</td>
                        <td>60</td>
                        <td>25</td>
                    </tr>
                    <tr>
                        <td>18.5~24</td>
                        <td>1800</td>
                        <td>90</td>
                        <td>200</td>
                        <td>50</td>
                        <td>30</td>
                    </tr>
                    <tr>
                        <td>24~<27</td>
                        <td>1600</td>
                        <td>100</td>
                        <td>180</td>
                        <td>45</td>
                        <td>30</td>
                    </tr>
                    <tr>
                        <td>27~<30</td>
                        <td>1500</td>
                        <td>110</td>
                        <td>150</td>
                        <td>40</td>
                        <td>35</td>
                    </tr>
                    <tr>
                        <td>30~<35</td>
                        <td>1400</td>
                        <td>120</td>
                        <td>120</td>
                        <td>35</td>
                        <td>40</td>
                    </tr>
                    <tr>
                        <td>>35</td>
                        <td>1300</td>
                        <td>130</td>
                        <td>100</td>
                        <td>30</td>
                        <td>40</td>
                    </tr>

                    <!-- 26-35 歲 -->
                    <tr>
                        <td rowspan="6">26-35 歲</td>
                        <td><18.5</td>
                        <td>1900</td>
                        <td>70</td>
                        <td>250</td>
                        <td>55</td>
                        <td>25</td>
                    </tr>
                    <tr>
                        <td>18.5~24</td>
                        <td>1700</td>
                        <td>85</td>
                        <td>200</td>
                        <td>50</td>
                        <td>30</td>
                    </tr>
                    <tr>
                        <td>24~<27</td>
                        <td>1500</td>
                        <td>95</td>
                        <td>180</td>
                        <td>45</td>
                        <td>30</td>
                    </tr>
                    <tr>
                        <td>27~<30</td>
                        <td>1400</td>
                        <td>105</td>
                        <td>150</td>
                        <td>40</td>
                        <td>35</td>
                    </tr>
                    <tr>
                        <td>30~<35</td>
                        <td>1300</td>
                        <td>115</td>
                        <td>120</td>
                        <td>35</td>
                        <td>40</td>
                    </tr>
                    <tr>
                        <td>>35</td>
                        <td>1200</td>
                        <td>125</td>
                        <td>100</td>
                        <td>30</td>
                        <td>40</td>
                    </tr>

                    <!-- 36-50 歲 -->
                    <tr>
                        <td rowspan="6">36-50 歲</td>
                        <td><18.5</td>
                        <td>1800</td>
                        <td>65</td>
                        <td>240</td>
                        <td>50</td>
                        <td>25</td>
                    </tr>
                    <tr>
                        <td>18.5~24</td>
                        <td>1600</td>
                        <td>80</td>
                        <td>200</td>
                        <td>45</td>
                        <td>30</td>
                    </tr>
                    <tr>
                        <td>24~<27</td>
                        <td>1400</td>
                        <td>90</td>
                        <td>170</td>
                        <td>40</td>
                        <td>30</td>
                    </tr>
                    <tr>
                        <td>27~<30</td>
                        <td>1300</td>
                        <td>100</td>
                        <td>140</td>
                        <td>35</td>
                        <td>35</td>
                    </tr>
                    <tr>
                        <td>30~<35</td>
                        <td>1200</td>
                        <td>110</td>
                        <td>110</td>
                        <td>30</td>
                        <td>40</td>
                    </tr>
                    <tr>
                        <td>>35</td>
                        <td>1100</td>
                        <td>120</td>
                        <td>90</td>
                        <td>25</td>
                        <td>40</td>
                    </tr>

                    <!-- 51 歲以上 -->
                    <tr>
                        <td rowspan="6">51 歲以上</td>
                        <td><18.5</td>
                        <td>1700</td>
                        <td>60</td>
                        <td>230</td>
                        <td>45</td>
                        <td>25</td>
                    </tr>
                    <tr>
                        <td>18.5~24</td>
                        <td>1500</td>
                        <td>75</td>
                        <td>190</td>
                        <td>40</td>
                        <td>30</td>
                    </tr>
                    <tr>
                        <td>24~<27</td>
                        <td>1300</td>
                        <td>85</td>
                        <td>160</td>
                        <td>35</td>
                        <td>30</td>
                    </tr>
                    <tr>
                        <td>27~<30</td>
                        <td>1200</td>
                        <td>95</td>
                        <td>130</td>
                        <td>30</td>
                        <td>35</td>
                    </tr>
                    <tr>
                        <td>30~<35</td>
                        <td>1100</td>
                        <td>105</td>
                        <td>100</td>
                        <td>25</td>
                        <td>40</td>
                    </tr>
                    <tr>
                        <td>>35</td>
                        <td>1000</td>
                        <td>115</td>
                        <td>80</td>
                        <td>20</td>
                        <td>40</td>
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
</html>
    </x-app-layout>
