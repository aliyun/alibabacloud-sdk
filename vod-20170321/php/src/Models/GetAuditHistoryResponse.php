<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetAuditHistoryResponse\histories;
use AlibabaCloud\Tea\Model;

class GetAuditHistoryResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.status
     *
     * @var string
     */
    public $status;

    /**
     * @description data.total
     *
     * @var int
     */
    public $total;

    /**
     * @description data.auditHistoryList
     *
     * @var array
     */
    public $histories;
    protected $_name = [
        'requestId' => 'RequestId',
        'status'    => 'Status',
        'total'     => 'Total',
        'histories' => 'Histories',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('total', $this->total, true);
        Model::validateRequired('histories', $this->histories, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->histories) {
            $res['Histories'] = [];
            if (null !== $this->histories && \is_array($this->histories)) {
                $n = 0;
                foreach ($this->histories as $item) {
                    $res['Histories'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAuditHistoryResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['Histories'])) {
            if (!empty($map['Histories'])) {
                $model->histories = [];
                $n                = 0;
                foreach ($map['Histories'] as $item) {
                    $model->histories[$n++] = null !== $item ? histories::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
