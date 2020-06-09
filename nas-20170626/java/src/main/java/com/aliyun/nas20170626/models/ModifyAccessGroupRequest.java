// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.nas20170626.models;

import com.aliyun.tea.*;

public class ModifyAccessGroupRequest extends TeaModel {
    @NameInMap("AccessGroupName")
    @Validation(required = true)
    public String accessGroupName;

    @NameInMap("Description")
    public String description;

    @NameInMap("FileSystemType")
    public String fileSystemType;

    public static ModifyAccessGroupRequest build(java.util.Map<String, ?> map) throws Exception {
        ModifyAccessGroupRequest self = new ModifyAccessGroupRequest();
        return TeaModel.build(map, self);
    }

}
