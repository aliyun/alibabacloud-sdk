<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeApiVersionResponseBody extends Model
{
    /**
     * @description version
     *
     * @var string
     */
    public $version;

    /**
     * @description build
     *
     * @var string
     */
    public $build;

    /**
     * @description docker_version
     *
     * @var string
     */
    public $dockerVersion;

    /**
     * @description docker_region_versions
     *
     * @var string
     */
    public $dockerRegionVersions;
    protected $_name = [
        'version'              => 'version',
        'build'                => 'build',
        'dockerVersion'        => 'docker_version',
        'dockerRegionVersions' => 'docker_region_versions',
    ];

    public function validate()
    {
        Model::validateRequired('version', $this->version, true);
        Model::validateRequired('build', $this->build, true);
        Model::validateRequired('dockerVersion', $this->dockerVersion, true);
        Model::validateRequired('dockerRegionVersions', $this->dockerRegionVersions, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }
        if (null !== $this->build) {
            $res['build'] = $this->build;
        }
        if (null !== $this->dockerVersion) {
            $res['docker_version'] = $this->dockerVersion;
        }
        if (null !== $this->dockerRegionVersions) {
            $res['docker_region_versions'] = $this->dockerRegionVersions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApiVersionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }
        if (isset($map['build'])) {
            $model->build = $map['build'];
        }
        if (isset($map['docker_version'])) {
            $model->dockerVersion = $map['docker_version'];
        }
        if (isset($map['docker_region_versions'])) {
            $model->dockerRegionVersions = $map['docker_region_versions'];
        }

        return $model;
    }
}
