// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Facebody20191230.Models
{
    public class VerifyFaceMaskResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public VerifyFaceMaskResponseData Data { get; set; }
        public class VerifyFaceMaskResponseData : TeaModel {
            [NameInMap("Confidence")]
            [Validation(Required=true)]
            public float? Confidence { get; set; }
            [NameInMap("Mask")]
            [Validation(Required=true)]
            public int? Mask { get; set; }
            [NameInMap("MaskRef")]
            [Validation(Required=true)]
            public int? MaskRef { get; set; }
            [NameInMap("Rectangle")]
            [Validation(Required=true)]
            public List<string> Rectangle { get; set; }
            [NameInMap("RectangleRef")]
            [Validation(Required=true)]
            public List<string> RectangleRef { get; set; }
            [NameInMap("Thresholds")]
            [Validation(Required=true)]
            public List<string> Thresholds { get; set; }
        };

    }

}
