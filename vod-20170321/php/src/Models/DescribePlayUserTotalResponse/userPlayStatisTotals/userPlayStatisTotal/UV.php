<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayUserTotalResponse\userPlayStatisTotals\userPlayStatisTotal;

use AlibabaCloud\Tea\Model;

class UV extends Model {
    protected $_name = [
        'android' => 'Android',
        'iOS' => 'iOS',
        'flash' => 'Flash',
        'HTML5' => 'HTML5',
    ];
    public function validate() {
        Model::validateRequired('android', $this->android, true);
        Model::validateRequired('iOS', $this->iOS, true);
        Model::validateRequired('flash', $this->flash, true);
        Model::validateRequired('HTML5', $this->HTML5, true);
    }
    public function toMap() {
        $res = [];
        $res['Android'] = $this->android;
        $res['iOS'] = $this->iOS;
        $res['Flash'] = $this->flash;
        $res['HTML5'] = $this->HTML5;
        return $res;
    }
    /**
     * @param array $map
     * @return UV
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Android'])){
            $model->android = $map['Android'];
        }
        if(isset($map['iOS'])){
            $model->iOS = $map['iOS'];
        }
        if(isset($map['Flash'])){
            $model->flash = $map['Flash'];
        }
        if(isset($map['HTML5'])){
            $model->HTML5 = $map['HTML5'];
        }
        return $model;
    }
    /**
     * @description android
     * @var string
     */
    public $android;

    /**
     * @description ios
     * @var string
     */
    public $iOS;

    /**
     * @description flash
     * @var string
     */
    public $flash;

    /**
     * @description h5
     * @var string
     */
    public $HTML5;

}
