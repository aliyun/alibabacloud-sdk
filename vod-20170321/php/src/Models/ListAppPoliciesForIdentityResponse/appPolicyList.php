<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListAppPoliciesForIdentityResponse;

use AlibabaCloud\Tea\Model;

class appPolicyList extends Model
{
    /**
     * @description appId
     *
     * @var string
     */
    public $appId;

    /**
     * @description utcCreate
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description policyName
     *
     * @var string
     */
    public $policyName;

    /**
     * @description policyType
     *
     * @var string
     */
    public $policyType;

    /**
     * @description policyValue
     *
     * @var string
     */
    public $policyValue;

    /**
     * @description description
     *
     * @var string
     */
    public $description;

    /**
     * @description utcModified
     *
     * @var string
     */
    public $modificationTime;
    protected $_name = [
        'appId'            => 'AppId',
        'creationTime'     => 'CreationTime',
        'policyName'       => 'PolicyName',
        'policyType'       => 'PolicyType',
        'policyValue'      => 'PolicyValue',
        'description'      => 'Description',
        'modificationTime' => 'ModificationTime',
    ];

    public function validate()
    {
        Model::validateRequired('appId', $this->appId, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('policyName', $this->policyName, true);
        Model::validateRequired('policyType', $this->policyType, true);
        Model::validateRequired('policyValue', $this->policyValue, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('modificationTime', $this->modificationTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }
        if (null !== $this->policyValue) {
            $res['PolicyValue'] = $this->policyValue;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->modificationTime) {
            $res['ModificationTime'] = $this->modificationTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appPolicyList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }
        if (isset($map['PolicyValue'])) {
            $model->policyValue = $map['PolicyValue'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ModificationTime'])) {
            $model->modificationTime = $map['ModificationTime'];
        }

        return $model;
    }
}
