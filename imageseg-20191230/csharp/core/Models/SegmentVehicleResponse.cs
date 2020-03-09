// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Imageseg.Models
{
    public class SegmentVehicleResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public SegmentVehicleResponseData Data { get; set; }
        public class SegmentVehicleResponseData : TeaModel {
            [NameInMap("Elements")]
            [Validation(Required=true)]
            public List<SegmentVehicleResponseDataElements> Elements { get; set; }
            public class SegmentVehicleResponseDataElements : TeaModel {
                    public string OriginImageURL { get; set; }
                    public string ImageURL { get; set; }
            }
        };

    }

}
