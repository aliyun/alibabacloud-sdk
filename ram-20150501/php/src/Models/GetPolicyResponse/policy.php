<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models\GetPolicyResponse;

use AlibabaCloud\Tea\Model;

class policy extends Model {
    protected $_name = [
        'policyName' => 'PolicyName',
        'policyType' => 'PolicyType',
        'description' => 'Description',
        'defaultVersion' => 'DefaultVersion',
        'policyDocument' => 'PolicyDocument',
        'createDate' => 'CreateDate',
        'updateDate' => 'UpdateDate',
        'attachmentCount' => 'AttachmentCount',
    ];
    public function validate() {
        Model::validateRequired('policyName', $this->policyName, true);
        Model::validateRequired('policyType', $this->policyType, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('defaultVersion', $this->defaultVersion, true);
        Model::validateRequired('policyDocument', $this->policyDocument, true);
        Model::validateRequired('createDate', $this->createDate, true);
        Model::validateRequired('updateDate', $this->updateDate, true);
        Model::validateRequired('attachmentCount', $this->attachmentCount, true);
    }
    public function toMap() {
        $res = [];
        $res['PolicyName'] = $this->policyName;
        $res['PolicyType'] = $this->policyType;
        $res['Description'] = $this->description;
        $res['DefaultVersion'] = $this->defaultVersion;
        $res['PolicyDocument'] = $this->policyDocument;
        $res['CreateDate'] = $this->createDate;
        $res['UpdateDate'] = $this->updateDate;
        $res['AttachmentCount'] = $this->attachmentCount;
        return $res;
    }
    /**
     * @param array $map
     * @return policy
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['PolicyName'])){
            $model->policyName = $map['PolicyName'];
        }
        if(isset($map['PolicyType'])){
            $model->policyType = $map['PolicyType'];
        }
        if(isset($map['Description'])){
            $model->description = $map['Description'];
        }
        if(isset($map['DefaultVersion'])){
            $model->defaultVersion = $map['DefaultVersion'];
        }
        if(isset($map['PolicyDocument'])){
            $model->policyDocument = $map['PolicyDocument'];
        }
        if(isset($map['CreateDate'])){
            $model->createDate = $map['CreateDate'];
        }
        if(isset($map['UpdateDate'])){
            $model->updateDate = $map['UpdateDate'];
        }
        if(isset($map['AttachmentCount'])){
            $model->attachmentCount = $map['AttachmentCount'];
        }
        return $model;
    }
    /**
     * @description PolicyName
     * @var string
     */
    public $policyName;

    /**
     * @description PolicyType
     * @var string
     */
    public $policyType;

    /**
     * @description Description
     * @var string
     */
    public $description;

    /**
     * @description DefaultVersion
     * @var string
     */
    public $defaultVersion;

    /**
     * @description PolicyDocument
     * @var string
     */
    public $policyDocument;

    /**
     * @description CreateDate
     * @var string
     */
    public $createDate;

    /**
     * @description UpdateDate
     * @var string
     */
    public $updateDate;

    /**
     * @description AttachmentCount
     * @var integer
     */
    public $attachmentCount;

}
