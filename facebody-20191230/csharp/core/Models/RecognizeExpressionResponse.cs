// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Facebody20191230.Models
{
    public class RecognizeExpressionResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public RecognizeExpressionResponseData Data { get; set; }
        public class RecognizeExpressionResponseData : TeaModel {
            [NameInMap("Elements")]
            [Validation(Required=true)]
            public List<RecognizeExpressionResponseDataElements> Elements { get; set; }
            public class RecognizeExpressionResponseDataElements : TeaModel {
                    public string Expression { get; set; }
                    public float? FaceProbability { get; set; }
                    public RecognizeExpressionResponseDataElementsFaceRectangle FaceRectangle { get; set; }
                    public class RecognizeExpressionResponseDataElementsFaceRectangle : TeaModel {
                        [NameInMap("Height")]
                        [Validation(Required=true)]
                        public int? Height { get; set; }

                        [NameInMap("Left")]
                        [Validation(Required=true)]
                        public int? Left { get; set; }

                        [NameInMap("Top")]
                        [Validation(Required=true)]
                        public int? Top { get; set; }

                        [NameInMap("Width")]
                        [Validation(Required=true)]
                        public int? Width { get; set; }

                    }
            }
        };

    }

}
