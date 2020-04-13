// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ocr20191230.Models
{
    public class RecognizeIdentityCardResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public RecognizeIdentityCardResponseData Data { get; set; }
        public class RecognizeIdentityCardResponseData : TeaModel {
            [NameInMap("FrontResult")]
            [Validation(Required=true)]
            public RecognizeIdentityCardResponseDataFrontResult FrontResult { get; set; }
            public class RecognizeIdentityCardResponseDataFrontResult : TeaModel {
                [NameInMap("Address")]
                [Validation(Required=true)]
                public string Address { get; set; }

                [NameInMap("Name")]
                [Validation(Required=true)]
                public string Name { get; set; }

                [NameInMap("Nationality")]
                [Validation(Required=true)]
                public string Nationality { get; set; }

                [NameInMap("IDNumber")]
                [Validation(Required=true)]
                public string IDNumber { get; set; }

                [NameInMap("Gender")]
                [Validation(Required=true)]
                public string Gender { get; set; }

                [NameInMap("BirthDate")]
                [Validation(Required=true)]
                public string BirthDate { get; set; }

                [NameInMap("CardAreas")]
                [Validation(Required=true)]
                public List<RecognizeIdentityCardResponseDataFrontResultCardAreas> CardAreas { get; set; }
                public class RecognizeIdentityCardResponseDataFrontResultCardAreas : TeaModel {
                    [NameInMap("X")]
                    [Validation(Required=true)]
                    public float? X { get; set; }

                    [NameInMap("Y")]
                    [Validation(Required=true)]
                    public float? Y { get; set; }

                }

                [NameInMap("FaceRectVertices")]
                [Validation(Required=true)]
                public List<RecognizeIdentityCardResponseDataFrontResultFaceRectVertices> FaceRectVertices { get; set; }
                public class RecognizeIdentityCardResponseDataFrontResultFaceRectVertices : TeaModel {
                    [NameInMap("X")]
                    [Validation(Required=true)]
                    public float? X { get; set; }

                    [NameInMap("Y")]
                    [Validation(Required=true)]
                    public float? Y { get; set; }

                }

                [NameInMap("FaceRectangle")]
                [Validation(Required=true)]
                public RecognizeIdentityCardResponseDataFrontResultFaceRectangle FaceRectangle { get; set; }
                public class RecognizeIdentityCardResponseDataFrontResultFaceRectangle : TeaModel {
                    [NameInMap("Angle")]
                    [Validation(Required=true)]
                    public float? Angle { get; set; }
                    [NameInMap("Center")]
                    [Validation(Required=true)]
                    public RecognizeIdentityCardResponseDataFrontResultFaceRectangleCenter Center { get; set; }
                    public class RecognizeIdentityCardResponseDataFrontResultFaceRectangleCenter : TeaModel {
                        [NameInMap("X")]
                        [Validation(Required=true)]
                        public float? X { get; set; }

                        [NameInMap("Y")]
                        [Validation(Required=true)]
                        public float? Y { get; set; }

                    }
                    [NameInMap("Size")]
                    [Validation(Required=true)]
                    public RecognizeIdentityCardResponseDataFrontResultFaceRectangleSize Size { get; set; }
                    public class RecognizeIdentityCardResponseDataFrontResultFaceRectangleSize : TeaModel {
                        [NameInMap("Height")]
                        [Validation(Required=true)]
                        public float? Height { get; set; }

                        [NameInMap("Width")]
                        [Validation(Required=true)]
                        public float? Width { get; set; }

                    }
                };

            }
            [NameInMap("BackResult")]
            [Validation(Required=true)]
            public RecognizeIdentityCardResponseDataBackResult BackResult { get; set; }
            public class RecognizeIdentityCardResponseDataBackResult : TeaModel {
                [NameInMap("StartDate")]
                [Validation(Required=true)]
                public string StartDate { get; set; }

                [NameInMap("EndDate")]
                [Validation(Required=true)]
                public string EndDate { get; set; }

                [NameInMap("Issue")]
                [Validation(Required=true)]
                public string Issue { get; set; }

            }
        };

    }

}
