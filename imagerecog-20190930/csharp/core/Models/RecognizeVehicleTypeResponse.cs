// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Imagerecog20190930.Models
{
    public class RecognizeVehicleTypeResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public RecognizeVehicleTypeResponseData Data { get; set; }
        public class RecognizeVehicleTypeResponseData : TeaModel {
            [NameInMap("Threshold")]
            [Validation(Required=true)]
            public float? Threshold { get; set; }
            [NameInMap("Elements")]
            [Validation(Required=true)]
            public List<RecognizeVehicleTypeResponseDataElements> Elements { get; set; }
            public class RecognizeVehicleTypeResponseDataElements : TeaModel {
                    public string Name { get; set; }
                    public float? Score { get; set; }
            }
        };

    }

}
