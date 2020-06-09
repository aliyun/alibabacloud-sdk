// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.nas20170626.models;

import com.aliyun.tea.*;

public class CreateMountTargetResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("MountTargetDomain")
    @Validation(required = true)
    public String mountTargetDomain;

    public static CreateMountTargetResponse build(java.util.Map<String, ?> map) throws Exception {
        CreateMountTargetResponse self = new CreateMountTargetResponse();
        return TeaModel.build(map, self);
    }

}
