<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeLogAnalysisResponse\analyses\analysis;

use AlibabaCloud\Tea\Model;

class metaValue extends Model
{
    /**
     * @var string
     */
    public $logstore;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $roleArn;
    protected $_name = [
        'logstore' => 'Logstore',
        'region'   => 'Region',
        'project'  => 'Project',
        'roleArn'  => 'RoleArn',
    ];

    public function validate()
    {
        Model::validateRequired('logstore', $this->logstore, true);
        Model::validateRequired('region', $this->region, true);
        Model::validateRequired('project', $this->project, true);
        Model::validateRequired('roleArn', $this->roleArn, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logstore) {
            $res['Logstore'] = $this->logstore;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->roleArn) {
            $res['RoleArn'] = $this->roleArn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metaValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Logstore'])) {
            $model->logstore = $map['Logstore'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['RoleArn'])) {
            $model->roleArn = $map['RoleArn'];
        }

        return $model;
    }
}
