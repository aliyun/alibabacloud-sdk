<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Facebody\V20191230\Models\HandPostureResponse\data\outputs\results\hands\keyPoints;

use AlibabaCloud\Tea\Model;

class positions extends Model {
    protected $_name = [
        'points' => 'Points',
    ];
    public function validate() {
        Model::validateRequired('points', $this->points, true);
    }
    public function toMap() {
        $res = [];
        $res['Points'] = [];
        if(null !== $this->points){
            $res['Points'] = $this->points;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return positions
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Points'])){
            if(!empty($map['Points'])){
                $model->points = [];
                $model->points = $map['Points'];
            }
        }
        return $model;
    }
    /**
     * @description points
     * @var array
     */
    public $points;

}
