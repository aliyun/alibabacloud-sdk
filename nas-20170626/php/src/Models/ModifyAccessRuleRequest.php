<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class ModifyAccessRuleRequest extends Model {
    protected $_name = [
        'accessGroupName' => 'AccessGroupName',
        'accessRuleId' => 'AccessRuleId',
        'sourceCidrIp' => 'SourceCidrIp',
        'RWAccessType' => 'RWAccessType',
        'userAccessType' => 'UserAccessType',
        'priority' => 'Priority',
        'fileSystemType' => 'FileSystemType',
    ];
    public function validate() {
        Model::validateRequired('accessGroupName', $this->accessGroupName, true);
        Model::validateRequired('accessRuleId', $this->accessRuleId, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessGroupName'] = $this->accessGroupName;
        $res['AccessRuleId'] = $this->accessRuleId;
        $res['SourceCidrIp'] = $this->sourceCidrIp;
        $res['RWAccessType'] = $this->RWAccessType;
        $res['UserAccessType'] = $this->userAccessType;
        $res['Priority'] = $this->priority;
        $res['FileSystemType'] = $this->fileSystemType;
        return $res;
    }
    /**
     * @param array $map
     * @return ModifyAccessRuleRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AccessGroupName'])){
            $model->accessGroupName = $map['AccessGroupName'];
        }
        if(isset($map['AccessRuleId'])){
            $model->accessRuleId = $map['AccessRuleId'];
        }
        if(isset($map['SourceCidrIp'])){
            $model->sourceCidrIp = $map['SourceCidrIp'];
        }
        if(isset($map['RWAccessType'])){
            $model->RWAccessType = $map['RWAccessType'];
        }
        if(isset($map['UserAccessType'])){
            $model->userAccessType = $map['UserAccessType'];
        }
        if(isset($map['Priority'])){
            $model->priority = $map['Priority'];
        }
        if(isset($map['FileSystemType'])){
            $model->fileSystemType = $map['FileSystemType'];
        }
        return $model;
    }
    /**
     * @description accessGroupName
     * @var string
     */
    public $accessGroupName;

    /**
     * @description ruleId
     * @var string
     */
    public $accessRuleId;

    /**
     * @description sourceCidrIp
     * @var string
     */
    public $sourceCidrIp;

    /**
     * @description policy
     * @var string
     */
    public $RWAccessType;

    /**
     * @description squashType
     * @var string
     */
    public $userAccessType;

    /**
     * @description priority
     * @var integer
     */
    public $priority;

    /**
     * @description fileSystemType
     * @var string
     */
    public $fileSystemType;

}
