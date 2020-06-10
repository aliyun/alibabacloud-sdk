<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAuthorizedAppsResponse\authorizedApps;

use AlibabaCloud\Tea\Model;

class authorizedApp extends Model
{
    /**
     * @description stageName
     *
     * @var string
     */
    public $stageName;

    /**
     * @description appId
     *
     * @var int
     */
    public $appId;

    /**
     * @description appName
     *
     * @var string
     */
    public $appName;

    /**
     * @description operator
     *
     * @var string
     */
    public $operator;

    /**
     * @description authorizationSource
     *
     * @var string
     */
    public $authorizationSource;

    /**
     * @description description
     *
     * @var string
     */
    public $description;

    /**
     * @description gmtCreate
     *
     * @var string
     */
    public $authorizedTime;

    /**
     * @description authVaildTime
     *
     * @var string
     */
    public $authVaildTime;
    protected $_name = [
        'stageName'           => 'StageName',
        'appId'               => 'AppId',
        'appName'             => 'AppName',
        'operator'            => 'Operator',
        'authorizationSource' => 'AuthorizationSource',
        'description'         => 'Description',
        'authorizedTime'      => 'AuthorizedTime',
        'authVaildTime'       => 'AuthVaildTime',
    ];

    public function validate()
    {
        Model::validateRequired('stageName', $this->stageName, true);
        Model::validateRequired('appId', $this->appId, true);
        Model::validateRequired('appName', $this->appName, true);
        Model::validateRequired('operator', $this->operator, true);
        Model::validateRequired('authorizationSource', $this->authorizationSource, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('authorizedTime', $this->authorizedTime, true);
        Model::validateRequired('authVaildTime', $this->authVaildTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->authorizationSource) {
            $res['AuthorizationSource'] = $this->authorizationSource;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->authorizedTime) {
            $res['AuthorizedTime'] = $this->authorizedTime;
        }
        if (null !== $this->authVaildTime) {
            $res['AuthVaildTime'] = $this->authVaildTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return authorizedApp
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['AuthorizationSource'])) {
            $model->authorizationSource = $map['AuthorizationSource'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['AuthorizedTime'])) {
            $model->authorizedTime = $map['AuthorizedTime'];
        }
        if (isset($map['AuthVaildTime'])) {
            $model->authVaildTime = $map['AuthVaildTime'];
        }

        return $model;
    }
}
