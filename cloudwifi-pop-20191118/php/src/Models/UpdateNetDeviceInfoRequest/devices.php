<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\UpdateNetDeviceInfoRequest;

use AlibabaCloud\Tea\Model;

class devices extends Model
{
    /**
     * @description password
     *
     * @var string
     */
    public $password;

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
     * @description net_pod
     *
     * @var string
     */
    public $netPod;

    /**
     * @description idc
     *
     * @var string
     */
    public $idc;

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
     * @description mgn_ip
     *
     * @var string
     */
    public $mgnIp;

    /**
     * @description host_name
     *
     * @var string
     */
    public $hostName;

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
     * @description username
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'password'     => 'Password',
        'role'         => 'Role',
        'serviceTag'   => 'ServiceTag',
        'netPod'       => 'NetPod',
        'idc'          => 'Idc',
        'model'        => 'Model',
        'id'           => 'Id',
        'mgnIp'        => 'MgnIp',
        'hostName'     => 'HostName',
        'manufacturer' => 'Manufacturer',
        'logicNetPod'  => 'LogicNetPod',
        'username'     => 'Username',
    ];

    public function validate()
    {
        Model::validateRequired('serviceTag', $this->serviceTag, true);
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('hostName', $this->hostName, true);
        Model::validateRequired('manufacturer', $this->manufacturer, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->serviceTag) {
            $res['ServiceTag'] = $this->serviceTag;
        }
        if (null !== $this->netPod) {
            $res['NetPod'] = $this->netPod;
        }
        if (null !== $this->idc) {
            $res['Idc'] = $this->idc;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->mgnIp) {
            $res['MgnIp'] = $this->mgnIp;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->manufacturer) {
            $res['Manufacturer'] = $this->manufacturer;
        }
        if (null !== $this->logicNetPod) {
            $res['LogicNetPod'] = $this->logicNetPod;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return devices
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['ServiceTag'])) {
            $model->serviceTag = $map['ServiceTag'];
        }
        if (isset($map['NetPod'])) {
            $model->netPod = $map['NetPod'];
        }
        if (isset($map['Idc'])) {
            $model->idc = $map['Idc'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MgnIp'])) {
            $model->mgnIp = $map['MgnIp'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['Manufacturer'])) {
            $model->manufacturer = $map['Manufacturer'];
        }
        if (isset($map['LogicNetPod'])) {
            $model->logicNetPod = $map['LogicNetPod'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
