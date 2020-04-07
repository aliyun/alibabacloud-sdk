// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody20191230.models;

import com.aliyun.tea.*;

public class FaceTidyupAdvanceRequest extends TeaModel {
    @NameInMap("ImageURLObject")
    @Validation(required = true)
    public java.io.InputStream imageURLObject;

    @NameInMap("ShapeType")
    @Validation(required = true)
    public Integer shapeType;

    @NameInMap("Strength")
    @Validation(required = true)
    public Double strength;

    public static FaceTidyupAdvanceRequest build(java.util.Map<String, ?> map) throws Exception {
        FaceTidyupAdvanceRequest self = new FaceTidyupAdvanceRequest();
        return TeaModel.build(map, self);
    }

}
