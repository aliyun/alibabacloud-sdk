<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAccessRulesResponse\accessRules;

use AlibabaCloud\Tea\Model;

class accessRule extends Model {
    protected $_name = [
        'sourceCidrIp' => 'SourceCidrIp',
        'priority' => 'Priority',
        'accessRuleId' => 'AccessRuleId',
        'RWAccess' => 'RWAccess',
        'userAccess' => 'UserAccess',
    ];
    public function validate() {
        Model::validateRequired('sourceCidrIp', $this->sourceCidrIp, true);
        Model::validateRequired('priority', $this->priority, true);
        Model::validateRequired('accessRuleId', $this->accessRuleId, true);
        Model::validateRequired('RWAccess', $this->RWAccess, true);
        Model::validateRequired('userAccess', $this->userAccess, true);
    }
    public function toMap() {
        $res = [];
        $res['SourceCidrIp'] = $this->sourceCidrIp;
        $res['Priority'] = $this->priority;
        $res['AccessRuleId'] = $this->accessRuleId;
        $res['RWAccess'] = $this->RWAccess;
        $res['UserAccess'] = $this->userAccess;
        return $res;
    }
    /**
     * @param array $map
     * @return accessRule
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['SourceCidrIp'])){
            $model->sourceCidrIp = $map['SourceCidrIp'];
        }
        if(isset($map['Priority'])){
            $model->priority = $map['Priority'];
        }
        if(isset($map['AccessRuleId'])){
            $model->accessRuleId = $map['AccessRuleId'];
        }
        if(isset($map['RWAccess'])){
            $model->RWAccess = $map['RWAccess'];
        }
        if(isset($map['UserAccess'])){
            $model->userAccess = $map['UserAccess'];
        }
        return $model;
    }
    /**
     * @description sourceCidrIp
     * @var string
     */
    public $sourceCidrIp;

    /**
     * @description priority
     * @var integer
     */
    public $priority;

    /**
     * @description ruleId
     * @var string
     */
    public $accessRuleId;

    /**
     * @description policy
     * @var string
     */
    public $RWAccess;

    /**
     * @description squashType
     * @var string
     */
    public $userAccess;

}
