<?php

namespace App\Exports;
use App\Models\Order;
use App\Models\Order_details;
use App\Models\Shipping;
use App\Models\Counpon;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromArray;
class Order_detail implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $status1 = Order::where('order_status','=','2')->get();
        $output = [];
        foreach($status1 as $tus)
        {
            // $shipings = $tus->shipping_id;
            // $status = $tus->order_code;
            $order1 = Order_details::where('order_code',$tus['order_code'])->get();

            foreach($order1 as $d){

                // This is the value you want
              $name = $d['product_counpon'];
              $sumprice = Counpon::select('price_discount')->where('counpon_code',$name)->get();
            //   $order1->setAttribute($sumprice);

             $order1->push($sumprice[0]);

             }
             array_push($output, $order1);
        }

        return collect(

                $output

        );

    }
}
