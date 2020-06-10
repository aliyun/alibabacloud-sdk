<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models\ListPoliciesResponse\policies;

use AlibabaCloud\Tea\Model;

class policy extends Model
{
    /**
     * @description PolicyName
     *
     * @var string
     */
    public $policyName;

    /**
     * @description PolicyType
     *
     * @var string
     */
    public $policyType;

    /**
     * @description Description
     *
     * @var string
     */
    public $description;

    /**
     * @description DefaultVersion
     *
     * @var string
     */
    public $defaultVersion;

    /**
     * @description CreateDate
     *
     * @var string
     */
    public $createDate;

    /**
     * @description UpdateDate
     *
     * @var string
     */
    public $updateDate;

    /**
     * @description AttachmentCount
     *
     * @var int
     */
    public $attachmentCount;
    protected $_name = [
        'policyName'      => 'PolicyName',
        'policyType'      => 'PolicyType',
        'description'     => 'Description',
        'defaultVersion'  => 'DefaultVersion',
        'createDate'      => 'CreateDate',
        'updateDate'      => 'UpdateDate',
        'attachmentCount' => 'AttachmentCount',
    ];

    public function validate()
    {
        Model::validateRequired('policyName', $this->policyName, true);
        Model::validateRequired('policyType', $this->policyType, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('defaultVersion', $this->defaultVersion, true);
        Model::validateRequired('createDate', $this->createDate, true);
        Model::validateRequired('updateDate', $this->updateDate, true);
        Model::validateRequired('attachmentCount', $this->attachmentCount, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->defaultVersion) {
            $res['DefaultVersion'] = $this->defaultVersion;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->updateDate) {
            $res['UpdateDate'] = $this->updateDate;
        }
        if (null !== $this->attachmentCount) {
            $res['AttachmentCount'] = $this->attachmentCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DefaultVersion'])) {
            $model->defaultVersion = $map['DefaultVersion'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['UpdateDate'])) {
            $model->updateDate = $map['UpdateDate'];
        }
        if (isset($map['AttachmentCount'])) {
            $model->attachmentCount = $map['AttachmentCount'];
        }

        return $model;
    }
}
