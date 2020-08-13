// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Imageprocess20200320.Models
{
    public class DetectSpineMRIResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public DetectSpineMRIResponseData Data { get; set; }
        public class DetectSpineMRIResponseData : TeaModel {
            [NameInMap("Discs")]
            [Validation(Required=true)]
            public List<DetectSpineMRIResponseDataDiscs> Discs { get; set; }
            public class DetectSpineMRIResponseDataDiscs : TeaModel {
                    public string Disease { get; set; }
                    public string Identification { get; set; }
                    public List<string> Location { get; set; }
            }
            [NameInMap("Vertebras")]
            [Validation(Required=true)]
            public List<DetectSpineMRIResponseDataVertebras> Vertebras { get; set; }
            public class DetectSpineMRIResponseDataVertebras : TeaModel {
                    public string Disease { get; set; }
                    public string Identification { get; set; }
                    public List<string> Location { get; set; }
            }
        };

    }

}
