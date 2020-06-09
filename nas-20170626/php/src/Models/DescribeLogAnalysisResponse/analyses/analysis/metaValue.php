<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeLogAnalysisResponse\analyses\analysis;

use AlibabaCloud\Tea\Model;

class metaValue extends Model {
    protected $_name = [
        'logstore' => 'Logstore',
        'region' => 'Region',
        'project' => 'Project',
        'roleArn' => 'RoleArn',
    ];
    public function validate() {
        Model::validateRequired('logstore', $this->logstore, true);
        Model::validateRequired('region', $this->region, true);
        Model::validateRequired('project', $this->project, true);
        Model::validateRequired('roleArn', $this->roleArn, true);
    }
    public function toMap() {
        $res = [];
        $res['Logstore'] = $this->logstore;
        $res['Region'] = $this->region;
        $res['Project'] = $this->project;
        $res['RoleArn'] = $this->roleArn;
        return $res;
    }
    /**
     * @param array $map
     * @return metaValue
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Logstore'])){
            $model->logstore = $map['Logstore'];
        }
        if(isset($map['Region'])){
            $model->region = $map['Region'];
        }
        if(isset($map['Project'])){
            $model->project = $map['Project'];
        }
        if(isset($map['RoleArn'])){
            $model->roleArn = $map['RoleArn'];
        }
        return $model;
    }
    /**
     * @description logstore
     * @var string
     */
    public $logstore;

    /**
     * @description region 
     * @var string
     */
    public $region;

    /**
     * @description project
     * @var string
     */
    public $project;

    /**
     * @description roleArn
     * @var string
     */
    public $roleArn;

}
