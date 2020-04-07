// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody20191230.models;

import com.aliyun.tea.*;

public class FaceMakeupAdvanceRequest extends TeaModel {
    @NameInMap("ImageURLObject")
    @Validation(required = true)
    public java.io.InputStream imageURLObject;

    @NameInMap("MakeupType")
    @Validation(required = true)
    public String makeupType;

    @NameInMap("ResourceType")
    @Validation(required = true)
    public String resourceType;

    @NameInMap("Strength")
    @Validation(required = true)
    public Double strength;

    public static FaceMakeupAdvanceRequest build(java.util.Map<String, ?> map) throws Exception {
        FaceMakeupAdvanceRequest self = new FaceMakeupAdvanceRequest();
        return TeaModel.build(map, self);
    }

}
