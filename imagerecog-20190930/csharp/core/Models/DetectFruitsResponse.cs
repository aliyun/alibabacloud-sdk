// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Imagerecog20190930.Models
{
    public class DetectFruitsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public DetectFruitsResponseData Data { get; set; }
        public class DetectFruitsResponseData : TeaModel {
            [NameInMap("Elements")]
            [Validation(Required=true)]
            public List<DetectFruitsResponseDataElements> Elements { get; set; }
            public class DetectFruitsResponseDataElements : TeaModel {
                    public string Name { get; set; }
                    public string Score { get; set; }
                    public List<string> Box { get; set; }
            }
        };

    }

}
