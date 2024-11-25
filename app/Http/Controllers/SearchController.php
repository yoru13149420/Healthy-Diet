<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\Bookmark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SearchController extends Controller
{
    public function search_restaurants_from_hybrid(Request $request)
    {
        $restaurants = collect(); // 預設為空集合
        $med_food = $request->input('med_food') ? 'Y' : null;
        $diet_food = $request->input('diet_food') ? 'Y' : null;
        $user_id = auth()->id(); // 取得使用者ID（假設從前端傳過來

        // 獲取使用者的書籤清單
        $bookmarkedRestaurants = Bookmark::where('user_id', $user_id)->pluck('restaurant_name')->toArray();
        Log::info('Bookmarked Restaurants:', $bookmarkedRestaurants);

        Log::info('User ID:', ['user_id' => $user_id]);

        if ($request->has('query')) {
            $query = $request->input('query');

            // 根據名稱部分符合搜尋
            $restaurants = Restaurant::where('food_name', 'like', '%' . $query . '%')
                ->when($med_food, function ($query) {
                    return $query->where('med_food', 'Y');
                })
                ->when($diet_food, function ($query) {
                    return $query->where('diet_food', 'Y');
                })
                ->get()
                ->map(function ($restaurant) use ($bookmarkedRestaurants) {
                    // 檢查餐廳是否在書籤清單中
                    $restaurant->isBookmarked = in_array($restaurant->food_name, $bookmarkedRestaurants);
                    return $restaurant;
                }); // 將書籤狀態加入到每個餐廳項目
        }

        return view('dashboard', compact('restaurants', 'med_food', 'diet_food'));
    }

    public function search_restaurants_from_list(Request $request)
    {
        $restaurants = collect(); // 預設為空集合
        $med_food = $request->input('med_food') ? 'Y' : null;
        $diet_food = $request->input('diet_food') ? 'Y' : null;
        $user_id = auth()->id(); // 取得使用者ID（假設從前端傳過來

        // 獲取使用者的書籤清單
        $bookmarkedRestaurants = Bookmark::where('user_id', $user_id)->pluck('restaurant_name')->toArray();
        Log::info('Bookmarked Restaurants:', $bookmarkedRestaurants);

        Log::info('User ID:', ['user_id' => $user_id]);

        if ($request->has('query')) {
            $query = $request->input('query');

            // 根據名稱部分符合搜尋
            $restaurants = Restaurant::where('food_name', 'like', '%' . $query . '%')
                ->when($med_food, function ($query) {
                    return $query->where('med_food', 'Y');
                })
                ->when($diet_food, function ($query) {
                    return $query->where('diet_food', 'Y');
                })
                ->get()
                ->map(function ($restaurant) use ($bookmarkedRestaurants) {
                    // 檢查餐廳是否在書籤清單中
                    $restaurant->isBookmarked = in_array($restaurant->food_name, $bookmarkedRestaurants);
                    return $restaurant;
                }); // 將書籤狀態加入到每個餐廳項目
        }

        return view('list', compact('restaurants', 'med_food', 'diet_food'));
    }

    public function search_restaurants_from_adv(Request $request)
    {
        $restaurantsQuery = Restaurant::query();
        //$townQuery = Town::query();
        // 建立各種條件查詢
        if ($request->has('food_type')) {
            $restaurantsQuery->where(function($query) use ($request) {
                foreach ($request->input('food_type') as $category) {
                    $query->orWhere('food_type', $category);
                }
            });
        }

        if ($request->has('delivery')) {
            $restaurantsQuery->where(function($query) use ($request) {
                $query->orWhere('delivery', 'Both'); // 加上 Both 條件
                foreach ($request->input('delivery') as $platform) {
                    $query->orWhere('delivery', $platform);
                }
            });
        }

        /*if ($request->has('town')&& $request->input('town') !== '') {
            $townName = $townQuery->where('town_id', $request->input('town'))->value('town_name');;
            if ($townName) {
                $restaurantsQuery->where('address', 'like', '%' . $townName . '%');
            } else {
                
            }
        }*/
        /*if ($request->has('town_name')) {
            $restaurantsQuery->where('address', 'like', '%' . $townName . '%') ;
        }*/

        if ($request->has('town_name')) {
            $restaurantsQuery->where(function($query) use ($request) {
                foreach ($request->input('town_name') as $town_name) {
                    $query->orWhere('address', 'like', '%' . $town_name . '%');
                }
            });
        }

        if ($request->has('e_invoice')) {
            $restaurantsQuery->where(function($query) use ($request) {
                $query->orWhere('e_invoice', 'Y');
                foreach ($request->input('e_invoice') as $carrier) {
                    $query->orWhere('e_invoice', $carrier);
                }
            });
        }

        if ($request->has('onlinepay')) {
            $restaurantsQuery->where(function($query) use ($request) {
                $query->orWhere('onlinepay', 'Y');
                foreach ($request->input('onlinepay') as $payment) {
                    $query->orWhere('onlinepay', $payment);
                }
            });
        }

        if ($request->has('credit')) {
            $restaurantsQuery->where(function($query) use ($request) {
                $query->orWhere('credit', 'Y');
                foreach ($request->input('credit') as $credit) {
                    $query->orWhere('credit', $credit);
                }
            });
        }

        if ($request->has('order_type')) {
            $restaurantsQuery->where(function($query) use ($request) {
                foreach ($request->input('order_type', '都有') as $buffet) {
                    $query->orWhere('order_type', $buffet);
                }
            });
        }
        if ($request->has('med_food')) {
            $restaurantsQuery->where(function($query) use ($request) {
                $query->orWhere('med_food', 'Y');
                foreach ($request->input('med_food') as $mid) {
                    $query->orWhere('med_food', $mid);
                }
            });
        }
        if ($request->has('diet_food')) {
            $restaurantsQuery->where(function($query) use ($request) {
                $query->orWhere('diet_food', 'Y');
                foreach ($request->input('diet_food') as $diet) {
                    $query->orWhere('diet_food', $diet);
                }
            });
        }
        if ($request->has('inside')) {
            $restaurantsQuery->where(function($query) use ($request) {
                $query->orWhere('inside', 'Y');
                foreach ($request->input('inside') as $inside) {
                    $query->orWhere('inside', $inside);
                }
            });
        }
        if ($request->has('veggie')) {
            $restaurantsQuery->where(function($query) use ($request) {
                $query->orWhere('veggie', 'Y');
                foreach ($request->input('veggie') as $veggie) {
                    $query->orWhere('veggie', $veggie);
                }
            });
        }
        // 排序和取得結果

        $med_food = $request->input('med_food') ? 'Y' : null;
        $diet_food = $request->input('diet_food') ? 'Y' : null;

        $restaurants = $restaurantsQuery->get();
        //return view('filter', compact('restaurants'));
        return view('dashboard', compact('restaurants', 'med_food', 'diet_food'));
    }

}
