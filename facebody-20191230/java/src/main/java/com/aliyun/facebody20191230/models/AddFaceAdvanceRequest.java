// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody20191230.models;

import com.aliyun.tea.*;

public class AddFaceAdvanceRequest extends TeaModel {
    @NameInMap("ImageUrlObject")
    @Validation(required = true)
    public java.io.InputStream imageUrlObject;

    @NameInMap("DbName")
    @Validation(required = true)
    public String dbName;

    @NameInMap("EntityId")
    @Validation(required = true)
    public String entityId;

    @NameInMap("ExtraData")
    public String extraData;

    public static AddFaceAdvanceRequest build(java.util.Map<String, ?> map) throws Exception {
        AddFaceAdvanceRequest self = new AddFaceAdvanceRequest();
        return TeaModel.build(map, self);
    }

}
