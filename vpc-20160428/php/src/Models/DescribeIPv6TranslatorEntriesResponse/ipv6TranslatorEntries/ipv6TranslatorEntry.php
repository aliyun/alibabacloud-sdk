<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIPv6TranslatorEntriesResponse\ipv6TranslatorEntries;

use AlibabaCloud\Tea\Model;

class ipv6TranslatorEntry extends Model
{
    /**
     * @var string
     */
    public $ipv6TranslatorId;

    /**
     * @var string
     */
    public $ipv6TranslatorEntryId;

    /**
     * @var string
     */
    public $allocateIpv6Addr;

    /**
     * @var int
     */
    public $allocateIpv6Port;

    /**
     * @var string
     */
    public $backendIpv4Addr;

    /**
     * @var string
     */
    public $backendIpv4Port;

    /**
     * @var string
     */
    public $transProtocol;

    /**
     * @var string
     */
    public $entryBandwidth;

    /**
     * @var string
     */
    public $entryDescription;

    /**
     * @var string
     */
    public $entryName;

    /**
     * @var string
     */
    public $entryStatus;

    /**
     * @var string
     */
    public $aclStatus;

    /**
     * @var string
     */
    public $aclType;

    /**
     * @var string
     */
    public $aclId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'ipv6TranslatorId'      => 'Ipv6TranslatorId',
        'ipv6TranslatorEntryId' => 'Ipv6TranslatorEntryId',
        'allocateIpv6Addr'      => 'AllocateIpv6Addr',
        'allocateIpv6Port'      => 'AllocateIpv6Port',
        'backendIpv4Addr'       => 'BackendIpv4Addr',
        'backendIpv4Port'       => 'BackendIpv4Port',
        'transProtocol'         => 'TransProtocol',
        'entryBandwidth'        => 'EntryBandwidth',
        'entryDescription'      => 'EntryDescription',
        'entryName'             => 'EntryName',
        'entryStatus'           => 'EntryStatus',
        'aclStatus'             => 'AclStatus',
        'aclType'               => 'AclType',
        'aclId'                 => 'AclId',
        'regionId'              => 'RegionId',
    ];

    public function validate()
    {
        Model::validateRequired('ipv6TranslatorId', $this->ipv6TranslatorId, true);
        Model::validateRequired('ipv6TranslatorEntryId', $this->ipv6TranslatorEntryId, true);
        Model::validateRequired('allocateIpv6Addr', $this->allocateIpv6Addr, true);
        Model::validateRequired('allocateIpv6Port', $this->allocateIpv6Port, true);
        Model::validateRequired('backendIpv4Addr', $this->backendIpv4Addr, true);
        Model::validateRequired('backendIpv4Port', $this->backendIpv4Port, true);
        Model::validateRequired('transProtocol', $this->transProtocol, true);
        Model::validateRequired('entryBandwidth', $this->entryBandwidth, true);
        Model::validateRequired('entryDescription', $this->entryDescription, true);
        Model::validateRequired('entryName', $this->entryName, true);
        Model::validateRequired('entryStatus', $this->entryStatus, true);
        Model::validateRequired('aclStatus', $this->aclStatus, true);
        Model::validateRequired('aclType', $this->aclType, true);
        Model::validateRequired('aclId', $this->aclId, true);
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipv6TranslatorId) {
            $res['Ipv6TranslatorId'] = $this->ipv6TranslatorId;
        }
        if (null !== $this->ipv6TranslatorEntryId) {
            $res['Ipv6TranslatorEntryId'] = $this->ipv6TranslatorEntryId;
        }
        if (null !== $this->allocateIpv6Addr) {
            $res['AllocateIpv6Addr'] = $this->allocateIpv6Addr;
        }
        if (null !== $this->allocateIpv6Port) {
            $res['AllocateIpv6Port'] = $this->allocateIpv6Port;
        }
        if (null !== $this->backendIpv4Addr) {
            $res['BackendIpv4Addr'] = $this->backendIpv4Addr;
        }
        if (null !== $this->backendIpv4Port) {
            $res['BackendIpv4Port'] = $this->backendIpv4Port;
        }
        if (null !== $this->transProtocol) {
            $res['TransProtocol'] = $this->transProtocol;
        }
        if (null !== $this->entryBandwidth) {
            $res['EntryBandwidth'] = $this->entryBandwidth;
        }
        if (null !== $this->entryDescription) {
            $res['EntryDescription'] = $this->entryDescription;
        }
        if (null !== $this->entryName) {
            $res['EntryName'] = $this->entryName;
        }
        if (null !== $this->entryStatus) {
            $res['EntryStatus'] = $this->entryStatus;
        }
        if (null !== $this->aclStatus) {
            $res['AclStatus'] = $this->aclStatus;
        }
        if (null !== $this->aclType) {
            $res['AclType'] = $this->aclType;
        }
        if (null !== $this->aclId) {
            $res['AclId'] = $this->aclId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipv6TranslatorEntry
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ipv6TranslatorId'])) {
            $model->ipv6TranslatorId = $map['Ipv6TranslatorId'];
        }
        if (isset($map['Ipv6TranslatorEntryId'])) {
            $model->ipv6TranslatorEntryId = $map['Ipv6TranslatorEntryId'];
        }
        if (isset($map['AllocateIpv6Addr'])) {
            $model->allocateIpv6Addr = $map['AllocateIpv6Addr'];
        }
        if (isset($map['AllocateIpv6Port'])) {
            $model->allocateIpv6Port = $map['AllocateIpv6Port'];
        }
        if (isset($map['BackendIpv4Addr'])) {
            $model->backendIpv4Addr = $map['BackendIpv4Addr'];
        }
        if (isset($map['BackendIpv4Port'])) {
            $model->backendIpv4Port = $map['BackendIpv4Port'];
        }
        if (isset($map['TransProtocol'])) {
            $model->transProtocol = $map['TransProtocol'];
        }
        if (isset($map['EntryBandwidth'])) {
            $model->entryBandwidth = $map['EntryBandwidth'];
        }
        if (isset($map['EntryDescription'])) {
            $model->entryDescription = $map['EntryDescription'];
        }
        if (isset($map['EntryName'])) {
            $model->entryName = $map['EntryName'];
        }
        if (isset($map['EntryStatus'])) {
            $model->entryStatus = $map['EntryStatus'];
        }
        if (isset($map['AclStatus'])) {
            $model->aclStatus = $map['AclStatus'];
        }
        if (isset($map['AclType'])) {
            $model->aclType = $map['AclType'];
        }
        if (isset($map['AclId'])) {
            $model->aclId = $map['AclId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
