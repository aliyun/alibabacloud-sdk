// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.nas20170626.models;

import com.aliyun.tea.*;

public class SetDirQuotaResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("Success")
    @Validation(required = true)
    public Boolean success;

    public static SetDirQuotaResponse build(java.util.Map<String, ?> map) throws Exception {
        SetDirQuotaResponse self = new SetDirQuotaResponse();
        return TeaModel.build(map, self);
    }

}
