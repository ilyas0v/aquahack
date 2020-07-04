<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProduct extends Model
{
    protected $fillable = [
        'user_id',
        'product_id',
        'count',
        'start_time',
        'end_time',
        'location'
    ];


    protected $dates = [
        'start_time',
        'end_time'
    ];


    public function getProductObjectAttribute()
    {
        $id = $this->product_id;

        $products = config('aquametrics.PRODUCTS');

        foreach($products as $product)
            if($product['id'] == $id)
                return $product;
    }



    public function getWaterConsumptionAttribute()
    {
        $id = $this->product_id;

        $products = config('aquametrics.PRODUCTS');

        $product = null;

        foreach($products as $p)
            if($p['id'] == $id)
            {
                $product = $p;
                break; 
            }

        // CAVAB IN = ET məhsulu + SAT + PERC + WL - Pe 

        $ETo    = $product['ETo'];
        $Kc     = $product['Kc'];
        $SAT    = $product['SAT'];
        $PERC   = $product['PERC'];
        $WL     = $product['WL'];

        $ET = $ETo * $Kc;



        //  DIFFERENCE BETWEEN DATES
        $datetime1 = new \DateTime($this->start_time);
        $datetime2 = new \DateTime($this->end_time);
        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a');//now do whatever you like with $days



        //  CALCULATE DAYS BY MONTH
        $start_time = $this->start_time;
        $end_time   = $this->end_time;


        $IN = ($ET * $days) + $SAT + $PERC + $WL;

        return $IN;
    }



    public function getMonthlyWaterConsumption($month)
    {
        $id = $this->product_id;

        $products = config('aquametrics.PRODUCTS');

        $product = null;

        foreach($products as $p)
            if($p['id'] == $id)
            {
                $product = $p;
                break; 
            }

        // CAVAB IN = ET məhsulu + SAT + PERC + WL - Pe 

        $ETo    = $product['ETo'];
        $Kc     = $product['Kc'];
        $SAT    = $product['SAT'];
        $PERC   = $product['PERC'];
        $WL     = $product['WL'];

        $ET = $ETo * $Kc;

        $PE = config('aquametrics.PE_VALUES')[$month];


        $IN = (($ET * 30) + $SAT + $PERC + $WL) - $PE;

        return $IN;
    }
}
