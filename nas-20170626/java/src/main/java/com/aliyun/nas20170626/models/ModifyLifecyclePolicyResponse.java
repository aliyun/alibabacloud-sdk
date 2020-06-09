// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.nas20170626.models;

import com.aliyun.tea.*;

public class ModifyLifecyclePolicyResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("Success")
    @Validation(required = true)
    public Boolean success;

    public static ModifyLifecyclePolicyResponse build(java.util.Map<String, ?> map) throws Exception {
        ModifyLifecyclePolicyResponse self = new ModifyLifecyclePolicyResponse();
        return TeaModel.build(map, self);
    }

}
