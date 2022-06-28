<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\User;
use app\models\Product;
use app\models\Order;
use app\models\Basket;

class ApiController extends Controller
{
    public function behaviors()
{
    return [
        'corsFilter' => [
            'class' => \yii\filters\Cors::class,
            'cors' => [
                // restrict access to
                'Origin' => ['http://localhost:3000'],
                // Allow only POST and PUT methods
                'Access-Control-Request-Method' => ['POST', 'PUT', 'GET'],
                // Allow only headers 'X-Wsse'
                'Access-Control-Request-Headers' => ['X-Wsse'],
                // Allow credentials (cookies, authorization headers, etc.) to be exposed to the browser
                'Access-Control-Allow-Credentials' => true,
                // Allow OPTIONS caching
                'Access-Control-Max-Age' => 3600,
                // Allow the X-Pagination-Current-Page header to be exposed to the browser.
                'Access-Control-Expose-Headers' => ['X-Pagination-Current-Page'],
            ],

        ],
    ];
}
    
    public function actionUsers()
    {
        $data = User::find()->with('orders')->asArray()->all();
        /*echo '<pre>';
        print_r($data);
        echo '</pre>';*/
        return json_encode($data);
    }
    
    public function actionProducts()
    {
        $data = Product::find()->asArray()->all();
        return json_encode($data);
    }

    public function actionOrders()
    {
        $data = Order::find()->with(['user'])->asArray()->all();
        return json_encode($data);
    }

    public function actionBasket($id)
    {
        $data = Basket::find()->with(['product'])->where(['order_id' => $id])->asArray()->all();
        return json_encode($data);
    }

    public function actionAddusers()
    {
        $data = [
            ['Nikolay', 'user1@mail.ru', '+7-999-999-99-99', 'password1'],
            ['Sergey', 'user2@mail.ru', '+7-888-888-88-88', 'password2'],
        ];
        foreach($data as $d) {
            $record = new User();
            $record->name = $d[0];
            $record->email = $d[1];
            $record->phone = $d[2];
            $record->password = $d[3];
            $record->save();
        }
    }

    public function actionAddproducts()
    {
        $data = [
            ["Молоко", 99.15],
            ["Мясо", 299.25],
            ["Конфеты", 19.50],
            ["Печенье", 44.00],
            ["Пряники", 50.50],
            ["Суфле", 100.00],
            ["Компот", 15.20],
            ["Салат", 73.00],
            ["Рагу", 90.00],
            ["Пирожное", 44.30],
            ["Мороженое", 30.40],
        ];
        foreach($data as $d) {
            $record = new Product();
            $record->caption = $d[0];
            $record->price = $d[1];
            $record->save();
        }
    }

    public function actionAddorder()
    {
        $data = [
            [1, 341.89],
            [2, 515.06],
            [1, 1902,48],
        ];
        foreach($data as $d) {
            $record = new Order();
            $record->user_id = $d[0];
            $record->summa = $d[1];
            $record->save();
        }
    }

    public function actionAddbasket()
    {
        $data = [
            [1, 1],
            [1, 4],
            [1, 2],
            [1, 7],
            [1, 11],
            [1, 9],
            [1, 4],
            [1, 3],

            [2, 10],
            [2, 5],
            [2, 6],
            [2, 7],
            [2, 1],
            [2, 1],
            [2, 4],
            [2, 3],

            [3, 2],
            [3, 2],
            [3, 2],
            [3, 3],
        ];
        foreach($data as $d) {
            $record = new Basket();
            $record->order_id = $d[0];
            $record->product_id = $d[1];
            $record->save();
        }
    }

}
