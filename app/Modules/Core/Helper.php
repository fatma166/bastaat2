<?php
namespace App\Modules\Core;

class Helper
{
    public static function restaurant_data_formatting($data, $multi_data = false)
    {

        $storage = [];
        if ($multi_data == true) {
            foreach ($data as $item) {
                if ($item->opening_time) {
                    $item['available_time_starts'] = $item->opening_time->format('H:i');
                    unset($item['opening_time']);
                }
                if ($item->closeing_time) {
                    $item['available_time_ends'] = $item->closeing_time->format('H:i');
                    unset($item['closeing_time']);
                }

                $ratings =Helper::calculate_restaurant_rating($item['rating']);

                unset($item['rating']);
                $item['avg_rating'] = $ratings['rating'];
                $item['rating_count '] = $ratings['total'];
                unset($item['campaigns']);
                unset($item['pivot']);
                if(isset($item['distance']))
                    $item['distance_time']=ceil (($item['distance']/80)*60);
                array_push($storage, $item);
            }
            $data = $storage;
        } else {
            if ($data->opening_time) {
                $data['available_time_starts'] = $data->opening_time->format('H:i');
                unset($data['opening_time']);
            }
            if ($data->closeing_time) {
                $data['available_time_ends'] = $data->closeing_time->format('H:i');
                unset($data['closeing_time']);
            }
            $ratings = Helper::calculate_restaurant_rating($data['rating']);
            unset($data['rating']);
            $data['avg_rating'] = $ratings['rating'];
            $data['rating_count '] = $ratings['total'];

            unset($data['pivot']);
        }


        return $data;
    }
    public  static function calculate_restaurant_rating($ratings)
    {
        $total_submit = $ratings[0]+$ratings[1]+$ratings[2]+$ratings[3]+$ratings[4];
        $rating = ($ratings[0]*5+$ratings[1]*4+$ratings[2]*3+$ratings[3]*2+$ratings[4])/($total_submit?$total_submit:1);
        return ['rating'=>$rating, 'total'=>$total_submit];
    }

    public  function update_restaurant_rating($ratings, $product_rating)
    {
        $restaurant_ratings = [1=>0 , 2=>0, 3=>0, 4=>0, 5=>0];
        if($ratings)
        {
            $restaurant_ratings[1] = $ratings[4];
            $restaurant_ratings[2] = $ratings[3];
            $restaurant_ratings[3] = $ratings[2];
            $restaurant_ratings[4] = $ratings[1];
            $restaurant_ratings[5] = $ratings[0];
            $restaurant_ratings[$product_rating] = $ratings[5-$product_rating] + 1;
        }
        else
        {
            $restaurant_ratings[$product_rating] = 1;
        }
        return json_encode($restaurant_ratings);
    }

}
