// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Ocr.Models
{
    public class RecognizePassportMRZResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public RecognizePassportMRZResponseData Data { get; set; }
        public class RecognizePassportMRZResponseData : TeaModel {
            [NameInMap("Regions")]
            [Validation(Required=true)]
            public List<RecognizePassportMRZResponseDataRegions> Regions { get; set; }
            public class RecognizePassportMRZResponseDataRegions : TeaModel {
                    public string Name { get; set; }
                    public float? RecognitionScore { get; set; }
                    public string Content { get; set; }
                    public float? DetectionScore { get; set; }
                    public List<string> BandBoxes { get; set; }
            }
        };

    }

}
