<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringAgentHostsResponse\hosts;

use AlibabaCloud\Tea\Model;

class host extends Model
{
    /**
     * @description instanceId
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description serialNumber
     *
     * @var string
     */
    public $serialNumber;

    /**
     * @description hostName
     *
     * @var string
     */
    public $hostName;

    /**
     * @description aliUid
     *
     * @var int
     */
    public $aliUid;

    /**
     * @description operatingSystem
     *
     * @var string
     */
    public $operatingSystem;

    /**
     * @description ipGroup
     *
     * @var string
     */
    public $ipGroup;

    /**
     * @description region
     *
     * @var string
     */
    public $region;

    /**
     * @description tianjimonVersion
     *
     * @var string
     */
    public $agentVersion;

    /**
     * @description eipAddress
     *
     * @var string
     */
    public $eipAddress;

    /**
     * @description eipId
     *
     * @var string
     */
    public $eipId;

    /**
     * @description aliyunHost
     *
     * @var bool
     */
    public $isAliyunHost;

    /**
     * @description natIp
     *
     * @var string
     */
    public $natIp;

    /**
     * @description networkType
     *
     * @var string
     */
    public $networkType;

    /**
     * @description instanceTypeFamily
     *
     * @var string
     */
    public $instanceTypeFamily;
    protected $_name = [
        'instanceId'         => 'InstanceId',
        'serialNumber'       => 'SerialNumber',
        'hostName'           => 'HostName',
        'aliUid'             => 'AliUid',
        'operatingSystem'    => 'OperatingSystem',
        'ipGroup'            => 'IpGroup',
        'region'             => 'Region',
        'agentVersion'       => 'AgentVersion',
        'eipAddress'         => 'EipAddress',
        'eipId'              => 'EipId',
        'isAliyunHost'       => 'isAliyunHost',
        'natIp'              => 'NatIp',
        'networkType'        => 'NetworkType',
        'instanceTypeFamily' => 'InstanceTypeFamily',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('serialNumber', $this->serialNumber, true);
        Model::validateRequired('hostName', $this->hostName, true);
        Model::validateRequired('aliUid', $this->aliUid, true);
        Model::validateRequired('operatingSystem', $this->operatingSystem, true);
        Model::validateRequired('ipGroup', $this->ipGroup, true);
        Model::validateRequired('region', $this->region, true);
        Model::validateRequired('agentVersion', $this->agentVersion, true);
        Model::validateRequired('eipAddress', $this->eipAddress, true);
        Model::validateRequired('eipId', $this->eipId, true);
        Model::validateRequired('isAliyunHost', $this->isAliyunHost, true);
        Model::validateRequired('natIp', $this->natIp, true);
        Model::validateRequired('networkType', $this->networkType, true);
        Model::validateRequired('instanceTypeFamily', $this->instanceTypeFamily, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->operatingSystem) {
            $res['OperatingSystem'] = $this->operatingSystem;
        }
        if (null !== $this->ipGroup) {
            $res['IpGroup'] = $this->ipGroup;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->agentVersion) {
            $res['AgentVersion'] = $this->agentVersion;
        }
        if (null !== $this->eipAddress) {
            $res['EipAddress'] = $this->eipAddress;
        }
        if (null !== $this->eipId) {
            $res['EipId'] = $this->eipId;
        }
        if (null !== $this->isAliyunHost) {
            $res['isAliyunHost'] = $this->isAliyunHost;
        }
        if (null !== $this->natIp) {
            $res['NatIp'] = $this->natIp;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->instanceTypeFamily) {
            $res['InstanceTypeFamily'] = $this->instanceTypeFamily;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return host
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['OperatingSystem'])) {
            $model->operatingSystem = $map['OperatingSystem'];
        }
        if (isset($map['IpGroup'])) {
            $model->ipGroup = $map['IpGroup'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['AgentVersion'])) {
            $model->agentVersion = $map['AgentVersion'];
        }
        if (isset($map['EipAddress'])) {
            $model->eipAddress = $map['EipAddress'];
        }
        if (isset($map['EipId'])) {
            $model->eipId = $map['EipId'];
        }
        if (isset($map['isAliyunHost'])) {
            $model->isAliyunHost = $map['isAliyunHost'];
        }
        if (isset($map['NatIp'])) {
            $model->natIp = $map['NatIp'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['InstanceTypeFamily'])) {
            $model->instanceTypeFamily = $map['InstanceTypeFamily'];
        }

        return $model;
    }
}
