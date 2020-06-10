<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupMetricResponse\records\network;

use AlibabaCloud\Tea\Model;

class interfaces extends Model
{
    /**
     * @description txBytes
     *
     * @var int
     */
    public $txBytes;

    /**
     * @description rxBytes
     *
     * @var int
     */
    public $rxBytes;

    /**
     * @description txErrors
     *
     * @var int
     */
    public $txErrors;

    /**
     * @description rxErrors
     *
     * @var int
     */
    public $rxErrors;

    /**
     * @description name
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'txBytes'  => 'TxBytes',
        'rxBytes'  => 'RxBytes',
        'txErrors' => 'TxErrors',
        'rxErrors' => 'RxErrors',
        'name'     => 'Name',
    ];

    public function validate()
    {
        Model::validateRequired('txBytes', $this->txBytes, true);
        Model::validateRequired('rxBytes', $this->rxBytes, true);
        Model::validateRequired('txErrors', $this->txErrors, true);
        Model::validateRequired('rxErrors', $this->rxErrors, true);
        Model::validateRequired('name', $this->name, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->txBytes) {
            $res['TxBytes'] = $this->txBytes;
        }
        if (null !== $this->rxBytes) {
            $res['RxBytes'] = $this->rxBytes;
        }
        if (null !== $this->txErrors) {
            $res['TxErrors'] = $this->txErrors;
        }
        if (null !== $this->rxErrors) {
            $res['RxErrors'] = $this->rxErrors;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return interfaces
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TxBytes'])) {
            $model->txBytes = $map['TxBytes'];
        }
        if (isset($map['RxBytes'])) {
            $model->rxBytes = $map['RxBytes'];
        }
        if (isset($map['TxErrors'])) {
            $model->txErrors = $map['TxErrors'];
        }
        if (isset($map['RxErrors'])) {
            $model->rxErrors = $map['RxErrors'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
