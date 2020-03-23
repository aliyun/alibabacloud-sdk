// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody.models;

import com.aliyun.tea.*;

public class CreateFaceDbRequest extends TeaModel {
    @NameInMap("Name")
    @Validation(required = true)
    public String name;

    public static CreateFaceDbRequest build(java.util.Map<String, ?> map) throws Exception {
        CreateFaceDbRequest self = new CreateFaceDbRequest();
        return TeaModel.build(map, self);
    }

}
