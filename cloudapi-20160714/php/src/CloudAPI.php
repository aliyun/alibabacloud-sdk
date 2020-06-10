<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\AbolishApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\AbolishApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\AddIpControlPolicyItemRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\AddIpControlPolicyItemResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\AddTrafficSpecialControlRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\AddTrafficSpecialControlResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateApiGroupRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateApiGroupResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateApiStageVariableRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateApiStageVariableResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateAppRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateAppResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateIntranetDomainRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateIntranetDomainResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateIpControlRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateIpControlResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateLogConfigRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateLogConfigResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateModelRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateModelResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateSignatureRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateSignatureResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateTrafficControlRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateTrafficControlResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteAllTrafficSpecialControlRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteAllTrafficSpecialControlResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteApiGroupRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteApiGroupResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteApiStageVariableRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteApiStageVariableResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteAppRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteAppResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteDomainCertificateRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteDomainCertificateResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteDomainRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteDomainResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteInstanceRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteInstanceResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteIpControlRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteIpControlResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteLogConfigRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteLogConfigResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteModelRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteModelResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteSignatureRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteSignatureResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteTrafficControlRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteTrafficControlResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteTrafficSpecialControlRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeleteTrafficSpecialControlResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeployApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DeployApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiDocRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiDocResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiErrorDataRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiErrorDataResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiGroupRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiGroupResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiGroupsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiGroupsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiGroupVpcWhitelistRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiGroupVpcWhitelistResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoriesRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoriesResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiIpControlsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiIpControlsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiLatencyDataRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiLatencyDataResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiMarketAttributesRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiMarketAttributesResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiQpsDataRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiQpsDataResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisByAppRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisByAppResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisByIpControlRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisByIpControlResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisBySignatureRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisBySignatureResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisByTrafficControlRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisByTrafficControlResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiSignaturesRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiSignaturesResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiStageRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiStageResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiTrafficControlsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiTrafficControlsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiTrafficDataRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiTrafficDataResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppAttributesRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppAttributesResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppSecurityRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppSecurityResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAuthorizedApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAuthorizedApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAuthorizedAppsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAuthorizedAppsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDomainRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDomainResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDomainsResolutionRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDomainsResolutionResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeHistoryApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeHistoryApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeIpControlPolicyItemsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeIpControlPolicyItemsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeIpControlsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeIpControlsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeLogConfigRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeLogConfigResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeModelsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeModelsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePurchasedApiGroupRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePurchasedApiGroupResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePurchasedApiGroupsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePurchasedApiGroupsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePurchasedApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePurchasedApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeSignaturesByApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeSignaturesByApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeSignaturesRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeSignaturesResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeSummaryDataRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeSummaryDataResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeSystemParametersRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeSystemParametersResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeTrafficControlsByApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeTrafficControlsByApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeTrafficControlsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeTrafficControlsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeVpcAccessesRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeVpcAccessesResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportSwaggerRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportSwaggerResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyApiGroupRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyApiGroupResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyApiGroupVpcWhitelistRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyApiGroupVpcWhitelistResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyApiMarketAttributesRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyApiMarketAttributesResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyAppRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyAppResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyIpControlPolicyItemRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyIpControlPolicyItemResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyIpControlRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyIpControlResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyLogConfigRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyLogConfigResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyModelRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyModelResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifySignatureRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifySignatureResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyTrafficControlRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ModifyTrafficControlResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ReactivateDomainRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ReactivateDomainResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\RemoveApisAuthoritiesRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\RemoveApisAuthoritiesResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\RemoveAppsAuthoritiesRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\RemoveAppsAuthoritiesResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\RemoveIpControlApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\RemoveIpControlApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\RemoveIpControlPolicyItemRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\RemoveIpControlPolicyItemResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\RemoveSignatureApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\RemoveSignatureApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\RemoveTrafficControlApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\RemoveTrafficControlApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\RemoveVpcAccessRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\RemoveVpcAccessResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ResetAppCodeRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ResetAppCodeResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ResetAppSecretRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ResetAppSecretResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SdkGenerateByAppRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SdkGenerateByAppResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SdkGenerateByGroupRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SdkGenerateByGroupResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetApisAuthoritiesRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetApisAuthoritiesResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetAppsAuthoritiesRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetAppsAuthoritiesResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetDomainCertificateRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetDomainCertificateResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetDomainRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetDomainResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetDomainWebSocketStatusRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetDomainWebSocketStatusResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetIpControlApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetIpControlApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetSignatureApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetSignatureApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetTrafficControlApisRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetTrafficControlApisResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetVpcAccessRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetVpcAccessResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetWildcardDomainPatternsRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SetWildcardDomainPatternsResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SwitchApiRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\SwitchApiResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\TagResourcesRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\TagResourcesResponse;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\UntagResourcesResponse;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class CloudAPI extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-qingdao'            => 'apigateway.cn-qingdao.aliyuncs.com',
            'cn-beijing'            => 'apigateway.cn-beijing.aliyuncs.com',
            'cn-chengdu'            => 'apigateway.cn-chengdu.aliyuncs.com',
            'cn-zhangjiakou'        => 'apigateway.cn-zhangjiakou.aliyuncs.com',
            'cn-huhehaote'          => 'apigateway.cn-huhehaote.aliyuncs.com',
            'cn-hangzhou'           => 'apigateway.cn-hangzhou.aliyuncs.com',
            'cn-shanghai'           => 'apigateway.cn-shanghai.aliyuncs.com',
            'cn-shenzhen'           => 'apigateway.cn-shenzhen.aliyuncs.com',
            'cn-hongkong'           => 'apigateway.cn-hongkong.aliyuncs.com',
            'ap-southeast-1'        => 'apigateway.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2'        => 'apigateway.ap-southeast-2.aliyuncs.com',
            'ap-southeast-3'        => 'apigateway.ap-southeast-3.aliyuncs.com',
            'ap-southeast-5'        => 'apigateway.ap-southeast-5.aliyuncs.com',
            'ap-northeast-1'        => 'apigateway.ap-northeast-1.aliyuncs.com',
            'eu-west-1'             => 'apigateway.eu-west-1.aliyuncs.com',
            'us-west-1'             => 'apigateway.us-west-1.aliyuncs.com',
            'us-east-1'             => 'apigateway.us-east-1.aliyuncs.com',
            'eu-central-1'          => 'apigateway.eu-central-1.aliyuncs.com',
            'me-east-1'             => 'apigateway.me-east-1.aliyuncs.com',
            'ap-south-1'            => 'apigateway.ap-south-1.aliyuncs.com',
            'cn-north-2-gov-1'      => 'apigateway.cn-north-2-gov-1.aliyuncs.com',
            'cn-hangzhou-finance'   => 'apigateway.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'apigateway.aliyuncs.com',
            'cn-shanghai-finance-1' => 'apigateway.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cloudapi', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSummaryDataResponse
     */
    public function describeSummaryDataWithOptions(DescribeSummaryDataRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeSummaryDataResponse::fromMap($this->doRequest('DescribeSummaryData', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSummaryDataResponse
     */
    public function describeSummaryData(DescribeSummaryDataRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSummaryDataWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyApiMarketAttributesResponse
     */
    public function modifyApiMarketAttributesWithOptions(ModifyApiMarketAttributesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyApiMarketAttributesResponse::fromMap($this->doRequest('ModifyApiMarketAttributes', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyApiMarketAttributesResponse
     */
    public function modifyApiMarketAttributes(ModifyApiMarketAttributesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyApiMarketAttributesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeApiMarketAttributesResponse
     */
    public function describeApiMarketAttributesWithOptions(DescribeApiMarketAttributesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeApiMarketAttributesResponse::fromMap($this->doRequest('DescribeApiMarketAttributes', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeApiMarketAttributesResponse
     */
    public function describeApiMarketAttributes(DescribeApiMarketAttributesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiMarketAttributesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SetWildcardDomainPatternsResponse
     */
    public function setWildcardDomainPatternsWithOptions(SetWildcardDomainPatternsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SetWildcardDomainPatternsResponse::fromMap($this->doRequest('SetWildcardDomainPatterns', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SetWildcardDomainPatternsResponse
     */
    public function setWildcardDomainPatterns(SetWildcardDomainPatternsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setWildcardDomainPatternsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyApiGroupVpcWhitelistResponse
     */
    public function modifyApiGroupVpcWhitelistWithOptions(ModifyApiGroupVpcWhitelistRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyApiGroupVpcWhitelistResponse::fromMap($this->doRequest('ModifyApiGroupVpcWhitelist', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyApiGroupVpcWhitelistResponse
     */
    public function modifyApiGroupVpcWhitelist(ModifyApiGroupVpcWhitelistRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyApiGroupVpcWhitelistWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeApiGroupVpcWhitelistResponse
     */
    public function describeApiGroupVpcWhitelistWithOptions(DescribeApiGroupVpcWhitelistRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeApiGroupVpcWhitelistResponse::fromMap($this->doRequest('DescribeApiGroupVpcWhitelist', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeApiGroupVpcWhitelistResponse
     */
    public function describeApiGroupVpcWhitelist(DescribeApiGroupVpcWhitelistRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiGroupVpcWhitelistWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstanceWithOptions(DeleteInstanceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteInstanceResponse::fromMap($this->doRequest('DeleteInstance', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstance(DeleteInstanceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInstanceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateInstanceResponse
     */
    public function createInstanceWithOptions(CreateInstanceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateInstanceResponse::fromMap($this->doRequest('CreateInstance', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateInstanceResponse
     */
    public function createInstance(CreateInstanceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstanceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions(UntagResourcesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UntagResourcesResponse::fromMap($this->doRequest('UntagResources', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UntagResourcesResponse
     */
    public function untagResources(UntagResourcesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions(ListTagResourcesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListTagResourcesResponse::fromMap($this->doRequest('ListTagResources', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResources(ListTagResourcesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions(TagResourcesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return TagResourcesResponse::fromMap($this->doRequest('TagResources', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return TagResourcesResponse
     */
    public function tagResources(TagResourcesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ResetAppCodeResponse
     */
    public function resetAppCodeWithOptions(ResetAppCodeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ResetAppCodeResponse::fromMap($this->doRequest('ResetAppCode', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ResetAppCodeResponse
     */
    public function resetAppCode(ResetAppCodeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetAppCodeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAppResponse
     */
    public function describeAppWithOptions(DescribeAppRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeAppResponse::fromMap($this->doRequest('DescribeApp', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAppResponse
     */
    public function describeApp(DescribeAppRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateModelResponse
     */
    public function createModelWithOptions(CreateModelRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateModelResponse::fromMap($this->doRequest('CreateModel', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateModelResponse
     */
    public function createModel(CreateModelRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createModelWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteModelResponse
     */
    public function deleteModelWithOptions(DeleteModelRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteModelResponse::fromMap($this->doRequest('DeleteModel', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteModelResponse
     */
    public function deleteModel(DeleteModelRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteModelWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeModelsResponse
     */
    public function describeModelsWithOptions(DescribeModelsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeModelsResponse::fromMap($this->doRequest('DescribeModels', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeModelsResponse
     */
    public function describeModels(DescribeModelsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeModelsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyModelResponse
     */
    public function modifyModelWithOptions(ModifyModelRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyModelResponse::fromMap($this->doRequest('ModifyModel', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyModelResponse
     */
    public function modifyModel(ModifyModelRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyModelWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateIntranetDomainResponse
     */
    public function createIntranetDomainWithOptions(CreateIntranetDomainRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateIntranetDomainResponse::fromMap($this->doRequest('CreateIntranetDomain', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateIntranetDomainResponse
     */
    public function createIntranetDomain(CreateIntranetDomainRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIntranetDomainWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ImportSwaggerResponse
     */
    public function importSwaggerWithOptions(ImportSwaggerRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ImportSwaggerResponse::fromMap($this->doRequest('ImportSwagger', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ImportSwaggerResponse
     */
    public function importSwagger(ImportSwaggerRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importSwaggerWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SetIpControlApisResponse
     */
    public function setIpControlApisWithOptions(SetIpControlApisRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SetIpControlApisResponse::fromMap($this->doRequest('SetIpControlApis', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SetIpControlApisResponse
     */
    public function setIpControlApis(SetIpControlApisRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setIpControlApisWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RemoveIpControlPolicyItemResponse
     */
    public function removeIpControlPolicyItemWithOptions(RemoveIpControlPolicyItemRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RemoveIpControlPolicyItemResponse::fromMap($this->doRequest('RemoveIpControlPolicyItem', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RemoveIpControlPolicyItemResponse
     */
    public function removeIpControlPolicyItem(RemoveIpControlPolicyItemRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeIpControlPolicyItemWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RemoveIpControlApisResponse
     */
    public function removeIpControlApisWithOptions(RemoveIpControlApisRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RemoveIpControlApisResponse::fromMap($this->doRequest('RemoveIpControlApis', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RemoveIpControlApisResponse
     */
    public function removeIpControlApis(RemoveIpControlApisRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeIpControlApisWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyIpControlPolicyItemResponse
     */
    public function modifyIpControlPolicyItemWithOptions(ModifyIpControlPolicyItemRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyIpControlPolicyItemResponse::fromMap($this->doRequest('ModifyIpControlPolicyItem', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyIpControlPolicyItemResponse
     */
    public function modifyIpControlPolicyItem(ModifyIpControlPolicyItemRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyIpControlPolicyItemWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyIpControlResponse
     */
    public function modifyIpControlWithOptions(ModifyIpControlRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyIpControlResponse::fromMap($this->doRequest('ModifyIpControl', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyIpControlResponse
     */
    public function modifyIpControl(ModifyIpControlRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyIpControlWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeIpControlsResponse
     */
    public function describeIpControlsWithOptions(DescribeIpControlsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeIpControlsResponse::fromMap($this->doRequest('DescribeIpControls', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeIpControlsResponse
     */
    public function describeIpControls(DescribeIpControlsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIpControlsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeIpControlPolicyItemsResponse
     */
    public function describeIpControlPolicyItemsWithOptions(DescribeIpControlPolicyItemsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeIpControlPolicyItemsResponse::fromMap($this->doRequest('DescribeIpControlPolicyItems', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeIpControlPolicyItemsResponse
     */
    public function describeIpControlPolicyItems(DescribeIpControlPolicyItemsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIpControlPolicyItemsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeApisByIpControlResponse
     */
    public function describeApisByIpControlWithOptions(DescribeApisByIpControlRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeApisByIpControlResponse::fromMap($this->doRequest('DescribeApisByIpControl', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeApisByIpControlResponse
     */
    public function describeApisByIpControl(DescribeApisByIpControlRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisByIpControlWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeApiIpControlsResponse
     */
    public function describeApiIpControlsWithOptions(DescribeApiIpControlsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeApiIpControlsResponse::fromMap($this->doRequest('DescribeApiIpControls', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeApiIpControlsResponse
     */
    public function describeApiIpControls(DescribeApiIpControlsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiIpControlsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteIpControlResponse
     */
    public function deleteIpControlWithOptions(DeleteIpControlRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteIpControlResponse::fromMap($this->doRequest('DeleteIpControl', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteIpControlResponse
     */
    public function deleteIpControl(DeleteIpControlRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteIpControlWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateIpControlResponse
     */
    public function createIpControlWithOptions(CreateIpControlRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateIpControlResponse::fromMap($this->doRequest('CreateIpControl', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateIpControlResponse
     */
    public function createIpControl(CreateIpControlRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createIpControlWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AddIpControlPolicyItemResponse
     */
    public function addIpControlPolicyItemWithOptions(AddIpControlPolicyItemRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AddIpControlPolicyItemResponse::fromMap($this->doRequest('AddIpControlPolicyItem', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AddIpControlPolicyItemResponse
     */
    public function addIpControlPolicyItem(AddIpControlPolicyItemRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addIpControlPolicyItemWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyLogConfigResponse
     */
    public function modifyLogConfigWithOptions(ModifyLogConfigRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyLogConfigResponse::fromMap($this->doRequest('ModifyLogConfig', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyLogConfigResponse
     */
    public function modifyLogConfig(ModifyLogConfigRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLogConfigWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeLogConfigResponse
     */
    public function describeLogConfigWithOptions(DescribeLogConfigRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeLogConfigResponse::fromMap($this->doRequest('DescribeLogConfig', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeLogConfigResponse
     */
    public function describeLogConfig(DescribeLogConfigRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLogConfigWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteLogConfigResponse
     */
    public function deleteLogConfigWithOptions(DeleteLogConfigRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteLogConfigResponse::fromMap($this->doRequest('DeleteLogConfig', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteLogConfigResponse
     */
    public function deleteLogConfig(DeleteLogConfigRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLogConfigWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateLogConfigResponse
     */
    public function createLogConfigWithOptions(CreateLogConfigRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateLogConfigResponse::fromMap($this->doRequest('CreateLogConfig', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateLogConfigResponse
     */
    public function createLogConfig(CreateLogConfigRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLogConfigWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SetDomainWebSocketStatusResponse
     */
    public function setDomainWebSocketStatusWithOptions(SetDomainWebSocketStatusRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SetDomainWebSocketStatusResponse::fromMap($this->doRequest('SetDomainWebSocketStatus', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SetDomainWebSocketStatusResponse
     */
    public function setDomainWebSocketStatus(SetDomainWebSocketStatusRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDomainWebSocketStatusWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RemoveVpcAccessResponse
     */
    public function removeVpcAccessWithOptions(RemoveVpcAccessRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RemoveVpcAccessResponse::fromMap($this->doRequest('RemoveVpcAccess', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RemoveVpcAccessResponse
     */
    public function removeVpcAccess(RemoveVpcAccessRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeVpcAccessWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SetVpcAccessResponse
     */
    public function setVpcAccessWithOptions(SetVpcAccessRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SetVpcAccessResponse::fromMap($this->doRequest('SetVpcAccess', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SetVpcAccessResponse
     */
    public function setVpcAccess(SetVpcAccessRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setVpcAccessWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeVpcAccessesResponse
     */
    public function describeVpcAccessesWithOptions(DescribeVpcAccessesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeVpcAccessesResponse::fromMap($this->doRequest('DescribeVpcAccesses', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeVpcAccessesResponse
     */
    public function describeVpcAccesses(DescribeVpcAccessesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVpcAccessesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ReactivateDomainResponse
     */
    public function reactivateDomainWithOptions(ReactivateDomainRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ReactivateDomainResponse::fromMap($this->doRequest('ReactivateDomain', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ReactivateDomainResponse
     */
    public function reactivateDomain(ReactivateDomainRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reactivateDomainWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeApiHistoriesResponse
     */
    public function describeApiHistoriesWithOptions(DescribeApiHistoriesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeApiHistoriesResponse::fromMap($this->doRequest('DescribeApiHistories', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeApiHistoriesResponse
     */
    public function describeApiHistories(DescribeApiHistoriesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiHistoriesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SdkGenerateByGroupResponse
     */
    public function sdkGenerateByGroupWithOptions(SdkGenerateByGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SdkGenerateByGroupResponse::fromMap($this->doRequest('SdkGenerateByGroup', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SdkGenerateByGroupResponse
     */
    public function sdkGenerateByGroup(SdkGenerateByGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sdkGenerateByGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SdkGenerateByAppResponse
     */
    public function sdkGenerateByAppWithOptions(SdkGenerateByAppRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SdkGenerateByAppResponse::fromMap($this->doRequest('SdkGenerateByApp', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SdkGenerateByAppResponse
     */
    public function sdkGenerateByApp(SdkGenerateByAppRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sdkGenerateByAppWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeApisByAppResponse
     */
    public function describeApisByAppWithOptions(DescribeApisByAppRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeApisByAppResponse::fromMap($this->doRequest('DescribeApisByApp', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeApisByAppResponse
     */
    public function describeApisByApp(DescribeApisByAppRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisByAppWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeApiStageResponse
     */
    public function describeApiStageWithOptions(DescribeApiStageRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeApiStageResponse::fromMap($this->doRequest('DescribeApiStage', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeApiStageResponse
     */
    public function describeApiStage(DescribeApiStageRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiStageWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteApiStageVariableResponse
     */
    public function deleteApiStageVariableWithOptions(DeleteApiStageVariableRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteApiStageVariableResponse::fromMap($this->doRequest('DeleteApiStageVariable', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteApiStageVariableResponse
     */
    public function deleteApiStageVariable(DeleteApiStageVariableRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApiStageVariableWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateApiStageVariableResponse
     */
    public function createApiStageVariableWithOptions(CreateApiStageVariableRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateApiStageVariableResponse::fromMap($this->doRequest('CreateApiStageVariable', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateApiStageVariableResponse
     */
    public function createApiStageVariable(CreateApiStageVariableRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApiStageVariableWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SwitchApiResponse
     */
    public function switchApiWithOptions(SwitchApiRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SwitchApiResponse::fromMap($this->doRequest('SwitchApi', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SwitchApiResponse
     */
    public function switchApi(SwitchApiRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchApiWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SetTrafficControlApisResponse
     */
    public function setTrafficControlApisWithOptions(SetTrafficControlApisRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SetTrafficControlApisResponse::fromMap($this->doRequest('SetTrafficControlApis', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SetTrafficControlApisResponse
     */
    public function setTrafficControlApis(SetTrafficControlApisRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setTrafficControlApisWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SetSignatureApisResponse
     */
    public function setSignatureApisWithOptions(SetSignatureApisRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SetSignatureApisResponse::fromMap($this->doRequest('SetSignatureApis', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SetSignatureApisResponse
     */
    public function setSignatureApis(SetSignatureApisRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setSignatureApisWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SetDomainCertificateResponse
     */
    public function setDomainCertificateWithOptions(SetDomainCertificateRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SetDomainCertificateResponse::fromMap($this->doRequest('SetDomainCertificate', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SetDomainCertificateResponse
     */
    public function setDomainCertificate(SetDomainCertificateRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDomainCertificateWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SetDomainResponse
     */
    public function setDomainWithOptions(SetDomainRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SetDomainResponse::fromMap($this->doRequest('SetDomain', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SetDomainResponse
     */
    public function setDomain(SetDomainRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDomainWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SetAppsAuthoritiesResponse
     */
    public function setAppsAuthoritiesWithOptions(SetAppsAuthoritiesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SetAppsAuthoritiesResponse::fromMap($this->doRequest('SetAppsAuthorities', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SetAppsAuthoritiesResponse
     */
    public function setAppsAuthorities(SetAppsAuthoritiesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setAppsAuthoritiesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SetApisAuthoritiesResponse
     */
    public function setApisAuthoritiesWithOptions(SetApisAuthoritiesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SetApisAuthoritiesResponse::fromMap($this->doRequest('SetApisAuthorities', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SetApisAuthoritiesResponse
     */
    public function setApisAuthorities(SetApisAuthoritiesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setApisAuthoritiesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ResetAppSecretResponse
     */
    public function resetAppSecretWithOptions(ResetAppSecretRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ResetAppSecretResponse::fromMap($this->doRequest('ResetAppSecret', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ResetAppSecretResponse
     */
    public function resetAppSecret(ResetAppSecretRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetAppSecretWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RemoveTrafficControlApisResponse
     */
    public function removeTrafficControlApisWithOptions(RemoveTrafficControlApisRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RemoveTrafficControlApisResponse::fromMap($this->doRequest('RemoveTrafficControlApis', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RemoveTrafficControlApisResponse
     */
    public function removeTrafficControlApis(RemoveTrafficControlApisRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeTrafficControlApisWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RemoveSignatureApisResponse
     */
    public function removeSignatureApisWithOptions(RemoveSignatureApisRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RemoveSignatureApisResponse::fromMap($this->doRequest('RemoveSignatureApis', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RemoveSignatureApisResponse
     */
    public function removeSignatureApis(RemoveSignatureApisRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeSignatureApisWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RemoveAppsAuthoritiesResponse
     */
    public function removeAppsAuthoritiesWithOptions(RemoveAppsAuthoritiesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RemoveAppsAuthoritiesResponse::fromMap($this->doRequest('RemoveAppsAuthorities', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RemoveAppsAuthoritiesResponse
     */
    public function removeAppsAuthorities(RemoveAppsAuthoritiesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeAppsAuthoritiesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RemoveApisAuthoritiesResponse
     */
    public function removeApisAuthoritiesWithOptions(RemoveApisAuthoritiesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RemoveApisAuthoritiesResponse::fromMap($this->doRequest('RemoveApisAuthorities', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RemoveApisAuthoritiesResponse
     */
    public function removeApisAuthorities(RemoveApisAuthoritiesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeApisAuthoritiesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyTrafficControlResponse
     */
    public function modifyTrafficControlWithOptions(ModifyTrafficControlRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyTrafficControlResponse::fromMap($this->doRequest('ModifyTrafficControl', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyTrafficControlResponse
     */
    public function modifyTrafficControl(ModifyTrafficControlRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTrafficControlWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifySignatureResponse
     */
    public function modifySignatureWithOptions(ModifySignatureRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifySignatureResponse::fromMap($this->doRequest('ModifySignature', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifySignatureResponse
     */
    public function modifySignature(ModifySignatureRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySignatureWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyAppResponse
     */
    public function modifyAppWithOptions(ModifyAppRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyAppResponse::fromMap($this->doRequest('ModifyApp', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyAppResponse
     */
    public function modifyApp(ModifyAppRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAppWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyApiGroupResponse
     */
    public function modifyApiGroupWithOptions(ModifyApiGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyApiGroupResponse::fromMap($this->doRequest('ModifyApiGroup', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyApiGroupResponse
     */
    public function modifyApiGroup(ModifyApiGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyApiGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyApiResponse
     */
    public function modifyApiWithOptions(ModifyApiRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyApiResponse::fromMap($this->doRequest('ModifyApi', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyApiResponse
     */
    public function modifyApi(ModifyApiRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyApiWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeTrafficControlsByApiResponse
     */
    public function describeTrafficControlsByApiWithOptions(DescribeTrafficControlsByApiRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeTrafficControlsByApiResponse::fromMap($this->doRequest('DescribeTrafficControlsByApi', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeTrafficControlsByApiResponse
     */
    public function describeTrafficControlsByApi(DescribeTrafficControlsByApiRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTrafficControlsByApiWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeTrafficControlsResponse
     */
    public function describeTrafficControlsWithOptions(DescribeTrafficControlsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeTrafficControlsResponse::fromMap($this->doRequest('DescribeTrafficControls', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeTrafficControlsResponse
     */
    public function describeTrafficControls(DescribeTrafficControlsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTrafficControlsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSystemParametersResponse
     */
    public function describeSystemParametersWithOptions(DescribeSystemParametersRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeSystemParametersResponse::fromMap($this->doRequest('DescribeSystemParameters', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSystemParametersResponse
     */
    public function describeSystemParameters(DescribeSystemParametersRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSystemParametersWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSignaturesByApiResponse
     */
    public function describeSignaturesByApiWithOptions(DescribeSignaturesByApiRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeSignaturesByApiResponse::fromMap($this->doRequest('DescribeSignaturesByApi', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSignaturesByApiResponse
     */
    public function describeSignaturesByApi(DescribeSignaturesByApiRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSignaturesByApiWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSignaturesResponse
     */
    public function describeSignaturesWithOptions(DescribeSignaturesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeSignaturesResponse::fromMap($this->doRequest('DescribeSignatures', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeSignaturesResponse
     */
    public function describeSignatures(DescribeSignaturesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSignaturesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions(DescribeRegionsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeRegionsResponse::fromMap($this->doRequest('DescribeRegions', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions(DescribeRegionsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribePurchasedApisResponse
     */
    public function describePurchasedApisWithOptions(DescribePurchasedApisRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribePurchasedApisResponse::fromMap($this->doRequest('DescribePurchasedApis', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribePurchasedApisResponse
     */
    public function describePurchasedApis(DescribePurchasedApisRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePurchasedApisWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribePurchasedApiGroupsResponse
     */
    public function describePurchasedApiGroupsWithOptions(DescribePurchasedApiGroupsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribePurchasedApiGroupsResponse::fromMap($this->doRequest('DescribePurchasedApiGroups', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribePurchasedApiGroupsResponse
     */
    public function describePurchasedApiGroups(DescribePurchasedApiGroupsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePurchasedApiGroupsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribePurchasedApiGroupResponse
     */
    public function describePurchasedApiGroupWithOptions(DescribePurchasedApiGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribePurchasedApiGroupResponse::fromMap($this->doRequest('DescribePurchasedApiGroup', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribePurchasedApiGroupResponse
     */
    public function describePurchasedApiGroup(DescribePurchasedApiGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePurchasedApiGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeHistoryApisResponse
     */
    public function describeHistoryApisWithOptions(DescribeHistoryApisRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeHistoryApisResponse::fromMap($this->doRequest('DescribeHistoryApis', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeHistoryApisResponse
     */
    public function describeHistoryApis(DescribeHistoryApisRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHistoryApisWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDomainsResolutionResponse
     */
    public function describeDomainsResolutionWithOptions(DescribeDomainsResolutionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeDomainsResolutionResponse::fromMap($this->doRequest('DescribeDomainsResolution', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDomainsResolutionResponse
     */
    public function describeDomainsResolution(DescribeDomainsResolutionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainsResolutionWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDomainResponse
     */
    public function describeDomainWithOptions(DescribeDomainRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeDomainResponse::fromMap($this->doRequest('DescribeDomain', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDomainResponse
     */
    public function describeDomain(DescribeDomainRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDeployedApisResponse
     */
    public function describeDeployedApisWithOptions(DescribeDeployedApisRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeDeployedApisResponse::fromMap($this->doRequest('DescribeDeployedApis', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDeployedApisResponse
     */
    public function describeDeployedApis(DescribeDeployedApisRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeployedApisWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDeployedApiResponse
     */
    public function describeDeployedApiWithOptions(DescribeDeployedApiRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeDeployedApiResponse::fromMap($this->doRequest('DescribeDeployedApi', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeDeployedApiResponse
     */
    public function describeDeployedApi(DescribeDeployedApiRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeployedApiWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAuthorizedAppsResponse
     */
    public function describeAuthorizedAppsWithOptions(DescribeAuthorizedAppsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeAuthorizedAppsResponse::fromMap($this->doRequest('DescribeAuthorizedApps', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAuthorizedAppsResponse
     */
    public function describeAuthorizedApps(DescribeAuthorizedAppsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAuthorizedAppsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAuthorizedApisResponse
     */
    public function describeAuthorizedApisWithOptions(DescribeAuthorizedApisRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeAuthorizedApisResponse::fromMap($this->doRequest('DescribeAuthorizedApis', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAuthorizedApisResponse
     */
    public function describeAuthorizedApis(DescribeAuthorizedApisRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAuthorizedApisWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAppSecurityResponse
     */
    public function describeAppSecurityWithOptions(DescribeAppSecurityRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeAppSecurityResponse::fromMap($this->doRequest('DescribeAppSecurity', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAppSecurityResponse
     */
    public function describeAppSecurity(DescribeAppSecurityRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppSecurityWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAppsResponse
     */
    public function describeAppsWithOptions(DescribeAppsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeAppsResponse::fromMap($this->doRequest('DescribeApps', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAppsResponse
     */
    public function describeApps(DescribeAppsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAppAttributesResponse
     */
    public function describeAppAttributesWithOptions(DescribeAppAttributesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeAppAttributesResponse::fromMap($this->doRequest('DescribeAppAttributes', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeAppAttributesResponse
     */
    public function describeAppAttributes(DescribeAppAttributesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppAttributesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeApiTrafficDataResponse
     */
    public function describeApiTrafficDataWithOptions(DescribeApiTrafficDataRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeApiTrafficDataResponse::fromMap($this->doRequest('DescribeApiTrafficData', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeApiTrafficDataResponse
     */
    public function describeApiTrafficData(DescribeApiTrafficDataRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiTrafficDataWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeApiTrafficControlsResponse
     */
    public function describeApiTrafficControlsWithOptions(DescribeApiTrafficControlsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeApiTrafficControlsResponse::fromMap($this->doRequest('DescribeApiTrafficControls', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeApiTrafficControlsResponse
     */
    public function describeApiTrafficControls(DescribeApiTrafficControlsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiTrafficControlsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeApiSignaturesResponse
     */
    public function describeApiSignaturesWithOptions(DescribeApiSignaturesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeApiSignaturesResponse::fromMap($this->doRequest('DescribeApiSignatures', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeApiSignaturesResponse
     */
    public function describeApiSignatures(DescribeApiSignaturesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiSignaturesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeApisByTrafficControlResponse
     */
    public function describeApisByTrafficControlWithOptions(DescribeApisByTrafficControlRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeApisByTrafficControlResponse::fromMap($this->doRequest('DescribeApisByTrafficControl', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeApisByTrafficControlResponse
     */
    public function describeApisByTrafficControl(DescribeApisByTrafficControlRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisByTrafficControlWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeApisBySignatureResponse
     */
    public function describeApisBySignatureWithOptions(DescribeApisBySignatureRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeApisBySignatureResponse::fromMap($this->doRequest('DescribeApisBySignature', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeApisBySignatureResponse
     */
    public function describeApisBySignature(DescribeApisBySignatureRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisBySignatureWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeApisResponse
     */
    public function describeApisWithOptions(DescribeApisRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeApisResponse::fromMap($this->doRequest('DescribeApis', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeApisResponse
     */
    public function describeApis(DescribeApisRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApisWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeApiQpsDataResponse
     */
    public function describeApiQpsDataWithOptions(DescribeApiQpsDataRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeApiQpsDataResponse::fromMap($this->doRequest('DescribeApiQpsData', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeApiQpsDataResponse
     */
    public function describeApiQpsData(DescribeApiQpsDataRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiQpsDataWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeApiLatencyDataResponse
     */
    public function describeApiLatencyDataWithOptions(DescribeApiLatencyDataRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeApiLatencyDataResponse::fromMap($this->doRequest('DescribeApiLatencyData', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeApiLatencyDataResponse
     */
    public function describeApiLatencyData(DescribeApiLatencyDataRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiLatencyDataWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeApiHistoryResponse
     */
    public function describeApiHistoryWithOptions(DescribeApiHistoryRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeApiHistoryResponse::fromMap($this->doRequest('DescribeApiHistory', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeApiHistoryResponse
     */
    public function describeApiHistory(DescribeApiHistoryRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiHistoryWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeApiGroupsResponse
     */
    public function describeApiGroupsWithOptions(DescribeApiGroupsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeApiGroupsResponse::fromMap($this->doRequest('DescribeApiGroups', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeApiGroupsResponse
     */
    public function describeApiGroups(DescribeApiGroupsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiGroupsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeApiGroupResponse
     */
    public function describeApiGroupWithOptions(DescribeApiGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeApiGroupResponse::fromMap($this->doRequest('DescribeApiGroup', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeApiGroupResponse
     */
    public function describeApiGroup(DescribeApiGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeApiErrorDataResponse
     */
    public function describeApiErrorDataWithOptions(DescribeApiErrorDataRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeApiErrorDataResponse::fromMap($this->doRequest('DescribeApiErrorData', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeApiErrorDataResponse
     */
    public function describeApiErrorData(DescribeApiErrorDataRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiErrorDataWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeApiDocResponse
     */
    public function describeApiDocWithOptions(DescribeApiDocRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeApiDocResponse::fromMap($this->doRequest('DescribeApiDoc', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeApiDocResponse
     */
    public function describeApiDoc(DescribeApiDocRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiDocWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeApiResponse
     */
    public function describeApiWithOptions(DescribeApiRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeApiResponse::fromMap($this->doRequest('DescribeApi', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeApiResponse
     */
    public function describeApi(DescribeApiRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApiWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeployApiResponse
     */
    public function deployApiWithOptions(DeployApiRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeployApiResponse::fromMap($this->doRequest('DeployApi', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeployApiResponse
     */
    public function deployApi(DeployApiRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deployApiWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteTrafficSpecialControlResponse
     */
    public function deleteTrafficSpecialControlWithOptions(DeleteTrafficSpecialControlRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteTrafficSpecialControlResponse::fromMap($this->doRequest('DeleteTrafficSpecialControl', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteTrafficSpecialControlResponse
     */
    public function deleteTrafficSpecialControl(DeleteTrafficSpecialControlRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTrafficSpecialControlWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteTrafficControlResponse
     */
    public function deleteTrafficControlWithOptions(DeleteTrafficControlRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteTrafficControlResponse::fromMap($this->doRequest('DeleteTrafficControl', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteTrafficControlResponse
     */
    public function deleteTrafficControl(DeleteTrafficControlRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTrafficControlWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteSignatureResponse
     */
    public function deleteSignatureWithOptions(DeleteSignatureRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteSignatureResponse::fromMap($this->doRequest('DeleteSignature', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteSignatureResponse
     */
    public function deleteSignature(DeleteSignatureRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSignatureWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteDomainCertificateResponse
     */
    public function deleteDomainCertificateWithOptions(DeleteDomainCertificateRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteDomainCertificateResponse::fromMap($this->doRequest('DeleteDomainCertificate', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteDomainCertificateResponse
     */
    public function deleteDomainCertificate(DeleteDomainCertificateRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDomainCertificateWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteDomainResponse
     */
    public function deleteDomainWithOptions(DeleteDomainRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteDomainResponse::fromMap($this->doRequest('DeleteDomain', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteDomainResponse
     */
    public function deleteDomain(DeleteDomainRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDomainWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteAppResponse
     */
    public function deleteAppWithOptions(DeleteAppRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteAppResponse::fromMap($this->doRequest('DeleteApp', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteAppResponse
     */
    public function deleteApp(DeleteAppRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteApiGroupResponse
     */
    public function deleteApiGroupWithOptions(DeleteApiGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteApiGroupResponse::fromMap($this->doRequest('DeleteApiGroup', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteApiGroupResponse
     */
    public function deleteApiGroup(DeleteApiGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApiGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteApiResponse
     */
    public function deleteApiWithOptions(DeleteApiRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteApiResponse::fromMap($this->doRequest('DeleteApi', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteApiResponse
     */
    public function deleteApi(DeleteApiRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApiWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteAllTrafficSpecialControlResponse
     */
    public function deleteAllTrafficSpecialControlWithOptions(DeleteAllTrafficSpecialControlRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteAllTrafficSpecialControlResponse::fromMap($this->doRequest('DeleteAllTrafficSpecialControl', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteAllTrafficSpecialControlResponse
     */
    public function deleteAllTrafficSpecialControl(DeleteAllTrafficSpecialControlRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAllTrafficSpecialControlWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateTrafficControlResponse
     */
    public function createTrafficControlWithOptions(CreateTrafficControlRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateTrafficControlResponse::fromMap($this->doRequest('CreateTrafficControl', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateTrafficControlResponse
     */
    public function createTrafficControl(CreateTrafficControlRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTrafficControlWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateSignatureResponse
     */
    public function createSignatureWithOptions(CreateSignatureRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateSignatureResponse::fromMap($this->doRequest('CreateSignature', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateSignatureResponse
     */
    public function createSignature(CreateSignatureRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSignatureWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateAppResponse
     */
    public function createAppWithOptions(CreateAppRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateAppResponse::fromMap($this->doRequest('CreateApp', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateAppResponse
     */
    public function createApp(CreateAppRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateApiGroupResponse
     */
    public function createApiGroupWithOptions(CreateApiGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateApiGroupResponse::fromMap($this->doRequest('CreateApiGroup', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateApiGroupResponse
     */
    public function createApiGroup(CreateApiGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApiGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateApiResponse
     */
    public function createApiWithOptions(CreateApiRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateApiResponse::fromMap($this->doRequest('CreateApi', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateApiResponse
     */
    public function createApi(CreateApiRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApiWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AddTrafficSpecialControlResponse
     */
    public function addTrafficSpecialControlWithOptions(AddTrafficSpecialControlRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AddTrafficSpecialControlResponse::fromMap($this->doRequest('AddTrafficSpecialControl', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AddTrafficSpecialControlResponse
     */
    public function addTrafficSpecialControl(AddTrafficSpecialControlRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addTrafficSpecialControlWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AbolishApiResponse
     */
    public function abolishApiWithOptions(AbolishApiRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AbolishApiResponse::fromMap($this->doRequest('AbolishApi', 'HTTPS', 'POST', '2016-07-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AbolishApiResponse
     */
    public function abolishApi(AbolishApiRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->abolishApiWithOptions($request, $runtime);
    }

    /**
     * @param string $productId
     * @param string $regionId
     * @param string $endpointRule
     * @param string $network
     * @param string $suffix
     * @param array  $endpointMap
     * @param string $endpoint
     *
     * @throws \Exception
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_($endpointMap['regionId'])) {
            return $endpointMap['regionId'];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }
}
