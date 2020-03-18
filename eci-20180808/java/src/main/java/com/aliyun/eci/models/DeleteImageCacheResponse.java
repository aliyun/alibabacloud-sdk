// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.eci.models;

import com.aliyun.tea.*;

public class DeleteImageCacheResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    public static DeleteImageCacheResponse build(java.util.Map<String, ?> map) throws Exception {
        DeleteImageCacheResponse self = new DeleteImageCacheResponse();
        return TeaModel.build(map, self);
    }

}
