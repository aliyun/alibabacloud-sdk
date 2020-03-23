// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.imgsearch.models;

import com.aliyun.tea.*;

public class AddImageResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    public static AddImageResponse build(java.util.Map<String, ?> map) throws Exception {
        AddImageResponse self = new AddImageResponse();
        return TeaModel.build(map, self);
    }

}
