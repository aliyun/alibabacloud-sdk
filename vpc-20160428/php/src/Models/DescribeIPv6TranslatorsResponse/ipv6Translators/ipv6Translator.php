<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIPv6TranslatorsResponse\ipv6Translators;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIPv6TranslatorsResponse\ipv6Translators\ipv6Translator\ipv6TranslatorEntryIds;
use AlibabaCloud\Tea\Model;

class ipv6Translator extends Model
{
    /**
     * @var string
     */
    public $ipv6TranslatorId;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $spec;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $businessStatus;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $allocateIpv6Addr;

    /**
     * @var string
     */
    public $allocateIpv4Addr;

    /**
     * @var string
     */
    public $availableBandwidth;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var ipv6TranslatorEntryIds
     */
    public $ipv6TranslatorEntryIds;
    protected $_name = [
        'ipv6TranslatorId'       => 'Ipv6TranslatorId',
        'createTime'             => 'CreateTime',
        'endTime'                => 'EndTime',
        'spec'                   => 'Spec',
        'name'                   => 'Name',
        'description'            => 'Description',
        'status'                 => 'Status',
        'businessStatus'         => 'BusinessStatus',
        'payType'                => 'PayType',
        'bandwidth'              => 'Bandwidth',
        'allocateIpv6Addr'       => 'AllocateIpv6Addr',
        'allocateIpv4Addr'       => 'AllocateIpv4Addr',
        'availableBandwidth'     => 'AvailableBandwidth',
        'regionId'               => 'RegionId',
        'ipv6TranslatorEntryIds' => 'Ipv6TranslatorEntryIds',
    ];

    public function validate()
    {
        Model::validateRequired('ipv6TranslatorId', $this->ipv6TranslatorId, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('spec', $this->spec, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('businessStatus', $this->businessStatus, true);
        Model::validateRequired('payType', $this->payType, true);
        Model::validateRequired('bandwidth', $this->bandwidth, true);
        Model::validateRequired('allocateIpv6Addr', $this->allocateIpv6Addr, true);
        Model::validateRequired('allocateIpv4Addr', $this->allocateIpv4Addr, true);
        Model::validateRequired('availableBandwidth', $this->availableBandwidth, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('ipv6TranslatorEntryIds', $this->ipv6TranslatorEntryIds, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipv6TranslatorId) {
            $res['Ipv6TranslatorId'] = $this->ipv6TranslatorId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->allocateIpv6Addr) {
            $res['AllocateIpv6Addr'] = $this->allocateIpv6Addr;
        }
        if (null !== $this->allocateIpv4Addr) {
            $res['AllocateIpv4Addr'] = $this->allocateIpv4Addr;
        }
        if (null !== $this->availableBandwidth) {
            $res['AvailableBandwidth'] = $this->availableBandwidth;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->ipv6TranslatorEntryIds) {
            $res['Ipv6TranslatorEntryIds'] = null !== $this->ipv6TranslatorEntryIds ? $this->ipv6TranslatorEntryIds->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipv6Translator
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ipv6TranslatorId'])) {
            $model->ipv6TranslatorId = $map['Ipv6TranslatorId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['AllocateIpv6Addr'])) {
            $model->allocateIpv6Addr = $map['AllocateIpv6Addr'];
        }
        if (isset($map['AllocateIpv4Addr'])) {
            $model->allocateIpv4Addr = $map['AllocateIpv4Addr'];
        }
        if (isset($map['AvailableBandwidth'])) {
            $model->availableBandwidth = $map['AvailableBandwidth'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Ipv6TranslatorEntryIds'])) {
            $model->ipv6TranslatorEntryIds = ipv6TranslatorEntryIds::fromMap($map['Ipv6TranslatorEntryIds']);
        }

        return $model;
    }
}
