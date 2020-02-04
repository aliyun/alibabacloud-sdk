// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Imageseg.Models
{
    public class SegmentHeadResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public SegmentHeadResponseData Data { get; set; }
        public class SegmentHeadResponseData : TeaModel {
            [NameInMap("Elements")]
            [Validation(Required=true)]
            public List<SegmentHeadResponseDataElements> Elements { get; set; }
            public class SegmentHeadResponseDataElements : TeaModel {
                    public string ImageURL { get; set; }
                    public int? X { get; set; }
                    public int? Y { get; set; }
                    public int? Width { get; set; }
                    public int? Height { get; set; }
            }
        };

    }

}
