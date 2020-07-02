// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Imageenhan20190930.Models
{
    public class AssessExposureResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public AssessExposureResponseData Data { get; set; }
        public class AssessExposureResponseData : TeaModel {
            [NameInMap("Exposure")]
            [Validation(Required=true)]
            public float? Exposure { get; set; }
        };

    }

}
