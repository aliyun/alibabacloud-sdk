<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListAppPoliciesForIdentityResponse;

use AlibabaCloud\Tea\Model;

class appPolicyList extends Model {
    protected $_name = [
        'appId' => 'AppId',
        'creationTime' => 'CreationTime',
        'policyName' => 'PolicyName',
        'policyType' => 'PolicyType',
        'policyValue' => 'PolicyValue',
        'description' => 'Description',
        'modificationTime' => 'ModificationTime',
    ];
    public function validate() {
        Model::validateRequired('appId', $this->appId, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('policyName', $this->policyName, true);
        Model::validateRequired('policyType', $this->policyType, true);
        Model::validateRequired('policyValue', $this->policyValue, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('modificationTime', $this->modificationTime, true);
    }
    public function toMap() {
        $res = [];
        $res['AppId'] = $this->appId;
        $res['CreationTime'] = $this->creationTime;
        $res['PolicyName'] = $this->policyName;
        $res['PolicyType'] = $this->policyType;
        $res['PolicyValue'] = $this->policyValue;
        $res['Description'] = $this->description;
        $res['ModificationTime'] = $this->modificationTime;
        return $res;
    }
    /**
     * @param array $map
     * @return appPolicyList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AppId'])){
            $model->appId = $map['AppId'];
        }
        if(isset($map['CreationTime'])){
            $model->creationTime = $map['CreationTime'];
        }
        if(isset($map['PolicyName'])){
            $model->policyName = $map['PolicyName'];
        }
        if(isset($map['PolicyType'])){
            $model->policyType = $map['PolicyType'];
        }
        if(isset($map['PolicyValue'])){
            $model->policyValue = $map['PolicyValue'];
        }
        if(isset($map['Description'])){
            $model->description = $map['Description'];
        }
        if(isset($map['ModificationTime'])){
            $model->modificationTime = $map['ModificationTime'];
        }
        return $model;
    }
    /**
     * @description appId
     * @var string
     */
    public $appId;

    /**
     * @description utcCreate
     * @var string
     */
    public $creationTime;

    /**
     * @description policyName
     * @var string
     */
    public $policyName;

    /**
     * @description policyType
     * @var string
     */
    public $policyType;

    /**
     * @description policyValue
     * @var string
     */
    public $policyValue;

    /**
     * @description description
     * @var string
     */
    public $description;

    /**
     * @description utcModified
     * @var string
     */
    public $modificationTime;

}
