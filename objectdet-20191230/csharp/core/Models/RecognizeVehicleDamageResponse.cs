// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Objectdet20191230.Models
{
    public class RecognizeVehicleDamageResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public RecognizeVehicleDamageResponseData Data { get; set; }
        public class RecognizeVehicleDamageResponseData : TeaModel {
            [NameInMap("Elements")]
            [Validation(Required=true)]
            public List<RecognizeVehicleDamageResponseDataElements> Elements { get; set; }
            public class RecognizeVehicleDamageResponseDataElements : TeaModel {
                    public float? Score { get; set; }
                    public string Type { get; set; }
                    public List<string> Scores { get; set; }
                    public List<string> Boxes { get; set; }
            }
        };

    }

}
