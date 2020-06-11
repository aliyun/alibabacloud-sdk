// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.servicemesh20200111.models;

import com.aliyun.tea.*;

public class RemoveClusterFromServiceMeshResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("Code")
    @Validation(required = true)
    public String code;

    @NameInMap("Success")
    @Validation(required = true)
    public String success;

    @NameInMap("Message")
    @Validation(required = true)
    public java.util.List<String> message;

    public static RemoveClusterFromServiceMeshResponse build(java.util.Map<String, ?> map) throws Exception {
        RemoveClusterFromServiceMeshResponse self = new RemoveClusterFromServiceMeshResponse();
        return TeaModel.build(map, self);
    }

}
