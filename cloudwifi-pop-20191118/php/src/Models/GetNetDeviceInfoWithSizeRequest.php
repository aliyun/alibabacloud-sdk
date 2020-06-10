<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudwifipop\V20191118\Models;

use AlibabaCloud\Tea\Model;

class GetNetDeviceInfoWithSizeRequest extends Model
{
    /**
     * @description appKey
     *
     * @var string
     */
    public $appName;

    /**
     * @description appSecret
     *
     * @var string
     */
    public $appCode;

    /**
     * @description cursor
     *
     * @var int
     */
    public $cursor;

    /**
     * @description role
     *
     * @var string
     */
    public $role;

    /**
     * @description service_tag
     *
     * @var string
     */
    public $serviceTag;

    /**
     * @description idc
     *
     * @var string
     */
    public $idc;

    /**
     * @description pageSize
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description mgn_ip
     *
     * @var string
     */
    public $mgnIp;

    /**
     * @description manufacturer
     *
     * @var string
     */
    public $manufacturer;

    /**
     * @description logic_net_pod
     *
     * @var string
     */
    public $logicNetPod;

    /**
     * @description password
     *
     * @var string
     */
    public $password;

    /**
     * @description net_pod
     *
     * @var string
     */
    public $netPod;

    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description model
     *
     * @var string
     */
    public $model;

    /**
     * @description id
     *
     * @var int
     */
    public $id;

    /**
     * @description host_name
     *
     * @var string
     */
    public $hostName;

    /**
     * @description username
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'appName'      => 'AppName',
        'appCode'      => 'AppCode',
        'cursor'       => 'Cursor',
        'role'         => 'Role',
        'serviceTag'   => 'ServiceTag',
        'idc'          => 'Idc',
        'pageSize'     => 'PageSize',
        'mgnIp'        => 'MgnIp',
        'manufacturer' => 'Manufacturer',
        'logicNetPod'  => 'LogicNetPod',
        'password'     => 'Password',
        'netPod'       => 'NetPod',
        'requestId'    => 'RequestId',
        'model'        => 'Model',
        'id'           => 'Id',
        'hostName'     => 'HostName',
        'username'     => 'Username',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }
        if (null !== $this->cursor) {
            $res['Cursor'] = $this->cursor;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->serviceTag) {
            $res['ServiceTag'] = $this->serviceTag;
        }
        if (null !== $this->idc) {
            $res['Idc'] = $this->idc;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->mgnIp) {
            $res['MgnIp'] = $this->mgnIp;
        }
        if (null !== $this->manufacturer) {
            $res['Manufacturer'] = $this->manufacturer;
        }
        if (null !== $this->logicNetPod) {
            $res['LogicNetPod'] = $this->logicNetPod;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->netPod) {
            $res['NetPod'] = $this->netPod;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetNetDeviceInfoWithSizeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }
        if (isset($map['Cursor'])) {
            $model->cursor = $map['Cursor'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['ServiceTag'])) {
            $model->serviceTag = $map['ServiceTag'];
        }
        if (isset($map['Idc'])) {
            $model->idc = $map['Idc'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['MgnIp'])) {
            $model->mgnIp = $map['MgnIp'];
        }
        if (isset($map['Manufacturer'])) {
            $model->manufacturer = $map['Manufacturer'];
        }
        if (isset($map['LogicNetPod'])) {
            $model->logicNetPod = $map['LogicNetPod'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['NetPod'])) {
            $model->netPod = $map['NetPod'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
