// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody.models;

import com.aliyun.tea.*;

public class FaceMakeupRequest extends TeaModel {
    @NameInMap("ImageURL")
    @Validation(required = true)
    public String imageURL;

    @NameInMap("MakeupType")
    @Validation(required = true)
    public String makeupType;

    @NameInMap("ResourceType")
    @Validation(required = true)
    public String resourceType;

    @NameInMap("Strength")
    @Validation(required = true)
    public Double strength;

    public static FaceMakeupRequest build(java.util.Map<String, ?> map) throws Exception {
        FaceMakeupRequest self = new FaceMakeupRequest();
        return TeaModel.build(map, self);
    }

}
