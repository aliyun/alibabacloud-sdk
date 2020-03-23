// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody.models;

import com.aliyun.tea.*;

public class AddFaceResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    public static AddFaceResponse build(java.util.Map<String, ?> map) throws Exception {
        AddFaceResponse self = new AddFaceResponse();
        return TeaModel.build(map, self);
    }

}
