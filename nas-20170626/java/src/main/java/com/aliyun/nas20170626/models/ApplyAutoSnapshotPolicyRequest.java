// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.nas20170626.models;

import com.aliyun.tea.*;

public class ApplyAutoSnapshotPolicyRequest extends TeaModel {
    @NameInMap("AutoSnapshotPolicyId")
    @Validation(required = true)
    public String autoSnapshotPolicyId;

    @NameInMap("FileSystemIds")
    @Validation(required = true)
    public String fileSystemIds;

    public static ApplyAutoSnapshotPolicyRequest build(java.util.Map<String, ?> map) throws Exception {
        ApplyAutoSnapshotPolicyRequest self = new ApplyAutoSnapshotPolicyRequest();
        return TeaModel.build(map, self);
    }

}
