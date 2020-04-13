// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Goodstech20191230.Models
{
    public class RecognizeFurnitureSpuResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public RecognizeFurnitureSpuResponseData Data { get; set; }
        public class RecognizeFurnitureSpuResponseData : TeaModel {
            [NameInMap("PredCateId")]
            [Validation(Required=true)]
            public string PredCateId { get; set; }
            [NameInMap("PredCate")]
            [Validation(Required=true)]
            public string PredCate { get; set; }
            [NameInMap("PredProbability")]
            [Validation(Required=true)]
            public float? PredProbability { get; set; }
        };

    }

}
