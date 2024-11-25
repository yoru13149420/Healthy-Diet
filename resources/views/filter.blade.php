<x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        background-color: #f4f4f4;
        font-family: Arial, sans-serif;
    }
    
    .outer-container {
        width: 100%;
        background-color: #b49e9e;
        padding: 0 300px;
        box-sizing: border-box;
    }
    
    .container_1 {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 5px 0;
    }
    
    .left-section,
    .right-section {
        display: flex;
        align-items: center;
        gap: 20px;
    }
    
    .map_search a,
    .login-register a {
        color: white;
        text-decoration: none;
        font-size: 18px;
    }
    
    .Developer, .Publish {
        position: relative;
        display: flex;
        align-items: center;
        gap: 5px;
        color: white;
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
    }
    
    .dropdown_Developer a, .dropdown_Publish a {
        color: inherit;
        text-decoration: none;
        white-space: nowrap;
    }
    
    .login-register {
        display: flex;
        align-items: center;
        gap: 10px;
    }
    
    .container_Searching {
        position: relative;
        display: flex;
        align-items: center;
        gap: 50px;
        padding: 0 300px;
        margin-top: 20px;
    }
    
    /* 健康美食地圖的樣式 */
    .title {
        font-weight: bold;
        font-size: 40px;
    }
    
    /* 城市名稱和圖標的懸停效果 */
    .city, .icon {
        cursor: pointer;
    }
    
    /* 當滑鼠懸停在 "台北市" 或 icon 時顯示下拉內容 */
    .container_Searching .city:hover + .icon + .dropdown_County_and_city,
    .container_Searching .icon:hover + .dropdown_County_and_city {
        display: block;
    }
    
    /* 下拉內容樣式 */
    .dropdown_County_and_city {
        display: none;
        position: absolute;
        top: 100%;
        left:600px;
        background-color: white;
        padding: 10px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        border: 1px solid #ccc;
        z-index: 10;
    }
    
    /* 表格樣式 */
    .dropdown_County_and_city table {
        font-size: 14px;
        width: auto;
        border-collapse: collapse;
    }
    
    .dropdown_County_and_city td {
        padding: 8px 12px;
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
        border-radius: 8px;
        overflow: hidden;
        width: 500px;
    }
    
    #searchInput {
        flex: 7;
        padding: 10px;
        border: none;
        outline: none;
        font-size: 16px;
    }
    
    .search-action {
        flex: 3;
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
    
    .container_Searching .icon {
        width: 1em;
        height: 1em;
        vertical-align: middle;
    }
    
    /* container_Select_Option 樣式 */
    .container_Select_Option {
        margin-top: 20px;
        padding: 0 300px;
    }
    
    .container_Select_Option table {
        width: 100%;
        border-collapse: collapse;
    }
    
    .container_Select_Option td {
        padding: 10px;
        font-size: 16px;
    }
    
    .container_Select_Option label {
        margin-right: 10px;
    }
    
    .container_Select_Option {
        background-color:#ccc;
    }
    </style>
</head>

<body>
    <form action="{{ route('restaurant.search') }}">
        <div class="container_Searching">
            <div class="title">健康美食地圖</div>
            <div class="search-container">
                <button class="search-action" onclick="searchFunction()">🔍 搜尋</button>
            </div>

            <script>
                function searchFunction(id) {
                    //    document.getElementById("abc").href="http://127.0.0.1/GraduationTopics/mysqli_oo.php?type=" + id.value; 
                }
            </script>
        </div>

        <div class="container_Select_Option">
            <table>
                <tr>
                    <td>
                        異國風情 |
                    </td>
                    <td>
                        <input type="checkbox" id="Japanese" name="food_type[]" value="日式">
                        <label for="Japanese">日式</label>

                        <input type="checkbox" id="Korean" name="food_type[]" value="韓式">
                        <label for="Korean">韓式</label>

                        <input type="checkbox" id="Western" name="food_type[]" value="西式">
                        <label for="Western">西式</label>

                        <input type="checkbox" id="Western" name="food_type[]" value="火鍋">
                        <label for="Western">火鍋</label>

                        <input type="checkbox" id="Western" name="food_type[]" value="燒烤">
                        <label for="Western">燒烤</label>

                        <input type="checkbox" id="Western" name="food_type[]" value="素食">
                        <label for="Western">素食</label>

                        <input type="checkbox" id="Western" name="food_type[]" value="義式">
                        <label for="Western">義式</label>

                        <input type="checkbox" id="Western" name="food_type[]" value="中西式">
                        <label for="Western">中西式</label>

                        <input type="checkbox" id="Western" name="food_type[]" value="泰式">
                        <label for="Western">泰式</label>

                        <input type="checkbox" id="Western" name="food_type[]" value="健康餐">
                        <label for="Western">健康餐</label><br><br>

                        <input type="checkbox" id="Western" name="food_type[]" value="日式燒烤">
                        <label for="Western">日式燒烤</label>

                        <input type="checkbox" id="Western" name="food_type[]" value="甜點">
                        <label for="Western">甜點</label>

                        <input type="checkbox" id="Western" name="food_type[]" value="壽喜燒">
                        <label for="Western">壽喜燒</label>

                        <input type="checkbox" id="Western" name="food_type[]" value="吃到飽">
                        <label for="Western">吃到飽</label>

                        <input type="checkbox" id="Western" name="food_type[]" value="速食">
                        <label for="Western">速食</label>

                        <input type="checkbox" id="Western" name="food_type[]" value="中式">
                        <label for="Western">中式</label>

                        <input type="checkbox" id="Western" name="food_type[]" value="早餐">
                        <label for="Western">早餐</label>

                        <input type="checkbox" id="Western" name="food_type[]" value="健康飲食">
                        <label for="Western">健康飲食</label>

                        <input type="checkbox" id="Western" name="food_type[]" value="便利食品">
                        <label for="Western">便利食品</label><br><br>

                        <input type="checkbox" id="Western" name="food_type[]" value="披薩">
                        <label for="Western">披薩</label>

                        <input type="checkbox" id="Western" name="food_type[]" value="咖啡">
                        <label for="Western">咖啡</label>

                        <input type="checkbox" id="Western" name="food_type[]" value="越式">
                        <label for="Western">越式</label>

                        <input type="checkbox" id="Western" name="food_type[]" value="壽司">
                        <label for="Western">壽司</label>

                        <input type="checkbox" id="Western" name="food_type[]" value="三明治">
                        <label for="Western">三明治</label>

                        <input type="checkbox" id="Western" name="food_type[]" value="烘焙">
                        <label for="Western">烘焙</label>

                        <input type="checkbox" id="Western" name="food_type[]" value="美式">
                        <label for="Western">美式</label>

                        <input type="checkbox" id="Western" name="food_type[]" value="街頭美食">
                        <label for="Western">街頭美食</label>

                        <input type="checkbox" id="Western" name="food_type[]" value="海鮮">
                        <label for="Western">海鮮</label>


                    </td>
                </tr>


                <tr>
                    <td>
                        外送平台 |
                    </td>
                    <td>
                        <input type="checkbox" id="UE" name="delivery[]" value="Ubereat">
                        <label for="vehicle1">Uber Eat</label>

                        <input type="checkbox" id="FP" name="delivery[]" value="Foodpanda">
                        <label for="vehicle2">Food Panda</label><br><br>
                    </td>
                </tr>

                <tr>
                    <td>
                        區域 |
                    </td>
                    <td>
                    <label for="city">選擇縣市：</label>
                    <select id="city" name="city">
                        <option value="">請選擇縣市</option>
                    </select>

                    <label for="town">選擇區域：</label>
                    <select id="town" name="town">
                        <option value="">請先選擇縣市</option>
                    </select>

                    <input type="hidden" id="town_name" name="town_name[]">
                    
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script>
                        $(document).ready(function() {
                            // 初始化：抓取所有縣市並加入到下拉選單
                            $.get('/cities', function(cities) {
                                $('#city').append(
                                    cities.map(city => `<option value="${city.city_id}">${city.city_name}</option>`)
                                );
                            }).fail(function() {
                                alert("無法取得縣市資料");
                            });

                            // 當縣市下拉選單改變時，根據選擇的縣市ID抓取相應的區域
                            $('#city').on('change', function() {
                                let cityId = $(this).val();
                                
                                if (cityId) {
                                    $('#town').prop('disabled', false).html('<option value="">請選擇區域</option>');

                                    $.get(`/towns/${cityId}`, function(towns) {
                                        $('#town').append(
                                            towns.map(town => `<option value="${town.town_id}" data-town-name="${town.town_name}">${town.town_name}</option>`)
                                        );
                                    }).fail(function() {
                                        alert("無法取得區域資料");
                                    });
                                } else {
                                    $('#town').prop('disabled', true).html('<option value="">請先選擇縣市</option>');
                                }
                            });
                            $('#town').on('change', function() {
                                let selectedTownName = $('#town option:selected').data('town-name');
                                $('#town_name').val(selectedTownName || '');
                            });
                        });
                    </script>

                    </td>

                </tr>
                <tr>
                    <td>
                        支付方式 |
                    </td>
                    <td>
                        <input type="checkbox" id="IC" name="e_invoice[]" value="Y">
                        <label for="IC">載具</label>

                        <input type="checkbox" id="EP" name="onlinepay[]" value="Y">
                        <label for="Payment method3">電子支付</label>

                        <input type="checkbox" id="CC" name="credit[]" value="Y">
                        <label for="Payment method4">信用卡</label><br><br>
                    </td>
                </tr>




                <tr>
                    <td>吃到飽/單點</td>
                    <td>
                        <input type="checkbox" id="Buffet" name="order_type[]" value="Buffet">
                        <label for="Buffet">吃到飽</label>
                        <input type="checkbox" id="Single" name="order_type[]" value="單點">
                        <label for="Single">單點</label><br><br>
                    </td>
                    </td>
                </tr>
                <tr>
                    <td>地中海/健身餐</td>
                    <td>
                        <input type="checkbox" id="MC" name="med_food[]" value="Y">
                        <label for="mediterranean cuisine">地中海美食</label>
                        <input type="checkbox" id="fm" name="diet_food[]" value="Y">
                        <label for="fitness meal">減脂餐</label><br><br>
                    </td>
                    </td>
                </tr>
                <tr>
                    <td>可否內用</td>
                    <td>
                        <input type="checkbox" id="IU" name="inside[]" value="Y">
                        <label for="Internal use">內用</label><br><br>
                    </td>
                    </td>
                </tr>
                <tr>
                    <td>提供素食</td>
                    <td>
                        <input type="checkbox" id="vg" name="veggie[]" value="Y">
                        <label for="Internal use">素食</label><br><br>
                    </td>
                    </td>
                </tr>
            </table>
        </div>
    </form>



</body>

</html>
</x-app-layout>