<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeExporterOutputListResponse\datapoints\datapoint;

use AlibabaCloud\Tea\Model;

class configJson extends Model
{
    /**
     * @description logstore
     *
     * @var string
     */
    public $logstore;

    /**
     * @description project
     *
     * @var string
     */
    public $project;

    /**
     * @description endpoint
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description as
     *
     * @var string
     */
    public $as;

    /**
     * @description ak
     *
     * @var string
     */
    public $ak;
    protected $_name = [
        'logstore' => 'logstore',
        'project'  => 'project',
        'endpoint' => 'endpoint',
        'as'       => 'as',
        'ak'       => 'ak',
    ];

    public function validate()
    {
        Model::validateRequired('logstore', $this->logstore, true);
        Model::validateRequired('project', $this->project, true);
        Model::validateRequired('endpoint', $this->endpoint, true);
        Model::validateRequired('as', $this->as, true);
        Model::validateRequired('ak', $this->ak, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logstore) {
            $res['logstore'] = $this->logstore;
        }
        if (null !== $this->project) {
            $res['project'] = $this->project;
        }
        if (null !== $this->endpoint) {
            $res['endpoint'] = $this->endpoint;
        }
        if (null !== $this->as) {
            $res['as'] = $this->as;
        }
        if (null !== $this->ak) {
            $res['ak'] = $this->ak;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configJson
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['logstore'])) {
            $model->logstore = $map['logstore'];
        }
        if (isset($map['project'])) {
            $model->project = $map['project'];
        }
        if (isset($map['endpoint'])) {
            $model->endpoint = $map['endpoint'];
        }
        if (isset($map['as'])) {
            $model->as = $map['as'];
        }
        if (isset($map['ak'])) {
            $model->ak = $map['ak'];
        }

        return $model;
    }
}
