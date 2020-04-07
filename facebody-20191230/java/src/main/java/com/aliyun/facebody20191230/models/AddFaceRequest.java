// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody20191230.models;

import com.aliyun.tea.*;

public class AddFaceRequest extends TeaModel {
    @NameInMap("DbName")
    @Validation(required = true)
    public String dbName;

    @NameInMap("ImageUrl")
    @Validation(required = true)
    public String imageUrl;

    @NameInMap("EntityId")
    @Validation(required = true)
    public String entityId;

    @NameInMap("ExtraData")
    public String extraData;

    public static AddFaceRequest build(java.util.Map<String, ?> map) throws Exception {
        AddFaceRequest self = new AddFaceRequest();
        return TeaModel.build(map, self);
    }

}
