<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TradeRequest extends Model
{
    use HasFactory;
    protected $table = 'trade_requests';
    public function myRequest(){
        return $this->hasOne(Trade::class, 'id', 'trade_id');
    }
    public function myTrade(){
        return $this->hasOne(Trade::class, 'id', 'trade_request_id');
    }
    public function findAccountRequest(){
        return $this->hasOne(AccountClient::class, 'id', 'account_request_id');
    }

    public function getListPhotoAttribute(){
        $array_image = [];
        if ($this->image){
            $array_image = explode(',',$this->image);
        }
        return $array_image;
    }


    public function getFirstImgAttribute(){
        $array_image = $this->listPhoto;
        if (count($array_image) >0){
            return $array_image[0];
        } else {
            return 'https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg';
        }
    }

    public function getStatusColorAttribute(){

        if($this->status_trade == 1){
            return 'text-primary';
        }elseif ($this->status_trade == 2) {
            return 'text-warning';
        } else {
            return 'text-success';
        }
    }
    public function getStatusNameAttribute(){

        if($this->status_trade == 1){
            return 'Chưa trao đổi';
        }elseif ($this->status_trade == 2) {
            return 'Đang trao đổi';
        } else {
            return 'Đã xong';
        }
    }
}
