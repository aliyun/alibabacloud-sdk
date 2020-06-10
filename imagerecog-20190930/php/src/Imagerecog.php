<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imagerecog\V20190930;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\ClassifyingRubbishAdvanceRequest;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\ClassifyingRubbishRequest;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\ClassifyingRubbishResponse;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\DetectImageElementsAdvanceRequest;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\DetectImageElementsRequest;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\DetectImageElementsResponse;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\RecognizeImageColorAdvanceRequest;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\RecognizeImageColorRequest;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\RecognizeImageColorResponse;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\RecognizeImageStyleAdvanceRequest;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\RecognizeImageStyleRequest;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\RecognizeImageStyleResponse;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\RecognizeLogoRequest;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\RecognizeLogoResponse;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\RecognizeSceneAdvanceRequest;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\RecognizeSceneRequest;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\RecognizeSceneResponse;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\RecognizeVehicleTypeAdvanceRequest;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\RecognizeVehicleTypeRequest;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\RecognizeVehicleTypeResponse;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\TaggingImageAdvanceRequest;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\TaggingImageRequest;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\TaggingImageResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadRequest;
use AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform;
use AlibabaCloud\SDK\OSS\OSS;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header;
use AlibabaCloud\Tea\FileForm\FileForm\FileField;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Rpc\Rpc\Config;
use AlibabaCloud\Tea\RpcUtils\RpcUtils;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Imagerecog extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('imagerecog', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @throws \Exception
     *
     * @return ClassifyingRubbishResponse
     */
    public function classifyingRubbish(ClassifyingRubbishRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ClassifyingRubbishResponse::fromMap($this->doRequest('ClassifyingRubbish', 'HTTPS', 'POST', '2019-09-30', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ClassifyingRubbishResponse
     */
    public function classifyingRubbishAdvance(ClassifyingRubbishAdvanceRequest $request, RuntimeOptions $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'imagerecog',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
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
        $fileObj   = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $classifyingRubbishreq = new ClassifyingRubbishRequest([]);
        RpcUtils::convert($request, $classifyingRubbishreq);
        $classifyingRubbishreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->classifyingRubbish($classifyingRubbishreq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeVehicleTypeResponse
     */
    public function recognizeVehicleType(RecognizeVehicleTypeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RecognizeVehicleTypeResponse::fromMap($this->doRequest('RecognizeVehicleType', 'HTTPS', 'POST', '2019-09-30', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeVehicleTypeResponse
     */
    public function recognizeVehicleTypeAdvance(RecognizeVehicleTypeAdvanceRequest $request, RuntimeOptions $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'imagerecog',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
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
        $fileObj   = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $recognizeVehicleTypereq = new RecognizeVehicleTypeRequest([]);
        RpcUtils::convert($request, $recognizeVehicleTypereq);
        $recognizeVehicleTypereq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizeVehicleType($recognizeVehicleTypereq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeLogoResponse
     */
    public function recognizeLogo(RecognizeLogoRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RecognizeLogoResponse::fromMap($this->doRequest('RecognizeLogo', 'HTTPS', 'POST', '2019-09-30', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return TaggingImageResponse
     */
    public function taggingImage(TaggingImageRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return TaggingImageResponse::fromMap($this->doRequest('TaggingImage', 'HTTPS', 'POST', '2019-09-30', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return TaggingImageResponse
     */
    public function taggingImageAdvance(TaggingImageAdvanceRequest $request, RuntimeOptions $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'imagerecog',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
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
        $fileObj   = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $taggingImagereq = new TaggingImageRequest([]);
        RpcUtils::convert($request, $taggingImagereq);
        $taggingImagereq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->taggingImage($taggingImagereq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeSceneResponse
     */
    public function recognizeScene(RecognizeSceneRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RecognizeSceneResponse::fromMap($this->doRequest('RecognizeScene', 'HTTPS', 'POST', '2019-09-30', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeSceneResponse
     */
    public function recognizeSceneAdvance(RecognizeSceneAdvanceRequest $request, RuntimeOptions $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'imagerecog',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
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
        $fileObj   = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $recognizeScenereq = new RecognizeSceneRequest([]);
        RpcUtils::convert($request, $recognizeScenereq);
        $recognizeScenereq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizeScene($recognizeScenereq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeImageColorResponse
     */
    public function recognizeImageColor(RecognizeImageColorRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RecognizeImageColorResponse::fromMap($this->doRequest('RecognizeImageColor', 'HTTPS', 'POST', '2019-09-30', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeImageColorResponse
     */
    public function recognizeImageColorAdvance(RecognizeImageColorAdvanceRequest $request, RuntimeOptions $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'imagerecog',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
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
        $fileObj   = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->urlObject,
            'contentType' => '',
        ]);
        $ossHeader = new header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $recognizeImageColorreq = new RecognizeImageColorRequest([]);
        RpcUtils::convert($request, $recognizeImageColorreq);
        $recognizeImageColorreq->url = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizeImageColor($recognizeImageColorreq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DetectImageElementsResponse
     */
    public function detectImageElements(DetectImageElementsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DetectImageElementsResponse::fromMap($this->doRequest('DetectImageElements', 'HTTPS', 'POST', '2019-09-30', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DetectImageElementsResponse
     */
    public function detectImageElementsAdvance(DetectImageElementsAdvanceRequest $request, RuntimeOptions $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'imagerecog',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
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
        $fileObj   = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->urlObject,
            'contentType' => '',
        ]);
        $ossHeader = new header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $detectImageElementsreq = new DetectImageElementsRequest([]);
        RpcUtils::convert($request, $detectImageElementsreq);
        $detectImageElementsreq->url = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->detectImageElements($detectImageElementsreq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeImageStyleResponse
     */
    public function recognizeImageStyle(RecognizeImageStyleRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RecognizeImageStyleResponse::fromMap($this->doRequest('RecognizeImageStyle', 'HTTPS', 'POST', '2019-09-30', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeImageStyleResponse
     */
    public function recognizeImageStyleAdvance(RecognizeImageStyleAdvanceRequest $request, RuntimeOptions $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'imagerecog',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
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
        $fileObj   = new FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->urlObject,
            'contentType' => '',
        ]);
        $ossHeader = new header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $recognizeImageStylereq = new RecognizeImageStyleRequest([]);
        RpcUtils::convert($request, $recognizeImageStylereq);
        $recognizeImageStylereq->url = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizeImageStyle($recognizeImageStylereq, $runtime);
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
