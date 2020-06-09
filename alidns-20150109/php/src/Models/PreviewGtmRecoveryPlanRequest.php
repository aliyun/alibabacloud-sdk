<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class PreviewGtmRecoveryPlanRequest extends Model {
    protected $_name = [
        'lang' => 'Lang',
        'recoveryPlanId' => 'RecoveryPlanId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
    ];
    public function validate() {
        Model::validateRequired('recoveryPlanId', $this->recoveryPlanId, true);
    }
    public function toMap() {
        $res = [];
        $res['Lang'] = $this->lang;
        $res['RecoveryPlanId'] = $this->recoveryPlanId;
        $res['PageNumber'] = $this->pageNumber;
        $res['PageSize'] = $this->pageSize;
        return $res;
    }
    /**
     * @param array $map
     * @return PreviewGtmRecoveryPlanRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Lang'])){
            $model->lang = $map['Lang'];
        }
        if(isset($map['RecoveryPlanId'])){
            $model->recoveryPlanId = $map['RecoveryPlanId'];
        }
        if(isset($map['PageNumber'])){
            $model->pageNumber = $map['PageNumber'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        return $model;
    }
    /**
     * @description lang
     * @var string
     */
    public $lang;

    /**
     * @description recoveryPlanId
     * @var integer
     */
    public $recoveryPlanId;

    /**
     * @description pageNumber
     * @var integer
     */
    public $pageNumber;

    /**
     * @description pageSize
     * @var integer
     */
    public $pageSize;

}
