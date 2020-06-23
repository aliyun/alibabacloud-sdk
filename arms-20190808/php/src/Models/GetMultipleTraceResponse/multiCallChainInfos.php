<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetMultipleTraceResponse;

use AlibabaCloud\SDK\ARMS\V20190808\Models\GetMultipleTraceResponse\multiCallChainInfos\spans;
use AlibabaCloud\Tea\Model;

class multiCallChainInfos extends Model
{
    /**
     * @description traceID
     *
     * @var string
     */
    public $traceID;

    /**
     * @description callChainInfo
     *
     * @var array
     */
    public $spans;
    protected $_name = [
        'traceID' => 'TraceID',
        'spans'   => 'Spans',
    ];

    public function validate()
    {
        Model::validateRequired('traceID', $this->traceID, true);
        Model::validateRequired('spans', $this->spans, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->traceID) {
            $res['TraceID'] = $this->traceID;
        }
        if (null !== $this->spans) {
            $res['Spans'] = [];
            if (null !== $this->spans && \is_array($this->spans)) {
                $n = 0;
                foreach ($this->spans as $item) {
                    $res['Spans'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return multiCallChainInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TraceID'])) {
            $model->traceID = $map['TraceID'];
        }
        if (isset($map['Spans'])) {
            if (!empty($map['Spans'])) {
                $model->spans = [];
                $n            = 0;
                foreach ($map['Spans'] as $item) {
                    $model->spans[$n++] = null !== $item ? spans::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
