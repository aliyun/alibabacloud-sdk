// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.nas20170626.models;

import com.aliyun.tea.*;

public class DeleteAccessGroupRequest extends TeaModel {
    @NameInMap("AccessGroupName")
    @Validation(required = true)
    public String accessGroupName;

    @NameInMap("FileSystemType")
    public String fileSystemType;

    public static DeleteAccessGroupRequest build(java.util.Map<String, ?> map) throws Exception {
        DeleteAccessGroupRequest self = new DeleteAccessGroupRequest();
        return TeaModel.build(map, self);
    }

}
