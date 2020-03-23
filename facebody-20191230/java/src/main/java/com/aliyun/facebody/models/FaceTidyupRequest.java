// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody.models;

import com.aliyun.tea.*;

public class FaceTidyupRequest extends TeaModel {
    @NameInMap("ImageURL")
    @Validation(required = true)
    public String imageURL;

    @NameInMap("ShapeType")
    @Validation(required = true)
    public Integer shapeType;

    @NameInMap("Strength")
    @Validation(required = true)
    public Double strength;

    public static FaceTidyupRequest build(java.util.Map<String, ?> map) throws Exception {
        FaceTidyupRequest self = new FaceTidyupRequest();
        return TeaModel.build(map, self);
    }

}
