<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayUserTotalResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayUserTotalResponse\userPlayStatisTotals\userPlayStatisTotal;

class userPlayStatisTotals extends Model {
    protected $_name = [
        'userPlayStatisTotal' => 'UserPlayStatisTotal',
    ];
    public function validate() {
        Model::validateRequired('userPlayStatisTotal', $this->userPlayStatisTotal, true);
    }
    public function toMap() {
        $res = [];
        $res['UserPlayStatisTotal'] = [];
        if(null !== $this->userPlayStatisTotal && is_array($this->userPlayStatisTotal)){
            $n = 0;
            foreach($this->userPlayStatisTotal as $item){
                $res['UserPlayStatisTotal'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return userPlayStatisTotals
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['UserPlayStatisTotal'])){
            if(!empty($map['UserPlayStatisTotal'])){
                $model->userPlayStatisTotal = [];
                $n = 0;
                foreach($map['UserPlayStatisTotal'] as $item) {
                    $model->userPlayStatisTotal[$n++] = null !== $item ? userPlayStatisTotal::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description UserPlayStatisTotal
     * @var array
     */
    public $userPlayStatisTotal;

}
