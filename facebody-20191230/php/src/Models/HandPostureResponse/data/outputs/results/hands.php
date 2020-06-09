<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Facebody\V20191230\Models\HandPostureResponse\data\outputs\results;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Facebody\V20191230\Models\HandPostureResponse\data\outputs\results\hands\keyPoints;

class hands extends Model {
    protected $_name = [
        'confident' => 'Confident',
        'keyPoints' => 'KeyPoints',
    ];
    public function validate() {
        Model::validateRequired('confident', $this->confident, true);
        Model::validateRequired('keyPoints', $this->keyPoints, true);
    }
    public function toMap() {
        $res = [];
        $res['Confident'] = $this->confident;
        $res['KeyPoints'] = [];
        if(null !== $this->keyPoints && is_array($this->keyPoints)){
            $n = 0;
            foreach($this->keyPoints as $item){
                $res['KeyPoints'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return hands
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Confident'])){
            $model->confident = $map['Confident'];
        }
        if(isset($map['KeyPoints'])){
            if(!empty($map['KeyPoints'])){
                $model->keyPoints = [];
                $n = 0;
                foreach($map['KeyPoints'] as $item) {
                    $model->keyPoints[$n++] = null !== $item ? keyPoints::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description confident
     * @var float
     */
    public $confident;

    /**
     * @description keypoints
     * @var array
     */
    public $keyPoints;

}
