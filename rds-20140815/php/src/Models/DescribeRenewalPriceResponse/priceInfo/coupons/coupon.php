<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRenewalPriceResponse\priceInfo\coupons;

use AlibabaCloud\Tea\Model;

class coupon extends Model {
    protected $_name = [
        'couponNo' => 'CouponNo',
        'name' => 'Name',
        'description' => 'Description',
        'isSelected' => 'IsSelected',
    ];
    public function validate() {
        Model::validateRequired('couponNo', $this->couponNo, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('isSelected', $this->isSelected, true);
    }
    public function toMap() {
        $res = [];
        $res['CouponNo'] = $this->couponNo;
        $res['Name'] = $this->name;
        $res['Description'] = $this->description;
        $res['IsSelected'] = $this->isSelected;
        return $res;
    }
    /**
     * @param array $map
     * @return coupon
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['CouponNo'])){
            $model->couponNo = $map['CouponNo'];
        }
        if(isset($map['Name'])){
            $model->name = $map['Name'];
        }
        if(isset($map['Description'])){
            $model->description = $map['Description'];
        }
        if(isset($map['IsSelected'])){
            $model->isSelected = $map['IsSelected'];
        }
        return $model;
    }
    /**
     * @description promotionOptionNo
     * @var string
     */
    public $couponNo;

    /**
     * @description promotionName
     * @var string
     */
    public $name;

    /**
     * @description promotionDesc
     * @var string
     */
    public $description;

    /**
     * @description selected
     * @var string
     */
    public $isSelected;

}
