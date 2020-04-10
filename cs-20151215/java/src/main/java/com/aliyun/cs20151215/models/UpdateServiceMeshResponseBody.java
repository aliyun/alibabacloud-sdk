// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cs20151215.models;

import com.aliyun.tea.*;

public class UpdateServiceMeshResponseBody extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    public static UpdateServiceMeshResponseBody build(java.util.Map<String, ?> map) throws Exception {
        UpdateServiceMeshResponseBody self = new UpdateServiceMeshResponseBody();
        return TeaModel.build(map, self);
    }

}
