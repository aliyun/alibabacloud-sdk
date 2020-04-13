<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform;
use AlibabaCloud\SDK\OSS\OSS;
use AlibabaCloud\SDK\Videoenhan\V20200320\Videoenhan\AbstractEcommerceVideoAdvanceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Videoenhan\AbstractEcommerceVideoRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Videoenhan\AbstractEcommerceVideoResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Videoenhan\AbstractFilmVideoAdvanceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Videoenhan\AbstractFilmVideoRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Videoenhan\AbstractFilmVideoResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Videoenhan\AdjustVideoColorAdvanceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Videoenhan\AdjustVideoColorRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Videoenhan\AdjustVideoColorResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Videoenhan\EraseVideoLogoAdvanceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Videoenhan\EraseVideoLogoRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Videoenhan\EraseVideoLogoResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Videoenhan\EraseVideoSubtitlesAdvanceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Videoenhan\EraseVideoSubtitlesRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Videoenhan\EraseVideoSubtitlesResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Videoenhan\GetAsyncJobResultRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Videoenhan\GetAsyncJobResultResponse;
use AlibabaCloud\SDK\Videoenhan\V20200320\Videoenhan\SuperResolveVideoAdvanceRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Videoenhan\SuperResolveVideoRequest;
use AlibabaCloud\SDK\Videoenhan\V20200320\Videoenhan\SuperResolveVideoResponse;
use AlibabaCloud\Tea\Model;
use AlibabaCloud\Tea\Request;
use AlibabaCloud\Tea\RpcUtils\RpcUtils;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Videoenhan
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint($this->_productId, $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @throws \Exception
     *
     * @return GetAsyncJobResultResponse
     */
    public function getAsyncJobResult(GetAsyncJobResultRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return Model::toModel($this->doRequest('GetAsyncJobResult', 'HTTPS', 'POST', '2020-03-20', 'AK', null, $request, $runtime), new GetAsyncJobResultResponse());
    }

    /**
     * @throws \Exception
     *
     * @return SuperResolveVideoResponse
     */
    public function superResolveVideo(SuperResolveVideoRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return Model::toModel($this->doRequest('SuperResolveVideo', 'HTTPS', 'POST', '2020-03-20', 'AK', null, $request, $runtime), new SuperResolveVideoResponse());
    }

    /**
     * @throws \Exception
     *
     * @return SuperResolveVideoResponse
     */
    public function superResolveVideoAdvance(SuperResolveVideoAdvanceRequest $request, RuntimeOptions $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new \AlibabaCloud\Tea\Rpc\Rpc\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new \AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform\AuthorizeFileUploadRequest([
            'product'  => 'videoenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $authResponse->accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj   = new \AlibabaCloud\Tea\FileForm\FileForm\FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->videoUrlObject,
            'contentType' => '',
        ]);
        $ossHeader = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $superResolveVideoreq = new SuperResolveVideoRequest([]);
        RpcUtils::convert($request, $superResolveVideoreq);
        $superResolveVideoreq->videoUrl = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->superResolveVideo($superResolveVideoreq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return EraseVideoLogoResponse
     */
    public function eraseVideoLogo(EraseVideoLogoRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return Model::toModel($this->doRequest('EraseVideoLogo', 'HTTPS', 'POST', '2020-03-20', 'AK', null, $request, $runtime), new EraseVideoLogoResponse());
    }

    /**
     * @throws \Exception
     *
     * @return EraseVideoLogoResponse
     */
    public function eraseVideoLogoAdvance(EraseVideoLogoAdvanceRequest $request, RuntimeOptions $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new \AlibabaCloud\Tea\Rpc\Rpc\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new \AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform\AuthorizeFileUploadRequest([
            'product'  => 'videoenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $authResponse->accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj   = new \AlibabaCloud\Tea\FileForm\FileForm\FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->videoUrlObject,
            'contentType' => '',
        ]);
        $ossHeader = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $eraseVideoLogoreq = new EraseVideoLogoRequest([]);
        RpcUtils::convert($request, $eraseVideoLogoreq);
        $eraseVideoLogoreq->videoUrl = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->eraseVideoLogo($eraseVideoLogoreq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return EraseVideoSubtitlesResponse
     */
    public function eraseVideoSubtitles(EraseVideoSubtitlesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return Model::toModel($this->doRequest('EraseVideoSubtitles', 'HTTPS', 'POST', '2020-03-20', 'AK', null, $request, $runtime), new EraseVideoSubtitlesResponse());
    }

    /**
     * @throws \Exception
     *
     * @return EraseVideoSubtitlesResponse
     */
    public function eraseVideoSubtitlesAdvance(EraseVideoSubtitlesAdvanceRequest $request, RuntimeOptions $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new \AlibabaCloud\Tea\Rpc\Rpc\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new \AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform\AuthorizeFileUploadRequest([
            'product'  => 'videoenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $authResponse->accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj   = new \AlibabaCloud\Tea\FileForm\FileForm\FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->videoUrlObject,
            'contentType' => '',
        ]);
        $ossHeader = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $eraseVideoSubtitlesreq = new EraseVideoSubtitlesRequest([]);
        RpcUtils::convert($request, $eraseVideoSubtitlesreq);
        $eraseVideoSubtitlesreq->videoUrl = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->eraseVideoSubtitles($eraseVideoSubtitlesreq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AbstractEcommerceVideoResponse
     */
    public function abstractEcommerceVideo(AbstractEcommerceVideoRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return Model::toModel($this->doRequest('AbstractEcommerceVideo', 'HTTPS', 'POST', '2020-03-20', 'AK', null, $request, $runtime), new AbstractEcommerceVideoResponse());
    }

    /**
     * @throws \Exception
     *
     * @return AbstractEcommerceVideoResponse
     */
    public function abstractEcommerceVideoAdvance(AbstractEcommerceVideoAdvanceRequest $request, RuntimeOptions $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new \AlibabaCloud\Tea\Rpc\Rpc\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new \AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform\AuthorizeFileUploadRequest([
            'product'  => 'videoenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $authResponse->accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj   = new \AlibabaCloud\Tea\FileForm\FileForm\FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->videoUrlObject,
            'contentType' => '',
        ]);
        $ossHeader = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $abstractEcommerceVideoreq = new AbstractEcommerceVideoRequest([]);
        RpcUtils::convert($request, $abstractEcommerceVideoreq);
        $abstractEcommerceVideoreq->videoUrl = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->abstractEcommerceVideo($abstractEcommerceVideoreq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AbstractFilmVideoResponse
     */
    public function abstractFilmVideo(AbstractFilmVideoRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return Model::toModel($this->doRequest('AbstractFilmVideo', 'HTTPS', 'POST', '2020-03-20', 'AK', null, $request, $runtime), new AbstractFilmVideoResponse());
    }

    /**
     * @throws \Exception
     *
     * @return AbstractFilmVideoResponse
     */
    public function abstractFilmVideoAdvance(AbstractFilmVideoAdvanceRequest $request, RuntimeOptions $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new \AlibabaCloud\Tea\Rpc\Rpc\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new \AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform\AuthorizeFileUploadRequest([
            'product'  => 'videoenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $authResponse->accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj   = new \AlibabaCloud\Tea\FileForm\FileForm\FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->videoUrlObject,
            'contentType' => '',
        ]);
        $ossHeader = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $abstractFilmVideoreq = new AbstractFilmVideoRequest([]);
        RpcUtils::convert($request, $abstractFilmVideoreq);
        $abstractFilmVideoreq->videoUrl = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->abstractFilmVideo($abstractFilmVideoreq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AdjustVideoColorResponse
     */
    public function adjustVideoColor(AdjustVideoColorRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return Model::toModel($this->doRequest('AdjustVideoColor', 'HTTPS', 'POST', '2020-03-20', 'AK', null, $request, $runtime), new AdjustVideoColorResponse());
    }

    /**
     * @throws \Exception
     *
     * @return AdjustVideoColorResponse
     */
    public function adjustVideoColorAdvance(AdjustVideoColorAdvanceRequest $request, RuntimeOptions $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new \AlibabaCloud\Tea\Rpc\Rpc\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new \AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform\AuthorizeFileUploadRequest([
            'product'  => 'videoenhan',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $authResponse->accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj   = new \AlibabaCloud\Tea\FileForm\FileForm\FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->videoUrlObject,
            'contentType' => '',
        ]);
        $ossHeader = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $adjustVideoColorreq = new AdjustVideoColorRequest([]);
        RpcUtils::convert($request, $adjustVideoColorreq);
        $adjustVideoColorreq->videoUrl = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->adjustVideoColor($adjustVideoColorreq, $runtime);
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
