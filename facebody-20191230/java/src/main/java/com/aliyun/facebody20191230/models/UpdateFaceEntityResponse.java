// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody20191230.models;

import com.aliyun.tea.*;

public class UpdateFaceEntityResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    public static UpdateFaceEntityResponse build(java.util.Map<String, ?> map) throws Exception {
        UpdateFaceEntityResponse self = new UpdateFaceEntityResponse();
        return TeaModel.build(map, self);
    }

}
