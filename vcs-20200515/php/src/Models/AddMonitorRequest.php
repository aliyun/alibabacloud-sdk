<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class AddMonitorRequest extends Model
{
    /**
     * @description corpId
     *
     * @var string
     */
    public $corpId;

    /**
     * @description taskType
     *
     * @var string
     */
    public $monitorType;

    /**
     * @description remark
     *
     * @var string
     */
    public $description;

    /**
     * @description createNewTable
     *
     * @var int
     */
    public $batchIndicator;
    protected $_name = [
        'corpId'         => 'CorpId',
        'monitorType'    => 'MonitorType',
        'description'    => 'Description',
        'batchIndicator' => 'BatchIndicator',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->monitorType) {
            $res['MonitorType'] = $this->monitorType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->batchIndicator) {
            $res['BatchIndicator'] = $this->batchIndicator;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddMonitorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['MonitorType'])) {
            $model->monitorType = $map['MonitorType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['BatchIndicator'])) {
            $model->batchIndicator = $map['BatchIndicator'];
        }

        return $model;
    }
}
