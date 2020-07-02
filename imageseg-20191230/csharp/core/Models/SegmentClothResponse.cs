// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Imageseg20191230.Models
{
    public class SegmentClothResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public SegmentClothResponseData Data { get; set; }
        public class SegmentClothResponseData : TeaModel {
            [NameInMap("Elements")]
            [Validation(Required=true)]
            public List<SegmentClothResponseDataElements> Elements { get; set; }
            public class SegmentClothResponseDataElements : TeaModel {
                    public string ImageURL { get; set; }
            }
        };

    }

}
