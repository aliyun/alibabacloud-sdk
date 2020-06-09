<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Facebody\V20191230\Models\DetectMaskResponse;

use AlibabaCloud\Tea\Model;

class data extends Model {
    protected $_name = [
        'mask' => 'Mask',
        'faceProbability' => 'FaceProbability',
    ];
    public function validate() {
        Model::validateRequired('mask', $this->mask, true);
        Model::validateRequired('faceProbability', $this->faceProbability, true);
    }
    public function toMap() {
        $res = [];
        $res['Mask'] = $this->mask;
        $res['FaceProbability'] = $this->faceProbability;
        return $res;
    }
    /**
     * @param array $map
     * @return data
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Mask'])){
            $model->mask = $map['Mask'];
        }
        if(isset($map['FaceProbability'])){
            $model->faceProbability = $map['FaceProbability'];
        }
        return $model;
    }
    /**
     * @description mask
     * @var integer
     */
    public $mask;

    /**
     * @description faceProbability
     * @var float
     */
    public $faceProbability;

}
