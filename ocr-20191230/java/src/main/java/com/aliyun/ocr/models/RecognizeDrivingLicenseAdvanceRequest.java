// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.ocr.models;

import com.aliyun.tea.*;

public class RecognizeDrivingLicenseAdvanceRequest extends TeaModel {
    @NameInMap("ImageURLObject")
    @Validation(required = true)
    public java.io.InputStream imageURLObject;

    @NameInMap("ImageType")
    public Integer imageType;

    @NameInMap("Side")
    @Validation(required = true)
    public String side;

    public static RecognizeDrivingLicenseAdvanceRequest build(java.util.Map<String, ?> map) throws Exception {
        RecognizeDrivingLicenseAdvanceRequest self = new RecognizeDrivingLicenseAdvanceRequest();
        return TeaModel.build(map, self);
    }

}
