// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Imageseg20191230.Models
{
    public class SegmentFurnitureResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public SegmentFurnitureResponseData Data { get; set; }
        public class SegmentFurnitureResponseData : TeaModel {
            [NameInMap("Elements")]
            [Validation(Required=true)]
            public List<SegmentFurnitureResponseDataElements> Elements { get; set; }
            public class SegmentFurnitureResponseDataElements : TeaModel {
                    public string ImageURL { get; set; }
            }
        };

    }

}
