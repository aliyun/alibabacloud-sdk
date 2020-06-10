<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponse\slsParameters;

use AlibabaCloud\Tea\Model;

class slsParameter extends Model
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

    /**
     * @description arn
     *
     * @var string
     */
    public $arn;
    protected $_name = [
        'id'       => 'Id',
        'region'   => 'Region',
        'project'  => 'Project',
        'logStore' => 'LogStore',
        'arn'      => 'Arn',
    ];

    public function validate()
    {
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('region', $this->region, true);
        Model::validateRequired('project', $this->project, true);
        Model::validateRequired('logStore', $this->logStore, true);
        Model::validateRequired('arn', $this->arn, true);
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
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return slsParameter
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
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }

        return $model;
    }
}
