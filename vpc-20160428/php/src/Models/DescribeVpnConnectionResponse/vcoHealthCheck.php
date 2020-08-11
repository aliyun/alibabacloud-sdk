<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionResponse;

use AlibabaCloud\Tea\Model;

class vcoHealthCheck extends Model
{
    /**
     * @var string
     */
    public $enable;

    /**
     * @var string
     */
    public $sip;

    /**
     * @var string
     */
    public $dip;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var int
     */
    public $retry;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'enable'   => 'Enable',
        'sip'      => 'Sip',
        'dip'      => 'Dip',
        'interval' => 'Interval',
        'retry'    => 'Retry',
        'status'   => 'Status',
    ];

    public function validate()
    {
        Model::validateRequired('enable', $this->enable, true);
        Model::validateRequired('sip', $this->sip, true);
        Model::validateRequired('dip', $this->dip, true);
        Model::validateRequired('interval', $this->interval, true);
        Model::validateRequired('retry', $this->retry, true);
        Model::validateRequired('status', $this->status, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->sip) {
            $res['Sip'] = $this->sip;
        }
        if (null !== $this->dip) {
            $res['Dip'] = $this->dip;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->retry) {
            $res['Retry'] = $this->retry;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vcoHealthCheck
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['Sip'])) {
            $model->sip = $map['Sip'];
        }
        if (isset($map['Dip'])) {
            $model->dip = $map['Dip'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['Retry'])) {
            $model->retry = $map['Retry'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
