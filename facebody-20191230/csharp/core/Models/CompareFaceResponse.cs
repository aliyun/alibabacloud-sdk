// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Facebody20191230.Models
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
            public List<string> Thresholds { get; set; }
            [NameInMap("RectAList")]
            [Validation(Required=true)]
            public List<string> RectAList { get; set; }
            [NameInMap("RectBList")]
            [Validation(Required=true)]
            public List<string> RectBList { get; set; }
        };

    }

}
