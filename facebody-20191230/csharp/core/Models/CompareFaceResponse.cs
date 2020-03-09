// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Facebody.Models
{
    public class CompareFaceResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public CompareFaceResponseData Data { get; set; }
        public class CompareFaceResponseData : TeaModel {
            [NameInMap("Confidence")]
            [Validation(Required=true)]
            public float? Confidence { get; set; }
            [NameInMap("Thresholds")]
            [Validation(Required=true)]
            public List<CompareFaceResponseDataThresholds> Thresholds { get; set; }
            public class CompareFaceResponseDataThresholds : TeaModel {
                    public float? Threshold { get; set; }
            }
            [NameInMap("RectAList")]
            [Validation(Required=true)]
            public List<CompareFaceResponseDataRectAList> RectAList { get; set; }
            public class CompareFaceResponseDataRectAList : TeaModel {
                    public int? RectA { get; set; }
            }
            [NameInMap("RectBList")]
            [Validation(Required=true)]
            public List<CompareFaceResponseDataRectBList> RectBList { get; set; }
            public class CompareFaceResponseDataRectBList : TeaModel {
                    public int? RectB { get; set; }
            }
        };

    }

}
