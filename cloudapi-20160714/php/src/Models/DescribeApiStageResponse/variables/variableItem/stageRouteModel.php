<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiStageResponse\variables\variableItem;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiStageResponse\variables\variableItem\stageRouteModel\routeRules;
use AlibabaCloud\Tea\Model;

class stageRouteModel extends Model
{
    /**
     * @description parameterCatalog
     *
     * @var string
     */
    public $parameterCatalog;

    /**
     * @description serviceParameterName
     *
     * @var string
     */
    public $serviceParameterName;

    /**
     * @description location
     *
     * @var string
     */
    public $location;

    /**
     * @description parameterType
     *
     * @var string
     */
    public $parameterType;

    /**
     * @description routeMatchSymbol
     *
     * @var string
     */
    public $routeMatchSymbol;

    /**
     * @description routeRules
     *
     * @var routeRules
     */
    public $routeRules;
    protected $_name = [
        'parameterCatalog'     => 'ParameterCatalog',
        'serviceParameterName' => 'ServiceParameterName',
        'location'             => 'Location',
        'parameterType'        => 'ParameterType',
        'routeMatchSymbol'     => 'RouteMatchSymbol',
        'routeRules'           => 'RouteRules',
    ];

    public function validate()
    {
        Model::validateRequired('parameterCatalog', $this->parameterCatalog, true);
        Model::validateRequired('serviceParameterName', $this->serviceParameterName, true);
        Model::validateRequired('location', $this->location, true);
        Model::validateRequired('parameterType', $this->parameterType, true);
        Model::validateRequired('routeMatchSymbol', $this->routeMatchSymbol, true);
        Model::validateRequired('routeRules', $this->routeRules, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parameterCatalog) {
            $res['ParameterCatalog'] = $this->parameterCatalog;
        }
        if (null !== $this->serviceParameterName) {
            $res['ServiceParameterName'] = $this->serviceParameterName;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->parameterType) {
            $res['ParameterType'] = $this->parameterType;
        }
        if (null !== $this->routeMatchSymbol) {
            $res['RouteMatchSymbol'] = $this->routeMatchSymbol;
        }
        if (null !== $this->routeRules) {
            $res['RouteRules'] = null !== $this->routeRules ? $this->routeRules->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stageRouteModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParameterCatalog'])) {
            $model->parameterCatalog = $map['ParameterCatalog'];
        }
        if (isset($map['ServiceParameterName'])) {
            $model->serviceParameterName = $map['ServiceParameterName'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['ParameterType'])) {
            $model->parameterType = $map['ParameterType'];
        }
        if (isset($map['RouteMatchSymbol'])) {
            $model->routeMatchSymbol = $map['RouteMatchSymbol'];
        }
        if (isset($map['RouteRules'])) {
            $model->routeRules = routeRules::fromMap($map['RouteRules']);
        }

        return $model;
    }
}
