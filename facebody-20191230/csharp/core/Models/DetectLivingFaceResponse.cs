// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Facebody.Models
{
    public class DetectLivingFaceResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public DetectLivingFaceResponseData Data { get; set; }
        public class DetectLivingFaceResponseData : TeaModel {
            [NameInMap("Elements")]
            [Validation(Required=true)]
            public List<DetectLivingFaceResponseDataElements> Elements { get; set; }
            public class DetectLivingFaceResponseDataElements : TeaModel {
                    public string TaskId { get; set; }
                    public string ImageURL { get; set; }
                    public List<DetectLivingFaceResponseDataElementsResults> Results { get; set; }
                    public class DetectLivingFaceResponseDataElementsResults : TeaModel {
                            public string Label { get; set; }
                            public string Suggestion { get; set; }
                            public float Rate { get; set; }
                            public List<DetectLivingFaceResponseDataElementsResultsFrames> Frames { get; set; }
                            public class DetectLivingFaceResponseDataElementsResultsFrames : TeaModel {
                                    public float Rate { get; set; }
                                    public string Url { get; set; }
                            }
                    }
            }
        };

    }

}
