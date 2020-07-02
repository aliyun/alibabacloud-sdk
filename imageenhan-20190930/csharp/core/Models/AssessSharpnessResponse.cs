// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Imageenhan20190930.Models
{
    public class AssessSharpnessResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public AssessSharpnessResponseData Data { get; set; }
        public class AssessSharpnessResponseData : TeaModel {
            [NameInMap("Sharpness")]
            [Validation(Required=true)]
            public float? Sharpness { get; set; }
        };

    }

}
