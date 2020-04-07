// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody20191230.models;

import com.aliyun.tea.*;

public class GetFaceEntityRequest extends TeaModel {
    @NameInMap("DbName")
    @Validation(required = true)
    public String dbName;

    @NameInMap("EntityId")
    @Validation(required = true)
    public String entityId;

    public static GetFaceEntityRequest build(java.util.Map<String, ?> map) throws Exception {
        GetFaceEntityRequest self = new GetFaceEntityRequest();
        return TeaModel.build(map, self);
    }

}
