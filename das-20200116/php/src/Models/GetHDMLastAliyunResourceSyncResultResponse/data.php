<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetHDMLastAliyunResourceSyncResultResponse;

use AlibabaCloud\SDK\DAS\V20200116\Models\GetHDMLastAliyunResourceSyncResultResponse\data\subResults;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description syncStatus
     *
     * @var string
     */
    public $syncStatus;

    /**
     * @description errorMsg
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @description results
     *
     * @var string
     */
    public $results;

    /**
     * @description subResults
     *
     * @var subResults
     */
    public $subResults;
    protected $_name = [
        'syncStatus' => 'SyncStatus',
        'errorMsg'   => 'ErrorMsg',
        'results'    => 'Results',
        'subResults' => 'SubResults',
    ];

    public function validate()
    {
        Model::validateRequired('syncStatus', $this->syncStatus, true);
        Model::validateRequired('errorMsg', $this->errorMsg, true);
        Model::validateRequired('results', $this->results, true);
        Model::validateRequired('subResults', $this->subResults, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->syncStatus) {
            $res['SyncStatus'] = $this->syncStatus;
        }
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->results) {
            $res['Results'] = $this->results;
        }
        if (null !== $this->subResults) {
            $res['SubResults'] = null !== $this->subResults ? $this->subResults->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SyncStatus'])) {
            $model->syncStatus = $map['SyncStatus'];
        }
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['Results'])) {
            $model->results = $map['Results'];
        }
        if (isset($map['SubResults'])) {
            $model->subResults = subResults::fromMap($map['SubResults']);
        }

        return $model;
    }
}
