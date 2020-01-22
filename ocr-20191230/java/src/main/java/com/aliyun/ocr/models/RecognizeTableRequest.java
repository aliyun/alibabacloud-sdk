// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.ocr.models;

import com.aliyun.tea.*;

public class RecognizeTableRequest extends TeaModel {
    @NameInMap("ImageType")
    public Integer imageType;

    @NameInMap("ImageURL")
    @Validation(required = true)
    public String imageURL;

    @NameInMap("OutputFormat")
    @Validation(required = true)
    public String outputFormat;

    @NameInMap("UseFinanceModel")
    @Validation(required = true)
    public boolean useFinanceModel;

    @NameInMap("AssureDirection")
    @Validation(required = true)
    public boolean assureDirection;

    @NameInMap("HasLine")
    @Validation(required = true)
    public boolean hasLine;

    @NameInMap("SkipDetection")
    @Validation(required = true)
    public boolean skipDetection;

    public static RecognizeTableRequest build(java.util.Map<String, ?> map) throws Exception {
        RecognizeTableRequest self = new RecognizeTableRequest();
        return TeaModel.build(map, self);
    }

}
