// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.nas20170626.models;

import com.aliyun.tea.*;

public class CreateLifecyclePolicyRequest extends TeaModel {
    @NameInMap("FileSystemId")
    @Validation(required = true)
    public String fileSystemId;

    @NameInMap("LifecyclePolicyName")
    @Validation(required = true)
    public String lifecyclePolicyName;

    @NameInMap("Path")
    @Validation(required = true)
    public String path;

    @NameInMap("LifecycleRuleName")
    @Validation(required = true)
    public String lifecycleRuleName;

    @NameInMap("StorageType")
    @Validation(required = true)
    public String storageType;

    public static CreateLifecyclePolicyRequest build(java.util.Map<String, ?> map) throws Exception {
        CreateLifecyclePolicyRequest self = new CreateLifecyclePolicyRequest();
        return TeaModel.build(map, self);
    }

}
