<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trade extends Model
{
    use HasFactory;
    protected $table = 'trades';
    public function account(){
        return $this->hasOne(AccountClient::class, 'id', 'account_id');
    }
    public function category(){
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
    public function cityName(){
        return $this->hasOne(City::class, 'matp', 'city');
    }
    public function districtName(){
        return $this->hasOne(District::class, 'maqh', 'district');
    }
    public function wardName(){
        return $this->hasOne(Ward::class, 'xaid', 'ward');
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

    public function getTradeColorAttribute(){

        if($this->status == 1){
            return 'text-warning';
        }elseif ($this->status == 2) {
            return 'text-success';
        } else {
            return 'text-danger';
        }
    }
    public function getTradeStatusAttribute(){

        if($this->status == 1){
            return 'Chưa duyệt';
        }elseif ($this->status == 2) {
            return 'Đã duyệt';
        } else {
            return 'Đã từ chối';
        }
    }

    public function getCountStringAttribute(){

        $countString = strlen($this->content);
        if($countString > 100 ){
            return substr($this->content, 0, 5);
        }
        else{
            return $this->content;
        }
    }

    public function getAcceptButtonAttribute(){
        $disabled = $this->status;
        if ($disabled == 1){
            return '';
        } else {
            return 'disabled';
        }
    }
    public function getCancelButtonAttribute(){
        $disabled = $this->status;
        if ($disabled == 1){
            return '';
        } else {
            return 'disabled';
        }
    }
}
