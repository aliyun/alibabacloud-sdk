<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Facebody\V20191230\Models\HandPostureResponse\data;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Facebody\V20191230\Models\HandPostureResponse\data\outputs\results;

class outputs extends Model {
    protected $_name = [
        'handCount' => 'HandCount',
        'results' => 'Results',
    ];
    public function validate() {
        Model::validateRequired('handCount', $this->handCount, true);
        Model::validateRequired('results', $this->results, true);
    }
    public function toMap() {
        $res = [];
        $res['HandCount'] = $this->handCount;
        $res['Results'] = [];
        if(null !== $this->results && is_array($this->results)){
            $n = 0;
            foreach($this->results as $item){
                $res['Results'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return outputs
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['HandCount'])){
            $model->handCount = $map['HandCount'];
        }
        if(isset($map['Results'])){
            if(!empty($map['Results'])){
                $model->results = [];
                $n = 0;
                foreach($map['Results'] as $item) {
                    $model->results[$n++] = null !== $item ? results::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description handCount
     * @var integer
     */
    public $handCount;

    /**
     * @description results
     * @var array
     */
    public $results;

}
