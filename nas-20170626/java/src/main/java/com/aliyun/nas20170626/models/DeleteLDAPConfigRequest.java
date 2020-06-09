// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.nas20170626.models;

import com.aliyun.tea.*;

public class DeleteLDAPConfigRequest extends TeaModel {
    @NameInMap("FileSystemId")
    @Validation(required = true)
    public String fileSystemId;

    public static DeleteLDAPConfigRequest build(java.util.Map<String, ?> map) throws Exception {
        DeleteLDAPConfigRequest self = new DeleteLDAPConfigRequest();
        return TeaModel.build(map, self);
    }

}
