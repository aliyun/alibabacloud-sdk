// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Facebody20191230.Models
{
    public class DetectMaskResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public DetectMaskResponseData Data { get; set; }
        public class DetectMaskResponseData : TeaModel {
            [NameInMap("Mask")]
            [Validation(Required=true)]
            public int? Mask { get; set; }
            [NameInMap("FaceProbability")]
            [Validation(Required=true)]
            public float? FaceProbability { get; set; }
        };

    }

}
