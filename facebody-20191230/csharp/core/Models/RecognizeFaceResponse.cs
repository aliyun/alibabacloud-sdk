// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Facebody.Models
{
    public class RecognizeFaceResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public RecognizeFaceResponseData Data { get; set; }
        public class RecognizeFaceResponseData : TeaModel {
            [NameInMap("FaceCount")]
            [Validation(Required=true)]
            public int? FaceCount { get; set; }
            [NameInMap("LandmarkCount")]
            [Validation(Required=true)]
            public int? LandmarkCount { get; set; }
            [NameInMap("DenseFeatureLength")]
            [Validation(Required=true)]
            public int? DenseFeatureLength { get; set; }
            [NameInMap("FaceRectangles")]
            [Validation(Required=true)]
            public List<RecognizeFaceResponseDataFaceRectangles> FaceRectangles { get; set; }
            public class RecognizeFaceResponseDataFaceRectangles : TeaModel {
                    public int? FaceRectangle { get; set; }
            }
            [NameInMap("FaceProbabilityList")]
            [Validation(Required=true)]
            public List<RecognizeFaceResponseDataFaceProbabilityList> FaceProbabilityList { get; set; }
            public class RecognizeFaceResponseDataFaceProbabilityList : TeaModel {
                    public float? FaceProbability { get; set; }
            }
            [NameInMap("PoseList")]
            [Validation(Required=true)]
            public List<RecognizeFaceResponseDataPoseList> PoseList { get; set; }
            public class RecognizeFaceResponseDataPoseList : TeaModel {
                    public float? Pose { get; set; }
            }
            [NameInMap("Landmarks")]
            [Validation(Required=true)]
            public List<RecognizeFaceResponseDataLandmarks> Landmarks { get; set; }
            public class RecognizeFaceResponseDataLandmarks : TeaModel {
                    public float? Landmark { get; set; }
            }
            [NameInMap("Pupils")]
            [Validation(Required=true)]
            public List<RecognizeFaceResponseDataPupils> Pupils { get; set; }
            public class RecognizeFaceResponseDataPupils : TeaModel {
                    public float? Pupil { get; set; }
            }
            [NameInMap("GenderList")]
            [Validation(Required=true)]
            public List<RecognizeFaceResponseDataGenderList> GenderList { get; set; }
            public class RecognizeFaceResponseDataGenderList : TeaModel {
                    public int? Gender { get; set; }
            }
            [NameInMap("AgeList")]
            [Validation(Required=true)]
            public List<RecognizeFaceResponseDataAgeList> AgeList { get; set; }
            public class RecognizeFaceResponseDataAgeList : TeaModel {
                    public int? Age { get; set; }
            }
            [NameInMap("Expressions")]
            [Validation(Required=true)]
            public List<RecognizeFaceResponseDataExpressions> Expressions { get; set; }
            public class RecognizeFaceResponseDataExpressions : TeaModel {
                    public int? Expression { get; set; }
            }
            [NameInMap("Glasses")]
            [Validation(Required=true)]
            public List<RecognizeFaceResponseDataGlasses> Glasses { get; set; }
            public class RecognizeFaceResponseDataGlasses : TeaModel {
                    public int? Glass { get; set; }
            }
            [NameInMap("DenseFeatures")]
            [Validation(Required=true)]
            public List<RecognizeFaceResponseDataDenseFeatures> DenseFeatures { get; set; }
            public class RecognizeFaceResponseDataDenseFeatures : TeaModel {
                    public string DenseFeature { get; set; }
            }
        };

    }

}
