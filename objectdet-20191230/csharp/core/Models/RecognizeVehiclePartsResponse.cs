// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Objectdet20191230.Models
{
    public class RecognizeVehiclePartsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public RecognizeVehiclePartsResponseData Data { get; set; }
        public class RecognizeVehiclePartsResponseData : TeaModel {
            [NameInMap("Elements")]
            [Validation(Required=true)]
            public List<RecognizeVehiclePartsResponseDataElements> Elements { get; set; }
            public class RecognizeVehiclePartsResponseDataElements : TeaModel {
                    public float? Score { get; set; }
                    public string Type { get; set; }
                    public List<string> Boxes { get; set; }
            }
            [NameInMap("OriginShapes")]
            [Validation(Required=true)]
            public List<string> OriginShapes { get; set; }
        };

    }

}
