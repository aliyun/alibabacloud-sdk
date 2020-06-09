// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.nas20170626.models;

import com.aliyun.tea.*;

public class ModifyMountTargetRequest extends TeaModel {
    @NameInMap("FileSystemId")
    @Validation(required = true)
    public String fileSystemId;

    @NameInMap("MountTargetDomain")
    @Validation(required = true)
    public String mountTargetDomain;

    @NameInMap("AccessGroupName")
    public String accessGroupName;

    @NameInMap("Status")
    public String status;

    public static ModifyMountTargetRequest build(java.util.Map<String, ?> map) throws Exception {
        ModifyMountTargetRequest self = new ModifyMountTargetRequest();
        return TeaModel.build(map, self);
    }

}
