// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Objectdet.Models
{
    public class ClassifyVehicleInsuranceResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public ClassifyVehicleInsuranceResponseData Data { get; set; }
        public class ClassifyVehicleInsuranceResponseData : TeaModel {
            [NameInMap("Threshold")]
            [Validation(Required=true)]
            public float? Threshold { get; set; }
            [NameInMap("Labels")]
            [Validation(Required=true)]
            public List<ClassifyVehicleInsuranceResponseDataLabels> Labels { get; set; }
            public class ClassifyVehicleInsuranceResponseDataLabels : TeaModel {
                    public float? Score { get; set; }
                    public string Name { get; set; }
            }
        };

    }

}
