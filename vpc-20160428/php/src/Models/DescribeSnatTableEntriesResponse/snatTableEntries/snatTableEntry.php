<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeSnatTableEntriesResponse\snatTableEntries;

use AlibabaCloud\Tea\Model;

class snatTableEntry extends Model
{
    /**
     * @var string
     */
    public $snatTableId;

    /**
     * @var string
     */
    public $snatEntryId;

    /**
     * @var string
     */
    public $sourceVSwitchId;

    /**
     * @var string
     */
    public $sourceCIDR;

    /**
     * @var string
     */
    public $snatIp;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $snatEntryName;
    protected $_name = [
        'snatTableId'     => 'SnatTableId',
        'snatEntryId'     => 'SnatEntryId',
        'sourceVSwitchId' => 'SourceVSwitchId',
        'sourceCIDR'      => 'SourceCIDR',
        'snatIp'          => 'SnatIp',
        'status'          => 'Status',
        'snatEntryName'   => 'SnatEntryName',
    ];

    public function validate()
    {
        Model::validateRequired('snatTableId', $this->snatTableId, true);
        Model::validateRequired('snatEntryId', $this->snatEntryId, true);
        Model::validateRequired('sourceVSwitchId', $this->sourceVSwitchId, true);
        Model::validateRequired('sourceCIDR', $this->sourceCIDR, true);
        Model::validateRequired('snatIp', $this->snatIp, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('snatEntryName', $this->snatEntryName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->snatTableId) {
            $res['SnatTableId'] = $this->snatTableId;
        }
        if (null !== $this->snatEntryId) {
            $res['SnatEntryId'] = $this->snatEntryId;
        }
        if (null !== $this->sourceVSwitchId) {
            $res['SourceVSwitchId'] = $this->sourceVSwitchId;
        }
        if (null !== $this->sourceCIDR) {
            $res['SourceCIDR'] = $this->sourceCIDR;
        }
        if (null !== $this->snatIp) {
            $res['SnatIp'] = $this->snatIp;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->snatEntryName) {
            $res['SnatEntryName'] = $this->snatEntryName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return snatTableEntry
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SnatTableId'])) {
            $model->snatTableId = $map['SnatTableId'];
        }
        if (isset($map['SnatEntryId'])) {
            $model->snatEntryId = $map['SnatEntryId'];
        }
        if (isset($map['SourceVSwitchId'])) {
            $model->sourceVSwitchId = $map['SourceVSwitchId'];
        }
        if (isset($map['SourceCIDR'])) {
            $model->sourceCIDR = $map['SourceCIDR'];
        }
        if (isset($map['SnatIp'])) {
            $model->snatIp = $map['SnatIp'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SnatEntryName'])) {
            $model->snatEntryName = $map['SnatEntryName'];
        }

        return $model;
    }
}
