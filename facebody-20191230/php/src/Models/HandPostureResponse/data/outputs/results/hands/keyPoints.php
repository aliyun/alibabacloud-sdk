<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Facebody\V20191230\Models\HandPostureResponse\data\outputs\results\hands;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Facebody\V20191230\Models\HandPostureResponse\data\outputs\results\hands\keyPoints\positions;

class keyPoints extends Model {
    protected $_name = [
        'label' => 'Label',
        'positions' => 'Positions',
    ];
    public function validate() {
        Model::validateRequired('label', $this->label, true);
        Model::validateRequired('positions', $this->positions, true);
    }
    public function toMap() {
        $res = [];
        $res['Label'] = $this->label;
        $res['Positions'] = [];
        if(null !== $this->positions && is_array($this->positions)){
            $n = 0;
            foreach($this->positions as $item){
                $res['Positions'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return keyPoints
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Label'])){
            $model->label = $map['Label'];
        }
        if(isset($map['Positions'])){
            if(!empty($map['Positions'])){
                $model->positions = [];
                $n = 0;
                foreach($map['Positions'] as $item) {
                    $model->positions[$n++] = null !== $item ? positions::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description label
     * @var string
     */
    public $label;

    /**
     * @description positions
     * @var array
     */
    public $positions;

}
