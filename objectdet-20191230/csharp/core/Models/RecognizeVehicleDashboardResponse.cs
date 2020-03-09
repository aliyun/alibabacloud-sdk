// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Objectdet.Models
{
    public class RecognizeVehicleDashboardResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public RecognizeVehicleDashboardResponseData Data { get; set; }
        public class RecognizeVehicleDashboardResponseData : TeaModel {
            [NameInMap("Elements")]
            [Validation(Required=true)]
            public List<RecognizeVehicleDashboardResponseDataElements> Elements { get; set; }
            public class RecognizeVehicleDashboardResponseDataElements : TeaModel {
                    public float? Score { get; set; }
                    public string ClassName { get; set; }
                    public string Label { get; set; }
                    public List<RecognizeVehicleDashboardResponseDataElementsBoxes> Boxes { get; set; }
                    public class RecognizeVehicleDashboardResponseDataElementsBoxes : TeaModel {
                            public float? Box { get; set; }
                    }
            }
        };

    }

}
