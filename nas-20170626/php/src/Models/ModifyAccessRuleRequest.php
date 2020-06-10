<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class ModifyAccessRuleRequest extends Model
{
    /**
     * @description accessGroupName
     *
     * @var string
     */
    public $accessGroupName;

    /**
     * @description ruleId
     *
     * @var string
     */
    public $accessRuleId;

    /**
     * @description sourceCidrIp
     *
     * @var string
     */
    public $sourceCidrIp;

    /**
     * @description policy
     *
     * @var string
     */
    public $RWAccessType;

    /**
     * @description squashType
     *
     * @var string
     */
    public $userAccessType;

    /**
     * @description priority
     *
     * @var int
     */
    public $priority;

    /**
     * @description fileSystemType
     *
     * @var string
     */
    public $fileSystemType;
    protected $_name = [
        'accessGroupName' => 'AccessGroupName',
        'accessRuleId'    => 'AccessRuleId',
        'sourceCidrIp'    => 'SourceCidrIp',
        'RWAccessType'    => 'RWAccessType',
        'userAccessType'  => 'UserAccessType',
        'priority'        => 'Priority',
        'fileSystemType'  => 'FileSystemType',
    ];

    public function validate()
    {
        Model::validateRequired('accessGroupName', $this->accessGroupName, true);
        Model::validateRequired('accessRuleId', $this->accessRuleId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessGroupName) {
            $res['AccessGroupName'] = $this->accessGroupName;
        }
        if (null !== $this->accessRuleId) {
            $res['AccessRuleId'] = $this->accessRuleId;
        }
        if (null !== $this->sourceCidrIp) {
            $res['SourceCidrIp'] = $this->sourceCidrIp;
        }
        if (null !== $this->RWAccessType) {
            $res['RWAccessType'] = $this->RWAccessType;
        }
        if (null !== $this->userAccessType) {
            $res['UserAccessType'] = $this->userAccessType;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->fileSystemType) {
            $res['FileSystemType'] = $this->fileSystemType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAccessRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessGroupName'])) {
            $model->accessGroupName = $map['AccessGroupName'];
        }
        if (isset($map['AccessRuleId'])) {
            $model->accessRuleId = $map['AccessRuleId'];
        }
        if (isset($map['SourceCidrIp'])) {
            $model->sourceCidrIp = $map['SourceCidrIp'];
        }
        if (isset($map['RWAccessType'])) {
            $model->RWAccessType = $map['RWAccessType'];
        }
        if (isset($map['UserAccessType'])) {
            $model->userAccessType = $map['UserAccessType'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['FileSystemType'])) {
            $model->fileSystemType = $map['FileSystemType'];
        }

        return $model;
    }
}
