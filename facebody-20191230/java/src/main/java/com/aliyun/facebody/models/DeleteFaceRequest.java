// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody.models;

import com.aliyun.tea.*;

public class DeleteFaceRequest extends TeaModel {
    @NameInMap("DbName")
    @Validation(required = true)
    public String dbName;

    @NameInMap("FaceId")
    @Validation(required = true)
    public String faceId;

    public static DeleteFaceRequest build(java.util.Map<String, ?> map) throws Exception {
        DeleteFaceRequest self = new DeleteFaceRequest();
        return TeaModel.build(map, self);
    }

}
