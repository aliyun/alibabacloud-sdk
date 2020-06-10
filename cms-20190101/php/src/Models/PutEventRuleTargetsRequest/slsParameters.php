<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleTargetsRequest;

use AlibabaCloud\Tea\Model;

class slsParameters extends Model
{
    /**
     * @description id
     *
     * @var string
     */
    public $id;

    /**
     * @description region
     *
     * @var string
     */
    public $region;

    /**
     * @description project
     *
     * @var string
     */
    public $project;

    /**
     * @description logstore
     *
     * @var string
     */
    public $logStore;
    protected $_name = [
        'id'       => 'Id',
        'region'   => 'Region',
        'project'  => 'Project',
        'logStore' => 'LogStore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->logStore) {
            $res['LogStore'] = $this->logStore;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return slsParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['LogStore'])) {
            $model->logStore = $map['LogStore'];
        }

        return $model;
    }
}
