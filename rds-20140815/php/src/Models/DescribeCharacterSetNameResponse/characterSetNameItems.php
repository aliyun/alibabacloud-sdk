<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCharacterSetNameResponse;

use AlibabaCloud\Tea\Model;

class characterSetNameItems extends Model {
    protected $_name = [
        'characterSetName' => 'CharacterSetName',
    ];
    public function validate() {
        Model::validateRequired('characterSetName', $this->characterSetName, true);
    }
    public function toMap() {
        $res = [];
        $res['CharacterSetName'] = [];
        if(null !== $this->characterSetName){
            $res['CharacterSetName'] = $this->characterSetName;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return characterSetNameItems
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['CharacterSetName'])){
            if(!empty($map['CharacterSetName'])){
                $model->characterSetName = [];
                $model->characterSetName = $map['CharacterSetName'];
            }
        }
        return $model;
    }
    /**
     * @description CharacterSetName
     * @var array
     */
    public $characterSetName;

}
