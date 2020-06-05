<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Facebody\V20191230\Models\BodyPostureResponse\data\outputs;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Facebody\V20191230\Models\BodyPostureResponse\data\outputs\results\bodies;

class results extends Model {
    protected $_name = [
        'bodies' => 'Bodies',
    ];
    public function validate() {
        Model::validateRequired('bodies', $this->bodies, true);
    }
    public function toMap() {
        $res = [];
        $res['Bodies'] = [];
        if(null !== $this->bodies && is_array($this->bodies)){
            $n = 0;
            foreach($this->bodies as $item){
                $res['Bodies'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return results
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Bodies'])){
            if(!empty($map['Bodies'])){
                $model->bodies = [];
                $n = 0;
                foreach($map['Bodies'] as $item) {
                    $model->bodies[$n++] = null !== $item ? bodies::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description bodies
     * @var array
     */
    public $bodies;

}
