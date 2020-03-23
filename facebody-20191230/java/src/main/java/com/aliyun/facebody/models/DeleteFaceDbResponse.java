// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody.models;

import com.aliyun.tea.*;

public class DeleteFaceDbResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    public static DeleteFaceDbResponse build(java.util.Map<String, ?> map) throws Exception {
        DeleteFaceDbResponse self = new DeleteFaceDbResponse();
        return TeaModel.build(map, self);
    }

}
