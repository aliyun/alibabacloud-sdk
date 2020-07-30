// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Facebody20191230.Models
{
    public class DetectCelebrityResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public DetectCelebrityResponseData Data { get; set; }
        public class DetectCelebrityResponseData : TeaModel {
            [NameInMap("Width")]
            [Validation(Required=true)]
            public int? Width { get; set; }
            [NameInMap("Height")]
            [Validation(Required=true)]
            public int? Height { get; set; }
            [NameInMap("FaceRecognizeResults")]
            [Validation(Required=true)]
            public List<DetectCelebrityResponseDataFaceRecognizeResults> FaceRecognizeResults { get; set; }
            public class DetectCelebrityResponseDataFaceRecognizeResults : TeaModel {
                    public string Name { get; set; }
                    public List<string> FaceBoxes { get; set; }
            }
        };

    }

}
