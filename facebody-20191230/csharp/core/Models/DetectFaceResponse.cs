// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Facebody.Models
{
    public class DetectFaceResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public DetectFaceResponseData Data { get; set; }
        public class DetectFaceResponseData : TeaModel {
            [NameInMap("FaceCount")]
            [Validation(Required=true)]
            public int? FaceCount { get; set; }
            [NameInMap("LandmarkCount")]
            [Validation(Required=true)]
            public int? LandmarkCount { get; set; }
            [NameInMap("FaceRectangles")]
            [Validation(Required=true)]
            public List<DetectFaceResponseDataFaceRectangles> FaceRectangles { get; set; }
            public class DetectFaceResponseDataFaceRectangles : TeaModel {
                    public int? FaceRectangle { get; set; }
            }
            [NameInMap("FaceProbabilityList")]
            [Validation(Required=true)]
            public List<DetectFaceResponseDataFaceProbabilityList> FaceProbabilityList { get; set; }
            public class DetectFaceResponseDataFaceProbabilityList : TeaModel {
                    public float? FaceProbability { get; set; }
            }
            [NameInMap("PoseList")]
            [Validation(Required=true)]
            public List<DetectFaceResponseDataPoseList> PoseList { get; set; }
            public class DetectFaceResponseDataPoseList : TeaModel {
                    public float? Pose { get; set; }
            }
            [NameInMap("Landmarks")]
            [Validation(Required=true)]
            public List<DetectFaceResponseDataLandmarks> Landmarks { get; set; }
            public class DetectFaceResponseDataLandmarks : TeaModel {
                    public float? Landmark { get; set; }
            }
            [NameInMap("Pupils")]
            [Validation(Required=true)]
            public List<DetectFaceResponseDataPupils> Pupils { get; set; }
            public class DetectFaceResponseDataPupils : TeaModel {
                    public float? Pupil { get; set; }
            }
        };

    }

}
