<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class ModifyAutoSnapshotPolicyRequest extends Model
{
    /**
     * @var bool
     */
    public $systemDiskPolicyEnabled;

    /**
     * @var int
     */
    public $systemDiskPolicyTimePeriod;

    /**
     * @var int
     */
    public $systemDiskPolicyRetentionDays;

    /**
     * @var bool
     */
    public $systemDiskPolicyRetentionLastWeek;

    /**
     * @var bool
     */
    public $dataDiskPolicyEnabled;

    /**
     * @var int
     */
    public $dataDiskPolicyTimePeriod;

    /**
     * @var int
     */
    public $dataDiskPolicyRetentionDays;

    /**
     * @var bool
     */
    public $dataDiskPolicyRetentionLastWeek;
    protected $_name = [
        'systemDiskPolicyEnabled'           => 'SystemDiskPolicyEnabled',
        'systemDiskPolicyTimePeriod'        => 'SystemDiskPolicyTimePeriod',
        'systemDiskPolicyRetentionDays'     => 'SystemDiskPolicyRetentionDays',
        'systemDiskPolicyRetentionLastWeek' => 'SystemDiskPolicyRetentionLastWeek',
        'dataDiskPolicyEnabled'             => 'DataDiskPolicyEnabled',
        'dataDiskPolicyTimePeriod'          => 'DataDiskPolicyTimePeriod',
        'dataDiskPolicyRetentionDays'       => 'DataDiskPolicyRetentionDays',
        'dataDiskPolicyRetentionLastWeek'   => 'DataDiskPolicyRetentionLastWeek',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->systemDiskPolicyEnabled) {
            $res['SystemDiskPolicyEnabled'] = $this->systemDiskPolicyEnabled;
        }
        if (null !== $this->systemDiskPolicyTimePeriod) {
            $res['SystemDiskPolicyTimePeriod'] = $this->systemDiskPolicyTimePeriod;
        }
        if (null !== $this->systemDiskPolicyRetentionDays) {
            $res['SystemDiskPolicyRetentionDays'] = $this->systemDiskPolicyRetentionDays;
        }
        if (null !== $this->systemDiskPolicyRetentionLastWeek) {
            $res['SystemDiskPolicyRetentionLastWeek'] = $this->systemDiskPolicyRetentionLastWeek;
        }
        if (null !== $this->dataDiskPolicyEnabled) {
            $res['DataDiskPolicyEnabled'] = $this->dataDiskPolicyEnabled;
        }
        if (null !== $this->dataDiskPolicyTimePeriod) {
            $res['DataDiskPolicyTimePeriod'] = $this->dataDiskPolicyTimePeriod;
        }
        if (null !== $this->dataDiskPolicyRetentionDays) {
            $res['DataDiskPolicyRetentionDays'] = $this->dataDiskPolicyRetentionDays;
        }
        if (null !== $this->dataDiskPolicyRetentionLastWeek) {
            $res['DataDiskPolicyRetentionLastWeek'] = $this->dataDiskPolicyRetentionLastWeek;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAutoSnapshotPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SystemDiskPolicyEnabled'])) {
            $model->systemDiskPolicyEnabled = $map['SystemDiskPolicyEnabled'];
        }
        if (isset($map['SystemDiskPolicyTimePeriod'])) {
            $model->systemDiskPolicyTimePeriod = $map['SystemDiskPolicyTimePeriod'];
        }
        if (isset($map['SystemDiskPolicyRetentionDays'])) {
            $model->systemDiskPolicyRetentionDays = $map['SystemDiskPolicyRetentionDays'];
        }
        if (isset($map['SystemDiskPolicyRetentionLastWeek'])) {
            $model->systemDiskPolicyRetentionLastWeek = $map['SystemDiskPolicyRetentionLastWeek'];
        }
        if (isset($map['DataDiskPolicyEnabled'])) {
            $model->dataDiskPolicyEnabled = $map['DataDiskPolicyEnabled'];
        }
        if (isset($map['DataDiskPolicyTimePeriod'])) {
            $model->dataDiskPolicyTimePeriod = $map['DataDiskPolicyTimePeriod'];
        }
        if (isset($map['DataDiskPolicyRetentionDays'])) {
            $model->dataDiskPolicyRetentionDays = $map['DataDiskPolicyRetentionDays'];
        }
        if (isset($map['DataDiskPolicyRetentionLastWeek'])) {
            $model->dataDiskPolicyRetentionLastWeek = $map['DataDiskPolicyRetentionLastWeek'];
        }

        return $model;
    }
}
