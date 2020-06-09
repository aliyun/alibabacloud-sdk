// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.nas20170626.models;

import com.aliyun.tea.*;

public class CreateAutoSnapshotPolicyRequest extends TeaModel {
    @NameInMap("RepeatWeekdays")
    @Validation(required = true)
    public String repeatWeekdays;

    @NameInMap("TimePoints")
    @Validation(required = true)
    public String timePoints;

    @NameInMap("RetentionDays")
    public Integer retentionDays;

    @NameInMap("AutoSnapshotPolicyName")
    public String autoSnapshotPolicyName;

    @NameInMap("FileSystemType")
    @Validation(required = true)
    public String fileSystemType;

    public static CreateAutoSnapshotPolicyRequest build(java.util.Map<String, ?> map) throws Exception {
        CreateAutoSnapshotPolicyRequest self = new CreateAutoSnapshotPolicyRequest();
        return TeaModel.build(map, self);
    }

}
