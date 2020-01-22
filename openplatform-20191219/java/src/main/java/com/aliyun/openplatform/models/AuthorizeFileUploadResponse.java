// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.openplatform.models;

import com.aliyun.tea.*;

public class AuthorizeFileUploadResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("AccessKeyId")
    @Validation(required = true)
    public String accessKeyId;

    @NameInMap("EncodedPolicy")
    @Validation(required = true)
    public String encodedPolicy;

    @NameInMap("Signature")
    @Validation(required = true)
    public String signature;

    @NameInMap("ObjectKey")
    @Validation(required = true)
    public String objectKey;

    @NameInMap("Bucket")
    @Validation(required = true)
    public String bucket;

    @NameInMap("Endpoint")
    @Validation(required = true)
    public String endpoint;

    @NameInMap("UseAccelerate")
    @Validation(required = true)
    public boolean useAccelerate;

    public static AuthorizeFileUploadResponse build(java.util.Map<String, ?> map) throws Exception {
        AuthorizeFileUploadResponse self = new AuthorizeFileUploadResponse();
        return TeaModel.build(map, self);
    }

}
