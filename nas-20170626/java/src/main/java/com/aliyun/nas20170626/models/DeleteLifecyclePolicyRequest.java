// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.nas20170626.models;

import com.aliyun.tea.*;

public class DeleteLifecyclePolicyRequest extends TeaModel {
    @NameInMap("FileSystemId")
    @Validation(required = true)
    public String fileSystemId;

    @NameInMap("LifecyclePolicyName")
    @Validation(required = true)
    public String lifecyclePolicyName;

    public static DeleteLifecyclePolicyRequest build(java.util.Map<String, ?> map) throws Exception {
        DeleteLifecyclePolicyRequest self = new DeleteLifecyclePolicyRequest();
        return TeaModel.build(map, self);
    }

}
