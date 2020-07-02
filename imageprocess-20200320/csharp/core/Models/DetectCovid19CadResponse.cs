// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Imageprocess20200320.Models
{
    public class DetectCovid19CadResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public DetectCovid19CadResponseData Data { get; set; }
        public class DetectCovid19CadResponseData : TeaModel {
            [NameInMap("NewProbability")]
            [Validation(Required=true)]
            public string NewProbability { get; set; }
            [NameInMap("NormalProbability")]
            [Validation(Required=true)]
            public string NormalProbability { get; set; }
            [NameInMap("OtherProbability")]
            [Validation(Required=true)]
            public string OtherProbability { get; set; }
            [NameInMap("LesionRatio")]
            [Validation(Required=true)]
            public string LesionRatio { get; set; }
            [NameInMap("Mask")]
            [Validation(Required=true)]
            public string Mask { get; set; }
        };

    }

}
