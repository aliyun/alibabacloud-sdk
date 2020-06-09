// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.nas20170626.models;

import com.aliyun.tea.*;

public class UpgradeFileSystemRequest extends TeaModel {
    @NameInMap("FileSystemId")
    @Validation(required = true)
    public String fileSystemId;

    @NameInMap("Capacity")
    @Validation(required = true)
    public Long capacity;

    @NameInMap("DryRun")
    public Boolean dryRun;

    @NameInMap("ClientToken")
    public String clientToken;

    public static UpgradeFileSystemRequest build(java.util.Map<String, ?> map) throws Exception {
        UpgradeFileSystemRequest self = new UpgradeFileSystemRequest();
        return TeaModel.build(map, self);
    }

}
