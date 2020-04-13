// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Imageseg20191230.Models
{
    public class SegmentFaceResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public SegmentFaceResponseData Data { get; set; }
        public class SegmentFaceResponseData : TeaModel {
            [NameInMap("Elements")]
            [Validation(Required=true)]
            public List<SegmentFaceResponseDataElements> Elements { get; set; }
            public class SegmentFaceResponseDataElements : TeaModel {
                    public string ImageURL { get; set; }
                    public int? X { get; set; }
                    public int? Y { get; set; }
                    public int? Width { get; set; }
                    public int? Height { get; set; }
            }
        };

    }

}
