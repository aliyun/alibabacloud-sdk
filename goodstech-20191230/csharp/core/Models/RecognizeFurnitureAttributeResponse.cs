// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Goodstech.Models
{
    public class RecognizeFurnitureAttributeResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public RecognizeFurnitureAttributeResponseData Data { get; set; }
        public class RecognizeFurnitureAttributeResponseData : TeaModel {
            [NameInMap("PredStyleId")]
            [Validation(Required=true)]
            public string PredStyleId { get; set; }
            [NameInMap("PredStyle")]
            [Validation(Required=true)]
            public string PredStyle { get; set; }
            [NameInMap("PredProbability")]
            [Validation(Required=true)]
            public float? PredProbability { get; set; }
        };

    }

}
