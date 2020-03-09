// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Objectdet.Models
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
                    public List<RecognizeVehiclePartsResponseDataElementsBoxes> Boxes { get; set; }
                    public class RecognizeVehiclePartsResponseDataElementsBoxes : TeaModel {
                            public int? Box { get; set; }
                    }
            }
            [NameInMap("OriginShapes")]
            [Validation(Required=true)]
            public List<RecognizeVehiclePartsResponseDataOriginShapes> OriginShapes { get; set; }
            public class RecognizeVehiclePartsResponseDataOriginShapes : TeaModel {
                    public int? OriginShape { get; set; }
            }
        };

    }

}
