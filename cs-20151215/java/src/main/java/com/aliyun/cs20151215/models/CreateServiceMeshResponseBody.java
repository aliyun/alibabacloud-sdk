// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cs20151215.models;

import com.aliyun.tea.*;

public class CreateServiceMeshResponseBody extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    public static CreateServiceMeshResponseBody build(java.util.Map<String, ?> map) throws Exception {
        CreateServiceMeshResponseBody self = new CreateServiceMeshResponseBody();
        return TeaModel.build(map, self);
    }

}
